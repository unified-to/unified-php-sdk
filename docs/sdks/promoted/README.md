# Promoted

## Overview

### Available Operations

* [listAdsPromotedes](#listadspromotedes) - List all promotedes

## listAdsPromotedes

List all promotedes

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsPromotedes" method="get" path="/ads/{connection_id}/promoted" -->
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

$request = new Operations\ListAdsPromotedesRequest(
    connectionId: '<id>',
);

$response = $sdk->promoted->listAdsPromotedes(
    request: $request
);

if ($response->adsPromotedes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAdsPromotedesRequest](../../Models/Operations/ListAdsPromotedesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAdsPromotedesResponse](../../Models/Operations/ListAdsPromotedesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |