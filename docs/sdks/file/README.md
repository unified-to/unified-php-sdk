# File


### Available Operations

* [createCrmFile](#createcrmfile) - Create a file
* [createStorageFile](#createstoragefile) - Create a file
* [getCrmFile](#getcrmfile) - Retrieve a file
* [getStorageFile](#getstoragefile) - Retrieve a file
* [listCrmFiles](#listcrmfiles) - List all files
* [listStorageFiles](#liststoragefiles) - List all files
* [patchCrmFile](#patchcrmfile) - Update a file
* [patchStorageFile](#patchstoragefile) - Update a file
* [removeCrmFile](#removecrmfile) - Remove a file
* [removeStorageFile](#removestoragefile) - Remove a file
* [updateCrmFile](#updatecrmfile) - Update a file
* [updateStorageFile](#updatestoragefile) - Update a file

## createCrmFile

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
        $request = new Operations\CreateCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-23T14:06:46.596Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Multi-lateral background database';
    $request->crmFile->downloadUrl = 'string';
    $request->crmFile->eventId = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->mimeType = 'string';
    $request->crmFile->name = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->size = 2318.83;
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-27T09:12:07.889Z');
    $request->crmFile->userId = 'string';
    $request->connectionId = 'string';;

    $response = $sdk->file->createCrmFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmFileRequest](../../Models/Operations/CreateCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmFileResponse](../../Models/Operations/CreateCrmFileResponse.md)**


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
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-15T09:11:45.919Z');
    $request->storageFile->userId = 'string';
    $request->connectionId = 'string';;

    $response = $sdk->file->createStorageFile($request);

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


## getCrmFile

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
        $request = new Operations\GetCrmFileRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->file->getCrmFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmFileRequest](../../Models/Operations/GetCrmFileRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmFileResponse](../../Models/Operations/GetCrmFileResponse.md)**


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

    $response = $sdk->file->getStorageFile($request);

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


## listCrmFiles

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
        $request = new Operations\ListCrmFilesRequest();
    $request->companyId = 'string';
    $request->connectionId = 'string';
    $request->contactId = 'string';
    $request->dealId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 7725.49;
    $request->offset = 1697.5;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-04T17:40:07.899Z');;

    $response = $sdk->file->listCrmFiles($request);

    if ($response->crmFiles !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmFilesRequest](../../Models/Operations/ListCrmFilesRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmFilesResponse](../../Models/Operations/ListCrmFilesResponse.md)**


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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-28T04:36:03.817Z');;

    $response = $sdk->file->listStorageFiles($request);

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


## patchCrmFile

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
        $request = new Operations\PatchCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-02T20:49:30.505Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Networked multimedia database';
    $request->crmFile->downloadUrl = 'string';
    $request->crmFile->eventId = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->mimeType = 'string';
    $request->crmFile->name = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->size = 1185.84;
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-10T22:21:44.295Z');
    $request->crmFile->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->file->patchCrmFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmFileRequest](../../Models/Operations/PatchCrmFileRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmFileResponse](../../Models/Operations/PatchCrmFileResponse.md)**


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
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-04T23:06:28.459Z');
    $request->storageFile->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->file->patchStorageFile($request);

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


## removeCrmFile

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
        $request = new Operations\RemoveCrmFileRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->file->removeCrmFile($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmFileRequest](../../Models/Operations/RemoveCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmFileResponse](../../Models/Operations/RemoveCrmFileResponse.md)**


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

    $response = $sdk->file->removeStorageFile($request);

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


## updateCrmFile

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
        $request = new Operations\UpdateCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-11T15:31:35.167Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Quality-focused mobile orchestration';
    $request->crmFile->downloadUrl = 'string';
    $request->crmFile->eventId = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->mimeType = 'string';
    $request->crmFile->name = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->size = 5501.47;
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-25T13:19:41.584Z');
    $request->crmFile->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->file->updateCrmFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmFileRequest](../../Models/Operations/UpdateCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmFileResponse](../../Models/Operations/UpdateCrmFileResponse.md)**


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
    $request->storageFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-25T08:58:39.877Z');
    $request->storageFile->userId = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->file->updateStorageFile($request);

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

