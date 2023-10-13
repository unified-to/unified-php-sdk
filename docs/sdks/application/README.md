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
    $request->atsApplication->candidateId = 'payment lest approach';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-07T21:11:41.350Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'Cyclocross Interactions Thallium';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-10T13:05:23.800Z');
    $request->atsApplication->rejectedReason = 'feminize male';
    $request->atsApplication->source = 'though plus';
    $request->atsApplication->status = AtsApplicationStatus::SecondInterview;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-13T16:55:31.599Z');
    $request->connectionId = 'Bicycle';

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
    $request->connectionId = 'anenst Balboa';
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
    $request->candidateId = 'Summit';
    $request->connectionId = 'withdrawal Springs Blues';
    $request->jobId = 'solutions';
    $request->limit = 1330.66;
    $request->offset = 5248.28;
    $request->order = 'Kazakhstan';
    $request->query = 'SDD East boohoo';
    $request->sort = 'Sports Assistant Chlorine';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-05T05:05:40.196Z');

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
    $request->atsApplication->candidateId = 'Corporate';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-02T14:46:44.919Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'Director Gasoline Usability';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-06T15:03:11.660Z');
    $request->atsApplication->rejectedReason = 'Metal Industrial';
    $request->atsApplication->source = 'Beach';
    $request->atsApplication->status = AtsApplicationStatus::Accepted;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-22T18:46:40.363Z');
    $request->connectionId = 'Irving Generic Buckinghamshire';
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
    $request->connectionId = 'sexy mesh application';
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
    $request->atsApplication->candidateId = 'Valley';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-16T17:33:44.222Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'tangible optical Designer';
    $request->atsApplication->raw = new PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-05T13:24:39.353Z');
    $request->atsApplication->rejectedReason = 'synergies';
    $request->atsApplication->source = 'Outdoors';
    $request->atsApplication->status = AtsApplicationStatus::Rejected;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-06T02:13:22.264Z');
    $request->connectionId = 'Pants West';
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

