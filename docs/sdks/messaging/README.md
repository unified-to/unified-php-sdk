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
        id: '2c33757d-832c-4b77-917e-d1059606d2aa',
        isActive: false,
        isPrivate: true,
        members: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-04-23T23:47:55.363Z'),
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

Create a message

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
                contentIdentifier: 'bf36b3b3-2441-4651-83fd-a290a6fe6e46',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: 'ee72c2c6-0d5d-4df0-96d3-79150dfdefbf',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: 'e7e94a13-fb08-4fbf-8679-b9be01d60d6a',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: 'ee72c2c6-0d5d-4df0-96d3-79150dfdefbf',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-06T19:30:50.984Z'),
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

Retrieve a message

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

List all messages

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
        id: 'bc8c2892-3e85-4341-95a2-7d3285a5660a',
        isActive: false,
        isPrivate: true,
        members: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-04-23T23:47:55.368Z'),
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

Update an event

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
        id: '4d68b44b-04ff-4dc9-9f23-8f29369720d8',
        isReplacingOriginal: false,
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

Update a message

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
                contentIdentifier: 'c642f490-1ec7-4db6-b22d-dfe5b58c2e20',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: 'eef6b745-91eb-4ab0-bd86-2a5883092cda',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: '98626944-63a8-4855-bcd8-adbdd5b575c7',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: 'eef6b745-91eb-4ab0-bd86-2a5883092cda',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-06T19:30:50.991Z'),
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

Remove a message

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
        id: 'bc8c2892-3e85-4341-95a2-7d3285a5660a',
        isActive: false,
        isPrivate: true,
        members: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-04-23T23:47:55.368Z'),
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

Update an event

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
        id: '4d68b44b-04ff-4dc9-9f23-8f29369720d8',
        isReplacingOriginal: false,
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

Update a message

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
                contentIdentifier: 'c642f490-1ec7-4db6-b22d-dfe5b58c2e20',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: 'eef6b745-91eb-4ab0-bd86-2a5883092cda',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: '98626944-63a8-4855-bcd8-adbdd5b575c7',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: 'eef6b745-91eb-4ab0-bd86-2a5883092cda',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-06T19:30:50.991Z'),
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