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

Create a commit

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
        id: '2b258466-11d8-48b7-9819-81c316c7fd79',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'Auctus ascisco esse attollo clarus odio tum bis rerum.',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-05-16T02:59:00.115Z'),
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

Retrieve a commit

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

List all commits

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

Update a commit

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
        id: 'ffccec29-c641-498b-bc54-3e2c3721ac76',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'Auctus ascisco esse attollo clarus odio tum bis rerum.',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-05-16T02:59:00.118Z'),
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

Remove a commit

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

Update a commit

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
        id: 'ffccec29-c641-498b-bc54-3e2c3721ac76',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'Auctus ascisco esse attollo clarus odio tum bis rerum.',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-05-16T02:59:00.118Z'),
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