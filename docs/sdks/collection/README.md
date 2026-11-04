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
        id: '1755bd52-e5a4-4663-a0e0-89051a35e2a7',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: 'bc867d37-ec20-4c25-9c8b-eec6409c75eb',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: '73cb9fcd-c14c-4fa4-a6a2-61c2625da10b',
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
                id: '5446117b-669b-482c-8636-8e1c1749c4c2',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-22T03:42:59.699Z'),
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

Creates a LmsCollection. Provide the unified LmsCollection fields in the request body; they are mapped to the provider's API. Returns the created LmsCollection.

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
        id: 'a8931058-b502-4d71-a440-481587825d6c',
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
        metadata: [],
        name: 'ara',
        updatedAt: Utils\Utils::parseDateTime('2026-08-12T18:21:21.878Z'),
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

Retrieves a single LmsCollection by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of LmsCollections. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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
        id: 'e67669a7-86c9-43d1-af32-8f87c0e9e344',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '3f144b31-cdaf-433e-90be-4cdef03ed4ed',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'cbe18811-717c-4f52-b60b-2cdc53108ace',
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
                id: '2ecf7e90-f60e-484e-9499-0e9917bc2390',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-22T03:42:59.709Z'),
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

Updates the LmsCollection identified by `id`. Provide the unified LmsCollection fields to change in the request body.

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
        id: '9484f76e-30a0-49dd-83ef-208d57125569',
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
        metadata: [],
        name: 'ara',
        updatedAt: Utils\Utils::parseDateTime('2026-08-12T18:21:21.888Z'),
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

Deletes the LmsCollection identified by `id`.

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
        id: 'e67669a7-86c9-43d1-af32-8f87c0e9e344',
        isActive: true,
        isFeatured: false,
        isVisible: false,
        itemMetadata: [],
        media: [
            new Shared\CommerceItemMedia(
                alt: 'Defungo adopto thorax.',
                height: 759,
                id: '3f144b31-cdaf-433e-90be-4cdef03ed4ed',
                metadata: [
                    new Shared\CommerceMetadata(
                        id: 'cbe18811-717c-4f52-b60b-2cdc53108ace',
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
                id: '2ecf7e90-f60e-484e-9499-0e9917bc2390',
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
        updatedAt: Utils\Utils::parseDateTime('2025-03-22T03:42:59.709Z'),
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

Updates the LmsCollection identified by `id`. Provide the unified LmsCollection fields to change in the request body.

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
        id: '9484f76e-30a0-49dd-83ef-208d57125569',
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
        metadata: [],
        name: 'ara',
        updatedAt: Utils\Utils::parseDateTime('2026-08-12T18:21:21.888Z'),
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