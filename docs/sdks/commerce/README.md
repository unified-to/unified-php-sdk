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
    $request = new Operations\CreateCommerceCollectionRequest(
        connectionId: '<value>',
        commerceCollection: new Shared\CommerceCollection(
            id: '<id>',
            name: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-06-14T12:03:57.982Z'),
            description: 'Team-oriented intermediate interface',
            isActive: false,
            isFeatured: false,
            isVisible: false,
            media: [
                new Shared\CommerceItemMedia,
            ],
            parentId: '<value>',
            publicDescription: '<value>',
            publicName: '<value>',
            raw: [
                'whoever' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            type: Shared\CommerceCollectionType::Category,
            updatedAt: Utils\Utils::parseDateTime('2022-06-05T09:05:38.009Z'),
        ),
    );
    $response = $sdk->commerce->createCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateCommerceCollectionRequest](../../Models/Operations/CreateCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?Operations\CreateCommerceCollectionResponse](../../Models/Operations/CreateCommerceCollectionResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## createCommerceInventory

Create an inventory

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
    $request = new Operations\CreateCommerceInventoryRequest(
        connectionId: '<value>',
        commerceInventory: new Shared\CommerceInventory(
            available: 5165.08,
            id: '<id>',
            itemId: '<value>',
            itemOptionId: '<value>',
            itemVariantId: '<value>',
            locationId: '<value>',
            raw: [
                'Officer' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-10-19T06:57:05.921Z'),
        ),
    );
    $response = $sdk->commerce->createCommerceInventory($request);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateCommerceInventoryRequest](../../Models/Operations/CreateCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\CreateCommerceInventoryResponse](../../Models/Operations/CreateCommerceInventoryResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

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
    $response = $sdk->commerce->createCommerceItem($request);

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

## createCommerceLocation

Create a location

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
    $request = new Operations\CreateCommerceLocationRequest(
        connectionId: '<value>',
        commerceLocation: new Shared\CommerceLocation(
            name: '<value>',
            address: new Shared\PropertyCommerceLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'North Marysecester',
                country: 'Maldives',
                countryCode: 'CU',
                postalCode: '81935',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2024-01-11T11:46:34.114Z'),
            description: 'Persevering 5th generation capability',
            id: '<id>',
            isActive: false,
            raw: [
                'Planner' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-07-11T11:05:08.665Z'),
        ),
    );
    $response = $sdk->commerce->createCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateCommerceLocationRequest](../../Models/Operations/CreateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\CreateCommerceLocationResponse](../../Models/Operations/CreateCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getCommerceCollection

Retrieve a collection

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
    $request = new Operations\GetCommerceCollectionRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->commerce->getCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetCommerceCollectionRequest](../../Models/Operations/GetCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?Operations\GetCommerceCollectionResponse](../../Models/Operations/GetCommerceCollectionResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getCommerceInventory

Retrieve an inventory

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
    $request = new Operations\GetCommerceInventoryRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->commerce->getCommerceInventory($request);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetCommerceInventoryRequest](../../Models/Operations/GetCommerceInventoryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?Operations\GetCommerceInventoryResponse](../../Models/Operations/GetCommerceInventoryResponse.md)**
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
    $response = $sdk->commerce->getCommerceItem($request);

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

## getCommerceLocation

Retrieve a location

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
    $request = new Operations\GetCommerceLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->commerce->getCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetCommerceLocationRequest](../../Models/Operations/GetCommerceLocationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\GetCommerceLocationResponse](../../Models/Operations/GetCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listCommerceCollections

List all collections

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
    $request = new Operations\ListCommerceCollectionsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 2972.15,
        offset: 5933.83,
        order: '<value>',
        parentId: '<value>',
        query: '<value>',
        sort: '<value>',
        type: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-08-08T20:40:35.103Z'),
    );
    $response = $sdk->commerce->listCommerceCollections($request);

    if ($response->commerceCollections !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListCommerceCollectionsRequest](../../Models/Operations/ListCommerceCollectionsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\ListCommerceCollectionsResponse](../../Models/Operations/ListCommerceCollectionsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listCommerceInventories

List all inventories

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
    $request = new Operations\ListCommerceInventoriesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        itemVariantId: '<value>',
        limit: 2481.16,
        locationId: '<value>',
        offset: 9476.38,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-10-15T22:28:16.925Z'),
    );
    $response = $sdk->commerce->listCommerceInventories($request);

    if ($response->commerceInventories !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListCommerceInventoriesRequest](../../Models/Operations/ListCommerceInventoriesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\ListCommerceInventoriesResponse](../../Models/Operations/ListCommerceInventoriesResponse.md)**
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
    $response = $sdk->commerce->listCommerceItems($request);

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

## listCommerceLocations

List all locations

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
    $request = new Operations\ListCommerceLocationsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 2087.22,
        offset: 1166.59,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-06-09T14:52:37.550Z'),
    );
    $response = $sdk->commerce->listCommerceLocations($request);

    if ($response->commerceLocations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListCommerceLocationsRequest](../../Models/Operations/ListCommerceLocationsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?Operations\ListCommerceLocationsResponse](../../Models/Operations/ListCommerceLocationsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchCommerceCollection

Update a collection

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
    $request = new Operations\PatchCommerceCollectionRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceCollection: new Shared\CommerceCollection(
            id: '<id>',
            name: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-12-27T01:30:16.292Z'),
            description: 'Polarised solution-oriented analyzer',
            isActive: false,
            isFeatured: false,
            isVisible: false,
            media: [
                new Shared\CommerceItemMedia,
            ],
            parentId: '<value>',
            publicDescription: '<value>',
            publicName: '<value>',
            raw: [
                'Cheese' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            type: Shared\CommerceCollectionType::SavedSearch,
            updatedAt: Utils\Utils::parseDateTime('2024-08-04T22:23:37.874Z'),
        ),
    );
    $response = $sdk->commerce->patchCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchCommerceCollectionRequest](../../Models/Operations/PatchCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\PatchCommerceCollectionResponse](../../Models/Operations/PatchCommerceCollectionResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchCommerceInventory

Update an inventory

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
    $request = new Operations\PatchCommerceInventoryRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceInventory: new Shared\CommerceInventory(
            available: 615.23,
            id: '<id>',
            itemId: '<value>',
            itemOptionId: '<value>',
            itemVariantId: '<value>',
            locationId: '<value>',
            raw: [
                'Modern' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-12-27T05:22:53.251Z'),
        ),
    );
    $response = $sdk->commerce->patchCommerceInventory($request);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchCommerceInventoryRequest](../../Models/Operations/PatchCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\PatchCommerceInventoryResponse](../../Models/Operations/PatchCommerceInventoryResponse.md)**
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
    $response = $sdk->commerce->patchCommerceItem($request);

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

## patchCommerceLocation

Update a location

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
    $request = new Operations\PatchCommerceLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceLocation: new Shared\CommerceLocation(
            name: '<value>',
            address: new Shared\PropertyCommerceLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Lonniefurt',
                country: 'Libyan Arab Jamahiriya',
                countryCode: 'KM',
                postalCode: '64647',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2023-03-12T06:32:06.220Z'),
            description: 'Managed real-time forecast',
            id: '<id>',
            isActive: false,
            raw: [
                'COM' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-04-02T05:15:52.185Z'),
        ),
    );
    $response = $sdk->commerce->patchCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchCommerceLocationRequest](../../Models/Operations/PatchCommerceLocationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |


### Response

**[?Operations\PatchCommerceLocationResponse](../../Models/Operations/PatchCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeCommerceCollection

Remove a collection

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
    $request = new Operations\RemoveCommerceCollectionRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->commerce->removeCommerceCollection($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveCommerceCollectionRequest](../../Models/Operations/RemoveCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?Operations\RemoveCommerceCollectionResponse](../../Models/Operations/RemoveCommerceCollectionResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeCommerceInventory

Remove an inventory

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
    $request = new Operations\RemoveCommerceInventoryRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->commerce->removeCommerceInventory($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveCommerceInventoryRequest](../../Models/Operations/RemoveCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\RemoveCommerceInventoryResponse](../../Models/Operations/RemoveCommerceInventoryResponse.md)**
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
    $response = $sdk->commerce->removeCommerceItem($request);

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

## removeCommerceLocation

Remove a location

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
    $request = new Operations\RemoveCommerceLocationRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->commerce->removeCommerceLocation($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveCommerceLocationRequest](../../Models/Operations/RemoveCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\RemoveCommerceLocationResponse](../../Models/Operations/RemoveCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateCommerceCollection

Update a collection

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
    $request = new Operations\UpdateCommerceCollectionRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceCollection: new Shared\CommerceCollection(
            id: '<id>',
            name: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-07-30T10:24:18.569Z'),
            description: 'Sharable dynamic solution',
            isActive: false,
            isFeatured: false,
            isVisible: false,
            media: [
                new Shared\CommerceItemMedia,
            ],
            parentId: '<value>',
            publicDescription: '<value>',
            publicName: '<value>',
            raw: [
                'Modern' => '<value>',
            ],
            tags: [
                '<value>',
            ],
            type: Shared\CommerceCollectionType::Collection,
            updatedAt: Utils\Utils::parseDateTime('2024-01-17T22:11:40.268Z'),
        ),
    );
    $response = $sdk->commerce->updateCommerceCollection($request);

    if ($response->commerceCollection !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateCommerceCollectionRequest](../../Models/Operations/UpdateCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |


### Response

**[?Operations\UpdateCommerceCollectionResponse](../../Models/Operations/UpdateCommerceCollectionResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateCommerceInventory

Update an inventory

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
    $request = new Operations\UpdateCommerceInventoryRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceInventory: new Shared\CommerceInventory(
            available: 9360.02,
            id: '<id>',
            itemId: '<value>',
            itemOptionId: '<value>',
            itemVariantId: '<value>',
            locationId: '<value>',
            raw: [
                'wavy' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2024-05-08T14:12:09.565Z'),
        ),
    );
    $response = $sdk->commerce->updateCommerceInventory($request);

    if ($response->commerceInventory !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateCommerceInventoryRequest](../../Models/Operations/UpdateCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\UpdateCommerceInventoryResponse](../../Models/Operations/UpdateCommerceInventoryResponse.md)**
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
    $response = $sdk->commerce->updateCommerceItem($request);

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

## updateCommerceLocation

Update a location

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
    $request = new Operations\UpdateCommerceLocationRequest(
        connectionId: '<value>',
        id: '<id>',
        commerceLocation: new Shared\CommerceLocation(
            name: '<value>',
            address: new Shared\PropertyCommerceLocationAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Stillwater',
                country: 'Sierra Leone',
                countryCode: 'AL',
                postalCode: '49876-8332',
                region: '<value>',
                regionCode: '<value>',
            ),
            createdAt: Utils\Utils::parseDateTime('2022-04-19T11:29:36.755Z'),
            description: 'Customizable interactive Graphic Interface',
            id: '<id>',
            isActive: false,
            raw: [
                'Van' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-04-22T20:47:46.586Z'),
        ),
    );
    $response = $sdk->commerce->updateCommerceLocation($request);

    if ($response->commerceLocation !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateCommerceLocationRequest](../../Models/Operations/UpdateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\UpdateCommerceLocationResponse](../../Models/Operations/UpdateCommerceLocationResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
