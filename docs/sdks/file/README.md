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

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateStorageFileRequest(
        connectionId: '<value>',
        storageFile: new Shared\StorageFile(
            createdAt: Utils\Utils::parseDateTime('2024-11-26T17:10:46.324Z'),
            description: 'Digitized systematic Graphic Interface',
            downloadUrl: '<value>',
            hash: '<value>',
            id: '<id>',
            mimeType: '<value>',
            name: '<value>',
            parentId: '<value>',
            permissions: [
                new Shared\StoragePermission,
            ],
            raw: [
                'astride' => '<value>',
            ],
            size: 3999.85,
            type: Shared\StorageFileType::Folder,
            updatedAt: Utils\Utils::parseDateTime('2024-03-07T14:24:08.441Z'),
            userId: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->file->createStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateStorageFileRequest](../../Models/Operations/CreateStorageFileRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateStorageFileResponse](../../Models/Operations/CreateStorageFileResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getStorageFile

Retrieve a file

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetStorageFileRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->file->getStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetStorageFileRequest](../../Models/Operations/GetStorageFileRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetStorageFileResponse](../../Models/Operations/GetStorageFileResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listStorageFiles

List all files

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListStorageFilesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 1047.26,
        offset: 7962.22,
        order: '<value>',
        parentId: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-01-28T04:36:03.817Z'),
    );
    $response = $sdk->file->listStorageFiles($request);

    if ($response->storageFiles !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListStorageFilesRequest](../../Models/Operations/ListStorageFilesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListStorageFilesResponse](../../Models/Operations/ListStorageFilesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchStorageFile

Update a file

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchStorageFileRequest(
        connectionId: '<value>',
        id: '<id>',
        storageFile: new Shared\StorageFile(
            createdAt: Utils\Utils::parseDateTime('2022-03-01T13:48:26.867Z'),
            description: 'Customer-focused mission-critical monitoring',
            downloadUrl: '<value>',
            hash: '<value>',
            id: '<id>',
            mimeType: '<value>',
            name: '<value>',
            parentId: '<value>',
            permissions: [
                new Shared\StoragePermission,
            ],
            raw: [
                'green' => '<value>',
            ],
            size: 2253.31,
            type: Shared\StorageFileType::File,
            updatedAt: Utils\Utils::parseDateTime('2023-11-03T15:19:05.454Z'),
            userId: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->file->patchStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchStorageFileRequest](../../Models/Operations/PatchStorageFileRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchStorageFileResponse](../../Models/Operations/PatchStorageFileResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeStorageFile

Remove a file

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveStorageFileRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->file->removeStorageFile($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveStorageFileRequest](../../Models/Operations/RemoveStorageFileRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveStorageFileResponse](../../Models/Operations/RemoveStorageFileResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateStorageFile

Update a file

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateStorageFileRequest(
        connectionId: '<value>',
        id: '<id>',
        storageFile: new Shared\StorageFile(
            createdAt: Utils\Utils::parseDateTime('2024-06-06T15:38:39.174Z'),
            description: 'Polarised intangible architecture',
            downloadUrl: '<value>',
            hash: '<value>',
            id: '<id>',
            mimeType: '<value>',
            name: '<value>',
            parentId: '<value>',
            permissions: [
                new Shared\StoragePermission,
            ],
            raw: [
                'male' => '<value>',
            ],
            size: 4091,
            type: Shared\StorageFileType::Folder,
            updatedAt: Utils\Utils::parseDateTime('2022-06-25T21:16:43.994Z'),
            userId: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->file->updateStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateStorageFileRequest](../../Models/Operations/UpdateStorageFileRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateStorageFileResponse](../../Models/Operations/UpdateStorageFileResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
