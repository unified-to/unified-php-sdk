# Analytics

## Overview

### Available Operations

* [createAnalyticsEvent2](#createanalyticsevent2) - Create an event
* [createAnalyticsProperty2](#createanalyticsproperty2) - Create a property
* [createAnalyticsVisitor2](#createanalyticsvisitor2) - Create a visitor
* [getAnalyticsEvent2](#getanalyticsevent2) - Retrieve an event
* [getAnalyticsProperty2](#getanalyticsproperty2) - Retrieve a property
* [getAnalyticsSession2](#getanalyticssession2) - Retrieve a session
* [getAnalyticsVisitor2](#getanalyticsvisitor2) - Retrieve a visitor
* [listAnalyticsEvents2](#listanalyticsevents2) - List all events
* [listAnalyticsProperties2](#listanalyticsproperties2) - List all properties
* [listAnalyticsReports2](#listanalyticsreports2) - List all reports
* [listAnalyticsSessions2](#listanalyticssessions2) - List all sessions
* [listAnalyticsVisitors2](#listanalyticsvisitors2) - List all visitors
* [patchAnalyticsProperty2](#patchanalyticsproperty2) - Update a property
* [patchAnalyticsVisitor2](#patchanalyticsvisitor2) - Update a visitor
* [removeAnalyticsProperty2](#removeanalyticsproperty2) - Remove a property
* [removeAnalyticsVisitor2](#removeanalyticsvisitor2) - Remove a visitor
* [updateAnalyticsProperty2](#updateanalyticsproperty2) - Update a property
* [updateAnalyticsVisitor2](#updateanalyticsvisitor2) - Update a visitor

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

$response = $sdk->analytics->createAnalyticsEvent2(
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

## createAnalyticsProperty2

Create a property

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsProperty2" method="post" path="/analytics/{connection_id}/property" -->
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

$request = new Operations\CreateAnalyticsProperty2Request(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
);

$response = $sdk->analytics->createAnalyticsProperty2(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAnalyticsProperty2Request](../../Models/Operations/CreateAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAnalyticsProperty2Response](../../Models/Operations/CreateAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAnalyticsVisitor2

Create a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="createAnalyticsVisitor2" method="post" path="/analytics/{connection_id}/visitor" -->
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

$request = new Operations\CreateAnalyticsVisitor2Request(
    analyticsVisitor: new Shared\AnalyticsVisitor(),
    connectionId: '<id>',
);

$response = $sdk->analytics->createAnalyticsVisitor2(
    request: $request
);

if ($response->analyticsVisitor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAnalyticsVisitor2Request](../../Models/Operations/CreateAnalyticsVisitor2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAnalyticsVisitor2Response](../../Models/Operations/CreateAnalyticsVisitor2Response.md)**

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

$response = $sdk->analytics->getAnalyticsEvent2(
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

## getAnalyticsProperty2

Retrieve a property

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsProperty2" method="get" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\GetAnalyticsProperty2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->getAnalyticsProperty2(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAnalyticsProperty2Request](../../Models/Operations/GetAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAnalyticsProperty2Response](../../Models/Operations/GetAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAnalyticsSession2

Retrieve a session

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsSession2" method="get" path="/analytics/{connection_id}/session/{id}" -->
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

$request = new Operations\GetAnalyticsSession2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->getAnalyticsSession2(
    request: $request
);

if ($response->analyticsSession !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAnalyticsSession2Request](../../Models/Operations/GetAnalyticsSession2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAnalyticsSession2Response](../../Models/Operations/GetAnalyticsSession2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAnalyticsVisitor2

Retrieve a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="getAnalyticsVisitor2" method="get" path="/analytics/{connection_id}/visitor/{id}" -->
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

$request = new Operations\GetAnalyticsVisitor2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->getAnalyticsVisitor2(
    request: $request
);

if ($response->analyticsVisitor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAnalyticsVisitor2Request](../../Models/Operations/GetAnalyticsVisitor2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAnalyticsVisitor2Response](../../Models/Operations/GetAnalyticsVisitor2Response.md)**

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

$response = $sdk->analytics->listAnalyticsEvents2(
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

## listAnalyticsProperties2

List all properties

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsProperties2" method="get" path="/analytics/{connection_id}/property" -->
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

$request = new Operations\ListAnalyticsProperties2Request(
    connectionId: '<id>',
);

$response = $sdk->analytics->listAnalyticsProperties2(
    request: $request
);

if ($response->analyticsProperties !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListAnalyticsProperties2Request](../../Models/Operations/ListAnalyticsProperties2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListAnalyticsProperties2Response](../../Models/Operations/ListAnalyticsProperties2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsReports2

List all reports

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsReports2" method="get" path="/analytics/{connection_id}/report" -->
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

$request = new Operations\ListAnalyticsReports2Request(
    connectionId: '<id>',
);

$response = $sdk->analytics->listAnalyticsReports2(
    request: $request
);

if ($response->analyticsReports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListAnalyticsReports2Request](../../Models/Operations/ListAnalyticsReports2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListAnalyticsReports2Response](../../Models/Operations/ListAnalyticsReports2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsSessions2

List all sessions

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsSessions2" method="get" path="/analytics/{connection_id}/session" -->
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

$request = new Operations\ListAnalyticsSessions2Request(
    connectionId: '<id>',
);

$response = $sdk->analytics->listAnalyticsSessions2(
    request: $request
);

if ($response->analyticsSessions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAnalyticsSessions2Request](../../Models/Operations/ListAnalyticsSessions2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAnalyticsSessions2Response](../../Models/Operations/ListAnalyticsSessions2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAnalyticsVisitors2

List all visitors

### Example Usage

<!-- UsageSnippet language="php" operationID="listAnalyticsVisitors2" method="get" path="/analytics/{connection_id}/visitor" -->
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

$request = new Operations\ListAnalyticsVisitors2Request(
    connectionId: '<id>',
);

$response = $sdk->analytics->listAnalyticsVisitors2(
    request: $request
);

if ($response->analyticsVisitors !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAnalyticsVisitors2Request](../../Models/Operations/ListAnalyticsVisitors2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAnalyticsVisitors2Response](../../Models/Operations/ListAnalyticsVisitors2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAnalyticsProperty2

Update a property

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAnalyticsProperty2" method="patch" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\PatchAnalyticsProperty2Request(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->patchAnalyticsProperty2(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAnalyticsProperty2Request](../../Models/Operations/PatchAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAnalyticsProperty2Response](../../Models/Operations/PatchAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAnalyticsVisitor2

Update a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAnalyticsVisitor2" method="patch" path="/analytics/{connection_id}/visitor/{id}" -->
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

$request = new Operations\PatchAnalyticsVisitor2Request(
    analyticsVisitor: new Shared\AnalyticsVisitor(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->patchAnalyticsVisitor2(
    request: $request
);

if ($response->analyticsVisitor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAnalyticsVisitor2Request](../../Models/Operations/PatchAnalyticsVisitor2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAnalyticsVisitor2Response](../../Models/Operations/PatchAnalyticsVisitor2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAnalyticsProperty2

Remove a property

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAnalyticsProperty2" method="delete" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\RemoveAnalyticsProperty2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->removeAnalyticsProperty2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAnalyticsProperty2Request](../../Models/Operations/RemoveAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAnalyticsProperty2Response](../../Models/Operations/RemoveAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAnalyticsVisitor2

Remove a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAnalyticsVisitor2" method="delete" path="/analytics/{connection_id}/visitor/{id}" -->
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

$request = new Operations\RemoveAnalyticsVisitor2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->removeAnalyticsVisitor2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAnalyticsVisitor2Request](../../Models/Operations/RemoveAnalyticsVisitor2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAnalyticsVisitor2Response](../../Models/Operations/RemoveAnalyticsVisitor2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAnalyticsProperty2

Update a property

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAnalyticsProperty2" method="put" path="/analytics/{connection_id}/property/{id}" -->
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

$request = new Operations\UpdateAnalyticsProperty2Request(
    analyticsProperty: new Shared\AnalyticsProperty(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->updateAnalyticsProperty2(
    request: $request
);

if ($response->analyticsProperty !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAnalyticsProperty2Request](../../Models/Operations/UpdateAnalyticsProperty2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAnalyticsProperty2Response](../../Models/Operations/UpdateAnalyticsProperty2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAnalyticsVisitor2

Update a visitor

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAnalyticsVisitor2" method="put" path="/analytics/{connection_id}/visitor/{id}" -->
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

$request = new Operations\UpdateAnalyticsVisitor2Request(
    analyticsVisitor: new Shared\AnalyticsVisitor(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->analytics->updateAnalyticsVisitor2(
    request: $request
);

if ($response->analyticsVisitor !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAnalyticsVisitor2Request](../../Models/Operations/UpdateAnalyticsVisitor2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAnalyticsVisitor2Response](../../Models/Operations/UpdateAnalyticsVisitor2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |