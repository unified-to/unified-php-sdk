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
        id: '596b38e3-eb16-4f93-9d4b-7d3da0ec6580',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '1c72f70a-5098-4b97-88cb-5d619e6878ee',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'f02142e0-29fa-4e83-94a5-c17394aabd70',
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
                id: '13424dcf-42c0-4389-9faa-1fd2c9846606',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'bfe694cb-51e6-40cb-91f3-1a20d65d8302',
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
                id: '0c1e7229-a8ac-4ce9-aa1c-4fc271694705',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: '53b53cf7-7619-4d45-a627-b347b9e5b084',
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
        updatedAt: Utils\Utils::parseDateTime('2025-06-13T09:22:25.174Z'),
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
        id: '42d11ae6-5c61-4d18-b593-c1e1de50b539',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '370c4222-92a0-419e-80b0-c733439275b9',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '7d6edbba-78d1-4f20-9c79-fd078a040ed1',
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
                id: 'e22d9f93-0727-40f7-9c57-a960216cccdb',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'd2b39e90-a163-4c21-9099-cb626af96f87',
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
                id: 'b522b344-5246-4671-8799-51d523381ab5',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: '722af448-dab3-48a1-a785-a9529cd6af05',
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
        updatedAt: Utils\Utils::parseDateTime('2025-06-13T09:22:25.204Z'),
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
        id: '42d11ae6-5c61-4d18-b593-c1e1de50b539',
        isActive: false,
        isFeatured: false,
        isVisible: false,
        length: 94,
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Calcar delibero cursim summisse.',
                height: 394,
                id: '370c4222-92a0-419e-80b0-c733439275b9',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '7d6edbba-78d1-4f20-9c79-fd078a040ed1',
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
                id: 'e22d9f93-0727-40f7-9c57-a960216cccdb',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'd2b39e90-a163-4c21-9099-cb626af96f87',
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
                id: 'b522b344-5246-4671-8799-51d523381ab5',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'nihil',
            ),
        ],
        name: 'Keyboard',
        options: [
            new Shared\CommerceItemOption(
                id: '722af448-dab3-48a1-a785-a9529cd6af05',
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
        updatedAt: Utils\Utils::parseDateTime('2025-06-13T09:22:25.204Z'),
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