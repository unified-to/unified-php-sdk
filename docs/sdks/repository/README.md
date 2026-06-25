# Repository

## Overview

### Available Operations

* [createRepoRepository2](#createreporepository2) - Create a repository
* [getRepoRepository2](#getreporepository2) - Retrieve a repository
* [listRepoRepositories2](#listreporepositories2) - List all repositories
* [patchRepoRepository2](#patchreporepository2) - Update a repository
* [removeRepoRepository2](#removereporepository2) - Remove a repository
* [updateRepoRepository2](#updatereporepository2) - Update a repository

## createRepoRepository2

Create a repository

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoRepository2" method="post" path="/repo/{connection_id}/repository" -->
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

$request = new Operations\CreateRepoRepository2Request(
    repoRepository: new Shared\RepoRepository(
        name: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->repository->createRepoRepository2(
    request: $request
);

if ($response->repoRepository !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateRepoRepository2Request](../../Models/Operations/CreateRepoRepository2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateRepoRepository2Response](../../Models/Operations/CreateRepoRepository2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoRepository2

Retrieve a repository

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoRepository2" method="get" path="/repo/{connection_id}/repository/{id}" -->
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

$request = new Operations\GetRepoRepository2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repository->getRepoRepository2(
    request: $request
);

if ($response->repoRepository !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetRepoRepository2Request](../../Models/Operations/GetRepoRepository2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetRepoRepository2Response](../../Models/Operations/GetRepoRepository2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoRepositories2

List all repositories

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoRepositories2" method="get" path="/repo/{connection_id}/repository" -->
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

$request = new Operations\ListRepoRepositories2Request(
    connectionId: '<id>',
);

$response = $sdk->repository->listRepoRepositories2(
    request: $request
);

if ($response->repoRepositories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListRepoRepositories2Request](../../Models/Operations/ListRepoRepositories2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListRepoRepositories2Response](../../Models/Operations/ListRepoRepositories2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoRepository2

Update a repository

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoRepository2" method="patch" path="/repo/{connection_id}/repository/{id}" -->
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

$request = new Operations\PatchRepoRepository2Request(
    repoRepository: new Shared\RepoRepository(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repository->patchRepoRepository2(
    request: $request
);

if ($response->repoRepository !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchRepoRepository2Request](../../Models/Operations/PatchRepoRepository2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchRepoRepository2Response](../../Models/Operations/PatchRepoRepository2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoRepository2

Remove a repository

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoRepository2" method="delete" path="/repo/{connection_id}/repository/{id}" -->
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

$request = new Operations\RemoveRepoRepository2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repository->removeRepoRepository2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveRepoRepository2Request](../../Models/Operations/RemoveRepoRepository2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveRepoRepository2Response](../../Models/Operations/RemoveRepoRepository2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoRepository2

Update a repository

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoRepository2" method="put" path="/repo/{connection_id}/repository/{id}" -->
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

$request = new Operations\UpdateRepoRepository2Request(
    repoRepository: new Shared\RepoRepository(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repository->updateRepoRepository2(
    request: $request
);

if ($response->repoRepository !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateRepoRepository2Request](../../Models/Operations/UpdateRepoRepository2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateRepoRepository2Response](../../Models/Operations/UpdateRepoRepository2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |