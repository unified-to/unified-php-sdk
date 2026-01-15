# Carrier

## Overview

### Available Operations

* [getShippingCarrier](#getshippingcarrier) - Retrieve a carrier
* [listShippingCarriers](#listshippingcarriers) - List all carriers

## getShippingCarrier

Retrieve a carrier

### Example Usage

<!-- UsageSnippet language="php" operationID="getShippingCarrier" method="get" path="/shipping/{connection_id}/carrier/{id}" -->
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

$request = new Operations\GetShippingCarrierRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->carrier->getShippingCarrier(
    request: $request
);

if ($response->shippingCarrier !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetShippingCarrierRequest](../../Models/Operations/GetShippingCarrierRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetShippingCarrierResponse](../../Models/Operations/GetShippingCarrierResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listShippingCarriers

List all carriers

### Example Usage

<!-- UsageSnippet language="php" operationID="listShippingCarriers" method="get" path="/shipping/{connection_id}/carrier" -->
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

$request = new Operations\ListShippingCarriersRequest(
    connectionId: '<id>',
);

$response = $sdk->carrier->listShippingCarriers(
    request: $request
);

if ($response->shippingCarriers !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListShippingCarriersRequest](../../Models/Operations/ListShippingCarriersRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListShippingCarriersResponse](../../Models/Operations/ListShippingCarriersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |