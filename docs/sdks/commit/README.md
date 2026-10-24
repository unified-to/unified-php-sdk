# Commit

## Overview

### Available Operations

* [createRepoCommit](#createrepocommit) - Create a commit
* [getRepoCommit](#getrepocommit) - Retrieve a commit
* [listRepoCommits](#listrepocommits) - List all commits
* [patchRepoCommit](#patchrepocommit) - Update a commit
* [removeRepoCommit](#removerepocommit) - Remove a commit
* [updateRepoCommit](#updaterepocommit) - Update a commit

## createRepoCommit

Creates a RepoCommit. Provide the unified RepoCommit fields in the request body; they are mapped to the provider's API. Returns the created RepoCommit.

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoCommit" method="post" path="/repo/{connection_id}/commit" example="repo_commit" -->
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

$request = new Operations\CreateRepoCommitRequest(
    repoCommit: new Shared\RepoCommit(
        createdAt: Utils\Utils::parseDateTime('2020-07-12T16:20:42.520Z'),
        id: '05a5889a-4af4-4dae-8807-90f4128da93a',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'quantify bluetooth bandwidth',
        metadata: [],
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-06-01T14:17:10.223Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->commit->createRepoCommit(
    request: $request
);

if ($response->repoCommit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateRepoCommitRequest](../../Models/Operations/CreateRepoCommitRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateRepoCommitResponse](../../Models/Operations/CreateRepoCommitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoCommit

Retrieves a single RepoCommit by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoCommit" method="get" path="/repo/{connection_id}/commit/{id}" -->
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

$request = new Operations\GetRepoCommitRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commit->getRepoCommit(
    request: $request
);

if ($response->repoCommit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetRepoCommitRequest](../../Models/Operations/GetRepoCommitRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetRepoCommitResponse](../../Models/Operations/GetRepoCommitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoCommits

Returns a list of RepoCommits. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoCommits" method="get" path="/repo/{connection_id}/commit" -->
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

$request = new Operations\ListRepoCommitsRequest(
    connectionId: '<id>',
);

$response = $sdk->commit->listRepoCommits(
    request: $request
);

if ($response->repoCommits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListRepoCommitsRequest](../../Models/Operations/ListRepoCommitsRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListRepoCommitsResponse](../../Models/Operations/ListRepoCommitsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoCommit

Updates the RepoCommit identified by `id`. Provide the unified RepoCommit fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoCommit" method="patch" path="/repo/{connection_id}/commit/{id}" example="repo_commit" -->
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

$request = new Operations\PatchRepoCommitRequest(
    repoCommit: new Shared\RepoCommit(
        createdAt: Utils\Utils::parseDateTime('2020-07-12T16:20:42.520Z'),
        id: 'f5e44879-91cc-4437-907f-b9d9eeb2abbd',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'quantify bluetooth bandwidth',
        metadata: [],
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-06-01T14:17:10.230Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commit->patchRepoCommit(
    request: $request
);

if ($response->repoCommit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchRepoCommitRequest](../../Models/Operations/PatchRepoCommitRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchRepoCommitResponse](../../Models/Operations/PatchRepoCommitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoCommit

Deletes the RepoCommit identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoCommit" method="delete" path="/repo/{connection_id}/commit/{id}" -->
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

$request = new Operations\RemoveRepoCommitRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commit->removeRepoCommit(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveRepoCommitRequest](../../Models/Operations/RemoveRepoCommitRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveRepoCommitResponse](../../Models/Operations/RemoveRepoCommitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoCommit

Updates the RepoCommit identified by `id`. Provide the unified RepoCommit fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoCommit" method="put" path="/repo/{connection_id}/commit/{id}" example="repo_commit" -->
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

$request = new Operations\UpdateRepoCommitRequest(
    repoCommit: new Shared\RepoCommit(
        createdAt: Utils\Utils::parseDateTime('2020-07-12T16:20:42.520Z'),
        id: 'f5e44879-91cc-4437-907f-b9d9eeb2abbd',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'quantify bluetooth bandwidth',
        metadata: [],
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-06-01T14:17:10.230Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->commit->updateRepoCommit(
    request: $request
);

if ($response->repoCommit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateRepoCommitRequest](../../Models/Operations/UpdateRepoCommitRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateRepoCommitResponse](../../Models/Operations/UpdateRepoCommitResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |