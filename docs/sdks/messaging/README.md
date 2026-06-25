# Messaging

## Overview

### Available Operations

* [createMessagingMessage2](#createmessagingmessage2) - Create a message
* [getMessagingChannel2](#getmessagingchannel2) - Retrieve a channel
* [getMessagingMessage2](#getmessagingmessage2) - Retrieve a message
* [listMessagingChannels2](#listmessagingchannels2) - List all channels
* [listMessagingMessages2](#listmessagingmessages2) - List all messages
* [patchMessagingEvent2](#patchmessagingevent2) - Update an event
* [patchMessagingMessage2](#patchmessagingmessage2) - Update a message
* [removeMessagingMessage2](#removemessagingmessage2) - Remove a message
* [updateMessagingEvent2](#updatemessagingevent2) - Update an event
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

$response = $sdk->messaging->createMessagingMessage2(
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

$response = $sdk->messaging->getMessagingChannel2(
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

$response = $sdk->messaging->getMessagingMessage2(
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

$response = $sdk->messaging->listMessagingChannels2(
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

$response = $sdk->messaging->listMessagingMessages2(
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

## patchMessagingEvent2

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMessagingEvent2" method="patch" path="/messaging/{connection_id}/event/{id}" -->
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

$request = new Operations\PatchMessagingEvent2Request(
    messagingEvent: new Shared\MessagingEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->patchMessagingEvent2(
    request: $request
);

if ($response->messagingEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchMessagingEvent2Request](../../Models/Operations/PatchMessagingEvent2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchMessagingEvent2Response](../../Models/Operations/PatchMessagingEvent2Response.md)**

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

$response = $sdk->messaging->patchMessagingMessage2(
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

$response = $sdk->messaging->removeMessagingMessage2(
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

## updateMessagingEvent2

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMessagingEvent2" method="put" path="/messaging/{connection_id}/event/{id}" -->
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

$request = new Operations\UpdateMessagingEvent2Request(
    messagingEvent: new Shared\MessagingEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->messaging->updateMessagingEvent2(
    request: $request
);

if ($response->messagingEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateMessagingEvent2Request](../../Models/Operations/UpdateMessagingEvent2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateMessagingEvent2Response](../../Models/Operations/UpdateMessagingEvent2Response.md)**

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

$response = $sdk->messaging->updateMessagingMessage2(
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