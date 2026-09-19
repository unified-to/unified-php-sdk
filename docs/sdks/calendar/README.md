# Calendar

## Overview

### Available Operations

* [createCalendarCalendar](#createcalendarcalendar) - Create a calendar
* [createCalendarEvent](#createcalendarevent) - Create an event
* [createCalendarLink](#createcalendarlink) - Create a link
* [createCalendarWebinar](#createcalendarwebinar) - Create a webinar
* [getCalendarCalendar](#getcalendarcalendar) - Retrieve a calendar
* [getCalendarEvent](#getcalendarevent) - Retrieve an event
* [getCalendarLink](#getcalendarlink) - Retrieve a link
* [getCalendarRecording](#getcalendarrecording) - Retrieve a recording
* [getCalendarWebinar](#getcalendarwebinar) - Retrieve a webinar
* [listCalendarBusies](#listcalendarbusies) - List all busies
* [listCalendarCalendars](#listcalendarcalendars) - List all calendars
* [listCalendarEvents](#listcalendarevents) - List all events
* [listCalendarLinks](#listcalendarlinks) - List all links
* [listCalendarRecordings](#listcalendarrecordings) - List all recordings
* [listCalendarWebinars](#listcalendarwebinars) - List all webinars
* [patchCalendarCalendar](#patchcalendarcalendar) - Update a calendar
* [patchCalendarEvent](#patchcalendarevent) - Update an event
* [patchCalendarLink](#patchcalendarlink) - Update a link
* [patchCalendarWebinar](#patchcalendarwebinar) - Update a webinar
* [removeCalendarCalendar](#removecalendarcalendar) - Remove a calendar
* [removeCalendarEvent](#removecalendarevent) - Remove an event
* [removeCalendarLink](#removecalendarlink) - Remove a link
* [removeCalendarWebinar](#removecalendarwebinar) - Remove a webinar
* [updateCalendarCalendar](#updatecalendarcalendar) - Update a calendar
* [updateCalendarEvent](#updatecalendarevent) - Update an event
* [updateCalendarLink](#updatecalendarlink) - Update a link
* [updateCalendarWebinar](#updatecalendarwebinar) - Update a webinar

## createCalendarCalendar

Create a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarCalendar" method="post" path="/calendar/{connection_id}/calendar" example="calendar_calendar" -->
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

$request = new Operations\CreateCalendarCalendarRequest(
    calendarCalendar: new Shared\CalendarCalendar(
        createdAt: Utils\Utils::parseDateTime('2020-01-09T23:11:34.147Z'),
        description: 'Socius catena auxilium.',
        id: '3b8c11cb-f8fa-4a1f-94ee-7885c615a324',
        isPrimary: false,
        name: 'Acer supra vallum suasoria thesaurus omnis condico cognomen accendo vehemens.',
        timezone: 'America/Dawson_Creek',
        updatedAt: Utils\Utils::parseDateTime('2023-03-12T23:54:16.783Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->calendar->createCalendarCalendar(
    request: $request
);

if ($response->calendarCalendar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateCalendarCalendarRequest](../../Models/Operations/CreateCalendarCalendarRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateCalendarCalendarResponse](../../Models/Operations/CreateCalendarCalendarResponse.md)**

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
        endAt: '2020-05-20T17:28:59.536Z',
        id: '6c78c13b-4b7b-4b5f-9ec1-a0f8f97cedae',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2025-12-26T08:46:36.838Z'),
                excludedDates: [
                    '2025-10-01T00:49:35.329Z',
                    '2023-10-09T13:40:07.433Z',
                    '2024-02-15T14:53:47.458Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2021-02-16T22:35:44.990Z',
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
                endAt: Utils\Utils::parseDateTime('2025-04-30T07:50:50.254Z'),
                excludedDates: [
                    '2020-04-29T00:58:29.727Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2020-09-11T02:57:03.119Z',
                    '2021-11-29T02:15:40.515Z',
                    '2019-12-22T18:13:59.734Z',
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
                endAt: Utils\Utils::parseDateTime('2020-11-04T18:19:46.584Z'),
                excludedDates: [
                    '2023-01-11T22:45:28.096Z',
                    '2021-09-07T14:04:50.259Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-08-31T12:43:16.465Z',
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
        recurringEventId: 'e663eda7-b87c-4665-918d-8b483db68a78',
        sendNotifications: false,
        startAt: '2020-05-20T08:22:05.414Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-26T05:06:12.412Z',
        webUrl: 'https://another-pinstripe.com',
    ),
    connectionId: '<id>',
);

$response = $sdk->calendar->createCalendarEvent(
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

## createCalendarLink

Create a link

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarLink" method="post" path="/calendar/{connection_id}/link" example="calendar_link" -->
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

$request = new Operations\CreateCalendarLinkRequest(
    calendarLink: new Shared\CalendarLink(
        createdAt: '2023-03-07T13:34:11.959Z',
        description: 'Vitium clibanus laboriosam uxor denuncio.',
        duration: 74,
        id: 'e5f634fa-0ee0-4d34-9902-16eed8691c4c',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-06T12:12:58.199Z',
        url: 'https://annual-apricot.info/',
    ),
    connectionId: '<id>',
);

$response = $sdk->calendar->createCalendarLink(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateCalendarLinkRequest](../../Models/Operations/CreateCalendarLinkRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateCalendarLinkResponse](../../Models/Operations/CreateCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createCalendarWebinar

Create a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarWebinar" method="post" path="/calendar/{connection_id}/webinar" example="calendar_webinar" -->
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

$request = new Operations\CreateCalendarWebinarRequest(
    calendarWebinar: new Shared\CalendarWebinar(
        conference: [],
        createdAt: Utils\Utils::parseDateTime('2022-07-06T11:45:14.631Z'),
        endAt: Utils\Utils::parseDateTime('2025-10-04T00:58:23.588Z'),
        hasPolls: false,
        hasRecording: false,
        id: '4e97153c-e248-4ab8-8acf-5ff2bfa40d16',
        isAutoApprove: false,
        isEnabled: true,
        isWebcast: false,
        joinUrl: 'https://robust-bathhouse.biz',
        notes: 'Curriculum ducimus assentator aspernatur ait.',
        organizer: new Shared\PropertyCalendarWebinarOrganizer(
            email: 'Kelton_Dicki@yahoo.com',
            name: 'Walter Greenfelder',
        ),
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 10,
                endAt: Utils\Utils::parseDateTime('2023-08-23T00:40:23.296Z'),
                excludedDates: [
                    '2025-01-24T14:21:00.655Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2024-04-14T18:51:11.086Z',
                ],
                interval: 8,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                ],
                onMonthDays: [
                    -10,
                ],
                onMonths: [
                    -9,
                ],
                onWeeks: [
                    10,
                    30,
                    -38,
                    30,
                    -22,
                    37,
                    -12,
                    27,
                    2,
                    15,
                    26,
                    18,
                    -43,
                    -33,
                    -27,
                    38,
                    28,
                    47,
                    -8,
                    24,
                    35,
                    -2,
                    7,
                    49,
                    38,
                    -41,
                    46,
                    -11,
                    -45,
                    0,
                    48,
                    34,
                ],
                onYearDays: [
                    345,
                    -207,
                    230,
                    -10,
                    364,
                    -256,
                    -218,
                    -295,
                    290,
                    -250,
                    -315,
                    60,
                    205,
                    -247,
                    -318,
                    -211,
                    -13,
                    256,
                    -200,
                    -313,
                    336,
                    -332,
                    -90,
                    287,
                    -273,
                    156,
                    241,
                    -138,
                    -363,
                    -37,
                    -171,
                    -62,
                    -57,
                    280,
                    -322,
                    -79,
                    -364,
                    -201,
                    84,
                    341,
                    334,
                    -75,
                    332,
                    207,
                    337,
                    -244,
                    131,
                    -191,
                    164,
                    -235,
                    285,
                    -309,
                    -158,
                    306,
                    180,
                    -130,
                    -162,
                    -155,
                    3,
                    198,
                    26,
                    -366,
                    -191,
                    127,
                    -331,
                    -11,
                    -239,
                    -189,
                    243,
                    118,
                    346,
                    -174,
                    -146,
                    -161,
                    -330,
                    327,
                    192,
                    310,
                    316,
                    313,
                    -242,
                    -51,
                    -264,
                    -180,
                    -88,
                    305,
                    270,
                    358,
                    -173,
                    -298,
                    153,
                    -89,
                    155,
                    -45,
                    248,
                    -46,
                    -146,
                    300,
                    364,
                    -335,
                    356,
                    -18,
                    219,
                    324,
                    -239,
                    -106,
                    -298,
                    328,
                    362,
                    344,
                    -54,
                    133,
                    50,
                    112,
                    -212,
                    -179,
                    22,
                    -201,
                    -62,
                    -293,
                    9,
                    30,
                    -50,
                    126,
                    -72,
                    264,
                    28,
                    -1,
                    -207,
                    160,
                    -168,
                    3,
                    -176,
                    -19,
                    -157,
                    349,
                    100,
                    -201,
                    108,
                    -180,
                    51,
                    -73,
                    366,
                    74,
                    -226,
                    238,
                    121,
                    -193,
                    -125,
                    -109,
                    316,
                    -177,
                    -307,
                    31,
                    -76,
                    217,
                    -310,
                    227,
                    -360,
                    71,
                    255,
                    -325,
                    -214,
                    40,
                    42,
                    17,
                    -241,
                    -84,
                    -188,
                    302,
                    64,
                    94,
                    -362,
                    23,
                    166,
                    85,
                    71,
                    -74,
                    -47,
                    -119,
                    98,
                    40,
                    158,
                    -64,
                    175,
                    269,
                    127,
                    -143,
                    213,
                    -196,
                    121,
                    81,
                    -238,
                    288,
                    321,
                    276,
                    133,
                    22,
                    -213,
                    -157,
                    -280,
                    -35,
                    73,
                    -194,
                    65,
                    -180,
                    63,
                    -242,
                    -117,
                    148,
                    157,
                    -320,
                    318,
                    8,
                    210,
                    -21,
                    81,
                    205,
                    -258,
                    -40,
                    -114,
                    -253,
                    -263,
                    65,
                    185,
                    -24,
                    324,
                    -172,
                    25,
                    260,
                    211,
                    342,
                    -31,
                    -288,
                    -159,
                    -4,
                    -2,
                    -107,
                    -316,
                    -276,
                    331,
                    -114,
                    -20,
                    -320,
                    51,
                    -176,
                    -148,
                    -50,
                    -201,
                    -104,
                    153,
                    -273,
                    -189,
                    67,
                    209,
                    149,
                    49,
                    -136,
                    -125,
                    -169,
                    -324,
                    309,
                    -51,
                    288,
                    253,
                    175,
                    -146,
                    171,
                    -140,
                    58,
                    -212,
                    164,
                    270,
                    102,
                    70,
                    299,
                    89,
                    -280,
                    252,
                    -342,
                    240,
                    226,
                    68,
                    -30,
                    -232,
                    -358,
                    -166,
                    60,
                    140,
                    275,
                    13,
                    250,
                    -328,
                    -189,
                    -22,
                    7,
                    -235,
                    -322,
                    178,
                    167,
                    -104,
                    -61,
                    282,
                    -80,
                    -277,
                    108,
                    271,
                    -237,
                    297,
                    -135,
                    -135,
                    -323,
                    342,
                    -267,
                    -235,
                    173,
                    249,
                    -288,
                    257,
                    139,
                    -191,
                    -217,
                    10,
                    -117,
                    -297,
                    -196,
                    -206,
                    341,
                    166,
                    181,
                    129,
                    -207,
                    55,
                    86,
                ],
                timezone: 'Asia/Ust-Nera',
                weekStart: Shared\WeekStart::Mo,
            ),
            new Shared\CalendarEventRecurrence(
                count: 3,
                endAt: Utils\Utils::parseDateTime('2022-09-28T22:02:26.996Z'),
                excludedDates: [
                    '2024-08-16T16:15:47.183Z',
                    '2024-08-01T10:54:09.133Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2024-03-12T08:57:47.177Z',
                    '2025-12-18T03:45:36.677Z',
                    '2023-08-06T00:43:50.462Z',
                ],
                interval: 1,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                ],
                onMonthDays: [
                    -15,
                ],
                onMonths: [
                    5,
                    12,
                    3,
                    12,
                    8,
                ],
                onWeeks: [
                    -47,
                    44,
                ],
                onYearDays: [
                    -117,
                    59,
                    -6,
                    187,
                    45,
                    70,
                    15,
                    255,
                    44,
                    -2,
                    25,
                    -175,
                    -240,
                    171,
                    -294,
                    19,
                    38,
                    -351,
                    170,
                    -10,
                    -269,
                    18,
                    -65,
                    -266,
                    -31,
                    328,
                    -361,
                    358,
                    -256,
                    -4,
                    -312,
                    82,
                    -2,
                    -75,
                    -281,
                    -304,
                    53,
                    -295,
                    366,
                    322,
                    -191,
                    26,
                    97,
                    53,
                    75,
                    -62,
                    -109,
                    66,
                    177,
                    -68,
                    175,
                    -280,
                    70,
                    -238,
                    109,
                    -304,
                    326,
                    -8,
                    -71,
                    -236,
                    225,
                    358,
                    20,
                    -5,
                    -102,
                    -134,
                    -204,
                    -116,
                    -353,
                    -273,
                    106,
                    284,
                    -137,
                    -324,
                    301,
                    -42,
                    -229,
                    271,
                    -293,
                    -343,
                    211,
                    47,
                    -254,
                    -154,
                    -182,
                    264,
                    120,
                    -11,
                    -307,
                    99,
                    227,
                    190,
                    -17,
                    -77,
                    -255,
                    -61,
                    -249,
                    -102,
                    70,
                    345,
                    -187,
                    -308,
                    194,
                    221,
                    268,
                    -169,
                    -190,
                    88,
                    10,
                    262,
                    177,
                    -314,
                    -151,
                    -295,
                ],
                timezone: 'Pacific/Wake',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2026-06-26T07:52:37.792Z'),
                excludedDates: [
                    '2023-06-11T12:35:06.301Z',
                    '2023-05-31T18:47:37.068Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-03-20T05:54:04.943Z',
                    '2023-08-11T17:18:51.067Z',
                    '2024-09-10T08:42:38.612Z',
                ],
                interval: 8,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                ],
                onMonthDays: [
                    -23,
                ],
                onMonths: [
                    11,
                    8,
                    9,
                    5,
                    -12,
                    -7,
                    -5,
                    10,
                    10,
                    -9,
                    -10,
                ],
                onWeeks: [
                    -49,
                    46,
                    35,
                    -26,
                    2,
                    15,
                    15,
                    -26,
                    24,
                    -53,
                    36,
                    -43,
                    51,
                    -19,
                    -7,
                    -12,
                    28,
                    27,
                    35,
                    12,
                    -28,
                    -8,
                    -4,
                    -45,
                ],
                onYearDays: [
                    84,
                    -251,
                    71,
                    181,
                    -163,
                    158,
                    301,
                    -299,
                    -184,
                    -331,
                    -152,
                    -129,
                    -237,
                    -303,
                    -24,
                    126,
                    -103,
                    146,
                    -346,
                    86,
                    -296,
                    -337,
                    -185,
                    16,
                    -270,
                    -126,
                    -295,
                    -231,
                    356,
                    -293,
                    115,
                    -265,
                    -293,
                    -34,
                    357,
                    313,
                    -343,
                    180,
                    -22,
                    -161,
                    350,
                    177,
                    190,
                    223,
                    -152,
                    -360,
                    -225,
                    -60,
                    -35,
                    353,
                    117,
                    -171,
                    -315,
                    -321,
                    -202,
                    345,
                    -1,
                    -148,
                    -168,
                    181,
                    -17,
                    282,
                    234,
                    31,
                    47,
                    -236,
                    366,
                    -251,
                    -232,
                    -308,
                    76,
                    -199,
                    184,
                    198,
                    225,
                    75,
                    6,
                    227,
                    -148,
                    259,
                    -146,
                    49,
                    -254,
                    341,
                    93,
                    138,
                    -164,
                    237,
                    4,
                    -287,
                    161,
                ],
                timezone: 'Africa/Bissau',
                weekStart: Shared\WeekStart::We,
            ),
        ],
        registrantPassword: 'OxwWzr0C',
        requireAddress: false,
        requireJobTitle: false,
        startAt: Utils\Utils::parseDateTime('2025-04-09T14:05:39.118Z'),
        status: Shared\CalendarWebinarStatus::Tentative,
        subject: 'Harum culpa decipio ex cubo ancilla cresco.',
        timezone: 'Europe/Kaliningrad',
        updatedAt: Utils\Utils::parseDateTime('2026-08-29T22:51:21.020Z'),
        webUrl: 'https://classic-recovery.biz',
    ),
    connectionId: '<id>',
);

$response = $sdk->calendar->createCalendarWebinar(
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

## getCalendarCalendar

Retrieve a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarCalendar" method="get" path="/calendar/{connection_id}/calendar/{id}" -->
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

$request = new Operations\GetCalendarCalendarRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->getCalendarCalendar(
    request: $request
);

if ($response->calendarCalendar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetCalendarCalendarRequest](../../Models/Operations/GetCalendarCalendarRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetCalendarCalendarResponse](../../Models/Operations/GetCalendarCalendarResponse.md)**

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

$response = $sdk->calendar->getCalendarEvent(
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

## getCalendarLink

Retrieve a link

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarLink" method="get" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\GetCalendarLinkRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->getCalendarLink(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetCalendarLinkRequest](../../Models/Operations/GetCalendarLinkRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetCalendarLinkResponse](../../Models/Operations/GetCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarRecording

Retrieve a recording

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarRecording" method="get" path="/calendar/{connection_id}/recording/{id}" -->
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

$request = new Operations\GetCalendarRecordingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->getCalendarRecording(
    request: $request
);

if ($response->calendarRecording !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetCalendarRecordingRequest](../../Models/Operations/GetCalendarRecordingRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetCalendarRecordingResponse](../../Models/Operations/GetCalendarRecordingResponse.md)**

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

$response = $sdk->calendar->getCalendarWebinar(
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

## listCalendarBusies

List all busies

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarBusies" method="get" path="/calendar/{connection_id}/busy" -->
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

$request = new Operations\ListCalendarBusiesRequest(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarBusies(
    request: $request
);

if ($response->calendarBusies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCalendarBusiesRequest](../../Models/Operations/ListCalendarBusiesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCalendarBusiesResponse](../../Models/Operations/ListCalendarBusiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarCalendars

List all calendars

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarCalendars" method="get" path="/calendar/{connection_id}/calendar" -->
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

$request = new Operations\ListCalendarCalendarsRequest(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarCalendars(
    request: $request
);

if ($response->calendarCalendars !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListCalendarCalendarsRequest](../../Models/Operations/ListCalendarCalendarsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListCalendarCalendarsResponse](../../Models/Operations/ListCalendarCalendarsResponse.md)**

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

$response = $sdk->calendar->listCalendarEvents(
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

## listCalendarLinks

List all links

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarLinks" method="get" path="/calendar/{connection_id}/link" -->
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

$request = new Operations\ListCalendarLinksRequest(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarLinks(
    request: $request
);

if ($response->calendarLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCalendarLinksRequest](../../Models/Operations/ListCalendarLinksRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCalendarLinksResponse](../../Models/Operations/ListCalendarLinksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarRecordings

List all recordings

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarRecordings" method="get" path="/calendar/{connection_id}/recording" -->
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

$request = new Operations\ListCalendarRecordingsRequest(
    connectionId: '<id>',
);

$response = $sdk->calendar->listCalendarRecordings(
    request: $request
);

if ($response->calendarRecordings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListCalendarRecordingsRequest](../../Models/Operations/ListCalendarRecordingsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListCalendarRecordingsResponse](../../Models/Operations/ListCalendarRecordingsResponse.md)**

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

$response = $sdk->calendar->listCalendarWebinars(
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

## patchCalendarCalendar

Update a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarCalendar" method="patch" path="/calendar/{connection_id}/calendar/{id}" example="calendar_calendar" -->
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

$request = new Operations\PatchCalendarCalendarRequest(
    calendarCalendar: new Shared\CalendarCalendar(
        createdAt: Utils\Utils::parseDateTime('2020-01-09T23:11:34.147Z'),
        description: 'Socius catena auxilium.',
        id: 'b9366c6d-05a0-4d74-bfa7-11d3a6248f3c',
        isPrimary: false,
        name: 'Acer supra vallum suasoria thesaurus omnis condico cognomen accendo vehemens.',
        timezone: 'America/Dawson_Creek',
        updatedAt: Utils\Utils::parseDateTime('2023-03-12T23:54:16.785Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->patchCalendarCalendar(
    request: $request
);

if ($response->calendarCalendar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchCalendarCalendarRequest](../../Models/Operations/PatchCalendarCalendarRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchCalendarCalendarResponse](../../Models/Operations/PatchCalendarCalendarResponse.md)**

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
        endAt: '2020-05-20T17:28:59.540Z',
        id: '141fb9cc-574e-4c5b-ba11-20b622e0303b',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2025-12-26T08:46:36.871Z'),
                excludedDates: [
                    '2025-10-01T00:49:35.360Z',
                    '2023-10-09T13:40:07.454Z',
                    '2024-02-15T14:53:47.480Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2021-02-16T22:35:44.998Z',
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
                endAt: Utils\Utils::parseDateTime('2025-04-30T07:50:50.283Z'),
                excludedDates: [
                    '2020-04-29T00:58:29.731Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2020-09-11T02:57:03.125Z',
                    '2021-11-29T02:15:40.527Z',
                    '2019-12-22T18:13:59.736Z',
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
                endAt: Utils\Utils::parseDateTime('2020-11-04T18:19:46.590Z'),
                excludedDates: [
                    '2023-01-11T22:45:28.114Z',
                    '2021-09-07T14:04:50.269Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-08-31T12:43:16.490Z',
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
        recurringEventId: '907b1376-7482-4ac5-a326-f279ee4b2a61',
        sendNotifications: false,
        startAt: '2020-05-20T08:22:05.418Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-26T05:06:12.416Z',
        webUrl: 'https://another-pinstripe.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->patchCalendarEvent(
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

## patchCalendarLink

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarLink" method="patch" path="/calendar/{connection_id}/link/{id}" example="calendar_link" -->
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

$request = new Operations\PatchCalendarLinkRequest(
    calendarLink: new Shared\CalendarLink(
        createdAt: '2023-03-07T13:34:11.959Z',
        description: 'Vitium clibanus laboriosam uxor denuncio.',
        duration: 74,
        id: '805e89c1-f226-4dfe-8112-c825992592aa',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-06T12:12:58.201Z',
        url: 'https://annual-apricot.info/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->patchCalendarLink(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchCalendarLinkRequest](../../Models/Operations/PatchCalendarLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchCalendarLinkResponse](../../Models/Operations/PatchCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarWebinar

Update a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarWebinar" method="patch" path="/calendar/{connection_id}/webinar/{id}" example="calendar_webinar" -->
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

$request = new Operations\PatchCalendarWebinarRequest(
    calendarWebinar: new Shared\CalendarWebinar(
        conference: [],
        createdAt: Utils\Utils::parseDateTime('2022-07-06T11:45:14.631Z'),
        endAt: Utils\Utils::parseDateTime('2025-10-04T00:58:23.613Z'),
        hasPolls: false,
        hasRecording: false,
        id: 'f87e7d75-228f-46a3-9ea3-59027d7e81db',
        isAutoApprove: false,
        isEnabled: true,
        isWebcast: false,
        joinUrl: 'https://robust-bathhouse.biz',
        notes: 'Curriculum ducimus assentator aspernatur ait.',
        organizer: new Shared\PropertyCalendarWebinarOrganizer(
            email: 'Kelton_Dicki@yahoo.com',
            name: 'Walter Greenfelder',
        ),
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 10,
                endAt: Utils\Utils::parseDateTime('2023-08-23T00:40:23.304Z'),
                excludedDates: [
                    '2025-01-24T14:21:00.674Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2024-04-14T18:51:11.099Z',
                ],
                interval: 8,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                ],
                onMonthDays: [
                    -10,
                ],
                onMonths: [
                    -9,
                ],
                onWeeks: [
                    10,
                    30,
                    -38,
                    30,
                    -22,
                    37,
                    -12,
                    27,
                    2,
                    15,
                    26,
                    18,
                    -43,
                    -33,
                    -27,
                    38,
                    28,
                    47,
                    -8,
                    24,
                    35,
                    -2,
                    7,
                    49,
                    38,
                    -41,
                    46,
                    -11,
                    -45,
                    0,
                    48,
                    34,
                ],
                onYearDays: [
                    345,
                    -207,
                    230,
                    -10,
                    364,
                    -256,
                    -218,
                    -295,
                    290,
                    -250,
                    -315,
                    60,
                    205,
                    -247,
                    -318,
                    -211,
                    -13,
                    256,
                    -200,
                    -313,
                    336,
                    -332,
                    -90,
                    287,
                    -273,
                    156,
                    241,
                    -138,
                    -363,
                    -37,
                    -171,
                    -62,
                    -57,
                    280,
                    -322,
                    -79,
                    -364,
                    -201,
                    84,
                    341,
                    334,
                    -75,
                    332,
                    207,
                    337,
                    -244,
                    131,
                    -191,
                    164,
                    -235,
                    285,
                    -309,
                    -158,
                    306,
                    180,
                    -130,
                    -162,
                    -155,
                    3,
                    198,
                    26,
                    -366,
                    -191,
                    127,
                    -331,
                    -11,
                    -239,
                    -189,
                    243,
                    118,
                    346,
                    -174,
                    -146,
                    -161,
                    -330,
                    327,
                    192,
                    310,
                    316,
                    313,
                    -242,
                    -51,
                    -264,
                    -180,
                    -88,
                    305,
                    270,
                    358,
                    -173,
                    -298,
                    153,
                    -89,
                    155,
                    -45,
                    248,
                    -46,
                    -146,
                    300,
                    364,
                    -335,
                    356,
                    -18,
                    219,
                    324,
                    -239,
                    -106,
                    -298,
                    328,
                    362,
                    344,
                    -54,
                    133,
                    50,
                    112,
                    -212,
                    -179,
                    22,
                    -201,
                    -62,
                    -293,
                    9,
                    30,
                    -50,
                    126,
                    -72,
                    264,
                    28,
                    -1,
                    -207,
                    160,
                    -168,
                    3,
                    -176,
                    -19,
                    -157,
                    349,
                    100,
                    -201,
                    108,
                    -180,
                    51,
                    -73,
                    366,
                    74,
                    -226,
                    238,
                    121,
                    -193,
                    -125,
                    -109,
                    316,
                    -177,
                    -307,
                    31,
                    -76,
                    217,
                    -310,
                    227,
                    -360,
                    71,
                    255,
                    -325,
                    -214,
                    40,
                    42,
                    17,
                    -241,
                    -84,
                    -188,
                    302,
                    64,
                    94,
                    -362,
                    23,
                    166,
                    85,
                    71,
                    -74,
                    -47,
                    -119,
                    98,
                    40,
                    158,
                    -64,
                    175,
                    269,
                    127,
                    -143,
                    213,
                    -196,
                    121,
                    81,
                    -238,
                    288,
                    321,
                    276,
                    133,
                    22,
                    -213,
                    -157,
                    -280,
                    -35,
                    73,
                    -194,
                    65,
                    -180,
                    63,
                    -242,
                    -117,
                    148,
                    157,
                    -320,
                    318,
                    8,
                    210,
                    -21,
                    81,
                    205,
                    -258,
                    -40,
                    -114,
                    -253,
                    -263,
                    65,
                    185,
                    -24,
                    324,
                    -172,
                    25,
                    260,
                    211,
                    342,
                    -31,
                    -288,
                    -159,
                    -4,
                    -2,
                    -107,
                    -316,
                    -276,
                    331,
                    -114,
                    -20,
                    -320,
                    51,
                    -176,
                    -148,
                    -50,
                    -201,
                    -104,
                    153,
                    -273,
                    -189,
                    67,
                    209,
                    149,
                    49,
                    -136,
                    -125,
                    -169,
                    -324,
                    309,
                    -51,
                    288,
                    253,
                    175,
                    -146,
                    171,
                    -140,
                    58,
                    -212,
                    164,
                    270,
                    102,
                    70,
                    299,
                    89,
                    -280,
                    252,
                    -342,
                    240,
                    226,
                    68,
                    -30,
                    -232,
                    -358,
                    -166,
                    60,
                    140,
                    275,
                    13,
                    250,
                    -328,
                    -189,
                    -22,
                    7,
                    -235,
                    -322,
                    178,
                    167,
                    -104,
                    -61,
                    282,
                    -80,
                    -277,
                    108,
                    271,
                    -237,
                    297,
                    -135,
                    -135,
                    -323,
                    342,
                    -267,
                    -235,
                    173,
                    249,
                    -288,
                    257,
                    139,
                    -191,
                    -217,
                    10,
                    -117,
                    -297,
                    -196,
                    -206,
                    341,
                    166,
                    181,
                    129,
                    -207,
                    55,
                    86,
                ],
                timezone: 'Asia/Ust-Nera',
                weekStart: Shared\WeekStart::Mo,
            ),
            new Shared\CalendarEventRecurrence(
                count: 3,
                endAt: Utils\Utils::parseDateTime('2022-09-28T22:02:26.998Z'),
                excludedDates: [
                    '2024-08-16T16:15:47.198Z',
                    '2024-08-01T10:54:09.148Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2024-03-12T08:57:47.189Z',
                    '2025-12-18T03:45:36.701Z',
                    '2023-08-06T00:43:50.470Z',
                ],
                interval: 1,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                ],
                onMonthDays: [
                    -15,
                ],
                onMonths: [
                    5,
                    12,
                    3,
                    12,
                    8,
                ],
                onWeeks: [
                    -47,
                    44,
                ],
                onYearDays: [
                    -117,
                    59,
                    -6,
                    187,
                    45,
                    70,
                    15,
                    255,
                    44,
                    -2,
                    25,
                    -175,
                    -240,
                    171,
                    -294,
                    19,
                    38,
                    -351,
                    170,
                    -10,
                    -269,
                    18,
                    -65,
                    -266,
                    -31,
                    328,
                    -361,
                    358,
                    -256,
                    -4,
                    -312,
                    82,
                    -2,
                    -75,
                    -281,
                    -304,
                    53,
                    -295,
                    366,
                    322,
                    -191,
                    26,
                    97,
                    53,
                    75,
                    -62,
                    -109,
                    66,
                    177,
                    -68,
                    175,
                    -280,
                    70,
                    -238,
                    109,
                    -304,
                    326,
                    -8,
                    -71,
                    -236,
                    225,
                    358,
                    20,
                    -5,
                    -102,
                    -134,
                    -204,
                    -116,
                    -353,
                    -273,
                    106,
                    284,
                    -137,
                    -324,
                    301,
                    -42,
                    -229,
                    271,
                    -293,
                    -343,
                    211,
                    47,
                    -254,
                    -154,
                    -182,
                    264,
                    120,
                    -11,
                    -307,
                    99,
                    227,
                    190,
                    -17,
                    -77,
                    -255,
                    -61,
                    -249,
                    -102,
                    70,
                    345,
                    -187,
                    -308,
                    194,
                    221,
                    268,
                    -169,
                    -190,
                    88,
                    10,
                    262,
                    177,
                    -314,
                    -151,
                    -295,
                ],
                timezone: 'Pacific/Wake',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2026-06-26T07:52:37.820Z'),
                excludedDates: [
                    '2023-06-11T12:35:06.308Z',
                    '2023-05-31T18:47:37.075Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-03-20T05:54:04.955Z',
                    '2023-08-11T17:18:51.075Z',
                    '2024-09-10T08:42:38.628Z',
                ],
                interval: 8,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                ],
                onMonthDays: [
                    -23,
                ],
                onMonths: [
                    11,
                    8,
                    9,
                    5,
                    -12,
                    -7,
                    -5,
                    10,
                    10,
                    -9,
                    -10,
                ],
                onWeeks: [
                    -49,
                    46,
                    35,
                    -26,
                    2,
                    15,
                    15,
                    -26,
                    24,
                    -53,
                    36,
                    -43,
                    51,
                    -19,
                    -7,
                    -12,
                    28,
                    27,
                    35,
                    12,
                    -28,
                    -8,
                    -4,
                    -45,
                ],
                onYearDays: [
                    84,
                    -251,
                    71,
                    181,
                    -163,
                    158,
                    301,
                    -299,
                    -184,
                    -331,
                    -152,
                    -129,
                    -237,
                    -303,
                    -24,
                    126,
                    -103,
                    146,
                    -346,
                    86,
                    -296,
                    -337,
                    -185,
                    16,
                    -270,
                    -126,
                    -295,
                    -231,
                    356,
                    -293,
                    115,
                    -265,
                    -293,
                    -34,
                    357,
                    313,
                    -343,
                    180,
                    -22,
                    -161,
                    350,
                    177,
                    190,
                    223,
                    -152,
                    -360,
                    -225,
                    -60,
                    -35,
                    353,
                    117,
                    -171,
                    -315,
                    -321,
                    -202,
                    345,
                    -1,
                    -148,
                    -168,
                    181,
                    -17,
                    282,
                    234,
                    31,
                    47,
                    -236,
                    366,
                    -251,
                    -232,
                    -308,
                    76,
                    -199,
                    184,
                    198,
                    225,
                    75,
                    6,
                    227,
                    -148,
                    259,
                    -146,
                    49,
                    -254,
                    341,
                    93,
                    138,
                    -164,
                    237,
                    4,
                    -287,
                    161,
                ],
                timezone: 'Africa/Bissau',
                weekStart: Shared\WeekStart::We,
            ),
        ],
        registrantPassword: 'OxwWzr0C',
        requireAddress: false,
        requireJobTitle: false,
        startAt: Utils\Utils::parseDateTime('2025-04-09T14:05:39.139Z'),
        status: Shared\CalendarWebinarStatus::Tentative,
        subject: 'Harum culpa decipio ex cubo ancilla cresco.',
        timezone: 'Europe/Kaliningrad',
        updatedAt: Utils\Utils::parseDateTime('2026-08-29T22:51:21.050Z'),
        webUrl: 'https://classic-recovery.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->patchCalendarWebinar(
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

## removeCalendarCalendar

Remove a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarCalendar" method="delete" path="/calendar/{connection_id}/calendar/{id}" -->
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

$request = new Operations\RemoveCalendarCalendarRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->removeCalendarCalendar(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveCalendarCalendarRequest](../../Models/Operations/RemoveCalendarCalendarRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveCalendarCalendarResponse](../../Models/Operations/RemoveCalendarCalendarResponse.md)**

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

$response = $sdk->calendar->removeCalendarEvent(
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

## removeCalendarLink

Remove a link

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarLink" method="delete" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\RemoveCalendarLinkRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->removeCalendarLink(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveCalendarLinkRequest](../../Models/Operations/RemoveCalendarLinkRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveCalendarLinkResponse](../../Models/Operations/RemoveCalendarLinkResponse.md)**

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

$response = $sdk->calendar->removeCalendarWebinar(
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

## updateCalendarCalendar

Update a calendar

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarCalendar" method="put" path="/calendar/{connection_id}/calendar/{id}" example="calendar_calendar" -->
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

$request = new Operations\UpdateCalendarCalendarRequest(
    calendarCalendar: new Shared\CalendarCalendar(
        createdAt: Utils\Utils::parseDateTime('2020-01-09T23:11:34.147Z'),
        description: 'Socius catena auxilium.',
        id: 'b9366c6d-05a0-4d74-bfa7-11d3a6248f3c',
        isPrimary: false,
        name: 'Acer supra vallum suasoria thesaurus omnis condico cognomen accendo vehemens.',
        timezone: 'America/Dawson_Creek',
        updatedAt: Utils\Utils::parseDateTime('2023-03-12T23:54:16.785Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->updateCalendarCalendar(
    request: $request
);

if ($response->calendarCalendar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateCalendarCalendarRequest](../../Models/Operations/UpdateCalendarCalendarRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateCalendarCalendarResponse](../../Models/Operations/UpdateCalendarCalendarResponse.md)**

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
        endAt: '2020-05-20T17:28:59.540Z',
        id: '141fb9cc-574e-4c5b-ba11-20b622e0303b',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2025-12-26T08:46:36.871Z'),
                excludedDates: [
                    '2025-10-01T00:49:35.360Z',
                    '2023-10-09T13:40:07.454Z',
                    '2024-02-15T14:53:47.480Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2021-02-16T22:35:44.998Z',
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
                endAt: Utils\Utils::parseDateTime('2025-04-30T07:50:50.283Z'),
                excludedDates: [
                    '2020-04-29T00:58:29.731Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2020-09-11T02:57:03.125Z',
                    '2021-11-29T02:15:40.527Z',
                    '2019-12-22T18:13:59.736Z',
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
                endAt: Utils\Utils::parseDateTime('2020-11-04T18:19:46.590Z'),
                excludedDates: [
                    '2023-01-11T22:45:28.114Z',
                    '2021-09-07T14:04:50.269Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-08-31T12:43:16.490Z',
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
        recurringEventId: '907b1376-7482-4ac5-a326-f279ee4b2a61',
        sendNotifications: false,
        startAt: '2020-05-20T08:22:05.418Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-26T05:06:12.416Z',
        webUrl: 'https://another-pinstripe.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->updateCalendarEvent(
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

## updateCalendarLink

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarLink" method="put" path="/calendar/{connection_id}/link/{id}" example="calendar_link" -->
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

$request = new Operations\UpdateCalendarLinkRequest(
    calendarLink: new Shared\CalendarLink(
        createdAt: '2023-03-07T13:34:11.959Z',
        description: 'Vitium clibanus laboriosam uxor denuncio.',
        duration: 74,
        id: '805e89c1-f226-4dfe-8112-c825992592aa',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-06T12:12:58.201Z',
        url: 'https://annual-apricot.info/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->updateCalendarLink(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateCalendarLinkRequest](../../Models/Operations/UpdateCalendarLinkRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateCalendarLinkResponse](../../Models/Operations/UpdateCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarWebinar

Update a webinar

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarWebinar" method="put" path="/calendar/{connection_id}/webinar/{id}" example="calendar_webinar" -->
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

$request = new Operations\UpdateCalendarWebinarRequest(
    calendarWebinar: new Shared\CalendarWebinar(
        conference: [],
        createdAt: Utils\Utils::parseDateTime('2022-07-06T11:45:14.631Z'),
        endAt: Utils\Utils::parseDateTime('2025-10-04T00:58:23.613Z'),
        hasPolls: false,
        hasRecording: false,
        id: 'f87e7d75-228f-46a3-9ea3-59027d7e81db',
        isAutoApprove: false,
        isEnabled: true,
        isWebcast: false,
        joinUrl: 'https://robust-bathhouse.biz',
        notes: 'Curriculum ducimus assentator aspernatur ait.',
        organizer: new Shared\PropertyCalendarWebinarOrganizer(
            email: 'Kelton_Dicki@yahoo.com',
            name: 'Walter Greenfelder',
        ),
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 10,
                endAt: Utils\Utils::parseDateTime('2023-08-23T00:40:23.304Z'),
                excludedDates: [
                    '2025-01-24T14:21:00.674Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2024-04-14T18:51:11.099Z',
                ],
                interval: 8,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Sa,
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                ],
                onMonthDays: [
                    -10,
                ],
                onMonths: [
                    -9,
                ],
                onWeeks: [
                    10,
                    30,
                    -38,
                    30,
                    -22,
                    37,
                    -12,
                    27,
                    2,
                    15,
                    26,
                    18,
                    -43,
                    -33,
                    -27,
                    38,
                    28,
                    47,
                    -8,
                    24,
                    35,
                    -2,
                    7,
                    49,
                    38,
                    -41,
                    46,
                    -11,
                    -45,
                    0,
                    48,
                    34,
                ],
                onYearDays: [
                    345,
                    -207,
                    230,
                    -10,
                    364,
                    -256,
                    -218,
                    -295,
                    290,
                    -250,
                    -315,
                    60,
                    205,
                    -247,
                    -318,
                    -211,
                    -13,
                    256,
                    -200,
                    -313,
                    336,
                    -332,
                    -90,
                    287,
                    -273,
                    156,
                    241,
                    -138,
                    -363,
                    -37,
                    -171,
                    -62,
                    -57,
                    280,
                    -322,
                    -79,
                    -364,
                    -201,
                    84,
                    341,
                    334,
                    -75,
                    332,
                    207,
                    337,
                    -244,
                    131,
                    -191,
                    164,
                    -235,
                    285,
                    -309,
                    -158,
                    306,
                    180,
                    -130,
                    -162,
                    -155,
                    3,
                    198,
                    26,
                    -366,
                    -191,
                    127,
                    -331,
                    -11,
                    -239,
                    -189,
                    243,
                    118,
                    346,
                    -174,
                    -146,
                    -161,
                    -330,
                    327,
                    192,
                    310,
                    316,
                    313,
                    -242,
                    -51,
                    -264,
                    -180,
                    -88,
                    305,
                    270,
                    358,
                    -173,
                    -298,
                    153,
                    -89,
                    155,
                    -45,
                    248,
                    -46,
                    -146,
                    300,
                    364,
                    -335,
                    356,
                    -18,
                    219,
                    324,
                    -239,
                    -106,
                    -298,
                    328,
                    362,
                    344,
                    -54,
                    133,
                    50,
                    112,
                    -212,
                    -179,
                    22,
                    -201,
                    -62,
                    -293,
                    9,
                    30,
                    -50,
                    126,
                    -72,
                    264,
                    28,
                    -1,
                    -207,
                    160,
                    -168,
                    3,
                    -176,
                    -19,
                    -157,
                    349,
                    100,
                    -201,
                    108,
                    -180,
                    51,
                    -73,
                    366,
                    74,
                    -226,
                    238,
                    121,
                    -193,
                    -125,
                    -109,
                    316,
                    -177,
                    -307,
                    31,
                    -76,
                    217,
                    -310,
                    227,
                    -360,
                    71,
                    255,
                    -325,
                    -214,
                    40,
                    42,
                    17,
                    -241,
                    -84,
                    -188,
                    302,
                    64,
                    94,
                    -362,
                    23,
                    166,
                    85,
                    71,
                    -74,
                    -47,
                    -119,
                    98,
                    40,
                    158,
                    -64,
                    175,
                    269,
                    127,
                    -143,
                    213,
                    -196,
                    121,
                    81,
                    -238,
                    288,
                    321,
                    276,
                    133,
                    22,
                    -213,
                    -157,
                    -280,
                    -35,
                    73,
                    -194,
                    65,
                    -180,
                    63,
                    -242,
                    -117,
                    148,
                    157,
                    -320,
                    318,
                    8,
                    210,
                    -21,
                    81,
                    205,
                    -258,
                    -40,
                    -114,
                    -253,
                    -263,
                    65,
                    185,
                    -24,
                    324,
                    -172,
                    25,
                    260,
                    211,
                    342,
                    -31,
                    -288,
                    -159,
                    -4,
                    -2,
                    -107,
                    -316,
                    -276,
                    331,
                    -114,
                    -20,
                    -320,
                    51,
                    -176,
                    -148,
                    -50,
                    -201,
                    -104,
                    153,
                    -273,
                    -189,
                    67,
                    209,
                    149,
                    49,
                    -136,
                    -125,
                    -169,
                    -324,
                    309,
                    -51,
                    288,
                    253,
                    175,
                    -146,
                    171,
                    -140,
                    58,
                    -212,
                    164,
                    270,
                    102,
                    70,
                    299,
                    89,
                    -280,
                    252,
                    -342,
                    240,
                    226,
                    68,
                    -30,
                    -232,
                    -358,
                    -166,
                    60,
                    140,
                    275,
                    13,
                    250,
                    -328,
                    -189,
                    -22,
                    7,
                    -235,
                    -322,
                    178,
                    167,
                    -104,
                    -61,
                    282,
                    -80,
                    -277,
                    108,
                    271,
                    -237,
                    297,
                    -135,
                    -135,
                    -323,
                    342,
                    -267,
                    -235,
                    173,
                    249,
                    -288,
                    257,
                    139,
                    -191,
                    -217,
                    10,
                    -117,
                    -297,
                    -196,
                    -206,
                    341,
                    166,
                    181,
                    129,
                    -207,
                    55,
                    86,
                ],
                timezone: 'Asia/Ust-Nera',
                weekStart: Shared\WeekStart::Mo,
            ),
            new Shared\CalendarEventRecurrence(
                count: 3,
                endAt: Utils\Utils::parseDateTime('2022-09-28T22:02:26.998Z'),
                excludedDates: [
                    '2024-08-16T16:15:47.198Z',
                    '2024-08-01T10:54:09.148Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2024-03-12T08:57:47.189Z',
                    '2025-12-18T03:45:36.701Z',
                    '2023-08-06T00:43:50.470Z',
                ],
                interval: 1,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::We,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                ],
                onMonthDays: [
                    -15,
                ],
                onMonths: [
                    5,
                    12,
                    3,
                    12,
                    8,
                ],
                onWeeks: [
                    -47,
                    44,
                ],
                onYearDays: [
                    -117,
                    59,
                    -6,
                    187,
                    45,
                    70,
                    15,
                    255,
                    44,
                    -2,
                    25,
                    -175,
                    -240,
                    171,
                    -294,
                    19,
                    38,
                    -351,
                    170,
                    -10,
                    -269,
                    18,
                    -65,
                    -266,
                    -31,
                    328,
                    -361,
                    358,
                    -256,
                    -4,
                    -312,
                    82,
                    -2,
                    -75,
                    -281,
                    -304,
                    53,
                    -295,
                    366,
                    322,
                    -191,
                    26,
                    97,
                    53,
                    75,
                    -62,
                    -109,
                    66,
                    177,
                    -68,
                    175,
                    -280,
                    70,
                    -238,
                    109,
                    -304,
                    326,
                    -8,
                    -71,
                    -236,
                    225,
                    358,
                    20,
                    -5,
                    -102,
                    -134,
                    -204,
                    -116,
                    -353,
                    -273,
                    106,
                    284,
                    -137,
                    -324,
                    301,
                    -42,
                    -229,
                    271,
                    -293,
                    -343,
                    211,
                    47,
                    -254,
                    -154,
                    -182,
                    264,
                    120,
                    -11,
                    -307,
                    99,
                    227,
                    190,
                    -17,
                    -77,
                    -255,
                    -61,
                    -249,
                    -102,
                    70,
                    345,
                    -187,
                    -308,
                    194,
                    221,
                    268,
                    -169,
                    -190,
                    88,
                    10,
                    262,
                    177,
                    -314,
                    -151,
                    -295,
                ],
                timezone: 'Pacific/Wake',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2026-06-26T07:52:37.820Z'),
                excludedDates: [
                    '2023-06-11T12:35:06.308Z',
                    '2023-05-31T18:47:37.075Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-03-20T05:54:04.955Z',
                    '2023-08-11T17:18:51.075Z',
                    '2024-09-10T08:42:38.628Z',
                ],
                interval: 8,
                onDays: [
                    Shared\PropertyCalendarEventRecurrenceOnDays::Su,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Tu,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Fr,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Mo,
                    Shared\PropertyCalendarEventRecurrenceOnDays::Th,
                ],
                onMonthDays: [
                    -23,
                ],
                onMonths: [
                    11,
                    8,
                    9,
                    5,
                    -12,
                    -7,
                    -5,
                    10,
                    10,
                    -9,
                    -10,
                ],
                onWeeks: [
                    -49,
                    46,
                    35,
                    -26,
                    2,
                    15,
                    15,
                    -26,
                    24,
                    -53,
                    36,
                    -43,
                    51,
                    -19,
                    -7,
                    -12,
                    28,
                    27,
                    35,
                    12,
                    -28,
                    -8,
                    -4,
                    -45,
                ],
                onYearDays: [
                    84,
                    -251,
                    71,
                    181,
                    -163,
                    158,
                    301,
                    -299,
                    -184,
                    -331,
                    -152,
                    -129,
                    -237,
                    -303,
                    -24,
                    126,
                    -103,
                    146,
                    -346,
                    86,
                    -296,
                    -337,
                    -185,
                    16,
                    -270,
                    -126,
                    -295,
                    -231,
                    356,
                    -293,
                    115,
                    -265,
                    -293,
                    -34,
                    357,
                    313,
                    -343,
                    180,
                    -22,
                    -161,
                    350,
                    177,
                    190,
                    223,
                    -152,
                    -360,
                    -225,
                    -60,
                    -35,
                    353,
                    117,
                    -171,
                    -315,
                    -321,
                    -202,
                    345,
                    -1,
                    -148,
                    -168,
                    181,
                    -17,
                    282,
                    234,
                    31,
                    47,
                    -236,
                    366,
                    -251,
                    -232,
                    -308,
                    76,
                    -199,
                    184,
                    198,
                    225,
                    75,
                    6,
                    227,
                    -148,
                    259,
                    -146,
                    49,
                    -254,
                    341,
                    93,
                    138,
                    -164,
                    237,
                    4,
                    -287,
                    161,
                ],
                timezone: 'Africa/Bissau',
                weekStart: Shared\WeekStart::We,
            ),
        ],
        registrantPassword: 'OxwWzr0C',
        requireAddress: false,
        requireJobTitle: false,
        startAt: Utils\Utils::parseDateTime('2025-04-09T14:05:39.139Z'),
        status: Shared\CalendarWebinarStatus::Tentative,
        subject: 'Harum culpa decipio ex cubo ancilla cresco.',
        timezone: 'Europe/Kaliningrad',
        updatedAt: Utils\Utils::parseDateTime('2026-08-29T22:51:21.050Z'),
        webUrl: 'https://classic-recovery.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->calendar->updateCalendarWebinar(
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