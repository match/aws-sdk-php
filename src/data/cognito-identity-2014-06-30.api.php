<?php return [
  'metadata' => [
    'apiVersion' => '2014-06-30',
    'endpointPrefix' => 'cognito-identity',
    'jsonVersion' => '1.1',
    'serviceFullName' => 'Amazon Cognito Identity',
    'signatureVersion' => 'v4',
    'targetPrefix' => 'AWSCognitoIdentityService',
    'protocol' => 'json',
  ],
  'operations' => [
    'CreateIdentityPool' => [
      'name' => 'CreateIdentityPool',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'CreateIdentityPoolInput',
      ],
      'output' => [
        'shape' => 'IdentityPool',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'DeleteIdentityPool' => [
      'name' => 'DeleteIdentityPool',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DeleteIdentityPoolInput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeIdentity' => [
      'name' => 'DescribeIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeIdentityInput',
      ],
      'output' => [
        'shape' => 'IdentityDescription',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'DescribeIdentityPool' => [
      'name' => 'DescribeIdentityPool',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'DescribeIdentityPoolInput',
      ],
      'output' => [
        'shape' => 'IdentityPool',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'GetCredentialsForIdentity' => [
      'name' => 'GetCredentialsForIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetCredentialsForIdentityInput',
      ],
      'output' => [
        'shape' => 'GetCredentialsForIdentityResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InvalidIdentityPoolConfigurationException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'GetId' => [
      'name' => 'GetId',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetIdInput',
      ],
      'output' => [
        'shape' => 'GetIdResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'LimitExceededException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'GetIdentityPoolRoles' => [
      'name' => 'GetIdentityPoolRoles',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetIdentityPoolRolesInput',
      ],
      'output' => [
        'shape' => 'GetIdentityPoolRolesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'GetOpenIdToken' => [
      'name' => 'GetOpenIdToken',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetOpenIdTokenInput',
      ],
      'output' => [
        'shape' => 'GetOpenIdTokenResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'GetOpenIdTokenForDeveloperIdentity' => [
      'name' => 'GetOpenIdTokenForDeveloperIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'GetOpenIdTokenForDeveloperIdentityInput',
      ],
      'output' => [
        'shape' => 'GetOpenIdTokenForDeveloperIdentityResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
        [
          'shape' => 'DeveloperUserAlreadyRegisteredException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
      ],
    ],
    'ListIdentities' => [
      'name' => 'ListIdentities',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListIdentitiesInput',
      ],
      'output' => [
        'shape' => 'ListIdentitiesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'ListIdentityPools' => [
      'name' => 'ListIdentityPools',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'ListIdentityPoolsInput',
      ],
      'output' => [
        'shape' => 'ListIdentityPoolsResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'LookupDeveloperIdentity' => [
      'name' => 'LookupDeveloperIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'LookupDeveloperIdentityInput',
      ],
      'output' => [
        'shape' => 'LookupDeveloperIdentityResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'MergeDeveloperIdentities' => [
      'name' => 'MergeDeveloperIdentities',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'MergeDeveloperIdentitiesInput',
      ],
      'output' => [
        'shape' => 'MergeDeveloperIdentitiesResponse',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'SetIdentityPoolRoles' => [
      'name' => 'SetIdentityPoolRoles',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'SetIdentityPoolRolesInput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'UnlinkDeveloperIdentity' => [
      'name' => 'UnlinkDeveloperIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UnlinkDeveloperIdentityInput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'UnlinkIdentity' => [
      'name' => 'UnlinkIdentity',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'UnlinkIdentityInput',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
    'UpdateIdentityPool' => [
      'name' => 'UpdateIdentityPool',
      'http' => [
        'method' => 'POST',
        'requestUri' => '/',
      ],
      'input' => [
        'shape' => 'IdentityPool',
      ],
      'output' => [
        'shape' => 'IdentityPool',
      ],
      'errors' => [
        [
          'shape' => 'InvalidParameterException',
          'error' => [
            'httpStatusCode' => 400,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceNotFoundException',
          'error' => [
            'httpStatusCode' => 404,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'NotAuthorizedException',
          'error' => [
            'httpStatusCode' => 403,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'ResourceConflictException',
          'error' => [
            'httpStatusCode' => 409,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'TooManyRequestsException',
          'error' => [
            'httpStatusCode' => 429,
          ],
          'exception' => true,
        ],
        [
          'shape' => 'InternalErrorException',
          'exception' => true,
          'fault' => true,
        ],
      ],
    ],
  ],
  'shapes' => [
    'ARNString' => [
      'type' => 'string',
      'min' => 20,
      'max' => 2048,
    ],
    'AccessKeyString' => [
      'type' => 'string',
    ],
    'AccountId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 15,
      'pattern' => '\\d+',
    ],
    'CreateIdentityPoolInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolName',
        'AllowUnauthenticatedIdentities',
      ],
      'members' => [
        'IdentityPoolName' => [
          'shape' => 'IdentityPoolName',
        ],
        'AllowUnauthenticatedIdentities' => [
          'shape' => 'IdentityPoolUnauthenticated',
        ],
        'SupportedLoginProviders' => [
          'shape' => 'IdentityProviders',
        ],
        'DeveloperProviderName' => [
          'shape' => 'DeveloperProviderName',
        ],
        'OpenIdConnectProviderARNs' => [
          'shape' => 'OIDCProviderList',
        ],
      ],
    ],
    'Credentials' => [
      'type' => 'structure',
      'members' => [
        'AccessKeyId' => [
          'shape' => 'AccessKeyString',
        ],
        'SecretKey' => [
          'shape' => 'SecretKeyString',
        ],
        'SessionToken' => [
          'shape' => 'SessionTokenString',
        ],
        'Expiration' => [
          'shape' => 'DateType',
        ],
      ],
    ],
    'DateType' => [
      'type' => 'timestamp',
    ],
    'DeleteIdentityPoolInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
      ],
    ],
    'DescribeIdentityInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityId',
      ],
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
      ],
    ],
    'DescribeIdentityPoolInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
      ],
    ],
    'DeveloperProviderName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[\\w._-]+',
    ],
    'DeveloperUserAlreadyRegisteredException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'DeveloperUserIdentifier' => [
      'type' => 'string',
      'min' => 1,
      'max' => 1024,
      'pattern' => '[\\w.@_-]+',
    ],
    'DeveloperUserIdentifierList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'DeveloperUserIdentifier',
      ],
    ],
    'GetCredentialsForIdentityInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityId',
      ],
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'Logins' => [
          'shape' => 'LoginsMap',
        ],
      ],
    ],
    'GetCredentialsForIdentityResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'Credentials' => [
          'shape' => 'Credentials',
        ],
      ],
    ],
    'GetIdInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
      ],
      'members' => [
        'AccountId' => [
          'shape' => 'AccountId',
        ],
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'Logins' => [
          'shape' => 'LoginsMap',
        ],
      ],
    ],
    'GetIdResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
      ],
    ],
    'GetIdentityPoolRolesInput' => [
      'type' => 'structure',
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
      ],
    ],
    'GetIdentityPoolRolesResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'Roles' => [
          'shape' => 'RolesMap',
        ],
      ],
    ],
    'GetOpenIdTokenForDeveloperIdentityInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'Logins',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'Logins' => [
          'shape' => 'LoginsMap',
        ],
        'TokenDuration' => [
          'shape' => 'TokenDuration',
        ],
      ],
    ],
    'GetOpenIdTokenForDeveloperIdentityResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'Token' => [
          'shape' => 'OIDCToken',
        ],
      ],
    ],
    'GetOpenIdTokenInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityId',
      ],
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'Logins' => [
          'shape' => 'LoginsMap',
        ],
      ],
    ],
    'GetOpenIdTokenResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'Token' => [
          'shape' => 'OIDCToken',
        ],
      ],
    ],
    'IdentitiesList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'IdentityDescription',
      ],
    ],
    'IdentityDescription' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'Logins' => [
          'shape' => 'LoginsList',
        ],
        'CreationDate' => [
          'shape' => 'DateType',
        ],
        'LastModifiedDate' => [
          'shape' => 'DateType',
        ],
      ],
    ],
    'IdentityId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 50,
      'pattern' => '[\\w-]+:[0-9a-f-]+',
    ],
    'IdentityPool' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'IdentityPoolName',
        'AllowUnauthenticatedIdentities',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'IdentityPoolName' => [
          'shape' => 'IdentityPoolName',
        ],
        'AllowUnauthenticatedIdentities' => [
          'shape' => 'IdentityPoolUnauthenticated',
        ],
        'SupportedLoginProviders' => [
          'shape' => 'IdentityProviders',
        ],
        'DeveloperProviderName' => [
          'shape' => 'DeveloperProviderName',
        ],
        'OpenIdConnectProviderARNs' => [
          'shape' => 'OIDCProviderList',
        ],
      ],
    ],
    'IdentityPoolId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 50,
      'pattern' => '[\\w-]+:[0-9a-f-]+',
    ],
    'IdentityPoolName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[\\w ]+',
    ],
    'IdentityPoolShortDescription' => [
      'type' => 'structure',
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'IdentityPoolName' => [
          'shape' => 'IdentityPoolName',
        ],
      ],
    ],
    'IdentityPoolUnauthenticated' => [
      'type' => 'boolean',
    ],
    'IdentityPoolsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'IdentityPoolShortDescription',
      ],
    ],
    'IdentityProviderId' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[\\w._-]+',
    ],
    'IdentityProviderName' => [
      'type' => 'string',
      'min' => 1,
      'max' => 128,
      'pattern' => '[\\w._-]+',
    ],
    'IdentityProviderToken' => [
      'type' => 'string',
      'min' => 1,
      'max' => 2048,
      'pattern' => '[\\S]+',
    ],
    'IdentityProviders' => [
      'type' => 'map',
      'key' => [
        'shape' => 'IdentityProviderName',
      ],
      'value' => [
        'shape' => 'IdentityProviderId',
      ],
      'max' => 10,
    ],
    'InternalErrorException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'exception' => true,
      'fault' => true,
    ],
    'InvalidIdentityPoolConfigurationException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'InvalidParameterException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'LimitExceededException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 400,
      ],
      'exception' => true,
    ],
    'ListIdentitiesInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'MaxResults',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'MaxResults' => [
          'shape' => 'QueryLimit',
        ],
        'NextToken' => [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'ListIdentitiesResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'Identities' => [
          'shape' => 'IdentitiesList',
        ],
        'NextToken' => [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'ListIdentityPoolsInput' => [
      'type' => 'structure',
      'required' => [
        'MaxResults',
      ],
      'members' => [
        'MaxResults' => [
          'shape' => 'QueryLimit',
        ],
        'NextToken' => [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'ListIdentityPoolsResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityPools' => [
          'shape' => 'IdentityPoolsList',
        ],
        'NextToken' => [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'LoginsList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'IdentityProviderName',
      ],
    ],
    'LoginsMap' => [
      'type' => 'map',
      'key' => [
        'shape' => 'IdentityProviderName',
      ],
      'value' => [
        'shape' => 'IdentityProviderToken',
      ],
      'max' => 10,
    ],
    'LookupDeveloperIdentityInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'DeveloperUserIdentifier' => [
          'shape' => 'DeveloperUserIdentifier',
        ],
        'MaxResults' => [
          'shape' => 'QueryLimit',
        ],
        'NextToken' => [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'LookupDeveloperIdentityResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'DeveloperUserIdentifierList' => [
          'shape' => 'DeveloperUserIdentifierList',
        ],
        'NextToken' => [
          'shape' => 'PaginationKey',
        ],
      ],
    ],
    'MergeDeveloperIdentitiesInput' => [
      'type' => 'structure',
      'required' => [
        'SourceUserIdentifier',
        'DestinationUserIdentifier',
        'DeveloperProviderName',
        'IdentityPoolId',
      ],
      'members' => [
        'SourceUserIdentifier' => [
          'shape' => 'DeveloperUserIdentifier',
        ],
        'DestinationUserIdentifier' => [
          'shape' => 'DeveloperUserIdentifier',
        ],
        'DeveloperProviderName' => [
          'shape' => 'DeveloperProviderName',
        ],
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
      ],
    ],
    'MergeDeveloperIdentitiesResponse' => [
      'type' => 'structure',
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
      ],
    ],
    'NotAuthorizedException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 403,
      ],
      'exception' => true,
    ],
    'OIDCProviderList' => [
      'type' => 'list',
      'member' => [
        'shape' => 'ARNString',
      ],
    ],
    'OIDCToken' => [
      'type' => 'string',
    ],
    'PaginationKey' => [
      'type' => 'string',
      'min' => 1,
      'pattern' => '[\\S]+',
    ],
    'QueryLimit' => [
      'type' => 'integer',
      'min' => 1,
      'max' => 60,
    ],
    'ResourceConflictException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 409,
      ],
      'exception' => true,
    ],
    'ResourceNotFoundException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 404,
      ],
      'exception' => true,
    ],
    'RoleType' => [
      'type' => 'string',
      'pattern' => '(un]?authenticated',
    ],
    'RolesMap' => [
      'type' => 'map',
      'key' => [
        'shape' => 'RoleType',
      ],
      'value' => [
        'shape' => 'ARNString',
      ],
      'max' => 2,
    ],
    'SecretKeyString' => [
      'type' => 'string',
    ],
    'SessionTokenString' => [
      'type' => 'string',
    ],
    'SetIdentityPoolRolesInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityPoolId',
        'Roles',
      ],
      'members' => [
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'Roles' => [
          'shape' => 'RolesMap',
        ],
      ],
    ],
    'String' => [
      'type' => 'string',
    ],
    'TokenDuration' => [
      'type' => 'long',
      'min' => 1,
      'max' => 86400,
    ],
    'TooManyRequestsException' => [
      'type' => 'structure',
      'members' => [
        'message' => [
          'shape' => 'String',
        ],
      ],
      'error' => [
        'httpStatusCode' => 429,
      ],
      'exception' => true,
    ],
    'UnlinkDeveloperIdentityInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityId',
        'IdentityPoolId',
        'DeveloperProviderName',
        'DeveloperUserIdentifier',
      ],
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'IdentityPoolId' => [
          'shape' => 'IdentityPoolId',
        ],
        'DeveloperProviderName' => [
          'shape' => 'DeveloperProviderName',
        ],
        'DeveloperUserIdentifier' => [
          'shape' => 'DeveloperUserIdentifier',
        ],
      ],
    ],
    'UnlinkIdentityInput' => [
      'type' => 'structure',
      'required' => [
        'IdentityId',
        'Logins',
        'LoginsToRemove',
      ],
      'members' => [
        'IdentityId' => [
          'shape' => 'IdentityId',
        ],
        'Logins' => [
          'shape' => 'LoginsMap',
        ],
        'LoginsToRemove' => [
          'shape' => 'LoginsList',
        ],
      ],
    ],
  ],
];
