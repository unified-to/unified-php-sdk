# Branch

## Overview

### Available Operations

* [createRepoBranch2](#createrepobranch2) - Create a branch
* [getRepoBranch2](#getrepobranch2) - Retrieve a branch
* [listRepoBranches2](#listrepobranches2) - List all branches
* [patchRepoBranch2](#patchrepobranch2) - Update a branch
* [removeRepoBranch2](#removerepobranch2) - Remove a branch
* [updateRepoBranch2](#updaterepobranch2) - Update a branch

## createRepoBranch2

Create a branch

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoBranch2" method="post" path="/repo/{connection_id}/branch" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateRepoBranch2Request(
    repoBranch: new Shared\RepoBranch(
        name: '<value>',
        repoId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->branch->createRepoBranch2(
    request: $request
);

if ($response->repoBranch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateRepoBranch2Request](../../Models/Operations/CreateRepoBranch2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateRepoBranch2Response](../../Models/Operations/CreateRepoBranch2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoBranch2

Retrieve a branch

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoBranch2" method="get" path="/repo/{connection_id}/branch/{id}" -->
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

$request = new Operations\GetRepoBranch2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->branch->getRepoBranch2(
    request: $request
);

if ($response->repoBranch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetRepoBranch2Request](../../Models/Operations/GetRepoBranch2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetRepoBranch2Response](../../Models/Operations/GetRepoBranch2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoBranches2

List all branches

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoBranches2" method="get" path="/repo/{connection_id}/branch" -->
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

$request = new Operations\ListRepoBranches2Request(
    connectionId: '<id>',
);

$response = $sdk->branch->listRepoBranches2(
    request: $request
);

if ($response->repoBranches !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListRepoBranches2Request](../../Models/Operations/ListRepoBranches2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListRepoBranches2Response](../../Models/Operations/ListRepoBranches2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoBranch2

Update a branch

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoBranch2" method="patch" path="/repo/{connection_id}/branch/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchRepoBranch2Request(
    repoBranch: new Shared\RepoBranch(
        name: '<value>',
        repoId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->branch->patchRepoBranch2(
    request: $request
);

if ($response->repoBranch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchRepoBranch2Request](../../Models/Operations/PatchRepoBranch2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchRepoBranch2Response](../../Models/Operations/PatchRepoBranch2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoBranch2

Remove a branch

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoBranch2" method="delete" path="/repo/{connection_id}/branch/{id}" -->
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

$request = new Operations\RemoveRepoBranch2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->branch->removeRepoBranch2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveRepoBranch2Request](../../Models/Operations/RemoveRepoBranch2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveRepoBranch2Response](../../Models/Operations/RemoveRepoBranch2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoBranch2

Update a branch

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoBranch2" method="put" path="/repo/{connection_id}/branch/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateRepoBranch2Request(
    repoBranch: new Shared\RepoBranch(
        name: '<value>',
        repoId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->branch->updateRepoBranch2(
    request: $request
);

if ($response->repoBranch !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateRepoBranch2Request](../../Models/Operations/UpdateRepoBranch2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateRepoBranch2Response](../../Models/Operations/UpdateRepoBranch2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |