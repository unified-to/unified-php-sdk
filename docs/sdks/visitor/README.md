# Visitor

## Overview

### Available Operations

* [createAnalyticsVisitor](#createanalyticsvisitor) - Create a visitor
* [getAnalyticsVisitor](#getanalyticsvisitor) - Retrieve a visitor
* [listAnalyticsVisitors](#listanalyticsvisitors) - List all visitors
* [patchAnalyticsVisitor](#patchanalyticsvisitor) - Update a visitor
* [removeAnalyticsVisitor](#removeanalyticsvisitor) - Remove a visitor
* [updateAnalyticsVisitor](#updateanalyticsvisitor) - Update a visitor

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
        email: 'desiree.o.hara@icloud.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: 'bfaa912a-9cdb-411c-ba4a-690f1112f1c6',
        lastSeenAt: Utils\Utils::parseDateTime('2025-01-11T07:31:53.978Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        totalEvents: 2916,
        updatedAt: Utils\Utils::parseDateTime('2025-06-29T17:14:52.295Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->visitor->createAnalyticsVisitor(
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

$response = $sdk->visitor->getAnalyticsVisitor(
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

$response = $sdk->visitor->listAnalyticsVisitors(
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
        email: 'desiree.o.hara@icloud.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: '804ed373-23e4-4381-ae7d-306027990398',
        lastSeenAt: Utils\Utils::parseDateTime('2025-01-11T07:31:53.988Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        totalEvents: 2916,
        updatedAt: Utils\Utils::parseDateTime('2025-06-29T17:14:52.305Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->visitor->patchAnalyticsVisitor(
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

$response = $sdk->visitor->removeAnalyticsVisitor(
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
        email: 'desiree.o.hara@icloud.com',
        firstSeenAt: Utils\Utils::parseDateTime('2020-04-16T20:29:48.281Z'),
        id: '804ed373-23e4-4381-ae7d-306027990398',
        lastSeenAt: Utils\Utils::parseDateTime('2025-01-11T07:31:53.988Z'),
        metadata: [
            'segment' => new Shared\PropertyAnalyticsVisitorMetadata(),
        ],
        totalEvents: 2916,
        updatedAt: Utils\Utils::parseDateTime('2025-06-29T17:14:52.305Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->visitor->updateAnalyticsVisitor(
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