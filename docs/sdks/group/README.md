# Group


### Available Operations

* [createHrisGroup](#createhrisgroup) - Create a group
* [getHrisGroup](#gethrisgroup) - Retrieve a group
* [listHrisGroups](#listhrisgroups) - List all groups
* [patchHrisGroup](#patchhrisgroup) - Update a group
* [removeHrisGroup](#removehrisgroup) - Remove a group
* [updateHrisGroup](#updatehrisgroup) - Update a group

## createHrisGroup

Create a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-12T02:07:27.193Z');
    $request->hrisGroup->description = 'Self-enabling system-worthy collaboration';
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = [
        'South' => 'string',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::Department;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-28T15:45:30.103Z');
    $request->hrisGroup->userIds = [
        'string',
    ];
    $request->connectionId = 'string';;

    $response = $sdk->group->createHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateHrisGroupRequest](../../Models/Operations/CreateHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisGroupResponse](../../Models/Operations/CreateHrisGroupResponse.md)**


## getHrisGroup

Retrieve a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetHrisGroupRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->group->getHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\GetHrisGroupRequest](../../Models/Operations/GetHrisGroupRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisGroupResponse](../../Models/Operations/GetHrisGroupResponse.md)**


## listHrisGroups

List all groups

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListHrisGroupsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 4815.14;
    $request->offset = 2554.75;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-30T00:40:26.357Z');;

    $response = $sdk->group->listHrisGroups($request);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\ListHrisGroupsRequest](../../Models/Operations/ListHrisGroupsRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisGroupsResponse](../../Models/Operations/ListHrisGroupsResponse.md)**


## patchHrisGroup

Update a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-10T03:17:00.454Z');
    $request->hrisGroup->description = 'Compatible contextually-based local area network';
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = [
        'indexing' => 'string',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::BusinessUnit;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-01T11:47:16.863Z');
    $request->hrisGroup->userIds = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->group->patchHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchHrisGroupRequest](../../Models/Operations/PatchHrisGroupRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisGroupResponse](../../Models/Operations/PatchHrisGroupResponse.md)**


## removeHrisGroup

Remove a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveHrisGroupRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->group->removeHrisGroup($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveHrisGroupRequest](../../Models/Operations/RemoveHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisGroupResponse](../../Models/Operations/RemoveHrisGroupResponse.md)**


## updateHrisGroup

Update a group

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-07T01:08:49.621Z');
    $request->hrisGroup->description = 'Integrated empowering productivity';
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = [
        'Southwest' => 'string',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::Team;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-09T14:54:15.549Z');
    $request->hrisGroup->userIds = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->group->updateHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest](../../Models/Operations/UpdateHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisGroupResponse](../../Models/Operations/UpdateHrisGroupResponse.md)**

