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

Creates a CalendarCalendar. Provide the unified CalendarCalendar fields in the request body; they are mapped to the provider's API. Returns the created CalendarCalendar.

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
        description: 'Acer supra vallum suasoria thesaurus.',
        id: 'ec06177a-7990-4f24-bc61-234d1789da6a',
        isPrimary: false,
        metadata: [],
        name: 'Interviews',
        timezone: 'Asia/Kolkata',
        updatedAt: Utils\Utils::parseDateTime('2023-03-29T02:02:07.801Z'),
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

Creates a CalendarEvent. Provide the unified CalendarEvent fields in the request body; they are mapped to the provider's API. Returns the created CalendarEvent.

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
        endAt: '2020-05-24T12:20:02.865Z',
        hasConference: false,
        id: 'b8ee4072-b753-4273-8a08-5aadfde9a7b5',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        metadata: [],
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 4,
                endAt: Utils\Utils::parseDateTime('2025-03-26T04:56:52.049Z'),
                excludedDates: [
                    '2024-02-04T00:29:50.152Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Yearly,
                includedDates: [
                    '2023-07-08T03:23:34.363Z',
                    '2025-01-25T09:51:20.038Z',
                    '2024-04-03T06:29:43.180Z',
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
        startAt: '2020-05-24T03:06:00.590Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-30T11:22:45.514Z',
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

Creates a CalendarLink. Provide the unified CalendarLink fields in the request body; they are mapped to the provider's API. Returns the created CalendarLink.

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
        id: 'cb0ede8b-ce7e-4acb-a53b-6f9a026300ca',
        isActive: true,
        metadata: [],
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-16T02:30:17.555Z',
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

Creates a CalendarWebinar. Provide the unified CalendarWebinar fields in the request body; they are mapped to the provider's API. Returns the created CalendarWebinar.

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
        endAt: Utils\Utils::parseDateTime('2025-10-30T06:10:18.165Z'),
        hasPolls: false,
        hasRecording: false,
        id: 'b53040c0-caad-44d9-8664-c335b0707fc2',
        isAutoApprove: false,
        isEnabled: true,
        isWebcast: false,
        joinUrl: 'https://nutritious-crocodile.com',
        metadata: [],
        notes: 'Curriculum ducimus assentator aspernatur ait.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 10,
                endAt: Utils\Utils::parseDateTime('2023-09-01T03:36:59.387Z'),
                excludedDates: [
                    '2025-02-14T05:34:18.089Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2024-04-29T02:55:05.695Z',
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
                timezone: 'Africa/Abidjan',
                weekStart: Shared\WeekStart::Mo,
            ),
            new Shared\CalendarEventRecurrence(
                count: 3,
                endAt: Utils\Utils::parseDateTime('2022-09-30T18:50:56.396Z'),
                excludedDates: [
                    '2024-09-02T18:04:50.135Z',
                    '2024-08-18T04:38:26.324Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2024-03-25T23:17:44.626Z',
                    '2026-01-15T00:49:28.196Z',
                    '2023-08-14T18:39:10.916Z',
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
                timezone: 'Asia/Choibalsan',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2026-07-28T09:52:11.252Z'),
                excludedDates: [
                    '2023-06-19T01:02:56.808Z',
                    '2023-06-08T01:33:25.216Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-04-03T00:24:43.461Z',
                    '2023-08-20T14:15:24.712Z',
                    '2024-09-27T23:37:45.358Z',
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
                timezone: 'Asia/Krasnoyarsk',
                weekStart: Shared\WeekStart::We,
            ),
        ],
        registrantPassword: 'W7J6DhkM',
        requireAddress: false,
        requireJobTitle: false,
        startAt: Utils\Utils::parseDateTime('2025-05-01T21:06:51.251Z'),
        status: Shared\CalendarWebinarStatus::Tentative,
        subject: 'Harum culpa decipio ex cubo ancilla cresco.',
        timezone: 'Europe/Kaliningrad',
        updatedAt: Utils\Utils::parseDateTime('2026-10-02T11:08:45.375Z'),
        webUrl: 'https://quiet-permafrost.name',
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

Retrieves a single CalendarCalendar by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single CalendarEvent by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single CalendarLink by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single CalendarRecording by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single CalendarWebinar by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of CalendarBusies. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of CalendarCalendars. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of CalendarEvents. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of CalendarLinks. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of CalendarRecordings. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of CalendarWebinars. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the CalendarCalendar identified by `id`. Provide the unified CalendarCalendar fields to change in the request body.

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
        description: 'Acer supra vallum suasoria thesaurus.',
        id: '83d30756-14e2-4a95-83c0-4a127304b0f7',
        isPrimary: false,
        metadata: [],
        name: 'Interviews',
        timezone: 'Asia/Kolkata',
        updatedAt: Utils\Utils::parseDateTime('2023-03-29T02:02:07.807Z'),
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

Updates the CalendarEvent identified by `id`. Provide the unified CalendarEvent fields to change in the request body.

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
        endAt: '2020-05-24T12:20:02.870Z',
        hasConference: false,
        id: 'd41a2d95-726f-4099-a0f4-245a7bf3b144',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        metadata: [],
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 4,
                endAt: Utils\Utils::parseDateTime('2025-03-26T04:56:52.089Z'),
                excludedDates: [
                    '2024-02-04T00:29:50.184Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Yearly,
                includedDates: [
                    '2023-07-08T03:23:34.391Z',
                    '2025-01-25T09:51:20.077Z',
                    '2024-04-03T06:29:43.213Z',
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
        startAt: '2020-05-24T03:06:00.595Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-30T11:22:45.520Z',
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

Updates the CalendarLink identified by `id`. Provide the unified CalendarLink fields to change in the request body.

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
        id: 'f74de0f1-7ad4-41d2-9caf-be2a2c0a11aa',
        isActive: true,
        metadata: [],
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-16T02:30:17.560Z',
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

Updates the CalendarWebinar identified by `id`. Provide the unified CalendarWebinar fields to change in the request body.

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
        endAt: Utils\Utils::parseDateTime('2025-10-30T06:10:18.215Z'),
        hasPolls: false,
        hasRecording: false,
        id: 'a4c6499f-6034-4818-95c7-b47b5acb0ef3',
        isAutoApprove: false,
        isEnabled: true,
        isWebcast: false,
        joinUrl: 'https://nutritious-crocodile.com',
        metadata: [],
        notes: 'Curriculum ducimus assentator aspernatur ait.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 10,
                endAt: Utils\Utils::parseDateTime('2023-09-01T03:36:59.405Z'),
                excludedDates: [
                    '2025-02-14T05:34:18.129Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2024-04-29T02:55:05.723Z',
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
                timezone: 'Africa/Abidjan',
                weekStart: Shared\WeekStart::Mo,
            ),
            new Shared\CalendarEventRecurrence(
                count: 3,
                endAt: Utils\Utils::parseDateTime('2022-09-30T18:50:56.399Z'),
                excludedDates: [
                    '2024-09-02T18:04:50.168Z',
                    '2024-08-18T04:38:26.356Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2024-03-25T23:17:44.653Z',
                    '2026-01-15T00:49:28.250Z',
                    '2023-08-14T18:39:10.933Z',
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
                timezone: 'Asia/Choibalsan',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2026-07-28T09:52:11.314Z'),
                excludedDates: [
                    '2023-06-19T01:02:56.822Z',
                    '2023-06-08T01:33:25.230Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-04-03T00:24:43.488Z',
                    '2023-08-20T14:15:24.729Z',
                    '2024-09-27T23:37:45.392Z',
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
                timezone: 'Asia/Krasnoyarsk',
                weekStart: Shared\WeekStart::We,
            ),
        ],
        registrantPassword: 'W7J6DhkM',
        requireAddress: false,
        requireJobTitle: false,
        startAt: Utils\Utils::parseDateTime('2025-05-01T21:06:51.294Z'),
        status: Shared\CalendarWebinarStatus::Tentative,
        subject: 'Harum culpa decipio ex cubo ancilla cresco.',
        timezone: 'Europe/Kaliningrad',
        updatedAt: Utils\Utils::parseDateTime('2026-10-02T11:08:45.439Z'),
        webUrl: 'https://quiet-permafrost.name',
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

Deletes the CalendarCalendar identified by `id`.

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

Deletes the CalendarEvent identified by `id`.

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

Deletes the CalendarLink identified by `id`.

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

Deletes the CalendarWebinar identified by `id`.

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

Updates the CalendarCalendar identified by `id`. Provide the unified CalendarCalendar fields to change in the request body.

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
        description: 'Acer supra vallum suasoria thesaurus.',
        id: '83d30756-14e2-4a95-83c0-4a127304b0f7',
        isPrimary: false,
        metadata: [],
        name: 'Interviews',
        timezone: 'Asia/Kolkata',
        updatedAt: Utils\Utils::parseDateTime('2023-03-29T02:02:07.807Z'),
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

Updates the CalendarEvent identified by `id`. Provide the unified CalendarEvent fields to change in the request body.

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
        endAt: '2020-05-24T12:20:02.870Z',
        hasConference: false,
        id: 'd41a2d95-726f-4099-a0f4-245a7bf3b144',
        isAllDay: false,
        isFree: false,
        isPrivate: false,
        location: '621 Boehm Prairie',
        metadata: [],
        notes: 'Aegre traho.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 4,
                endAt: Utils\Utils::parseDateTime('2025-03-26T04:56:52.089Z'),
                excludedDates: [
                    '2024-02-04T00:29:50.184Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Yearly,
                includedDates: [
                    '2023-07-08T03:23:34.391Z',
                    '2025-01-25T09:51:20.077Z',
                    '2024-04-03T06:29:43.213Z',
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
        startAt: '2020-05-24T03:06:00.595Z',
        status: Shared\CalendarEventStatus::Confirmed,
        subject: 'Sunt spargo tepidus bestia vigor credo coadunatio appello.',
        timezone: 'Asia/Bangkok',
        updatedAt: '2020-06-30T11:22:45.520Z',
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

Updates the CalendarLink identified by `id`. Provide the unified CalendarLink fields to change in the request body.

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
        id: 'f74de0f1-7ad4-41d2-9caf-be2a2c0a11aa',
        isActive: true,
        metadata: [],
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-16T02:30:17.560Z',
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

Updates the CalendarWebinar identified by `id`. Provide the unified CalendarWebinar fields to change in the request body.

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
        endAt: Utils\Utils::parseDateTime('2025-10-30T06:10:18.215Z'),
        hasPolls: false,
        hasRecording: false,
        id: 'a4c6499f-6034-4818-95c7-b47b5acb0ef3',
        isAutoApprove: false,
        isEnabled: true,
        isWebcast: false,
        joinUrl: 'https://nutritious-crocodile.com',
        metadata: [],
        notes: 'Curriculum ducimus assentator aspernatur ait.',
        recurrence: [
            new Shared\CalendarEventRecurrence(
                count: 10,
                endAt: Utils\Utils::parseDateTime('2023-09-01T03:36:59.405Z'),
                excludedDates: [
                    '2025-02-14T05:34:18.129Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Monthly,
                includedDates: [
                    '2024-04-29T02:55:05.723Z',
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
                timezone: 'Africa/Abidjan',
                weekStart: Shared\WeekStart::Mo,
            ),
            new Shared\CalendarEventRecurrence(
                count: 3,
                endAt: Utils\Utils::parseDateTime('2022-09-30T18:50:56.399Z'),
                excludedDates: [
                    '2024-09-02T18:04:50.168Z',
                    '2024-08-18T04:38:26.356Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Daily,
                includedDates: [
                    '2024-03-25T23:17:44.653Z',
                    '2026-01-15T00:49:28.250Z',
                    '2023-08-14T18:39:10.933Z',
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
                timezone: 'Asia/Choibalsan',
                weekStart: Shared\WeekStart::Tu,
            ),
            new Shared\CalendarEventRecurrence(
                count: 8,
                endAt: Utils\Utils::parseDateTime('2026-07-28T09:52:11.314Z'),
                excludedDates: [
                    '2023-06-19T01:02:56.822Z',
                    '2023-06-08T01:33:25.230Z',
                ],
                frequency: Shared\CalendarEventRecurrenceFrequency::Weekly,
                includedDates: [
                    '2024-04-03T00:24:43.488Z',
                    '2023-08-20T14:15:24.729Z',
                    '2024-09-27T23:37:45.392Z',
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
                timezone: 'Asia/Krasnoyarsk',
                weekStart: Shared\WeekStart::We,
            ),
        ],
        registrantPassword: 'W7J6DhkM',
        requireAddress: false,
        requireJobTitle: false,
        startAt: Utils\Utils::parseDateTime('2025-05-01T21:06:51.294Z'),
        status: Shared\CalendarWebinarStatus::Tentative,
        subject: 'Harum culpa decipio ex cubo ancilla cresco.',
        timezone: 'Europe/Kaliningrad',
        updatedAt: Utils\Utils::parseDateTime('2026-10-02T11:08:45.439Z'),
        webUrl: 'https://quiet-permafrost.name',
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