# Model

## Overview

### Available Operations

* [getGenaiModel2](#getgenaimodel2) - Retrieve a model
* [listGenaiModels2](#listgenaimodels2) - List all models

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

$response = $sdk->model->getGenaiModel2(
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

$response = $sdk->model->listGenaiModels2(
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