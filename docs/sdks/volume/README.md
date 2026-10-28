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

Creates a ComputeVolume. Provide the unified ComputeVolume fields in the request body; they are mapped to the provider's API. Returns the created ComputeVolume.

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
        id: 'f8c6f246-9cd9-48c7-b2e6-75cea4d8cb22',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-12T02:20:15.829Z'),
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

Retrieves a single ComputeVolume by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of ComputeVolumes. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the ComputeVolume identified by `id`. Provide the unified ComputeVolume fields to change in the request body.

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
        id: 'cab49843-6744-4db9-816a-b882d574e81b',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-12T02:20:15.833Z'),
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

Deletes the ComputeVolume identified by `id`.

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

Updates the ComputeVolume identified by `id`. Provide the unified ComputeVolume fields to change in the request body.

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
        id: 'cab49843-6744-4db9-816a-b882d574e81b',
        instanceIds: [],
        metadata: [],
        name: 'vol-solum',
        sizeMb: 1024000,
        status: Shared\ComputeVolumeStatus::Other,
        type: Shared\ComputeVolumeType::HighPerformance,
        updatedAt: Utils\Utils::parseDateTime('2024-02-12T02:20:15.833Z'),
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