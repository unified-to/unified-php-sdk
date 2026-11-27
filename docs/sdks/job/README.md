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
        id: '2d13928c-d57a-4d42-9b2d-e5fab6713fc6',
        industry: 'Refined Ceramic Keyboard',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: 'c011101d-be54-48bc-a917-9df73386e7a2',
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
                openedAt: Utils\Utils::parseDateTime('2026-07-10T19:37:30.633Z'),
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
                createdAt: Utils\Utils::parseDateTime('2026-09-05T14:42:19.977Z'),
                description: 'Sublime.',
                id: 'b2738fc8-e2a4-42e2-b677-830532e83dd6',
                isActive: false,
                location: '5699 Purdy Motorway',
                name: 'Legacy Implementation Orchestrator',
                postingUrl: 'https://elementary-privilege.com/',
                updatedAt: Utils\Utils::parseDateTime('2026-10-02T17:12:21.054Z'),
            ),
        ],
        publicJobUrls: [
            'https://parched-dash.info',
            'https://mild-midwife.org/',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Capitulus.',
                id: 'cda949ff-ec2d-4ddf-b162-a787fd576dfb',
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
                id: '6a419c59-c0f1-4424-898d-ca1a2b92af40',
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
                id: 'f3c4d100-9c3b-4837-9e3b-4364f14f8df4',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-29T06:55:24.678Z'),
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
        code: 'P-54753',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Bonus vobis creator tabella callide cavus triumphus caveo abbas patria.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: 'c6410b17-9239-4584-83d9-db586afa0647',
        isActive: false,
        metadata: [],
        name: 'Customer Security Assistant',
        updatedAt: Utils\Utils::parseDateTime('2023-02-13T04:32:44.761Z'),
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
        id: '457c4d72-da8f-4958-b6a3-f11b95302745',
        industry: 'Refined Ceramic Keyboard',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '63920b45-7406-4f4c-8eaf-da4526c8f5ef',
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
                openedAt: Utils\Utils::parseDateTime('2026-07-10T19:37:30.682Z'),
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
                createdAt: Utils\Utils::parseDateTime('2026-09-05T14:42:20.029Z'),
                description: 'Sublime.',
                id: 'e1a73404-f1b5-4ed1-a55c-5cea9aed4f6b',
                isActive: false,
                location: '5699 Purdy Motorway',
                name: 'Legacy Implementation Orchestrator',
                postingUrl: 'https://elementary-privilege.com/',
                updatedAt: Utils\Utils::parseDateTime('2026-10-02T17:12:21.107Z'),
            ),
        ],
        publicJobUrls: [
            'https://parched-dash.info',
            'https://mild-midwife.org/',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Capitulus.',
                id: 'dc10da23-0791-4e12-b35e-ba9c4eb017da',
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
                id: '540eec92-4271-4b6f-bdc4-3b5affdf8207',
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
                id: '68b4f9c8-771b-49c7-895f-c51fc7e7b5fb',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-29T06:55:24.723Z'),
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
        code: 'P-54753',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Bonus vobis creator tabella callide cavus triumphus caveo abbas patria.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: 'f11b1e06-e1c3-4f41-893c-f5fecd9b823f',
        isActive: false,
        metadata: [],
        name: 'Customer Security Assistant',
        updatedAt: Utils\Utils::parseDateTime('2023-02-13T04:32:44.818Z'),
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
        id: '457c4d72-da8f-4958-b6a3-f11b95302745',
        industry: 'Refined Ceramic Keyboard',
        languageLocale: 'en',
        metadata: [
            new Shared\AtsMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\AtsMetadataFormat::Text,
                id: '63920b45-7406-4f4c-8eaf-da4526c8f5ef',
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
                openedAt: Utils\Utils::parseDateTime('2026-07-10T19:37:30.682Z'),
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
                createdAt: Utils\Utils::parseDateTime('2026-09-05T14:42:20.029Z'),
                description: 'Sublime.',
                id: 'e1a73404-f1b5-4ed1-a55c-5cea9aed4f6b',
                isActive: false,
                location: '5699 Purdy Motorway',
                name: 'Legacy Implementation Orchestrator',
                postingUrl: 'https://elementary-privilege.com/',
                updatedAt: Utils\Utils::parseDateTime('2026-10-02T17:12:21.107Z'),
            ),
        ],
        publicJobUrls: [
            'https://parched-dash.info',
            'https://mild-midwife.org/',
        ],
        questions: [
            new Shared\AtsJobQuestion(
                description: 'Capitulus.',
                id: 'dc10da23-0791-4e12-b35e-ba9c4eb017da',
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
                id: '540eec92-4271-4b6f-bdc4-3b5affdf8207',
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
                id: '68b4f9c8-771b-49c7-895f-c51fc7e7b5fb',
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
        updatedAt: Utils\Utils::parseDateTime('2026-03-29T06:55:24.723Z'),
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
        code: 'P-54753',
        createdAt: Utils\Utils::parseDateTime('2020-10-28T01:13:19.491Z'),
        description: 'Bonus vobis creator tabella callide cavus triumphus caveo abbas patria.',
        employmentType: Shared\HrisJobEmploymentType::Freelance,
        id: 'f11b1e06-e1c3-4f41-893c-f5fecd9b823f',
        isActive: false,
        metadata: [],
        name: 'Customer Security Assistant',
        updatedAt: Utils\Utils::parseDateTime('2023-02-13T04:32:44.818Z'),
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