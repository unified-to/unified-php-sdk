# Busy
(*busy*)

## Overview

### Available Operations

* [listCalendarBusies](#listcalendarbusies) - List all busies

## listCalendarBusies

List all busies

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarBusies" method="get" path="/calendar/{connection_id}/busy" -->
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

$request = new Operations\ListCalendarBusiesRequest(
    connectionId: '<id>',
);

$response = $sdk->busy->listCalendarBusies(
    request: $request
);

if ($response->calendarBusies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCalendarBusiesRequest](../../Models/Operations/ListCalendarBusiesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCalendarBusiesResponse](../../Models/Operations/ListCalendarBusiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |