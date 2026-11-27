# Vehicle

## Overview

### Available Operations

* [createDmsVehicle](#createdmsvehicle) - Create a vehicle
* [getDmsVehicle](#getdmsvehicle) - Retrieve a vehicle
* [listDmsVehicles](#listdmsvehicles) - List all vehicles
* [patchDmsVehicle](#patchdmsvehicle) - Update a vehicle
* [updateDmsVehicle](#updatedmsvehicle) - Update a vehicle

## createDmsVehicle

Creates a DmsVehicle. Provide the unified DmsVehicle fields in the request body; they are mapped to the provider's API. Returns the created DmsVehicle.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsVehicle" method="post" path="/dms/{connection_id}/vehicle" example="dms_vehicle" -->
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

$request = new Operations\CreateDmsVehicleRequest(
    dmsVehicle: new Shared\DmsVehicle(
        bodyStyle: 'Pickup',
        condition: Shared\Condition::New,
        costAmount: 26498,
        createdAt: Utils\Utils::parseDateTime('2021-02-03T08:01:58.559Z'),
        currency: 'USD',
        description: '2023 Citroën Silverado',
        exteriorColor: 'lavender',
        fuelType: Shared\FuelType::Electric,
        id: '7eca198a-aee3-4584-a9d7-04e170b3a39c',
        imageUrls: [
            'https://picsum.photos/seed/tOUr5K/1358/1877',
        ],
        interiorColor: 'Black',
        internetPriceAmount: 29526,
        isActive: true,
        isCertified: false,
        isInventory: true,
        isPublished: false,
        make: 'Citroën',
        metadata: [],
        model: 'Silverado',
        modelCode: 'PMU8KI',
        msrpAmount: 33100,
        odometer: 1,
        odometerUnit: Shared\DmsVehicleOdometerUnit::Miles,
        options: [
            new Shared\DmsVehicleOption(
                code: 'SXE',
                costAmount: 250,
                description: 'Tow package',
                priceAmount: 1400,
                type: Shared\DmsVehicleOptionType::Dealer,
            ),
            new Shared\DmsVehicleOption(
                code: '458',
                costAmount: 700,
                description: 'Tow package',
                priceAmount: 600,
                type: Shared\DmsVehicleOptionType::Dealer,
            ),
        ],
        priceAmount: 29926,
        receivedAt: Utils\Utils::parseDateTime('2021-02-03T08:01:58.559Z'),
        status: Shared\DmsVehicleStatus::Other,
        stockNumber: 'N24959',
        transmission: 'Manual',
        trim: 'Base',
        type: Shared\DmsVehicleType::Suv,
        updatedAt: Utils\Utils::parseDateTime('2023-11-03T13:48:17.641Z'),
        vin: 'C29ZDU474DDR70955',
        warrantyExpiresAt: Utils\Utils::parseDateTime('2022-03-28T09:10:09.889Z'),
        year: 2023,
    ),
    connectionId: '<id>',
);

$response = $sdk->vehicle->createDmsVehicle(
    request: $request
);

if ($response->dmsVehicle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreateDmsVehicleRequest](../../Models/Operations/CreateDmsVehicleRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreateDmsVehicleResponse](../../Models/Operations/CreateDmsVehicleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDmsVehicle

Retrieves a single DmsVehicle by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsVehicle" method="get" path="/dms/{connection_id}/vehicle/{id}" -->
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

$request = new Operations\GetDmsVehicleRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->vehicle->getDmsVehicle(
    request: $request
);

if ($response->dmsVehicle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetDmsVehicleRequest](../../Models/Operations/GetDmsVehicleRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetDmsVehicleResponse](../../Models/Operations/GetDmsVehicleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDmsVehicles

Returns a list of DmsVehicles. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsVehicles" method="get" path="/dms/{connection_id}/vehicle" -->
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

$request = new Operations\ListDmsVehiclesRequest(
    connectionId: '<id>',
);

$response = $sdk->vehicle->listDmsVehicles(
    request: $request
);

if ($response->dmsVehicles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListDmsVehiclesRequest](../../Models/Operations/ListDmsVehiclesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListDmsVehiclesResponse](../../Models/Operations/ListDmsVehiclesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDmsVehicle

Updates the DmsVehicle identified by `id`. Provide the unified DmsVehicle fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsVehicle" method="patch" path="/dms/{connection_id}/vehicle/{id}" example="dms_vehicle" -->
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

$request = new Operations\PatchDmsVehicleRequest(
    dmsVehicle: new Shared\DmsVehicle(
        bodyStyle: 'Pickup',
        condition: Shared\Condition::New,
        costAmount: 26498,
        createdAt: Utils\Utils::parseDateTime('2021-02-03T08:01:58.559Z'),
        currency: 'USD',
        description: '2023 Citroën Silverado',
        exteriorColor: 'lavender',
        fuelType: Shared\FuelType::Electric,
        id: '401133e7-7c66-4a7e-856d-4c9926552b17',
        imageUrls: [
            'https://picsum.photos/seed/tOUr5K/1358/1877',
        ],
        interiorColor: 'Black',
        internetPriceAmount: 29526,
        isActive: true,
        isCertified: false,
        isInventory: true,
        isPublished: false,
        make: 'Citroën',
        metadata: [],
        model: 'Silverado',
        modelCode: 'PMU8KI',
        msrpAmount: 33100,
        odometer: 1,
        odometerUnit: Shared\DmsVehicleOdometerUnit::Miles,
        options: [
            new Shared\DmsVehicleOption(
                code: 'SXE',
                costAmount: 250,
                description: 'Tow package',
                priceAmount: 1400,
                type: Shared\DmsVehicleOptionType::Dealer,
            ),
            new Shared\DmsVehicleOption(
                code: '458',
                costAmount: 700,
                description: 'Tow package',
                priceAmount: 600,
                type: Shared\DmsVehicleOptionType::Dealer,
            ),
        ],
        priceAmount: 29926,
        receivedAt: Utils\Utils::parseDateTime('2021-02-03T08:01:58.559Z'),
        status: Shared\DmsVehicleStatus::Other,
        stockNumber: 'N24959',
        transmission: 'Manual',
        trim: 'Base',
        type: Shared\DmsVehicleType::Suv,
        updatedAt: Utils\Utils::parseDateTime('2023-11-03T13:48:17.652Z'),
        vin: 'C29ZDU474DDR70955',
        warrantyExpiresAt: Utils\Utils::parseDateTime('2022-03-28T09:10:09.889Z'),
        year: 2023,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->vehicle->patchDmsVehicle(
    request: $request
);

if ($response->dmsVehicle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchDmsVehicleRequest](../../Models/Operations/PatchDmsVehicleRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchDmsVehicleResponse](../../Models/Operations/PatchDmsVehicleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDmsVehicle

Updates the DmsVehicle identified by `id`. Provide the unified DmsVehicle fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsVehicle" method="put" path="/dms/{connection_id}/vehicle/{id}" example="dms_vehicle" -->
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

$request = new Operations\UpdateDmsVehicleRequest(
    dmsVehicle: new Shared\DmsVehicle(
        bodyStyle: 'Pickup',
        condition: Shared\Condition::New,
        costAmount: 26498,
        createdAt: Utils\Utils::parseDateTime('2021-02-03T08:01:58.559Z'),
        currency: 'USD',
        description: '2023 Citroën Silverado',
        exteriorColor: 'lavender',
        fuelType: Shared\FuelType::Electric,
        id: '401133e7-7c66-4a7e-856d-4c9926552b17',
        imageUrls: [
            'https://picsum.photos/seed/tOUr5K/1358/1877',
        ],
        interiorColor: 'Black',
        internetPriceAmount: 29526,
        isActive: true,
        isCertified: false,
        isInventory: true,
        isPublished: false,
        make: 'Citroën',
        metadata: [],
        model: 'Silverado',
        modelCode: 'PMU8KI',
        msrpAmount: 33100,
        odometer: 1,
        odometerUnit: Shared\DmsVehicleOdometerUnit::Miles,
        options: [
            new Shared\DmsVehicleOption(
                code: 'SXE',
                costAmount: 250,
                description: 'Tow package',
                priceAmount: 1400,
                type: Shared\DmsVehicleOptionType::Dealer,
            ),
            new Shared\DmsVehicleOption(
                code: '458',
                costAmount: 700,
                description: 'Tow package',
                priceAmount: 600,
                type: Shared\DmsVehicleOptionType::Dealer,
            ),
        ],
        priceAmount: 29926,
        receivedAt: Utils\Utils::parseDateTime('2021-02-03T08:01:58.559Z'),
        status: Shared\DmsVehicleStatus::Other,
        stockNumber: 'N24959',
        transmission: 'Manual',
        trim: 'Base',
        type: Shared\DmsVehicleType::Suv,
        updatedAt: Utils\Utils::parseDateTime('2023-11-03T13:48:17.652Z'),
        vin: 'C29ZDU474DDR70955',
        warrantyExpiresAt: Utils\Utils::parseDateTime('2022-03-28T09:10:09.889Z'),
        year: 2023,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->vehicle->updateDmsVehicle(
    request: $request
);

if ($response->dmsVehicle !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdateDmsVehicleRequest](../../Models/Operations/UpdateDmsVehicleRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdateDmsVehicleResponse](../../Models/Operations/UpdateDmsVehicleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |