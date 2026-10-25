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
* [getCommerceReview](#getcommercereview) - Retrieve a review
* [getCommerceSaleschannel](#getcommercesaleschannel) - Retrieve a saleschannel
* [listCommerceAvailabilities](#listcommerceavailabilities) - List all availabilities
* [listCommerceCollections](#listcommercecollections) - List all collections
* [listCommerceInventories](#listcommerceinventories) - List all inventories
* [listCommerceItems](#listcommerceitems) - List all items
* [listCommerceItemvariants](#listcommerceitemvariants) - List all itemvariants
* [listCommerceLocations](#listcommercelocations) - List all locations
* [listCommerceReservations](#listcommercereservations) - List all reservations
* [listCommerceReviews](#listcommercereviews) - List all reviews
* [listCommerceSaleschannels](#listcommercesaleschannels) - List all saleschannels
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
        id: '699e1f4d-4017-4647-807c-e34da627017f',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: 'f3b490fd-9e1a-4b70-8c9e-35f6bf7827fc',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '9d5ece97-3f43-4c3d-9337-d1d2d6eec39e',
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
                id: '1f55f92d-e72f-43ac-8f60-42362f1de594',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-17T02:45:10.728Z'),
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
        id: '493333b8-1920-4eb7-9b7b-2b0fe0ae211d',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-11-23T15:51:17.514Z'),
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
        id: '45d7f3c7-ec06-4b92-9084-6b84220faa39',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 876,
                id: '5af90d91-c5fd-4790-baf3-f37b1b0ced06',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'ab868840-1362-424a-869c-b861475418ae',
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
                id: '751b4b32-1147-46dc-8806-f80dec6c4730',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'fb573a63-a2e2-4e7b-8d22-e867e85c0444',
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
                id: 'a617abc6-1880-4369-83c4-6205855b5afa',
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
        updatedAt: Utils\Utils::parseDateTime('2022-04-21T01:22:25.870Z'),
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
        id: '3e5525d8-b603-4e98-8685-3c11422b71fb',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Hic desipio thorax.',
                height: 961,
                id: '142378e1-c3ab-4a8b-b7e2-0998868eee32',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'fbe0362f-bd04-43ec-844f-c7a22940be68',
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
                id: '390d0853-5b04-43b4-ae2d-bbd066635048',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'absens',
            ),
        ],
        name: 'Chair',
        options: [
            new Shared\CommerceItemOption(
                id: 'f7c9f28a-d682-4734-8e55-572d28deb6af',
                name: 'Color',
                position: 1,
                values: [
                    'olive',
                ],
            ),
            new Shared\CommerceItemOption(
                id: '4975b79f-04e3-4a76-ba93-8dc68cf824ac',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-13T04:37:23.682Z'),
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
        id: '9e665be3-b4e3-4ced-b053-792dd454a420',
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
                id: 'e8c2cea5-781c-48ac-becb-57d365d69f93',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0e0f7e3a-ea68-4200-bf70-e5e0330ee3af',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-22T03:15:09.150Z'),
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
        id: '0e0d2eea-a34c-4e2e-a5ed-451618f99b6b',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-04T18:27:19.584Z'),
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
        id: '7e651c4a-05d3-4d20-85d5-d341a4ab189b',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Desipio carpo sol laudantium colo.',
                height: 749,
                id: 'ae3d2bd3-0662-41d2-a52c-dea1785df492',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '8f2de047-06d4-44c8-a075-94d6c9db1946',
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
                id: '1298d975-573d-44d9-9087-7a8a57f8c5e4',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '84ac478a-21fe-400c-886d-3e24fce35f9c',
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
        updatedAt: Utils\Utils::parseDateTime('2025-08-24T17:06:27.901Z'),
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
        id: '121d7baf-49ac-4954-8595-0a69c1931b44',
        isActive: false,
        metadata: [],
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-01-30T14:26:05.423Z'),
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
        id: '6a8e301b-4a33-49a1-b00d-daaff0dd8cc3',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '60a87e00-de93-433b-a050-01daddfe8663',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '5e5338f2-600c-4a72-8964-38e3596001ef',
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
                id: 'e8c6b80d-ed3d-4573-88b2-a1ae60174fe6',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-17T02:45:10.742Z'),
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
        id: 'f026536a-d196-40c8-b29a-6815cf5d140f',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-11-23T15:51:17.520Z'),
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
        id: 'e055d2f7-bf1c-405e-ba77-7b892a9a2a29',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 876,
                id: 'da327838-1cd0-4619-a37e-2a4033aa924b',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '8541a721-e96e-46c6-b9b0-040c9420b6e0',
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
                id: 'bb55017f-cb41-4adf-957a-171ffe58543f',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'd1a60fd3-db6d-4cf6-8d2d-99cf42d6b3ed',
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
                id: 'd86a07ca-47af-4ae7-b728-129290030fe6',
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
        updatedAt: Utils\Utils::parseDateTime('2022-04-21T01:22:25.882Z'),
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
        id: 'f08139af-05fb-46eb-a76a-e2d0af629d9a',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Hic desipio thorax.',
                height: 961,
                id: '9b04e893-0e36-4840-862d-78f8e357b7ec',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '7a69b028-0830-4d91-b441-7a61e3bd0f98',
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
                id: '6afd166c-5180-40bf-b748-174dc741e88c',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'absens',
            ),
        ],
        name: 'Chair',
        options: [
            new Shared\CommerceItemOption(
                id: '2d521596-8bb2-45e3-b194-6fc339ed04f8',
                name: 'Color',
                position: 1,
                values: [
                    'olive',
                ],
            ),
            new Shared\CommerceItemOption(
                id: 'bf1a0e23-c1ac-4a9d-99a5-aec067da8732',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-13T04:37:23.711Z'),
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
        id: '858257ec-963f-4784-a49a-5f62180418c2',
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
                id: '5cc8d75b-5b4e-4d45-a67b-2f695cdf34e6',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0df50c82-8ffb-4dc4-99b5-22043f40754e',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-22T03:15:09.161Z'),
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
        id: '6c448acf-e15d-4ce7-bfcc-143b3a94d762',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-04T18:27:19.587Z'),
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
        id: 'f13d4e33-9fad-4fd3-98be-51f4364f31c1',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Desipio carpo sol laudantium colo.',
                height: 749,
                id: '519c37ea-a279-463b-9b15-e991f8f4bf20',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'eb3bdced-e8fd-41ee-901d-2cc627156410',
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
                id: '58eb75f8-6048-47b4-bc01-2615f52c6766',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0a9c71a3-25b7-40c3-aeef-cf661379e769',
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
        updatedAt: Utils\Utils::parseDateTime('2025-08-24T17:06:27.929Z'),
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
        id: 'e694ad3e-bd77-48e4-b35f-421c58976ccc',
        isActive: false,
        metadata: [],
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-01-30T14:26:05.429Z'),
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
        id: '6a8e301b-4a33-49a1-b00d-daaff0dd8cc3',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '60a87e00-de93-433b-a050-01daddfe8663',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '5e5338f2-600c-4a72-8964-38e3596001ef',
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
                id: 'e8c6b80d-ed3d-4573-88b2-a1ae60174fe6',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-17T02:45:10.742Z'),
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
        id: 'f026536a-d196-40c8-b29a-6815cf5d140f',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-11-23T15:51:17.520Z'),
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
        id: 'e055d2f7-bf1c-405e-ba77-7b892a9a2a29',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 876,
                id: 'da327838-1cd0-4619-a37e-2a4033aa924b',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '8541a721-e96e-46c6-b9b0-040c9420b6e0',
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
                id: 'bb55017f-cb41-4adf-957a-171ffe58543f',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'd1a60fd3-db6d-4cf6-8d2d-99cf42d6b3ed',
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
                id: 'd86a07ca-47af-4ae7-b728-129290030fe6',
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
        updatedAt: Utils\Utils::parseDateTime('2022-04-21T01:22:25.882Z'),
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
        id: 'f08139af-05fb-46eb-a76a-e2d0af629d9a',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Hic desipio thorax.',
                height: 961,
                id: '9b04e893-0e36-4840-862d-78f8e357b7ec',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '7a69b028-0830-4d91-b441-7a61e3bd0f98',
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
                id: '6afd166c-5180-40bf-b748-174dc741e88c',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'absens',
            ),
        ],
        name: 'Chair',
        options: [
            new Shared\CommerceItemOption(
                id: '2d521596-8bb2-45e3-b194-6fc339ed04f8',
                name: 'Color',
                position: 1,
                values: [
                    'olive',
                ],
            ),
            new Shared\CommerceItemOption(
                id: 'bf1a0e23-c1ac-4a9d-99a5-aec067da8732',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-13T04:37:23.711Z'),
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
        id: '858257ec-963f-4784-a49a-5f62180418c2',
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
                id: '5cc8d75b-5b4e-4d45-a67b-2f695cdf34e6',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0df50c82-8ffb-4dc4-99b5-22043f40754e',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-22T03:15:09.161Z'),
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
        id: '6c448acf-e15d-4ce7-bfcc-143b3a94d762',
        metadata: [],
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-04T18:27:19.587Z'),
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
        id: 'f13d4e33-9fad-4fd3-98be-51f4364f31c1',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Desipio carpo sol laudantium colo.',
                height: 749,
                id: '519c37ea-a279-463b-9b15-e991f8f4bf20',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'eb3bdced-e8fd-41ee-901d-2cc627156410',
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
                id: '58eb75f8-6048-47b4-bc01-2615f52c6766',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0a9c71a3-25b7-40c3-aeef-cf661379e769',
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
        updatedAt: Utils\Utils::parseDateTime('2025-08-24T17:06:27.929Z'),
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
        id: 'e694ad3e-bd77-48e4-b35f-421c58976ccc',
        isActive: false,
        metadata: [],
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-01-30T14:26:05.429Z'),
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