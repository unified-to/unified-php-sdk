# Application
(*application*)

### Available Operations

* [createAtsApplication](#createatsapplication) - Create an application
* [getAtsApplication](#getatsapplication) - Retrieve an application
* [listAtsApplications](#listatsapplications) - List all applications
* [patchAtsApplication](#patchatsapplication) - Update an application
* [removeAtsApplication](#removeatsapplication) - Remove an application
* [updateAtsApplication](#updateatsapplication) - Update an application

## createAtsApplication

Create an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAtsApplicationRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAtsApplicationRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-09T11:35:08.252Z');
    $request->atsApplication->candidateId = 'string';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-22T15:02:56.144Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'string';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-18T22:03:17.799Z');
    $request->atsApplication->rejectedReason = 'string';
    $request->atsApplication->source = 'string';
    $request->atsApplication->status = AtsApplicationStatus::FirstInterview;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-22T10:02:31.440Z');
    $request->connectionId = 'string';

    $response = $sdk->application->createAtsApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateAtsApplicationRequest](../../models/operations/CreateAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsApplicationResponse](../../models/operations/CreateAtsApplicationResponse.md)**


## getAtsApplication

Retrieve an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsApplicationRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsApplicationRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->application->getAtsApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetAtsApplicationRequest](../../models/operations/GetAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsApplicationResponse](../../models/operations/GetAtsApplicationResponse.md)**


## listAtsApplications

List all applications

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAtsApplicationsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAtsApplicationsRequest();
    $request->candidateId = 'string';
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->jobId = 'string';
    $request->limit = 441.56;
    $request->offset = 1448.74;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-12-21T12:43:47.690Z');

    $response = $sdk->application->listAtsApplications($request);

    if ($response->atsApplications !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAtsApplicationsRequest](../../models/operations/ListAtsApplicationsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsApplicationsResponse](../../models/operations/ListAtsApplicationsResponse.md)**


## patchAtsApplication

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsApplicationRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsApplicationRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-15T04:58:14.527Z');
    $request->atsApplication->candidateId = 'string';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-06T05:50:03.360Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'string';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-04T13:56:12.670Z');
    $request->atsApplication->rejectedReason = 'string';
    $request->atsApplication->source = 'string';
    $request->atsApplication->status = AtsApplicationStatus::Screening;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-02T14:46:44.919Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->application->patchAtsApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchAtsApplicationRequest](../../models/operations/PatchAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsApplicationResponse](../../models/operations/PatchAtsApplicationResponse.md)**


## removeAtsApplication

Remove an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAtsApplicationRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAtsApplicationRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->application->removeAtsApplication($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveAtsApplicationRequest](../../models/operations/RemoveAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsApplicationResponse](../../models/operations/RemoveAtsApplicationResponse.md)**


## updateAtsApplication

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAtsApplicationRequest;
use \Unified\Unified_to\Models\Shared\AtsApplication;
use \Unified\Unified_to\Models\Shared\PropertyAtsApplicationRaw;
use \Unified\Unified_to\Models\Shared\AtsApplicationStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAtsApplicationRequest();
    $request->atsApplication = new AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-22T07:14:38.941Z');
    $request->atsApplication->candidateId = 'string';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-04T09:23:07.789Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'string';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-09T08:05:18.054Z');
    $request->atsApplication->rejectedReason = 'string';
    $request->atsApplication->source = 'string';
    $request->atsApplication->status = AtsApplicationStatus::Rejected;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-28T16:36:33.801Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->application->updateAtsApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateAtsApplicationRequest](../../models/operations/UpdateAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsApplicationResponse](../../models/operations/UpdateAtsApplicationResponse.md)**

