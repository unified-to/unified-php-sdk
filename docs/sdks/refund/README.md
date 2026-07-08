# Refund

## Overview

### Available Operations

* [getPaymentRefund](#getpaymentrefund) - Retrieve a refund
* [listPaymentRefunds](#listpaymentrefunds) - List all refunds

## getPaymentRefund

Retrieve a refund

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentRefund" method="get" path="/payment/{connection_id}/refund/{id}" -->
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

$request = new Operations\GetPaymentRefundRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->refund->getPaymentRefund(
    request: $request
);

if ($response->paymentRefund !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetPaymentRefundRequest](../../Models/Operations/GetPaymentRefundRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetPaymentRefundResponse](../../Models/Operations/GetPaymentRefundResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentRefunds

List all refunds

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentRefunds" method="get" path="/payment/{connection_id}/refund" -->
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

$request = new Operations\ListPaymentRefundsRequest(
    connectionId: '<id>',
);

$response = $sdk->refund->listPaymentRefunds(
    request: $request
);

if ($response->paymentRefunds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListPaymentRefundsRequest](../../Models/Operations/ListPaymentRefundsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListPaymentRefundsResponse](../../Models/Operations/ListPaymentRefundsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |