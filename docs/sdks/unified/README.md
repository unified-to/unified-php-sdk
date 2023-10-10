# Unified
(*unified*)

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteUnifiedConnectionIdRequest();
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteUnifiedWebhookIdRequest();
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedApicallRequest();
    $request->connectionId = 'delectus green Hybrid';
    $request->createdLte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-02T21:36:49.952Z');
    $request->env = 'Fantastic Iodine indexing';
    $request->error = false;
    $request->externalXref = 'Music';
    $request->integrationType = 'Soft';
    $request->limit = 2390.64;
    $request->offset = 3757.34;
    $request->order = 'mobile envisioneer';
    $request->sort = 'North payment opposite';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-11T16:18:13.644Z');

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedApicallIdRequest();
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedConnectionRequest();
    $request->categories = [
        GetUnifiedConnectionCategories::Ats,
    ];
    $request->env = 'copying invoice coulomb';
    $request->externalXref = 'Islands West';
    $request->limit = 7809.21;
    $request->offset = 2750.2;
    $request->order = 'Volkswagen architect';
    $request->sort = 'consequently synthesizing Technician';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-09T20:41:53.442Z');

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedConnectionIdRequest();
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationCategories::Enrich,
    ];
    $request->limit = 7363.95;
    $request->offset = 8214.4;
    $request->order = 'Nelda Implemented';
    $request->sort = 'cabinet';
    $request->summary = false;
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-05T00:16:37.455Z');

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeRequest();
    $request->env = 'Algerian';
    $request->externalXref = 'Cambridgeshire Surinam';
    $request->failureRedirect = 'Designer Drive';
    $request->integrationType = 'program Home';
    $request->lang = 'Plastic program';
    $request->redirect = false;
    $request->scopes = [
        GetUnifiedIntegrationAuthWorkspaceIdIntegrationTypeScopes::CrmFileRead,
    ];
    $request->state = 'Functionality Product';
    $request->subdomain = 'payment Developer Dynamic';
    $request->successRedirect = 'Northeast';
    $request->workspaceId = 'duh empower Kwanza';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationIntegrationTypeRequest();
    $request->integrationType = 'Pizza Electric';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedIntegrationWorkspaceWorkspaceIdRequest();
    $request->active = false;
    $request->categories = [
        GetUnifiedIntegrationWorkspaceWorkspaceIdCategories::Hris,
    ];
    $request->env = 'North Southeast exercitationem';
    $request->summary = false;
    $request->workspaceId = 'Bronze Plastic';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedWebhookRequest();
    $request->env = 'Investor methodical Fitness';
    $request->limit = 8087.22;
    $request->object = 'Franc past salmon';
    $request->offset = 5240.75;
    $request->order = 'program';
    $request->sort = 'below JSON';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-29T13:22:55.562Z');

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedWebhookIdRequest();
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchUnifiedConnectionIdRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'Northwest Cupertino';
    $request->connection->auth->apiUrl = 'Center Curium Electric';
    $request->connection->auth->appId = 'female fragrant';
    $request->connection->auth->authorizeUrl = 'Electric Bicycle payment';
    $request->connection->auth->clientId = 'transmitting North';
    $request->connection->auth->clientSecret = 'mole Gasoline morph';
    $request->connection->auth->consumerKey = 'Keyboard Antimony primary';
    $request->connection->auth->consumerSecret = 'yearly';
    $request->connection->auth->emails = [
        'athwart',
    ];
    $request->connection->auth->expiresIn = 3185.09;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-12T13:21:47.977Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'inside Rupee';
    $request->connection->auth->otherAuthInfo = [
        'Future',
    ];
    $request->connection->auth->pem = 'guard Internal';
    $request->connection->auth->refreshToken = 'Diesel';
    $request->connection->auth->state = 'copy Cotton Bicycle';
    $request->connection->auth->token = 'drive gold';
    $request->connection->auth->tokenUrl = 'now';
    $request->connection->authAwsArn = 'yum';
    $request->connection->categories = [
        PropertyConnectionCategories::Hris,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-18T22:02:30.822Z');
    $request->connection->environment = 'Northwest Balanced';
    $request->connection->externalXref = 'boo';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'Soft';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::CrmLeadRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-27T15:43:44.767Z');
    $request->connection->workspaceId = 'extend';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-24T15:25:24.483Z');
    $request->email = 'Emmalee.Quitzon@yahoo.com';
    $request->environment = 'Bicycle';
    $request->id = '<ID>';
    $request->meta = new PropertyUserMeta();
    $request->name = 'vice compressing';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-05T16:52:20.023Z');
    $request->workspaceId = 'Hybrid methodologies';
    $request->workspaceIds = [
        'Potassium',
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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Connection();
    $request->auth = new PropertyConnectionAuth();
    $request->auth->accessToken = 'asperiores indexing';
    $request->auth->apiUrl = 'plus pace global';
    $request->auth->appId = 'And port';
    $request->auth->authorizeUrl = 'West whiteboard';
    $request->auth->clientId = 'Folk';
    $request->auth->clientSecret = 'Northwest Modern';
    $request->auth->consumerKey = 'Southeast deposit';
    $request->auth->consumerSecret = 'Falls irritating up';
    $request->auth->emails = [
        'intuitive',
    ];
    $request->auth->expiresIn = 4121.5;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-21T03:25:42.786Z');
    $request->auth->key = '<key>';
    $request->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'membership Classical schnitzel';
    $request->auth->otherAuthInfo = [
        'Convertible',
    ];
    $request->auth->pem = 'magenta Riel bolívar';
    $request->auth->refreshToken = 'Pula';
    $request->auth->state = 'white';
    $request->auth->token = 'Northwest';
    $request->auth->tokenUrl = 'unbutton';
    $request->authAwsArn = 'Investor circuit';
    $request->categories = [
        PropertyConnectionCategories::Ats,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-25T14:37:40.202Z');
    $request->environment = 'Hat watt';
    $request->externalXref = 'Sausages tan';
    $request->id = '<ID>';
    $request->integrationType = 'Principal Extended velit';
    $request->isPaused = false;
    $request->permissions = [
        PropertyConnectionPermissions::CrmFileWrite,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-22T05:13:05.778Z');
    $request->workspaceId = 'Auto';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostUnifiedWebhookConnectionIdObjectRequest();
    $request->webhook = new Webhook();
    $request->webhook->checkedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-25T07:12:08.980Z');
    $request->webhook->connectionId = 'deposit 1080p Passenger';
    $request->webhook->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-21T14:58:56.193Z');
    $request->webhook->environment = 'Minnesota Soap';
    $request->webhook->events = [
        PropertyWebhookEvents::Updated,
    ];
    $request->webhook->hookUrl = 'Table female ken';
    $request->webhook->id = '<ID>';
    $request->webhook->includeRaw = false;
    $request->webhook->integrationType = 'chocolate';
    $request->webhook->interval = 1710.16;
    $request->webhook->objectType = WebhookObjectType::EnrichCompany;
    $request->webhook->subscriptions = [
        'female',
    ];
    $request->webhook->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-02T17:13:06.397Z');
    $request->webhook->workspaceId = 'hertz';
    $request->connectionId = 'Borders';
    $request->events = [
        PostUnifiedWebhookConnectionIdObjectEvents::Created,
    ];
    $request->object = 'scalable';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutUnifiedConnectionIdRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'female Buckinghamshire';
    $request->connection->auth->apiUrl = 'Web';
    $request->connection->auth->appId = 'pumpkin Account';
    $request->connection->auth->authorizeUrl = 'dolorem Hybrid white';
    $request->connection->auth->clientId = 'ohm';
    $request->connection->auth->clientSecret = 'Pennsylvania Executive';
    $request->connection->auth->consumerKey = 'silver Account Accountability';
    $request->connection->auth->consumerSecret = 'Mouse';
    $request->connection->auth->emails = [
        'oh',
    ];
    $request->connection->auth->expiresIn = 8946.31;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-29T12:35:08.478Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'incidentally shrimp bypass';
    $request->connection->auth->otherAuthInfo = [
        'invoice',
    ];
    $request->connection->auth->pem = 'recent midst Northeast';
    $request->connection->auth->refreshToken = 'Product';
    $request->connection->auth->state = 'circuit precious';
    $request->connection->auth->token = 'gee collaborative withdrawal';
    $request->connection->auth->tokenUrl = 'Platinum';
    $request->connection->authAwsArn = 'suddenly Fiat';
    $request->connection->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-20T19:51:21.025Z');
    $request->connection->environment = 'redundant Southeast Camren';
    $request->connection->externalXref = 'firewall';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'Beauty';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::Webhook,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-30T14:20:47.994Z');
    $request->connection->workspaceId = 'parse Peso Investment';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new User();
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-31T04:46:29.769Z');
    $request->email = 'Selena59@yahoo.com';
    $request->environment = 'Bedfordshire Lucia';
    $request->id = '<ID>';
    $request->meta = new PropertyUserMeta();
    $request->name = 'Bicycle hacking South';
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-15T15:08:26.238Z');
    $request->workspaceId = 'Card defect';
    $request->workspaceIds = [
        'repudiandae',
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

