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