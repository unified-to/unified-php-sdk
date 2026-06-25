# Genai

## Overview

### Available Operations

* [createGenaiEmbedding2](#creategenaiembedding2) - Create an embedding
* [createGenaiPrompt2](#creategenaiprompt2) - Create a prompt
* [getGenaiModel2](#getgenaimodel2) - Retrieve a model
* [listGenaiModels2](#listgenaimodels2) - List all models

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

$response = $sdk->genai->createGenaiEmbedding2(
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

$response = $sdk->genai->createGenaiPrompt2(
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

## getGenaiModel2

Retrieve a model

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiModel2" method="get" path="/genai/{connection_id}/model/{id}" -->
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

$request = new Operations\GetGenaiModel2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->genai->getGenaiModel2(
    request: $request
);

if ($response->genaiModel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetGenaiModel2Request](../../Models/Operations/GetGenaiModel2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetGenaiModel2Response](../../Models/Operations/GetGenaiModel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiModels2

List all models

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiModels2" method="get" path="/genai/{connection_id}/model" -->
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

$request = new Operations\ListGenaiModels2Request(
    connectionId: '<id>',
);

$response = $sdk->genai->listGenaiModels2(
    request: $request
);

if ($response->genaiModels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListGenaiModels2Request](../../Models/Operations/ListGenaiModels2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListGenaiModels2Response](../../Models/Operations/ListGenaiModels2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |