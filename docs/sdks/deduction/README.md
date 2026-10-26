# Deduction

## Overview

### Available Operations

* [createHrisDeduction](#createhrisdeduction) - Create a deduction
* [getHrisDeduction](#gethrisdeduction) - Retrieve a deduction
* [listHrisDeductions](#listhrisdeductions) - List all deductions
* [patchHrisDeduction](#patchhrisdeduction) - Update a deduction
* [removeHrisDeduction](#removehrisdeduction) - Remove a deduction
* [updateHrisDeduction](#updatehrisdeduction) - Update a deduction

## createHrisDeduction

Creates a HrisDeduction. Provide the unified HrisDeduction fields in the request body; they are mapped to the provider's API. Returns the created HrisDeduction.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDeduction" method="post" path="/hris/{connection_id}/deduction" example="hris_deduction" -->
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

$request = new Operations\CreateHrisDeductionRequest(
    hrisDeduction: new Shared\HrisDeduction(
        amount: 564,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeChild,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        employerAmount: 80510,
        employerType: Shared\EmployerType::Percentage,
        frequency: Shared\HrisDeductionFrequency::OneTime,
        garnishmentType: Shared\GarnishmentType::ChildSupport,
        id: 'a582e864-8679-4ea2-a843-3d0a283e3621',
        isActive: true,
        maxAmount: 21794,
        metadata: [],
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-03-19T02:33:30.046Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-25T08:25:37.760Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->deduction->createHrisDeduction(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateHrisDeductionRequest](../../Models/Operations/CreateHrisDeductionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateHrisDeductionResponse](../../Models/Operations/CreateHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDeduction

Retrieves a single HrisDeduction by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDeduction" method="get" path="/hris/{connection_id}/deduction/{id}" -->
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

$request = new Operations\GetHrisDeductionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deduction->getHrisDeduction(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetHrisDeductionRequest](../../Models/Operations/GetHrisDeductionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetHrisDeductionResponse](../../Models/Operations/GetHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDeductions

Returns a list of HrisDeductions. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDeductions" method="get" path="/hris/{connection_id}/deduction" -->
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

$request = new Operations\ListHrisDeductionsRequest(
    connectionId: '<id>',
);

$response = $sdk->deduction->listHrisDeductions(
    request: $request
);

if ($response->hrisDeductions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisDeductionsRequest](../../Models/Operations/ListHrisDeductionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisDeductionsResponse](../../Models/Operations/ListHrisDeductionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDeduction

Updates the HrisDeduction identified by `id`. Provide the unified HrisDeduction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDeduction" method="patch" path="/hris/{connection_id}/deduction/{id}" example="hris_deduction" -->
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

$request = new Operations\PatchHrisDeductionRequest(
    hrisDeduction: new Shared\HrisDeduction(
        amount: 564,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeChild,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        employerAmount: 80510,
        employerType: Shared\EmployerType::Percentage,
        frequency: Shared\HrisDeductionFrequency::OneTime,
        garnishmentType: Shared\GarnishmentType::ChildSupport,
        id: 'd177eefc-6638-4735-afea-a30b1b2e02c3',
        isActive: true,
        maxAmount: 21794,
        metadata: [],
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-03-19T02:33:30.063Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-25T08:25:37.774Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deduction->patchHrisDeduction(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchHrisDeductionRequest](../../Models/Operations/PatchHrisDeductionRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchHrisDeductionResponse](../../Models/Operations/PatchHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDeduction

Deletes the HrisDeduction identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDeduction" method="delete" path="/hris/{connection_id}/deduction/{id}" -->
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

$request = new Operations\RemoveHrisDeductionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deduction->removeHrisDeduction(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveHrisDeductionRequest](../../Models/Operations/RemoveHrisDeductionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveHrisDeductionResponse](../../Models/Operations/RemoveHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDeduction

Updates the HrisDeduction identified by `id`. Provide the unified HrisDeduction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDeduction" method="put" path="/hris/{connection_id}/deduction/{id}" example="hris_deduction" -->
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

$request = new Operations\UpdateHrisDeductionRequest(
    hrisDeduction: new Shared\HrisDeduction(
        amount: 564,
        coverageLevel: Shared\HrisDeductionCoverageLevel::EmployeeChild,
        createdAt: Utils\Utils::parseDateTime('2020-02-05T01:46:31.384Z'),
        employerAmount: 80510,
        employerType: Shared\EmployerType::Percentage,
        frequency: Shared\HrisDeductionFrequency::OneTime,
        garnishmentType: Shared\GarnishmentType::ChildSupport,
        id: 'd177eefc-6638-4735-afea-a30b1b2e02c3',
        isActive: true,
        maxAmount: 21794,
        metadata: [],
        notes: 'Carmen desidero.',
        startAt: Utils\Utils::parseDateTime('2025-03-19T02:33:30.063Z'),
        type: Shared\HrisDeductionType::Fixed,
        updatedAt: Utils\Utils::parseDateTime('2024-03-25T08:25:37.774Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deduction->updateHrisDeduction(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateHrisDeductionRequest](../../Models/Operations/UpdateHrisDeductionRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateHrisDeductionResponse](../../Models/Operations/UpdateHrisDeductionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |