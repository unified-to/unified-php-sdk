# Job
(*job*)

### Available Operations

* [deleteAtsConnectionIdJobId](#deleteatsconnectionidjobid) - Remove a job
* [getAtsConnectionIdJob](#getatsconnectionidjob) - List all jobs
* [getAtsConnectionIdJobId](#getatsconnectionidjobid) - Retrieve a job
* [patchAtsConnectionIdJobId](#patchatsconnectionidjobid) - Update a job
* [postAtsConnectionIdJob](#postatsconnectionidjob) - Create a job
* [putAtsConnectionIdJobId](#putatsconnectionidjobid) - Update a job

## deleteAtsConnectionIdJobId

Remove a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new DeleteAtsConnectionIdJobIdRequest();
    $request->connectionId = 'Sedan Bedfordshire Hybrid';
    $request->id = '<ID>';

    $response = $sdk->job->deleteAtsConnectionIdJobId($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdRequest](../../models/operations/DeleteAtsConnectionIdJobIdRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdResponse](../../models/operations/DeleteAtsConnectionIdJobIdResponse.md)**


## getAtsConnectionIdJob

List all jobs

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsConnectionIdJobRequest();
    $request->connectionId = 'City katal';
    $request->limit = 3542.62;
    $request->offset = 5417.97;
    $request->order = 'publisher';
    $request->query = 'Folding';
    $request->sort = 'Kip gross recontextualize';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-12T03:36:20.050Z');

    $response = $sdk->job->getAtsConnectionIdJob($request);

    if ($response->atsJobs !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobRequest](../../models/operations/GetAtsConnectionIdJobRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobResponse](../../models/operations/GetAtsConnectionIdJobResponse.md)**


## getAtsConnectionIdJobId

Retrieve a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsConnectionIdJobIdRequest();
    $request->connectionId = 'Jazz';
    $request->id = '<ID>';

    $response = $sdk->job->getAtsConnectionIdJobId($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdRequest](../../models/operations/GetAtsConnectionIdJobIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdResponse](../../models/operations/GetAtsConnectionIdJobIdResponse.md)**


## patchAtsConnectionIdJobId

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdRequest;
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
    $request = new PatchAtsConnectionIdJobIdRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-08T22:05:20.134Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-25T05:01:57.220Z');
    $request->atsJob->departments = [
        'jaunty',
    ];
    $request->atsJob->description = 'Visionary human-resource framework';
    $request->atsJob->employmentType = AtsJobEmploymentType::Casual;
    $request->atsJob->hiringManagerIds = [
        'Kia',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'Ferrari Facilitator';
    $request->atsJob->name = 'redundant Towels Mendelevium';
    $request->atsJob->publicJobUrls = [
        'Manager',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'Grand',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Archived;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-18T01:50:37.635Z');
    $request->connectionId = 'Account Copernicium at';
    $request->id = '<ID>';

    $response = $sdk->job->patchAtsConnectionIdJobId($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdRequest](../../models/operations/PatchAtsConnectionIdJobIdRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdResponse](../../models/operations/PatchAtsConnectionIdJobIdResponse.md)**


## postAtsConnectionIdJob

Create a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobRequest;
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
    $request = new PostAtsConnectionIdJobRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-20T16:01:17.966Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-10T02:25:47.743Z');
    $request->atsJob->departments = [
        'Gasoline',
    ];
    $request->atsJob->description = 'Self-enabling hybrid capacity';
    $request->atsJob->employmentType = AtsJobEmploymentType::Freelance;
    $request->atsJob->hiringManagerIds = [
        'kelvin',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'upwardly';
    $request->atsJob->name = 'Diesel virtual';
    $request->atsJob->publicJobUrls = [
        'appetiser',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'scale',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Pending;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-02T08:41:47.798Z');
    $request->connectionId = 'crossly Krona perfectly';

    $response = $sdk->job->postAtsConnectionIdJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobRequest](../../models/operations/PostAtsConnectionIdJobRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobResponse](../../models/operations/PostAtsConnectionIdJobResponse.md)**


## putAtsConnectionIdJobId

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdRequest;
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
    $request = new PutAtsConnectionIdJobIdRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-03T19:59:38.491Z');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-31T19:51:50.974Z');
    $request->atsJob->departments = [
        'Keyboard',
    ];
    $request->atsJob->description = 'Upgradable scalable workforce';
    $request->atsJob->employmentType = AtsJobEmploymentType::Seasonal;
    $request->atsJob->hiringManagerIds = [
        'meanwhile',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'Dodge Outdoors BMW';
    $request->atsJob->name = 'Division Coordinator lighthearted';
    $request->atsJob->publicJobUrls = [
        'online',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'Bicycle',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Pending;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-18T14:37:16.689Z');
    $request->connectionId = 'Northwest';
    $request->id = '<ID>';

    $response = $sdk->job->putAtsConnectionIdJobId($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdRequest](../../models/operations/PutAtsConnectionIdJobIdRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdResponse](../../models/operations/PutAtsConnectionIdJobIdResponse.md)**

