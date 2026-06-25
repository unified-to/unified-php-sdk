# Pipeline

## Overview

### Available Operations

* [createCrmPipeline2](#createcrmpipeline2) - Create a pipeline
* [getCrmPipeline2](#getcrmpipeline2) - Retrieve a pipeline
* [listCrmPipelines2](#listcrmpipelines2) - List all pipelines
* [patchCrmPipeline2](#patchcrmpipeline2) - Update a pipeline
* [removeCrmPipeline2](#removecrmpipeline2) - Remove a pipeline
* [updateCrmPipeline2](#updatecrmpipeline2) - Update a pipeline

## createCrmPipeline2

Create a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmPipeline2" method="post" path="/crm/{connection_id}/pipeline" -->
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

$request = new Operations\CreateCrmPipeline2Request(
    crmPipeline: new Shared\CrmPipeline(),
    connectionId: '<id>',
);

$response = $sdk->pipeline->createCrmPipeline2(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateCrmPipeline2Request](../../Models/Operations/CreateCrmPipeline2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateCrmPipeline2Response](../../Models/Operations/CreateCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmPipeline2

Retrieve a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmPipeline2" method="get" path="/crm/{connection_id}/pipeline/{id}" -->
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

$request = new Operations\GetCrmPipeline2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pipeline->getCrmPipeline2(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetCrmPipeline2Request](../../Models/Operations/GetCrmPipeline2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetCrmPipeline2Response](../../Models/Operations/GetCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmPipelines2

List all pipelines

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmPipelines2" method="get" path="/crm/{connection_id}/pipeline" -->
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

$request = new Operations\ListCrmPipelines2Request(
    connectionId: '<id>',
);

$response = $sdk->pipeline->listCrmPipelines2(
    request: $request
);

if ($response->crmPipelines !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCrmPipelines2Request](../../Models/Operations/ListCrmPipelines2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCrmPipelines2Response](../../Models/Operations/ListCrmPipelines2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmPipeline2

Update a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmPipeline2" method="patch" path="/crm/{connection_id}/pipeline/{id}" -->
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

$request = new Operations\PatchCrmPipeline2Request(
    crmPipeline: new Shared\CrmPipeline(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pipeline->patchCrmPipeline2(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchCrmPipeline2Request](../../Models/Operations/PatchCrmPipeline2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchCrmPipeline2Response](../../Models/Operations/PatchCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmPipeline2

Remove a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmPipeline2" method="delete" path="/crm/{connection_id}/pipeline/{id}" -->
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

$request = new Operations\RemoveCrmPipeline2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pipeline->removeCrmPipeline2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveCrmPipeline2Request](../../Models/Operations/RemoveCrmPipeline2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveCrmPipeline2Response](../../Models/Operations/RemoveCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmPipeline2

Update a pipeline

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmPipeline2" method="put" path="/crm/{connection_id}/pipeline/{id}" -->
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

$request = new Operations\UpdateCrmPipeline2Request(
    crmPipeline: new Shared\CrmPipeline(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->pipeline->updateCrmPipeline2(
    request: $request
);

if ($response->crmPipeline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateCrmPipeline2Request](../../Models/Operations/UpdateCrmPipeline2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateCrmPipeline2Response](../../Models/Operations/UpdateCrmPipeline2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |