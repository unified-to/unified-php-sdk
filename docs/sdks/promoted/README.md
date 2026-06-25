# Promoted

## Overview

### Available Operations

* [getAdsPromoted2](#getadspromoted2) - Retrieve a promoted
* [listAdsPromoteds2](#listadspromoteds2) - List all promoteds

## getAdsPromoted2

Retrieve a promoted

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsPromoted2" method="get" path="/ads/{connection_id}/promoted/{id}" -->
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

$request = new Operations\GetAdsPromoted2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->promoted->getAdsPromoted2(
    request: $request
);

if ($response->adsPromoted !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAdsPromoted2Request](../../Models/Operations/GetAdsPromoted2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAdsPromoted2Response](../../Models/Operations/GetAdsPromoted2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsPromoteds2

List all promoteds

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsPromoteds2" method="get" path="/ads/{connection_id}/promoted" -->
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

$request = new Operations\ListAdsPromoteds2Request(
    connectionId: '<id>',
);

$response = $sdk->promoted->listAdsPromoteds2(
    request: $request
);

if ($response->adsPromoteds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAdsPromoteds2Request](../../Models/Operations/ListAdsPromoteds2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAdsPromoteds2Response](../../Models/Operations/ListAdsPromoteds2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |