# Analytics

## Overview

### Available Operations

* [createAnalyticsEvent](#createanalyticsevent) - Create an event
* [createAnalyticsProperty](#createanalyticsproperty) - Create a property
* [createAnalyticsVisitor](#createanalyticsvisitor) - Create a visitor
* [getAnalyticsEvent](#getanalyticsevent) - Retrieve an event
* [getAnalyticsProperty](#getanalyticsproperty) - Retrieve a property
* [getAnalyticsSession](#getanalyticssession) - Retrieve a session
* [getAnalyticsVisitor](#getanalyticsvisitor) - Retrieve a visitor
* [listAnalyticsEvents](#listanalyticsevents) - List all events
* [listAnalyticsProperties](#listanalyticsproperties) - List all properties
* [listAnalyticsReports](#listanalyticsreports) - List all reports
* [listAnalyticsSessions](#listanalyticssessions) - List all sessions
* [listAnalyticsVisitors](#listanalyticsvisitors) - List all visitors
* [patchAnalyticsProperty](#patchanalyticsproperty) - Update a property
* [patchAnalyticsVisitor](#patchanalyticsvisitor) - Update a visitor
* [removeAnalyticsProperty](#removeanalyticsproperty) - Remove a property
* [removeAnalyticsVisitor](#removeanalyticsvisitor) - Remove a visitor
* [updateAnalyticsProperty](#updateanalyticsproperty) - Update a property
* [updateAnalyticsVisitor](#updateanalyticsvisitor) - Update a visitor

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
        id: '4f8ee0cd-206a-47b6-9018-3ce971c41ee1',
        metadata: [
            'key' => new Shared\PropertyAnalyticsEventMetadata(),
        ],
        name: 'Xk707ttsb51v',
        updatedAt: Utils\Utils::parseDateTime('2023-09-22T02:14:25.938Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->analytics->createAnalyticsEvent(
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

## createAnalyticsProperty

Create a property

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsProperty" method="post" path="/analytics/{connection_id}/property" example="analytics_property" -->
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

$request = new Operations\CreateAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(
        createdAt: Utils\Utils::parseDateTime('2021-09-05T19:04:58.430Z'),
        currency: 'USD',
        id: '00a86f83-224b-45eb-bbd1-39a1c17049a3',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T16:36:17.230Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->analytics->createAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAnalyticsPropertyRequest](../../Models/Operations/CreateAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAnalyticsPropertyResponse](../../Models/Operations/CreateAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAnalyticsVisitor

Create a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsVisitor" method="post" path="/analytics/{connection_id}/visitor" example="analytics_visitor" -->
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

$request = new Operations\CreateAnalyticsVisitorRequest(
    analyticsVisitor: new Shared\AnalyticsVisitor(
        createdAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        email: 'Dallas_Mitchell@yahoo.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: 'c4f48c8f-56d2-4cc8-b3f0-9a83509307e5',
        lastSeenAt: Utils\Utils::parseDateTime('2021-12-04T18:09:09.077Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        name: 'Desiree O\'Hara',
        totalEvents: 3639,
        updatedAt: Utils\Utils::parseDateTime('2025-06-03T08:27:48.122Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->analytics->createAnalyticsVisitor(
    request: $request
);

if ($response->analyticsVisitor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateAnalyticsVisitorRequest](../../Models/Operations/CreateAnalyticsVisitorRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateAnalyticsVisitorResponse](../../Models/Operations/CreateAnalyticsVisitorResponse.md)**

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

$response = $sdk->analytics->getAnalyticsEvent(
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

## getAnalyticsProperty

Retrieve a property

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsProperty" method="get" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\GetAnalyticsPropertyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->getAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAnalyticsPropertyRequest](../../Models/Operations/GetAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAnalyticsPropertyResponse](../../Models/Operations/GetAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAnalyticsSession

Retrieve a session

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsSession" method="get" path="/analytics/{connection_id}/session/{id}" -->
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

$request = new Operations\GetAnalyticsSessionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->getAnalyticsSession(
    request: $request
);

if ($response->analyticsSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetAnalyticsSessionRequest](../../Models/Operations/GetAnalyticsSessionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetAnalyticsSessionResponse](../../Models/Operations/GetAnalyticsSessionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAnalyticsVisitor

Retrieve a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsVisitor" method="get" path="/analytics/{connection_id}/visitor/{id}" -->
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

$request = new Operations\GetAnalyticsVisitorRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->getAnalyticsVisitor(
    request: $request
);

if ($response->analyticsVisitor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetAnalyticsVisitorRequest](../../Models/Operations/GetAnalyticsVisitorRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetAnalyticsVisitorResponse](../../Models/Operations/GetAnalyticsVisitorResponse.md)**

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

$response = $sdk->analytics->listAnalyticsEvents(
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

## listAnalyticsProperties

List all properties

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsProperties" method="get" path="/analytics/{connection_id}/property" -->
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

$request = new Operations\ListAnalyticsPropertiesRequest(
    connectionId: '<id>',
);

$response = $sdk->analytics->listAnalyticsProperties(
    request: $request
);

if ($response->analyticsProperties !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAnalyticsPropertiesRequest](../../Models/Operations/ListAnalyticsPropertiesRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAnalyticsPropertiesResponse](../../Models/Operations/ListAnalyticsPropertiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsReports

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsReports" method="get" path="/analytics/{connection_id}/report" -->
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

$request = new Operations\ListAnalyticsReportsRequest(
    connectionId: '<id>',
);

$response = $sdk->analytics->listAnalyticsReports(
    request: $request
);

if ($response->analyticsReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAnalyticsReportsRequest](../../Models/Operations/ListAnalyticsReportsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAnalyticsReportsResponse](../../Models/Operations/ListAnalyticsReportsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsSessions

List all sessions

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsSessions" method="get" path="/analytics/{connection_id}/session" -->
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

$request = new Operations\ListAnalyticsSessionsRequest(
    connectionId: '<id>',
);

$response = $sdk->analytics->listAnalyticsSessions(
    request: $request
);

if ($response->analyticsSessions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListAnalyticsSessionsRequest](../../Models/Operations/ListAnalyticsSessionsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListAnalyticsSessionsResponse](../../Models/Operations/ListAnalyticsSessionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsVisitors

List all visitors

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsVisitors" method="get" path="/analytics/{connection_id}/visitor" -->
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

$request = new Operations\ListAnalyticsVisitorsRequest(
    connectionId: '<id>',
);

$response = $sdk->analytics->listAnalyticsVisitors(
    request: $request
);

if ($response->analyticsVisitors !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListAnalyticsVisitorsRequest](../../Models/Operations/ListAnalyticsVisitorsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListAnalyticsVisitorsResponse](../../Models/Operations/ListAnalyticsVisitorsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAnalyticsProperty

Update a property

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAnalyticsProperty" method="patch" path="/analytics/{connection_id}/property/{id}" example="analytics_property" -->
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

$request = new Operations\PatchAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(
        createdAt: Utils\Utils::parseDateTime('2021-09-05T19:04:58.430Z'),
        currency: 'USD',
        id: 'ef237fcd-37a7-47f3-ab39-e030cb387de2',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T16:36:17.230Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->patchAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAnalyticsPropertyRequest](../../Models/Operations/PatchAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAnalyticsPropertyResponse](../../Models/Operations/PatchAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAnalyticsVisitor

Update a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAnalyticsVisitor" method="patch" path="/analytics/{connection_id}/visitor/{id}" example="analytics_visitor" -->
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

$request = new Operations\PatchAnalyticsVisitorRequest(
    analyticsVisitor: new Shared\AnalyticsVisitor(
        createdAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        email: 'Dallas_Mitchell@yahoo.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: '88e685e7-218d-418d-889f-1a6162b7ce74',
        lastSeenAt: Utils\Utils::parseDateTime('2021-12-04T18:09:09.082Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        name: 'Desiree O\'Hara',
        totalEvents: 3639,
        updatedAt: Utils\Utils::parseDateTime('2025-06-03T08:27:48.137Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->patchAnalyticsVisitor(
    request: $request
);

if ($response->analyticsVisitor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchAnalyticsVisitorRequest](../../Models/Operations/PatchAnalyticsVisitorRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchAnalyticsVisitorResponse](../../Models/Operations/PatchAnalyticsVisitorResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAnalyticsProperty

Remove a property

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAnalyticsProperty" method="delete" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\RemoveAnalyticsPropertyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->removeAnalyticsProperty(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAnalyticsPropertyRequest](../../Models/Operations/RemoveAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAnalyticsPropertyResponse](../../Models/Operations/RemoveAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAnalyticsVisitor

Remove a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAnalyticsVisitor" method="delete" path="/analytics/{connection_id}/visitor/{id}" -->
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

$request = new Operations\RemoveAnalyticsVisitorRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->removeAnalyticsVisitor(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveAnalyticsVisitorRequest](../../Models/Operations/RemoveAnalyticsVisitorRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveAnalyticsVisitorResponse](../../Models/Operations/RemoveAnalyticsVisitorResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAnalyticsProperty

Update a property

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAnalyticsProperty" method="put" path="/analytics/{connection_id}/property/{id}" example="analytics_property" -->
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

$request = new Operations\UpdateAnalyticsPropertyRequest(
    analyticsProperty: new Shared\AnalyticsProperty(
        createdAt: Utils\Utils::parseDateTime('2021-09-05T19:04:58.430Z'),
        currency: 'USD',
        id: 'ef237fcd-37a7-47f3-ab39-e030cb387de2',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T16:36:17.230Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->updateAnalyticsProperty(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAnalyticsPropertyRequest](../../Models/Operations/UpdateAnalyticsPropertyRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAnalyticsPropertyResponse](../../Models/Operations/UpdateAnalyticsPropertyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAnalyticsVisitor

Update a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAnalyticsVisitor" method="put" path="/analytics/{connection_id}/visitor/{id}" example="analytics_visitor" -->
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

$request = new Operations\UpdateAnalyticsVisitorRequest(
    analyticsVisitor: new Shared\AnalyticsVisitor(
        createdAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        email: 'Dallas_Mitchell@yahoo.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: '88e685e7-218d-418d-889f-1a6162b7ce74',
        lastSeenAt: Utils\Utils::parseDateTime('2021-12-04T18:09:09.082Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        name: 'Desiree O\'Hara',
        totalEvents: 3639,
        updatedAt: Utils\Utils::parseDateTime('2025-06-03T08:27:48.137Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->updateAnalyticsVisitor(
    request: $request
);

if ($response->analyticsVisitor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateAnalyticsVisitorRequest](../../Models/Operations/UpdateAnalyticsVisitorRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateAnalyticsVisitorResponse](../../Models/Operations/UpdateAnalyticsVisitorResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |