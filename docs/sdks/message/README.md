# Message

## Overview

### Available Operations

* [createMessagingMessage](#createmessagingmessage) - Create a message
* [getMessagingMessage](#getmessagingmessage) - Retrieve a message
* [listMessagingMessages](#listmessagingmessages) - List all messages
* [patchMessagingMessage](#patchmessagingmessage) - Update a message
* [removeMessagingMessage](#removemessagingmessage) - Remove a message
* [updateMessagingMessage](#updatemessagingmessage) - Update a message

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
                contentIdentifier: '05d3a618-8e92-400f-8605-7256f294df9c',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: '81f4cefb-7a7c-41e7-a198-8417d1f6e95a',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: 'beeef80d-9962-42a2-bf65-01d82f5ab99b',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: '81f4cefb-7a7c-41e7-a198-8417d1f6e95a',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-15T10:24:29.513Z'),
        webUrl: 'https://grumpy-kit.net',
    ),
    connectionId: '<id>',
);

$response = $sdk->message->createMessagingMessage(
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

$response = $sdk->message->getMessagingMessage(
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

$response = $sdk->message->listMessagingMessages(
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
                contentIdentifier: '600b3654-0b48-4348-94c2-e08fa97fe6e4',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: '03b80bca-f70f-4824-9aa6-701ae5ad8845',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: '09b0d879-72a0-42b2-98a2-ab3ef32bf740',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: '03b80bca-f70f-4824-9aa6-701ae5ad8845',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-15T10:24:29.524Z'),
        webUrl: 'https://grumpy-kit.net',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->message->patchMessagingMessage(
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

$response = $sdk->message->removeMessagingMessage(
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
                contentIdentifier: '600b3654-0b48-4348-94c2-e08fa97fe6e4',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: '03b80bca-f70f-4824-9aa6-701ae5ad8845',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: '09b0d879-72a0-42b2-98a2-ab3ef32bf740',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: '03b80bca-f70f-4824-9aa6-701ae5ad8845',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-15T10:24:29.524Z'),
        webUrl: 'https://grumpy-kit.net',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->message->updateMessagingMessage(
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