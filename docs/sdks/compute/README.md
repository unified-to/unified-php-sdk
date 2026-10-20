# Compute

## Overview

### Available Operations

* [createComputeDeployment](#createcomputedeployment) - Create a deployment
* [createComputeDomain](#createcomputedomain) - Create a domain
* [createComputeEnvvar](#createcomputeenvvar) - Create an envvar
* [createComputeInstance](#createcomputeinstance) - Create an instance
* [createComputeKey](#createcomputekey) - Create a key
* [createComputeService](#createcomputeservice) - Create a service
* [createComputeSnapshot](#createcomputesnapshot) - Create a snapshot
* [createComputeTemplate](#createcomputetemplate) - Create a template
* [createComputeVolume](#createcomputevolume) - Create a volume
* [getComputeDeployment](#getcomputedeployment) - Retrieve a deployment
* [getComputeDomain](#getcomputedomain) - Retrieve a domain
* [getComputeEnvvar](#getcomputeenvvar) - Retrieve an envvar
* [getComputeGputype](#getcomputegputype) - Retrieve a gputype
* [getComputeInstance](#getcomputeinstance) - Retrieve an instance
* [getComputeKey](#getcomputekey) - Retrieve a key
* [getComputeRegion](#getcomputeregion) - Retrieve a region
* [getComputeService](#getcomputeservice) - Retrieve a service
* [getComputeSnapshot](#getcomputesnapshot) - Retrieve a snapshot
* [getComputeTemplate](#getcomputetemplate) - Retrieve a template
* [getComputeVolume](#getcomputevolume) - Retrieve a volume
* [listComputeDeployments](#listcomputedeployments) - List all deployments
* [listComputeDomains](#listcomputedomains) - List all domains
* [listComputeEnvvars](#listcomputeenvvars) - List all envvars
* [listComputeGputypes](#listcomputegputypes) - List all gputypes
* [listComputeInstances](#listcomputeinstances) - List all instances
* [listComputeKeys](#listcomputekeys) - List all keys
* [listComputeRegions](#listcomputeregions) - List all regions
* [listComputeServices](#listcomputeservices) - List all services
* [listComputeSnapshots](#listcomputesnapshots) - List all snapshots
* [listComputeTemplates](#listcomputetemplates) - List all templates
* [listComputeUsages](#listcomputeusages) - List all usages
* [listComputeVolumes](#listcomputevolumes) - List all volumes
* [patchComputeDeployment](#patchcomputedeployment) - Update a deployment
* [patchComputeDomain](#patchcomputedomain) - Update a domain
* [patchComputeEnvvar](#patchcomputeenvvar) - Update an envvar
* [patchComputeInstance](#patchcomputeinstance) - Update an instance
* [patchComputeKey](#patchcomputekey) - Update a key
* [patchComputeService](#patchcomputeservice) - Update a service
* [patchComputeTemplate](#patchcomputetemplate) - Update a template
* [patchComputeVolume](#patchcomputevolume) - Update a volume
* [removeComputeDeployment](#removecomputedeployment) - Remove a deployment
* [removeComputeDomain](#removecomputedomain) - Remove a domain
* [removeComputeEnvvar](#removecomputeenvvar) - Remove an envvar
* [removeComputeInstance](#removecomputeinstance) - Remove an instance
* [removeComputeKey](#removecomputekey) - Remove a key
* [removeComputeService](#removecomputeservice) - Remove a service
* [removeComputeSnapshot](#removecomputesnapshot) - Remove a snapshot
* [removeComputeTemplate](#removecomputetemplate) - Remove a template
* [removeComputeVolume](#removecomputevolume) - Remove a volume
* [updateComputeDeployment](#updatecomputedeployment) - Update a deployment
* [updateComputeDomain](#updatecomputedomain) - Update a domain
* [updateComputeEnvvar](#updatecomputeenvvar) - Update an envvar
* [updateComputeInstance](#updatecomputeinstance) - Update an instance
* [updateComputeKey](#updatecomputekey) - Update a key
* [updateComputeService](#updatecomputeservice) - Update a service
* [updateComputeTemplate](#updatecomputetemplate) - Update a template
* [updateComputeVolume](#updatecomputevolume) - Update a volume

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
        finishedAt: Utils\Utils::parseDateTime('2025-08-28T17:39:45.131Z'),
        id: '1cef0911-d71a-4a18-96cc-b8c1741435be',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-09T12:38:11.684Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T17:17:26.110Z'),
        url: 'https://comfortable-petal.name',
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeDeployment(
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

## createComputeDomain

Create a domain

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeDomain" method="post" path="/compute/{connection_id}/domain" example="compute_domain" -->
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

$request = new Operations\CreateComputeDomainRequest(
    computeDomain: new Shared\ComputeDomain(
        createdAt: Utils\Utils::parseDateTime('2019-11-22T16:38:26.009Z'),
        id: '7fa27e4a-271e-4f9a-853d-fbb0b194f876',
        isPrimary: false,
        metadata: [],
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-11-02T22:37:13.419Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeDomain(
    request: $request
);

if ($response->computeDomain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateComputeDomainRequest](../../Models/Operations/CreateComputeDomainRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateComputeDomainResponse](../../Models/Operations/CreateComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createComputeEnvvar

Create an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeEnvvar" method="post" path="/compute/{connection_id}/envvar" example="compute_envvar" -->
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

$request = new Operations\CreateComputeEnvvarRequest(
    computeEnvvar: new Shared\ComputeEnvvar(
        createdAt: Utils\Utils::parseDateTime('2021-08-16T07:52:27.306Z'),
        environments: [
            Shared\PropertyComputeEnvvarEnvironments::Preview,
        ],
        id: '99c995cb-eeb5-4bd0-80c9-2e3084572418',
        isSecret: true,
        metadata: [],
        name: 'AEGER_SUBSTANTIA',
        updatedAt: Utils\Utils::parseDateTime('2025-07-02T16:37:34.479Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeEnvvar(
    request: $request
);

if ($response->computeEnvvar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateComputeEnvvarRequest](../../Models/Operations/CreateComputeEnvvarRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateComputeEnvvarResponse](../../Models/Operations/CreateComputeEnvvarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
        id: '3557fd4a-f44b-43ee-9ba7-a9bb985cfe84',
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
        startedAt: Utils\Utils::parseDateTime('2025-03-23T05:37:14.180Z'),
        status: Shared\ComputeInstanceStatus::Error,
        statusReason: 'Sponte quasi adversus alioqui reiciendis arca carmen canis.',
        type: Shared\ComputeInstanceType::Baremetal,
        updatedAt: Utils\Utils::parseDateTime('2025-06-15T09:30:19.414Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeInstance(
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

## createComputeKey

Create a key

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeKey" method="post" path="/compute/{connection_id}/key" example="compute_key" -->
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

$request = new Operations\CreateComputeKeyRequest(
    computeKey: new Shared\ComputeKey(
        createdAt: Utils\Utils::parseDateTime('2023-08-19T14:31:46.492Z'),
        id: '7fad7036-d614-4740-a04f-92b024c2f916',
        metadata: [],
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-06T12:57:53.215Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeKey(
    request: $request
);

if ($response->computeKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateComputeKeyRequest](../../Models/Operations/CreateComputeKeyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateComputeKeyResponse](../../Models/Operations/CreateComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createComputeService

Create a service

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
        id: 'adcc79b7-f9b8-4644-a69f-f25ebebeb598',
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
        updatedAt: Utils\Utils::parseDateTime('2025-04-04T02:12:07.860Z'),
        url: 'https://tame-sideboard.rotating-shoulder.biz',
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeService(
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

## createComputeSnapshot

Create a snapshot

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeSnapshot" method="post" path="/compute/{connection_id}/snapshot" example="compute_snapshot" -->
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

$request = new Operations\CreateComputeSnapshotRequest(
    computeSnapshot: new Shared\ComputeSnapshot(
        createdAt: Utils\Utils::parseDateTime('2021-09-24T14:40:06.110Z'),
        id: 'ee9f85a8-e40b-4cef-b1aa-db942c82de6c',
        metadata: [],
        name: 'snap-alius',
        sizeMb: 169984,
        status: Shared\ComputeSnapshotStatus::Deleting,
        type: Shared\ComputeSnapshotType::Disk,
        updatedAt: Utils\Utils::parseDateTime('2026-03-29T19:35:04.809Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeSnapshot(
    request: $request
);

if ($response->computeSnapshot !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateComputeSnapshotRequest](../../Models/Operations/CreateComputeSnapshotRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateComputeSnapshotResponse](../../Models/Operations/CreateComputeSnapshotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createComputeTemplate

Create a template

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeTemplate" method="post" path="/compute/{connection_id}/template" example="compute_template" -->
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

$request = new Operations\CreateComputeTemplateRequest(
    computeTemplate: new Shared\ComputeTemplate(
        cpuCount: 4,
        createdAt: Utils\Utils::parseDateTime('2023-02-23T03:28:59.864Z'),
        diskMb: 10240,
        dockerfile: 'FROM ubuntu:24.04\nRUN apt-get update',
        gpuCount: 2,
        gpuModel: Shared\ComputeTemplateGpuModel::NvidiaGh200,
        id: '80b42d01-d399-4ca1-80c9-bea46c591e54',
        image: 'perfumed-molasses/cohibeo:5.2',
        isPublic: false,
        lastUsedAt: Utils\Utils::parseDateTime('2026-03-22T20:01:16.136Z'),
        memoryMb: 8192,
        metadata: [],
        name: 'multi-byte-card',
        ports: [
            8080,
        ],
        status: Shared\ComputeTemplateStatus::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-02-12T02:59:32.975Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeTemplate(
    request: $request
);

if ($response->computeTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateComputeTemplateRequest](../../Models/Operations/CreateComputeTemplateRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateComputeTemplateResponse](../../Models/Operations/CreateComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createComputeVolume

Create a volume

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeVolume" method="post" path="/compute/{connection_id}/volume" example="compute_volume" -->
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

$request = new Operations\CreateComputeVolumeRequest(
    computeVolume: new Shared\ComputeVolume(
        createdAt: Utils\Utils::parseDateTime('2022-11-15T15:12:48.055Z'),
        id: 'ab806b53-b985-45d2-8636-4836c71d7639',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-09T12:43:46.742Z'),
        usedMb: 524986,
    ),
    connectionId: '<id>',
);

$response = $sdk->compute->createComputeVolume(
    request: $request
);

if ($response->computeVolume !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateComputeVolumeRequest](../../Models/Operations/CreateComputeVolumeRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateComputeVolumeResponse](../../Models/Operations/CreateComputeVolumeResponse.md)**

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

$response = $sdk->compute->getComputeDeployment(
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

## getComputeDomain

Retrieve a domain

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeDomain" method="get" path="/compute/{connection_id}/domain/{id}" -->
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

$request = new Operations\GetComputeDomainRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->getComputeDomain(
    request: $request
);

if ($response->computeDomain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetComputeDomainRequest](../../Models/Operations/GetComputeDomainRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetComputeDomainResponse](../../Models/Operations/GetComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeEnvvar

Retrieve an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeEnvvar" method="get" path="/compute/{connection_id}/envvar/{id}" -->
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

$request = new Operations\GetComputeEnvvarRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->getComputeEnvvar(
    request: $request
);

if ($response->computeEnvvar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetComputeEnvvarRequest](../../Models/Operations/GetComputeEnvvarRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetComputeEnvvarResponse](../../Models/Operations/GetComputeEnvvarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeGputype

Retrieve a gputype

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeGputype" method="get" path="/compute/{connection_id}/gputype/{id}" -->
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

$request = new Operations\GetComputeGputypeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->getComputeGputype(
    request: $request
);

if ($response->computeGputype !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetComputeGputypeRequest](../../Models/Operations/GetComputeGputypeRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetComputeGputypeResponse](../../Models/Operations/GetComputeGputypeResponse.md)**

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

$response = $sdk->compute->getComputeInstance(
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

## getComputeKey

Retrieve a key

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeKey" method="get" path="/compute/{connection_id}/key/{id}" -->
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

$request = new Operations\GetComputeKeyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->getComputeKey(
    request: $request
);

if ($response->computeKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetComputeKeyRequest](../../Models/Operations/GetComputeKeyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetComputeKeyResponse](../../Models/Operations/GetComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeRegion

Retrieve a region

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeRegion" method="get" path="/compute/{connection_id}/region/{id}" -->
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

$request = new Operations\GetComputeRegionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->getComputeRegion(
    request: $request
);

if ($response->computeRegion !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetComputeRegionRequest](../../Models/Operations/GetComputeRegionRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetComputeRegionResponse](../../Models/Operations/GetComputeRegionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeService

Retrieve a service

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

$response = $sdk->compute->getComputeService(
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

## getComputeSnapshot

Retrieve a snapshot

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeSnapshot" method="get" path="/compute/{connection_id}/snapshot/{id}" -->
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

$request = new Operations\GetComputeSnapshotRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->getComputeSnapshot(
    request: $request
);

if ($response->computeSnapshot !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetComputeSnapshotRequest](../../Models/Operations/GetComputeSnapshotRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetComputeSnapshotResponse](../../Models/Operations/GetComputeSnapshotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeTemplate

Retrieve a template

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeTemplate" method="get" path="/compute/{connection_id}/template/{id}" -->
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

$request = new Operations\GetComputeTemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->getComputeTemplate(
    request: $request
);

if ($response->computeTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetComputeTemplateRequest](../../Models/Operations/GetComputeTemplateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetComputeTemplateResponse](../../Models/Operations/GetComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeVolume

Retrieve a volume

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeVolume" method="get" path="/compute/{connection_id}/volume/{id}" -->
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

$request = new Operations\GetComputeVolumeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->getComputeVolume(
    request: $request
);

if ($response->computeVolume !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetComputeVolumeRequest](../../Models/Operations/GetComputeVolumeRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetComputeVolumeResponse](../../Models/Operations/GetComputeVolumeResponse.md)**

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

$response = $sdk->compute->listComputeDeployments(
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

## listComputeDomains

List all domains

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeDomains" method="get" path="/compute/{connection_id}/domain" -->
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

$request = new Operations\ListComputeDomainsRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeDomains(
    request: $request
);

if ($response->computeDomains !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListComputeDomainsRequest](../../Models/Operations/ListComputeDomainsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListComputeDomainsResponse](../../Models/Operations/ListComputeDomainsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeEnvvars

List all envvars

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeEnvvars" method="get" path="/compute/{connection_id}/envvar" -->
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

$request = new Operations\ListComputeEnvvarsRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeEnvvars(
    request: $request
);

if ($response->computeEnvvars !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListComputeEnvvarsRequest](../../Models/Operations/ListComputeEnvvarsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListComputeEnvvarsResponse](../../Models/Operations/ListComputeEnvvarsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeGputypes

List all gputypes

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeGputypes" method="get" path="/compute/{connection_id}/gputype" -->
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

$request = new Operations\ListComputeGputypesRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeGputypes(
    request: $request
);

if ($response->computeGputypes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListComputeGputypesRequest](../../Models/Operations/ListComputeGputypesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListComputeGputypesResponse](../../Models/Operations/ListComputeGputypesResponse.md)**

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

$response = $sdk->compute->listComputeInstances(
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

## listComputeKeys

List all keys

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeKeys" method="get" path="/compute/{connection_id}/key" -->
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

$request = new Operations\ListComputeKeysRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeKeys(
    request: $request
);

if ($response->computeKeys !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListComputeKeysRequest](../../Models/Operations/ListComputeKeysRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListComputeKeysResponse](../../Models/Operations/ListComputeKeysResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeRegions

List all regions

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeRegions" method="get" path="/compute/{connection_id}/region" -->
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

$request = new Operations\ListComputeRegionsRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeRegions(
    request: $request
);

if ($response->computeRegions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListComputeRegionsRequest](../../Models/Operations/ListComputeRegionsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListComputeRegionsResponse](../../Models/Operations/ListComputeRegionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeServices

List all services

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

$response = $sdk->compute->listComputeServices(
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

## listComputeSnapshots

List all snapshots

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeSnapshots" method="get" path="/compute/{connection_id}/snapshot" -->
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

$request = new Operations\ListComputeSnapshotsRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeSnapshots(
    request: $request
);

if ($response->computeSnapshots !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListComputeSnapshotsRequest](../../Models/Operations/ListComputeSnapshotsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListComputeSnapshotsResponse](../../Models/Operations/ListComputeSnapshotsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeTemplates

List all templates

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeTemplates" method="get" path="/compute/{connection_id}/template" -->
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

$request = new Operations\ListComputeTemplatesRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeTemplates(
    request: $request
);

if ($response->computeTemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListComputeTemplatesRequest](../../Models/Operations/ListComputeTemplatesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListComputeTemplatesResponse](../../Models/Operations/ListComputeTemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeUsages

List all usages

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeUsages" method="get" path="/compute/{connection_id}/usage" -->
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

$request = new Operations\ListComputeUsagesRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeUsages(
    request: $request
);

if ($response->computeUsages !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListComputeUsagesRequest](../../Models/Operations/ListComputeUsagesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListComputeUsagesResponse](../../Models/Operations/ListComputeUsagesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeVolumes

List all volumes

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeVolumes" method="get" path="/compute/{connection_id}/volume" -->
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

$request = new Operations\ListComputeVolumesRequest(
    connectionId: '<id>',
);

$response = $sdk->compute->listComputeVolumes(
    request: $request
);

if ($response->computeVolumes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListComputeVolumesRequest](../../Models/Operations/ListComputeVolumesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListComputeVolumesResponse](../../Models/Operations/ListComputeVolumesResponse.md)**

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
        finishedAt: Utils\Utils::parseDateTime('2025-08-28T17:39:45.146Z'),
        id: '80fcd5b5-abef-4428-9f42-896ef4d35179',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-09T12:38:11.697Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T17:17:26.127Z'),
        url: 'https://comfortable-petal.name',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->patchComputeDeployment(
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

## patchComputeDomain

Update a domain

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeDomain" method="patch" path="/compute/{connection_id}/domain/{id}" example="compute_domain" -->
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

$request = new Operations\PatchComputeDomainRequest(
    computeDomain: new Shared\ComputeDomain(
        createdAt: Utils\Utils::parseDateTime('2019-11-22T16:38:26.009Z'),
        id: '51b7b05e-2b44-4de8-b15b-f9d536eb646f',
        isPrimary: false,
        metadata: [],
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-11-02T22:37:13.427Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->patchComputeDomain(
    request: $request
);

if ($response->computeDomain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchComputeDomainRequest](../../Models/Operations/PatchComputeDomainRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchComputeDomainResponse](../../Models/Operations/PatchComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeEnvvar

Update an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeEnvvar" method="patch" path="/compute/{connection_id}/envvar/{id}" example="compute_envvar" -->
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

$request = new Operations\PatchComputeEnvvarRequest(
    computeEnvvar: new Shared\ComputeEnvvar(
        createdAt: Utils\Utils::parseDateTime('2021-08-16T07:52:27.306Z'),
        environments: [
            Shared\PropertyComputeEnvvarEnvironments::Preview,
        ],
        id: '227f7e08-afd4-4788-9b0b-75dc8c88e8d3',
        isSecret: true,
        metadata: [],
        name: 'AEGER_SUBSTANTIA',
        updatedAt: Utils\Utils::parseDateTime('2025-07-02T16:37:34.492Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->patchComputeEnvvar(
    request: $request
);

if ($response->computeEnvvar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchComputeEnvvarRequest](../../Models/Operations/PatchComputeEnvvarRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchComputeEnvvarResponse](../../Models/Operations/PatchComputeEnvvarResponse.md)**

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
        id: 'f1aa13f9-af37-460b-9133-34144fe27dbf',
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
        startedAt: Utils\Utils::parseDateTime('2025-03-23T05:37:14.198Z'),
        status: Shared\ComputeInstanceStatus::Error,
        statusReason: 'Sponte quasi adversus alioqui reiciendis arca carmen canis.',
        type: Shared\ComputeInstanceType::Baremetal,
        updatedAt: Utils\Utils::parseDateTime('2025-06-15T09:30:19.434Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->patchComputeInstance(
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

## patchComputeKey

Update a key

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeKey" method="patch" path="/compute/{connection_id}/key/{id}" example="compute_key" -->
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

$request = new Operations\PatchComputeKeyRequest(
    computeKey: new Shared\ComputeKey(
        createdAt: Utils\Utils::parseDateTime('2023-08-19T14:31:46.492Z'),
        id: 'fc38e3d1-6b9a-4aa7-a20e-c556533e2c31',
        metadata: [],
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-06T12:57:53.223Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->patchComputeKey(
    request: $request
);

if ($response->computeKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchComputeKeyRequest](../../Models/Operations/PatchComputeKeyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchComputeKeyResponse](../../Models/Operations/PatchComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeService

Update a service

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
        id: 'ff0ccbef-6e94-4f77-967d-1987078fc64d',
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
        updatedAt: Utils\Utils::parseDateTime('2025-04-04T02:12:07.873Z'),
        url: 'https://tame-sideboard.rotating-shoulder.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->patchComputeService(
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

## patchComputeTemplate

Update a template

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeTemplate" method="patch" path="/compute/{connection_id}/template/{id}" example="compute_template" -->
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

$request = new Operations\PatchComputeTemplateRequest(
    computeTemplate: new Shared\ComputeTemplate(
        cpuCount: 4,
        createdAt: Utils\Utils::parseDateTime('2023-02-23T03:28:59.864Z'),
        diskMb: 10240,
        dockerfile: 'FROM ubuntu:24.04\nRUN apt-get update',
        gpuCount: 2,
        gpuModel: Shared\ComputeTemplateGpuModel::NvidiaGh200,
        id: 'dc3e2a75-209b-40ae-949c-8e04b108598e',
        image: 'perfumed-molasses/cohibeo:5.2',
        isPublic: false,
        lastUsedAt: Utils\Utils::parseDateTime('2026-03-22T20:01:16.151Z'),
        memoryMb: 8192,
        metadata: [],
        name: 'multi-byte-card',
        ports: [
            8080,
        ],
        status: Shared\ComputeTemplateStatus::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-02-12T02:59:32.985Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->patchComputeTemplate(
    request: $request
);

if ($response->computeTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchComputeTemplateRequest](../../Models/Operations/PatchComputeTemplateRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchComputeTemplateResponse](../../Models/Operations/PatchComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeVolume

Update a volume

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeVolume" method="patch" path="/compute/{connection_id}/volume/{id}" example="compute_volume" -->
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

$request = new Operations\PatchComputeVolumeRequest(
    computeVolume: new Shared\ComputeVolume(
        createdAt: Utils\Utils::parseDateTime('2022-11-15T15:12:48.055Z'),
        id: '36960c49-d71a-4f30-8263-ddda29c332c3',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-09T12:43:46.748Z'),
        usedMb: 524986,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->patchComputeVolume(
    request: $request
);

if ($response->computeVolume !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchComputeVolumeRequest](../../Models/Operations/PatchComputeVolumeRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchComputeVolumeResponse](../../Models/Operations/PatchComputeVolumeResponse.md)**

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

$response = $sdk->compute->removeComputeDeployment(
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

## removeComputeDomain

Remove a domain

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeDomain" method="delete" path="/compute/{connection_id}/domain/{id}" -->
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

$request = new Operations\RemoveComputeDomainRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->removeComputeDomain(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveComputeDomainRequest](../../Models/Operations/RemoveComputeDomainRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveComputeDomainResponse](../../Models/Operations/RemoveComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeEnvvar

Remove an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeEnvvar" method="delete" path="/compute/{connection_id}/envvar/{id}" -->
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

$request = new Operations\RemoveComputeEnvvarRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->removeComputeEnvvar(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveComputeEnvvarRequest](../../Models/Operations/RemoveComputeEnvvarRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveComputeEnvvarResponse](../../Models/Operations/RemoveComputeEnvvarResponse.md)**

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

$response = $sdk->compute->removeComputeInstance(
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

## removeComputeKey

Remove a key

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeKey" method="delete" path="/compute/{connection_id}/key/{id}" -->
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

$request = new Operations\RemoveComputeKeyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->removeComputeKey(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveComputeKeyRequest](../../Models/Operations/RemoveComputeKeyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveComputeKeyResponse](../../Models/Operations/RemoveComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeService

Remove a service

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

$response = $sdk->compute->removeComputeService(
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

## removeComputeSnapshot

Remove a snapshot

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeSnapshot" method="delete" path="/compute/{connection_id}/snapshot/{id}" -->
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

$request = new Operations\RemoveComputeSnapshotRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->removeComputeSnapshot(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveComputeSnapshotRequest](../../Models/Operations/RemoveComputeSnapshotRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveComputeSnapshotResponse](../../Models/Operations/RemoveComputeSnapshotResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeTemplate

Remove a template

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeTemplate" method="delete" path="/compute/{connection_id}/template/{id}" -->
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

$request = new Operations\RemoveComputeTemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->removeComputeTemplate(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveComputeTemplateRequest](../../Models/Operations/RemoveComputeTemplateRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveComputeTemplateResponse](../../Models/Operations/RemoveComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeVolume

Remove a volume

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeVolume" method="delete" path="/compute/{connection_id}/volume/{id}" -->
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

$request = new Operations\RemoveComputeVolumeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->removeComputeVolume(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveComputeVolumeRequest](../../Models/Operations/RemoveComputeVolumeRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveComputeVolumeResponse](../../Models/Operations/RemoveComputeVolumeResponse.md)**

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
        finishedAt: Utils\Utils::parseDateTime('2025-08-28T17:39:45.146Z'),
        id: '80fcd5b5-abef-4428-9f42-896ef4d35179',
        metadata: [],
        startedAt: Utils\Utils::parseDateTime('2025-04-09T12:38:11.697Z'),
        status: Shared\ComputeDeploymentStatus::Live,
        trigger: Shared\Trigger::Api,
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T17:17:26.127Z'),
        url: 'https://comfortable-petal.name',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->updateComputeDeployment(
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

## updateComputeDomain

Update a domain

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeDomain" method="put" path="/compute/{connection_id}/domain/{id}" example="compute_domain" -->
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

$request = new Operations\UpdateComputeDomainRequest(
    computeDomain: new Shared\ComputeDomain(
        createdAt: Utils\Utils::parseDateTime('2019-11-22T16:38:26.009Z'),
        id: '51b7b05e-2b44-4de8-b15b-f9d536eb646f',
        isPrimary: false,
        metadata: [],
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-11-02T22:37:13.427Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->updateComputeDomain(
    request: $request
);

if ($response->computeDomain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateComputeDomainRequest](../../Models/Operations/UpdateComputeDomainRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateComputeDomainResponse](../../Models/Operations/UpdateComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeEnvvar

Update an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeEnvvar" method="put" path="/compute/{connection_id}/envvar/{id}" example="compute_envvar" -->
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

$request = new Operations\UpdateComputeEnvvarRequest(
    computeEnvvar: new Shared\ComputeEnvvar(
        createdAt: Utils\Utils::parseDateTime('2021-08-16T07:52:27.306Z'),
        environments: [
            Shared\PropertyComputeEnvvarEnvironments::Preview,
        ],
        id: '227f7e08-afd4-4788-9b0b-75dc8c88e8d3',
        isSecret: true,
        metadata: [],
        name: 'AEGER_SUBSTANTIA',
        updatedAt: Utils\Utils::parseDateTime('2025-07-02T16:37:34.492Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->updateComputeEnvvar(
    request: $request
);

if ($response->computeEnvvar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateComputeEnvvarRequest](../../Models/Operations/UpdateComputeEnvvarRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateComputeEnvvarResponse](../../Models/Operations/UpdateComputeEnvvarResponse.md)**

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
        id: 'f1aa13f9-af37-460b-9133-34144fe27dbf',
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
        startedAt: Utils\Utils::parseDateTime('2025-03-23T05:37:14.198Z'),
        status: Shared\ComputeInstanceStatus::Error,
        statusReason: 'Sponte quasi adversus alioqui reiciendis arca carmen canis.',
        type: Shared\ComputeInstanceType::Baremetal,
        updatedAt: Utils\Utils::parseDateTime('2025-06-15T09:30:19.434Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->updateComputeInstance(
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

## updateComputeKey

Update a key

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeKey" method="put" path="/compute/{connection_id}/key/{id}" example="compute_key" -->
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

$request = new Operations\UpdateComputeKeyRequest(
    computeKey: new Shared\ComputeKey(
        createdAt: Utils\Utils::parseDateTime('2023-08-19T14:31:46.492Z'),
        id: 'fc38e3d1-6b9a-4aa7-a20e-c556533e2c31',
        metadata: [],
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-06T12:57:53.223Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->updateComputeKey(
    request: $request
);

if ($response->computeKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateComputeKeyRequest](../../Models/Operations/UpdateComputeKeyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateComputeKeyResponse](../../Models/Operations/UpdateComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeService

Update a service

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
        id: 'ff0ccbef-6e94-4f77-967d-1987078fc64d',
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
        updatedAt: Utils\Utils::parseDateTime('2025-04-04T02:12:07.873Z'),
        url: 'https://tame-sideboard.rotating-shoulder.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->updateComputeService(
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

## updateComputeTemplate

Update a template

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeTemplate" method="put" path="/compute/{connection_id}/template/{id}" example="compute_template" -->
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

$request = new Operations\UpdateComputeTemplateRequest(
    computeTemplate: new Shared\ComputeTemplate(
        cpuCount: 4,
        createdAt: Utils\Utils::parseDateTime('2023-02-23T03:28:59.864Z'),
        diskMb: 10240,
        dockerfile: 'FROM ubuntu:24.04\nRUN apt-get update',
        gpuCount: 2,
        gpuModel: Shared\ComputeTemplateGpuModel::NvidiaGh200,
        id: 'dc3e2a75-209b-40ae-949c-8e04b108598e',
        image: 'perfumed-molasses/cohibeo:5.2',
        isPublic: false,
        lastUsedAt: Utils\Utils::parseDateTime('2026-03-22T20:01:16.151Z'),
        memoryMb: 8192,
        metadata: [],
        name: 'multi-byte-card',
        ports: [
            8080,
        ],
        status: Shared\ComputeTemplateStatus::Other,
        updatedAt: Utils\Utils::parseDateTime('2025-02-12T02:59:32.985Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->updateComputeTemplate(
    request: $request
);

if ($response->computeTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateComputeTemplateRequest](../../Models/Operations/UpdateComputeTemplateRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateComputeTemplateResponse](../../Models/Operations/UpdateComputeTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeVolume

Update a volume

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeVolume" method="put" path="/compute/{connection_id}/volume/{id}" example="compute_volume" -->
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

$request = new Operations\UpdateComputeVolumeRequest(
    computeVolume: new Shared\ComputeVolume(
        createdAt: Utils\Utils::parseDateTime('2022-11-15T15:12:48.055Z'),
        id: '36960c49-d71a-4f30-8263-ddda29c332c3',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-09T12:43:46.748Z'),
        usedMb: 524986,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->compute->updateComputeVolume(
    request: $request
);

if ($response->computeVolume !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateComputeVolumeRequest](../../Models/Operations/UpdateComputeVolumeRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateComputeVolumeResponse](../../Models/Operations/UpdateComputeVolumeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |