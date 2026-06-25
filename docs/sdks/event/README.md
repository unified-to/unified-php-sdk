# Event

## Overview

### Available Operations

* [createAnalyticsEvent2](#createanalyticsevent2) - Create an event
* [createCalendarEvent2](#createcalendarevent2) - Create an event
* [createCrmEvent2](#createcrmevent2) - Create an event
* [getAnalyticsEvent2](#getanalyticsevent2) - Retrieve an event
* [getCalendarEvent2](#getcalendarevent2) - Retrieve an event
* [getClubsEvent2](#getclubsevent2) - Retrieve an event
* [getCrmEvent2](#getcrmevent2) - Retrieve an event
* [listAnalyticsEvents2](#listanalyticsevents2) - List all events
* [listCalendarEvents2](#listcalendarevents2) - List all events
* [listClubsEvents2](#listclubsevents2) - List all events
* [listCrmEvents2](#listcrmevents2) - List all events
* [patchCalendarEvent2](#patchcalendarevent2) - Update an event
* [patchCrmEvent2](#patchcrmevent2) - Update an event
* [patchMessagingEvent2](#patchmessagingevent2) - Update an event
* [removeCalendarEvent2](#removecalendarevent2) - Remove an event
* [removeCrmEvent2](#removecrmevent2) - Remove an event
* [updateCalendarEvent2](#updatecalendarevent2) - Update an event
* [updateCrmEvent2](#updatecrmevent2) - Update an event
* [updateMessagingEvent2](#updatemessagingevent2) - Update an event

## createAnalyticsEvent2

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsEvent2" method="post" path="/analytics/{connection_id}/event" -->
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

$request = new Operations\CreateAnalyticsEvent2Request(
    analyticsEvent: new Shared\AnalyticsEvent(),
    connectionId: '<id>',
);

$response = $sdk->event->createAnalyticsEvent2(
    request: $request
);

if ($response->analyticsEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAnalyticsEvent2Request](../../Models/Operations/CreateAnalyticsEvent2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAnalyticsEvent2Response](../../Models/Operations/CreateAnalyticsEvent2Response.md)**

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

$response = $sdk->event->createCalendarEvent2(
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

## createCrmEvent2

Create an event

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmEvent2" method="post" path="/crm/{connection_id}/event" -->
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

$request = new Operations\CreateCrmEvent2Request(
    crmEvent: new Shared\CrmEvent(),
    connectionId: '<id>',
);

$response = $sdk->event->createCrmEvent2(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateCrmEvent2Request](../../Models/Operations/CreateCrmEvent2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateCrmEvent2Response](../../Models/Operations/CreateCrmEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAnalyticsEvent2

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsEvent2" method="get" path="/analytics/{connection_id}/event/{id}" -->
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

$request = new Operations\GetAnalyticsEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->getAnalyticsEvent2(
    request: $request
);

if ($response->analyticsEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAnalyticsEvent2Request](../../Models/Operations/GetAnalyticsEvent2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAnalyticsEvent2Response](../../Models/Operations/GetAnalyticsEvent2Response.md)**

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

$response = $sdk->event->getCalendarEvent2(
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

## getClubsEvent2

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getClubsEvent2" method="get" path="/clubs/{connection_id}/event/{id}" -->
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

$request = new Operations\GetClubsEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->getClubsEvent2(
    request: $request
);

if ($response->clubsEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetClubsEvent2Request](../../Models/Operations/GetClubsEvent2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetClubsEvent2Response](../../Models/Operations/GetClubsEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmEvent2

Retrieve an event

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmEvent2" method="get" path="/crm/{connection_id}/event/{id}" -->
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

$request = new Operations\GetCrmEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->getCrmEvent2(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetCrmEvent2Request](../../Models/Operations/GetCrmEvent2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetCrmEvent2Response](../../Models/Operations/GetCrmEvent2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsEvents2

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsEvents2" method="get" path="/analytics/{connection_id}/event" -->
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

$request = new Operations\ListAnalyticsEvents2Request(
    connectionId: '<id>',
);

$response = $sdk->event->listAnalyticsEvents2(
    request: $request
);

if ($response->analyticsEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAnalyticsEvents2Request](../../Models/Operations/ListAnalyticsEvents2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAnalyticsEvents2Response](../../Models/Operations/ListAnalyticsEvents2Response.md)**

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

$response = $sdk->event->listCalendarEvents2(
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

## listClubsEvents2

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listClubsEvents2" method="get" path="/clubs/{connection_id}/event" -->
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

$request = new Operations\ListClubsEvents2Request(
    connectionId: '<id>',
);

$response = $sdk->event->listClubsEvents2(
    request: $request
);

if ($response->clubsEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListClubsEvents2Request](../../Models/Operations/ListClubsEvents2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListClubsEvents2Response](../../Models/Operations/ListClubsEvents2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmEvents2

List all events

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmEvents2" method="get" path="/crm/{connection_id}/event" -->
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

$request = new Operations\ListCrmEvents2Request(
    connectionId: '<id>',
);

$response = $sdk->event->listCrmEvents2(
    request: $request
);

if ($response->crmEvents !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListCrmEvents2Request](../../Models/Operations/ListCrmEvents2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListCrmEvents2Response](../../Models/Operations/ListCrmEvents2Response.md)**

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

$response = $sdk->event->patchCalendarEvent2(
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

## patchCrmEvent2

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmEvent2" method="patch" path="/crm/{connection_id}/event/{id}" -->
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

$request = new Operations\PatchCrmEvent2Request(
    crmEvent: new Shared\CrmEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->patchCrmEvent2(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchCrmEvent2Request](../../Models/Operations/PatchCrmEvent2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchCrmEvent2Response](../../Models/Operations/PatchCrmEvent2Response.md)**

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

$response = $sdk->event->patchMessagingEvent2(
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

$response = $sdk->event->removeCalendarEvent2(
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

## removeCrmEvent2

Remove an event

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmEvent2" method="delete" path="/crm/{connection_id}/event/{id}" -->
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

$request = new Operations\RemoveCrmEvent2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->removeCrmEvent2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\RemoveCrmEvent2Request](../../Models/Operations/RemoveCrmEvent2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\RemoveCrmEvent2Response](../../Models/Operations/RemoveCrmEvent2Response.md)**

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

$response = $sdk->event->updateCalendarEvent2(
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

## updateCrmEvent2

Update an event

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmEvent2" method="put" path="/crm/{connection_id}/event/{id}" -->
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

$request = new Operations\UpdateCrmEvent2Request(
    crmEvent: new Shared\CrmEvent(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->event->updateCrmEvent2(
    request: $request
);

if ($response->crmEvent !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateCrmEvent2Request](../../Models/Operations/UpdateCrmEvent2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateCrmEvent2Response](../../Models/Operations/UpdateCrmEvent2Response.md)**

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

$response = $sdk->event->updateMessagingEvent2(
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