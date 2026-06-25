# Calendar

## Overview

### Available Operations

* [createCalendarCalendar2](#createcalendarcalendar2) - Create a calendar
* [createCalendarEvent2](#createcalendarevent2) - Create an event
* [createCalendarLink2](#createcalendarlink2) - Create a link
* [createCalendarWebinar2](#createcalendarwebinar2) - Create a webinar
* [getCalendarCalendar2](#getcalendarcalendar2) - Retrieve a calendar
* [getCalendarEvent2](#getcalendarevent2) - Retrieve an event
* [getCalendarLink2](#getcalendarlink2) - Retrieve a link
* [getCalendarRecording2](#getcalendarrecording2) - Retrieve a recording
* [getCalendarWebinar2](#getcalendarwebinar2) - Retrieve a webinar
* [listCalendarBusies2](#listcalendarbusies2) - List all busies
* [listCalendarCalendars2](#listcalendarcalendars2) - List all calendars
* [listCalendarEvents2](#listcalendarevents2) - List all events
* [listCalendarLinks2](#listcalendarlinks2) - List all links
* [listCalendarRecordings2](#listcalendarrecordings2) - List all recordings
* [listCalendarWebinars2](#listcalendarwebinars2) - List all webinars
* [patchCalendarCalendar2](#patchcalendarcalendar2) - Update a calendar
* [patchCalendarEvent2](#patchcalendarevent2) - Update an event
* [patchCalendarLink2](#patchcalendarlink2) - Update a link
* [patchCalendarWebinar2](#patchcalendarwebinar2) - Update a webinar
* [removeCalendarCalendar2](#removecalendarcalendar2) - Remove a calendar
* [removeCalendarEvent2](#removecalendarevent2) - Remove an event
* [removeCalendarLink2](#removecalendarlink2) - Remove a link
* [removeCalendarWebinar2](#removecalendarwebinar2) - Remove a webinar
* [updateCalendarCalendar2](#updatecalendarcalendar2) - Update a calendar
* [updateCalendarEvent2](#updatecalendarevent2) - Update an event
* [updateCalendarLink2](#updatecalendarlink2) - Update a link
* [updateCalendarWebinar2](#updatecalendarwebinar2) - Update a webinar

## createCalendarCalendar2

Create a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarCalendar2" method="post" path="/calendar/{connection_id}/calendar" -->
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

$request = new Operations\CreateCalendarCalendar2Request(
    calendarCalendar: new Shared\CalendarCalendar(),
    connectionId: '<id>',
);

$response = $sdk->calendar->createCalendarCalendar2(
    request: $request
);

if ($response->calendarCalendar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateCalendarCalendar2Request](../../Models/Operations/CreateCalendarCalendar2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateCalendarCalendar2Response](../../Models/Operations/CreateCalendarCalendar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCalendarEvent2

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarEvent2" method="post" path="/calendar/{connection_id}/event" -->
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

$request = new Operations\CreateCalendarEvent2Request(
    calendarEvent: new Shared\CalendarEvent(),
    connectionId: '<id>',
);

$response = $sdk->calendar->createCalendarEvent2(
    request: $request
);

if ($response->calendarEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateCalendarEvent2Request](../../Models/Operations/CreateCalendarEvent2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateCalendarEvent2Response](../../Models/Operations/CreateCalendarEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCalendarLink2

Create a link

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarLink2" method="post" path="/calendar/{connection_id}/link" -->
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

$request = new Operations\CreateCalendarLink2Request(
    calendarLink: new Shared\CalendarLink(
        url: 'https://prestigious-fort.name/',
    ),
    connectionId: '<id>',
);

$response = $sdk->calendar->createCalendarLink2(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateCalendarLink2Request](../../Models/Operations/CreateCalendarLink2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateCalendarLink2Response](../../Models/Operations/CreateCalendarLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->calendar->createCalendarWebinar2(
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

## getCalendarCalendar2

Retrieve a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarCalendar2" method="get" path="/calendar/{connection_id}/calendar/{id}" -->
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

$request = new Operations\GetCalendarCalendar2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->getCalendarCalendar2(
    request: $request
);

if ($response->calendarCalendar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetCalendarCalendar2Request](../../Models/Operations/GetCalendarCalendar2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetCalendarCalendar2Response](../../Models/Operations/GetCalendarCalendar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarEvent2

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarEvent2" method="get" path="/calendar/{connection_id}/event/{id}" -->
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

$request = new Operations\GetCalendarEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->getCalendarEvent2(
    request: $request
);

if ($response->calendarEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetCalendarEvent2Request](../../Models/Operations/GetCalendarEvent2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetCalendarEvent2Response](../../Models/Operations/GetCalendarEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarLink2

Retrieve a link

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarLink2" method="get" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\GetCalendarLink2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->getCalendarLink2(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetCalendarLink2Request](../../Models/Operations/GetCalendarLink2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetCalendarLink2Response](../../Models/Operations/GetCalendarLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarRecording2

Retrieve a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarRecording2" method="get" path="/calendar/{connection_id}/recording/{id}" -->
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

$request = new Operations\GetCalendarRecording2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->getCalendarRecording2(
    request: $request
);

if ($response->calendarRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetCalendarRecording2Request](../../Models/Operations/GetCalendarRecording2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetCalendarRecording2Response](../../Models/Operations/GetCalendarRecording2Response.md)**

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

$response = $sdk->calendar->getCalendarWebinar2(
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

## listCalendarBusies2

List all busies

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarBusies2" method="get" path="/calendar/{connection_id}/busy" -->
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

$request = new Operations\ListCalendarBusies2Request(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarBusies2(
    request: $request
);

if ($response->calendarBusies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCalendarBusies2Request](../../Models/Operations/ListCalendarBusies2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListCalendarBusies2Response](../../Models/Operations/ListCalendarBusies2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarCalendars2

List all calendars

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarCalendars2" method="get" path="/calendar/{connection_id}/calendar" -->
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

$request = new Operations\ListCalendarCalendars2Request(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarCalendars2(
    request: $request
);

if ($response->calendarCalendars !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListCalendarCalendars2Request](../../Models/Operations/ListCalendarCalendars2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListCalendarCalendars2Response](../../Models/Operations/ListCalendarCalendars2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarEvents2

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarEvents2" method="get" path="/calendar/{connection_id}/event" -->
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

$request = new Operations\ListCalendarEvents2Request(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarEvents2(
    request: $request
);

if ($response->calendarEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListCalendarEvents2Request](../../Models/Operations/ListCalendarEvents2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListCalendarEvents2Response](../../Models/Operations/ListCalendarEvents2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarLinks2

List all links

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarLinks2" method="get" path="/calendar/{connection_id}/link" -->
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

$request = new Operations\ListCalendarLinks2Request(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarLinks2(
    request: $request
);

if ($response->calendarLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCalendarLinks2Request](../../Models/Operations/ListCalendarLinks2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCalendarLinks2Response](../../Models/Operations/ListCalendarLinks2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarRecordings2

List all recordings

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarRecordings2" method="get" path="/calendar/{connection_id}/recording" -->
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

$request = new Operations\ListCalendarRecordings2Request(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarRecordings2(
    request: $request
);

if ($response->calendarRecordings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListCalendarRecordings2Request](../../Models/Operations/ListCalendarRecordings2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListCalendarRecordings2Response](../../Models/Operations/ListCalendarRecordings2Response.md)**

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

$response = $sdk->calendar->listCalendarWebinars2(
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

## patchCalendarCalendar2

Update a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarCalendar2" method="patch" path="/calendar/{connection_id}/calendar/{id}" -->
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

$request = new Operations\PatchCalendarCalendar2Request(
    calendarCalendar: new Shared\CalendarCalendar(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->patchCalendarCalendar2(
    request: $request
);

if ($response->calendarCalendar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchCalendarCalendar2Request](../../Models/Operations/PatchCalendarCalendar2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchCalendarCalendar2Response](../../Models/Operations/PatchCalendarCalendar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarEvent2

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarEvent2" method="patch" path="/calendar/{connection_id}/event/{id}" -->
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

$request = new Operations\PatchCalendarEvent2Request(
    calendarEvent: new Shared\CalendarEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->patchCalendarEvent2(
    request: $request
);

if ($response->calendarEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchCalendarEvent2Request](../../Models/Operations/PatchCalendarEvent2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchCalendarEvent2Response](../../Models/Operations/PatchCalendarEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarLink2

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarLink2" method="patch" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\PatchCalendarLink2Request(
    calendarLink: new Shared\CalendarLink(
        url: 'https://probable-accelerator.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->patchCalendarLink2(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchCalendarLink2Request](../../Models/Operations/PatchCalendarLink2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchCalendarLink2Response](../../Models/Operations/PatchCalendarLink2Response.md)**

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

$response = $sdk->calendar->patchCalendarWebinar2(
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

## removeCalendarCalendar2

Remove a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarCalendar2" method="delete" path="/calendar/{connection_id}/calendar/{id}" -->
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

$request = new Operations\RemoveCalendarCalendar2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->removeCalendarCalendar2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveCalendarCalendar2Request](../../Models/Operations/RemoveCalendarCalendar2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveCalendarCalendar2Response](../../Models/Operations/RemoveCalendarCalendar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCalendarEvent2

Remove an event

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarEvent2" method="delete" path="/calendar/{connection_id}/event/{id}" -->
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

$request = new Operations\RemoveCalendarEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->removeCalendarEvent2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveCalendarEvent2Request](../../Models/Operations/RemoveCalendarEvent2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveCalendarEvent2Response](../../Models/Operations/RemoveCalendarEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCalendarLink2

Remove a link

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarLink2" method="delete" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\RemoveCalendarLink2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->removeCalendarLink2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveCalendarLink2Request](../../Models/Operations/RemoveCalendarLink2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveCalendarLink2Response](../../Models/Operations/RemoveCalendarLink2Response.md)**

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

$response = $sdk->calendar->removeCalendarWebinar2(
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

## updateCalendarCalendar2

Update a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarCalendar2" method="put" path="/calendar/{connection_id}/calendar/{id}" -->
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

$request = new Operations\UpdateCalendarCalendar2Request(
    calendarCalendar: new Shared\CalendarCalendar(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->updateCalendarCalendar2(
    request: $request
);

if ($response->calendarCalendar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateCalendarCalendar2Request](../../Models/Operations/UpdateCalendarCalendar2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateCalendarCalendar2Response](../../Models/Operations/UpdateCalendarCalendar2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarEvent2

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarEvent2" method="put" path="/calendar/{connection_id}/event/{id}" -->
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

$request = new Operations\UpdateCalendarEvent2Request(
    calendarEvent: new Shared\CalendarEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->updateCalendarEvent2(
    request: $request
);

if ($response->calendarEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateCalendarEvent2Request](../../Models/Operations/UpdateCalendarEvent2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateCalendarEvent2Response](../../Models/Operations/UpdateCalendarEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarLink2

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarLink2" method="put" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\UpdateCalendarLink2Request(
    calendarLink: new Shared\CalendarLink(
        url: 'https://soupy-extension.net/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->updateCalendarLink2(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateCalendarLink2Request](../../Models/Operations/UpdateCalendarLink2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateCalendarLink2Response](../../Models/Operations/UpdateCalendarLink2Response.md)**

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

$response = $sdk->calendar->updateCalendarWebinar2(
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