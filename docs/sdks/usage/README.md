# Usage

## Overview

### Available Operations

* [listComputeUsages](#listcomputeusages) - List all usages

## listComputeUsages

List all usages

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeUsages" method="get" path="/compute/{connection_id}/usage" -->
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

$request = new Operations\ListComputeUsagesRequest(
    connectionId: '<id>',
);

$response = $sdk->usage->listComputeUsages(
    request: $request
);

if ($response->computeUsages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListComputeUsagesRequest](../../Models/Operations/ListComputeUsagesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListComputeUsagesResponse](../../Models/Operations/ListComputeUsagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |