# Job

## Overview

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

$response = $sdk->job->createAtsJob(
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

$response = $sdk->job->getAtsJob(
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

$response = $sdk->job->listAtsJobs(
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

$response = $sdk->job->patchAtsJob(
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

$response = $sdk->job->removeAtsJob(
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

$response = $sdk->job->updateAtsJob(
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