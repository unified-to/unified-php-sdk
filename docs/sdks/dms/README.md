# Dms

## Overview

### Available Operations

* [createDmsAppointment](#createdmsappointment) - Create an appointment
* [createDmsOpcode](#createdmsopcode) - Create an opcode
* [createDmsPart](#createdmspart) - Create a part
* [createDmsPartsale](#createdmspartsale) - Create a partsale
* [createDmsRepairorder](#createdmsrepairorder) - Create a repairorder
* [createDmsVehicle](#createdmsvehicle) - Create a vehicle
* [createDmsVehiclesale](#createdmsvehiclesale) - Create a vehiclesale
* [getDmsAppointment](#getdmsappointment) - Retrieve an appointment
* [getDmsOpcode](#getdmsopcode) - Retrieve an opcode
* [getDmsPart](#getdmspart) - Retrieve a part
* [getDmsPartsale](#getdmspartsale) - Retrieve a partsale
* [getDmsRepairorder](#getdmsrepairorder) - Retrieve a repairorder
* [getDmsVehicle](#getdmsvehicle) - Retrieve a vehicle
* [getDmsVehiclesale](#getdmsvehiclesale) - Retrieve a vehiclesale
* [listDmsAppointments](#listdmsappointments) - List all appointments
* [listDmsOpcodes](#listdmsopcodes) - List all opcodes
* [listDmsParts](#listdmsparts) - List all parts
* [listDmsPartsales](#listdmspartsales) - List all partsales
* [listDmsRepairorders](#listdmsrepairorders) - List all repairorders
* [listDmsVehicles](#listdmsvehicles) - List all vehicles
* [listDmsVehiclesales](#listdmsvehiclesales) - List all vehiclesales
* [patchDmsAppointment](#patchdmsappointment) - Update an appointment
* [patchDmsOpcode](#patchdmsopcode) - Update an opcode
* [patchDmsPart](#patchdmspart) - Update a part
* [patchDmsPartsale](#patchdmspartsale) - Update a partsale
* [patchDmsRepairorder](#patchdmsrepairorder) - Update a repairorder
* [patchDmsVehicle](#patchdmsvehicle) - Update a vehicle
* [patchDmsVehiclesale](#patchdmsvehiclesale) - Update a vehiclesale
* [removeDmsAppointment](#removedmsappointment) - Remove an appointment
* [updateDmsAppointment](#updatedmsappointment) - Update an appointment
* [updateDmsOpcode](#updatedmsopcode) - Update an opcode
* [updateDmsPart](#updatedmspart) - Update a part
* [updateDmsPartsale](#updatedmspartsale) - Update a partsale
* [updateDmsRepairorder](#updatedmsrepairorder) - Update a repairorder
* [updateDmsVehicle](#updatedmsvehicle) - Update a vehicle
* [updateDmsVehiclesale](#updatedmsvehiclesale) - Update a vehiclesale

## createDmsAppointment

Creates a DmsAppointment. Provide the unified DmsAppointment fields in the request body; they are mapped to the provider's API. Returns the created DmsAppointment.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsAppointment" method="post" path="/dms/{connection_id}/appointment" example="dms_appointment" -->
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

$request = new Operations\CreateDmsAppointmentRequest(
    dmsAppointment: new Shared\DmsAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-10-16T02:56:45.127Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-07T05:42:26.240Z'),
        id: 'd4359210-cd8e-4c2e-8c0a-c51986fc1efb',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '936a721d-9462-480d-86af-20d8ea5b0024',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: 'bc7e53e6-cc95-4762-a816-f0884c632258',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: 'ee0cd62a-bf4c-4a8b-986e-332c7627efa2',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-06T22:42:26.240Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T04:25:49.516Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->dms->createDmsAppointment(
    request: $request
);

if ($response->dmsAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateDmsAppointmentRequest](../../Models/Operations/CreateDmsAppointmentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateDmsAppointmentResponse](../../Models/Operations/CreateDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDmsOpcode

Creates a DmsOpcode. Provide the unified DmsOpcode fields in the request body; they are mapped to the provider's API. Returns the created DmsOpcode.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsOpcode" method="post" path="/dms/{connection_id}/opcode" example="dms_opcode" -->
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

$request = new Operations\CreateDmsOpcodeRequest(
    dmsOpcode: new Shared\DmsOpcode(
        category: 'Electrical',
        code: '02AUS',
        createdAt: Utils\Utils::parseDateTime('2021-01-12T19:03:17.545Z'),
        currency: 'USD',
        description: 'Oil and filter change',
        estimatedHours: 3.2,
        flatRateHours: 3.5,
        id: '74216011-0912-4cf7-8cf5-b1786b13c2b4',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T12:18:29.332Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->dms->createDmsOpcode(
    request: $request
);

if ($response->dmsOpcode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreateDmsOpcodeRequest](../../Models/Operations/CreateDmsOpcodeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreateDmsOpcodeResponse](../../Models/Operations/CreateDmsOpcodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDmsPart

Creates a DmsPart. Provide the unified DmsPart fields in the request body; they are mapped to the provider's API. Returns the created DmsPart.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsPart" method="post" path="/dms/{connection_id}/part" example="dms_part" -->
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

$request = new Operations\CreateDmsPartRequest(
    dmsPart: new Shared\DmsPart(
        binLocations: [
            'S18-6',
        ],
        category: 'Ignition',
        costAmount: 25.26,
        createdAt: Utils\Utils::parseDateTime('2020-07-02T08:18:03.858Z'),
        currency: 'USD',
        description: 'Cabin filter',
        id: '68bca3dd-e34d-4af1-a42e-08b9e5a83d9b',
        lastSoldAt: Utils\Utils::parseDateTime('2020-11-23T02:59:05.005Z'),
        listPriceAmount: 39.61,
        manufacturerCode: 'TOY',
        maxStockQuantity: 21,
        metadata: [],
        minStockQuantity: 3,
        packQuantity: 1,
        partNumber: '73992-IM3FI',
        quantityAvailable: 13,
        quantityOnHand: 15,
        quantityOnOrder: 14,
        sourceCode: '30',
        tradePriceAmount: 29.05,
        updatedAt: Utils\Utils::parseDateTime('2023-11-22T17:35:05.338Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->dms->createDmsPart(
    request: $request
);

if ($response->dmsPart !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateDmsPartRequest](../../Models/Operations/CreateDmsPartRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateDmsPartResponse](../../Models/Operations/CreateDmsPartResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDmsPartsale

Creates a DmsPartsale. Provide the unified DmsPartsale fields in the request body; they are mapped to the provider's API. Returns the created DmsPartsale.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsPartsale" method="post" path="/dms/{connection_id}/partsale" example="dms_partsale" -->
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

$request = new Operations\CreateDmsPartsaleRequest(
    dmsPartsale: new Shared\DmsPartsale(
        costAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-05-22T03:39:30.335Z'),
        currency: 'USD',
        discountAmount: 0,
        freightAmount: 0,
        id: '10413bb1-f92e-4e52-8931-a64d032625fb',
        lines: [
            new Shared\DmsPartline(
                id: 'eea9798d-b6fe-45f8-957f-00473beb10ed',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: 'f3a32de3-d70e-4b09-a654-241a91c29a39',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: 'b38ce923-92a4-4bc0-ae63-fa4c8be57373',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 3,
                quantityOrdered: 3,
                totalAmount: 249.54,
                unitPriceAmount: 83.18,
            ),
        ],
        metadata: [],
        number: 'P292867',
        payType: Shared\DmsPartsalePayType::Customer,
        status: Shared\DmsPartsaleStatus::Voided,
        subtotalAmount: 981.89,
        taxAmount: 68.73,
        totalAmount: 1050.62,
        type: Shared\DmsPartsaleType::Sale,
        updatedAt: Utils\Utils::parseDateTime('2026-04-17T16:10:56.904Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->dms->createDmsPartsale(
    request: $request
);

if ($response->dmsPartsale !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreateDmsPartsaleRequest](../../Models/Operations/CreateDmsPartsaleRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreateDmsPartsaleResponse](../../Models/Operations/CreateDmsPartsaleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDmsRepairorder

Creates a DmsRepairorder. Provide the unified DmsRepairorder fields in the request body; they are mapped to the provider's API. Returns the created DmsRepairorder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsRepairorder" method="post" path="/dms/{connection_id}/repairorder" example="dms_repairorder" -->
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

$request = new Operations\CreateDmsRepairorderRequest(
    dmsRepairorder: new Shared\DmsRepairorder(
        balanceAmount: 3193.86,
        completedAt: Utils\Utils::parseDateTime('2026-11-12T19:26:52.043Z'),
        createdAt: Utils\Utils::parseDateTime('2022-10-25T15:50:48.007Z'),
        currency: 'USD',
        discountAmount: 0,
        estimateAmount: 3264,
        id: '29c6ecf7-545c-49ab-9c56-a6fee51761ab',
        jobs: [
            new Shared\DmsRepairorderJob(
                actualHours: 3.6,
                cause: 'Scheduled maintenance',
                complaint: 'Due for service',
                correction: 'Aufero cumque vicinus aptus assumenda quis aptus.',
                id: '1c951aa9-20b4-4cf0-9551-b4dddbf2aa01',
                laborAmount: 681.6,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: 'dad7f223-834c-476c-be6c-6f43bd716dda',
                        payType: Shared\DmsRepairorderLaborPayType::Warranty,
                        rateAmount: 213,
                        soldHours: 3.2,
                        technicianUserIds: [],
                        totalAmount: 681.6,
                    ),
                ],
                name: 'Customer concern',
                number: 'A',
                parts: [],
                partsAmount: 0,
                payType: Shared\DmsRepairorderJobPayType::Warranty,
                soldHours: 3.2,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 681.6,
            ),
            new Shared\DmsRepairorderJob(
                actualHours: 3,
                cause: 'Worn brake pads',
                complaint: 'Vibration at highway speed',
                correction: 'Somnus avaritia utroque vulnero ullam ancilla.',
                id: 'b8680ea7-d8c1-4b2b-8680-ab91ba9ed1bd',
                laborAmount: 446.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '912c1114-67a9-4d6f-a569-9ccda7dca409',
                        payType: Shared\DmsRepairorderLaborPayType::Warranty,
                        rateAmount: 144,
                        soldHours: 3.1,
                        technicianUserIds: [],
                        totalAmount: 446.4,
                    ),
                ],
                name: 'Customer concern',
                number: 'B',
                parts: [
                    new Shared\DmsPartline(
                        id: '0a82acab-f4f2-499f-a709-2e27f98101d1',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 4,
                        quantityOrdered: 4,
                        totalAmount: 890.44,
                        unitPriceAmount: 222.61,
                    ),
                    new Shared\DmsPartline(
                        id: '76195760-568e-4854-92be-837dfbf73790',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 2,
                        quantityOrdered: 2,
                        totalAmount: 216.18,
                        unitPriceAmount: 108.09,
                    ),
                ],
                partsAmount: 1106.6200000000001,
                payType: Shared\DmsRepairorderJobPayType::Warranty,
                soldHours: 3.1,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 1553.02,
            ),
            new Shared\DmsRepairorderJob(
                actualHours: 1.5,
                cause: 'Scheduled maintenance',
                complaint: 'Noise when braking',
                correction: 'Degero theca natus.',
                id: '76c9d0de-9a9d-42f9-8f7b-9add776ed099',
                laborAmount: 232.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: 'ab140ce2-e3b1-4c26-ad6e-cf890e4e0dc5',
                        payType: Shared\DmsRepairorderLaborPayType::Customer,
                        rateAmount: 166,
                        soldHours: 1.4,
                        technicianUserIds: [],
                        totalAmount: 232.4,
                    ),
                ],
                name: 'Customer concern',
                number: 'C',
                parts: [
                    new Shared\DmsPartline(
                        id: '6797e41f-7807-412e-a17c-a114f7349e2a',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 1,
                        quantityOrdered: 1,
                        totalAmount: 216.02,
                        unitPriceAmount: 216.02,
                    ),
                    new Shared\DmsPartline(
                        id: '4545c794-76bb-42e1-b98d-91e86b230886',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 2,
                        quantityOrdered: 2,
                        totalAmount: 358.16,
                        unitPriceAmount: 179.08,
                    ),
                ],
                partsAmount: 574.1800000000001,
                payType: Shared\DmsRepairorderJobPayType::Customer,
                soldHours: 1.4,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 806.58,
            ),
        ],
        laborAmount: 1360.4,
        metadata: [],
        miscAmount: 35,
        number: '143398',
        odometerIn: 7776,
        odometerOut: 7776,
        odometerUnit: Shared\DmsRepairorderOdometerUnit::Miles,
        openedAt: Utils\Utils::parseDateTime('2025-02-07T19:18:27.112Z'),
        partsAmount: 1680.8000000000002,
        payType: Shared\DmsRepairorderPayType::Warranty,
        promisedAt: Utils\Utils::parseDateTime('2025-02-09T03:18:27.112Z'),
        purchaseOrderNumber: '182743',
        status: Shared\DmsRepairorderStatus::Completed,
        subletAmount: 0,
        tagNumber: '758',
        taxAmount: 117.66,
        technicianUserIds: [],
        totalAmount: 3193.86,
        totals: [
            new Shared\DmsRepairorderTotal(
                discountAmount: 0,
                laborAmount: 232.4,
                partsAmount: 574.1800000000001,
                payType: Shared\DmsRepairorderTotalPayType::Customer,
                subletAmount: 0,
                totalAmount: 806.58,
            ),
            new Shared\DmsRepairorderTotal(
                discountAmount: 0,
                laborAmount: 1128,
                partsAmount: 1106.6200000000001,
                payType: Shared\DmsRepairorderTotalPayType::Warranty,
                subletAmount: 0,
                totalAmount: 2234.62,
            ),
        ],
        transportType: Shared\DmsRepairorderTransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-11-27T22:12:41.492Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->dms->createDmsRepairorder(
    request: $request
);

if ($response->dmsRepairorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateDmsRepairorderRequest](../../Models/Operations/CreateDmsRepairorderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateDmsRepairorderResponse](../../Models/Operations/CreateDmsRepairorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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
        id: '84b7b4cd-e912-47dc-9709-25470c1dc558',
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
        updatedAt: Utils\Utils::parseDateTime('2023-11-03T01:47:05.880Z'),
        vin: 'C29ZDU474DDR70955',
        warrantyExpiresAt: Utils\Utils::parseDateTime('2022-03-28T09:10:09.889Z'),
        year: 2023,
    ),
    connectionId: '<id>',
);

$response = $sdk->dms->createDmsVehicle(
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

## createDmsVehiclesale

Creates a DmsVehiclesale. Provide the unified DmsVehiclesale fields in the request body; they are mapped to the provider's API. Returns the created DmsVehiclesale.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDmsVehiclesale" method="post" path="/dms/{connection_id}/vehiclesale" example="dms_vehiclesale" -->
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

$request = new Operations\CreateDmsVehiclesaleRequest(
    dmsVehiclesale: new Shared\DmsVehiclesale(
        backGrossAmount: 4565,
        createdAt: Utils\Utils::parseDateTime('2020-04-02T08:14:56.150Z'),
        currency: 'USD',
        downPaymentAmount: 6700,
        fees: [
            new Shared\DmsVehiclesaleFee(
                costAmount: 0,
                isCapitalized: true,
                name: 'Documentation fee',
                priceAmount: 499,
            ),
            new Shared\DmsVehiclesaleFee(
                isCapitalized: false,
                name: 'Title and registration',
                priceAmount: 392,
            ),
        ],
        finance: new Shared\PropertyDmsVehiclesaleFinance(
            financedAmount: 0,
            firstPaymentAt: Utils\Utils::parseDateTime('2022-08-16T02:31:57.122Z'),
            interestRate: 6.68,
            lenderName: 'Mueller, Yundt and Murray Financial',
            paymentAmount: 339,
            paymentFrequency: Shared\PaymentFrequency::Monthly,
            termMonths: 72,
        ),
        financeType: Shared\FinanceType::Finance,
        id: '27829890-7df6-4b85-92cd-981c7df4cb5a',
        metadata: [],
        number: 'D84591',
        products: [
            new Shared\DmsVehiclesaleProduct(
                contractNumber: 'B7JN10GVB7',
                costAmount: 1320,
                name: 'Tire & Wheel',
                priceAmount: 3300,
                provider: 'Renner and Sons',
                termMonths: 60,
                type: Shared\DmsVehiclesaleProductType::Protection,
            ),
            new Shared\DmsVehiclesaleProduct(
                contractNumber: 'VIZU7K3VRU',
                costAmount: 1115,
                deductibleAmount: 100,
                name: 'Platinum Vehicle Service Contract',
                priceAmount: 3700,
                provider: 'Frami, Wisozk and Gleichner',
                termMonths: 72,
                type: Shared\DmsVehiclesaleProductType::ServiceContract,
            ),
        ],
        rebateAmount: 500,
        soldAt: Utils\Utils::parseDateTime('2022-08-14T11:16:22.835Z'),
        source: 'Website',
        status: Shared\DmsVehiclesaleStatus::Sold,
        taxAmount: 0,
        taxes: [
            new Shared\DmsVehiclesaleTax(
                name: 'State sales tax',
                rate: 8.25,
                totalAmount: 0,
            ),
        ],
        totalAmount: 7891,
        tradeIns: [],
        type: Shared\DmsVehiclesaleType::Retail,
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T02:32:03.992Z'),
        vehicles: [],
    ),
    connectionId: '<id>',
);

$response = $sdk->dms->createDmsVehiclesale(
    request: $request
);

if ($response->dmsVehiclesale !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateDmsVehiclesaleRequest](../../Models/Operations/CreateDmsVehiclesaleRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateDmsVehiclesaleResponse](../../Models/Operations/CreateDmsVehiclesaleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDmsAppointment

Retrieves a single DmsAppointment by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsAppointment" method="get" path="/dms/{connection_id}/appointment/{id}" -->
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

$request = new Operations\GetDmsAppointmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->getDmsAppointment(
    request: $request
);

if ($response->dmsAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetDmsAppointmentRequest](../../Models/Operations/GetDmsAppointmentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetDmsAppointmentResponse](../../Models/Operations/GetDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDmsOpcode

Retrieves a single DmsOpcode by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsOpcode" method="get" path="/dms/{connection_id}/opcode/{id}" -->
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

$request = new Operations\GetDmsOpcodeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->getDmsOpcode(
    request: $request
);

if ($response->dmsOpcode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetDmsOpcodeRequest](../../Models/Operations/GetDmsOpcodeRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetDmsOpcodeResponse](../../Models/Operations/GetDmsOpcodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDmsPart

Retrieves a single DmsPart by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsPart" method="get" path="/dms/{connection_id}/part/{id}" -->
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

$request = new Operations\GetDmsPartRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->getDmsPart(
    request: $request
);

if ($response->dmsPart !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetDmsPartRequest](../../Models/Operations/GetDmsPartRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetDmsPartResponse](../../Models/Operations/GetDmsPartResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDmsPartsale

Retrieves a single DmsPartsale by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsPartsale" method="get" path="/dms/{connection_id}/partsale/{id}" -->
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

$request = new Operations\GetDmsPartsaleRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->getDmsPartsale(
    request: $request
);

if ($response->dmsPartsale !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetDmsPartsaleRequest](../../Models/Operations/GetDmsPartsaleRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetDmsPartsaleResponse](../../Models/Operations/GetDmsPartsaleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDmsRepairorder

Retrieves a single DmsRepairorder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsRepairorder" method="get" path="/dms/{connection_id}/repairorder/{id}" -->
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

$request = new Operations\GetDmsRepairorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->getDmsRepairorder(
    request: $request
);

if ($response->dmsRepairorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetDmsRepairorderRequest](../../Models/Operations/GetDmsRepairorderRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetDmsRepairorderResponse](../../Models/Operations/GetDmsRepairorderResponse.md)**

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

$response = $sdk->dms->getDmsVehicle(
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

## getDmsVehiclesale

Retrieves a single DmsVehiclesale by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDmsVehiclesale" method="get" path="/dms/{connection_id}/vehiclesale/{id}" -->
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

$request = new Operations\GetDmsVehiclesaleRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->getDmsVehiclesale(
    request: $request
);

if ($response->dmsVehiclesale !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetDmsVehiclesaleRequest](../../Models/Operations/GetDmsVehiclesaleRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetDmsVehiclesaleResponse](../../Models/Operations/GetDmsVehiclesaleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDmsAppointments

Returns a list of DmsAppointments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsAppointments" method="get" path="/dms/{connection_id}/appointment" -->
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

$request = new Operations\ListDmsAppointmentsRequest(
    connectionId: '<id>',
);

$response = $sdk->dms->listDmsAppointments(
    request: $request
);

if ($response->dmsAppointments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListDmsAppointmentsRequest](../../Models/Operations/ListDmsAppointmentsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListDmsAppointmentsResponse](../../Models/Operations/ListDmsAppointmentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDmsOpcodes

Returns a list of DmsOpcodes. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsOpcodes" method="get" path="/dms/{connection_id}/opcode" -->
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

$request = new Operations\ListDmsOpcodesRequest(
    connectionId: '<id>',
);

$response = $sdk->dms->listDmsOpcodes(
    request: $request
);

if ($response->dmsOpcodes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListDmsOpcodesRequest](../../Models/Operations/ListDmsOpcodesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListDmsOpcodesResponse](../../Models/Operations/ListDmsOpcodesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDmsParts

Returns a list of DmsParts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsParts" method="get" path="/dms/{connection_id}/part" -->
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

$request = new Operations\ListDmsPartsRequest(
    connectionId: '<id>',
);

$response = $sdk->dms->listDmsParts(
    request: $request
);

if ($response->dmsParts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListDmsPartsRequest](../../Models/Operations/ListDmsPartsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListDmsPartsResponse](../../Models/Operations/ListDmsPartsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDmsPartsales

Returns a list of DmsPartsales. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsPartsales" method="get" path="/dms/{connection_id}/partsale" -->
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

$request = new Operations\ListDmsPartsalesRequest(
    connectionId: '<id>',
);

$response = $sdk->dms->listDmsPartsales(
    request: $request
);

if ($response->dmsPartsales !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListDmsPartsalesRequest](../../Models/Operations/ListDmsPartsalesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListDmsPartsalesResponse](../../Models/Operations/ListDmsPartsalesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDmsRepairorders

Returns a list of DmsRepairorders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsRepairorders" method="get" path="/dms/{connection_id}/repairorder" -->
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

$request = new Operations\ListDmsRepairordersRequest(
    connectionId: '<id>',
);

$response = $sdk->dms->listDmsRepairorders(
    request: $request
);

if ($response->dmsRepairorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListDmsRepairordersRequest](../../Models/Operations/ListDmsRepairordersRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListDmsRepairordersResponse](../../Models/Operations/ListDmsRepairordersResponse.md)**

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

$response = $sdk->dms->listDmsVehicles(
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

## listDmsVehiclesales

Returns a list of DmsVehiclesales. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDmsVehiclesales" method="get" path="/dms/{connection_id}/vehiclesale" -->
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

$request = new Operations\ListDmsVehiclesalesRequest(
    connectionId: '<id>',
);

$response = $sdk->dms->listDmsVehiclesales(
    request: $request
);

if ($response->dmsVehiclesales !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListDmsVehiclesalesRequest](../../Models/Operations/ListDmsVehiclesalesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListDmsVehiclesalesResponse](../../Models/Operations/ListDmsVehiclesalesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDmsAppointment

Updates the DmsAppointment identified by `id`. Provide the unified DmsAppointment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsAppointment" method="patch" path="/dms/{connection_id}/appointment/{id}" example="dms_appointment" -->
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

$request = new Operations\PatchDmsAppointmentRequest(
    dmsAppointment: new Shared\DmsAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-10-16T02:56:45.127Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-07T05:42:26.261Z'),
        id: '9caa28b0-2115-41b7-8d9e-9daf8f712616',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '619b09b9-48c5-4084-abfd-1aebb20d26cc',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '18731930-1b83-479c-b674-cddaaa585ee2',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: '4a2119ad-6561-461a-a1e4-a06d8e73c153',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-06T22:42:26.261Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T04:25:49.528Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->patchDmsAppointment(
    request: $request
);

if ($response->dmsAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchDmsAppointmentRequest](../../Models/Operations/PatchDmsAppointmentRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchDmsAppointmentResponse](../../Models/Operations/PatchDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDmsOpcode

Updates the DmsOpcode identified by `id`. Provide the unified DmsOpcode fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsOpcode" method="patch" path="/dms/{connection_id}/opcode/{id}" example="dms_opcode" -->
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

$request = new Operations\PatchDmsOpcodeRequest(
    dmsOpcode: new Shared\DmsOpcode(
        category: 'Electrical',
        code: '02AUS',
        createdAt: Utils\Utils::parseDateTime('2021-01-12T19:03:17.545Z'),
        currency: 'USD',
        description: 'Oil and filter change',
        estimatedHours: 3.2,
        flatRateHours: 3.5,
        id: '43f180b0-2c12-45d5-8d6a-c56b3eafec9a',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T12:18:29.335Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->patchDmsOpcode(
    request: $request
);

if ($response->dmsOpcode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchDmsOpcodeRequest](../../Models/Operations/PatchDmsOpcodeRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchDmsOpcodeResponse](../../Models/Operations/PatchDmsOpcodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDmsPart

Updates the DmsPart identified by `id`. Provide the unified DmsPart fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsPart" method="patch" path="/dms/{connection_id}/part/{id}" example="dms_part" -->
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

$request = new Operations\PatchDmsPartRequest(
    dmsPart: new Shared\DmsPart(
        binLocations: [
            'S18-6',
        ],
        category: 'Ignition',
        costAmount: 25.26,
        createdAt: Utils\Utils::parseDateTime('2020-07-02T08:18:03.858Z'),
        currency: 'USD',
        description: 'Cabin filter',
        id: '604c844a-09d3-4e53-881c-441c299fcb3a',
        lastSoldAt: Utils\Utils::parseDateTime('2020-11-23T02:59:05.006Z'),
        listPriceAmount: 39.61,
        manufacturerCode: 'TOY',
        maxStockQuantity: 21,
        metadata: [],
        minStockQuantity: 3,
        packQuantity: 1,
        partNumber: '73992-IM3FI',
        quantityAvailable: 13,
        quantityOnHand: 15,
        quantityOnOrder: 14,
        sourceCode: '30',
        tradePriceAmount: 29.05,
        updatedAt: Utils\Utils::parseDateTime('2023-11-22T17:35:05.348Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->patchDmsPart(
    request: $request
);

if ($response->dmsPart !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchDmsPartRequest](../../Models/Operations/PatchDmsPartRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchDmsPartResponse](../../Models/Operations/PatchDmsPartResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDmsPartsale

Updates the DmsPartsale identified by `id`. Provide the unified DmsPartsale fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsPartsale" method="patch" path="/dms/{connection_id}/partsale/{id}" example="dms_partsale" -->
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

$request = new Operations\PatchDmsPartsaleRequest(
    dmsPartsale: new Shared\DmsPartsale(
        costAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-05-22T03:39:30.335Z'),
        currency: 'USD',
        discountAmount: 0,
        freightAmount: 0,
        id: '0d1e53ed-210f-4453-b3df-a69b7d486656',
        lines: [
            new Shared\DmsPartline(
                id: '817a066f-15f4-4061-9415-fa7e42fbfacc',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: 'de72d593-202b-40ec-9872-2f0fb678ee53',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: '14bfc412-605d-4262-be2d-a9a23d125059',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 3,
                quantityOrdered: 3,
                totalAmount: 249.54,
                unitPriceAmount: 83.18,
            ),
        ],
        metadata: [],
        number: 'P292867',
        payType: Shared\DmsPartsalePayType::Customer,
        status: Shared\DmsPartsaleStatus::Voided,
        subtotalAmount: 981.89,
        taxAmount: 68.73,
        totalAmount: 1050.62,
        type: Shared\DmsPartsaleType::Sale,
        updatedAt: Utils\Utils::parseDateTime('2026-04-17T16:10:56.935Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->patchDmsPartsale(
    request: $request
);

if ($response->dmsPartsale !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchDmsPartsaleRequest](../../Models/Operations/PatchDmsPartsaleRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchDmsPartsaleResponse](../../Models/Operations/PatchDmsPartsaleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDmsRepairorder

Updates the DmsRepairorder identified by `id`. Provide the unified DmsRepairorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsRepairorder" method="patch" path="/dms/{connection_id}/repairorder/{id}" example="dms_repairorder" -->
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

$request = new Operations\PatchDmsRepairorderRequest(
    dmsRepairorder: new Shared\DmsRepairorder(
        balanceAmount: 3193.86,
        completedAt: Utils\Utils::parseDateTime('2026-11-12T19:26:52.100Z'),
        createdAt: Utils\Utils::parseDateTime('2022-10-25T15:50:48.007Z'),
        currency: 'USD',
        discountAmount: 0,
        estimateAmount: 3264,
        id: '5bec3d3a-f8be-456f-9a7e-46941e5c8275',
        jobs: [
            new Shared\DmsRepairorderJob(
                actualHours: 3.6,
                cause: 'Scheduled maintenance',
                complaint: 'Due for service',
                correction: 'Aufero cumque vicinus aptus assumenda quis aptus.',
                id: '53ba2ede-c86e-4ece-ab4a-2e5c2ef5c389',
                laborAmount: 681.6,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '3be15d42-8524-4cf0-8ed1-b0d8304cb15c',
                        payType: Shared\DmsRepairorderLaborPayType::Warranty,
                        rateAmount: 213,
                        soldHours: 3.2,
                        technicianUserIds: [],
                        totalAmount: 681.6,
                    ),
                ],
                name: 'Customer concern',
                number: 'A',
                parts: [],
                partsAmount: 0,
                payType: Shared\DmsRepairorderJobPayType::Warranty,
                soldHours: 3.2,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 681.6,
            ),
            new Shared\DmsRepairorderJob(
                actualHours: 3,
                cause: 'Worn brake pads',
                complaint: 'Vibration at highway speed',
                correction: 'Somnus avaritia utroque vulnero ullam ancilla.',
                id: '62da07d8-548f-4019-a63c-741eb450b61f',
                laborAmount: 446.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '53e828d8-fc28-4395-a40c-f585a7114cf5',
                        payType: Shared\DmsRepairorderLaborPayType::Warranty,
                        rateAmount: 144,
                        soldHours: 3.1,
                        technicianUserIds: [],
                        totalAmount: 446.4,
                    ),
                ],
                name: 'Customer concern',
                number: 'B',
                parts: [
                    new Shared\DmsPartline(
                        id: '37f561c6-bf8a-4cd0-a2e8-932b0429db21',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 4,
                        quantityOrdered: 4,
                        totalAmount: 890.44,
                        unitPriceAmount: 222.61,
                    ),
                    new Shared\DmsPartline(
                        id: '0d2d83d0-7703-4352-b9e9-c07e84976721',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 2,
                        quantityOrdered: 2,
                        totalAmount: 216.18,
                        unitPriceAmount: 108.09,
                    ),
                ],
                partsAmount: 1106.6200000000001,
                payType: Shared\DmsRepairorderJobPayType::Warranty,
                soldHours: 3.1,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 1553.02,
            ),
            new Shared\DmsRepairorderJob(
                actualHours: 1.5,
                cause: 'Scheduled maintenance',
                complaint: 'Noise when braking',
                correction: 'Degero theca natus.',
                id: '1b44e812-3c92-4415-907d-e7735146ba2a',
                laborAmount: 232.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '006edd1b-844e-49f6-bee8-c5097bf8fac7',
                        payType: Shared\DmsRepairorderLaborPayType::Customer,
                        rateAmount: 166,
                        soldHours: 1.4,
                        technicianUserIds: [],
                        totalAmount: 232.4,
                    ),
                ],
                name: 'Customer concern',
                number: 'C',
                parts: [
                    new Shared\DmsPartline(
                        id: 'a14614ad-bb45-4b37-b8d4-3d6a23db92f3',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 1,
                        quantityOrdered: 1,
                        totalAmount: 216.02,
                        unitPriceAmount: 216.02,
                    ),
                    new Shared\DmsPartline(
                        id: 'd992a8a6-9f8d-47a0-97ac-7aed4e82d469',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 2,
                        quantityOrdered: 2,
                        totalAmount: 358.16,
                        unitPriceAmount: 179.08,
                    ),
                ],
                partsAmount: 574.1800000000001,
                payType: Shared\DmsRepairorderJobPayType::Customer,
                soldHours: 1.4,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 806.58,
            ),
        ],
        laborAmount: 1360.4,
        metadata: [],
        miscAmount: 35,
        number: '143398',
        odometerIn: 7776,
        odometerOut: 7776,
        odometerUnit: Shared\DmsRepairorderOdometerUnit::Miles,
        openedAt: Utils\Utils::parseDateTime('2025-02-07T19:18:27.145Z'),
        partsAmount: 1680.8000000000002,
        payType: Shared\DmsRepairorderPayType::Warranty,
        promisedAt: Utils\Utils::parseDateTime('2025-02-09T03:18:27.145Z'),
        purchaseOrderNumber: '182743',
        status: Shared\DmsRepairorderStatus::Completed,
        subletAmount: 0,
        tagNumber: '758',
        taxAmount: 117.66,
        technicianUserIds: [],
        totalAmount: 3193.86,
        totals: [
            new Shared\DmsRepairorderTotal(
                discountAmount: 0,
                laborAmount: 232.4,
                partsAmount: 574.1800000000001,
                payType: Shared\DmsRepairorderTotalPayType::Customer,
                subletAmount: 0,
                totalAmount: 806.58,
            ),
            new Shared\DmsRepairorderTotal(
                discountAmount: 0,
                laborAmount: 1128,
                partsAmount: 1106.6200000000001,
                payType: Shared\DmsRepairorderTotalPayType::Warranty,
                subletAmount: 0,
                totalAmount: 2234.62,
            ),
        ],
        transportType: Shared\DmsRepairorderTransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-11-27T22:12:41.536Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->patchDmsRepairorder(
    request: $request
);

if ($response->dmsRepairorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchDmsRepairorderRequest](../../Models/Operations/PatchDmsRepairorderRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchDmsRepairorderResponse](../../Models/Operations/PatchDmsRepairorderResponse.md)**

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
        id: '21c0b851-025b-4134-8095-0eaf4afdcf4b',
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
        updatedAt: Utils\Utils::parseDateTime('2023-11-03T01:47:05.897Z'),
        vin: 'C29ZDU474DDR70955',
        warrantyExpiresAt: Utils\Utils::parseDateTime('2022-03-28T09:10:09.889Z'),
        year: 2023,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->patchDmsVehicle(
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

## patchDmsVehiclesale

Updates the DmsVehiclesale identified by `id`. Provide the unified DmsVehiclesale fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDmsVehiclesale" method="patch" path="/dms/{connection_id}/vehiclesale/{id}" example="dms_vehiclesale" -->
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

$request = new Operations\PatchDmsVehiclesaleRequest(
    dmsVehiclesale: new Shared\DmsVehiclesale(
        backGrossAmount: 4565,
        createdAt: Utils\Utils::parseDateTime('2020-04-02T08:14:56.150Z'),
        currency: 'USD',
        downPaymentAmount: 6700,
        fees: [
            new Shared\DmsVehiclesaleFee(
                costAmount: 0,
                isCapitalized: true,
                name: 'Documentation fee',
                priceAmount: 499,
            ),
            new Shared\DmsVehiclesaleFee(
                isCapitalized: false,
                name: 'Title and registration',
                priceAmount: 392,
            ),
        ],
        finance: new Shared\PropertyDmsVehiclesaleFinance(
            financedAmount: 0,
            firstPaymentAt: Utils\Utils::parseDateTime('2022-08-16T02:31:57.142Z'),
            interestRate: 6.68,
            lenderName: 'Mueller, Yundt and Murray Financial',
            paymentAmount: 339,
            paymentFrequency: Shared\PaymentFrequency::Monthly,
            termMonths: 72,
        ),
        financeType: Shared\FinanceType::Finance,
        id: '6ac13639-5691-4704-8ab0-2d64288633df',
        metadata: [],
        number: 'D84591',
        products: [
            new Shared\DmsVehiclesaleProduct(
                contractNumber: 'B7JN10GVB7',
                costAmount: 1320,
                name: 'Tire & Wheel',
                priceAmount: 3300,
                provider: 'Renner and Sons',
                termMonths: 60,
                type: Shared\DmsVehiclesaleProductType::Protection,
            ),
            new Shared\DmsVehiclesaleProduct(
                contractNumber: 'VIZU7K3VRU',
                costAmount: 1115,
                deductibleAmount: 100,
                name: 'Platinum Vehicle Service Contract',
                priceAmount: 3700,
                provider: 'Frami, Wisozk and Gleichner',
                termMonths: 72,
                type: Shared\DmsVehiclesaleProductType::ServiceContract,
            ),
        ],
        rebateAmount: 500,
        soldAt: Utils\Utils::parseDateTime('2022-08-14T11:16:22.855Z'),
        source: 'Website',
        status: Shared\DmsVehiclesaleStatus::Sold,
        taxAmount: 0,
        taxes: [
            new Shared\DmsVehiclesaleTax(
                name: 'State sales tax',
                rate: 8.25,
                totalAmount: 0,
            ),
        ],
        totalAmount: 7891,
        tradeIns: [],
        type: Shared\DmsVehiclesaleType::Retail,
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T02:32:04.035Z'),
        vehicles: [],
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->patchDmsVehiclesale(
    request: $request
);

if ($response->dmsVehiclesale !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchDmsVehiclesaleRequest](../../Models/Operations/PatchDmsVehiclesaleRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchDmsVehiclesaleResponse](../../Models/Operations/PatchDmsVehiclesaleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeDmsAppointment

Deletes the DmsAppointment identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeDmsAppointment" method="delete" path="/dms/{connection_id}/appointment/{id}" -->
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

$request = new Operations\RemoveDmsAppointmentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->removeDmsAppointment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveDmsAppointmentRequest](../../Models/Operations/RemoveDmsAppointmentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveDmsAppointmentResponse](../../Models/Operations/RemoveDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDmsAppointment

Updates the DmsAppointment identified by `id`. Provide the unified DmsAppointment fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsAppointment" method="put" path="/dms/{connection_id}/appointment/{id}" example="dms_appointment" -->
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

$request = new Operations\UpdateDmsAppointmentRequest(
    dmsAppointment: new Shared\DmsAppointment(
        createdAt: Utils\Utils::parseDateTime('2023-10-16T02:56:45.127Z'),
        endAt: Utils\Utils::parseDateTime('2026-05-07T05:42:26.261Z'),
        id: '9caa28b0-2115-41b7-8d9e-9daf8f712616',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '619b09b9-48c5-4084-abfd-1aebb20d26cc',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '18731930-1b83-479c-b674-cddaaa585ee2',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: '4a2119ad-6561-461a-a1e4-a06d8e73c153',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-06T22:42:26.261Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T04:25:49.528Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->updateDmsAppointment(
    request: $request
);

if ($response->dmsAppointment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateDmsAppointmentRequest](../../Models/Operations/UpdateDmsAppointmentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateDmsAppointmentResponse](../../Models/Operations/UpdateDmsAppointmentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDmsOpcode

Updates the DmsOpcode identified by `id`. Provide the unified DmsOpcode fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsOpcode" method="put" path="/dms/{connection_id}/opcode/{id}" example="dms_opcode" -->
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

$request = new Operations\UpdateDmsOpcodeRequest(
    dmsOpcode: new Shared\DmsOpcode(
        category: 'Electrical',
        code: '02AUS',
        createdAt: Utils\Utils::parseDateTime('2021-01-12T19:03:17.545Z'),
        currency: 'USD',
        description: 'Oil and filter change',
        estimatedHours: 3.2,
        flatRateHours: 3.5,
        id: '43f180b0-2c12-45d5-8d6a-c56b3eafec9a',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T12:18:29.335Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->updateDmsOpcode(
    request: $request
);

if ($response->dmsOpcode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdateDmsOpcodeRequest](../../Models/Operations/UpdateDmsOpcodeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdateDmsOpcodeResponse](../../Models/Operations/UpdateDmsOpcodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDmsPart

Updates the DmsPart identified by `id`. Provide the unified DmsPart fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsPart" method="put" path="/dms/{connection_id}/part/{id}" example="dms_part" -->
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

$request = new Operations\UpdateDmsPartRequest(
    dmsPart: new Shared\DmsPart(
        binLocations: [
            'S18-6',
        ],
        category: 'Ignition',
        costAmount: 25.26,
        createdAt: Utils\Utils::parseDateTime('2020-07-02T08:18:03.858Z'),
        currency: 'USD',
        description: 'Cabin filter',
        id: '604c844a-09d3-4e53-881c-441c299fcb3a',
        lastSoldAt: Utils\Utils::parseDateTime('2020-11-23T02:59:05.006Z'),
        listPriceAmount: 39.61,
        manufacturerCode: 'TOY',
        maxStockQuantity: 21,
        metadata: [],
        minStockQuantity: 3,
        packQuantity: 1,
        partNumber: '73992-IM3FI',
        quantityAvailable: 13,
        quantityOnHand: 15,
        quantityOnOrder: 14,
        sourceCode: '30',
        tradePriceAmount: 29.05,
        updatedAt: Utils\Utils::parseDateTime('2023-11-22T17:35:05.348Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->updateDmsPart(
    request: $request
);

if ($response->dmsPart !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateDmsPartRequest](../../Models/Operations/UpdateDmsPartRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateDmsPartResponse](../../Models/Operations/UpdateDmsPartResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDmsPartsale

Updates the DmsPartsale identified by `id`. Provide the unified DmsPartsale fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsPartsale" method="put" path="/dms/{connection_id}/partsale/{id}" example="dms_partsale" -->
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

$request = new Operations\UpdateDmsPartsaleRequest(
    dmsPartsale: new Shared\DmsPartsale(
        costAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-05-22T03:39:30.335Z'),
        currency: 'USD',
        discountAmount: 0,
        freightAmount: 0,
        id: '0d1e53ed-210f-4453-b3df-a69b7d486656',
        lines: [
            new Shared\DmsPartline(
                id: '817a066f-15f4-4061-9415-fa7e42fbfacc',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: 'de72d593-202b-40ec-9872-2f0fb678ee53',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: '14bfc412-605d-4262-be2d-a9a23d125059',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 3,
                quantityOrdered: 3,
                totalAmount: 249.54,
                unitPriceAmount: 83.18,
            ),
        ],
        metadata: [],
        number: 'P292867',
        payType: Shared\DmsPartsalePayType::Customer,
        status: Shared\DmsPartsaleStatus::Voided,
        subtotalAmount: 981.89,
        taxAmount: 68.73,
        totalAmount: 1050.62,
        type: Shared\DmsPartsaleType::Sale,
        updatedAt: Utils\Utils::parseDateTime('2026-04-17T16:10:56.935Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->updateDmsPartsale(
    request: $request
);

if ($response->dmsPartsale !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdateDmsPartsaleRequest](../../Models/Operations/UpdateDmsPartsaleRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdateDmsPartsaleResponse](../../Models/Operations/UpdateDmsPartsaleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDmsRepairorder

Updates the DmsRepairorder identified by `id`. Provide the unified DmsRepairorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsRepairorder" method="put" path="/dms/{connection_id}/repairorder/{id}" example="dms_repairorder" -->
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

$request = new Operations\UpdateDmsRepairorderRequest(
    dmsRepairorder: new Shared\DmsRepairorder(
        balanceAmount: 3193.86,
        completedAt: Utils\Utils::parseDateTime('2026-11-12T19:26:52.100Z'),
        createdAt: Utils\Utils::parseDateTime('2022-10-25T15:50:48.007Z'),
        currency: 'USD',
        discountAmount: 0,
        estimateAmount: 3264,
        id: '5bec3d3a-f8be-456f-9a7e-46941e5c8275',
        jobs: [
            new Shared\DmsRepairorderJob(
                actualHours: 3.6,
                cause: 'Scheduled maintenance',
                complaint: 'Due for service',
                correction: 'Aufero cumque vicinus aptus assumenda quis aptus.',
                id: '53ba2ede-c86e-4ece-ab4a-2e5c2ef5c389',
                laborAmount: 681.6,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '3be15d42-8524-4cf0-8ed1-b0d8304cb15c',
                        payType: Shared\DmsRepairorderLaborPayType::Warranty,
                        rateAmount: 213,
                        soldHours: 3.2,
                        technicianUserIds: [],
                        totalAmount: 681.6,
                    ),
                ],
                name: 'Customer concern',
                number: 'A',
                parts: [],
                partsAmount: 0,
                payType: Shared\DmsRepairorderJobPayType::Warranty,
                soldHours: 3.2,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 681.6,
            ),
            new Shared\DmsRepairorderJob(
                actualHours: 3,
                cause: 'Worn brake pads',
                complaint: 'Vibration at highway speed',
                correction: 'Somnus avaritia utroque vulnero ullam ancilla.',
                id: '62da07d8-548f-4019-a63c-741eb450b61f',
                laborAmount: 446.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '53e828d8-fc28-4395-a40c-f585a7114cf5',
                        payType: Shared\DmsRepairorderLaborPayType::Warranty,
                        rateAmount: 144,
                        soldHours: 3.1,
                        technicianUserIds: [],
                        totalAmount: 446.4,
                    ),
                ],
                name: 'Customer concern',
                number: 'B',
                parts: [
                    new Shared\DmsPartline(
                        id: '37f561c6-bf8a-4cd0-a2e8-932b0429db21',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 4,
                        quantityOrdered: 4,
                        totalAmount: 890.44,
                        unitPriceAmount: 222.61,
                    ),
                    new Shared\DmsPartline(
                        id: '0d2d83d0-7703-4352-b9e9-c07e84976721',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 2,
                        quantityOrdered: 2,
                        totalAmount: 216.18,
                        unitPriceAmount: 108.09,
                    ),
                ],
                partsAmount: 1106.6200000000001,
                payType: Shared\DmsRepairorderJobPayType::Warranty,
                soldHours: 3.1,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 1553.02,
            ),
            new Shared\DmsRepairorderJob(
                actualHours: 1.5,
                cause: 'Scheduled maintenance',
                complaint: 'Noise when braking',
                correction: 'Degero theca natus.',
                id: '1b44e812-3c92-4415-907d-e7735146ba2a',
                laborAmount: 232.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '006edd1b-844e-49f6-bee8-c5097bf8fac7',
                        payType: Shared\DmsRepairorderLaborPayType::Customer,
                        rateAmount: 166,
                        soldHours: 1.4,
                        technicianUserIds: [],
                        totalAmount: 232.4,
                    ),
                ],
                name: 'Customer concern',
                number: 'C',
                parts: [
                    new Shared\DmsPartline(
                        id: 'a14614ad-bb45-4b37-b8d4-3d6a23db92f3',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 1,
                        quantityOrdered: 1,
                        totalAmount: 216.02,
                        unitPriceAmount: 216.02,
                    ),
                    new Shared\DmsPartline(
                        id: 'd992a8a6-9f8d-47a0-97ac-7aed4e82d469',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 2,
                        quantityOrdered: 2,
                        totalAmount: 358.16,
                        unitPriceAmount: 179.08,
                    ),
                ],
                partsAmount: 574.1800000000001,
                payType: Shared\DmsRepairorderJobPayType::Customer,
                soldHours: 1.4,
                status: Shared\DmsRepairorderJobStatus::Completed,
                technicianUserIds: [],
                totalAmount: 806.58,
            ),
        ],
        laborAmount: 1360.4,
        metadata: [],
        miscAmount: 35,
        number: '143398',
        odometerIn: 7776,
        odometerOut: 7776,
        odometerUnit: Shared\DmsRepairorderOdometerUnit::Miles,
        openedAt: Utils\Utils::parseDateTime('2025-02-07T19:18:27.145Z'),
        partsAmount: 1680.8000000000002,
        payType: Shared\DmsRepairorderPayType::Warranty,
        promisedAt: Utils\Utils::parseDateTime('2025-02-09T03:18:27.145Z'),
        purchaseOrderNumber: '182743',
        status: Shared\DmsRepairorderStatus::Completed,
        subletAmount: 0,
        tagNumber: '758',
        taxAmount: 117.66,
        technicianUserIds: [],
        totalAmount: 3193.86,
        totals: [
            new Shared\DmsRepairorderTotal(
                discountAmount: 0,
                laborAmount: 232.4,
                partsAmount: 574.1800000000001,
                payType: Shared\DmsRepairorderTotalPayType::Customer,
                subletAmount: 0,
                totalAmount: 806.58,
            ),
            new Shared\DmsRepairorderTotal(
                discountAmount: 0,
                laborAmount: 1128,
                partsAmount: 1106.6200000000001,
                payType: Shared\DmsRepairorderTotalPayType::Warranty,
                subletAmount: 0,
                totalAmount: 2234.62,
            ),
        ],
        transportType: Shared\DmsRepairorderTransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-11-27T22:12:41.536Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->updateDmsRepairorder(
    request: $request
);

if ($response->dmsRepairorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateDmsRepairorderRequest](../../Models/Operations/UpdateDmsRepairorderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateDmsRepairorderResponse](../../Models/Operations/UpdateDmsRepairorderResponse.md)**

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
        id: '21c0b851-025b-4134-8095-0eaf4afdcf4b',
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
        updatedAt: Utils\Utils::parseDateTime('2023-11-03T01:47:05.897Z'),
        vin: 'C29ZDU474DDR70955',
        warrantyExpiresAt: Utils\Utils::parseDateTime('2022-03-28T09:10:09.889Z'),
        year: 2023,
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->updateDmsVehicle(
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

## updateDmsVehiclesale

Updates the DmsVehiclesale identified by `id`. Provide the unified DmsVehiclesale fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDmsVehiclesale" method="put" path="/dms/{connection_id}/vehiclesale/{id}" example="dms_vehiclesale" -->
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

$request = new Operations\UpdateDmsVehiclesaleRequest(
    dmsVehiclesale: new Shared\DmsVehiclesale(
        backGrossAmount: 4565,
        createdAt: Utils\Utils::parseDateTime('2020-04-02T08:14:56.150Z'),
        currency: 'USD',
        downPaymentAmount: 6700,
        fees: [
            new Shared\DmsVehiclesaleFee(
                costAmount: 0,
                isCapitalized: true,
                name: 'Documentation fee',
                priceAmount: 499,
            ),
            new Shared\DmsVehiclesaleFee(
                isCapitalized: false,
                name: 'Title and registration',
                priceAmount: 392,
            ),
        ],
        finance: new Shared\PropertyDmsVehiclesaleFinance(
            financedAmount: 0,
            firstPaymentAt: Utils\Utils::parseDateTime('2022-08-16T02:31:57.142Z'),
            interestRate: 6.68,
            lenderName: 'Mueller, Yundt and Murray Financial',
            paymentAmount: 339,
            paymentFrequency: Shared\PaymentFrequency::Monthly,
            termMonths: 72,
        ),
        financeType: Shared\FinanceType::Finance,
        id: '6ac13639-5691-4704-8ab0-2d64288633df',
        metadata: [],
        number: 'D84591',
        products: [
            new Shared\DmsVehiclesaleProduct(
                contractNumber: 'B7JN10GVB7',
                costAmount: 1320,
                name: 'Tire & Wheel',
                priceAmount: 3300,
                provider: 'Renner and Sons',
                termMonths: 60,
                type: Shared\DmsVehiclesaleProductType::Protection,
            ),
            new Shared\DmsVehiclesaleProduct(
                contractNumber: 'VIZU7K3VRU',
                costAmount: 1115,
                deductibleAmount: 100,
                name: 'Platinum Vehicle Service Contract',
                priceAmount: 3700,
                provider: 'Frami, Wisozk and Gleichner',
                termMonths: 72,
                type: Shared\DmsVehiclesaleProductType::ServiceContract,
            ),
        ],
        rebateAmount: 500,
        soldAt: Utils\Utils::parseDateTime('2022-08-14T11:16:22.855Z'),
        source: 'Website',
        status: Shared\DmsVehiclesaleStatus::Sold,
        taxAmount: 0,
        taxes: [
            new Shared\DmsVehiclesaleTax(
                name: 'State sales tax',
                rate: 8.25,
                totalAmount: 0,
            ),
        ],
        totalAmount: 7891,
        tradeIns: [],
        type: Shared\DmsVehiclesaleType::Retail,
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T02:32:04.035Z'),
        vehicles: [],
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->dms->updateDmsVehiclesale(
    request: $request
);

if ($response->dmsVehiclesale !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateDmsVehiclesaleRequest](../../Models/Operations/UpdateDmsVehiclesaleRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateDmsVehiclesaleResponse](../../Models/Operations/UpdateDmsVehiclesaleResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |