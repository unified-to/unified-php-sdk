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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T12:03:57.982Z');
    $request->commerceCollection->description = 'Team-oriented intermediate interface';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
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
    $request->commerceCollection->type = Shared\CommerceCollectionType::Category;
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-05T09:05:38.009Z');
    $request->connectionId = '<value>';;

    $response = $sdk->commerce->createCommerceCollection($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateCommerceCollectionRequest](../../Models/Operations/CreateCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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

    $response = $sdk->commerce->createCommerceInventory($request);

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


## createCommerceItem

Create an item

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

    $response = $sdk->commerce->createCommerceItem($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateCommerceItemRequest](../../Models/Operations/CreateCommerceItemRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->commerceLocation->description = 'Persevering 5th generation capability';
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Planner' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-11T11:05:08.665Z');
    $request->connectionId = '<value>';;

    $response = $sdk->commerce->createCommerceLocation($request);

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateCommerceLocationRequest](../../Models/Operations/CreateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCommerceCollectionRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->commerce->getCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetCommerceCollectionRequest](../../Models/Operations/GetCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


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

    $response = $sdk->commerce->getCommerceInventory($request);

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


## getCommerceItem

Retrieve an item

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
        $request = new Operations\GetCommerceItemRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->commerce->getCommerceItem($request);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCommerceItemRequest](../../Models/Operations/GetCommerceItemRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCommerceLocationRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->commerce->getCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetCommerceLocationRequest](../../Models/Operations/GetCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->type = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-08T20:40:35.103Z');;

    $response = $sdk->commerce->listCommerceCollections($request);

    if ($response->commerceCollections !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListCommerceCollectionsRequest](../../Models/Operations/ListCommerceCollectionsRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


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
    $request->limit = 2481.16;
    $request->locationId = '<value>';
    $request->offset = 9476.38;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-15T22:28:16.925Z');;

    $response = $sdk->commerce->listCommerceInventories($request);

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


## listCommerceItems

List all items

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
        $request = new Operations\ListCommerceItemsRequest();
    $request->collectionId = '<value>';
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

    $response = $sdk->commerce->listCommerceItems($request);

    if ($response->commerceItems !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListCommerceItemsRequest](../../Models/Operations/ListCommerceItemsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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

    $response = $sdk->commerce->listCommerceLocations($request);

    if ($response->commerceLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\ListCommerceLocationsRequest](../../Models/Operations/ListCommerceLocationsRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T01:30:16.292Z');
    $request->commerceCollection->description = 'Polarised solution-oriented analyzer';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
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
    $request->commerceCollection->type = Shared\CommerceCollectionType::SavedSearch;
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-04T22:23:37.874Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->commerce->patchCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchCommerceCollectionRequest](../../Models/Operations/PatchCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


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

    $response = $sdk->commerce->patchCommerceInventory($request);

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


## patchCommerceItem

Update an item

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

    $response = $sdk->commerce->patchCommerceItem($request);

    if ($response->commerceItem !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchCommerceItemRequest](../../Models/Operations/PatchCommerceItemRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->commerceLocation->description = 'Managed real-time forecast';
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'COM' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-02T05:15:52.185Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->commerce->patchCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchCommerceLocationRequest](../../Models/Operations/PatchCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceCollectionRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->commerce->removeCommerceCollection($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveCommerceCollectionRequest](../../Models/Operations/RemoveCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceInventoryRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->commerce->removeCommerceInventory($request);

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


## removeCommerceItem

Remove an item

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
        $request = new Operations\RemoveCommerceItemRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->commerce->removeCommerceItem($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveCommerceItemRequest](../../Models/Operations/RemoveCommerceItemRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceLocationRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->commerce->removeCommerceLocation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveCommerceLocationRequest](../../Models/Operations/RemoveCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateCommerceCollectionRequest();
    $request->commerceCollection = new Shared\CommerceCollection();
    $request->commerceCollection->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-30T10:24:18.569Z');
    $request->commerceCollection->description = 'Sharable dynamic solution';
    $request->commerceCollection->id = '<id>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
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
    $request->commerceCollection->type = Shared\CommerceCollectionType::Collection;
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-17T22:11:40.268Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->commerce->updateCommerceCollection($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateCommerceCollectionRequest](../../Models/Operations/UpdateCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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

    $response = $sdk->commerce->updateCommerceInventory($request);

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


## updateCommerceItem

Update an item

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

    $response = $sdk->commerce->updateCommerceItem($request);

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
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateCommerceItemRequest](../../Models/Operations/UpdateCommerceItemRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


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
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->commerceLocation->description = 'Customizable interactive Graphic Interface';
    $request->commerceLocation->id = '<id>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = '<value>';
    $request->commerceLocation->raw = [
        'Van' => '<value>',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-22T20:47:46.586Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->commerce->updateCommerceLocation($request);

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateCommerceLocationRequest](../../Models/Operations/UpdateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCommerceLocationResponse](../../Models/Operations/UpdateCommerceLocationResponse.md)**

