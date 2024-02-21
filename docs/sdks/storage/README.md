# Storage


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
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateStorageFileRequest();
    $request->storageFile = new Shared\StorageFile();
    $request->storageFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-26T17:10:46.324Z');
    $request->storageFile->description = 'Digitized systematic Graphic Interface';
    $request->storageFile->downloadUrl = '<value>';
    $request->storageFile->hash = '<value>';
    $request->storageFile->id = '<id>';
    $request->storageFile->mimeType = '<value>';
    $request->storageFile->name = '<value>';
    $request->storageFile->parentId = '<value>';
    $request->storageFile->permissions = [
        new Shared\StoragePermission(),
    ];
    $request->storageFile->raw = [
        'astride' => '<value>',
    ];
    $request->storageFile->size = 3999.85;
    $request->storageFile->type = Shared\StorageFileType::Folder;
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-07T14:24:08.441Z');
    $request->storageFile->userId = '<value>';
    $request->connectionId = '<value>';;

    $response = $sdk->storage->createStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreateStorageFileRequest](../../Models/Operations/CreateStorageFileRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateStorageFileResponse](../../Models/Operations/CreateStorageFileResponse.md)**


## getStorageFile

Retrieve a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetStorageFileRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->storage->getStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetStorageFileRequest](../../Models/Operations/GetStorageFileRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetStorageFileResponse](../../Models/Operations/GetStorageFileResponse.md)**


## listStorageFiles

List all files

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListStorageFilesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 1047.26;
    $request->offset = 7962.22;
    $request->order = '<value>';
    $request->parentId = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-28T04:36:03.817Z');;

    $response = $sdk->storage->listStorageFiles($request);

    if ($response->storageFiles !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListStorageFilesRequest](../../Models/Operations/ListStorageFilesRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListStorageFilesResponse](../../Models/Operations/ListStorageFilesResponse.md)**


## patchStorageFile

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchStorageFileRequest();
    $request->storageFile = new Shared\StorageFile();
    $request->storageFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-01T13:48:26.867Z');
    $request->storageFile->description = 'Customer-focused mission-critical monitoring';
    $request->storageFile->downloadUrl = '<value>';
    $request->storageFile->hash = '<value>';
    $request->storageFile->id = '<id>';
    $request->storageFile->mimeType = '<value>';
    $request->storageFile->name = '<value>';
    $request->storageFile->parentId = '<value>';
    $request->storageFile->permissions = [
        new Shared\StoragePermission(),
    ];
    $request->storageFile->raw = [
        'green' => '<value>',
    ];
    $request->storageFile->size = 2253.31;
    $request->storageFile->type = Shared\StorageFileType::File;
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-03T15:19:05.454Z');
    $request->storageFile->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->storage->patchStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchStorageFileRequest](../../Models/Operations/PatchStorageFileRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchStorageFileResponse](../../Models/Operations/PatchStorageFileResponse.md)**


## removeStorageFile

Remove a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveStorageFileRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->storage->removeStorageFile($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemoveStorageFileRequest](../../Models/Operations/RemoveStorageFileRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveStorageFileResponse](../../Models/Operations/RemoveStorageFileResponse.md)**


## updateStorageFile

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateStorageFileRequest();
    $request->storageFile = new Shared\StorageFile();
    $request->storageFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-06T15:38:39.174Z');
    $request->storageFile->description = 'Polarised intangible architecture';
    $request->storageFile->downloadUrl = '<value>';
    $request->storageFile->hash = '<value>';
    $request->storageFile->id = '<id>';
    $request->storageFile->mimeType = '<value>';
    $request->storageFile->name = '<value>';
    $request->storageFile->parentId = '<value>';
    $request->storageFile->permissions = [
        new Shared\StoragePermission(),
    ];
    $request->storageFile->raw = [
        'male' => '<value>',
    ];
    $request->storageFile->size = 4091;
    $request->storageFile->type = Shared\StorageFileType::Folder;
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-25T21:16:43.994Z');
    $request->storageFile->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->storage->updateStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateStorageFileRequest](../../Models/Operations/UpdateStorageFileRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateStorageFileResponse](../../Models/Operations/UpdateStorageFileResponse.md)**

