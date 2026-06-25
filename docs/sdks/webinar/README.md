# Webinar

## Overview

### Available Operations

* [createCalendarWebinar2](#createcalendarwebinar2) - Create a webinar
* [getCalendarWebinar2](#getcalendarwebinar2) - Retrieve a webinar
* [listCalendarWebinars2](#listcalendarwebinars2) - List all webinars
* [patchCalendarWebinar2](#patchcalendarwebinar2) - Update a webinar
* [removeCalendarWebinar2](#removecalendarwebinar2) - Remove a webinar
* [updateCalendarWebinar2](#updatecalendarwebinar2) - Update a webinar

## createCalendarWebinar2

Create a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarWebinar2" method="post" path="/calendar/{connection_id}/webinar" -->
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

$request = new Operations\CreateCalendarWebinar2Request(
    calendarWebinar: new Shared\CalendarWebinar(),
    connectionId: '<id>',
);

$response = $sdk->webinar->createCalendarWebinar2(
    request: $request
);

if ($response->calendarWebinar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateCalendarWebinar2Request](../../Models/Operations/CreateCalendarWebinar2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateCalendarWebinar2Response](../../Models/Operations/CreateCalendarWebinar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarWebinar2

Retrieve a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarWebinar2" method="get" path="/calendar/{connection_id}/webinar/{id}" -->
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

$request = new Operations\GetCalendarWebinar2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->webinar->getCalendarWebinar2(
    request: $request
);

if ($response->calendarWebinar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetCalendarWebinar2Request](../../Models/Operations/GetCalendarWebinar2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetCalendarWebinar2Response](../../Models/Operations/GetCalendarWebinar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarWebinars2

List all webinars

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarWebinars2" method="get" path="/calendar/{connection_id}/webinar" -->
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

$request = new Operations\ListCalendarWebinars2Request(
    connectionId: '<id>',
);

$response = $sdk->webinar->listCalendarWebinars2(
    request: $request
);

if ($response->calendarWebinars !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListCalendarWebinars2Request](../../Models/Operations/ListCalendarWebinars2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListCalendarWebinars2Response](../../Models/Operations/ListCalendarWebinars2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarWebinar2

Update a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarWebinar2" method="patch" path="/calendar/{connection_id}/webinar/{id}" -->
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

$request = new Operations\PatchCalendarWebinar2Request(
    calendarWebinar: new Shared\CalendarWebinar(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->webinar->patchCalendarWebinar2(
    request: $request
);

if ($response->calendarWebinar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchCalendarWebinar2Request](../../Models/Operations/PatchCalendarWebinar2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchCalendarWebinar2Response](../../Models/Operations/PatchCalendarWebinar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCalendarWebinar2

Remove a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarWebinar2" method="delete" path="/calendar/{connection_id}/webinar/{id}" -->
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

$request = new Operations\RemoveCalendarWebinar2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->webinar->removeCalendarWebinar2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveCalendarWebinar2Request](../../Models/Operations/RemoveCalendarWebinar2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveCalendarWebinar2Response](../../Models/Operations/RemoveCalendarWebinar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarWebinar2

Update a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarWebinar2" method="put" path="/calendar/{connection_id}/webinar/{id}" -->
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

$request = new Operations\UpdateCalendarWebinar2Request(
    calendarWebinar: new Shared\CalendarWebinar(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->webinar->updateCalendarWebinar2(
    request: $request
);

if ($response->calendarWebinar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateCalendarWebinar2Request](../../Models/Operations/UpdateCalendarWebinar2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateCalendarWebinar2Response](../../Models/Operations/UpdateCalendarWebinar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |