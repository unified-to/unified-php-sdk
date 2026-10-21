# Instance

## Overview

### Available Operations

* [createComputeInstance](#createcomputeinstance) - Create an instance
* [getComputeInstance](#getcomputeinstance) - Retrieve an instance
* [listComputeInstances](#listcomputeinstances) - List all instances
* [patchComputeInstance](#patchcomputeinstance) - Update an instance
* [removeComputeInstance](#removecomputeinstance) - Remove an instance
* [updateComputeInstance](#updatecomputeinstance) - Update an instance

## createComputeInstance

Create an instance

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeInstance" method="post" path="/compute/{connection_id}/instance" example="compute_instance" -->
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

$request = new Operations\CreateComputeInstanceRequest(
    computeInstance: new Shared\ComputeInstance(
        allowedActions: [
            Shared\PropertyComputeInstanceAllowedActions::Terminate,
        ],
        architecture: Shared\ComputeInstanceArchitecture::Other,
        cpuCount: 8,
        createdAt: Utils\Utils::parseDateTime('2022-10-07T14:18:53.874Z'),
        currency: 'USD',
        diskMb: 1024000,
        endpoints: [
            new Shared\ComputeEndpoint(
                isAuthRequired: true,
                port: 8080,
                protocol: Shared\Protocol::Https,
                url: 'https://serene-shark.biz/',
            ),
        ],
        gpuCount: 0,
        hasInternetAccess: true,
        id: '4077e3bd-a54f-466b-b69d-d9c1e5cad805',
        image: 'ubuntu:24.04',
        market: Shared\Market::Spot,
        memoryMb: 2048,
        metadata: [],
        name: 'digital-panel',
        onIdle: Shared\OnIdle::Terminate,
        priceAmount: 24.90336107776966,
        priceUnit: Shared\PriceUnit::PerInstanceHour,
        projectIdentifier: 'g547KrivqY',
        ssh: new Shared\PropertyComputeInstanceSsh(
            host: '116.42.165.89',
            port: 22,
            username: 'root',
        ),
        startedAt: Utils\Utils::parseDateTime('2025-03-23T23:18:11.036Z'),
        status: Shared\ComputeInstanceStatus::Error,
        statusReason: 'Sponte quasi adversus alioqui reiciendis arca carmen canis.',
        type: Shared\ComputeInstanceType::Baremetal,
        updatedAt: Utils\Utils::parseDateTime('2025-06-16T04:50:44.691Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->instance->createComputeInstance(
    request: $request
);

if ($response->computeInstance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateComputeInstanceRequest](../../Models/Operations/CreateComputeInstanceRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateComputeInstanceResponse](../../Models/Operations/CreateComputeInstanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeInstance

Retrieve an instance

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeInstance" method="get" path="/compute/{connection_id}/instance/{id}" -->
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

$request = new Operations\GetComputeInstanceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instance->getComputeInstance(
    request: $request
);

if ($response->computeInstance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetComputeInstanceRequest](../../Models/Operations/GetComputeInstanceRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetComputeInstanceResponse](../../Models/Operations/GetComputeInstanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeInstances

List all instances

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeInstances" method="get" path="/compute/{connection_id}/instance" -->
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

$request = new Operations\ListComputeInstancesRequest(
    connectionId: '<id>',
);

$response = $sdk->instance->listComputeInstances(
    request: $request
);

if ($response->computeInstances !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListComputeInstancesRequest](../../Models/Operations/ListComputeInstancesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListComputeInstancesResponse](../../Models/Operations/ListComputeInstancesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeInstance

Update an instance

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeInstance" method="patch" path="/compute/{connection_id}/instance/{id}" example="compute_instance" -->
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

$request = new Operations\PatchComputeInstanceRequest(
    computeInstance: new Shared\ComputeInstance(
        allowedActions: [
            Shared\PropertyComputeInstanceAllowedActions::Terminate,
        ],
        architecture: Shared\ComputeInstanceArchitecture::Other,
        cpuCount: 8,
        createdAt: Utils\Utils::parseDateTime('2022-10-07T14:18:53.874Z'),
        currency: 'USD',
        diskMb: 1024000,
        endpoints: [
            new Shared\ComputeEndpoint(
                isAuthRequired: true,
                port: 8080,
                protocol: Shared\Protocol::Https,
                url: 'https://serene-shark.biz/',
            ),
        ],
        gpuCount: 0,
        hasInternetAccess: true,
        id: '68a4cfd4-c11d-4807-8d5e-f972fde6e258',
        image: 'ubuntu:24.04',
        market: Shared\Market::Spot,
        memoryMb: 2048,
        metadata: [],
        name: 'digital-panel',
        onIdle: Shared\OnIdle::Terminate,
        priceAmount: 24.90336107776966,
        priceUnit: Shared\PriceUnit::PerInstanceHour,
        projectIdentifier: 'g547KrivqY',
        ssh: new Shared\PropertyComputeInstanceSsh(
            host: '116.42.165.89',
            port: 22,
            username: 'root',
        ),
        startedAt: Utils\Utils::parseDateTime('2025-03-23T23:18:11.066Z'),
        status: Shared\ComputeInstanceStatus::Error,
        statusReason: 'Sponte quasi adversus alioqui reiciendis arca carmen canis.',
        type: Shared\ComputeInstanceType::Baremetal,
        updatedAt: Utils\Utils::parseDateTime('2025-06-16T04:50:44.724Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instance->patchComputeInstance(
    request: $request
);

if ($response->computeInstance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchComputeInstanceRequest](../../Models/Operations/PatchComputeInstanceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchComputeInstanceResponse](../../Models/Operations/PatchComputeInstanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeInstance

Remove an instance

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeInstance" method="delete" path="/compute/{connection_id}/instance/{id}" -->
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

$request = new Operations\RemoveComputeInstanceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instance->removeComputeInstance(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveComputeInstanceRequest](../../Models/Operations/RemoveComputeInstanceRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveComputeInstanceResponse](../../Models/Operations/RemoveComputeInstanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeInstance

Update an instance

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeInstance" method="put" path="/compute/{connection_id}/instance/{id}" example="compute_instance" -->
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

$request = new Operations\UpdateComputeInstanceRequest(
    computeInstance: new Shared\ComputeInstance(
        allowedActions: [
            Shared\PropertyComputeInstanceAllowedActions::Terminate,
        ],
        architecture: Shared\ComputeInstanceArchitecture::Other,
        cpuCount: 8,
        createdAt: Utils\Utils::parseDateTime('2022-10-07T14:18:53.874Z'),
        currency: 'USD',
        diskMb: 1024000,
        endpoints: [
            new Shared\ComputeEndpoint(
                isAuthRequired: true,
                port: 8080,
                protocol: Shared\Protocol::Https,
                url: 'https://serene-shark.biz/',
            ),
        ],
        gpuCount: 0,
        hasInternetAccess: true,
        id: '68a4cfd4-c11d-4807-8d5e-f972fde6e258',
        image: 'ubuntu:24.04',
        market: Shared\Market::Spot,
        memoryMb: 2048,
        metadata: [],
        name: 'digital-panel',
        onIdle: Shared\OnIdle::Terminate,
        priceAmount: 24.90336107776966,
        priceUnit: Shared\PriceUnit::PerInstanceHour,
        projectIdentifier: 'g547KrivqY',
        ssh: new Shared\PropertyComputeInstanceSsh(
            host: '116.42.165.89',
            port: 22,
            username: 'root',
        ),
        startedAt: Utils\Utils::parseDateTime('2025-03-23T23:18:11.066Z'),
        status: Shared\ComputeInstanceStatus::Error,
        statusReason: 'Sponte quasi adversus alioqui reiciendis arca carmen canis.',
        type: Shared\ComputeInstanceType::Baremetal,
        updatedAt: Utils\Utils::parseDateTime('2025-06-16T04:50:44.724Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->instance->updateComputeInstance(
    request: $request
);

if ($response->computeInstance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateComputeInstanceRequest](../../Models/Operations/UpdateComputeInstanceRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateComputeInstanceResponse](../../Models/Operations/UpdateComputeInstanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |