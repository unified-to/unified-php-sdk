# Embedding

## Overview

### Available Operations

* [createGenaiEmbedding](#creategenaiembedding) - Create an embedding

## createGenaiEmbedding

Create an embedding

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiEmbedding" method="post" path="/genai/{connection_id}/embedding" -->
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
    genaiEmbedding: new Shared\GenaiEmbedding(),
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