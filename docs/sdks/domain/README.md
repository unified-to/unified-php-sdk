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

Create a domain

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
        id: 'b1ae8d84-1d38-42dc-aafb-0ea6aa85ccd3',
        isPrimary: false,
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-10-29T10:14:56.120Z'),
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

Retrieve a domain

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

List all domains

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

Update a domain

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
        id: 'fbaec0e3-8e94-4db3-ab98-c6664b4aa37f',
        isPrimary: false,
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-10-29T10:14:56.122Z'),
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

Remove a domain

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

Update a domain

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
        id: 'fbaec0e3-8e94-4db3-ab98-c6664b4aa37f',
        isPrimary: false,
        name: 'mysterious-republican.usable-section.info',
        status: Shared\ComputeDomainStatus::Pending,
        updatedAt: Utils\Utils::parseDateTime('2023-10-29T10:14:56.122Z'),
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