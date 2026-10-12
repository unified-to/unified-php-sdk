# Region

## Overview

### Available Operations

* [getComputeRegion](#getcomputeregion) - Retrieve a region
* [listComputeRegions](#listcomputeregions) - List all regions

## getComputeRegion

Retrieve a region

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeRegion" method="get" path="/compute/{connection_id}/region/{id}" -->
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

$request = new Operations\GetComputeRegionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->region->getComputeRegion(
    request: $request
);

if ($response->computeRegion !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetComputeRegionRequest](../../Models/Operations/GetComputeRegionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetComputeRegionResponse](../../Models/Operations/GetComputeRegionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeRegions

List all regions

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeRegions" method="get" path="/compute/{connection_id}/region" -->
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

$request = new Operations\ListComputeRegionsRequest(
    connectionId: '<id>',
);

$response = $sdk->region->listComputeRegions(
    request: $request
);

if ($response->computeRegions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListComputeRegionsRequest](../../Models/Operations/ListComputeRegionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListComputeRegionsResponse](../../Models/Operations/ListComputeRegionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |