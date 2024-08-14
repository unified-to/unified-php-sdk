# Interview


### Available Operations

* [createAtsInterview](#createatsinterview) - Create an interview
* [getAtsInterview](#getatsinterview) - Retrieve an interview
* [listAtsInterviews](#listatsinterviews) - List all interviews
* [patchAtsInterview](#patchatsinterview) - Update an interview
* [removeAtsInterview](#removeatsinterview) - Remove an interview
* [updateAtsInterview](#updateatsinterview) - Update an interview

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
    );
    $response = $sdk->interview->createAtsInterview($request);

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
    $response = $sdk->interview->getAtsInterview($request);

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
    $response = $sdk->interview->listAtsInterviews($request);

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
    );
    $response = $sdk->interview->patchAtsInterview($request);

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
    $response = $sdk->interview->removeAtsInterview($request);

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
    );
    $response = $sdk->interview->updateAtsInterview($request);

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
