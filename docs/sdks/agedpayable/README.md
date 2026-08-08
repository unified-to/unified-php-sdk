# Agedpayable

## Overview

### Available Operations

* [getAccountingAgedpayable](#getaccountingagedpayable) - Retrieve an agedpayable
* [listAccountingAgedpayables](#listaccountingagedpayables) - List all agedpayables

## getAccountingAgedpayable

Retrieve an agedpayable

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingAgedpayable" method="get" path="/accounting/{connection_id}/agedpayable/{id}" -->
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

$request = new Operations\GetAccountingAgedpayableRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->agedpayable->getAccountingAgedpayable(
    request: $request
);

if ($response->accountingAgedpayable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingAgedpayableRequest](../../Models/Operations/GetAccountingAgedpayableRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingAgedpayableResponse](../../Models/Operations/GetAccountingAgedpayableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingAgedpayables

List all agedpayables

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingAgedpayables" method="get" path="/accounting/{connection_id}/agedpayable" -->
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

$request = new Operations\ListAccountingAgedpayablesRequest(
    connectionId: '<id>',
);

$response = $sdk->agedpayable->listAccountingAgedpayables(
    request: $request
);

if ($response->accountingAgedpayables !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingAgedpayablesRequest](../../Models/Operations/ListAccountingAgedpayablesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingAgedpayablesResponse](../../Models/Operations/ListAccountingAgedpayablesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |