# Envvar

## Overview

### Available Operations

* [createComputeEnvvar](#createcomputeenvvar) - Create an envvar
* [getComputeEnvvar](#getcomputeenvvar) - Retrieve an envvar
* [listComputeEnvvars](#listcomputeenvvars) - List all envvars
* [patchComputeEnvvar](#patchcomputeenvvar) - Update an envvar
* [removeComputeEnvvar](#removecomputeenvvar) - Remove an envvar
* [updateComputeEnvvar](#updatecomputeenvvar) - Update an envvar

## createComputeEnvvar

Create an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeEnvvar" method="post" path="/compute/{connection_id}/envvar" example="compute_envvar" -->
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

$request = new Operations\CreateComputeEnvvarRequest(
    computeEnvvar: new Shared\ComputeEnvvar(
        createdAt: Utils\Utils::parseDateTime('2021-08-16T07:52:27.306Z'),
        environments: [
            Shared\PropertyComputeEnvvarEnvironments::Preview,
        ],
        id: '997c4209-5511-4ae8-9a5b-fdad7d59d54b',
        isSecret: true,
        name: 'AEGER_SUBSTANTIA',
        updatedAt: Utils\Utils::parseDateTime('2025-06-28T09:07:32.035Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->envvar->createComputeEnvvar(
    request: $request
);

if ($response->computeEnvvar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateComputeEnvvarRequest](../../Models/Operations/CreateComputeEnvvarRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateComputeEnvvarResponse](../../Models/Operations/CreateComputeEnvvarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeEnvvar

Retrieve an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeEnvvar" method="get" path="/compute/{connection_id}/envvar/{id}" -->
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

$request = new Operations\GetComputeEnvvarRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->envvar->getComputeEnvvar(
    request: $request
);

if ($response->computeEnvvar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetComputeEnvvarRequest](../../Models/Operations/GetComputeEnvvarRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetComputeEnvvarResponse](../../Models/Operations/GetComputeEnvvarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeEnvvars

List all envvars

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeEnvvars" method="get" path="/compute/{connection_id}/envvar" -->
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

$request = new Operations\ListComputeEnvvarsRequest(
    connectionId: '<id>',
);

$response = $sdk->envvar->listComputeEnvvars(
    request: $request
);

if ($response->computeEnvvars !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListComputeEnvvarsRequest](../../Models/Operations/ListComputeEnvvarsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListComputeEnvvarsResponse](../../Models/Operations/ListComputeEnvvarsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeEnvvar

Update an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeEnvvar" method="patch" path="/compute/{connection_id}/envvar/{id}" example="compute_envvar" -->
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

$request = new Operations\PatchComputeEnvvarRequest(
    computeEnvvar: new Shared\ComputeEnvvar(
        createdAt: Utils\Utils::parseDateTime('2021-08-16T07:52:27.306Z'),
        environments: [
            Shared\PropertyComputeEnvvarEnvironments::Preview,
        ],
        id: '7370f103-3b5e-4320-b0b4-e6ded5eab947',
        isSecret: true,
        name: 'AEGER_SUBSTANTIA',
        updatedAt: Utils\Utils::parseDateTime('2025-06-28T09:07:32.039Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->envvar->patchComputeEnvvar(
    request: $request
);

if ($response->computeEnvvar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchComputeEnvvarRequest](../../Models/Operations/PatchComputeEnvvarRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchComputeEnvvarResponse](../../Models/Operations/PatchComputeEnvvarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeEnvvar

Remove an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeEnvvar" method="delete" path="/compute/{connection_id}/envvar/{id}" -->
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

$request = new Operations\RemoveComputeEnvvarRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->envvar->removeComputeEnvvar(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveComputeEnvvarRequest](../../Models/Operations/RemoveComputeEnvvarRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveComputeEnvvarResponse](../../Models/Operations/RemoveComputeEnvvarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeEnvvar

Update an envvar

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeEnvvar" method="put" path="/compute/{connection_id}/envvar/{id}" example="compute_envvar" -->
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

$request = new Operations\UpdateComputeEnvvarRequest(
    computeEnvvar: new Shared\ComputeEnvvar(
        createdAt: Utils\Utils::parseDateTime('2021-08-16T07:52:27.306Z'),
        environments: [
            Shared\PropertyComputeEnvvarEnvironments::Preview,
        ],
        id: '7370f103-3b5e-4320-b0b4-e6ded5eab947',
        isSecret: true,
        name: 'AEGER_SUBSTANTIA',
        updatedAt: Utils\Utils::parseDateTime('2025-06-28T09:07:32.039Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->envvar->updateComputeEnvvar(
    request: $request
);

if ($response->computeEnvvar !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateComputeEnvvarRequest](../../Models/Operations/UpdateComputeEnvvarRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateComputeEnvvarResponse](../../Models/Operations/UpdateComputeEnvvarResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |