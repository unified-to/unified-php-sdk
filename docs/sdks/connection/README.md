# Connection


### Available Operations

* [createUnifiedConnection](#createunifiedconnection) - Create connection
* [getUnifiedConnection](#getunifiedconnection) - Retrieve connection
* [listUnifiedConnections](#listunifiedconnections) - List all connections
* [patchUnifiedConnection](#patchunifiedconnection) - Update connection
* [removeUnifiedConnection](#removeunifiedconnection) - Remove connection
* [updateUnifiedConnection](#updateunifiedconnection) - Update connection

## createUnifiedConnection

Create connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
        Shared\PropertyConnectionCategories::Accounting,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-05T07:37:37.431Z');
    $request->cursorsCache = [
        new Shared\Undefined(),
    ];
    $request->environment = '<value>';
    $request->externalXref = '<value>';
    $request->id = '<id>';
    $request->integrationType = '<value>';
    $request->isPaused = false;
    $request->lastHealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-21T18:48:43.528Z');
    $request->lastUnhealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-29T14:41:39.477Z');
    $request->permissions = [
        Shared\PropertyConnectionPermissions::HrisTimeoffWrite,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-12T14:19:55.077Z');
    $request->workspaceId = '<value>';;

    $response = $sdk->connection->createUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                         | Type                                                                              | Required                                                                          | Description                                                                       |
| --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- | --------------------------------------------------------------------------------- |
| `$request`                                                                        | [\Unified\Unified_to\Models\Shared\Connection](../../Models/Shared/Connection.md) | :heavy_check_mark:                                                                | The request object to use for the request.                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateUnifiedConnectionResponse](../../Models/Operations/CreateUnifiedConnectionResponse.md)**


## getUnifiedConnection

Retrieve connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetUnifiedConnectionRequest();
    $request->id = '<id>';;

    $response = $sdk->connection->getUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest](../../Models/Operations/GetUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetUnifiedConnectionResponse](../../Models/Operations/GetUnifiedConnectionResponse.md)**


## listUnifiedConnections

List all connections

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListUnifiedConnectionsRequest();
    $request->categories = [
        Operations\Categories::Uc,
    ];
    $request->env = '<value>';
    $request->externalXref = '<value>';
    $request->limit = 9638.08;
    $request->offset = 15.12;
    $request->order = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-20T13:59:12.388Z');;

    $response = $sdk->connection->listUnifiedConnections($request);

    if ($response->connections !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest](../../Models/Operations/ListUnifiedConnectionsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListUnifiedConnectionsResponse](../../Models/Operations/ListUnifiedConnectionsResponse.md)**


## patchUnifiedConnection

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
        Shared\PropertyConnectionCategories::Uc,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-14T05:49:12.923Z');
    $request->connection->cursorsCache = [
        new Shared\Undefined(),
    ];
    $request->connection->environment = '<value>';
    $request->connection->externalXref = '<value>';
    $request->connection->id = '<id>';
    $request->connection->integrationType = '<value>';
    $request->connection->isPaused = false;
    $request->connection->lastHealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-03T13:20:07.463Z');
    $request->connection->lastUnhealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-09T11:43:14.112Z');
    $request->connection->permissions = [
        Shared\PropertyConnectionPermissions::KmsPageRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-20T21:38:39.955Z');
    $request->connection->workspaceId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->connection->patchUnifiedConnection($request);

    if ($response->connection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest](../../Models/Operations/PatchUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchUnifiedConnectionResponse](../../Models/Operations/PatchUnifiedConnectionResponse.md)**


## removeUnifiedConnection

Remove connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveUnifiedConnectionRequest();
    $request->id = '<id>';;

    $response = $sdk->connection->removeUnifiedConnection($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest](../../Models/Operations/RemoveUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionResponse](../../Models/Operations/RemoveUnifiedConnectionResponse.md)**


## updateUnifiedConnection

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
        Shared\PropertyConnectionCategories::Ticketing,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-08T19:30:51.046Z');
    $request->connection->cursorsCache = [
        new Shared\Undefined(),
    ];
    $request->connection->environment = '<value>';
    $request->connection->externalXref = '<value>';
    $request->connection->id = '<id>';
    $request->connection->integrationType = '<value>';
    $request->connection->isPaused = false;
    $request->connection->lastHealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-09T16:11:04.721Z');
    $request->connection->lastUnhealthyAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-20T19:30:15.010Z');
    $request->connection->permissions = [
        Shared\PropertyConnectionPermissions::MessagingMessageRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-21T13:28:25.633Z');
    $request->connection->workspaceId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->connection->updateUnifiedConnection($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest](../../Models/Operations/UpdateUnifiedConnectionRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionResponse](../../Models/Operations/UpdateUnifiedConnectionResponse.md)**

