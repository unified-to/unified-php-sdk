# Collection

## Overview

### Available Operations

* [createCommerceCollection](#createcommercecollection) - Create a collection
* [createLmsCollection](#createlmscollection) - Create a collection
* [getCommerceCollection](#getcommercecollection) - Retrieve a collection
* [getLmsCollection](#getlmscollection) - Retrieve a collection
* [listCommerceCollections](#listcommercecollections) - List all collections
* [listLmsCollections](#listlmscollections) - List all collections
* [patchCommerceCollection](#patchcommercecollection) - Update a collection
* [patchLmsCollection](#patchlmscollection) - Update a collection
* [removeCommerceCollection](#removecommercecollection) - Remove a collection
* [removeLmsCollection](#removelmscollection) - Remove a collection
* [updateCommerceCollection](#updatecommercecollection) - Update a collection
* [updateLmsCollection](#updatelmscollection) - Update a collection

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
        id: 'f9e3c616-e815-43eb-9fd9-1cf1a0d99611',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '896645e6-7f76-4693-97ef-ef0922654bd1',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'c50d5932-8ac6-4fd5-84de-6a931d702b1f',
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
                id: '93667f20-c0aa-42ad-aa84-cb6dda001310',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-11T21:38:33.902Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->collection->createCommerceCollection(
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

## createLmsCollection

Create a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="createLmsCollection" method="post" path="/lms/{connection_id}/collection" example="lms_collection" -->
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

$request = new Operations\CreateLmsCollectionRequest(
    lmsCollection: new Shared\LmsCollection(
        createdAt: Utils\Utils::parseDateTime('2019-08-19T14:40:29.227Z'),
        description: 'Ab.',
        id: '5f6d3ed5-f627-4c07-81a2-e7e71509c15b',
        isActive: true,
        media: [
            new Shared\LmsMedia(
                content: 'Accusamus earum sulum libero adficio testimonium vitae. Calcar contra vergo curis sollers. Caste brevis denuo. Tam amita ducimus capillus. Vulgaris temporibus arbustum solium id. Suppono commodo fuga surculus tripudio doloribus.',
                description: 'Aliquam tardus careo hic umbra.',
                languages: [
                    'gl',
                ],
                name: 'thymum',
                thumbnailUrl: 'https://picsum.photos/seed/15O5EfV/2982/752',
                type: Shared\LmsMediaType::Headshot,
                url: 'https://loremflickr.com/2679/70?lock=6078357625960554',
            ),
        ],
        name: 'ara',
        updatedAt: Utils\Utils::parseDateTime('2026-07-24T07:32:51.420Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->collection->createLmsCollection(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateLmsCollectionRequest](../../Models/Operations/CreateLmsCollectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateLmsCollectionResponse](../../Models/Operations/CreateLmsCollectionResponse.md)**

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

$response = $sdk->collection->getCommerceCollection(
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

## getLmsCollection

Retrieve a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="getLmsCollection" method="get" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\GetLmsCollectionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->getLmsCollection(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetLmsCollectionRequest](../../Models/Operations/GetLmsCollectionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetLmsCollectionResponse](../../Models/Operations/GetLmsCollectionResponse.md)**

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

$response = $sdk->collection->listCommerceCollections(
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

## listLmsCollections

List all collections

### Example Usage

<!-- UsageSnippet language="php" operationID="listLmsCollections" method="get" path="/lms/{connection_id}/collection" -->
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

$request = new Operations\ListLmsCollectionsRequest(
    connectionId: '<id>',
);

$response = $sdk->collection->listLmsCollections(
    request: $request
);

if ($response->lmsCollections !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListLmsCollectionsRequest](../../Models/Operations/ListLmsCollectionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListLmsCollectionsResponse](../../Models/Operations/ListLmsCollectionsResponse.md)**

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
        id: 'd6013f5b-1c45-4239-ae11-d5b049d2a171',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: 'b26208fb-fe94-42bd-92a9-c76437e5f358',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'e260a01c-f637-4d3d-97bc-1411fdb4c0c6',
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
                id: 'c9e56995-c094-43a1-ae64-0f6b42cd9e50',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-11T21:38:33.912Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->patchCommerceCollection(
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

## patchLmsCollection

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLmsCollection" method="patch" path="/lms/{connection_id}/collection/{id}" example="lms_collection" -->
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

$request = new Operations\PatchLmsCollectionRequest(
    lmsCollection: new Shared\LmsCollection(
        createdAt: Utils\Utils::parseDateTime('2019-08-19T14:40:29.227Z'),
        description: 'Ab.',
        id: '853e86a9-b61b-4c9a-99a6-27987f4d0388',
        isActive: true,
        media: [
            new Shared\LmsMedia(
                content: 'Accusamus earum sulum libero adficio testimonium vitae. Calcar contra vergo curis sollers. Caste brevis denuo. Tam amita ducimus capillus. Vulgaris temporibus arbustum solium id. Suppono commodo fuga surculus tripudio doloribus.',
                description: 'Aliquam tardus careo hic umbra.',
                languages: [
                    'gl',
                ],
                name: 'thymum',
                thumbnailUrl: 'https://picsum.photos/seed/15O5EfV/2982/752',
                type: Shared\LmsMediaType::Headshot,
                url: 'https://loremflickr.com/2679/70?lock=6078357625960554',
            ),
        ],
        name: 'ara',
        updatedAt: Utils\Utils::parseDateTime('2026-07-24T07:32:51.429Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->patchLmsCollection(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchLmsCollectionRequest](../../Models/Operations/PatchLmsCollectionRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchLmsCollectionResponse](../../Models/Operations/PatchLmsCollectionResponse.md)**

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

$response = $sdk->collection->removeCommerceCollection(
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

## removeLmsCollection

Remove a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLmsCollection" method="delete" path="/lms/{connection_id}/collection/{id}" -->
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

$request = new Operations\RemoveLmsCollectionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->removeLmsCollection(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveLmsCollectionRequest](../../Models/Operations/RemoveLmsCollectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveLmsCollectionResponse](../../Models/Operations/RemoveLmsCollectionResponse.md)**

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
        id: 'd6013f5b-1c45-4239-ae11-d5b049d2a171',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: 'b26208fb-fe94-42bd-92a9-c76437e5f358',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'e260a01c-f637-4d3d-97bc-1411fdb4c0c6',
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
                id: 'c9e56995-c094-43a1-ae64-0f6b42cd9e50',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-11T21:38:33.912Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->updateCommerceCollection(
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

## updateLmsCollection

Update a collection

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLmsCollection" method="put" path="/lms/{connection_id}/collection/{id}" example="lms_collection" -->
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

$request = new Operations\UpdateLmsCollectionRequest(
    lmsCollection: new Shared\LmsCollection(
        createdAt: Utils\Utils::parseDateTime('2019-08-19T14:40:29.227Z'),
        description: 'Ab.',
        id: '853e86a9-b61b-4c9a-99a6-27987f4d0388',
        isActive: true,
        media: [
            new Shared\LmsMedia(
                content: 'Accusamus earum sulum libero adficio testimonium vitae. Calcar contra vergo curis sollers. Caste brevis denuo. Tam amita ducimus capillus. Vulgaris temporibus arbustum solium id. Suppono commodo fuga surculus tripudio doloribus.',
                description: 'Aliquam tardus careo hic umbra.',
                languages: [
                    'gl',
                ],
                name: 'thymum',
                thumbnailUrl: 'https://picsum.photos/seed/15O5EfV/2982/752',
                type: Shared\LmsMediaType::Headshot,
                url: 'https://loremflickr.com/2679/70?lock=6078357625960554',
            ),
        ],
        name: 'ara',
        updatedAt: Utils\Utils::parseDateTime('2026-07-24T07:32:51.429Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->collection->updateLmsCollection(
    request: $request
);

if ($response->lmsCollection !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateLmsCollectionRequest](../../Models/Operations/UpdateLmsCollectionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateLmsCollectionResponse](../../Models/Operations/UpdateLmsCollectionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |