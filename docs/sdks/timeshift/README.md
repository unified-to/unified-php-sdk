# Timeshift

## Overview

### Available Operations

* [createHrisTimeshift](#createhristimeshift) - Create a timeshift
* [getHrisTimeshift](#gethristimeshift) - Retrieve a timeshift
* [listHrisTimeshifts](#listhristimeshifts) - List all timeshifts
* [patchHrisTimeshift](#patchhristimeshift) - Update a timeshift
* [removeHrisTimeshift](#removehristimeshift) - Remove a timeshift
* [updateHrisTimeshift](#updatehristimeshift) - Update a timeshift

## createHrisTimeshift

Create a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTimeshift" method="post" path="/hris/{connection_id}/timeshift" example="hris_timeshift" -->
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

$request = new Operations\CreateHrisTimeshiftRequest(
    hrisTimeshift: new Shared\HrisTimeshift(
        approvedAt: Utils\Utils::parseDateTime('2023-06-22T11:48:05.220Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'JPY',
                frequency: Shared\HrisCompensationFrequency::Week,
                notes: 'Annus adficio suasoria architecto aggero.',
                type: Shared\HrisCompensationType::Commission,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-09-25T02:10:21.433Z'),
        hours: 8,
        id: 'd4322957-54f4-4d19-9238-a83eb27d62ae',
        isApproved: true,
        startAt: Utils\Utils::parseDateTime('2023-07-11T22:11:28.636Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-07-01T08:48:55.324Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->timeshift->createHrisTimeshift(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateHrisTimeshiftRequest](../../Models/Operations/CreateHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateHrisTimeshiftResponse](../../Models/Operations/CreateHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTimeshift

Retrieve a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeshift" method="get" path="/hris/{connection_id}/timeshift/{id}" -->
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

$request = new Operations\GetHrisTimeshiftRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeshift->getHrisTimeshift(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetHrisTimeshiftRequest](../../Models/Operations/GetHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetHrisTimeshiftResponse](../../Models/Operations/GetHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeshifts

List all timeshifts

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeshifts" method="get" path="/hris/{connection_id}/timeshift" -->
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

$request = new Operations\ListHrisTimeshiftsRequest(
    connectionId: '<id>',
);

$response = $sdk->timeshift->listHrisTimeshifts(
    request: $request
);

if ($response->hrisTimeshifts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisTimeshiftsRequest](../../Models/Operations/ListHrisTimeshiftsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisTimeshiftsResponse](../../Models/Operations/ListHrisTimeshiftsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTimeshift

Update a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTimeshift" method="patch" path="/hris/{connection_id}/timeshift/{id}" example="hris_timeshift" -->
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

$request = new Operations\PatchHrisTimeshiftRequest(
    hrisTimeshift: new Shared\HrisTimeshift(
        approvedAt: Utils\Utils::parseDateTime('2023-06-22T11:48:05.228Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'JPY',
                frequency: Shared\HrisCompensationFrequency::Week,
                notes: 'Annus adficio suasoria architecto aggero.',
                type: Shared\HrisCompensationType::Commission,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-09-25T02:10:21.448Z'),
        hours: 8,
        id: '744d4768-c37e-4845-a7b8-0454cc0995e0',
        isApproved: true,
        startAt: Utils\Utils::parseDateTime('2023-07-11T22:11:28.644Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-07-01T08:48:55.328Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeshift->patchHrisTimeshift(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchHrisTimeshiftRequest](../../Models/Operations/PatchHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchHrisTimeshiftResponse](../../Models/Operations/PatchHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTimeshift

Remove a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTimeshift" method="delete" path="/hris/{connection_id}/timeshift/{id}" -->
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

$request = new Operations\RemoveHrisTimeshiftRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeshift->removeHrisTimeshift(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveHrisTimeshiftRequest](../../Models/Operations/RemoveHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveHrisTimeshiftResponse](../../Models/Operations/RemoveHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTimeshift

Update a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTimeshift" method="put" path="/hris/{connection_id}/timeshift/{id}" example="hris_timeshift" -->
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

$request = new Operations\UpdateHrisTimeshiftRequest(
    hrisTimeshift: new Shared\HrisTimeshift(
        approvedAt: Utils\Utils::parseDateTime('2023-06-22T11:48:05.228Z'),
        compensation: [
            new Shared\HrisCompensation(
                amount: 76761,
                currency: 'JPY',
                frequency: Shared\HrisCompensationFrequency::Week,
                notes: 'Annus adficio suasoria architecto aggero.',
                type: Shared\HrisCompensationType::Commission,
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2019-07-01T23:53:15.738Z'),
        employeeUserId: '<id>',
        endAt: Utils\Utils::parseDateTime('2026-09-25T02:10:21.448Z'),
        hours: 8,
        id: '744d4768-c37e-4845-a7b8-0454cc0995e0',
        isApproved: true,
        startAt: Utils\Utils::parseDateTime('2023-07-11T22:11:28.644Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-07-01T08:48:55.328Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeshift->updateHrisTimeshift(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateHrisTimeshiftRequest](../../Models/Operations/UpdateHrisTimeshiftRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateHrisTimeshiftResponse](../../Models/Operations/UpdateHrisTimeshiftResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |