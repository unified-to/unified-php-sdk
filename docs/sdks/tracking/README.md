# Tracking

## Overview

### Available Operations

* [getShippingTracking2](#getshippingtracking2) - Retrieve a tracking
* [listShippingTrackings2](#listshippingtrackings2) - List all trackings

## getShippingTracking2

Retrieve a tracking

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingTracking2" method="get" path="/shipping/{connection_id}/tracking/{id}" -->
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

$request = new Operations\GetShippingTracking2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->tracking->getShippingTracking2(
    request: $request
);

if ($response->shippingTracking !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetShippingTracking2Request](../../Models/Operations/GetShippingTracking2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetShippingTracking2Response](../../Models/Operations/GetShippingTracking2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingTrackings2

List all trackings

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingTrackings2" method="get" path="/shipping/{connection_id}/tracking" -->
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

$request = new Operations\ListShippingTrackings2Request(
    connectionId: '<id>',
);

$response = $sdk->tracking->listShippingTrackings2(
    request: $request
);

if ($response->shippingTrackings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListShippingTrackings2Request](../../Models/Operations/ListShippingTrackings2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListShippingTrackings2Response](../../Models/Operations/ListShippingTrackings2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |