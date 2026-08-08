# Agedreceivable

## Overview

### Available Operations

* [getAccountingAgedreceivable](#getaccountingagedreceivable) - Retrieve an agedreceivable
* [listAccountingAgedreceivables](#listaccountingagedreceivables) - List all agedreceivables

## getAccountingAgedreceivable

Retrieve an agedreceivable

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingAgedreceivable" method="get" path="/accounting/{connection_id}/agedreceivable/{id}" -->
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

$request = new Operations\GetAccountingAgedreceivableRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->agedreceivable->getAccountingAgedreceivable(
    request: $request
);

if ($response->accountingAgedreceivable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\GetAccountingAgedreceivableRequest](../../Models/Operations/GetAccountingAgedreceivableRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\GetAccountingAgedreceivableResponse](../../Models/Operations/GetAccountingAgedreceivableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingAgedreceivables

List all agedreceivables

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingAgedreceivables" method="get" path="/accounting/{connection_id}/agedreceivable" -->
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

$request = new Operations\ListAccountingAgedreceivablesRequest(
    connectionId: '<id>',
);

$response = $sdk->agedreceivable->listAccountingAgedreceivables(
    request: $request
);

if ($response->accountingAgedreceivables !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\ListAccountingAgedreceivablesRequest](../../Models/Operations/ListAccountingAgedreceivablesRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\ListAccountingAgedreceivablesResponse](../../Models/Operations/ListAccountingAgedreceivablesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |