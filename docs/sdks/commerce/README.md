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
        description: 'Ward - Hudson\'s most advanced Computer technology increases graceful capabilities',
        id: '289d671b-97fd-4bab-b72f-5b284b80a97f',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Armarium amiculum amet defendo.',
                height: 759,
                id: 'acef5837-5d6f-4bf5-9cb4-626045c6656d',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '4f88fdb1-8806-460d-9ad7-f2b72bad5bac',
                        slug: 'cernuus',
                        value: 'torrens',
                    ),
                ],
                position: 80,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/62m4msPNw/3209/1074',
                width: 40,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                id: '92e6b5f5-46bb-42ab-b1c9-28a814346ad0',
                slug: 'velit',
                value: 'aureus',
            ),
        ],
        name: 'Rustic Gold Mouse',
        publicDescription: 'Introducing the Sint Maarten-inspired Gloves, blending awful style with local craftsmanship',
        publicName: 'Rustic Gold Mouse',
        tags: [
            'viridis',
            'deserunt',
            'comparo',
        ],
        type: Shared\CommerceCollectionType::Collection,
        updatedAt: Utils\Utils::parseDateTime('2025-04-02T22:47:41.513Z'),
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
        id: 'cb11bf13-1466-4e4f-aeea-9b13f5306e6d',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-12-20T05:34:06.809Z'),
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
        description: 'Abeo surculus custodia ventus solio.',
        duration: 104,
        globalCode: '978-0-85270-680-0',
        id: '38275725-5ac9-4984-b654-987604013241',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Eveniet acies.',
                height: 876,
                id: 'ff0b04b7-810e-462e-abc1-7c10ae5bc1e3',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '21a83165-ad3b-4005-8659-bb4d272bb6ad',
                        slug: 'candidus',
                        value: 'doloremque',
                    ),
                ],
                position: 21,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/uzyKI/235/2194',
                width: 67,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 651,
                id: '003c57bf-ed05-4081-9dce-2390c705fc86',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'f593f503-ffcd-4968-baca-206fee347e43',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 51,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/NFAo4iatfO/383/771',
                width: 3,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: 'dbff710d-d647-4bae-bd1f-69a434974b5d',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'abstergo',
            ),
        ],
        name: 'Oriental Gold Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 78.11,
            ),
        ],
        publicDescription: 'Adfero neque.',
        publicName: 'Oriental Gold Tuna',
        requiresShipping: true,
        slug: 'oriental-gold-tuna',
        tags: [
            'dolores',
            'amplus',
        ],
        totalStock: 682,
        type: 'SERVICE',
        updatedAt: Utils\Utils::parseDateTime('2022-05-03T18:33:07.139Z'),
        vendorName: 'Rohan - Pouros',
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
        description: 'Our dog-friendly Bacon ensures pessimistic comfort for your pets',
        height: 54,
        id: 'dde14e6d-1b6f-410f-ae18-468aa98534c7',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 961,
                id: '1836b74f-ec27-4ce0-bb4f-f42a76e3b682',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '29abc7d6-d264-4d10-b11f-ca6cc0baf728',
                        slug: 'illo',
                        value: 'quia',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/u0YdHqlRu/3208/3394',
                width: 35,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '3222536f-a14a-456d-8548-5fe3c4d9b134',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'colligo',
            ),
        ],
        name: 'Table',
        options: [
            new Shared\CommerceItemOption(
                id: 'cd95e23e-471b-4ff0-acb1-18c383f7ae09',
                name: 'Color',
                position: 1,
                values: [
                    'purple',
                ],
            ),
            new Shared\CommerceItemOption(
                id: '359771ef-24e3-4112-a5b5-c350fafa8965',
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
        publicDescription: 'New teal Gloves with ergonomic design for favorite comfort',
        publicName: 'Table',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-1-05-109555-9',
        tags: [
            'labore',
        ],
        totalStock: 436,
        updatedAt: Utils\Utils::parseDateTime('2026-04-10T21:16:24.885Z'),
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
            address1: '688 Kristen Groves',
            city: 'South Addisontown',
            countryCode: 'US',
            postalCode: '92019',
            region: 'Ohio',
            regionCode: 'UT',
        ),
        categories: [],
        createdAt: Utils\Utils::parseDateTime('2022-12-29T04:15:21.195Z'),
        currency: 'WST',
        description: 'Vulgaris cruciamentum hic numquam tutamen.',
        id: 'a4d2cc13-3093-48bf-b7cd-3745d4aefcbf',
        imageUrl: 'https://picsum.photos/seed/3ZlSMHUYq/1895/67',
        isActive: false,
        languageLocale: 'cibus',
        latitude: 0,
        locationType: Shared\LocationType::Restaurant,
        longitude: 0,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Amoveo cinis demulceo tutamen.',
                height: 283,
                id: '4fd6db2d-1df8-4ee2-984a-e59ae18f99cd',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'eabed6ff-6323-48d9-9ec1-7cfbadc164be',
                        slug: 'taedium',
                        value: 'censura',
                    ),
                ],
                position: 40,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/TV610q/478/3686',
                width: 1,
            ),
        ],
        metadata: [],
        name: 'Christiansen and Sons',
        priceLevel: '',
        rating: 0,
        reviewCount: 0,
        telephones: [
            new Shared\CommerceTelephone(
                telephone: '(301) 236-0742',
                type: Shared\CommerceTelephoneType::Other,
            ),
            new Shared\CommerceTelephone(
                telephone: '(545) 455-1236',
                type: Shared\CommerceTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-05-03T11:23:44.466Z'),
        webUrl: 'https://formal-declaration.info/',
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
        guestEmail: 'alford.schiller@icloud.com',
        guestName: 'Alford Schiller',
        guestPhone: '(849) 626-2062',
        id: 'f30eee45-ac23-4f15-a247-fd37d4812010',
        metadata: [],
        notes: 'Despecto stultus calculus.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-11T22:31:34.578Z'),
        url: 'https://wee-tuba.biz/',
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
        authorAvatarUrl: 'https://picsum.photos/seed/jt3vcEZv/1605/7',
        authorEmail: 'jovan.bartell@hotmail.com',
        authorLocation: 'comburo',
        authorName: 'Jovan Bartell',
        comments: [],
        content: 'Vix taedium thymum adipiscor amicitia.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: 'efc5057b-8a57-4169-92d8-b82fc43debe9',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Teneo.',
                height: 749,
                id: 'a793a5b8-9791-4675-8c04-edf4028da74c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '5f2c7b73-69ec-49df-bcd8-d201fcb9d64e',
                        slug: 'numquam',
                        value: 'bos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/jNDix4Br/995/2602',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Ratione vulticulus arbitro ultio pauci.',
                height: 957,
                id: '521d3523-ef07-464a-b16f-90c67ed725c2',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '507485c2-ec56-4b2e-9fe8-b4e51d07fb33',
                        slug: 'timidus',
                        value: 'sol',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/b35MixS23/1004/1925',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Auxilium.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-21T02:03:10.749Z'),
        url: 'https://whispered-hawk.name',
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
        description: 'Solus speciosus caveo aegrus.',
        id: '38f3b3e8-0319-48b1-b363-a2a0936c0426',
        isActive: false,
        metadata: [],
        slug: 'dapifer-utroque-denuncio',
        updatedAt: Utils\Utils::parseDateTime('2025-02-20T20:20:34.663Z'),
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
        description: 'Ward - Hudson\'s most advanced Computer technology increases graceful capabilities',
        id: '168637d7-c6be-481f-9817-76e0e291837f',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Armarium amiculum amet defendo.',
                height: 759,
                id: 'f07d12a6-d94b-43c2-95f2-97a6ad6fda25',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0dbb375e-75da-498e-b9e9-9ec940b54a94',
                        slug: 'cernuus',
                        value: 'torrens',
                    ),
                ],
                position: 80,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/62m4msPNw/3209/1074',
                width: 40,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                id: '17270aa6-fdc4-49cb-a78d-e50384f13e95',
                slug: 'velit',
                value: 'aureus',
            ),
        ],
        name: 'Rustic Gold Mouse',
        publicDescription: 'Introducing the Sint Maarten-inspired Gloves, blending awful style with local craftsmanship',
        publicName: 'Rustic Gold Mouse',
        tags: [
            'viridis',
            'deserunt',
            'comparo',
        ],
        type: Shared\CommerceCollectionType::Collection,
        updatedAt: Utils\Utils::parseDateTime('2025-04-02T22:47:41.527Z'),
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
        id: '74d1c36b-348f-4ed2-90b4-88f538e09fa9',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-12-20T05:34:06.819Z'),
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
        description: 'Abeo surculus custodia ventus solio.',
        duration: 104,
        globalCode: '978-0-85270-680-0',
        id: 'd0e15975-cc55-4ee9-ba8b-b69674bc393a',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Eveniet acies.',
                height: 876,
                id: '0caa6fcb-33a1-444e-9dc3-79c2d746202c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '23b8c8c4-2ac3-4fee-bd10-4ea787c4eac0',
                        slug: 'candidus',
                        value: 'doloremque',
                    ),
                ],
                position: 21,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/uzyKI/235/2194',
                width: 67,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 651,
                id: '70ff155f-9171-463d-8343-fba8af3d82a8',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'b1c888d4-ac3e-44d4-8393-30383b9e4d9a',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 51,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/NFAo4iatfO/383/771',
                width: 3,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '39c1368c-2357-4f6a-b1fe-88c8f9c6f3bf',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'abstergo',
            ),
        ],
        name: 'Oriental Gold Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 78.11,
            ),
        ],
        publicDescription: 'Adfero neque.',
        publicName: 'Oriental Gold Tuna',
        requiresShipping: true,
        slug: 'oriental-gold-tuna',
        tags: [
            'dolores',
            'amplus',
        ],
        totalStock: 682,
        type: 'SERVICE',
        updatedAt: Utils\Utils::parseDateTime('2022-05-03T18:33:07.147Z'),
        vendorName: 'Rohan - Pouros',
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
        description: 'Our dog-friendly Bacon ensures pessimistic comfort for your pets',
        height: 54,
        id: '259b83a5-8cbe-4fa2-b1c7-dd6dd90dc515',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 961,
                id: 'ab94f24e-4fca-4159-8e8a-74f8b94ee78e',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '24abfab6-958e-4165-b075-3fd31e0dd655',
                        slug: 'illo',
                        value: 'quia',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/u0YdHqlRu/3208/3394',
                width: 35,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '01c22b3c-1403-46b8-b7e8-63b8779d365e',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'colligo',
            ),
        ],
        name: 'Table',
        options: [
            new Shared\CommerceItemOption(
                id: '488e0522-04b2-41f0-b93b-8033f7254564',
                name: 'Color',
                position: 1,
                values: [
                    'purple',
                ],
            ),
            new Shared\CommerceItemOption(
                id: 'f6d25987-e1ba-4eec-b41e-d03b14ee86bd',
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
        publicDescription: 'New teal Gloves with ergonomic design for favorite comfort',
        publicName: 'Table',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-1-05-109555-9',
        tags: [
            'labore',
        ],
        totalStock: 436,
        updatedAt: Utils\Utils::parseDateTime('2026-04-10T21:16:24.914Z'),
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
            address1: '688 Kristen Groves',
            city: 'South Addisontown',
            countryCode: 'US',
            postalCode: '92019',
            region: 'Ohio',
            regionCode: 'UT',
        ),
        categories: [],
        createdAt: Utils\Utils::parseDateTime('2022-12-29T04:15:21.195Z'),
        currency: 'WST',
        description: 'Vulgaris cruciamentum hic numquam tutamen.',
        id: 'bfc3bcb2-d2e5-46c3-ae1c-3131cdb94579',
        imageUrl: 'https://picsum.photos/seed/3ZlSMHUYq/1895/67',
        isActive: false,
        languageLocale: 'cibus',
        latitude: 0,
        locationType: Shared\LocationType::Restaurant,
        longitude: 0,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Amoveo cinis demulceo tutamen.',
                height: 283,
                id: '98f064ae-10be-4bb0-928b-d730c8cdcf09',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '73d645aa-eb7e-443f-97dc-e77174d472d4',
                        slug: 'taedium',
                        value: 'censura',
                    ),
                ],
                position: 40,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/TV610q/478/3686',
                width: 1,
            ),
        ],
        metadata: [],
        name: 'Christiansen and Sons',
        priceLevel: '',
        rating: 0,
        reviewCount: 0,
        telephones: [
            new Shared\CommerceTelephone(
                telephone: '(301) 236-0742',
                type: Shared\CommerceTelephoneType::Other,
            ),
            new Shared\CommerceTelephone(
                telephone: '(545) 455-1236',
                type: Shared\CommerceTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-05-03T11:23:44.479Z'),
        webUrl: 'https://formal-declaration.info/',
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
        guestEmail: 'alford.schiller@icloud.com',
        guestName: 'Alford Schiller',
        guestPhone: '(849) 626-2062',
        id: '86b8d51f-b2ed-4a9b-b39f-b54173b81821',
        metadata: [],
        notes: 'Despecto stultus calculus.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-11T22:31:34.580Z'),
        url: 'https://wee-tuba.biz/',
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
        authorAvatarUrl: 'https://picsum.photos/seed/jt3vcEZv/1605/7',
        authorEmail: 'jovan.bartell@hotmail.com',
        authorLocation: 'comburo',
        authorName: 'Jovan Bartell',
        comments: [],
        content: 'Vix taedium thymum adipiscor amicitia.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: '5bc3d9f3-7677-44af-8637-bd6d2da16e19',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Teneo.',
                height: 749,
                id: '38761b3d-c979-4b05-821a-0803eb58c979',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'e12b7349-d3f8-4bec-a98d-33508c22c2e1',
                        slug: 'numquam',
                        value: 'bos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/jNDix4Br/995/2602',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Ratione vulticulus arbitro ultio pauci.',
                height: 957,
                id: 'bdbeebe8-18ef-4727-86a4-9ccda1d0cfcf',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '9aad3ebf-1f6a-46c9-97e0-e5b74a7549bd',
                        slug: 'timidus',
                        value: 'sol',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/b35MixS23/1004/1925',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Auxilium.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-21T02:03:10.782Z'),
        url: 'https://whispered-hawk.name',
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
        description: 'Solus speciosus caveo aegrus.',
        id: '8e22ae3f-179e-4a75-9454-57ca0f2c0b9c',
        isActive: false,
        metadata: [],
        slug: 'dapifer-utroque-denuncio',
        updatedAt: Utils\Utils::parseDateTime('2025-02-20T20:20:34.677Z'),
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
        description: 'Ward - Hudson\'s most advanced Computer technology increases graceful capabilities',
        id: '168637d7-c6be-481f-9817-76e0e291837f',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Armarium amiculum amet defendo.',
                height: 759,
                id: 'f07d12a6-d94b-43c2-95f2-97a6ad6fda25',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0dbb375e-75da-498e-b9e9-9ec940b54a94',
                        slug: 'cernuus',
                        value: 'torrens',
                    ),
                ],
                position: 80,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/62m4msPNw/3209/1074',
                width: 40,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                id: '17270aa6-fdc4-49cb-a78d-e50384f13e95',
                slug: 'velit',
                value: 'aureus',
            ),
        ],
        name: 'Rustic Gold Mouse',
        publicDescription: 'Introducing the Sint Maarten-inspired Gloves, blending awful style with local craftsmanship',
        publicName: 'Rustic Gold Mouse',
        tags: [
            'viridis',
            'deserunt',
            'comparo',
        ],
        type: Shared\CommerceCollectionType::Collection,
        updatedAt: Utils\Utils::parseDateTime('2025-04-02T22:47:41.527Z'),
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
        id: '74d1c36b-348f-4ed2-90b4-88f538e09fa9',
        metadata: [],
        updatedAt: Utils\Utils::parseDateTime('2025-12-20T05:34:06.819Z'),
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
        description: 'Abeo surculus custodia ventus solio.',
        duration: 104,
        globalCode: '978-0-85270-680-0',
        id: 'd0e15975-cc55-4ee9-ba8b-b69674bc393a',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Eveniet acies.',
                height: 876,
                id: '0caa6fcb-33a1-444e-9dc3-79c2d746202c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '23b8c8c4-2ac3-4fee-bd10-4ea787c4eac0',
                        slug: 'candidus',
                        value: 'doloremque',
                    ),
                ],
                position: 21,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/uzyKI/235/2194',
                width: 67,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Comedo.',
                height: 651,
                id: '70ff155f-9171-463d-8343-fba8af3d82a8',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'b1c888d4-ac3e-44d4-8393-30383b9e4d9a',
                        slug: 'bis',
                        value: 'somniculosus',
                    ),
                ],
                position: 51,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/NFAo4iatfO/383/771',
                width: 3,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '39c1368c-2357-4f6a-b1fe-88c8f9c6f3bf',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'abstergo',
            ),
        ],
        name: 'Oriental Gold Tuna',
        prices: [
            new Shared\CommerceItemPrice(
                currency: 'USD',
                price: 78.11,
            ),
        ],
        publicDescription: 'Adfero neque.',
        publicName: 'Oriental Gold Tuna',
        requiresShipping: true,
        slug: 'oriental-gold-tuna',
        tags: [
            'dolores',
            'amplus',
        ],
        totalStock: 682,
        type: 'SERVICE',
        updatedAt: Utils\Utils::parseDateTime('2022-05-03T18:33:07.147Z'),
        vendorName: 'Rohan - Pouros',
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
        description: 'Our dog-friendly Bacon ensures pessimistic comfort for your pets',
        height: 54,
        id: '259b83a5-8cbe-4fa2-b1c7-dd6dd90dc515',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        length: 92,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 961,
                id: 'ab94f24e-4fca-4159-8e8a-74f8b94ee78e',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '24abfab6-958e-4165-b075-3fd31e0dd655',
                        slug: 'illo',
                        value: 'quia',
                    ),
                ],
                position: 72,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/u0YdHqlRu/3208/3394',
                width: 35,
            ),
        ],
        metadata: [
            new Shared\CommerceMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CommerceMetadataFormat::Text,
                id: '01c22b3c-1403-46b8-b7e8-63b8779d365e',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'colligo',
            ),
        ],
        name: 'Table',
        options: [
            new Shared\CommerceItemOption(
                id: '488e0522-04b2-41f0-b93b-8033f7254564',
                name: 'Color',
                position: 1,
                values: [
                    'purple',
                ],
            ),
            new Shared\CommerceItemOption(
                id: 'f6d25987-e1ba-4eec-b41e-d03b14ee86bd',
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
        publicDescription: 'New teal Gloves with ergonomic design for favorite comfort',
        publicName: 'Table',
        requiresShipping: false,
        sizeUnit: Shared\SizeUnit::Cm,
        sku: '978-1-05-109555-9',
        tags: [
            'labore',
        ],
        totalStock: 436,
        updatedAt: Utils\Utils::parseDateTime('2026-04-10T21:16:24.914Z'),
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
            address1: '688 Kristen Groves',
            city: 'South Addisontown',
            countryCode: 'US',
            postalCode: '92019',
            region: 'Ohio',
            regionCode: 'UT',
        ),
        categories: [],
        createdAt: Utils\Utils::parseDateTime('2022-12-29T04:15:21.195Z'),
        currency: 'WST',
        description: 'Vulgaris cruciamentum hic numquam tutamen.',
        id: 'bfc3bcb2-d2e5-46c3-ae1c-3131cdb94579',
        imageUrl: 'https://picsum.photos/seed/3ZlSMHUYq/1895/67',
        isActive: false,
        languageLocale: 'cibus',
        latitude: 0,
        locationType: Shared\LocationType::Restaurant,
        longitude: 0,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Amoveo cinis demulceo tutamen.',
                height: 283,
                id: '98f064ae-10be-4bb0-928b-d730c8cdcf09',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '73d645aa-eb7e-443f-97dc-e77174d472d4',
                        slug: 'taedium',
                        value: 'censura',
                    ),
                ],
                position: 40,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/TV610q/478/3686',
                width: 1,
            ),
        ],
        metadata: [],
        name: 'Christiansen and Sons',
        priceLevel: '',
        rating: 0,
        reviewCount: 0,
        telephones: [
            new Shared\CommerceTelephone(
                telephone: '(301) 236-0742',
                type: Shared\CommerceTelephoneType::Other,
            ),
            new Shared\CommerceTelephone(
                telephone: '(545) 455-1236',
                type: Shared\CommerceTelephoneType::Mobile,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-05-03T11:23:44.479Z'),
        webUrl: 'https://formal-declaration.info/',
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
        guestEmail: 'alford.schiller@icloud.com',
        guestName: 'Alford Schiller',
        guestPhone: '(849) 626-2062',
        id: '86b8d51f-b2ed-4a9b-b39f-b54173b81821',
        metadata: [],
        notes: 'Despecto stultus calculus.',
        size: 10,
        startAt: Utils\Utils::parseDateTime('2021-12-18T00:40:25.125Z'),
        status: Shared\CommerceReservationStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-01-11T22:31:34.580Z'),
        url: 'https://wee-tuba.biz/',
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
        authorAvatarUrl: 'https://picsum.photos/seed/jt3vcEZv/1605/7',
        authorEmail: 'jovan.bartell@hotmail.com',
        authorLocation: 'comburo',
        authorName: 'Jovan Bartell',
        comments: [],
        content: 'Vix taedium thymum adipiscor amicitia.',
        createdAt: Utils\Utils::parseDateTime('2019-12-12T18:10:22.988Z'),
        helpfulVotes: 66,
        id: '5bc3d9f3-7677-44af-8637-bd6d2da16e19',
        isFeatured: false,
        isPublic: true,
        isVerified: false,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Teneo.',
                height: 749,
                id: '38761b3d-c979-4b05-821a-0803eb58c979',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'e12b7349-d3f8-4bec-a98d-33508c22c2e1',
                        slug: 'numquam',
                        value: 'bos',
                    ),
                ],
                position: 29,
                type: Shared\CommerceItemMediaType::Video,
                url: 'https://picsum.photos/seed/jNDix4Br/995/2602',
                width: 72,
            ),
            new Shared\CommerceItemMedia(
                alt: 'Ratione vulticulus arbitro ultio pauci.',
                height: 957,
                id: 'bdbeebe8-18ef-4727-86a4-9ccda1d0cfcf',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '9aad3ebf-1f6a-46c9-97e0-e5b74a7549bd',
                        slug: 'timidus',
                        value: 'sol',
                    ),
                ],
                position: 69,
                type: Shared\CommerceItemMediaType::Image,
                url: 'https://picsum.photos/seed/b35MixS23/1004/1925',
                width: 61,
            ),
        ],
        metadata: [],
        rating: 3,
        status: Shared\CommerceReviewStatus::Approved,
        title: 'Auxilium.',
        unhelpfulVotes: 88,
        updatedAt: Utils\Utils::parseDateTime('2025-09-21T02:03:10.782Z'),
        url: 'https://whispered-hawk.name',
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
        description: 'Solus speciosus caveo aegrus.',
        id: '8e22ae3f-179e-4a75-9454-57ca0f2c0b9c',
        isActive: false,
        metadata: [],
        slug: 'dapifer-utroque-denuncio',
        updatedAt: Utils\Utils::parseDateTime('2025-02-20T20:20:34.677Z'),
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