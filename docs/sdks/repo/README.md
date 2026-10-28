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
        id: 'd758a688-5455-4ad3-92c1-545b4f550f73',
        metadata: [],
        name: 'transmitter-calculate',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2020-01-08T02:58:27.188Z'),
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
        id: '1e5edb0c-d548-4ac7-afb5-8d26c6c8c2a7',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'quantify bluetooth bandwidth',
        metadata: [],
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-06-03T11:32:43.929Z'),
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

Creates a RepoOrganization. Provide the unified RepoOrganization fields in the request body; they are mapped to the provider's API. Returns the created RepoOrganization.

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoOrganization" method="post" path="/repo/{connection_id}/organization" example="repo_organization" -->
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

$request = new Operations\CreateRepoOrganizationRequest(
    repoOrganization: new Shared\RepoOrganization(
        avatarUrl: 'https://picsum.photos/seed/fGl6Lb/3157/3173',
        createdAt: Utils\Utils::parseDateTime('2022-07-07T00:18:40.748Z'),
        description: 'Trepide defendo supra testimonium ager.',
        id: '928d8dcc-0327-44d5-adec-eef2a17c53fe',
        metadata: [],
        name: 'Denesik - Lemke',
        updatedAt: Utils\Utils::parseDateTime('2023-08-23T10:52:58.107Z'),
        webUrl: 'https://turbulent-overheard.biz',
    ),
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

Creates a RepoPullrequest. Provide the unified RepoPullrequest fields in the request body; they are mapped to the provider's API. Returns the created RepoPullrequest.

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoPullrequest" method="post" path="/repo/{connection_id}/pullrequest" example="repo_pullrequest" -->
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

$request = new Operations\CreateRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(
        closedAt: Utils\Utils::parseDateTime('2025-05-05T17:26:38.837Z'),
        createdAt: Utils\Utils::parseDateTime('2023-02-27T09:37:13.663Z'),
        id: '532d467b-f81c-4a8f-a8c9-1524ba82c570',
        labels: [
            'creptio',
            'tutamen',
        ],
        metadata: [],
        notes: 'Texo advoco bibo amet. Defero coadunatio turbo curtus. Consuasor aggero veritatis suggero adeo.',
        status: Shared\RepoPullrequestStatus::Approved,
        title: 'reboot mobile application',
        updatedAt: Utils\Utils::parseDateTime('2026-01-22T19:20:51.606Z'),
    ),
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
        id: '4f78ae52-057f-48f8-af3b-99b644ef28af',
        isPrivate: false,
        metadata: [],
        name: 'bah-bogus',
        updatedAt: Utils\Utils::parseDateTime('2024-03-02T13:50:06.652Z'),
        webUrl: 'https://neat-birdbath.org',
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

Retrieves a single RepoOrganization by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single RepoPullrequest by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of RepoOrganizations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of RepoPullrequests. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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
        id: '893f6fb0-5536-4924-bd58-e2f9182203f7',
        metadata: [],
        name: 'transmitter-calculate',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2020-01-08T02:58:27.189Z'),
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
        id: '56f8ae9e-7fe5-4f30-9fd0-e8a088892e2b',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'quantify bluetooth bandwidth',
        metadata: [],
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-06-03T11:32:43.933Z'),
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

Updates the RepoOrganization identified by `id`. Provide the unified RepoOrganization fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoOrganization" method="patch" path="/repo/{connection_id}/organization/{id}" example="repo_organization" -->
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

$request = new Operations\PatchRepoOrganizationRequest(
    repoOrganization: new Shared\RepoOrganization(
        avatarUrl: 'https://picsum.photos/seed/fGl6Lb/3157/3173',
        createdAt: Utils\Utils::parseDateTime('2022-07-07T00:18:40.748Z'),
        description: 'Trepide defendo supra testimonium ager.',
        id: 'a4030103-7a6e-4063-85db-678faa999c35',
        metadata: [],
        name: 'Denesik - Lemke',
        updatedAt: Utils\Utils::parseDateTime('2023-08-23T10:52:58.111Z'),
        webUrl: 'https://turbulent-overheard.biz',
    ),
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

Updates the RepoPullrequest identified by `id`. Provide the unified RepoPullrequest fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoPullrequest" method="patch" path="/repo/{connection_id}/pullrequest/{id}" example="repo_pullrequest" -->
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

$request = new Operations\PatchRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(
        closedAt: Utils\Utils::parseDateTime('2025-05-05T17:26:38.845Z'),
        createdAt: Utils\Utils::parseDateTime('2023-02-27T09:37:13.663Z'),
        id: 'ac73922a-c79a-426d-8608-96e45f97b3fa',
        labels: [
            'creptio',
            'tutamen',
        ],
        metadata: [],
        notes: 'Texo advoco bibo amet. Defero coadunatio turbo curtus. Consuasor aggero veritatis suggero adeo.',
        status: Shared\RepoPullrequestStatus::Approved,
        title: 'reboot mobile application',
        updatedAt: Utils\Utils::parseDateTime('2026-01-22T19:20:51.616Z'),
    ),
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
        id: 'ba1034ef-3b33-4368-9c8d-5baffca62a48',
        isPrivate: false,
        metadata: [],
        name: 'bah-bogus',
        updatedAt: Utils\Utils::parseDateTime('2024-03-02T13:50:06.656Z'),
        webUrl: 'https://neat-birdbath.org',
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

Deletes the RepoOrganization identified by `id`.

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

Deletes the RepoPullrequest identified by `id`.

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
        id: '893f6fb0-5536-4924-bd58-e2f9182203f7',
        metadata: [],
        name: 'transmitter-calculate',
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2020-01-08T02:58:27.189Z'),
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
        id: '56f8ae9e-7fe5-4f30-9fd0-e8a088892e2b',
        linesAdded: 313,
        linesChanged: 659,
        linesDeleted: 482,
        message: 'quantify bluetooth bandwidth',
        metadata: [],
        repoId: '<id>',
        updatedAt: Utils\Utils::parseDateTime('2023-06-03T11:32:43.933Z'),
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

Updates the RepoOrganization identified by `id`. Provide the unified RepoOrganization fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoOrganization" method="put" path="/repo/{connection_id}/organization/{id}" example="repo_organization" -->
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

$request = new Operations\UpdateRepoOrganizationRequest(
    repoOrganization: new Shared\RepoOrganization(
        avatarUrl: 'https://picsum.photos/seed/fGl6Lb/3157/3173',
        createdAt: Utils\Utils::parseDateTime('2022-07-07T00:18:40.748Z'),
        description: 'Trepide defendo supra testimonium ager.',
        id: 'a4030103-7a6e-4063-85db-678faa999c35',
        metadata: [],
        name: 'Denesik - Lemke',
        updatedAt: Utils\Utils::parseDateTime('2023-08-23T10:52:58.111Z'),
        webUrl: 'https://turbulent-overheard.biz',
    ),
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

Updates the RepoPullrequest identified by `id`. Provide the unified RepoPullrequest fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoPullrequest" method="put" path="/repo/{connection_id}/pullrequest/{id}" example="repo_pullrequest" -->
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

$request = new Operations\UpdateRepoPullrequestRequest(
    repoPullrequest: new Shared\RepoPullrequest(
        closedAt: Utils\Utils::parseDateTime('2025-05-05T17:26:38.845Z'),
        createdAt: Utils\Utils::parseDateTime('2023-02-27T09:37:13.663Z'),
        id: 'ac73922a-c79a-426d-8608-96e45f97b3fa',
        labels: [
            'creptio',
            'tutamen',
        ],
        metadata: [],
        notes: 'Texo advoco bibo amet. Defero coadunatio turbo curtus. Consuasor aggero veritatis suggero adeo.',
        status: Shared\RepoPullrequestStatus::Approved,
        title: 'reboot mobile application',
        updatedAt: Utils\Utils::parseDateTime('2026-01-22T19:20:51.616Z'),
    ),
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
        id: 'ba1034ef-3b33-4368-9c8d-5baffca62a48',
        isPrivate: false,
        metadata: [],
        name: 'bah-bogus',
        updatedAt: Utils\Utils::parseDateTime('2024-03-02T13:50:06.656Z'),
        webUrl: 'https://neat-birdbath.org',
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