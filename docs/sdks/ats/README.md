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

Create an activity

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
        bcc: [
            new Shared\AtsEmail(
                email: 'Mabel_Schuppe-Schowalter42@hotmail.com',
                name: 'Rochelle Franey-Bechtelar',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        cc: [
            new Shared\AtsEmail(
                email: 'Sasha24@hotmail.com',
                name: 'Dr. Elbert Kuvalis',
                type: Shared\AtsEmailType::Home,
            ),
            new Shared\AtsEmail(
                email: 'Rosetta_Donnelly@gmail.com',
                name: 'Ramon Daniel',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Kathryne_Jast@yahoo.com',
                name: 'Christian Jacobson',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Eldred95@yahoo.com',
                name: 'Edna Bogan',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Amplus.',
        from: new Shared\PropertyAtsActivityFrom(
            email: 'Norwood.Wiza47@yahoo.com',
            name: 'Toby Grant',
            type: Shared\PropertyAtsActivityFromType::Other,
        ),
        id: 'acf1f007-dc5d-4246-8e38-14cc3dcebf62',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '0c3cf076-e1ff-4693-b380-60374c282504',
                namespace: 'activity',
                slug: 'acer',
                value: 'Pauci eius cena adamo summisse arguo pectus communis arcesso tergeo.',
            ),
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '4c62f087-2fde-491d-8650-38b579851893',
                namespace: 'activity',
                slug: 'tremo',
                value: 'Amita delectus dicta temptatio utroque ex.',
            ),
        ],
        subType: 'TASK',
        title: 'Senior Interactions Manager',
        to: [
            new Shared\AtsEmail(
                email: 'Sister91@hotmail.com',
                name: 'Eddie Nienow PhD',
                type: Shared\AtsEmailType::Work,
            ),
        ],
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-03-06T13:33:13.014Z'),
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

Create an application

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
        appliedAt: Utils\Utils::parseDateTime('2025-09-08T08:47:38.152Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-04-14T14:33:00.903Z'),
        id: 'f5c781be-7431-407c-8e74-374b5b0e8a9e',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'a1302a79-0341-40e6-b91a-daeb95584617',
                namespace: 'application',
                slug: 'despecto',
                value: 'Argentum decretum cultellus aveho distinctio verecundia stella depono.',
            ),
        ],
        offers: [],
        originalStatus: 'vomica',
        originalSubstatus: 'allatus',
        rejectedAt: Utils\Utils::parseDateTime('2026-09-08T19:50:15.645Z'),
        rejectedReason: 'Cometes amplitudo videlicet talio.',
        source: 'credo',
        status: Shared\AtsApplicationStatus::Reviewing,
        updatedAt: Utils\Utils::parseDateTime('2026-09-15T11:08:47.343Z'),
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

Create a candidate

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
            address1: '802 Roberts Squares',
            address2: 'Suite 550',
            city: 'Lake Raeganside',
            countryCode: 'US',
            postalCode: '44530-0054',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        companyName: 'Ferry, Legros and Feest',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'mouser throughout',
                endAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
                fieldOfStudy: 'solutio',
                institution: 'Heller - Lubowitz',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('2001-03-26T08:12:11.510Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'Ardith.Beatty@hotmail.com',
                name: 'Opal Lindgren',
                type: Shared\AtsEmailType::Work,
            ),
            new Shared\AtsEmail(
                email: 'Ardith_Beatty@gmail.com',
                name: 'Kristi Nader',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Donnelly, Buckridge and Steuber',
                endAt: Utils\Utils::parseDateTime('1978-06-20T02:53:48.383Z'),
                startAt: Utils\Utils::parseDateTime('1980-02-06T17:16:53.798Z'),
                title: 'Principal Brand Strategist',
            ),
        ],
        firstName: 'Ardith',
        id: '272ac50a-16de-4eae-835e-fbed3d634d60',
        imageUrl: 'https://loremflickr.com/40/3693?lock=5634712403880328',
        jobIds: [],
        lastName: 'Beatty',
        linkUrls: [
            'https://sizzling-legislature.com',
            'https://soupy-interchange.net',
            'https://troubled-substitution.info',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '21a95a9a-1c1b-48fd-bd06-abf645e27fc1',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'cariosus',
            ),
        ],
        name: 'Ardith Beatty',
        origin: Shared\Origin::Sourced,
        skills: [
            'vita',
            'cohors',
        ],
        sources: [
            'tactus',
        ],
        tags: [
            'aliquid',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(779) 296-5994',
                type: Shared\AtsTelephoneType::Home,
            ),
        ],
        title: 'Principal Implementation Analyst',
        updatedAt: Utils\Utils::parseDateTime('2024-04-22T21:06:41.552Z'),
        webUrl: 'https://expert-lender.name/',
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

Create a company

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
        id: '78ced29d-f1a8-4c36-b440-5b1b3a3be5ab',
        name: 'Gulgowski, Dibbert and Wilderman',
        phone: '1-602-210-4548',
        updatedAt: Utils\Utils::parseDateTime('2020-09-24T19:30:08.481Z'),
        websiteUrl: 'https://somber-substitution.com/',
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

Create a document

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
        documentUrl: 'https://vengeful-lashes.biz',
        filename: 'bah_white_frantically.bz',
        id: 'f5d325b1-f389-407f-80f3-b0e13640af83',
        type: Shared\AtsDocumentType::Resume,
        updatedAt: Utils\Utils::parseDateTime('2022-11-28T22:09:20.368Z'),
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

Create an interview

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
        endAt: Utils\Utils::parseDateTime('2025-09-23T08:17:25.145Z'),
        externalEventXref: '1fc4a432-1e66-4f05-aeae-2d71e9763288',
        id: 'f8c16ff1-c75f-442a-80c0-c1353415f3a5',
        location: '26596 Halle Trafficway',
        startAt: Utils\Utils::parseDateTime('2025-05-19T06:25:27.904Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2026-02-04T00:36:47.789Z'),
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

Create a job

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
                address1: '98097 Carlo Trail',
                city: 'South Judd',
                countryCode: 'US',
                postalCode: '89776-0669',
                region: 'Mississippi',
                regionCode: 'FL',
            ),
        ],
        compensation: [
            new Shared\AtsCompensation(
                currency: 'AUD',
                frequency: Shared\Frequency::Day,
                max: 174303,
                min: 174042,
                type: Shared\AtsCompensationType::Bonus,
            ),
            new Shared\AtsCompensation(
                currency: 'MZN',
                frequency: Shared\Frequency::Month,
                max: 171171,
                min: 151975,
                type: Shared\AtsCompensationType::Salary,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-06-16T12:51:44.518Z'),
        description: 'Global',
        employmentType: Shared\EmploymentType::Freelance,
        hiringManagers: [
            new Shared\AtsReference(
                id: 'fd9852e3-9035-4f42-beb3-bbf4e4022122',
                name: 'Eloise Mueller PhD',
            ),
        ],
        id: 'abc2040b-9b88-4732-b5d7-71802f164f1e',
        industry: 'Gorgeous Plastic Computer',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '0aa5fa8f-8b57-49d4-995e-c5d830f8a096',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'acceptus',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Forward Brand Producer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Admoveo trado textilis.',
                openedAt: Utils\Utils::parseDateTime('2026-05-09T12:55:15.647Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '8460 Nils Trace',
                    city: 'West Mervinburgh',
                    countryCode: 'US',
                    postalCode: '14162',
                    region: 'Maine',
                    regionCode: 'MO',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-07-02T04:13:27.297Z'),
                description: 'Deduco cultellus alii terebro depono thesaurus.',
                id: 'f6101769-deb3-4721-978c-d205638870ee',
                isActive: false,
                location: '6788 Oxford Road',
                name: 'Forward Security Orchestrator',
                postingUrl: 'https://ajar-metabolite.net/',
                updatedAt: Utils\Utils::parseDateTime('2026-07-27T18:33:41.642Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Trepide provident taceo rem.',
                id: '289f27c0-311c-41e5-ad9d-cbe2097332c2',
                options: [
                    'censura',
                    'tum',
                ],
                prompt: 'Spectaculum mollitia arcus compello.',
                question: 'Sodalitas nemo natus attonbitus reprehenderit voro depono constans vehemens ante.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: 'b3a0b53b-38f3-4e8d-84b9-f413a900d79b',
                options: [
                    'odit',
                ],
                prompt: 'Similique absque temeritas celebrer enim.',
                question: 'Vinitor sodalitas desino sollers viduo volo.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Abstergo possimus quibusdam deinde amoveo.',
                id: '568be61d-060e-4d8c-a8ab-8a17cb25edf3',
                options: [
                    'vallum',
                ],
                prompt: 'Ara thermae aetas vivo constans victoria volo carbo vehemens praesentium.',
                question: 'Subiungo ambitus neque talis amitto terreo alienus quae vulticulus.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'amiculum',
            'crux',
        ],
        status: Shared\AtsJobStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2026-01-31T18:21:01.088Z'),
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

Create a scorecard

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
        comment: 'Maiores enim.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: 'c3766d54-1065-46a2-982d-4b25ae89fd81',
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Sulum textor eveniet facere vita.',
                text: 'Aliquam.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Decretum.',
                description: 'Conatus cicuta doloremque statua bonus.',
                text: 'Pecto vulpes libero vomer comburo.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-05-27T11:10:09.894Z'),
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

Retrieve an activity

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

Retrieve an application

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

## getAtsCandidate

Retrieve a candidate

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

Retrieve a company

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

Retrieve a document

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

Retrieve an interview

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

Retrieve a job

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

Retrieve a scorecard

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

List all activities

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

List all applications

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

List all applicationstatuses

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

List all candidates

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

List all companies

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

List all documents

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

List all interviews

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

List all jobs

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

List all scorecards

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

Update an activity

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
        bcc: [
            new Shared\AtsEmail(
                email: 'Mabel_Schuppe-Schowalter42@hotmail.com',
                name: 'Rochelle Franey-Bechtelar',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        cc: [
            new Shared\AtsEmail(
                email: 'Sasha24@hotmail.com',
                name: 'Dr. Elbert Kuvalis',
                type: Shared\AtsEmailType::Home,
            ),
            new Shared\AtsEmail(
                email: 'Rosetta_Donnelly@gmail.com',
                name: 'Ramon Daniel',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Kathryne_Jast@yahoo.com',
                name: 'Christian Jacobson',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Eldred95@yahoo.com',
                name: 'Edna Bogan',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Amplus.',
        from: new Shared\PropertyAtsActivityFrom(
            email: 'Norwood.Wiza47@yahoo.com',
            name: 'Toby Grant',
            type: Shared\PropertyAtsActivityFromType::Other,
        ),
        id: '09c0b7c8-cf09-47e6-81e4-b38db8539844',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'fe4795f4-2563-4dfd-aee7-e96757e80130',
                namespace: 'activity',
                slug: 'acer',
                value: 'Pauci eius cena adamo summisse arguo pectus communis arcesso tergeo.',
            ),
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '8775bf75-34f3-422c-b017-9d59c4ee1a4f',
                namespace: 'activity',
                slug: 'tremo',
                value: 'Amita delectus dicta temptatio utroque ex.',
            ),
        ],
        subType: 'TASK',
        title: 'Senior Interactions Manager',
        to: [
            new Shared\AtsEmail(
                email: 'Sister91@hotmail.com',
                name: 'Eddie Nienow PhD',
                type: Shared\AtsEmailType::Work,
            ),
        ],
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-03-06T13:33:13.030Z'),
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

Update an application

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
        appliedAt: Utils\Utils::parseDateTime('2025-09-08T08:47:38.167Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-04-14T14:33:00.923Z'),
        id: '4bdbd24c-49ab-4e27-ac80-6a54129ab0c8',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'a1302a79-0341-40e6-b91a-daeb95584617',
                namespace: 'application',
                slug: 'despecto',
                value: 'Argentum decretum cultellus aveho distinctio verecundia stella depono.',
            ),
        ],
        offers: [],
        originalStatus: 'vomica',
        originalSubstatus: 'allatus',
        rejectedAt: Utils\Utils::parseDateTime('2026-09-08T19:50:15.667Z'),
        rejectedReason: 'Cometes amplitudo videlicet talio.',
        source: 'credo',
        status: Shared\AtsApplicationStatus::Reviewing,
        updatedAt: Utils\Utils::parseDateTime('2026-09-15T11:08:47.366Z'),
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

Update a candidate

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
            address1: '802 Roberts Squares',
            address2: 'Suite 550',
            city: 'Lake Raeganside',
            countryCode: 'US',
            postalCode: '44530-0054',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        companyName: 'Ferry, Legros and Feest',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'mouser throughout',
                endAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
                fieldOfStudy: 'solutio',
                institution: 'Heller - Lubowitz',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('2001-03-26T08:12:11.510Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'Ardith.Beatty@hotmail.com',
                name: 'Opal Lindgren',
                type: Shared\AtsEmailType::Work,
            ),
            new Shared\AtsEmail(
                email: 'Ardith_Beatty@gmail.com',
                name: 'Kristi Nader',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Donnelly, Buckridge and Steuber',
                endAt: Utils\Utils::parseDateTime('1978-06-20T02:53:48.383Z'),
                startAt: Utils\Utils::parseDateTime('1980-02-06T17:16:53.798Z'),
                title: 'Principal Brand Strategist',
            ),
        ],
        firstName: 'Ardith',
        id: '059e01ee-fbbb-4c2e-be6b-de1775ee7110',
        imageUrl: 'https://loremflickr.com/40/3693?lock=5634712403880328',
        jobIds: [],
        lastName: 'Beatty',
        linkUrls: [
            'https://sizzling-legislature.com',
            'https://soupy-interchange.net',
            'https://troubled-substitution.info',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'b53dfb09-8f2b-4e22-b329-912e0b34feac',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'cariosus',
            ),
        ],
        name: 'Ardith Beatty',
        origin: Shared\Origin::Sourced,
        skills: [
            'vita',
            'cohors',
        ],
        sources: [
            'tactus',
        ],
        tags: [
            'aliquid',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(779) 296-5994',
                type: Shared\AtsTelephoneType::Home,
            ),
        ],
        title: 'Principal Implementation Analyst',
        updatedAt: Utils\Utils::parseDateTime('2024-04-22T21:06:41.557Z'),
        webUrl: 'https://expert-lender.name/',
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

Update a company

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
        id: '5e05144a-6f51-43b6-ac5c-236493b0ba10',
        name: 'Gulgowski, Dibbert and Wilderman',
        phone: '1-602-210-4548',
        updatedAt: Utils\Utils::parseDateTime('2020-09-24T19:30:08.483Z'),
        websiteUrl: 'https://somber-substitution.com/',
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

Update a document

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
        documentUrl: 'https://vengeful-lashes.biz',
        filename: 'bah_white_frantically.bz',
        id: '7f66a233-f2f5-4130-bfe9-fb665c831d3a',
        type: Shared\AtsDocumentType::Resume,
        updatedAt: Utils\Utils::parseDateTime('2022-11-28T22:09:20.370Z'),
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

Update an interview

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
        endAt: Utils\Utils::parseDateTime('2025-09-23T08:17:25.151Z'),
        externalEventXref: '6a22031c-0b28-4d56-ba42-1c31bf19c09f',
        id: '93efa9e8-7024-4008-b4ed-f951ce0c19c3',
        location: '26596 Halle Trafficway',
        startAt: Utils\Utils::parseDateTime('2025-05-19T06:25:27.909Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2026-02-04T00:36:47.796Z'),
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

Update a job

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
                address1: '98097 Carlo Trail',
                city: 'South Judd',
                countryCode: 'US',
                postalCode: '89776-0669',
                region: 'Mississippi',
                regionCode: 'FL',
            ),
        ],
        compensation: [
            new Shared\AtsCompensation(
                currency: 'AUD',
                frequency: Shared\Frequency::Day,
                max: 174303,
                min: 174042,
                type: Shared\AtsCompensationType::Bonus,
            ),
            new Shared\AtsCompensation(
                currency: 'MZN',
                frequency: Shared\Frequency::Month,
                max: 171171,
                min: 151975,
                type: Shared\AtsCompensationType::Salary,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-06-16T12:51:44.518Z'),
        description: 'Global',
        employmentType: Shared\EmploymentType::Freelance,
        hiringManagers: [
            new Shared\AtsReference(
                id: 'fd9852e3-9035-4f42-beb3-bbf4e4022122',
                name: 'Eloise Mueller PhD',
            ),
        ],
        id: '8b5ecc4b-1ec7-4db3-968d-b6ea34c37645',
        industry: 'Gorgeous Plastic Computer',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '32fa1129-286d-4567-887f-5cf5e2605c1d',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'acceptus',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Forward Brand Producer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Admoveo trado textilis.',
                openedAt: Utils\Utils::parseDateTime('2026-05-09T12:55:15.681Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '8460 Nils Trace',
                    city: 'West Mervinburgh',
                    countryCode: 'US',
                    postalCode: '14162',
                    region: 'Maine',
                    regionCode: 'MO',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-07-02T04:13:27.334Z'),
                description: 'Deduco cultellus alii terebro depono thesaurus.',
                id: 'f6101769-deb3-4721-978c-d205638870ee',
                isActive: false,
                location: '6788 Oxford Road',
                name: 'Forward Security Orchestrator',
                postingUrl: 'https://ajar-metabolite.net/',
                updatedAt: Utils\Utils::parseDateTime('2026-07-27T18:33:41.678Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Trepide provident taceo rem.',
                id: '289f27c0-311c-41e5-ad9d-cbe2097332c2',
                options: [
                    'censura',
                    'tum',
                ],
                prompt: 'Spectaculum mollitia arcus compello.',
                question: 'Sodalitas nemo natus attonbitus reprehenderit voro depono constans vehemens ante.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: 'b3a0b53b-38f3-4e8d-84b9-f413a900d79b',
                options: [
                    'odit',
                ],
                prompt: 'Similique absque temeritas celebrer enim.',
                question: 'Vinitor sodalitas desino sollers viduo volo.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Abstergo possimus quibusdam deinde amoveo.',
                id: '568be61d-060e-4d8c-a8ab-8a17cb25edf3',
                options: [
                    'vallum',
                ],
                prompt: 'Ara thermae aetas vivo constans victoria volo carbo vehemens praesentium.',
                question: 'Subiungo ambitus neque talis amitto terreo alienus quae vulticulus.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'amiculum',
            'crux',
        ],
        status: Shared\AtsJobStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2026-01-31T18:21:01.118Z'),
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

Update a scorecard

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
        comment: 'Maiores enim.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: '94a1a56d-57e5-4b2f-8e60-532dc14fd628',
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Sulum textor eveniet facere vita.',
                text: 'Aliquam.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Decretum.',
                description: 'Conatus cicuta doloremque statua bonus.',
                text: 'Pecto vulpes libero vomer comburo.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-05-27T11:10:09.897Z'),
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

Remove an activity

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

Remove an application

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

Remove a candidate

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

Remove a company

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

Remove a document

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

Remove an interview

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

Remove a job

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

Remove a scorecard

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

Update an activity

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
        bcc: [
            new Shared\AtsEmail(
                email: 'Mabel_Schuppe-Schowalter42@hotmail.com',
                name: 'Rochelle Franey-Bechtelar',
                type: Shared\AtsEmailType::Home,
            ),
        ],
        cc: [
            new Shared\AtsEmail(
                email: 'Sasha24@hotmail.com',
                name: 'Dr. Elbert Kuvalis',
                type: Shared\AtsEmailType::Home,
            ),
            new Shared\AtsEmail(
                email: 'Rosetta_Donnelly@gmail.com',
                name: 'Ramon Daniel',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Kathryne_Jast@yahoo.com',
                name: 'Christian Jacobson',
                type: Shared\AtsEmailType::Other,
            ),
            new Shared\AtsEmail(
                email: 'Eldred95@yahoo.com',
                name: 'Edna Bogan',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2022-08-07T03:16:43.865Z'),
        description: 'Amplus.',
        from: new Shared\PropertyAtsActivityFrom(
            email: 'Norwood.Wiza47@yahoo.com',
            name: 'Toby Grant',
            type: Shared\PropertyAtsActivityFromType::Other,
        ),
        id: '09c0b7c8-cf09-47e6-81e4-b38db8539844',
        isPrivate: false,
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'fe4795f4-2563-4dfd-aee7-e96757e80130',
                namespace: 'activity',
                slug: 'acer',
                value: 'Pauci eius cena adamo summisse arguo pectus communis arcesso tergeo.',
            ),
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '8775bf75-34f3-422c-b017-9d59c4ee1a4f',
                namespace: 'activity',
                slug: 'tremo',
                value: 'Amita delectus dicta temptatio utroque ex.',
            ),
        ],
        subType: 'TASK',
        title: 'Senior Interactions Manager',
        to: [
            new Shared\AtsEmail(
                email: 'Sister91@hotmail.com',
                name: 'Eddie Nienow PhD',
                type: Shared\AtsEmailType::Work,
            ),
        ],
        type: Shared\AtsActivityType::Task,
        updatedAt: Utils\Utils::parseDateTime('2026-03-06T13:33:13.030Z'),
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

Update an application

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
        appliedAt: Utils\Utils::parseDateTime('2025-09-08T08:47:38.167Z'),
        createdAt: Utils\Utils::parseDateTime('2023-10-17T07:19:48.787Z'),
        hiredAt: Utils\Utils::parseDateTime('2026-04-14T14:33:00.923Z'),
        id: '4bdbd24c-49ab-4e27-ac80-6a54129ab0c8',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'a1302a79-0341-40e6-b91a-daeb95584617',
                namespace: 'application',
                slug: 'despecto',
                value: 'Argentum decretum cultellus aveho distinctio verecundia stella depono.',
            ),
        ],
        offers: [],
        originalStatus: 'vomica',
        originalSubstatus: 'allatus',
        rejectedAt: Utils\Utils::parseDateTime('2026-09-08T19:50:15.667Z'),
        rejectedReason: 'Cometes amplitudo videlicet talio.',
        source: 'credo',
        status: Shared\AtsApplicationStatus::Reviewing,
        updatedAt: Utils\Utils::parseDateTime('2026-09-15T11:08:47.366Z'),
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

Update a candidate

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
            address1: '802 Roberts Squares',
            address2: 'Suite 550',
            city: 'Lake Raeganside',
            countryCode: 'US',
            postalCode: '44530-0054',
            region: 'Tennessee',
            regionCode: 'NV',
        ),
        companyName: 'Ferry, Legros and Feest',
        createdAt: Utils\Utils::parseDateTime('2023-10-16T05:42:56.049Z'),
        education: [
            new Shared\AtsCandidateEducation(
                degree: 'mouser throughout',
                endAt: Utils\Utils::parseDateTime('1992-11-28T20:23:20.311Z'),
                fieldOfStudy: 'solutio',
                institution: 'Heller - Lubowitz',
                level: 'phd',
                startAt: Utils\Utils::parseDateTime('2001-03-26T08:12:11.510Z'),
            ),
        ],
        emails: [
            new Shared\AtsEmail(
                email: 'Ardith.Beatty@hotmail.com',
                name: 'Opal Lindgren',
                type: Shared\AtsEmailType::Work,
            ),
            new Shared\AtsEmail(
                email: 'Ardith_Beatty@gmail.com',
                name: 'Kristi Nader',
                type: Shared\AtsEmailType::Other,
            ),
        ],
        experiences: [
            new Shared\AtsCandidateExperience(
                companyName: 'Donnelly, Buckridge and Steuber',
                endAt: Utils\Utils::parseDateTime('1978-06-20T02:53:48.383Z'),
                startAt: Utils\Utils::parseDateTime('1980-02-06T17:16:53.798Z'),
                title: 'Principal Brand Strategist',
            ),
        ],
        firstName: 'Ardith',
        id: '059e01ee-fbbb-4c2e-be6b-de1775ee7110',
        imageUrl: 'https://loremflickr.com/40/3693?lock=5634712403880328',
        jobIds: [],
        lastName: 'Beatty',
        linkUrls: [
            'https://sizzling-legislature.com',
            'https://soupy-interchange.net',
            'https://troubled-substitution.info',
        ],
        metadata: [
            new Shared\AtsMetadata(
                extraData: [

                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'b53dfb09-8f2b-4e22-b329-912e0b34feac',
                namespace: 'custom',
                slug: 'custom_field',
                value: 'cariosus',
            ),
        ],
        name: 'Ardith Beatty',
        origin: Shared\Origin::Sourced,
        skills: [
            'vita',
            'cohors',
        ],
        sources: [
            'tactus',
        ],
        tags: [
            'aliquid',
        ],
        telephones: [
            new Shared\AtsTelephone(
                telephone: '(779) 296-5994',
                type: Shared\AtsTelephoneType::Home,
            ),
        ],
        title: 'Principal Implementation Analyst',
        updatedAt: Utils\Utils::parseDateTime('2024-04-22T21:06:41.557Z'),
        webUrl: 'https://expert-lender.name/',
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

Update a company

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
        id: '5e05144a-6f51-43b6-ac5c-236493b0ba10',
        name: 'Gulgowski, Dibbert and Wilderman',
        phone: '1-602-210-4548',
        updatedAt: Utils\Utils::parseDateTime('2020-09-24T19:30:08.483Z'),
        websiteUrl: 'https://somber-substitution.com/',
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

Update a document

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
        documentUrl: 'https://vengeful-lashes.biz',
        filename: 'bah_white_frantically.bz',
        id: '7f66a233-f2f5-4130-bfe9-fb665c831d3a',
        type: Shared\AtsDocumentType::Resume,
        updatedAt: Utils\Utils::parseDateTime('2022-11-28T22:09:20.370Z'),
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

Update an interview

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
        endAt: Utils\Utils::parseDateTime('2025-09-23T08:17:25.151Z'),
        externalEventXref: '6a22031c-0b28-4d56-ba42-1c31bf19c09f',
        id: '93efa9e8-7024-4008-b4ed-f951ce0c19c3',
        location: '26596 Halle Trafficway',
        startAt: Utils\Utils::parseDateTime('2025-05-19T06:25:27.909Z'),
        status: Shared\AtsInterviewStatus::Scheduled,
        updatedAt: Utils\Utils::parseDateTime('2026-02-04T00:36:47.796Z'),
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

Update a job

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
                address1: '98097 Carlo Trail',
                city: 'South Judd',
                countryCode: 'US',
                postalCode: '89776-0669',
                region: 'Mississippi',
                regionCode: 'FL',
            ),
        ],
        compensation: [
            new Shared\AtsCompensation(
                currency: 'AUD',
                frequency: Shared\Frequency::Day,
                max: 174303,
                min: 174042,
                type: Shared\AtsCompensationType::Bonus,
            ),
            new Shared\AtsCompensation(
                currency: 'MZN',
                frequency: Shared\Frequency::Month,
                max: 171171,
                min: 151975,
                type: Shared\AtsCompensationType::Salary,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-06-16T12:51:44.518Z'),
        description: 'Global',
        employmentType: Shared\EmploymentType::Freelance,
        hiringManagers: [
            new Shared\AtsReference(
                id: 'fd9852e3-9035-4f42-beb3-bbf4e4022122',
                name: 'Eloise Mueller PhD',
            ),
        ],
        id: '8b5ecc4b-1ec7-4db3-968d-b6ea34c37645',
        industry: 'Gorgeous Plastic Computer',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '32fa1129-286d-4567-887f-5cf5e2605c1d',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'acceptus',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Forward Brand Producer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Admoveo trado textilis.',
                openedAt: Utils\Utils::parseDateTime('2026-05-09T12:55:15.681Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '8460 Nils Trace',
                    city: 'West Mervinburgh',
                    countryCode: 'US',
                    postalCode: '14162',
                    region: 'Maine',
                    regionCode: 'MO',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-07-02T04:13:27.334Z'),
                description: 'Deduco cultellus alii terebro depono thesaurus.',
                id: 'f6101769-deb3-4721-978c-d205638870ee',
                isActive: false,
                location: '6788 Oxford Road',
                name: 'Forward Security Orchestrator',
                postingUrl: 'https://ajar-metabolite.net/',
                updatedAt: Utils\Utils::parseDateTime('2026-07-27T18:33:41.678Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Trepide provident taceo rem.',
                id: '289f27c0-311c-41e5-ad9d-cbe2097332c2',
                options: [
                    'censura',
                    'tum',
                ],
                prompt: 'Spectaculum mollitia arcus compello.',
                question: 'Sodalitas nemo natus attonbitus reprehenderit voro depono constans vehemens ante.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: 'b3a0b53b-38f3-4e8d-84b9-f413a900d79b',
                options: [
                    'odit',
                ],
                prompt: 'Similique absque temeritas celebrer enim.',
                question: 'Vinitor sodalitas desino sollers viduo volo.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Abstergo possimus quibusdam deinde amoveo.',
                id: '568be61d-060e-4d8c-a8ab-8a17cb25edf3',
                options: [
                    'vallum',
                ],
                prompt: 'Ara thermae aetas vivo constans victoria volo carbo vehemens praesentium.',
                question: 'Subiungo ambitus neque talis amitto terreo alienus quae vulticulus.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'amiculum',
            'crux',
        ],
        status: Shared\AtsJobStatus::Archived,
        updatedAt: Utils\Utils::parseDateTime('2026-01-31T18:21:01.118Z'),
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

Update a scorecard

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
        comment: 'Maiores enim.',
        createdAt: Utils\Utils::parseDateTime('2022-02-20T17:09:45.498Z'),
        id: '94a1a56d-57e5-4b2f-8e60-532dc14fd628',
        questions: [
            new Shared\AtsScorecardQuestion(
                description: 'Sulum textor eveniet facere vita.',
                text: 'Aliquam.',
            ),
            new Shared\AtsScorecardQuestion(
                answer: 'Decretum.',
                description: 'Conatus cicuta doloremque statua bonus.',
                text: 'Pecto vulpes libero vomer comburo.',
            ),
        ],
        recommendation: Shared\Recommendation::StrongYes,
        updatedAt: Utils\Utils::parseDateTime('2023-05-27T11:10:09.897Z'),
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