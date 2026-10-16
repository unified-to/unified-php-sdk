# Volume

## Overview

### Available Operations

* [createComputeVolume](#createcomputevolume) - Create a volume
* [getComputeVolume](#getcomputevolume) - Retrieve a volume
* [listComputeVolumes](#listcomputevolumes) - List all volumes
* [patchComputeVolume](#patchcomputevolume) - Update a volume
* [removeComputeVolume](#removecomputevolume) - Remove a volume
* [updateComputeVolume](#updatecomputevolume) - Update a volume

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
        id: 'a30721be-fb46-47ad-a6c0-3abc532f5a93',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-08T07:09:29.874Z'),
        usedMb: 524986,
    ),
    connectionId: '<id>',
);

$response = $sdk->volume->createComputeVolume(
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

$response = $sdk->volume->getComputeVolume(
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

$response = $sdk->volume->listComputeVolumes(
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
        id: '65514ec2-bd53-417d-84f2-65f45508e255',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-08T07:09:29.879Z'),
        usedMb: 524986,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->volume->patchComputeVolume(
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

$response = $sdk->volume->removeComputeVolume(
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
        id: '65514ec2-bd53-417d-84f2-65f45508e255',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-08T07:09:29.879Z'),
        usedMb: 524986,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->volume->updateComputeVolume(
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