# File


### Available Operations

* [createCrmFile](#createcrmfile) - Create a file
* [getCrmFile](#getcrmfile) - Retrieve a file
* [listCrmFiles](#listcrmfiles) - List all files
* [patchCrmFile](#patchcrmfile) - Update a file
* [removeCrmFile](#removecrmfile) - Remove a file
* [updateCrmFile](#updatecrmfile) - Update a file

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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->activityId = 'string';
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-23T16:58:07.247Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Multi-lateral background database';
    $request->crmFile->fileName = 'the.mp4v';
    $request->crmFile->fileSize = 3460.69;
    $request->crmFile->fileType = 'text';
    $request->crmFile->fileUrl = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-03T12:27:57.377Z');
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
$security->jwt = '';

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
$security->jwt = '';

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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-04T18:55:22.126Z');;

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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->activityId = 'string';
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-02T16:08:30.860Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Networked multimedia database';
    $request->crmFile->fileName = 'country.wav';
    $request->crmFile->fileSize = 7551.13;
    $request->crmFile->fileType = 'image';
    $request->crmFile->fileUrl = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-07T04:39:27.375Z');
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
$security->jwt = '';

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
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateCrmFileRequest();
    $request->crmFile = new Shared\CrmFile();
    $request->crmFile->activityId = 'string';
    $request->crmFile->companyId = 'string';
    $request->crmFile->contactId = 'string';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-11T14:36:52.051Z');
    $request->crmFile->dealId = 'string';
    $request->crmFile->description = 'Quality-focused mobile orchestration';
    $request->crmFile->fileName = 'circuit_extended.jpe';
    $request->crmFile->fileSize = 2826.44;
    $request->crmFile->fileType = 'text';
    $request->crmFile->fileUrl = 'string';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'string';
    $request->crmFile->raw = new Shared\PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-11T08:15:48.719Z');
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

