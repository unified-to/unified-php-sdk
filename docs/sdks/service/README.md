# Service

## Overview

### Available Operations

* [createComputeService](#createcomputeservice) - Create a service
* [getComputeService](#getcomputeservice) - Retrieve a service
* [listComputeServices](#listcomputeservices) - List all services
* [patchComputeService](#patchcomputeservice) - Update a service
* [removeComputeService](#removecomputeservice) - Remove a service
* [updateComputeService](#updatecomputeservice) - Update a service

## createComputeService

Creates a ComputeService. Provide the unified ComputeService fields in the request body; they are mapped to the provider's API. Returns the created ComputeService.

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeService" method="post" path="/compute/{connection_id}/service" example="compute_service" -->
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

$request = new Operations\CreateComputeServiceRequest(
    computeService: new Shared\ComputeService(
        branch: 'main',
        buildCommand: 'npm run build',
        createdAt: Utils\Utils::parseDateTime('2023-10-04T02:06:29.391Z'),
        id: '5871ba47-b342-44d7-961e-66489835a664',
        instanceCount: 6,
        maxInstanceCount: 6,
        metadata: [],
        minInstanceCount: 1,
        name: 'tame-sideboard',
        projectIdentifier: '4nyWICvPfi',
        repoUrl: 'https://github.com/Kimberly_Muller95/tame-sideboard',
        runtime: 'python',
        status: Shared\ComputeServiceStatus::Suspended,
        type: Shared\ComputeServiceType::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-04-08T14:33:00.292Z'),
        url: 'https://tame-sideboard.rotating-shoulder.biz',
    ),
    connectionId: '<id>',
);

$response = $sdk->service->createComputeService(
    request: $request
);

if ($response->computeService !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateComputeServiceRequest](../../Models/Operations/CreateComputeServiceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateComputeServiceResponse](../../Models/Operations/CreateComputeServiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeService

Retrieves a single ComputeService by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeService" method="get" path="/compute/{connection_id}/service/{id}" -->
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

$request = new Operations\GetComputeServiceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->service->getComputeService(
    request: $request
);

if ($response->computeService !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetComputeServiceRequest](../../Models/Operations/GetComputeServiceRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetComputeServiceResponse](../../Models/Operations/GetComputeServiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeServices

Returns a list of ComputeServices. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeServices" method="get" path="/compute/{connection_id}/service" -->
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

$request = new Operations\ListComputeServicesRequest(
    connectionId: '<id>',
);

$response = $sdk->service->listComputeServices(
    request: $request
);

if ($response->computeServices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListComputeServicesRequest](../../Models/Operations/ListComputeServicesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListComputeServicesResponse](../../Models/Operations/ListComputeServicesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeService

Updates the ComputeService identified by `id`. Provide the unified ComputeService fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeService" method="patch" path="/compute/{connection_id}/service/{id}" example="compute_service" -->
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

$request = new Operations\PatchComputeServiceRequest(
    computeService: new Shared\ComputeService(
        branch: 'main',
        buildCommand: 'npm run build',
        createdAt: Utils\Utils::parseDateTime('2023-10-04T02:06:29.391Z'),
        id: '4fbc9c63-61fe-4ac9-9b46-f342c8b20734',
        instanceCount: 6,
        maxInstanceCount: 6,
        metadata: [],
        minInstanceCount: 1,
        name: 'tame-sideboard',
        projectIdentifier: '4nyWICvPfi',
        repoUrl: 'https://github.com/Kimberly_Muller95/tame-sideboard',
        runtime: 'python',
        status: Shared\ComputeServiceStatus::Suspended,
        type: Shared\ComputeServiceType::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-04-08T14:33:00.298Z'),
        url: 'https://tame-sideboard.rotating-shoulder.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->service->patchComputeService(
    request: $request
);

if ($response->computeService !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchComputeServiceRequest](../../Models/Operations/PatchComputeServiceRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchComputeServiceResponse](../../Models/Operations/PatchComputeServiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeService

Deletes the ComputeService identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeService" method="delete" path="/compute/{connection_id}/service/{id}" -->
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

$request = new Operations\RemoveComputeServiceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->service->removeComputeService(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveComputeServiceRequest](../../Models/Operations/RemoveComputeServiceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveComputeServiceResponse](../../Models/Operations/RemoveComputeServiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeService

Updates the ComputeService identified by `id`. Provide the unified ComputeService fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeService" method="put" path="/compute/{connection_id}/service/{id}" example="compute_service" -->
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

$request = new Operations\UpdateComputeServiceRequest(
    computeService: new Shared\ComputeService(
        branch: 'main',
        buildCommand: 'npm run build',
        createdAt: Utils\Utils::parseDateTime('2023-10-04T02:06:29.391Z'),
        id: '4fbc9c63-61fe-4ac9-9b46-f342c8b20734',
        instanceCount: 6,
        maxInstanceCount: 6,
        metadata: [],
        minInstanceCount: 1,
        name: 'tame-sideboard',
        projectIdentifier: '4nyWICvPfi',
        repoUrl: 'https://github.com/Kimberly_Muller95/tame-sideboard',
        runtime: 'python',
        status: Shared\ComputeServiceStatus::Suspended,
        type: Shared\ComputeServiceType::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-04-08T14:33:00.298Z'),
        url: 'https://tame-sideboard.rotating-shoulder.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->service->updateComputeService(
    request: $request
);

if ($response->computeService !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateComputeServiceRequest](../../Models/Operations/UpdateComputeServiceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateComputeServiceResponse](../../Models/Operations/UpdateComputeServiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |