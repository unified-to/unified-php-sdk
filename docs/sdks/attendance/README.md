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

Creates a HrisAttendance. Provide the unified HrisAttendance fields in the request body; they are mapped to the provider's API. Returns the created HrisAttendance.

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
        approvedAt: Utils\Utils::parseDateTime('2021-09-19T20:38:01.240Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 51,
                endAt: Utils\Utils::parseDateTime('2024-02-20T19:51:22.094Z'),
                id: 'd182bbb5-a54d-41e5-80de-11535c23d0e2',
                isPaid: false,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-11-04T11:59:05.063Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'EUR',
        declaredTipsAmount: 54,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-30T01:40:38.567Z'),
        hourlyRate: 16,
        hours: 10,
        id: '00889603-6824-43c2-8657-2a588d1231ed',
        jobName: 'Human Accountability Administrator',
        metadata: [],
        nonCashTipsAmount: 167,
        startAt: Utils\Utils::parseDateTime('2021-11-11T16:03:56.308Z'),
        status: Shared\HrisAttendanceStatus::Open,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-20T23:40:04.696Z'),
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

Retrieves a single HrisAttendance by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of HrisAttendances. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Updates the HrisAttendance identified by `id`. Provide the unified HrisAttendance fields to change in the request body.

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
        approvedAt: Utils\Utils::parseDateTime('2021-09-19T20:38:01.240Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 51,
                endAt: Utils\Utils::parseDateTime('2024-02-20T19:51:22.109Z'),
                id: '736af8af-6599-4c0e-a933-51aee539f79b',
                isPaid: false,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-11-04T11:59:05.076Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'EUR',
        declaredTipsAmount: 54,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-30T01:40:38.583Z'),
        hourlyRate: 16,
        hours: 10,
        id: '9809c41f-3850-4299-9036-f6c06591c84c',
        jobName: 'Human Accountability Administrator',
        metadata: [],
        nonCashTipsAmount: 167,
        startAt: Utils\Utils::parseDateTime('2021-11-11T16:03:56.309Z'),
        status: Shared\HrisAttendanceStatus::Open,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-20T23:40:04.699Z'),
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

Deletes the HrisAttendance identified by `id`.

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

Updates the HrisAttendance identified by `id`. Provide the unified HrisAttendance fields to change in the request body.

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
        approvedAt: Utils\Utils::parseDateTime('2021-09-19T20:38:01.240Z'),
        breaks: [
            new Shared\HrisAttendanceBreak(
                durationMinutes: 51,
                endAt: Utils\Utils::parseDateTime('2024-02-20T19:51:22.109Z'),
                id: '736af8af-6599-4c0e-a933-51aee539f79b',
                isPaid: false,
                name: 'Lunch',
                startAt: Utils\Utils::parseDateTime('2023-11-04T11:59:05.076Z'),
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2021-08-10T19:43:18.452Z'),
        currency: 'EUR',
        declaredTipsAmount: 54,
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2024-04-30T01:40:38.583Z'),
        hourlyRate: 16,
        hours: 10,
        id: '9809c41f-3850-4299-9036-f6c06591c84c',
        jobName: 'Human Accountability Administrator',
        metadata: [],
        nonCashTipsAmount: 167,
        startAt: Utils\Utils::parseDateTime('2021-11-11T16:03:56.309Z'),
        status: Shared\HrisAttendanceStatus::Open,
        timezone: 'America/Atikokan',
        updatedAt: Utils\Utils::parseDateTime('2022-01-20T23:40:04.699Z'),
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