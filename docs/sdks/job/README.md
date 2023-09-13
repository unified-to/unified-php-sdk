# job

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
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new DeleteAtsConnectionIdJobIdRequest();
    $request->connectionId = 'rem';
    $request->id = 'db2cf2bf-4f3d-4ed3-96d7-e14b21cd9819';

    $requestSecurity = new DeleteAtsConnectionIdJobIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->job->deleteAtsConnectionIdJobId($request, $requestSecurity);

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
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdRequest](../../models/operations/DeleteAtsConnectionIdJobIdRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\DeleteAtsConnectionIdJobIdSecurity](../../models/operations/DeleteAtsConnectionIdJobIdSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdJobRequest();
    $request->connectionId = 'aliquid';
    $request->limit = 8288.58;
    $request->offset = 3320;
    $request->order = 'quis';
    $request->query = 'id';
    $request->sort = 'delectus';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d', '2022-05-22');

    $requestSecurity = new GetAtsConnectionIdJobSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->job->getAtsConnectionIdJob($request, $requestSecurity);

    if ($response->atsJobs !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobRequest](../../models/operations/GetAtsConnectionIdJobRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobSecurity](../../models/operations/GetAtsConnectionIdJobSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


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
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new GetAtsConnectionIdJobIdRequest();
    $request->connectionId = 'mollitia';
    $request->id = '1c4b79ae-3368-41c2-bc39-a7c0e17cb12c';

    $requestSecurity = new GetAtsConnectionIdJobIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->job->getAtsConnectionIdJobId($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdRequest](../../models/operations/GetAtsConnectionIdJobIdRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsConnectionIdJobIdSecurity](../../models/operations/GetAtsConnectionIdJobIdSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


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
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;
use \Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PatchAtsConnectionIdJobIdRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d', '2022-04-11');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d', '2021-12-21');
    $request->atsJob->departments = [
        'fugit',
    ];
    $request->atsJob->description = 'corporis';
    $request->atsJob->employmentType = AtsJobEmploymentType::Other;
    $request->atsJob->hiringManagerIds = [
        'necessitatibus',
    ];
    $request->atsJob->id = '22cd5cba-6fbf-4ec9-b2af-6813d65bfece';
    $request->atsJob->languageLocale = 'quod';
    $request->atsJob->name = 'Angelina Swaniawski';
    $request->atsJob->publicJobUrls = [
        'inventore',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'ea',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Closed;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d', '2022-01-14');
    $request->connectionId = 'minus';
    $request->id = '7dda70ec-60e6-4075-894d-61c14cd90227';

    $requestSecurity = new PatchAtsConnectionIdJobIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->job->patchAtsConnectionIdJobId($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdRequest](../../models/operations/PatchAtsConnectionIdJobIdRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsConnectionIdJobIdSecurity](../../models/operations/PatchAtsConnectionIdJobIdSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


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
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;
use \Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PostAtsConnectionIdJobRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d', '2022-05-21');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d', '2022-04-01');
    $request->atsJob->departments = [
        'eaque',
    ];
    $request->atsJob->description = 'facere';
    $request->atsJob->employmentType = AtsJobEmploymentType::Casual;
    $request->atsJob->hiringManagerIds = [
        'reprehenderit',
    ];
    $request->atsJob->id = '7f1a5491-abe9-4751-b106-d23e03e69815';
    $request->atsJob->languageLocale = 'similique';
    $request->atsJob->name = 'Stewart Moen';
    $request->atsJob->publicJobUrls = [
        'nobis',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'repellendus',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Closed;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d', '2021-03-03');
    $request->connectionId = 'in';

    $requestSecurity = new PostAtsConnectionIdJobSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->job->postAtsConnectionIdJob($request, $requestSecurity);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobRequest](../../models/operations/PostAtsConnectionIdJobRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PostAtsConnectionIdJobSecurity](../../models/operations/PostAtsConnectionIdJobSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


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
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdRequest;
use \Unified\Unified_to\Models\Shared\AtsJob;
use \Unified\Unified_to\Models\Shared\AtsAddress;
use \Unified\Unified_to\Models\Shared\AtsCompensation;
use \Unified\Unified_to\Models\Shared\AtsCompensationFrequency;
use \Unified\Unified_to\Models\Shared\AtsCompensationType;
use \Unified\Unified_to\Models\Shared\AtsJobEmploymentType;
use \Unified\Unified_to\Models\Shared\PropertyAtsJobRaw;
use \Unified\Unified_to\Models\Shared\AtsJobStatus;
use \Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdSecurity;

$sdk = UnifiedTo::builder()
    ->build();

try {
    $request = new PutAtsConnectionIdJobIdRequest();
    $request->atsJob = new AtsJob();
    $request->atsJob->addresses = [
        new AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d', '2022-05-21');
    $request->atsJob->compensation = [
        new AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d', '2021-02-17');
    $request->atsJob->departments = [
        'nulla',
    ];
    $request->atsJob->description = 'tempora';
    $request->atsJob->employmentType = AtsJobEmploymentType::Other;
    $request->atsJob->hiringManagerIds = [
        'eos',
    ];
    $request->atsJob->id = 'd8a44640-ca60-4db7-ba2f-93f467dc0d8d';
    $request->atsJob->languageLocale = 'fuga';
    $request->atsJob->name = 'Melanie Bogisich';
    $request->atsJob->publicJobUrls = [
        'aut',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'quia',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Pending;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d', '2021-07-07');
    $request->connectionId = 'quas';
    $request->id = 'f277485c-1976-4af9-80da-7a089fc44db2';

    $requestSecurity = new PutAtsConnectionIdJobIdSecurity();
    $requestSecurity->jwt = '';

    $response = $sdk->job->putAtsConnectionIdJobId($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdRequest](../../models/operations/PutAtsConnectionIdJobIdRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdSecurity](../../models/operations/PutAtsConnectionIdJobIdSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\PutAtsConnectionIdJobIdResponse](../../models/operations/PutAtsConnectionIdJobIdResponse.md)**

