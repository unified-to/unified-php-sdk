# Unified


### Available Operations

* [createUnifiedConnection](#createunifiedconnection) - Create connection
* [createUnifiedWebhook](#createunifiedwebhook) - Create webhook subscription
* [getUnifiedApicall](#getunifiedapicall) - Retrieve specific API Call by its ID
* [getUnifiedConnection](#getunifiedconnection) - Retrieve connection
* [getUnifiedIntegrationAuth](#getunifiedintegrationauth) - Create connection indirectly
* [getUnifiedWebhook](#getunifiedwebhook) - Retrieve webhook by its ID
* [listUnifiedApicalls](#listunifiedapicalls) - Returns API Calls
* [listUnifiedConnections](#listunifiedconnections) - List all connections
* [listUnifiedIntegrationWorkspaces](#listunifiedintegrationworkspaces) - Returns all activated integrations in a workspace
* [listUnifiedIntegrations](#listunifiedintegrations) - Returns all integrations
* [listUnifiedIssues](#listunifiedissues) - List support issues
* [listUnifiedWebhooks](#listunifiedwebhooks) - Returns all registered webhooks
* [patchUnifiedConnection](#patchunifiedconnection) - Update connection
* [patchUnifiedWebhookTrigger](#patchunifiedwebhooktrigger) - Trigger webhook
* [removeUnifiedConnection](#removeunifiedconnection) - Remove connection
* [removeUnifiedWebhook](#removeunifiedwebhook) - Remove webhook subscription
* [updateUnifiedConnection](#updateunifiedconnection) - Update connection
* [updateUnifiedWebhookTrigger](#updateunifiedwebhooktrigger) - Trigger webhook

## createUnifiedConnection

Create connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Shared\Connection();
    $request->auth = new Shared\PropertyConnectionAuth();
    $request->auth->accessToken = '<value>';
    $request->auth->apiUrl = '<value>';
    $request->auth->appId = '<value>';
    $request->auth->authorizeUrl = '<value>';
    $request->auth->clientId = '<value>';
    $request->auth->clientSecret = '<value>';
    $request->auth->consumerKey = '<value>';
    $request->auth->consumerSecret = '<value>';
    $request->auth->devApiKey = '<value>';
    $request->auth->emails = [
        '<value>',
    ];
    $request->auth->expiresIn = 9168.17;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-11T07:34:10.716Z');
    $request->auth->key = '<key>';
    $request->auth->meta = [
        'Rwanda' => '<value>',
    ];
    $request->auth->name = '<value>';
    $request->auth->otherAuthInfo = [
        '<value>',
    ];
    $request->auth->pem = '<value>';
    $request->auth->refreshToken = '<value>';
    $request->auth->refreshTokenExpiresDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-04T08:49:51.307Z');
    $request->auth->refreshTokenExpiresIn = 3145.19;
    $request->auth->state = 'Tennessee';
    $request->auth->token = '<value>';
    $request->auth->tokenUrl = '<value>';
    $request->authAwsArn = '<value>';
    $request->categories = [
        Shared\PropertyConnectionCategories::Ticketing,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-05T07:37:37.431Z');
    $request->cursorsCache = [
        [
            'Van' => '<value>',
        ],
    ];
    $request->environment = '<value>';
    $request->externalXref = '<value>';
    $request->id = '<id>';
    $request->integrationType = '<value>';
    $request->isPaused = false;
    $request->lastHealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-12T14:19:55.077Z');
    $request->lastUnhealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-06T09:01:24.591Z');
    $request->permissions = [
        Shared\PropertyConnectionPermissions::TicketingCustomerWrite,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-22T10:28:46.343Z');
    $request->workspaceId = '<value>';;

    $requestSecurity = new Operations\CreateUnifiedConnectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->createUnifiedConnection($request, $requestSecurity);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Shared\Connection](../../Models/Shared/Connection.md)                                                   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateUnifiedConnectionSecurity](../../Models/Operations/CreateUnifiedConnectionSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse](../../Models/Operations/CreateUnifiedConnectionResponse.md)**


## createUnifiedWebhook

The data payload received by your server is described at https://docs.unified.to/unified/overview.  The `interval` field can be set as low as 15 minutes for paid accounts, and 60 minutes for free accounts.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateUnifiedWebhookRequest();
    $request->webhook = new Shared\Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-24T03:05:08.611Z');
    $request->webhook->connectionId = '<value>';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-21T14:50:04.176Z');
    $request->webhook->environment = '<value>';
    $request->webhook->event = Shared\Event::Created;
    $request->webhook->fields = '<value>';
    $request->webhook->hookUrl = '<value>';
    $request->webhook->id = '<id>';
    $request->webhook->integrationType = '<value>';
    $request->webhook->interval = 6142.55;
    $request->webhook->isHealthy = false;
    $request->webhook->meta = [
        'Borders' => '<value>',
    ];
    $request->webhook->objectType = Shared\ObjectType::CrmPipeline;
    $request->webhook->pageMaxLimit = 9505.78;
    $request->webhook->runs = [
        '<value>',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-20T21:50:16.199Z');
    $request->webhook->webhookType = Shared\WebhookWebhookType::Virtual;
    $request->webhook->workspaceId = '<value>';
    $request->includeAll = false;;

    $requestSecurity = new Operations\CreateUnifiedWebhookSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->createUnifiedWebhook($request, $requestSecurity);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookRequest](../../Models/Operations/CreateUnifiedWebhookRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookSecurity](../../Models/Operations/CreateUnifiedWebhookSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookResponse](../../Models/Operations/CreateUnifiedWebhookResponse.md)**


## getUnifiedApicall

Retrieve specific API Call by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetUnifiedApicallRequest();
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetUnifiedApicallSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->getUnifiedApicall($request, $requestSecurity);

    if ($response->apiCall !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest](../../Models/Operations/GetUnifiedApicallRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallSecurity](../../Models/Operations/GetUnifiedApicallSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse](../../Models/Operations/GetUnifiedApicallResponse.md)**


## getUnifiedConnection

Retrieve connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetUnifiedConnectionRequest();
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetUnifiedConnectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->getUnifiedConnection($request, $requestSecurity);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest](../../Models/Operations/GetUnifiedConnectionRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionSecurity](../../Models/Operations/GetUnifiedConnectionSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse](../../Models/Operations/GetUnifiedConnectionResponse.md)**


## getUnifiedIntegrationAuth

Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetUnifiedIntegrationAuthRequest();
    $request->env = '<value>';
    $request->externalXref = '<value>';
    $request->failureRedirect = '<value>';
    $request->integrationType = '<value>';
    $request->lang = '<value>';
    $request->redirect = false;
    $request->scopes = [
        Operations\Scopes::HrisEmployeeWrite,
    ];
    $request->state = 'New Jersey';
    $request->subdomain = '<value>';
    $request->successRedirect = '<value>';
    $request->workspaceId = '<value>';;

    $response = $sdk->unified->getUnifiedIntegrationAuth($request);

    if ($response->res !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest](../../Models/Operations/GetUnifiedIntegrationAuthRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse](../../Models/Operations/GetUnifiedIntegrationAuthResponse.md)**


## getUnifiedWebhook

Retrieve webhook by its ID

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetUnifiedWebhookRequest();
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetUnifiedWebhookSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->getUnifiedWebhook($request, $requestSecurity);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest](../../Models/Operations/GetUnifiedWebhookRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookSecurity](../../Models/Operations/GetUnifiedWebhookSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse](../../Models/Operations/GetUnifiedWebhookResponse.md)**


## listUnifiedApicalls

Returns API Calls

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListUnifiedApicallsRequest();
    $request->connectionId = '<value>';
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-09T17:47:53.304Z');
    $request->env = '<value>';
    $request->error = false;
    $request->externalXref = '<value>';
    $request->integrationType = '<value>';
    $request->limit = 494.66;
    $request->offset = 5267.27;
    $request->order = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-10T02:33:44.403Z');;

    $requestSecurity = new Operations\ListUnifiedApicallsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->listUnifiedApicalls($request, $requestSecurity);

    if ($response->apiCalls !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest](../../Models/Operations/ListUnifiedApicallsRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListUnifiedApicallsSecurity](../../Models/Operations/ListUnifiedApicallsSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse](../../Models/Operations/ListUnifiedApicallsResponse.md)**


## listUnifiedConnections

List all connections

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListUnifiedConnectionsRequest();
    $request->categories = [
        Operations\Categories::Martech,
    ];
    $request->env = '<value>';
    $request->externalXref = '<value>';
    $request->limit = 9638.08;
    $request->offset = 15.12;
    $request->order = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-20T13:59:12.388Z');;

    $requestSecurity = new Operations\ListUnifiedConnectionsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->listUnifiedConnections($request, $requestSecurity);

    if ($response->connections !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest](../../Models/Operations/ListUnifiedConnectionsRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsSecurity](../../Models/Operations/ListUnifiedConnectionsSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse](../../Models/Operations/ListUnifiedConnectionsResponse.md)**


## listUnifiedIntegrationWorkspaces

No authentication required as this is to be used by front-end interface

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListUnifiedIntegrationWorkspacesRequest();
    $request->active = false;
    $request->categories = [
        Operations\QueryParamCategories::Accounting,
    ];
    $request->env = '<value>';
    $request->limit = 9072.99;
    $request->offset = 5948.93;
    $request->summary = false;
    $request->updatedGte = '<value>';
    $request->workspaceId = '<value>';;

    $response = $sdk->unified->listUnifiedIntegrationWorkspaces($request);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest](../../Models/Operations/ListUnifiedIntegrationWorkspacesRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse](../../Models/Operations/ListUnifiedIntegrationWorkspacesResponse.md)**


## listUnifiedIntegrations

Returns all integrations

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListUnifiedIntegrationsRequest();
    $request->active = false;
    $request->categories = [
        Operations\ListUnifiedIntegrationsQueryParamCategories::Crm,
    ];
    $request->env = '<value>';
    $request->limit = 7382.58;
    $request->offset = 353.99;
    $request->order = '<value>';
    $request->sort = '<value>';
    $request->summary = false;
    $request->type = '<value>';
    $request->updatedGte = '<value>';;

    $requestSecurity = new Operations\ListUnifiedIntegrationsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->listUnifiedIntegrations($request, $requestSecurity);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest](../../Models/Operations/ListUnifiedIntegrationsRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsSecurity](../../Models/Operations/ListUnifiedIntegrationsSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse](../../Models/Operations/ListUnifiedIntegrationsResponse.md)**


## listUnifiedIssues

List support issues

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListUnifiedIssuesRequest();
    $request->limit = 7069.08;
    $request->offset = 7461.37;
    $request->order = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-21T01:55:24.746Z');;

    $requestSecurity = new Operations\ListUnifiedIssuesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->listUnifiedIssues($request, $requestSecurity);

    if ($response->issues !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListUnifiedIssuesRequest](../../Models/Operations/ListUnifiedIssuesRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListUnifiedIssuesSecurity](../../Models/Operations/ListUnifiedIssuesSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedIssuesResponse](../../Models/Operations/ListUnifiedIssuesResponse.md)**


## listUnifiedWebhooks

Returns all registered webhooks

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListUnifiedWebhooksRequest();
    $request->env = '<value>';
    $request->limit = 1162.24;
    $request->object = '<value>';
    $request->offset = 5094.7;
    $request->order = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-20T17:03:56.207Z');;

    $requestSecurity = new Operations\ListUnifiedWebhooksSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->listUnifiedWebhooks($request, $requestSecurity);

    if ($response->webhooks !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksRequest](../../Models/Operations/ListUnifiedWebhooksRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksSecurity](../../Models/Operations/ListUnifiedWebhooksSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksResponse](../../Models/Operations/ListUnifiedWebhooksResponse.md)**


## patchUnifiedConnection

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchUnifiedConnectionRequest();
    $request->connection = new Shared\Connection();
    $request->connection->auth = new Shared\PropertyConnectionAuth();
    $request->connection->auth->accessToken = '<value>';
    $request->connection->auth->apiUrl = '<value>';
    $request->connection->auth->appId = '<value>';
    $request->connection->auth->authorizeUrl = '<value>';
    $request->connection->auth->clientId = '<value>';
    $request->connection->auth->clientSecret = '<value>';
    $request->connection->auth->consumerKey = '<value>';
    $request->connection->auth->consumerSecret = '<value>';
    $request->connection->auth->devApiKey = '<value>';
    $request->connection->auth->emails = [
        '<value>',
    ];
    $request->connection->auth->expiresIn = 6565.39;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-09T18:49:02.054Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = [
        'square' => '<value>',
    ];
    $request->connection->auth->name = '<value>';
    $request->connection->auth->otherAuthInfo = [
        '<value>',
    ];
    $request->connection->auth->pem = '<value>';
    $request->connection->auth->refreshToken = '<value>';
    $request->connection->auth->refreshTokenExpiresDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-17T17:15:40.563Z');
    $request->connection->auth->refreshTokenExpiresIn = 1170.66;
    $request->connection->auth->state = 'Connecticut';
    $request->connection->auth->token = '<value>';
    $request->connection->auth->tokenUrl = '<value>';
    $request->connection->authAwsArn = '<value>';
    $request->connection->categories = [
        Shared\PropertyConnectionCategories::Martech,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-14T05:49:12.923Z');
    $request->connection->cursorsCache = [
        [
            'Gasoline' => '<value>',
        ],
    ];
    $request->connection->environment = '<value>';
    $request->connection->externalXref = '<value>';
    $request->connection->id = '<id>';
    $request->connection->integrationType = '<value>';
    $request->connection->isPaused = false;
    $request->connection->lastHealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-24T01:15:30.014Z');
    $request->connection->lastUnhealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-20T21:38:39.955Z');
    $request->connection->permissions = [
        Shared\PropertyConnectionPermissions::AtsJobRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-09T02:30:18.551Z');
    $request->connection->workspaceId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchUnifiedConnectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->patchUnifiedConnection($request, $requestSecurity);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest](../../Models/Operations/PatchUnifiedConnectionRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionSecurity](../../Models/Operations/PatchUnifiedConnectionSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse](../../Models/Operations/PatchUnifiedConnectionResponse.md)**


## patchUnifiedWebhookTrigger

Trigger webhook

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchUnifiedWebhookTriggerRequest();
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchUnifiedWebhookTriggerSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->patchUnifiedWebhookTrigger($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchUnifiedWebhookTriggerRequest](../../Models/Operations/PatchUnifiedWebhookTriggerRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchUnifiedWebhookTriggerSecurity](../../Models/Operations/PatchUnifiedWebhookTriggerSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUnifiedWebhookTriggerResponse](../../Models/Operations/PatchUnifiedWebhookTriggerResponse.md)**


## removeUnifiedConnection

Remove connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveUnifiedConnectionRequest();
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveUnifiedConnectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->removeUnifiedConnection($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest](../../Models/Operations/RemoveUnifiedConnectionRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionSecurity](../../Models/Operations/RemoveUnifiedConnectionSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse](../../Models/Operations/RemoveUnifiedConnectionResponse.md)**


## removeUnifiedWebhook

Remove webhook subscription

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveUnifiedWebhookRequest();
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveUnifiedWebhookSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->removeUnifiedWebhook($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookRequest](../../Models/Operations/RemoveUnifiedWebhookRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookSecurity](../../Models/Operations/RemoveUnifiedWebhookSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookResponse](../../Models/Operations/RemoveUnifiedWebhookResponse.md)**


## updateUnifiedConnection

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateUnifiedConnectionRequest();
    $request->connection = new Shared\Connection();
    $request->connection->auth = new Shared\PropertyConnectionAuth();
    $request->connection->auth->accessToken = '<value>';
    $request->connection->auth->apiUrl = '<value>';
    $request->connection->auth->appId = '<value>';
    $request->connection->auth->authorizeUrl = '<value>';
    $request->connection->auth->clientId = '<value>';
    $request->connection->auth->clientSecret = '<value>';
    $request->connection->auth->consumerKey = '<value>';
    $request->connection->auth->consumerSecret = '<value>';
    $request->connection->auth->devApiKey = '<value>';
    $request->connection->auth->emails = [
        '<value>',
    ];
    $request->connection->auth->expiresIn = 7910.65;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-13T13:09:11.114Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = [
        'revitalize' => '<value>',
    ];
    $request->connection->auth->name = '<value>';
    $request->connection->auth->otherAuthInfo = [
        '<value>',
    ];
    $request->connection->auth->pem = '<value>';
    $request->connection->auth->refreshToken = '<value>';
    $request->connection->auth->refreshTokenExpiresDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-18T23:31:20.256Z');
    $request->connection->auth->refreshTokenExpiresIn = 618.81;
    $request->connection->auth->state = 'Wisconsin';
    $request->connection->auth->token = '<value>';
    $request->connection->auth->tokenUrl = '<value>';
    $request->connection->authAwsArn = '<value>';
    $request->connection->categories = [
        Shared\PropertyConnectionCategories::Enrich,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-08T19:30:51.046Z');
    $request->connection->cursorsCache = [
        [
            'Intuitive' => '<value>',
        ],
    ];
    $request->connection->environment = '<value>';
    $request->connection->externalXref = '<value>';
    $request->connection->id = '<id>';
    $request->connection->integrationType = '<value>';
    $request->connection->isPaused = false;
    $request->connection->lastHealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-19T21:47:47.558Z');
    $request->connection->lastUnhealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-21T13:28:25.633Z');
    $request->connection->permissions = [
        Shared\PropertyConnectionPermissions::AccountingRefundRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-11T02:04:24.912Z');
    $request->connection->workspaceId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateUnifiedConnectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->updateUnifiedConnection($request, $requestSecurity);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest](../../Models/Operations/UpdateUnifiedConnectionRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionSecurity](../../Models/Operations/UpdateUnifiedConnectionSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse](../../Models/Operations/UpdateUnifiedConnectionResponse.md)**


## updateUnifiedWebhookTrigger

Trigger webhook

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateUnifiedWebhookTriggerRequest();
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateUnifiedWebhookTriggerSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->unified->updateUnifiedWebhookTrigger($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateUnifiedWebhookTriggerRequest](../../Models/Operations/UpdateUnifiedWebhookTriggerRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateUnifiedWebhookTriggerSecurity](../../Models/Operations/UpdateUnifiedWebhookTriggerSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateUnifiedWebhookTriggerResponse](../../Models/Operations/UpdateUnifiedWebhookTriggerResponse.md)**

