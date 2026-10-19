# Earning

## Overview

### Available Operations

* [createHrisEarning](#createhrisearning) - Create an earning
* [getHrisEarning](#gethrisearning) - Retrieve an earning
* [listHrisEarnings](#listhrisearnings) - List all earnings
* [patchHrisEarning](#patchhrisearning) - Update an earning
* [removeHrisEarning](#removehrisearning) - Remove an earning
* [updateHrisEarning](#updatehrisearning) - Update an earning

## createHrisEarning

Create an earning

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisEarning" method="post" path="/hris/{connection_id}/earning" example="hris_earning" -->
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

$request = new Operations\CreateHrisEarningRequest(
    hrisEarning: new Shared\HrisEarning(
        amount: 4026,
        createdAt: Utils\Utils::parseDateTime('2019-01-26T12:44:52.326Z'),
        currency: 'PKR',
        frequency: Shared\HrisEarningFrequency::Biweekly,
        id: 'd9234eb6-e552-4e00-a765-9e4bfe4d94e9',
        notes: 'Truculenter vinum beatae.',
        startAt: Utils\Utils::parseDateTime('2022-07-24T14:15:50.123Z'),
        status: Shared\HrisEarningStatus::Processed,
        updatedAt: Utils\Utils::parseDateTime('2020-02-08T14:09:30.229Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->earning->createHrisEarning(
    request: $request
);

if ($response->hrisEarning !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisEarningRequest](../../Models/Operations/CreateHrisEarningRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisEarningResponse](../../Models/Operations/CreateHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisEarning

Retrieve an earning

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisEarning" method="get" path="/hris/{connection_id}/earning/{id}" -->
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

$request = new Operations\GetHrisEarningRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->earning->getHrisEarning(
    request: $request
);

if ($response->hrisEarning !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisEarningRequest](../../Models/Operations/GetHrisEarningRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisEarningResponse](../../Models/Operations/GetHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisEarnings

List all earnings

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisEarnings" method="get" path="/hris/{connection_id}/earning" -->
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

$request = new Operations\ListHrisEarningsRequest(
    connectionId: '<id>',
);

$response = $sdk->earning->listHrisEarnings(
    request: $request
);

if ($response->hrisEarnings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisEarningsRequest](../../Models/Operations/ListHrisEarningsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisEarningsResponse](../../Models/Operations/ListHrisEarningsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisEarning

Update an earning

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisEarning" method="patch" path="/hris/{connection_id}/earning/{id}" example="hris_earning" -->
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

$request = new Operations\PatchHrisEarningRequest(
    hrisEarning: new Shared\HrisEarning(
        amount: 4026,
        createdAt: Utils\Utils::parseDateTime('2019-01-26T12:44:52.326Z'),
        currency: 'PKR',
        frequency: Shared\HrisEarningFrequency::Biweekly,
        id: 'ae8d77e7-1791-4976-ad1e-dcbe762c091f',
        notes: 'Truculenter vinum beatae.',
        startAt: Utils\Utils::parseDateTime('2022-07-24T14:15:50.129Z'),
        status: Shared\HrisEarningStatus::Processed,
        updatedAt: Utils\Utils::parseDateTime('2020-02-08T14:09:30.231Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->earning->patchHrisEarning(
    request: $request
);

if ($response->hrisEarning !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisEarningRequest](../../Models/Operations/PatchHrisEarningRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisEarningResponse](../../Models/Operations/PatchHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisEarning

Remove an earning

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisEarning" method="delete" path="/hris/{connection_id}/earning/{id}" -->
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

$request = new Operations\RemoveHrisEarningRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->earning->removeHrisEarning(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisEarningRequest](../../Models/Operations/RemoveHrisEarningRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisEarningResponse](../../Models/Operations/RemoveHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisEarning

Update an earning

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisEarning" method="put" path="/hris/{connection_id}/earning/{id}" example="hris_earning" -->
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

$request = new Operations\UpdateHrisEarningRequest(
    hrisEarning: new Shared\HrisEarning(
        amount: 4026,
        createdAt: Utils\Utils::parseDateTime('2019-01-26T12:44:52.326Z'),
        currency: 'PKR',
        frequency: Shared\HrisEarningFrequency::Biweekly,
        id: 'ae8d77e7-1791-4976-ad1e-dcbe762c091f',
        notes: 'Truculenter vinum beatae.',
        startAt: Utils\Utils::parseDateTime('2022-07-24T14:15:50.129Z'),
        status: Shared\HrisEarningStatus::Processed,
        updatedAt: Utils\Utils::parseDateTime('2020-02-08T14:09:30.231Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->earning->updateHrisEarning(
    request: $request
);

if ($response->hrisEarning !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisEarningRequest](../../Models/Operations/UpdateHrisEarningRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisEarningResponse](../../Models/Operations/UpdateHrisEarningResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |