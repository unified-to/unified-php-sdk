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
    $request->auth->accessToken = 'Won syndicate revolutionize';
    $request->auth->apiUrl = 'static Engineer';
    $request->auth->appId = 'Cyclocross Creative';
    $request->auth->authorizeUrl = 'sticky towards';
    $request->auth->clientId = 'Programmable eos application';
    $request->auth->clientSecret = 'Calcium Card';
    $request->auth->consumerKey = 'provider Swaziland';
    $request->auth->consumerSecret = 'intensely Buckinghamshire inquisitively';
    $request->auth->emails = [
        'mint',
    ];
    $request->auth->expiresIn = 6186.17;
    $request->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-28T15:17:00.404Z');
    $request->auth->key = '<key>';
    $request->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->auth->name = 'invoice PCI redundant';
    $request->auth->otherAuthInfo = [
        'as',
    ];
    $request->auth->pem = 'Jerald yowza ubiquitous';
    $request->auth->refreshToken = 'aside punctually whereas';
    $request->auth->state = 'Rubber Gasoline';
    $request->auth->token = 'commodi quantify HDD';
    $request->auth->tokenUrl = 'Pakistan Electric Bicycle';
    $request->authAwsArn = 'cumque person';
    $request->categories = [
        PropertyConnectionCategories::Ticketing,
    ];
    $request->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-17T16:50:00.474Z');
    $request->environment = 'Celsius plum';
    $request->externalXref = 'architecture';
    $request->id = '<ID>';
    $request->integrationType = 'second Northwest';
    $request->isPaused = false;
    $request->permissions = [
        PropertyConnectionPermissions::CrmDealWrite,
    ];
    $request->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-24T08:11:50.311Z');
    $request->workspaceId = 'Electric Ferrari Nickel';

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
    $request->env = 'North Administrator Liberian';
    $request->externalXref = 'cultivate';
    $request->limit = 3975.39;
    $request->offset = 4125.44;
    $request->order = 'evolve as Chief';
    $request->sort = 'till Investment even';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-21T20:49:52.287Z');

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
    $request->connection->auth->accessToken = 'male Coupe';
    $request->connection->auth->apiUrl = 'Montana';
    $request->connection->auth->appId = 'Gasoline given';
    $request->connection->auth->authorizeUrl = 'Chair customized';
    $request->connection->auth->clientId = 'Branding Direct';
    $request->connection->auth->clientSecret = 'Pop';
    $request->connection->auth->consumerKey = 'streamline so';
    $request->connection->auth->consumerSecret = 'Chair Silver payment';
    $request->connection->auth->emails = [
        'schemas',
    ];
    $request->connection->auth->expiresIn = 4369.71;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-08T10:21:00.340Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'buckwheat worst indigo';
    $request->connection->auth->otherAuthInfo = [
        'Planner',
    ];
    $request->connection->auth->pem = 'East';
    $request->connection->auth->refreshToken = 'viral';
    $request->connection->auth->state = 'Folk FTM';
    $request->connection->auth->token = 'Texas real Wooden';
    $request->connection->auth->tokenUrl = 'male Southwest Regional';
    $request->connection->authAwsArn = 'West';
    $request->connection->categories = [
        PropertyConnectionCategories::Enrich,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-11T21:33:26.396Z');
    $request->connection->environment = 'Optimization system';
    $request->connection->externalXref = 'North toolset recent';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'Eritrea';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::CrmDealRead,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-15T06:02:05.025Z');
    $request->connection->workspaceId = 'West B2B';
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
    $request->connection->auth->accessToken = 'parsing coulomb Cambridgeshire';
    $request->connection->auth->apiUrl = 'Berkshire Account';
    $request->connection->auth->appId = 'digital';
    $request->connection->auth->authorizeUrl = 'Accounts contest Fish';
    $request->connection->auth->clientId = 'Richland';
    $request->connection->auth->clientSecret = 'work';
    $request->connection->auth->consumerKey = 'clang COM invoice';
    $request->connection->auth->consumerSecret = 'Account';
    $request->connection->auth->emails = [
        'deposit',
    ];
    $request->connection->auth->expiresIn = 469.23;
    $request->connection->auth->expiryDate = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-30T23:58:24.874Z');
    $request->connection->auth->key = '<key>';
    $request->connection->auth->meta = new PropertyPropertyConnectionAuthMeta();
    $request->connection->auth->name = 'Administrator';
    $request->connection->auth->otherAuthInfo = [
        'groupware',
    ];
    $request->connection->auth->pem = 'Tricycle copy Toys';
    $request->connection->auth->refreshToken = 'edge';
    $request->connection->auth->state = 'minus Van Account';
    $request->connection->auth->token = 'TCP Chrysler';
    $request->connection->auth->tokenUrl = 'blockchains Southeast';
    $request->connection->authAwsArn = 'Runolfsdottir Southwest';
    $request->connection->categories = [
        PropertyConnectionCategories::Passthrough,
    ];
    $request->connection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-06T11:21:37.118Z');
    $request->connection->environment = 'Jewelery';
    $request->connection->externalXref = 'Automated';
    $request->connection->id = '<ID>';
    $request->connection->integrationType = 'Representative helplessly East';
    $request->connection->isPaused = false;
    $request->connection->permissions = [
        PropertyConnectionPermissions::CrmPipelineWrite,
    ];
    $request->connection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-21T08:54:30.856Z');
    $request->connection->workspaceId = 'Marketing Dibbert backing';
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

