# ListT


### Available Operations

* [createMartechList](#createmartechlist) - Create a list
* [getMartechList](#getmartechlist) - Retrieve a list
* [listMartechLists](#listmartechlists) - List all lists
* [patchMartechList](#patchmartechlist) - Update a list
* [removeMartechList](#removemartechlist) - Remove a list
* [updateMartechList](#updatemartechlist) - Update a list

## createMartechList

Create a list

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
    $request = new Operations\CreateMartechListRequest(
        connectionId: '<value>',
        marketingList: new Shared\MarketingList(
            createdAt: '<value>',
            id: '<id>',
            name: '<value>',
            raw: [
                'Latin' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-05-06T07:01:10.618Z'),
        ),
    );
    $response = $sdk->list->createMartechList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateMartechListRequest](../../Models/Operations/CreateMartechListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\CreateMartechListResponse](../../Models/Operations/CreateMartechListResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getMartechList

Retrieve a list

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
    $request = new Operations\GetMartechListRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->list->getMartechList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetMartechListRequest](../../Models/Operations/GetMartechListRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\GetMartechListResponse](../../Models/Operations/GetMartechListResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listMartechLists

List all lists

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
    $request = new Operations\ListMartechListsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 9665.22,
        offset: 367.94,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-09-12T12:19:08.506Z'),
    );
    $response = $sdk->list->listMartechLists($request);

    if ($response->marketingLists !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListMartechListsRequest](../../Models/Operations/ListMartechListsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\ListMartechListsResponse](../../Models/Operations/ListMartechListsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchMartechList

Update a list

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
    $request = new Operations\PatchMartechListRequest(
        connectionId: '<value>',
        id: '<id>',
        marketingList: new Shared\MarketingList(
            createdAt: '<value>',
            id: '<id>',
            name: '<value>',
            raw: [
                'Classical' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-07-26T04:11:57.641Z'),
        ),
    );
    $response = $sdk->list->patchMartechList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchMartechListRequest](../../Models/Operations/PatchMartechListRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\PatchMartechListResponse](../../Models/Operations/PatchMartechListResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeMartechList

Remove a list

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
    $request = new Operations\RemoveMartechListRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->list->removeMartechList($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveMartechListRequest](../../Models/Operations/RemoveMartechListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\RemoveMartechListResponse](../../Models/Operations/RemoveMartechListResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateMartechList

Update a list

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
    $request = new Operations\UpdateMartechListRequest(
        connectionId: '<value>',
        id: '<id>',
        marketingList: new Shared\MarketingList(
            createdAt: '<value>',
            id: '<id>',
            name: '<value>',
            raw: [
                'innocently' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-05-18T20:36:47.001Z'),
        ),
    );
    $response = $sdk->list->updateMartechList($request);

    if ($response->marketingList !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateMartechListRequest](../../Models/Operations/UpdateMartechListRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\UpdateMartechListResponse](../../Models/Operations/UpdateMartechListResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
