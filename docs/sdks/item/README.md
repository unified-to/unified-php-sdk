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
        id: '485e95b6-9182-4379-b7ed-149668173dda',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Eveniet acies.',
                height: 876,
                id: '3e1e3003-13f6-43c5-b3c5-778cfb4e2159',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'a92f3df2-5e3c-49cc-b6a2-cf4d1e4cfb22',
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
                id: 'a502d95f-b05d-4975-a0c9-13a7d5a96752',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'e39afeaf-fed0-4ee2-9de6-13484705281c',
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
                id: '1331e3be-0135-45aa-9a9e-138c358f4607',
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
        updatedAt: Utils\Utils::parseDateTime('2022-05-03T08:44:44.722Z'),
        vendorName: 'Rohan - Pouros',
        weight: 37,
        weightUnit: Shared\WeightUnit::Oz,
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
        id: 'fbabad7c-7686-4d72-972e-59cca979f8c3',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Eveniet acies.',
                height: 876,
                id: 'f80364a7-96ed-4509-bbd8-8f2e50f5cdd7',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '5f3c5e61-aeb1-40c2-806a-d97cf8920605',
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
                id: 'b5e0fb56-a36e-4f39-9cc3-64aa13427d64',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '8170e0b4-a108-4a68-ab09-042035ed91b2',
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
                id: '40cac5df-7a08-4319-90ce-a4f06f3c8093',
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
        updatedAt: Utils\Utils::parseDateTime('2022-05-03T08:44:44.734Z'),
        vendorName: 'Rohan - Pouros',
        weight: 37,
        weightUnit: Shared\WeightUnit::Oz,
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
        id: 'fbabad7c-7686-4d72-972e-59cca979f8c3',
        isActive: false,
        isFeatured: false,
        isTaxable: true,
        isVisible: true,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Eveniet acies.',
                height: 876,
                id: 'f80364a7-96ed-4509-bbd8-8f2e50f5cdd7',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '5f3c5e61-aeb1-40c2-806a-d97cf8920605',
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
                id: 'b5e0fb56-a36e-4f39-9cc3-64aa13427d64',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '8170e0b4-a108-4a68-ab09-042035ed91b2',
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
                id: '40cac5df-7a08-4319-90ce-a4f06f3c8093',
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
        updatedAt: Utils\Utils::parseDateTime('2022-05-03T08:44:44.734Z'),
        vendorName: 'Rohan - Pouros',
        weight: 37,
        weightUnit: Shared\WeightUnit::Oz,
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