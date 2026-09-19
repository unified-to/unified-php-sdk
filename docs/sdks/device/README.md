# Device

## Overview

### Available Operations

* [createHrisDevice](#createhrisdevice) - Create a device
* [getHrisDevice](#gethrisdevice) - Retrieve a device
* [listHrisDevices](#listhrisdevices) - List all devices
* [patchHrisDevice](#patchhrisdevice) - Update a device
* [removeHrisDevice](#removehrisdevice) - Remove a device
* [updateHrisDevice](#updatehrisdevice) - Update a device

## createHrisDevice

Create a device

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisDevice" method="post" path="/hris/{connection_id}/device" example="hris_device" -->
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

$request = new Operations\CreateHrisDeviceRequest(
    hrisDevice: new Shared\HrisDevice(
        adminUserIds: [],
        assetTag: 'dpho9OuFNG',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: false,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: true,
        id: '94a5734d-3325-443a-9241-9cbd51fa7d74',
        isMissing: false,
        manufacturer: 'Sanford - Hamill',
        model: 'Refined',
        name: 'cross_contamination_if.rar',
        os: 'monitor',
        osVersion: '1.12.16',
        updatedAt: Utils\Utils::parseDateTime('2023-05-21T14:40:14.018Z'),
        version: '2.20.17',
    ),
    connectionId: '<id>',
);

$response = $sdk->device->createHrisDevice(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateHrisDeviceRequest](../../Models/Operations/CreateHrisDeviceRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateHrisDeviceResponse](../../Models/Operations/CreateHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisDevice

Retrieve a device

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisDevice" method="get" path="/hris/{connection_id}/device/{id}" -->
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

$request = new Operations\GetHrisDeviceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->device->getHrisDevice(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetHrisDeviceRequest](../../Models/Operations/GetHrisDeviceRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetHrisDeviceResponse](../../Models/Operations/GetHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisDevices

List all devices

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisDevices" method="get" path="/hris/{connection_id}/device" -->
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

$request = new Operations\ListHrisDevicesRequest(
    connectionId: '<id>',
);

$response = $sdk->device->listHrisDevices(
    request: $request
);

if ($response->hrisDevices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListHrisDevicesRequest](../../Models/Operations/ListHrisDevicesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListHrisDevicesResponse](../../Models/Operations/ListHrisDevicesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisDevice

Update a device

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisDevice" method="patch" path="/hris/{connection_id}/device/{id}" example="hris_device" -->
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

$request = new Operations\PatchHrisDeviceRequest(
    hrisDevice: new Shared\HrisDevice(
        adminUserIds: [],
        assetTag: 'dpho9OuFNG',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: false,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: true,
        id: 'ef69180e-6279-4fde-9318-4db268b80d1a',
        isMissing: false,
        manufacturer: 'Sanford - Hamill',
        model: 'Refined',
        name: 'cross_contamination_if.rar',
        os: 'monitor',
        osVersion: '1.12.16',
        updatedAt: Utils\Utils::parseDateTime('2023-05-21T14:40:14.023Z'),
        version: '2.20.17',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->device->patchHrisDevice(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchHrisDeviceRequest](../../Models/Operations/PatchHrisDeviceRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchHrisDeviceResponse](../../Models/Operations/PatchHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisDevice

Remove a device

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisDevice" method="delete" path="/hris/{connection_id}/device/{id}" -->
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

$request = new Operations\RemoveHrisDeviceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->device->removeHrisDevice(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemoveHrisDeviceRequest](../../Models/Operations/RemoveHrisDeviceRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemoveHrisDeviceResponse](../../Models/Operations/RemoveHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisDevice

Update a device

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisDevice" method="put" path="/hris/{connection_id}/device/{id}" example="hris_device" -->
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

$request = new Operations\UpdateHrisDeviceRequest(
    hrisDevice: new Shared\HrisDevice(
        adminUserIds: [],
        assetTag: 'dpho9OuFNG',
        createdAt: Utils\Utils::parseDateTime('2019-04-04T17:11:40.322Z'),
        hasAntivirus: false,
        hasFirewall: true,
        hasHdEncrypted: true,
        hasPasswordManager: true,
        hasScreenlock: true,
        id: 'ef69180e-6279-4fde-9318-4db268b80d1a',
        isMissing: false,
        manufacturer: 'Sanford - Hamill',
        model: 'Refined',
        name: 'cross_contamination_if.rar',
        os: 'monitor',
        osVersion: '1.12.16',
        updatedAt: Utils\Utils::parseDateTime('2023-05-21T14:40:14.023Z'),
        version: '2.20.17',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->device->updateHrisDevice(
    request: $request
);

if ($response->hrisDevice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateHrisDeviceRequest](../../Models/Operations/UpdateHrisDeviceRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateHrisDeviceResponse](../../Models/Operations/UpdateHrisDeviceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |