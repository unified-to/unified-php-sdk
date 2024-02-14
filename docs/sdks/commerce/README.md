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
require_once 'vendor/autoload.php';

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
    $request->commerceCollection->id = '<ID>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        'string',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = 'string';
    $request->commerceCollection->publicDescription = 'string';
    $request->commerceCollection->publicName = 'string';
    $request->commerceCollection->raw = [
        'whoever' => 'string',
    ];
    $request->commerceCollection->tags = [
        'string',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-13T10:39:45.495Z');
    $request->connectionId = 'string';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceInventory->id = '<ID>';
    $request->commerceInventory->itemId = 'string';
    $request->commerceInventory->itemOptionId = 'string';
    $request->commerceInventory->itemVariantId = 'string';
    $request->commerceInventory->locationId = 'string';
    $request->commerceInventory->raw = [
        'Officer' => 'string',
    ];
    $request->commerceInventory->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-19T06:57:05.921Z');
    $request->connectionId = 'string';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceItem->id = '<ID>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = 'string';
    $request->commerceItem->publicDescription = 'string';
    $request->commerceItem->publicName = 'string';
    $request->commerceItem->raw = [
        'Awesome' => 'string',
    ];
    $request->commerceItem->tags = [
        'string',
    ];
    $request->commerceItem->type = 'string';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-06T06:18:58.093Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = 'string';
    $request->connectionId = 'string';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceLocation->address->address1 = 'string';
    $request->commerceLocation->address->address2 = 'string';
    $request->commerceLocation->address->city = 'North Marysecester';
    $request->commerceLocation->address->country = 'Maldives';
    $request->commerceLocation->address->countryCode = 'CU';
    $request->commerceLocation->address->postalCode = '81935';
    $request->commerceLocation->address->region = 'string';
    $request->commerceLocation->address->regionCode = 'string';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-11T11:46:34.114Z');
    $request->commerceLocation->id = '<ID>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = 'string';
    $request->commerceLocation->raw = [
        'Rock' => 'string',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-13T08:13:54.098Z');
    $request->connectionId = 'string';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCommerceCollectionRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCommerceInventoryRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCommerceItemRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetCommerceLocationRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListCommerceCollectionsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 2972.15;
    $request->offset = 5933.83;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListCommerceInventoriesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->itemId = 'string';
    $request->limit = 2481.16;
    $request->locationId = 'string';
    $request->offset = 9476.38;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListCommerceItemsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 2553.93;
    $request->offset = 4072.28;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListCommerceLocationsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 2087.22;
    $request->offset = 1166.59;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
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
require_once 'vendor/autoload.php';

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
    $request->commerceCollection->id = '<ID>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        'string',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = 'string';
    $request->commerceCollection->publicDescription = 'string';
    $request->commerceCollection->publicName = 'string';
    $request->commerceCollection->raw = [
        'Cheese' => 'string',
    ];
    $request->commerceCollection->tags = [
        'string',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-29T23:35:48.700Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceInventory->id = '<ID>';
    $request->commerceInventory->itemId = 'string';
    $request->commerceInventory->itemOptionId = 'string';
    $request->commerceInventory->itemVariantId = 'string';
    $request->commerceInventory->locationId = 'string';
    $request->commerceInventory->raw = [
        'Modern' => 'string',
    ];
    $request->commerceInventory->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-27T05:22:53.251Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceItem->id = '<ID>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = 'string';
    $request->commerceItem->publicDescription = 'string';
    $request->commerceItem->publicName = 'string';
    $request->commerceItem->raw = [
        'Dollar' => 'string',
    ];
    $request->commerceItem->tags = [
        'string',
    ];
    $request->commerceItem->type = 'string';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-26T15:20:36.769Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceLocation->address->address1 = 'string';
    $request->commerceLocation->address->address2 = 'string';
    $request->commerceLocation->address->city = 'Lonniefurt';
    $request->commerceLocation->address->country = 'Libyan Arab Jamahiriya';
    $request->commerceLocation->address->countryCode = 'KM';
    $request->commerceLocation->address->postalCode = '64647';
    $request->commerceLocation->address->region = 'string';
    $request->commerceLocation->address->regionCode = 'string';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-12T06:32:06.220Z');
    $request->commerceLocation->id = '<ID>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = 'string';
    $request->commerceLocation->raw = [
        'Syrian' => 'string',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-27T18:21:44.446Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceCollectionRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceInventoryRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceItemRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveCommerceLocationRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceCollection->id = '<ID>';
    $request->commerceCollection->isActive = false;
    $request->commerceCollection->isFeatured = false;
    $request->commerceCollection->isVisible = false;
    $request->commerceCollection->itemIds = [
        'string',
    ];
    $request->commerceCollection->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceCollection->name = 'string';
    $request->commerceCollection->publicDescription = 'string';
    $request->commerceCollection->publicName = 'string';
    $request->commerceCollection->raw = [
        'Modern' => 'string',
    ];
    $request->commerceCollection->tags = [
        'string',
    ];
    $request->commerceCollection->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-08T04:19:59.358Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceInventory->id = '<ID>';
    $request->commerceInventory->itemId = 'string';
    $request->commerceInventory->itemOptionId = 'string';
    $request->commerceInventory->itemVariantId = 'string';
    $request->commerceInventory->locationId = 'string';
    $request->commerceInventory->raw = [
        'wavy' => 'string',
    ];
    $request->commerceInventory->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-08T14:12:09.565Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceItem->id = '<ID>';
    $request->commerceItem->isActive = false;
    $request->commerceItem->isTaxable = false;
    $request->commerceItem->media = [
        new Shared\CommerceItemMedia(),
    ];
    $request->commerceItem->name = 'string';
    $request->commerceItem->publicDescription = 'string';
    $request->commerceItem->publicName = 'string';
    $request->commerceItem->raw = [
        'fuga' => 'string',
    ];
    $request->commerceItem->tags = [
        'string',
    ];
    $request->commerceItem->type = 'string';
    $request->commerceItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-30T16:38:52.346Z');
    $request->commerceItem->variants = [
        new Shared\CommerceItemVariant(),
    ];
    $request->commerceItem->vendorName = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
require_once 'vendor/autoload.php';

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
    $request->commerceLocation->address->address1 = 'string';
    $request->commerceLocation->address->address2 = 'string';
    $request->commerceLocation->address->city = 'Stillwater';
    $request->commerceLocation->address->country = 'Sierra Leone';
    $request->commerceLocation->address->countryCode = 'AL';
    $request->commerceLocation->address->postalCode = '49876-8332';
    $request->commerceLocation->address->region = 'string';
    $request->commerceLocation->address->regionCode = 'string';
    $request->commerceLocation->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-19T11:29:36.755Z');
    $request->commerceLocation->id = '<ID>';
    $request->commerceLocation->isActive = false;
    $request->commerceLocation->name = 'string';
    $request->commerceLocation->raw = [
        'Street' => 'string',
    ];
    $request->commerceLocation->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-09T05:57:43.241Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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

