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

Create a collection

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
        id: 'b5536305-3119-448d-b620-d6b4c0e532f1',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: 'ee910e06-a198-41a0-a7da-03abab3b25c9',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'deba2f32-3d6b-41a3-b670-c70bda60be5a',
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
                id: '98dfd6ec-3440-4e86-b5c1-0b1fcc7daf58',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-11T11:58:08.112Z'),
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

Create an inventory

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
        updatedAt: Utils\Utils::parseDateTime('2025-11-14T19:07:13.376Z'),
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

Create an item

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
        description: 'Vulnero ustulo abeo.',
        duration: 87,
        globalCode: 'calamitas',
        id: 'c06dfbe8-83e2-4980-b1e9-4ff2f708ef52',
        isActive: false,
        isFeatured: true,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 663,
                id: '134725e5-c891-4b67-847b-3dc6b6650314',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '68dcb6b3-6ae9-4713-b584-c84fd1a90efd',
                        slug: 'doloremque',
                        value: 'allatus',
                    ),
                ],
                position: 67,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/73y0uzyK/972/3753',
                width: 88,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 189,
                id: '6e08125f-1431-4128-9c67-efb1723955c6',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'b5c57e4f-172d-4f78-a194-0fb29cc40f91',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 3,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/Ao4iatfO/771/3906',
                width: 66,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: 'e6049561-445c-4443-9824-3a2ec00ffcf8',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'terebro',
            ),
        ],
        name: 'Handcrafted Rubber Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                compareAtPrice: 474,
                currency: 'OMR',
                price: 1438,
            ),
        ],
        publicDescription: 'Custodia ventus solio compono.',
        publicName: 'Handcrafted Rubber Tuna',
        requiresShipping: true,
        slug: 'cohors-turba-optio',
        tags: [
            'blanditiis',
            'tandem',
        ],
        totalStock: 579,
        type: 'beatae',
        updatedAt: Utils\Utils::parseDateTime('2022-04-16T19:34:10.874Z'),
        vendorName: 'Mayer - Flatley',
        weight: 22,
        weightUnit: Shared\WeightUnit::Kg,
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

Create an itemvariant

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
        availableAt: Utils\Utils::parseDateTime('2022-02-02T16:10:33.503Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-20T13:49:12.968Z'),
        description: 'Featuring Helium-enhanced technology, our Chips offers unparalleled helpful performance',
        height: 52,
        id: '1eb237d3-ff4b-4058-9ebd-e0d4de27c28d',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '4f1edbb5-fc2d-49ba-b7b0-29f9940baea4',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '1057dc8a-6ab3-48dd-9c04-a9f09fe9c87d',
                        slug: 'illo',
                        value: 'quia',
                    ),
                ],
                position: 92,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/u0YdHqlRu/2007/3208',
                width: 54,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Civitas acies substantia tergo.',
                height: 351,
                id: '1243fc59-9156-4fe5-9ef6-a4765a6d2257',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '03900f90-53d7-422b-a34b-92b866c8d13e',
                        slug: 'libero',
                        value: 'capitulus',
                    ),
                ],
                position: 44,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/2230/1237?lock=8628070842159966',
                width: 55,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: 'a2e82021-5acd-4d47-8d0e-508dbb281e2c',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: '3548b744-d09e-40aa-a20c-8010f1b81370',
                name: 'Steel',
                position: 97,
                values: [
                    'Granite',
                    'Plastic',
                ],
            ),
        ],
        prices: [
            new Shared\CommerceItemPrice(
                compareAtPrice: 3745,
                currency: 'COP',
                price: 4913,
            ),
            new Shared\CommerceItemPrice(
                compareAtPrice: 438,
                currency: 'PHP',
                price: 1378,
            ),
            new Shared\CommerceItemPrice(
                compareAtPrice: 1614,
                currency: 'PHP',
                price: 8702,
            ),
        ],
        publicDescription: 'Stylish Soap designed to make you stand out with insistent looks',
        publicName: 'Keyboard',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-0-7051-0955-0',
        tags: [
            'vomito',
            'custodia',
        ],
        totalStock: 929,
        updatedAt: Utils\Utils::parseDateTime('2025-06-12T01:45:53.218Z'),
        weight: 61,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 26,
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

Create a location

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
        id: '9f2d8429-175c-487c-bf6e-07db2813f66e',
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
                id: '764f1f7c-3b28-4d12-9ed6-0710515f7d56',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'a81d9d5e-3f3f-4082-ae41-63fc5f716d73',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-18T08:28:06.572Z'),
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

Create a reservation

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
        guestEmail: 'Sunny.Strosin77@yahoo.com',
        guestName: 'Annette Franecki',
        guestPhone: '(990) 317-6213',
        id: '739da790-3487-4aa4-adbb-efc148a7d837',
        itemName: 'Practical Ceramic Shoes',
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        staffName: 'Vickie Fahey',
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-02T09:03:16.001Z'),
        url: 'https://cluttered-pine.info/',
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

Create a review

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
        authorAvatarUrl: 'https://picsum.photos/seed/ix4Br3LA/2245/1245',
        authorEmail: 'Cleve_Yundt@hotmail.com',
        authorLocation: 'ipsum',
        authorName: 'Marsha Krajcik',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 26,
        id: '9187ecf9-3290-4da2-8ed6-35407939aa5b',
        isFeatured: true,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Adulescens.',
                height: 519,
                id: '6ad5cf32-0588-4779-8498-7337249db0ae',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'fac6012c-28fe-426d-a930-4b9d0fddcab5',
                        slug: 'aggero',
                        value: 'tero',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/882/1004?lock=7448492654002422',
                width: 75,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Pauci timidus sol comburo thema.',
                height: 297,
                id: 'e92451ce-6435-41a4-8faa-104a15435f36',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'bfb391df-c1f1-426d-b4e2-750a5ff4a5f7',
                        slug: 'vito',
                        value: 'cuppedia',
                    ),
                ],
                position: 61,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/3QDZ8/1208/2171',
                width: 96,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Cuppedia vestrum patruus.',
                height: 6,
                id: '1d9ecade-7115-4f52-b978-9f73bcca5cff',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'fc2b339d-a9cc-4ea2-9544-2cd42b6a2482',
                        slug: 'arbitro',
                        value: 'villa',
                    ),
                ],
                position: 60,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/ytybC/2616/710',
                width: 74,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 49,
        updatedAt: Utils\Utils::parseDateTime('2025-08-15T13:57:28.165Z'),
        url: 'https://excitable-underneath.com',
        verifiedPurchase: false,
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

Create a saleschannel

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
        id: '44975cd5-62de-4af7-a1fe-5ef3bd47c91c',
        isActive: false,
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-01-23T12:20:05.723Z'),
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

Retrieve a collection

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

Retrieve an inventory

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

Retrieve an item

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

Retrieve an itemvariant

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

Retrieve a location

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

Retrieve a reservation

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

Retrieve a review

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

Retrieve a saleschannel

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

List all availabilities

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

List all collections

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

List all inventories

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

List all items

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

List all itemvariants

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

List all locations

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

List all reservations

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

List all reviews

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

List all saleschannels

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

Update a collection

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
        id: '35e262cb-2857-4901-92be-d3e126264350',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '7403fb92-309b-4e4b-b80e-2e3a3d0c5cf4',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '59754f02-7889-4705-802f-01d5a504d6fc',
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
                id: '8f70de80-cbd1-40a9-ba3c-7e48effc8f84',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-11T11:58:08.121Z'),
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

Update an inventory

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
        updatedAt: Utils\Utils::parseDateTime('2025-11-14T19:07:13.378Z'),
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

Update an item

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
        description: 'Vulnero ustulo abeo.',
        duration: 87,
        globalCode: 'calamitas',
        id: 'cf13e770-de40-4d91-9ebd-86e0c9cdfa83',
        isActive: false,
        isFeatured: true,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 663,
                id: '52b0ee99-5462-4ea2-93c7-7184e7ef8407',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'a72758fc-07fa-48c1-bbba-0ed7213732e1',
                        slug: 'doloremque',
                        value: 'allatus',
                    ),
                ],
                position: 67,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/73y0uzyK/972/3753',
                width: 88,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 189,
                id: 'f2786de2-7955-43f0-ba86-5c5b7bac3580',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '83e125de-7d98-448f-ac6b-304761770f0a',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 3,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/Ao4iatfO/771/3906',
                width: 66,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '41e16536-76b4-4fd5-bf0e-c54e5da68678',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'terebro',
            ),
        ],
        name: 'Handcrafted Rubber Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                compareAtPrice: 474,
                currency: 'OMR',
                price: 1438,
            ),
        ],
        publicDescription: 'Custodia ventus solio compono.',
        publicName: 'Handcrafted Rubber Tuna',
        requiresShipping: true,
        slug: 'cohors-turba-optio',
        tags: [
            'blanditiis',
            'tandem',
        ],
        totalStock: 579,
        type: 'beatae',
        updatedAt: Utils\Utils::parseDateTime('2022-04-16T19:34:10.884Z'),
        vendorName: 'Mayer - Flatley',
        weight: 22,
        weightUnit: Shared\WeightUnit::Kg,
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

Update an itemvariant

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
        availableAt: Utils\Utils::parseDateTime('2022-02-02T16:10:33.503Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-20T13:49:12.968Z'),
        description: 'Featuring Helium-enhanced technology, our Chips offers unparalleled helpful performance',
        height: 52,
        id: '252edaa4-3029-4ce1-836d-1b16391116e8',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '863325fb-ef4d-4cad-b17d-93e603acb0b7',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'e5b36839-9419-4905-abaa-a5d97f4c775d',
                        slug: 'illo',
                        value: 'quia',
                    ),
                ],
                position: 92,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/u0YdHqlRu/2007/3208',
                width: 54,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Civitas acies substantia tergo.',
                height: 351,
                id: '9bb54d20-6a0f-4aa0-a376-3992f0b8086c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'f52e5821-51e0-4981-9ef7-15d6dfb34612',
                        slug: 'libero',
                        value: 'capitulus',
                    ),
                ],
                position: 44,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/2230/1237?lock=8628070842159966',
                width: 55,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '338af471-ce90-4d2f-966f-af01a428eaf1',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: '5bae426a-daf3-4078-9c13-626d8b5fdf4b',
                name: 'Steel',
                position: 97,
                values: [
                    'Granite',
                    'Plastic',
                ],
            ),
        ],
        prices: [
            new Shared\CommerceItemPrice(
                compareAtPrice: 3745,
                currency: 'COP',
                price: 4913,
            ),
            new Shared\CommerceItemPrice(
                compareAtPrice: 438,
                currency: 'PHP',
                price: 1378,
            ),
            new Shared\CommerceItemPrice(
                compareAtPrice: 1614,
                currency: 'PHP',
                price: 8702,
            ),
        ],
        publicDescription: 'Stylish Soap designed to make you stand out with insistent looks',
        publicName: 'Keyboard',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-0-7051-0955-0',
        tags: [
            'vomito',
            'custodia',
        ],
        totalStock: 929,
        updatedAt: Utils\Utils::parseDateTime('2025-06-12T01:45:53.234Z'),
        weight: 61,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 26,
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

Update a location

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
        id: '429f2d69-c3ab-4eea-a25b-bf9f9375bf93',
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
                id: '75b23f3b-c541-41bd-b260-889288c90f34',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '357e3784-eed3-4e6b-9655-9f6324b7f37b',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-18T08:28:06.579Z'),
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

Update a reservation

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
        guestEmail: 'Sunny.Strosin77@yahoo.com',
        guestName: 'Annette Franecki',
        guestPhone: '(990) 317-6213',
        id: '58834da7-9d4c-4f8e-b4e1-7608c7b68cb8',
        itemName: 'Practical Ceramic Shoes',
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        staffName: 'Vickie Fahey',
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-02T09:03:16.003Z'),
        url: 'https://cluttered-pine.info/',
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

Update a review

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
        authorAvatarUrl: 'https://picsum.photos/seed/ix4Br3LA/2245/1245',
        authorEmail: 'Cleve_Yundt@hotmail.com',
        authorLocation: 'ipsum',
        authorName: 'Marsha Krajcik',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 26,
        id: '307ff44b-fbc3-4b23-8c37-c4cdd1464416',
        isFeatured: true,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Adulescens.',
                height: 519,
                id: '3b26f456-415f-4805-8cf5-c7647969d27b',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '73016a0f-2cf3-460b-a811-cf6050660394',
                        slug: 'aggero',
                        value: 'tero',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/882/1004?lock=7448492654002422',
                width: 75,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Pauci timidus sol comburo thema.',
                height: 297,
                id: '2d42caf5-822a-46bb-8260-213815b9d888',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '662054c0-cdb7-44d2-800e-7a1a63f5f974',
                        slug: 'vito',
                        value: 'cuppedia',
                    ),
                ],
                position: 61,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/3QDZ8/1208/2171',
                width: 96,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Cuppedia vestrum patruus.',
                height: 6,
                id: '056c791a-f9a8-494e-82e7-fa691373504d',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '168f30f9-c57a-4816-b4c1-516013478af5',
                        slug: 'arbitro',
                        value: 'villa',
                    ),
                ],
                position: 60,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/ytybC/2616/710',
                width: 74,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 49,
        updatedAt: Utils\Utils::parseDateTime('2025-08-15T13:57:28.186Z'),
        url: 'https://excitable-underneath.com',
        verifiedPurchase: false,
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

Update a saleschannel

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
        id: 'e00d0c3f-45af-464c-a949-f121f2f72340',
        isActive: false,
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-01-23T12:20:05.726Z'),
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

Remove a collection

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

Remove an inventory

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

Remove an item

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

Remove an itemvariant

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

Remove a location

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

Remove a reservation

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

Remove a review

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

Remove a saleschannel

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

Update a collection

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
        id: '35e262cb-2857-4901-92be-d3e126264350',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '7403fb92-309b-4e4b-b80e-2e3a3d0c5cf4',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '59754f02-7889-4705-802f-01d5a504d6fc',
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
                id: '8f70de80-cbd1-40a9-ba3c-7e48effc8f84',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-11T11:58:08.121Z'),
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

Update an inventory

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
        updatedAt: Utils\Utils::parseDateTime('2025-11-14T19:07:13.378Z'),
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

Update an item

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
        description: 'Vulnero ustulo abeo.',
        duration: 87,
        globalCode: 'calamitas',
        id: 'cf13e770-de40-4d91-9ebd-86e0c9cdfa83',
        isActive: false,
        isFeatured: true,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 663,
                id: '52b0ee99-5462-4ea2-93c7-7184e7ef8407',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'a72758fc-07fa-48c1-bbba-0ed7213732e1',
                        slug: 'doloremque',
                        value: 'allatus',
                    ),
                ],
                position: 67,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/73y0uzyK/972/3753',
                width: 88,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 189,
                id: 'f2786de2-7955-43f0-ba86-5c5b7bac3580',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '83e125de-7d98-448f-ac6b-304761770f0a',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 3,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/Ao4iatfO/771/3906',
                width: 66,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '41e16536-76b4-4fd5-bf0e-c54e5da68678',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'terebro',
            ),
        ],
        name: 'Handcrafted Rubber Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                compareAtPrice: 474,
                currency: 'OMR',
                price: 1438,
            ),
        ],
        publicDescription: 'Custodia ventus solio compono.',
        publicName: 'Handcrafted Rubber Tuna',
        requiresShipping: true,
        slug: 'cohors-turba-optio',
        tags: [
            'blanditiis',
            'tandem',
        ],
        totalStock: 579,
        type: 'beatae',
        updatedAt: Utils\Utils::parseDateTime('2022-04-16T19:34:10.884Z'),
        vendorName: 'Mayer - Flatley',
        weight: 22,
        weightUnit: Shared\WeightUnit::Kg,
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

Update an itemvariant

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
        availableAt: Utils\Utils::parseDateTime('2022-02-02T16:10:33.503Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-20T13:49:12.968Z'),
        description: 'Featuring Helium-enhanced technology, our Chips offers unparalleled helpful performance',
        height: 52,
        id: '252edaa4-3029-4ce1-836d-1b16391116e8',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '863325fb-ef4d-4cad-b17d-93e603acb0b7',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'e5b36839-9419-4905-abaa-a5d97f4c775d',
                        slug: 'illo',
                        value: 'quia',
                    ),
                ],
                position: 92,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/u0YdHqlRu/2007/3208',
                width: 54,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Civitas acies substantia tergo.',
                height: 351,
                id: '9bb54d20-6a0f-4aa0-a376-3992f0b8086c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'f52e5821-51e0-4981-9ef7-15d6dfb34612',
                        slug: 'libero',
                        value: 'capitulus',
                    ),
                ],
                position: 44,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://loremflickr.com/2230/1237?lock=8628070842159966',
                width: 55,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '338af471-ce90-4d2f-966f-af01a428eaf1',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: '5bae426a-daf3-4078-9c13-626d8b5fdf4b',
                name: 'Steel',
                position: 97,
                values: [
                    'Granite',
                    'Plastic',
                ],
            ),
        ],
        prices: [
            new Shared\CommerceItemPrice(
                compareAtPrice: 3745,
                currency: 'COP',
                price: 4913,
            ),
            new Shared\CommerceItemPrice(
                compareAtPrice: 438,
                currency: 'PHP',
                price: 1378,
            ),
            new Shared\CommerceItemPrice(
                compareAtPrice: 1614,
                currency: 'PHP',
                price: 8702,
            ),
        ],
        publicDescription: 'Stylish Soap designed to make you stand out with insistent looks',
        publicName: 'Keyboard',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-0-7051-0955-0',
        tags: [
            'vomito',
            'custodia',
        ],
        totalStock: 929,
        updatedAt: Utils\Utils::parseDateTime('2025-06-12T01:45:53.234Z'),
        weight: 61,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 26,
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

Update a location

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
        id: '429f2d69-c3ab-4eea-a25b-bf9f9375bf93',
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
                id: '75b23f3b-c541-41bd-b260-889288c90f34',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '357e3784-eed3-4e6b-9655-9f6324b7f37b',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-18T08:28:06.579Z'),
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

Update a reservation

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
        guestEmail: 'Sunny.Strosin77@yahoo.com',
        guestName: 'Annette Franecki',
        guestPhone: '(990) 317-6213',
        id: '58834da7-9d4c-4f8e-b4e1-7608c7b68cb8',
        itemName: 'Practical Ceramic Shoes',
        notes: 'Adsum textilis ipsum despecto.',
        size: 10,
        staffName: 'Vickie Fahey',
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-02T09:03:16.003Z'),
        url: 'https://cluttered-pine.info/',
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

Update a review

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
        authorAvatarUrl: 'https://picsum.photos/seed/ix4Br3LA/2245/1245',
        authorEmail: 'Cleve_Yundt@hotmail.com',
        authorLocation: 'ipsum',
        authorName: 'Marsha Krajcik',
        comments: [],
        content: 'Taedium thymum adipiscor amicitia cui.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 26,
        id: '307ff44b-fbc3-4b23-8c37-c4cdd1464416',
        isFeatured: true,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Adulescens.',
                height: 519,
                id: '3b26f456-415f-4805-8cf5-c7647969d27b',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '73016a0f-2cf3-460b-a811-cf6050660394',
                        slug: 'aggero',
                        value: 'tero',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://loremflickr.com/882/1004?lock=7448492654002422',
                width: 75,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Pauci timidus sol comburo thema.',
                height: 297,
                id: '2d42caf5-822a-46bb-8260-213815b9d888',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '662054c0-cdb7-44d2-800e-7a1a63f5f974',
                        slug: 'vito',
                        value: 'cuppedia',
                    ),
                ],
                position: 61,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/3QDZ8/1208/2171',
                width: 96,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Cuppedia vestrum patruus.',
                height: 6,
                id: '056c791a-f9a8-494e-82e7-fa691373504d',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '168f30f9-c57a-4816-b4c1-516013478af5',
                        slug: 'arbitro',
                        value: 'villa',
                    ),
                ],
                position: 60,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/ytybC/2616/710',
                width: 74,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Coepi adamo amicitia auxilium toties.',
        unhelpfulVotes: 49,
        updatedAt: Utils\Utils::parseDateTime('2025-08-15T13:57:28.186Z'),
        url: 'https://excitable-underneath.com',
        verifiedPurchase: false,
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

Update a saleschannel

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
        id: 'e00d0c3f-45af-464c-a949-f121f2f72340',
        isActive: false,
        slug: 'amiculum-congregatio-suspendo',
        updatedAt: Utils\Utils::parseDateTime('2025-01-23T12:20:05.726Z'),
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