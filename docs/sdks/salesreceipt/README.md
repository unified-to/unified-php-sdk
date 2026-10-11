# Salesreceipt

## Overview

### Available Operations

* [getAccountingSalesreceipt](#getaccountingsalesreceipt) - Retrieve a salesreceipt
* [listAccountingSalesreceipts](#listaccountingsalesreceipts) - List all salesreceipts

## getAccountingSalesreceipt

Retrieve a salesreceipt

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingSalesreceipt" method="get" path="/accounting/{connection_id}/salesreceipt/{id}" -->
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

$request = new Operations\GetAccountingSalesreceiptRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesreceipt->getAccountingSalesreceipt(
    request: $request
);

if ($response->accountingSalesreceipt !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingSalesreceiptRequest](../../Models/Operations/GetAccountingSalesreceiptRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingSalesreceiptResponse](../../Models/Operations/GetAccountingSalesreceiptResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingSalesreceipts

List all salesreceipts

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingSalesreceipts" method="get" path="/accounting/{connection_id}/salesreceipt" -->
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

$request = new Operations\ListAccountingSalesreceiptsRequest(
    connectionId: '<id>',
);

$response = $sdk->salesreceipt->listAccountingSalesreceipts(
    request: $request
);

if ($response->accountingSalesreceipts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingSalesreceiptsRequest](../../Models/Operations/ListAccountingSalesreceiptsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingSalesreceiptsResponse](../../Models/Operations/ListAccountingSalesreceiptsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |