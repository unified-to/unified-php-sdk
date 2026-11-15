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
        id: '290b5b7c-57c8-4341-b20b-01534cc8e60b',
        industry: 'Handcrafted Bamboo Soap',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '0ef97525-abf3-4d1a-b17c-b3590153a484',
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
                openedAt: Utils\Utils::parseDateTime('2026-06-30T01:15:53.431Z'),
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
                createdAt: Utils\Utils::parseDateTime('2026-08-25T07:14:49.562Z'),
                description: 'Beatus eum volutabrum balbus victus ipsa tubineus claustrum.',
                id: '594b738f-cd0e-40e0-93a9-9b11218e1132',
                isActive: false,
                location: '1725 Hessel Keys',
                name: 'International Identity Manager',
                postingUrl: 'https://obedient-yak.com',
                updatedAt: Utils\Utils::parseDateTime('2026-09-21T03:29:47.801Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Auctus deporto tolero administratio capitulus animi agnosco tendo aetas vado.',
                id: '285b1328-8e5d-4547-9e44-70024464ba5a',
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
                id: 'ebc02e8a-8d5d-4dfa-9ab2-85f88ba0cd06',
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
                id: '1cb6ca2f-38ba-434e-92c0-0d92c6090cf8',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-19T12:26:21.076Z'),
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

Creates a HrisJob. Provide the unified HrisJob fields in the request body; they are mapped to the provider's API. Returns the created HrisJob.

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
        id: '09f2a730-4e68-407c-934b-26e99ac01d90',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-02-08T14:55:58.466Z'),
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

Retrieves a single HrisJob by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of HrisJobs. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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
        id: '10245390-f3ef-47b4-93b7-0b931039574b',
        industry: 'Handcrafted Bamboo Soap',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'd9a556b8-63e0-42ed-aab0-dcdd7ac2e2f7',
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
                openedAt: Utils\Utils::parseDateTime('2026-06-30T01:15:53.473Z'),
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
                createdAt: Utils\Utils::parseDateTime('2026-08-25T07:14:49.606Z'),
                description: 'Beatus eum volutabrum balbus victus ipsa tubineus claustrum.',
                id: '6308d66f-44ef-4fba-9e60-ca73acc14bbf',
                isActive: false,
                location: '1725 Hessel Keys',
                name: 'International Identity Manager',
                postingUrl: 'https://obedient-yak.com',
                updatedAt: Utils\Utils::parseDateTime('2026-09-21T03:29:47.845Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Auctus deporto tolero administratio capitulus animi agnosco tendo aetas vado.',
                id: '4d3325e1-38eb-4c5f-a3e4-959adf2c80c8',
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
                id: '2c6f07fc-f97f-4d88-9b55-fd9d8c26b0af',
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
                id: '34c96701-4adb-417c-b89d-3848e1a1daef',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-19T12:26:21.114Z'),
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

Updates the HrisJob identified by `id`. Provide the unified HrisJob fields to change in the request body.

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
        id: '985c80d6-a274-48a2-8261-d3bbfe37e060',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-02-08T14:55:58.520Z'),
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

Deletes the HrisJob identified by `id`.

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
        id: '10245390-f3ef-47b4-93b7-0b931039574b',
        industry: 'Handcrafted Bamboo Soap',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'd9a556b8-63e0-42ed-aab0-dcdd7ac2e2f7',
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
                openedAt: Utils\Utils::parseDateTime('2026-06-30T01:15:53.473Z'),
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
                createdAt: Utils\Utils::parseDateTime('2026-08-25T07:14:49.606Z'),
                description: 'Beatus eum volutabrum balbus victus ipsa tubineus claustrum.',
                id: '6308d66f-44ef-4fba-9e60-ca73acc14bbf',
                isActive: false,
                location: '1725 Hessel Keys',
                name: 'International Identity Manager',
                postingUrl: 'https://obedient-yak.com',
                updatedAt: Utils\Utils::parseDateTime('2026-09-21T03:29:47.845Z'),
            ),
        ],
        publicJobUrls: [
            'https://trustworthy-elver.info',
            'https://parched-dash.info',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Auctus deporto tolero administratio capitulus animi agnosco tendo aetas vado.',
                id: '4d3325e1-38eb-4c5f-a3e4-959adf2c80c8',
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
                id: '2c6f07fc-f97f-4d88-9b55-fd9d8c26b0af',
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
                id: '34c96701-4adb-417c-b89d-3848e1a1daef',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-19T12:26:21.114Z'),
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

Updates the HrisJob identified by `id`. Provide the unified HrisJob fields to change in the request body.

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
        id: '985c80d6-a274-48a2-8261-d3bbfe37e060',
        isActive: false,
        metadata: [],
        name: 'Internal Integration Specialist',
        updatedAt: Utils\Utils::parseDateTime('2023-02-08T14:55:58.520Z'),
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