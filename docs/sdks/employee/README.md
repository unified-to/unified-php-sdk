# Employee

## Overview

### Available Operations

* [createHrisEmployee2](#createhrisemployee2) - Create an employee
* [getHrisEmployee2](#gethrisemployee2) - Retrieve an employee
* [listHrisEmployees2](#listhrisemployees2) - List all employees
* [patchHrisEmployee2](#patchhrisemployee2) - Update an employee
* [removeHrisEmployee2](#removehrisemployee2) - Remove an employee
* [updateHrisEmployee2](#updatehrisemployee2) - Update an employee

## createHrisEmployee2

Create an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisEmployee2" method="post" path="/hris/{connection_id}/employee" -->
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

$request = new Operations\CreateHrisEmployee2Request(
    hrisEmployee: new Shared\HrisEmployee(),
    connectionId: '<id>',
);

$response = $sdk->employee->createHrisEmployee2(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateHrisEmployee2Request](../../Models/Operations/CreateHrisEmployee2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateHrisEmployee2Response](../../Models/Operations/CreateHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisEmployee2

Retrieve an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisEmployee2" method="get" path="/hris/{connection_id}/employee/{id}" -->
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

$request = new Operations\GetHrisEmployee2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->employee->getHrisEmployee2(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetHrisEmployee2Request](../../Models/Operations/GetHrisEmployee2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetHrisEmployee2Response](../../Models/Operations/GetHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisEmployees2

List all employees

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisEmployees2" method="get" path="/hris/{connection_id}/employee" -->
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

$request = new Operations\ListHrisEmployees2Request(
    connectionId: '<id>',
);

$response = $sdk->employee->listHrisEmployees2(
    request: $request
);

if ($response->hrisEmployees !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisEmployees2Request](../../Models/Operations/ListHrisEmployees2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisEmployees2Response](../../Models/Operations/ListHrisEmployees2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisEmployee2

Update an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisEmployee2" method="patch" path="/hris/{connection_id}/employee/{id}" -->
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

$request = new Operations\PatchHrisEmployee2Request(
    hrisEmployee: new Shared\HrisEmployee(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->employee->patchHrisEmployee2(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchHrisEmployee2Request](../../Models/Operations/PatchHrisEmployee2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchHrisEmployee2Response](../../Models/Operations/PatchHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisEmployee2

Remove an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisEmployee2" method="delete" path="/hris/{connection_id}/employee/{id}" -->
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

$request = new Operations\RemoveHrisEmployee2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->employee->removeHrisEmployee2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemoveHrisEmployee2Request](../../Models/Operations/RemoveHrisEmployee2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemoveHrisEmployee2Response](../../Models/Operations/RemoveHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisEmployee2

Update an employee

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisEmployee2" method="put" path="/hris/{connection_id}/employee/{id}" -->
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

$request = new Operations\UpdateHrisEmployee2Request(
    hrisEmployee: new Shared\HrisEmployee(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->employee->updateHrisEmployee2(
    request: $request
);

if ($response->hrisEmployee !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdateHrisEmployee2Request](../../Models/Operations/UpdateHrisEmployee2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdateHrisEmployee2Response](../../Models/Operations/UpdateHrisEmployee2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |