# Deployment

## Overview

### Available Operations

* [createComputeDeployment](#createcomputedeployment) - Create a deployment
* [getComputeDeployment](#getcomputedeployment) - Retrieve a deployment
* [listComputeDeployments](#listcomputedeployments) - List all deployments
* [patchComputeDeployment](#patchcomputedeployment) - Update a deployment
* [removeComputeDeployment](#removecomputedeployment) - Remove a deployment
* [updateComputeDeployment](#updatecomputedeployment) - Update a deployment

## createComputeDeployment

Creates a ComputeDeployment. Provide the unified ComputeDeployment fields in the request body; they are mapped to the provider's API. Returns the created ComputeDeployment.

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeDeployment" method="post" path="/compute/{connection_id}/deployment" example="compute_deployment" -->
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

$request = new Operations\CreateComputeDeploymentRequest(
    computeDeployment: new Shared\ComputeDeployment(
        branch: 'develop',
        commitIdentifier: 'fadfe54eefd8fea670bea6d58b4b15d406c4b02b',
        commitMessage: 'copy primary pixel',
        createdAt: Utils\Utils::parseDateTime('2022-06-07T03:52:04.613Z'),
        environment: Shared\Environment::Preview,
        finishedAt: Utils\Utils::parseDateTime('2025-09-05T03:21:19.928Z'),
        id: '053e548c-6163-4e06-9568-c57f9ef016b5',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-16T01:02:22.275Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-03-08T06:34:19.370Z'),
        url: 'https://comfortable-petal.name',
    ),
    connectionId: '<id>',
);

$response = $sdk->deployment->createComputeDeployment(
    request: $request
);

if ($response->computeDeployment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateComputeDeploymentRequest](../../Models/Operations/CreateComputeDeploymentRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateComputeDeploymentResponse](../../Models/Operations/CreateComputeDeploymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeDeployment

Retrieves a single ComputeDeployment by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeDeployment" method="get" path="/compute/{connection_id}/deployment/{id}" -->
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

$request = new Operations\GetComputeDeploymentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deployment->getComputeDeployment(
    request: $request
);

if ($response->computeDeployment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetComputeDeploymentRequest](../../Models/Operations/GetComputeDeploymentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetComputeDeploymentResponse](../../Models/Operations/GetComputeDeploymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeDeployments

Returns a list of ComputeDeployments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeDeployments" method="get" path="/compute/{connection_id}/deployment" -->
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

$request = new Operations\ListComputeDeploymentsRequest(
    connectionId: '<id>',
);

$response = $sdk->deployment->listComputeDeployments(
    request: $request
);

if ($response->computeDeployments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListComputeDeploymentsRequest](../../Models/Operations/ListComputeDeploymentsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListComputeDeploymentsResponse](../../Models/Operations/ListComputeDeploymentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeDeployment

Updates the ComputeDeployment identified by `id`. Provide the unified ComputeDeployment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeDeployment" method="patch" path="/compute/{connection_id}/deployment/{id}" example="compute_deployment" -->
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

$request = new Operations\PatchComputeDeploymentRequest(
    computeDeployment: new Shared\ComputeDeployment(
        branch: 'develop',
        commitIdentifier: 'fadfe54eefd8fea670bea6d58b4b15d406c4b02b',
        commitMessage: 'copy primary pixel',
        createdAt: Utils\Utils::parseDateTime('2022-06-07T03:52:04.613Z'),
        environment: Shared\Environment::Preview,
        finishedAt: Utils\Utils::parseDateTime('2025-09-05T03:21:19.949Z'),
        id: '53241d2f-79bc-4656-a5d6-1919bca64076',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-16T01:02:22.293Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-03-08T06:34:19.393Z'),
        url: 'https://comfortable-petal.name',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deployment->patchComputeDeployment(
    request: $request
);

if ($response->computeDeployment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchComputeDeploymentRequest](../../Models/Operations/PatchComputeDeploymentRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchComputeDeploymentResponse](../../Models/Operations/PatchComputeDeploymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeDeployment

Deletes the ComputeDeployment identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeDeployment" method="delete" path="/compute/{connection_id}/deployment/{id}" -->
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

$request = new Operations\RemoveComputeDeploymentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deployment->removeComputeDeployment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveComputeDeploymentRequest](../../Models/Operations/RemoveComputeDeploymentRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveComputeDeploymentResponse](../../Models/Operations/RemoveComputeDeploymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeDeployment

Updates the ComputeDeployment identified by `id`. Provide the unified ComputeDeployment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeDeployment" method="put" path="/compute/{connection_id}/deployment/{id}" example="compute_deployment" -->
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

$request = new Operations\UpdateComputeDeploymentRequest(
    computeDeployment: new Shared\ComputeDeployment(
        branch: 'develop',
        commitIdentifier: 'fadfe54eefd8fea670bea6d58b4b15d406c4b02b',
        commitMessage: 'copy primary pixel',
        createdAt: Utils\Utils::parseDateTime('2022-06-07T03:52:04.613Z'),
        environment: Shared\Environment::Preview,
        finishedAt: Utils\Utils::parseDateTime('2025-09-05T03:21:19.949Z'),
        id: '53241d2f-79bc-4656-a5d6-1919bca64076',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-16T01:02:22.293Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-03-08T06:34:19.393Z'),
        url: 'https://comfortable-petal.name',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deployment->updateComputeDeployment(
    request: $request
);

if ($response->computeDeployment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateComputeDeploymentRequest](../../Models/Operations/UpdateComputeDeploymentRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateComputeDeploymentResponse](../../Models/Operations/UpdateComputeDeploymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |