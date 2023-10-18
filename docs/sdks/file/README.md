# File
(*file*)

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

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateCrmFileRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateCrmFileRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->activityId = 'loyally';
    $request->crmFile->companyId = 'Northwest';
    $request->crmFile->contactId = 'Tasty';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-03T01:09:20.345Z');
    $request->crmFile->dealId = 'Tungsten';
    $request->crmFile->description = 'Future-proofed real-time hierarchy';
    $request->crmFile->fileName = 'copy_towels_ssl.png';
    $request->crmFile->fileSize = 7403.39;
    $request->crmFile->fileType = 'video';
    $request->crmFile->fileUrl = 'male';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'mole';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-10T15:19:38.772Z');
    $request->crmFile->userId = 'Coupe';
    $request->connectionId = 'Technician';

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateCrmFileRequest](../../models/operations/CreateCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateCrmFileResponse](../../models/operations/CreateCrmFileResponse.md)**


## getCrmFile

Retrieve a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmFileRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmFileRequest();
    $request->connectionId = 'Southwest';
    $request->fields = [
        'sexy',
    ];
    $request->id = '<ID>';

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
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetCrmFileRequest](../../models/operations/GetCrmFileRequest.md) | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmFileResponse](../../models/operations/GetCrmFileResponse.md)**


## listCrmFiles

List all files

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListCrmFilesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListCrmFilesRequest();
    $request->companyId = 'Bicycle';
    $request->connectionId = 'Genderflux';
    $request->contactId = 'Southeast';
    $request->dealId = 'invoice';
    $request->fields = [
        'hertz',
    ];
    $request->limit = 4570.21;
    $request->offset = 8542.7;
    $request->order = 'lime';
    $request->query = 'Tuvalu';
    $request->sort = 'West';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-06T02:15:18.452Z');

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
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListCrmFilesRequest](../../models/operations/ListCrmFilesRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\ListCrmFilesResponse](../../models/operations/ListCrmFilesResponse.md)**


## patchCrmFile

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmFileRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmFileRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->activityId = 'Health';
    $request->crmFile->companyId = 'Future';
    $request->crmFile->contactId = 'Southeast';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-06T05:42:36.280Z');
    $request->crmFile->dealId = 'Oriental';
    $request->crmFile->description = 'Monitored scalable model';
    $request->crmFile->fileName = 'dreamily.wav';
    $request->crmFile->fileSize = 9888.22;
    $request->crmFile->fileType = 'audio';
    $request->crmFile->fileUrl = 'navigate';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'systems';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-08T15:56:09.015Z');
    $request->crmFile->userId = 'Northeast';
    $request->connectionId = 'Magnesium';
    $request->id = '<ID>';

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
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchCrmFileRequest](../../models/operations/PatchCrmFileRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmFileResponse](../../models/operations/PatchCrmFileResponse.md)**


## removeCrmFile

Remove a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveCrmFileRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveCrmFileRequest();
    $request->connectionId = 'Zambia';
    $request->id = '<ID>';

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveCrmFileRequest](../../models/operations/RemoveCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveCrmFileResponse](../../models/operations/RemoveCrmFileResponse.md)**


## updateCrmFile

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateCrmFileRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateCrmFileRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->activityId = 'Plano';
    $request->crmFile->companyId = 'generate';
    $request->crmFile->contactId = 'unexpectedly';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-12T00:43:08.046Z');
    $request->crmFile->dealId = 'Cotton';
    $request->crmFile->description = 'Quality-focused directional methodology';
    $request->crmFile->fileName = 'station.wav';
    $request->crmFile->fileSize = 4361.43;
    $request->crmFile->fileType = 'application';
    $request->crmFile->fileUrl = 'Bicycle';
    $request->crmFile->id = '<ID>';
    $request->crmFile->isActive = false;
    $request->crmFile->leadId = 'haptic';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-03T07:36:51.495Z');
    $request->crmFile->userId = 'maroon';
    $request->connectionId = 'synergistic';
    $request->id = '<ID>';

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
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateCrmFileRequest](../../models/operations/UpdateCrmFileRequest.md) | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateCrmFileResponse](../../models/operations/UpdateCrmFileResponse.md)**

