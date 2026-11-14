# Commerce

## Overview

### Available Operations

* [createCommerceCollection](#createcommercecollection) - Create a collection
* [createCommerceInventory](#createcommerceinventory) - Create an inventory
* [createCommerceItem](#createcommerceitem) - Create an item
* [createCommerceItemvariant](#createcommerceitemvariant) - Create an itemvariant
* [createCommerceLocation](#createcommercelocation) - Create a location
* [createCommerceReservation](#createcommercereservation) - Create a reservation
* [createCommerceReview](#createcommercereview) - Create a review
* [createCommerceSaleschannel](#createcommercesaleschannel) - Create a saleschannel
* [getCommerceCollection](#getcommercecollection) - Retrieve a collection
* [getCommerceInventory](#getcommerceinventory) - Retrieve an inventory
* [getCommerceItem](#getcommerceitem) - Retrieve an item
* [getCommerceItemvariant](#getcommerceitemvariant) - Retrieve an itemvariant
* [getCommerceLocation](#getcommercelocation) - Retrieve a location
* [getCommerceReservation](#getcommercereservation) - Retrieve a reservation
* [getCommerceReturn](#getcommercereturn) - Retrieve a return
* [getCommerceReview](#getcommercereview) - Retrieve a review
* [getCommerceSaleschannel](#getcommercesaleschannel) - Retrieve a saleschannel
* [getCommerceTable](#getcommercetable) - Retrieve a table
* [listCommerceAvailabilities](#listcommerceavailabilities) - List all availabilities
* [listCommerceCollections](#listcommercecollections) - List all collections
* [listCommerceInventories](#listcommerceinventories) - List all inventories
* [listCommerceItems](#listcommerceitems) - List all items
* [listCommerceItemvariants](#listcommerceitemvariants) - List all itemvariants
* [listCommerceLocations](#listcommercelocations) - List all locations
* [listCommerceReservations](#listcommercereservations) - List all reservations
* [listCommerceReturns](#listcommercereturns) - List all returns
* [listCommerceReviews](#listcommercereviews) - List all reviews
* [listCommerceSaleschannels](#listcommercesaleschannels) - List all saleschannels
* [listCommerceTables](#listcommercetables) - List all tables
* [patchCommerceCollection](#patchcommercecollection) - Update a collection
* [patchCommerceInventory](#patchcommerceinventory) - Update an inventory
* [patchCommerceItem](#patchcommerceitem) - Update an item
* [patchCommerceItemvariant](#patchcommerceitemvariant) - Update an itemvariant
* [patchCommerceLocation](#patchcommercelocation) - Update a location
* [patchCommerceReservation](#patchcommercereservation) - Update a reservation
* [patchCommerceReview](#patchcommercereview) - Update a review
* [patchCommerceSaleschannel](#patchcommercesaleschannel) - Update a saleschannel
* [removeCommerceCollection](#removecommercecollection) - Remove a collection
* [removeCommerceInventory](#removecommerceinventory) - Remove an inventory
* [removeCommerceItem](#removecommerceitem) - Remove an item
* [removeCommerceItemvariant](#removecommerceitemvariant) - Remove an itemvariant
* [removeCommerceLocation](#removecommercelocation) - Remove a location
* [removeCommerceReservation](#removecommercereservation) - Remove a reservation
* [removeCommerceReview](#removecommercereview) - Remove a review
* [removeCommerceSaleschannel](#removecommercesaleschannel) - Remove a saleschannel
* [updateCommerceCollection](#updatecommercecollection) - Update a collection
* [updateCommerceInventory](#updatecommerceinventory) - Update an inventory
* [updateCommerceItem](#updatecommerceitem) - Update an item
* [updateCommerceItemvariant](#updatecommerceitemvariant) - Update an itemvariant
* [updateCommerceLocation](#updatecommercelocation) - Update a location
* [updateCommerceReservation](#updatecommercereservation) - Update a reservation
* [updateCommerceReview](#updatecommercereview) - Update a review
* [updateCommerceSaleschannel](#updatecommercesaleschannel) - Update a saleschannel

## createCommerceCollection

Creates a CommerceCollection. Provide the unified CommerceCollection fields in the request body; they are mapped to the provider's API. Returns the created CommerceCollection.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceCollection" method="post" path="/commerce/{connection_id}/collection" example="commerce_collection" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceCollectionRequest(
    commerceCollection: new Shared\CommerceCollection(
        createdAt: Utils\Utils::parseDateTime('2023-07-14T00:42:54.742Z'),
        description: 'The Integrated leading edge website Cheese offers reliable performance and productive design',
        id: '8028f5fd-9f93-4093-8252-c53d9c90767f',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: 'b9f79752-f906-4cae-b434-7acbff25c56c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'f2b13b91-90a3-41cc-95b5-ca17105f246a',
                        slug: 'censura',
                        value: 'toties',
                    ),
                ],
                position: 80,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/1319/1257?lock=7280448425732025',
                width: 40,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                id: 'd768f038-a809-482b-b93a-dc770a53bb50',
                slug: 'aetas',
                value: 'consuasor',
            ),
        ],
        name: 'Small Marble Chips',
        publicDescription: 'Generic Gloves designed with Cotton for miserable performance',
        publicName: 'Small Marble Chips',
        tags: [
            'ambulo',
            'adeptio',
            'contego',
        ],
        type: Shared\CommerceCollectionType::Collection,
        updatedAt: Utils\Utils::parseDateTime('2025-03-27T07:43:04.905Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceCollection(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateCommerceCollectionRequest](../../Models/Operations/CreateCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateCommerceCollectionResponse](../../Models/Operations/CreateCommerceCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceInventory

Creates a CommerceInventory. Provide the unified CommerceInventory fields in the request body; they are mapped to the provider's API. Returns the created CommerceInventory.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceInventory" method="post" path="/commerce/{connection_id}/inventory" example="commerce_inventory" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceInventoryRequest(
    commerceInventory: new Shared\CommerceInventory(
        available: 337,
        id: '010e4f4c-c164-498e-a7d5-5cb6eb439652',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-12-09T18:29:30.931Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceInventory(
    request: $request
);

if ($response->commerceInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateCommerceInventoryRequest](../../Models/Operations/CreateCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateCommerceInventoryResponse](../../Models/Operations/CreateCommerceInventoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceItem

Creates a CommerceItem. Provide the unified CommerceItem fields in the request body; they are mapped to the provider's API. Returns the created CommerceItem.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceItem" method="post" path="/commerce/{connection_id}/item" example="commerce_item" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceItemRequest(
    commerceItem: new Shared\CommerceItem(
        collections: [],
        createdAt: Utils\Utils::parseDateTime('2019-06-21T20:16:18.628Z'),
        description: 'Decretum vulnero ustulo abeo.',
        duration: 104,
        globalCode: '978-0-85270-680-0',
        id: '0340fe29-ba0d-4539-9c8d-8e75a0390122',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 876,
                id: '5662d588-db9b-41ac-8028-d0d721ce7fc4',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0248b8bc-c6e0-4033-91fa-2de6a00921ce',
                        slug: 'doloremque',
                        value: 'allatus',
                    ),
                ],
                position: 21,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/v73y0uzyK/3001/972',
                width: 67,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 651,
                id: '500d1889-5c8d-49b8-8e2c-c071e1314c14',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '42cda52e-bb99-4dfb-b337-1485df0545c3',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 51,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/Ao4iatfO/771/3906',
                width: 3,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '28c0e8be-798d-439b-ab80-a42df8e5f48a',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'abstergo',
            ),
        ],
        name: 'Handcrafted Rubber Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 78.11,
            ),
        ],
        publicDescription: 'Custodia ventus solio compono.',
        publicName: 'Handcrafted Rubber Tuna',
        requiresShipping: true,
        slug: 'handcrafted-rubber-tuna',
        tags: [
            'beatae',
            'blanditiis',
        ],
        totalStock: 682,
        type: 'SERVICE',
        updatedAt: Utils\Utils::parseDateTime('2022-04-28T18:23:56.986Z'),
        vendorName: 'Mayer - Flatley',
        weight: 37,
        weightUnit: Shared\WeightUnit::Oz,
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceItem(
    request: $request
);

if ($response->commerceItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateCommerceItemRequest](../../Models/Operations/CreateCommerceItemRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateCommerceItemResponse](../../Models/Operations/CreateCommerceItemResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceItemvariant

Creates a CommerceItemvariant. Provide the unified CommerceItemvariant fields in the request body; they are mapped to the provider's API. Returns the created CommerceItemvariant.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceItemvariant" method="post" path="/commerce/{connection_id}/itemvariant" example="commerce_itemvariant" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceItemvariantRequest(
    commerceItemvariant: new Shared\CommerceItemvariant(
        availableAt: Utils\Utils::parseDateTime('2022-02-06T18:14:41.644Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-20T13:49:12.968Z'),
        description: 'Stylish Salad designed to make you stand out with little looks',
        height: 54,
        id: '3ae81333-81cd-4704-89b3-630ab0d7e48f',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Hic desipio thorax.',
                height: 961,
                id: '054470fc-2e0d-49b4-b30c-ff01e910f1e3',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'a0ce4bc3-8566-4db4-ad5c-38d0a4e67306',
                        slug: 'ubi',
                        value: 'textus',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/2126/721?lock=8820088623807162',
                width: 35,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '90fe98dd-b99c-413c-ae25-5a41a3470445',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'absens',
            ),
        ],
        name: 'Chair',
        options: [
            new Shared\CommerceItemOption(
                id: 'd9be292d-c913-4e87-bfda-a7c6f98163bb',
                name: 'Color',
                position: 1,
                values: [
                    'olive',
                ],
            ),
            new Shared\CommerceItemOption(
                id: '90bba00d-d81e-4c1c-98cf-7e0f896115e6',
                name: 'Size',
                position: 2,
                values: [
                    'S',
                ],
            ),
        ],
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 382.23,
            ),
        ],
        publicDescription: 'Stylish Cheese designed to make you stand out with grave looks',
        publicName: 'Chair',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-1-368-44270-1',
        tags: [
            'deserunt',
        ],
        totalStock: 436,
        updatedAt: Utils\Utils::parseDateTime('2026-03-30T14:08:32.996Z'),
        weight: 46,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 40,
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceItemvariant(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreateCommerceItemvariantRequest](../../Models/Operations/CreateCommerceItemvariantRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreateCommerceItemvariantResponse](../../Models/Operations/CreateCommerceItemvariantResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceLocation

Creates a CommerceLocation. Provide the unified CommerceLocation fields in the request body; they are mapped to the provider's API. Returns the created CommerceLocation.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceLocation" method="post" path="/commerce/{connection_id}/location" example="commerce_location" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceLocationRequest(
    commerceLocation: new Shared\CommerceLocation(
        address: new Shared\PropertyCommerceLocationAddress(
            address1: '29896 The Limes',
            city: 'New Kenny',
            countryCode: 'US',
            postalCode: '14490-0609',
            region: 'Virginia',
            regionCode: 'MS',
        ),
        categories: [],
        createdAt: Utils\Utils::parseDateTime('2022-12-29T04:15:21.195Z'),
        currency: 'XCD',
        description: 'Adsidue audentia.',
        id: '3a2f86df-f953-446d-9e83-b5360d0afd35',
        imageUrl: 'https://picsum.photos/seed/hjFt1/1036/2220',
        isActive: false,
        languageLocale: 'vulgaris',
        latitude: 0,
        locationType: Shared\LocationType::Restaurant,
        longitude: 0,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Addo.',
                height: 283,
                id: '61170635-5925-423b-95f5-ab89fdcadbd1',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '72a529c5-829a-4624-879f-6f9543d12a60',
                        slug: 'abutor',
                        value: 'damno',
                    ),
                ],
                position: 40,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/QVh7ViTV/3964/1567',
                width: 1,
            ),
        ],
        metadata: [],
        name: 'Olson - Mraz',
        priceLevel: '',
        rating: 0,
        reviewCount: 0,
        telephones: [
            new Shared\CommerceTelephone(
                telephone: '(872) 522-3201',
                type: Shared\CommerceTelephoneType::Other,
            ),
            new Shared\CommerceTelephone(
                telephone: '(236) 274-2445',
                type: Shared\CommerceTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-04-29T00:14:57.101Z'),
        webUrl: 'https://chilly-edge.info',
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceLocation(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateCommerceLocationRequest](../../Models/Operations/CreateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateCommerceLocationResponse](../../Models/Operations/CreateCommerceLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceReservation

Creates a CommerceReservation. Provide the unified CommerceReservation fields in the request body; they are mapped to the provider's API. Returns the created CommerceReservation.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceReservation" method="post" path="/commerce/{connection_id}/reservation" example="commerce_reservation" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceReservationRequest(
    commerceReservation: new Shared\CommerceReservation(
        createdAt: Utils\Utils::parseDateTime('2021-12-14T19:50:31.151Z'),
        endAt: Utils\Utils::parseDateTime('2022-01-01T22:00:17.868Z'),
        guestEmail: 'julien.bartoletti@icloud.com',
        guestName: 'Julien Bartoletti',
        guestPhone: '(728) 596-2620',
        id: 'bee72a85-81fb-4bde-b503-b29dab2e4d6e',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-09T02:46:46.650Z'),
        url: 'https://expensive-gift.org',
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceReservation(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreateCommerceReservationRequest](../../Models/Operations/CreateCommerceReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreateCommerceReservationResponse](../../Models/Operations/CreateCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceReview

Creates a CommerceReview. Provide the unified CommerceReview fields in the request body; they are mapped to the provider's API. Returns the created CommerceReview.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceReview" method="post" path="/commerce/{connection_id}/review" example="commerce_review" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceReviewRequest(
    commerceReview: new Shared\CommerceReview(
        authorAvatarUrl: 'https://loremflickr.com/7/2660?lock=4279109054086693',
        authorEmail: 'nyasia.macgyver@hotmail.com',
        authorLocation: 'denique',
        authorName: 'Nyasia MacGyver',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: '0e03760d-0737-4a3a-986c-c6099361b809',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Desipio carpo sol laudantium colo.',
                height: 749,
                id: '65a696c2-b4bc-4611-81dc-3e917d33ca77',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '9e94edaf-c327-4276-9858-0ccc246593dd',
                        slug: 'textor',
                        value: 'quos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/196/2041?lock=5845524773114807',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Adopto teneo numquam.',
                height: 957,
                id: '53811ace-2680-4cce-814b-bbacc323f1d8',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '2e7e9fcd-5c24-497f-8d7b-292c952a7384',
                        slug: 'bos',
                        value: 'casso',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/1178/2175?lock=5466640101053206',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-10T07:24:16.675Z'),
        url: 'https://diligent-bandwidth.biz',
        verifiedPurchase: true,
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceReview(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateCommerceReviewRequest](../../Models/Operations/CreateCommerceReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateCommerceReviewResponse](../../Models/Operations/CreateCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCommerceSaleschannel

Creates a CommerceSaleschannel. Provide the unified CommerceSaleschannel fields in the request body; they are mapped to the provider's API. Returns the created CommerceSaleschannel.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCommerceSaleschannel" method="post" path="/commerce/{connection_id}/saleschannel" example="commerce_saleschannel" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateCommerceSaleschannelRequest(
    commerceSaleschannel: new Shared\CommerceSaleschannel(
        collections: [],
        createdAt: Utils\Utils::parseDateTime('2021-12-12T06:19:55.421Z'),
        description: 'Utroque denuncio solutio.',
        id: 'eb859b4f-11a9-4b4f-abb3-b42fbb32c5fb',
        isActive: false,
        metadata: [],
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-02-12T11:35:06.513Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->commerce->createCommerceSaleschannel(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateCommerceSaleschannelRequest](../../Models/Operations/CreateCommerceSaleschannelRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateCommerceSaleschannelResponse](../../Models/Operations/CreateCommerceSaleschannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceCollection

Retrieves a single CommerceCollection by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceCollection" method="get" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\GetCommerceCollectionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceCollection(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetCommerceCollectionRequest](../../Models/Operations/GetCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetCommerceCollectionResponse](../../Models/Operations/GetCommerceCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceInventory

Retrieves a single CommerceInventory by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceInventory" method="get" path="/commerce/{connection_id}/inventory/{id}" -->
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

$request = new Operations\GetCommerceInventoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceInventory(
    request: $request
);

if ($response->commerceInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetCommerceInventoryRequest](../../Models/Operations/GetCommerceInventoryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetCommerceInventoryResponse](../../Models/Operations/GetCommerceInventoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceItem

Retrieves a single CommerceItem by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceItem" method="get" path="/commerce/{connection_id}/item/{id}" -->
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

$request = new Operations\GetCommerceItemRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceItem(
    request: $request
);

if ($response->commerceItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetCommerceItemRequest](../../Models/Operations/GetCommerceItemRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetCommerceItemResponse](../../Models/Operations/GetCommerceItemResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceItemvariant

Retrieves a single CommerceItemvariant by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceItemvariant" method="get" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\GetCommerceItemvariantRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceItemvariant(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetCommerceItemvariantRequest](../../Models/Operations/GetCommerceItemvariantRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetCommerceItemvariantResponse](../../Models/Operations/GetCommerceItemvariantResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceLocation

Retrieves a single CommerceLocation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceLocation" method="get" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\GetCommerceLocationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceLocation(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetCommerceLocationRequest](../../Models/Operations/GetCommerceLocationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetCommerceLocationResponse](../../Models/Operations/GetCommerceLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReservation

Retrieves a single CommerceReservation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReservation" method="get" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\GetCommerceReservationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceReservation(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetCommerceReservationRequest](../../Models/Operations/GetCommerceReservationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetCommerceReservationResponse](../../Models/Operations/GetCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReturn

Retrieves a single CommerceReturn by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReturn" method="get" path="/commerce/{connection_id}/return/{id}" -->
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

$request = new Operations\GetCommerceReturnRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceReturn(
    request: $request
);

if ($response->commerceReturn !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetCommerceReturnRequest](../../Models/Operations/GetCommerceReturnRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetCommerceReturnResponse](../../Models/Operations/GetCommerceReturnResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceReview

Retrieves a single CommerceReview by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceReview" method="get" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\GetCommerceReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceReview(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetCommerceReviewRequest](../../Models/Operations/GetCommerceReviewRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetCommerceReviewResponse](../../Models/Operations/GetCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceSaleschannel

Retrieves a single CommerceSaleschannel by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceSaleschannel" method="get" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\GetCommerceSaleschannelRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceSaleschannel(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetCommerceSaleschannelRequest](../../Models/Operations/GetCommerceSaleschannelRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetCommerceSaleschannelResponse](../../Models/Operations/GetCommerceSaleschannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceTable

Retrieves a single CommerceTable by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceTable" method="get" path="/commerce/{connection_id}/table/{id}" -->
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

$request = new Operations\GetCommerceTableRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->getCommerceTable(
    request: $request
);

if ($response->commerceTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetCommerceTableRequest](../../Models/Operations/GetCommerceTableRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetCommerceTableResponse](../../Models/Operations/GetCommerceTableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceAvailabilities

Returns a list of CommerceAvailabilities. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceAvailabilities" method="get" path="/commerce/{connection_id}/availability" -->
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

$request = new Operations\ListCommerceAvailabilitiesRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceAvailabilities(
    request: $request
);

if ($response->commerceAvailabilities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListCommerceAvailabilitiesRequest](../../Models/Operations/ListCommerceAvailabilitiesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListCommerceAvailabilitiesResponse](../../Models/Operations/ListCommerceAvailabilitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceCollections

Returns a list of CommerceCollections. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceCollections" method="get" path="/commerce/{connection_id}/collection" -->
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

$request = new Operations\ListCommerceCollectionsRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceCollections(
    request: $request
);

if ($response->commerceCollections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListCommerceCollectionsRequest](../../Models/Operations/ListCommerceCollectionsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListCommerceCollectionsResponse](../../Models/Operations/ListCommerceCollectionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceInventories

Returns a list of CommerceInventories. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceInventories" method="get" path="/commerce/{connection_id}/inventory" -->
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

$request = new Operations\ListCommerceInventoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceInventories(
    request: $request
);

if ($response->commerceInventories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListCommerceInventoriesRequest](../../Models/Operations/ListCommerceInventoriesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListCommerceInventoriesResponse](../../Models/Operations/ListCommerceInventoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceItems

Returns a list of CommerceItems. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceItems" method="get" path="/commerce/{connection_id}/item" -->
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

$request = new Operations\ListCommerceItemsRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceItems(
    request: $request
);

if ($response->commerceItems !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCommerceItemsRequest](../../Models/Operations/ListCommerceItemsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCommerceItemsResponse](../../Models/Operations/ListCommerceItemsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceItemvariants

Returns a list of CommerceItemvariants. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceItemvariants" method="get" path="/commerce/{connection_id}/itemvariant" -->
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

$request = new Operations\ListCommerceItemvariantsRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceItemvariants(
    request: $request
);

if ($response->commerceItemvariants !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListCommerceItemvariantsRequest](../../Models/Operations/ListCommerceItemvariantsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListCommerceItemvariantsResponse](../../Models/Operations/ListCommerceItemvariantsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceLocations

Returns a list of CommerceLocations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceLocations" method="get" path="/commerce/{connection_id}/location" -->
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

$request = new Operations\ListCommerceLocationsRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceLocations(
    request: $request
);

if ($response->commerceLocations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListCommerceLocationsRequest](../../Models/Operations/ListCommerceLocationsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListCommerceLocationsResponse](../../Models/Operations/ListCommerceLocationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReservations

Returns a list of CommerceReservations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReservations" method="get" path="/commerce/{connection_id}/reservation" -->
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

$request = new Operations\ListCommerceReservationsRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceReservations(
    request: $request
);

if ($response->commerceReservations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListCommerceReservationsRequest](../../Models/Operations/ListCommerceReservationsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListCommerceReservationsResponse](../../Models/Operations/ListCommerceReservationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReturns

Returns a list of CommerceReturns. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReturns" method="get" path="/commerce/{connection_id}/return" -->
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

$request = new Operations\ListCommerceReturnsRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceReturns(
    request: $request
);

if ($response->commerceReturns !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCommerceReturnsRequest](../../Models/Operations/ListCommerceReturnsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListCommerceReturnsResponse](../../Models/Operations/ListCommerceReturnsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceReviews

Returns a list of CommerceReviews. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceReviews" method="get" path="/commerce/{connection_id}/review" -->
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

$request = new Operations\ListCommerceReviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceReviews(
    request: $request
);

if ($response->commerceReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCommerceReviewsRequest](../../Models/Operations/ListCommerceReviewsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListCommerceReviewsResponse](../../Models/Operations/ListCommerceReviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceSaleschannels

Returns a list of CommerceSaleschannels. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceSaleschannels" method="get" path="/commerce/{connection_id}/saleschannel" -->
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

$request = new Operations\ListCommerceSaleschannelsRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceSaleschannels(
    request: $request
);

if ($response->commerceSaleschannels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListCommerceSaleschannelsRequest](../../Models/Operations/ListCommerceSaleschannelsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListCommerceSaleschannelsResponse](../../Models/Operations/ListCommerceSaleschannelsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceTables

Returns a list of CommerceTables. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceTables" method="get" path="/commerce/{connection_id}/table" -->
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

$request = new Operations\ListCommerceTablesRequest(
    connectionId: '<id>',
);

$response = $sdk->commerce->listCommerceTables(
    request: $request
);

if ($response->commerceTables !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCommerceTablesRequest](../../Models/Operations/ListCommerceTablesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCommerceTablesResponse](../../Models/Operations/ListCommerceTablesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceCollection

Updates the CommerceCollection identified by `id`. Provide the unified CommerceCollection fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceCollection" method="patch" path="/commerce/{connection_id}/collection/{id}" example="commerce_collection" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceCollectionRequest(
    commerceCollection: new Shared\CommerceCollection(
        createdAt: Utils\Utils::parseDateTime('2023-07-14T00:42:54.742Z'),
        description: 'The Integrated leading edge website Cheese offers reliable performance and productive design',
        id: 'e0b248c3-0ed6-48a2-9a81-94d214c6b40b',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '72e348af-1c5a-456e-8983-1685ea5b8729',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '8fbf1c69-a1f4-4fd4-b1bd-cb79af205d43',
                        slug: 'censura',
                        value: 'toties',
                    ),
                ],
                position: 80,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/1319/1257?lock=7280448425732025',
                width: 40,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                id: 'dc7941d4-f400-43fd-9781-f03ee4af0b57',
                slug: 'aetas',
                value: 'consuasor',
            ),
        ],
        name: 'Small Marble Chips',
        publicDescription: 'Generic Gloves designed with Cotton for miserable performance',
        publicName: 'Small Marble Chips',
        tags: [
            'ambulo',
            'adeptio',
            'contego',
        ],
        type: Shared\CommerceCollectionType::Collection,
        updatedAt: Utils\Utils::parseDateTime('2025-03-27T07:43:04.921Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceCollection(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchCommerceCollectionRequest](../../Models/Operations/PatchCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchCommerceCollectionResponse](../../Models/Operations/PatchCommerceCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceInventory

Updates the CommerceInventory identified by `id`. Provide the unified CommerceInventory fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceInventory" method="patch" path="/commerce/{connection_id}/inventory/{id}" example="commerce_inventory" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceInventoryRequest(
    commerceInventory: new Shared\CommerceInventory(
        available: 337,
        id: '81374fb7-726f-4faf-9c84-fc1930ca34dc',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-12-09T18:29:30.941Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceInventory(
    request: $request
);

if ($response->commerceInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchCommerceInventoryRequest](../../Models/Operations/PatchCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchCommerceInventoryResponse](../../Models/Operations/PatchCommerceInventoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceItem

Updates the CommerceItem identified by `id`. Provide the unified CommerceItem fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceItem" method="patch" path="/commerce/{connection_id}/item/{id}" example="commerce_item" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceItemRequest(
    commerceItem: new Shared\CommerceItem(
        collections: [],
        createdAt: Utils\Utils::parseDateTime('2019-06-21T20:16:18.628Z'),
        description: 'Decretum vulnero ustulo abeo.',
        duration: 104,
        globalCode: '978-0-85270-680-0',
        id: '5fbe3023-b360-4438-bed3-d5649eb8e00b',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 876,
                id: '1d2ec8a3-f233-47ea-ae68-023bb36ac6da',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'b5492379-4a27-4a4b-b1f9-9c3536d793d0',
                        slug: 'doloremque',
                        value: 'allatus',
                    ),
                ],
                position: 21,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/v73y0uzyK/3001/972',
                width: 67,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 651,
                id: '1969e23a-b937-4401-8ce2-5a75c79fa5e5',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'fbd40072-5852-4168-b903-2ba720033924',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 51,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/Ao4iatfO/771/3906',
                width: 3,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: 'f6c8509e-4f6c-4f98-b272-09c227caf477',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'abstergo',
            ),
        ],
        name: 'Handcrafted Rubber Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 78.11,
            ),
        ],
        publicDescription: 'Custodia ventus solio compono.',
        publicName: 'Handcrafted Rubber Tuna',
        requiresShipping: true,
        slug: 'handcrafted-rubber-tuna',
        tags: [
            'beatae',
            'blanditiis',
        ],
        totalStock: 682,
        type: 'SERVICE',
        updatedAt: Utils\Utils::parseDateTime('2022-04-28T18:23:56.999Z'),
        vendorName: 'Mayer - Flatley',
        weight: 37,
        weightUnit: Shared\WeightUnit::Oz,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceItem(
    request: $request
);

if ($response->commerceItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchCommerceItemRequest](../../Models/Operations/PatchCommerceItemRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchCommerceItemResponse](../../Models/Operations/PatchCommerceItemResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceItemvariant

Updates the CommerceItemvariant identified by `id`. Provide the unified CommerceItemvariant fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceItemvariant" method="patch" path="/commerce/{connection_id}/itemvariant/{id}" example="commerce_itemvariant" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceItemvariantRequest(
    commerceItemvariant: new Shared\CommerceItemvariant(
        availableAt: Utils\Utils::parseDateTime('2022-02-06T18:14:41.644Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-20T13:49:12.968Z'),
        description: 'Stylish Salad designed to make you stand out with little looks',
        height: 54,
        id: '8b69d4ca-6204-40ba-ac87-c00976628679',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Hic desipio thorax.',
                height: 961,
                id: '2d23feb4-a2b6-4b3c-80c5-2197fb3b52fd',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '296a55bd-2b18-4d89-a02a-d0c96eafb9df',
                        slug: 'ubi',
                        value: 'textus',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/2126/721?lock=8820088623807162',
                width: 35,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '37b1a22d-798e-4027-93e8-9fbb13ce49a1',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'absens',
            ),
        ],
        name: 'Chair',
        options: [
            new Shared\CommerceItemOption(
                id: '19228c39-3b43-430a-9091-e3c00c98cc23',
                name: 'Color',
                position: 1,
                values: [
                    'olive',
                ],
            ),
            new Shared\CommerceItemOption(
                id: '079736ad-ae99-4f81-9e9c-c1682ce6e24e',
                name: 'Size',
                position: 2,
                values: [
                    'S',
                ],
            ),
        ],
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 382.23,
            ),
        ],
        publicDescription: 'Stylish Cheese designed to make you stand out with grave looks',
        publicName: 'Chair',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-1-368-44270-1',
        tags: [
            'deserunt',
        ],
        totalStock: 436,
        updatedAt: Utils\Utils::parseDateTime('2026-03-30T14:08:33.024Z'),
        weight: 46,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 40,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceItemvariant(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchCommerceItemvariantRequest](../../Models/Operations/PatchCommerceItemvariantRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchCommerceItemvariantResponse](../../Models/Operations/PatchCommerceItemvariantResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceLocation

Updates the CommerceLocation identified by `id`. Provide the unified CommerceLocation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceLocation" method="patch" path="/commerce/{connection_id}/location/{id}" example="commerce_location" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceLocationRequest(
    commerceLocation: new Shared\CommerceLocation(
        address: new Shared\PropertyCommerceLocationAddress(
            address1: '29896 The Limes',
            city: 'New Kenny',
            countryCode: 'US',
            postalCode: '14490-0609',
            region: 'Virginia',
            regionCode: 'MS',
        ),
        categories: [],
        createdAt: Utils\Utils::parseDateTime('2022-12-29T04:15:21.195Z'),
        currency: 'XCD',
        description: 'Adsidue audentia.',
        id: 'd46a095a-22b7-4c6c-8a20-1a3f334a1391',
        imageUrl: 'https://picsum.photos/seed/hjFt1/1036/2220',
        isActive: false,
        languageLocale: 'vulgaris',
        latitude: 0,
        locationType: Shared\LocationType::Restaurant,
        longitude: 0,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Addo.',
                height: 283,
                id: '27145886-0932-45f4-b425-ea901e3be84f',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'ae0d8df2-de98-462b-9e62-ef1f9e4caeb5',
                        slug: 'abutor',
                        value: 'damno',
                    ),
                ],
                position: 40,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/QVh7ViTV/3964/1567',
                width: 1,
            ),
        ],
        metadata: [],
        name: 'Olson - Mraz',
        priceLevel: '',
        rating: 0,
        reviewCount: 0,
        telephones: [
            new Shared\CommerceTelephone(
                telephone: '(872) 522-3201',
                type: Shared\CommerceTelephoneType::Other,
            ),
            new Shared\CommerceTelephone(
                telephone: '(236) 274-2445',
                type: Shared\CommerceTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-04-29T00:14:57.115Z'),
        webUrl: 'https://chilly-edge.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceLocation(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchCommerceLocationRequest](../../Models/Operations/PatchCommerceLocationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchCommerceLocationResponse](../../Models/Operations/PatchCommerceLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceReservation

Updates the CommerceReservation identified by `id`. Provide the unified CommerceReservation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceReservation" method="patch" path="/commerce/{connection_id}/reservation/{id}" example="commerce_reservation" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceReservationRequest(
    commerceReservation: new Shared\CommerceReservation(
        createdAt: Utils\Utils::parseDateTime('2021-12-14T19:50:31.151Z'),
        endAt: Utils\Utils::parseDateTime('2022-01-01T22:00:17.868Z'),
        guestEmail: 'julien.bartoletti@icloud.com',
        guestName: 'Julien Bartoletti',
        guestPhone: '(728) 596-2620',
        id: '5cd3538b-ad2e-43fc-835b-7065c51cec54',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-09T02:46:46.654Z'),
        url: 'https://expensive-gift.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceReservation(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchCommerceReservationRequest](../../Models/Operations/PatchCommerceReservationRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchCommerceReservationResponse](../../Models/Operations/PatchCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceReview

Updates the CommerceReview identified by `id`. Provide the unified CommerceReview fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceReview" method="patch" path="/commerce/{connection_id}/review/{id}" example="commerce_review" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceReviewRequest(
    commerceReview: new Shared\CommerceReview(
        authorAvatarUrl: 'https://loremflickr.com/7/2660?lock=4279109054086693',
        authorEmail: 'nyasia.macgyver@hotmail.com',
        authorLocation: 'denique',
        authorName: 'Nyasia MacGyver',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: 'a5f8445f-68fa-412d-b0d0-08876101c897',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Desipio carpo sol laudantium colo.',
                height: 749,
                id: 'de3ef235-b070-40b5-8bd0-9fd151d47700',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '09816160-9f6a-4a7c-8665-44526a06ac2a',
                        slug: 'textor',
                        value: 'quos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/196/2041?lock=5845524773114807',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Adopto teneo numquam.',
                height: 957,
                id: '6d0ecbe7-8227-4538-a47c-0933a5479a9f',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'cdf17c4d-e992-4ea8-b16a-3e3ff22d3e03',
                        slug: 'bos',
                        value: 'casso',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/1178/2175?lock=5466640101053206',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-10T07:24:16.712Z'),
        url: 'https://diligent-bandwidth.biz',
        verifiedPurchase: true,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceReview(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchCommerceReviewRequest](../../Models/Operations/PatchCommerceReviewRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchCommerceReviewResponse](../../Models/Operations/PatchCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCommerceSaleschannel

Updates the CommerceSaleschannel identified by `id`. Provide the unified CommerceSaleschannel fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCommerceSaleschannel" method="patch" path="/commerce/{connection_id}/saleschannel/{id}" example="commerce_saleschannel" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchCommerceSaleschannelRequest(
    commerceSaleschannel: new Shared\CommerceSaleschannel(
        collections: [],
        createdAt: Utils\Utils::parseDateTime('2021-12-12T06:19:55.421Z'),
        description: 'Utroque denuncio solutio.',
        id: '39939ac2-059d-4f8f-9c8f-5ae45317ecc3',
        isActive: false,
        metadata: [],
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-02-12T11:35:06.521Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->patchCommerceSaleschannel(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchCommerceSaleschannelRequest](../../Models/Operations/PatchCommerceSaleschannelRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchCommerceSaleschannelResponse](../../Models/Operations/PatchCommerceSaleschannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceCollection

Deletes the CommerceCollection identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceCollection" method="delete" path="/commerce/{connection_id}/collection/{id}" -->
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

$request = new Operations\RemoveCommerceCollectionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceCollection(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveCommerceCollectionRequest](../../Models/Operations/RemoveCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveCommerceCollectionResponse](../../Models/Operations/RemoveCommerceCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceInventory

Deletes the CommerceInventory identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceInventory" method="delete" path="/commerce/{connection_id}/inventory/{id}" -->
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

$request = new Operations\RemoveCommerceInventoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceInventory(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveCommerceInventoryRequest](../../Models/Operations/RemoveCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveCommerceInventoryResponse](../../Models/Operations/RemoveCommerceInventoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceItem

Deletes the CommerceItem identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceItem" method="delete" path="/commerce/{connection_id}/item/{id}" -->
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

$request = new Operations\RemoveCommerceItemRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceItem(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveCommerceItemRequest](../../Models/Operations/RemoveCommerceItemRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveCommerceItemResponse](../../Models/Operations/RemoveCommerceItemResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceItemvariant

Deletes the CommerceItemvariant identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceItemvariant" method="delete" path="/commerce/{connection_id}/itemvariant/{id}" -->
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

$request = new Operations\RemoveCommerceItemvariantRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceItemvariant(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemoveCommerceItemvariantRequest](../../Models/Operations/RemoveCommerceItemvariantRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemoveCommerceItemvariantResponse](../../Models/Operations/RemoveCommerceItemvariantResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceLocation

Deletes the CommerceLocation identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceLocation" method="delete" path="/commerce/{connection_id}/location/{id}" -->
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

$request = new Operations\RemoveCommerceLocationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceLocation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveCommerceLocationRequest](../../Models/Operations/RemoveCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveCommerceLocationResponse](../../Models/Operations/RemoveCommerceLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceReservation

Deletes the CommerceReservation identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceReservation" method="delete" path="/commerce/{connection_id}/reservation/{id}" -->
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

$request = new Operations\RemoveCommerceReservationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceReservation(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemoveCommerceReservationRequest](../../Models/Operations/RemoveCommerceReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemoveCommerceReservationResponse](../../Models/Operations/RemoveCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceReview

Deletes the CommerceReview identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceReview" method="delete" path="/commerce/{connection_id}/review/{id}" -->
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

$request = new Operations\RemoveCommerceReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceReview(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveCommerceReviewRequest](../../Models/Operations/RemoveCommerceReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveCommerceReviewResponse](../../Models/Operations/RemoveCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCommerceSaleschannel

Deletes the CommerceSaleschannel identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCommerceSaleschannel" method="delete" path="/commerce/{connection_id}/saleschannel/{id}" -->
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

$request = new Operations\RemoveCommerceSaleschannelRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->removeCommerceSaleschannel(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveCommerceSaleschannelRequest](../../Models/Operations/RemoveCommerceSaleschannelRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveCommerceSaleschannelResponse](../../Models/Operations/RemoveCommerceSaleschannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceCollection

Updates the CommerceCollection identified by `id`. Provide the unified CommerceCollection fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceCollection" method="put" path="/commerce/{connection_id}/collection/{id}" example="commerce_collection" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceCollectionRequest(
    commerceCollection: new Shared\CommerceCollection(
        createdAt: Utils\Utils::parseDateTime('2023-07-14T00:42:54.742Z'),
        description: 'The Integrated leading edge website Cheese offers reliable performance and productive design',
        id: 'e0b248c3-0ed6-48a2-9a81-94d214c6b40b',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '72e348af-1c5a-456e-8983-1685ea5b8729',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '8fbf1c69-a1f4-4fd4-b1bd-cb79af205d43',
                        slug: 'censura',
                        value: 'toties',
                    ),
                ],
                position: 80,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/1319/1257?lock=7280448425732025',
                width: 40,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                id: 'dc7941d4-f400-43fd-9781-f03ee4af0b57',
                slug: 'aetas',
                value: 'consuasor',
            ),
        ],
        name: 'Small Marble Chips',
        publicDescription: 'Generic Gloves designed with Cotton for miserable performance',
        publicName: 'Small Marble Chips',
        tags: [
            'ambulo',
            'adeptio',
            'contego',
        ],
        type: Shared\CommerceCollectionType::Collection,
        updatedAt: Utils\Utils::parseDateTime('2025-03-27T07:43:04.921Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceCollection(
    request: $request
);

if ($response->commerceCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateCommerceCollectionRequest](../../Models/Operations/UpdateCommerceCollectionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateCommerceCollectionResponse](../../Models/Operations/UpdateCommerceCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceInventory

Updates the CommerceInventory identified by `id`. Provide the unified CommerceInventory fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceInventory" method="put" path="/commerce/{connection_id}/inventory/{id}" example="commerce_inventory" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceInventoryRequest(
    commerceInventory: new Shared\CommerceInventory(
        available: 337,
        id: '81374fb7-726f-4faf-9c84-fc1930ca34dc',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-12-09T18:29:30.941Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceInventory(
    request: $request
);

if ($response->commerceInventory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateCommerceInventoryRequest](../../Models/Operations/UpdateCommerceInventoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateCommerceInventoryResponse](../../Models/Operations/UpdateCommerceInventoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceItem

Updates the CommerceItem identified by `id`. Provide the unified CommerceItem fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceItem" method="put" path="/commerce/{connection_id}/item/{id}" example="commerce_item" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceItemRequest(
    commerceItem: new Shared\CommerceItem(
        collections: [],
        createdAt: Utils\Utils::parseDateTime('2019-06-21T20:16:18.628Z'),
        description: 'Decretum vulnero ustulo abeo.',
        duration: 104,
        globalCode: '978-0-85270-680-0',
        id: '5fbe3023-b360-4438-bed3-d5649eb8e00b',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 876,
                id: '1d2ec8a3-f233-47ea-ae68-023bb36ac6da',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'b5492379-4a27-4a4b-b1f9-9c3536d793d0',
                        slug: 'doloremque',
                        value: 'allatus',
                    ),
                ],
                position: 21,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/v73y0uzyK/3001/972',
                width: 67,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 651,
                id: '1969e23a-b937-4401-8ce2-5a75c79fa5e5',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'fbd40072-5852-4168-b903-2ba720033924',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 51,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/Ao4iatfO/771/3906',
                width: 3,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: 'f6c8509e-4f6c-4f98-b272-09c227caf477',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'abstergo',
            ),
        ],
        name: 'Handcrafted Rubber Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 78.11,
            ),
        ],
        publicDescription: 'Custodia ventus solio compono.',
        publicName: 'Handcrafted Rubber Tuna',
        requiresShipping: true,
        slug: 'handcrafted-rubber-tuna',
        tags: [
            'beatae',
            'blanditiis',
        ],
        totalStock: 682,
        type: 'SERVICE',
        updatedAt: Utils\Utils::parseDateTime('2022-04-28T18:23:56.999Z'),
        vendorName: 'Mayer - Flatley',
        weight: 37,
        weightUnit: Shared\WeightUnit::Oz,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceItem(
    request: $request
);

if ($response->commerceItem !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateCommerceItemRequest](../../Models/Operations/UpdateCommerceItemRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateCommerceItemResponse](../../Models/Operations/UpdateCommerceItemResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceItemvariant

Updates the CommerceItemvariant identified by `id`. Provide the unified CommerceItemvariant fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceItemvariant" method="put" path="/commerce/{connection_id}/itemvariant/{id}" example="commerce_itemvariant" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceItemvariantRequest(
    commerceItemvariant: new Shared\CommerceItemvariant(
        availableAt: Utils\Utils::parseDateTime('2022-02-06T18:14:41.644Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-20T13:49:12.968Z'),
        description: 'Stylish Salad designed to make you stand out with little looks',
        height: 54,
        id: '8b69d4ca-6204-40ba-ac87-c00976628679',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Hic desipio thorax.',
                height: 961,
                id: '2d23feb4-a2b6-4b3c-80c5-2197fb3b52fd',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '296a55bd-2b18-4d89-a02a-d0c96eafb9df',
                        slug: 'ubi',
                        value: 'textus',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/2126/721?lock=8820088623807162',
                width: 35,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '37b1a22d-798e-4027-93e8-9fbb13ce49a1',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'absens',
            ),
        ],
        name: 'Chair',
        options: [
            new Shared\CommerceItemOption(
                id: '19228c39-3b43-430a-9091-e3c00c98cc23',
                name: 'Color',
                position: 1,
                values: [
                    'olive',
                ],
            ),
            new Shared\CommerceItemOption(
                id: '079736ad-ae99-4f81-9e9c-c1682ce6e24e',
                name: 'Size',
                position: 2,
                values: [
                    'S',
                ],
            ),
        ],
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 382.23,
            ),
        ],
        publicDescription: 'Stylish Cheese designed to make you stand out with grave looks',
        publicName: 'Chair',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-1-368-44270-1',
        tags: [
            'deserunt',
        ],
        totalStock: 436,
        updatedAt: Utils\Utils::parseDateTime('2026-03-30T14:08:33.024Z'),
        weight: 46,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 40,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceItemvariant(
    request: $request
);

if ($response->commerceItemvariant !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdateCommerceItemvariantRequest](../../Models/Operations/UpdateCommerceItemvariantRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdateCommerceItemvariantResponse](../../Models/Operations/UpdateCommerceItemvariantResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceLocation

Updates the CommerceLocation identified by `id`. Provide the unified CommerceLocation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceLocation" method="put" path="/commerce/{connection_id}/location/{id}" example="commerce_location" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceLocationRequest(
    commerceLocation: new Shared\CommerceLocation(
        address: new Shared\PropertyCommerceLocationAddress(
            address1: '29896 The Limes',
            city: 'New Kenny',
            countryCode: 'US',
            postalCode: '14490-0609',
            region: 'Virginia',
            regionCode: 'MS',
        ),
        categories: [],
        createdAt: Utils\Utils::parseDateTime('2022-12-29T04:15:21.195Z'),
        currency: 'XCD',
        description: 'Adsidue audentia.',
        id: 'd46a095a-22b7-4c6c-8a20-1a3f334a1391',
        imageUrl: 'https://picsum.photos/seed/hjFt1/1036/2220',
        isActive: false,
        languageLocale: 'vulgaris',
        latitude: 0,
        locationType: Shared\LocationType::Restaurant,
        longitude: 0,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Addo.',
                height: 283,
                id: '27145886-0932-45f4-b425-ea901e3be84f',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'ae0d8df2-de98-462b-9e62-ef1f9e4caeb5',
                        slug: 'abutor',
                        value: 'damno',
                    ),
                ],
                position: 40,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/QVh7ViTV/3964/1567',
                width: 1,
            ),
        ],
        metadata: [],
        name: 'Olson - Mraz',
        priceLevel: '',
        rating: 0,
        reviewCount: 0,
        telephones: [
            new Shared\CommerceTelephone(
                telephone: '(872) 522-3201',
                type: Shared\CommerceTelephoneType::Other,
            ),
            new Shared\CommerceTelephone(
                telephone: '(236) 274-2445',
                type: Shared\CommerceTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-04-29T00:14:57.115Z'),
        webUrl: 'https://chilly-edge.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceLocation(
    request: $request
);

if ($response->commerceLocation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateCommerceLocationRequest](../../Models/Operations/UpdateCommerceLocationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateCommerceLocationResponse](../../Models/Operations/UpdateCommerceLocationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceReservation

Updates the CommerceReservation identified by `id`. Provide the unified CommerceReservation fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceReservation" method="put" path="/commerce/{connection_id}/reservation/{id}" example="commerce_reservation" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceReservationRequest(
    commerceReservation: new Shared\CommerceReservation(
        createdAt: Utils\Utils::parseDateTime('2021-12-14T19:50:31.151Z'),
        endAt: Utils\Utils::parseDateTime('2022-01-01T22:00:17.868Z'),
        guestEmail: 'julien.bartoletti@icloud.com',
        guestName: 'Julien Bartoletti',
        guestPhone: '(728) 596-2620',
        id: '5cd3538b-ad2e-43fc-835b-7065c51cec54',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-09T02:46:46.654Z'),
        url: 'https://expensive-gift.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceReservation(
    request: $request
);

if ($response->commerceReservation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdateCommerceReservationRequest](../../Models/Operations/UpdateCommerceReservationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdateCommerceReservationResponse](../../Models/Operations/UpdateCommerceReservationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceReview

Updates the CommerceReview identified by `id`. Provide the unified CommerceReview fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceReview" method="put" path="/commerce/{connection_id}/review/{id}" example="commerce_review" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceReviewRequest(
    commerceReview: new Shared\CommerceReview(
        authorAvatarUrl: 'https://loremflickr.com/7/2660?lock=4279109054086693',
        authorEmail: 'nyasia.macgyver@hotmail.com',
        authorLocation: 'denique',
        authorName: 'Nyasia MacGyver',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: 'a5f8445f-68fa-412d-b0d0-08876101c897',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Desipio carpo sol laudantium colo.',
                height: 749,
                id: 'de3ef235-b070-40b5-8bd0-9fd151d47700',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '09816160-9f6a-4a7c-8665-44526a06ac2a',
                        slug: 'textor',
                        value: 'quos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/196/2041?lock=5845524773114807',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Adopto teneo numquam.',
                height: 957,
                id: '6d0ecbe7-8227-4538-a47c-0933a5479a9f',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'cdf17c4d-e992-4ea8-b16a-3e3ff22d3e03',
                        slug: 'bos',
                        value: 'casso',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/1178/2175?lock=5466640101053206',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-10T07:24:16.712Z'),
        url: 'https://diligent-bandwidth.biz',
        verifiedPurchase: true,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceReview(
    request: $request
);

if ($response->commerceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateCommerceReviewRequest](../../Models/Operations/UpdateCommerceReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateCommerceReviewResponse](../../Models/Operations/UpdateCommerceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCommerceSaleschannel

Updates the CommerceSaleschannel identified by `id`. Provide the unified CommerceSaleschannel fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCommerceSaleschannel" method="put" path="/commerce/{connection_id}/saleschannel/{id}" example="commerce_saleschannel" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateCommerceSaleschannelRequest(
    commerceSaleschannel: new Shared\CommerceSaleschannel(
        collections: [],
        createdAt: Utils\Utils::parseDateTime('2021-12-12T06:19:55.421Z'),
        description: 'Utroque denuncio solutio.',
        id: '39939ac2-059d-4f8f-9c8f-5ae45317ecc3',
        isActive: false,
        metadata: [],
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-02-12T11:35:06.521Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commerce->updateCommerceSaleschannel(
    request: $request
);

if ($response->commerceSaleschannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateCommerceSaleschannelRequest](../../Models/Operations/UpdateCommerceSaleschannelRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateCommerceSaleschannelResponse](../../Models/Operations/UpdateCommerceSaleschannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |