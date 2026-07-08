# Picklist

## Overview

### Available Operations

* [listCrmPicklists](#listcrmpicklists) - List all picklists

## listCrmPicklists

List all picklists

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmPicklists" method="get" path="/crm/{connection_id}/picklist" -->
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

$request = new Operations\ListCrmPicklistsRequest(
    connectionId: '<id>',
);

$response = $sdk->picklist->listCrmPicklists(
    request: $request
);

if ($response->crmPicklists !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCrmPicklistsRequest](../../Models/Operations/ListCrmPicklistsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCrmPicklistsResponse](../../Models/Operations/ListCrmPicklistsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |