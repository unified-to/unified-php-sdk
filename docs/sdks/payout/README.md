# Payout

## Overview

### Available Operations

* [getPaymentPayout2](#getpaymentpayout2) - Retrieve a payout
* [listPaymentPayouts2](#listpaymentpayouts2) - List all payouts

## getPaymentPayout2

Retrieve a payout

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentPayout2" method="get" path="/payment/{connection_id}/payout/{id}" -->
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

$request = new Operations\GetPaymentPayout2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payout->getPaymentPayout2(
    request: $request
);

if ($response->paymentPayout !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPaymentPayout2Request](../../Models/Operations/GetPaymentPayout2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetPaymentPayout2Response](../../Models/Operations/GetPaymentPayout2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentPayouts2

List all payouts

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentPayouts2" method="get" path="/payment/{connection_id}/payout" -->
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

$request = new Operations\ListPaymentPayouts2Request(
    connectionId: '<id>',
);

$response = $sdk->payout->listPaymentPayouts2(
    request: $request
);

if ($response->paymentPayouts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListPaymentPayouts2Request](../../Models/Operations/ListPaymentPayouts2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListPaymentPayouts2Response](../../Models/Operations/ListPaymentPayouts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |