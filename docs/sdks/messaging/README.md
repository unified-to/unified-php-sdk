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
        id: 'ba4b4ddf-5eda-41b0-8dad-c9ea53cceff4',
        isActive: false,
        isPrivate: true,
        members: [],
        metadata: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-06-09T09:58:27.052Z'),
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
                contentIdentifier: 'c31b88b0-eba1-4ba6-8494-ec7a9216a284',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: '61607447-9f46-4701-8ea9-d40b66c5ae6e',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: 'ec745e65-5fb2-4cde-9b09-b764fffe6bf7',
                text: 'comparo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: '61607447-9f46-4701-8ea9-d40b66c5ae6e',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        metadata: [],
        reactions: [],
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-24T19:02:01.424Z'),
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
        id: 'ec77be82-b089-48e6-a769-83db849ab321',
        isActive: false,
        isPrivate: true,
        members: [],
        metadata: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-06-09T09:58:27.063Z'),
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
        id: '8b1fd93e-9290-46df-8561-0f1819a2b4fc',
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
                contentIdentifier: 'cc2235c7-4b29-48cb-b896-8e866984e716',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: '024e09a3-c1e4-4e7d-9574-b8da5f789450',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: '2dc44221-3d1b-43f7-9d1e-a8f123fd85a5',
                text: 'comparo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: '024e09a3-c1e4-4e7d-9574-b8da5f789450',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        metadata: [],
        reactions: [],
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-24T19:02:01.436Z'),
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
        id: 'ec77be82-b089-48e6-a769-83db849ab321',
        isActive: false,
        isPrivate: true,
        members: [],
        metadata: [],
        name: 'tego',
        updatedAt: Utils\Utils::parseDateTime('2026-06-09T09:58:27.063Z'),
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
        id: '8b1fd93e-9290-46df-8561-0f1819a2b4fc',
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
                contentIdentifier: 'cc2235c7-4b29-48cb-b896-8e866984e716',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: '024e09a3-c1e4-4e7d-9574-b8da5f789450',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: '2dc44221-3d1b-43f7-9d1e-a8f123fd85a5',
                text: 'comparo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: '024e09a3-c1e4-4e7d-9574-b8da5f789450',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        metadata: [],
        reactions: [],
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-24T19:02:01.436Z'),
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