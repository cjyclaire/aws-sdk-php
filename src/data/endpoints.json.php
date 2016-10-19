<?php
// This file was auto-generated from sdk-root/src/data/endpoints.json
return [ 'version' => 3, 'partitions' => [ [ 'partition' => 'aws', 'partitionName' => 'AWS Standard', 'dnsSuffix' => 'amazonaws.com', 'regionRegex' => '^(us|eu|ap|sa|ca)\\-\\w+\\-\\d+$', 'defaults' => [ 'hostname' => '{service}.{region}.{dnsSuffix}', 'protocols' => [ 'https', ], 'signatureVersions' => [ 'v4', ], ], 'regions' => [ 'us-east-1' => [ 'description' => 'US East (N. Virginia)', ], 'us-east-2' => [ 'description' => 'US East (Ohio)', ], 'us-west-1' => [ 'description' => 'US West (N. California)', ], 'us-west-2' => [ 'description' => 'US West (Oregon)', ], 'ap-northeast-1' => [ 'description' => 'Asia Pacific (Tokyo)', ], 'ap-northeast-2' => [ 'description' => 'Asia Pacific (Seoul)', ], 'ap-south-1' => [ 'description' => 'Asia Pacific (Mumbai)', ], 'ap-southeast-1' => [ 'description' => 'Asia Pacific (Singapore)', ], 'ap-southeast-2' => [ 'description' => 'Asia Pacific (Sydney)', ], 'sa-east-1' => [ 'description' => 'South America (Sao Paulo)', ], 'eu-west-1' => [ 'description' => 'EU (Ireland)', ], 'eu-central-1' => [ 'description' => 'EU (Frankfurt)', ], ], 'services' => [ 'acm' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], ], ], 'apigateway' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-2' => [], 'eu-west-1' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-central-1' => [], ], ], 'application-autoscaling' => [ 'defaults' => [ 'hostname' => 'autoscaling.{region}.amazonaws.com', 'credentialScope' => [ 'service' => 'application-autoscaling', ], 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'ap-northeast-1' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'appstream' => [ 'endpoints' => [ 'us-east-1' => [], 'ap-northeast-1' => [], ], ], 'autoscaling' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'cloudformation' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'cloudfront' => [ 'partitionEndpoint' => 'aws-global', 'isRegionalized' => false, 'endpoints' => [ 'aws-global' => [ 'hostname' => 'cloudfront.amazonaws.com', 'protocols' => [ 'http', 'https', ], 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], ], 'cloudhsm' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'cloudsearch' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'cloudtrail' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'codecommit' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], ], ], 'codedeploy' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'sa-east-1' => [], ], ], 'codepipeline' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-2' => [], ], ], 'cognito-identity' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], ], ], 'cognito-idp' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], ], ], 'cognito-sync' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], ], ], 'config' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'datapipeline' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], ], ], 'data.iot' => [ 'defaults' => [ 'protocols' => [ 'https', 'mqqt', ], 'credentialScope' => [ 'service' => 'iotdata', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'devicefarm' => [ 'endpoints' => [ 'us-west-2' => [], ], ], 'directconnect' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'discovery' => [ 'endpoints' => [ 'us-west-2' => [], ], ], 'dms' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'ds' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'dynamodb' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'local' => [ 'hostname' => 'localhost:8000', 'protocols' => [ 'http', ], 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], ], 'ec2' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'ecs' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'ecr' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'elasticache' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'elasticbeanstalk' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'elasticfilesystem' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'eu-west-1' => [], ], ], 'elasticloadbalancing' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'elasticmapreduce' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'sslCommonName' => '{region}.{service}.{dnsSuffix}', ], 'endpoints' => [ 'us-east-1' => [ 'sslCommonName' => '{service}.{region}.{dnsSuffix}', ], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [ 'sslCommonName' => '{service}.{region}.{dnsSuffix}', ], ], ], 'elastictranscoder' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], ], ], 'email' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'eu-west-1' => [], ], ], 'es' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'sa-east-1' => [], ], ], 'events' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'sa-east-1' => [], ], ], 'firehose' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'eu-west-1' => [], ], ], 'gamelift' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'eu-west-1' => [], 'ap-northeast-1' => [], ], ], 'glacier' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'iam' => [ 'partitionEndpoint' => 'aws-global', 'isRegionalized' => false, 'endpoints' => [ 'aws-global' => [ 'hostname' => 'iam.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], ], 'importexport' => [ 'partitionEndpoint' => 'aws-global', 'isRegionalized' => false, 'endpoints' => [ 'aws-global' => [ 'hostname' => 'importexport.amazonaws.com', 'signatureVersions' => [ 'v2', 'v4', ], 'credentialScope' => [ 'service' => 'IngestionService', 'region' => 'us-east-1', ], ], ], ], 'inspector' => [ 'endpoints' => [ 'us-west-2' => [], 'us-east-1' => [], 'eu-west-1' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], ], ], 'iot' => [ 'defaults' => [ 'credentialScope' => [ 'service' => 'execute-api', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'kinesis' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'sa-east-1' => [], ], ], 'kinesisanalytics' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'eu-west-1' => [], ], ], 'kms' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'lambda' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'logs' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], 'sa-east-1' => [], ], ], 'machinelearning' => [ 'endpoints' => [ 'us-east-1' => [], 'eu-west-1' => [], ], ], 'marketplacecommerceanalytics' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], ], ], 'metering.marketplace' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], ], ], 'mobileanalytics' => [ 'endpoints' => [ 'us-east-1' => [], ], ], 'monitoring' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'opsworks' => [ 'endpoints' => [ 'us-east-1' => [], ], ], 'rds' => [ 'endpoints' => [ 'us-east-1' => [ 'sslCommonName' => '{service}.{dnsSuffix}', ], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'redshift' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'route53' => [ 'partitionEndpoint' => 'aws-global', 'isRegionalized' => false, 'endpoints' => [ 'aws-global' => [ 'hostname' => 'route53.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], ], 'route53domains' => [ 'endpoints' => [ 'us-east-1' => [], ], ], 's3' => [ 'partitionEndpoint' => 'us-east-1', 'isRegionalized' => true, 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'signatureVersions' => [ 's3v4', ], ], 'endpoints' => [ 'us-east-1' => [ 'hostname' => 's3.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'us-east-2' => [], 's3-external-1' => [ 'credentialScope' => [ 'region' => 'us-east-1', ], 'hostname' => 's3-external-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'us-west-1' => [ 'hostname' => 's3-us-west-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'us-west-2' => [ 'hostname' => 's3-us-west-2.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'ap-northeast-1' => [ 'hostname' => 's3-ap-northeast-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'ap-northeast-2' => [], 'ap-south-1' => [ 'hostname' => 's3-ap-south-1.amazonaws.com', ], 'ap-southeast-1' => [ 'hostname' => 's3-ap-southeast-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'ap-southeast-2' => [ 'hostname' => 's3-ap-southeast-2.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'sa-east-1' => [ 'hostname' => 's3-sa-east-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'eu-west-1' => [ 'hostname' => 's3-eu-west-1.amazonaws.com', 'signatureVersions' => [ 's3', 's3v4', ], ], 'eu-central-1' => [], ], ], 'sdb' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [ 'hostname' => 'sdb.amazonaws.com', ], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], ], ], 'servicecatalog' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'eu-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-central-1' => [], ], ], 'snowball' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-south-1' => [], 'ap-southeast-2' => [], 'eu-central-1' => [], 'eu-west-1' => [], ], ], 'sns' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'sqs' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'sslCommonName' => '{region}.queue.{dnsSuffix}', ], 'endpoints' => [ 'us-east-1' => [ 'sslCommonName' => 'queue.{dnsSuffix}', ], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'ssm' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-1' => [], 'us-west-2' => [], 'eu-central-1' => [], 'eu-west-1' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], ], ], 'storagegateway' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'streams.dynamodb' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'credentialScope' => [ 'service' => 'dynamodb', ], ], 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'sts' => [ 'defaults' => [ 'hostname' => 'sts.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], ], 'partitionEndpoint' => 'aws-global', 'endpoints' => [ 'aws-global' => [], 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [ 'hostname' => 'sts.ap-northeast-2.amazonaws.com', 'credentialScope' => [ 'region' => 'ap-northeast-2', ], ], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'support' => [ 'endpoints' => [ 'us-east-1' => [], ], ], 'swf' => [ 'endpoints' => [ 'us-east-1' => [], 'us-east-2' => [], 'us-west-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-northeast-2' => [], 'ap-south-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'sa-east-1' => [], 'eu-west-1' => [], 'eu-central-1' => [], ], ], 'waf' => [ 'partitionEndpoint' => 'aws-global', 'isRegionalized' => false, 'endpoints' => [ 'aws-global' => [ 'hostname' => 'waf.amazonaws.com', 'credentialScope' => [ 'region' => 'us-east-1', ], ], ], ], 'workspaces' => [ 'endpoints' => [ 'us-east-1' => [], 'us-west-2' => [], 'ap-northeast-1' => [], 'ap-southeast-1' => [], 'ap-southeast-2' => [], 'eu-west-1' => [], ], ], ], ], [ 'partition' => 'aws-cn', 'partitionName' => 'AWS China', 'dnsSuffix' => 'amazonaws.com.cn', 'regionRegex' => '^cn\\-\\w+\\-\\d+$', 'defaults' => [ 'hostname' => '{service}.{region}.{dnsSuffix}', 'protocols' => [ 'https', ], 'signatureVersions' => [ 'v4', ], ], 'regions' => [ 'cn-north-1' => [ 'description' => 'China (Beijing)', ], ], 'services' => [ 'autoscaling' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'cloudformation' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'cloudtrail' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'directconnect' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'dynamodb' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'ec2' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'elasticache' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'elasticbeanstalk' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'elasticloadbalancing' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'elasticmapreduce' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'glacier' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'iam' => [ 'partitionEndpoint' => 'aws-cn-global', 'isRegionalized' => false, 'endpoints' => [ 'aws-cn-global' => [ 'hostname' => 'iam.cn-north-1.amazonaws.com.cn', 'credentialScope' => [ 'region' => 'cn-north-1', ], ], ], ], 'kinesis' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'monitoring' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'rds' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 's3' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'signatureVersions' => [ 's3v4', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'sns' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'sqs' => [ 'defaults' => [ 'sslCommonName' => '{region}.queue.{dnsSuffix}', 'protocols' => [ 'http', 'https', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'storagegateway' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'streams.dynamodb' => [ 'defaults' => [ 'protocols' => [ 'http', 'https', ], 'credentialScope' => [ 'service' => 'dynamodb', ], ], 'endpoints' => [ 'cn-north-1' => [], ], ], 'sts' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], 'swf' => [ 'endpoints' => [ 'cn-north-1' => [], ], ], ], ], [ 'partition' => 'aws-us-gov', 'partitionName' => 'AWS GovCloud (US)', 'dnsSuffix' => 'amazonaws.com', 'regionRegex' => '^us\\-gov\\-\\w+\\-\\d+$', 'defaults' => [ 'hostname' => '{service}.{region}.{dnsSuffix}', 'protocols' => [ 'https', ], 'signatureVersions' => [ 'v4', ], ], 'regions' => [ 'us-gov-west-1' => [ 'description' => 'AWS GovCloud (US)', ], ], 'services' => [ 'autoscaling' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'cloudformation' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'cloudhsm' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'cloudtrail' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'dynamodb' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'streams.dynamodb' => [ 'defaults' => [ 'credentialScope' => [ 'service' => 'dynamodb', ], ], 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'ec2' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'elasticache' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'elasticloadbalancing' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'elasticmapreduce' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'glacier' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'iam' => [ 'partitionEndpoint' => 'aws-us-gov-global', 'isRegionalized' => false, 'endpoints' => [ 'aws-us-gov-global' => [ 'hostname' => 'iam.us-gov.amazonaws.com', 'credentialScope' => [ 'region' => 'us-gov-west-1', ], ], ], ], 'kms' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'monitoring' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'rds' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'redshift' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 's3' => [ 'defaults' => [ 'signatureVersions' => [ 's3', 's3v4', ], ], 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], 'hostname' => 's3-us-gov-west-1.amazonaws.com', ], 'fips-us-gov-west-1' => [ 'credentialScope' => [ 'region' => 'us-gov-west-1', ], 'hostname' => 's3-fips-us-gov-west-1.amazonaws.com', ], ], ], 'sns' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'protocols' => [ 'http', 'https', ], ], ], ], 'sqs' => [ 'endpoints' => [ 'us-gov-west-1' => [ 'sslCommonName' => '{region}.queue.{dnsSuffix}', 'protocols' => [ 'http', 'https', ], ], ], ], 'sts' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], 'swf' => [ 'endpoints' => [ 'us-gov-west-1' => [], ], ], ], ], ],];
