# Bot

## Overview

### Available Operations

* [createCalendarBot](#createcalendarbot) - Create a bot
* [getCalendarBot](#getcalendarbot) - Retrieve a bot
* [listCalendarBots](#listcalendarbots) - List all bots
* [patchCalendarBot](#patchcalendarbot) - Update a bot
* [removeCalendarBot](#removecalendarbot) - Remove a bot
* [updateCalendarBot](#updatecalendarbot) - Update a bot

## createCalendarBot

Creates a CalendarBot. Provide the unified CalendarBot fields in the request body; they are mapped to the provider's API. Returns the created CalendarBot.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarBot" method="post" path="/calendar/{connection_id}/bot" -->
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

$request = new Operations\CreateCalendarBotRequest(
    calendarBot: new Shared\CalendarBot(),
    connectionId: '<id>',
);

$response = $sdk->bot->createCalendarBot(
    request: $request
);

if ($response->calendarBot !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateCalendarBotRequest](../../Models/Operations/CreateCalendarBotRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateCalendarBotResponse](../../Models/Operations/CreateCalendarBotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarBot

Retrieves a single CalendarBot by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarBot" method="get" path="/calendar/{connection_id}/bot/{id}" -->
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

$request = new Operations\GetCalendarBotRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bot->getCalendarBot(
    request: $request
);

if ($response->calendarBot !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetCalendarBotRequest](../../Models/Operations/GetCalendarBotRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetCalendarBotResponse](../../Models/Operations/GetCalendarBotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarBots

Returns a list of CalendarBots. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarBots" method="get" path="/calendar/{connection_id}/bot" -->
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

$request = new Operations\ListCalendarBotsRequest(
    connectionId: '<id>',
);

$response = $sdk->bot->listCalendarBots(
    request: $request
);

if ($response->calendarBots !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListCalendarBotsRequest](../../Models/Operations/ListCalendarBotsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListCalendarBotsResponse](../../Models/Operations/ListCalendarBotsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarBot

Updates the CalendarBot identified by `id`. Provide the unified CalendarBot fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarBot" method="patch" path="/calendar/{connection_id}/bot/{id}" -->
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

$request = new Operations\PatchCalendarBotRequest(
    calendarBot: new Shared\CalendarBot(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bot->patchCalendarBot(
    request: $request
);

if ($response->calendarBot !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchCalendarBotRequest](../../Models/Operations/PatchCalendarBotRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchCalendarBotResponse](../../Models/Operations/PatchCalendarBotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCalendarBot

Deletes the CalendarBot identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarBot" method="delete" path="/calendar/{connection_id}/bot/{id}" -->
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

$request = new Operations\RemoveCalendarBotRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bot->removeCalendarBot(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveCalendarBotRequest](../../Models/Operations/RemoveCalendarBotRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveCalendarBotResponse](../../Models/Operations/RemoveCalendarBotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarBot

Updates the CalendarBot identified by `id`. Provide the unified CalendarBot fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarBot" method="put" path="/calendar/{connection_id}/bot/{id}" -->
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

$request = new Operations\UpdateCalendarBotRequest(
    calendarBot: new Shared\CalendarBot(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bot->updateCalendarBot(
    request: $request
);

if ($response->calendarBot !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateCalendarBotRequest](../../Models/Operations/UpdateCalendarBotRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateCalendarBotResponse](../../Models/Operations/UpdateCalendarBotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |