# Promoted

## Overview

### Available Operations

* [getAdsPromoted](#getadspromoted) - Retrieve a promoted
* [listAdsPromoteds](#listadspromoteds) - List all promoteds

## getAdsPromoted

Retrieve a promoted

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsPromoted" method="get" path="/ads/{connection_id}/promoted/{id}" -->
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

$request = new Operations\GetAdsPromotedRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->promoted->getAdsPromoted(
    request: $request
);

if ($response->adsPromoted !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAdsPromotedRequest](../../Models/Operations/GetAdsPromotedRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAdsPromotedResponse](../../Models/Operations/GetAdsPromotedResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsPromoteds

List all promoteds

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsPromoteds" method="get" path="/ads/{connection_id}/promoted" -->
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

$request = new Operations\ListAdsPromotedsRequest(
    connectionId: '<id>',
);

$response = $sdk->promoted->listAdsPromoteds(
    request: $request
);

if ($response->adsPromoteds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAdsPromotedsRequest](../../Models/Operations/ListAdsPromotedsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAdsPromotedsResponse](../../Models/Operations/ListAdsPromotedsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |