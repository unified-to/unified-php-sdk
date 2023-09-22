# File

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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteCrmConnectionIdFileIdRequest();
    $request->connectionId = 'occaecati';
    $request->id = 'a6658e69-a4b8-443d-b82d-bec75c68c606';

    $response = $sdk->file->deleteCrmConnectionIdFileId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteCrmConnectionIdFileIdRequest](../../models/operations/DeleteCrmConnectionIdFileIdRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdFileRequest();
    $request->companyId = 'veniam';
    $request->connectionId = 'cupiditate';
    $request->contactId = 'aliquam';
    $request->dealId = 'suscipit';
    $request->limit = 5434.52;
    $request->offset = 7950.8;
    $request->order = 'debitis';
    $request->query = 'neque';
    $request->sort = 'doloremque';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-27T09:19:22.404Z');

    $response = $sdk->file->getCrmConnectionIdFile($request);

    if ($response->crmFiles !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileRequest](../../models/operations/GetCrmConnectionIdFileRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdRequest;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetCrmConnectionIdFileIdRequest();
    $request->connectionId = 'deleniti';
    $request->id = '849bf821-4c33-47f9-abb0-c69e372db134';

    $response = $sdk->file->getCrmConnectionIdFileId($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetCrmConnectionIdFileIdRequest](../../models/operations/GetCrmConnectionIdFileIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'incidunt';
    $request->crmFile->companyId = 'tempore';
    $request->crmFile->contactId = 'deserunt';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-11T11:20:45.776Z');
    $request->crmFile->dealId = 'reprehenderit';
    $request->crmFile->description = 'rem';
    $request->crmFile->fileName = 'est';
    $request->crmFile->fileSize = 3405.4;
    $request->crmFile->fileType = 'impedit';
    $request->crmFile->fileUrl = 'accusantium';
    $request->crmFile->id = 'ed7aab62-e972-461f-b0c5-8d27b51996b5';
    $request->crmFile->leadId = 'expedita';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-04-16T05:13:37.183Z');
    $request->crmFile->userId = 'quaerat';
    $request->connectionId = 'accusantium';
    $request->id = 'eef712b7-a7ab-4034-8b17-10688deebef8';

    $response = $sdk->file->patchCrmConnectionIdFileId($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchCrmConnectionIdFileIdRequest](../../models/operations/PatchCrmConnectionIdFileIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostCrmConnectionIdFileRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'perspiciatis';
    $request->crmFile->companyId = 'quam';
    $request->crmFile->contactId = 'earum';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-02-22T22:34:49.776Z');
    $request->crmFile->dealId = 'pariatur';
    $request->crmFile->description = 'voluptatem';
    $request->crmFile->fileName = 'quod';
    $request->crmFile->fileSize = 7961.94;
    $request->crmFile->fileType = 'pariatur';
    $request->crmFile->fileUrl = 'dolor';
    $request->crmFile->id = '3f11b3e4-e080-4aa1-8418-6ec759e02f37';
    $request->crmFile->leadId = 'doloremque';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-12T17:09:26.142Z');
    $request->crmFile->userId = 'quis';
    $request->connectionId = 'cumque';

    $response = $sdk->file->postCrmConnectionIdFile($request);

    if ($response->crmFile !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostCrmConnectionIdFileRequest](../../models/operations/PostCrmConnectionIdFileRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


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
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdRequest;
use \Unified\Unified_to\Models\Shared\CrmFile;
use \Unified\Unified_to\Models\Shared\PropertyCrmFileRaw;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'laudantium';
    $request->crmFile->companyId = 'recusandae';
    $request->crmFile->contactId = 'odit';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-05-30T16:07:16.405Z');
    $request->crmFile->dealId = 'consequatur';
    $request->crmFile->description = 'voluptates';
    $request->crmFile->fileName = 'culpa';
    $request->crmFile->fileSize = 8725.53;
    $request->crmFile->fileType = 'dolorem';
    $request->crmFile->fileUrl = 'sunt';
    $request->crmFile->id = '04fa4470-7bf3-475b-8428-2821fdb2f69e';
    $request->crmFile->leadId = 'veniam';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-09-03T08:00:04.759Z');
    $request->crmFile->userId = 'laboriosam';
    $request->connectionId = 'iusto';
    $request->id = 'c71cc8d3-cd42-458d-8358-a82c808fe275';

    $response = $sdk->file->putCrmConnectionIdFileId($request);

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdRequest](../../models/operations/PutCrmConnectionIdFileIdRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PutCrmConnectionIdFileIdResponse](../../models/operations/PutCrmConnectionIdFileIdResponse.md)**

