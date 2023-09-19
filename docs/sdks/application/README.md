# Application

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
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdApplicationIdRequest();
    $request->connectionId = 'eaque';
    $request->id = '53202c73-d5fe-49b9-8c28-909b3fe49a8d';

    $requestSecurity = new DeleteAtsConnectionIdApplicationIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->application->deleteAtsConnectionIdApplicationId($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                                 | Type                                                                                                                                                      | Required                                                                                                                                                  | Description                                                                                                                                               |
| --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdRequest](../../models/operations/DeleteAtsConnectionIdApplicationIdRequest.md)   | :heavy_check_mark:                                                                                                                                        | The request object to use for the request.                                                                                                                |
| `security`                                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdApplicationIdSecurity](../../models/operations/DeleteAtsConnectionIdApplicationIdSecurity.md) | :heavy_check_mark:                                                                                                                                        | The security requirements to use for the request.                                                                                                         |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdApplicationRequest();
    $request->candidateId = 'provident';
    $request->connectionId = 'nobis';
    $request->jobId = 'libero';
    $request->limit = 9644.9;
    $request->offset = 3119.45;
    $request->order = 'quos';
    $request->query = 'aliquid';
    $request->sort = 'dolorem';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-11T19:23:49.728Z');

    $requestSecurity = new GetAtsConnectionIdApplicationSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->application->getAtsConnectionIdApplication($request, $requestSecurity);

    if ($response->atsApplications !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                       | Type                                                                                                                                            | Required                                                                                                                                        | Description                                                                                                                                     |
| ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationRequest](../../models/operations/GetAtsConnectionIdApplicationRequest.md)   | :heavy_check_mark:                                                                                                                              | The request object to use for the request.                                                                                                      |
| `security`                                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationSecurity](../../models/operations/GetAtsConnectionIdApplicationSecurity.md) | :heavy_check_mark:                                                                                                                              | The security requirements to use for the request.                                                                                               |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdApplicationIdRequest();
    $request->connectionId = 'qui';
    $request->id = '3f9b77f3-a410-4067-8ebf-69280d1ba77a';

    $requestSecurity = new GetAtsConnectionIdApplicationIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->application->getAtsConnectionIdApplicationId($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdRequest](../../models/operations/GetAtsConnectionIdApplicationIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdApplicationIdSecurity](../../models/operations/GetAtsConnectionIdApplicationIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdApplicationIdRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-10-14T20:34:13.522Z');
    $request->atsApplication->candidateId = 'necessitatibus';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-01-08T01:15:41.988Z');
    $request->atsApplication->id = '737ae420-3ce5-4e6a-95d8-a0d446ce2af7';
    $request->atsApplication->jobId = 'harum';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-10-14T08:09:09.090Z');
    $request->atsApplication->rejectedReason = 'quisquam';
    $request->atsApplication->source = 'tenetur';
    $request->atsApplication->status = AtsApplicationStatus::Screening;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-03-29T09:11:09.370Z');
    $request->connectionId = 'numquam';
    $request->id = '53f870b3-26b5-4a73-829c-db1a8422bb67';

    $requestSecurity = new PatchAtsConnectionIdApplicationIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->application->patchAtsConnectionIdApplicationId($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                               | Type                                                                                                                                                    | Required                                                                                                                                                | Description                                                                                                                                             |
| ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdRequest](../../models/operations/PatchAtsConnectionIdApplicationIdRequest.md)   | :heavy_check_mark:                                                                                                                                      | The request object to use for the request.                                                                                                              |
| `security`                                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdApplicationIdSecurity](../../models/operations/PatchAtsConnectionIdApplicationIdSecurity.md) | :heavy_check_mark:                                                                                                                                      | The security requirements to use for the request.                                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdApplicationRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2021-04-27T11:41:31.258Z');
    $request->atsApplication->candidateId = 'qui';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-11-09T03:08:00.106Z');
    $request->atsApplication->id = '2715bf0c-bb1e-431b-8b90-f3443a1108e0';
    $request->atsApplication->jobId = 'est';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-08-24T06:10:53.249Z');
    $request->atsApplication->rejectedReason = 'doloribus';
    $request->atsApplication->source = 'ut';
    $request->atsApplication->status = AtsApplicationStatus::Offered;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-21T09:49:15.782Z');
    $request->connectionId = 'quae';

    $requestSecurity = new PostAtsConnectionIdApplicationSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->application->postAtsConnectionIdApplication($request, $requestSecurity);

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
| `$request`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationRequest](../../models/operations/PostAtsConnectionIdApplicationRequest.md)   | :heavy_check_mark:                                                                                                                                | The request object to use for the request.                                                                                                        |
| `security`                                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdApplicationSecurity](../../models/operations/PostAtsConnectionIdApplicationSecurity.md) | :heavy_check_mark:                                                                                                                                | The security requirements to use for the request.                                                                                                 |


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
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdApplicationIdRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-01-11T11:48:15.910Z');
    $request->atsApplication->candidateId = 'occaecati';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2020-08-21T15:23:31.740Z');
    $request->atsApplication->id = 'e953f73e-f7fb-4c7a-bd74-dd39c0f5d2cf';
    $request->atsApplication->jobId = 'doloribus';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-03-31T22:43:48.703Z');
    $request->atsApplication->rejectedReason = 'ducimus';
    $request->atsApplication->source = 'alias';
    $request->atsApplication->status = AtsApplicationStatus::BackgroundCheck;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:sP', '2022-08-19T11:11:55.326Z');
    $request->connectionId = 'ea';
    $request->id = '26d43681-3f16-4d9f-9fce-6c556146c3e2';

    $requestSecurity = new PutAtsConnectionIdApplicationIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->application->putAtsConnectionIdApplicationId($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                           | Type                                                                                                                                                | Required                                                                                                                                            | Description                                                                                                                                         |
| --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdRequest](../../models/operations/PutAtsConnectionIdApplicationIdRequest.md)   | :heavy_check_mark:                                                                                                                                  | The request object to use for the request.                                                                                                          |
| `security`                                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdSecurity](../../models/operations/PutAtsConnectionIdApplicationIdSecurity.md) | :heavy_check_mark:                                                                                                                                  | The security requirements to use for the request.                                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdApplicationIdResponse](../../models/operations/PutAtsConnectionIdApplicationIdResponse.md)**

