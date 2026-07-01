# Picklist

## Overview

### Available Operations

* [listCrmPicklists2](#listcrmpicklists2) - List all picklists

## listCrmPicklists2

List all picklists

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmPicklists2" method="get" path="/crm/{connection_id}/picklist" -->
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

$request = new Operations\ListCrmPicklists2Request(
    connectionId: '<id>',
);

$response = $sdk->picklist->listCrmPicklists2(
    request: $request
);

if ($response->crmPicklists !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCrmPicklists2Request](../../Models/Operations/ListCrmPicklists2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCrmPicklists2Response](../../Models/Operations/ListCrmPicklists2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |