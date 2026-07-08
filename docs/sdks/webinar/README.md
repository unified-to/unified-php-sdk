# Webinar

## Overview

### Available Operations

* [createCalendarWebinar](#createcalendarwebinar) - Create a webinar
* [getCalendarWebinar](#getcalendarwebinar) - Retrieve a webinar
* [listCalendarWebinars](#listcalendarwebinars) - List all webinars
* [patchCalendarWebinar](#patchcalendarwebinar) - Update a webinar
* [removeCalendarWebinar](#removecalendarwebinar) - Remove a webinar
* [updateCalendarWebinar](#updatecalendarwebinar) - Update a webinar

## createCalendarWebinar

Create a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarWebinar" method="post" path="/calendar/{connection_id}/webinar" -->
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

$request = new Operations\CreateCalendarWebinarRequest(
    calendarWebinar: new Shared\CalendarWebinar(),
    connectionId: '<id>',
);

$response = $sdk->webinar->createCalendarWebinar(
    request: $request
);

if ($response->calendarWebinar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateCalendarWebinarRequest](../../Models/Operations/CreateCalendarWebinarRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateCalendarWebinarResponse](../../Models/Operations/CreateCalendarWebinarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarWebinar

Retrieve a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarWebinar" method="get" path="/calendar/{connection_id}/webinar/{id}" -->
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

$request = new Operations\GetCalendarWebinarRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->webinar->getCalendarWebinar(
    request: $request
);

if ($response->calendarWebinar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetCalendarWebinarRequest](../../Models/Operations/GetCalendarWebinarRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetCalendarWebinarResponse](../../Models/Operations/GetCalendarWebinarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarWebinars

List all webinars

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarWebinars" method="get" path="/calendar/{connection_id}/webinar" -->
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

$request = new Operations\ListCalendarWebinarsRequest(
    connectionId: '<id>',
);

$response = $sdk->webinar->listCalendarWebinars(
    request: $request
);

if ($response->calendarWebinars !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListCalendarWebinarsRequest](../../Models/Operations/ListCalendarWebinarsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListCalendarWebinarsResponse](../../Models/Operations/ListCalendarWebinarsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarWebinar

Update a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarWebinar" method="patch" path="/calendar/{connection_id}/webinar/{id}" -->
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

$request = new Operations\PatchCalendarWebinarRequest(
    calendarWebinar: new Shared\CalendarWebinar(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->webinar->patchCalendarWebinar(
    request: $request
);

if ($response->calendarWebinar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchCalendarWebinarRequest](../../Models/Operations/PatchCalendarWebinarRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchCalendarWebinarResponse](../../Models/Operations/PatchCalendarWebinarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCalendarWebinar

Remove a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarWebinar" method="delete" path="/calendar/{connection_id}/webinar/{id}" -->
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

$request = new Operations\RemoveCalendarWebinarRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->webinar->removeCalendarWebinar(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveCalendarWebinarRequest](../../Models/Operations/RemoveCalendarWebinarRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveCalendarWebinarResponse](../../Models/Operations/RemoveCalendarWebinarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarWebinar

Update a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarWebinar" method="put" path="/calendar/{connection_id}/webinar/{id}" -->
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

$request = new Operations\UpdateCalendarWebinarRequest(
    calendarWebinar: new Shared\CalendarWebinar(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->webinar->updateCalendarWebinar(
    request: $request
);

if ($response->calendarWebinar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateCalendarWebinarRequest](../../Models/Operations/UpdateCalendarWebinarRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateCalendarWebinarResponse](../../Models/Operations/UpdateCalendarWebinarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |