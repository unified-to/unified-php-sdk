# Item

## Overview

### Available Operations

* [createCommerceItem2](#createcommerceitem2) - Create an item
* [getCommerceItem2](#getcommerceitem2) - Retrieve an item
* [listCommerceItems2](#listcommerceitems2) - List all items
* [patchCommerceItem2](#patchcommerceitem2) - Update an item
* [removeCommerceItem2](#removecommerceitem2) - Remove an item
* [updateCommerceItem2](#updatecommerceitem2) - Update an item

## createCommerceItem2

Create an item

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceItem2" method="post" path="/commerce/{connection_id}/item" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceItem2Request(
    commerceItem: new Shared\CommerceItem(),
    connectionId: '<id>',
);

$response = $sdk->item->createCommerceItem2(
    request: $request
);

if ($response->commerceItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateCommerceItem2Request](../../Models/Operations/CreateCommerceItem2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateCommerceItem2Response](../../Models/Operations/CreateCommerceItem2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceItem2

Retrieve an item

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceItem2" method="get" path="/commerce/{connection_id}/item/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetCommerceItem2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->item->getCommerceItem2(
    request: $request
);

if ($response->commerceItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetCommerceItem2Request](../../Models/Operations/GetCommerceItem2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetCommerceItem2Response](../../Models/Operations/GetCommerceItem2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceItems2

List all items

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceItems2" method="get" path="/commerce/{connection_id}/item" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListCommerceItems2Request(
    connectionId: '<id>',
);

$response = $sdk->item->listCommerceItems2(
    request: $request
);

if ($response->commerceItems !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCommerceItems2Request](../../Models/Operations/ListCommerceItems2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCommerceItems2Response](../../Models/Operations/ListCommerceItems2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceItem2

Update an item

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceItem2" method="patch" path="/commerce/{connection_id}/item/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceItem2Request(
    commerceItem: new Shared\CommerceItem(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->item->patchCommerceItem2(
    request: $request
);

if ($response->commerceItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchCommerceItem2Request](../../Models/Operations/PatchCommerceItem2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchCommerceItem2Response](../../Models/Operations/PatchCommerceItem2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceItem2

Remove an item

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceItem2" method="delete" path="/commerce/{connection_id}/item/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveCommerceItem2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->item->removeCommerceItem2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveCommerceItem2Request](../../Models/Operations/RemoveCommerceItem2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveCommerceItem2Response](../../Models/Operations/RemoveCommerceItem2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceItem2

Update an item

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceItem2" method="put" path="/commerce/{connection_id}/item/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceItem2Request(
    commerceItem: new Shared\CommerceItem(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->item->updateCommerceItem2(
    request: $request
);

if ($response->commerceItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateCommerceItem2Request](../../Models/Operations/UpdateCommerceItem2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateCommerceItem2Response](../../Models/Operations/UpdateCommerceItem2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |