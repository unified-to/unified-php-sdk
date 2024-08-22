# Item

## Overview

### Available Operations

* [createCommerceItem](#createcommerceitem) - Create an item
* [getCommerceItem](#getcommerceitem) - Retrieve an item
* [listCommerceItems](#listcommerceitems) - List all items
* [patchCommerceItem](#patchcommerceitem) - Update an item
* [removeCommerceItem](#removecommerceitem) - Remove an item
* [updateCommerceItem](#updatecommerceitem) - Update an item

## createCommerceItem

Create an item

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
    $request = new Operations\CreateCommerceItemRequest(
        connectionId: '<value>',
        commerceItem: new Shared\CommerceItem(
            collectionIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2023-06-27T05:28:51.414Z'),
            description: 'Object-based local intranet',
            id: '<id>',
            isActive: false,
            isTaxable: false,
            media: [
                new Shared\CommerceItemMedia,
            ],
            name: '<value>',
            publicDescription: '<value>',
            publicName: '<value>',
            raw: [
                'Awesome' => '<value>',
            ],
            slug: '<value>',
            tags: [
                '<value>',
            ],
            type: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2024-04-06T06:18:58.093Z'),
            variants: [
                new Shared\CommerceItemVariant,
            ],
            vendorName: '<value>',
        ),
    );
    $response = $sdk->item->createCommerceItem($request);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateCommerceItemRequest](../../Models/Operations/CreateCommerceItemRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateCommerceItemResponse](../../Models/Operations/CreateCommerceItemResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getCommerceItem

Retrieve an item

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
    $request = new Operations\GetCommerceItemRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->item->getCommerceItem($request);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetCommerceItemRequest](../../Models/Operations/GetCommerceItemRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetCommerceItemResponse](../../Models/Operations/GetCommerceItemResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listCommerceItems

List all items

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
    $request = new Operations\ListCommerceItemsRequest(
        connectionId: '<value>',
        collectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 2553.93,
        offset: 4072.28,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-05-10T19:08:09.923Z'),
    );
    $response = $sdk->item->listCommerceItems($request);

    if ($response->commerceItems !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCommerceItemsRequest](../../Models/Operations/ListCommerceItemsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCommerceItemsResponse](../../Models/Operations/ListCommerceItemsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchCommerceItem

Update an item

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
    $request = new Operations\PatchCommerceItemRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceItem: new Shared\CommerceItem(
            collectionIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2023-06-21T03:47:22.544Z'),
            description: 'Front-line explicit circuit',
            id: '<id>',
            isActive: false,
            isTaxable: false,
            media: [
                new Shared\CommerceItemMedia,
            ],
            name: '<value>',
            publicDescription: '<value>',
            publicName: '<value>',
            raw: [
                'Dollar' => '<value>',
            ],
            slug: '<value>',
            tags: [
                '<value>',
            ],
            type: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2022-12-26T15:20:36.769Z'),
            variants: [
                new Shared\CommerceItemVariant,
            ],
            vendorName: '<value>',
        ),
    );
    $response = $sdk->item->patchCommerceItem($request);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchCommerceItemRequest](../../Models/Operations/PatchCommerceItemRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchCommerceItemResponse](../../Models/Operations/PatchCommerceItemResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeCommerceItem

Remove an item

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
    $request = new Operations\RemoveCommerceItemRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->item->removeCommerceItem($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveCommerceItemRequest](../../Models/Operations/RemoveCommerceItemRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveCommerceItemResponse](../../Models/Operations/RemoveCommerceItemResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateCommerceItem

Update an item

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
    $request = new Operations\UpdateCommerceItemRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceItem: new Shared\CommerceItem(
            collectionIds: [
                '<value>',
            ],
            createdAt: Utils\Utils::parseDateTime('2023-12-27T01:13:33.758Z'),
            description: 'Advanced intangible toolset',
            id: '<id>',
            isActive: false,
            isTaxable: false,
            media: [
                new Shared\CommerceItemMedia,
            ],
            name: '<value>',
            publicDescription: '<value>',
            publicName: '<value>',
            raw: [
                'fuga' => '<value>',
            ],
            slug: '<value>',
            tags: [
                '<value>',
            ],
            type: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2022-05-30T16:38:52.346Z'),
            variants: [
                new Shared\CommerceItemVariant,
            ],
            vendorName: '<value>',
        ),
    );
    $response = $sdk->item->updateCommerceItem($request);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateCommerceItemRequest](../../Models/Operations/UpdateCommerceItemRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateCommerceItemResponse](../../Models/Operations/UpdateCommerceItemResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
