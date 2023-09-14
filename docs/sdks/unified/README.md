# unified

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
use \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUnifiedConnectionIdRequest();
    $request->id = '645de986-7551-4a9c-8e61-ec2c79a39ae5';

    $requestSecurity = new DeleteUnifiedConnectionIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->deleteUnifiedConnectionId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest](../../models/operations/DeleteUnifiedConnectionIdRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdSecurity](../../models/operations/DeleteUnifiedConnectionIdSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


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
use \Unified\Unified_to\Models\Operations\DeleteUnifiedUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $requestSecurity = new DeleteUnifiedUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->deleteUnifiedUser($requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteUnifiedUserSecurity](../../models/operations/DeleteUnifiedUserSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


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
use \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUnifiedWebhookIdRequest();
    $request->id = 'a4d5a65b-4d55-462d-9b7d-9e2d6fcf5576';

    $requestSecurity = new DeleteUnifiedWebhookIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->deleteUnifiedWebhookId($request, $requestSecurity);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdRequest](../../models/operations/DeleteUnifiedWebhookIdRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\DeleteUnifiedWebhookIdSecurity](../../models/operations/DeleteUnifiedWebhookIdSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedApicallRequest();
    $request->connectionId = 'dolores';
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-04-12T07:50:32.201Z');
    $request->env = 'harum';
    $request->error = false;
    $request->externalXref = 'corrupti';
    $request->integrationType = 'quam';
    $request->limit = 3233.18;
    $request->offset = 7877.69;
    $request->order = 'sequi';
    $request->sort = 'culpa';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-10-23T00:21:09.182Z');

    $requestSecurity = new GetUnifiedApicallSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedApicall($request, $requestSecurity);

    if ($response->apiCalls !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallRequest](../../models/operations/GetUnifiedApicallRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallSecurity](../../models/operations/GetUnifiedApicallSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedApicallIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedApicallIdRequest();
    $request->id = '0282a51f-41cf-4679-aed3-d724c18f581e';

    $requestSecurity = new GetUnifiedApicallIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedApicallId($request, $requestSecurity);

    if ($response->apiCall !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallIdRequest](../../models/operations/GetUnifiedApicallIdRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedApicallIdSecurity](../../models/operations/GetUnifiedApicallIdSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionCategories;
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedConnectionRequest();
    $request->categories = [
        GetUnifiedConnectionCategories::Enrich,
    ];
    $request->env = 'laudantium';
    $request->externalXref = 'porro';
    $request->limit = 7948.94;
    $request->offset = 8856.75;
    $request->order = 'consectetur';
    $request->sort = 'reiciendis';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-17T00:52:06.013Z');

    $requestSecurity = new GetUnifiedConnectionSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedConnection($request, $requestSecurity);

    if ($response->connections !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest](../../models/operations/GetUnifiedConnectionRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionSecurity](../../models/operations/GetUnifiedConnectionSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedConnectionIdRequest();
    $request->id = '6600da0e-3aa6-41c6-be09-d852b53b32c8';

    $requestSecurity = new GetUnifiedConnectionIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedConnectionId($request, $requestSecurity);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdRequest](../../models/operations/GetUnifiedConnectionIdRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionIdSecurity](../../models/operations/GetUnifiedConnectionIdSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationCategories;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationCategories::Martech,
    ];
    $request->limit = 4893.2;
    $request->offset = 8112.21;
    $request->order = 'ratione';
    $request->sort = 'eligendi';
    $request->summary = false;
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-27T00:14:53.581Z');

    $requestSecurity = new GetUnifiedIntegrationSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedIntegration($request, $requestSecurity);

    if ($response->integrations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationRequest](../../models/operations/GetUnifiedIntegrationRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationSecurity](../../models/operations/GetUnifiedIntegrationSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest();
    $request->env = 'alias';
    $request->externalXref = 'accusamus';
    $request->failureRedirect = 'inventore';
    $request->integrationType = 'voluptas';
    $request->lang = 'molestiae';
    $request->redirect = false;
    $request->scopes = [
        GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes::CrmDealWrite,
    ];
    $request->state = 'at';
    $request->subdomain = 'excepturi';
    $request->successRedirect = 'perferendis';
    $request->workspaceId = 'nostrum';

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
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationIntegrationTypeRequest();
    $request->integrationType = 'quisquam';

    $requestSecurity = new GetUnifiedIntegrationIntegrationTypeSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedIntegrationIntegrationType($request, $requestSecurity);

    if ($response->integration !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeRequest](../../models/operations/GetUnifiedIntegrationIntegrationTypeRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetUnifiedIntegrationIntegrationTypeSecurity](../../models/operations/GetUnifiedIntegrationIntegrationTypeSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedIntegrationWorkspaceWorkspaceIdCategories;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedIntegrationWorkspaceWorkspaceIdRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationWorkspaceWorkspaceIdCategories::Martech,
    ];
    $request->env = 'labore';
    $request->summary = false;
    $request->workspaceId = 'quidem';

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
use \Unified\Unified_to\Models\Operations\GetUnifiedUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $requestSecurity = new GetUnifiedUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedUser($requestSecurity);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetUnifiedUserSecurity](../../models/operations/GetUnifiedUserSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedUserTokenSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $requestSecurity = new GetUnifiedUserTokenSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedUserToken($requestSecurity);

    if ($response->getUnifiedUserToken200ApplicationJSONString !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedUserTokenSecurity](../../models/operations/GetUnifiedUserTokenSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedWebhookRequest();
    $request->env = 'recusandae';
    $request->limit = 8501.08;
    $request->object = 'itaque';
    $request->offset = 9935.59;
    $request->order = 'amet';
    $request->sort = 'quod';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-10T08:01:50.699Z');

    $requestSecurity = new GetUnifiedWebhookSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedWebhook($request, $requestSecurity);

    if ($response->webhooks !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookRequest](../../models/operations/GetUnifiedWebhookRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookSecurity](../../models/operations/GetUnifiedWebhookSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


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
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest;
use \Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedWebhookIdRequest();
    $request->id = '7c390995-5282-450d-8bbc-d3b121b88c1e';

    $requestSecurity = new GetUnifiedWebhookIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->getUnifiedWebhookId($request, $requestSecurity);

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdRequest](../../models/operations/GetUnifiedWebhookIdRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedWebhookIdSecurity](../../models/operations/GetUnifiedWebhookIdSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


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
use \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdRequest;
use \Unified\Unified_to\Models\Shared\Connection;
use \Unified\Unified_to\Models\Shared\PropertyConnectionAuth;
use \Unified\Unified_to\Models\Shared\PropertyPropertyConnectionAuthMeta;
use \Unified\Unified_to\Models\Shared\PropertyConnectionCategories;
use \Unified\Unified_to\Models\Shared\PropertyConnectionPermissions;
use \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchUnifiedConnectionIdRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'saepe';
    $request->connection->auth->apiUrl = 'minima';
    $request->connection->auth->appId = 'saepe';
    $request->connection->auth->authorizeUrl = 'voluptate';
    $request->connection->auth->clientId = 'similique';
    $request->connection->auth->clientSecret = 'doloremque';
    $request->connection->auth->consumerKey = 'autem';
    $request->connection->auth->consumerSecret = 'quasi';
    $request->connection->auth->emails = [
        'adipisci',
    ];
    $request->connection->auth->expiresIn = 5694.15;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-11T01:26:47.707Z');
    $request->connection->auth->key = 'maxime';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Miss Van O'Connell';
    $request->connection->auth->otherAuthInfo = [
        'repellendus',
    ];
    $request->connection->auth->pem = 'beatae';
    $request->connection->auth->refreshToken = 'ducimus';
    $request->connection->auth->state = 'autem';
    $request->connection->auth->token = 'ut';
    $request->connection->auth->tokenUrl = 'occaecati';
    $request->connection->authAwsArn = 'aspernatur';
    $request->connection->categories = [
        PropertyConnectionCategories::Auth,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-19T10:14:39.692Z');
    $request->connection->environment = 'cumque';
    $request->connection->externalXref = 'doloribus';
    $request->connection->id = '5e6cb6eb-abe5-4e0b-99f3-b1358d6a87bb';
    $request->connection->integrationType = 'odio';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::TicketingCustomerWrite,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-08-11T19:46:11.395Z');
    $request->connection->workspaceId = 'harum';
    $request->id = 'e569d70c-b069-4907-b989-441452a9f01f';

    $requestSecurity = new PatchUnifiedConnectionIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->patchUnifiedConnectionId($request, $requestSecurity);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdRequest](../../models/operations/PatchUnifiedConnectionIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionIdSecurity](../../models/operations/PatchUnifiedConnectionIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


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
use \Unified\Unified_to\Models\Shared\User;
use \Unified\Unified_to\Models\Shared\PropertyUserMeta;
use \Unified\Unified_to\Models\Operations\PatchUnifiedUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-09T06:20:47.802Z');
    $request->email = 'Chelsea.Runolfsson@gmail.com';
    $request->environment = 'quidem';
    $request->id = 'e133bacd-e532-4b65-a6f8-62853fe2859c';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Alfred Cummerata';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-05T18:17:30.909Z');
    $request->workspaceId = 'doloribus';
    $request->workspaceIds = [
        'earum',
    ];

    $requestSecurity = new PatchUnifiedUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->patchUnifiedUser($request, $requestSecurity);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Shared\User](../../models/shared/User.md)                                                 | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchUnifiedUserSecurity](../../models/operations/PatchUnifiedUserSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


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
use \Unified\Unified_to\Models\Shared\Connection;
use \Unified\Unified_to\Models\Shared\PropertyConnectionAuth;
use \Unified\Unified_to\Models\Shared\PropertyPropertyConnectionAuthMeta;
use \Unified\Unified_to\Models\Shared\PropertyConnectionCategories;
use \Unified\Unified_to\Models\Shared\PropertyConnectionPermissions;
use \Unified\Unified_to\Models\Operations\PostUnifiedConnectionSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new Connection();
    $request->auth = new PropertyConnectionAuth();
    $request->auth->accessToken = 'commodi';
    $request->auth->apiUrl = 'nisi';
    $request->auth->appId = 'aliquid';
    $request->auth->authorizeUrl = 'dolore';
    $request->auth->clientId = 'eligendi';
    $request->auth->clientSecret = 'numquam';
    $request->auth->consumerKey = 'quae';
    $request->auth->consumerSecret = 'pariatur';
    $request->auth->emails = [
        'magni',
    ];
    $request->auth->expiresIn = 9805.84;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-09-02T02:01:55.619Z');
    $request->auth->key = 'ad';
    $request->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'Ms. Ira Nader';
    $request->auth->otherAuthInfo = [
        'tempore',
    ];
    $request->auth->pem = 'corrupti';
    $request->auth->refreshToken = 'at';
    $request->auth->state = 'fugit';
    $request->auth->token = 'cupiditate';
    $request->auth->tokenUrl = 'dicta';
    $request->authAwsArn = 'libero';
    $request->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-12-28T08:06:10.966Z');
    $request->environment = 'quae';
    $request->externalXref = 'eaque';
    $request->id = 'a2aa8749-479e-4dd4-bcf7-b50cf87f08f3';
    $request->integrationType = 'excepturi';
    $request->isPaused = false;
    $request->permissions = [
        PropertyConnectionPermissions::CrmCompanyWrite,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-12-04T04:15:00.638Z');
    $request->workspaceId = 'perferendis';

    $requestSecurity = new PostUnifiedConnectionSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->postUnifiedConnection($request, $requestSecurity);

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Shared\Connection](../../models/shared/Connection.md)                                               | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PostUnifiedConnectionSecurity](../../models/operations/PostUnifiedConnectionSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


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
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest;
use \Unified\Unified_to\Models\Shared\Webhook;
use \Unified\Unified_to\Models\Shared\PropertyWebhookEvents;
use \Unified\Unified_to\Models\Shared\WebhookObjectType;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectEvents;
use \Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostUnifiedWebhookConnectionIdObjectRequest();
    $request->webhook = new Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-28T15:12:20.173Z');
    $request->webhook->connectionId = 'culpa';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-14T19:04:56.953Z');
    $request->webhook->environment = 'distinctio';
    $request->webhook->events = [
        PropertyWebhookEvents::Updated,
    ];
    $request->webhook->hookUrl = 'consequatur';
    $request->webhook->id = 'c8f08bff-1081-4e88-b869-96c8e22be0a3';
    $request->webhook->includeRaw = false;
    $request->webhook->integrationType = 'maxime';
    $request->webhook->interval = 9477.24;
    $request->webhook->objectType = WebhookObjectType::CrmDeal;
    $request->webhook->subscriptions = [
        'voluptate',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-11-09T09:19:40.796Z');
    $request->webhook->workspaceId = 'dolorem';
    $request->connectionId = 'soluta';
    $request->events = [
        PostUnifiedWebhookConnectionIdObjectEvents::Created,
    ];
    $request->object = 'fugit';

    $requestSecurity = new PostUnifiedWebhookConnectionIdObjectSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->postUnifiedWebhookConnectionIdObject($request, $requestSecurity);

    if ($response->webhook !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                     | Type                                                                                                                                                          | Required                                                                                                                                                      | Description                                                                                                                                                   |
| ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectRequest](../../models/operations/PostUnifiedWebhookConnectionIdObjectRequest.md)   | :heavy_check_mark:                                                                                                                                            | The request object to use for the request.                                                                                                                    |
| `security`                                                                                                                                                    | [\Unified\Unified_to\Models\Operations\PostUnifiedWebhookConnectionIdObjectSecurity](../../models/operations/PostUnifiedWebhookConnectionIdObjectSecurity.md) | :heavy_check_mark:                                                                                                                                            | The security requirements to use for the request.                                                                                                             |


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
use \Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdRequest;
use \Unified\Unified_to\Models\Shared\Connection;
use \Unified\Unified_to\Models\Shared\PropertyConnectionAuth;
use \Unified\Unified_to\Models\Shared\PropertyPropertyConnectionAuthMeta;
use \Unified\Unified_to\Models\Shared\PropertyConnectionCategories;
use \Unified\Unified_to\Models\Shared\PropertyConnectionPermissions;
use \Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutUnifiedConnectionIdRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'neque';
    $request->connection->auth->apiUrl = 'asperiores';
    $request->connection->auth->appId = 'corrupti';
    $request->connection->auth->authorizeUrl = 'autem';
    $request->connection->auth->clientId = 'autem';
    $request->connection->auth->clientSecret = 'alias';
    $request->connection->auth->consumerKey = 'eaque';
    $request->connection->auth->consumerSecret = 'minus';
    $request->connection->auth->emails = [
        'commodi',
    ];
    $request->connection->auth->expiresIn = 792.39;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-03T05:56:05.673Z');
    $request->connection->auth->key = 'voluptatum';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Suzanne Cummerata';
    $request->connection->auth->otherAuthInfo = [
        'impedit',
    ];
    $request->connection->auth->pem = 'est';
    $request->connection->auth->refreshToken = 'est';
    $request->connection->auth->state = 'provident';
    $request->connection->auth->token = 'vitae';
    $request->connection->auth->tokenUrl = 'quae';
    $request->connection->authAwsArn = 'voluptatum';
    $request->connection->categories = [
        PropertyConnectionCategories::Martech,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-17T04:01:35.648Z');
    $request->connection->environment = 'maiores';
    $request->connection->externalXref = 'veritatis';
    $request->connection->id = 'b61a331a-54dc-4102-94f9-2fed939ba8f7';
    $request->connection->integrationType = 'et';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::AtsInterviewRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-31T07:58:59.734Z');
    $request->connection->workspaceId = 'iste';
    $request->id = '2c20ee12-28ac-43ad-8647-d240bc11ea48';

    $requestSecurity = new PutUnifiedConnectionIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->putUnifiedConnectionId($request, $requestSecurity);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdRequest](../../models/operations/PutUnifiedConnectionIdRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutUnifiedConnectionIdSecurity](../../models/operations/PutUnifiedConnectionIdSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Shared\User;
use \Unified\Unified_to\Models\Shared\PropertyUserMeta;
use \Unified\Unified_to\Models\Operations\PutUnifiedUserSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-06-25T18:01:21.633Z');
    $request->email = 'Elinor_Schamberger40@gmail.com';
    $request->environment = 'laborum';
    $request->id = '2f0f5b9d-3cb1-41a7-a87d-3100e8e2b9b0';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Cody Hahn';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-29T00:24:51.754Z');
    $request->workspaceId = 'nihil';
    $request->workspaceIds = [
        'quisquam',
    ];

    $requestSecurity = new PutUnifiedUserSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->unified->putUnifiedUser($request, $requestSecurity);

    if ($response->user !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Shared\User](../../models/shared/User.md)                                             | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\PutUnifiedUserSecurity](../../models/operations/PutUnifiedUserSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PutUnifiedUserResponse](../../models/operations/PutUnifiedUserResponse.md)**

