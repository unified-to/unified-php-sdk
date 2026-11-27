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
        description: 'Vel facere valeo vallum degero vado thymum patruus.',
        dueAt: Utils\Utils::parseDateTime('2026-09-03T12:52:54.287Z'),
        id: 'a538beb8-4bcb-45f3-9720-5310732482ab',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-07-08T19:31:44.740Z'),
                id: '4b6026d6-f80a-4f62-bb98-270f27e9d3a2',
                isCompleted: true,
                name: 'Balanced system-worthy collaboration',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-09-13T09:12:32.818Z'),
                id: 'a61d4b39-6769-4bb3-939f-3b85779d3788',
                isCompleted: true,
                name: 'Persevering zero tolerance forecast',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Adiuvo ullus magnam eos cohors.',
                dueAt: Utils\Utils::parseDateTime('2026-11-16T06:37:36.075Z'),
                id: 'd5ae5d8c-62f7-4a70-b6b9-7ef5f41e8d2a',
                isCompleted: true,
                name: 'Networked logistical toolset',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'User-centric radical parallelism',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-08-22T14:25:50.703Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-27T16:03:38.695Z'),
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
        description: 'Vel facere valeo vallum degero vado thymum patruus.',
        dueAt: Utils\Utils::parseDateTime('2026-09-03T12:52:54.314Z'),
        id: '7568ce6f-3de0-4e28-af3d-e736b5e0587b',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-07-08T19:31:44.766Z'),
                id: 'f79246f7-0e27-4b38-b222-3fd8c044dbcf',
                isCompleted: true,
                name: 'Balanced system-worthy collaboration',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-09-13T09:12:32.846Z'),
                id: '80d8afcd-c7fb-4bf0-8ecf-d88feeb10cc6',
                isCompleted: true,
                name: 'Persevering zero tolerance forecast',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Adiuvo ullus magnam eos cohors.',
                dueAt: Utils\Utils::parseDateTime('2026-11-16T06:37:36.104Z'),
                id: '4edeb008-2615-48ed-bd20-87c8aa385a27',
                isCompleted: true,
                name: 'Networked logistical toolset',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'User-centric radical parallelism',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-08-22T14:25:50.726Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-27T16:03:38.706Z'),
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
        description: 'Vel facere valeo vallum degero vado thymum patruus.',
        dueAt: Utils\Utils::parseDateTime('2026-09-03T12:52:54.314Z'),
        id: '7568ce6f-3de0-4e28-af3d-e736b5e0587b',
        metadata: [],
        milestones: [
            new Shared\PerformanceGoalMilestone(
                currentValue: 10,
                dueAt: Utils\Utils::parseDateTime('2026-07-08T19:31:44.766Z'),
                id: 'f79246f7-0e27-4b38-b222-3fd8c044dbcf',
                isCompleted: true,
                name: 'Balanced system-worthy collaboration',
                targetValue: 32,
                unit: '%',
                weight: 7,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 0,
                dueAt: Utils\Utils::parseDateTime('2026-09-13T09:12:32.846Z'),
                id: '80d8afcd-c7fb-4bf0-8ecf-d88feeb10cc6',
                isCompleted: true,
                name: 'Persevering zero tolerance forecast',
                targetValue: 32,
                weight: 5,
            ),
            new Shared\PerformanceGoalMilestone(
                currentValue: 31,
                description: 'Adiuvo ullus magnam eos cohors.',
                dueAt: Utils\Utils::parseDateTime('2026-11-16T06:37:36.104Z'),
                id: '4edeb008-2615-48ed-bd20-87c8aa385a27',
                isCompleted: true,
                name: 'Networked logistical toolset',
                targetValue: 32,
                weight: 5,
            ),
        ],
        name: 'User-centric radical parallelism',
        progress: 3,
        startAt: Utils\Utils::parseDateTime('2025-08-22T14:25:50.726Z'),
        status: Shared\PerformanceGoalStatus::Closed,
        type: Shared\PerformanceGoalSchemasType::Company,
        updatedAt: Utils\Utils::parseDateTime('2022-09-27T16:03:38.706Z'),
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