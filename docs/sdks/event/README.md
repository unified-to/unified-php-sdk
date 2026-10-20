# Event

## Overview

### Available Operations

* [createAnalyticsEvent](#createanalyticsevent) - Create an event
* [createCalendarEvent](#createcalendarevent) - Create an event
* [createCdpEvent](#createcdpevent) - Create an event
* [createCrmEvent](#createcrmevent) - Create an event
* [getAnalyticsEvent](#getanalyticsevent) - Retrieve an event
* [getCalendarEvent](#getcalendarevent) - Retrieve an event
* [getCdpEvent](#getcdpevent) - Retrieve an event
* [getClubsEvent](#getclubsevent) - Retrieve an event
* [getCrmEvent](#getcrmevent) - Retrieve an event
* [listAnalyticsEvents](#listanalyticsevents) - List all events
* [listCalendarEvents](#listcalendarevents) - List all events
* [listCdpEvents](#listcdpevents) - List all events
* [listClubsEvents](#listclubsevents) - List all events
* [listCrmEvents](#listcrmevents) - List all events
* [patchCalendarEvent](#patchcalendarevent) - Update an event
* [patchCdpEvent](#patchcdpevent) - Update an event
* [patchCrmEvent](#patchcrmevent) - Update an event
* [patchMessagingEvent](#patchmessagingevent) - Update an event
* [removeCalendarEvent](#removecalendarevent) - Remove an event
* [removeCdpEvent](#removecdpevent) - Remove an event
* [removeCrmEvent](#removecrmevent) - Remove an event
* [updateCalendarEvent](#updatecalendarevent) - Update an event
* [updateCdpEvent](#updatecdpevent) - Update an event
* [updateCrmEvent](#updatecrmevent) - Update an event
* [updateMessagingEvent](#updatemessagingevent) - Update an event

## createAnalyticsEvent

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsEvent" method="post" path="/analytics/{connection_id}/event" example="analytics_event" -->
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

$request = new Operations\CreateAnalyticsEventRequest(
    analyticsEvent: new Shared\AnalyticsEvent(
        createdAt: Utils\Utils::parseDateTime('2023-06-21T03:13:22.954Z'),
        eventType: Shared\EventType::ScreenView,
        id: 'fb6f5a69-e1f9-45c6-9fc8-24592d669597',
        metadata: [
            'key' => new Shared\PropertyAnalyticsEventMetadata(),
        ],
        name: 'page_view',
        pageUrl: 'https://golden-carboxyl.biz',
        updatedAt: Utils\Utils::parseDateTime('2023-09-24T14:06:27.235Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->event->createAnalyticsEvent(
    request: $request
);

if ($response->analyticsEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateAnalyticsEventRequest](../../Models/Operations/CreateAnalyticsEventRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateAnalyticsEventResponse](../../Models/Operations/CreateAnalyticsEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCalendarEvent

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarEvent" method="post" path="/calendar/{connection_id}/event" example="calendar_event" -->
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

$request = new Operations\CreateCalendarEventRequest(
    calendarEvent: new Shared\CalendarEvent(
        attachments: [],
        conference: [],
        createdAt: '2019-08-04T14:33:51.814Z',
        endAt: '2020-05-24T03:47:02.479Z',
        hasConference: false,
        id: '4e3d114e-ba2b-441a-b39c-5c3f08d82d63',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        metadata: [],
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 4,
                endAt: Utils\Utils::parseDateTime('2025-03-23T17:00:09.005Z'),
                excludedDates: [
                    '2024-02-02T00:39:33.498Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Yearly,
                includedDates: [
                    '2023-07-06T09:41:22.743Z',
                    '2025-01-22T23:38:59.276Z',
                    '2024-04-01T04:56:01.383Z',
                ],
                interval: 7,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    -3,
                ],
                onMonths: [
                    0,
                    1,
                    6,
                    -10,
                    9,
                    0,
                ],
                onWeeks: [
                    -8,
                    3,
                    -7,
                    51,
                    -3,
                    -41,
                    15,
                    46,
                    -1,
                    46,
                    42,
                    11,
                    12,
                    -35,
                    -15,
                    -3,
                    -42,
                    50,
                    3,
                    -15,
                    -10,
                    6,
                    -53,
                    5,
                    -32,
                    -22,
                    43,
                    -44,
                    -23,
                    -21,
                    -18,
                    13,
                    -5,
                    2,
                    -49,
                ],
                onYearDays: [
                    -87,
                    339,
                    341,
                    287,
                    -17,
                    319,
                    -3,
                    238,
                    -115,
                    -116,
                    283,
                    -61,
                    -254,
                    86,
                    -163,
                    5,
                    -171,
                    -99,
                    279,
                    19,
                    303,
                    -106,
                    90,
                    109,
                    -185,
                    -285,
                    -83,
                    -236,
                    66,
                    -215,
                    178,
                    64,
                    78,
                    5,
                    -251,
                    -79,
                    -271,
                    33,
                    320,
                    67,
                    -84,
                    -355,
                    -364,
                    348,
                    271,
                    -304,
                    -199,
                    106,
                    -345,
                    24,
                    -89,
                    -109,
                    -314,
                    365,
                    38,
                    -42,
                    123,
                    56,
                    -3,
                    31,
                    101,
                    326,
                    -160,
                    -101,
                    -267,
                    -309,
                    -363,
                    125,
                    -182,
                    363,
                    324,
                    36,
                    -269,
                    -79,
                    -60,
                    272,
                    -254,
                    -160,
                    -82,
                    19,
                    42,
                    69,
                    -104,
                    333,
                    236,
                    -287,
                    296,
                    261,
                    241,
                    348,
                    -72,
                    159,
                    -127,
                    229,
                    -158,
                    190,
                    -173,
                    -84,
                    -96,
                    176,
                    339,
                    -48,
                    287,
                    -46,
                    -101,
                    246,
                    -8,
                    -74,
                    338,
                    -51,
                    -42,
                    -128,
                    -169,
                    -174,
                    168,
                    -85,
                    37,
                    169,
                    -105,
                    231,
                    -250,
                    -286,
                    -7,
                    -121,
                    321,
                    278,
                    -120,
                    -96,
                    360,
                    337,
                    -258,
                    -179,
                    324,
                    -204,
                    327,
                    15,
                    365,
                    191,
                    -345,
                    -345,
                    56,
                    217,
                    60,
                    -264,
                    -248,
                    -316,
                    191,
                    -189,
                    -152,
                    -296,
                    194,
                    -42,
                    -21,
                    -218,
                    171,
                    -15,
                    301,
                    37,
                    -167,
                    18,
                    248,
                    -263,
                    27,
                    14,
                    59,
                    219,
                    -284,
                    221,
                    -76,
                    277,
                    183,
                    200,
                    -12,
                    -28,
                    -79,
                    150,
                    320,
                    -152,
                    -15,
                    -42,
                    -125,
                    -4,
                    269,
                    290,
                    52,
                    320,
                    344,
                    13,
                    -69,
                    255,
                    -154,
                    -281,
                    158,
                    25,
                    240,
                    -339,
                    96,
                    204,
                    324,
                    221,
                    37,
                    -333,
                    87,
                    354,
                    -365,
                    -203,
                    -341,
                    -79,
                    -208,
                    135,
                    132,
                    -351,
                    39,
                    -87,
                    -297,
                    -66,
                    346,
                    69,
                    -177,
                    235,
                    295,
                    -366,
                    -55,
                    -297,
                    -308,
                    -294,
                    -208,
                    141,
                    267,
                    64,
                    100,
                    -355,
                    -335,
                    280,
                    224,
                    259,
                    1,
                    -146,
                    48,
                    335,
                    363,
                    308,
                    -224,
                    109,
                    -10,
                    -89,
                    -211,
                    -47,
                    -130,
                    341,
                    -250,
                    295,
                    -329,
                    -205,
                    231,
                    247,
                    -228,
                    166,
                    -28,
                    36,
                    277,
                    -115,
                    100,
                    2,
                    81,
                    -66,
                    31,
                    -39,
                    -319,
                    -251,
                    -254,
                ],
                timezone: 'Asia/Ho_Chi_Minh',
                weekStart: Shared\WeekStart::Tu,
            ),
        ],
        startAt: '2020-05-23T18:33:40.498Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-30T01:45:14.348Z',
        webUrl: 'https://another-pinstripe.com',
    ),
    connectionId: '<id>',
);

$response = $sdk->event->createCalendarEvent(
    request: $request
);

if ($response->calendarEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateCalendarEventRequest](../../Models/Operations/CreateCalendarEventRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateCalendarEventResponse](../../Models/Operations/CreateCalendarEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCdpEvent

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createCdpEvent" method="post" path="/cdp/{connection_id}/event" -->
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

$request = new Operations\CreateCdpEventRequest(
    cdpEvent: new Shared\CdpEvent(),
    connectionId: '<id>',
);

$response = $sdk->event->createCdpEvent(
    request: $request
);

if ($response->cdpEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCdpEventRequest](../../Models/Operations/CreateCdpEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCdpEventResponse](../../Models/Operations/CreateCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCrmEvent

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmEvent" method="post" path="/crm/{connection_id}/event" example="crm_event" -->
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

$request = new Operations\CreateCrmEventRequest(
    crmEvent: new Shared\CrmEvent(
        call: new Shared\PropertyCrmEventCall(
            description: 'Arbitro aptus.',
            duration: 64,
            startAt: Utils\Utils::parseDateTime('2024-12-10T04:23:26.129Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: '007dbc50-0981-4467-94be-36d3cd65c1ea',
        metadata: [],
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-10T08:01:43.931Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->event->createCrmEvent(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateCrmEventRequest](../../Models/Operations/CreateCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateCrmEventResponse](../../Models/Operations/CreateCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAnalyticsEvent

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsEvent" method="get" path="/analytics/{connection_id}/event/{id}" -->
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

$request = new Operations\GetAnalyticsEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->getAnalyticsEvent(
    request: $request
);

if ($response->analyticsEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetAnalyticsEventRequest](../../Models/Operations/GetAnalyticsEventRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetAnalyticsEventResponse](../../Models/Operations/GetAnalyticsEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarEvent

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarEvent" method="get" path="/calendar/{connection_id}/event/{id}" -->
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

$request = new Operations\GetCalendarEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->getCalendarEvent(
    request: $request
);

if ($response->calendarEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetCalendarEventRequest](../../Models/Operations/GetCalendarEventRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetCalendarEventResponse](../../Models/Operations/GetCalendarEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCdpEvent

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getCdpEvent" method="get" path="/cdp/{connection_id}/event/{id}" -->
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

$request = new Operations\GetCdpEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->getCdpEvent(
    request: $request
);

if ($response->cdpEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCdpEventRequest](../../Models/Operations/GetCdpEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCdpEventResponse](../../Models/Operations/GetCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getClubsEvent

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsEvent" method="get" path="/clubs/{connection_id}/event/{id}" -->
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

$request = new Operations\GetClubsEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->getClubsEvent(
    request: $request
);

if ($response->clubsEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetClubsEventRequest](../../Models/Operations/GetClubsEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetClubsEventResponse](../../Models/Operations/GetClubsEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmEvent

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmEvent" method="get" path="/crm/{connection_id}/event/{id}" -->
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

$request = new Operations\GetCrmEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->getCrmEvent(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetCrmEventRequest](../../Models/Operations/GetCrmEventRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetCrmEventResponse](../../Models/Operations/GetCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsEvents

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsEvents" method="get" path="/analytics/{connection_id}/event" -->
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

$request = new Operations\ListAnalyticsEventsRequest(
    connectionId: '<id>',
);

$response = $sdk->event->listAnalyticsEvents(
    request: $request
);

if ($response->analyticsEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListAnalyticsEventsRequest](../../Models/Operations/ListAnalyticsEventsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListAnalyticsEventsResponse](../../Models/Operations/ListAnalyticsEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarEvents

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarEvents" method="get" path="/calendar/{connection_id}/event" -->
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

$request = new Operations\ListCalendarEventsRequest(
    connectionId: '<id>',
);

$response = $sdk->event->listCalendarEvents(
    request: $request
);

if ($response->calendarEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCalendarEventsRequest](../../Models/Operations/ListCalendarEventsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCalendarEventsResponse](../../Models/Operations/ListCalendarEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCdpEvents

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listCdpEvents" method="get" path="/cdp/{connection_id}/event" -->
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

$request = new Operations\ListCdpEventsRequest(
    connectionId: '<id>',
);

$response = $sdk->event->listCdpEvents(
    request: $request
);

if ($response->cdpEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCdpEventsRequest](../../Models/Operations/ListCdpEventsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCdpEventsResponse](../../Models/Operations/ListCdpEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listClubsEvents

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsEvents" method="get" path="/clubs/{connection_id}/event" -->
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

$request = new Operations\ListClubsEventsRequest(
    connectionId: '<id>',
);

$response = $sdk->event->listClubsEvents(
    request: $request
);

if ($response->clubsEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListClubsEventsRequest](../../Models/Operations/ListClubsEventsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListClubsEventsResponse](../../Models/Operations/ListClubsEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmEvents

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmEvents" method="get" path="/crm/{connection_id}/event" -->
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

$request = new Operations\ListCrmEventsRequest(
    connectionId: '<id>',
);

$response = $sdk->event->listCrmEvents(
    request: $request
);

if ($response->crmEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListCrmEventsRequest](../../Models/Operations/ListCrmEventsRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListCrmEventsResponse](../../Models/Operations/ListCrmEventsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarEvent" method="patch" path="/calendar/{connection_id}/event/{id}" example="calendar_event" -->
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

$request = new Operations\PatchCalendarEventRequest(
    calendarEvent: new Shared\CalendarEvent(
        attachments: [],
        conference: [],
        createdAt: '2019-08-04T14:33:51.814Z',
        endAt: '2020-05-24T03:47:02.484Z',
        hasConference: false,
        id: '6c102b53-2d33-417d-851f-56457ddabd50',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        metadata: [],
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 4,
                endAt: Utils\Utils::parseDateTime('2025-03-23T17:00:09.038Z'),
                excludedDates: [
                    '2024-02-02T00:39:33.524Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Yearly,
                includedDates: [
                    '2023-07-06T09:41:22.766Z',
                    '2025-01-22T23:38:59.308Z',
                    '2024-04-01T04:56:01.410Z',
                ],
                interval: 7,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    -3,
                ],
                onMonths: [
                    0,
                    1,
                    6,
                    -10,
                    9,
                    0,
                ],
                onWeeks: [
                    -8,
                    3,
                    -7,
                    51,
                    -3,
                    -41,
                    15,
                    46,
                    -1,
                    46,
                    42,
                    11,
                    12,
                    -35,
                    -15,
                    -3,
                    -42,
                    50,
                    3,
                    -15,
                    -10,
                    6,
                    -53,
                    5,
                    -32,
                    -22,
                    43,
                    -44,
                    -23,
                    -21,
                    -18,
                    13,
                    -5,
                    2,
                    -49,
                ],
                onYearDays: [
                    -87,
                    339,
                    341,
                    287,
                    -17,
                    319,
                    -3,
                    238,
                    -115,
                    -116,
                    283,
                    -61,
                    -254,
                    86,
                    -163,
                    5,
                    -171,
                    -99,
                    279,
                    19,
                    303,
                    -106,
                    90,
                    109,
                    -185,
                    -285,
                    -83,
                    -236,
                    66,
                    -215,
                    178,
                    64,
                    78,
                    5,
                    -251,
                    -79,
                    -271,
                    33,
                    320,
                    67,
                    -84,
                    -355,
                    -364,
                    348,
                    271,
                    -304,
                    -199,
                    106,
                    -345,
                    24,
                    -89,
                    -109,
                    -314,
                    365,
                    38,
                    -42,
                    123,
                    56,
                    -3,
                    31,
                    101,
                    326,
                    -160,
                    -101,
                    -267,
                    -309,
                    -363,
                    125,
                    -182,
                    363,
                    324,
                    36,
                    -269,
                    -79,
                    -60,
                    272,
                    -254,
                    -160,
                    -82,
                    19,
                    42,
                    69,
                    -104,
                    333,
                    236,
                    -287,
                    296,
                    261,
                    241,
                    348,
                    -72,
                    159,
                    -127,
                    229,
                    -158,
                    190,
                    -173,
                    -84,
                    -96,
                    176,
                    339,
                    -48,
                    287,
                    -46,
                    -101,
                    246,
                    -8,
                    -74,
                    338,
                    -51,
                    -42,
                    -128,
                    -169,
                    -174,
                    168,
                    -85,
                    37,
                    169,
                    -105,
                    231,
                    -250,
                    -286,
                    -7,
                    -121,
                    321,
                    278,
                    -120,
                    -96,
                    360,
                    337,
                    -258,
                    -179,
                    324,
                    -204,
                    327,
                    15,
                    365,
                    191,
                    -345,
                    -345,
                    56,
                    217,
                    60,
                    -264,
                    -248,
                    -316,
                    191,
                    -189,
                    -152,
                    -296,
                    194,
                    -42,
                    -21,
                    -218,
                    171,
                    -15,
                    301,
                    37,
                    -167,
                    18,
                    248,
                    -263,
                    27,
                    14,
                    59,
                    219,
                    -284,
                    221,
                    -76,
                    277,
                    183,
                    200,
                    -12,
                    -28,
                    -79,
                    150,
                    320,
                    -152,
                    -15,
                    -42,
                    -125,
                    -4,
                    269,
                    290,
                    52,
                    320,
                    344,
                    13,
                    -69,
                    255,
                    -154,
                    -281,
                    158,
                    25,
                    240,
                    -339,
                    96,
                    204,
                    324,
                    221,
                    37,
                    -333,
                    87,
                    354,
                    -365,
                    -203,
                    -341,
                    -79,
                    -208,
                    135,
                    132,
                    -351,
                    39,
                    -87,
                    -297,
                    -66,
                    346,
                    69,
                    -177,
                    235,
                    295,
                    -366,
                    -55,
                    -297,
                    -308,
                    -294,
                    -208,
                    141,
                    267,
                    64,
                    100,
                    -355,
                    -335,
                    280,
                    224,
                    259,
                    1,
                    -146,
                    48,
                    335,
                    363,
                    308,
                    -224,
                    109,
                    -10,
                    -89,
                    -211,
                    -47,
                    -130,
                    341,
                    -250,
                    295,
                    -329,
                    -205,
                    231,
                    247,
                    -228,
                    166,
                    -28,
                    36,
                    277,
                    -115,
                    100,
                    2,
                    81,
                    -66,
                    31,
                    -39,
                    -319,
                    -251,
                    -254,
                ],
                timezone: 'Asia/Ho_Chi_Minh',
                weekStart: Shared\WeekStart::Tu,
            ),
        ],
        startAt: '2020-05-23T18:33:40.503Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-30T01:45:14.353Z',
        webUrl: 'https://another-pinstripe.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->patchCalendarEvent(
    request: $request
);

if ($response->calendarEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchCalendarEventRequest](../../Models/Operations/PatchCalendarEventRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchCalendarEventResponse](../../Models/Operations/PatchCalendarEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCdpEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCdpEvent" method="patch" path="/cdp/{connection_id}/event/{id}" -->
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

$request = new Operations\PatchCdpEventRequest(
    cdpEvent: new Shared\CdpEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->patchCdpEvent(
    request: $request
);

if ($response->cdpEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCdpEventRequest](../../Models/Operations/PatchCdpEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCdpEventResponse](../../Models/Operations/PatchCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmEvent" method="patch" path="/crm/{connection_id}/event/{id}" example="crm_event" -->
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

$request = new Operations\PatchCrmEventRequest(
    crmEvent: new Shared\CrmEvent(
        call: new Shared\PropertyCrmEventCall(
            description: 'Arbitro aptus.',
            duration: 64,
            startAt: Utils\Utils::parseDateTime('2024-12-10T04:23:26.176Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: '1e37c4ca-805c-4ac6-a935-d9235a179c75',
        metadata: [],
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-10T08:01:43.997Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->patchCrmEvent(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchCrmEventRequest](../../Models/Operations/PatchCrmEventRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchCrmEventResponse](../../Models/Operations/PatchCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchMessagingEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchMessagingEvent" method="patch" path="/messaging/{connection_id}/event/{id}" example="messaging_event" -->
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

$request = new Operations\PatchMessagingEventRequest(
    messagingEvent: new Shared\MessagingEvent(
        channel: new Shared\PropertyMessagingEventChannel(
            id: '',
            name: '',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-05-30T19:44:46.461Z'),
        id: 'e20be20d-d152-4cb9-8138-1a3a3cd2619a',
        isReplacingOriginal: false,
        metadata: [],
        type: Shared\MessagingEventType::ButtonClick,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->patchMessagingEvent(
    request: $request
);

if ($response->messagingEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchMessagingEventRequest](../../Models/Operations/PatchMessagingEventRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchMessagingEventResponse](../../Models/Operations/PatchMessagingEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCalendarEvent

Remove an event

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarEvent" method="delete" path="/calendar/{connection_id}/event/{id}" -->
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

$request = new Operations\RemoveCalendarEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->removeCalendarEvent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveCalendarEventRequest](../../Models/Operations/RemoveCalendarEventRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveCalendarEventResponse](../../Models/Operations/RemoveCalendarEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCdpEvent

Remove an event

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCdpEvent" method="delete" path="/cdp/{connection_id}/event/{id}" -->
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

$request = new Operations\RemoveCdpEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->removeCdpEvent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCdpEventRequest](../../Models/Operations/RemoveCdpEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCdpEventResponse](../../Models/Operations/RemoveCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmEvent

Remove an event

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmEvent" method="delete" path="/crm/{connection_id}/event/{id}" -->
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

$request = new Operations\RemoveCrmEventRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->removeCrmEvent(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveCrmEventRequest](../../Models/Operations/RemoveCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveCrmEventResponse](../../Models/Operations/RemoveCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarEvent" method="put" path="/calendar/{connection_id}/event/{id}" example="calendar_event" -->
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

$request = new Operations\UpdateCalendarEventRequest(
    calendarEvent: new Shared\CalendarEvent(
        attachments: [],
        conference: [],
        createdAt: '2019-08-04T14:33:51.814Z',
        endAt: '2020-05-24T03:47:02.484Z',
        hasConference: false,
        id: '6c102b53-2d33-417d-851f-56457ddabd50',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        metadata: [],
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 4,
                endAt: Utils\Utils::parseDateTime('2025-03-23T17:00:09.038Z'),
                excludedDates: [
                    '2024-02-02T00:39:33.524Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Yearly,
                includedDates: [
                    '2023-07-06T09:41:22.766Z',
                    '2025-01-22T23:38:59.308Z',
                    '2024-04-01T04:56:01.410Z',
                ],
                interval: 7,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    -3,
                ],
                onMonths: [
                    0,
                    1,
                    6,
                    -10,
                    9,
                    0,
                ],
                onWeeks: [
                    -8,
                    3,
                    -7,
                    51,
                    -3,
                    -41,
                    15,
                    46,
                    -1,
                    46,
                    42,
                    11,
                    12,
                    -35,
                    -15,
                    -3,
                    -42,
                    50,
                    3,
                    -15,
                    -10,
                    6,
                    -53,
                    5,
                    -32,
                    -22,
                    43,
                    -44,
                    -23,
                    -21,
                    -18,
                    13,
                    -5,
                    2,
                    -49,
                ],
                onYearDays: [
                    -87,
                    339,
                    341,
                    287,
                    -17,
                    319,
                    -3,
                    238,
                    -115,
                    -116,
                    283,
                    -61,
                    -254,
                    86,
                    -163,
                    5,
                    -171,
                    -99,
                    279,
                    19,
                    303,
                    -106,
                    90,
                    109,
                    -185,
                    -285,
                    -83,
                    -236,
                    66,
                    -215,
                    178,
                    64,
                    78,
                    5,
                    -251,
                    -79,
                    -271,
                    33,
                    320,
                    67,
                    -84,
                    -355,
                    -364,
                    348,
                    271,
                    -304,
                    -199,
                    106,
                    -345,
                    24,
                    -89,
                    -109,
                    -314,
                    365,
                    38,
                    -42,
                    123,
                    56,
                    -3,
                    31,
                    101,
                    326,
                    -160,
                    -101,
                    -267,
                    -309,
                    -363,
                    125,
                    -182,
                    363,
                    324,
                    36,
                    -269,
                    -79,
                    -60,
                    272,
                    -254,
                    -160,
                    -82,
                    19,
                    42,
                    69,
                    -104,
                    333,
                    236,
                    -287,
                    296,
                    261,
                    241,
                    348,
                    -72,
                    159,
                    -127,
                    229,
                    -158,
                    190,
                    -173,
                    -84,
                    -96,
                    176,
                    339,
                    -48,
                    287,
                    -46,
                    -101,
                    246,
                    -8,
                    -74,
                    338,
                    -51,
                    -42,
                    -128,
                    -169,
                    -174,
                    168,
                    -85,
                    37,
                    169,
                    -105,
                    231,
                    -250,
                    -286,
                    -7,
                    -121,
                    321,
                    278,
                    -120,
                    -96,
                    360,
                    337,
                    -258,
                    -179,
                    324,
                    -204,
                    327,
                    15,
                    365,
                    191,
                    -345,
                    -345,
                    56,
                    217,
                    60,
                    -264,
                    -248,
                    -316,
                    191,
                    -189,
                    -152,
                    -296,
                    194,
                    -42,
                    -21,
                    -218,
                    171,
                    -15,
                    301,
                    37,
                    -167,
                    18,
                    248,
                    -263,
                    27,
                    14,
                    59,
                    219,
                    -284,
                    221,
                    -76,
                    277,
                    183,
                    200,
                    -12,
                    -28,
                    -79,
                    150,
                    320,
                    -152,
                    -15,
                    -42,
                    -125,
                    -4,
                    269,
                    290,
                    52,
                    320,
                    344,
                    13,
                    -69,
                    255,
                    -154,
                    -281,
                    158,
                    25,
                    240,
                    -339,
                    96,
                    204,
                    324,
                    221,
                    37,
                    -333,
                    87,
                    354,
                    -365,
                    -203,
                    -341,
                    -79,
                    -208,
                    135,
                    132,
                    -351,
                    39,
                    -87,
                    -297,
                    -66,
                    346,
                    69,
                    -177,
                    235,
                    295,
                    -366,
                    -55,
                    -297,
                    -308,
                    -294,
                    -208,
                    141,
                    267,
                    64,
                    100,
                    -355,
                    -335,
                    280,
                    224,
                    259,
                    1,
                    -146,
                    48,
                    335,
                    363,
                    308,
                    -224,
                    109,
                    -10,
                    -89,
                    -211,
                    -47,
                    -130,
                    341,
                    -250,
                    295,
                    -329,
                    -205,
                    231,
                    247,
                    -228,
                    166,
                    -28,
                    36,
                    277,
                    -115,
                    100,
                    2,
                    81,
                    -66,
                    31,
                    -39,
                    -319,
                    -251,
                    -254,
                ],
                timezone: 'Asia/Ho_Chi_Minh',
                weekStart: Shared\WeekStart::Tu,
            ),
        ],
        startAt: '2020-05-23T18:33:40.503Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-30T01:45:14.353Z',
        webUrl: 'https://another-pinstripe.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->updateCalendarEvent(
    request: $request
);

if ($response->calendarEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateCalendarEventRequest](../../Models/Operations/UpdateCalendarEventRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateCalendarEventResponse](../../Models/Operations/UpdateCalendarEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCdpEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCdpEvent" method="put" path="/cdp/{connection_id}/event/{id}" -->
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

$request = new Operations\UpdateCdpEventRequest(
    cdpEvent: new Shared\CdpEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->updateCdpEvent(
    request: $request
);

if ($response->cdpEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCdpEventRequest](../../Models/Operations/UpdateCdpEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCdpEventResponse](../../Models/Operations/UpdateCdpEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmEvent" method="put" path="/crm/{connection_id}/event/{id}" example="crm_event" -->
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

$request = new Operations\UpdateCrmEventRequest(
    crmEvent: new Shared\CrmEvent(
        call: new Shared\PropertyCrmEventCall(
            description: 'Arbitro aptus.',
            duration: 64,
            startAt: Utils\Utils::parseDateTime('2024-12-10T04:23:26.176Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: '1e37c4ca-805c-4ac6-a935-d9235a179c75',
        metadata: [],
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-10-10T08:01:43.997Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->updateCrmEvent(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateCrmEventRequest](../../Models/Operations/UpdateCrmEventRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateCrmEventResponse](../../Models/Operations/UpdateCrmEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateMessagingEvent

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateMessagingEvent" method="put" path="/messaging/{connection_id}/event/{id}" example="messaging_event" -->
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

$request = new Operations\UpdateMessagingEventRequest(
    messagingEvent: new Shared\MessagingEvent(
        channel: new Shared\PropertyMessagingEventChannel(
            id: '',
            name: '',
        ),
        createdAt: Utils\Utils::parseDateTime('2019-05-30T19:44:46.461Z'),
        id: 'e20be20d-d152-4cb9-8138-1a3a3cd2619a',
        isReplacingOriginal: false,
        metadata: [],
        type: Shared\MessagingEventType::ButtonClick,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->updateMessagingEvent(
    request: $request
);

if ($response->messagingEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateMessagingEventRequest](../../Models/Operations/UpdateMessagingEventRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateMessagingEventResponse](../../Models/Operations/UpdateMessagingEventResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |