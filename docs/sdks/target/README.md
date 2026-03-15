# Target

## Overview

### Available Operations

* [listAdsTargets](#listadstargets) - List all targets

## listAdsTargets

List all targets

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsTargets" method="get" path="/ads/{connection_id}/target" -->
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

$request = new Operations\ListAdsTargetsRequest(
    connectionId: '<id>',
);

$response = $sdk->target->listAdsTargets(
    request: $request
);

if ($response->adsTargets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListAdsTargetsRequest](../../Models/Operations/ListAdsTargetsRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListAdsTargetsResponse](../../Models/Operations/ListAdsTargetsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |