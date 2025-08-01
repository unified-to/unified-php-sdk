# Apicall
(*apicall*)

## Overview

### Available Operations

* [getUnifiedApicall](#getunifiedapicall) - Retrieve specific API Call by its ID
* [listUnifiedApicalls](#listunifiedapicalls) - Returns API Calls

## getUnifiedApicall

Retrieve specific API Call by its ID

### Example Usage

<!-- UsageSnippet language="php" operationID="getUnifiedApicall" method="get" path="/unified/apicall/{id}" -->
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

$request = new Operations\GetUnifiedApicallRequest(
    id: '<id>',
);

$response = $sdk->apicall->getUnifiedApicall(
    request: $request
);

if ($response->apiCall !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetUnifiedApicallRequest](../../Models/Operations/GetUnifiedApicallRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetUnifiedApicallResponse](../../Models/Operations/GetUnifiedApicallResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUnifiedApicalls

Returns API Calls

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedApicalls" method="get" path="/unified/apicall" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->apicall->listUnifiedApicalls(
    request: $request
);

if ($response->apiCalls !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListUnifiedApicallsRequest](../../Models/Operations/ListUnifiedApicallsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListUnifiedApicallsResponse](../../Models/Operations/ListUnifiedApicallsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |