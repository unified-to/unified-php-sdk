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

Create a key

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
        id: '977174a8-c98f-485b-9ddc-93c9cf7b73fa',
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-03T23:49:59.690Z'),
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

Retrieve a key

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

List all keys

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

Update a key

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
        id: '03ca34ff-e34f-47cf-8fcc-43ebd4e5433b',
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-03T23:49:59.693Z'),
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

Remove a key

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

Update a key

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
        id: '03ca34ff-e34f-47cf-8fcc-43ebd4e5433b',
        name: 'nienow-secret',
        type: Shared\ComputeKeyType::Secret,
        updatedAt: Utils\Utils::parseDateTime('2024-10-03T23:49:59.693Z'),
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