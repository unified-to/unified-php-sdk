# Gputype

## Overview

### Available Operations

* [getComputeGputype](#getcomputegputype) - Retrieve a gputype
* [listComputeGputypes](#listcomputegputypes) - List all gputypes

## getComputeGputype

Retrieve a gputype

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeGputype" method="get" path="/compute/{connection_id}/gputype/{id}" -->
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

$request = new Operations\GetComputeGputypeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->gputype->getComputeGputype(
    request: $request
);

if ($response->computeGputype !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetComputeGputypeRequest](../../Models/Operations/GetComputeGputypeRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetComputeGputypeResponse](../../Models/Operations/GetComputeGputypeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeGputypes

List all gputypes

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeGputypes" method="get" path="/compute/{connection_id}/gputype" -->
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

$request = new Operations\ListComputeGputypesRequest(
    connectionId: '<id>',
);

$response = $sdk->gputype->listComputeGputypes(
    request: $request
);

if ($response->computeGputypes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListComputeGputypesRequest](../../Models/Operations/ListComputeGputypesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListComputeGputypesResponse](../../Models/Operations/ListComputeGputypesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |