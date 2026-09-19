# Rate

## Overview

### Available Operations

* [createShippingRate](#createshippingrate) - Create a rate

## createShippingRate

Create a rate

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
        id: '37fe285b-ba46-40d9-87f2-629d387be8d9',
        rates: [
            new Shared\ShippingRateRate(
                amount: 54.679719475097954,
                baseAmount: 76.45537888631225,
                currency: 'USD',
                deliveryDays: 8,
                description: 'Bos turpis pax amet dolorem sufficio demonstro complectus benevolentia rerum.',
                estimatedDays: 10,
                estimatedDeliveryEndAt: Utils\Utils::parseDateTime('2024-02-01T11:04:18.432Z'),
                isGuaranteed: true,
                isNegotiatedRate: true,
                taxAmount: 2.2701712837442756,
                title: 'Turcotte Inc',
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