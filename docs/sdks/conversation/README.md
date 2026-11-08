# Conversation

## Overview

### Available Operations

* [createPropertyConversation](#createpropertyconversation) - Create a conversation
* [getPropertyConversation](#getpropertyconversation) - Retrieve a conversation
* [listPropertyConversations](#listpropertyconversations) - List all conversations

## createPropertyConversation

Creates a PropertyConversation. Provide the unified PropertyConversation fields in the request body; they are mapped to the provider's API. Returns the created PropertyConversation.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPropertyConversation" method="post" path="/property/{connection_id}/conversation" example="property_conversation" -->
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

$request = new Operations\CreatePropertyConversationRequest(
    propertyConversation: new Shared\PropertyConversation(
        createdAt: Utils\Utils::parseDateTime('2022-06-20T00:02:46.530Z'),
        guestName: 'Evie Okuneva',
        id: '233dd6c1-4821-4d94-a3dc-a856afadaacc',
        isUnread: false,
        messages: [
            new Shared\PropertyMessage(
                attachments: [],
                createdAt: Utils\Utils::parseDateTime('2025-04-28T06:27:46.833Z'),
                id: '662cd613-1d57-4ae1-a27c-e6df603e5c46',
                isAutomatic: false,
                message: 'Vinitor caterva amor sophismata admitto colo tempore aufero torrens.',
                senderName: 'Evie Okuneva',
                senderType: Shared\SenderType::Guest,
            ),
            new Shared\PropertyMessage(
                attachments: [],
                createdAt: Utils\Utils::parseDateTime('2026-05-13T16:12:13.345Z'),
                id: 'e9f49f49-5e6a-4bf2-af98-f0daf19d09c5',
                message: 'Aequitas torqueo curiositas cimentarius repellendus auditor degero ademptio adnuo.',
                senderName: 'Ms. Patti Lynch',
                senderType: Shared\SenderType::Host,
            ),
        ],
        metadata: [],
        source: 'Airbnb',
        updatedAt: Utils\Utils::parseDateTime('2026-05-13T16:12:13.345Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->conversation->createPropertyConversation(
    request: $request
);

if ($response->propertyConversation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreatePropertyConversationRequest](../../Models/Operations/CreatePropertyConversationRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreatePropertyConversationResponse](../../Models/Operations/CreatePropertyConversationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPropertyConversation

Retrieves a single PropertyConversation by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPropertyConversation" method="get" path="/property/{connection_id}/conversation/{id}" -->
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

$request = new Operations\GetPropertyConversationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->conversation->getPropertyConversation(
    request: $request
);

if ($response->propertyConversation !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetPropertyConversationRequest](../../Models/Operations/GetPropertyConversationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetPropertyConversationResponse](../../Models/Operations/GetPropertyConversationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPropertyConversations

Returns a list of PropertyConversations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPropertyConversations" method="get" path="/property/{connection_id}/conversation" -->
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

$request = new Operations\ListPropertyConversationsRequest(
    connectionId: '<id>',
);

$response = $sdk->conversation->listPropertyConversations(
    request: $request
);

if ($response->propertyConversations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListPropertyConversationsRequest](../../Models/Operations/ListPropertyConversationsRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListPropertyConversationsResponse](../../Models/Operations/ListPropertyConversationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |