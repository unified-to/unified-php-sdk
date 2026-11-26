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
        id: '35f15c4c-6ffb-4683-a246-3a0aed471d45',
        isActive: false,
        metadata: [],
        name: 'Customer Security Assistant',
        updatedAt: Utils\Utils::parseDateTime('2023-02-12T18:56:53.788Z'),
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
        id: '67063e56-b032-43eb-9945-1f0d14ef0103',
        isActive: false,
        metadata: [],
        name: 'Customer Security Assistant',
        updatedAt: Utils\Utils::parseDateTime('2023-02-12T18:56:53.840Z'),
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
        id: '67063e56-b032-43eb-9945-1f0d14ef0103',
        isActive: false,
        metadata: [],
        name: 'Customer Security Assistant',
        updatedAt: Utils\Utils::parseDateTime('2023-02-12T18:56:53.840Z'),
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