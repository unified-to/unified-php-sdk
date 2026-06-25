# Busy

## Overview

### Available Operations

* [listCalendarBusies2](#listcalendarbusies2) - List all busies

## listCalendarBusies2

List all busies

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarBusies2" method="get" path="/calendar/{connection_id}/busy" -->
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

$request = new Operations\ListCalendarBusies2Request(
    connectionId: '<id>',
);

$response = $sdk->busy->listCalendarBusies2(
    request: $request
);

if ($response->calendarBusies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCalendarBusies2Request](../../Models/Operations/ListCalendarBusies2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListCalendarBusies2Response](../../Models/Operations/ListCalendarBusies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |