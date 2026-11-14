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

Creates a AnalyticsEvent. Provide the unified AnalyticsEvent fields in the request body; they are mapped to the provider's API. Returns the created AnalyticsEvent.

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
        id: '60381b38-d7a9-4f4d-a5d7-4059f9d14b03',
        metadata: [
            'key' => new Shared\PropertyAnalyticsEventMetadata(),
        ],
        name: 'page_view',
        pageUrl: 'https://golden-carboxyl.biz',
        updatedAt: Utils\Utils::parseDateTime('2023-09-26T13:37:52.736Z'),
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

Creates a AnalyticsProperty. Provide the unified AnalyticsProperty fields in the request body; they are mapped to the provider's API. Returns the created AnalyticsProperty.

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
        id: 'd2f0b5f1-f270-4c19-81c3-3ac4532d7c0a',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T23:13:46.874Z'),
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

Creates a AnalyticsVisitor. Provide the unified AnalyticsVisitor fields in the request body; they are mapped to the provider's API. Returns the created AnalyticsVisitor.

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
        email: 'desiree.o.hara@icloud.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: 'bba9d4ef-036a-407a-b7a9-75732047e653',
        lastSeenAt: Utils\Utils::parseDateTime('2025-01-28T19:10:49.313Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        totalEvents: 2916,
        updatedAt: Utils\Utils::parseDateTime('2025-07-18T21:58:42.358Z'),
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

Retrieves a single AnalyticsEvent by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single AnalyticsProperty by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single AnalyticsSession by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single AnalyticsVisitor by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of AnalyticsEvents. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of AnalyticsProperties. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of AnalyticsReports. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of AnalyticsSessions. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of AnalyticsVisitors. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the AnalyticsProperty identified by `id`. Provide the unified AnalyticsProperty fields to change in the request body.

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
        id: 'db7fdc1a-08a4-45e9-822a-428e61c57eea',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T23:13:46.874Z'),
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

Updates the AnalyticsVisitor identified by `id`. Provide the unified AnalyticsVisitor fields to change in the request body.

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
        email: 'desiree.o.hara@icloud.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: '3e5c35b7-10ec-4b2b-94b0-f197a53e9cbe',
        lastSeenAt: Utils\Utils::parseDateTime('2025-01-28T19:10:49.319Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        totalEvents: 2916,
        updatedAt: Utils\Utils::parseDateTime('2025-07-18T21:58:42.365Z'),
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

Deletes the AnalyticsProperty identified by `id`.

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

Deletes the AnalyticsVisitor identified by `id`.

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

Updates the AnalyticsProperty identified by `id`. Provide the unified AnalyticsProperty fields to change in the request body.

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
        id: 'db7fdc1a-08a4-45e9-822a-428e61c57eea',
        name: 'Daniel, Goldner and Dickinson',
        timezone: 'UTC',
        updatedAt: Utils\Utils::parseDateTime('2021-09-14T23:13:46.874Z'),
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

Updates the AnalyticsVisitor identified by `id`. Provide the unified AnalyticsVisitor fields to change in the request body.

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
        email: 'desiree.o.hara@icloud.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: '3e5c35b7-10ec-4b2b-94b0-f197a53e9cbe',
        lastSeenAt: Utils\Utils::parseDateTime('2025-01-28T19:10:49.319Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        totalEvents: 2916,
        updatedAt: Utils\Utils::parseDateTime('2025-07-18T21:58:42.365Z'),
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