# Snapshot

## Overview

### Available Operations

* [createComputeSnapshot](#createcomputesnapshot) - Create a snapshot
* [getComputeSnapshot](#getcomputesnapshot) - Retrieve a snapshot
* [listComputeSnapshots](#listcomputesnapshots) - List all snapshots
* [removeComputeSnapshot](#removecomputesnapshot) - Remove a snapshot

## createComputeSnapshot

Creates a ComputeSnapshot. Provide the unified ComputeSnapshot fields in the request body; they are mapped to the provider's API. Returns the created ComputeSnapshot.

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
        id: '2a3d5fc7-1f10-4787-8e09-de32aa821c8c',
        metadata: [],
        name: 'snap-alius',
        sizeMb: 169984,
        status: Shared\ComputeSnapshotStatus::Deleting,
        type: Shared\ComputeSnapshotType::Disk,
        updatedAt: Utils\Utils::parseDateTime('2026-04-02T10:16:58.143Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->snapshot->createComputeSnapshot(
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

## getComputeSnapshot

Retrieves a single ComputeSnapshot by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

$response = $sdk->snapshot->getComputeSnapshot(
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

## listComputeSnapshots

Returns a list of ComputeSnapshots. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

$response = $sdk->snapshot->listComputeSnapshots(
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

## removeComputeSnapshot

Deletes the ComputeSnapshot identified by `id`.

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

$response = $sdk->snapshot->removeComputeSnapshot(
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