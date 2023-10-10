# Team
(*team*)

### Available Operations

* [deleteCrmConnectionIdTeamId](#deletecrmconnectionidteamid) - Remove a team
* [getCrmConnectionIdTeam](#getcrmconnectionidteam) - List all teams
* [getCrmConnectionIdTeamId](#getcrmconnectionidteamid) - Retrieve a team
* [patchCrmConnectionIdTeamId](#patchcrmconnectionidteamid) - Update a team
* [postCrmConnectionIdTeam](#postcrmconnectionidteam) - Create a team
* [putCrmConnectionIdTeamId](#putcrmconnectionidteamid) - Update a team

## deleteCrmConnectionIdTeamId

Remove a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdTeamIdRequest();
    $request->connectionId = 'Diverse';
    $request->id = '<ID>';

    $response = $sdk->team->deleteCrmConnectionIdTeamId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdRequest](../../models/operations/DeleteCrmConnectionIdTeamIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdTeamIdResponse](../../models/operations/DeleteCrmConnectionIdTeamIdResponse.md)**


## getCrmConnectionIdTeam

List all teams

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdTeamRequest();
    $request->connectionId = 'bath Lamborghini';
    $request->limit = 1042.31;
    $request->offset = 1586.42;
    $request->order = 'Diesel Bike virtual';
    $request->query = 'bakery';
    $request->sort = 'Senior';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-04T23:56:00.028Z');

    $response = $sdk->team->getCrmConnectionIdTeam($request);

    if ($response->crmTeams !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamRequest](../../models/operations/GetCrmConnectionIdTeamRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamResponse](../../models/operations/GetCrmConnectionIdTeamResponse.md)**


## getCrmConnectionIdTeamId

Retrieve a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdTeamIdRequest();
    $request->connectionId = 'Intelligent invoice Tesla';
    $request->id = '<ID>';

    $response = $sdk->team->getCrmConnectionIdTeamId($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdRequest](../../models/operations/GetCrmConnectionIdTeamIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdTeamIdResponse](../../models/operations/GetCrmConnectionIdTeamIdResponse.md)**


## patchCrmConnectionIdTeamId

Update a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdTeamIdRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-20T12:47:48.451Z');
    $request->crmTeam->description = 'Automated executive emulation';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'Internal experiences';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-22T09:41:53.599Z');
    $request->crmTeam->userIds = [
        'lumen',
    ];
    $request->connectionId = 'up Candace';
    $request->id = '<ID>';

    $response = $sdk->team->patchCrmConnectionIdTeamId($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdRequest](../../models/operations/PatchCrmConnectionIdTeamIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdTeamIdResponse](../../models/operations/PatchCrmConnectionIdTeamIdResponse.md)**


## postCrmConnectionIdTeam

Create a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdTeamRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-12T08:57:03.070Z');
    $request->crmTeam->description = 'Organic transitional portal';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'male bandwidth';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-29T15:50:04.365Z');
    $request->crmTeam->userIds = [
        'meter',
    ];
    $request->connectionId = 'Guaynabo AGP East';

    $response = $sdk->team->postCrmConnectionIdTeam($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamRequest](../../models/operations/PostCrmConnectionIdTeamRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdTeamResponse](../../models/operations/PostCrmConnectionIdTeamResponse.md)**


## putCrmConnectionIdTeamId

Update a team

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest;
use \Unified\Unified_to\Models\Shared\CrmTeam;
use \Unified\Unified_to\Models\Shared\PropertyCrmTeamRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdTeamIdRequest();
    $request->crmTeam = new CrmTeam();
    $request->crmTeam->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-14T23:28:53.515Z');
    $request->crmTeam->description = 'Inverse multi-tasking task-force';
    $request->crmTeam->id = '<ID>';
    $request->crmTeam->name = 'Indonesia Orchestrator Division';
    $request->crmTeam->raw = new PropertyCrmTeamRaw();
    $request->crmTeam->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-23T23:13:25.973Z');
    $request->crmTeam->userIds = [
        'thoroughly',
    ];
    $request->connectionId = 'delectus';
    $request->id = '<ID>';

    $response = $sdk->team->putCrmConnectionIdTeamId($request);

    if ($response->crmTeam !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdRequest](../../models/operations/PutCrmConnectionIdTeamIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdTeamIdResponse](../../models/operations/PutCrmConnectionIdTeamIdResponse.md)**

