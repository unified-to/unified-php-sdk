# Report

## Overview

### Available Operations

* [getAccountingReport](#getaccountingreport) - Retrieve a report
* [listAccountingReports](#listaccountingreports) - List all reports

## getAccountingReport

Retrieve a report

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingReport" method="get" path="/accounting/{connection_id}/report/{id}" -->
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

$request = new Operations\GetAccountingReportRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->report->getAccountingReport(
    request: $request
);

if ($response->accountingReport !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetAccountingReportRequest](../../Models/Operations/GetAccountingReportRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetAccountingReportResponse](../../Models/Operations/GetAccountingReportResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingReports

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingReports" method="get" path="/accounting/{connection_id}/report" -->
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

$request = new Operations\ListAccountingReportsRequest(
    connectionId: '<id>',
);

$response = $sdk->report->listAccountingReports(
    request: $request
);

if ($response->accountingReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListAccountingReportsRequest](../../Models/Operations/ListAccountingReportsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListAccountingReportsResponse](../../Models/Operations/ListAccountingReportsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |