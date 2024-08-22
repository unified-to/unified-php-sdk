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
    );
    $response = $sdk->job->createAtsJob($request);

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
    $response = $sdk->job->getAtsJob($request);

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
    $response = $sdk->job->listAtsJobs($request);

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
    );
    $response = $sdk->job->patchAtsJob($request);

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
    $response = $sdk->job->removeAtsJob($request);

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
    );
    $response = $sdk->job->updateAtsJob($request);

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
