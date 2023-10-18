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
    $request->auth->accessToken = 'likewise';
    $request->auth->apiUrl = 'Rwanda';
    $request->auth->appId = 'copying';
    $request->auth->authorizeUrl = 'Maserati';
    $request->auth->clientId = 'static';
    $request->auth->clientSecret = 'Engineer';
    $request->auth->consumerKey = 'Lilangeni';
    $request->auth->consumerSecret = 'Rubber';
    $request->auth->emails = [
        'sticky',
    ];
    $request->auth->expiresIn = 9652.2;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-08T16:56:03.197Z');
    $request->auth->key = '<key>';
    $request->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'fit';
    $request->auth->otherAuthInfo = [
        'Designer',
    ];
    $request->auth->pem = 'cum';
    $request->auth->refreshToken = 'maroon';
    $request->auth->state = 'Group';
    $request->auth->token = 'Rap';
    $request->auth->tokenUrl = 'female';
    $request->authAwsArn = 'Wagon';
    $request->categories = [
        PropertyConnectionCategories::Uc,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-28T04:40:47.588Z');
    $request->environment = 'Buckinghamshire';
    $request->externalXref = 'inquisitively';
    $request->id = '<ID>';
    $request->integrationType = 'mint';
    $request->isPaused = false;
    $request->permissions = [
        PropertyConnectionPermissions::TicketingAgentWrite,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-28T15:17:00.404Z');
    $request->workspaceId = 'coulomb';

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
    $request->env = 'a';
    $request->externalXref = 'Schamberger';
    $request->limit = 7234.78;
    $request->offset = 4370.35;
    $request->order = 'FTP';
    $request->sort = 'orange';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-17T20:11:44.517Z');

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
    $request->connection->auth->accessToken = 'International';
    $request->connection->auth->apiUrl = 'square';
    $request->connection->auth->appId = 'Electronic';
    $request->connection->auth->authorizeUrl = 'Montana';
    $request->connection->auth->clientId = 'scalable';
    $request->connection->auth->clientSecret = 'Flerovium';
    $request->connection->auth->consumerKey = 'online';
    $request->connection->auth->consumerSecret = 'Chair';
    $request->connection->auth->emails = [
        'customized',
    ];
    $request->connection->auth->expiresIn = 5808.98;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-26T13:18:37.846Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'repeatedly';
    $request->connection->auth->otherAuthInfo = [
        'Grocery',
    ];
    $request->connection->auth->pem = 'Direct';
    $request->connection->auth->refreshToken = 'Northeast';
    $request->connection->auth->state = 'Causeway';
    $request->connection->auth->token = 'hic';
    $request->connection->auth->tokenUrl = 'Chair';
    $request->connection->authAwsArn = 'Silver';
    $request->connection->categories = [
        PropertyConnectionCategories::Crm,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-19T03:31:12.982Z');
    $request->connection->environment = 'schemas';
    $request->connection->externalXref = 'Loti';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'buckwheat';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::AtsCandidateRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-15T21:15:39.701Z');
    $request->connection->workspaceId = 'indigo';
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
    $request->connection->auth->accessToken = 'tan';
    $request->connection->auth->apiUrl = 'revitalize';
    $request->connection->auth->appId = 'deposit';
    $request->connection->auth->authorizeUrl = 'from';
    $request->connection->auth->clientId = 'Berkshire';
    $request->connection->auth->clientSecret = 'Account';
    $request->connection->auth->consumerKey = 'Recycled';
    $request->connection->auth->consumerSecret = 'Pizza';
    $request->connection->auth->emails = [
        'Accounts',
    ];
    $request->connection->auth->expiresIn = 9960.64;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-12T22:32:29.324Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Fish';
    $request->connection->auth->otherAuthInfo = [
        'Books',
    ];
    $request->connection->auth->pem = 'ampere';
    $request->connection->auth->refreshToken = 'work';
    $request->connection->auth->state = 'Wagon';
    $request->connection->auth->token = 'Shoals';
    $request->connection->auth->tokenUrl = 'invoice';
    $request->connection->authAwsArn = 'Grocery';
    $request->connection->categories = [
        PropertyConnectionCategories::Hris,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-26T03:13:23.826Z');
    $request->connection->environment = 'deposit';
    $request->connection->externalXref = 'Martinique';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'North';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::CrmPipelineRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-11T14:05:43.897Z');
    $request->connection->workspaceId = 'homely';
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

