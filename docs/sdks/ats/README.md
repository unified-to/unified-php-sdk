# Ats

## Overview

### Available Operations

* [createAtsActivity](#createatsactivity) - Create an activity
* [createAtsApplication](#createatsapplication) - Create an application
* [createAtsCandidate](#createatscandidate) - Create a candidate
* [createAtsDocument](#createatsdocument) - Create a document
* [createAtsInterview](#createatsinterview) - Create an interview
* [createAtsJob](#createatsjob) - Create a job
* [createAtsScorecard](#createatsscorecard) - Create a scorecard
* [getAtsActivity](#getatsactivity) - Retrieve an activity
* [getAtsApplication](#getatsapplication) - Retrieve an application
* [getAtsCandidate](#getatscandidate) - Retrieve a candidate
* [getAtsCompany](#getatscompany) - Retrieve a company
* [getAtsDocument](#getatsdocument) - Retrieve a document
* [getAtsInterview](#getatsinterview) - Retrieve an interview
* [getAtsJob](#getatsjob) - Retrieve a job
* [getAtsScorecard](#getatsscorecard) - Retrieve a scorecard
* [listAtsActivities](#listatsactivities) - List all activities
* [listAtsApplications](#listatsapplications) - List all applications
* [listAtsApplicationstatuses](#listatsapplicationstatuses) - List all applicationstatuses
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
* [patchAtsInterview](#patchatsinterview) - Update an interview
* [patchAtsJob](#patchatsjob) - Update a job
* [patchAtsScorecard](#patchatsscorecard) - Update a scorecard
* [removeAtsActivity](#removeatsactivity) - Remove an activity
* [removeAtsApplication](#removeatsapplication) - Remove an application
* [removeAtsCandidate](#removeatscandidate) - Remove a candidate
* [removeAtsDocument](#removeatsdocument) - Remove a document
* [removeAtsInterview](#removeatsinterview) - Remove an interview
* [removeAtsJob](#removeatsjob) - Remove a job
* [removeAtsScorecard](#removeatsscorecard) - Remove a scorecard
* [updateAtsActivity](#updateatsactivity) - Update an activity
* [updateAtsApplication](#updateatsapplication) - Update an application
* [updateAtsCandidate](#updateatscandidate) - Update a candidate
* [updateAtsDocument](#updateatsdocument) - Update a document
* [updateAtsInterview](#updateatsinterview) - Update an interview
* [updateAtsJob](#updateatsjob) - Update a job
* [updateAtsScorecard](#updateatsscorecard) - Update a scorecard

## createAtsActivity

Create an activity

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAtsActivityRequest(
        connectionId: '<value>',
        atsActivity: new Shared\AtsActivity(
            title: '<value>',
            applicationId: '<value>',
            bcc: [
                new Shared\AtsEmail,
            ],
            candidateId: '<value>',
            cc: [
                new Shared\AtsEmail,
            ],
            createdAt: Utils\Utils::parseDateTime('2022-11-03T02:06:02.932Z'),
            description: 'Future-proofed non-volatile artificial intelligence',
            documentId: '<value>',
            from: new Shared\PropertyAtsActivityFrom(
                email: 'Fermin.Marks24@yahoo.com',
                name: '<value>',
                type: Shared\PropertyAtsActivityFromType::Work,
            ),
            id: '<id>',
            interviewId: '<value>',
            isPrivate: false,
            jobId: '<value>',
            raw: [
                'partnerships' => '<value>',
            ],
            to: [
                new Shared\AtsEmail,
            ],
            type: Shared\AtsActivityType::Note,
            updatedAt: Utils\Utils::parseDateTime('2022-05-31T20:52:48.631Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->createAtsActivity($request);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAtsActivityRequest](../../Models/Operations/CreateAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAtsActivityResponse](../../Models/Operations/CreateAtsActivityResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createAtsApplication

Create an application

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAtsApplicationRequest(
        connectionId: '<value>',
        atsApplication: new Shared\AtsApplication(
            answers: [
                new Shared\AtsApplicationAnswer,
            ],
            appliedAt: Utils\Utils::parseDateTime('2024-03-09T05:03:52.917Z'),
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-09-22T12:50:56.305Z'),
            hiredAt: Utils\Utils::parseDateTime('2023-01-19T06:26:51.678Z'),
            id: '<id>',
            jobId: '<value>',
            offers: [
                new Shared\AtsOffer,
            ],
            originalStatus: '<value>',
            raw: [
                'Mandatory' => '<value>',
            ],
            rejectedAt: Utils\Utils::parseDateTime('2024-09-21T21:31:42.360Z'),
            rejectedReason: '<value>',
            source: '<value>',
            status: Shared\AtsApplicationStatus::ThirdInterview,
            updatedAt: Utils\Utils::parseDateTime('2024-01-12T22:56:51.478Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->createAtsApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateAtsApplicationRequest](../../Models/Operations/CreateAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateAtsApplicationResponse](../../Models/Operations/CreateAtsApplicationResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createAtsCandidate

Create a candidate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAtsCandidateRequest(
        connectionId: '<value>',
        atsCandidate: new Shared\AtsCandidate(
            address: new Shared\PropertyAtsCandidateAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'South Hill',
                country: 'Denmark',
                countryCode: 'KM',
                postalCode: '72991-5163',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Pollich - Lubowitz',
            createdAt: Utils\Utils::parseDateTime('2022-03-06T00:47:39.352Z'),
            dateOfBirth: Utils\Utils::parseDateTime('2023-11-19T09:25:00.753Z'),
            emails: [
                new Shared\AtsEmail,
            ],
            externalIdentifier: '<value>',
            id: '<id>',
            imageUrl: '<value>',
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            origin: Shared\Origin::Sourced,
            raw: [
                'Legacy' => '<value>',
            ],
            sources: [
                '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\AtsTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2022-09-27T06:32:21.998Z'),
            userId: '<value>',
            webUrl: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->createAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsCandidateRequest](../../Models/Operations/CreateAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsCandidateResponse](../../Models/Operations/CreateAtsCandidateResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createAtsDocument

Create a document

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAtsDocumentRequest(
        connectionId: '<value>',
        atsDocument: new Shared\AtsDocument(
            applicationId: '<value>',
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-04-25T01:00:46.478Z'),
            documentData: '<value>',
            documentUrl: '<value>',
            filename: 'your_file_here',
            id: '<id>',
            jobId: '<value>',
            raw: [
                'female' => '<value>',
            ],
            type: Shared\AtsDocumentType::CoverLetter,
            updatedAt: Utils\Utils::parseDateTime('2024-11-21T14:39:08.865Z'),
            userId: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->createAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAtsDocumentRequest](../../Models/Operations/CreateAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAtsDocumentResponse](../../Models/Operations/CreateAtsDocumentResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createAtsInterview

Create an interview

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAtsInterviewRequest(
        connectionId: '<value>',
        atsInterview: new Shared\AtsInterview(
            applicationId: '<value>',
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-01-11T04:08:22.567Z'),
            endAt: Utils\Utils::parseDateTime('2024-12-21T08:47:56.138Z'),
            externalEventXref: '<value>',
            id: '<id>',
            jobId: '<value>',
            location: '<value>',
            raw: [
                'Metrics' => '<value>',
            ],
            startAt: Utils\Utils::parseDateTime('2022-02-07T15:15:23.855Z'),
            status: Shared\AtsInterviewStatus::AwaitingFeedback,
            updatedAt: Utils\Utils::parseDateTime('2024-10-20T08:44:17.279Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->createAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsInterviewRequest](../../Models/Operations/CreateAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsInterviewResponse](../../Models/Operations/CreateAtsInterviewResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createAtsJob

Create a job

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAtsJobRequest(
        connectionId: '<value>',
        atsJob: new Shared\AtsJob(
            addresses: [
                new Shared\AtsAddress,
            ],
            closedAt: Utils\Utils::parseDateTime('2022-01-14T18:31:06.376Z'),
            companyId: '<value>',
            compensation: [
                new Shared\AtsCompensation,
            ],
            createdAt: Utils\Utils::parseDateTime('2023-04-05T09:16:07.639Z'),
            departments: [
                '<value>',
            ],
            description: 'Secured fault-tolerant internet solution',
            employmentType: Shared\EmploymentType::FullTime,
            hiringManagerIds: [
                '<value>',
            ],
            id: '<id>',
            languageLocale: '<value>',
            name: '<value>',
            numberOfOpenings: 6151.12,
            publicJobUrls: [
                '<value>',
            ],
            questions: [
                new Shared\AtsJobQuestion,
            ],
            raw: [
                'wherever' => '<value>',
            ],
            recruiterIds: [
                '<value>',
            ],
            remote: false,
            status: Shared\AtsJobStatus::Open,
            updatedAt: Utils\Utils::parseDateTime('2024-11-18T02:03:06.250Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->createAtsJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CreateAtsJobRequest](../../Models/Operations/CreateAtsJobRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CreateAtsJobResponse](../../Models/Operations/CreateAtsJobResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## createAtsScorecard

Create a scorecard

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAtsScorecardRequest(
        connectionId: '<value>',
        atsScorecard: new Shared\AtsScorecard(
            applicationId: '<value>',
            candidateId: '<value>',
            comment: 'The Nagasaki Lander is the trademarked name of several series of Nagasaki sport bikes, that started with the 1984 ABC800J',
            createdAt: Utils\Utils::parseDateTime('2022-04-24T10:18:34.661Z'),
            id: '<id>',
            interviewId: '<value>',
            interviewerId: '<value>',
            jobId: '<value>',
            questions: [
                new Shared\AtsScorecardQuestion,
            ],
            raw: [
                'Inverse' => '<value>',
            ],
            recommendation: Shared\Recommendation::Yes,
            updatedAt: Utils\Utils::parseDateTime('2024-12-16T16:10:16.235Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->createAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsScorecardRequest](../../Models/Operations/CreateAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsScorecardResponse](../../Models/Operations/CreateAtsScorecardResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsActivity

Retrieve an activity

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsActivityRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->getAtsActivity($request);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAtsActivityRequest](../../Models/Operations/GetAtsActivityRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAtsActivityResponse](../../Models/Operations/GetAtsActivityResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsApplication

Retrieve an application

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsApplicationRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->getAtsApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetAtsApplicationRequest](../../Models/Operations/GetAtsApplicationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetAtsApplicationResponse](../../Models/Operations/GetAtsApplicationResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsCandidate

Retrieve a candidate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsCandidateRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->getAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsCandidateRequest](../../Models/Operations/GetAtsCandidateRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsCandidateResponse](../../Models/Operations/GetAtsCandidateResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsCompany

Retrieve a company

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsCompanyRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->getAtsCompany($request);

    if ($response->atsCompany !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetAtsCompanyRequest](../../Models/Operations/GetAtsCompanyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetAtsCompanyResponse](../../Models/Operations/GetAtsCompanyResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsDocument

Retrieve a document

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsDocumentRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->getAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAtsDocumentRequest](../../Models/Operations/GetAtsDocumentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAtsDocumentResponse](../../Models/Operations/GetAtsDocumentResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsInterview

Retrieve an interview

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsInterviewRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->getAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsInterviewRequest](../../Models/Operations/GetAtsInterviewRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsInterviewResponse](../../Models/Operations/GetAtsInterviewResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsJob

Retrieve a job

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsJobRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->getAtsJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetAtsJobRequest](../../Models/Operations/GetAtsJobRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\GetAtsJobResponse](../../Models/Operations/GetAtsJobResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAtsScorecard

Retrieve a scorecard

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAtsScorecardRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->getAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsScorecardRequest](../../Models/Operations/GetAtsScorecardRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsScorecardResponse](../../Models/Operations/GetAtsScorecardResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsActivities

List all activities

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsActivitiesRequest(
        connectionId: '<value>',
        applicationId: '<value>',
        candidateId: '<value>',
        documentId: '<value>',
        fields: [
            '<value>',
        ],
        interviewId: '<value>',
        jobId: '<value>',
        limit: 2367.19,
        offset: 8254.25,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-11-13T18:19:17.967Z'),
        userId: '<value>',
    );
    $response = $sdk->ats->listAtsActivities($request);

    if ($response->atsActivities !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsActivitiesRequest](../../Models/Operations/ListAtsActivitiesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsActivitiesResponse](../../Models/Operations/ListAtsActivitiesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsApplications

List all applications

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsApplicationsRequest(
        connectionId: '<value>',
        candidateId: '<value>',
        fields: [
            '<value>',
        ],
        jobId: '<value>',
        limit: 441.56,
        offset: 1448.74,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-12-21T20:30:01.596Z'),
    );
    $response = $sdk->ats->listAtsApplications($request);

    if ($response->atsApplications !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListAtsApplicationsRequest](../../Models/Operations/ListAtsApplicationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListAtsApplicationsResponse](../../Models/Operations/ListAtsApplicationsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsApplicationstatuses

List all applicationstatuses

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsApplicationstatusesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 5199.96,
        offset: 7673.65,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-03-25T18:11:33.180Z'),
    );
    $response = $sdk->ats->listAtsApplicationstatuses($request);

    if ($response->atsStatuses !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAtsApplicationstatusesRequest](../../Models/Operations/ListAtsApplicationstatusesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAtsApplicationstatusesResponse](../../Models/Operations/ListAtsApplicationstatusesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsCandidates

List all candidates

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsCandidatesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        jobId: '<value>',
        limit: 6384.09,
        offset: 7452.94,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-03-18T00:58:25.541Z'),
    );
    $response = $sdk->ats->listAtsCandidates($request);

    if ($response->atsCandidates !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsCandidatesRequest](../../Models/Operations/ListAtsCandidatesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsCandidatesResponse](../../Models/Operations/ListAtsCandidatesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsCompanies

List all companies

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsCompaniesRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 6933.84,
        offset: 7946.52,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-10-01T21:39:38.971Z'),
    );
    $response = $sdk->ats->listAtsCompanies($request);

    if ($response->atsCompanies !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAtsCompaniesRequest](../../Models/Operations/ListAtsCompaniesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAtsCompaniesResponse](../../Models/Operations/ListAtsCompaniesResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsDocuments

List all documents

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsDocumentsRequest(
        connectionId: '<value>',
        applicationId: '<value>',
        candidateId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 9635.37,
        offset: 8402.77,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-08-31T00:55:54.895Z'),
    );
    $response = $sdk->ats->listAtsDocuments($request);

    if ($response->atsDocuments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAtsDocumentsRequest](../../Models/Operations/ListAtsDocumentsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAtsDocumentsResponse](../../Models/Operations/ListAtsDocumentsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsInterviews

List all interviews

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsInterviewsRequest(
        connectionId: '<value>',
        applicationId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 2562.12,
        offset: 1185.02,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-09-28T15:15:00.508Z'),
    );
    $response = $sdk->ats->listAtsInterviews($request);

    if ($response->atsInterviews !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsInterviewsRequest](../../Models/Operations/ListAtsInterviewsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsInterviewsResponse](../../Models/Operations/ListAtsInterviewsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsJobs

List all jobs

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsJobsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 3958.99,
        offset: 3223.84,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-03-04T01:14:05.456Z'),
        userId: '<value>',
    );
    $response = $sdk->ats->listAtsJobs($request);

    if ($response->atsJobs !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ListAtsJobsRequest](../../Models/Operations/ListAtsJobsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\ListAtsJobsResponse](../../Models/Operations/ListAtsJobsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAtsScorecards

List all scorecards

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAtsScorecardsRequest(
        connectionId: '<value>',
        applicationId: '<value>',
        candidateId: '<value>',
        fields: [
            '<value>',
        ],
        interviewId: '<value>',
        jobId: '<value>',
        limit: 5126.98,
        offset: 8077.44,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-08-19T14:46:22.333Z'),
    );
    $response = $sdk->ats->listAtsScorecards($request);

    if ($response->atsScorecards !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsScorecardsRequest](../../Models/Operations/ListAtsScorecardsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsScorecardsResponse](../../Models/Operations/ListAtsScorecardsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchAtsActivity

Update an activity

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAtsActivityRequest(
        connectionId: '<value>',
        id: '<id>',
        atsActivity: new Shared\AtsActivity(
            title: '<value>',
            applicationId: '<value>',
            bcc: [
                new Shared\AtsEmail,
            ],
            candidateId: '<value>',
            cc: [
                new Shared\AtsEmail,
            ],
            createdAt: Utils\Utils::parseDateTime('2024-11-03T16:46:57.187Z'),
            description: 'Compatible reciprocal archive',
            documentId: '<value>',
            from: new Shared\PropertyAtsActivityFrom(
                email: 'Bradley15@gmail.com',
                name: '<value>',
                type: Shared\PropertyAtsActivityFromType::Work,
            ),
            id: '<id>',
            interviewId: '<value>',
            isPrivate: false,
            jobId: '<value>',
            raw: [
                'Hybrid' => '<value>',
            ],
            to: [
                new Shared\AtsEmail,
            ],
            type: Shared\AtsActivityType::Email,
            updatedAt: Utils\Utils::parseDateTime('2022-03-21T20:01:58.311Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->patchAtsActivity($request);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAtsActivityRequest](../../Models/Operations/PatchAtsActivityRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAtsActivityResponse](../../Models/Operations/PatchAtsActivityResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchAtsApplication

Update an application

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAtsApplicationRequest(
        connectionId: '<value>',
        id: '<id>',
        atsApplication: new Shared\AtsApplication(
            answers: [
                new Shared\AtsApplicationAnswer,
            ],
            appliedAt: Utils\Utils::parseDateTime('2023-12-15T20:36:09.499Z'),
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-01-06T05:56:57.062Z'),
            hiredAt: Utils\Utils::parseDateTime('2023-12-05T05:20:09.174Z'),
            id: '<id>',
            jobId: '<value>',
            offers: [
                new Shared\AtsOffer,
            ],
            originalStatus: '<value>',
            raw: [
                'grey' => '<value>',
            ],
            rejectedAt: Utils\Utils::parseDateTime('2024-01-24T17:35:54.628Z'),
            rejectedReason: '<value>',
            source: '<value>',
            status: Shared\AtsApplicationStatus::Accepted,
            updatedAt: Utils\Utils::parseDateTime('2022-11-18T16:36:51.738Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->patchAtsApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchAtsApplicationRequest](../../Models/Operations/PatchAtsApplicationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchAtsApplicationResponse](../../Models/Operations/PatchAtsApplicationResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchAtsCandidate

Update a candidate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAtsCandidateRequest(
        connectionId: '<value>',
        id: '<id>',
        atsCandidate: new Shared\AtsCandidate(
            address: new Shared\PropertyAtsCandidateAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Fort Bridget',
                country: 'Sri Lanka',
                countryCode: 'GI',
                postalCode: '46054',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'Donnelly - Bartell',
            createdAt: Utils\Utils::parseDateTime('2024-01-07T04:20:35.612Z'),
            dateOfBirth: Utils\Utils::parseDateTime('2023-10-20T03:10:26.424Z'),
            emails: [
                new Shared\AtsEmail,
            ],
            externalIdentifier: '<value>',
            id: '<id>',
            imageUrl: '<value>',
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            origin: Shared\Origin::Applied,
            raw: [
                'Van' => '<value>',
            ],
            sources: [
                '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\AtsTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2023-01-30T15:05:49.494Z'),
            userId: '<value>',
            webUrl: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->patchAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsCandidateRequest](../../Models/Operations/PatchAtsCandidateRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsCandidateResponse](../../Models/Operations/PatchAtsCandidateResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchAtsDocument

Update a document

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAtsDocumentRequest(
        connectionId: '<value>',
        id: '<id>',
        atsDocument: new Shared\AtsDocument(
            applicationId: '<value>',
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-04-01T11:33:08.084Z'),
            documentData: '<value>',
            documentUrl: '<value>',
            filename: 'your_file_here',
            id: '<id>',
            jobId: '<value>',
            raw: [
                'Other' => '<value>',
            ],
            type: Shared\AtsDocumentType::CoverLetter,
            updatedAt: Utils\Utils::parseDateTime('2023-06-19T12:06:56.902Z'),
            userId: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->patchAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAtsDocumentRequest](../../Models/Operations/PatchAtsDocumentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAtsDocumentResponse](../../Models/Operations/PatchAtsDocumentResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchAtsInterview

Update an interview

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAtsInterviewRequest(
        connectionId: '<value>',
        id: '<id>',
        atsInterview: new Shared\AtsInterview(
            applicationId: '<value>',
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-09-11T19:09:34.526Z'),
            endAt: Utils\Utils::parseDateTime('2022-05-28T22:25:51.616Z'),
            externalEventXref: '<value>',
            id: '<id>',
            jobId: '<value>',
            location: '<value>',
            raw: [
                'Handmade' => '<value>',
            ],
            startAt: Utils\Utils::parseDateTime('2024-03-18T02:52:45.725Z'),
            status: Shared\AtsInterviewStatus::Scheduled,
            updatedAt: Utils\Utils::parseDateTime('2024-11-05T22:15:01.656Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->patchAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsInterviewRequest](../../Models/Operations/PatchAtsInterviewRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsInterviewResponse](../../Models/Operations/PatchAtsInterviewResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchAtsJob

Update a job

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAtsJobRequest(
        connectionId: '<value>',
        id: '<id>',
        atsJob: new Shared\AtsJob(
            addresses: [
                new Shared\AtsAddress,
            ],
            closedAt: Utils\Utils::parseDateTime('2022-08-09T17:44:16.617Z'),
            companyId: '<value>',
            compensation: [
                new Shared\AtsCompensation,
            ],
            createdAt: Utils\Utils::parseDateTime('2022-07-09T17:48:14.891Z'),
            departments: [
                '<value>',
            ],
            description: 'Seamless analyzing definition',
            employmentType: Shared\EmploymentType::Intern,
            hiringManagerIds: [
                '<value>',
            ],
            id: '<id>',
            languageLocale: '<value>',
            name: '<value>',
            numberOfOpenings: 6182.06,
            publicJobUrls: [
                '<value>',
            ],
            questions: [
                new Shared\AtsJobQuestion,
            ],
            raw: [
                'North' => '<value>',
            ],
            recruiterIds: [
                '<value>',
            ],
            remote: false,
            status: Shared\AtsJobStatus::Closed,
            updatedAt: Utils\Utils::parseDateTime('2023-08-08T17:34:59.133Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->patchAtsJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\PatchAtsJobRequest](../../Models/Operations/PatchAtsJobRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\PatchAtsJobResponse](../../Models/Operations/PatchAtsJobResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchAtsScorecard

Update a scorecard

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAtsScorecardRequest(
        connectionId: '<value>',
        id: '<id>',
        atsScorecard: new Shared\AtsScorecard(
            applicationId: '<value>',
            candidateId: '<value>',
            comment: 'Ergonomic executive chair upholstered in bonded black leather and PVC padded seat and back for all-day comfort and support',
            createdAt: Utils\Utils::parseDateTime('2024-10-06T13:32:29.533Z'),
            id: '<id>',
            interviewId: '<value>',
            interviewerId: '<value>',
            jobId: '<value>',
            questions: [
                new Shared\AtsScorecardQuestion,
            ],
            raw: [
                'World' => '<value>',
            ],
            recommendation: Shared\Recommendation::Yes,
            updatedAt: Utils\Utils::parseDateTime('2022-08-07T14:14:42.219Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->patchAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsScorecardRequest](../../Models/Operations/PatchAtsScorecardRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsScorecardResponse](../../Models/Operations/PatchAtsScorecardResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeAtsActivity

Remove an activity

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAtsActivityRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ats->removeAtsActivity($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAtsActivityRequest](../../Models/Operations/RemoveAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAtsActivityResponse](../../Models/Operations/RemoveAtsActivityResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeAtsApplication

Remove an application

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAtsApplicationRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ats->removeAtsApplication($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveAtsApplicationRequest](../../Models/Operations/RemoveAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveAtsApplicationResponse](../../Models/Operations/RemoveAtsApplicationResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeAtsCandidate

Remove a candidate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAtsCandidateRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ats->removeAtsCandidate($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsCandidateRequest](../../Models/Operations/RemoveAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsCandidateResponse](../../Models/Operations/RemoveAtsCandidateResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeAtsDocument

Remove a document

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAtsDocumentRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ats->removeAtsDocument($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAtsDocumentRequest](../../Models/Operations/RemoveAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAtsDocumentResponse](../../Models/Operations/RemoveAtsDocumentResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeAtsInterview

Remove an interview

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAtsInterviewRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ats->removeAtsInterview($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsInterviewRequest](../../Models/Operations/RemoveAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsInterviewResponse](../../Models/Operations/RemoveAtsInterviewResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeAtsJob

Remove a job

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAtsJobRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ats->removeAtsJob($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\RemoveAtsJobRequest](../../Models/Operations/RemoveAtsJobRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\RemoveAtsJobResponse](../../Models/Operations/RemoveAtsJobResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeAtsScorecard

Remove a scorecard

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAtsScorecardRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->ats->removeAtsScorecard($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsScorecardRequest](../../Models/Operations/RemoveAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsScorecardResponse](../../Models/Operations/RemoveAtsScorecardResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateAtsActivity

Update an activity

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAtsActivityRequest(
        connectionId: '<value>',
        id: '<id>',
        atsActivity: new Shared\AtsActivity(
            title: '<value>',
            applicationId: '<value>',
            bcc: [
                new Shared\AtsEmail,
            ],
            candidateId: '<value>',
            cc: [
                new Shared\AtsEmail,
            ],
            createdAt: Utils\Utils::parseDateTime('2024-06-06T07:57:58.715Z'),
            description: 'Total fault-tolerant collaboration',
            documentId: '<value>',
            from: new Shared\PropertyAtsActivityFrom(
                email: 'Deshawn.Sauer@gmail.com',
                name: '<value>',
                type: Shared\PropertyAtsActivityFromType::Other,
            ),
            id: '<id>',
            interviewId: '<value>',
            isPrivate: false,
            jobId: '<value>',
            raw: [
                'Cotton' => '<value>',
            ],
            to: [
                new Shared\AtsEmail,
            ],
            type: Shared\AtsActivityType::Note,
            updatedAt: Utils\Utils::parseDateTime('2023-06-20T06:09:10.592Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->updateAtsActivity($request);

    if ($response->atsActivity !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAtsActivityRequest](../../Models/Operations/UpdateAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAtsActivityResponse](../../Models/Operations/UpdateAtsActivityResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateAtsApplication

Update an application

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAtsApplicationRequest(
        connectionId: '<value>',
        id: '<id>',
        atsApplication: new Shared\AtsApplication(
            answers: [
                new Shared\AtsApplicationAnswer,
            ],
            appliedAt: Utils\Utils::parseDateTime('2022-08-22T12:21:27.415Z'),
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-06-04T12:46:09.878Z'),
            hiredAt: Utils\Utils::parseDateTime('2022-02-09T08:57:01.906Z'),
            id: '<id>',
            jobId: '<value>',
            offers: [
                new Shared\AtsOffer,
            ],
            originalStatus: '<value>',
            raw: [
                'Minivan' => '<value>',
            ],
            rejectedAt: Utils\Utils::parseDateTime('2023-03-17T03:12:00.865Z'),
            rejectedReason: '<value>',
            source: '<value>',
            status: Shared\AtsApplicationStatus::Declined,
            updatedAt: Utils\Utils::parseDateTime('2024-08-09T12:26:06.546Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->updateAtsApplication($request);

    if ($response->atsApplication !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateAtsApplicationRequest](../../Models/Operations/UpdateAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateAtsApplicationResponse](../../Models/Operations/UpdateAtsApplicationResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateAtsCandidate

Update a candidate

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAtsCandidateRequest(
        connectionId: '<value>',
        id: '<id>',
        atsCandidate: new Shared\AtsCandidate(
            address: new Shared\PropertyAtsCandidateAddress(
                address1: '<value>',
                address2: '<value>',
                city: 'Hintzborough',
                country: 'Afghanistan',
                countryCode: 'TF',
                postalCode: '39423',
                region: '<value>',
                regionCode: '<value>',
            ),
            companyId: '<value>',
            companyName: 'O\'Reilly Inc',
            createdAt: Utils\Utils::parseDateTime('2023-08-31T03:55:05.691Z'),
            dateOfBirth: Utils\Utils::parseDateTime('2023-12-18T17:01:22.026Z'),
            emails: [
                new Shared\AtsEmail,
            ],
            externalIdentifier: '<value>',
            id: '<id>',
            imageUrl: '<value>',
            linkUrls: [
                '<value>',
            ],
            name: '<value>',
            origin: Shared\Origin::Agency,
            raw: [
                'Potassium' => '<value>',
            ],
            sources: [
                '<value>',
            ],
            tags: [
                '<value>',
            ],
            telephones: [
                new Shared\AtsTelephone,
            ],
            title: '<value>',
            updatedAt: Utils\Utils::parseDateTime('2023-02-19T09:22:29.995Z'),
            userId: '<value>',
            webUrl: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->updateAtsCandidate($request);

    if ($response->atsCandidate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsCandidateRequest](../../Models/Operations/UpdateAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsCandidateResponse](../../Models/Operations/UpdateAtsCandidateResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateAtsDocument

Update a document

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAtsDocumentRequest(
        connectionId: '<value>',
        id: '<id>',
        atsDocument: new Shared\AtsDocument(
            applicationId: '<value>',
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-07-05T17:05:49.106Z'),
            documentData: '<value>',
            documentUrl: '<value>',
            filename: 'your_file_here',
            id: '<id>',
            jobId: '<value>',
            raw: [
                'DRAM' => '<value>',
            ],
            type: Shared\AtsDocumentType::Other,
            updatedAt: Utils\Utils::parseDateTime('2023-09-09T02:38:30.011Z'),
            userId: '<value>',
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->updateAtsDocument($request);

    if ($response->atsDocument !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAtsDocumentRequest](../../Models/Operations/UpdateAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAtsDocumentResponse](../../Models/Operations/UpdateAtsDocumentResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateAtsInterview

Update an interview

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAtsInterviewRequest(
        connectionId: '<value>',
        id: '<id>',
        atsInterview: new Shared\AtsInterview(
            applicationId: '<value>',
            candidateId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-05-06T05:22:44.534Z'),
            endAt: Utils\Utils::parseDateTime('2023-03-29T20:29:22.648Z'),
            externalEventXref: '<value>',
            id: '<id>',
            jobId: '<value>',
            location: '<value>',
            raw: [
                'maroon' => '<value>',
            ],
            startAt: Utils\Utils::parseDateTime('2022-05-01T17:04:47.962Z'),
            status: Shared\AtsInterviewStatus::Complete,
            updatedAt: Utils\Utils::parseDateTime('2023-09-27T22:37:40.818Z'),
            userIds: [
                '<value>',
            ],
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->updateAtsInterview($request);

    if ($response->atsInterview !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsInterviewRequest](../../Models/Operations/UpdateAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsInterviewResponse](../../Models/Operations/UpdateAtsInterviewResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateAtsJob

Update a job

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAtsJobRequest(
        connectionId: '<value>',
        id: '<id>',
        atsJob: new Shared\AtsJob(
            addresses: [
                new Shared\AtsAddress,
            ],
            closedAt: Utils\Utils::parseDateTime('2023-10-21T07:41:08.131Z'),
            companyId: '<value>',
            compensation: [
                new Shared\AtsCompensation,
            ],
            createdAt: Utils\Utils::parseDateTime('2022-09-28T21:47:53.309Z'),
            departments: [
                '<value>',
            ],
            description: 'Implemented even-keeled parallelism',
            employmentType: Shared\EmploymentType::FullTime,
            hiringManagerIds: [
                '<value>',
            ],
            id: '<id>',
            languageLocale: '<value>',
            name: '<value>',
            numberOfOpenings: 9080.02,
            publicJobUrls: [
                '<value>',
            ],
            questions: [
                new Shared\AtsJobQuestion,
            ],
            raw: [
                'Direct' => '<value>',
            ],
            recruiterIds: [
                '<value>',
            ],
            remote: false,
            status: Shared\AtsJobStatus::Draft,
            updatedAt: Utils\Utils::parseDateTime('2024-01-04T04:44:52.139Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->updateAtsJob($request);

    if ($response->atsJob !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\UpdateAtsJobRequest](../../Models/Operations/UpdateAtsJobRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\UpdateAtsJobResponse](../../Models/Operations/UpdateAtsJobResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateAtsScorecard

Update a scorecard

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAtsScorecardRequest(
        connectionId: '<value>',
        id: '<id>',
        atsScorecard: new Shared\AtsScorecard(
            applicationId: '<value>',
            candidateId: '<value>',
            comment: 'The automobile layout consists of a front-engine design, with transaxle-type transmissions mounted at the rear of the engine and four wheel drive',
            createdAt: Utils\Utils::parseDateTime('2022-07-10T16:18:43.908Z'),
            id: '<id>',
            interviewId: '<value>',
            interviewerId: '<value>',
            jobId: '<value>',
            questions: [
                new Shared\AtsScorecardQuestion,
            ],
            raw: [
                'Digitized' => '<value>',
            ],
            recommendation: Shared\Recommendation::Yes,
            updatedAt: Utils\Utils::parseDateTime('2024-03-16T12:20:06.330Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->ats->updateAtsScorecard($request);

    if ($response->atsScorecard !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsScorecardRequest](../../Models/Operations/UpdateAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsScorecardResponse](../../Models/Operations/UpdateAtsScorecardResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
