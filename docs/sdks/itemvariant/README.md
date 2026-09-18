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
        id: 'e91bd93d-f42d-411b-94a7-65de6a5266f0',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '0df68d48-9b71-42c0-9969-280f1fdfe13c',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'e7d8e687-46cc-46fd-a40f-6f4bfee0573a',
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
                id: 'b3d97b80-9ce7-451f-84d6-8915c6572400',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0603e178-df79-48f5-bf17-d7407cc55fad',
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
                id: '62d59580-daa5-47f6-be71-16d9a091f88c',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: 'dd40d854-d6df-4abb-85af-484f0f8e438f',
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
        updatedAt: Utils\Utils::parseDateTime('2025-05-24T09:43:44.260Z'),
        weight: 61,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 26,
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
        id: 'fd2b82ff-c6ef-47a1-afd0-6d70bceda470',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '3108e06a-1e96-4c0c-828e-08c3aab51784',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'adb2dd1f-776a-4dd2-ad42-99d0a9fa02cc',
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
                id: 'e61ab1fa-6a83-4092-b44d-6834239c6dc1',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0ec8612f-e417-4ed7-84ee-cfa4e1791828',
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
                id: '56754fab-a4c3-44db-9852-e5d9ce383b99',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: 'f99075f0-3294-4e09-85af-893aa8e611d4',
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
        updatedAt: Utils\Utils::parseDateTime('2025-05-24T09:43:44.303Z'),
        weight: 61,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 26,
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
        id: 'fd2b82ff-c6ef-47a1-afd0-6d70bceda470',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '3108e06a-1e96-4c0c-828e-08c3aab51784',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'adb2dd1f-776a-4dd2-ad42-99d0a9fa02cc',
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
                id: 'e61ab1fa-6a83-4092-b44d-6834239c6dc1',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '0ec8612f-e417-4ed7-84ee-cfa4e1791828',
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
                id: '56754fab-a4c3-44db-9852-e5d9ce383b99',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: 'f99075f0-3294-4e09-85af-893aa8e611d4',
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
        updatedAt: Utils\Utils::parseDateTime('2025-05-24T09:43:44.303Z'),
        weight: 61,
        weightUnit: Shared\CommerceItemvariantWeightUnit::Oz,
        width: 26,
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