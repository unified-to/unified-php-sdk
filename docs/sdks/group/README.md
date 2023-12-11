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
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-11T13:14:46.931Z');
    $request->hrisGroup->description = 'Self-enabling system-worthy collaboration';
    $request->hrisGroup->employeeIds = [
        'string',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = new Shared\PropertyHrisGroupRaw();
    $request->hrisGroup->type = Shared\HrisGroupType::Team;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-10T00:20:29.321Z');
    $request->connectionId = 'string';;

    $response = $sdk->group->createHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
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
} catch (Exception $e) {
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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-29T22:04:03.121Z');;

    $response = $sdk->group->listHrisGroups($request);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Exception $e) {
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
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-09T20:25:35.217Z');
    $request->hrisGroup->description = 'Compatible contextually-based local area network';
    $request->hrisGroup->employeeIds = [
        'string',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = new Shared\PropertyHrisGroupRaw();
    $request->hrisGroup->type = Shared\HrisGroupType::Division;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-23T09:49:13.425Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->group->patchHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
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
} catch (Exception $e) {
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
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-06T17:42:02.933Z');
    $request->hrisGroup->description = 'Integrated empowering productivity';
    $request->hrisGroup->employeeIds = [
        'string',
    ];
    $request->hrisGroup->id = '<ID>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        'string',
    ];
    $request->hrisGroup->name = 'string';
    $request->hrisGroup->parentId = 'string';
    $request->hrisGroup->raw = new Shared\PropertyHrisGroupRaw();
    $request->hrisGroup->type = Shared\HrisGroupType::Team;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-12T15:58:06.273Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->group->updateHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest](../../Models/Operations/UpdateHrisGroupRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisGroupResponse](../../Models/Operations/UpdateHrisGroupResponse.md)**

