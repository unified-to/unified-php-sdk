# Connection
(*connection*)

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
    $request->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'string';
    $request->auth->otherAuthInfo = [
        'string',
    ];
    $request->auth->pem = 'string';
    $request->auth->refreshToken = 'string';
    $request->auth->state = 'string';
    $request->auth->token = 'string';
    $request->auth->tokenUrl = 'string';
    $request->authAwsArn = 'string';
    $request->categories = [
        PropertyConnectionCategories::Auth,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-23T23:52:45.470Z');
    $request->environment = 'string';
    $request->externalXref = 'string';
    $request->id = '<ID>';
    $request->integrationType = 'string';
    $request->isPaused = false;
    $request->permissions = [
        PropertyConnectionPermissions::CrmCompanyRead,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-03T20:48:03.468Z');
    $request->workspaceId = 'string';

    $response = $sdk->connection->createUnifiedConnection($request);

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


## getUnifiedConnection

Retrieve connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetUnifiedConnectionRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetUnifiedConnectionRequest();
    $request->id = '<ID>';

    $response = $sdk->connection->getUnifiedConnection($request);

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


## listUnifiedConnections

List all connections

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsRequest;
use \Unified\Unified_to\Models\Operations\ListUnifiedConnectionsCategories;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListUnifiedConnectionsRequest();
    $request->categories = [
        ListUnifiedConnectionsCategories::Crm,
    ];
    $request->env = 'string';
    $request->externalXref = 'string';
    $request->limit = 9638.08;
    $request->offset = 15.12;
    $request->order = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-20T10:15:04.986Z');

    $response = $sdk->connection->listUnifiedConnections($request);

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


## patchUnifiedConnection

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchUnifiedConnectionRequest;
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
    $request = new PatchUnifiedConnectionRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
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
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'string';
    $request->connection->auth->otherAuthInfo = [
        'string',
    ];
    $request->connection->auth->pem = 'string';
    $request->connection->auth->refreshToken = 'string';
    $request->connection->auth->state = 'string';
    $request->connection->auth->token = 'string';
    $request->connection->auth->tokenUrl = 'string';
    $request->connection->authAwsArn = 'string';
    $request->connection->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-15T22:36:11.466Z');
    $request->connection->environment = 'string';
    $request->connection->externalXref = 'string';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'string';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::AtsJobWrite,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-09T04:29:35.007Z');
    $request->connection->workspaceId = 'string';
    $request->id = '<ID>';

    $response = $sdk->connection->patchUnifiedConnection($request);

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveUnifiedConnectionRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveUnifiedConnectionRequest();
    $request->id = '<ID>';

    $response = $sdk->connection->removeUnifiedConnection($request);

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


## updateUnifiedConnection

Update connection

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateUnifiedConnectionRequest;
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
    $request = new UpdateUnifiedConnectionRequest();
    $request->connection = new Connection();
    $request->connection->auth = new PropertyConnectionAuth();
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
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'string';
    $request->connection->auth->otherAuthInfo = [
        'string',
    ];
    $request->connection->auth->pem = 'string';
    $request->connection->auth->refreshToken = 'string';
    $request->connection->auth->state = 'string';
    $request->connection->auth->token = 'string';
    $request->connection->auth->tokenUrl = 'string';
    $request->connection->authAwsArn = 'string';
    $request->connection->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-25T08:32:03.332Z');
    $request->connection->environment = 'string';
    $request->connection->externalXref = 'string';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'string';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::CrmEventRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-09T18:14:10.859Z');
    $request->connection->workspaceId = 'string';
    $request->id = '<ID>';

    $response = $sdk->connection->updateUnifiedConnection($request);

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

