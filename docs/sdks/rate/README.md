# Rate

## Overview

### Available Operations

* [createShippingRate](#createshippingrate) - Create a rate

## createShippingRate

Creates a ShippingRate. Provide the unified ShippingRate fields in the request body; they are mapped to the provider's API. Returns the created ShippingRate.

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingRate" method="post" path="/shipping/{connection_id}/rate" example="shipping_rate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateShippingRateRequest(
    shippingRate: new Shared\ShippingRate(
        currency: 'USD',
        id: '41a2e786-7ab7-4de2-a9d3-72a1dc956cf8',
        metadata: [],
        rates: [
            new Shared\ShippingRateRate(
                amount: 44.72,
                baseAmount: 46.01,
                currency: 'USD',
                deliveryDays: 2,
                description: 'Veniam denego vulgo bos turpis pax.',
                discountAmount: 4.6,
                estimatedDays: 2,
                estimatedDeliveryEndAt: Utils\Utils::parseDateTime('2021-09-03T01:03:36.021Z'),
                isNegotiatedRate: true,
                taxAmount: 3.31,
                title: 'Express',
            ),
        ],
    ),
    connectionId: '<id>',
);

$response = $sdk->rate->createShippingRate(
    request: $request
);

if ($response->shippingRate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateShippingRateRequest](../../Models/Operations/CreateShippingRateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateShippingRateResponse](../../Models/Operations/CreateShippingRateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |