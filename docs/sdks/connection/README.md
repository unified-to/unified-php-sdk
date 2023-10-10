# Connection
(*connection*)

### Available Operations

* [deleteUnifiedConnectionId](#deleteunifiedconnectionid) - Remove connection
* [getUnifiedConnection](#getunifiedconnection) - List all connections
* [getUnifiedConnectionId](#getunifiedconnectionid) - Retrieve connection
* [patchUnifiedConnectionId](#patchunifiedconnectionid) - Update connection
* [postUnifiedConnection](#postunifiedconnection) - Create connection
* [putUnifiedConnectionId](#putunifiedconnectionid) - Update connection

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

    $response = $sdk->connection->deleteUnifiedConnectionId($request);

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

    $response = $sdk->connection->getUnifiedConnection($request);

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

    $response = $sdk->connection->getUnifiedConnectionId($request);

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

    $response = $sdk->connection->patchUnifiedConnectionId($request);

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

    $response = $sdk->connection->postUnifiedConnection($request);

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

    $response = $sdk->connection->putUnifiedConnectionId($request);

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

