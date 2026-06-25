# Message

## Overview

### Available Operations

* [createMessagingMessage2](#createmessagingmessage2) - Create a message
* [getMessagingMessage2](#getmessagingmessage2) - Retrieve a message
* [listMessagingMessages2](#listmessagingmessages2) - List all messages
* [patchMessagingMessage2](#patchmessagingmessage2) - Update a message
* [removeMessagingMessage2](#removemessagingmessage2) - Remove a message
* [updateMessagingMessage2](#updatemessagingmessage2) - Update a message

## createMessagingMessage2

Create a message

### Example Usage

<!-- UsageSnippet language="php" operationID="createMessagingMessage2" method="post" path="/messaging/{connection_id}/message" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateMessagingMessage2Request(
    messagingMessage: new Shared\MessagingMessage(),
    connectionId: '<id>',
);

$response = $sdk->message->createMessagingMessage2(
    request: $request
);

if ($response->messagingMessage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateMessagingMessage2Request](../../Models/Operations/CreateMessagingMessage2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateMessagingMessage2Response](../../Models/Operations/CreateMessagingMessage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getMessagingMessage2

Retrieve a message

### Example Usage

<!-- UsageSnippet language="php" operationID="getMessagingMessage2" method="get" path="/messaging/{connection_id}/message/{id}" -->
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

$request = new Operations\GetMessagingMessage2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->message->getMessagingMessage2(
    request: $request
);

if ($response->messagingMessage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetMessagingMessage2Request](../../Models/Operations/GetMessagingMessage2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetMessagingMessage2Response](../../Models/Operations/GetMessagingMessage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listMessagingMessages2

List all messages

### Example Usage

<!-- UsageSnippet language="php" operationID="listMessagingMessages2" method="get" path="/messaging/{connection_id}/message" -->
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

$request = new Operations\ListMessagingMessages2Request(
    connectionId: '<id>',
);

$response = $sdk->message->listMessagingMessages2(
    request: $request
);

if ($response->messagingMessages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListMessagingMessages2Request](../../Models/Operations/ListMessagingMessages2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListMessagingMessages2Response](../../Models/Operations/ListMessagingMessages2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMessagingMessage2

Update a message

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMessagingMessage2" method="patch" path="/messaging/{connection_id}/message/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchMessagingMessage2Request(
    messagingMessage: new Shared\MessagingMessage(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->message->patchMessagingMessage2(
    request: $request
);

if ($response->messagingMessage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchMessagingMessage2Request](../../Models/Operations/PatchMessagingMessage2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchMessagingMessage2Response](../../Models/Operations/PatchMessagingMessage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeMessagingMessage2

Remove a message

### Example Usage

<!-- UsageSnippet language="php" operationID="removeMessagingMessage2" method="delete" path="/messaging/{connection_id}/message/{id}" -->
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

$request = new Operations\RemoveMessagingMessage2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->message->removeMessagingMessage2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveMessagingMessage2Request](../../Models/Operations/RemoveMessagingMessage2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveMessagingMessage2Response](../../Models/Operations/RemoveMessagingMessage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMessagingMessage2

Update a message

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMessagingMessage2" method="put" path="/messaging/{connection_id}/message/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateMessagingMessage2Request(
    messagingMessage: new Shared\MessagingMessage(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->message->updateMessagingMessage2(
    request: $request
);

if ($response->messagingMessage !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateMessagingMessage2Request](../../Models/Operations/UpdateMessagingMessage2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateMessagingMessage2Response](../../Models/Operations/UpdateMessagingMessage2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |