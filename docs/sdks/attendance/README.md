# Attendance

## Overview

### Available Operations

* [createHrisAttendance](#createhrisattendance) - Create an attendance
* [getHrisAttendance](#gethrisattendance) - Retrieve an attendance
* [listHrisAttendances](#listhrisattendances) - List all attendances
* [patchHrisAttendance](#patchhrisattendance) - Update an attendance
* [removeHrisAttendance](#removehrisattendance) - Remove an attendance
* [updateHrisAttendance](#updatehrisattendance) - Update an attendance

## createHrisAttendance

Create an attendance

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisAttendance" method="post" path="/hris/{connection_id}/attendance" example="hris_attendance" -->
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

$request = new Operations\CreateHrisAttendanceRequest(
    hrisAttendance: new Shared\HrisAttendance(
        address: new Shared\PropertyHrisAttendanceAddress(
            address1: '14108 Allie Flats',
            city: 'Kearaborough',
            countryCode: 'US',
            postalCode: '23844-2344',
            region: 'Tennessee',
            regionCode: 'CA',
        ),
        approvedAt: Utils\Utils::parseDateTime('2021-08-13T10:41:42.336Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 12,
                endAt: Utils\Utils::parseDateTime('2023-10-23T21:17:35.680Z'),
                id: 'd60a1001-5a8a-4991-8c21-f4da6036cc87',
                isPaid: true,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-10-17T01:29:11.478Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'UGX',
        declaredTipsAmount: 161,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-07T14:50:55.145Z'),
        hourlyRate: 53,
        hours: 10,
        id: '4dc42a25-5423-40c7-8e9f-7a6ee2825a9d',
        jobName: 'Global Creative Supervisor',
        nonCashTipsAmount: 54,
        startAt: Utils\Utils::parseDateTime('2021-11-09T13:41:47.651Z'),
        status: Shared\HrisAttendanceStatus::Closed,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-17T07:09:09.539Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->attendance->createHrisAttendance(
    request: $request
);

if ($response->hrisAttendance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateHrisAttendanceRequest](../../Models/Operations/CreateHrisAttendanceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateHrisAttendanceResponse](../../Models/Operations/CreateHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisAttendance

Retrieve an attendance

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisAttendance" method="get" path="/hris/{connection_id}/attendance/{id}" -->
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

$request = new Operations\GetHrisAttendanceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->attendance->getHrisAttendance(
    request: $request
);

if ($response->hrisAttendance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHrisAttendanceRequest](../../Models/Operations/GetHrisAttendanceRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHrisAttendanceResponse](../../Models/Operations/GetHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisAttendances

List all attendances

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisAttendances" method="get" path="/hris/{connection_id}/attendance" -->
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

$request = new Operations\ListHrisAttendancesRequest(
    connectionId: '<id>',
);

$response = $sdk->attendance->listHrisAttendances(
    request: $request
);

if ($response->hrisAttendances !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHrisAttendancesRequest](../../Models/Operations/ListHrisAttendancesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHrisAttendancesResponse](../../Models/Operations/ListHrisAttendancesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisAttendance

Update an attendance

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisAttendance" method="patch" path="/hris/{connection_id}/attendance/{id}" example="hris_attendance" -->
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

$request = new Operations\PatchHrisAttendanceRequest(
    hrisAttendance: new Shared\HrisAttendance(
        address: new Shared\PropertyHrisAttendanceAddress(
            address1: '14108 Allie Flats',
            city: 'Kearaborough',
            countryCode: 'US',
            postalCode: '23844-2344',
            region: 'Tennessee',
            regionCode: 'CA',
        ),
        approvedAt: Utils\Utils::parseDateTime('2021-08-13T10:41:42.336Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 12,
                endAt: Utils\Utils::parseDateTime('2023-10-23T21:17:35.691Z'),
                id: 'd60a1001-5a8a-4991-8c21-f4da6036cc87',
                isPaid: true,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-10-17T01:29:11.489Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'UGX',
        declaredTipsAmount: 161,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-07T14:50:55.159Z'),
        hourlyRate: 53,
        hours: 10,
        id: '6a4550f7-d438-4b96-af25-c8104c25caf9',
        jobName: 'Global Creative Supervisor',
        nonCashTipsAmount: 54,
        startAt: Utils\Utils::parseDateTime('2021-11-09T13:41:47.653Z'),
        status: Shared\HrisAttendanceStatus::Closed,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-17T07:09:09.542Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->attendance->patchHrisAttendance(
    request: $request
);

if ($response->hrisAttendance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchHrisAttendanceRequest](../../Models/Operations/PatchHrisAttendanceRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchHrisAttendanceResponse](../../Models/Operations/PatchHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisAttendance

Remove an attendance

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisAttendance" method="delete" path="/hris/{connection_id}/attendance/{id}" -->
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

$request = new Operations\RemoveHrisAttendanceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->attendance->removeHrisAttendance(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveHrisAttendanceRequest](../../Models/Operations/RemoveHrisAttendanceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveHrisAttendanceResponse](../../Models/Operations/RemoveHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisAttendance

Update an attendance

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisAttendance" method="put" path="/hris/{connection_id}/attendance/{id}" example="hris_attendance" -->
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

$request = new Operations\UpdateHrisAttendanceRequest(
    hrisAttendance: new Shared\HrisAttendance(
        address: new Shared\PropertyHrisAttendanceAddress(
            address1: '14108 Allie Flats',
            city: 'Kearaborough',
            countryCode: 'US',
            postalCode: '23844-2344',
            region: 'Tennessee',
            regionCode: 'CA',
        ),
        approvedAt: Utils\Utils::parseDateTime('2021-08-13T10:41:42.336Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 12,
                endAt: Utils\Utils::parseDateTime('2023-10-23T21:17:35.691Z'),
                id: 'd60a1001-5a8a-4991-8c21-f4da6036cc87',
                isPaid: true,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-10-17T01:29:11.489Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'UGX',
        declaredTipsAmount: 161,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-07T14:50:55.159Z'),
        hourlyRate: 53,
        hours: 10,
        id: '6a4550f7-d438-4b96-af25-c8104c25caf9',
        jobName: 'Global Creative Supervisor',
        nonCashTipsAmount: 54,
        startAt: Utils\Utils::parseDateTime('2021-11-09T13:41:47.653Z'),
        status: Shared\HrisAttendanceStatus::Closed,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-17T07:09:09.542Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->attendance->updateHrisAttendance(
    request: $request
);

if ($response->hrisAttendance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateHrisAttendanceRequest](../../Models/Operations/UpdateHrisAttendanceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateHrisAttendanceResponse](../../Models/Operations/UpdateHrisAttendanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |