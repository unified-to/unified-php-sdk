# Visitor

## Overview

### Available Operations

* [createAnalyticsVisitor2](#createanalyticsvisitor2) - Create a visitor
* [getAnalyticsVisitor2](#getanalyticsvisitor2) - Retrieve a visitor
* [listAnalyticsVisitors2](#listanalyticsvisitors2) - List all visitors
* [patchAnalyticsVisitor2](#patchanalyticsvisitor2) - Update a visitor
* [removeAnalyticsVisitor2](#removeanalyticsvisitor2) - Remove a visitor
* [updateAnalyticsVisitor2](#updateanalyticsvisitor2) - Update a visitor

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

$response = $sdk->visitor->createAnalyticsVisitor2(
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

$response = $sdk->visitor->getAnalyticsVisitor2(
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

$response = $sdk->visitor->listAnalyticsVisitors2(
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

$response = $sdk->visitor->patchAnalyticsVisitor2(
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

$response = $sdk->visitor->removeAnalyticsVisitor2(
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

$response = $sdk->visitor->updateAnalyticsVisitor2(
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