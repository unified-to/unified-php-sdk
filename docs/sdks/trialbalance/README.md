# Trialbalance

## Overview

### Available Operations

* [getAccountingTrialbalance2](#getaccountingtrialbalance2) - Retrieve a trialbalance
* [listAccountingTrialbalances2](#listaccountingtrialbalances2) - List all trialbalances

## getAccountingTrialbalance2

Retrieve a trialbalance

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingTrialbalance2" method="get" path="/accounting/{connection_id}/trialbalance/{id}" -->
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

$request = new Operations\GetAccountingTrialbalance2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->trialbalance->getAccountingTrialbalance2(
    request: $request
);

if ($response->accountingTrialbalance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GetAccountingTrialbalance2Request](../../Models/Operations/GetAccountingTrialbalance2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\GetAccountingTrialbalance2Response](../../Models/Operations/GetAccountingTrialbalance2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingTrialbalances2

List all trialbalances

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingTrialbalances2" method="get" path="/accounting/{connection_id}/trialbalance" -->
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

$request = new Operations\ListAccountingTrialbalances2Request(
    connectionId: '<id>',
);

$response = $sdk->trialbalance->listAccountingTrialbalances2(
    request: $request
);

if ($response->accountingTrialbalances !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\ListAccountingTrialbalances2Request](../../Models/Operations/ListAccountingTrialbalances2Request.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\ListAccountingTrialbalances2Response](../../Models/Operations/ListAccountingTrialbalances2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |