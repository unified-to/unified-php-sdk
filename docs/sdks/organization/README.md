# Organization

## Overview

### Available Operations

* [createAdsOrganization2](#createadsorganization2) - Create an organization
* [createRepoOrganization2](#createrepoorganization2) - Create an organization
* [getAccountingOrganization2](#getaccountingorganization2) - Retrieve an organization
* [getAdsOrganization2](#getadsorganization2) - Retrieve an organization
* [getRepoOrganization2](#getrepoorganization2) - Retrieve an organization
* [listAccountingOrganizations2](#listaccountingorganizations2) - List all organizations
* [listAdsOrganizations2](#listadsorganizations2) - List all organizations
* [listRepoOrganizations2](#listrepoorganizations2) - List all organizations
* [patchAdsOrganization2](#patchadsorganization2) - Update an organization
* [patchRepoOrganization2](#patchrepoorganization2) - Update an organization
* [removeAdsOrganization2](#removeadsorganization2) - Remove an organization
* [removeRepoOrganization2](#removerepoorganization2) - Remove an organization
* [updateAdsOrganization2](#updateadsorganization2) - Update an organization
* [updateRepoOrganization2](#updaterepoorganization2) - Update an organization

## createAdsOrganization2

Create an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsOrganization2" method="post" path="/ads/{connection_id}/organization" -->
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

$request = new Operations\CreateAdsOrganization2Request(
    adsOrganization: new Shared\AdsOrganization(),
    connectionId: '<id>',
);

$response = $sdk->organization->createAdsOrganization2(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateAdsOrganization2Request](../../Models/Operations/CreateAdsOrganization2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateAdsOrganization2Response](../../Models/Operations/CreateAdsOrganization2Response.md)**

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

$response = $sdk->organization->createRepoOrganization2(
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

## getAccountingOrganization2

Retrieve an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingOrganization2" method="get" path="/accounting/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetAccountingOrganization2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->getAccountingOrganization2(
    request: $request
);

if ($response->accountingOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GetAccountingOrganization2Request](../../Models/Operations/GetAccountingOrganization2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\GetAccountingOrganization2Response](../../Models/Operations/GetAccountingOrganization2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsOrganization2

Retrieve an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsOrganization2" method="get" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetAdsOrganization2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->getAdsOrganization2(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetAdsOrganization2Request](../../Models/Operations/GetAdsOrganization2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetAdsOrganization2Response](../../Models/Operations/GetAdsOrganization2Response.md)**

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

$response = $sdk->organization->getRepoOrganization2(
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

## listAccountingOrganizations2

List all organizations

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingOrganizations2" method="get" path="/accounting/{connection_id}/organization" -->
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

$request = new Operations\ListAccountingOrganizations2Request(
    connectionId: '<id>',
);

$response = $sdk->organization->listAccountingOrganizations2(
    request: $request
);

if ($response->accountingOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\ListAccountingOrganizations2Request](../../Models/Operations/ListAccountingOrganizations2Request.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\ListAccountingOrganizations2Response](../../Models/Operations/ListAccountingOrganizations2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsOrganizations2

List all organizations

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsOrganizations2" method="get" path="/ads/{connection_id}/organization" -->
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

$request = new Operations\ListAdsOrganizations2Request(
    connectionId: '<id>',
);

$response = $sdk->organization->listAdsOrganizations2(
    request: $request
);

if ($response->adsOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListAdsOrganizations2Request](../../Models/Operations/ListAdsOrganizations2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListAdsOrganizations2Response](../../Models/Operations/ListAdsOrganizations2Response.md)**

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

$response = $sdk->organization->listRepoOrganizations2(
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

## patchAdsOrganization2

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsOrganization2" method="patch" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\PatchAdsOrganization2Request(
    adsOrganization: new Shared\AdsOrganization(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->patchAdsOrganization2(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchAdsOrganization2Request](../../Models/Operations/PatchAdsOrganization2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchAdsOrganization2Response](../../Models/Operations/PatchAdsOrganization2Response.md)**

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

$response = $sdk->organization->patchRepoOrganization2(
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

## removeAdsOrganization2

Remove an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsOrganization2" method="delete" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\RemoveAdsOrganization2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->removeAdsOrganization2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveAdsOrganization2Request](../../Models/Operations/RemoveAdsOrganization2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveAdsOrganization2Response](../../Models/Operations/RemoveAdsOrganization2Response.md)**

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

$response = $sdk->organization->removeRepoOrganization2(
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

## updateAdsOrganization2

Update an organization

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsOrganization2" method="put" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\UpdateAdsOrganization2Request(
    adsOrganization: new Shared\AdsOrganization(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->updateAdsOrganization2(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateAdsOrganization2Request](../../Models/Operations/UpdateAdsOrganization2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateAdsOrganization2Response](../../Models/Operations/UpdateAdsOrganization2Response.md)**

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

$response = $sdk->organization->updateRepoOrganization2(
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