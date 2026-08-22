# Notification

## Overview

### Available Operations

* [listUnifiedNotifications](#listunifiednotifications) - List event notifications

## listUnifiedNotifications

List event notifications

### Example Usage

<!-- UsageSnippet language="php" operationID="listUnifiedNotifications" method="get" path="/unified/notification" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();



$response = $sdk->notification->listUnifiedNotifications(
    request: $request
);

if ($response->notifications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListUnifiedNotificationsRequest](../../Models/Operations/ListUnifiedNotificationsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListUnifiedNotificationsResponse](../../Models/Operations/ListUnifiedNotificationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |