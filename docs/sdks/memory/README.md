# Memory

## Overview

### Available Operations

* [createGenaiMemory](#creategenaimemory) - Create a memory
* [getGenaiMemory](#getgenaimemory) - Retrieve a memory
* [listGenaiMemories](#listgenaimemories) - List all memories
* [patchGenaiMemory](#patchgenaimemory) - Update a memory
* [removeGenaiMemory](#removegenaimemory) - Remove a memory
* [updateGenaiMemory](#updategenaimemory) - Update a memory

## createGenaiMemory

Creates a GenaiMemory. Provide the unified GenaiMemory fields in the request body; they are mapped to the provider's API. Returns the created GenaiMemory.

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiMemory" method="post" path="/genai/{connection_id}/memory" example="genai_memory" -->
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

$request = new Operations\CreateGenaiMemoryRequest(
    genaiMemory: new Shared\GenaiMemory(
        content: 'Spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '3fc977db-8511-4c76-8f98-fa99ce2152d1',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '6d1774f7-a8ad-462d-9ba0-ece333056a26',
                namespace: 'memory',
                slug: 'defleo',
                value: 'suffragium',
            ),
        ],
        name: 'tabella.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-05-06T17:53:56.606Z'),
        userIdentifier: '70613433-847d-4db6-a8ea-96a2d7513dad',
    ),
    connectionId: '<id>',
);

$response = $sdk->memory->createGenaiMemory(
    request: $request
);

if ($response->genaiMemory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateGenaiMemoryRequest](../../Models/Operations/CreateGenaiMemoryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateGenaiMemoryResponse](../../Models/Operations/CreateGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGenaiMemory

Retrieves a single GenaiMemory by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiMemory" method="get" path="/genai/{connection_id}/memory/{id}" -->
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

$request = new Operations\GetGenaiMemoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->memory->getGenaiMemory(
    request: $request
);

if ($response->genaiMemory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetGenaiMemoryRequest](../../Models/Operations/GetGenaiMemoryRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetGenaiMemoryResponse](../../Models/Operations/GetGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiMemories

Returns a list of GenaiMemories. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiMemories" method="get" path="/genai/{connection_id}/memory" -->
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

$request = new Operations\ListGenaiMemoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->memory->listGenaiMemories(
    request: $request
);

if ($response->genaiMemories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListGenaiMemoriesRequest](../../Models/Operations/ListGenaiMemoriesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListGenaiMemoriesResponse](../../Models/Operations/ListGenaiMemoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchGenaiMemory

Updates the GenaiMemory identified by `id`. Provide the unified GenaiMemory fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchGenaiMemory" method="patch" path="/genai/{connection_id}/memory/{id}" example="genai_memory" -->
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

$request = new Operations\PatchGenaiMemoryRequest(
    genaiMemory: new Shared\GenaiMemory(
        content: 'Spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '4467b58f-b6a4-4d49-8c10-3a026fb0d201',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '6d1774f7-a8ad-462d-9ba0-ece333056a26',
                namespace: 'memory',
                slug: 'defleo',
                value: 'suffragium',
            ),
        ],
        name: 'tabella.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-05-06T17:53:56.610Z'),
        userIdentifier: '70613433-847d-4db6-a8ea-96a2d7513dad',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->memory->patchGenaiMemory(
    request: $request
);

if ($response->genaiMemory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchGenaiMemoryRequest](../../Models/Operations/PatchGenaiMemoryRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchGenaiMemoryResponse](../../Models/Operations/PatchGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeGenaiMemory

Deletes the GenaiMemory identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeGenaiMemory" method="delete" path="/genai/{connection_id}/memory/{id}" -->
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

$request = new Operations\RemoveGenaiMemoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->memory->removeGenaiMemory(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveGenaiMemoryRequest](../../Models/Operations/RemoveGenaiMemoryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveGenaiMemoryResponse](../../Models/Operations/RemoveGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateGenaiMemory

Updates the GenaiMemory identified by `id`. Provide the unified GenaiMemory fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateGenaiMemory" method="put" path="/genai/{connection_id}/memory/{id}" example="genai_memory" -->
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

$request = new Operations\UpdateGenaiMemoryRequest(
    genaiMemory: new Shared\GenaiMemory(
        content: 'Spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '4467b58f-b6a4-4d49-8c10-3a026fb0d201',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '6d1774f7-a8ad-462d-9ba0-ece333056a26',
                namespace: 'memory',
                slug: 'defleo',
                value: 'suffragium',
            ),
        ],
        name: 'tabella.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-05-06T17:53:56.610Z'),
        userIdentifier: '70613433-847d-4db6-a8ea-96a2d7513dad',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->memory->updateGenaiMemory(
    request: $request
);

if ($response->genaiMemory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateGenaiMemoryRequest](../../Models/Operations/UpdateGenaiMemoryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateGenaiMemoryResponse](../../Models/Operations/UpdateGenaiMemoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |