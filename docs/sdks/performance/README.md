# Performance

## Overview

### Available Operations

* [createPerformanceFeedback](#createperformancefeedback) - Create a feedback
* [createPerformanceGoal](#createperformancegoal) - Create a goal
* [getPerformanceCycle](#getperformancecycle) - Retrieve a cycle
* [getPerformanceFeedback](#getperformancefeedback) - Retrieve a feedback
* [getPerformanceGoal](#getperformancegoal) - Retrieve a goal
* [getPerformanceReview](#getperformancereview) - Retrieve a review
* [listPerformanceCycles](#listperformancecycles) - List all cycles
* [listPerformanceFeedbacks](#listperformancefeedbacks) - List all feedbacks
* [listPerformanceGoals](#listperformancegoals) - List all goals
* [listPerformanceReviews](#listperformancereviews) - List all reviews
* [patchPerformanceGoal](#patchperformancegoal) - Update a goal
* [removePerformanceGoal](#removeperformancegoal) - Remove a goal
* [updatePerformanceGoal](#updateperformancegoal) - Update a goal

## createPerformanceFeedback

Creates a PerformanceFeedback. Provide the unified PerformanceFeedback fields in the request body; they are mapped to the provider's API. Returns the created PerformanceFeedback.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPerformanceFeedback" method="post" path="/performance/{connection_id}/feedback" example="performance_feedback" -->
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

$request = new Operations\CreatePerformanceFeedbackRequest(
    performanceFeedback: new Shared\PerformanceFeedback(
        createdAt: Utils\Utils::parseDateTime('2023-04-11T16:21:53.862Z'),
        id: 'b903536e-0573-420e-90c1-8f7d22ec584e',
        isVisible: true,
        message: 'Tabernus corpus voluptate aestus.',
        metadata: [],
        tags: [
            'well-to-do',
            'hexagon',
        ],
        type: Shared\PerformanceFeedbackType::Praise,
        updatedAt: Utils\Utils::parseDateTime('2025-09-05T10:54:01.678Z'),
        userId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->performance->createPerformanceFeedback(
    request: $request
);

if ($response->performanceFeedback !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreatePerformanceFeedbackRequest](../../Models/Operations/CreatePerformanceFeedbackRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreatePerformanceFeedbackResponse](../../Models/Operations/CreatePerformanceFeedbackResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPerformanceGoal

Creates a PerformanceGoal. Provide the unified PerformanceGoal fields in the request body; they are mapped to the provider's API. Returns the created PerformanceGoal.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPerformanceGoal" method="post" path="/performance/{connection_id}/goal" example="performance_goal" -->
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

$request = new Operations\CreatePerformanceGoalRequest(
    performanceGoal: new Shared\PerformanceGoal(
        createdAt: Utils\Utils::parseDateTime('2020-01-09T20:43:07.380Z'),
        description: 'Suscipit suspendo vulnero vel facere valeo vallum degero.',
        dueAt: Utils\Utils::parseDateTime('2026-07-31T16:29:09.322Z'),
        id: '3df190f1-58c1-40a7-88d2-820ca3dc7775',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-06-05T18:06:26.026Z'),
                id: 'c1d49a6d-54ca-4de6-a2bd-ab6c45520442',
                isCompleted: true,
                name: 'Team-oriented secondary matrix',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-08-10T09:31:10.060Z'),
                id: 'e55af9d2-82c4-4dbd-b18b-08e06bd67c05',
                isCompleted: true,
                name: 'Exclusive client-server conglomeration',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Hic explicabo odit.',
                dueAt: Utils\Utils::parseDateTime('2026-10-12T09:33:53.660Z'),
                id: '2df5a8c2-3ce6-4719-accf-92f5b2ed074f',
                isCompleted: true,
                name: 'Synchronised immersive success',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'Proactive national protocol',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-07-25T00:07:13.959Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-13T20:17:59.317Z'),
        weight: 5,
    ),
    connectionId: '<id>',
);

$response = $sdk->performance->createPerformanceGoal(
    request: $request
);

if ($response->performanceGoal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreatePerformanceGoalRequest](../../Models/Operations/CreatePerformanceGoalRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreatePerformanceGoalResponse](../../Models/Operations/CreatePerformanceGoalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPerformanceCycle

Retrieves a single PerformanceCycle by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPerformanceCycle" method="get" path="/performance/{connection_id}/cycle/{id}" -->
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

$request = new Operations\GetPerformanceCycleRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->performance->getPerformanceCycle(
    request: $request
);

if ($response->performanceCycle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetPerformanceCycleRequest](../../Models/Operations/GetPerformanceCycleRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetPerformanceCycleResponse](../../Models/Operations/GetPerformanceCycleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPerformanceFeedback

Retrieves a single PerformanceFeedback by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPerformanceFeedback" method="get" path="/performance/{connection_id}/feedback/{id}" -->
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

$request = new Operations\GetPerformanceFeedbackRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->performance->getPerformanceFeedback(
    request: $request
);

if ($response->performanceFeedback !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetPerformanceFeedbackRequest](../../Models/Operations/GetPerformanceFeedbackRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetPerformanceFeedbackResponse](../../Models/Operations/GetPerformanceFeedbackResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPerformanceGoal

Retrieves a single PerformanceGoal by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPerformanceGoal" method="get" path="/performance/{connection_id}/goal/{id}" -->
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

$request = new Operations\GetPerformanceGoalRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->performance->getPerformanceGoal(
    request: $request
);

if ($response->performanceGoal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetPerformanceGoalRequest](../../Models/Operations/GetPerformanceGoalRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetPerformanceGoalResponse](../../Models/Operations/GetPerformanceGoalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPerformanceReview

Retrieves a single PerformanceReview by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPerformanceReview" method="get" path="/performance/{connection_id}/review/{id}" -->
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

$request = new Operations\GetPerformanceReviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->performance->getPerformanceReview(
    request: $request
);

if ($response->performanceReview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetPerformanceReviewRequest](../../Models/Operations/GetPerformanceReviewRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetPerformanceReviewResponse](../../Models/Operations/GetPerformanceReviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPerformanceCycles

Returns a list of PerformanceCycles. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPerformanceCycles" method="get" path="/performance/{connection_id}/cycle" -->
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

$request = new Operations\ListPerformanceCyclesRequest(
    connectionId: '<id>',
);

$response = $sdk->performance->listPerformanceCycles(
    request: $request
);

if ($response->performanceCycles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListPerformanceCyclesRequest](../../Models/Operations/ListPerformanceCyclesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListPerformanceCyclesResponse](../../Models/Operations/ListPerformanceCyclesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPerformanceFeedbacks

Returns a list of PerformanceFeedbacks. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPerformanceFeedbacks" method="get" path="/performance/{connection_id}/feedback" -->
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

$request = new Operations\ListPerformanceFeedbacksRequest(
    connectionId: '<id>',
);

$response = $sdk->performance->listPerformanceFeedbacks(
    request: $request
);

if ($response->performanceFeedbacks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListPerformanceFeedbacksRequest](../../Models/Operations/ListPerformanceFeedbacksRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListPerformanceFeedbacksResponse](../../Models/Operations/ListPerformanceFeedbacksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPerformanceGoals

Returns a list of PerformanceGoals. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPerformanceGoals" method="get" path="/performance/{connection_id}/goal" -->
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

$request = new Operations\ListPerformanceGoalsRequest(
    connectionId: '<id>',
);

$response = $sdk->performance->listPerformanceGoals(
    request: $request
);

if ($response->performanceGoals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListPerformanceGoalsRequest](../../Models/Operations/ListPerformanceGoalsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListPerformanceGoalsResponse](../../Models/Operations/ListPerformanceGoalsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPerformanceReviews

Returns a list of PerformanceReviews. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPerformanceReviews" method="get" path="/performance/{connection_id}/review" -->
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

$request = new Operations\ListPerformanceReviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->performance->listPerformanceReviews(
    request: $request
);

if ($response->performanceReviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListPerformanceReviewsRequest](../../Models/Operations/ListPerformanceReviewsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListPerformanceReviewsResponse](../../Models/Operations/ListPerformanceReviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPerformanceGoal

Updates the PerformanceGoal identified by `id`. Provide the unified PerformanceGoal fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPerformanceGoal" method="patch" path="/performance/{connection_id}/goal/{id}" example="performance_goal" -->
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

$request = new Operations\PatchPerformanceGoalRequest(
    performanceGoal: new Shared\PerformanceGoal(
        createdAt: Utils\Utils::parseDateTime('2020-01-09T20:43:07.380Z'),
        description: 'Suscipit suspendo vulnero vel facere valeo vallum degero.',
        dueAt: Utils\Utils::parseDateTime('2026-07-31T16:29:09.343Z'),
        id: '5b9a3d76-1677-4f34-8153-013b30b7223f',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-06-05T18:06:26.047Z'),
                id: 'ceec02a3-a2ce-442e-803f-902dfd7f118d',
                isCompleted: true,
                name: 'Team-oriented secondary matrix',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-08-10T09:31:10.082Z'),
                id: 'b897bc9b-1fd4-4fcf-a6c4-b0123c36d653',
                isCompleted: true,
                name: 'Exclusive client-server conglomeration',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Hic explicabo odit.',
                dueAt: Utils\Utils::parseDateTime('2026-10-12T09:33:53.682Z'),
                id: '0b8b5044-0428-4b30-bbac-1f755074fbca',
                isCompleted: true,
                name: 'Synchronised immersive success',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'Proactive national protocol',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-07-25T00:07:13.977Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-13T20:17:59.326Z'),
        weight: 5,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->performance->patchPerformanceGoal(
    request: $request
);

if ($response->performanceGoal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchPerformanceGoalRequest](../../Models/Operations/PatchPerformanceGoalRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchPerformanceGoalResponse](../../Models/Operations/PatchPerformanceGoalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePerformanceGoal

Deletes the PerformanceGoal identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removePerformanceGoal" method="delete" path="/performance/{connection_id}/goal/{id}" -->
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

$request = new Operations\RemovePerformanceGoalRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->performance->removePerformanceGoal(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemovePerformanceGoalRequest](../../Models/Operations/RemovePerformanceGoalRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemovePerformanceGoalResponse](../../Models/Operations/RemovePerformanceGoalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePerformanceGoal

Updates the PerformanceGoal identified by `id`. Provide the unified PerformanceGoal fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePerformanceGoal" method="put" path="/performance/{connection_id}/goal/{id}" example="performance_goal" -->
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

$request = new Operations\UpdatePerformanceGoalRequest(
    performanceGoal: new Shared\PerformanceGoal(
        createdAt: Utils\Utils::parseDateTime('2020-01-09T20:43:07.380Z'),
        description: 'Suscipit suspendo vulnero vel facere valeo vallum degero.',
        dueAt: Utils\Utils::parseDateTime('2026-07-31T16:29:09.343Z'),
        id: '5b9a3d76-1677-4f34-8153-013b30b7223f',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-06-05T18:06:26.047Z'),
                id: 'ceec02a3-a2ce-442e-803f-902dfd7f118d',
                isCompleted: true,
                name: 'Team-oriented secondary matrix',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-08-10T09:31:10.082Z'),
                id: 'b897bc9b-1fd4-4fcf-a6c4-b0123c36d653',
                isCompleted: true,
                name: 'Exclusive client-server conglomeration',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Hic explicabo odit.',
                dueAt: Utils\Utils::parseDateTime('2026-10-12T09:33:53.682Z'),
                id: '0b8b5044-0428-4b30-bbac-1f755074fbca',
                isCompleted: true,
                name: 'Synchronised immersive success',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'Proactive national protocol',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-07-25T00:07:13.977Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-13T20:17:59.326Z'),
        weight: 5,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->performance->updatePerformanceGoal(
    request: $request
);

if ($response->performanceGoal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdatePerformanceGoalRequest](../../Models/Operations/UpdatePerformanceGoalRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdatePerformanceGoalResponse](../../Models/Operations/UpdatePerformanceGoalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |