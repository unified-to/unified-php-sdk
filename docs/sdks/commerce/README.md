# Commerce


### Available Operations

* [createCommerceCollection](#createcommercecollection) - Create a collection
* [createCommerceInventory](#createcommerceinventory) - Create an inventory
* [createCommerceItem](#createcommerceitem) - Create an item
* [createCommerceLocation](#createcommercelocation) - Create a location
* [getCommerceCollection](#getcommercecollection) - Retrieve a collection
* [getCommerceInventory](#getcommerceinventory) - Retrieve an inventory
* [getCommerceItem](#getcommerceitem) - Retrieve an item
* [getCommerceLocation](#getcommercelocation) - Retrieve a location
* [listCommerceCollections](#listcommercecollections) - List all collections
* [listCommerceInventories](#listcommerceinventories) - List all inventories
* [listCommerceItems](#listcommerceitems) - List all items
* [listCommerceLocations](#listcommercelocations) - List all locations
* [patchCommerceCollection](#patchcommercecollection) - Update a collection
* [patchCommerceInventory](#patchcommerceinventory) - Update an inventory
* [patchCommerceItem](#patchcommerceitem) - Update an item
* [patchCommerceLocation](#patchcommercelocation) - Update a location
* [removeCommerceCollection](#removecommercecollection) - Remove a collection
* [removeCommerceInventory](#removecommerceinventory) - Remove an inventory
* [removeCommerceItem](#removecommerceitem) - Remove an item
* [removeCommerceLocation](#removecommercelocation) - Remove a location
* [updateCommerceCollection](#updatecommercecollection) - Update a collection
* [updateCommerceInventory](#updatecommerceinventory) - Update an inventory
* [updateCommerceItem](#updatecommerceitem) - Update an item
* [updateCommerceLocation](#updatecommercelocation) - Update a location

## createCommerceCollection

Create a collection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T12:03:57.982Z');
    $request->commerceCollection->description = 'Team-oriented intermediate interface';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        '<value>',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = '<value>';
    $request->commerceCollection->publicDescription = '<value>';
    $request->commerceCollection->publicName = '<value>';
    $request->commerceCollection->raw = [
        'whoever' => '<value>',
    ];
    $request->commerceCollection->tags = [
        '<value>',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-13T10:39:45.495Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCommerceCollectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->createCommerceCollection($request, $requestSecurity);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateCommerceCollectionRequest](../../Models/Operations/CreateCommerceCollectionRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateCommerceCollectionSecurity](../../Models/Operations/CreateCommerceCollectionSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceCollectionResponse](../../Models/Operations/CreateCommerceCollectionResponse.md)**


## createCommerceInventory

Create an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

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

    $requestSecurity = new Operations\CreateCommerceInventorySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->createCommerceInventory($request, $requestSecurity);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCommerceInventoryRequest](../../Models/Operations/CreateCommerceInventoryRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCommerceInventorySecurity](../../Models/Operations/CreateCommerceInventorySecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceInventoryResponse](../../Models/Operations/CreateCommerceInventoryResponse.md)**


## createCommerceItem

Create an item

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCommerceItemRequest();
    $request->commerceItem = new Shared\CommerceItem();
    $request->commerceItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-27T05:28:51.414Z');
    $request->commerceItem->description = 'Object-based local intranet';
    $request->commerceItem->id = '<id>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = '<value>';
    $request->commerceItem->publicDescription = '<value>';
    $request->commerceItem->publicName = '<value>';
    $request->commerceItem->raw = [
        'Awesome' => '<value>',
    ];
    $request->commerceItem->tags = [
        '<value>',
    ];
    $request->commerceItem->type = '<value>';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-06T06:18:58.093Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->createCommerceItem($request, $requestSecurity);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateCommerceItemRequest](../../Models/Operations/CreateCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateCommerceItemSecurity](../../Models/Operations/CreateCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceItemResponse](../../Models/Operations/CreateCommerceItemResponse.md)**


## createCommerceLocation

Create a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateCommerceLocationRequest();
    $request->commerceLocation = new Shared\CommerceLocation();
    $request->commerceLocation->address = new Shared\PropertyCommerceLocationAddress();
    $request->commerceLocation->address->address1 = '<value>';
    $request->commerceLocation->address->address2 = '<value>';
    $request->commerceLocation->address->city = 'North Marysecester';
    $request->commerceLocation->address->country = 'Maldives';
    $request->commerceLocation->address->countryCode = 'CU';
    $request->commerceLocation->address->postalCode = '81935';
    $request->commerceLocation->address->region = '<value>';
    $request->commerceLocation->address->regionCode = '<value>';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-11T11:46:34.114Z');
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Rock' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-13T08:13:54.098Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->createCommerceLocation($request, $requestSecurity);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateCommerceLocationRequest](../../Models/Operations/CreateCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateCommerceLocationSecurity](../../Models/Operations/CreateCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCommerceLocationResponse](../../Models/Operations/CreateCommerceLocationResponse.md)**


## getCommerceCollection

Retrieve a collection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCommerceCollectionRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCommerceCollectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->getCommerceCollection($request, $requestSecurity);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCommerceCollectionRequest](../../Models/Operations/GetCommerceCollectionRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCommerceCollectionSecurity](../../Models/Operations/GetCommerceCollectionSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceCollectionResponse](../../Models/Operations/GetCommerceCollectionResponse.md)**


## getCommerceInventory

Retrieve an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCommerceInventoryRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCommerceInventorySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->getCommerceInventory($request, $requestSecurity);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCommerceInventoryRequest](../../Models/Operations/GetCommerceInventoryRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCommerceInventorySecurity](../../Models/Operations/GetCommerceInventorySecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceInventoryResponse](../../Models/Operations/GetCommerceInventoryResponse.md)**


## getCommerceItem

Retrieve an item

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCommerceItemRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->getCommerceItem($request, $requestSecurity);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCommerceItemRequest](../../Models/Operations/GetCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCommerceItemSecurity](../../Models/Operations/GetCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceItemResponse](../../Models/Operations/GetCommerceItemResponse.md)**


## getCommerceLocation

Retrieve a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetCommerceLocationRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->getCommerceLocation($request, $requestSecurity);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCommerceLocationRequest](../../Models/Operations/GetCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetCommerceLocationSecurity](../../Models/Operations/GetCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCommerceLocationResponse](../../Models/Operations/GetCommerceLocationResponse.md)**


## listCommerceCollections

List all collections

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCommerceCollectionsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2972.15;
    $request->offset = 5933.83;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-08T20:40:35.103Z');;

    $requestSecurity = new Operations\ListCommerceCollectionsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->listCommerceCollections($request, $requestSecurity);

    if ($response->commerceCollections !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCommerceCollectionsRequest](../../Models/Operations/ListCommerceCollectionsRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCommerceCollectionsSecurity](../../Models/Operations/ListCommerceCollectionsSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceCollectionsResponse](../../Models/Operations/ListCommerceCollectionsResponse.md)**


## listCommerceInventories

List all inventories

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCommerceInventoriesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->itemId = '<value>';
    $request->limit = 2481.16;
    $request->locationId = '<value>';
    $request->offset = 9476.38;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-15T22:28:16.925Z');;

    $requestSecurity = new Operations\ListCommerceInventoriesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->listCommerceInventories($request, $requestSecurity);

    if ($response->commerceInventories !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCommerceInventoriesRequest](../../Models/Operations/ListCommerceInventoriesRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\ListCommerceInventoriesSecurity](../../Models/Operations/ListCommerceInventoriesSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceInventoriesResponse](../../Models/Operations/ListCommerceInventoriesResponse.md)**


## listCommerceItems

List all items

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCommerceItemsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2553.93;
    $request->offset = 4072.28;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-10T19:08:09.923Z');;

    $requestSecurity = new Operations\ListCommerceItemsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->listCommerceItems($request, $requestSecurity);

    if ($response->commerceItems !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListCommerceItemsRequest](../../Models/Operations/ListCommerceItemsRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListCommerceItemsSecurity](../../Models/Operations/ListCommerceItemsSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceItemsResponse](../../Models/Operations/ListCommerceItemsResponse.md)**


## listCommerceLocations

List all locations

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListCommerceLocationsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2087.22;
    $request->offset = 1166.59;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-09T14:52:37.550Z');;

    $requestSecurity = new Operations\ListCommerceLocationsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->listCommerceLocations($request, $requestSecurity);

    if ($response->commerceLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListCommerceLocationsRequest](../../Models/Operations/ListCommerceLocationsRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListCommerceLocationsSecurity](../../Models/Operations/ListCommerceLocationsSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCommerceLocationsResponse](../../Models/Operations/ListCommerceLocationsResponse.md)**


## patchCommerceCollection

Update a collection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T01:30:16.292Z');
    $request->commerceCollection->description = 'Polarised solution-oriented analyzer';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        '<value>',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = '<value>';
    $request->commerceCollection->publicDescription = '<value>';
    $request->commerceCollection->publicName = '<value>';
    $request->commerceCollection->raw = [
        'Cheese' => '<value>',
    ];
    $request->commerceCollection->tags = [
        '<value>',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-29T23:35:48.700Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCommerceCollectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->patchCommerceCollection($request, $requestSecurity);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCommerceCollectionRequest](../../Models/Operations/PatchCommerceCollectionRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchCommerceCollectionSecurity](../../Models/Operations/PatchCommerceCollectionSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceCollectionResponse](../../Models/Operations/PatchCommerceCollectionResponse.md)**


## patchCommerceInventory

Update an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

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

    $requestSecurity = new Operations\PatchCommerceInventorySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->patchCommerceInventory($request, $requestSecurity);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCommerceInventoryRequest](../../Models/Operations/PatchCommerceInventoryRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCommerceInventorySecurity](../../Models/Operations/PatchCommerceInventorySecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceInventoryResponse](../../Models/Operations/PatchCommerceInventoryResponse.md)**


## patchCommerceItem

Update an item

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCommerceItemRequest();
    $request->commerceItem = new Shared\CommerceItem();
    $request->commerceItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-21T03:47:22.544Z');
    $request->commerceItem->description = 'Front-line explicit circuit';
    $request->commerceItem->id = '<id>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = '<value>';
    $request->commerceItem->publicDescription = '<value>';
    $request->commerceItem->publicName = '<value>';
    $request->commerceItem->raw = [
        'Dollar' => '<value>',
    ];
    $request->commerceItem->tags = [
        '<value>',
    ];
    $request->commerceItem->type = '<value>';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-26T15:20:36.769Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->patchCommerceItem($request, $requestSecurity);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCommerceItemRequest](../../Models/Operations/PatchCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCommerceItemSecurity](../../Models/Operations/PatchCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceItemResponse](../../Models/Operations/PatchCommerceItemResponse.md)**


## patchCommerceLocation

Update a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchCommerceLocationRequest();
    $request->commerceLocation = new Shared\CommerceLocation();
    $request->commerceLocation->address = new Shared\PropertyCommerceLocationAddress();
    $request->commerceLocation->address->address1 = '<value>';
    $request->commerceLocation->address->address2 = '<value>';
    $request->commerceLocation->address->city = 'Lonniefurt';
    $request->commerceLocation->address->country = 'Libyan Arab Jamahiriya';
    $request->commerceLocation->address->countryCode = 'KM';
    $request->commerceLocation->address->postalCode = '64647';
    $request->commerceLocation->address->region = '<value>';
    $request->commerceLocation->address->regionCode = '<value>';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-12T06:32:06.220Z');
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Syrian' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-27T18:21:44.446Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->patchCommerceLocation($request, $requestSecurity);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCommerceLocationRequest](../../Models/Operations/PatchCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchCommerceLocationSecurity](../../Models/Operations/PatchCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCommerceLocationResponse](../../Models/Operations/PatchCommerceLocationResponse.md)**


## removeCommerceCollection

Remove a collection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCommerceCollectionRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCommerceCollectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->removeCommerceCollection($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveCommerceCollectionRequest](../../Models/Operations/RemoveCommerceCollectionRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveCommerceCollectionSecurity](../../Models/Operations/RemoveCommerceCollectionSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceCollectionResponse](../../Models/Operations/RemoveCommerceCollectionResponse.md)**


## removeCommerceInventory

Remove an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCommerceInventoryRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCommerceInventorySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->removeCommerceInventory($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCommerceInventoryRequest](../../Models/Operations/RemoveCommerceInventoryRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCommerceInventorySecurity](../../Models/Operations/RemoveCommerceInventorySecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceInventoryResponse](../../Models/Operations/RemoveCommerceInventoryResponse.md)**


## removeCommerceItem

Remove an item

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCommerceItemRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->removeCommerceItem($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveCommerceItemRequest](../../Models/Operations/RemoveCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveCommerceItemSecurity](../../Models/Operations/RemoveCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceItemResponse](../../Models/Operations/RemoveCommerceItemResponse.md)**


## removeCommerceLocation

Remove a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveCommerceLocationRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->removeCommerceLocation($request, $requestSecurity);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveCommerceLocationRequest](../../Models/Operations/RemoveCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveCommerceLocationSecurity](../../Models/Operations/RemoveCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCommerceLocationResponse](../../Models/Operations/RemoveCommerceLocationResponse.md)**


## updateCommerceCollection

Update a collection

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-30T10:24:18.569Z');
    $request->commerceCollection->description = 'Sharable dynamic solution';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        '<value>',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = '<value>';
    $request->commerceCollection->publicDescription = '<value>';
    $request->commerceCollection->publicName = '<value>';
    $request->commerceCollection->raw = [
        'Modern' => '<value>',
    ];
    $request->commerceCollection->tags = [
        '<value>',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-08T04:19:59.358Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCommerceCollectionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->updateCommerceCollection($request, $requestSecurity);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateCommerceCollectionRequest](../../Models/Operations/UpdateCommerceCollectionRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateCommerceCollectionSecurity](../../Models/Operations/UpdateCommerceCollectionSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceCollectionResponse](../../Models/Operations/UpdateCommerceCollectionResponse.md)**


## updateCommerceInventory

Update an inventory

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

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

    $requestSecurity = new Operations\UpdateCommerceInventorySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->updateCommerceInventory($request, $requestSecurity);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCommerceInventoryRequest](../../Models/Operations/UpdateCommerceInventoryRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCommerceInventorySecurity](../../Models/Operations/UpdateCommerceInventorySecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceInventoryResponse](../../Models/Operations/UpdateCommerceInventoryResponse.md)**


## updateCommerceItem

Update an item

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCommerceItemRequest();
    $request->commerceItem = new Shared\CommerceItem();
    $request->commerceItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-27T01:13:33.758Z');
    $request->commerceItem->description = 'Advanced intangible toolset';
    $request->commerceItem->id = '<id>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = '<value>';
    $request->commerceItem->publicDescription = '<value>';
    $request->commerceItem->publicName = '<value>';
    $request->commerceItem->raw = [
        'fuga' => '<value>',
    ];
    $request->commerceItem->tags = [
        '<value>',
    ];
    $request->commerceItem->type = '<value>';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-30T16:38:52.346Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCommerceItemSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->updateCommerceItem($request, $requestSecurity);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateCommerceItemRequest](../../Models/Operations/UpdateCommerceItemRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateCommerceItemSecurity](../../Models/Operations/UpdateCommerceItemSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceItemResponse](../../Models/Operations/UpdateCommerceItemResponse.md)**


## updateCommerceLocation

Update a location

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateCommerceLocationRequest();
    $request->commerceLocation = new Shared\CommerceLocation();
    $request->commerceLocation->address = new Shared\PropertyCommerceLocationAddress();
    $request->commerceLocation->address->address1 = '<value>';
    $request->commerceLocation->address->address2 = '<value>';
    $request->commerceLocation->address->city = 'Stillwater';
    $request->commerceLocation->address->country = 'Sierra Leone';
    $request->commerceLocation->address->countryCode = 'AL';
    $request->commerceLocation->address->postalCode = '49876-8332';
    $request->commerceLocation->address->region = '<value>';
    $request->commerceLocation->address->regionCode = '<value>';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-19T11:29:36.755Z');
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Street' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-09T05:57:43.241Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateCommerceLocationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->commerce->updateCommerceLocation($request, $requestSecurity);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateCommerceLocationRequest](../../Models/Operations/UpdateCommerceLocationRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateCommerceLocationSecurity](../../Models/Operations/UpdateCommerceLocationSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceLocationResponse](../../Models/Operations/UpdateCommerceLocationResponse.md)**

