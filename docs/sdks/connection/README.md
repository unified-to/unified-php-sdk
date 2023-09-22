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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteUnifiedConnectionIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteUnifiedConnectionIdRequest();
    $request->id = '32af0310-2d51-44f4-8c6f-18bf9621a6a4';

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedConnectionRequest();
    $request->categories = [
        GetUnifiedConnectionCategories::Uc,
    ];
    $request->env = 'dignissimos';
    $request->externalXref = 'esse';
    $request->limit = 6570.44;
    $request->offset = 5124.88;
    $request->order = 'esse';
    $request->sort = 'eveniet';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-06T04:32:48.293Z');

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetUnifiedConnectionIdRequest();
    $request->id = 'e4be752c-65b3-4441-8e3b-b91c8d975e0e';

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchUnifiedConnectionIdRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'laudantium';
    $request->connection->auth->apiUrl = 'tempora';
    $request->connection->auth->appId = 'quae';
    $request->connection->auth->authorizeUrl = 'omnis';
    $request->connection->auth->clientId = 'illum';
    $request->connection->auth->clientSecret = 'rem';
    $request->connection->auth->consumerKey = 'tenetur';
    $request->connection->auth->consumerSecret = 'deleniti';
    $request->connection->auth->emails = [
        'modi',
    ];
    $request->connection->auth->expiresIn = 9376.64;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-11T14:32:48.364Z');
    $request->connection->auth->key = 'labore';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Ms. Jimmy Turcotte';
    $request->connection->auth->otherAuthInfo = [
        'facere',
    ];
    $request->connection->auth->pem = 'quisquam';
    $request->connection->auth->refreshToken = 'cumque';
    $request->connection->auth->state = 'aliquam';
    $request->connection->auth->token = 'dolorum';
    $request->connection->auth->tokenUrl = 'deserunt';
    $request->connection->authAwsArn = 'ad';
    $request->connection->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-20T06:32:16.227Z');
    $request->connection->environment = 'laborum';
    $request->connection->externalXref = 'nobis';
    $request->connection->id = 'd905a972-e056-4728-a27b-2d309470bf7a';
    $request->connection->integrationType = 'aliquam';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::AtsJobWrite,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-12-09T00:13:12.239Z');
    $request->connection->workspaceId = 'iusto';
    $request->id = 'cf535a6f-ae54-4ebf-a0c3-21f023b75d23';

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new Connection();
    $request->auth = new PropertyConnectionAuth();
    $request->auth->accessToken = 'nisi';
    $request->auth->apiUrl = 'dignissimos';
    $request->auth->appId = 'reiciendis';
    $request->auth->authorizeUrl = 'itaque';
    $request->auth->clientId = 'vitae';
    $request->auth->clientSecret = 'est';
    $request->auth->consumerKey = 'accusantium';
    $request->auth->consumerSecret = 'quod';
    $request->auth->emails = [
        'minus',
    ];
    $request->auth->expiresIn = 5509.94;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-01-23T09:20:28.902Z');
    $request->auth->key = 'odio';
    $request->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'Winston Bayer';
    $request->auth->otherAuthInfo = [
        'provident',
    ];
    $request->auth->pem = 'ex';
    $request->auth->refreshToken = 'repellendus';
    $request->auth->state = 'unde';
    $request->auth->token = 'alias';
    $request->auth->tokenUrl = 'impedit';
    $request->authAwsArn = 'sequi';
    $request->categories = [
        PropertyConnectionCategories::Auth,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-16T19:53:20.939Z');
    $request->environment = 'in';
    $request->externalXref = 'quisquam';
    $request->id = '15dfbace-188b-41c4-ae2c-8c6ce611feeb';
    $request->integrationType = 'illo';
    $request->isPaused = false;
    $request->permissions = [
        PropertyConnectionPermissions::HrisEmployeeRead,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-18T01:27:23.704Z');
    $request->workspaceId = 'distinctio';

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

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutUnifiedConnectionIdRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
    $request->connection->auth->accessToken = 'possimus';
    $request->connection->auth->apiUrl = 'cum';
    $request->connection->auth->appId = 'suscipit';
    $request->connection->auth->authorizeUrl = 'saepe';
    $request->connection->auth->clientId = 'earum';
    $request->connection->auth->clientSecret = 'quod';
    $request->connection->auth->consumerKey = 'nihil';
    $request->connection->auth->consumerSecret = 'quaerat';
    $request->connection->auth->emails = [
        'ipsum',
    ];
    $request->connection->auth->expiresIn = 4984.35;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-08-06T16:42:47.909Z');
    $request->connection->auth->key = 'deserunt';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Ms. Erin Dickinson';
    $request->connection->auth->otherAuthInfo = [
        'magnam',
    ];
    $request->connection->auth->pem = 'odio';
    $request->connection->auth->refreshToken = 'nulla';
    $request->connection->auth->state = 'impedit';
    $request->connection->auth->token = 'cupiditate';
    $request->connection->auth->tokenUrl = 'illo';
    $request->connection->authAwsArn = 'exercitationem';
    $request->connection->categories = [
        PropertyConnectionCategories::Martech,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-07-22T22:49:44.757Z');
    $request->connection->environment = 'maxime';
    $request->connection->externalXref = 'dolorum';
    $request->connection->id = 'f5dd6723-dc0f-45ae-af3a-6b7008787561';
    $request->connection->integrationType = 'quaerat';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::CrmDealWrite,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-12-05T00:10:54.956Z');
    $request->connection->workspaceId = 'est';
    $request->id = '6c98b555-5408-40d4-8bca-cc6cbd6b5f3e';

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

