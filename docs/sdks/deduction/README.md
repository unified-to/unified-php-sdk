# Deduction

## Overview

### Available Operations

* [createHrisDeduction2](#createhrisdeduction2) - Create a deduction
* [getHrisDeduction2](#gethrisdeduction2) - Retrieve a deduction
* [listHrisDeductions2](#listhrisdeductions2) - List all deductions
* [patchHrisDeduction2](#patchhrisdeduction2) - Update a deduction
* [removeHrisDeduction2](#removehrisdeduction2) - Remove a deduction
* [updateHrisDeduction2](#updatehrisdeduction2) - Update a deduction

## createHrisDeduction2

Create a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDeduction2" method="post" path="/hris/{connection_id}/deduction" -->
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

$request = new Operations\CreateHrisDeduction2Request(
    hrisDeduction: new Shared\HrisDeduction(),
    connectionId: '<id>',
);

$response = $sdk->deduction->createHrisDeduction2(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateHrisDeduction2Request](../../Models/Operations/CreateHrisDeduction2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateHrisDeduction2Response](../../Models/Operations/CreateHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDeduction2

Retrieve a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDeduction2" method="get" path="/hris/{connection_id}/deduction/{id}" -->
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

$request = new Operations\GetHrisDeduction2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deduction->getHrisDeduction2(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHrisDeduction2Request](../../Models/Operations/GetHrisDeduction2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHrisDeduction2Response](../../Models/Operations/GetHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDeductions2

List all deductions

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDeductions2" method="get" path="/hris/{connection_id}/deduction" -->
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

$request = new Operations\ListHrisDeductions2Request(
    connectionId: '<id>',
);

$response = $sdk->deduction->listHrisDeductions2(
    request: $request
);

if ($response->hrisDeductions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHrisDeductions2Request](../../Models/Operations/ListHrisDeductions2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHrisDeductions2Response](../../Models/Operations/ListHrisDeductions2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDeduction2

Update a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDeduction2" method="patch" path="/hris/{connection_id}/deduction/{id}" -->
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

$request = new Operations\PatchHrisDeduction2Request(
    hrisDeduction: new Shared\HrisDeduction(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deduction->patchHrisDeduction2(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchHrisDeduction2Request](../../Models/Operations/PatchHrisDeduction2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchHrisDeduction2Response](../../Models/Operations/PatchHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDeduction2

Remove a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDeduction2" method="delete" path="/hris/{connection_id}/deduction/{id}" -->
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

$request = new Operations\RemoveHrisDeduction2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deduction->removeHrisDeduction2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveHrisDeduction2Request](../../Models/Operations/RemoveHrisDeduction2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveHrisDeduction2Response](../../Models/Operations/RemoveHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDeduction2

Update a deduction

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDeduction2" method="put" path="/hris/{connection_id}/deduction/{id}" -->
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

$request = new Operations\UpdateHrisDeduction2Request(
    hrisDeduction: new Shared\HrisDeduction(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deduction->updateHrisDeduction2(
    request: $request
);

if ($response->hrisDeduction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateHrisDeduction2Request](../../Models/Operations/UpdateHrisDeduction2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateHrisDeduction2Response](../../Models/Operations/UpdateHrisDeduction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |