# Application

## Overview

### Available Operations

* [createAtsApplication](#createatsapplication) - Create an application
* [getAtsApplication](#getatsapplication) - Retrieve an application
* [listAtsApplications](#listatsapplications) - List all applications
* [patchAtsApplication](#patchatsapplication) - Update an application
* [removeAtsApplication](#removeatsapplication) - Remove an application
* [updateAtsApplication](#updateatsapplication) - Update an application

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
    );
    $response = $sdk->application->createAtsApplication($request);

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
    $response = $sdk->application->getAtsApplication($request);

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
    $response = $sdk->application->listAtsApplications($request);

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
    );
    $response = $sdk->application->patchAtsApplication($request);

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
    $response = $sdk->application->removeAtsApplication($request);

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
    );
    $response = $sdk->application->updateAtsApplication($request);

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
