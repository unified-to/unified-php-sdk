# Timeshift

## Overview

### Available Operations

* [createHrisTimeshift2](#createhristimeshift2) - Create a timeshift
* [getHrisTimeshift2](#gethristimeshift2) - Retrieve a timeshift
* [listHrisTimeshifts2](#listhristimeshifts2) - List all timeshifts
* [patchHrisTimeshift2](#patchhristimeshift2) - Update a timeshift
* [removeHrisTimeshift2](#removehristimeshift2) - Remove a timeshift
* [updateHrisTimeshift2](#updatehristimeshift2) - Update a timeshift

## createHrisTimeshift2

Create a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTimeshift2" method="post" path="/hris/{connection_id}/timeshift" -->
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

$request = new Operations\CreateHrisTimeshift2Request(
    hrisTimeshift: new Shared\HrisTimeshift(
        employeeUserId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->timeshift->createHrisTimeshift2(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateHrisTimeshift2Request](../../Models/Operations/CreateHrisTimeshift2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateHrisTimeshift2Response](../../Models/Operations/CreateHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTimeshift2

Retrieve a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeshift2" method="get" path="/hris/{connection_id}/timeshift/{id}" -->
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

$request = new Operations\GetHrisTimeshift2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeshift->getHrisTimeshift2(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetHrisTimeshift2Request](../../Models/Operations/GetHrisTimeshift2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetHrisTimeshift2Response](../../Models/Operations/GetHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeshifts2

List all timeshifts

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeshifts2" method="get" path="/hris/{connection_id}/timeshift" -->
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

$request = new Operations\ListHrisTimeshifts2Request(
    connectionId: '<id>',
);

$response = $sdk->timeshift->listHrisTimeshifts2(
    request: $request
);

if ($response->hrisTimeshifts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListHrisTimeshifts2Request](../../Models/Operations/ListHrisTimeshifts2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListHrisTimeshifts2Response](../../Models/Operations/ListHrisTimeshifts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTimeshift2

Update a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTimeshift2" method="patch" path="/hris/{connection_id}/timeshift/{id}" -->
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

$request = new Operations\PatchHrisTimeshift2Request(
    hrisTimeshift: new Shared\HrisTimeshift(
        employeeUserId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeshift->patchHrisTimeshift2(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchHrisTimeshift2Request](../../Models/Operations/PatchHrisTimeshift2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchHrisTimeshift2Response](../../Models/Operations/PatchHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTimeshift2

Remove a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTimeshift2" method="delete" path="/hris/{connection_id}/timeshift/{id}" -->
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

$request = new Operations\RemoveHrisTimeshift2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeshift->removeHrisTimeshift2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveHrisTimeshift2Request](../../Models/Operations/RemoveHrisTimeshift2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveHrisTimeshift2Response](../../Models/Operations/RemoveHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTimeshift2

Update a timeshift

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTimeshift2" method="put" path="/hris/{connection_id}/timeshift/{id}" -->
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

$request = new Operations\UpdateHrisTimeshift2Request(
    hrisTimeshift: new Shared\HrisTimeshift(
        employeeUserId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeshift->updateHrisTimeshift2(
    request: $request
);

if ($response->hrisTimeshift !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateHrisTimeshift2Request](../../Models/Operations/UpdateHrisTimeshift2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateHrisTimeshift2Response](../../Models/Operations/UpdateHrisTimeshift2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |