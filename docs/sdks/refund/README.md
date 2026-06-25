# Refund

## Overview

### Available Operations

* [getPaymentRefund2](#getpaymentrefund2) - Retrieve a refund
* [listPaymentRefunds2](#listpaymentrefunds2) - List all refunds

## getPaymentRefund2

Retrieve a refund

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentRefund2" method="get" path="/payment/{connection_id}/refund/{id}" -->
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

$request = new Operations\GetPaymentRefund2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->refund->getPaymentRefund2(
    request: $request
);

if ($response->paymentRefund !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPaymentRefund2Request](../../Models/Operations/GetPaymentRefund2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetPaymentRefund2Response](../../Models/Operations/GetPaymentRefund2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentRefunds2

List all refunds

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentRefunds2" method="get" path="/payment/{connection_id}/refund" -->
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

$request = new Operations\ListPaymentRefunds2Request(
    connectionId: '<id>',
);

$response = $sdk->refund->listPaymentRefunds2(
    request: $request
);

if ($response->paymentRefunds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListPaymentRefunds2Request](../../Models/Operations/ListPaymentRefunds2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListPaymentRefunds2Response](../../Models/Operations/ListPaymentRefunds2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |