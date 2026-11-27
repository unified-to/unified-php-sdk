# Repairorder

## Overview

### Available Operations

* [createDmsRepairorder](#createdmsrepairorder) - Create a repairorder
* [getDmsRepairorder](#getdmsrepairorder) - Retrieve a repairorder
* [listDmsRepairorders](#listdmsrepairorders) - List all repairorders
* [patchDmsRepairorder](#patchdmsrepairorder) - Update a repairorder
* [updateDmsRepairorder](#updatedmsrepairorder) - Update a repairorder

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

$response = $sdk->repairorder->createDmsRepairorder(
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

$response = $sdk->repairorder->getDmsRepairorder(
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

$response = $sdk->repairorder->listDmsRepairorders(
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

$response = $sdk->repairorder->patchDmsRepairorder(
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

$response = $sdk->repairorder->updateDmsRepairorder(
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