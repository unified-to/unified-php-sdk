# Ats


### Available Operations

* [createAtsActivity](#createatsactivity) - Create an activity
* [createAtsApplication](#createatsapplication) - Create an application
* [createAtsCandidate](#createatscandidate) - Create a candidate
* [createAtsDocument](#createatsdocument) - Create a document
* [createAtsInterview](#createatsinterview) - Create a interview
* [createAtsJob](#createatsjob) - Create a job
* [createAtsScorecard](#createatsscorecard) - Create a scorecard
* [getAtsActivity](#getatsactivity) - Retrieve an activity
* [getAtsApplication](#getatsapplication) - Retrieve an application
* [getAtsCandidate](#getatscandidate) - Retrieve a candidate
* [getAtsCompany](#getatscompany) - Retrieve a company
* [getAtsDocument](#getatsdocument) - Retrieve a document
* [getAtsInterview](#getatsinterview) - Retrieve a interview
* [getAtsJob](#getatsjob) - Retrieve a job
* [getAtsScorecard](#getatsscorecard) - Retrieve a scorecard
* [listAtsActivities](#listatsactivities) - List all activities
* [listAtsApplications](#listatsapplications) - List all applications
* [listAtsApplicationstatuses](#listatsapplicationstatuses) - List all application statuses
* [listAtsCandidates](#listatscandidates) - List all candidates
* [listAtsCompanies](#listatscompanies) - List all companies
* [listAtsDocuments](#listatsdocuments) - List all documents
* [listAtsInterviews](#listatsinterviews) - List all interviews
* [listAtsJobs](#listatsjobs) - List all jobs
* [listAtsScorecards](#listatsscorecards) - List all scorecards
* [patchAtsActivity](#patchatsactivity) - Update an activity
* [patchAtsApplication](#patchatsapplication) - Update an application
* [patchAtsCandidate](#patchatscandidate) - Update a candidate
* [patchAtsDocument](#patchatsdocument) - Update a document
* [patchAtsInterview](#patchatsinterview) - Update a interview
* [patchAtsJob](#patchatsjob) - Update a job
* [patchAtsScorecard](#patchatsscorecard) - Update a scorecard
* [removeAtsActivity](#removeatsactivity) - Remove an activity
* [removeAtsApplication](#removeatsapplication) - Remove an application
* [removeAtsCandidate](#removeatscandidate) - Remove a candidate
* [removeAtsDocument](#removeatsdocument) - Remove a document
* [removeAtsInterview](#removeatsinterview) - Remove a interview
* [removeAtsJob](#removeatsjob) - Remove a job
* [removeAtsScorecard](#removeatsscorecard) - Remove a scorecard
* [updateAtsActivity](#updateatsactivity) - Update an activity
* [updateAtsApplication](#updateatsapplication) - Update an application
* [updateAtsCandidate](#updateatscandidate) - Update a candidate
* [updateAtsDocument](#updateatsdocument) - Update a document
* [updateAtsInterview](#updateatsinterview) - Update a interview
* [updateAtsJob](#updateatsjob) - Update a job
* [updateAtsScorecard](#updateatsscorecard) - Update a scorecard

## createAtsActivity

Create an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsActivityRequest();
    $request->atsActivity = new Shared\AtsActivity();
    $request->atsActivity->applicationId = '<value>';
    $request->atsActivity->candidateId = '<value>';
    $request->atsActivity->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-03T02:06:02.932Z');
    $request->atsActivity->description = 'Future-proofed non-volatile artificial intelligence';
    $request->atsActivity->documentId = '<value>';
    $request->atsActivity->id = '<id>';
    $request->atsActivity->interviewId = '<value>';
    $request->atsActivity->isPrivate = false;
    $request->atsActivity->jobId = '<value>';
    $request->atsActivity->raw = [
        'delectus' => '<value>',
    ];
    $request->atsActivity->title = '<value>';
    $request->atsActivity->type = Shared\AtsActivityType::Note;
    $request->atsActivity->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-23T01:05:37.510Z');
    $request->atsActivity->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->createAtsActivity($request, $requestSecurity);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsActivityRequest](../../Models/Operations/CreateAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsActivitySecurity](../../Models/Operations/CreateAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsActivityResponse](../../Models/Operations/CreateAtsActivityResponse.md)**


## createAtsApplication

Create an application

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsApplicationRequest();
    $request->atsApplication = new Shared\AtsApplication();
    $request->atsApplication->answers = [
        new Shared\AtsApplicationAnswer(),
    ];
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-09T05:03:52.917Z');
    $request->atsApplication->candidateId = '<value>';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-22T12:50:56.305Z');
    $request->atsApplication->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-19T06:26:51.678Z');
    $request->atsApplication->id = '<id>';
    $request->atsApplication->jobId = '<value>';
    $request->atsApplication->originalStatus = '<value>';
    $request->atsApplication->raw = [
        'Mandatory' => '<value>',
    ];
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-21T21:31:42.360Z');
    $request->atsApplication->rejectedReason = '<value>';
    $request->atsApplication->source = '<value>';
    $request->atsApplication->status = Shared\AtsApplicationStatus::SecondInterview;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-12T22:56:51.478Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsApplicationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->createAtsApplication($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateAtsApplicationRequest](../../Models/Operations/CreateAtsApplicationRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateAtsApplicationSecurity](../../Models/Operations/CreateAtsApplicationSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsApplicationResponse](../../Models/Operations/CreateAtsApplicationResponse.md)**


## createAtsCandidate

Create a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = '<value>';
    $request->atsCandidate->address->address2 = '<value>';
    $request->atsCandidate->address->city = 'South Hill';
    $request->atsCandidate->address->country = 'Denmark';
    $request->atsCandidate->address->countryCode = 'KM';
    $request->atsCandidate->address->postalCode = '72991-5163';
    $request->atsCandidate->address->region = '<value>';
    $request->atsCandidate->address->regionCode = '<value>';
    $request->atsCandidate->companyId = '<value>';
    $request->atsCandidate->companyName = 'Pollich - Lubowitz';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-06T00:47:39.352Z');
    $request->atsCandidate->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-19T09:25:00.753Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = '<value>';
    $request->atsCandidate->id = '<id>';
    $request->atsCandidate->imageUrl = '<value>';
    $request->atsCandidate->linkUrls = [
        '<value>',
    ];
    $request->atsCandidate->name = '<value>';
    $request->atsCandidate->origin = Shared\Origin::Sourced;
    $request->atsCandidate->raw = [
        'Legacy' => '<value>',
    ];
    $request->atsCandidate->sources = [
        '<value>',
    ];
    $request->atsCandidate->tags = [
        '<value>',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = '<value>';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-27T06:32:21.998Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->createAtsCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsCandidateRequest](../../Models/Operations/CreateAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsCandidateSecurity](../../Models/Operations/CreateAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsCandidateResponse](../../Models/Operations/CreateAtsCandidateResponse.md)**


## createAtsDocument

Create a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = '<value>';
    $request->atsDocument->candidateId = '<value>';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-25T01:00:46.478Z');
    $request->atsDocument->documentData = '<value>';
    $request->atsDocument->documentUrl = '<value>';
    $request->atsDocument->filename = 'mouse_per_missouri.mp4';
    $request->atsDocument->id = '<id>';
    $request->atsDocument->jobId = '<value>';
    $request->atsDocument->raw = [
        'empowering' => '<value>',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::CoverLetter;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-08T09:03:14.368Z');
    $request->atsDocument->userId = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsDocumentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->createAtsDocument($request, $requestSecurity);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsDocumentRequest](../../Models/Operations/CreateAtsDocumentRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\CreateAtsDocumentSecurity](../../Models/Operations/CreateAtsDocumentSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsDocumentResponse](../../Models/Operations/CreateAtsDocumentResponse.md)**


## createAtsInterview

Create a interview

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsInterviewRequest();
    $request->atsInterview = new Shared\AtsInterview();
    $request->atsInterview->applicationId = '<value>';
    $request->atsInterview->candidateId = '<value>';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-11T04:08:22.567Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-21T08:47:56.138Z');
    $request->atsInterview->externalEventXref = '<value>';
    $request->atsInterview->id = '<id>';
    $request->atsInterview->jobId = '<value>';
    $request->atsInterview->location = '<value>';
    $request->atsInterview->raw = [
        'Metrics' => '<value>',
    ];
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-07T15:15:23.855Z');
    $request->atsInterview->status = Shared\AtsInterviewStatus::AwaitingFeedback;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-20T08:44:17.279Z');
    $request->atsInterview->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsInterviewSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->createAtsInterview($request, $requestSecurity);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsInterviewRequest](../../Models/Operations/CreateAtsInterviewRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsInterviewSecurity](../../Models/Operations/CreateAtsInterviewSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsInterviewResponse](../../Models/Operations/CreateAtsInterviewResponse.md)**


## createAtsJob

Create a job

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsJobRequest();
    $request->atsJob = new Shared\AtsJob();
    $request->atsJob->addresses = [
        new Shared\AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-14T18:31:06.376Z');
    $request->atsJob->companyId = '<value>';
    $request->atsJob->compensation = [
        new Shared\AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-05T09:16:07.639Z');
    $request->atsJob->departments = [
        '<value>',
    ];
    $request->atsJob->description = 'Secured fault-tolerant internet solution';
    $request->atsJob->employmentType = Shared\EmploymentType::FullTime;
    $request->atsJob->hiringManagerIds = [
        '<value>',
    ];
    $request->atsJob->id = '<id>';
    $request->atsJob->languageLocale = '<value>';
    $request->atsJob->name = '<value>';
    $request->atsJob->numberOfOpenings = 6151.12;
    $request->atsJob->publicJobUrls = [
        '<value>',
    ];
    $request->atsJob->questions = [
        new Shared\AtsJobQuestion(),
    ];
    $request->atsJob->raw = [
        'wherever' => '<value>',
    ];
    $request->atsJob->recruiterIds = [
        '<value>',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = Shared\AtsJobStatus::Open;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-18T02:03:06.250Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsJobSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->createAtsJob($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateAtsJobRequest](../../Models/Operations/CreateAtsJobRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Unified\Unified_to\Models\Operations\CreateAtsJobSecurity](../../Models/Operations/CreateAtsJobSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsJobResponse](../../Models/Operations/CreateAtsJobResponse.md)**


## createAtsScorecard

Create a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = '<value>';
    $request->atsScorecard->candidateId = '<value>';
    $request->atsScorecard->comment = 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-24T10:18:34.661Z');
    $request->atsScorecard->id = '<id>';
    $request->atsScorecard->interviewId = '<value>';
    $request->atsScorecard->interviewerId = '<value>';
    $request->atsScorecard->jobId = '<value>';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'Inverse' => '<value>',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-16T16:10:16.235Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->createAtsScorecard($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsScorecardRequest](../../Models/Operations/CreateAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAtsScorecardSecurity](../../Models/Operations/CreateAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAtsScorecardResponse](../../Models/Operations/CreateAtsScorecardResponse.md)**


## getAtsActivity

Retrieve an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsActivityRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->getAtsActivity($request, $requestSecurity);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsActivityRequest](../../Models/Operations/GetAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsActivitySecurity](../../Models/Operations/GetAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsActivityResponse](../../Models/Operations/GetAtsActivityResponse.md)**


## getAtsApplication

Retrieve an application

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsApplicationRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsApplicationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->getAtsApplication($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetAtsApplicationRequest](../../Models/Operations/GetAtsApplicationRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\GetAtsApplicationSecurity](../../Models/Operations/GetAtsApplicationSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsApplicationResponse](../../Models/Operations/GetAtsApplicationResponse.md)**


## getAtsCandidate

Retrieve a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsCandidateRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->getAtsCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsCandidateRequest](../../Models/Operations/GetAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsCandidateSecurity](../../Models/Operations/GetAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsCandidateResponse](../../Models/Operations/GetAtsCandidateResponse.md)**


## getAtsCompany

Retrieve a company

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsCompanyRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsCompanySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->getAtsCompany($request, $requestSecurity);

    if ($response->atsCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsCompanyRequest](../../Models/Operations/GetAtsCompanyRequest.md)   | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |
| `security`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetAtsCompanySecurity](../../Models/Operations/GetAtsCompanySecurity.md) | :heavy_check_mark:                                                                                              | The security requirements to use for the request.                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsCompanyResponse](../../Models/Operations/GetAtsCompanyResponse.md)**


## getAtsDocument

Retrieve a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsDocumentRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsDocumentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->getAtsDocument($request, $requestSecurity);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsDocumentRequest](../../Models/Operations/GetAtsDocumentRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\GetAtsDocumentSecurity](../../Models/Operations/GetAtsDocumentSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsDocumentResponse](../../Models/Operations/GetAtsDocumentResponse.md)**


## getAtsInterview

Retrieve a interview

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsInterviewRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsInterviewSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->getAtsInterview($request, $requestSecurity);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsInterviewRequest](../../Models/Operations/GetAtsInterviewRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsInterviewSecurity](../../Models/Operations/GetAtsInterviewSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsInterviewResponse](../../Models/Operations/GetAtsInterviewResponse.md)**


## getAtsJob

Retrieve a job

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsJobRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsJobSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->getAtsJob($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                               | Type                                                                                                    | Required                                                                                                | Description                                                                                             |
| ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                              | [\Unified\Unified_to\Models\Operations\GetAtsJobRequest](../../Models/Operations/GetAtsJobRequest.md)   | :heavy_check_mark:                                                                                      | The request object to use for the request.                                                              |
| `security`                                                                                              | [\Unified\Unified_to\Models\Operations\GetAtsJobSecurity](../../Models/Operations/GetAtsJobSecurity.md) | :heavy_check_mark:                                                                                      | The security requirements to use for the request.                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsJobResponse](../../Models/Operations/GetAtsJobResponse.md)**


## getAtsScorecard

Retrieve a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAtsScorecardRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->getAtsScorecard($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsScorecardRequest](../../Models/Operations/GetAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAtsScorecardSecurity](../../Models/Operations/GetAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAtsScorecardResponse](../../Models/Operations/GetAtsScorecardResponse.md)**


## listAtsActivities

List all activities

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsActivitiesRequest();
    $request->applicationId = '<value>';
    $request->candidateId = '<value>';
    $request->connectionId = '<value>';
    $request->documentId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->interviewId = '<value>';
    $request->jobId = '<value>';
    $request->limit = 2367.19;
    $request->offset = 8254.25;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-13T18:19:17.967Z');
    $request->userId = '<value>';;

    $requestSecurity = new Operations\ListAtsActivitiesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsActivities($request, $requestSecurity);

    if ($response->atsActivities !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsActivitiesRequest](../../Models/Operations/ListAtsActivitiesRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsActivitiesSecurity](../../Models/Operations/ListAtsActivitiesSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsActivitiesResponse](../../Models/Operations/ListAtsActivitiesResponse.md)**


## listAtsApplications

List all applications

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsApplicationsRequest();
    $request->candidateId = '<value>';
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->jobId = '<value>';
    $request->limit = 441.56;
    $request->offset = 1448.74;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-21T20:30:01.596Z');;

    $requestSecurity = new Operations\ListAtsApplicationsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsApplications($request, $requestSecurity);

    if ($response->atsApplications !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListAtsApplicationsRequest](../../Models/Operations/ListAtsApplicationsRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListAtsApplicationsSecurity](../../Models/Operations/ListAtsApplicationsSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsApplicationsResponse](../../Models/Operations/ListAtsApplicationsResponse.md)**


## listAtsApplicationstatuses

List all application statuses

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsApplicationstatusesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5199.96;
    $request->offset = 7673.65;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-25T18:11:33.180Z');;

    $requestSecurity = new Operations\ListAtsApplicationstatusesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsApplicationstatuses($request, $requestSecurity);

    if ($response->atsStatuses !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesRequest](../../Models/Operations/ListAtsApplicationstatusesRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesSecurity](../../Models/Operations/ListAtsApplicationstatusesSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsApplicationstatusesResponse](../../Models/Operations/ListAtsApplicationstatusesResponse.md)**


## listAtsCandidates

List all candidates

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsCandidatesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 6384.09;
    $request->offset = 7452.94;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-18T00:58:25.541Z');;

    $requestSecurity = new Operations\ListAtsCandidatesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsCandidates($request, $requestSecurity);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsCandidatesRequest](../../Models/Operations/ListAtsCandidatesRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsCandidatesSecurity](../../Models/Operations/ListAtsCandidatesSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsCandidatesResponse](../../Models/Operations/ListAtsCandidatesResponse.md)**


## listAtsCompanies

List all companies

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsCompaniesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 6933.84;
    $request->offset = 7946.52;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-01T21:39:38.971Z');;

    $requestSecurity = new Operations\ListAtsCompaniesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsCompanies($request, $requestSecurity);

    if ($response->atsCompanies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsCompaniesRequest](../../Models/Operations/ListAtsCompaniesRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsCompaniesSecurity](../../Models/Operations/ListAtsCompaniesSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsCompaniesResponse](../../Models/Operations/ListAtsCompaniesResponse.md)**


## listAtsDocuments

List all documents

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsDocumentsRequest();
    $request->applicationId = '<value>';
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 9635.37;
    $request->offset = 8402.77;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-31T00:55:54.895Z');;

    $requestSecurity = new Operations\ListAtsDocumentsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsDocuments($request, $requestSecurity);

    if ($response->atsDocuments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsDocumentsRequest](../../Models/Operations/ListAtsDocumentsRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\ListAtsDocumentsSecurity](../../Models/Operations/ListAtsDocumentsSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsDocumentsResponse](../../Models/Operations/ListAtsDocumentsResponse.md)**


## listAtsInterviews

List all interviews

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsInterviewsRequest();
    $request->applicationId = '<value>';
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 2562.12;
    $request->offset = 1185.02;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-28T15:15:00.508Z');;

    $requestSecurity = new Operations\ListAtsInterviewsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsInterviews($request, $requestSecurity);

    if ($response->atsInterviews !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsInterviewsRequest](../../Models/Operations/ListAtsInterviewsRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsInterviewsSecurity](../../Models/Operations/ListAtsInterviewsSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsInterviewsResponse](../../Models/Operations/ListAtsInterviewsResponse.md)**


## listAtsJobs

List all jobs

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsJobsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 3958.99;
    $request->offset = 3223.84;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-04T01:14:05.456Z');;

    $requestSecurity = new Operations\ListAtsJobsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsJobs($request, $requestSecurity);

    if ($response->atsJobs !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListAtsJobsRequest](../../Models/Operations/ListAtsJobsRequest.md)   | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |
| `security`                                                                                                  | [\Unified\Unified_to\Models\Operations\ListAtsJobsSecurity](../../Models/Operations/ListAtsJobsSecurity.md) | :heavy_check_mark:                                                                                          | The security requirements to use for the request.                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsJobsResponse](../../Models/Operations/ListAtsJobsResponse.md)**


## listAtsScorecards

List all scorecards

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAtsScorecardsRequest();
    $request->applicationId = '<value>';
    $request->candidateId = '<value>';
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->interviewId = '<value>';
    $request->jobId = '<value>';
    $request->limit = 5126.98;
    $request->offset = 8077.44;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-19T14:46:22.333Z');;

    $requestSecurity = new Operations\ListAtsScorecardsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->listAtsScorecards($request, $requestSecurity);

    if ($response->atsScorecards !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsScorecardsRequest](../../Models/Operations/ListAtsScorecardsRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAtsScorecardsSecurity](../../Models/Operations/ListAtsScorecardsSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAtsScorecardsResponse](../../Models/Operations/ListAtsScorecardsResponse.md)**


## patchAtsActivity

Update an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsActivityRequest();
    $request->atsActivity = new Shared\AtsActivity();
    $request->atsActivity->applicationId = '<value>';
    $request->atsActivity->candidateId = '<value>';
    $request->atsActivity->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-03T16:46:57.187Z');
    $request->atsActivity->description = 'Compatible reciprocal archive';
    $request->atsActivity->documentId = '<value>';
    $request->atsActivity->id = '<id>';
    $request->atsActivity->interviewId = '<value>';
    $request->atsActivity->isPrivate = false;
    $request->atsActivity->jobId = '<value>';
    $request->atsActivity->raw = [
        'bypass' => '<value>',
    ];
    $request->atsActivity->title = '<value>';
    $request->atsActivity->type = Shared\AtsActivityType::Note;
    $request->atsActivity->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-01T06:46:19.269Z');
    $request->atsActivity->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->patchAtsActivity($request, $requestSecurity);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsActivityRequest](../../Models/Operations/PatchAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsActivitySecurity](../../Models/Operations/PatchAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsActivityResponse](../../Models/Operations/PatchAtsActivityResponse.md)**


## patchAtsApplication

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsApplicationRequest();
    $request->atsApplication = new Shared\AtsApplication();
    $request->atsApplication->answers = [
        new Shared\AtsApplicationAnswer(),
    ];
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-15T20:36:09.499Z');
    $request->atsApplication->candidateId = '<value>';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-06T05:56:57.062Z');
    $request->atsApplication->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-05T05:20:09.174Z');
    $request->atsApplication->id = '<id>';
    $request->atsApplication->jobId = '<value>';
    $request->atsApplication->originalStatus = '<value>';
    $request->atsApplication->raw = [
        'grey' => '<value>',
    ];
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-24T17:35:54.628Z');
    $request->atsApplication->rejectedReason = '<value>';
    $request->atsApplication->source = '<value>';
    $request->atsApplication->status = Shared\AtsApplicationStatus::Offered;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-18T16:36:51.738Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsApplicationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->patchAtsApplication($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchAtsApplicationRequest](../../Models/Operations/PatchAtsApplicationRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchAtsApplicationSecurity](../../Models/Operations/PatchAtsApplicationSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsApplicationResponse](../../Models/Operations/PatchAtsApplicationResponse.md)**


## patchAtsCandidate

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = '<value>';
    $request->atsCandidate->address->address2 = '<value>';
    $request->atsCandidate->address->city = 'Fort Bridget';
    $request->atsCandidate->address->country = 'Sri Lanka';
    $request->atsCandidate->address->countryCode = 'GI';
    $request->atsCandidate->address->postalCode = '46054';
    $request->atsCandidate->address->region = '<value>';
    $request->atsCandidate->address->regionCode = '<value>';
    $request->atsCandidate->companyId = '<value>';
    $request->atsCandidate->companyName = 'Donnelly - Bartell';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-07T04:20:35.612Z');
    $request->atsCandidate->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-20T03:10:26.424Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = '<value>';
    $request->atsCandidate->id = '<id>';
    $request->atsCandidate->imageUrl = '<value>';
    $request->atsCandidate->linkUrls = [
        '<value>',
    ];
    $request->atsCandidate->name = '<value>';
    $request->atsCandidate->origin = Shared\Origin::Applied;
    $request->atsCandidate->raw = [
        'Van' => '<value>',
    ];
    $request->atsCandidate->sources = [
        '<value>',
    ];
    $request->atsCandidate->tags = [
        '<value>',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = '<value>';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-30T15:05:49.494Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->patchAtsCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsCandidateRequest](../../Models/Operations/PatchAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsCandidateSecurity](../../Models/Operations/PatchAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsCandidateResponse](../../Models/Operations/PatchAtsCandidateResponse.md)**


## patchAtsDocument

Update a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = '<value>';
    $request->atsDocument->candidateId = '<value>';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-01T11:33:08.084Z');
    $request->atsDocument->documentData = '<value>';
    $request->atsDocument->documentUrl = '<value>';
    $request->atsDocument->filename = 'future_underpin.mp4v';
    $request->atsDocument->id = '<id>';
    $request->atsDocument->jobId = '<value>';
    $request->atsDocument->raw = [
        'ipsam' => '<value>',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::Other;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-04T16:17:46.270Z');
    $request->atsDocument->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsDocumentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->patchAtsDocument($request, $requestSecurity);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsDocumentRequest](../../Models/Operations/PatchAtsDocumentRequest.md)   | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |
| `security`                                                                                                            | [\Unified\Unified_to\Models\Operations\PatchAtsDocumentSecurity](../../Models/Operations/PatchAtsDocumentSecurity.md) | :heavy_check_mark:                                                                                                    | The security requirements to use for the request.                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsDocumentResponse](../../Models/Operations/PatchAtsDocumentResponse.md)**


## patchAtsInterview

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsInterviewRequest();
    $request->atsInterview = new Shared\AtsInterview();
    $request->atsInterview->applicationId = '<value>';
    $request->atsInterview->candidateId = '<value>';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-11T19:09:34.526Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-28T22:25:51.616Z');
    $request->atsInterview->externalEventXref = '<value>';
    $request->atsInterview->id = '<id>';
    $request->atsInterview->jobId = '<value>';
    $request->atsInterview->location = '<value>';
    $request->atsInterview->raw = [
        'Handmade' => '<value>',
    ];
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-18T02:52:45.725Z');
    $request->atsInterview->status = Shared\AtsInterviewStatus::Scheduled;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-11-05T22:15:01.656Z');
    $request->atsInterview->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsInterviewSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->patchAtsInterview($request, $requestSecurity);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsInterviewRequest](../../Models/Operations/PatchAtsInterviewRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsInterviewSecurity](../../Models/Operations/PatchAtsInterviewSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsInterviewResponse](../../Models/Operations/PatchAtsInterviewResponse.md)**


## patchAtsJob

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsJobRequest();
    $request->atsJob = new Shared\AtsJob();
    $request->atsJob->addresses = [
        new Shared\AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-09T17:44:16.617Z');
    $request->atsJob->companyId = '<value>';
    $request->atsJob->compensation = [
        new Shared\AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-09T17:48:14.891Z');
    $request->atsJob->departments = [
        '<value>',
    ];
    $request->atsJob->description = 'Seamless analyzing definition';
    $request->atsJob->employmentType = Shared\EmploymentType::Intern;
    $request->atsJob->hiringManagerIds = [
        '<value>',
    ];
    $request->atsJob->id = '<id>';
    $request->atsJob->languageLocale = '<value>';
    $request->atsJob->name = '<value>';
    $request->atsJob->numberOfOpenings = 6182.06;
    $request->atsJob->publicJobUrls = [
        '<value>',
    ];
    $request->atsJob->questions = [
        new Shared\AtsJobQuestion(),
    ];
    $request->atsJob->raw = [
        'North' => '<value>',
    ];
    $request->atsJob->recruiterIds = [
        '<value>',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = Shared\AtsJobStatus::Closed;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-08T17:34:59.133Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsJobSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->patchAtsJob($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                   | Type                                                                                                        | Required                                                                                                    | Description                                                                                                 |
| ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchAtsJobRequest](../../Models/Operations/PatchAtsJobRequest.md)   | :heavy_check_mark:                                                                                          | The request object to use for the request.                                                                  |
| `security`                                                                                                  | [\Unified\Unified_to\Models\Operations\PatchAtsJobSecurity](../../Models/Operations/PatchAtsJobSecurity.md) | :heavy_check_mark:                                                                                          | The security requirements to use for the request.                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsJobResponse](../../Models/Operations/PatchAtsJobResponse.md)**


## patchAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = '<value>';
    $request->atsScorecard->candidateId = '<value>';
    $request->atsScorecard->comment = 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-06T13:32:29.533Z');
    $request->atsScorecard->id = '<id>';
    $request->atsScorecard->interviewId = '<value>';
    $request->atsScorecard->interviewerId = '<value>';
    $request->atsScorecard->jobId = '<value>';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'World' => '<value>',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-07T14:14:42.219Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->patchAtsScorecard($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsScorecardRequest](../../Models/Operations/PatchAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAtsScorecardSecurity](../../Models/Operations/PatchAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAtsScorecardResponse](../../Models/Operations/PatchAtsScorecardResponse.md)**


## removeAtsActivity

Remove an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsActivityRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->removeAtsActivity($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsActivityRequest](../../Models/Operations/RemoveAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsActivitySecurity](../../Models/Operations/RemoveAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsActivityResponse](../../Models/Operations/RemoveAtsActivityResponse.md)**


## removeAtsApplication

Remove an application

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsApplicationRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsApplicationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->removeAtsApplication($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveAtsApplicationRequest](../../Models/Operations/RemoveAtsApplicationRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveAtsApplicationSecurity](../../Models/Operations/RemoveAtsApplicationSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsApplicationResponse](../../Models/Operations/RemoveAtsApplicationResponse.md)**


## removeAtsCandidate

Remove a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsCandidateRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->removeAtsCandidate($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsCandidateRequest](../../Models/Operations/RemoveAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsCandidateSecurity](../../Models/Operations/RemoveAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsCandidateResponse](../../Models/Operations/RemoveAtsCandidateResponse.md)**


## removeAtsDocument

Remove a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsDocumentRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsDocumentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->removeAtsDocument($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsDocumentRequest](../../Models/Operations/RemoveAtsDocumentRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\RemoveAtsDocumentSecurity](../../Models/Operations/RemoveAtsDocumentSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsDocumentResponse](../../Models/Operations/RemoveAtsDocumentResponse.md)**


## removeAtsInterview

Remove a interview

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsInterviewRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsInterviewSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->removeAtsInterview($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsInterviewRequest](../../Models/Operations/RemoveAtsInterviewRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsInterviewSecurity](../../Models/Operations/RemoveAtsInterviewSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsInterviewResponse](../../Models/Operations/RemoveAtsInterviewResponse.md)**


## removeAtsJob

Remove a job

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsJobRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsJobSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->removeAtsJob($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveAtsJobRequest](../../Models/Operations/RemoveAtsJobRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Unified\Unified_to\Models\Operations\RemoveAtsJobSecurity](../../Models/Operations/RemoveAtsJobSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsJobResponse](../../Models/Operations/RemoveAtsJobResponse.md)**


## removeAtsScorecard

Remove a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAtsScorecardRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->removeAtsScorecard($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsScorecardRequest](../../Models/Operations/RemoveAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAtsScorecardSecurity](../../Models/Operations/RemoveAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAtsScorecardResponse](../../Models/Operations/RemoveAtsScorecardResponse.md)**


## updateAtsActivity

Update an activity

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsActivityRequest();
    $request->atsActivity = new Shared\AtsActivity();
    $request->atsActivity->applicationId = '<value>';
    $request->atsActivity->candidateId = '<value>';
    $request->atsActivity->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-06T07:57:58.715Z');
    $request->atsActivity->description = 'Total fault-tolerant collaboration';
    $request->atsActivity->documentId = '<value>';
    $request->atsActivity->id = '<id>';
    $request->atsActivity->interviewId = '<value>';
    $request->atsActivity->isPrivate = false;
    $request->atsActivity->jobId = '<value>';
    $request->atsActivity->raw = [
        'Northwest' => '<value>',
    ];
    $request->atsActivity->title = '<value>';
    $request->atsActivity->type = Shared\AtsActivityType::Task;
    $request->atsActivity->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-23T02:31:19.090Z');
    $request->atsActivity->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsActivitySecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->updateAtsActivity($request, $requestSecurity);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsActivityRequest](../../Models/Operations/UpdateAtsActivityRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsActivitySecurity](../../Models/Operations/UpdateAtsActivitySecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsActivityResponse](../../Models/Operations/UpdateAtsActivityResponse.md)**


## updateAtsApplication

Update an application

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsApplicationRequest();
    $request->atsApplication = new Shared\AtsApplication();
    $request->atsApplication->answers = [
        new Shared\AtsApplicationAnswer(),
    ];
    $request->atsApplication->appliedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-22T12:21:27.415Z');
    $request->atsApplication->candidateId = '<value>';
    $request->atsApplication->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-04T12:46:09.878Z');
    $request->atsApplication->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-09T08:57:01.906Z');
    $request->atsApplication->id = '<id>';
    $request->atsApplication->jobId = '<value>';
    $request->atsApplication->originalStatus = '<value>';
    $request->atsApplication->raw = [
        'Minivan' => '<value>',
    ];
    $request->atsApplication->rejectedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-17T03:12:00.865Z');
    $request->atsApplication->rejectedReason = '<value>';
    $request->atsApplication->source = '<value>';
    $request->atsApplication->status = Shared\AtsApplicationStatus::Rejected;
    $request->atsApplication->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-09T12:26:06.546Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsApplicationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->updateAtsApplication($request, $requestSecurity);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateAtsApplicationRequest](../../Models/Operations/UpdateAtsApplicationRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateAtsApplicationSecurity](../../Models/Operations/UpdateAtsApplicationSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsApplicationResponse](../../Models/Operations/UpdateAtsApplicationResponse.md)**


## updateAtsCandidate

Update a candidate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsCandidateRequest();
    $request->atsCandidate = new Shared\AtsCandidate();
    $request->atsCandidate->address = new Shared\PropertyAtsCandidateAddress();
    $request->atsCandidate->address->address1 = '<value>';
    $request->atsCandidate->address->address2 = '<value>';
    $request->atsCandidate->address->city = 'Hintzborough';
    $request->atsCandidate->address->country = 'Afghanistan';
    $request->atsCandidate->address->countryCode = 'TF';
    $request->atsCandidate->address->postalCode = '39423';
    $request->atsCandidate->address->region = '<value>';
    $request->atsCandidate->address->regionCode = '<value>';
    $request->atsCandidate->companyId = '<value>';
    $request->atsCandidate->companyName = 'O\'Reilly Inc';
    $request->atsCandidate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-31T03:55:05.691Z');
    $request->atsCandidate->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-18T17:01:22.026Z');
    $request->atsCandidate->emails = [
        new Shared\AtsEmail(),
    ];
    $request->atsCandidate->externalId = '<value>';
    $request->atsCandidate->id = '<id>';
    $request->atsCandidate->imageUrl = '<value>';
    $request->atsCandidate->linkUrls = [
        '<value>',
    ];
    $request->atsCandidate->name = '<value>';
    $request->atsCandidate->origin = Shared\Origin::Agency;
    $request->atsCandidate->raw = [
        'Potassium' => '<value>',
    ];
    $request->atsCandidate->sources = [
        '<value>',
    ];
    $request->atsCandidate->tags = [
        '<value>',
    ];
    $request->atsCandidate->telephones = [
        new Shared\AtsTelephone(),
    ];
    $request->atsCandidate->title = '<value>';
    $request->atsCandidate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-19T09:22:29.995Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsCandidateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->updateAtsCandidate($request, $requestSecurity);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsCandidateRequest](../../Models/Operations/UpdateAtsCandidateRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsCandidateSecurity](../../Models/Operations/UpdateAtsCandidateSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsCandidateResponse](../../Models/Operations/UpdateAtsCandidateResponse.md)**


## updateAtsDocument

Update a document

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsDocumentRequest();
    $request->atsDocument = new Shared\AtsDocument();
    $request->atsDocument->applicationId = '<value>';
    $request->atsDocument->candidateId = '<value>';
    $request->atsDocument->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-05T17:05:49.106Z');
    $request->atsDocument->documentData = '<value>';
    $request->atsDocument->documentUrl = '<value>';
    $request->atsDocument->filename = 'unbranded_reprehenderit.jpg';
    $request->atsDocument->id = '<id>';
    $request->atsDocument->jobId = '<value>';
    $request->atsDocument->raw = [
        'GB' => '<value>',
    ];
    $request->atsDocument->type = Shared\AtsDocumentType::OfferPacket;
    $request->atsDocument->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-21T13:20:57.007Z');
    $request->atsDocument->userId = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsDocumentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->updateAtsDocument($request, $requestSecurity);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsDocumentRequest](../../Models/Operations/UpdateAtsDocumentRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\UpdateAtsDocumentSecurity](../../Models/Operations/UpdateAtsDocumentSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsDocumentResponse](../../Models/Operations/UpdateAtsDocumentResponse.md)**


## updateAtsInterview

Update a interview

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsInterviewRequest();
    $request->atsInterview = new Shared\AtsInterview();
    $request->atsInterview->applicationId = '<value>';
    $request->atsInterview->candidateId = '<value>';
    $request->atsInterview->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-06T05:22:44.534Z');
    $request->atsInterview->endAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-29T20:29:22.648Z');
    $request->atsInterview->externalEventXref = '<value>';
    $request->atsInterview->id = '<id>';
    $request->atsInterview->jobId = '<value>';
    $request->atsInterview->location = '<value>';
    $request->atsInterview->raw = [
        'maroon' => '<value>',
    ];
    $request->atsInterview->startAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-01T17:04:47.962Z');
    $request->atsInterview->status = Shared\AtsInterviewStatus::Complete;
    $request->atsInterview->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-27T22:37:40.818Z');
    $request->atsInterview->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsInterviewSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->updateAtsInterview($request, $requestSecurity);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsInterviewRequest](../../Models/Operations/UpdateAtsInterviewRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsInterviewSecurity](../../Models/Operations/UpdateAtsInterviewSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsInterviewResponse](../../Models/Operations/UpdateAtsInterviewResponse.md)**


## updateAtsJob

Update a job

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsJobRequest();
    $request->atsJob = new Shared\AtsJob();
    $request->atsJob->addresses = [
        new Shared\AtsAddress(),
    ];
    $request->atsJob->closedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-21T07:41:08.131Z');
    $request->atsJob->companyId = '<value>';
    $request->atsJob->compensation = [
        new Shared\AtsCompensation(),
    ];
    $request->atsJob->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-28T21:47:53.309Z');
    $request->atsJob->departments = [
        '<value>',
    ];
    $request->atsJob->description = 'Implemented even-keeled parallelism';
    $request->atsJob->employmentType = Shared\EmploymentType::FullTime;
    $request->atsJob->hiringManagerIds = [
        '<value>',
    ];
    $request->atsJob->id = '<id>';
    $request->atsJob->languageLocale = '<value>';
    $request->atsJob->name = '<value>';
    $request->atsJob->numberOfOpenings = 9080.02;
    $request->atsJob->publicJobUrls = [
        '<value>',
    ];
    $request->atsJob->questions = [
        new Shared\AtsJobQuestion(),
    ];
    $request->atsJob->raw = [
        'Direct' => '<value>',
    ];
    $request->atsJob->recruiterIds = [
        '<value>',
    ];
    $request->atsJob->remote = false;
    $request->atsJob->status = Shared\AtsJobStatus::Draft;
    $request->atsJob->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-04T04:44:52.139Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsJobSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->updateAtsJob($request, $requestSecurity);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateAtsJobRequest](../../Models/Operations/UpdateAtsJobRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Unified\Unified_to\Models\Operations\UpdateAtsJobSecurity](../../Models/Operations/UpdateAtsJobSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsJobResponse](../../Models/Operations/UpdateAtsJobResponse.md)**


## updateAtsScorecard

Update a scorecard

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAtsScorecardRequest();
    $request->atsScorecard = new Shared\AtsScorecard();
    $request->atsScorecard->applicationId = '<value>';
    $request->atsScorecard->candidateId = '<value>';
    $request->atsScorecard->comment = 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive';
    $request->atsScorecard->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T16:18:43.908Z');
    $request->atsScorecard->id = '<id>';
    $request->atsScorecard->interviewId = '<value>';
    $request->atsScorecard->interviewerId = '<value>';
    $request->atsScorecard->jobId = '<value>';
    $request->atsScorecard->questions = [
        new Shared\AtsScorecardQuestion(),
    ];
    $request->atsScorecard->raw = [
        'Digitized' => '<value>',
    ];
    $request->atsScorecard->recommendation = Shared\Recommendation::Yes;
    $request->atsScorecard->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-16T12:20:06.330Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAtsScorecardSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->ats->updateAtsScorecard($request, $requestSecurity);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsScorecardRequest](../../Models/Operations/UpdateAtsScorecardRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAtsScorecardSecurity](../../Models/Operations/UpdateAtsScorecardSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAtsScorecardResponse](../../Models/Operations/UpdateAtsScorecardResponse.md)**

