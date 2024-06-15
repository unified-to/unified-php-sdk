# Inventory


### Available Operations

* [createCommerceInventory](#createcommerceinventory) - Create an inventory
* [getCommerceInventory](#getcommerceinventory) - Retrieve an inventory
* [listCommerceInventories](#listcommerceinventories) - List all inventories
* [patchCommerceInventory](#patchcommerceinventory) - Update an inventory
* [removeCommerceInventory](#removecommerceinventory) - Remove an inventory
* [updateCommerceInventory](#updatecommerceinventory) - Update an inventory

## createCommerceInventory

Create an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateCommerceInventoryRequest();
    $request->commerceInventory = new Shared\CommerceInventory();
    $request->commerceInventory->available = 5165.08;
    $request->commerceInventory->id = '<id>';
    $request->commerceInventory->itemId = '<value>';
    $request->commerceInventory->itemOptionId = '<value>';
    $request->commerceInventory->itemVariantId = '<value>';
    $request->commerceInventory->locationId = '<value>';
    $request->commerceInventory->raw = [
        'Officer' => '<value>',
    ];
    $request->commerceInventory->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-19T06:57:05.921Z');
    $request->connectionId = '<value>';;

    $response = $sdk->inventory->createCommerceInventory($request);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateCommerceInventoryRequest](../../Models/Operations/CreateCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceInventoryResponse](../../Models/Operations/CreateCommerceInventoryResponse.md)**


## getCommerceInventory

Retrieve an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCommerceInventoryRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->inventory->getCommerceInventory($request);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCommerceInventoryRequest](../../Models/Operations/GetCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceInventoryResponse](../../Models/Operations/GetCommerceInventoryResponse.md)**


## listCommerceInventories

List all inventories

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListCommerceInventoriesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->itemId = '<value>';
    $request->itemVariantId = '<value>';
    $request->limit = 2481.16;
    $request->locationId = '<value>';
    $request->offset = 9476.38;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-15T22:28:16.925Z');;

    $response = $sdk->inventory->listCommerceInventories($request);

    if ($response->commerceInventories !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListCommerceInventoriesRequest](../../Models/Operations/ListCommerceInventoriesRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceInventoriesResponse](../../Models/Operations/ListCommerceInventoriesResponse.md)**


## patchCommerceInventory

Update an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCommerceInventoryRequest();
    $request->commerceInventory = new Shared\CommerceInventory();
    $request->commerceInventory->available = 615.23;
    $request->commerceInventory->id = '<id>';
    $request->commerceInventory->itemId = '<value>';
    $request->commerceInventory->itemOptionId = '<value>';
    $request->commerceInventory->itemVariantId = '<value>';
    $request->commerceInventory->locationId = '<value>';
    $request->commerceInventory->raw = [
        'Modern' => '<value>',
    ];
    $request->commerceInventory->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T05:22:53.251Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->inventory->patchCommerceInventory($request);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCommerceInventoryRequest](../../Models/Operations/PatchCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceInventoryResponse](../../Models/Operations/PatchCommerceInventoryResponse.md)**


## removeCommerceInventory

Remove an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceInventoryRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->inventory->removeCommerceInventory($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveCommerceInventoryRequest](../../Models/Operations/RemoveCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceInventoryResponse](../../Models/Operations/RemoveCommerceInventoryResponse.md)**


## updateCommerceInventory

Update an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateCommerceInventoryRequest();
    $request->commerceInventory = new Shared\CommerceInventory();
    $request->commerceInventory->available = 9360.02;
    $request->commerceInventory->id = '<id>';
    $request->commerceInventory->itemId = '<value>';
    $request->commerceInventory->itemOptionId = '<value>';
    $request->commerceInventory->itemVariantId = '<value>';
    $request->commerceInventory->locationId = '<value>';
    $request->commerceInventory->raw = [
        'wavy' => '<value>',
    ];
    $request->commerceInventory->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-08T14:12:09.565Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->inventory->updateCommerceInventory($request);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateCommerceInventoryRequest](../../Models/Operations/UpdateCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceInventoryResponse](../../Models/Operations/UpdateCommerceInventoryResponse.md)**

