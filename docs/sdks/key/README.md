# Key

## Overview

### Available Operations

* [createComputeKey](#createcomputekey) - Create a key
* [getComputeKey](#getcomputekey) - Retrieve a key
* [listComputeKeys](#listcomputekeys) - List all keys
* [patchComputeKey](#patchcomputekey) - Update a key
* [removeComputeKey](#removecomputekey) - Remove a key
* [updateComputeKey](#updatecomputekey) - Update a key

## createComputeKey

Creates a ComputeKey. Provide the unified ComputeKey fields in the request body; they are mapped to the provider's API. Returns the created ComputeKey.

### Example Usage

<!-- UsageSnippet language="php" operationID="createComputeKey" method="post" path="/compute/{connection_id}/key" example="compute_key" -->
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

$request = new Operations\CreateComputeKeyRequest(
    computeKey: new Shared\ComputeKey(
        createdAt: Utils\Utils::parseDateTime('2023-08-19T14:31:46.492Z'),
        id: '4ea2b0c3-ca2e-4661-b27d-02db2d96e011',
        metadata: [],
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-08T09:59:37.311Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->key->createComputeKey(
    request: $request
);

if ($response->computeKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateComputeKeyRequest](../../Models/Operations/CreateComputeKeyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateComputeKeyResponse](../../Models/Operations/CreateComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getComputeKey

Retrieves a single ComputeKey by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getComputeKey" method="get" path="/compute/{connection_id}/key/{id}" -->
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

$request = new Operations\GetComputeKeyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->key->getComputeKey(
    request: $request
);

if ($response->computeKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetComputeKeyRequest](../../Models/Operations/GetComputeKeyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetComputeKeyResponse](../../Models/Operations/GetComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listComputeKeys

Returns a list of ComputeKeys. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listComputeKeys" method="get" path="/compute/{connection_id}/key" -->
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

$request = new Operations\ListComputeKeysRequest(
    connectionId: '<id>',
);

$response = $sdk->key->listComputeKeys(
    request: $request
);

if ($response->computeKeys !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListComputeKeysRequest](../../Models/Operations/ListComputeKeysRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListComputeKeysResponse](../../Models/Operations/ListComputeKeysResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchComputeKey

Updates the ComputeKey identified by `id`. Provide the unified ComputeKey fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchComputeKey" method="patch" path="/compute/{connection_id}/key/{id}" example="compute_key" -->
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

$request = new Operations\PatchComputeKeyRequest(
    computeKey: new Shared\ComputeKey(
        createdAt: Utils\Utils::parseDateTime('2023-08-19T14:31:46.492Z'),
        id: '1c0e50b5-286b-4f1e-8988-1ece331f88a7',
        metadata: [],
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-08T09:59:37.317Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->key->patchComputeKey(
    request: $request
);

if ($response->computeKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchComputeKeyRequest](../../Models/Operations/PatchComputeKeyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchComputeKeyResponse](../../Models/Operations/PatchComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeComputeKey

Deletes the ComputeKey identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeComputeKey" method="delete" path="/compute/{connection_id}/key/{id}" -->
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

$request = new Operations\RemoveComputeKeyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->key->removeComputeKey(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveComputeKeyRequest](../../Models/Operations/RemoveComputeKeyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveComputeKeyResponse](../../Models/Operations/RemoveComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateComputeKey

Updates the ComputeKey identified by `id`. Provide the unified ComputeKey fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateComputeKey" method="put" path="/compute/{connection_id}/key/{id}" example="compute_key" -->
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

$request = new Operations\UpdateComputeKeyRequest(
    computeKey: new Shared\ComputeKey(
        createdAt: Utils\Utils::parseDateTime('2023-08-19T14:31:46.492Z'),
        id: '1c0e50b5-286b-4f1e-8988-1ece331f88a7',
        metadata: [],
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-08T09:59:37.317Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->key->updateComputeKey(
    request: $request
);

if ($response->computeKey !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateComputeKeyRequest](../../Models/Operations/UpdateComputeKeyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateComputeKeyResponse](../../Models/Operations/UpdateComputeKeyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |