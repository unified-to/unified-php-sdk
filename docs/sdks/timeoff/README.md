# Timeoff

## Overview

### Available Operations

* [createHrisTimeoff](#createhristimeoff) - Create a timeoff
* [getHrisTimeoff](#gethristimeoff) - Retrieve a timeoff
* [listHrisTimeoffs](#listhristimeoffs) - List all timeoffs
* [patchHrisTimeoff](#patchhristimeoff) - Update a timeoff
* [removeHrisTimeoff](#removehristimeoff) - Remove a timeoff
* [updateHrisTimeoff](#updatehristimeoff) - Update a timeoff

## createHrisTimeoff

Creates a HrisTimeoff. Provide the unified HrisTimeoff fields in the request body; they are mapped to the provider's API. Returns the created HrisTimeoff.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTimeoff" method="post" path="/hris/{connection_id}/timeoff" example="hris_timeoff" -->
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

$request = new Operations\CreateHrisTimeoffRequest(
    hrisTimeoff: new Shared\HrisTimeoff(
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T21:48:37.580Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2025-01-02T04:15:10.795Z'),
        id: '01f811e9-8dfe-43d3-8ddc-92e4ca6e85fd',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-07T10:43:45.060Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T21:00:55.817Z'),
        userId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->timeoff->createHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisTimeoffRequest](../../Models/Operations/CreateHrisTimeoffRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisTimeoffResponse](../../Models/Operations/CreateHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTimeoff

Retrieves a single HrisTimeoff by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeoff" method="get" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\GetHrisTimeoffRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->getHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisTimeoffRequest](../../Models/Operations/GetHrisTimeoffRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisTimeoffResponse](../../Models/Operations/GetHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeoffs

Returns a list of HrisTimeoffs. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeoffs" method="get" path="/hris/{connection_id}/timeoff" -->
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

$request = new Operations\ListHrisTimeoffsRequest(
    connectionId: '<id>',
);

$response = $sdk->timeoff->listHrisTimeoffs(
    request: $request
);

if ($response->hrisTimeoffs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisTimeoffsRequest](../../Models/Operations/ListHrisTimeoffsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisTimeoffsResponse](../../Models/Operations/ListHrisTimeoffsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTimeoff

Updates the HrisTimeoff identified by `id`. Provide the unified HrisTimeoff fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTimeoff" method="patch" path="/hris/{connection_id}/timeoff/{id}" example="hris_timeoff" -->
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

$request = new Operations\PatchHrisTimeoffRequest(
    hrisTimeoff: new Shared\HrisTimeoff(
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T21:48:37.581Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2025-01-02T04:15:10.804Z'),
        id: 'efbaef78-67a2-4e3d-a881-870ef4fbb8d5',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-07T10:43:45.065Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T21:00:55.818Z'),
        userId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->patchHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisTimeoffRequest](../../Models/Operations/PatchHrisTimeoffRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisTimeoffResponse](../../Models/Operations/PatchHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTimeoff

Deletes the HrisTimeoff identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTimeoff" method="delete" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\RemoveHrisTimeoffRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->removeHrisTimeoff(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisTimeoffRequest](../../Models/Operations/RemoveHrisTimeoffRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisTimeoffResponse](../../Models/Operations/RemoveHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTimeoff

Updates the HrisTimeoff identified by `id`. Provide the unified HrisTimeoff fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTimeoff" method="put" path="/hris/{connection_id}/timeoff/{id}" example="hris_timeoff" -->
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

$request = new Operations\UpdateHrisTimeoffRequest(
    hrisTimeoff: new Shared\HrisTimeoff(
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T21:48:37.581Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2025-01-02T04:15:10.804Z'),
        id: 'efbaef78-67a2-4e3d-a881-870ef4fbb8d5',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-07T10:43:45.065Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T21:00:55.818Z'),
        userId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->updateHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisTimeoffRequest](../../Models/Operations/UpdateHrisTimeoffRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisTimeoffResponse](../../Models/Operations/UpdateHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |