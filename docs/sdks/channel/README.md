# Channel

## Overview

### Available Operations

* [getMessagingChannel2](#getmessagingchannel2) - Retrieve a channel
* [listMessagingChannels2](#listmessagingchannels2) - List all channels

## getMessagingChannel2

Retrieve a channel

### Example Usage

<!-- UsageSnippet language="php" operationID="getMessagingChannel2" method="get" path="/messaging/{connection_id}/channel/{id}" -->
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

$request = new Operations\GetMessagingChannel2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->channel->getMessagingChannel2(
    request: $request
);

if ($response->messagingChannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetMessagingChannel2Request](../../Models/Operations/GetMessagingChannel2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetMessagingChannel2Response](../../Models/Operations/GetMessagingChannel2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMessagingChannels2

List all channels

### Example Usage

<!-- UsageSnippet language="php" operationID="listMessagingChannels2" method="get" path="/messaging/{connection_id}/channel" -->
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

$request = new Operations\ListMessagingChannels2Request(
    connectionId: '<id>',
);

$response = $sdk->channel->listMessagingChannels2(
    request: $request
);

if ($response->messagingChannels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListMessagingChannels2Request](../../Models/Operations/ListMessagingChannels2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListMessagingChannels2Response](../../Models/Operations/ListMessagingChannels2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |