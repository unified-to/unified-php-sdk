# Payroll

## Overview

### Available Operations

* [getHrisPayroll](#gethrispayroll) - Retrieve a payroll
* [listHrisPayrolls](#listhrispayrolls) - List all payrolls

## getHrisPayroll

Retrieve a payroll

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisPayroll" method="get" path="/hris/{connection_id}/payroll/{id}" -->
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

$request = new Operations\GetHrisPayrollRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payroll->getHrisPayroll(
    request: $request
);

if ($response->hrisPayroll !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisPayrollRequest](../../Models/Operations/GetHrisPayrollRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisPayrollResponse](../../Models/Operations/GetHrisPayrollResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisPayrolls

List all payrolls

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisPayrolls" method="get" path="/hris/{connection_id}/payroll" -->
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

$request = new Operations\ListHrisPayrollsRequest(
    connectionId: '<id>',
);

$response = $sdk->payroll->listHrisPayrolls(
    request: $request
);

if ($response->hrisPayrolls !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisPayrollsRequest](../../Models/Operations/ListHrisPayrollsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisPayrollsResponse](../../Models/Operations/ListHrisPayrollsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |