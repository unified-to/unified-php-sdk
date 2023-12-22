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
    $request->storageFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-26T17:57:07.851Z');
    $request->storageFile->description = 'Digitized systematic Graphic Interface';
    $request->storageFile->downloadUrl = 'string';
    $request->storageFile->id = '<ID>';
    $request->storageFile->mimeType = 'string';
    $request->storageFile->name = 'string';
    $request->storageFile->parentId = 'string';
    $request->storageFile->permissions = [
        new Shared\StoragePermission(),
    ];
    $request->storageFile->raw = new Shared\PropertyStorageFileRaw();
    $request->storageFile->size = 9689.19;
    $request->storageFile->type = Shared\StorageFileType::File;
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-14T23:35:47.246Z');
    $request->storageFile->userId = 'string';
    $request->connectionId = 'string';;

    $response = $sdk->storage->createStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Exception $e) {
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
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->storage->getStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Exception $e) {
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
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 1047.26;
    $request->offset = 7962.22;
    $request->order = 'string';
    $request->parentId = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-28T04:00:20.237Z');;

    $response = $sdk->storage->listStorageFiles($request);

    if ($response->storageFiles !== null) {
        // handle response
    }
} catch (Exception $e) {
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
    $request->storageFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-01T12:30:10.419Z');
    $request->storageFile->description = 'Customer-focused mission-critical monitoring';
    $request->storageFile->downloadUrl = 'string';
    $request->storageFile->id = '<ID>';
    $request->storageFile->mimeType = 'string';
    $request->storageFile->name = 'string';
    $request->storageFile->parentId = 'string';
    $request->storageFile->permissions = [
        new Shared\StoragePermission(),
    ];
    $request->storageFile->raw = new Shared\PropertyStorageFileRaw();
    $request->storageFile->size = 1796.14;
    $request->storageFile->type = Shared\StorageFileType::File;
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-04T17:41:59.856Z');
    $request->storageFile->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->storage->patchStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Exception $e) {
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
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->storage->removeStorageFile($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
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
    $request->storageFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-06T20:12:23.700Z');
    $request->storageFile->description = 'Polarised intangible architecture';
    $request->storageFile->downloadUrl = 'string';
    $request->storageFile->id = '<ID>';
    $request->storageFile->mimeType = 'string';
    $request->storageFile->name = 'string';
    $request->storageFile->parentId = 'string';
    $request->storageFile->permissions = [
        new Shared\StoragePermission(),
    ];
    $request->storageFile->raw = new Shared\PropertyStorageFileRaw();
    $request->storageFile->size = 7112.02;
    $request->storageFile->type = Shared\StorageFileType::Folder;
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-24T23:09:33.600Z');
    $request->storageFile->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->storage->updateStorageFile($request);

    if ($response->storageFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdateStorageFileRequest](../../Models/Operations/UpdateStorageFileRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateStorageFileResponse](../../Models/Operations/UpdateStorageFileResponse.md)**

