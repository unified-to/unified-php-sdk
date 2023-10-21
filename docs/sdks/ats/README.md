# Ats
(*ats*)

### Available Operations

* [createAtsApplication](#createatsapplication) - Create an application
* [createAtsCandidate](#createatscandidate) - Create a candidate
* [createAtsInterview](#createatsinterview) - Create a interview
* [createAtsJob](#createatsjob) - Create a job
* [createAtsScorecard](#createatsscorecard) - Create a scorecard
* [getAtsApplication](#getatsapplication) - Retrieve an application
* [getAtsCandidate](#getatscandidate) - Retrieve a candidate
* [getAtsInterview](#getatsinterview) - Retrieve a interview
* [getAtsJob](#getatsjob) - Retrieve a job
* [getAtsScorecard](#getatsscorecard) - Retrieve a scorecard
* [listAtsApplications](#listatsapplications) - List all applications
* [listAtsCandidates](#listatscandidates) - List all candidates
* [listAtsInterviews](#listatsinterviews) - List all interviews
* [listAtsJobs](#listatsjobs) - List all jobs
* [listAtsScorecards](#listatsscorecards) - List all scorecards
* [patchAtsApplication](#patchatsapplication) - Update an application
* [patchAtsCandidate](#patchatscandidate) - Update a candidate
* [patchAtsInterview](#patchatsinterview) - Update a interview
* [patchAtsJob](#patchatsjob) - Update a job
* [patchAtsScorecard](#patchatsscorecard) - Update a scorecard
* [removeAtsApplication](#removeatsapplication) - Remove an application
* [removeAtsCandidate](#removeatscandidate) - Remove a candidate
* [removeAtsInterview](#removeatsinterview) - Remove a interview
* [removeAtsJob](#removeatsjob) - Remove a job
* [removeAtsScorecard](#removeatsscorecard) - Remove a scorecard
* [updateAtsApplication](#updateatsapplication) - Update an application
* [updateAtsCandidate](#updateatscandidate) - Update a candidate
* [updateAtsInterview](#updateatsinterview) - Update a interview
* [updateAtsJob](#updateatsjob) - Update a job
* [updateAtsScorecard](#updateatsscorecard) - Update a scorecard

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

    $response = $sdk->ats->createAtsApplication($request);

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


## createAtsCandidate

Create a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAtsCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAtsCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'string';
    $request->atsCandidate->address->address2 = 'string';
    $request->atsCandidate->address->city = 'South Hill';
    $request->atsCandidate->address->country = 'Denmark';
    $request->atsCandidate->address->countryCode = 'KM';
    $request->atsCandidate->address->postalCode = '72991-5163';
    $request->atsCandidate->address->region = 'string';
    $request->atsCandidate->address->regionCode = 'string';
    $request->atsCandidate->companyName = 'Pollich - Lubowitz';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-05T23:23:31.487Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'string';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'string';
    $request->atsCandidate->name = 'string';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'string',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'string';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-18T18:21:52.157Z');
    $request->connectionId = 'string';

    $response = $sdk->ats->createAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsCandidateRequest](../../models/operations/CreateAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsCandidateResponse](../../models/operations/CreateAtsCandidateResponse.md)**


## createAtsInterview

Create a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAtsInterviewRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'string';
    $request->atsInterview->candidateId = 'string';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-10T19:55:26.926Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-21T09:01:54.390Z');
    $request->atsInterview->externalEventXref = 'string';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'string';
    $request->atsInterview->location = 'string';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-19T09:10:03.014Z');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-07T14:25:56.954Z');
    $request->atsInterview->userIds = [
        'string',
    ];
    $request->connectionId = 'string';

    $response = $sdk->ats->createAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest](../../models/operations/CreateAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsInterviewResponse](../../models/operations/CreateAtsInterviewResponse.md)**


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
        'string',
    ];
    $request->atsJob->description = 'Secured fault-tolerant internet solution';
    $request->atsJob->employmentType = AtsJobEmploymentType::FullTime;
    $request->atsJob->hiringManagerIds = [
        'string',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'string';
    $request->atsJob->name = 'string';
    $request->atsJob->publicJobUrls = [
        'string',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'string',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Open;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-26T17:38:42.004Z');
    $request->connectionId = 'string';

    $response = $sdk->ats->createAtsJob($request);

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


## createAtsScorecard

Create a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAtsScorecardRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'string';
    $request->atsScorecard->candidateId = 'string';
    $request->atsScorecard->comment = 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-24T07:49:32.768Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'string';
    $request->atsScorecard->interviewerId = 'string';
    $request->atsScorecard->jobId = 'string';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::No;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-01T17:31:47.454Z');
    $request->connectionId = 'string';

    $response = $sdk->ats->createAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest](../../models/operations/CreateAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsScorecardResponse](../../models/operations/CreateAtsScorecardResponse.md)**


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

    $response = $sdk->ats->getAtsApplication($request);

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


## getAtsCandidate

Retrieve a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsCandidateRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsCandidateRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsCandidateRequest](../../models/operations/GetAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsCandidateResponse](../../models/operations/GetAtsCandidateResponse.md)**


## getAtsInterview

Retrieve a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsInterviewRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsInterviewRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsInterviewRequest](../../models/operations/GetAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsInterviewResponse](../../models/operations/GetAtsInterviewResponse.md)**


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
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsJob($request);

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


## getAtsScorecard

Retrieve a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAtsScorecardRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAtsScorecardRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->ats->getAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsScorecardRequest](../../models/operations/GetAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsScorecardResponse](../../models/operations/GetAtsScorecardResponse.md)**


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

    $response = $sdk->ats->listAtsApplications($request);

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


## listAtsCandidates

List all candidates

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAtsCandidatesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAtsCandidatesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 6384.09;
    $request->offset = 7452.94;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-03-17T23:18:31.102Z');

    $response = $sdk->ats->listAtsCandidates($request);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsCandidatesRequest](../../models/operations/ListAtsCandidatesRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsCandidatesResponse](../../models/operations/ListAtsCandidatesResponse.md)**


## listAtsInterviews

List all interviews

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAtsInterviewsRequest();
    $request->applicationId = 'string';
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 2562.12;
    $request->offset = 1185.02;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-28T09:19:25.744Z');

    $response = $sdk->ats->listAtsInterviews($request);

    if ($response->atsInterviews !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest](../../models/operations/ListAtsInterviewsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsInterviewsResponse](../../models/operations/ListAtsInterviewsResponse.md)**


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
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 3958.99;
    $request->offset = 3223.84;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-03T15:53:00.086Z');

    $response = $sdk->ats->listAtsJobs($request);

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


## listAtsScorecards

List all scorecards

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAtsScorecardsRequest();
    $request->applicationId = 'string';
    $request->candidateId = 'string';
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->interviewId = 'string';
    $request->jobId = 'string';
    $request->limit = 5126.98;
    $request->offset = 8077.44;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-19T17:42:56.145Z');

    $response = $sdk->ats->listAtsScorecards($request);

    if ($response->atsScorecards !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest](../../models/operations/ListAtsScorecardsRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsScorecardsResponse](../../models/operations/ListAtsScorecardsResponse.md)**


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

    $response = $sdk->ats->patchAtsApplication($request);

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


## patchAtsCandidate

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'string';
    $request->atsCandidate->address->address2 = 'string';
    $request->atsCandidate->address->city = 'Fort Bridget';
    $request->atsCandidate->address->country = 'Sri Lanka';
    $request->atsCandidate->address->countryCode = 'GI';
    $request->atsCandidate->address->postalCode = '46054';
    $request->atsCandidate->address->region = 'string';
    $request->atsCandidate->address->regionCode = 'string';
    $request->atsCandidate->companyName = 'Donnelly - Bartell';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-06T12:13:20.908Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'string';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'string';
    $request->atsCandidate->name = 'string';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'string',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'string';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-10-19T12:47:03.298Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsCandidateRequest](../../models/operations/PatchAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsCandidateResponse](../../models/operations/PatchAtsCandidateResponse.md)**


## patchAtsInterview

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsInterviewRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'string';
    $request->atsInterview->candidateId = 'string';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-11T21:35:40.790Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-28T19:11:29.616Z');
    $request->atsInterview->externalEventXref = 'string';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'string';
    $request->atsInterview->location = 'string';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-09-10T02:01:13.488Z');
    $request->atsInterview->status = AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-18T09:12:18.749Z');
    $request->atsInterview->userIds = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest](../../models/operations/PatchAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsInterviewResponse](../../models/operations/PatchAtsInterviewResponse.md)**


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
        'string',
    ];
    $request->atsJob->description = 'Seamless analyzing definition';
    $request->atsJob->employmentType = AtsJobEmploymentType::Intern;
    $request->atsJob->hiringManagerIds = [
        'string',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'string';
    $request->atsJob->name = 'string';
    $request->atsJob->publicJobUrls = [
        'string',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'string',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Open;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-14T04:38:28.121Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsJob($request);

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


## patchAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAtsScorecardRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'string';
    $request->atsScorecard->candidateId = 'string';
    $request->atsScorecard->comment = 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-06T15:26:03.447Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'string';
    $request->atsScorecard->interviewerId = 'string';
    $request->atsScorecard->jobId = 'string';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-28T07:58:12.100Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->patchAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest](../../models/operations/PatchAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsScorecardResponse](../../models/operations/PatchAtsScorecardResponse.md)**


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

    $response = $sdk->ats->removeAtsApplication($request);

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


## removeAtsCandidate

Remove a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAtsCandidateRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAtsCandidateRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->removeAtsCandidate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsCandidateRequest](../../models/operations/RemoveAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsCandidateResponse](../../models/operations/RemoveAtsCandidateResponse.md)**


## removeAtsInterview

Remove a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAtsInterviewRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->removeAtsInterview($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest](../../models/operations/RemoveAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsInterviewResponse](../../models/operations/RemoveAtsInterviewResponse.md)**


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
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->removeAtsJob($request);

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


## removeAtsScorecard

Remove a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAtsScorecardRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->removeAtsScorecard($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest](../../models/operations/RemoveAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsScorecardResponse](../../models/operations/RemoveAtsScorecardResponse.md)**


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

    $response = $sdk->ats->updateAtsApplication($request);

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


## updateAtsCandidate

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAtsCandidateRequest;
use \Unified\Unified_to\Models\Shared\AtsCandidate;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateAddress;
use \Unified\Unified_to\Models\Shared\AtsEmail;
use \Unified\Unified_to\Models\Shared\AtsEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAtsCandidateRaw;
use \Unified\Unified_to\Models\Shared\AtsTelephone;
use \Unified\Unified_to\Models\Shared\AtsTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAtsCandidateRequest();
    $request->atsCandidate = new AtsCandidate();
    $request->atsCandidate->address = new PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = 'string';
    $request->atsCandidate->address->address2 = 'string';
    $request->atsCandidate->address->city = 'Hintzborough';
    $request->atsCandidate->address->country = 'Afghanistan';
    $request->atsCandidate->address->countryCode = 'TF';
    $request->atsCandidate->address->postalCode = '39423';
    $request->atsCandidate->address->region = 'string';
    $request->atsCandidate->address->regionCode = 'string';
    $request->atsCandidate->companyName = 'O\'Reilly Inc';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-30T14:37:21.726Z');
    $request->atsCandidate->emails = [
        new AtsEmail(),
    ];
    $request->atsCandidate->externalId = 'string';
    $request->atsCandidate->id = '<ID>';
    $request->atsCandidate->imageUrl = 'string';
    $request->atsCandidate->name = 'string';
    $request->atsCandidate->raw = new PropertyAtsCandidateRaw();
    $request->atsCandidate->tags = [
        'string',
    ];
    $request->atsCandidate->telephones = [
        new AtsTelephone(),
    ];
    $request->atsCandidate->title = 'string';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-18T01:19:42.316Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->updateAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsCandidateRequest](../../models/operations/UpdateAtsCandidateRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsCandidateResponse](../../models/operations/UpdateAtsCandidateResponse.md)**


## updateAtsInterview

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest;
use \Unified\Unified_to\Models\Shared\AtsInterview;
use \Unified\Unified_to\Models\Shared\PropertyAtsInterviewRaw;
use \Unified\Unified_to\Models\Shared\AtsInterviewStatus;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAtsInterviewRequest();
    $request->atsInterview = new AtsInterview();
    $request->atsInterview->applicationId = 'string';
    $request->atsInterview->candidateId = 'string';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-06T10:37:46.574Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-29T10:34:23.230Z');
    $request->atsInterview->externalEventXref = 'string';
    $request->atsInterview->id = '<ID>';
    $request->atsInterview->jobId = 'string';
    $request->atsInterview->location = 'string';
    $request->atsInterview->raw = new PropertyAtsInterviewRaw();
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-05T12:38:13.018Z');
    $request->atsInterview->status = AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-01T14:26:12.006Z');
    $request->atsInterview->userIds = [
        'string',
    ];
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->updateAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest](../../models/operations/UpdateAtsInterviewRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsInterviewResponse](../../models/operations/UpdateAtsInterviewResponse.md)**


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
        'string',
    ];
    $request->atsJob->description = 'Implemented even-keeled parallelism';
    $request->atsJob->employmentType = AtsJobEmploymentType::FullTime;
    $request->atsJob->hiringManagerIds = [
        'string',
    ];
    $request->atsJob->id = '<ID>';
    $request->atsJob->languageLocale = 'string';
    $request->atsJob->name = 'string';
    $request->atsJob->publicJobUrls = [
        'string',
    ];
    $request->atsJob->raw = new PropertyAtsJobRaw();
    $request->atsJob->recruiterIds = [
        'string',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = AtsJobStatus::Closed;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-12T15:41:17.674Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->updateAtsJob($request);

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


## updateAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest;
use \Unified\Unified_to\Models\Shared\AtsScorecard;
use \Unified\Unified_to\Models\Shared\PropertyAtsScorecardRaw;
use \Unified\Unified_to\Models\Shared\AtsScorecardRecommendation;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAtsScorecardRequest();
    $request->atsScorecard = new AtsScorecard();
    $request->atsScorecard->applicationId = 'string';
    $request->atsScorecard->candidateId = 'string';
    $request->atsScorecard->comment = 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-10T12:08:12.226Z');
    $request->atsScorecard->id = '<ID>';
    $request->atsScorecard->interviewId = 'string';
    $request->atsScorecard->interviewerId = 'string';
    $request->atsScorecard->jobId = 'string';
    $request->atsScorecard->raw = new PropertyAtsScorecardRaw();
    $request->atsScorecard->recommendation = AtsScorecardRecommendation::No;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-26T04:45:45.856Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->ats->updateAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest](../../models/operations/UpdateAtsScorecardRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsScorecardResponse](../../models/operations/UpdateAtsScorecardResponse.md)**

