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
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T14:20:06.157Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2024-12-30T13:08:04.495Z'),
        id: 'e93e8c47-06be-4da8-a5d7-b5a40792f6da',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-05T21:21:26.345Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T06:04:29.768Z'),
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
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T14:20:06.158Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2024-12-30T13:08:04.504Z'),
        id: '51b756d5-54f6-4a94-a07c-fbc29d88246f',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-05T21:21:26.350Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T06:04:29.770Z'),
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
        approvedAt: Utils\Utils::parseDateTime('2022-02-23T14:20:06.158Z'),
        comments: 'Blandior ventus curiositas amplitudo.',
        createdAt: Utils\Utils::parseDateTime('2021-10-06T18:00:20.615Z'),
        duration: 4,
        durationType: Shared\DurationType::Day,
        endAt: Utils\Utils::parseDateTime('2024-12-30T13:08:04.504Z'),
        id: '51b756d5-54f6-4a94-a07c-fbc29d88246f',
        isPaid: true,
        metadata: [],
        originalType: 'acerbitas ut',
        reason: 'verto',
        startAt: Utils\Utils::parseDateTime('2023-09-05T21:21:26.350Z'),
        status: Shared\HrisTimeoffStatus::Denied,
        type: Shared\HrisTimeoffType::InLieu,
        updatedAt: Utils\Utils::parseDateTime('2022-07-13T06:04:29.770Z'),
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