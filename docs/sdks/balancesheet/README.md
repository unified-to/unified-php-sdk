# Balancesheet

## Overview

### Available Operations

* [getAccountingBalancesheet2](#getaccountingbalancesheet2) - Retrieve a balancesheet
* [listAccountingBalancesheets2](#listaccountingbalancesheets2) - List all balancesheets

## getAccountingBalancesheet2

Retrieve a balancesheet

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingBalancesheet2" method="get" path="/accounting/{connection_id}/balancesheet/{id}" -->
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

$request = new Operations\GetAccountingBalancesheet2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->balancesheet->getAccountingBalancesheet2(
    request: $request
);

if ($response->accountingBalancesheet !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GetAccountingBalancesheet2Request](../../Models/Operations/GetAccountingBalancesheet2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\GetAccountingBalancesheet2Response](../../Models/Operations/GetAccountingBalancesheet2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingBalancesheets2

List all balancesheets

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingBalancesheets2" method="get" path="/accounting/{connection_id}/balancesheet" -->
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

$request = new Operations\ListAccountingBalancesheets2Request(
    connectionId: '<id>',
);

$response = $sdk->balancesheet->listAccountingBalancesheets2(
    request: $request
);

if ($response->accountingBalancesheets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\ListAccountingBalancesheets2Request](../../Models/Operations/ListAccountingBalancesheets2Request.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\ListAccountingBalancesheets2Response](../../Models/Operations/ListAccountingBalancesheets2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |