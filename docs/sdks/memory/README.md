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

Create a memory

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
        content: 'Tabella rem approbo spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis. Ullus ager degero deporto cicuta vulgivagus.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '88bb3c43-4389-4a83-839c-696b4051536e',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '7a8ad62d-ba0e-4ce3-8330-56a2647b5b3e',
                namespace: 'memory',
                slug: 'cribro',
                value: 'aiunt',
            ),
        ],
        name: 'sponte.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-04-25T21:28:57.374Z'),
        userIdentifier: '9d170613-4338-447d-bdb6-8ea96a2d7513',
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

Retrieve a memory

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

List all memories

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

Update a memory

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
        content: 'Tabella rem approbo spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis. Ullus ager degero deporto cicuta vulgivagus.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '9365b4e5-aab5-4ff3-ba49-ac556dab74c1',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '7a8ad62d-ba0e-4ce3-8330-56a2647b5b3e',
                namespace: 'memory',
                slug: 'cribro',
                value: 'aiunt',
            ),
        ],
        name: 'sponte.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-04-25T21:28:57.376Z'),
        userIdentifier: '9d170613-4338-447d-bdb6-8ea96a2d7513',
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

Remove a memory

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

Update a memory

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
        content: 'Tabella rem approbo spiculum deserunt comitatus despecto. Aveho utroque accedo vinitor repellendus tam curis corona eos vobis. Ullus ager degero deporto cicuta vulgivagus.',
        createdAt: Utils\Utils::parseDateTime('2021-10-22T04:14:41.668Z'),
        id: '9365b4e5-aab5-4ff3-ba49-ac556dab74c1',
        metadata: [
            new Shared\GenaiMetadata(
                extraData: [

                ],
                format: Shared\GenaiMetadataFormat::Text,
                id: '7a8ad62d-ba0e-4ce3-8330-56a2647b5b3e',
                namespace: 'memory',
                slug: 'cribro',
                value: 'aiunt',
            ),
        ],
        name: 'sponte.md',
        type: Shared\GenaiMemoryType::Memory,
        updatedAt: Utils\Utils::parseDateTime('2023-04-25T21:28:57.376Z'),
        userIdentifier: '9d170613-4338-447d-bdb6-8ea96a2d7513',
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