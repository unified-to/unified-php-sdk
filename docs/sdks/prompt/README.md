# Prompt

## Overview

### Available Operations

* [createGenaiPrompt2](#creategenaiprompt2) - Create a prompt

## createGenaiPrompt2

Create a prompt

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiPrompt2" method="post" path="/genai/{connection_id}/prompt" -->
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

$request = new Operations\CreateGenaiPrompt2Request(
    genaiPrompt: new Shared\GenaiPrompt(),
    connectionId: '<id>',
);

$response = $sdk->prompt->createGenaiPrompt2(
    request: $request
);

if ($response->genaiPrompt !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateGenaiPrompt2Request](../../Models/Operations/CreateGenaiPrompt2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateGenaiPrompt2Response](../../Models/Operations/CreateGenaiPrompt2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |