# Cashflow

## Overview

### Available Operations

* [getAccountingCashflow](#getaccountingcashflow) - Retrieve a cashflow
* [listAccountingCashflows](#listaccountingcashflows) - List all cashflows

## getAccountingCashflow

Retrieve a cashflow

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingCashflow" method="get" path="/accounting/{connection_id}/cashflow/{id}" -->
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

$request = new Operations\GetAccountingCashflowRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cashflow->getAccountingCashflow(
    request: $request
);

if ($response->accountingCashflow !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingCashflowRequest](../../Models/Operations/GetAccountingCashflowRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingCashflowResponse](../../Models/Operations/GetAccountingCashflowResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingCashflows

List all cashflows

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingCashflows" method="get" path="/accounting/{connection_id}/cashflow" -->
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

$request = new Operations\ListAccountingCashflowsRequest(
    connectionId: '<id>',
);

$response = $sdk->cashflow->listAccountingCashflows(
    request: $request
);

if ($response->accountingCashflows !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAccountingCashflowsRequest](../../Models/Operations/ListAccountingCashflowsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAccountingCashflowsResponse](../../Models/Operations/ListAccountingCashflowsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |