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
                contentIdentifier: '2640eebe-3849-4655-8d69-923692128884',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: '85a83cc5-cb2c-478e-9a9d-b25b61a78737',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: '32d01316-3070-4462-b06f-8785472021fe',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: '85a83cc5-cb2c-478e-9a9d-b25b61a78737',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-15T18:48:34.696Z'),
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
                contentIdentifier: '53b3b098-4add-4eee-b9b0-9990d76c450f',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: 'b2596c7d-1b5a-4b95-9526-d94cf1f71fc6',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: 'bd0862d8-5aca-4fa2-927c-2263e0bc47eb',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: 'b2596c7d-1b5a-4b95-9526-d94cf1f71fc6',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-15T18:48:34.705Z'),
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
                contentIdentifier: '53b3b098-4add-4eee-b9b0-9990d76c450f',
                contentType: 'coaegresco',
                downloadUrl: 'https://rotating-advertisement.org',
                filename: 'super',
                messageId: 'b2596c7d-1b5a-4b95-9526-d94cf1f71fc6',
                size: 327,
            ),
        ],
        buttons: [
            new Shared\MessagingButton(
                id: 'bd0862d8-5aca-4fa2-927c-2263e0bc47eb',
                text: 'denuo',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-11-26T09:26:33.973Z'),
        destinationMembers: [],
        hasChildren: true,
        hiddenMembers: [],
        id: 'b2596c7d-1b5a-4b95-9526-d94cf1f71fc6',
        isUnread: false,
        mentionedMembers: [],
        message: 'Sum utique aliquid.',
        messageHtml: 'Articulus tardus tergiversatio.',
        messageMarkdown: 'Territo uterque tergo curiositas.',
        reactions: [],
        reference: '571483f2-d95b-4f06-8b78-d35e7046bb74',
        subject: 'Cernuus optio cohaero summisse in.',
        updatedAt: Utils\Utils::parseDateTime('2023-07-15T18:48:34.705Z'),
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