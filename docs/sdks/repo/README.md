# Repo

## Overview

### Available Operations

* [createRepoBranch2](#createrepobranch2) - Create a branch
* [createRepoCommit2](#createrepocommit2) - Create a commit
* [createRepoOrganization2](#createrepoorganization2) - Create an organization
* [createRepoPullrequest2](#createrepopullrequest2) - Create a pullrequest
* [createRepoRepository2](#createreporepository2) - Create a repository
* [getRepoBranch2](#getrepobranch2) - Retrieve a branch
* [getRepoCommit2](#getrepocommit2) - Retrieve a commit
* [getRepoOrganization2](#getrepoorganization2) - Retrieve an organization
* [getRepoPullrequest2](#getrepopullrequest2) - Retrieve a pullrequest
* [getRepoRepository2](#getreporepository2) - Retrieve a repository
* [listRepoBranches2](#listrepobranches2) - List all branches
* [listRepoCommits2](#listrepocommits2) - List all commits
* [listRepoOrganizations2](#listrepoorganizations2) - List all organizations
* [listRepoPullrequests2](#listrepopullrequests2) - List all pullrequests
* [listRepoRepositories2](#listreporepositories2) - List all repositories
* [patchRepoBranch2](#patchrepobranch2) - Update a branch
* [patchRepoCommit2](#patchrepocommit2) - Update a commit
* [patchRepoOrganization2](#patchrepoorganization2) - Update an organization
* [patchRepoPullrequest2](#patchrepopullrequest2) - Update a pullrequest
* [patchRepoRepository2](#patchreporepository2) - Update a repository
* [removeRepoBranch2](#removerepobranch2) - Remove a branch
* [removeRepoCommit2](#removerepocommit2) - Remove a commit
* [removeRepoOrganization2](#removerepoorganization2) - Remove an organization
* [removeRepoPullrequest2](#removerepopullrequest2) - Remove a pullrequest
* [removeRepoRepository2](#removereporepository2) - Remove a repository
* [updateRepoBranch2](#updaterepobranch2) - Update a branch
* [updateRepoCommit2](#updaterepocommit2) - Update a commit
* [updateRepoOrganization2](#updaterepoorganization2) - Update an organization
* [updateRepoPullrequest2](#updaterepopullrequest2) - Update a pullrequest
* [updateRepoRepository2](#updatereporepository2) - Update a repository

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

$response = $sdk->repo->createRepoBranch2(
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

$response = $sdk->repo->createRepoCommit2(
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

## createRepoOrganization2

Create an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoOrganization2" method="post" path="/repo/{connection_id}/organization" -->
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

$request = new Operations\CreateRepoOrganization2Request(
    repoOrganization: new Shared\RepoOrganization(),
    connectionId: '<id>',
);

$response = $sdk->repo->createRepoOrganization2(
    request: $request
);

if ($response->repoOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateRepoOrganization2Request](../../Models/Operations/CreateRepoOrganization2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateRepoOrganization2Response](../../Models/Operations/CreateRepoOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createRepoPullrequest2

Create a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="createRepoPullrequest2" method="post" path="/repo/{connection_id}/pullrequest" -->
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

$request = new Operations\CreateRepoPullrequest2Request(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
);

$response = $sdk->repo->createRepoPullrequest2(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateRepoPullrequest2Request](../../Models/Operations/CreateRepoPullrequest2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateRepoPullrequest2Response](../../Models/Operations/CreateRepoPullrequest2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->repo->createRepoRepository2(
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

$response = $sdk->repo->getRepoBranch2(
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

$response = $sdk->repo->getRepoCommit2(
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

## getRepoOrganization2

Retrieve an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoOrganization2" method="get" path="/repo/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetRepoOrganization2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->getRepoOrganization2(
    request: $request
);

if ($response->repoOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetRepoOrganization2Request](../../Models/Operations/GetRepoOrganization2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetRepoOrganization2Response](../../Models/Operations/GetRepoOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getRepoPullrequest2

Retrieve a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="getRepoPullrequest2" method="get" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\GetRepoPullrequest2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->getRepoPullrequest2(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetRepoPullrequest2Request](../../Models/Operations/GetRepoPullrequest2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetRepoPullrequest2Response](../../Models/Operations/GetRepoPullrequest2Response.md)**

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

$response = $sdk->repo->getRepoRepository2(
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

$response = $sdk->repo->listRepoBranches2(
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

$response = $sdk->repo->listRepoCommits2(
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

## listRepoOrganizations2

List all organizations

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoOrganizations2" method="get" path="/repo/{connection_id}/organization" -->
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

$request = new Operations\ListRepoOrganizations2Request(
    connectionId: '<id>',
);

$response = $sdk->repo->listRepoOrganizations2(
    request: $request
);

if ($response->repoOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListRepoOrganizations2Request](../../Models/Operations/ListRepoOrganizations2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListRepoOrganizations2Response](../../Models/Operations/ListRepoOrganizations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listRepoPullrequests2

List all pullrequests

### Example Usage

<!-- UsageSnippet language="php" operationID="listRepoPullrequests2" method="get" path="/repo/{connection_id}/pullrequest" -->
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

$request = new Operations\ListRepoPullrequests2Request(
    connectionId: '<id>',
);

$response = $sdk->repo->listRepoPullrequests2(
    request: $request
);

if ($response->repoPullrequests !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListRepoPullrequests2Request](../../Models/Operations/ListRepoPullrequests2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListRepoPullrequests2Response](../../Models/Operations/ListRepoPullrequests2Response.md)**

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

$response = $sdk->repo->listRepoRepositories2(
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

$response = $sdk->repo->patchRepoBranch2(
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

$response = $sdk->repo->patchRepoCommit2(
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

## patchRepoOrganization2

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoOrganization2" method="patch" path="/repo/{connection_id}/organization/{id}" -->
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

$request = new Operations\PatchRepoOrganization2Request(
    repoOrganization: new Shared\RepoOrganization(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->patchRepoOrganization2(
    request: $request
);

if ($response->repoOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchRepoOrganization2Request](../../Models/Operations/PatchRepoOrganization2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchRepoOrganization2Response](../../Models/Operations/PatchRepoOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchRepoPullrequest2

Update a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="patchRepoPullrequest2" method="patch" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\PatchRepoPullrequest2Request(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->patchRepoPullrequest2(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchRepoPullrequest2Request](../../Models/Operations/PatchRepoPullrequest2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchRepoPullrequest2Response](../../Models/Operations/PatchRepoPullrequest2Response.md)**

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

$response = $sdk->repo->patchRepoRepository2(
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

$response = $sdk->repo->removeRepoBranch2(
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

$response = $sdk->repo->removeRepoCommit2(
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

## removeRepoOrganization2

Remove an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoOrganization2" method="delete" path="/repo/{connection_id}/organization/{id}" -->
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

$request = new Operations\RemoveRepoOrganization2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->removeRepoOrganization2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveRepoOrganization2Request](../../Models/Operations/RemoveRepoOrganization2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveRepoOrganization2Response](../../Models/Operations/RemoveRepoOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeRepoPullrequest2

Remove a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="removeRepoPullrequest2" method="delete" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\RemoveRepoPullrequest2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->removeRepoPullrequest2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveRepoPullrequest2Request](../../Models/Operations/RemoveRepoPullrequest2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveRepoPullrequest2Response](../../Models/Operations/RemoveRepoPullrequest2Response.md)**

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

$response = $sdk->repo->removeRepoRepository2(
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

$response = $sdk->repo->updateRepoBranch2(
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

$response = $sdk->repo->updateRepoCommit2(
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

## updateRepoOrganization2

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoOrganization2" method="put" path="/repo/{connection_id}/organization/{id}" -->
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

$request = new Operations\UpdateRepoOrganization2Request(
    repoOrganization: new Shared\RepoOrganization(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->updateRepoOrganization2(
    request: $request
);

if ($response->repoOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateRepoOrganization2Request](../../Models/Operations/UpdateRepoOrganization2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateRepoOrganization2Response](../../Models/Operations/UpdateRepoOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateRepoPullrequest2

Update a pullrequest

### Example Usage

<!-- UsageSnippet language="php" operationID="updateRepoPullrequest2" method="put" path="/repo/{connection_id}/pullrequest/{id}" -->
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

$request = new Operations\UpdateRepoPullrequest2Request(
    repoPullrequest: new Shared\RepoPullrequest(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->repo->updateRepoPullrequest2(
    request: $request
);

if ($response->repoPullrequest !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateRepoPullrequest2Request](../../Models/Operations/UpdateRepoPullrequest2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateRepoPullrequest2Response](../../Models/Operations/UpdateRepoPullrequest2Response.md)**

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

$response = $sdk->repo->updateRepoRepository2(
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