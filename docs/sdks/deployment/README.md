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

Create a deployment

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
        finishedAt: Utils\Utils::parseDateTime('2025-08-26T16:45:53.868Z'),
        id: 'b20bbf0a-6320-480a-b25b-326f64749482',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-07T17:35:51.380Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-02-25T08:48:04.386Z'),
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

Retrieve a deployment

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

List all deployments

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

Update a deployment

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
        finishedAt: Utils\Utils::parseDateTime('2025-08-26T16:45:53.882Z'),
        id: '772d9dcc-23d5-4f9c-ab73-5c27dd621bfa',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-07T17:35:51.392Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-02-25T08:48:04.402Z'),
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

Remove a deployment

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

Update a deployment

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
        finishedAt: Utils\Utils::parseDateTime('2025-08-26T16:45:53.882Z'),
        id: '772d9dcc-23d5-4f9c-ab73-5c27dd621bfa',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-07T17:35:51.392Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-02-25T08:48:04.402Z'),
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