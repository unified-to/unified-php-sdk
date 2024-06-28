# Messaging


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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateMessagingMessageRequest();
    $request->messagingMessage = new Shared\MessagingMessage();
    $request->messagingMessage->authorMember = new Shared\PropertyMessagingMessageAuthorMember();
    $request->messagingMessage->authorMember->email = 'Eugene54@gmail.com';
    $request->messagingMessage->authorMember->name = '<value>';
    $request->messagingMessage->authorMember->userId = '<value>';
    $request->messagingMessage->channelId = '<value>';
    $request->messagingMessage->createdAt = '<value>';
    $request->messagingMessage->destinationMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->hiddenMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->id = '<id>';
    $request->messagingMessage->mentionedMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->message = '<value>';
    $request->messagingMessage->messageHtml = '<value>';
    $request->messagingMessage->parentMessageId = '<value>';
    $request->messagingMessage->raw = [
        'holistic' => '<value>',
    ];
    $request->messagingMessage->subject = '<value>';
    $request->messagingMessage->updatedAt = '<value>';
    $request->messagingMessage->webUrl = '<value>';
    $request->connectionId = '<value>';;

    $response = $sdk->messaging->createMessagingMessage($request);

    if ($response->messagingMessage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\CreateMessagingMessageRequest](../../Models/Operations/CreateMessagingMessageRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateMessagingMessageResponse](../../Models/Operations/CreateMessagingMessageResponse.md)**


## getMessagingChannel

Retrieve a channel

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetMessagingChannelRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->messaging->getMessagingChannel($request);

    if ($response->messagingChannel !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetMessagingChannelRequest](../../Models/Operations/GetMessagingChannelRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMessagingChannelResponse](../../Models/Operations/GetMessagingChannelResponse.md)**


## getMessagingMessage

Retrieve a message

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetMessagingMessageRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->messaging->getMessagingMessage($request);

    if ($response->messagingMessage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\GetMessagingMessageRequest](../../Models/Operations/GetMessagingMessageRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\GetMessagingMessageResponse](../../Models/Operations/GetMessagingMessageResponse.md)**


## listMessagingChannels

List all channels

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListMessagingChannelsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 8836;
    $request->offset = 9706.94;
    $request->order = '<value>';
    $request->parentId = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-12T05:55:39.243Z');;

    $response = $sdk->messaging->listMessagingChannels($request);

    if ($response->messagingChannels !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\ListMessagingChannelsRequest](../../Models/Operations/ListMessagingChannelsRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\ListMessagingChannelsResponse](../../Models/Operations/ListMessagingChannelsResponse.md)**


## listMessagingMessages

List all messages

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListMessagingMessagesRequest();
    $request->channelId = '<value>';
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 4272.96;
    $request->offset = 6110.39;
    $request->order = '<value>';
    $request->parentId = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-14T22:11:58.965Z');;

    $response = $sdk->messaging->listMessagingMessages($request);

    if ($response->messagingMessages !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\ListMessagingMessagesRequest](../../Models/Operations/ListMessagingMessagesRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\ListMessagingMessagesResponse](../../Models/Operations/ListMessagingMessagesResponse.md)**


## patchMessagingMessage

Update a message

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchMessagingMessageRequest();
    $request->messagingMessage = new Shared\MessagingMessage();
    $request->messagingMessage->authorMember = new Shared\PropertyMessagingMessageAuthorMember();
    $request->messagingMessage->authorMember->email = 'Desmond.Pagac78@gmail.com';
    $request->messagingMessage->authorMember->name = '<value>';
    $request->messagingMessage->authorMember->userId = '<value>';
    $request->messagingMessage->channelId = '<value>';
    $request->messagingMessage->createdAt = '<value>';
    $request->messagingMessage->destinationMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->hiddenMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->id = '<id>';
    $request->messagingMessage->mentionedMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->message = '<value>';
    $request->messagingMessage->messageHtml = '<value>';
    $request->messagingMessage->parentMessageId = '<value>';
    $request->messagingMessage->raw = [
        'Implementation' => '<value>',
    ];
    $request->messagingMessage->subject = '<value>';
    $request->messagingMessage->updatedAt = '<value>';
    $request->messagingMessage->webUrl = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->messaging->patchMessagingMessage($request);

    if ($response->messagingMessage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\PatchMessagingMessageRequest](../../Models/Operations/PatchMessagingMessageRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchMessagingMessageResponse](../../Models/Operations/PatchMessagingMessageResponse.md)**


## removeMessagingMessage

Remove a message

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveMessagingMessageRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->messaging->removeMessagingMessage($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\RemoveMessagingMessageRequest](../../Models/Operations/RemoveMessagingMessageRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveMessagingMessageResponse](../../Models/Operations/RemoveMessagingMessageResponse.md)**


## updateMessagingMessage

Update a message

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateMessagingMessageRequest();
    $request->messagingMessage = new Shared\MessagingMessage();
    $request->messagingMessage->authorMember = new Shared\PropertyMessagingMessageAuthorMember();
    $request->messagingMessage->authorMember->email = 'Johnpaul.Jenkins99@yahoo.com';
    $request->messagingMessage->authorMember->name = '<value>';
    $request->messagingMessage->authorMember->userId = '<value>';
    $request->messagingMessage->channelId = '<value>';
    $request->messagingMessage->createdAt = '<value>';
    $request->messagingMessage->destinationMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->hiddenMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->id = '<id>';
    $request->messagingMessage->mentionedMembers = [
        new Shared\MessagingMember(),
    ];
    $request->messagingMessage->message = '<value>';
    $request->messagingMessage->messageHtml = '<value>';
    $request->messagingMessage->parentMessageId = '<value>';
    $request->messagingMessage->raw = [
        'Bicycle' => '<value>',
    ];
    $request->messagingMessage->subject = '<value>';
    $request->messagingMessage->updatedAt = '<value>';
    $request->messagingMessage->webUrl = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->messaging->updateMessagingMessage($request);

    if ($response->messagingMessage !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\UpdateMessagingMessageRequest](../../Models/Operations/UpdateMessagingMessageRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateMessagingMessageResponse](../../Models/Operations/UpdateMessagingMessageResponse.md)**

