# Repository

## Overview

### Available Operations

* [createRepoRepository](#createreporepository) - Create a repository
* [getRepoRepository](#getreporepository) - Retrieve a repository
* [listRepoRepositories](#listreporepositories) - List all repositories
* [patchRepoRepository](#patchreporepository) - Update a repository
* [removeRepoRepository](#removereporepository) - Remove a repository
* [updateRepoRepository](#updatereporepository) - Update a repository

## createRepoRepository

Creates a RepoRepository. Provide the unified RepoRepository fields in the request body; they are mapped to the provider's API. Returns the created RepoRepository.

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoRepository" method="post" path="/repo/{connection_id}/repository" example="repo_repository" -->
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

$request = new Operations\CreateRepoRepositoryRequest(
    repoRepository: new Shared\RepoRepository(
        createdAt: Utils\Utils::parseDateTime('2023-06-12T09:42:00.080Z'),
        description: 'Sed somnus crastinus armarium.',
        id: 'a9e776da-1097-481a-868a-3b9cd15007d0',
        isPrivate: false,
        metadata: [],
        name: 'bah-bogus',
        updatedAt: Utils\Utils::parseDateTime('2024-03-02T03:38:52.388Z'),
        webUrl: 'https://neat-birdbath.org',
    ),
    connectionId: '<id>',
);

$response = $sdk->repository->createRepoRepository(
    request: $request
);

if ($response->repoRepository !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateRepoRepositoryRequest](../../Models/Operations/CreateRepoRepositoryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateRepoRepositoryResponse](../../Models/Operations/CreateRepoRepositoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoRepository

Retrieves a single RepoRepository by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoRepository" method="get" path="/repo/{connection_id}/repository/{id}" -->
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

$request = new Operations\GetRepoRepositoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repository->getRepoRepository(
    request: $request
);

if ($response->repoRepository !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetRepoRepositoryRequest](../../Models/Operations/GetRepoRepositoryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetRepoRepositoryResponse](../../Models/Operations/GetRepoRepositoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoRepositories

Returns a list of RepoRepositories. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoRepositories" method="get" path="/repo/{connection_id}/repository" -->
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

$request = new Operations\ListRepoRepositoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->repository->listRepoRepositories(
    request: $request
);

if ($response->repoRepositories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListRepoRepositoriesRequest](../../Models/Operations/ListRepoRepositoriesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListRepoRepositoriesResponse](../../Models/Operations/ListRepoRepositoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoRepository

Updates the RepoRepository identified by `id`. Provide the unified RepoRepository fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoRepository" method="patch" path="/repo/{connection_id}/repository/{id}" example="repo_repository" -->
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

$request = new Operations\PatchRepoRepositoryRequest(
    repoRepository: new Shared\RepoRepository(
        createdAt: Utils\Utils::parseDateTime('2023-06-12T09:42:00.080Z'),
        description: 'Sed somnus crastinus armarium.',
        id: 'b051769a-ffa0-48aa-b538-c3f654fbcac0',
        isPrivate: false,
        metadata: [],
        name: 'bah-bogus',
        updatedAt: Utils\Utils::parseDateTime('2024-03-02T03:38:52.392Z'),
        webUrl: 'https://neat-birdbath.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repository->patchRepoRepository(
    request: $request
);

if ($response->repoRepository !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchRepoRepositoryRequest](../../Models/Operations/PatchRepoRepositoryRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchRepoRepositoryResponse](../../Models/Operations/PatchRepoRepositoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoRepository

Deletes the RepoRepository identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoRepository" method="delete" path="/repo/{connection_id}/repository/{id}" -->
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

$request = new Operations\RemoveRepoRepositoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repository->removeRepoRepository(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveRepoRepositoryRequest](../../Models/Operations/RemoveRepoRepositoryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveRepoRepositoryResponse](../../Models/Operations/RemoveRepoRepositoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoRepository

Updates the RepoRepository identified by `id`. Provide the unified RepoRepository fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoRepository" method="put" path="/repo/{connection_id}/repository/{id}" example="repo_repository" -->
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

$request = new Operations\UpdateRepoRepositoryRequest(
    repoRepository: new Shared\RepoRepository(
        createdAt: Utils\Utils::parseDateTime('2023-06-12T09:42:00.080Z'),
        description: 'Sed somnus crastinus armarium.',
        id: 'b051769a-ffa0-48aa-b538-c3f654fbcac0',
        isPrivate: false,
        metadata: [],
        name: 'bah-bogus',
        updatedAt: Utils\Utils::parseDateTime('2024-03-02T03:38:52.392Z'),
        webUrl: 'https://neat-birdbath.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repository->updateRepoRepository(
    request: $request
);

if ($response->repoRepository !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateRepoRepositoryRequest](../../Models/Operations/UpdateRepoRepositoryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateRepoRepositoryResponse](../../Models/Operations/UpdateRepoRepositoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |