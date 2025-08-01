# Prompt
(*prompt*)

## Overview

### Available Operations

* [createGenaiPrompt](#creategenaiprompt) - Create a prompt

## createGenaiPrompt

Create a prompt

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiPrompt" method="post" path="/genai/{connection_id}/prompt" -->
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

$request = new Operations\CreateGenaiPromptRequest(
    genaiPrompt: new Shared\GenaiPrompt(),
    connectionId: '<id>',
);

$response = $sdk->prompt->createGenaiPrompt(
    request: $request
);

if ($response->genaiPrompt !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateGenaiPromptRequest](../../Models/Operations/CreateGenaiPromptRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateGenaiPromptResponse](../../Models/Operations/CreateGenaiPromptResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |