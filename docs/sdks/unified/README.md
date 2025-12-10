# Unified

## Overview

### Available Operations

* [createUnifiedConnection](#createunifiedconnection) - Create connection
* [createUnifiedEnvironment](#createunifiedenvironment)
* [createUnifiedWebhook](#createunifiedwebhook) - Create webhook subscription
* [getUnifiedApicall](#getunifiedapicall) - Retrieve specific API Call by its ID
* [getUnifiedConnection](#getunifiedconnection) - Retrieve connection
* [getUnifiedIntegrationAuth](#getunifiedintegrationauth) - Authorize new connection
* [getUnifiedIssue](#getunifiedissue) - Retrieve support issue
* [getUnifiedWebhook](#getunifiedwebhook) - Retrieve webhook by its ID
* [listUnifiedApicalls](#listunifiedapicalls) - Returns API Calls
* [listUnifiedConnections](#listunifiedconnections) - List all connections
* [listUnifiedEnvironments](#listunifiedenvironments)
* [listUnifiedIntegrationWorkspaces](#listunifiedintegrationworkspaces) - Returns all activated integrations in a workspace
* [listUnifiedIntegrations](#listunifiedintegrations) - Returns all integrations
* [listUnifiedIssues](#listunifiedissues) - List support issues
* [listUnifiedWebhooks](#listunifiedwebhooks) - Returns all registered webhooks
* [patchUnifiedConnection](#patchunifiedconnection) - Update connection
* [patchUnifiedWebhook](#patchunifiedwebhook) - Update webhook subscription
* [patchUnifiedWebhookTrigger](#patchunifiedwebhooktrigger) - Trigger webhook
* [removeUnifiedConnection](#removeunifiedconnection) - Remove connection
* [removeUnifiedEnvironment](#removeunifiedenvironment)
* [removeUnifiedWebhook](#removeunifiedwebhook) - Remove webhook subscription
* [updateUnifiedConnection](#updateunifiedconnection) - Update connection
* [updateUnifiedWebhook](#updateunifiedwebhook) - Update webhook subscription
* [updateUnifiedWebhookTrigger](#updateunifiedwebhooktrigger) - Trigger webhook

## createUnifiedConnection

Used only to import existing customer credentials; use "Authorize new connection" instead

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

## createUnifiedEnvironment

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

if ($response->s !== null) {
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
        event: Shared\Event::Created,
        objectType: Shared\ObjectType::AtsScorecard,
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

Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.

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

if ($response->s !== null) {
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
        event: Shared\Event::Updated,
        objectType: Shared\ObjectType::TicketingCustomer,
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

if ($response->s !== null) {
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
        event: Shared\Event::Deleted,
        objectType: Shared\ObjectType::MessagingChannel,
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