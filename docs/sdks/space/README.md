# Space

## Overview

### Available Operations

* [createKmsSpace](#createkmsspace) - Create a space
* [getKmsSpace](#getkmsspace) - Retrieve a space
* [listKmsSpaces](#listkmsspaces) - List all spaces
* [patchKmsSpace](#patchkmsspace) - Update a space
* [removeKmsSpace](#removekmsspace) - Remove a space
* [updateKmsSpace](#updatekmsspace) - Update a space

## createKmsSpace

Creates a KmsSpace. Provide the unified KmsSpace fields in the request body; they are mapped to the provider's API. Returns the created KmsSpace.

### Example Usage

<!-- UsageSnippet language="php" operationID="createKmsSpace" method="post" path="/kms/{connection_id}/space" example="kms_space" -->
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

$request = new Operations\CreateKmsSpaceRequest(
    kmsSpace: new Shared\KmsSpace(
        createdAt: Utils\Utils::parseDateTime('2022-10-31T00:56:54.246Z'),
        description: 'Acer.',
        id: 'ce93ec1c-bdd9-4e3b-861d-cfa8a6d6ec74',
        isActive: false,
        metadata: [],
        name: 'into nor afore',
        updatedAt: Utils\Utils::parseDateTime('2026-01-02T04:02:26.020Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->space->createKmsSpace(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\CreateKmsSpaceRequest](../../Models/Operations/CreateKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\CreateKmsSpaceResponse](../../Models/Operations/CreateKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getKmsSpace

Retrieves a single KmsSpace by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getKmsSpace" method="get" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\GetKmsSpaceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->space->getKmsSpace(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\GetKmsSpaceRequest](../../Models/Operations/GetKmsSpaceRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\GetKmsSpaceResponse](../../Models/Operations/GetKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listKmsSpaces

Returns a list of KmsSpaces. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listKmsSpaces" method="get" path="/kms/{connection_id}/space" -->
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

$request = new Operations\ListKmsSpacesRequest(
    connectionId: '<id>',
);

$response = $sdk->space->listKmsSpaces(
    request: $request
);

if ($response->kmsSpaces !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\ListKmsSpacesRequest](../../Models/Operations/ListKmsSpacesRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\ListKmsSpacesResponse](../../Models/Operations/ListKmsSpacesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchKmsSpace

Updates the KmsSpace identified by `id`. Provide the unified KmsSpace fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchKmsSpace" method="patch" path="/kms/{connection_id}/space/{id}" example="kms_space" -->
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

$request = new Operations\PatchKmsSpaceRequest(
    kmsSpace: new Shared\KmsSpace(
        createdAt: Utils\Utils::parseDateTime('2022-10-31T00:56:54.246Z'),
        description: 'Acer.',
        id: 'a3d71015-58fd-4af3-83a2-88e61315db80',
        isActive: false,
        metadata: [],
        name: 'into nor afore',
        updatedAt: Utils\Utils::parseDateTime('2026-01-02T04:02:26.028Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->space->patchKmsSpace(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\PatchKmsSpaceRequest](../../Models/Operations/PatchKmsSpaceRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\PatchKmsSpaceResponse](../../Models/Operations/PatchKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeKmsSpace

Deletes the KmsSpace identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeKmsSpace" method="delete" path="/kms/{connection_id}/space/{id}" -->
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

$request = new Operations\RemoveKmsSpaceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->space->removeKmsSpace(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\RemoveKmsSpaceRequest](../../Models/Operations/RemoveKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\RemoveKmsSpaceResponse](../../Models/Operations/RemoveKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateKmsSpace

Updates the KmsSpace identified by `id`. Provide the unified KmsSpace fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateKmsSpace" method="put" path="/kms/{connection_id}/space/{id}" example="kms_space" -->
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

$request = new Operations\UpdateKmsSpaceRequest(
    kmsSpace: new Shared\KmsSpace(
        createdAt: Utils\Utils::parseDateTime('2022-10-31T00:56:54.246Z'),
        description: 'Acer.',
        id: 'a3d71015-58fd-4af3-83a2-88e61315db80',
        isActive: false,
        metadata: [],
        name: 'into nor afore',
        updatedAt: Utils\Utils::parseDateTime('2026-01-02T04:02:26.028Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->space->updateKmsSpace(
    request: $request
);

if ($response->kmsSpace !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\UpdateKmsSpaceRequest](../../Models/Operations/UpdateKmsSpaceRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\UpdateKmsSpaceResponse](../../Models/Operations/UpdateKmsSpaceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |