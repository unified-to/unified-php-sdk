# Branch

## Overview

### Available Operations

* [createRepoBranch](#createrepobranch) - Create a branch
* [getRepoBranch](#getrepobranch) - Retrieve a branch
* [listRepoBranches](#listrepobranches) - List all branches
* [patchRepoBranch](#patchrepobranch) - Update a branch
* [removeRepoBranch](#removerepobranch) - Remove a branch
* [updateRepoBranch](#updaterepobranch) - Update a branch

## createRepoBranch

Creates a RepoBranch. Provide the unified RepoBranch fields in the request body; they are mapped to the provider's API. Returns the created RepoBranch.

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoBranch" method="post" path="/repo/{connection_id}/branch" example="repo_branch" -->
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

$request = new Operations\CreateRepoBranchRequest(
    repoBranch: new Shared\RepoBranch(
        createdAt: Utils\Utils::parseDateTime('2019-02-24T09:33:48.540Z'),
        id: '6cb4a34b-3cfe-4459-aee4-202cb80abc53',
        metadata: [],
        name: 'transmitter-calculate',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2020-01-07T15:48:17.728Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->branch->createRepoBranch(
    request: $request
);

if ($response->repoBranch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateRepoBranchRequest](../../Models/Operations/CreateRepoBranchRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateRepoBranchResponse](../../Models/Operations/CreateRepoBranchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoBranch

Retrieves a single RepoBranch by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoBranch" method="get" path="/repo/{connection_id}/branch/{id}" -->
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

$request = new Operations\GetRepoBranchRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->branch->getRepoBranch(
    request: $request
);

if ($response->repoBranch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetRepoBranchRequest](../../Models/Operations/GetRepoBranchRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetRepoBranchResponse](../../Models/Operations/GetRepoBranchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoBranches

Returns a list of RepoBranches. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoBranches" method="get" path="/repo/{connection_id}/branch" -->
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

$request = new Operations\ListRepoBranchesRequest(
    connectionId: '<id>',
);

$response = $sdk->branch->listRepoBranches(
    request: $request
);

if ($response->repoBranches !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListRepoBranchesRequest](../../Models/Operations/ListRepoBranchesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListRepoBranchesResponse](../../Models/Operations/ListRepoBranchesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoBranch

Updates the RepoBranch identified by `id`. Provide the unified RepoBranch fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoBranch" method="patch" path="/repo/{connection_id}/branch/{id}" example="repo_branch" -->
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

$request = new Operations\PatchRepoBranchRequest(
    repoBranch: new Shared\RepoBranch(
        createdAt: Utils\Utils::parseDateTime('2019-02-24T09:33:48.540Z'),
        id: 'd1c80f96-48cc-43b4-9fa4-b8c045220dfb',
        metadata: [],
        name: 'transmitter-calculate',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2020-01-07T15:48:17.729Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->branch->patchRepoBranch(
    request: $request
);

if ($response->repoBranch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchRepoBranchRequest](../../Models/Operations/PatchRepoBranchRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchRepoBranchResponse](../../Models/Operations/PatchRepoBranchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoBranch

Deletes the RepoBranch identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoBranch" method="delete" path="/repo/{connection_id}/branch/{id}" -->
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

$request = new Operations\RemoveRepoBranchRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->branch->removeRepoBranch(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveRepoBranchRequest](../../Models/Operations/RemoveRepoBranchRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveRepoBranchResponse](../../Models/Operations/RemoveRepoBranchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoBranch

Updates the RepoBranch identified by `id`. Provide the unified RepoBranch fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoBranch" method="put" path="/repo/{connection_id}/branch/{id}" example="repo_branch" -->
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

$request = new Operations\UpdateRepoBranchRequest(
    repoBranch: new Shared\RepoBranch(
        createdAt: Utils\Utils::parseDateTime('2019-02-24T09:33:48.540Z'),
        id: 'd1c80f96-48cc-43b4-9fa4-b8c045220dfb',
        metadata: [],
        name: 'transmitter-calculate',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2020-01-07T15:48:17.729Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->branch->updateRepoBranch(
    request: $request
);

if ($response->repoBranch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateRepoBranchRequest](../../Models/Operations/UpdateRepoBranchRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateRepoBranchResponse](../../Models/Operations/UpdateRepoBranchResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |