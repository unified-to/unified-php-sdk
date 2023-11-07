# Unified


### Available Operations

* [createUnifiedConnection](#createunifiedconnection) - Create connection
* [createUnifiedWebhook](#createunifiedwebhook) - Create webhook subscription
* [getUnifiedApicall](#getunifiedapicall) - Retrieve specific API Call by its ID
* [getUnifiedConnection](#getunifiedconnection) - Retrieve connection
* [getUnifiedIntegration](#getunifiedintegration) - Retrieve an integration
* [getUnifiedIntegrationAuth](#getunifiedintegrationauth) - Create connection indirectly
* [getUnifiedWebhook](#getunifiedwebhook) - Retrieve webhook by its ID
* [listUnifiedApicalls](#listunifiedapicalls) - Returns API Calls
* [listUnifiedConnections](#listunifiedconnections) - List all connections
* [listUnifiedIntegrationWorkspaces](#listunifiedintegrationworkspaces) - Returns all activated integrations in a workspace
* [listUnifiedIntegrations](#listunifiedintegrations) - Returns all integrations
* [listUnifiedWebhooks](#listunifiedwebhooks) - Returns all registered webhooks
* [patchUnifiedConnection](#patchunifiedconnection) - Update connection
* [removeUnifiedConnection](#removeunifiedconnection) - Remove connection
* [removeUnifiedWebhook](#removeunifiedwebhook) - Remove webhook subscription
* [updateUnifiedConnection](#updateunifiedconnection) - Update connection

## createUnifiedConnection

Create connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Shared\Connection();
    $request->auth = new Shared\PropertyConnectionAuth();
    $request->auth->accessToken = 'string';
    $request->auth->apiUrl = 'string';
    $request->auth->appId = 'string';
    $request->auth->authorizeUrl = 'string';
    $request->auth->clientId = 'string';
    $request->auth->clientSecret = 'string';
    $request->auth->consumerKey = 'string';
    $request->auth->consumerSecret = 'string';
    $request->auth->emails = [
        'string',
    ];
    $request->auth->expiresIn = 9168.17;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-10T21:22:48.918Z');
    $request->auth->key = '<key>';
    $request->auth->meta = new Shared\PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'string';
    $request->auth->otherAuthInfo = [
        'string',
    ];
    $request->auth->pem = 'string';
    $request->auth->refreshToken = 'string';
    $request->auth->refreshTokenExpiresDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-18T01:30:06.276Z');
    $request->auth->refreshTokenExpiresIn = 6876.67;
    $request->auth->state = 'string';
    $request->auth->token = 'string';
    $request->auth->tokenUrl = 'string';
    $request->authAwsArn = 'string';
    $request->categories = [
        Shared\PropertyConnectionCategories::Auth,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-03T20:48:03.468Z');
    $request->environment = 'string';
    $request->externalXref = 'string';
    $request->id = '<ID>';
    $request->integrationType = 'string';
    $request->isPaused = false;
    $request->permissions = [
        Shared\PropertyConnectionPermissions::AtsJobRead,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-29T03:45:15.691Z');
    $request->workspaceId = 'string';

    $response = $sdk->unified->createUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                         | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `$request`                                                                        | [\Unified\Unified_to\Models\Shared\Connection](../../models/shared/Connection.md) | :heavy_check_mark:                                                                | The request object to use for the request.                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse](../../models/operations/CreateUnifiedConnectionResponse.md)**


## createUnifiedWebhook

To maintain compatibility with the webhooks specification and Zapier webhooks, only the hook_url field is required in the payload when creating a Webhook.  When updated/new objects are found, the array of objects will be POSTed to the hook_url with the paramater hookId=<hookId>.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateUnifiedWebhookRequest();
    $request->webhook = new Shared\Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-23T11:16:21.687Z');
    $request->webhook->connectionId = 'string';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-21T14:22:58.807Z');
    $request->webhook->environment = 'string';
    $request->webhook->events = [
        Shared\PropertyWebhookEvents::Updated,
    ];
    $request->webhook->hookUrl = 'string';
    $request->webhook->id = '<ID>';
    $request->webhook->includeRaw = false;
    $request->webhook->integrationType = 'string';
    $request->webhook->interval = 6142.55;
    $request->webhook->objectType = Shared\ObjectType::AccountingPayment;
    $request->webhook->subscriptions = [
        'string',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-09T17:23:28.216Z');
    $request->webhook->workspaceId = 'string';
    $request->connectionId = 'string';
    $request->events = [
        Operations\Events::Created,
    ];
    $request->object = 'string';

    $response = $sdk->unified->createUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookRequest](../../models/operations/CreateUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUnifiedWebhookResponse](../../models/operations/CreateUnifiedWebhookResponse.md)**


## getUnifiedApicall

Retrieve specific API Call by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetUnifiedApicallRequest();
    $request->id = '<ID>';

    $response = $sdk->unified->getUnifiedApicall($request);

    if ($response->apiCall !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest](../../models/operations/GetUnifiedApicallRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedApicallResponse](../../models/operations/GetUnifiedApicallResponse.md)**


## getUnifiedConnection

Retrieve connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetUnifiedConnectionRequest();
    $request->id = '<ID>';

    $response = $sdk->unified->getUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest](../../models/operations/GetUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse](../../models/operations/GetUnifiedConnectionResponse.md)**


## getUnifiedIntegration

Retrieve an integration

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetUnifiedIntegrationRequest();
    $request->integrationType = 'string';

    $response = $sdk->unified->getUnifiedIntegration($request);

    if ($response->integration !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest](../../models/operations/GetUnifiedIntegrationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationResponse](../../models/operations/GetUnifiedIntegrationResponse.md)**


## getUnifiedIntegrationAuth

Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetUnifiedIntegrationAuthRequest();
    $request->env = 'string';
    $request->externalXref = 'string';
    $request->failureRedirect = 'string';
    $request->integrationType = 'string';
    $request->lang = 'string';
    $request->redirect = false;
    $request->scopes = [
        Operations\Scopes::HrisEmployeeWrite,
    ];
    $request->state = 'string';
    $request->subdomain = 'string';
    $request->successRedirect = 'string';
    $request->workspaceId = 'string';

    $response = $sdk->unified->getUnifiedIntegrationAuth($request);

    if ($response->res !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthRequest](../../models/operations/GetUnifiedIntegrationAuthRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthResponse](../../models/operations/GetUnifiedIntegrationAuthResponse.md)**


## getUnifiedWebhook

Retrieve webhook by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetUnifiedWebhookRequest();
    $request->id = '<ID>';

    $response = $sdk->unified->getUnifiedWebhook($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest](../../models/operations/GetUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookResponse](../../models/operations/GetUnifiedWebhookResponse.md)**


## listUnifiedApicalls

Returns API Calls

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListUnifiedApicallsRequest();
    $request->connectionId = 'string';
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-09T20:57:25.500Z');
    $request->env = 'string';
    $request->error = false;
    $request->externalXref = 'string';
    $request->integrationType = 'string';
    $request->limit = 494.66;
    $request->offset = 5267.27;
    $request->order = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-09T10:22:39.053Z');

    $response = $sdk->unified->listUnifiedApicalls($request);

    if ($response->apiCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListUnifiedApicallsRequest](../../models/operations/ListUnifiedApicallsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedApicallsResponse](../../models/operations/ListUnifiedApicallsResponse.md)**


## listUnifiedConnections

List all connections

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListUnifiedConnectionsRequest();
    $request->categories = [
        Operations\Categories::Enrich,
    ];
    $request->env = 'string';
    $request->externalXref = 'string';
    $request->limit = 9638.08;
    $request->offset = 15.12;
    $request->order = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-20T10:15:04.986Z');

    $response = $sdk->unified->listUnifiedConnections($request);

    if ($response->connections !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest](../../models/operations/ListUnifiedConnectionsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse](../../models/operations/ListUnifiedConnectionsResponse.md)**


## listUnifiedIntegrationWorkspaces

No authentication required as this is to be used by front-end interface

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListUnifiedIntegrationWorkspacesRequest();
    $request->active = false;
    $request->categories = [
        Operations\QueryParamCategories::Ticketing,
    ];
    $request->env = 'string';
    $request->limit = 9072.99;
    $request->offset = 5948.93;
    $request->summary = false;
    $request->updatedGte = 'string';
    $request->workspaceId = 'string';

    $response = $sdk->unified->listUnifiedIntegrationWorkspaces($request);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesRequest](../../models/operations/ListUnifiedIntegrationWorkspacesRequest.md) | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationWorkspacesResponse](../../models/operations/ListUnifiedIntegrationWorkspacesResponse.md)**


## listUnifiedIntegrations

Returns all integrations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListUnifiedIntegrationsRequest();
    $request->active = false;
    $request->categories = [
        Operations\ListUnifiedIntegrationsQueryParamCategories::Auth,
    ];
    $request->env = 'string';
    $request->limit = 7382.58;
    $request->offset = 353.99;
    $request->order = 'string';
    $request->sort = 'string';
    $request->summary = false;
    $request->updatedGte = 'string';

    $response = $sdk->unified->listUnifiedIntegrations($request);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsRequest](../../models/operations/ListUnifiedIntegrationsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedIntegrationsResponse](../../models/operations/ListUnifiedIntegrationsResponse.md)**


## listUnifiedWebhooks

Returns all registered webhooks

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListUnifiedWebhooksRequest();
    $request->env = 'string';
    $request->limit = 1162.24;
    $request->object = 'string';
    $request->offset = 5094.7;
    $request->order = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-20T14:39:47.451Z');

    $response = $sdk->unified->listUnifiedWebhooks($request);

    if ($response->webhooks !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksRequest](../../models/operations/ListUnifiedWebhooksRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedWebhooksResponse](../../models/operations/ListUnifiedWebhooksResponse.md)**


## patchUnifiedConnection

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchUnifiedConnectionRequest();
    $request->connection = new Shared\Connection();
    $request->connection->auth = new Shared\PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'string';
    $request->connection->auth->apiUrl = 'string';
    $request->connection->auth->appId = 'string';
    $request->connection->auth->authorizeUrl = 'string';
    $request->connection->auth->clientId = 'string';
    $request->connection->auth->clientSecret = 'string';
    $request->connection->auth->consumerKey = 'string';
    $request->connection->auth->consumerSecret = 'string';
    $request->connection->auth->emails = [
        'string',
    ];
    $request->connection->auth->expiresIn = 6565.39;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-09T01:57:38.348Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = new Shared\PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'string';
    $request->connection->auth->otherAuthInfo = [
        'string',
    ];
    $request->connection->auth->pem = 'string';
    $request->connection->auth->refreshToken = 'string';
    $request->connection->auth->refreshTokenExpiresDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-29T01:22:10.837Z');
    $request->connection->auth->refreshTokenExpiresIn = 8456.09;
    $request->connection->auth->state = 'string';
    $request->connection->auth->token = 'string';
    $request->connection->auth->tokenUrl = 'string';
    $request->connection->authAwsArn = 'string';
    $request->connection->categories = [
        Shared\PropertyConnectionCategories::Ats,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-09T04:29:35.007Z');
    $request->connection->environment = 'string';
    $request->connection->externalXref = 'string';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'string';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        Shared\PropertyConnectionPermissions::AccountingPaymentRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-09T00:35:16.005Z');
    $request->connection->workspaceId = 'string';
    $request->id = '<ID>';

    $response = $sdk->unified->patchUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest](../../models/operations/PatchUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse](../../models/operations/PatchUnifiedConnectionResponse.md)**


## removeUnifiedConnection

Remove connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveUnifiedConnectionRequest();
    $request->id = '<ID>';

    $response = $sdk->unified->removeUnifiedConnection($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest](../../models/operations/RemoveUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse](../../models/operations/RemoveUnifiedConnectionResponse.md)**


## removeUnifiedWebhook

Remove webhook subscription

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveUnifiedWebhookRequest();
    $request->id = '<ID>';

    $response = $sdk->unified->removeUnifiedWebhook($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookRequest](../../models/operations/RemoveUnifiedWebhookRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUnifiedWebhookResponse](../../models/operations/RemoveUnifiedWebhookResponse.md)**


## updateUnifiedConnection

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateUnifiedConnectionRequest();
    $request->connection = new Shared\Connection();
    $request->connection->auth = new Shared\PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'string';
    $request->connection->auth->apiUrl = 'string';
    $request->connection->auth->appId = 'string';
    $request->connection->auth->authorizeUrl = 'string';
    $request->connection->auth->clientId = 'string';
    $request->connection->auth->clientSecret = 'string';
    $request->connection->auth->consumerKey = 'string';
    $request->connection->auth->consumerSecret = 'string';
    $request->connection->auth->emails = [
        'string',
    ];
    $request->connection->auth->expiresIn = 7910.65;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-13T00:55:19.590Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = new Shared\PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'string';
    $request->connection->auth->otherAuthInfo = [
        'string',
    ];
    $request->connection->auth->pem = 'string';
    $request->connection->auth->refreshToken = 'string';
    $request->connection->auth->refreshTokenExpiresDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-14T16:56:17.383Z');
    $request->connection->auth->refreshTokenExpiresIn = 7427.91;
    $request->connection->auth->state = 'string';
    $request->connection->auth->token = 'string';
    $request->connection->auth->tokenUrl = 'string';
    $request->connection->authAwsArn = 'string';
    $request->connection->categories = [
        Shared\PropertyConnectionCategories::Crm,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-09T18:14:10.859Z');
    $request->connection->environment = 'string';
    $request->connection->externalXref = 'string';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'string';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        Shared\PropertyConnectionPermissions::UcCallRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-09T04:40:33.286Z');
    $request->connection->workspaceId = 'string';
    $request->id = '<ID>';

    $response = $sdk->unified->updateUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest](../../models/operations/UpdateUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse](../../models/operations/UpdateUnifiedConnectionResponse.md)**

