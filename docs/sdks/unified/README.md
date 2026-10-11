# Unified

## Overview

### Available Operations

* [createUnifiedConnection](#createunifiedconnection) - Create connection
* [createUnifiedConnectionReauth](#createunifiedconnectionreauth) - Create a re-authorization token for a connection
* [createUnifiedEnvironment](#createunifiedenvironment) - Create new environments
* [createUnifiedSecretsmanager](#createunifiedsecretsmanager) - Create secrets manager
* [createUnifiedWebhook](#createunifiedwebhook) - Create webhook subscription
* [getUnifiedApicall](#getunifiedapicall) - Retrieve specific API Call by its ID
* [getUnifiedConnection](#getunifiedconnection) - Retrieve connection
* [getUnifiedIntegrationAuth](#getunifiedintegrationauth) - Authorize or re-authorize a connection
* [getUnifiedIssue](#getunifiedissue) - Retrieve support issue
* [getUnifiedSecretsmanager](#getunifiedsecretsmanager) - Retrieve secrets manager
* [getUnifiedWebhook](#getunifiedwebhook) - Retrieve webhook by its ID
* [listUnifiedApicalls](#listunifiedapicalls) - Returns API Calls
* [listUnifiedConnections](#listunifiedconnections) - List all connections
* [listUnifiedEnvironments](#listunifiedenvironments) - Returns all environments
* [listUnifiedIntegrationWorkspaces](#listunifiedintegrationworkspaces) - Returns all activated integrations in a workspace
* [listUnifiedIntegrations](#listunifiedintegrations) - Returns all integrations
* [listUnifiedIssues](#listunifiedissues) - List support issues
* [listUnifiedNotifications](#listunifiednotifications) - List event notifications
* [listUnifiedSecretsmanagerInstructions](#listunifiedsecretsmanagerinstructions) - List secrets manager setup instructions
* [listUnifiedSecretsmanagerSecrets](#listunifiedsecretsmanagersecrets) - List secrets in a secrets manager
* [listUnifiedSecretsmanagers](#listunifiedsecretsmanagers) - List secrets managers
* [listUnifiedWebhooks](#listunifiedwebhooks) - Returns all registered webhooks
* [patchUnifiedConnection](#patchunifiedconnection) - Update connection
* [patchUnifiedWebhook](#patchunifiedwebhook) - Update webhook subscription
* [patchUnifiedWebhookTrigger](#patchunifiedwebhooktrigger) - Trigger webhook
* [removeUnifiedConnection](#removeunifiedconnection) - Remove connection
* [removeUnifiedEnvironment](#removeunifiedenvironment) - Remove an environment
* [removeUnifiedSecretsmanager](#removeunifiedsecretsmanager) - Remove secrets manager
* [removeUnifiedWebhook](#removeunifiedwebhook) - Remove webhook subscription
* [updateUnifiedConnection](#updateunifiedconnection) - Update connection
* [updateUnifiedWebhook](#updateunifiedwebhook) - Update webhook subscription
* [updateUnifiedWebhookTrigger](#updateunifiedwebhooktrigger) - Trigger webhook

## createUnifiedConnection

Used only to import existing customer credentials. To connect a new account, use the "Authorize or re-authorize a connection" auth URL instead. To change credentials on an existing connection, use "Update connection".

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedConnection" method="post" path="/unified/connection" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Shared\Connection(
    categories: [],
    integrationType: '<value>',
    permissions: [
        Shared\PropertyConnectionPermissions::EnrichCompanyRead,
    ],
);

$response = $sdk->unified->createUnifiedConnection(
    request: $request
);

if ($response->connection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                              | Type                                                   | Required                                               | Description                                            |
| ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ | ------------------------------------------------------ |
| `$request`                                             | [Shared\Connection](../../Models/Shared/Connection.md) | :heavy_check_mark:                                     | The request object to use for the request.             |

### Response

**[?Operations\CreateUnifiedConnectionResponse](../../Models/Operations/CreateUnifiedConnectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUnifiedConnectionReauth

Returns a short-lived, single-use token that lets your end-user re-authorize this existing connection in place via the "Authorize or re-authorize a connection" URL with connection_id and reauth_token.

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedConnectionReauth" method="post" path="/unified/connection/{id}/reauth" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateUnifiedConnectionReauthRequest(
    id: '<id>',
);

$response = $sdk->unified->createUnifiedConnectionReauth(
    request: $request
);

if ($response->connectionReauth !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\CreateUnifiedConnectionReauthRequest](../../Models/Operations/CreateUnifiedConnectionReauthRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\CreateUnifiedConnectionReauthResponse](../../Models/Operations/CreateUnifiedConnectionReauthResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUnifiedEnvironment

Create new environments

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedEnvironment" method="post" path="/unified/environment" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = [];

$response = $sdk->unified->createUnifiedEnvironment(
    request: $request
);

if ($response->environments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                  | Type                                       | Required                                   | Description                                |
| ------------------------------------------ | ------------------------------------------ | ------------------------------------------ | ------------------------------------------ |
| `$request`                                 | [array<string>](../../.md)                 | :heavy_check_mark:                         | The request object to use for the request. |

### Response

**[?Operations\CreateUnifiedEnvironmentResponse](../../Models/Operations/CreateUnifiedEnvironmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUnifiedSecretsmanager

Create secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedSecretsmanager" method="post" path="/unified/secretsmanager" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Shared\SecretsManager(
    auth: [
        'key' => '<value>',
        'key1' => '<value>',
    ],
    name: '<value>',
    type: Shared\SecretsManagerType::Akeyless,
);

$response = $sdk->unified->createUnifiedSecretsmanager(
    request: $request
);

if ($response->secretsManager !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                      | Type                                                           | Required                                                       | Description                                                    |
| -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- | -------------------------------------------------------------- |
| `$request`                                                     | [Shared\SecretsManager](../../Models/Shared/SecretsManager.md) | :heavy_check_mark:                                             | The request object to use for the request.                     |

### Response

**[?Operations\CreateUnifiedSecretsmanagerResponse](../../Models/Operations/CreateUnifiedSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createUnifiedWebhook

The data payload received by your server is described at https://docs.unified.to/unified/overview. The `interval` field can be set as low as 1 minute for paid accounts, and 60 minutes for free accounts.

### Example Usage

<!-- UsageSnippet language="php" operationID="createUnifiedWebhook" method="post" path="/unified/webhook" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateUnifiedWebhookRequest(
    webhook: new Shared\Webhook(
        connectionId: '<id>',
        event: Shared\WebhookEvent::Created,
        objectType: Shared\WebhookObjectType::AtsScorecard,
    ),
);

$response = $sdk->unified->createUnifiedWebhook(
    request: $request
);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateUnifiedWebhookRequest](../../Models/Operations/CreateUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateUnifiedWebhookResponse](../../Models/Operations/CreateUnifiedWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedApicall

Retrieve specific API Call by its ID

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedApicall" method="get" path="/unified/apicall/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUnifiedApicallRequest(
    id: '<id>',
);

$response = $sdk->unified->getUnifiedApicall(
    request: $request
);

if ($response->apiCall !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetUnifiedApicallRequest](../../Models/Operations/GetUnifiedApicallRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetUnifiedApicallResponse](../../Models/Operations/GetUnifiedApicallResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedConnection

Retrieve connection

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedConnection" method="get" path="/unified/connection/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUnifiedConnectionRequest(
    id: '<id>',
);

$response = $sdk->unified->getUnifiedConnection(
    request: $request
);

if ($response->connection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetUnifiedConnectionRequest](../../Models/Operations/GetUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetUnifiedConnectionResponse](../../Models/Operations/GetUnifiedConnectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedIntegrationAuth

Returns an authorization URL for the specified integration. After successful authorization, a new connection is created unless connection_id and reauth_token are provided, in which case the existing connection is updated in place.

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedIntegrationAuth" method="get" path="/unified/integration/auth/{workspace_id}/{integration_type}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUnifiedIntegrationAuthRequest(
    integrationType: '<value>',
    workspaceId: '<id>',
);

$response = $sdk->unified->getUnifiedIntegrationAuth(
    request: $request
);

if ($response->res !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetUnifiedIntegrationAuthRequest](../../Models/Operations/GetUnifiedIntegrationAuthRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetUnifiedIntegrationAuthResponse](../../Models/Operations/GetUnifiedIntegrationAuthResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedIssue

Retrieve support issue

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedIssue" method="get" path="/unified/issue/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUnifiedIssueRequest(
    id: '<id>',
);

$response = $sdk->unified->getUnifiedIssue(
    request: $request
);

if ($response->issue !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetUnifiedIssueRequest](../../Models/Operations/GetUnifiedIssueRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetUnifiedIssueResponse](../../Models/Operations/GetUnifiedIssueResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedSecretsmanager

Retrieve secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedSecretsmanager" method="get" path="/unified/secretsmanager/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUnifiedSecretsmanagerRequest(
    id: '<id>',
);

$response = $sdk->unified->getUnifiedSecretsmanager(
    request: $request
);

if ($response->secretsManager !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetUnifiedSecretsmanagerRequest](../../Models/Operations/GetUnifiedSecretsmanagerRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetUnifiedSecretsmanagerResponse](../../Models/Operations/GetUnifiedSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getUnifiedWebhook

Retrieve webhook by its ID

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedWebhook" method="get" path="/unified/webhook/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetUnifiedWebhookRequest(
    id: '<id>',
);

$response = $sdk->unified->getUnifiedWebhook(
    request: $request
);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetUnifiedWebhookRequest](../../Models/Operations/GetUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetUnifiedWebhookResponse](../../Models/Operations/GetUnifiedWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedApicalls

Returns API Calls

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedApicalls" method="get" path="/unified/apicall" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedApicalls(
    request: $request
);

if ($response->apiCalls !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListUnifiedApicallsRequest](../../Models/Operations/ListUnifiedApicallsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListUnifiedApicallsResponse](../../Models/Operations/ListUnifiedApicallsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedConnections

List all connections

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedConnections" method="get" path="/unified/connection" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedConnections(
    request: $request
);

if ($response->connections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListUnifiedConnectionsRequest](../../Models/Operations/ListUnifiedConnectionsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListUnifiedConnectionsResponse](../../Models/Operations/ListUnifiedConnectionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedEnvironments

Returns all environments

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedEnvironments" method="get" path="/unified/environment" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedEnvironments(

);

if ($response->environments !== null) {
    // handle response
}
```

### Response

**[?Operations\ListUnifiedEnvironmentsResponse](../../Models/Operations/ListUnifiedEnvironmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedIntegrationWorkspaces

No authentication required as this is to be used by front-end interface

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedIntegrationWorkspaces" method="get" path="/unified/integration/workspace/{workspace_id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListUnifiedIntegrationWorkspacesRequest(
    workspaceId: '<id>',
);

$response = $sdk->unified->listUnifiedIntegrationWorkspaces(
    request: $request
);

if ($response->integrations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\ListUnifiedIntegrationWorkspacesRequest](../../Models/Operations/ListUnifiedIntegrationWorkspacesRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\ListUnifiedIntegrationWorkspacesResponse](../../Models/Operations/ListUnifiedIntegrationWorkspacesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedIntegrations

Returns all integrations

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedIntegrations" method="get" path="/unified/integration" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedIntegrations(
    request: $request
);

if ($response->integrations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListUnifiedIntegrationsRequest](../../Models/Operations/ListUnifiedIntegrationsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListUnifiedIntegrationsResponse](../../Models/Operations/ListUnifiedIntegrationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedIssues

List support issues

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedIssues" method="get" path="/unified/issue" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedIssues(
    request: $request
);

if ($response->issues !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListUnifiedIssuesRequest](../../Models/Operations/ListUnifiedIssuesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListUnifiedIssuesResponse](../../Models/Operations/ListUnifiedIssuesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedNotifications

List event notifications

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedNotifications" method="get" path="/unified/notification" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedNotifications(
    request: $request
);

if ($response->notifications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListUnifiedNotificationsRequest](../../Models/Operations/ListUnifiedNotificationsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListUnifiedNotificationsResponse](../../Models/Operations/ListUnifiedNotificationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedSecretsmanagerInstructions

List secrets manager setup instructions

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedSecretsmanagerInstructions" method="get" path="/unified/secretsmanager/instructions" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedSecretsmanagerInstructions(

);

if ($response->secretsManagerInstructionsList !== null) {
    // handle response
}
```

### Response

**[?Operations\ListUnifiedSecretsmanagerInstructionsResponse](../../Models/Operations/ListUnifiedSecretsmanagerInstructionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedSecretsmanagerSecrets

List secrets in a secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedSecretsmanagerSecrets" method="get" path="/unified/secretsmanager/secrets" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListUnifiedSecretsmanagerSecretsRequest(
    secretsmanagerId: '<id>',
);

$response = $sdk->unified->listUnifiedSecretsmanagerSecrets(
    request: $request
);

if ($response->secretsManagerSecrets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\ListUnifiedSecretsmanagerSecretsRequest](../../Models/Operations/ListUnifiedSecretsmanagerSecretsRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\ListUnifiedSecretsmanagerSecretsResponse](../../Models/Operations/ListUnifiedSecretsmanagerSecretsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedSecretsmanagers

List secrets managers

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedSecretsmanagers" method="get" path="/unified/secretsmanager" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedSecretsmanagers(
    request: $request
);

if ($response->secretsManagers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListUnifiedSecretsmanagersRequest](../../Models/Operations/ListUnifiedSecretsmanagersRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListUnifiedSecretsmanagersResponse](../../Models/Operations/ListUnifiedSecretsmanagersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedWebhooks

Returns all registered webhooks

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedWebhooks" method="get" path="/unified/webhook" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->unified->listUnifiedWebhooks(
    request: $request
);

if ($response->webhooks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListUnifiedWebhooksRequest](../../Models/Operations/ListUnifiedWebhooksRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListUnifiedWebhooksResponse](../../Models/Operations/ListUnifiedWebhooksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUnifiedConnection

Update connection

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUnifiedConnection" method="patch" path="/unified/connection/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchUnifiedConnectionRequest(
    connection: new Shared\Connection(
        categories: [
            Shared\PropertyConnectionCategories::Storage,
        ],
        integrationType: '<value>',
        permissions: [
            Shared\PropertyConnectionPermissions::UcContactWrite,
        ],
    ),
    id: '<id>',
);

$response = $sdk->unified->patchUnifiedConnection(
    request: $request
);

if ($response->connection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchUnifiedConnectionRequest](../../Models/Operations/PatchUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchUnifiedConnectionResponse](../../Models/Operations/PatchUnifiedConnectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUnifiedWebhook

Update webhook subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUnifiedWebhook" method="patch" path="/unified/webhook/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchUnifiedWebhookRequest(
    webhook: new Shared\Webhook(
        connectionId: '<id>',
        event: Shared\WebhookEvent::Updated,
        objectType: Shared\WebhookObjectType::TicketingCustomer,
    ),
    id: '<id>',
);

$response = $sdk->unified->patchUnifiedWebhook(
    request: $request
);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchUnifiedWebhookRequest](../../Models/Operations/PatchUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchUnifiedWebhookResponse](../../Models/Operations/PatchUnifiedWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchUnifiedWebhookTrigger

Trigger webhook

### Example Usage

<!-- UsageSnippet language="php" operationID="patchUnifiedWebhookTrigger" method="patch" path="/unified/webhook/{id}/trigger" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchUnifiedWebhookTriggerRequest(
    id: '<id>',
);

$response = $sdk->unified->patchUnifiedWebhookTrigger(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchUnifiedWebhookTriggerRequest](../../Models/Operations/PatchUnifiedWebhookTriggerRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchUnifiedWebhookTriggerResponse](../../Models/Operations/PatchUnifiedWebhookTriggerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedConnection

Remove connection

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedConnection" method="delete" path="/unified/connection/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveUnifiedConnectionRequest(
    id: '<id>',
);

$response = $sdk->unified->removeUnifiedConnection(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveUnifiedConnectionRequest](../../Models/Operations/RemoveUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveUnifiedConnectionResponse](../../Models/Operations/RemoveUnifiedConnectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedEnvironment

Remove an environment

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedEnvironment" method="delete" path="/unified/environment/{env}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveUnifiedEnvironmentRequest(
    env: '<value>',
);

$response = $sdk->unified->removeUnifiedEnvironment(
    request: $request
);

if ($response->environments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveUnifiedEnvironmentRequest](../../Models/Operations/RemoveUnifiedEnvironmentRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveUnifiedEnvironmentResponse](../../Models/Operations/RemoveUnifiedEnvironmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedSecretsmanager

Remove secrets manager

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedSecretsmanager" method="delete" path="/unified/secretsmanager/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveUnifiedSecretsmanagerRequest(
    id: '<id>',
);

$response = $sdk->unified->removeUnifiedSecretsmanager(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveUnifiedSecretsmanagerRequest](../../Models/Operations/RemoveUnifiedSecretsmanagerRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveUnifiedSecretsmanagerResponse](../../Models/Operations/RemoveUnifiedSecretsmanagerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeUnifiedWebhook

Remove webhook subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="removeUnifiedWebhook" method="delete" path="/unified/webhook/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveUnifiedWebhookRequest(
    id: '<id>',
);

$response = $sdk->unified->removeUnifiedWebhook(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveUnifiedWebhookRequest](../../Models/Operations/RemoveUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveUnifiedWebhookResponse](../../Models/Operations/RemoveUnifiedWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUnifiedConnection

Update connection

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUnifiedConnection" method="put" path="/unified/connection/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateUnifiedConnectionRequest(
    connection: new Shared\Connection(
        categories: [],
        integrationType: '<value>',
        permissions: [
            Shared\PropertyConnectionPermissions::CommerceReviewRead,
            Shared\PropertyConnectionPermissions::CalendarCalendarRead,
        ],
    ),
    id: '<id>',
);

$response = $sdk->unified->updateUnifiedConnection(
    request: $request
);

if ($response->connection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateUnifiedConnectionRequest](../../Models/Operations/UpdateUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateUnifiedConnectionResponse](../../Models/Operations/UpdateUnifiedConnectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUnifiedWebhook

Update webhook subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUnifiedWebhook" method="put" path="/unified/webhook/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateUnifiedWebhookRequest(
    webhook: new Shared\Webhook(
        connectionId: '<id>',
        event: Shared\WebhookEvent::Deleted,
        objectType: Shared\WebhookObjectType::MessagingChannel,
    ),
    id: '<id>',
);

$response = $sdk->unified->updateUnifiedWebhook(
    request: $request
);

if ($response->webhook !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateUnifiedWebhookRequest](../../Models/Operations/UpdateUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateUnifiedWebhookResponse](../../Models/Operations/UpdateUnifiedWebhookResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateUnifiedWebhookTrigger

Trigger webhook

### Example Usage

<!-- UsageSnippet language="php" operationID="updateUnifiedWebhookTrigger" method="put" path="/unified/webhook/{id}/trigger" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateUnifiedWebhookTriggerRequest(
    id: '<id>',
);

$response = $sdk->unified->updateUnifiedWebhookTrigger(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateUnifiedWebhookTriggerRequest](../../Models/Operations/UpdateUnifiedWebhookTriggerRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateUnifiedWebhookTriggerResponse](../../Models/Operations/UpdateUnifiedWebhookTriggerResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |