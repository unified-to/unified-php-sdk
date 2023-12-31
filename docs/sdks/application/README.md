# Application


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

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAtsApplicationRequest();
    $request->atsApplication = new Shared\AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-09T05:03:52.917Z');
    $request->atsApplication->candidateId = 'string';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-22T12:50:56.305Z');
    $request->atsApplication->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-19T06:26:51.678Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'string';
    $request->atsApplication->originalStatus = 'string';
    $request->atsApplication->raw = new Shared\PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-30T06:58:14.500Z');
    $request->atsApplication->rejectedReason = 'string';
    $request->atsApplication->source = 'string';
    $request->atsApplication->status = Shared\AtsApplicationStatus::SecondInterview;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-21T21:31:42.360Z');
    $request->connectionId = 'string';;

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateAtsApplicationRequest](../../Models/Operations/CreateAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsApplicationResponse](../../Models/Operations/CreateAtsApplicationResponse.md)**


## getAtsApplication

Retrieve an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAtsApplicationRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetAtsApplicationRequest](../../Models/Operations/GetAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsApplicationResponse](../../Models/Operations/GetAtsApplicationResponse.md)**


## listAtsApplications

List all applications

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAtsApplicationsRequest();
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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-21T20:30:01.596Z');;

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAtsApplicationsRequest](../../Models/Operations/ListAtsApplicationsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsApplicationsResponse](../../Models/Operations/ListAtsApplicationsResponse.md)**


## patchAtsApplication

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAtsApplicationRequest();
    $request->atsApplication = new Shared\AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-15T20:36:09.499Z');
    $request->atsApplication->candidateId = 'string';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-06T05:56:57.062Z');
    $request->atsApplication->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-05T05:20:09.174Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'string';
    $request->atsApplication->originalStatus = 'string';
    $request->atsApplication->raw = new Shared\PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-13T02:34:40.392Z');
    $request->atsApplication->rejectedReason = 'string';
    $request->atsApplication->source = 'string';
    $request->atsApplication->status = Shared\AtsApplicationStatus::FirstInterview;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-24T17:35:54.628Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchAtsApplicationRequest](../../Models/Operations/PatchAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsApplicationResponse](../../Models/Operations/PatchAtsApplicationResponse.md)**


## removeAtsApplication

Remove an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAtsApplicationRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveAtsApplicationRequest](../../Models/Operations/RemoveAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsApplicationResponse](../../Models/Operations/RemoveAtsApplicationResponse.md)**


## updateAtsApplication

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAtsApplicationRequest();
    $request->atsApplication = new Shared\AtsApplication();
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-22T12:21:27.415Z');
    $request->atsApplication->candidateId = 'string';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-04T12:46:09.878Z');
    $request->atsApplication->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-09T08:57:01.906Z');
    $request->atsApplication->id = '<ID>';
    $request->atsApplication->jobId = 'string';
    $request->atsApplication->originalStatus = 'string';
    $request->atsApplication->raw = new Shared\PropertyAtsApplicationRaw();
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-19T04:47:20.215Z');
    $request->atsApplication->rejectedReason = 'string';
    $request->atsApplication->source = 'string';
    $request->atsApplication->status = Shared\AtsApplicationStatus::Offered;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-17T03:12:00.865Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateAtsApplicationRequest](../../Models/Operations/UpdateAtsApplicationRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsApplicationResponse](../../Models/Operations/UpdateAtsApplicationResponse.md)**

