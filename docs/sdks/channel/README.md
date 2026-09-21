# Channel

## Overview

### Available Operations

* [createMessagingChannel](#createmessagingchannel) - Create a channel
* [getMessagingChannel](#getmessagingchannel) - Retrieve a channel
* [listMessagingChannels](#listmessagingchannels) - List all channels
* [patchMessagingChannel](#patchmessagingchannel) - Update a channel
* [removeMessagingChannel](#removemessagingchannel) - Remove a channel
* [updateMessagingChannel](#updatemessagingchannel) - Update a channel

## createMessagingChannel

Create a channel

### Example Usage

<!-- UsageSnippet language="php" operationID="createMessagingChannel" method="post" path="/messaging/{connection_id}/channel" example="messaging_channel" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateMessagingChannelRequest(
    messagingChannel: new Shared\MessagingChannel(
        createdAt: Utils\Utils::parseDateTime('2023-10-05T02:09:22.795Z'),
        description: 'Dolores tutis.',
        hasSubchannels: true,
        id: '70370277-61d1-48d9-aa9c-14689dadb87b',
        isActive: false,
        isPrivate: true,
        members: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-04-25T12:19:49.524Z'),
        webUrl: 'https://svelte-rule.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->channel->createMessagingChannel(
    request: $request
);

if ($response->messagingChannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateMessagingChannelRequest](../../Models/Operations/CreateMessagingChannelRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateMessagingChannelResponse](../../Models/Operations/CreateMessagingChannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMessagingChannel

Retrieve a channel

### Example Usage

<!-- UsageSnippet language="php" operationID="getMessagingChannel" method="get" path="/messaging/{connection_id}/channel/{id}" -->
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

$request = new Operations\GetMessagingChannelRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->channel->getMessagingChannel(
    request: $request
);

if ($response->messagingChannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetMessagingChannelRequest](../../Models/Operations/GetMessagingChannelRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetMessagingChannelResponse](../../Models/Operations/GetMessagingChannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMessagingChannels

List all channels

### Example Usage

<!-- UsageSnippet language="php" operationID="listMessagingChannels" method="get" path="/messaging/{connection_id}/channel" -->
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

$request = new Operations\ListMessagingChannelsRequest(
    connectionId: '<id>',
);

$response = $sdk->channel->listMessagingChannels(
    request: $request
);

if ($response->messagingChannels !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListMessagingChannelsRequest](../../Models/Operations/ListMessagingChannelsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListMessagingChannelsResponse](../../Models/Operations/ListMessagingChannelsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMessagingChannel

Update a channel

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMessagingChannel" method="patch" path="/messaging/{connection_id}/channel/{id}" example="messaging_channel" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchMessagingChannelRequest(
    messagingChannel: new Shared\MessagingChannel(
        createdAt: Utils\Utils::parseDateTime('2023-10-05T02:09:22.795Z'),
        description: 'Dolores tutis.',
        hasSubchannels: true,
        id: 'b60371eb-bbd6-475b-a564-cd8eeb55d5c2',
        isActive: false,
        isPrivate: true,
        members: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-04-25T12:19:49.533Z'),
        webUrl: 'https://svelte-rule.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->channel->patchMessagingChannel(
    request: $request
);

if ($response->messagingChannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchMessagingChannelRequest](../../Models/Operations/PatchMessagingChannelRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchMessagingChannelResponse](../../Models/Operations/PatchMessagingChannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMessagingChannel

Remove a channel

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMessagingChannel" method="delete" path="/messaging/{connection_id}/channel/{id}" -->
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

$request = new Operations\RemoveMessagingChannelRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->channel->removeMessagingChannel(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveMessagingChannelRequest](../../Models/Operations/RemoveMessagingChannelRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveMessagingChannelResponse](../../Models/Operations/RemoveMessagingChannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMessagingChannel

Update a channel

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMessagingChannel" method="put" path="/messaging/{connection_id}/channel/{id}" example="messaging_channel" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateMessagingChannelRequest(
    messagingChannel: new Shared\MessagingChannel(
        createdAt: Utils\Utils::parseDateTime('2023-10-05T02:09:22.795Z'),
        description: 'Dolores tutis.',
        hasSubchannels: true,
        id: 'b60371eb-bbd6-475b-a564-cd8eeb55d5c2',
        isActive: false,
        isPrivate: true,
        members: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-04-25T12:19:49.533Z'),
        webUrl: 'https://svelte-rule.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->channel->updateMessagingChannel(
    request: $request
);

if ($response->messagingChannel !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateMessagingChannelRequest](../../Models/Operations/UpdateMessagingChannelRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateMessagingChannelResponse](../../Models/Operations/UpdateMessagingChannelResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |