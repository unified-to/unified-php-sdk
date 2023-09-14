# file

### Available Operations

* [deleteCrmConnectionIdFileId](#deletecrmconnectionidfileid) - Remove a file
* [getCrmConnectionIdFile](#getcrmconnectionidfile) - List all files
* [getCrmConnectionIdFileId](#getcrmconnectionidfileid) - Retrieve a file
* [patchCrmConnectionIdFileId](#patchcrmconnectionidfileid) - Update a file
* [postCrmConnectionIdFile](#postcrmconnectionidfile) - Create a file
* [putCrmConnectionIdFileId](#putcrmconnectionidfileid) - Update a file

## deleteCrmConnectionIdFileId

Remove a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdFileIdRequest();
    $request->connectionId = 'ratione';
    $request->id = 'a56d6918-0ff6-40eb-9a66-58e69a4b843d';

    $requestSecurity = new DeleteCrmConnectionIdFileIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->file->deleteCrmConnectionIdFileId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdRequest](../../models/operations/DeleteCrmConnectionIdFileIdRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdSecurity](../../models/operations/DeleteCrmConnectionIdFileIdSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdResponse](../../models/operations/DeleteCrmConnectionIdFileIdResponse.md)**


## getCrmConnectionIdFile

List all files

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdFileRequest();
    $request->companyId = 'adipisci';
    $request->connectionId = 'totam';
    $request->contactId = 'explicabo';
    $request->dealId = 'quibusdam';
    $request->limit = 6893.09;
    $request->offset = 9320.12;
    $request->order = 'porro';
    $request->query = 'ducimus';
    $request->sort = 'ad';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-10-09T19:41:02.147Z');

    $requestSecurity = new GetCrmConnectionIdFileSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->file->getCrmConnectionIdFile($request, $requestSecurity);

    if ($response->crmFiles !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileRequest](../../models/operations/GetCrmConnectionIdFileRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileSecurity](../../models/operations/GetCrmConnectionIdFileSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileResponse](../../models/operations/GetCrmConnectionIdFileResponse.md)**


## getCrmConnectionIdFileId

Retrieve a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdFileIdRequest();
    $request->connectionId = 'corrupti';
    $request->id = 'c6065946-8ce3-404d-8849-bf8214c337f9';

    $requestSecurity = new GetCrmConnectionIdFileIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->file->getCrmConnectionIdFileId($request, $requestSecurity);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdRequest](../../models/operations/GetCrmConnectionIdFileIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdSecurity](../../models/operations/GetCrmConnectionIdFileIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdResponse](../../models/operations/GetCrmConnectionIdFileIdResponse.md)**


## patchCrmConnectionIdFileId

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'iure';
    $request->crmFile->companyId = 'libero';
    $request->crmFile->contactId = 'cum';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-20T06:35:22.978Z');
    $request->crmFile->dealId = 'vel';
    $request->crmFile->description = 'omnis';
    $request->crmFile->fileName = 'recusandae';
    $request->crmFile->fileSize = 2406.19;
    $request->crmFile->fileType = 'quam';
    $request->crmFile->fileUrl = 'fugit';
    $request->crmFile->id = 'db1344ba-9f78-4a5c-8ed7-aab62e97261f';
    $request->crmFile->leadId = 'cum';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-14T09:21:38.792Z');
    $request->crmFile->userId = 'veniam';
    $request->connectionId = 'corrupti';
    $request->id = 'd27b5199-6b5b-44b5-8eef-712b7a7ab034';

    $requestSecurity = new PatchCrmConnectionIdFileIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->file->patchCrmConnectionIdFileId($request, $requestSecurity);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdRequest](../../models/operations/PatchCrmConnectionIdFileIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdSecurity](../../models/operations/PatchCrmConnectionIdFileIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdResponse](../../models/operations/PatchCrmConnectionIdFileIdResponse.md)**


## postCrmConnectionIdFile

Create a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdFileRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'modi';
    $request->crmFile->companyId = 'soluta';
    $request->crmFile->contactId = 'inventore';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-20T13:22:34.695Z');
    $request->crmFile->dealId = 'sit';
    $request->crmFile->description = 'autem';
    $request->crmFile->fileName = 'rem';
    $request->crmFile->fileSize = 5375.18;
    $request->crmFile->fileType = 'illum';
    $request->crmFile->fileUrl = 'necessitatibus';
    $request->crmFile->id = 'ebef897f-3dd0-4ccd-b3f1-1b3e4e080aa1';
    $request->crmFile->leadId = 'ipsa';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-25T00:50:44.199Z');
    $request->crmFile->userId = 'deleniti';
    $request->connectionId = 'eum';

    $requestSecurity = new PostCrmConnectionIdFileSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->file->postCrmConnectionIdFile($request, $requestSecurity);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileRequest](../../models/operations/PostCrmConnectionIdFileRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileSecurity](../../models/operations/PostCrmConnectionIdFileSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileResponse](../../models/operations/PostCrmConnectionIdFileResponse.md)**


## putCrmConnectionIdFileId

Update a file

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'accusamus';
    $request->crmFile->companyId = 'optio';
    $request->crmFile->contactId = 'odio';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-29T15:52:32.469Z');
    $request->crmFile->dealId = 'officiis';
    $request->crmFile->description = 'ipsa';
    $request->crmFile->fileName = 'eos';
    $request->crmFile->fileSize = 9646.54;
    $request->crmFile->fileType = 'dolor';
    $request->crmFile->fileUrl = 'dignissimos';
    $request->crmFile->id = '02c5c8e2-d30e-4ad3-904f-a44707bf375b';
    $request->crmFile->leadId = 'ut';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-06T09:14:44.032Z');
    $request->crmFile->userId = 'quas';
    $request->connectionId = 'aspernatur';
    $request->id = '821fdb2f-69e5-4926-bc71-cc8d3cd4258d';

    $requestSecurity = new PutCrmConnectionIdFileIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->file->putCrmConnectionIdFileId($request, $requestSecurity);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdRequest](../../models/operations/PutCrmConnectionIdFileIdRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdSecurity](../../models/operations/PutCrmConnectionIdFileIdSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdResponse](../../models/operations/PutCrmConnectionIdFileIdResponse.md)**

