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
    $request->atsApplication->candidateId = 'incidentally';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-29T22:20:11.749Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'payment';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-14T08:24:54.358Z');
    $request->atsApplication->rejectedReason = 'Money';
    $request->atsApplication->source = 'approach';
    $request->atsApplication->status = AtsApplicationStatus::Hired;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-29T01:08:00.744Z');
    $request->connectionId = 'Cyclocross';

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
    $request->connectionId = 'mobile';
    $request->fields = [
        'Key',
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
    $request->candidateId = 'Cambodia';
    $request->connectionId = 'models';
    $request->fields = [
        'Wagon',
    ];
    $request->jobId = 'violet';
    $request->limit = 3844.62;
    $request->offset = 247.23;
    $request->order = 'fuchsia';
    $request->query = 'Blues';
    $request->sort = 'pink';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-10-23T21:51:35.380Z');

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
    $request->atsApplication->candidateId = 'South';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-12T22:20:57.326Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'Director';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-29T04:40:45.531Z');
    $request->atsApplication->rejectedReason = 'alarm';
    $request->atsApplication->source = 'well';
    $request->atsApplication->status = AtsApplicationStatus::Offered;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-04T10:01:24.162Z');
    $request->connectionId = 'Leonie';
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
    $request->connectionId = 'gently';
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
    $request->atsApplication->candidateId = 'Rosie';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-16T12:20:07.563Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'tangible';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-25T18:54:45.418Z');
    $request->atsApplication->rejectedReason = 'repeatedly';
    $request->atsApplication->source = 'Configurable';
    $request->atsApplication->status = AtsApplicationStatus::BackgroundCheck;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-20T08:16:09.226Z');
    $request->connectionId = 'emulation';
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

