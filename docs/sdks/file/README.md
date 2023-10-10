# File
(*file*)

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteCrmConnectionIdFileIdRequest();
    $request->connectionId = 'Bicycle';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdFileRequest();
    $request->companyId = 'reboot';
    $request->connectionId = 'customise far';
    $request->contactId = 'Electronic proactive';
    $request->dealId = 'withdrawal deposit Gloves';
    $request->limit = 1588.79;
    $request->offset = 3754.81;
    $request->order = 'Implemented fairly meh';
    $request->query = 'FTP Producer';
    $request->sort = 'soprano deliverables';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-02T03:00:09.711Z');

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetCrmConnectionIdFileIdRequest();
    $request->connectionId = 'Bicycle';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'duh Handmade harness';
    $request->crmFile->companyId = 'CFP';
    $request->crmFile->contactId = 'unaware yellow generating';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-04T04:54:33.785Z');
    $request->crmFile->dealId = 'channels SUV';
    $request->crmFile->description = 'De-engineered didactic hardware';
    $request->crmFile->fileName = 'metical_silver_yellow.html';
    $request->crmFile->fileSize = 6861.53;
    $request->crmFile->fileType = 'video';
    $request->crmFile->fileUrl = 'navigate Funk';
    $request->crmFile->id = '<ID>';
    $request->crmFile->leadId = 'internal';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-21T13:46:42.012Z');
    $request->crmFile->userId = 'Interactions';
    $request->connectionId = 'Handcrafted';
    $request->id = '<ID>';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostCrmConnectionIdFileRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'tan impedit Pickup';
    $request->crmFile->companyId = 'Manager';
    $request->crmFile->contactId = 'Florida Shoes East';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-08T11:37:24.708Z');
    $request->crmFile->dealId = 'Agent';
    $request->crmFile->description = 'Multi-lateral well-modulated portal';
    $request->crmFile->fileName = 'panel_city.wav';
    $request->crmFile->fileSize = 1401.73;
    $request->crmFile->fileType = 'application';
    $request->crmFile->fileUrl = 'for Chips under';
    $request->crmFile->id = '<ID>';
    $request->crmFile->leadId = 'abaft Checking';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-25T09:46:59.608Z');
    $request->crmFile->userId = 'Mexico withdrawal';
    $request->connectionId = 'national Lead';

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

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutCrmConnectionIdFileIdRequest();
    $request->crmFile = new CrmFile();
    $request->crmFile->active = false;
    $request->crmFile->activityId = 'Cotton';
    $request->crmFile->companyId = 'Northeast';
    $request->crmFile->contactId = 'Computer';
    $request->crmFile->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-09T13:10:01.367Z');
    $request->crmFile->dealId = 'toward confiscate East';
    $request->crmFile->description = 'Devolved upward-trending matrices';
    $request->crmFile->fileName = 'generation_tactics.wav';
    $request->crmFile->fileSize = 4770.09;
    $request->crmFile->fileType = 'audio';
    $request->crmFile->fileUrl = 'framework azure Metal';
    $request->crmFile->id = '<ID>';
    $request->crmFile->leadId = 'ampere costume';
    $request->crmFile->raw = new PropertyCrmFileRaw();
    $request->crmFile->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-15T05:04:24.130Z');
    $request->crmFile->userId = 'Research payment';
    $request->connectionId = 'East Associate Mazda';
    $request->id = '<ID>';

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

