# Commit

## Overview

### Available Operations

* [createRepoCommit2](#createrepocommit2) - Create a commit
* [getRepoCommit2](#getrepocommit2) - Retrieve a commit
* [listRepoCommits2](#listrepocommits2) - List all commits
* [patchRepoCommit2](#patchrepocommit2) - Update a commit
* [removeRepoCommit2](#removerepocommit2) - Remove a commit
* [updateRepoCommit2](#updaterepocommit2) - Update a commit

## createRepoCommit2

Create a commit

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoCommit2" method="post" path="/repo/{connection_id}/commit" -->
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

$request = new Operations\CreateRepoCommit2Request(
    repoCommit: new Shared\RepoCommit(
        repoId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->commit->createRepoCommit2(
    request: $request
);

if ($response->repoCommit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateRepoCommit2Request](../../Models/Operations/CreateRepoCommit2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateRepoCommit2Response](../../Models/Operations/CreateRepoCommit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoCommit2

Retrieve a commit

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoCommit2" method="get" path="/repo/{connection_id}/commit/{id}" -->
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

$request = new Operations\GetRepoCommit2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commit->getRepoCommit2(
    request: $request
);

if ($response->repoCommit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetRepoCommit2Request](../../Models/Operations/GetRepoCommit2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetRepoCommit2Response](../../Models/Operations/GetRepoCommit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoCommits2

List all commits

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoCommits2" method="get" path="/repo/{connection_id}/commit" -->
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

$request = new Operations\ListRepoCommits2Request(
    connectionId: '<id>',
);

$response = $sdk->commit->listRepoCommits2(
    request: $request
);

if ($response->repoCommits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListRepoCommits2Request](../../Models/Operations/ListRepoCommits2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListRepoCommits2Response](../../Models/Operations/ListRepoCommits2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoCommit2

Update a commit

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoCommit2" method="patch" path="/repo/{connection_id}/commit/{id}" -->
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

$request = new Operations\PatchRepoCommit2Request(
    repoCommit: new Shared\RepoCommit(
        repoId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commit->patchRepoCommit2(
    request: $request
);

if ($response->repoCommit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchRepoCommit2Request](../../Models/Operations/PatchRepoCommit2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchRepoCommit2Response](../../Models/Operations/PatchRepoCommit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoCommit2

Remove a commit

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoCommit2" method="delete" path="/repo/{connection_id}/commit/{id}" -->
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

$request = new Operations\RemoveRepoCommit2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commit->removeRepoCommit2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveRepoCommit2Request](../../Models/Operations/RemoveRepoCommit2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveRepoCommit2Response](../../Models/Operations/RemoveRepoCommit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoCommit2

Update a commit

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoCommit2" method="put" path="/repo/{connection_id}/commit/{id}" -->
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

$request = new Operations\UpdateRepoCommit2Request(
    repoCommit: new Shared\RepoCommit(
        repoId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commit->updateRepoCommit2(
    request: $request
);

if ($response->repoCommit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateRepoCommit2Request](../../Models/Operations/UpdateRepoCommit2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateRepoCommit2Response](../../Models/Operations/UpdateRepoCommit2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |