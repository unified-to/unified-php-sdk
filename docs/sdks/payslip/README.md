# Payslip

## Overview

### Available Operations

* [getHrisPayslip2](#gethrispayslip2) - Retrieve a payslip
* [listHrisPayslips2](#listhrispayslips2) - List all payslips

## getHrisPayslip2

Retrieve a payslip

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisPayslip2" method="get" path="/hris/{connection_id}/payslip/{id}" -->
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

$request = new Operations\GetHrisPayslip2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payslip->getHrisPayslip2(
    request: $request
);

if ($response->hrisPayslip !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisPayslip2Request](../../Models/Operations/GetHrisPayslip2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisPayslip2Response](../../Models/Operations/GetHrisPayslip2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisPayslips2

List all payslips

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisPayslips2" method="get" path="/hris/{connection_id}/payslip" -->
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

$request = new Operations\ListHrisPayslips2Request(
    connectionId: '<id>',
);

$response = $sdk->payslip->listHrisPayslips2(
    request: $request
);

if ($response->hrisPayslips !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisPayslips2Request](../../Models/Operations/ListHrisPayslips2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisPayslips2Response](../../Models/Operations/ListHrisPayslips2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |