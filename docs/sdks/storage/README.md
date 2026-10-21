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
        description: 'Deprimo crastinus cupiditate debilito cimentarius virgo acidus.',
        downloadUrl: 'https://clueless-laughter.biz',
        hash: 'd9d88dda7bc0acaa8472fdef2307f94a1fc355ce',
        id: '5a3b2522-ba9a-4fc0-b63a-50257b278c9b',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'softly.pdf',
        size: 1134456,
        tags: [
            'suasoria',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-05T13:00:18.919Z'),
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
        description: 'Deprimo crastinus cupiditate debilito cimentarius virgo acidus.',
        downloadUrl: 'https://clueless-laughter.biz',
        hash: 'd9d88dda7bc0acaa8472fdef2307f94a1fc355ce',
        id: '78dc5fa1-2bf0-4000-a4ed-49fb5198ac5e',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'softly.pdf',
        size: 1134456,
        tags: [
            'suasoria',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-05T13:00:18.925Z'),
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
        description: 'Deprimo crastinus cupiditate debilito cimentarius virgo acidus.',
        downloadUrl: 'https://clueless-laughter.biz',
        hash: 'd9d88dda7bc0acaa8472fdef2307f94a1fc355ce',
        id: '78dc5fa1-2bf0-4000-a4ed-49fb5198ac5e',
        metadata: [],
        mimeType: 'application/pdf',
        name: 'softly.pdf',
        size: 1134456,
        tags: [
            'suasoria',
        ],
        type: Shared\StorageFileType::Folder,
        updatedAt: Utils\Utils::parseDateTime('2023-02-05T13:00:18.925Z'),
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