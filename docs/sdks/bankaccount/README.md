# Bankaccount

## Overview

### Available Operations

* [createHrisBankaccount2](#createhrisbankaccount2) - Create a bankaccount
* [getHrisBankaccount2](#gethrisbankaccount2) - Retrieve a bankaccount
* [listHrisBankaccounts2](#listhrisbankaccounts2) - List all bankaccounts
* [patchHrisBankaccount2](#patchhrisbankaccount2) - Update a bankaccount
* [removeHrisBankaccount2](#removehrisbankaccount2) - Remove a bankaccount
* [updateHrisBankaccount2](#updatehrisbankaccount2) - Update a bankaccount

## createHrisBankaccount2

Create a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisBankaccount2" method="post" path="/hris/{connection_id}/bankaccount" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateHrisBankaccount2Request(
    hrisBankaccount: new Shared\HrisBankaccount(),
    connectionId: '<id>',
);

$response = $sdk->bankaccount->createHrisBankaccount2(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateHrisBankaccount2Request](../../Models/Operations/CreateHrisBankaccount2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateHrisBankaccount2Response](../../Models/Operations/CreateHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisBankaccount2

Retrieve a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisBankaccount2" method="get" path="/hris/{connection_id}/bankaccount/{id}" -->
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

$request = new Operations\GetHrisBankaccount2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankaccount->getHrisBankaccount2(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetHrisBankaccount2Request](../../Models/Operations/GetHrisBankaccount2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetHrisBankaccount2Response](../../Models/Operations/GetHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisBankaccounts2

List all bankaccounts

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisBankaccounts2" method="get" path="/hris/{connection_id}/bankaccount" -->
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

$request = new Operations\ListHrisBankaccounts2Request(
    connectionId: '<id>',
);

$response = $sdk->bankaccount->listHrisBankaccounts2(
    request: $request
);

if ($response->hrisBankaccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListHrisBankaccounts2Request](../../Models/Operations/ListHrisBankaccounts2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListHrisBankaccounts2Response](../../Models/Operations/ListHrisBankaccounts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisBankaccount2

Update a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisBankaccount2" method="patch" path="/hris/{connection_id}/bankaccount/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchHrisBankaccount2Request(
    hrisBankaccount: new Shared\HrisBankaccount(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankaccount->patchHrisBankaccount2(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchHrisBankaccount2Request](../../Models/Operations/PatchHrisBankaccount2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchHrisBankaccount2Response](../../Models/Operations/PatchHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisBankaccount2

Remove a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisBankaccount2" method="delete" path="/hris/{connection_id}/bankaccount/{id}" -->
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

$request = new Operations\RemoveHrisBankaccount2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankaccount->removeHrisBankaccount2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveHrisBankaccount2Request](../../Models/Operations/RemoveHrisBankaccount2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveHrisBankaccount2Response](../../Models/Operations/RemoveHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisBankaccount2

Update a bankaccount

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisBankaccount2" method="put" path="/hris/{connection_id}/bankaccount/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateHrisBankaccount2Request(
    hrisBankaccount: new Shared\HrisBankaccount(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankaccount->updateHrisBankaccount2(
    request: $request
);

if ($response->hrisBankaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateHrisBankaccount2Request](../../Models/Operations/UpdateHrisBankaccount2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateHrisBankaccount2Response](../../Models/Operations/UpdateHrisBankaccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |