# Model
(*model*)

## Overview

### Available Operations

* [getGenaiModel](#getgenaimodel) - Retrieve a model
* [listGenaiModels](#listgenaimodels) - List all models

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

$response = $sdk->model->getGenaiModel(
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

$response = $sdk->model->listGenaiModels(
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