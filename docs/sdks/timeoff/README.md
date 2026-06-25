# Timeoff

## Overview

### Available Operations

* [createHrisTimeoff2](#createhristimeoff2) - Create a timeoff
* [getHrisTimeoff2](#gethristimeoff2) - Retrieve a timeoff
* [listHrisTimeoffs2](#listhristimeoffs2) - List all timeoffs
* [patchHrisTimeoff2](#patchhristimeoff2) - Update a timeoff
* [removeHrisTimeoff2](#removehristimeoff2) - Remove a timeoff
* [updateHrisTimeoff2](#updatehristimeoff2) - Update a timeoff

## createHrisTimeoff2

Create a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTimeoff2" method="post" path="/hris/{connection_id}/timeoff" -->
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

$request = new Operations\CreateHrisTimeoff2Request(
    hrisTimeoff: new Shared\HrisTimeoff(
        userId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->timeoff->createHrisTimeoff2(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisTimeoff2Request](../../Models/Operations/CreateHrisTimeoff2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisTimeoff2Response](../../Models/Operations/CreateHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTimeoff2

Retrieve a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeoff2" method="get" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\GetHrisTimeoff2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->getHrisTimeoff2(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisTimeoff2Request](../../Models/Operations/GetHrisTimeoff2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisTimeoff2Response](../../Models/Operations/GetHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeoffs2

List all timeoffs

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeoffs2" method="get" path="/hris/{connection_id}/timeoff" -->
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

$request = new Operations\ListHrisTimeoffs2Request(
    connectionId: '<id>',
);

$response = $sdk->timeoff->listHrisTimeoffs2(
    request: $request
);

if ($response->hrisTimeoffs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListHrisTimeoffs2Request](../../Models/Operations/ListHrisTimeoffs2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListHrisTimeoffs2Response](../../Models/Operations/ListHrisTimeoffs2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTimeoff2

Update a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTimeoff2" method="patch" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\PatchHrisTimeoff2Request(
    hrisTimeoff: new Shared\HrisTimeoff(
        userId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->patchHrisTimeoff2(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisTimeoff2Request](../../Models/Operations/PatchHrisTimeoff2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisTimeoff2Response](../../Models/Operations/PatchHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTimeoff2

Remove a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTimeoff2" method="delete" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\RemoveHrisTimeoff2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->removeHrisTimeoff2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisTimeoff2Request](../../Models/Operations/RemoveHrisTimeoff2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisTimeoff2Response](../../Models/Operations/RemoveHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTimeoff2

Update a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTimeoff2" method="put" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\UpdateHrisTimeoff2Request(
    hrisTimeoff: new Shared\HrisTimeoff(
        userId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->updateHrisTimeoff2(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisTimeoff2Request](../../Models/Operations/UpdateHrisTimeoff2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisTimeoff2Response](../../Models/Operations/UpdateHrisTimeoff2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |