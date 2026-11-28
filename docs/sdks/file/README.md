# File

## Overview

### Available Operations

* [createPrintingFile](#createprintingfile) - Create a file
* [createStorageFile](#createstoragefile) - Create a file
* [getPrintingFile](#getprintingfile) - Retrieve a file
* [getStorageFile](#getstoragefile) - Retrieve a file
* [listPrintingFiles](#listprintingfiles) - List all files
* [listStorageFiles](#liststoragefiles) - List all files
* [patchStorageFile](#patchstoragefile) - Update a file
* [removeStorageFile](#removestoragefile) - Remove a file
* [updateStorageFile](#updatestoragefile) - Update a file

## createPrintingFile

Creates a PrintingFile. Provide the unified PrintingFile fields in the request body; they are mapped to the provider's API. Returns the created PrintingFile.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPrintingFile" method="post" path="/printing/{connection_id}/file" example="printing_file" -->
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

$request = new Operations\CreatePrintingFileRequest(
    printingFile: new Shared\PrintingFile(
        createdAt: Utils\Utils::parseDateTime('2020-10-22T04:25:39.825Z'),
        dpi: 300,
        height: 5400,
        id: '28bb18b3-27f2-4169-8fa9-0c7a699191ea',
        metadata: [],
        mimeType: 'image/jpeg',
        name: 'blond-ecliptic.jpg',
        previewUrl: 'https://picsum.photos/seed/aATvhmNA/400/400',
        size: 1956654,
        status: Shared\PrintingFileStatus::Ready,
        updatedAt: Utils\Utils::parseDateTime('2020-10-22T04:25:39.825Z'),
        url: 'https://picsum.photos/seed/XBj97B/2783/172',
        width: 4500,
    ),
    connectionId: '<id>',
);

$response = $sdk->file->createPrintingFile(
    request: $request
);

if ($response->printingFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreatePrintingFileRequest](../../Models/Operations/CreatePrintingFileRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreatePrintingFileResponse](../../Models/Operations/CreatePrintingFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
        description: 'Debilito cimentarius virgo acidus thymbra.',
        downloadUrl: 'https://messy-clamp.net/',
        hash: '9d88dda7bc0acaa8472fdef2307f94a1fc355cef',
        id: '45a63bd7-0a95-4139-a301-3fe26b1c6841',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'joshingly.pdf',
        size: 1134456,
        tags: [
            'derelinquo',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-15T22:57:41.454Z'),
        version: '1',
        webUrl: 'https://likable-widow.org/',
    ),
    connectionId: '<id>',
);

$response = $sdk->file->createStorageFile(
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

## getPrintingFile

Retrieves a single PrintingFile by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPrintingFile" method="get" path="/printing/{connection_id}/file/{id}" -->
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

$request = new Operations\GetPrintingFileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->file->getPrintingFile(
    request: $request
);

if ($response->printingFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetPrintingFileRequest](../../Models/Operations/GetPrintingFileRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetPrintingFileResponse](../../Models/Operations/GetPrintingFileResponse.md)**

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

$response = $sdk->file->getStorageFile(
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

## listPrintingFiles

Returns a list of PrintingFiles. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPrintingFiles" method="get" path="/printing/{connection_id}/file" -->
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

$request = new Operations\ListPrintingFilesRequest(
    connectionId: '<id>',
);

$response = $sdk->file->listPrintingFiles(
    request: $request
);

if ($response->printingFiles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListPrintingFilesRequest](../../Models/Operations/ListPrintingFilesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListPrintingFilesResponse](../../Models/Operations/ListPrintingFilesResponse.md)**

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

$response = $sdk->file->listStorageFiles(
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
        description: 'Debilito cimentarius virgo acidus thymbra.',
        downloadUrl: 'https://messy-clamp.net/',
        hash: '9d88dda7bc0acaa8472fdef2307f94a1fc355cef',
        id: 'd8924902-e825-42bd-8ef9-2bdf5576ce9c',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'joshingly.pdf',
        size: 1134456,
        tags: [
            'derelinquo',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-15T22:57:41.457Z'),
        version: '1',
        webUrl: 'https://likable-widow.org/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->file->patchStorageFile(
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

$response = $sdk->file->removeStorageFile(
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
        description: 'Debilito cimentarius virgo acidus thymbra.',
        downloadUrl: 'https://messy-clamp.net/',
        hash: '9d88dda7bc0acaa8472fdef2307f94a1fc355cef',
        id: 'd8924902-e825-42bd-8ef9-2bdf5576ce9c',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'joshingly.pdf',
        size: 1134456,
        tags: [
            'derelinquo',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-15T22:57:41.457Z'),
        version: '1',
        webUrl: 'https://likable-widow.org/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->file->updateStorageFile(
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