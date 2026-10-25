# Organization

## Overview

### Available Operations

* [createAdsOrganization](#createadsorganization) - Create an organization
* [createGenaiOrganization](#creategenaiorganization) - Create an organization
* [createRepoOrganization](#createrepoorganization) - Create an organization
* [getAccountingOrganization](#getaccountingorganization) - Retrieve an organization
* [getAdsOrganization](#getadsorganization) - Retrieve an organization
* [getGenaiOrganization](#getgenaiorganization) - Retrieve an organization
* [getRepoOrganization](#getrepoorganization) - Retrieve an organization
* [listAccountingOrganizations](#listaccountingorganizations) - List all organizations
* [listAdsOrganizations](#listadsorganizations) - List all organizations
* [listGenaiOrganizations](#listgenaiorganizations) - List all organizations
* [listRepoOrganizations](#listrepoorganizations) - List all organizations
* [patchAdsOrganization](#patchadsorganization) - Update an organization
* [patchGenaiOrganization](#patchgenaiorganization) - Update an organization
* [patchRepoOrganization](#patchrepoorganization) - Update an organization
* [removeAdsOrganization](#removeadsorganization) - Remove an organization
* [removeGenaiOrganization](#removegenaiorganization) - Remove an organization
* [removeRepoOrganization](#removerepoorganization) - Remove an organization
* [updateAdsOrganization](#updateadsorganization) - Update an organization
* [updateGenaiOrganization](#updategenaiorganization) - Update an organization
* [updateRepoOrganization](#updaterepoorganization) - Update an organization

## createAdsOrganization

Creates a AdsOrganization. Provide the unified AdsOrganization fields in the request body; they are mapped to the provider's API. Returns the created AdsOrganization.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAdsOrganization" method="post" path="/ads/{connection_id}/organization" example="ads_organization" -->
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

$request = new Operations\CreateAdsOrganizationRequest(
    adsOrganization: new Shared\AdsOrganization(
        accountNumber: 'LQUJx8zQBW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: '38839e68-5141-4b8b-afb6-2a5903ac55a7',
        managers: [],
        metadata: [],
        name: 'Ankunding Inc',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Europe/Chisinau',
        updatedAt: Utils\Utils::parseDateTime('2026-04-01T19:11:41.232Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->organization->createAdsOrganization(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAdsOrganizationRequest](../../Models/Operations/CreateAdsOrganizationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAdsOrganizationResponse](../../Models/Operations/CreateAdsOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createGenaiOrganization

Creates a GenaiOrganization. Provide the unified GenaiOrganization fields in the request body; they are mapped to the provider's API. Returns the created GenaiOrganization.

### Example Usage

<!-- UsageSnippet language="php" operationID="createGenaiOrganization" method="post" path="/genai/{connection_id}/organization" example="genai_organization" -->
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

$request = new Operations\CreateGenaiOrganizationRequest(
    genaiOrganization: new Shared\GenaiOrganization(
        createdAt: Utils\Utils::parseDateTime('2020-10-27T16:03:47.122Z'),
        description: 'Voluptates abeo subseco.',
        id: 'dfa90d5c-f723-4d45-bd16-cfd08405572b',
        isActive: false,
        name: 'officially about',
        updatedAt: Utils\Utils::parseDateTime('2023-01-27T23:02:20.227Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->organization->createGenaiOrganization(
    request: $request
);

if ($response->genaiOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateGenaiOrganizationRequest](../../Models/Operations/CreateGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateGenaiOrganizationResponse](../../Models/Operations/CreateGenaiOrganizationResponse.md)**

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
        id: '67900d74-ccef-4d3e-9c5a-a649eddef015',
        metadata: [],
        name: 'Denesik - Lemke',
        updatedAt: Utils\Utils::parseDateTime('2023-08-22T16:31:13.371Z'),
        webUrl: 'https://turbulent-overheard.biz',
    ),
    connectionId: '<id>',
);

$response = $sdk->organization->createRepoOrganization(
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

## getAccountingOrganization

Retrieves a single AccountingOrganization by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingOrganization" method="get" path="/accounting/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetAccountingOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->getAccountingOrganization(
    request: $request
);

if ($response->accountingOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingOrganizationRequest](../../Models/Operations/GetAccountingOrganizationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingOrganizationResponse](../../Models/Operations/GetAccountingOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAdsOrganization

Retrieves a single AdsOrganization by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAdsOrganization" method="get" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetAdsOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->getAdsOrganization(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAdsOrganizationRequest](../../Models/Operations/GetAdsOrganizationRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAdsOrganizationResponse](../../Models/Operations/GetAdsOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getGenaiOrganization

Retrieves a single GenaiOrganization by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getGenaiOrganization" method="get" path="/genai/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetGenaiOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->getGenaiOrganization(
    request: $request
);

if ($response->genaiOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetGenaiOrganizationRequest](../../Models/Operations/GetGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetGenaiOrganizationResponse](../../Models/Operations/GetGenaiOrganizationResponse.md)**

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

$response = $sdk->organization->getRepoOrganization(
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

## listAccountingOrganizations

Returns a list of AccountingOrganizations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingOrganizations" method="get" path="/accounting/{connection_id}/organization" -->
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

$request = new Operations\ListAccountingOrganizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->organization->listAccountingOrganizations(
    request: $request
);

if ($response->accountingOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingOrganizationsRequest](../../Models/Operations/ListAccountingOrganizationsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingOrganizationsResponse](../../Models/Operations/ListAccountingOrganizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAdsOrganizations

Returns a list of AdsOrganizations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAdsOrganizations" method="get" path="/ads/{connection_id}/organization" -->
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

$request = new Operations\ListAdsOrganizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->organization->listAdsOrganizations(
    request: $request
);

if ($response->adsOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAdsOrganizationsRequest](../../Models/Operations/ListAdsOrganizationsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAdsOrganizationsResponse](../../Models/Operations/ListAdsOrganizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listGenaiOrganizations

Returns a list of GenaiOrganizations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listGenaiOrganizations" method="get" path="/genai/{connection_id}/organization" -->
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

$request = new Operations\ListGenaiOrganizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->organization->listGenaiOrganizations(
    request: $request
);

if ($response->genaiOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListGenaiOrganizationsRequest](../../Models/Operations/ListGenaiOrganizationsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListGenaiOrganizationsResponse](../../Models/Operations/ListGenaiOrganizationsResponse.md)**

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

$response = $sdk->organization->listRepoOrganizations(
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

## patchAdsOrganization

Updates the AdsOrganization identified by `id`. Provide the unified AdsOrganization fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAdsOrganization" method="patch" path="/ads/{connection_id}/organization/{id}" example="ads_organization" -->
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

$request = new Operations\PatchAdsOrganizationRequest(
    adsOrganization: new Shared\AdsOrganization(
        accountNumber: 'LQUJx8zQBW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: '97fa036c-57da-43ca-b4e6-69a398220862',
        managers: [],
        metadata: [],
        name: 'Ankunding Inc',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Europe/Chisinau',
        updatedAt: Utils\Utils::parseDateTime('2026-04-01T19:11:41.244Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->patchAdsOrganization(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAdsOrganizationRequest](../../Models/Operations/PatchAdsOrganizationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAdsOrganizationResponse](../../Models/Operations/PatchAdsOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchGenaiOrganization

Updates the GenaiOrganization identified by `id`. Provide the unified GenaiOrganization fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchGenaiOrganization" method="patch" path="/genai/{connection_id}/organization/{id}" example="genai_organization" -->
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

$request = new Operations\PatchGenaiOrganizationRequest(
    genaiOrganization: new Shared\GenaiOrganization(
        createdAt: Utils\Utils::parseDateTime('2020-10-27T16:03:47.122Z'),
        description: 'Voluptates abeo subseco.',
        id: '26c989d6-b22d-4012-9852-29913f80c11e',
        isActive: false,
        name: 'officially about',
        updatedAt: Utils\Utils::parseDateTime('2023-01-27T23:02:20.229Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->patchGenaiOrganization(
    request: $request
);

if ($response->genaiOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchGenaiOrganizationRequest](../../Models/Operations/PatchGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchGenaiOrganizationResponse](../../Models/Operations/PatchGenaiOrganizationResponse.md)**

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
        id: 'ea926275-c3e0-4dc2-a092-807c0cbf6066',
        metadata: [],
        name: 'Denesik - Lemke',
        updatedAt: Utils\Utils::parseDateTime('2023-08-22T16:31:13.373Z'),
        webUrl: 'https://turbulent-overheard.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->patchRepoOrganization(
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

## removeAdsOrganization

Deletes the AdsOrganization identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAdsOrganization" method="delete" path="/ads/{connection_id}/organization/{id}" -->
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

$request = new Operations\RemoveAdsOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->removeAdsOrganization(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAdsOrganizationRequest](../../Models/Operations/RemoveAdsOrganizationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAdsOrganizationResponse](../../Models/Operations/RemoveAdsOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeGenaiOrganization

Deletes the GenaiOrganization identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeGenaiOrganization" method="delete" path="/genai/{connection_id}/organization/{id}" -->
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

$request = new Operations\RemoveGenaiOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->removeGenaiOrganization(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveGenaiOrganizationRequest](../../Models/Operations/RemoveGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveGenaiOrganizationResponse](../../Models/Operations/RemoveGenaiOrganizationResponse.md)**

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

$response = $sdk->organization->removeRepoOrganization(
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

## updateAdsOrganization

Updates the AdsOrganization identified by `id`. Provide the unified AdsOrganization fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAdsOrganization" method="put" path="/ads/{connection_id}/organization/{id}" example="ads_organization" -->
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

$request = new Operations\UpdateAdsOrganizationRequest(
    adsOrganization: new Shared\AdsOrganization(
        accountNumber: 'LQUJx8zQBW',
        createdAt: Utils\Utils::parseDateTime('2020-07-23T21:47:11.440Z'),
        currency: 'USD',
        id: '97fa036c-57da-43ca-b4e6-69a398220862',
        managers: [],
        metadata: [],
        name: 'Ankunding Inc',
        status: Shared\AdsOrganizationStatus::Processing,
        timezone: 'Europe/Chisinau',
        updatedAt: Utils\Utils::parseDateTime('2026-04-01T19:11:41.244Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->updateAdsOrganization(
    request: $request
);

if ($response->adsOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAdsOrganizationRequest](../../Models/Operations/UpdateAdsOrganizationRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAdsOrganizationResponse](../../Models/Operations/UpdateAdsOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateGenaiOrganization

Updates the GenaiOrganization identified by `id`. Provide the unified GenaiOrganization fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateGenaiOrganization" method="put" path="/genai/{connection_id}/organization/{id}" example="genai_organization" -->
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

$request = new Operations\UpdateGenaiOrganizationRequest(
    genaiOrganization: new Shared\GenaiOrganization(
        createdAt: Utils\Utils::parseDateTime('2020-10-27T16:03:47.122Z'),
        description: 'Voluptates abeo subseco.',
        id: '26c989d6-b22d-4012-9852-29913f80c11e',
        isActive: false,
        name: 'officially about',
        updatedAt: Utils\Utils::parseDateTime('2023-01-27T23:02:20.229Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->updateGenaiOrganization(
    request: $request
);

if ($response->genaiOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateGenaiOrganizationRequest](../../Models/Operations/UpdateGenaiOrganizationRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateGenaiOrganizationResponse](../../Models/Operations/UpdateGenaiOrganizationResponse.md)**

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
        id: 'ea926275-c3e0-4dc2-a092-807c0cbf6066',
        metadata: [],
        name: 'Denesik - Lemke',
        updatedAt: Utils\Utils::parseDateTime('2023-08-22T16:31:13.373Z'),
        webUrl: 'https://turbulent-overheard.biz',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->organization->updateRepoOrganization(
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