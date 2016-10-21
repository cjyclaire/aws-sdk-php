<?php
namespace Aws\Credentials;

use Aws;
use Aws\CacheInterface;
use Aws\Exception\CredentialsException;
use GuzzleHttp\Promise;

/**
 * Credential providers are functions that accept no arguments and return a
 * promise that is fulfilled with an {@see \Aws\Credentials\CredentialsInterface}
 * or rejected with an {@see \Aws\Exception\CredentialsException}.
 *
 * <code>
 * use Aws\Credentials\CredentialProvider;
 * $provider = CredentialProvider::defaultProvider();
 * // Returns a CredentialsInterface or throws.
 * $creds = $provider()->wait();
 * </code>
 *
 * Credential providers can be composed to create credentials using conditional
 * logic that can create different credentials in different environments. You
 * can compose multiple providers into a single provider using
 * {@see Aws\Credentials\CredentialProvider::chain}. This function accepts
 * providers as variadic arguments and returns a new function that will invoke
 * each provider until a successful set of credentials is returned.
 *
 * <code>
 * // First try an INI file at this location.
 * $a = CredentialProvider::ini(null, '/path/to/file.ini');
 * // Then try an INI file at this location.
 * $b = CredentialProvider::ini(null, '/path/to/other-file.ini');
 * // Then try loading from environment variables.
 * $c = CredentialProvider::env();
 * // Combine the three providers together.
 * $composed = CredentialProvider::chain($a, $b, $c);
 * // Returns a promise that is fulfilled with credentials or throws.
 * $promise = $composed();
 * // Wait on the credentials to resolve.
 * $creds = $promise->wait();
 * </code>
 */
class CredentialProvider
{
    const ENV_KEY = 'AWS_ACCESS_KEY_ID';
    const ENV_SECRET = 'AWS_SECRET_ACCESS_KEY';
    const ENV_SESSION = 'AWS_SESSION_TOKEN';
    const ENV_PROFILE = 'AWS_PROFILE';

    use CredentialTrait;

    /**
     * Create a default credential provider that first checks for environment
     * variables, check for assume role profile secondly, then checks for
     * the "default" profile in ~/.aws/credentials, then checks for
     * "profile default" profile in ~/.aws/config, then tries to make
     * GET Request to fetch credentials if Ecs environment variable is presented,
     * and finally checks for EC2 instance profile credentials.
     *
     * This provider is automatically wrapped in a memoize function that caches
     * previously provided credentials.
     *
     * @param array $config Optional array of instance profile credentials
     *                      provider options.
     * @return callable
     */
    public static function defaultProvider(array $config = [])
    {
        $instanceProfileProvider = self::instanceProfile($config);
        $ecsCredentialProvider = self::ecsCredentials($config);

        if (isset($config['credentials'])
            && $config['credentials'] instanceof CacheInterface
        ) {
            $instanceProfileProvider = self::cache(
                $instanceProfileProvider,
                $config['credentials']
            );
        }

        $defaultConfigFileName = self::getHomeDir() . '/.aws/config';
        return self::memoize(
            self::chain(
                self::env(),
                self::assumeRole(),
                self::assumeRole(
                    'profile assumes_role',
                    $defaultConfigFileName
                ),
                self::ini(),
                self::ini(
                    'profile default',
                    $defaultConfigFileName
                ),
                $ecsCredentialProvider,
                $instanceProfileProvider
            )
        );
    }

    /**
     * Create a credential provider function from a set of static credentials.
     *
     * @param CredentialsInterface $creds
     *
     * @return callable
     */
    public static function fromCredentials(CredentialsInterface $creds)
    {
        $promise = Promise\promise_for($creds);

        return function () use ($promise) {
            return $promise;
        };
    }

    /**
     * Creates an aggregate credentials provider that invokes the provided
     * variadic providers one after the other until a provider returns
     * credentials.
     *
     * @return callable
     */
    public static function chain()
    {
        $links = func_get_args();
        if (empty($links)) {
            throw new \InvalidArgumentException('No providers in chain');
        }

        return function () use ($links) {
            /** @var callable $parent */
            $parent = array_shift($links);
            $promise = $parent();
            while ($next = array_shift($links)) {
                $promise = $promise->otherwise($next);
            }
            return $promise;
        };
    }

    /**
     * Wraps a credential provider and caches previously provided credentials.
     *
     * Ensures that cached credentials are refreshed when they expire.
     *
     * @param callable $provider Credentials provider function to wrap.
     *
     * @return callable
     */
    public static function memoize(callable $provider)
    {
        return function () use ($provider) {
            static $result;
            static $isConstant;

            // Constant credentials will be returned constantly.
            if ($isConstant) {
                return $result;
            }

            // Create the initial promise that will be used as the cached value
            // until it expires.
            if (null === $result) {
                $result = $provider();
            }

            // Return credentials that could expire and refresh when needed.
            return $result
                ->then(function (CredentialsInterface $creds) use ($provider, &$isConstant, &$result) {
                    // Determine if these are constant credentials.
                    if (!$creds->getExpiration()) {
                        $isConstant = true;
                        return $creds;
                    }

                    // Refresh expired credentials.
                    if (!$creds->isExpired()) {
                        return $creds;
                    }
                    // Refresh the result and forward the promise.
                    return $result = $provider();
                });
        };
    }

    /**
     * Wraps a credential provider and saves provided credentials in an
     * instance of Aws\CacheInterface. Forwards calls when no credentials found
     * in cache and updates cache with the results.
     *
     * Defaults to using a simple file-based cache when none provided.
     *
     * @param callable $provider Credentials provider function to wrap
     * @param CacheInterface $cache (optional) Cache to store credentials
     * @param string|null $cacheKey (optional) Cache key to use
     *
     * @return callable
     */
    public static function cache(
        callable $provider,
        CacheInterface $cache,
        $cacheKey = null
    ) {
        $cacheKey = $cacheKey ?: 'aws_cached_credentials';

        return function () use ($provider, $cache, $cacheKey) {
            $found = $cache->get($cacheKey);
            if ($found instanceof CredentialsInterface && !$found->isExpired()) {
                return Promise\promise_for($found);
            }

            return $provider()
                ->then(function (CredentialsInterface $creds) use (
                    $cache,
                    $cacheKey
                ) {
                    $cache->set(
                        $cacheKey,
                        $creds,
                        null === $creds->getExpiration() ?
                            0 : $creds->getExpiration() - time()
                    );

                    return $creds;
                });
        };
    }

    /**
     * Provider that creates credentials from environment variables
     * AWS_ACCESS_KEY_ID, AWS_SECRET_ACCESS_KEY, and AWS_SESSION_TOKEN.
     *
     * @return callable
     */
    public static function env()
    {
        return function () {
            // Use credentials from environment variables, if available
            $key = getenv(self::ENV_KEY);
            $secret = getenv(self::ENV_SECRET);
            if ($key && $secret) {
                return Promise\promise_for(
                    new Credentials($key, $secret, getenv(self::ENV_SESSION))
                );
            }

            return self::reject('Could not find environment variable '
                . 'credentials in ' . self::ENV_KEY . '/' . self::ENV_SECRET);
        };
    }

    /**
     * Credential provider that creates credentials using instance profile
     * credentials.
     *
     * @param array $config Array of configuration data.
     *
     * @return InstanceProfileProvider
     * @see Aws\Credentials\InstanceProfileProvider for $config details.
     */
    public static function instanceProfile(array $config = [])
    {
        return new InstanceProfileProvider($config);
    }

    /**
     * Credential provider that creates credentials using
     * ecs credentials by a GET request, whose uri is specified
     * by environment variable
     *
     * @param array $config Array of configuration data.
     *
     * @return EcsCredentialProvider
     * @see Aws\Credentials\EcsCredentialProvider for $config details.
     */
    public static function ecsCredentials(array $config = [])
    {
        return new EcsCredentialProvider($config);
    }

    /**
     * Credential provider that creates credentials using assume role
     * credentials from ini profile
     *
     * @param string|null $assumeRoleProfile   Assume role profile name to be used.
     *                                         Default:
     *                                         [assumes_role] in credentials file
     *
     * @param string|null $fileName            A custom file to fetch credential from.
     *                                         Default: credential file in home directory
     * @return callable
     */
    public static function assumeRole($assumeRoleProfile = null, $fileName = null)
    {
        $fileName = $fileName ?: (self::getHomeDir() . '/.aws/credentials');
        $profile = $assumeRoleProfile ?: 'assumes_role';

        return new AssumeRoleCredentialResolver([
            'assume_role_profile' => $profile,
            'file_name' => $fileName
        ]);
    }

    /**
     * Credentials provider that creates credentials using an ini file stored
     * in the current user's home directory.
     *
     * @param string|null $profile      Profile to use. If not specified will use
     *                                  the "default" profile.
     * @param string|null $fileName     If provided, uses a custom filename rather
     *                                  than looking in the home directory.
     *                                  Default:
     *                                  - 'default' in credential file
     * @return callable
     */
    public static function ini($profile = null, $fileName = null)
    {
        $fileName = $fileName ?: (self::getHomeDir() . '/.aws/credentials');
        $profile = $profile ?: (getenv(self::ENV_PROFILE) ?: 'default');

        return function () use ($profile, $fileName) {
            $msg = self::checkProfile($profile, $fileName);
            if (!empty($msg)) {
                return self::reject($msg);
            }

            $data = self::getProfileData($profile, $fileName);
            if (!isset($data['aws_access_key_id'])
                || !isset($data['aws_secret_access_key'])
            ) {
                return self::reject("No credentials present in INI profile "
                    . "'$profile' ($fileName)");
            }

            if (empty($data['aws_session_token'])) {
                $data['aws_session_token']
                    = isset($data['aws_security_token']) ? 
                    $data['aws_security_token'] :
                    null;
            }

            return Promise\promise_for(
                new Credentials(
                    $data['aws_access_key_id'],
                    $data['aws_secret_access_key'],
                    $data['aws_session_token']
                )
            );
        };
    }
}
