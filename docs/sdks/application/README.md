# Application
(*application*)

### Available Operations

* [deleteAtsConnectionIdApplicationId](#deleteatsconnectionidapplicationid) - Remove an application
* [getAtsConnectionIdApplication](#getatsconnectionidapplication) - List all applications
* [getAtsConnectionIdApplicationId](#getatsconnectionidapplicationid) - Retrieve an application
* [patchAtsConnectionIdApplicationId](#patchatsconnectionidapplicationid) - Update an application
* [postAtsConnectionIdApplication](#postatsconnectionidapplication) - Create an application
* [putAtsConnectionIdApplicationId](#putatsconnectionidapplicationid) - Update an application

## deleteAtsConnectionIdApplicationId

Remove an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteAtsConnectionIdApplicationIdRequest();
    $request->connectionId = 'markets sievert meh';
    $request->id = '<ID>';

    $response = $sdk->application->deleteAtsConnectionIdApplicationId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdRequest](../../models/operations/DeleteAtsConnectionIdApplicationIdRequest.md) | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdResponse](../../models/operations/DeleteAtsConnectionIdApplicationIdResponse.md)**


## getAtsConnectionIdApplication

List all applications

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsConnectionIdApplicationRequest();
    $request->candidateId = 'turquoise';
    $request->connectionId = 'Regional Bedfordshire';
    $request->jobId = 'Northwest portal Electric';
    $request->limit = 576.8;
    $request->offset = 7467.13;
    $request->order = 'Architect';
    $request->query = 'loosely contingency';
    $request->sort = 'female';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-05T13:59:23.348Z');

    $response = $sdk->application->getAtsConnectionIdApplication($request);

    if ($response->atsApplications !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                     | Type                                                                                                                                          | Required                                                                                                                                      | Description                                                                                                                                   |
| --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationRequest](../../models/operations/GetAtsConnectionIdApplicationRequest.md) | :heavy_check_mark:                                                                                                                            | The request object to use for the request.                                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationResponse](../../models/operations/GetAtsConnectionIdApplicationResponse.md)**


## getAtsConnectionIdApplicationId

Retrieve an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsConnectionIdApplicationIdRequest();
    $request->connectionId = 'Buckinghamshire functionalities';
    $request->id = '<ID>';

    $response = $sdk->application->getAtsConnectionIdApplicationId($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdRequest](../../models/operations/GetAtsConnectionIdApplicationIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdResponse](../../models/operations/GetAtsConnectionIdApplicationIdResponse.md)**


## patchAtsConnectionIdApplicationId

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsConnectionIdApplicationIdRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-17T09:51:42.165Z');
    $request->atsApplication->candidateId = 'North et beyond';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-08T08:26:22.845Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'ick Sausages Bronze';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-18T00:47:25.469Z');
    $request->atsApplication->rejectedReason = 'Avon Sum quis';
    $request->atsApplication->source = 'Carolina Wooden Pop';
    $request->atsApplication->status = AtsApplicationStatus::Hired;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-20T22:05:46.009Z');
    $request->connectionId = 'Baby Paucek';
    $request->id = '<ID>';

    $response = $sdk->application->patchAtsConnectionIdApplicationId($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                             | Type                                                                                                                                                  | Required                                                                                                                                              | Description                                                                                                                                           |
| ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdRequest](../../models/operations/PatchAtsConnectionIdApplicationIdRequest.md) | :heavy_check_mark:                                                                                                                                    | The request object to use for the request.                                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdResponse](../../models/operations/PatchAtsConnectionIdApplicationIdResponse.md)**


## postAtsConnectionIdApplication

Create an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PostAtsConnectionIdApplicationRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-26T15:24:28.979Z');
    $request->atsApplication->candidateId = 'solid';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-13T17:17:33.049Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'Gloves Pizza virtual';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-27T18:41:56.821Z');
    $request->atsApplication->rejectedReason = 'Northwest Kids';
    $request->atsApplication->source = 'Human Tasty Loan';
    $request->atsApplication->status = AtsApplicationStatus::New;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-01T21:08:50.319Z');
    $request->connectionId = 'Jazz';

    $response = $sdk->application->postAtsConnectionIdApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationRequest](../../models/operations/PostAtsConnectionIdApplicationRequest.md) | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationResponse](../../models/operations/PostAtsConnectionIdApplicationResponse.md)**


## putAtsConnectionIdApplicationId

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PutAtsConnectionIdApplicationIdRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-15T22:25:51.833Z');
    $request->atsApplication->candidateId = 'farad Indianapolis';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-01T21:03:58.880Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'enable foreground';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-06T11:41:30.414Z');
    $request->atsApplication->rejectedReason = 'virtual North plum';
    $request->atsApplication->source = 'Fort solid';
    $request->atsApplication->status = AtsApplicationStatus::Submitted;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-21T04:47:57.079Z');
    $request->connectionId = 'Southeast';
    $request->id = '<ID>';

    $response = $sdk->application->putAtsConnectionIdApplicationId($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                         | Type                                                                                                                                              | Required                                                                                                                                          | Description                                                                                                                                       |
| ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdRequest](../../models/operations/PutAtsConnectionIdApplicationIdRequest.md) | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdResponse](../../models/operations/PutAtsConnectionIdApplicationIdResponse.md)**

