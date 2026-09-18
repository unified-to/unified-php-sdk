# Genai

## Overview

### Available Operations

* [createGenaiEmbedding](#creategenaiembedding) - Create an embedding
* [createGenaiPrompt](#creategenaiprompt) - Create a prompt
* [getGenaiModel](#getgenaimodel) - Retrieve a model
* [listGenaiModels](#listgenaimodels) - List all models

## createGenaiEmbedding

Create an embedding

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
        id: '9435e70a-3100-423d-86bf-5b616cf6c2e8',
        maxTokens: 223,
        tokensUsed: 836,
        type: 'classification',
    ),
    connectionId: '<id>',
);

$response = $sdk->genai->createGenaiEmbedding(
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

## createGenaiPrompt

Create a prompt

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiPrompt" method="post" path="/genai/{connection_id}/prompt" example="genai_prompt" -->
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
    genaiPrompt: new Shared\GenaiPrompt(
        maxTokens: 0.4677782787475735,
        mcpAuthorizationToken: 'f45a6e93-7bed-49b4-a5c8-37a2ed2d58f4',
        mcpDeferredTools: [],
        mcpUrl: 'https://unsung-dusk.info/',
        messages: [
            new Shared\GenaiContent(
                content: 'Aegre repudiandae verecundia facere statua.',
                role: Shared\Role::Assistant,
            ),
            new Shared\GenaiContent(
                content: 'Speciosus xiphias soleo trepide crinis.',
                role: Shared\Role::System,
            ),
        ],
        responses: [
            'Balbus vobis circumvenio una.',
        ],
        temperature: 0,
        tokensUsed: 975,
    ),
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

## getGenaiModel

Retrieve a model

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiModel" method="get" path="/genai/{connection_id}/model/{id}" -->
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

$request = new Operations\GetGenaiModelRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->getGenaiModel(
    request: $request
);

if ($response->genaiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetGenaiModelRequest](../../Models/Operations/GetGenaiModelRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetGenaiModelResponse](../../Models/Operations/GetGenaiModelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiModels

List all models

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiModels" method="get" path="/genai/{connection_id}/model" -->
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