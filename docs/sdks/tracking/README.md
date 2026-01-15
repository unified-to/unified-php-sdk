# Tracking

## Overview

### Available Operations

* [createShippingTracking](#createshippingtracking) - Create a tracking
* [getShippingTracking](#getshippingtracking) - Retrieve a tracking
* [listShippingTrackings](#listshippingtrackings) - List all trackings

## createShippingTracking

Create a tracking

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingTracking" method="post" path="/shipping/{connection_id}/tracking" -->
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

$request = new Operations\CreateShippingTrackingRequest(
    shippingTracking: new Shared\ShippingTracking(),
    connectionId: '<id>',
);

$response = $sdk->tracking->createShippingTracking(
    request: $request
);

if ($response->shippingTracking !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateShippingTrackingRequest](../../Models/Operations/CreateShippingTrackingRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateShippingTrackingResponse](../../Models/Operations/CreateShippingTrackingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getShippingTracking

Retrieve a tracking

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingTracking" method="get" path="/shipping/{connection_id}/tracking/{id}" -->
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

$request = new Operations\GetShippingTrackingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->tracking->getShippingTracking(
    request: $request
);

if ($response->shippingTracking !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetShippingTrackingRequest](../../Models/Operations/GetShippingTrackingRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetShippingTrackingResponse](../../Models/Operations/GetShippingTrackingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingTrackings

List all trackings

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingTrackings" method="get" path="/shipping/{connection_id}/tracking" -->
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

$request = new Operations\ListShippingTrackingsRequest(
    connectionId: '<id>',
);

$response = $sdk->tracking->listShippingTrackings(
    request: $request
);

if ($response->shippingTrackings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListShippingTrackingsRequest](../../Models/Operations/ListShippingTrackingsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListShippingTrackingsResponse](../../Models/Operations/ListShippingTrackingsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |