# Bankaccount

## Overview

### Available Operations

* [createHrisBankaccount](#createhrisbankaccount) - Create a bankaccount
* [getHrisBankaccount](#gethrisbankaccount) - Retrieve a bankaccount
* [listHrisBankaccounts](#listhrisbankaccounts) - List all bankaccounts
* [patchHrisBankaccount](#patchhrisbankaccount) - Update a bankaccount
* [removeHrisBankaccount](#removehrisbankaccount) - Remove a bankaccount
* [updateHrisBankaccount](#updatehrisbankaccount) - Update a bankaccount

## createHrisBankaccount

Creates a HrisBankaccount. Provide the unified HrisBankaccount fields in the request body; they are mapped to the provider's API. Returns the created HrisBankaccount.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisBankaccount" method="post" path="/hris/{connection_id}/bankaccount" example="hris_bankaccount" -->
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

$request = new Operations\CreateHrisBankaccountRequest(
    hrisBankaccount: new Shared\HrisBankaccount(
        accountNumber: '****3777',
        accountNumberLast4: '3777',
        accountType: Shared\HrisBankaccountAccountType::Checking,
        bankName: 'Huel Group',
        countryCode: 'US',
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        currency: 'USD',
        id: '7370898a-fbf2-4f4e-b040-04b83e6239a2',
        isPrimary: true,
        metadata: [],
        name: 'Granville Schumm - Checking',
        priority: 2,
        routingNumber: '448650724',
        splitAmount: 98,
        splitType: Shared\SplitType::Percentage,
        updatedAt: Utils\Utils::parseDateTime('2025-07-08T10:02:53.895Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->bankaccount->createHrisBankaccount(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateHrisBankaccountRequest](../../Models/Operations/CreateHrisBankaccountRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateHrisBankaccountResponse](../../Models/Operations/CreateHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisBankaccount

Retrieves a single HrisBankaccount by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisBankaccount" method="get" path="/hris/{connection_id}/bankaccount/{id}" -->
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

$request = new Operations\GetHrisBankaccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankaccount->getHrisBankaccount(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetHrisBankaccountRequest](../../Models/Operations/GetHrisBankaccountRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetHrisBankaccountResponse](../../Models/Operations/GetHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisBankaccounts

Returns a list of HrisBankaccounts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisBankaccounts" method="get" path="/hris/{connection_id}/bankaccount" -->
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

$request = new Operations\ListHrisBankaccountsRequest(
    connectionId: '<id>',
);

$response = $sdk->bankaccount->listHrisBankaccounts(
    request: $request
);

if ($response->hrisBankaccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListHrisBankaccountsRequest](../../Models/Operations/ListHrisBankaccountsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListHrisBankaccountsResponse](../../Models/Operations/ListHrisBankaccountsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisBankaccount

Updates the HrisBankaccount identified by `id`. Provide the unified HrisBankaccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisBankaccount" method="patch" path="/hris/{connection_id}/bankaccount/{id}" example="hris_bankaccount" -->
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

$request = new Operations\PatchHrisBankaccountRequest(
    hrisBankaccount: new Shared\HrisBankaccount(
        accountNumber: '****3777',
        accountNumberLast4: '3777',
        accountType: Shared\HrisBankaccountAccountType::Checking,
        bankName: 'Huel Group',
        countryCode: 'US',
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        currency: 'USD',
        id: '46bdfcb0-642a-4d89-81eb-92149cddd734',
        isPrimary: true,
        metadata: [],
        name: 'Granville Schumm - Checking',
        priority: 2,
        routingNumber: '448650724',
        splitAmount: 98,
        splitType: Shared\SplitType::Percentage,
        updatedAt: Utils\Utils::parseDateTime('2025-07-08T10:02:53.909Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankaccount->patchHrisBankaccount(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchHrisBankaccountRequest](../../Models/Operations/PatchHrisBankaccountRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchHrisBankaccountResponse](../../Models/Operations/PatchHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisBankaccount

Deletes the HrisBankaccount identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisBankaccount" method="delete" path="/hris/{connection_id}/bankaccount/{id}" -->
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

$request = new Operations\RemoveHrisBankaccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankaccount->removeHrisBankaccount(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveHrisBankaccountRequest](../../Models/Operations/RemoveHrisBankaccountRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveHrisBankaccountResponse](../../Models/Operations/RemoveHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisBankaccount

Updates the HrisBankaccount identified by `id`. Provide the unified HrisBankaccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisBankaccount" method="put" path="/hris/{connection_id}/bankaccount/{id}" example="hris_bankaccount" -->
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

$request = new Operations\UpdateHrisBankaccountRequest(
    hrisBankaccount: new Shared\HrisBankaccount(
        accountNumber: '****3777',
        accountNumberLast4: '3777',
        accountType: Shared\HrisBankaccountAccountType::Checking,
        bankName: 'Huel Group',
        countryCode: 'US',
        createdAt: Utils\Utils::parseDateTime('2019-11-16T16:43:45.976Z'),
        currency: 'USD',
        id: '46bdfcb0-642a-4d89-81eb-92149cddd734',
        isPrimary: true,
        metadata: [],
        name: 'Granville Schumm - Checking',
        priority: 2,
        routingNumber: '448650724',
        splitAmount: 98,
        splitType: Shared\SplitType::Percentage,
        updatedAt: Utils\Utils::parseDateTime('2025-07-08T10:02:53.909Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankaccount->updateHrisBankaccount(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateHrisBankaccountRequest](../../Models/Operations/UpdateHrisBankaccountRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateHrisBankaccountResponse](../../Models/Operations/UpdateHrisBankaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |