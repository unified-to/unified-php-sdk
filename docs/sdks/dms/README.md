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
        endAt: Utils\Utils::parseDateTime('2026-05-08T02:35:52.615Z'),
        id: '1b456ff4-9390-432b-9ddb-78e3258abd67',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '40facd1e-0348-4601-9c24-a85e4c8520e1',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '8e8f484d-e32b-4fac-ab76-8d05a34e9111',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: 'c2846550-52fc-4fdc-ba1c-5abd09aed119',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-07T19:35:52.615Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T16:28:02.851Z'),
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
        id: 'c943b935-0579-4bc5-b166-e9a6fed01917',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T15:48:19.646Z'),
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
        id: 'f8b6b748-a27e-4d37-ba73-b752db11de77',
        lastSoldAt: Utils\Utils::parseDateTime('2020-11-23T04:32:56.261Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2023-11-23T07:03:28.238Z'),
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
        id: '9596d949-5390-48f1-9ec1-100c070f724e',
        lines: [
            new Shared\DmsPartline(
                id: '607440e8-5fae-4a30-83d4-00a9bcaf808c',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: '4feebedc-8165-4b3e-8ab0-4128872f2453',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: '0cab3353-09dd-4a49-92fa-3726923cb1fa',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-18T13:12:40.444Z'),
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
        completedAt: Utils\Utils::parseDateTime('2026-11-13T20:39:21.218Z'),
        createdAt: Utils\Utils::parseDateTime('2022-10-25T15:50:48.007Z'),
        currency: 'USD',
        discountAmount: 0,
        estimateAmount: 3264,
        id: '1508a81c-c49c-436c-b8aa-1a73a5ed477f',
        jobs: [
            new Shared\DmsRepairorderJob(
                actualHours: 3.6,
                cause: 'Scheduled maintenance',
                complaint: 'Due for service',
                correction: 'Aufero cumque vicinus aptus assumenda quis aptus.',
                id: '50edd460-e5eb-4c75-b1c0-6c2fcec11237',
                laborAmount: 681.6,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: 'b4f79a8c-070c-4509-adc0-462f2a6b61d0',
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
                id: '7f7ced5e-2be6-4f9f-b4ea-2f023d327d5b',
                laborAmount: 446.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '428ff84f-1ec9-4ae7-93d4-3ddbd20adc60',
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
                        id: 'f7f66f04-5186-4c98-ab53-3622e4fd7e58',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 4,
                        quantityOrdered: 4,
                        totalAmount: 890.44,
                        unitPriceAmount: 222.61,
                    ),
                    new Shared\DmsPartline(
                        id: 'b5db4796-9c59-4667-9e21-ff0836c81c25',
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
                id: '8c82b374-ce18-49a3-9be8-2bc4d1a1b16c',
                laborAmount: 232.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: 'a4b67f5a-9cf9-4845-9315-9ad8ac58a7a0',
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
                        id: '7205f003-1037-4400-8a05-6496fcab68e4',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 1,
                        quantityOrdered: 1,
                        totalAmount: 216.02,
                        unitPriceAmount: 216.02,
                    ),
                    new Shared\DmsPartline(
                        id: '764575b7-79ca-418b-9d61-31427016a4b6',
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
        openedAt: Utils\Utils::parseDateTime('2025-02-08T09:33:26.436Z'),
        partsAmount: 1680.8000000000002,
        payType: Shared\DmsRepairorderPayType::Warranty,
        promisedAt: Utils\Utils::parseDateTime('2025-02-09T17:33:26.436Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2025-11-28T17:27:24.447Z'),
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
            firstPaymentAt: Utils\Utils::parseDateTime('2022-08-16T11:34:53.484Z'),
            interestRate: 6.68,
            lenderName: 'Mueller, Yundt and Murray Financial',
            paymentAmount: 339,
            paymentFrequency: Shared\PaymentFrequency::Monthly,
            termMonths: 72,
        ),
        financeType: Shared\FinanceType::Finance,
        id: 'de21ffb3-a101-4ec2-a705-b9b9f8669be9',
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
        soldAt: Utils\Utils::parseDateTime('2022-08-14T20:19:19.197Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T21:48:00.485Z'),
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
        endAt: Utils\Utils::parseDateTime('2026-05-08T02:35:52.628Z'),
        id: 'f22f6e1c-ecdc-49a3-b817-fd7ac42e2375',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '433a256e-1d9f-4146-ab55-47a18b57a352',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '217a3464-9c90-45bb-aa2e-2b5fbd5c81c4',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: '0d9f55db-24ca-4190-9238-06849eafdc76',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-07T19:35:52.628Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T16:28:02.858Z'),
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
        id: 'e15c0ddd-c180-4afd-b2a7-b2902f04d171',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T15:48:19.650Z'),
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
        id: 'f1e33777-1fbb-42d8-8633-37d8f7afa54b',
        lastSoldAt: Utils\Utils::parseDateTime('2020-11-23T04:32:56.262Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2023-11-23T07:03:28.245Z'),
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
        id: '34a95987-c5a4-4781-b626-50631e4c2823',
        lines: [
            new Shared\DmsPartline(
                id: '251f6172-433c-4acb-ac9d-a13de9f40dea',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: 'abf0ff87-cc58-4dcd-8372-7c4ffe136362',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: '0a113179-a186-4d70-bc3d-8dcbe7142811',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-18T13:12:40.465Z'),
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
        completedAt: Utils\Utils::parseDateTime('2026-11-13T20:39:21.261Z'),
        createdAt: Utils\Utils::parseDateTime('2022-10-25T15:50:48.007Z'),
        currency: 'USD',
        discountAmount: 0,
        estimateAmount: 3264,
        id: '1467f268-5ddf-40f3-ad44-c945619eab00',
        jobs: [
            new Shared\DmsRepairorderJob(
                actualHours: 3.6,
                cause: 'Scheduled maintenance',
                complaint: 'Due for service',
                correction: 'Aufero cumque vicinus aptus assumenda quis aptus.',
                id: '266187cc-2984-47e7-b32b-8fb65cbeda53',
                laborAmount: 681.6,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '18875721-c626-4012-9826-e2aa7f83ccac',
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
                id: '732320e4-458a-412b-8466-055ee79edf76',
                laborAmount: 446.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: 'ff62d449-78ba-48a9-ac6a-46a5f31c04ad',
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
                        id: '74937bd2-265d-4736-bc71-a3584854a4aa',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 4,
                        quantityOrdered: 4,
                        totalAmount: 890.44,
                        unitPriceAmount: 222.61,
                    ),
                    new Shared\DmsPartline(
                        id: 'a3857e77-e94c-48cb-a3a4-ee5be72aaa7d',
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
                id: '7228a698-ee19-4a40-8ecb-232d3d6f2279',
                laborAmount: 232.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '62915392-3a92-427c-afb0-857b1b549347',
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
                        id: '349e27ba-ad76-46ee-9a17-ff1ac7e1f3fb',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 1,
                        quantityOrdered: 1,
                        totalAmount: 216.02,
                        unitPriceAmount: 216.02,
                    ),
                    new Shared\DmsPartline(
                        id: '64c5d697-4d8f-4eab-a219-68beeea4884b',
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
        openedAt: Utils\Utils::parseDateTime('2025-02-08T09:33:26.459Z'),
        partsAmount: 1680.8000000000002,
        payType: Shared\DmsRepairorderPayType::Warranty,
        promisedAt: Utils\Utils::parseDateTime('2025-02-09T17:33:26.459Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2025-11-28T17:27:24.479Z'),
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
            firstPaymentAt: Utils\Utils::parseDateTime('2022-08-16T11:34:53.498Z'),
            interestRate: 6.68,
            lenderName: 'Mueller, Yundt and Murray Financial',
            paymentAmount: 339,
            paymentFrequency: Shared\PaymentFrequency::Monthly,
            termMonths: 72,
        ),
        financeType: Shared\FinanceType::Finance,
        id: '9ff0068e-1e56-4cf4-9d86-a47875225072',
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
        soldAt: Utils\Utils::parseDateTime('2022-08-14T20:19:19.211Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T21:48:00.515Z'),
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
        endAt: Utils\Utils::parseDateTime('2026-05-08T02:35:52.628Z'),
        id: 'f22f6e1c-ecdc-49a3-b817-fd7ac42e2375',
        metadata: [],
        notes: 'Soluta conitor timidus confero.',
        number: 'A541909',
        services: [
            new Shared\DmsAppointmentService(
                id: '433a256e-1d9f-4146-ab55-47a18b57a352',
                name: 'Customer concern',
                payType: Shared\PayType::Warranty,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Check engine light on',
                id: '217a3464-9c90-45bb-aa2e-2b5fbd5c81c4',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
            new Shared\DmsAppointmentService(
                complaint: 'Due for service',
                id: '0d9f55db-24ca-4190-9238-06849eafdc76',
                name: 'Customer concern',
                payType: Shared\PayType::Customer,
                technicianUserIds: [],
            ),
        ],
        startAt: Utils\Utils::parseDateTime('2026-05-07T19:35:52.628Z'),
        status: Shared\DmsAppointmentStatus::Cancelled,
        transportType: Shared\TransportType::Loaner,
        updatedAt: Utils\Utils::parseDateTime('2025-04-06T16:28:02.858Z'),
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
        id: 'e15c0ddd-c180-4afd-b2a7-b2902f04d171',
        isActive: true,
        laborRateAmount: 216,
        metadata: [],
        oemCode: '05604A3',
        parts: [],
        payType: Shared\DmsOpcodePayType::Customer,
        skillCode: 'A',
        type: Shared\DmsOpcodeType::Labor,
        updatedAt: Utils\Utils::parseDateTime('2021-11-03T15:48:19.650Z'),
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
        id: 'f1e33777-1fbb-42d8-8633-37d8f7afa54b',
        lastSoldAt: Utils\Utils::parseDateTime('2020-11-23T04:32:56.262Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2023-11-23T07:03:28.245Z'),
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
        id: '34a95987-c5a4-4781-b626-50631e4c2823',
        lines: [
            new Shared\DmsPartline(
                id: '251f6172-433c-4acb-ac9d-a13de9f40dea',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: 'abf0ff87-cc58-4dcd-8372-7c4ffe136362',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: '0a113179-a186-4d70-bc3d-8dcbe7142811',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-18T13:12:40.465Z'),
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
        completedAt: Utils\Utils::parseDateTime('2026-11-13T20:39:21.261Z'),
        createdAt: Utils\Utils::parseDateTime('2022-10-25T15:50:48.007Z'),
        currency: 'USD',
        discountAmount: 0,
        estimateAmount: 3264,
        id: '1467f268-5ddf-40f3-ad44-c945619eab00',
        jobs: [
            new Shared\DmsRepairorderJob(
                actualHours: 3.6,
                cause: 'Scheduled maintenance',
                complaint: 'Due for service',
                correction: 'Aufero cumque vicinus aptus assumenda quis aptus.',
                id: '266187cc-2984-47e7-b32b-8fb65cbeda53',
                laborAmount: 681.6,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '18875721-c626-4012-9826-e2aa7f83ccac',
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
                id: '732320e4-458a-412b-8466-055ee79edf76',
                laborAmount: 446.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: 'ff62d449-78ba-48a9-ac6a-46a5f31c04ad',
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
                        id: '74937bd2-265d-4736-bc71-a3584854a4aa',
                        payType: Shared\DmsPartlinePayType::Warranty,
                        quantity: 4,
                        quantityOrdered: 4,
                        totalAmount: 890.44,
                        unitPriceAmount: 222.61,
                    ),
                    new Shared\DmsPartline(
                        id: 'a3857e77-e94c-48cb-a3a4-ee5be72aaa7d',
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
                id: '7228a698-ee19-4a40-8ecb-232d3d6f2279',
                laborAmount: 232.4,
                labors: [
                    new Shared\DmsRepairorderLabor(
                        id: '62915392-3a92-427c-afb0-857b1b549347',
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
                        id: '349e27ba-ad76-46ee-9a17-ff1ac7e1f3fb',
                        payType: Shared\DmsPartlinePayType::Customer,
                        quantity: 1,
                        quantityOrdered: 1,
                        totalAmount: 216.02,
                        unitPriceAmount: 216.02,
                    ),
                    new Shared\DmsPartline(
                        id: '64c5d697-4d8f-4eab-a219-68beeea4884b',
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
        openedAt: Utils\Utils::parseDateTime('2025-02-08T09:33:26.459Z'),
        partsAmount: 1680.8000000000002,
        payType: Shared\DmsRepairorderPayType::Warranty,
        promisedAt: Utils\Utils::parseDateTime('2025-02-09T17:33:26.459Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2025-11-28T17:27:24.479Z'),
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
            firstPaymentAt: Utils\Utils::parseDateTime('2022-08-16T11:34:53.498Z'),
            interestRate: 6.68,
            lenderName: 'Mueller, Yundt and Murray Financial',
            paymentAmount: 339,
            paymentFrequency: Shared\PaymentFrequency::Monthly,
            termMonths: 72,
        ),
        financeType: Shared\FinanceType::Finance,
        id: '9ff0068e-1e56-4cf4-9d86-a47875225072',
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
        soldAt: Utils\Utils::parseDateTime('2022-08-14T20:19:19.211Z'),
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
        updatedAt: Utils\Utils::parseDateTime('2025-04-16T21:48:00.515Z'),
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