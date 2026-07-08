# Repo

## Overview

### Available Operations

* [createRepoBranch](#createrepobranch) - Create a branch
* [createRepoCommit](#createrepocommit) - Create a commit
* [createRepoOrganization](#createrepoorganization) - Create an organization
* [createRepoPullrequest](#createrepopullrequest) - Create a pullrequest
* [createRepoRepository](#createreporepository) - Create a repository
* [getRepoBranch](#getrepobranch) - Retrieve a branch
* [getRepoCommit](#getrepocommit) - Retrieve a commit
* [getRepoOrganization](#getrepoorganization) - Retrieve an organization
* [getRepoPullrequest](#getrepopullrequest) - Retrieve a pullrequest
* [getRepoRepository](#getreporepository) - Retrieve a repository
* [listRepoBranches](#listrepobranches) - List all branches
* [listRepoCommits](#listrepocommits) - List all commits
* [listRepoOrganizations](#listrepoorganizations) - List all organizations
* [listRepoPullrequests](#listrepopullrequests) - List all pullrequests
* [listRepoRepositories](#listreporepositories) - List all repositories
* [patchRepoBranch](#patchrepobranch) - Update a branch
* [patchRepoCommit](#patchrepocommit) - Update a commit
* [patchRepoOrganization](#patchrepoorganization) - Update an organization
* [patchRepoPullrequest](#patchrepopullrequest) - Update a pullrequest
* [patchRepoRepository](#patchreporepository) - Update a repository
* [removeRepoBranch](#removerepobranch) - Remove a branch
* [removeRepoCommit](#removerepocommit) - Remove a commit
* [removeRepoOrganization](#removerepoorganization) - Remove an organization
* [removeRepoPullrequest](#removerepopullrequest) - Remove a pullrequest
* [removeRepoRepository](#removereporepository) - Remove a repository
* [updateRepoBranch](#updaterepobranch) - Update a branch
* [updateRepoCommit](#updaterepocommit) - Update a commit
* [updateRepoOrganization](#updaterepoorganization) - Update an organization
* [updateRepoPullrequest](#updaterepopullrequest) - Update a pullrequest
* [updateRepoRepository](#updatereporepository) - Update a repository

## createRepoBranch

Create a branch

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoBranch" method="post" path="/repo/{connection_id}/branch" -->
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

$request = new Operations\CreateRepoBranchRequest(
    repoBranch: new Shared\RepoBranch(
        name: '<value>',
        repoId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->repo->createRepoBranch(
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

## createRepoCommit

Create a commit

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoCommit" method="post" path="/repo/{connection_id}/commit" -->
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

$request = new Operations\CreateRepoCommitRequest(
    repoCommit: new Shared\RepoCommit(
        repoId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->repo->createRepoCommit(
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

## createRepoOrganization

Create an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoOrganization" method="post" path="/repo/{connection_id}/organization" -->
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

$request = new Operations\CreateRepoOrganizationRequest(
    repoOrganization: new Shared\RepoOrganization(),
    connectionId: '<id>',
);

$response = $sdk->repo->createRepoOrganization(
    request: $request
);

if ($response->repoOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateRepoOrganizationRequest](../../Models/Operations/CreateRepoOrganizationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateRepoOrganizationResponse](../../Models/Operations/CreateRepoOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createRepoPullrequest

Create a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoPullrequest" method="post" path="/repo/{connection_id}/pullrequest" -->
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

$request = new Operations\CreateRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
);

$response = $sdk->repo->createRepoPullrequest(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateRepoPullrequestRequest](../../Models/Operations/CreateRepoPullrequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateRepoPullrequestResponse](../../Models/Operations/CreateRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createRepoRepository

Create a repository

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoRepository" method="post" path="/repo/{connection_id}/repository" -->
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

$request = new Operations\CreateRepoRepositoryRequest(
    repoRepository: new Shared\RepoRepository(
        name: '<value>',
    ),
    connectionId: '<id>',
);

$response = $sdk->repo->createRepoRepository(
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

## getRepoBranch

Retrieve a branch

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

$response = $sdk->repo->getRepoBranch(
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

$response = $sdk->repo->getRepoCommit(
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

## getRepoOrganization

Retrieve an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoOrganization" method="get" path="/repo/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetRepoOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->getRepoOrganization(
    request: $request
);

if ($response->repoOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetRepoOrganizationRequest](../../Models/Operations/GetRepoOrganizationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetRepoOrganizationResponse](../../Models/Operations/GetRepoOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoPullrequest

Retrieve a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoPullrequest" method="get" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\GetRepoPullrequestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->getRepoPullrequest(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetRepoPullrequestRequest](../../Models/Operations/GetRepoPullrequestRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetRepoPullrequestResponse](../../Models/Operations/GetRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoRepository

Retrieve a repository

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

$response = $sdk->repo->getRepoRepository(
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

## listRepoBranches

List all branches

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

$response = $sdk->repo->listRepoBranches(
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

$response = $sdk->repo->listRepoCommits(
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

## listRepoOrganizations

List all organizations

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoOrganizations" method="get" path="/repo/{connection_id}/organization" -->
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

$request = new Operations\ListRepoOrganizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->repo->listRepoOrganizations(
    request: $request
);

if ($response->repoOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListRepoOrganizationsRequest](../../Models/Operations/ListRepoOrganizationsRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListRepoOrganizationsResponse](../../Models/Operations/ListRepoOrganizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoPullrequests

List all pullrequests

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoPullrequests" method="get" path="/repo/{connection_id}/pullrequest" -->
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

$request = new Operations\ListRepoPullrequestsRequest(
    connectionId: '<id>',
);

$response = $sdk->repo->listRepoPullrequests(
    request: $request
);

if ($response->repoPullrequests !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListRepoPullrequestsRequest](../../Models/Operations/ListRepoPullrequestsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListRepoPullrequestsResponse](../../Models/Operations/ListRepoPullrequestsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoRepositories

List all repositories

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

$response = $sdk->repo->listRepoRepositories(
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

## patchRepoBranch

Update a branch

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoBranch" method="patch" path="/repo/{connection_id}/branch/{id}" -->
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

$request = new Operations\PatchRepoBranchRequest(
    repoBranch: new Shared\RepoBranch(
        name: '<value>',
        repoId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->patchRepoBranch(
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

## patchRepoCommit

Update a commit

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoCommit" method="patch" path="/repo/{connection_id}/commit/{id}" -->
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

$request = new Operations\PatchRepoCommitRequest(
    repoCommit: new Shared\RepoCommit(
        repoId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->patchRepoCommit(
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

## patchRepoOrganization

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoOrganization" method="patch" path="/repo/{connection_id}/organization/{id}" -->
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

$request = new Operations\PatchRepoOrganizationRequest(
    repoOrganization: new Shared\RepoOrganization(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->patchRepoOrganization(
    request: $request
);

if ($response->repoOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchRepoOrganizationRequest](../../Models/Operations/PatchRepoOrganizationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchRepoOrganizationResponse](../../Models/Operations/PatchRepoOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoPullrequest

Update a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoPullrequest" method="patch" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\PatchRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->patchRepoPullrequest(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchRepoPullrequestRequest](../../Models/Operations/PatchRepoPullrequestRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchRepoPullrequestResponse](../../Models/Operations/PatchRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoRepository

Update a repository

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoRepository" method="patch" path="/repo/{connection_id}/repository/{id}" -->
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

$request = new Operations\PatchRepoRepositoryRequest(
    repoRepository: new Shared\RepoRepository(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->patchRepoRepository(
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

## removeRepoBranch

Remove a branch

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

$response = $sdk->repo->removeRepoBranch(
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

$response = $sdk->repo->removeRepoCommit(
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

## removeRepoOrganization

Remove an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoOrganization" method="delete" path="/repo/{connection_id}/organization/{id}" -->
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

$request = new Operations\RemoveRepoOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->removeRepoOrganization(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveRepoOrganizationRequest](../../Models/Operations/RemoveRepoOrganizationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveRepoOrganizationResponse](../../Models/Operations/RemoveRepoOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoPullrequest

Remove a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoPullrequest" method="delete" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\RemoveRepoPullrequestRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->removeRepoPullrequest(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveRepoPullrequestRequest](../../Models/Operations/RemoveRepoPullrequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveRepoPullrequestResponse](../../Models/Operations/RemoveRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoRepository

Remove a repository

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

$response = $sdk->repo->removeRepoRepository(
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

## updateRepoBranch

Update a branch

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoBranch" method="put" path="/repo/{connection_id}/branch/{id}" -->
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

$request = new Operations\UpdateRepoBranchRequest(
    repoBranch: new Shared\RepoBranch(
        name: '<value>',
        repoId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->updateRepoBranch(
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

## updateRepoCommit

Update a commit

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoCommit" method="put" path="/repo/{connection_id}/commit/{id}" -->
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

$request = new Operations\UpdateRepoCommitRequest(
    repoCommit: new Shared\RepoCommit(
        repoId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->updateRepoCommit(
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

## updateRepoOrganization

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoOrganization" method="put" path="/repo/{connection_id}/organization/{id}" -->
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

$request = new Operations\UpdateRepoOrganizationRequest(
    repoOrganization: new Shared\RepoOrganization(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->updateRepoOrganization(
    request: $request
);

if ($response->repoOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateRepoOrganizationRequest](../../Models/Operations/UpdateRepoOrganizationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateRepoOrganizationResponse](../../Models/Operations/UpdateRepoOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoPullrequest

Update a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoPullrequest" method="put" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\UpdateRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->updateRepoPullrequest(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateRepoPullrequestRequest](../../Models/Operations/UpdateRepoPullrequestRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateRepoPullrequestResponse](../../Models/Operations/UpdateRepoPullrequestResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoRepository

Update a repository

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoRepository" method="put" path="/repo/{connection_id}/repository/{id}" -->
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

$request = new Operations\UpdateRepoRepositoryRequest(
    repoRepository: new Shared\RepoRepository(
        name: '<value>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->updateRepoRepository(
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