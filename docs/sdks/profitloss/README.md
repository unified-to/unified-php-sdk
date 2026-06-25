# Profitloss

## Overview

### Available Operations

* [getAccountingProfitloss2](#getaccountingprofitloss2) - Retrieve a profitloss
* [listAccountingProfitlosses2](#listaccountingprofitlosses2) - List all profitlosses

## getAccountingProfitloss2

Retrieve a profitloss

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingProfitloss2" method="get" path="/accounting/{connection_id}/profitloss/{id}" -->
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

$request = new Operations\GetAccountingProfitloss2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->profitloss->getAccountingProfitloss2(
    request: $request
);

if ($response->accountingProfitloss !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingProfitloss2Request](../../Models/Operations/GetAccountingProfitloss2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingProfitloss2Response](../../Models/Operations/GetAccountingProfitloss2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingProfitlosses2

List all profitlosses

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingProfitlosses2" method="get" path="/accounting/{connection_id}/profitloss" -->
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

$request = new Operations\ListAccountingProfitlosses2Request(
    connectionId: '<id>',
);

$response = $sdk->profitloss->listAccountingProfitlosses2(
    request: $request
);

if ($response->accountingProfitlosses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingProfitlosses2Request](../../Models/Operations/ListAccountingProfitlosses2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingProfitlosses2Response](../../Models/Operations/ListAccountingProfitlosses2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |