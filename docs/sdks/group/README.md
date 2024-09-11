# Group

## Overview

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
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateHrisGroupRequest(
        connectionId: '<value>',
        hrisGroup: new Shared\HrisGroup(
            companyId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-08-12T02:07:27.193Z'),
            description: 'Self-enabling system-worthy collaboration',
            id: '<id>',
            isActive: false,
            managerIds: [
                '<value>',
            ],
            name: '<value>',
            parentId: '<value>',
            raw: [
                'South' => '<value>',
            ],
            type: Shared\HrisGroupType::Department,
            updatedAt: Utils\Utils::parseDateTime('2023-11-28T15:45:30.103Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->group->createHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateHrisGroupRequest](../../Models/Operations/CreateHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateHrisGroupResponse](../../Models/Operations/CreateHrisGroupResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getHrisGroup

Retrieve a group

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetHrisGroupRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->group->getHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetHrisGroupRequest](../../Models/Operations/GetHrisGroupRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetHrisGroupResponse](../../Models/Operations/GetHrisGroupResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listHrisGroups

List all groups

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListHrisGroupsRequest(
        connectionId: '<value>',
        companyId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 4815.14,
        offset: 2554.75,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-04-30T00:40:26.357Z'),
    );
    $response = $sdk->group->listHrisGroups($request);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListHrisGroupsRequest](../../Models/Operations/ListHrisGroupsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListHrisGroupsResponse](../../Models/Operations/ListHrisGroupsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchHrisGroup

Update a group

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchHrisGroupRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisGroup: new Shared\HrisGroup(
            companyId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-11-10T03:17:00.454Z'),
            description: 'Compatible contextually-based local area network',
            id: '<id>',
            isActive: false,
            managerIds: [
                '<value>',
            ],
            name: '<value>',
            parentId: '<value>',
            raw: [
                'indexing' => '<value>',
            ],
            type: Shared\HrisGroupType::BusinessUnit,
            updatedAt: Utils\Utils::parseDateTime('2022-01-01T11:47:16.863Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->group->patchHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchHrisGroupRequest](../../Models/Operations/PatchHrisGroupRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchHrisGroupResponse](../../Models/Operations/PatchHrisGroupResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeHrisGroup

Remove a group

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveHrisGroupRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->group->removeHrisGroup($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveHrisGroupRequest](../../Models/Operations/RemoveHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveHrisGroupResponse](../../Models/Operations/RemoveHrisGroupResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateHrisGroup

Update a group

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateHrisGroupRequest(
        connectionId: '<value>',
        id: '<id>',
        hrisGroup: new Shared\HrisGroup(
            companyId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-12-07T01:08:49.621Z'),
            description: 'Integrated empowering productivity',
            id: '<id>',
            isActive: false,
            managerIds: [
                '<value>',
            ],
            name: '<value>',
            parentId: '<value>',
            raw: [
                'Southwest' => '<value>',
            ],
            type: Shared\HrisGroupType::Team,
            updatedAt: Utils\Utils::parseDateTime('2022-03-09T14:54:15.549Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->group->updateHrisGroup($request);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateHrisGroupRequest](../../Models/Operations/UpdateHrisGroupRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateHrisGroupResponse](../../Models/Operations/UpdateHrisGroupResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
