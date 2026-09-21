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
        id: 'e96745d3-dd50-434f-aae9-c97499ec5299',
        metadata: [
            'key' => new Shared\PropertyAnalyticsEventMetadata(),
        ],
        name: 'Xk707ttsb51v',
        updatedAt: Utils\Utils::parseDateTime('2023-09-22T07:30:32.373Z'),
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
        endAt: '2020-05-20T22:12:09.970Z',
        id: 'f70f46c0-5eab-43c2-9839-a9c19b73a838',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2025-12-27T22:46:26.224Z'),
                excludedDates: [
                    '2025-10-02T13:25:08.884Z',
                    '2023-10-10T14:30:31.170Z',
                    '2024-02-16T17:50:08.837Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2021-02-17T07:44:37.075Z',
                ],
                interval: 4,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                ],
                onMonthDays: [
                    -26,
                ],
                onMonths: [
                    12,
                    9,
                    -1,
                    0,
                    1,
                    6,
                    -10,
                    9,
                    0,
                    4,
                    -2,
                ],
                onWeeks: [
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
                ],
                onYearDays: [
                    -35,
                    14,
                    -338,
                    175,
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
                ],
                timezone: 'Asia/Ho_Chi_Minh',
                weekStart: Shared\WeekStart::Su,
            ),
            new Shared\CalendarEventRecurrence(
                count: 9,
                endAt: Utils\Utils::parseDateTime('2025-05-01T17:56:22.216Z'),
                excludedDates: [
                    '2020-04-29T05:20:30.053Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2020-09-11T09:30:54.291Z',
                    '2021-11-29T16:02:52.041Z',
                    '2019-12-22T20:30:47.527Z',
                ],
                interval: 1,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    1,
                ],
                onMonths: [
                    4,
                    0,
                    -3,
                ],
                onWeeks: [
                    -7,
                    -19,
                    50,
                    -37,
                    43,
                    -48,
                    -30,
                    34,
                    36,
                    -33,
                    24,
                    -4,
                ],
                onYearDays: [
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
                    -35,
                    -121,
                    262,
                    32,
                    190,
                    107,
                    -145,
                    91,
                    313,
                    -48,
                    277,
                    104,
                    342,
                    297,
                    -216,
                    346,
                    -257,
                    307,
                    -44,
                    264,
                    -153,
                    -268,
                    92,
                    152,
                    -182,
                    -334,
                    89,
                    343,
                    -320,
                    -36,
                    84,
                    340,
                    -88,
                    -278,
                    202,
                    291,
                    95,
                    -234,
                    -304,
                    -157,
                    -82,
                    -339,
                    83,
                    2,
                    -238,
                    -204,
                    206,
                    -273,
                    -78,
                    -21,
                    270,
                    -266,
                    -276,
                    154,
                    -97,
                    -43,
                    -3,
                    191,
                    -302,
                    290,
                    -118,
                    -125,
                    -294,
                    115,
                    -73,
                    -244,
                    127,
                    26,
                    251,
                    47,
                    -157,
                    22,
                    -361,
                    318,
                    352,
                    358,
                    167,
                    210,
                    -185,
                    327,
                    117,
                    350,
                    -170,
                    -144,
                    -14,
                    -37,
                    318,
                    243,
                    33,
                    90,
                    319,
                    -270,
                    229,
                    122,
                    287,
                    -90,
                    -69,
                    -134,
                    -184,
                    25,
                    -178,
                    -89,
                    -273,
                    -49,
                    -362,
                    -9,
                    -71,
                    -347,
                    353,
                    342,
                    133,
                    -116,
                    231,
                    -231,
                    51,
                    288,
                    186,
                    -328,
                    275,
                    81,
                    94,
                    -263,
                    114,
                    13,
                    -357,
                    171,
                    -242,
                    -85,
                    -362,
                    108,
                    164,
                    69,
                    15,
                    57,
                    -287,
                    100,
                    165,
                    205,
                    204,
                    -78,
                    360,
                    -80,
                    -120,
                    -255,
                    -77,
                    110,
                    -26,
                    -149,
                    -254,
                    95,
                    32,
                    -57,
                    -195,
                    100,
                    221,
                    74,
                    274,
                    15,
                    353,
                    204,
                    -365,
                    315,
                    344,
                    199,
                    -59,
                    272,
                    173,
                    -40,
                    -318,
                    -330,
                    -365,
                    -272,
                    -149,
                    -27,
                    -334,
                    -277,
                    344,
                    351,
                    -310,
                    264,
                    281,
                    176,
                    191,
                    -183,
                    288,
                    -112,
                    -55,
                    -166,
                    258,
                    194,
                    59,
                ],
                timezone: 'America/Guadeloupe',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 1,
                endAt: Utils\Utils::parseDateTime('2020-11-05T01:46:57.692Z'),
                excludedDates: [
                    '2023-01-12T19:11:43.400Z',
                    '2021-09-08T02:31:29.884Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-09-01T18:52:48.039Z',
                ],
                interval: 9,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    -2,
                ],
                onMonths: [
                    -4,
                    8,
                    0,
                    9,
                    4,
                    -11,
                    7,
                    1,
                    -5,
                ],
                onWeeks: [
                    -36,
                    -31,
                    -16,
                    -6,
                    44,
                    -37,
                    14,
                    38,
                    -27,
                    -22,
                    -2,
                    24,
                    7,
                    50,
                    46,
                    52,
                    20,
                    37,
                    31,
                    48,
                    35,
                    -46,
                    13,
                    22,
                    53,
                    20,
                    -28,
                    -2,
                    39,
                    13,
                    4,
                    0,
                    7,
                    -38,
                    -35,
                    41,
                    49,
                    12,
                    17,
                    8,
                    49,
                    -47,
                    46,
                    25,
                    14,
                    -26,
                    -37,
                    -25,
                    -41,
                    27,
                    28,
                    -19,
                ],
                onYearDays: [
                    -256,
                    -328,
                    -312,
                    50,
                    -251,
                    -338,
                    -315,
                    214,
                    129,
                    -263,
                    -108,
                    -11,
                    206,
                    -29,
                    -159,
                    -29,
                    -264,
                    295,
                    -231,
                    53,
                    34,
                    -366,
                    326,
                    -202,
                    151,
                    79,
                    -66,
                    11,
                    -42,
                    73,
                    338,
                    -155,
                    197,
                    260,
                    356,
                    -323,
                    -213,
                    -332,
                    -305,
                    -182,
                    -253,
                    -276,
                    -285,
                    96,
                    -336,
                    269,
                    -233,
                    250,
                    -112,
                    -307,
                    -96,
                    54,
                    267,
                    318,
                    -66,
                    11,
                    -303,
                    231,
                    165,
                    -297,
                    -348,
                    -355,
                    364,
                    312,
                    -26,
                    111,
                    162,
                    280,
                    312,
                    337,
                    235,
                    68,
                    -282,
                    363,
                    212,
                    -328,
                    9,
                    -24,
                    -163,
                    -101,
                    -79,
                    -264,
                    -157,
                    188,
                    290,
                    51,
                    -213,
                    216,
                    230,
                    -270,
                    -211,
                    -156,
                    -165,
                    -305,
                    -45,
                    224,
                    -248,
                    65,
                    9,
                    274,
                    -299,
                    -228,
                    33,
                    -42,
                    356,
                    -311,
                    241,
                    261,
                    -136,
                    -252,
                    166,
                    208,
                    -126,
                    64,
                    323,
                    -104,
                    -106,
                    -248,
                    -41,
                    -109,
                    245,
                    47,
                    205,
                    358,
                    -296,
                    214,
                    -157,
                    -313,
                    -303,
                    -54,
                    -229,
                    231,
                    -94,
                    -198,
                    338,
                    199,
                    5,
                    42,
                    309,
                    73,
                    56,
                    -120,
                    351,
                    6,
                    -193,
                    21,
                    78,
                    57,
                    -269,
                    -76,
                    -299,
                    295,
                    -278,
                    11,
                    121,
                    -323,
                    156,
                    67,
                    152,
                    284,
                    108,
                    -7,
                    329,
                    -32,
                    333,
                    -338,
                    148,
                    -42,
                    151,
                    145,
                    -34,
                    -36,
                    296,
                    -198,
                    -317,
                    -161,
                    -253,
                    328,
                    -57,
                    134,
                    -289,
                    229,
                    44,
                    16,
                    -256,
                    289,
                    -234,
                    197,
                    333,
                    228,
                    -143,
                    -202,
                    -172,
                    -262,
                    -203,
                    -83,
                    -242,
                    -173,
                    336,
                    298,
                    -319,
                    66,
                    254,
                    214,
                    -118,
                    -216,
                    -168,
                    44,
                    -243,
                    207,
                    -28,
                    -4,
                    -272,
                    79,
                ],
                timezone: 'Atlantic/Reykjavik',
                weekStart: Shared\WeekStart::Tu,
            ),
        ],
        recurringEventId: '009a0eae-e5b4-4c9b-94aa-47bbdff410f3',
        sendNotifications: false,
        startAt: '2020-05-20T13:04:53.606Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-26T10:24:59.474Z',
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
            startAt: Utils\Utils::parseDateTime('2024-11-19T18:49:42.874Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: 'd610dd8d-d0c2-44a7-9bbc-b0a56da3fe15',
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-09-11T10:59:29.140Z'),
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
        endAt: '2020-05-20T22:12:09.976Z',
        id: '3aefb04c-c6a1-4dec-b773-2993a61a654c',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2025-12-27T22:46:26.267Z'),
                excludedDates: [
                    '2025-10-02T13:25:08.926Z',
                    '2023-10-10T14:30:31.199Z',
                    '2024-02-16T17:50:08.868Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2021-02-17T07:44:37.086Z',
                ],
                interval: 4,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                ],
                onMonthDays: [
                    -26,
                ],
                onMonths: [
                    12,
                    9,
                    -1,
                    0,
                    1,
                    6,
                    -10,
                    9,
                    0,
                    4,
                    -2,
                ],
                onWeeks: [
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
                ],
                onYearDays: [
                    -35,
                    14,
                    -338,
                    175,
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
                ],
                timezone: 'Asia/Ho_Chi_Minh',
                weekStart: Shared\WeekStart::Su,
            ),
            new Shared\CalendarEventRecurrence(
                count: 9,
                endAt: Utils\Utils::parseDateTime('2025-05-01T17:56:22.256Z'),
                excludedDates: [
                    '2020-04-29T05:20:30.058Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2020-09-11T09:30:54.299Z',
                    '2021-11-29T16:02:52.057Z',
                    '2019-12-22T20:30:47.530Z',
                ],
                interval: 1,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    1,
                ],
                onMonths: [
                    4,
                    0,
                    -3,
                ],
                onWeeks: [
                    -7,
                    -19,
                    50,
                    -37,
                    43,
                    -48,
                    -30,
                    34,
                    36,
                    -33,
                    24,
                    -4,
                ],
                onYearDays: [
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
                    -35,
                    -121,
                    262,
                    32,
                    190,
                    107,
                    -145,
                    91,
                    313,
                    -48,
                    277,
                    104,
                    342,
                    297,
                    -216,
                    346,
                    -257,
                    307,
                    -44,
                    264,
                    -153,
                    -268,
                    92,
                    152,
                    -182,
                    -334,
                    89,
                    343,
                    -320,
                    -36,
                    84,
                    340,
                    -88,
                    -278,
                    202,
                    291,
                    95,
                    -234,
                    -304,
                    -157,
                    -82,
                    -339,
                    83,
                    2,
                    -238,
                    -204,
                    206,
                    -273,
                    -78,
                    -21,
                    270,
                    -266,
                    -276,
                    154,
                    -97,
                    -43,
                    -3,
                    191,
                    -302,
                    290,
                    -118,
                    -125,
                    -294,
                    115,
                    -73,
                    -244,
                    127,
                    26,
                    251,
                    47,
                    -157,
                    22,
                    -361,
                    318,
                    352,
                    358,
                    167,
                    210,
                    -185,
                    327,
                    117,
                    350,
                    -170,
                    -144,
                    -14,
                    -37,
                    318,
                    243,
                    33,
                    90,
                    319,
                    -270,
                    229,
                    122,
                    287,
                    -90,
                    -69,
                    -134,
                    -184,
                    25,
                    -178,
                    -89,
                    -273,
                    -49,
                    -362,
                    -9,
                    -71,
                    -347,
                    353,
                    342,
                    133,
                    -116,
                    231,
                    -231,
                    51,
                    288,
                    186,
                    -328,
                    275,
                    81,
                    94,
                    -263,
                    114,
                    13,
                    -357,
                    171,
                    -242,
                    -85,
                    -362,
                    108,
                    164,
                    69,
                    15,
                    57,
                    -287,
                    100,
                    165,
                    205,
                    204,
                    -78,
                    360,
                    -80,
                    -120,
                    -255,
                    -77,
                    110,
                    -26,
                    -149,
                    -254,
                    95,
                    32,
                    -57,
                    -195,
                    100,
                    221,
                    74,
                    274,
                    15,
                    353,
                    204,
                    -365,
                    315,
                    344,
                    199,
                    -59,
                    272,
                    173,
                    -40,
                    -318,
                    -330,
                    -365,
                    -272,
                    -149,
                    -27,
                    -334,
                    -277,
                    344,
                    351,
                    -310,
                    264,
                    281,
                    176,
                    191,
                    -183,
                    288,
                    -112,
                    -55,
                    -166,
                    258,
                    194,
                    59,
                ],
                timezone: 'America/Guadeloupe',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 1,
                endAt: Utils\Utils::parseDateTime('2020-11-05T01:46:57.701Z'),
                excludedDates: [
                    '2023-01-12T19:11:43.424Z',
                    '2021-09-08T02:31:29.899Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-09-01T18:52:48.074Z',
                ],
                interval: 9,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    -2,
                ],
                onMonths: [
                    -4,
                    8,
                    0,
                    9,
                    4,
                    -11,
                    7,
                    1,
                    -5,
                ],
                onWeeks: [
                    -36,
                    -31,
                    -16,
                    -6,
                    44,
                    -37,
                    14,
                    38,
                    -27,
                    -22,
                    -2,
                    24,
                    7,
                    50,
                    46,
                    52,
                    20,
                    37,
                    31,
                    48,
                    35,
                    -46,
                    13,
                    22,
                    53,
                    20,
                    -28,
                    -2,
                    39,
                    13,
                    4,
                    0,
                    7,
                    -38,
                    -35,
                    41,
                    49,
                    12,
                    17,
                    8,
                    49,
                    -47,
                    46,
                    25,
                    14,
                    -26,
                    -37,
                    -25,
                    -41,
                    27,
                    28,
                    -19,
                ],
                onYearDays: [
                    -256,
                    -328,
                    -312,
                    50,
                    -251,
                    -338,
                    -315,
                    214,
                    129,
                    -263,
                    -108,
                    -11,
                    206,
                    -29,
                    -159,
                    -29,
                    -264,
                    295,
                    -231,
                    53,
                    34,
                    -366,
                    326,
                    -202,
                    151,
                    79,
                    -66,
                    11,
                    -42,
                    73,
                    338,
                    -155,
                    197,
                    260,
                    356,
                    -323,
                    -213,
                    -332,
                    -305,
                    -182,
                    -253,
                    -276,
                    -285,
                    96,
                    -336,
                    269,
                    -233,
                    250,
                    -112,
                    -307,
                    -96,
                    54,
                    267,
                    318,
                    -66,
                    11,
                    -303,
                    231,
                    165,
                    -297,
                    -348,
                    -355,
                    364,
                    312,
                    -26,
                    111,
                    162,
                    280,
                    312,
                    337,
                    235,
                    68,
                    -282,
                    363,
                    212,
                    -328,
                    9,
                    -24,
                    -163,
                    -101,
                    -79,
                    -264,
                    -157,
                    188,
                    290,
                    51,
                    -213,
                    216,
                    230,
                    -270,
                    -211,
                    -156,
                    -165,
                    -305,
                    -45,
                    224,
                    -248,
                    65,
                    9,
                    274,
                    -299,
                    -228,
                    33,
                    -42,
                    356,
                    -311,
                    241,
                    261,
                    -136,
                    -252,
                    166,
                    208,
                    -126,
                    64,
                    323,
                    -104,
                    -106,
                    -248,
                    -41,
                    -109,
                    245,
                    47,
                    205,
                    358,
                    -296,
                    214,
                    -157,
                    -313,
                    -303,
                    -54,
                    -229,
                    231,
                    -94,
                    -198,
                    338,
                    199,
                    5,
                    42,
                    309,
                    73,
                    56,
                    -120,
                    351,
                    6,
                    -193,
                    21,
                    78,
                    57,
                    -269,
                    -76,
                    -299,
                    295,
                    -278,
                    11,
                    121,
                    -323,
                    156,
                    67,
                    152,
                    284,
                    108,
                    -7,
                    329,
                    -32,
                    333,
                    -338,
                    148,
                    -42,
                    151,
                    145,
                    -34,
                    -36,
                    296,
                    -198,
                    -317,
                    -161,
                    -253,
                    328,
                    -57,
                    134,
                    -289,
                    229,
                    44,
                    16,
                    -256,
                    289,
                    -234,
                    197,
                    333,
                    228,
                    -143,
                    -202,
                    -172,
                    -262,
                    -203,
                    -83,
                    -242,
                    -173,
                    336,
                    298,
                    -319,
                    66,
                    254,
                    214,
                    -118,
                    -216,
                    -168,
                    44,
                    -243,
                    207,
                    -28,
                    -4,
                    -272,
                    79,
                ],
                timezone: 'Atlantic/Reykjavik',
                weekStart: Shared\WeekStart::Tu,
            ),
        ],
        recurringEventId: '46684a25-2b83-43e0-bd4a-14a99d099b8e',
        sendNotifications: false,
        startAt: '2020-05-20T13:04:53.612Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-26T10:24:59.480Z',
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
            startAt: Utils\Utils::parseDateTime('2024-11-19T18:49:42.902Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: '42ee7296-b8bc-48cf-aa94-636dc5f35f7e',
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-09-11T10:59:29.179Z'),
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
        id: '244073a9-ac42-4d99-a75e-b6e5be53b9fe',
        isReplacingOriginal: false,
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
        endAt: '2020-05-20T22:12:09.976Z',
        id: '3aefb04c-c6a1-4dec-b773-2993a61a654c',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2025-12-27T22:46:26.267Z'),
                excludedDates: [
                    '2025-10-02T13:25:08.926Z',
                    '2023-10-10T14:30:31.199Z',
                    '2024-02-16T17:50:08.868Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2021-02-17T07:44:37.086Z',
                ],
                interval: 4,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                ],
                onMonthDays: [
                    -26,
                ],
                onMonths: [
                    12,
                    9,
                    -1,
                    0,
                    1,
                    6,
                    -10,
                    9,
                    0,
                    4,
                    -2,
                ],
                onWeeks: [
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
                ],
                onYearDays: [
                    -35,
                    14,
                    -338,
                    175,
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
                ],
                timezone: 'Asia/Ho_Chi_Minh',
                weekStart: Shared\WeekStart::Su,
            ),
            new Shared\CalendarEventRecurrence(
                count: 9,
                endAt: Utils\Utils::parseDateTime('2025-05-01T17:56:22.256Z'),
                excludedDates: [
                    '2020-04-29T05:20:30.058Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2020-09-11T09:30:54.299Z',
                    '2021-11-29T16:02:52.057Z',
                    '2019-12-22T20:30:47.530Z',
                ],
                interval: 1,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    1,
                ],
                onMonths: [
                    4,
                    0,
                    -3,
                ],
                onWeeks: [
                    -7,
                    -19,
                    50,
                    -37,
                    43,
                    -48,
                    -30,
                    34,
                    36,
                    -33,
                    24,
                    -4,
                ],
                onYearDays: [
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
                    -35,
                    -121,
                    262,
                    32,
                    190,
                    107,
                    -145,
                    91,
                    313,
                    -48,
                    277,
                    104,
                    342,
                    297,
                    -216,
                    346,
                    -257,
                    307,
                    -44,
                    264,
                    -153,
                    -268,
                    92,
                    152,
                    -182,
                    -334,
                    89,
                    343,
                    -320,
                    -36,
                    84,
                    340,
                    -88,
                    -278,
                    202,
                    291,
                    95,
                    -234,
                    -304,
                    -157,
                    -82,
                    -339,
                    83,
                    2,
                    -238,
                    -204,
                    206,
                    -273,
                    -78,
                    -21,
                    270,
                    -266,
                    -276,
                    154,
                    -97,
                    -43,
                    -3,
                    191,
                    -302,
                    290,
                    -118,
                    -125,
                    -294,
                    115,
                    -73,
                    -244,
                    127,
                    26,
                    251,
                    47,
                    -157,
                    22,
                    -361,
                    318,
                    352,
                    358,
                    167,
                    210,
                    -185,
                    327,
                    117,
                    350,
                    -170,
                    -144,
                    -14,
                    -37,
                    318,
                    243,
                    33,
                    90,
                    319,
                    -270,
                    229,
                    122,
                    287,
                    -90,
                    -69,
                    -134,
                    -184,
                    25,
                    -178,
                    -89,
                    -273,
                    -49,
                    -362,
                    -9,
                    -71,
                    -347,
                    353,
                    342,
                    133,
                    -116,
                    231,
                    -231,
                    51,
                    288,
                    186,
                    -328,
                    275,
                    81,
                    94,
                    -263,
                    114,
                    13,
                    -357,
                    171,
                    -242,
                    -85,
                    -362,
                    108,
                    164,
                    69,
                    15,
                    57,
                    -287,
                    100,
                    165,
                    205,
                    204,
                    -78,
                    360,
                    -80,
                    -120,
                    -255,
                    -77,
                    110,
                    -26,
                    -149,
                    -254,
                    95,
                    32,
                    -57,
                    -195,
                    100,
                    221,
                    74,
                    274,
                    15,
                    353,
                    204,
                    -365,
                    315,
                    344,
                    199,
                    -59,
                    272,
                    173,
                    -40,
                    -318,
                    -330,
                    -365,
                    -272,
                    -149,
                    -27,
                    -334,
                    -277,
                    344,
                    351,
                    -310,
                    264,
                    281,
                    176,
                    191,
                    -183,
                    288,
                    -112,
                    -55,
                    -166,
                    258,
                    194,
                    59,
                ],
                timezone: 'America/Guadeloupe',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 1,
                endAt: Utils\Utils::parseDateTime('2020-11-05T01:46:57.701Z'),
                excludedDates: [
                    '2023-01-12T19:11:43.424Z',
                    '2021-09-08T02:31:29.899Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-09-01T18:52:48.074Z',
                ],
                interval: 9,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                ],
                onMonthDays: [
                    -2,
                ],
                onMonths: [
                    -4,
                    8,
                    0,
                    9,
                    4,
                    -11,
                    7,
                    1,
                    -5,
                ],
                onWeeks: [
                    -36,
                    -31,
                    -16,
                    -6,
                    44,
                    -37,
                    14,
                    38,
                    -27,
                    -22,
                    -2,
                    24,
                    7,
                    50,
                    46,
                    52,
                    20,
                    37,
                    31,
                    48,
                    35,
                    -46,
                    13,
                    22,
                    53,
                    20,
                    -28,
                    -2,
                    39,
                    13,
                    4,
                    0,
                    7,
                    -38,
                    -35,
                    41,
                    49,
                    12,
                    17,
                    8,
                    49,
                    -47,
                    46,
                    25,
                    14,
                    -26,
                    -37,
                    -25,
                    -41,
                    27,
                    28,
                    -19,
                ],
                onYearDays: [
                    -256,
                    -328,
                    -312,
                    50,
                    -251,
                    -338,
                    -315,
                    214,
                    129,
                    -263,
                    -108,
                    -11,
                    206,
                    -29,
                    -159,
                    -29,
                    -264,
                    295,
                    -231,
                    53,
                    34,
                    -366,
                    326,
                    -202,
                    151,
                    79,
                    -66,
                    11,
                    -42,
                    73,
                    338,
                    -155,
                    197,
                    260,
                    356,
                    -323,
                    -213,
                    -332,
                    -305,
                    -182,
                    -253,
                    -276,
                    -285,
                    96,
                    -336,
                    269,
                    -233,
                    250,
                    -112,
                    -307,
                    -96,
                    54,
                    267,
                    318,
                    -66,
                    11,
                    -303,
                    231,
                    165,
                    -297,
                    -348,
                    -355,
                    364,
                    312,
                    -26,
                    111,
                    162,
                    280,
                    312,
                    337,
                    235,
                    68,
                    -282,
                    363,
                    212,
                    -328,
                    9,
                    -24,
                    -163,
                    -101,
                    -79,
                    -264,
                    -157,
                    188,
                    290,
                    51,
                    -213,
                    216,
                    230,
                    -270,
                    -211,
                    -156,
                    -165,
                    -305,
                    -45,
                    224,
                    -248,
                    65,
                    9,
                    274,
                    -299,
                    -228,
                    33,
                    -42,
                    356,
                    -311,
                    241,
                    261,
                    -136,
                    -252,
                    166,
                    208,
                    -126,
                    64,
                    323,
                    -104,
                    -106,
                    -248,
                    -41,
                    -109,
                    245,
                    47,
                    205,
                    358,
                    -296,
                    214,
                    -157,
                    -313,
                    -303,
                    -54,
                    -229,
                    231,
                    -94,
                    -198,
                    338,
                    199,
                    5,
                    42,
                    309,
                    73,
                    56,
                    -120,
                    351,
                    6,
                    -193,
                    21,
                    78,
                    57,
                    -269,
                    -76,
                    -299,
                    295,
                    -278,
                    11,
                    121,
                    -323,
                    156,
                    67,
                    152,
                    284,
                    108,
                    -7,
                    329,
                    -32,
                    333,
                    -338,
                    148,
                    -42,
                    151,
                    145,
                    -34,
                    -36,
                    296,
                    -198,
                    -317,
                    -161,
                    -253,
                    328,
                    -57,
                    134,
                    -289,
                    229,
                    44,
                    16,
                    -256,
                    289,
                    -234,
                    197,
                    333,
                    228,
                    -143,
                    -202,
                    -172,
                    -262,
                    -203,
                    -83,
                    -242,
                    -173,
                    336,
                    298,
                    -319,
                    66,
                    254,
                    214,
                    -118,
                    -216,
                    -168,
                    44,
                    -243,
                    207,
                    -28,
                    -4,
                    -272,
                    79,
                ],
                timezone: 'Atlantic/Reykjavik',
                weekStart: Shared\WeekStart::Tu,
            ),
        ],
        recurringEventId: '46684a25-2b83-43e0-bd4a-14a99d099b8e',
        sendNotifications: false,
        startAt: '2020-05-20T13:04:53.612Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-26T10:24:59.480Z',
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
            startAt: Utils\Utils::parseDateTime('2024-11-19T18:49:42.902Z'),
        ),
        createdAt: Utils\Utils::parseDateTime('2020-07-14T04:53:23.784Z'),
        id: '42ee7296-b8bc-48cf-aa94-636dc5f35f7e',
        type: Shared\CrmEventType::Call,
        updatedAt: Utils\Utils::parseDateTime('2026-09-11T10:59:29.179Z'),
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
        id: '244073a9-ac42-4d99-a75e-b6e5be53b9fe',
        isReplacingOriginal: false,
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