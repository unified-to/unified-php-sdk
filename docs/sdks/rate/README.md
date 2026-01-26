# Rate

## Overview

### Available Operations

* [createShippingRate](#createshippingrate) - Create a rate

## createShippingRate

Create a rate

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingRate" method="post" path="/shipping/{connection_id}/rate" -->
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

$request = new Operations\CreateShippingRateRequest(
    shippingRate: new Shared\ShippingRate(),
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