# Embedding

## Overview

### Available Operations

* [createGenaiEmbedding](#creategenaiembedding) - Create an embedding

## createGenaiEmbedding

Creates a GenaiEmbedding. Provide the unified GenaiEmbedding fields in the request body; they are mapped to the provider's API. Returns the created GenaiEmbedding.

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiEmbedding" method="post" path="/genai/{connection_id}/embedding" example="genai_embedding" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateGenaiEmbeddingRequest(
    genaiEmbedding: new Shared\GenaiEmbedding(
        content: [
            new Shared\GenaiEmbeddingContent(
                text: 'Utrimque temptatio pecco demulceo.',
            ),
        ],
        dimension: 423,
        embeddings: 'Est.',
        encondingFormat: Shared\EncondingFormat::Float,
        id: 'a5509e34-f741-437e-83af-caf6f077e3f3',
        maxTokens: 223,
        tokensUsed: 836,
        type: 'classification',
    ),
    connectionId: '<id>',
);

$response = $sdk->embedding->createGenaiEmbedding(
    request: $request
);

if ($response->genaiEmbedding !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateGenaiEmbeddingRequest](../../Models/Operations/CreateGenaiEmbeddingRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateGenaiEmbeddingResponse](../../Models/Operations/CreateGenaiEmbeddingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |