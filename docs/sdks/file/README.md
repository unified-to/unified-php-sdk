# File

## Overview

### Available Operations

* [createStorageFile](#createstoragefile) - Create a file
* [getStorageFile](#getstoragefile) - Retrieve a file
* [listStorageFiles](#liststoragefiles) - List all files
* [patchStorageFile](#patchstoragefile) - Update a file
* [removeStorageFile](#removestoragefile) - Remove a file
* [updateStorageFile](#updatestoragefile) - Update a file

## createStorageFile

Create a file

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
        data: 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgYmFzZVByb2ZpbGU9ImZ1bGwiIHdpZHRoPSI4MzIiIGhlaWdodD0iMTg2MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iIzFmYzM1NSIvPjx0ZXh0IHg9IjQxNiIgeT0iOTMwLjUiIGZvbnQtc2l6ZT0iMjAiIGFsaWdubWVudC1iYXNlbGluZT0ibWlkZGxlIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSJ3aGl0ZSI+ODMyeDE4NjE8L3RleHQ+PC9zdmc+',
        description: 'Crastinus cupiditate debilito cimentarius virgo.',
        downloadUrl: 'https://stingy-casement.name/',
        hash: 'fe6a659e-75cd-4079-9b76-351f9af2205a',
        id: 'c81e663c-c858-4d34-80f2-08735319590e',
        mimeType: 'FOLDER',
        name: 'softly.tiff',
        references: [
            new Shared\StorageReference(
                id: 'ab705f3b-e368-4a94-8b22-d5f693c14a76',
                name: 'tamisium viduo odio cauda',
                type: 'accounting_bill',
            ),
            new Shared\StorageReference(
                id: '9f0f694e-b6f4-4c12-b5f6-ab08d4e81140',
                name: 'quia',
                type: 'accounting_expense',
            ),
        ],
        size: 10276,
        tags: [
            'spoliatio',
        ],
        type: Shared\StorageFileType::File,
        updatedAt: Utils\Utils::parseDateTime('2023-01-27T11:57:49.414Z'),
        version: '1',
        webUrl: 'https://sandy-distinction.info/',
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

## getStorageFile

Retrieve a file

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

## listStorageFiles

List all files

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

Update a file

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
        data: 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgYmFzZVByb2ZpbGU9ImZ1bGwiIHdpZHRoPSI4MzIiIGhlaWdodD0iMTg2MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iIzFmYzM1NSIvPjx0ZXh0IHg9IjQxNiIgeT0iOTMwLjUiIGZvbnQtc2l6ZT0iMjAiIGFsaWdubWVudC1iYXNlbGluZT0ibWlkZGxlIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSJ3aGl0ZSI+ODMyeDE4NjE8L3RleHQ+PC9zdmc+',
        description: 'Crastinus cupiditate debilito cimentarius virgo.',
        downloadUrl: 'https://stingy-casement.name/',
        hash: 'fe6a659e-75cd-4079-9b76-351f9af2205a',
        id: 'a7f0e432-9802-4aeb-b853-f52ac4b91e9d',
        mimeType: 'FOLDER',
        name: 'softly.tiff',
        references: [
            new Shared\StorageReference(
                id: 'ab705f3b-e368-4a94-8b22-d5f693c14a76',
                name: 'tamisium viduo odio cauda',
                type: 'accounting_bill',
            ),
            new Shared\StorageReference(
                id: '9f0f694e-b6f4-4c12-b5f6-ab08d4e81140',
                name: 'quia',
                type: 'accounting_expense',
            ),
        ],
        size: 10276,
        tags: [
            'spoliatio',
        ],
        type: Shared\StorageFileType::File,
        updatedAt: Utils\Utils::parseDateTime('2023-01-27T11:57:49.418Z'),
        version: '1',
        webUrl: 'https://sandy-distinction.info/',
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

Remove a file

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

Update a file

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
        data: 'data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZlcnNpb249IjEuMSIgYmFzZVByb2ZpbGU9ImZ1bGwiIHdpZHRoPSI4MzIiIGhlaWdodD0iMTg2MSI+PHJlY3Qgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgZmlsbD0iIzFmYzM1NSIvPjx0ZXh0IHg9IjQxNiIgeT0iOTMwLjUiIGZvbnQtc2l6ZT0iMjAiIGFsaWdubWVudC1iYXNlbGluZT0ibWlkZGxlIiB0ZXh0LWFuY2hvcj0ibWlkZGxlIiBmaWxsPSJ3aGl0ZSI+ODMyeDE4NjE8L3RleHQ+PC9zdmc+',
        description: 'Crastinus cupiditate debilito cimentarius virgo.',
        downloadUrl: 'https://stingy-casement.name/',
        hash: 'fe6a659e-75cd-4079-9b76-351f9af2205a',
        id: 'a7f0e432-9802-4aeb-b853-f52ac4b91e9d',
        mimeType: 'FOLDER',
        name: 'softly.tiff',
        references: [
            new Shared\StorageReference(
                id: 'ab705f3b-e368-4a94-8b22-d5f693c14a76',
                name: 'tamisium viduo odio cauda',
                type: 'accounting_bill',
            ),
            new Shared\StorageReference(
                id: '9f0f694e-b6f4-4c12-b5f6-ab08d4e81140',
                name: 'quia',
                type: 'accounting_expense',
            ),
        ],
        size: 10276,
        tags: [
            'spoliatio',
        ],
        type: Shared\StorageFileType::File,
        updatedAt: Utils\Utils::parseDateTime('2023-01-27T11:57:49.418Z'),
        version: '1',
        webUrl: 'https://sandy-distinction.info/',
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