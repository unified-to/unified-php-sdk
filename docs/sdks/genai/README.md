# Genai
(*genai*)

## Overview

### Available Operations

* [createGenaiPrompt](#creategenaiprompt) - Create a prompt
* [listGenaiModels](#listgenaimodels) - List all models

## createGenaiPrompt

Create a prompt

### Example Usage

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

$response = $sdk->genai->createGenaiPrompt(
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

## listGenaiModels

List all models

### Example Usage

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

$request = new Operations\ListGenaiModelsRequest(
    connectionId: '<id>',
);

$response = $sdk->genai->listGenaiModels(
    request: $request
);

if ($response->genaiModels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListGenaiModelsRequest](../../Models/Operations/ListGenaiModelsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListGenaiModelsResponse](../../Models/Operations/ListGenaiModelsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |