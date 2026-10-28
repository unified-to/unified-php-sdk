# Domain

## Overview

### Available Operations

* [createComputeDomain](#createcomputedomain) - Create a domain
* [getComputeDomain](#getcomputedomain) - Retrieve a domain
* [listComputeDomains](#listcomputedomains) - List all domains
* [patchComputeDomain](#patchcomputedomain) - Update a domain
* [removeComputeDomain](#removecomputedomain) - Remove a domain
* [updateComputeDomain](#updatecomputedomain) - Update a domain

## createComputeDomain

Creates a ComputeDomain. Provide the unified ComputeDomain fields in the request body; they are mapped to the provider's API. Returns the created ComputeDomain.

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeDomain" method="post" path="/compute/{connection_id}/domain" example="compute_domain" -->
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

$request = new Operations\CreateComputeDomainRequest(
    computeDomain: new Shared\ComputeDomain(
        createdAt: Utils\Utils::parseDateTime('2019-11-22T16:38:26.009Z'),
        id: 'aa58f1c6-5426-4c3d-ae2f-1b22007709ec',
        isPrimary: false,
        metadata: [],
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-11-07T14:33:14.574Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->domain->createComputeDomain(
    request: $request
);

if ($response->computeDomain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateComputeDomainRequest](../../Models/Operations/CreateComputeDomainRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateComputeDomainResponse](../../Models/Operations/CreateComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeDomain

Retrieves a single ComputeDomain by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeDomain" method="get" path="/compute/{connection_id}/domain/{id}" -->
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

$request = new Operations\GetComputeDomainRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->domain->getComputeDomain(
    request: $request
);

if ($response->computeDomain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetComputeDomainRequest](../../Models/Operations/GetComputeDomainRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetComputeDomainResponse](../../Models/Operations/GetComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeDomains

Returns a list of ComputeDomains. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeDomains" method="get" path="/compute/{connection_id}/domain" -->
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

$request = new Operations\ListComputeDomainsRequest(
    connectionId: '<id>',
);

$response = $sdk->domain->listComputeDomains(
    request: $request
);

if ($response->computeDomains !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListComputeDomainsRequest](../../Models/Operations/ListComputeDomainsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListComputeDomainsResponse](../../Models/Operations/ListComputeDomainsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeDomain

Updates the ComputeDomain identified by `id`. Provide the unified ComputeDomain fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeDomain" method="patch" path="/compute/{connection_id}/domain/{id}" example="compute_domain" -->
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

$request = new Operations\PatchComputeDomainRequest(
    computeDomain: new Shared\ComputeDomain(
        createdAt: Utils\Utils::parseDateTime('2019-11-22T16:38:26.009Z'),
        id: 'adb7e1f9-92db-4da5-aea9-cbccbf7605cc',
        isPrimary: false,
        metadata: [],
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-11-07T14:33:14.580Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->domain->patchComputeDomain(
    request: $request
);

if ($response->computeDomain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchComputeDomainRequest](../../Models/Operations/PatchComputeDomainRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchComputeDomainResponse](../../Models/Operations/PatchComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeDomain

Deletes the ComputeDomain identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeDomain" method="delete" path="/compute/{connection_id}/domain/{id}" -->
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

$request = new Operations\RemoveComputeDomainRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->domain->removeComputeDomain(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveComputeDomainRequest](../../Models/Operations/RemoveComputeDomainRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveComputeDomainResponse](../../Models/Operations/RemoveComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeDomain

Updates the ComputeDomain identified by `id`. Provide the unified ComputeDomain fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeDomain" method="put" path="/compute/{connection_id}/domain/{id}" example="compute_domain" -->
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

$request = new Operations\UpdateComputeDomainRequest(
    computeDomain: new Shared\ComputeDomain(
        createdAt: Utils\Utils::parseDateTime('2019-11-22T16:38:26.009Z'),
        id: 'adb7e1f9-92db-4da5-aea9-cbccbf7605cc',
        isPrimary: false,
        metadata: [],
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-11-07T14:33:14.580Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->domain->updateComputeDomain(
    request: $request
);

if ($response->computeDomain !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateComputeDomainRequest](../../Models/Operations/UpdateComputeDomainRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateComputeDomainResponse](../../Models/Operations/UpdateComputeDomainResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |