# Goal

## Overview

### Available Operations

* [createPerformanceGoal](#createperformancegoal) - Create a goal
* [getHealthcareGoal](#gethealthcaregoal) - Retrieve a goal
* [getPerformanceGoal](#getperformancegoal) - Retrieve a goal
* [listHealthcareGoals](#listhealthcaregoals) - List all goals
* [listPerformanceGoals](#listperformancegoals) - List all goals
* [patchPerformanceGoal](#patchperformancegoal) - Update a goal
* [removePerformanceGoal](#removeperformancegoal) - Remove a goal
* [updatePerformanceGoal](#updateperformancegoal) - Update a goal

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
        dueAt: Utils\Utils::parseDateTime('2026-08-07T06:51:11.648Z'),
        id: 'bdf514c3-eff7-4276-a9c4-7f780d3a009c',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-06-12T04:46:32.827Z'),
                id: 'e12d5c86-cc93-4226-a871-eac30c62d2eb',
                isCompleted: true,
                name: 'Team-oriented secondary matrix',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-08-17T00:31:43.928Z'),
                id: 'eaa15d3d-ceea-4874-a911-da87967d34d6',
                isCompleted: true,
                name: 'Exclusive client-server conglomeration',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Hic explicabo odit.',
                dueAt: Utils\Utils::parseDateTime('2026-10-19T04:44:26.038Z'),
                id: '7d92437d-e776-42be-bcc8-c2480e37e360',
                isCompleted: true,
                name: 'Synchronised immersive success',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'Proactive national protocol',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-07-30T13:54:32.048Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-16T12:58:22.175Z'),
        weight: 5,
    ),
    connectionId: '<id>',
);

$response = $sdk->goal->createPerformanceGoal(
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

## getHealthcareGoal

Retrieves a single HealthcareGoal by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHealthcareGoal" method="get" path="/healthcare/{connection_id}/goal/{id}" -->
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

$request = new Operations\GetHealthcareGoalRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->goal->getHealthcareGoal(
    request: $request
);

if ($response->healthcareGoal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHealthcareGoalRequest](../../Models/Operations/GetHealthcareGoalRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHealthcareGoalResponse](../../Models/Operations/GetHealthcareGoalResponse.md)**

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

$response = $sdk->goal->getPerformanceGoal(
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

## listHealthcareGoals

Returns a list of HealthcareGoals. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHealthcareGoals" method="get" path="/healthcare/{connection_id}/goal" -->
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

$request = new Operations\ListHealthcareGoalsRequest(
    connectionId: '<id>',
);

$response = $sdk->goal->listHealthcareGoals(
    request: $request
);

if ($response->healthcareGoals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHealthcareGoalsRequest](../../Models/Operations/ListHealthcareGoalsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHealthcareGoalsResponse](../../Models/Operations/ListHealthcareGoalsResponse.md)**

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

$response = $sdk->goal->listPerformanceGoals(
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
        dueAt: Utils\Utils::parseDateTime('2026-08-07T06:51:11.662Z'),
        id: '4703d0fc-a82c-461e-9b61-9a2e3be7bb38',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-06-12T04:46:32.840Z'),
                id: 'c4625193-2125-4001-832f-dbcfc91764ef',
                isCompleted: true,
                name: 'Team-oriented secondary matrix',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-08-17T00:31:43.943Z'),
                id: '7080b108-fe30-4750-91b2-1a845bf092eb',
                isCompleted: true,
                name: 'Exclusive client-server conglomeration',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Hic explicabo odit.',
                dueAt: Utils\Utils::parseDateTime('2026-10-19T04:44:26.053Z'),
                id: '59d9c35e-a61a-4361-b56b-1f4e29638fba',
                isCompleted: true,
                name: 'Synchronised immersive success',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'Proactive national protocol',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-07-30T13:54:32.059Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-16T12:58:22.181Z'),
        weight: 5,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->goal->patchPerformanceGoal(
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

$response = $sdk->goal->removePerformanceGoal(
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
        dueAt: Utils\Utils::parseDateTime('2026-08-07T06:51:11.662Z'),
        id: '4703d0fc-a82c-461e-9b61-9a2e3be7bb38',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-06-12T04:46:32.840Z'),
                id: 'c4625193-2125-4001-832f-dbcfc91764ef',
                isCompleted: true,
                name: 'Team-oriented secondary matrix',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-08-17T00:31:43.943Z'),
                id: '7080b108-fe30-4750-91b2-1a845bf092eb',
                isCompleted: true,
                name: 'Exclusive client-server conglomeration',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Hic explicabo odit.',
                dueAt: Utils\Utils::parseDateTime('2026-10-19T04:44:26.053Z'),
                id: '59d9c35e-a61a-4361-b56b-1f4e29638fba',
                isCompleted: true,
                name: 'Synchronised immersive success',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'Proactive national protocol',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-07-30T13:54:32.059Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-16T12:58:22.181Z'),
        weight: 5,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->goal->updatePerformanceGoal(
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