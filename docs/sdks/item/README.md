# Item

## Overview

### Available Operations

* [createCommerceItem](#createcommerceitem) - Create an item
* [getCommerceItem](#getcommerceitem) - Retrieve an item
* [listCommerceItems](#listcommerceitems) - List all items
* [patchCommerceItem](#patchcommerceitem) - Update an item
* [removeCommerceItem](#removecommerceitem) - Remove an item
* [updateCommerceItem](#updatecommerceitem) - Update an item

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
        id: '2ced1c9f-ea7a-43e7-9782-bbc044971de6',
        isActive: false,
        isFeatured: true,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 663,
                id: 'bed940a2-a2c9-454a-8e44-69200c6e3e9c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '7ba951e2-b4f0-49a0-a4ca-7f5ade2f0b71',
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
                id: 'a149690c-6550-498e-a311-14585720bc85',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0e06f1e2-715b-4b17-9a5e-4b8f2cd8ab8c',
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
                id: '643e1d80-5db7-4206-8d2f-c37ca431e5a0',
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
        updatedAt: Utils\Utils::parseDateTime('2022-04-17T12:34:09.617Z'),
        vendorName: 'Mayer - Flatley',
        weight: 22,
        weightUnit: Shared\WeightUnit::Kg,
    ),
    connectionId: '<id>',
);

$response = $sdk->item->createCommerceItem(
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

$response = $sdk->item->getCommerceItem(
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

$response = $sdk->item->listCommerceItems(
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
        id: '8bc796cc-ddee-4cb9-bd76-99fb8a3371ce',
        isActive: false,
        isFeatured: true,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 663,
                id: '5bd4418f-1412-47be-ad89-6fbb136aa5f0',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '2a957115-2d92-47a4-9794-f69ab94044e0',
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
                id: 'e5d33be6-1a30-4092-9235-623277a08650',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'c469c97a-170d-4ba1-b12c-5637a8e7a19f',
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
                id: '2eed0374-b275-46e9-a9d3-5b14261d4a91',
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
        updatedAt: Utils\Utils::parseDateTime('2022-04-17T12:34:09.633Z'),
        vendorName: 'Mayer - Flatley',
        weight: 22,
        weightUnit: Shared\WeightUnit::Kg,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->item->patchCommerceItem(
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

$response = $sdk->item->removeCommerceItem(
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
        id: '8bc796cc-ddee-4cb9-bd76-99fb8a3371ce',
        isActive: false,
        isFeatured: true,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Caterva eveniet acies candidus.',
                height: 663,
                id: '5bd4418f-1412-47be-ad89-6fbb136aa5f0',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '2a957115-2d92-47a4-9794-f69ab94044e0',
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
                id: 'e5d33be6-1a30-4092-9235-623277a08650',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'c469c97a-170d-4ba1-b12c-5637a8e7a19f',
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
                id: '2eed0374-b275-46e9-a9d3-5b14261d4a91',
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
        updatedAt: Utils\Utils::parseDateTime('2022-04-17T12:34:09.633Z'),
        vendorName: 'Mayer - Flatley',
        weight: 22,
        weightUnit: Shared\WeightUnit::Kg,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->item->updateCommerceItem(
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