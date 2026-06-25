# Carrier

## Overview

### Available Operations

* [getShippingCarrier2](#getshippingcarrier2) - Retrieve a carrier
* [listShippingCarriers2](#listshippingcarriers2) - List all carriers

## getShippingCarrier2

Retrieve a carrier

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingCarrier2" method="get" path="/shipping/{connection_id}/carrier/{id}" -->
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

$request = new Operations\GetShippingCarrier2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->carrier->getShippingCarrier2(
    request: $request
);

if ($response->shippingCarrier !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetShippingCarrier2Request](../../Models/Operations/GetShippingCarrier2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetShippingCarrier2Response](../../Models/Operations/GetShippingCarrier2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingCarriers2

List all carriers

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingCarriers2" method="get" path="/shipping/{connection_id}/carrier" -->
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

$request = new Operations\ListShippingCarriers2Request(
    connectionId: '<id>',
);

$response = $sdk->carrier->listShippingCarriers2(
    request: $request
);

if ($response->shippingCarriers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListShippingCarriers2Request](../../Models/Operations/ListShippingCarriers2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListShippingCarriers2Response](../../Models/Operations/ListShippingCarriers2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |