# Cashflow

## Overview

### Available Operations

* [getAccountingCashflow2](#getaccountingcashflow2) - Retrieve a cashflow
* [listAccountingCashflows2](#listaccountingcashflows2) - List all cashflows

## getAccountingCashflow2

Retrieve a cashflow

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingCashflow2" method="get" path="/accounting/{connection_id}/cashflow/{id}" -->
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

$request = new Operations\GetAccountingCashflow2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->cashflow->getAccountingCashflow2(
    request: $request
);

if ($response->accountingCashflow !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetAccountingCashflow2Request](../../Models/Operations/GetAccountingCashflow2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetAccountingCashflow2Response](../../Models/Operations/GetAccountingCashflow2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingCashflows2

List all cashflows

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingCashflows2" method="get" path="/accounting/{connection_id}/cashflow" -->
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

$request = new Operations\ListAccountingCashflows2Request(
    connectionId: '<id>',
);

$response = $sdk->cashflow->listAccountingCashflows2(
    request: $request
);

if ($response->accountingCashflows !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListAccountingCashflows2Request](../../Models/Operations/ListAccountingCashflows2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListAccountingCashflows2Response](../../Models/Operations/ListAccountingCashflows2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |