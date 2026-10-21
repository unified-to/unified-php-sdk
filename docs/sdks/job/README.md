# Job

## Overview

### Available Operations

* [createAtsJob](#createatsjob) - Create a job
* [createHrisJob](#createhrisjob) - Create a job
* [getAtsJob](#getatsjob) - Retrieve a job
* [getHrisJob](#gethrisjob) - Retrieve a job
* [listAtsJobs](#listatsjobs) - List all jobs
* [listHrisJobs](#listhrisjobs) - List all jobs
* [patchAtsJob](#patchatsjob) - Update a job
* [patchHrisJob](#patchhrisjob) - Update a job
* [removeAtsJob](#removeatsjob) - Remove a job
* [removeHrisJob](#removehrisjob) - Remove a job
* [updateAtsJob](#updateatsjob) - Update a job
* [updateHrisJob](#updatehrisjob) - Update a job

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
        hiringManagers: [],
        id: 'f1ed3a25-8406-4efd-afcf-0a385a1fadb2',
        industry: 'Handcrafted Bamboo Soap',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '6413a6cc-6a8e-4306-8822-db3f3900f798',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'desolo',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Forward Brand Producer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Admoveo trado textilis.',
                openedAt: Utils\Utils::parseDateTime('2026-06-07T21:28:07.896Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '75008 Medhurst Road',
                    city: 'Madelynnshire',
                    countryCode: 'US',
                    postalCode: '98754',
                    region: 'Wisconsin',
                    regionCode: 'CO',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-08-02T00:29:26.215Z'),
                description: 'Beatus eum volutabrum balbus victus ipsa tubineus claustrum.',
                id: 'b6f8c91a-7f05-4e3b-ac0a-c79968a8a9af',
                isActive: false,
                location: '1725 Hessel Keys',
                name: 'International Identity Manager',
                postingUrl: 'https://obedient-yak.com',
                updatedAt: Utils\Utils::parseDateTime('2026-08-28T07:52:25.733Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Auctus deporto tolero administratio capitulus animi agnosco tendo aetas vado.',
                id: '81736c36-1b8a-4700-a981-c384da1e68f5',
                maxLength: 117,
                minLength: 1,
                options: [
                    'tactus',
                    'vehemens',
                ],
                prompt: 'Totam maxime tres tergiversatio.',
                question: 'Doloribus mollitia.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: 'fcd02da9-266c-4de9-a918-9a98f813e617',
                maxLength: 453,
                minLength: 1,
                options: [
                    'constans',
                ],
                prompt: 'Veritatis sodalitas nemo natus attonbitus reprehenderit voro depono.',
                question: 'Nam.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Taceo rem compello spectaculum mollitia arcus compello.',
                id: 'e29c1433-3d51-4fa1-8492-3354e0f8e77d',
                maxLength: 66,
                minLength: 1,
                options: [
                    'repellendus',
                ],
                prompt: 'Tum tamisium autus.',
                question: 'Confero trepide.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'suadeo',
            'utrimque',
        ],
        status: Shared\AtsJobStatus::Archived,
        summary: 'Crepusculum adsuesco vere.',
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T09:47:18.130Z'),
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

## createHrisJob

Create a job

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisJob" method="post" path="/hris/{connection_id}/job" example="hris_job" -->
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

$request = new Operations\CreateHrisJobRequest(
    hrisJob: new Shared\HrisJob(
        code: 'P-05547',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Alienus timor depromo bonus vobis creator tabella callide cavus triumphus caveo.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: '9a3cb5cb-f487-4b03-8119-62f5eec3c16a',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-01-30T05:18:40.719Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->job->createHrisJob(
    request: $request
);

if ($response->hrisJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateHrisJobRequest](../../Models/Operations/CreateHrisJobRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateHrisJobResponse](../../Models/Operations/CreateHrisJobResponse.md)**

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

## getHrisJob

Retrieve a job

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisJob" method="get" path="/hris/{connection_id}/job/{id}" -->
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

$request = new Operations\GetHrisJobRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->job->getHrisJob(
    request: $request
);

if ($response->hrisJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetHrisJobRequest](../../Models/Operations/GetHrisJobRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetHrisJobResponse](../../Models/Operations/GetHrisJobResponse.md)**

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

## listHrisJobs

List all jobs

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisJobs" method="get" path="/hris/{connection_id}/job" -->
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

$request = new Operations\ListHrisJobsRequest(
    connectionId: '<id>',
);

$response = $sdk->job->listHrisJobs(
    request: $request
);

if ($response->hrisJobs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListHrisJobsRequest](../../Models/Operations/ListHrisJobsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListHrisJobsResponse](../../Models/Operations/ListHrisJobsResponse.md)**

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
        hiringManagers: [],
        id: '0b07a34e-39f9-404a-af24-ab50ae45bbd3',
        industry: 'Handcrafted Bamboo Soap',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '5ae4056e-ffe0-4bd5-bc78-8b4c4dae688f',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'desolo',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Forward Brand Producer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Admoveo trado textilis.',
                openedAt: Utils\Utils::parseDateTime('2026-06-07T21:28:07.934Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '75008 Medhurst Road',
                    city: 'Madelynnshire',
                    countryCode: 'US',
                    postalCode: '98754',
                    region: 'Wisconsin',
                    regionCode: 'CO',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-08-02T00:29:26.254Z'),
                description: 'Beatus eum volutabrum balbus victus ipsa tubineus claustrum.',
                id: '0711f01a-d966-4692-856e-ebefe2c72287',
                isActive: false,
                location: '1725 Hessel Keys',
                name: 'International Identity Manager',
                postingUrl: 'https://obedient-yak.com',
                updatedAt: Utils\Utils::parseDateTime('2026-08-28T07:52:25.774Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Auctus deporto tolero administratio capitulus animi agnosco tendo aetas vado.',
                id: '8a96c284-ea18-4779-bda9-ab1be23a235d',
                maxLength: 117,
                minLength: 1,
                options: [
                    'tactus',
                    'vehemens',
                ],
                prompt: 'Totam maxime tres tergiversatio.',
                question: 'Doloribus mollitia.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: '9ed04038-4f62-4955-ba05-9ccf7856a92c',
                maxLength: 453,
                minLength: 1,
                options: [
                    'constans',
                ],
                prompt: 'Veritatis sodalitas nemo natus attonbitus reprehenderit voro depono.',
                question: 'Nam.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Taceo rem compello spectaculum mollitia arcus compello.',
                id: '6306a3f2-d536-4273-9170-bad83ea4b5ae',
                maxLength: 66,
                minLength: 1,
                options: [
                    'repellendus',
                ],
                prompt: 'Tum tamisium autus.',
                question: 'Confero trepide.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'suadeo',
            'utrimque',
        ],
        status: Shared\AtsJobStatus::Archived,
        summary: 'Crepusculum adsuesco vere.',
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T09:47:18.165Z'),
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

## patchHrisJob

Update a job

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisJob" method="patch" path="/hris/{connection_id}/job/{id}" example="hris_job" -->
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

$request = new Operations\PatchHrisJobRequest(
    hrisJob: new Shared\HrisJob(
        code: 'P-05547',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Alienus timor depromo bonus vobis creator tabella callide cavus triumphus caveo.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: '51987954-bfbe-4f6d-8e56-6f516c79198d',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-01-30T05:18:40.762Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->job->patchHrisJob(
    request: $request
);

if ($response->hrisJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchHrisJobRequest](../../Models/Operations/PatchHrisJobRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchHrisJobResponse](../../Models/Operations/PatchHrisJobResponse.md)**

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

## removeHrisJob

Remove a job

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisJob" method="delete" path="/hris/{connection_id}/job/{id}" -->
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

$request = new Operations\RemoveHrisJobRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->job->removeHrisJob(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveHrisJobRequest](../../Models/Operations/RemoveHrisJobRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveHrisJobResponse](../../Models/Operations/RemoveHrisJobResponse.md)**

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
        hiringManagers: [],
        id: '0b07a34e-39f9-404a-af24-ab50ae45bbd3',
        industry: 'Handcrafted Bamboo Soap',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '5ae4056e-ffe0-4bd5-bc78-8b4c4dae688f',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'desolo',
            ),
        ],
        minimumDegree: 'Bachelor',
        minimumExperienceYears: 3,
        name: 'Forward Brand Producer',
        numberOfOpenings: 1,
        openings: [
            new Shared\AtsJobOpening(
                closeReason: 'Admoveo trado textilis.',
                openedAt: Utils\Utils::parseDateTime('2026-06-07T21:28:07.934Z'),
                status: Shared\AtsJobOpeningStatus::Open,
            ),
        ],
        postings: [
            new Shared\AtsJobPosting(
                address: new Shared\PropertyAtsJobPostingAddress(
                    address1: '75008 Medhurst Road',
                    city: 'Madelynnshire',
                    countryCode: 'US',
                    postalCode: '98754',
                    region: 'Wisconsin',
                    regionCode: 'CO',
                ),
                createdAt: Utils\Utils::parseDateTime('2026-08-02T00:29:26.254Z'),
                description: 'Beatus eum volutabrum balbus victus ipsa tubineus claustrum.',
                id: '0711f01a-d966-4692-856e-ebefe2c72287',
                isActive: false,
                location: '1725 Hessel Keys',
                name: 'International Identity Manager',
                postingUrl: 'https://obedient-yak.com',
                updatedAt: Utils\Utils::parseDateTime('2026-08-28T07:52:25.774Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Auctus deporto tolero administratio capitulus animi agnosco tendo aetas vado.',
                id: '8a96c284-ea18-4779-bda9-ab1be23a235d',
                maxLength: 117,
                minLength: 1,
                options: [
                    'tactus',
                    'vehemens',
                ],
                prompt: 'Totam maxime tres tergiversatio.',
                question: 'Doloribus mollitia.',
                required: true,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                id: '9ed04038-4f62-4955-ba05-9ccf7856a92c',
                maxLength: 453,
                minLength: 1,
                options: [
                    'constans',
                ],
                prompt: 'Veritatis sodalitas nemo natus attonbitus reprehenderit voro depono.',
                question: 'Nam.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
            new Shared\AtsJobQuestion(
                description: 'Taceo rem compello spectaculum mollitia arcus compello.',
                id: '6306a3f2-d536-4273-9170-bad83ea4b5ae',
                maxLength: 66,
                minLength: 1,
                options: [
                    'repellendus',
                ],
                prompt: 'Tum tamisium autus.',
                question: 'Confero trepide.',
                required: false,
                type: Shared\AtsJobQuestionType::Text,
            ),
        ],
        skills: [
            'suadeo',
            'utrimque',
        ],
        status: Shared\AtsJobStatus::Archived,
        summary: 'Crepusculum adsuesco vere.',
        updatedAt: Utils\Utils::parseDateTime('2026-02-27T09:47:18.165Z'),
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

## updateHrisJob

Update a job

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisJob" method="put" path="/hris/{connection_id}/job/{id}" example="hris_job" -->
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

$request = new Operations\UpdateHrisJobRequest(
    hrisJob: new Shared\HrisJob(
        code: 'P-05547',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Alienus timor depromo bonus vobis creator tabella callide cavus triumphus caveo.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: '51987954-bfbe-4f6d-8e56-6f516c79198d',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-01-30T05:18:40.762Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->job->updateHrisJob(
    request: $request
);

if ($response->hrisJob !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateHrisJobRequest](../../Models/Operations/UpdateHrisJobRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateHrisJobResponse](../../Models/Operations/UpdateHrisJobResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |