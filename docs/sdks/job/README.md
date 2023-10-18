# Job
(*job*)

### Available Operations

* [createAtsJob](#createatsjob) - Create a job
* [getAtsJob](#getatsjob) - Retrieve a job
* [listAtsJobs](#listatsjobs) - List all jobs
* [patchAtsJob](#patchatsjob) - Update a job
* [removeAtsJob](#removeatsjob) - Remove a job
* [updateAtsJob](#updateatsjob) - Update a job

## createAtsJob

Create a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAtsJobRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAtsJobRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-14T18:13:00.731Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-04T23:12:33.253Z');
    $request->atsJob->departments = [
        'maroon',
    ];
    $request->atsJob->description = 'Operative 24 hour methodology';
    $request->atsJob->employmentType = AtsJobEmploymentType::Other;
    $request->atsJob->hiringManagerIds = [
        'Mini',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'health';
    $request->atsJob->name = 'Ergonomic';
    $request->atsJob->publicJobUrls = [
        'Customer',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'Loan',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Draft;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-09T11:13:11.642Z');
    $request->connectionId = 'Optimization';

    $response = $sdk->job->createAtsJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateAtsJobRequest](../../models/operations/CreateAtsJobRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsJobResponse](../../models/operations/CreateAtsJobResponse.md)**


## getAtsJob

Retrieve a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsJobRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsJobRequest();
    $request->connectionId = 'Southwest';
    $request->fields = [
        'panel',
    ];
    $request->id = '<ID>';

    $response = $sdk->job->getAtsJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                             | Type                                                                                                  | Required                                                                                              | Description                                                                                           |
| ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------- |
| `$request`                                                                                            | [\Unified\Unified_to\Models\Operations\GetAtsJobRequest](../../models/operations/GetAtsJobRequest.md) | :heavy_check_mark:                                                                                    | The request object to use for the request.                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsJobResponse](../../models/operations/GetAtsJobResponse.md)**


## listAtsJobs

List all jobs

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAtsJobsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAtsJobsRequest();
    $request->connectionId = 'firmware';
    $request->fields = [
        'Praseodymium',
    ];
    $request->limit = 7427.26;
    $request->offset = 7749.91;
    $request->order = 'teal';
    $request->query = 'Electric';
    $request->sort = 'ohm';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-15T18:47:12.832Z');

    $response = $sdk->job->listAtsJobs($request);

    if ($response->atsJobs !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\ListAtsJobsRequest](../../models/operations/ListAtsJobsRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsJobsResponse](../../models/operations/ListAtsJobsResponse.md)**


## patchAtsJob

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsJobRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsJobRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-09T12:54:15.288Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-09T13:38:57.141Z');
    $request->atsJob->departments = [
        'blue',
    ];
    $request->atsJob->description = 'Extended empowering middleware';
    $request->atsJob->employmentType = AtsJobEmploymentType::FullTime;
    $request->atsJob->hiringManagerIds = [
        'Waldorf',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'firewall';
    $request->atsJob->name = 'gold';
    $request->atsJob->publicJobUrls = [
        'Principal',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'BMW',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Pending;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-06T03:40:01.899Z');
    $request->connectionId = 'killer';
    $request->id = '<ID>';

    $response = $sdk->job->patchAtsJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                 | Type                                                                                                      | Required                                                                                                  | Description                                                                                               |
| --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                | [\Unified\Unified_to\Models\Operations\PatchAtsJobRequest](../../models/operations/PatchAtsJobRequest.md) | :heavy_check_mark:                                                                                        | The request object to use for the request.                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsJobResponse](../../models/operations/PatchAtsJobResponse.md)**


## removeAtsJob

Remove a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAtsJobRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAtsJobRequest();
    $request->connectionId = 'Northeast';
    $request->id = '<ID>';

    $response = $sdk->job->removeAtsJob($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveAtsJobRequest](../../models/operations/RemoveAtsJobRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsJobResponse](../../models/operations/RemoveAtsJobResponse.md)**


## updateAtsJob

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAtsJobRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAtsJobRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-20T17:16:11.353Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-28T15:51:57.038Z');
    $request->atsJob->departments = [
        'Hydrogen',
    ];
    $request->atsJob->description = 'Triple-buffered multimedia artificial intelligence';
    $request->atsJob->employmentType = AtsJobEmploymentType::Consultant;
    $request->atsJob->hiringManagerIds = [
        'Metrics',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'withdrawal';
    $request->atsJob->name = 'index';
    $request->atsJob->publicJobUrls = [
        'visualize',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'Investor',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Closed;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-25T23:18:21.631Z');
    $request->connectionId = 'Orchestrator';
    $request->id = '<ID>';

    $response = $sdk->job->updateAtsJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateAtsJobRequest](../../models/operations/UpdateAtsJobRequest.md) | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsJobResponse](../../models/operations/UpdateAtsJobResponse.md)**

