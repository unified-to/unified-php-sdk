# Timeentry

## Overview

### Available Operations

* [createLegalTimeentry](#createlegaltimeentry) - Create a timeentry
* [getLegalTimeentry](#getlegaltimeentry) - Retrieve a timeentry
* [listLegalTimeentries](#listlegaltimeentries) - List all timeentries
* [patchLegalTimeentry](#patchlegaltimeentry) - Update a timeentry
* [removeLegalTimeentry](#removelegaltimeentry) - Remove a timeentry
* [updateLegalTimeentry](#updatelegaltimeentry) - Update a timeentry

## createLegalTimeentry

Create a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="createLegalTimeentry" method="post" path="/legal/{connection_id}/timeentry" example="legal_timeentry" -->
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

$request = new Operations\CreateLegalTimeentryRequest(
    legalTimeentry: new Shared\LegalTimeentry(
        billableMinutes: 390,
        createdAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
        currency: 'ZAR',
        description: 'Ea derideo adulatio torrens.',
        id: 'bb5e1f22-8e53-4387-aa5d-50bc5eb1e763',
        isBillable: true,
        metadata: [],
        minutes: 390,
        rateAmount: 637,
        totalAmount: 4140.5,
        updatedAt: Utils\Utils::parseDateTime('2022-06-29T20:49:31.821Z'),
        workedAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->timeentry->createLegalTimeentry(
    request: $request
);

if ($response->legalTimeentry !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateLegalTimeentryRequest](../../Models/Operations/CreateLegalTimeentryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateLegalTimeentryResponse](../../Models/Operations/CreateLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getLegalTimeentry

Retrieve a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="getLegalTimeentry" method="get" path="/legal/{connection_id}/timeentry/{id}" -->
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

$request = new Operations\GetLegalTimeentryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeentry->getLegalTimeentry(
    request: $request
);

if ($response->legalTimeentry !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetLegalTimeentryRequest](../../Models/Operations/GetLegalTimeentryRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetLegalTimeentryResponse](../../Models/Operations/GetLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listLegalTimeentries

List all timeentries

### Example Usage

<!-- UsageSnippet language="php" operationID="listLegalTimeentries" method="get" path="/legal/{connection_id}/timeentry" -->
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

$request = new Operations\ListLegalTimeentriesRequest(
    connectionId: '<id>',
);

$response = $sdk->timeentry->listLegalTimeentries(
    request: $request
);

if ($response->legalTimeentries !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListLegalTimeentriesRequest](../../Models/Operations/ListLegalTimeentriesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListLegalTimeentriesResponse](../../Models/Operations/ListLegalTimeentriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchLegalTimeentry

Update a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLegalTimeentry" method="patch" path="/legal/{connection_id}/timeentry/{id}" example="legal_timeentry" -->
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

$request = new Operations\PatchLegalTimeentryRequest(
    legalTimeentry: new Shared\LegalTimeentry(
        billableMinutes: 390,
        createdAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
        currency: 'ZAR',
        description: 'Ea derideo adulatio torrens.',
        id: 'dbf4d363-77c1-48b3-a507-6e2d57b411de',
        isBillable: true,
        metadata: [],
        minutes: 390,
        rateAmount: 637,
        totalAmount: 4140.5,
        updatedAt: Utils\Utils::parseDateTime('2022-06-29T20:49:31.821Z'),
        workedAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeentry->patchLegalTimeentry(
    request: $request
);

if ($response->legalTimeentry !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchLegalTimeentryRequest](../../Models/Operations/PatchLegalTimeentryRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchLegalTimeentryResponse](../../Models/Operations/PatchLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeLegalTimeentry

Remove a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLegalTimeentry" method="delete" path="/legal/{connection_id}/timeentry/{id}" -->
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

$request = new Operations\RemoveLegalTimeentryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeentry->removeLegalTimeentry(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveLegalTimeentryRequest](../../Models/Operations/RemoveLegalTimeentryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveLegalTimeentryResponse](../../Models/Operations/RemoveLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateLegalTimeentry

Update a timeentry

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLegalTimeentry" method="put" path="/legal/{connection_id}/timeentry/{id}" example="legal_timeentry" -->
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

$request = new Operations\UpdateLegalTimeentryRequest(
    legalTimeentry: new Shared\LegalTimeentry(
        billableMinutes: 390,
        createdAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
        currency: 'ZAR',
        description: 'Ea derideo adulatio torrens.',
        id: 'dbf4d363-77c1-48b3-a507-6e2d57b411de',
        isBillable: true,
        metadata: [],
        minutes: 390,
        rateAmount: 637,
        totalAmount: 4140.5,
        updatedAt: Utils\Utils::parseDateTime('2022-06-29T20:49:31.821Z'),
        workedAt: Utils\Utils::parseDateTime('2022-05-06T03:26:03.756Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeentry->updateLegalTimeentry(
    request: $request
);

if ($response->legalTimeentry !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateLegalTimeentryRequest](../../Models/Operations/UpdateLegalTimeentryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateLegalTimeentryResponse](../../Models/Operations/UpdateLegalTimeentryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |