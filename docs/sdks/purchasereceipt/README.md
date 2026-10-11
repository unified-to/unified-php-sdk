# Purchasereceipt

## Overview

### Available Operations

* [getAccountingPurchasereceipt](#getaccountingpurchasereceipt) - Retrieve a purchasereceipt
* [listAccountingPurchasereceipts](#listaccountingpurchasereceipts) - List all purchasereceipts

## getAccountingPurchasereceipt

Retrieve a purchasereceipt

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingPurchasereceipt" method="get" path="/accounting/{connection_id}/purchasereceipt/{id}" -->
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

$request = new Operations\GetAccountingPurchasereceiptRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchasereceipt->getAccountingPurchasereceipt(
    request: $request
);

if ($response->accountingPurchasereceipt !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\GetAccountingPurchasereceiptRequest](../../Models/Operations/GetAccountingPurchasereceiptRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\GetAccountingPurchasereceiptResponse](../../Models/Operations/GetAccountingPurchasereceiptResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingPurchasereceipts

List all purchasereceipts

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingPurchasereceipts" method="get" path="/accounting/{connection_id}/purchasereceipt" -->
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

$request = new Operations\ListAccountingPurchasereceiptsRequest(
    connectionId: '<id>',
);

$response = $sdk->purchasereceipt->listAccountingPurchasereceipts(
    request: $request
);

if ($response->accountingPurchasereceipts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\ListAccountingPurchasereceiptsRequest](../../Models/Operations/ListAccountingPurchasereceiptsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\ListAccountingPurchasereceiptsResponse](../../Models/Operations/ListAccountingPurchasereceiptsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |