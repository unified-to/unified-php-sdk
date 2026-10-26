# Messaging

## Overview

### Available Operations

* [createMessagingChannel](#createmessagingchannel) - Create a channel
* [createMessagingMessage](#createmessagingmessage) - Create a message
* [getMessagingChannel](#getmessagingchannel) - Retrieve a channel
* [getMessagingMessage](#getmessagingmessage) - Retrieve a message
* [listMessagingChannels](#listmessagingchannels) - List all channels
* [listMessagingMessages](#listmessagingmessages) - List all messages
* [patchMessagingChannel](#patchmessagingchannel) - Update a channel
* [patchMessagingEvent](#patchmessagingevent) - Update an event
* [patchMessagingMessage](#patchmessagingmessage) - Update a message
* [removeMessagingChannel](#removemessagingchannel) - Remove a channel
* [removeMessagingMessage](#removemessagingmessage) - Remove a message
* [updateMessagingChannel](#updatemessagingchannel) - Update a channel
* [updateMessagingEvent](#updatemessagingevent) - Update an event
* [updateMessagingMessage](#updatemessagingmessage) - Update a message

## createMessagingChannel

Creates a MessagingChannel. Provide the unified MessagingChannel fields in the request body; they are mapped to the provider's API. Returns the created MessagingChannel.

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
        id: '63127cba-dc3d-4701-a3c2-c157e427c08a',
        isActive: false,
        isPrivate: true,
        members: [],
        metadata: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-05-25T20:53:48.603Z'),
        webUrl: 'https://svelte-rule.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->messaging->createMessagingChannel(
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

## createMessagingMessage

Creates a MessagingMessage. Provide the unified MessagingMessage fields in the request body; they are mapped to the provider's API. Returns the created MessagingMessage.

### Example Usage

<!-- UsageSnippet language="php" operationID="createMessagingMessage" method="post" path="/messaging/{connection_id}/message" example="messaging_message" -->
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

$request = new Operations\CreateMessagingMessageRequest(
    messagingMessage: new Shared\MessagingMessage(
        attachments: [
            new Shared\MessagingAttachment(
                contentIdentifier: '1c189dcc-0b7e-4475-aa8c-125c40e41451',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: 'b1f1bbb2-0499-46f0-af84-7623301b1619',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: '59736548-e93f-4627-ada1-dd50bef2f14d',
                text: 'comparo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: 'b1f1bbb2-0499-46f0-af84-7623301b1619',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        metadata: [],
        reactions: [],
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-19T03:50:10.528Z'),
        webUrl: 'https://grumpy-kit.net',
    ),
    connectionId: '<id>',
);

$response = $sdk->messaging->createMessagingMessage(
    request: $request
);

if ($response->messagingMessage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateMessagingMessageRequest](../../Models/Operations/CreateMessagingMessageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateMessagingMessageResponse](../../Models/Operations/CreateMessagingMessageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMessagingChannel

Retrieves a single MessagingChannel by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

$response = $sdk->messaging->getMessagingChannel(
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

## getMessagingMessage

Retrieves a single MessagingMessage by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getMessagingMessage" method="get" path="/messaging/{connection_id}/message/{id}" -->
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

$request = new Operations\GetMessagingMessageRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->getMessagingMessage(
    request: $request
);

if ($response->messagingMessage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetMessagingMessageRequest](../../Models/Operations/GetMessagingMessageRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetMessagingMessageResponse](../../Models/Operations/GetMessagingMessageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMessagingChannels

Returns a list of MessagingChannels. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

$response = $sdk->messaging->listMessagingChannels(
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

## listMessagingMessages

Returns a list of MessagingMessages. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listMessagingMessages" method="get" path="/messaging/{connection_id}/message" -->
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

$request = new Operations\ListMessagingMessagesRequest(
    connectionId: '<id>',
);

$response = $sdk->messaging->listMessagingMessages(
    request: $request
);

if ($response->messagingMessages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListMessagingMessagesRequest](../../Models/Operations/ListMessagingMessagesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListMessagingMessagesResponse](../../Models/Operations/ListMessagingMessagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMessagingChannel

Updates the MessagingChannel identified by `id`. Provide the unified MessagingChannel fields to change in the request body.

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
        id: '2fbe77b3-9780-4a37-b62f-9011e8a0f0ae',
        isActive: false,
        isPrivate: true,
        members: [],
        metadata: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-05-25T20:53:48.611Z'),
        webUrl: 'https://svelte-rule.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->patchMessagingChannel(
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

## patchMessagingEvent

Updates the MessagingEvent identified by `id`. Provide the unified MessagingEvent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMessagingEvent" method="patch" path="/messaging/{connection_id}/event/{id}" example="messaging_event" -->
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

$request = new Operations\PatchMessagingEventRequest(
    messagingEvent: new Shared\MessagingEvent(
        channel: new Shared\PropertyMessagingEventChannel(
            id: '',
            name: '',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-05-30T19:44:46.461Z'),
        id: 'c4481810-3708-49a3-a132-37f010f43afc',
        isReplacingOriginal: false,
        metadata: [],
        type: Shared\MessagingEventType::ButtonClick,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->patchMessagingEvent(
    request: $request
);

if ($response->messagingEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchMessagingEventRequest](../../Models/Operations/PatchMessagingEventRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchMessagingEventResponse](../../Models/Operations/PatchMessagingEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMessagingMessage

Updates the MessagingMessage identified by `id`. Provide the unified MessagingMessage fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMessagingMessage" method="patch" path="/messaging/{connection_id}/message/{id}" example="messaging_message" -->
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

$request = new Operations\PatchMessagingMessageRequest(
    messagingMessage: new Shared\MessagingMessage(
        attachments: [
            new Shared\MessagingAttachment(
                contentIdentifier: 'cc2056c8-9a3c-41b3-aea6-98f1769c7886',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: 'be7df24b-9d62-4e06-9021-2a1b31fc9a55',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: 'd7bcfe6b-9335-473e-9c7d-8c3c02068c70',
                text: 'comparo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: 'be7df24b-9d62-4e06-9021-2a1b31fc9a55',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        metadata: [],
        reactions: [],
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-19T03:50:10.538Z'),
        webUrl: 'https://grumpy-kit.net',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->patchMessagingMessage(
    request: $request
);

if ($response->messagingMessage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchMessagingMessageRequest](../../Models/Operations/PatchMessagingMessageRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchMessagingMessageResponse](../../Models/Operations/PatchMessagingMessageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMessagingChannel

Deletes the MessagingChannel identified by `id`.

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

$response = $sdk->messaging->removeMessagingChannel(
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

## removeMessagingMessage

Deletes the MessagingMessage identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMessagingMessage" method="delete" path="/messaging/{connection_id}/message/{id}" -->
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

$request = new Operations\RemoveMessagingMessageRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->removeMessagingMessage(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveMessagingMessageRequest](../../Models/Operations/RemoveMessagingMessageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveMessagingMessageResponse](../../Models/Operations/RemoveMessagingMessageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMessagingChannel

Updates the MessagingChannel identified by `id`. Provide the unified MessagingChannel fields to change in the request body.

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
        id: '2fbe77b3-9780-4a37-b62f-9011e8a0f0ae',
        isActive: false,
        isPrivate: true,
        members: [],
        metadata: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-05-25T20:53:48.611Z'),
        webUrl: 'https://svelte-rule.name/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->updateMessagingChannel(
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

## updateMessagingEvent

Updates the MessagingEvent identified by `id`. Provide the unified MessagingEvent fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMessagingEvent" method="put" path="/messaging/{connection_id}/event/{id}" example="messaging_event" -->
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

$request = new Operations\UpdateMessagingEventRequest(
    messagingEvent: new Shared\MessagingEvent(
        channel: new Shared\PropertyMessagingEventChannel(
            id: '',
            name: '',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-05-30T19:44:46.461Z'),
        id: 'c4481810-3708-49a3-a132-37f010f43afc',
        isReplacingOriginal: false,
        metadata: [],
        type: Shared\MessagingEventType::ButtonClick,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->updateMessagingEvent(
    request: $request
);

if ($response->messagingEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateMessagingEventRequest](../../Models/Operations/UpdateMessagingEventRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateMessagingEventResponse](../../Models/Operations/UpdateMessagingEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMessagingMessage

Updates the MessagingMessage identified by `id`. Provide the unified MessagingMessage fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMessagingMessage" method="put" path="/messaging/{connection_id}/message/{id}" example="messaging_message" -->
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

$request = new Operations\UpdateMessagingMessageRequest(
    messagingMessage: new Shared\MessagingMessage(
        attachments: [
            new Shared\MessagingAttachment(
                contentIdentifier: 'cc2056c8-9a3c-41b3-aea6-98f1769c7886',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: 'be7df24b-9d62-4e06-9021-2a1b31fc9a55',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: 'd7bcfe6b-9335-473e-9c7d-8c3c02068c70',
                text: 'comparo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: 'be7df24b-9d62-4e06-9021-2a1b31fc9a55',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        metadata: [],
        reactions: [],
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-19T03:50:10.538Z'),
        webUrl: 'https://grumpy-kit.net',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->updateMessagingMessage(
    request: $request
);

if ($response->messagingMessage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateMessagingMessageRequest](../../Models/Operations/UpdateMessagingMessageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateMessagingMessageResponse](../../Models/Operations/UpdateMessagingMessageResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |