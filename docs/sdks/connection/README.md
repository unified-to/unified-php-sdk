# Connection

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
use \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUnifiedConnectionIdRequest();
    $request->id = '6e2813fa-4a41-4c48-8d3f-2132af03102d';

    $requestSecurity = new DeleteUnifiedConnectionIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->connection->deleteUnifiedConnectionId($request, $requestSecurity);

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
        GetUnifiedConnectionCategories::Ats,
    ];
    $request->env = 'illo';
    $request->externalXref = 'magnam';
    $request->limit = 9618.42;
    $request->offset = 2550.64;
    $request->order = 'optio';
    $request->sort = 'nobis';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-01T17:19:13.312Z');

    $requestSecurity = new GetUnifiedConnectionSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->connection->getUnifiedConnection($request, $requestSecurity);

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
    $request->id = '18bf9621-a6a4-4f77-a87e-e3e4be752c65';

    $requestSecurity = new GetUnifiedConnectionIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->connection->getUnifiedConnectionId($request, $requestSecurity);

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
    $request->connection->auth->accessToken = 'facilis';
    $request->connection->auth->apiUrl = 'ipsum';
    $request->connection->auth->appId = 'ut';
    $request->connection->auth->authorizeUrl = 'quaerat';
    $request->connection->auth->clientId = 'architecto';
    $request->connection->auth->clientSecret = 'praesentium';
    $request->connection->auth->consumerKey = 'eveniet';
    $request->connection->auth->consumerSecret = 'dolor';
    $request->connection->auth->emails = [
        'expedita',
    ];
    $request->connection->auth->expiresIn = 7300.03;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-07T07:22:33.976Z');
    $request->connection->auth->key = 'minus';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Gustavo Mayer';
    $request->connection->auth->otherAuthInfo = [
        'accusamus',
    ];
    $request->connection->auth->pem = 'aperiam';
    $request->connection->auth->refreshToken = 'voluptates';
    $request->connection->auth->state = 'laudantium';
    $request->connection->auth->token = 'tempora';
    $request->connection->auth->tokenUrl = 'quae';
    $request->connection->authAwsArn = 'omnis';
    $request->connection->categories = [
        PropertyConnectionCategories::Ticketing,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-02-06T23:02:21.782Z');
    $request->connection->environment = 'deleniti';
    $request->connection->externalXref = 'modi';
    $request->connection->id = 'f144f3e0-7edc-4c4a-a5f3-cabd905a972e';
    $request->connection->integrationType = 'accusantium';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::CrmUserWrite,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-11T22:08:27.190Z');
    $request->connection->workspaceId = 'quia';
    $request->id = '8227b2d3-0947-40bf-ba4f-a87cf535a6fa';

    $requestSecurity = new PatchUnifiedConnectionIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->connection->patchUnifiedConnectionId($request, $requestSecurity);

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
    $request->auth->accessToken = 'recusandae';
    $request->auth->apiUrl = 'corporis';
    $request->auth->appId = 'non';
    $request->auth->authorizeUrl = 'necessitatibus';
    $request->auth->clientId = 'distinctio';
    $request->auth->clientSecret = 'maiores';
    $request->auth->consumerKey = 'laboriosam';
    $request->auth->consumerSecret = 'voluptatem';
    $request->auth->emails = [
        'optio',
    ];
    $request->auth->expiresIn = 1936.23;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-21T00:41:23.553Z');
    $request->auth->key = 'voluptatibus';
    $request->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'Tammy Farrell';
    $request->auth->otherAuthInfo = [
        'nostrum',
    ];
    $request->auth->pem = 'temporibus';
    $request->auth->refreshToken = 'ratione';
    $request->auth->state = 'dolor';
    $request->auth->token = 'nisi';
    $request->auth->tokenUrl = 'dignissimos';
    $request->authAwsArn = 'reiciendis';
    $request->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-02T11:11:56.667Z');
    $request->environment = 'accusantium';
    $request->externalXref = 'quod';
    $request->id = 'c8df79f0-a396-4d90-8364-b7c15dfbace1';
    $request->integrationType = 'quas';
    $request->isPaused = false;
    $request->permissions = [
        PropertyConnectionPermissions::MartechListRead,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-05T14:24:35.908Z');
    $request->workspaceId = 'impedit';

    $requestSecurity = new PostUnifiedConnectionSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->connection->postUnifiedConnection($request, $requestSecurity);

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
    $request->connection->auth->accessToken = 'tempora';
    $request->connection->auth->apiUrl = 'eveniet';
    $request->connection->auth->appId = 'repudiandae';
    $request->connection->auth->authorizeUrl = 'sed';
    $request->connection->auth->clientId = 'impedit';
    $request->connection->auth->clientSecret = 'quas';
    $request->connection->auth->consumerKey = 'impedit';
    $request->connection->auth->consumerSecret = 'vel';
    $request->connection->auth->emails = [
        'eligendi',
    ];
    $request->connection->auth->expiresIn = 9231.59;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-23T15:22:12.767Z');
    $request->connection->auth->key = 'veritatis';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Dexter Terry DDS';
    $request->connection->auth->otherAuthInfo = [
        'dignissimos',
    ];
    $request->connection->auth->pem = 'minus';
    $request->connection->auth->refreshToken = 'distinctio';
    $request->connection->auth->state = 'possimus';
    $request->connection->auth->token = 'cum';
    $request->connection->auth->tokenUrl = 'suscipit';
    $request->connection->authAwsArn = 'saepe';
    $request->connection->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-04T19:13:24.542Z');
    $request->connection->environment = 'quaerat';
    $request->connection->externalXref = 'ipsum';
    $request->connection->id = '78ba2531-7747-4dc9-95ad-2caf5dd6723d';
    $request->connection->integrationType = 'optio';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::AtsApplicationRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-12-13T10:52:20.774Z');
    $request->connection->workspaceId = 'culpa';
    $request->id = 'e2f3a6b7-0087-4875-a143-f5a6c98b5555';

    $requestSecurity = new PutUnifiedConnectionIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->connection->putUnifiedConnectionId($request, $requestSecurity);

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

