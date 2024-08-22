# Messaging

## Overview

### Available Operations

* [createMessagingMessage](#createmessagingmessage) - Create a message
* [getMessagingChannel](#getmessagingchannel) - Retrieve a channel
* [getMessagingMessage](#getmessagingmessage) - Retrieve a message
* [listMessagingChannels](#listmessagingchannels) - List all channels
* [listMessagingMessages](#listmessagingmessages) - List all messages
* [patchMessagingMessage](#patchmessagingmessage) - Update a message
* [removeMessagingMessage](#removemessagingmessage) - Remove a message
* [updateMessagingMessage](#updatemessagingmessage) - Update a message

## createMessagingMessage

Create a message

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateMessagingMessageRequest(
        connectionId: '<value>',
        messagingMessage: new Shared\MessagingMessage(
            attachments: [
                new Shared\MessagingAttachment,
            ],
            authorMember: new Shared\PropertyMessagingMessageAuthorMember(
                email: 'Eugene54@gmail.com',
                name: '<value>',
                userId: '<value>',
            ),
            channelId: '<value>',
            createdAt: '<value>',
            destinationMembers: [
                new Shared\MessagingMember,
            ],
            hiddenMembers: [
                new Shared\MessagingMember,
            ],
            id: '<id>',
            mentionedMembers: [
                new Shared\MessagingMember,
            ],
            message: '<value>',
            messageHtml: '<value>',
            parentMessageId: '<value>',
            raw: [
                'holistic' => '<value>',
            ],
            subject: '<value>',
            updatedAt: '<value>',
            webUrl: '<value>',
        ),
    );
    $response = $sdk->messaging->createMessagingMessage($request);

    if ($response->messagingMessage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateMessagingMessageRequest](../../Models/Operations/CreateMessagingMessageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateMessagingMessageResponse](../../Models/Operations/CreateMessagingMessageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getMessagingChannel

Retrieve a channel

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetMessagingChannelRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->messaging->getMessagingChannel($request);

    if ($response->messagingChannel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetMessagingChannelRequest](../../Models/Operations/GetMessagingChannelRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetMessagingChannelResponse](../../Models/Operations/GetMessagingChannelResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getMessagingMessage

Retrieve a message

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetMessagingMessageRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->messaging->getMessagingMessage($request);

    if ($response->messagingMessage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetMessagingMessageRequest](../../Models/Operations/GetMessagingMessageRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetMessagingMessageResponse](../../Models/Operations/GetMessagingMessageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listMessagingChannels

List all channels

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListMessagingChannelsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 8836,
        offset: 9706.94,
        order: '<value>',
        parentId: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-12-12T05:55:39.243Z'),
    );
    $response = $sdk->messaging->listMessagingChannels($request);

    if ($response->messagingChannels !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListMessagingChannelsRequest](../../Models/Operations/ListMessagingChannelsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListMessagingChannelsResponse](../../Models/Operations/ListMessagingChannelsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listMessagingMessages

List all messages

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListMessagingMessagesRequest(
        connectionId: '<value>',
        channelId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 4272.96,
        offset: 6110.39,
        order: '<value>',
        parentId: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-11-14T22:11:58.965Z'),
    );
    $response = $sdk->messaging->listMessagingMessages($request);

    if ($response->messagingMessages !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListMessagingMessagesRequest](../../Models/Operations/ListMessagingMessagesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListMessagingMessagesResponse](../../Models/Operations/ListMessagingMessagesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchMessagingMessage

Update a message

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchMessagingMessageRequest(
        connectionId: '<value>',
        id: '<id>',
        messagingMessage: new Shared\MessagingMessage(
            attachments: [
                new Shared\MessagingAttachment,
            ],
            authorMember: new Shared\PropertyMessagingMessageAuthorMember(
                email: 'Desmond.Pagac78@gmail.com',
                name: '<value>',
                userId: '<value>',
            ),
            channelId: '<value>',
            createdAt: '<value>',
            destinationMembers: [
                new Shared\MessagingMember,
            ],
            hiddenMembers: [
                new Shared\MessagingMember,
            ],
            id: '<id>',
            mentionedMembers: [
                new Shared\MessagingMember,
            ],
            message: '<value>',
            messageHtml: '<value>',
            parentMessageId: '<value>',
            raw: [
                'Implementation' => '<value>',
            ],
            subject: '<value>',
            updatedAt: '<value>',
            webUrl: '<value>',
        ),
    );
    $response = $sdk->messaging->patchMessagingMessage($request);

    if ($response->messagingMessage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchMessagingMessageRequest](../../Models/Operations/PatchMessagingMessageRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchMessagingMessageResponse](../../Models/Operations/PatchMessagingMessageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeMessagingMessage

Remove a message

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveMessagingMessageRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->messaging->removeMessagingMessage($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveMessagingMessageRequest](../../Models/Operations/RemoveMessagingMessageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveMessagingMessageResponse](../../Models/Operations/RemoveMessagingMessageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateMessagingMessage

Update a message

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateMessagingMessageRequest(
        connectionId: '<value>',
        id: '<id>',
        messagingMessage: new Shared\MessagingMessage(
            attachments: [
                new Shared\MessagingAttachment,
            ],
            authorMember: new Shared\PropertyMessagingMessageAuthorMember(
                email: 'Johnpaul.Jenkins99@yahoo.com',
                name: '<value>',
                userId: '<value>',
            ),
            channelId: '<value>',
            createdAt: '<value>',
            destinationMembers: [
                new Shared\MessagingMember,
            ],
            hiddenMembers: [
                new Shared\MessagingMember,
            ],
            id: '<id>',
            mentionedMembers: [
                new Shared\MessagingMember,
            ],
            message: '<value>',
            messageHtml: '<value>',
            parentMessageId: '<value>',
            raw: [
                'Bicycle' => '<value>',
            ],
            subject: '<value>',
            updatedAt: '<value>',
            webUrl: '<value>',
        ),
    );
    $response = $sdk->messaging->updateMessagingMessage($request);

    if ($response->messagingMessage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateMessagingMessageRequest](../../Models/Operations/UpdateMessagingMessageRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateMessagingMessageResponse](../../Models/Operations/UpdateMessagingMessageResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
