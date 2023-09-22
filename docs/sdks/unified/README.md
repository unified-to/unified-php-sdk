# Unified

### Available Operations

* [deleteUnifiedConnectionId](#deleteunifiedconnectionid) - Remove connection
* [deleteUnifiedUser](#deleteunifieduser) - Delete your user object
* [deleteUnifiedWebhookId](#deleteunifiedwebhookid) - Remove webhook subscription
* [getUnifiedApicall](#getunifiedapicall) - Returns API Calls
* [getUnifiedApicallId](#getunifiedapicallid) - Retrieve specific API Call by its ID
* [getUnifiedConnection](#getunifiedconnection) - List all connections
* [getUnifiedConnectionId](#getunifiedconnectionid) - Retrieve connection
* [getUnifiedIntegration](#getunifiedintegration) - Returns all integrations
* [getUnifiedIntegrationAuthWorkspaceIdIntegrationType](#getunifiedintegrationauthworkspaceidintegrationtype) - Create connection indirectly
* [getUnifiedIntegrationIntegrationType](#getunifiedintegrationintegrationtype) - Retrieve an integration
* [getUnifiedIntegrationWorkspaceWorkspaceId](#getunifiedintegrationworkspaceworkspaceid) - Returns all activated integrations in a workspace
* [getUnifiedUser](#getunifieduser) - Retrieve your user object
* [getUnifiedUserToken](#getunifiedusertoken) - Retrieve your user token
* [getUnifiedWebhook](#getunifiedwebhook) - Returns all registered webhooks
* [getUnifiedWebhookId](#getunifiedwebhookid) - Retrieve webhook by its ID
* [patchUnifiedConnectionId](#patchunifiedconnectionid) - Update connection
* [patchUnifiedUser](#patchunifieduser) - Updates your user object
* [postUnifiedConnection](#postunifiedconnection) - Create connection
* [postUnifiedWebhookConnectionIdObject](#postunifiedwebhookconnectionidobject) - Create webhook subscription
* [putUnifiedConnectionId](#putunifiedconnectionid) - Update connection
* [putUnifiedUser](#putunifieduser) - Updates your user object

## deleteUnifiedConnectionId

Remove connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUnifiedConnectionIdRequest();
    $request->id = '1ec2c79a-39ae-45a4-95a6-5b4d5562d9b7';

    $response = $sdk->unified->deleteUnifiedConnectionId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest](../../models/operations/DeleteUnifiedConnectionIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdResponse](../../models/operations/DeleteUnifiedConnectionIdResponse.md)**


## deleteUnifiedUser

Delete your user object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $response = $sdk->unified->deleteUnifiedUser();

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteUnifiedUserResponse](../../models/operations/DeleteUnifiedUserResponse.md)**


## deleteUnifiedWebhookId

Remove webhook subscription

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUnifiedWebhookIdRequest();
    $request->id = 'd9e2d6fc-f557-4629-9b87-5c3a890282a5';

    $response = $sdk->unified->deleteUnifiedWebhookId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest](../../models/operations/DeleteUnifiedWebhookIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdResponse](../../models/operations/DeleteUnifiedWebhookIdResponse.md)**


## getUnifiedApicall

Returns API Calls

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedApicallRequest();
    $request->connectionId = 'quasi';
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-05T08:07:52.157Z');
    $request->env = 'illo';
    $request->error = false;
    $request->externalXref = 'optio';
    $request->integrationType = 'sapiente';
    $request->limit = 4354.55;
    $request->offset = 4771.07;
    $request->order = 'iste';
    $request->sort = 'iure';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-06-17T15:59:49.531Z');

    $response = $sdk->unified->getUnifiedApicall($request);

    if ($response->apiCalls !== null) {
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


## getUnifiedApicallId

Retrieve specific API Call by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedApicallIdRequest();
    $request->id = '3d724c18-f581-4e98-8ce3-f716600da0e3';

    $response = $sdk->unified->getUnifiedApicallId($request);

    if ($response->apiCall !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest](../../models/operations/GetUnifiedApicallIdRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedApicallIdResponse](../../models/operations/GetUnifiedApicallIdResponse.md)**


## getUnifiedConnection

List all connections

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionCategories;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedConnectionRequest();
    $request->categories = [
        GetUnifiedConnectionCategories::Martech,
    ];
    $request->env = 'deserunt';
    $request->externalXref = 'laboriosam';
    $request->limit = 845.81;
    $request->offset = 7599.24;
    $request->order = 'ex';
    $request->sort = 'repellat';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-30T18:30:45.044Z');

    $response = $sdk->unified->getUnifiedConnection($request);

    if ($response->connections !== null) {
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


## getUnifiedConnectionId

Retrieve connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedConnectionIdRequest();
    $request->id = '9d852b53-b32c-48c7-83c7-10e1673d905c';

    $response = $sdk->unified->getUnifiedConnectionId($request);

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdRequest](../../models/operations/GetUnifiedConnectionIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdResponse](../../models/operations/GetUnifiedConnectionIdResponse.md)**


## getUnifiedIntegration

Returns all integrations

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationCategories;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationCategories::Martech,
    ];
    $request->limit = 2899.85;
    $request->offset = 6946.19;
    $request->order = 'recusandae';
    $request->sort = 'illum';
    $request->summary = false;
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-01-09T01:16:51.878Z');

    $response = $sdk->unified->getUnifiedIntegration($request);

    if ($response->integrations !== null) {
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


## getUnifiedIntegrationAuthWorkspaceIdIntegrationType

Returns an authorization URL for the specified integration.  Once a successful authorization occurs, a new connection is created.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest();
    $request->env = 'amet';
    $request->externalXref = 'quod';
    $request->failureRedirect = 'inventore';
    $request->integrationType = 'odit';
    $request->lang = 'in';
    $request->redirect = false;
    $request->scopes = [
        GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes::HrisEmployeeRead,
    ];
    $request->state = 'ipsum';
    $request->subdomain = 'excepturi';
    $request->successRedirect = 'aperiam';
    $request->workspaceId = 'molestias';

    $response = $sdk->unified->getUnifiedIntegrationAuthWorkspaceIdIntegrationType($request);

    if ($response->getUnifiedIntegrationAuthWorkspaceIdIntegrationType200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                                                 | Type                                                                                                                                                                                      | Required                                                                                                                                                                                  | Description                                                                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                                                | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest](../../models/operations/GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest.md) | :heavy_check_mark:                                                                                                                                                                        | The request object to use for the request.                                                                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse](../../models/operations/GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeResponse.md)**


## getUnifiedIntegrationIntegrationType

Retrieve an integration

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationIntegrationTypeRequest();
    $request->integrationType = 'iste';

    $response = $sdk->unified->getUnifiedIntegrationIntegrationType($request);

    if ($response->integration !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest](../../models/operations/GetUnifiedIntegrationIntegrationTypeRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeResponse](../../models/operations/GetUnifiedIntegrationIntegrationTypeResponse.md)**


## getUnifiedIntegrationWorkspaceWorkspaceId

No authentication required as this is to be used by front-end interface

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdCategories;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationWorkspaceWorkspaceIdRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationWorkspaceWorkspaceIdCategories::Auth,
    ];
    $request->env = 'veniam';
    $request->summary = false;
    $request->workspaceId = 'consequuntur';

    $response = $sdk->unified->getUnifiedIntegrationWorkspaceWorkspaceId($request);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                             | Type                                                                                                                                                                  | Required                                                                                                                                                              | Description                                                                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest](../../models/operations/GetUnifiedIntegrationWorkspaceWorkspaceIdRequest.md) | :heavy_check_mark:                                                                                                                                                    | The request object to use for the request.                                                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdResponse](../../models/operations/GetUnifiedIntegrationWorkspaceWorkspaceIdResponse.md)**


## getUnifiedUser

Retrieve your user object

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $response = $sdk->unified->getUnifiedUser();

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedUserResponse](../../models/operations/GetUnifiedUserResponse.md)**


## getUnifiedUserToken

Retrieve your user token

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $response = $sdk->unified->getUnifiedUserToken();

    if ($response->getUnifiedUserToken200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedUserTokenResponse](../../models/operations/GetUnifiedUserTokenResponse.md)**


## getUnifiedWebhook

Returns all registered webhooks

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedWebhookRequest();
    $request->env = 'blanditiis';
    $request->limit = 1730.52;
    $request->object = 'ipsam';
    $request->offset = 575.99;
    $request->order = 'pariatur';
    $request->sort = 'maxime';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-06T22:01:24.584Z');

    $response = $sdk->unified->getUnifiedWebhook($request);

    if ($response->webhooks !== null) {
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


## getUnifiedWebhookId

Retrieve webhook by its ID

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedWebhookIdRequest();
    $request->id = 'cd3b121b-88c1-4ee5-a7a0-61391cc8fa0b';

    $response = $sdk->unified->getUnifiedWebhookId($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest](../../models/operations/GetUnifiedWebhookIdRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdResponse](../../models/operations/GetUnifiedWebhookIdResponse.md)**


## patchUnifiedConnectionId

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdRequest;
use \Unified\Unified_to\Models\Shared\Connection;
use \Unified\Unified_to\Models\Shared\PropertyConnectionAuth;
use \Unified\Unified_to\Models\Shared\PropertyPropertyConnectionAuthMeta;
use \Unified\Unified_to\Models\Shared\PropertyConnectionCategories;
use \Unified\Unified_to\Models\Shared\PropertyConnectionPermissions;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchUnifiedConnectionIdRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'iusto';
    $request->connection->auth->apiUrl = 'repellendus';
    $request->connection->auth->appId = 'beatae';
    $request->connection->auth->authorizeUrl = 'ducimus';
    $request->connection->auth->clientId = 'autem';
    $request->connection->auth->clientSecret = 'ut';
    $request->connection->auth->consumerKey = 'occaecati';
    $request->connection->auth->consumerSecret = 'aspernatur';
    $request->connection->auth->emails = [
        'eum',
    ];
    $request->connection->auth->expiresIn = 7041.93;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-26T23:55:54.552Z');
    $request->connection->auth->key = 'doloribus';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Sophie Jacobson';
    $request->connection->auth->otherAuthInfo = [
        'aliquid',
    ];
    $request->connection->auth->pem = 'necessitatibus';
    $request->connection->auth->refreshToken = 'harum';
    $request->connection->auth->state = 'similique';
    $request->connection->auth->token = 'expedita';
    $request->connection->auth->tokenUrl = 'debitis';
    $request->connection->authAwsArn = 'quis';
    $request->connection->categories = [
        PropertyConnectionCategories::Ticketing,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-07T09:57:32.189Z');
    $request->connection->environment = 'error';
    $request->connection->externalXref = 'cupiditate';
    $request->connection->id = 'f3b1358d-6a87-4bb7-aecb-e569d70cb069';
    $request->connection->integrationType = 'occaecati';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::AtsScorecardWrite,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-08T13:01:50.552Z');
    $request->connection->workspaceId = 'provident';
    $request->id = '89441452-a9f0-41f3-842c-61be133bacde';

    $response = $sdk->unified->patchUnifiedConnectionId($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdRequest](../../models/operations/PatchUnifiedConnectionIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdResponse](../../models/operations/PatchUnifiedConnectionIdResponse.md)**


## patchUnifiedUser

Only the name field is updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Shared\User;
use \Unified\Unified_to\Models\Shared\PropertyUserMeta;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-17T05:57:31.732Z');
    $request->email = 'Mitchel.Jast@gmail.com';
    $request->environment = 'laboriosam';
    $request->id = 'f862853f-e285-49ce-b222-31fe6664c41d';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Elisa Reichel';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-11-23T15:53:38.540Z');
    $request->workspaceId = 'culpa';
    $request->workspaceIds = [
        'sit',
    ];

    $response = $sdk->unified->patchUnifiedUser($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `$request`                                                            | [\Unified\Unified_to\Models\Shared\User](../../models/shared/User.md) | :heavy_check_mark:                                                    | The request object to use for the request.                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUnifiedUserResponse](../../models/operations/PatchUnifiedUserResponse.md)**


## postUnifiedConnection

Create connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Shared\Connection;
use \Unified\Unified_to\Models\Shared\PropertyConnectionAuth;
use \Unified\Unified_to\Models\Shared\PropertyPropertyConnectionAuthMeta;
use \Unified\Unified_to\Models\Shared\PropertyConnectionCategories;
use \Unified\Unified_to\Models\Shared\PropertyConnectionPermissions;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new Connection();
    $request->auth = new PropertyConnectionAuth();
    $request->auth->accessToken = 'eum';
    $request->auth->apiUrl = 'provident';
    $request->auth->appId = 'tempore';
    $request->auth->authorizeUrl = 'corrupti';
    $request->auth->clientId = 'at';
    $request->auth->clientSecret = 'fugit';
    $request->auth->consumerKey = 'cupiditate';
    $request->auth->consumerSecret = 'dicta';
    $request->auth->emails = [
        'libero',
    ];
    $request->auth->expiresIn = 9281.55;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-12-28T08:06:10.966Z');
    $request->auth->key = 'quae';
    $request->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'Genevieve Cormier';
    $request->auth->otherAuthInfo = [
        'atque',
    ];
    $request->auth->pem = 'molestiae';
    $request->auth->refreshToken = 'aliquam';
    $request->auth->state = 'perspiciatis';
    $request->auth->token = 'labore';
    $request->auth->tokenUrl = 'esse';
    $request->authAwsArn = 'unde';
    $request->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-07-11T08:27:47.876Z');
    $request->environment = 'modi';
    $request->externalXref = 'maiores';
    $request->id = 'cf7b50cf-87f0-48f3-9271-076a24b40c8f';
    $request->integrationType = 'doloremque';
    $request->isPaused = false;
    $request->permissions = [
        PropertyConnectionPermissions::MartechListRead,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-02-01T22:27:24.071Z');
    $request->workspaceId = 'a';

    $response = $sdk->unified->postUnifiedConnection($request);

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

**[?\Unified\Unified_to\Models\Operations\PostUnifiedConnectionResponse](../../models/operations/PostUnifiedConnectionResponse.md)**


## postUnifiedWebhookConnectionIdObject

To maintain compatibility with the webhooks specification and Zapier webhooks, only the hook_url field is required in the payload when creating a Webhook.  When updated/new objects are found, the array of objects will be POSTed to the hook_url with the paramater hookId=<hookId>.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest;
use \Unified\Unified_to\Models\Shared\Webhook;
use \Unified\Unified_to\Models\Shared\PropertyWebhookEvents;
use \Unified\Unified_to\Models\Shared\WebhookObjectType;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectEvents;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostUnifiedWebhookConnectionIdObjectRequest();
    $request->webhook = new Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-16T04:30:42.293Z');
    $request->webhook->connectionId = 'molestias';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-04T19:42:40.275Z');
    $request->webhook->environment = 'laudantium';
    $request->webhook->events = [
        PropertyWebhookEvents::Created,
    ];
    $request->webhook->hookUrl = 'maiores';
    $request->webhook->id = '86996c8e-22be-40a3-8f47-893bd23f8660';
    $request->webhook->includeRaw = false;
    $request->webhook->integrationType = 'eaque';
    $request->webhook->interval = 7950.71;
    $request->webhook->objectType = WebhookObjectType::CrmLead;
    $request->webhook->subscriptions = [
        'inventore',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-03T05:56:05.673Z');
    $request->webhook->workspaceId = 'voluptatum';
    $request->connectionId = 'consectetur';
    $request->events = [
        PostUnifiedWebhookConnectionIdObjectEvents::Updated,
    ];
    $request->object = 'magni';

    $response = $sdk->unified->postUnifiedWebhookConnectionIdObject($request);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                   | Type                                                                                                                                                        | Required                                                                                                                                                    | Description                                                                                                                                                 |
| ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                  | [\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest](../../models/operations/PostUnifiedWebhookConnectionIdObjectRequest.md) | :heavy_check_mark:                                                                                                                                          | The request object to use for the request.                                                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectResponse](../../models/operations/PostUnifiedWebhookConnectionIdObjectResponse.md)**


## putUnifiedConnectionId

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdRequest;
use \Unified\Unified_to\Models\Shared\Connection;
use \Unified\Unified_to\Models\Shared\PropertyConnectionAuth;
use \Unified\Unified_to\Models\Shared\PropertyPropertyConnectionAuthMeta;
use \Unified\Unified_to\Models\Shared\PropertyConnectionCategories;
use \Unified\Unified_to\Models\Shared\PropertyConnectionPermissions;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutUnifiedConnectionIdRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'in';
    $request->connection->auth->apiUrl = 'ipsum';
    $request->connection->auth->appId = 'impedit';
    $request->connection->auth->authorizeUrl = 'est';
    $request->connection->auth->clientId = 'est';
    $request->connection->auth->clientSecret = 'provident';
    $request->connection->auth->consumerKey = 'vitae';
    $request->connection->auth->consumerSecret = 'quae';
    $request->connection->auth->emails = [
        'voluptatum',
    ];
    $request->connection->auth->expiresIn = 7330.09;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-17T04:01:35.648Z');
    $request->connection->auth->key = 'maiores';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Miss Karla Jenkins';
    $request->connection->auth->otherAuthInfo = [
        'ratione',
    ];
    $request->connection->auth->pem = 'inventore';
    $request->connection->auth->refreshToken = 'dolorum';
    $request->connection->auth->state = 'ipsam';
    $request->connection->auth->token = 'modi';
    $request->connection->auth->tokenUrl = 'possimus';
    $request->connection->authAwsArn = 'cumque';
    $request->connection->categories = [
        PropertyConnectionCategories::Passthrough,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-01T15:28:14.456Z');
    $request->connection->environment = 'iste';
    $request->connection->externalXref = 'modi';
    $request->connection->id = 'f92fed93-9ba8-4f71-a299-2c20ee1228ac';
    $request->connection->integrationType = 'dolor';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::TicketingCustomerWrite,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-09-17T20:44:33.298Z');
    $request->connection->workspaceId = 'commodi';
    $request->id = '47d240bc-11ea-4482-824c-cc6a2f0f5b9d';

    $response = $sdk->unified->putUnifiedConnectionId($request);

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdRequest](../../models/operations/PutUnifiedConnectionIdRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdResponse](../../models/operations/PutUnifiedConnectionIdResponse.md)**


## putUnifiedUser

Only the name field is updated.

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Shared\User;
use \Unified\Unified_to\Models\Shared\PropertyUserMeta;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-23T14:58:16.402Z');
    $request->email = 'Ari.Brekke@hotmail.com';
    $request->environment = 'commodi';
    $request->id = '87d3100e-8e2b-49b0-9746-d2a7c7d1ea0e';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Sheryl White';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-07-27T08:05:51.028Z');
    $request->workspaceId = 'earum';
    $request->workspaceIds = [
        'veniam',
    ];

    $response = $sdk->unified->putUnifiedUser($request);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                             | Type                                                                  | Required                                                              | Description                                                           |
| --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- | --------------------------------------------------------------------- |
| `$request`                                                            | [\Unified\Unified_to\Models\Shared\User](../../models/shared/User.md) | :heavy_check_mark:                                                    | The request object to use for the request.                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PutUnifiedUserResponse](../../models/operations/PutUnifiedUserResponse.md)**

