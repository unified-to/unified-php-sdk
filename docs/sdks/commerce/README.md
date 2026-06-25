# Commerce

## Overview

### Available Operations

* [createCommerceCollection2](#createcommercecollection2) - Create a collection
* [createCommerceInventory2](#createcommerceinventory2) - Create an inventory
* [createCommerceItem2](#createcommerceitem2) - Create an item
* [createCommerceItemvariant2](#createcommerceitemvariant2) - Create an itemvariant
* [createCommerceLocation2](#createcommercelocation2) - Create a location
* [createCommerceReservation2](#createcommercereservation2) - Create a reservation
* [createCommerceReview2](#createcommercereview2) - Create a review
* [createCommerceSaleschannel2](#createcommercesaleschannel2) - Create a saleschannel
* [getCommerceCollection2](#getcommercecollection2) - Retrieve a collection
* [getCommerceInventory2](#getcommerceinventory2) - Retrieve an inventory
* [getCommerceItem2](#getcommerceitem2) - Retrieve an item
* [getCommerceItemvariant2](#getcommerceitemvariant2) - Retrieve an itemvariant
* [getCommerceLocation2](#getcommercelocation2) - Retrieve a location
* [getCommerceReservation2](#getcommercereservation2) - Retrieve a reservation
* [getCommerceReview2](#getcommercereview2) - Retrieve a review
* [getCommerceSaleschannel2](#getcommercesaleschannel2) - Retrieve a saleschannel
* [listCommerceAvailabilities2](#listcommerceavailabilities2) - List all availabilities
* [listCommerceCollections2](#listcommercecollections2) - List all collections
* [listCommerceInventories2](#listcommerceinventories2) - List all inventories
* [listCommerceItems2](#listcommerceitems2) - List all items
* [listCommerceItemvariants2](#listcommerceitemvariants2) - List all itemvariants
* [listCommerceLocations2](#listcommercelocations2) - List all locations
* [listCommerceReservations2](#listcommercereservations2) - List all reservations
* [listCommerceReviews2](#listcommercereviews2) - List all reviews
* [listCommerceSaleschannels2](#listcommercesaleschannels2) - List all saleschannels
* [patchCommerceCollection2](#patchcommercecollection2) - Update a collection
* [patchCommerceInventory2](#patchcommerceinventory2) - Update an inventory
* [patchCommerceItem2](#patchcommerceitem2) - Update an item
* [patchCommerceItemvariant2](#patchcommerceitemvariant2) - Update an itemvariant
* [patchCommerceLocation2](#patchcommercelocation2) - Update a location
* [patchCommerceReservation2](#patchcommercereservation2) - Update a reservation
* [patchCommerceReview2](#patchcommercereview2) - Update a review
* [patchCommerceSaleschannel2](#patchcommercesaleschannel2) - Update a saleschannel
* [removeCommerceCollection2](#removecommercecollection2) - Remove a collection
* [removeCommerceInventory2](#removecommerceinventory2) - Remove an inventory
* [removeCommerceItem2](#removecommerceitem2) - Remove an item
* [removeCommerceItemvariant2](#removecommerceitemvariant2) - Remove an itemvariant
* [removeCommerceLocation2](#removecommercelocation2) - Remove a location
* [removeCommerceReservation2](#removecommercereservation2) - Remove a reservation
* [removeCommerceReview2](#removecommercereview2) - Remove a review
* [removeCommerceSaleschannel2](#removecommercesaleschannel2) - Remove a saleschannel
* [updateCommerceCollection2](#updatecommercecollection2) - Update a collection
* [updateCommerceInventory2](#updatecommerceinventory2) - Update an inventory
* [updateCommerceItem2](#updatecommerceitem2) - Update an item
* [updateCommerceItemvariant2](#updatecommerceitemvariant2) - Update an itemvariant
* [updateCommerceLocation2](#updatecommercelocation2) - Update a location
* [updateCommerceReservation2](#updatecommercereservation2) - Update a reservation
* [updateCommerceReview2](#updatecommercereview2) - Update a review
* [updateCommerceSaleschannel2](#updatecommercesaleschannel2) - Update a saleschannel

## createCommerceCollection2

Create a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceCollection2" method="post" path="/commerce/{connection_id}/collection" -->
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

$request = new Operations\CreateCommerceCollection2Request(
    commerceCollection: new Shared\CommerceCollection(
        name: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceCollection2(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreateCommerceCollection2Request](../../Models/Operations/CreateCommerceCollection2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreateCommerceCollection2Response](../../Models/Operations/CreateCommerceCollection2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->commerce->createCommerceInventory2(
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

$response = $sdk->commerce->createCommerceItem2(
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

## createCommerceItemvariant2

Create an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceItemvariant2" method="post" path="/commerce/{connection_id}/itemvariant" -->
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

$request = new Operations\CreateCommerceItemvariant2Request(
    commerceItemvariant: new Shared\CommerceItemvariant(),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceItemvariant2(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateCommerceItemvariant2Request](../../Models/Operations/CreateCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateCommerceItemvariant2Response](../../Models/Operations/CreateCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceLocation2

Create a location

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceLocation2" method="post" path="/commerce/{connection_id}/location" -->
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

$request = new Operations\CreateCommerceLocation2Request(
    commerceLocation: new Shared\CommerceLocation(),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceLocation2(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateCommerceLocation2Request](../../Models/Operations/CreateCommerceLocation2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateCommerceLocation2Response](../../Models/Operations/CreateCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceReservation2

Create a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceReservation2" method="post" path="/commerce/{connection_id}/reservation" -->
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

$request = new Operations\CreateCommerceReservation2Request(
    commerceReservation: new Shared\CommerceReservation(),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceReservation2(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateCommerceReservation2Request](../../Models/Operations/CreateCommerceReservation2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateCommerceReservation2Response](../../Models/Operations/CreateCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceReview2

Create a review

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceReview2" method="post" path="/commerce/{connection_id}/review" -->
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

$request = new Operations\CreateCommerceReview2Request(
    commerceReview: new Shared\CommerceReview(),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceReview2(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateCommerceReview2Request](../../Models/Operations/CreateCommerceReview2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateCommerceReview2Response](../../Models/Operations/CreateCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceSaleschannel2

Create a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceSaleschannel2" method="post" path="/commerce/{connection_id}/saleschannel" -->
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

$request = new Operations\CreateCommerceSaleschannel2Request(
    commerceSaleschannel: new Shared\CommerceSaleschannel(),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceSaleschannel2(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateCommerceSaleschannel2Request](../../Models/Operations/CreateCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateCommerceSaleschannel2Response](../../Models/Operations/CreateCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceCollection2

Retrieve a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceCollection2" method="get" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\GetCommerceCollection2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceCollection2(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetCommerceCollection2Request](../../Models/Operations/GetCommerceCollection2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetCommerceCollection2Response](../../Models/Operations/GetCommerceCollection2Response.md)**

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

$response = $sdk->commerce->getCommerceInventory2(
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

$response = $sdk->commerce->getCommerceItem2(
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

## getCommerceItemvariant2

Retrieve an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceItemvariant2" method="get" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\GetCommerceItemvariant2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceItemvariant2(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetCommerceItemvariant2Request](../../Models/Operations/GetCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetCommerceItemvariant2Response](../../Models/Operations/GetCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceLocation2

Retrieve a location

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceLocation2" method="get" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\GetCommerceLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceLocation2(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetCommerceLocation2Request](../../Models/Operations/GetCommerceLocation2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetCommerceLocation2Response](../../Models/Operations/GetCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReservation2

Retrieve a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReservation2" method="get" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\GetCommerceReservation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceReservation2(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetCommerceReservation2Request](../../Models/Operations/GetCommerceReservation2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetCommerceReservation2Response](../../Models/Operations/GetCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReview2

Retrieve a review

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReview2" method="get" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\GetCommerceReview2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceReview2(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetCommerceReview2Request](../../Models/Operations/GetCommerceReview2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetCommerceReview2Response](../../Models/Operations/GetCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceSaleschannel2

Retrieve a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceSaleschannel2" method="get" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\GetCommerceSaleschannel2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceSaleschannel2(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetCommerceSaleschannel2Request](../../Models/Operations/GetCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetCommerceSaleschannel2Response](../../Models/Operations/GetCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceAvailabilities2

List all availabilities

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceAvailabilities2" method="get" path="/commerce/{connection_id}/availability" -->
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

$request = new Operations\ListCommerceAvailabilities2Request(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceAvailabilities2(
    request: $request
);

if ($response->commerceAvailabilities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListCommerceAvailabilities2Request](../../Models/Operations/ListCommerceAvailabilities2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListCommerceAvailabilities2Response](../../Models/Operations/ListCommerceAvailabilities2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceCollections2

List all collections

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceCollections2" method="get" path="/commerce/{connection_id}/collection" -->
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

$request = new Operations\ListCommerceCollections2Request(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceCollections2(
    request: $request
);

if ($response->commerceCollections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListCommerceCollections2Request](../../Models/Operations/ListCommerceCollections2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListCommerceCollections2Response](../../Models/Operations/ListCommerceCollections2Response.md)**

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

$response = $sdk->commerce->listCommerceInventories2(
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

$response = $sdk->commerce->listCommerceItems2(
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

## listCommerceItemvariants2

List all itemvariants

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceItemvariants2" method="get" path="/commerce/{connection_id}/itemvariant" -->
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

$request = new Operations\ListCommerceItemvariants2Request(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceItemvariants2(
    request: $request
);

if ($response->commerceItemvariants !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListCommerceItemvariants2Request](../../Models/Operations/ListCommerceItemvariants2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListCommerceItemvariants2Response](../../Models/Operations/ListCommerceItemvariants2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceLocations2

List all locations

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceLocations2" method="get" path="/commerce/{connection_id}/location" -->
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

$request = new Operations\ListCommerceLocations2Request(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceLocations2(
    request: $request
);

if ($response->commerceLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListCommerceLocations2Request](../../Models/Operations/ListCommerceLocations2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListCommerceLocations2Response](../../Models/Operations/ListCommerceLocations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReservations2

List all reservations

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReservations2" method="get" path="/commerce/{connection_id}/reservation" -->
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

$request = new Operations\ListCommerceReservations2Request(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceReservations2(
    request: $request
);

if ($response->commerceReservations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListCommerceReservations2Request](../../Models/Operations/ListCommerceReservations2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListCommerceReservations2Response](../../Models/Operations/ListCommerceReservations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReviews2

List all reviews

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReviews2" method="get" path="/commerce/{connection_id}/review" -->
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

$request = new Operations\ListCommerceReviews2Request(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceReviews2(
    request: $request
);

if ($response->commerceReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListCommerceReviews2Request](../../Models/Operations/ListCommerceReviews2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListCommerceReviews2Response](../../Models/Operations/ListCommerceReviews2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceSaleschannels2

List all saleschannels

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceSaleschannels2" method="get" path="/commerce/{connection_id}/saleschannel" -->
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

$request = new Operations\ListCommerceSaleschannels2Request(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceSaleschannels2(
    request: $request
);

if ($response->commerceSaleschannels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListCommerceSaleschannels2Request](../../Models/Operations/ListCommerceSaleschannels2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListCommerceSaleschannels2Response](../../Models/Operations/ListCommerceSaleschannels2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceCollection2

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceCollection2" method="patch" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\PatchCommerceCollection2Request(
    commerceCollection: new Shared\CommerceCollection(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceCollection2(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchCommerceCollection2Request](../../Models/Operations/PatchCommerceCollection2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchCommerceCollection2Response](../../Models/Operations/PatchCommerceCollection2Response.md)**

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

$response = $sdk->commerce->patchCommerceInventory2(
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

$response = $sdk->commerce->patchCommerceItem2(
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

## patchCommerceItemvariant2

Update an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceItemvariant2" method="patch" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\PatchCommerceItemvariant2Request(
    commerceItemvariant: new Shared\CommerceItemvariant(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceItemvariant2(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchCommerceItemvariant2Request](../../Models/Operations/PatchCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchCommerceItemvariant2Response](../../Models/Operations/PatchCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceLocation2

Update a location

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceLocation2" method="patch" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\PatchCommerceLocation2Request(
    commerceLocation: new Shared\CommerceLocation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceLocation2(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchCommerceLocation2Request](../../Models/Operations/PatchCommerceLocation2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchCommerceLocation2Response](../../Models/Operations/PatchCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceReservation2

Update a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceReservation2" method="patch" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\PatchCommerceReservation2Request(
    commerceReservation: new Shared\CommerceReservation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceReservation2(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchCommerceReservation2Request](../../Models/Operations/PatchCommerceReservation2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchCommerceReservation2Response](../../Models/Operations/PatchCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceReview2

Update a review

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceReview2" method="patch" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\PatchCommerceReview2Request(
    commerceReview: new Shared\CommerceReview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceReview2(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchCommerceReview2Request](../../Models/Operations/PatchCommerceReview2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchCommerceReview2Response](../../Models/Operations/PatchCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceSaleschannel2

Update a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceSaleschannel2" method="patch" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\PatchCommerceSaleschannel2Request(
    commerceSaleschannel: new Shared\CommerceSaleschannel(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceSaleschannel2(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchCommerceSaleschannel2Request](../../Models/Operations/PatchCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchCommerceSaleschannel2Response](../../Models/Operations/PatchCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceCollection2

Remove a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceCollection2" method="delete" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\RemoveCommerceCollection2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceCollection2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemoveCommerceCollection2Request](../../Models/Operations/RemoveCommerceCollection2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemoveCommerceCollection2Response](../../Models/Operations/RemoveCommerceCollection2Response.md)**

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

$response = $sdk->commerce->removeCommerceInventory2(
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

$response = $sdk->commerce->removeCommerceItem2(
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

## removeCommerceItemvariant2

Remove an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceItemvariant2" method="delete" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\RemoveCommerceItemvariant2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceItemvariant2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveCommerceItemvariant2Request](../../Models/Operations/RemoveCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveCommerceItemvariant2Response](../../Models/Operations/RemoveCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceLocation2

Remove a location

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceLocation2" method="delete" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\RemoveCommerceLocation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceLocation2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveCommerceLocation2Request](../../Models/Operations/RemoveCommerceLocation2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveCommerceLocation2Response](../../Models/Operations/RemoveCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceReservation2

Remove a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceReservation2" method="delete" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\RemoveCommerceReservation2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceReservation2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveCommerceReservation2Request](../../Models/Operations/RemoveCommerceReservation2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveCommerceReservation2Response](../../Models/Operations/RemoveCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceReview2

Remove a review

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceReview2" method="delete" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\RemoveCommerceReview2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceReview2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveCommerceReview2Request](../../Models/Operations/RemoveCommerceReview2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveCommerceReview2Response](../../Models/Operations/RemoveCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceSaleschannel2

Remove a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceSaleschannel2" method="delete" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\RemoveCommerceSaleschannel2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceSaleschannel2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveCommerceSaleschannel2Request](../../Models/Operations/RemoveCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveCommerceSaleschannel2Response](../../Models/Operations/RemoveCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceCollection2

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceCollection2" method="put" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\UpdateCommerceCollection2Request(
    commerceCollection: new Shared\CommerceCollection(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceCollection2(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdateCommerceCollection2Request](../../Models/Operations/UpdateCommerceCollection2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdateCommerceCollection2Response](../../Models/Operations/UpdateCommerceCollection2Response.md)**

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

$response = $sdk->commerce->updateCommerceInventory2(
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

$response = $sdk->commerce->updateCommerceItem2(
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

## updateCommerceItemvariant2

Update an itemvariant

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceItemvariant2" method="put" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\UpdateCommerceItemvariant2Request(
    commerceItemvariant: new Shared\CommerceItemvariant(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceItemvariant2(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateCommerceItemvariant2Request](../../Models/Operations/UpdateCommerceItemvariant2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateCommerceItemvariant2Response](../../Models/Operations/UpdateCommerceItemvariant2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceLocation2

Update a location

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceLocation2" method="put" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\UpdateCommerceLocation2Request(
    commerceLocation: new Shared\CommerceLocation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceLocation2(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateCommerceLocation2Request](../../Models/Operations/UpdateCommerceLocation2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateCommerceLocation2Response](../../Models/Operations/UpdateCommerceLocation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceReservation2

Update a reservation

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceReservation2" method="put" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\UpdateCommerceReservation2Request(
    commerceReservation: new Shared\CommerceReservation(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceReservation2(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateCommerceReservation2Request](../../Models/Operations/UpdateCommerceReservation2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateCommerceReservation2Response](../../Models/Operations/UpdateCommerceReservation2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceReview2

Update a review

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceReview2" method="put" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\UpdateCommerceReview2Request(
    commerceReview: new Shared\CommerceReview(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceReview2(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateCommerceReview2Request](../../Models/Operations/UpdateCommerceReview2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateCommerceReview2Response](../../Models/Operations/UpdateCommerceReview2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceSaleschannel2

Update a saleschannel

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceSaleschannel2" method="put" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\UpdateCommerceSaleschannel2Request(
    commerceSaleschannel: new Shared\CommerceSaleschannel(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceSaleschannel2(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateCommerceSaleschannel2Request](../../Models/Operations/UpdateCommerceSaleschannel2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateCommerceSaleschannel2Response](../../Models/Operations/UpdateCommerceSaleschannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |