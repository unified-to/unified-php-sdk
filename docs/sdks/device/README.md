# Device

## Overview

### Available Operations

* [createHrisDevice2](#createhrisdevice2) - Create a device
* [getHrisDevice2](#gethrisdevice2) - Retrieve a device
* [listHrisDevices2](#listhrisdevices2) - List all devices
* [patchHrisDevice2](#patchhrisdevice2) - Update a device
* [removeHrisDevice2](#removehrisdevice2) - Remove a device
* [updateHrisDevice2](#updatehrisdevice2) - Update a device

## createHrisDevice2

Create a device

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDevice2" method="post" path="/hris/{connection_id}/device" -->
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

$request = new Operations\CreateHrisDevice2Request(
    hrisDevice: new Shared\HrisDevice(),
    connectionId: '<id>',
);

$response = $sdk->device->createHrisDevice2(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateHrisDevice2Request](../../Models/Operations/CreateHrisDevice2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateHrisDevice2Response](../../Models/Operations/CreateHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDevice2

Retrieve a device

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDevice2" method="get" path="/hris/{connection_id}/device/{id}" -->
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

$request = new Operations\GetHrisDevice2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->device->getHrisDevice2(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisDevice2Request](../../Models/Operations/GetHrisDevice2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisDevice2Response](../../Models/Operations/GetHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDevices2

List all devices

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDevices2" method="get" path="/hris/{connection_id}/device" -->
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

$request = new Operations\ListHrisDevices2Request(
    connectionId: '<id>',
);

$response = $sdk->device->listHrisDevices2(
    request: $request
);

if ($response->hrisDevices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisDevices2Request](../../Models/Operations/ListHrisDevices2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisDevices2Response](../../Models/Operations/ListHrisDevices2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDevice2

Update a device

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDevice2" method="patch" path="/hris/{connection_id}/device/{id}" -->
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

$request = new Operations\PatchHrisDevice2Request(
    hrisDevice: new Shared\HrisDevice(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->device->patchHrisDevice2(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchHrisDevice2Request](../../Models/Operations/PatchHrisDevice2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchHrisDevice2Response](../../Models/Operations/PatchHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDevice2

Remove a device

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDevice2" method="delete" path="/hris/{connection_id}/device/{id}" -->
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

$request = new Operations\RemoveHrisDevice2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->device->removeHrisDevice2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemoveHrisDevice2Request](../../Models/Operations/RemoveHrisDevice2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemoveHrisDevice2Response](../../Models/Operations/RemoveHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDevice2

Update a device

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDevice2" method="put" path="/hris/{connection_id}/device/{id}" -->
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

$request = new Operations\UpdateHrisDevice2Request(
    hrisDevice: new Shared\HrisDevice(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->device->updateHrisDevice2(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateHrisDevice2Request](../../Models/Operations/UpdateHrisDevice2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateHrisDevice2Response](../../Models/Operations/UpdateHrisDevice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |