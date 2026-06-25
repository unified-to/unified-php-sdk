# File

## Overview

### Available Operations

* [createStorageFile2](#createstoragefile2) - Create a file
* [getStorageFile2](#getstoragefile2) - Retrieve a file
* [listStorageFiles2](#liststoragefiles2) - List all files
* [patchStorageFile2](#patchstoragefile2) - Update a file
* [removeStorageFile2](#removestoragefile2) - Remove a file
* [updateStorageFile2](#updatestoragefile2) - Update a file

## createStorageFile2

Create a file

### Example Usage

<!-- UsageSnippet language="php" operationID="createStorageFile2" method="post" path="/storage/{connection_id}/file" -->
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

$request = new Operations\CreateStorageFile2Request(
    storageFile: new Shared\StorageFile(),
    connectionId: '<id>',
);

$response = $sdk->file->createStorageFile2(
    request: $request
);

if ($response->storageFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateStorageFile2Request](../../Models/Operations/CreateStorageFile2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateStorageFile2Response](../../Models/Operations/CreateStorageFile2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getStorageFile2

Retrieve a file

### Example Usage

<!-- UsageSnippet language="php" operationID="getStorageFile2" method="get" path="/storage/{connection_id}/file/{id}" -->
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

$request = new Operations\GetStorageFile2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->file->getStorageFile2(
    request: $request
);

if ($response->storageFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetStorageFile2Request](../../Models/Operations/GetStorageFile2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetStorageFile2Response](../../Models/Operations/GetStorageFile2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listStorageFiles2

List all files

### Example Usage

<!-- UsageSnippet language="php" operationID="listStorageFiles2" method="get" path="/storage/{connection_id}/file" -->
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

$request = new Operations\ListStorageFiles2Request(
    connectionId: '<id>',
);

$response = $sdk->file->listStorageFiles2(
    request: $request
);

if ($response->storageFiles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListStorageFiles2Request](../../Models/Operations/ListStorageFiles2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListStorageFiles2Response](../../Models/Operations/ListStorageFiles2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchStorageFile2

Update a file

### Example Usage

<!-- UsageSnippet language="php" operationID="patchStorageFile2" method="patch" path="/storage/{connection_id}/file/{id}" -->
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

$request = new Operations\PatchStorageFile2Request(
    storageFile: new Shared\StorageFile(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->file->patchStorageFile2(
    request: $request
);

if ($response->storageFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchStorageFile2Request](../../Models/Operations/PatchStorageFile2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchStorageFile2Response](../../Models/Operations/PatchStorageFile2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeStorageFile2

Remove a file

### Example Usage

<!-- UsageSnippet language="php" operationID="removeStorageFile2" method="delete" path="/storage/{connection_id}/file/{id}" -->
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

$request = new Operations\RemoveStorageFile2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->file->removeStorageFile2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveStorageFile2Request](../../Models/Operations/RemoveStorageFile2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveStorageFile2Response](../../Models/Operations/RemoveStorageFile2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateStorageFile2

Update a file

### Example Usage

<!-- UsageSnippet language="php" operationID="updateStorageFile2" method="put" path="/storage/{connection_id}/file/{id}" -->
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

$request = new Operations\UpdateStorageFile2Request(
    storageFile: new Shared\StorageFile(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->file->updateStorageFile2(
    request: $request
);

if ($response->storageFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateStorageFile2Request](../../Models/Operations/UpdateStorageFile2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateStorageFile2Response](../../Models/Operations/UpdateStorageFile2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |