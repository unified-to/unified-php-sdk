# Itemvariant

## Overview

### Available Operations

* [createCommerceItemvariant](#createcommerceitemvariant) - Create an itemvariant
* [getCommerceItemvariant](#getcommerceitemvariant) - Retrieve an itemvariant
* [listCommerceItemvariants](#listcommerceitemvariants) - List all itemvariants
* [patchCommerceItemvariant](#patchcommerceitemvariant) - Update an itemvariant
* [removeCommerceItemvariant](#removecommerceitemvariant) - Remove an itemvariant
* [updateCommerceItemvariant](#updatecommerceitemvariant) - Update an itemvariant

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

$response = $sdk->itemvariant->createCommerceItemvariant(
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

$response = $sdk->itemvariant->getCommerceItemvariant(
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

$response = $sdk->itemvariant->listCommerceItemvariants(
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

$response = $sdk->itemvariant->patchCommerceItemvariant(
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

$response = $sdk->itemvariant->removeCommerceItemvariant(
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

$response = $sdk->itemvariant->updateCommerceItemvariant(
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