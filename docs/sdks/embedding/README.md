# Embedding

## Overview

### Available Operations

* [createGenaiEmbedding2](#creategenaiembedding2) - Create an embedding

## createGenaiEmbedding2

Create an embedding

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiEmbedding2" method="post" path="/genai/{connection_id}/embedding" -->
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

$request = new Operations\CreateGenaiEmbedding2Request(
    genaiEmbedding: new Shared\GenaiEmbedding(),
    connectionId: '<id>',
);

$response = $sdk->embedding->createGenaiEmbedding2(
    request: $request
);

if ($response->genaiEmbedding !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateGenaiEmbedding2Request](../../Models/Operations/CreateGenaiEmbedding2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateGenaiEmbedding2Response](../../Models/Operations/CreateGenaiEmbedding2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |