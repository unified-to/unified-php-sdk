# Storage

## Overview

### Available Operations

* [createStorageFile](#createstoragefile) - Create a file
* [getStorageFile](#getstoragefile) - Retrieve a file
* [listStorageFiles](#liststoragefiles) - List all files
* [patchStorageFile](#patchstoragefile) - Update a file
* [removeStorageFile](#removestoragefile) - Remove a file
* [updateStorageFile](#updatestoragefile) - Update a file

## createStorageFile

Creates a StorageFile. Provide the unified StorageFile fields in the request body; they are mapped to the provider's API. Returns the created StorageFile.

### Example Usage

<!-- UsageSnippet language="php" operationID="createStorageFile" method="post" path="/storage/{connection_id}/file" example="storage_file" -->
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

$request = new Operations\CreateStorageFileRequest(
    storageFile: new Shared\StorageFile(
        createdAt: Utils\Utils::parseDateTime('2021-09-12T16:48:23.774Z'),
        description: 'Deprimo crastinus cupiditate debilito cimentarius virgo acidus.',
        downloadUrl: 'https://clueless-laughter.biz',
        hash: 'd9d88dda7bc0acaa8472fdef2307f94a1fc355ce',
        id: 'c6e5873f-6267-4098-a8bf-09c7643278cf',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'softly.pdf',
        size: 1134456,
        tags: [
            'suasoria',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-08T06:05:23.506Z'),
        version: '1',
        webUrl: 'https://faraway-inspection.org',
    ),
    connectionId: '<id>',
);

$response = $sdk->storage->createStorageFile(
    request: $request
);

if ($response->storageFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateStorageFileRequest](../../Models/Operations/CreateStorageFileRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateStorageFileResponse](../../Models/Operations/CreateStorageFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getStorageFile

Retrieves a single StorageFile by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getStorageFile" method="get" path="/storage/{connection_id}/file/{id}" -->
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

$request = new Operations\GetStorageFileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->storage->getStorageFile(
    request: $request
);

if ($response->storageFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetStorageFileRequest](../../Models/Operations/GetStorageFileRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetStorageFileResponse](../../Models/Operations/GetStorageFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listStorageFiles

Returns a list of StorageFiles. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listStorageFiles" method="get" path="/storage/{connection_id}/file" -->
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

$request = new Operations\ListStorageFilesRequest(
    connectionId: '<id>',
);

$response = $sdk->storage->listStorageFiles(
    request: $request
);

if ($response->storageFiles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListStorageFilesRequest](../../Models/Operations/ListStorageFilesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListStorageFilesResponse](../../Models/Operations/ListStorageFilesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchStorageFile

Updates the StorageFile identified by `id`. Provide the unified StorageFile fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchStorageFile" method="patch" path="/storage/{connection_id}/file/{id}" example="storage_file" -->
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

$request = new Operations\PatchStorageFileRequest(
    storageFile: new Shared\StorageFile(
        createdAt: Utils\Utils::parseDateTime('2021-09-12T16:48:23.774Z'),
        description: 'Deprimo crastinus cupiditate debilito cimentarius virgo acidus.',
        downloadUrl: 'https://clueless-laughter.biz',
        hash: 'd9d88dda7bc0acaa8472fdef2307f94a1fc355ce',
        id: '4d1942a9-5a37-48cf-9eb1-10e1a84bd0f6',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'softly.pdf',
        size: 1134456,
        tags: [
            'suasoria',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-08T06:05:23.512Z'),
        version: '1',
        webUrl: 'https://faraway-inspection.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->storage->patchStorageFile(
    request: $request
);

if ($response->storageFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchStorageFileRequest](../../Models/Operations/PatchStorageFileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchStorageFileResponse](../../Models/Operations/PatchStorageFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeStorageFile

Deletes the StorageFile identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeStorageFile" method="delete" path="/storage/{connection_id}/file/{id}" -->
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

$request = new Operations\RemoveStorageFileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->storage->removeStorageFile(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveStorageFileRequest](../../Models/Operations/RemoveStorageFileRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveStorageFileResponse](../../Models/Operations/RemoveStorageFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateStorageFile

Updates the StorageFile identified by `id`. Provide the unified StorageFile fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateStorageFile" method="put" path="/storage/{connection_id}/file/{id}" example="storage_file" -->
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

$request = new Operations\UpdateStorageFileRequest(
    storageFile: new Shared\StorageFile(
        createdAt: Utils\Utils::parseDateTime('2021-09-12T16:48:23.774Z'),
        description: 'Deprimo crastinus cupiditate debilito cimentarius virgo acidus.',
        downloadUrl: 'https://clueless-laughter.biz',
        hash: 'd9d88dda7bc0acaa8472fdef2307f94a1fc355ce',
        id: '4d1942a9-5a37-48cf-9eb1-10e1a84bd0f6',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'softly.pdf',
        size: 1134456,
        tags: [
            'suasoria',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-08T06:05:23.512Z'),
        version: '1',
        webUrl: 'https://faraway-inspection.org',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->storage->updateStorageFile(
    request: $request
);

if ($response->storageFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateStorageFileRequest](../../Models/Operations/UpdateStorageFileRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateStorageFileResponse](../../Models/Operations/UpdateStorageFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |