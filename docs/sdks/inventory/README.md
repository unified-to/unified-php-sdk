# Inventory

## Overview

### Available Operations

* [createCommerceInventory2](#createcommerceinventory2) - Create an inventory
* [getCommerceInventory2](#getcommerceinventory2) - Retrieve an inventory
* [listCommerceInventories2](#listcommerceinventories2) - List all inventories
* [patchCommerceInventory2](#patchcommerceinventory2) - Update an inventory
* [removeCommerceInventory2](#removecommerceinventory2) - Remove an inventory
* [updateCommerceInventory2](#updatecommerceinventory2) - Update an inventory

## createCommerceInventory2

Create an inventory

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceInventory2" method="post" path="/commerce/{connection_id}/inventory" -->
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

$request = new Operations\CreateCommerceInventory2Request(
    commerceInventory: new Shared\CommerceInventory(),
    connectionId: '<id>',
);

$response = $sdk->inventory->createCommerceInventory2(
    request: $request
);

if ($response->commerceInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateCommerceInventory2Request](../../Models/Operations/CreateCommerceInventory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateCommerceInventory2Response](../../Models/Operations/CreateCommerceInventory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceInventory2

Retrieve an inventory

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceInventory2" method="get" path="/commerce/{connection_id}/inventory/{id}" -->
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

$request = new Operations\GetCommerceInventory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->inventory->getCommerceInventory2(
    request: $request
);

if ($response->commerceInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetCommerceInventory2Request](../../Models/Operations/GetCommerceInventory2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetCommerceInventory2Response](../../Models/Operations/GetCommerceInventory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceInventories2

List all inventories

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceInventories2" method="get" path="/commerce/{connection_id}/inventory" -->
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

$request = new Operations\ListCommerceInventories2Request(
    connectionId: '<id>',
);

$response = $sdk->inventory->listCommerceInventories2(
    request: $request
);

if ($response->commerceInventories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListCommerceInventories2Request](../../Models/Operations/ListCommerceInventories2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListCommerceInventories2Response](../../Models/Operations/ListCommerceInventories2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceInventory2

Update an inventory

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceInventory2" method="patch" path="/commerce/{connection_id}/inventory/{id}" -->
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

$request = new Operations\PatchCommerceInventory2Request(
    commerceInventory: new Shared\CommerceInventory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->inventory->patchCommerceInventory2(
    request: $request
);

if ($response->commerceInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchCommerceInventory2Request](../../Models/Operations/PatchCommerceInventory2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchCommerceInventory2Response](../../Models/Operations/PatchCommerceInventory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceInventory2

Remove an inventory

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceInventory2" method="delete" path="/commerce/{connection_id}/inventory/{id}" -->
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

$request = new Operations\RemoveCommerceInventory2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->inventory->removeCommerceInventory2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveCommerceInventory2Request](../../Models/Operations/RemoveCommerceInventory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveCommerceInventory2Response](../../Models/Operations/RemoveCommerceInventory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceInventory2

Update an inventory

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceInventory2" method="put" path="/commerce/{connection_id}/inventory/{id}" -->
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

$request = new Operations\UpdateCommerceInventory2Request(
    commerceInventory: new Shared\CommerceInventory(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->inventory->updateCommerceInventory2(
    request: $request
);

if ($response->commerceInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateCommerceInventory2Request](../../Models/Operations/UpdateCommerceInventory2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateCommerceInventory2Response](../../Models/Operations/UpdateCommerceInventory2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |