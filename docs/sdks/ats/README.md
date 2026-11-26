# Ats

## Overview

### Available Operations

* [createAtsActivity](#createatsactivity) - Create an activity
* [createAtsApplication](#createatsapplication) - Create an application
* [createAtsCandidate](#createatscandidate) - Create a candidate
* [createAtsCompany](#createatscompany) - Create a company
* [createAtsDocument](#createatsdocument) - Create a document
* [createAtsInterview](#createatsinterview) - Create an interview
* [createAtsJob](#createatsjob) - Create a job
* [createAtsScorecard](#createatsscorecard) - Create a scorecard
* [getAtsActivity](#getatsactivity) - Retrieve an activity
* [getAtsApplication](#getatsapplication) - Retrieve an application
* [getAtsApplicationstatus](#getatsapplicationstatus) - Retrieve an applicationstatus
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
* [patchAtsCompany](#patchatscompany) - Update a company
* [patchAtsDocument](#patchatsdocument) - Update a document
* [patchAtsInterview](#patchatsinterview) - Update an interview
* [patchAtsJob](#patchatsjob) - Update a job
* [patchAtsScorecard](#patchatsscorecard) - Update a scorecard
* [removeAtsActivity](#removeatsactivity) - Remove an activity
* [removeAtsApplication](#removeatsapplication) - Remove an application
* [removeAtsCandidate](#removeatscandidate) - Remove a candidate
* [removeAtsCompany](#removeatscompany) - Remove a company
* [removeAtsDocument](#removeatsdocument) - Remove a document
* [removeAtsInterview](#removeatsinterview) - Remove an interview
* [removeAtsJob](#removeatsjob) - Remove a job
* [removeAtsScorecard](#removeatsscorecard) - Remove a scorecard
* [updateAtsActivity](#updateatsactivity) - Update an activity
* [updateAtsApplication](#updateatsapplication) - Update an application
* [updateAtsCandidate](#updateatscandidate) - Update a candidate
* [updateAtsCompany](#updateatscompany) - Update a company
* [updateAtsDocument](#updateatsdocument) - Update a document
* [updateAtsInterview](#updateatsinterview) - Update an interview
* [updateAtsJob](#updateatsjob) - Update a job
* [updateAtsScorecard](#updateatsscorecard) - Update a scorecard

## createAtsActivity

Creates a AtsActivity. Provide the unified AtsActivity fields in the request body; they are mapped to the provider's API. Returns the created AtsActivity.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsActivity" method="post" path="/ats/{connection_id}/activity" example="ats_activity" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsActivityRequest(
    atsActivity: new Shared\AtsActivity(
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Reprehenderit.',
        id: '5fdcc4dc-92a2-49ae-80b2-16ee61d6d8ca',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'e407aa26-a062-4d9a-9b63-990a1b9a9be6',
                namespace: 'activity',
                slug: 'verto',
                value: 'Sint varietas officia aequus stillicidium vereor victus tricesimus vester.',
            ),
        ],
        subType: 'TASK',
        title: 'Amplus sapiente cimentarius.',
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-05-05T13:19:33.642Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsActivity(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAtsActivityRequest](../../Models/Operations/CreateAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAtsActivityResponse](../../Models/Operations/CreateAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsApplication

Creates a AtsApplication. Provide the unified AtsApplication fields in the request body; they are mapped to the provider's API. Returns the created AtsApplication.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsApplication" method="post" path="/ats/{connection_id}/application" example="ats_application" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsApplicationRequest(
    atsApplication: new Shared\AtsApplication(
        answers: [],
        appliedAt: Utils\Utils::parseDateTime('2025-10-23T02:32:26.329Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-06-12T10:54:01.919Z'),
        id: '6d69c171-cfbf-4789-857c-e6bd78d56360',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '03a47acc-391c-4d2e-8e2b-4e43aa0b299c',
                namespace: 'application',
                slug: 'arguo',
                value: 'Defessus occaecati adflicto caecus claustrum annus addo.',
            ),
        ],
        offers: [],
        originalStatus: 'caput',
        originalSubstatus: 'admiratio',
        rejectedAt: Utils\Utils::parseDateTime('2026-11-16T04:36:11.770Z'),
        rejectedReason: 'Talio credo vomica allatus stella.',
        source: 'alii',
        status: Shared\AtsApplicationStatus::Reviewing,
        summary: 'Crebro nostrum alias sponte turbo sopor vergo surculus nam copiose. Enim casso cursus aestus deprecator. Despecto tabella argentum decretum cultellus aveho distinctio verecundia stella.',
        updatedAt: Utils\Utils::parseDateTime('2026-11-23T06:12:39.097Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsApplication(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateAtsApplicationRequest](../../Models/Operations/CreateAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateAtsApplicationResponse](../../Models/Operations/CreateAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsCandidate

Creates a AtsCandidate. Provide the unified AtsCandidate fields in the request body; they are mapped to the provider's API. Returns the created AtsCandidate.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsCandidate" method="post" path="/ats/{connection_id}/candidate" example="ats_candidate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsCandidateRequest(
    atsCandidate: new Shared\AtsCandidate(
        address: new Shared\PropertyAtsCandidateAddress(
            address1: '699 Legros Falls',
            city: 'New Albertoboro',
            countryCode: 'US',
            postalCode: '85550-0688',
            region: 'Minnesota',
            regionCode: 'WY',
        ),
        companyName: 'Doyle-Kutch LLC',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        dateOfBirth: Utils\Utils::parseDateTime('1994-07-05T19:48:57.631Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'wilt powerfully',
                endAt: Utils\Utils::parseDateTime('1978-04-14T07:58:36.326Z'),
                fieldOfStudy: 'totam',
                institution: 'Wunsch - Grimes-Heller',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('1994-06-09T13:31:39.059Z'),
            ),
            new Shared\AtsCandidateEducation(
                degree: 'substantial yum',
                endAt: Utils\Utils::parseDateTime('1989-09-06T03:32:39.901Z'),
                fieldOfStudy: 'commodi',
                institution: 'Franecki and Sons',
                level: 'highschool',
                startAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'alyce.rempel@outlook.com',
                name: 'Alyce Rempel',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Mayert - Rohan',
                endAt: Utils\Utils::parseDateTime('1974-03-01T17:02:58.824Z'),
                startAt: Utils\Utils::parseDateTime('1999-09-21T22:12:51.663Z'),
                title: 'Central Response Designer',
            ),
            new Shared\AtsCandidateExperience(
                companyName: 'Padberg, Keeling and Franey',
                endAt: Utils\Utils::parseDateTime('2004-10-14T14:01:00.717Z'),
                startAt: Utils\Utils::parseDateTime('1996-12-15T04:12:04.582Z'),
                title: 'Central Communications Producer',
            ),
        ],
        firstName: 'Alyce',
        hasDoNotContact: false,
        id: '3155635a-c7c6-4ce2-8493-86546dcaa69f',
        imageUrl: 'https://avatars.githubusercontent.com/u/99913246',
        isPrivate: true,
        jobIds: [],
        lastName: 'Rempel',
        linkUrls: [
            'https://www.linkedin.com/in/alyce-rempel',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '4cca8554-efc6-4723-8ef5-c36e1c4c23e9',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'chirographum',
            ),
        ],
        name: 'Alyce Rempel',
        origin: Shared\Origin::Agency,
        skills: [
            'curvo',
            'voveo',
        ],
        sources: [
            'tripudio',
            'volup',
        ],
        summary: 'Spero nostrum damnatio averto pecus cervus aspicio. Stabilis thesis admiratio. Acquiro sperno voluptate laboriosam comitatus teres doloribus canonicus considero tersus.',
        tags: [
            'alo',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(251) 489-6457',
                type: Shared\AtsTelephoneType::Mobile,
            ),
        ],
        title: 'Internal Paradigm Consultant',
        updatedAt: Utils\Utils::parseDateTime('2024-05-05T03:03:00.290Z'),
        webUrl: 'https://light-meander.com/',
    ),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsCandidate(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsCandidateRequest](../../Models/Operations/CreateAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsCandidateResponse](../../Models/Operations/CreateAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsCompany

Creates a AtsCompany. Provide the unified AtsCompany fields in the request body; they are mapped to the provider's API. Returns the created AtsCompany.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsCompany" method="post" path="/ats/{connection_id}/company" example="ats_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsCompanyRequest(
    atsCompany: new Shared\AtsCompany(
        createdAt: Utils\Utils::parseDateTime('2019-04-22T03:50:02.920Z'),
        fees: [
            new Shared\AtsFee(
                percentage: 23,
                type: Shared\AtsFeeType::Contingency,
            ),
        ],
        id: '3d8ed606-60f6-4472-aa0c-53574cb541aa',
        name: 'Streich, Mohr and Barton',
        phone: '245-586-5728 x0090',
        updatedAt: Utils\Utils::parseDateTime('2020-10-08T02:33:45.528Z'),
        websiteUrl: 'https://www.streichmohr.com',
    ),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsCompany(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateAtsCompanyRequest](../../Models/Operations/CreateAtsCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateAtsCompanyResponse](../../Models/Operations/CreateAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsDocument

Creates a AtsDocument. Provide the unified AtsDocument fields in the request body; they are mapped to the provider's API. Returns the created AtsDocument.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsDocument" method="post" path="/ats/{connection_id}/document" example="ats_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsDocumentRequest(
    atsDocument: new Shared\AtsDocument(
        createdAt: Utils\Utils::parseDateTime('2021-08-20T08:00:27.437Z'),
        documentUrl: 'https://thin-video.org/',
        filename: 'reggie_langosh_resume.pdf',
        id: 'dcd044ab-8eaf-4d36-91bb-2e8aba2d342d',
        metadata: [],
        type: Shared\AtsDocumentType::CoverLetter,
        updatedAt: Utils\Utils::parseDateTime('2022-12-16T05:37:05.883Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsDocument(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateAtsDocumentRequest](../../Models/Operations/CreateAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateAtsDocumentResponse](../../Models/Operations/CreateAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsInterview

Creates a AtsInterview. Provide the unified AtsInterview fields in the request body; they are mapped to the provider's API. Returns the created AtsInterview.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsInterview" method="post" path="/ats/{connection_id}/interview" example="ats_interview" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsInterviewRequest(
    atsInterview: new Shared\AtsInterview(
        createdAt: Utils\Utils::parseDateTime('2021-11-28T03:14:47.774Z'),
        endAt: Utils\Utils::parseDateTime('2021-12-08T06:33:19.583Z'),
        id: '9ed5c8c5-b417-4eb6-8766-fcd627f4584e',
        location: '9604 S Pine Street',
        meetingUrl: 'https://gummy-battle.name/',
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2021-12-08T06:03:19.583Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2023-10-07T01:23:49.851Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsInterview(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsInterviewRequest](../../Models/Operations/CreateAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsInterviewResponse](../../Models/Operations/CreateAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsJob

Creates a AtsJob. Provide the unified AtsJob fields in the request body; they are mapped to the provider's API. Returns the created AtsJob.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsJob" method="post" path="/ats/{connection_id}/job" example="ats_job" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsJobRequest(
    atsJob: new Shared\AtsJob(
        addresses: [
            new Shared\AtsAddress(
                address1: '458 E 8th Street',
                city: 'Visalia',
                countryCode: 'US',
                postalCode: '60669-0678',
                region: 'Oregon',
                regionCode: 'DE',
            ),
        ],
        compensation: [
            new Shared\AtsCompensation(
                currency: 'GBP',
                frequency: Shared\Frequency::Day,
                max: 174303,
                min: 174042,
                type: Shared\AtsCompensationType::Bonus,
            ),
            new Shared\AtsCompensation(
                currency: 'KMF',
                frequency: Shared\Frequency::Month,
                max: 171171,
                min: 151975,
                type: Shared\AtsCompensationType::Salary,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-06-16T12:51:44.518Z'),
        description: 'Senior',
        employmentType: Shared\EmploymentType::Freelance,
        fees: [
            new Shared\AtsFee(
                amount: 35146,
                currency: 'AFN',
                type: Shared\AtsFeeType::Contingency,
            ),
        ],
        hiringManagers: [],
        id: 'e35ac91c-4496-4845-9453-26c535543ce5',
        industry: 'Refined Ceramic Keyboard',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '780f039d-8049-4792-9e9b-0f049bf664c7',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'cursus',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Senior Interactions Developer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Tolero aequus tamquam inflammatio asporto canis vinitor utrum.',
                openedAt: Utils\Utils::parseDateTime('2026-07-09T21:00:13.031Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '295 First Street',
                    city: 'East Agustinton',
                    countryCode: 'US',
                    postalCode: '57059',
                    region: 'Utah',
                    regionCode: 'NE',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-09-04T14:56:13.726Z'),
                description: 'Sublime.',
                id: '3cda6bb2-6417-4d10-9830-20607462a54d',
                isActive: false,
                location: '5699 Purdy Motorway',
                name: 'Legacy Implementation Orchestrator',
                postingUrl: 'https://elementary-privilege.com/',
                updatedAt: Utils\Utils::parseDateTime('2026-10-01T16:53:24.495Z'),
            ),
        ],
        publicJobUrls: [
            'https://parched-dash.info',
            'https://mild-midwife.org/',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Capitulus.',
                id: 'da3f1238-3b84-40c6-aded-7e2f9195cb9e',
                maxLength: 214,
                minLength: 1,
                options: [
                    'aetas',
                    'vado',
                ],
                prompt: 'Agnosco tendo.',
                question: 'Deporto tolero.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: '9b313f59-a06c-439e-aa2f-044fed5a69fa',
                maxLength: 309,
                minLength: 1,
                options: [
                    'sodalitas',
                ],
                prompt: 'Supra veritatis.',
                question: 'Maxime tres tergiversatio tactus vehemens architecto ab nam defetiscor.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Confero trepide.',
                id: '97c41dab-9523-44d4-898a-a869310f0156',
                maxLength: 428,
                minLength: 1,
                options: [
                    'censura',
                ],
                prompt: 'Taceo rem compello spectaculum mollitia arcus compello.',
                question: 'Attonbitus reprehenderit voro depono constans vehemens.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'similique',
            'absque',
        ],
        status: Shared\AtsJobStatus::Archived,
        summary: 'Contra damno desolo suadeo utrimque cresco aetas turpis.',
        updatedAt: Utils\Utils::parseDateTime('2026-03-28T10:23:33.016Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsJob(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\CreateAtsJobRequest](../../Models/Operations/CreateAtsJobRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\CreateAtsJobResponse](../../Models/Operations/CreateAtsJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAtsScorecard

Creates a AtsScorecard. Provide the unified AtsScorecard fields in the request body; they are mapped to the provider's API. Returns the created AtsScorecard.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAtsScorecard" method="post" path="/ats/{connection_id}/scorecard" example="ats_scorecard" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAtsScorecardRequest(
    atsScorecard: new Shared\AtsScorecard(
        comment: 'Aliquam.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: 'ca3228c6-b108-4e2b-bd4e-a3fa924fe61a',
        metadata: [],
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Pecto vulpes libero vomer comburo.',
                text: 'Desidero modi tamdiu auxilium defessus adimpleo clementia tero.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Conatus cicuta doloremque statua bonus.',
                description: 'Aduro viscus celebrer.',
                text: 'Decretum.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-06-15T11:42:00.831Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->ats->createAtsScorecard(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateAtsScorecardRequest](../../Models/Operations/CreateAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateAtsScorecardResponse](../../Models/Operations/CreateAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsActivity

Retrieves a single AtsActivity by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsActivity" method="get" path="/ats/{connection_id}/activity/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsActivity(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAtsActivityRequest](../../Models/Operations/GetAtsActivityRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAtsActivityResponse](../../Models/Operations/GetAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsApplication

Retrieves a single AtsApplication by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsApplication" method="get" path="/ats/{connection_id}/application/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsApplicationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsApplication(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetAtsApplicationRequest](../../Models/Operations/GetAtsApplicationRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetAtsApplicationResponse](../../Models/Operations/GetAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsApplicationstatus

Retrieves a single AtsStatus by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsApplicationstatus" method="get" path="/ats/{connection_id}/applicationstatus/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsApplicationstatusRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsApplicationstatus(
    request: $request
);

if ($response->atsStatus !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetAtsApplicationstatusRequest](../../Models/Operations/GetAtsApplicationstatusRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetAtsApplicationstatusResponse](../../Models/Operations/GetAtsApplicationstatusResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsCandidate

Retrieves a single AtsCandidate by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsCandidate" method="get" path="/ats/{connection_id}/candidate/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsCandidateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsCandidate(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsCandidateRequest](../../Models/Operations/GetAtsCandidateRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsCandidateResponse](../../Models/Operations/GetAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsCompany

Retrieves a single AtsCompany by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsCompany" method="get" path="/ats/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsCompany(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetAtsCompanyRequest](../../Models/Operations/GetAtsCompanyRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetAtsCompanyResponse](../../Models/Operations/GetAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsDocument

Retrieves a single AtsDocument by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsDocument" method="get" path="/ats/{connection_id}/document/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsDocument(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetAtsDocumentRequest](../../Models/Operations/GetAtsDocumentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetAtsDocumentResponse](../../Models/Operations/GetAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsInterview

Retrieves a single AtsInterview by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsInterview" method="get" path="/ats/{connection_id}/interview/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsInterviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsInterview(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsInterviewRequest](../../Models/Operations/GetAtsInterviewRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsInterviewResponse](../../Models/Operations/GetAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsJob

Retrieves a single AtsJob by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsJob" method="get" path="/ats/{connection_id}/job/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsJobRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsJob(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                  | Type                                                                       | Required                                                                   | Description                                                                |
| -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- | -------------------------------------------------------------------------- |
| `$request`                                                                 | [Operations\GetAtsJobRequest](../../Models/Operations/GetAtsJobRequest.md) | :heavy_check_mark:                                                         | The request object to use for the request.                                 |

### Response

**[?Operations\GetAtsJobResponse](../../Models/Operations/GetAtsJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAtsScorecard

Retrieves a single AtsScorecard by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAtsScorecard" method="get" path="/ats/{connection_id}/scorecard/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\GetAtsScorecardRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->getAtsScorecard(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetAtsScorecardRequest](../../Models/Operations/GetAtsScorecardRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetAtsScorecardResponse](../../Models/Operations/GetAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsActivities

Returns a list of AtsActivities. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsActivities" method="get" path="/ats/{connection_id}/activity" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsActivitiesRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsActivities(
    request: $request
);

if ($response->atsActivities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsActivitiesRequest](../../Models/Operations/ListAtsActivitiesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsActivitiesResponse](../../Models/Operations/ListAtsActivitiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsApplications

Returns a list of AtsApplications. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsApplications" method="get" path="/ats/{connection_id}/application" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsApplicationsRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsApplications(
    request: $request
);

if ($response->atsApplications !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListAtsApplicationsRequest](../../Models/Operations/ListAtsApplicationsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListAtsApplicationsResponse](../../Models/Operations/ListAtsApplicationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsApplicationstatuses

Returns a list of AtsStatuses. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsApplicationstatuses" method="get" path="/ats/{connection_id}/applicationstatus" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsApplicationstatusesRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsApplicationstatuses(
    request: $request
);

if ($response->atsStatuses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAtsApplicationstatusesRequest](../../Models/Operations/ListAtsApplicationstatusesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAtsApplicationstatusesResponse](../../Models/Operations/ListAtsApplicationstatusesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsCandidates

Returns a list of AtsCandidates. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsCandidates" method="get" path="/ats/{connection_id}/candidate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsCandidatesRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsCandidates(
    request: $request
);

if ($response->atsCandidates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsCandidatesRequest](../../Models/Operations/ListAtsCandidatesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsCandidatesResponse](../../Models/Operations/ListAtsCandidatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsCompanies

Returns a list of AtsCompanies. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsCompanies" method="get" path="/ats/{connection_id}/company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsCompaniesRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsCompanies(
    request: $request
);

if ($response->atsCompanies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAtsCompaniesRequest](../../Models/Operations/ListAtsCompaniesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAtsCompaniesResponse](../../Models/Operations/ListAtsCompaniesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsDocuments

Returns a list of AtsDocuments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsDocuments" method="get" path="/ats/{connection_id}/document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsDocumentsRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsDocuments(
    request: $request
);

if ($response->atsDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListAtsDocumentsRequest](../../Models/Operations/ListAtsDocumentsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListAtsDocumentsResponse](../../Models/Operations/ListAtsDocumentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsInterviews

Returns a list of AtsInterviews. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsInterviews" method="get" path="/ats/{connection_id}/interview" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsInterviewsRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsInterviews(
    request: $request
);

if ($response->atsInterviews !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsInterviewsRequest](../../Models/Operations/ListAtsInterviewsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsInterviewsResponse](../../Models/Operations/ListAtsInterviewsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsJobs

Returns a list of AtsJobs. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsJobs" method="get" path="/ats/{connection_id}/job" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsJobsRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsJobs(
    request: $request
);

if ($response->atsJobs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\ListAtsJobsRequest](../../Models/Operations/ListAtsJobsRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\ListAtsJobsResponse](../../Models/Operations/ListAtsJobsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAtsScorecards

Returns a list of AtsScorecards. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAtsScorecards" method="get" path="/ats/{connection_id}/scorecard" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\ListAtsScorecardsRequest(
    connectionId: '<id>',
);

$response = $sdk->ats->listAtsScorecards(
    request: $request
);

if ($response->atsScorecards !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListAtsScorecardsRequest](../../Models/Operations/ListAtsScorecardsRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListAtsScorecardsResponse](../../Models/Operations/ListAtsScorecardsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsActivity

Updates the AtsActivity identified by `id`. Provide the unified AtsActivity fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsActivity" method="patch" path="/ats/{connection_id}/activity/{id}" example="ats_activity" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsActivityRequest(
    atsActivity: new Shared\AtsActivity(
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Reprehenderit.',
        id: 'e207d937-876b-43ff-b839-a418f738839e',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'e5703d43-2ac0-4a38-93c6-a16d6e979bc2',
                namespace: 'activity',
                slug: 'verto',
                value: 'Sint varietas officia aequus stillicidium vereor victus tricesimus vester.',
            ),
        ],
        subType: 'TASK',
        title: 'Amplus sapiente cimentarius.',
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-05-05T13:19:33.685Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsActivity(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAtsActivityRequest](../../Models/Operations/PatchAtsActivityRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAtsActivityResponse](../../Models/Operations/PatchAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsApplication

Updates the AtsApplication identified by `id`. Provide the unified AtsApplication fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsApplication" method="patch" path="/ats/{connection_id}/application/{id}" example="ats_application" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsApplicationRequest(
    atsApplication: new Shared\AtsApplication(
        answers: [],
        appliedAt: Utils\Utils::parseDateTime('2025-10-23T02:32:26.352Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-06-12T10:54:01.948Z'),
        id: 'a9959b8e-7caf-4cf9-a82d-e83f953d1b5a',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'e25c4ee3-cf09-4f30-89a7-5293965745d4',
                namespace: 'application',
                slug: 'arguo',
                value: 'Defessus occaecati adflicto caecus claustrum annus addo.',
            ),
        ],
        offers: [],
        originalStatus: 'caput',
        originalSubstatus: 'admiratio',
        rejectedAt: Utils\Utils::parseDateTime('2026-11-16T04:36:11.804Z'),
        rejectedReason: 'Talio credo vomica allatus stella.',
        source: 'alii',
        status: Shared\AtsApplicationStatus::Reviewing,
        summary: 'Crebro nostrum alias sponte turbo sopor vergo surculus nam copiose. Enim casso cursus aestus deprecator. Despecto tabella argentum decretum cultellus aveho distinctio verecundia stella.',
        updatedAt: Utils\Utils::parseDateTime('2026-11-23T06:12:39.131Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsApplication(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchAtsApplicationRequest](../../Models/Operations/PatchAtsApplicationRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchAtsApplicationResponse](../../Models/Operations/PatchAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsCandidate

Updates the AtsCandidate identified by `id`. Provide the unified AtsCandidate fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsCandidate" method="patch" path="/ats/{connection_id}/candidate/{id}" example="ats_candidate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsCandidateRequest(
    atsCandidate: new Shared\AtsCandidate(
        address: new Shared\PropertyAtsCandidateAddress(
            address1: '699 Legros Falls',
            city: 'New Albertoboro',
            countryCode: 'US',
            postalCode: '85550-0688',
            region: 'Minnesota',
            regionCode: 'WY',
        ),
        companyName: 'Doyle-Kutch LLC',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        dateOfBirth: Utils\Utils::parseDateTime('1994-07-05T19:48:57.631Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'wilt powerfully',
                endAt: Utils\Utils::parseDateTime('1978-04-14T07:58:36.326Z'),
                fieldOfStudy: 'totam',
                institution: 'Wunsch - Grimes-Heller',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('1994-06-09T13:31:39.059Z'),
            ),
            new Shared\AtsCandidateEducation(
                degree: 'substantial yum',
                endAt: Utils\Utils::parseDateTime('1989-09-06T03:32:39.901Z'),
                fieldOfStudy: 'commodi',
                institution: 'Franecki and Sons',
                level: 'highschool',
                startAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'alyce.rempel@outlook.com',
                name: 'Alyce Rempel',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Mayert - Rohan',
                endAt: Utils\Utils::parseDateTime('1974-03-01T17:02:58.824Z'),
                startAt: Utils\Utils::parseDateTime('1999-09-21T22:12:51.663Z'),
                title: 'Central Response Designer',
            ),
            new Shared\AtsCandidateExperience(
                companyName: 'Padberg, Keeling and Franey',
                endAt: Utils\Utils::parseDateTime('2004-10-14T14:01:00.717Z'),
                startAt: Utils\Utils::parseDateTime('1996-12-15T04:12:04.582Z'),
                title: 'Central Communications Producer',
            ),
        ],
        firstName: 'Alyce',
        hasDoNotContact: false,
        id: '020974c4-bc02-42e2-8804-8dc5d5abc79e',
        imageUrl: 'https://avatars.githubusercontent.com/u/99913246',
        isPrivate: true,
        jobIds: [],
        lastName: 'Rempel',
        linkUrls: [
            'https://www.linkedin.com/in/alyce-rempel',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '100634e7-5d9a-45df-8d48-a9741c3f82d3',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'chirographum',
            ),
        ],
        name: 'Alyce Rempel',
        origin: Shared\Origin::Agency,
        skills: [
            'curvo',
            'voveo',
        ],
        sources: [
            'tripudio',
            'volup',
        ],
        summary: 'Spero nostrum damnatio averto pecus cervus aspicio. Stabilis thesis admiratio. Acquiro sperno voluptate laboriosam comitatus teres doloribus canonicus considero tersus.',
        tags: [
            'alo',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(251) 489-6457',
                type: Shared\AtsTelephoneType::Mobile,
            ),
        ],
        title: 'Internal Paradigm Consultant',
        updatedAt: Utils\Utils::parseDateTime('2024-05-05T03:03:00.298Z'),
        webUrl: 'https://light-meander.com/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsCandidate(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsCandidateRequest](../../Models/Operations/PatchAtsCandidateRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsCandidateResponse](../../Models/Operations/PatchAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsCompany

Updates the AtsCompany identified by `id`. Provide the unified AtsCompany fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsCompany" method="patch" path="/ats/{connection_id}/company/{id}" example="ats_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsCompanyRequest(
    atsCompany: new Shared\AtsCompany(
        createdAt: Utils\Utils::parseDateTime('2019-04-22T03:50:02.920Z'),
        fees: [
            new Shared\AtsFee(
                percentage: 23,
                type: Shared\AtsFeeType::Contingency,
            ),
        ],
        id: '3f7c8768-5f92-4b0e-bdea-be50a2e99991',
        name: 'Streich, Mohr and Barton',
        phone: '245-586-5728 x0090',
        updatedAt: Utils\Utils::parseDateTime('2020-10-08T02:33:45.532Z'),
        websiteUrl: 'https://www.streichmohr.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsCompany(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchAtsCompanyRequest](../../Models/Operations/PatchAtsCompanyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchAtsCompanyResponse](../../Models/Operations/PatchAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsDocument

Updates the AtsDocument identified by `id`. Provide the unified AtsDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsDocument" method="patch" path="/ats/{connection_id}/document/{id}" example="ats_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsDocumentRequest(
    atsDocument: new Shared\AtsDocument(
        createdAt: Utils\Utils::parseDateTime('2021-08-20T08:00:27.437Z'),
        documentUrl: 'https://thin-video.org/',
        filename: 'reggie_langosh_resume.pdf',
        id: 'eb81546c-16bd-48c8-a76b-d57d5689e810',
        metadata: [],
        type: Shared\AtsDocumentType::CoverLetter,
        updatedAt: Utils\Utils::parseDateTime('2022-12-16T05:37:05.885Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsDocument(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchAtsDocumentRequest](../../Models/Operations/PatchAtsDocumentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchAtsDocumentResponse](../../Models/Operations/PatchAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsInterview

Updates the AtsInterview identified by `id`. Provide the unified AtsInterview fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsInterview" method="patch" path="/ats/{connection_id}/interview/{id}" example="ats_interview" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsInterviewRequest(
    atsInterview: new Shared\AtsInterview(
        createdAt: Utils\Utils::parseDateTime('2021-11-28T03:14:47.774Z'),
        endAt: Utils\Utils::parseDateTime('2021-12-08T06:33:19.583Z'),
        id: 'afb419e6-5e65-4446-b873-090f169fc90c',
        location: '9604 S Pine Street',
        meetingUrl: 'https://gummy-battle.name/',
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2021-12-08T06:03:19.583Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2023-10-07T01:23:49.856Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsInterview(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsInterviewRequest](../../Models/Operations/PatchAtsInterviewRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsInterviewResponse](../../Models/Operations/PatchAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsJob

Updates the AtsJob identified by `id`. Provide the unified AtsJob fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsJob" method="patch" path="/ats/{connection_id}/job/{id}" example="ats_job" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsJobRequest(
    atsJob: new Shared\AtsJob(
        addresses: [
            new Shared\AtsAddress(
                address1: '458 E 8th Street',
                city: 'Visalia',
                countryCode: 'US',
                postalCode: '60669-0678',
                region: 'Oregon',
                regionCode: 'DE',
            ),
        ],
        compensation: [
            new Shared\AtsCompensation(
                currency: 'GBP',
                frequency: Shared\Frequency::Day,
                max: 174303,
                min: 174042,
                type: Shared\AtsCompensationType::Bonus,
            ),
            new Shared\AtsCompensation(
                currency: 'KMF',
                frequency: Shared\Frequency::Month,
                max: 171171,
                min: 151975,
                type: Shared\AtsCompensationType::Salary,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-06-16T12:51:44.518Z'),
        description: 'Senior',
        employmentType: Shared\EmploymentType::Freelance,
        fees: [
            new Shared\AtsFee(
                amount: 35146,
                currency: 'AFN',
                type: Shared\AtsFeeType::Contingency,
            ),
        ],
        hiringManagers: [],
        id: '9202f9b6-89cb-4ec7-8bd2-e71a953af81f',
        industry: 'Refined Ceramic Keyboard',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '2fbf9b2f-7f5d-49d1-836f-d5856cfa1a8b',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'cursus',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Senior Interactions Developer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Tolero aequus tamquam inflammatio asporto canis vinitor utrum.',
                openedAt: Utils\Utils::parseDateTime('2026-07-09T21:00:13.093Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '295 First Street',
                    city: 'East Agustinton',
                    countryCode: 'US',
                    postalCode: '57059',
                    region: 'Utah',
                    regionCode: 'NE',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-09-04T14:56:13.791Z'),
                description: 'Sublime.',
                id: 'd58e1645-61ca-4b1a-841f-dc3cb3d5374f',
                isActive: false,
                location: '5699 Purdy Motorway',
                name: 'Legacy Implementation Orchestrator',
                postingUrl: 'https://elementary-privilege.com/',
                updatedAt: Utils\Utils::parseDateTime('2026-10-01T16:53:24.562Z'),
            ),
        ],
        publicJobUrls: [
            'https://parched-dash.info',
            'https://mild-midwife.org/',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Capitulus.',
                id: '44efa448-7f00-46e4-bac9-3bb736f9ef12',
                maxLength: 214,
                minLength: 1,
                options: [
                    'aetas',
                    'vado',
                ],
                prompt: 'Agnosco tendo.',
                question: 'Deporto tolero.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: 'e1a0ab84-9404-466a-b934-1c196ab7e478',
                maxLength: 309,
                minLength: 1,
                options: [
                    'sodalitas',
                ],
                prompt: 'Supra veritatis.',
                question: 'Maxime tres tergiversatio tactus vehemens architecto ab nam defetiscor.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Confero trepide.',
                id: 'df920501-783b-4b08-a596-646cc2f4a673',
                maxLength: 428,
                minLength: 1,
                options: [
                    'censura',
                ],
                prompt: 'Taceo rem compello spectaculum mollitia arcus compello.',
                question: 'Attonbitus reprehenderit voro depono constans vehemens.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'similique',
            'absque',
        ],
        status: Shared\AtsJobStatus::Archived,
        summary: 'Contra damno desolo suadeo utrimque cresco aetas turpis.',
        updatedAt: Utils\Utils::parseDateTime('2026-03-28T10:23:33.072Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsJob(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                      | Type                                                                           | Required                                                                       | Description                                                                    |
| ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ | ------------------------------------------------------------------------------ |
| `$request`                                                                     | [Operations\PatchAtsJobRequest](../../Models/Operations/PatchAtsJobRequest.md) | :heavy_check_mark:                                                             | The request object to use for the request.                                     |

### Response

**[?Operations\PatchAtsJobResponse](../../Models/Operations/PatchAtsJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAtsScorecard

Updates the AtsScorecard identified by `id`. Provide the unified AtsScorecard fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAtsScorecard" method="patch" path="/ats/{connection_id}/scorecard/{id}" example="ats_scorecard" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAtsScorecardRequest(
    atsScorecard: new Shared\AtsScorecard(
        comment: 'Aliquam.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: 'b4691bd1-8bd4-4b12-aa5a-efe50e7223ec',
        metadata: [],
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Pecto vulpes libero vomer comburo.',
                text: 'Desidero modi tamdiu auxilium defessus adimpleo clementia tero.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Conatus cicuta doloremque statua bonus.',
                description: 'Aduro viscus celebrer.',
                text: 'Decretum.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-06-15T11:42:00.834Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->patchAtsScorecard(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchAtsScorecardRequest](../../Models/Operations/PatchAtsScorecardRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchAtsScorecardResponse](../../Models/Operations/PatchAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsActivity

Deletes the AtsActivity identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsActivity" method="delete" path="/ats/{connection_id}/activity/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAtsActivityRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsActivity(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAtsActivityRequest](../../Models/Operations/RemoveAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAtsActivityResponse](../../Models/Operations/RemoveAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsApplication

Deletes the AtsApplication identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsApplication" method="delete" path="/ats/{connection_id}/application/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAtsApplicationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsApplication(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveAtsApplicationRequest](../../Models/Operations/RemoveAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveAtsApplicationResponse](../../Models/Operations/RemoveAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsCandidate

Deletes the AtsCandidate identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsCandidate" method="delete" path="/ats/{connection_id}/candidate/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAtsCandidateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsCandidate(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsCandidateRequest](../../Models/Operations/RemoveAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsCandidateResponse](../../Models/Operations/RemoveAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsCompany

Deletes the AtsCompany identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsCompany" method="delete" path="/ats/{connection_id}/company/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAtsCompanyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsCompany(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveAtsCompanyRequest](../../Models/Operations/RemoveAtsCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveAtsCompanyResponse](../../Models/Operations/RemoveAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsDocument

Deletes the AtsDocument identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsDocument" method="delete" path="/ats/{connection_id}/document/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAtsDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsDocument(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveAtsDocumentRequest](../../Models/Operations/RemoveAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveAtsDocumentResponse](../../Models/Operations/RemoveAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsInterview

Deletes the AtsInterview identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsInterview" method="delete" path="/ats/{connection_id}/interview/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAtsInterviewRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsInterview(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsInterviewRequest](../../Models/Operations/RemoveAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsInterviewResponse](../../Models/Operations/RemoveAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsJob

Deletes the AtsJob identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsJob" method="delete" path="/ats/{connection_id}/job/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAtsJobRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsJob(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\RemoveAtsJobRequest](../../Models/Operations/RemoveAtsJobRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\RemoveAtsJobResponse](../../Models/Operations/RemoveAtsJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAtsScorecard

Deletes the AtsScorecard identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAtsScorecard" method="delete" path="/ats/{connection_id}/scorecard/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\RemoveAtsScorecardRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->removeAtsScorecard(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveAtsScorecardRequest](../../Models/Operations/RemoveAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveAtsScorecardResponse](../../Models/Operations/RemoveAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsActivity

Updates the AtsActivity identified by `id`. Provide the unified AtsActivity fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsActivity" method="put" path="/ats/{connection_id}/activity/{id}" example="ats_activity" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsActivityRequest(
    atsActivity: new Shared\AtsActivity(
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Reprehenderit.',
        id: 'e207d937-876b-43ff-b839-a418f738839e',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'e5703d43-2ac0-4a38-93c6-a16d6e979bc2',
                namespace: 'activity',
                slug: 'verto',
                value: 'Sint varietas officia aequus stillicidium vereor victus tricesimus vester.',
            ),
        ],
        subType: 'TASK',
        title: 'Amplus sapiente cimentarius.',
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-05-05T13:19:33.685Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsActivity(
    request: $request
);

if ($response->atsActivity !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAtsActivityRequest](../../Models/Operations/UpdateAtsActivityRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAtsActivityResponse](../../Models/Operations/UpdateAtsActivityResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsApplication

Updates the AtsApplication identified by `id`. Provide the unified AtsApplication fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsApplication" method="put" path="/ats/{connection_id}/application/{id}" example="ats_application" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsApplicationRequest(
    atsApplication: new Shared\AtsApplication(
        answers: [],
        appliedAt: Utils\Utils::parseDateTime('2025-10-23T02:32:26.352Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-06-12T10:54:01.948Z'),
        id: 'a9959b8e-7caf-4cf9-a82d-e83f953d1b5a',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'e25c4ee3-cf09-4f30-89a7-5293965745d4',
                namespace: 'application',
                slug: 'arguo',
                value: 'Defessus occaecati adflicto caecus claustrum annus addo.',
            ),
        ],
        offers: [],
        originalStatus: 'caput',
        originalSubstatus: 'admiratio',
        rejectedAt: Utils\Utils::parseDateTime('2026-11-16T04:36:11.804Z'),
        rejectedReason: 'Talio credo vomica allatus stella.',
        source: 'alii',
        status: Shared\AtsApplicationStatus::Reviewing,
        summary: 'Crebro nostrum alias sponte turbo sopor vergo surculus nam copiose. Enim casso cursus aestus deprecator. Despecto tabella argentum decretum cultellus aveho distinctio verecundia stella.',
        updatedAt: Utils\Utils::parseDateTime('2026-11-23T06:12:39.131Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsApplication(
    request: $request
);

if ($response->atsApplication !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateAtsApplicationRequest](../../Models/Operations/UpdateAtsApplicationRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateAtsApplicationResponse](../../Models/Operations/UpdateAtsApplicationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsCandidate

Updates the AtsCandidate identified by `id`. Provide the unified AtsCandidate fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsCandidate" method="put" path="/ats/{connection_id}/candidate/{id}" example="ats_candidate" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsCandidateRequest(
    atsCandidate: new Shared\AtsCandidate(
        address: new Shared\PropertyAtsCandidateAddress(
            address1: '699 Legros Falls',
            city: 'New Albertoboro',
            countryCode: 'US',
            postalCode: '85550-0688',
            region: 'Minnesota',
            regionCode: 'WY',
        ),
        companyName: 'Doyle-Kutch LLC',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        dateOfBirth: Utils\Utils::parseDateTime('1994-07-05T19:48:57.631Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'wilt powerfully',
                endAt: Utils\Utils::parseDateTime('1978-04-14T07:58:36.326Z'),
                fieldOfStudy: 'totam',
                institution: 'Wunsch - Grimes-Heller',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('1994-06-09T13:31:39.059Z'),
            ),
            new Shared\AtsCandidateEducation(
                degree: 'substantial yum',
                endAt: Utils\Utils::parseDateTime('1989-09-06T03:32:39.901Z'),
                fieldOfStudy: 'commodi',
                institution: 'Franecki and Sons',
                level: 'highschool',
                startAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'alyce.rempel@outlook.com',
                name: 'Alyce Rempel',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Mayert - Rohan',
                endAt: Utils\Utils::parseDateTime('1974-03-01T17:02:58.824Z'),
                startAt: Utils\Utils::parseDateTime('1999-09-21T22:12:51.663Z'),
                title: 'Central Response Designer',
            ),
            new Shared\AtsCandidateExperience(
                companyName: 'Padberg, Keeling and Franey',
                endAt: Utils\Utils::parseDateTime('2004-10-14T14:01:00.717Z'),
                startAt: Utils\Utils::parseDateTime('1996-12-15T04:12:04.582Z'),
                title: 'Central Communications Producer',
            ),
        ],
        firstName: 'Alyce',
        hasDoNotContact: false,
        id: '020974c4-bc02-42e2-8804-8dc5d5abc79e',
        imageUrl: 'https://avatars.githubusercontent.com/u/99913246',
        isPrivate: true,
        jobIds: [],
        lastName: 'Rempel',
        linkUrls: [
            'https://www.linkedin.com/in/alyce-rempel',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '100634e7-5d9a-45df-8d48-a9741c3f82d3',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'chirographum',
            ),
        ],
        name: 'Alyce Rempel',
        origin: Shared\Origin::Agency,
        skills: [
            'curvo',
            'voveo',
        ],
        sources: [
            'tripudio',
            'volup',
        ],
        summary: 'Spero nostrum damnatio averto pecus cervus aspicio. Stabilis thesis admiratio. Acquiro sperno voluptate laboriosam comitatus teres doloribus canonicus considero tersus.',
        tags: [
            'alo',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(251) 489-6457',
                type: Shared\AtsTelephoneType::Mobile,
            ),
        ],
        title: 'Internal Paradigm Consultant',
        updatedAt: Utils\Utils::parseDateTime('2024-05-05T03:03:00.298Z'),
        webUrl: 'https://light-meander.com/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsCandidate(
    request: $request
);

if ($response->atsCandidate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsCandidateRequest](../../Models/Operations/UpdateAtsCandidateRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsCandidateResponse](../../Models/Operations/UpdateAtsCandidateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsCompany

Updates the AtsCompany identified by `id`. Provide the unified AtsCompany fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsCompany" method="put" path="/ats/{connection_id}/company/{id}" example="ats_company" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsCompanyRequest(
    atsCompany: new Shared\AtsCompany(
        createdAt: Utils\Utils::parseDateTime('2019-04-22T03:50:02.920Z'),
        fees: [
            new Shared\AtsFee(
                percentage: 23,
                type: Shared\AtsFeeType::Contingency,
            ),
        ],
        id: '3f7c8768-5f92-4b0e-bdea-be50a2e99991',
        name: 'Streich, Mohr and Barton',
        phone: '245-586-5728 x0090',
        updatedAt: Utils\Utils::parseDateTime('2020-10-08T02:33:45.532Z'),
        websiteUrl: 'https://www.streichmohr.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsCompany(
    request: $request
);

if ($response->atsCompany !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateAtsCompanyRequest](../../Models/Operations/UpdateAtsCompanyRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateAtsCompanyResponse](../../Models/Operations/UpdateAtsCompanyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsDocument

Updates the AtsDocument identified by `id`. Provide the unified AtsDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsDocument" method="put" path="/ats/{connection_id}/document/{id}" example="ats_document" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsDocumentRequest(
    atsDocument: new Shared\AtsDocument(
        createdAt: Utils\Utils::parseDateTime('2021-08-20T08:00:27.437Z'),
        documentUrl: 'https://thin-video.org/',
        filename: 'reggie_langosh_resume.pdf',
        id: 'eb81546c-16bd-48c8-a76b-d57d5689e810',
        metadata: [],
        type: Shared\AtsDocumentType::CoverLetter,
        updatedAt: Utils\Utils::parseDateTime('2022-12-16T05:37:05.885Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsDocument(
    request: $request
);

if ($response->atsDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateAtsDocumentRequest](../../Models/Operations/UpdateAtsDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateAtsDocumentResponse](../../Models/Operations/UpdateAtsDocumentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsInterview

Updates the AtsInterview identified by `id`. Provide the unified AtsInterview fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsInterview" method="put" path="/ats/{connection_id}/interview/{id}" example="ats_interview" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsInterviewRequest(
    atsInterview: new Shared\AtsInterview(
        createdAt: Utils\Utils::parseDateTime('2021-11-28T03:14:47.774Z'),
        endAt: Utils\Utils::parseDateTime('2021-12-08T06:33:19.583Z'),
        id: 'afb419e6-5e65-4446-b873-090f169fc90c',
        location: '9604 S Pine Street',
        meetingUrl: 'https://gummy-battle.name/',
        metadata: [],
        startAt: Utils\Utils::parseDateTime('2021-12-08T06:03:19.583Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2023-10-07T01:23:49.856Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsInterview(
    request: $request
);

if ($response->atsInterview !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsInterviewRequest](../../Models/Operations/UpdateAtsInterviewRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsInterviewResponse](../../Models/Operations/UpdateAtsInterviewResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsJob

Updates the AtsJob identified by `id`. Provide the unified AtsJob fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsJob" method="put" path="/ats/{connection_id}/job/{id}" example="ats_job" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsJobRequest(
    atsJob: new Shared\AtsJob(
        addresses: [
            new Shared\AtsAddress(
                address1: '458 E 8th Street',
                city: 'Visalia',
                countryCode: 'US',
                postalCode: '60669-0678',
                region: 'Oregon',
                regionCode: 'DE',
            ),
        ],
        compensation: [
            new Shared\AtsCompensation(
                currency: 'GBP',
                frequency: Shared\Frequency::Day,
                max: 174303,
                min: 174042,
                type: Shared\AtsCompensationType::Bonus,
            ),
            new Shared\AtsCompensation(
                currency: 'KMF',
                frequency: Shared\Frequency::Month,
                max: 171171,
                min: 151975,
                type: Shared\AtsCompensationType::Salary,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-06-16T12:51:44.518Z'),
        description: 'Senior',
        employmentType: Shared\EmploymentType::Freelance,
        fees: [
            new Shared\AtsFee(
                amount: 35146,
                currency: 'AFN',
                type: Shared\AtsFeeType::Contingency,
            ),
        ],
        hiringManagers: [],
        id: '9202f9b6-89cb-4ec7-8bd2-e71a953af81f',
        industry: 'Refined Ceramic Keyboard',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '2fbf9b2f-7f5d-49d1-836f-d5856cfa1a8b',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'cursus',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Senior Interactions Developer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Tolero aequus tamquam inflammatio asporto canis vinitor utrum.',
                openedAt: Utils\Utils::parseDateTime('2026-07-09T21:00:13.093Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '295 First Street',
                    city: 'East Agustinton',
                    countryCode: 'US',
                    postalCode: '57059',
                    region: 'Utah',
                    regionCode: 'NE',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-09-04T14:56:13.791Z'),
                description: 'Sublime.',
                id: 'd58e1645-61ca-4b1a-841f-dc3cb3d5374f',
                isActive: false,
                location: '5699 Purdy Motorway',
                name: 'Legacy Implementation Orchestrator',
                postingUrl: 'https://elementary-privilege.com/',
                updatedAt: Utils\Utils::parseDateTime('2026-10-01T16:53:24.562Z'),
            ),
        ],
        publicJobUrls: [
            'https://parched-dash.info',
            'https://mild-midwife.org/',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Capitulus.',
                id: '44efa448-7f00-46e4-bac9-3bb736f9ef12',
                maxLength: 214,
                minLength: 1,
                options: [
                    'aetas',
                    'vado',
                ],
                prompt: 'Agnosco tendo.',
                question: 'Deporto tolero.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: 'e1a0ab84-9404-466a-b934-1c196ab7e478',
                maxLength: 309,
                minLength: 1,
                options: [
                    'sodalitas',
                ],
                prompt: 'Supra veritatis.',
                question: 'Maxime tres tergiversatio tactus vehemens architecto ab nam defetiscor.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Confero trepide.',
                id: 'df920501-783b-4b08-a596-646cc2f4a673',
                maxLength: 428,
                minLength: 1,
                options: [
                    'censura',
                ],
                prompt: 'Taceo rem compello spectaculum mollitia arcus compello.',
                question: 'Attonbitus reprehenderit voro depono constans vehemens.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'similique',
            'absque',
        ],
        status: Shared\AtsJobStatus::Archived,
        summary: 'Contra damno desolo suadeo utrimque cresco aetas turpis.',
        updatedAt: Utils\Utils::parseDateTime('2026-03-28T10:23:33.072Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsJob(
    request: $request
);

if ($response->atsJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\UpdateAtsJobRequest](../../Models/Operations/UpdateAtsJobRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\UpdateAtsJobResponse](../../Models/Operations/UpdateAtsJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAtsScorecard

Updates the AtsScorecard identified by `id`. Provide the unified AtsScorecard fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAtsScorecard" method="put" path="/ats/{connection_id}/scorecard/{id}" example="ats_scorecard" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAtsScorecardRequest(
    atsScorecard: new Shared\AtsScorecard(
        comment: 'Aliquam.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: 'b4691bd1-8bd4-4b12-aa5a-efe50e7223ec',
        metadata: [],
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Pecto vulpes libero vomer comburo.',
                text: 'Desidero modi tamdiu auxilium defessus adimpleo clementia tero.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Conatus cicuta doloremque statua bonus.',
                description: 'Aduro viscus celebrer.',
                text: 'Decretum.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-06-15T11:42:00.834Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->ats->updateAtsScorecard(
    request: $request
);

if ($response->atsScorecard !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateAtsScorecardRequest](../../Models/Operations/UpdateAtsScorecardRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateAtsScorecardResponse](../../Models/Operations/UpdateAtsScorecardResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |