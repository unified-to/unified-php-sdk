# Vehiclesale

## Overview

### Available Operations

* [createDmsVehiclesale](#createdmsvehiclesale) - Create a vehiclesale
* [getDmsVehiclesale](#getdmsvehiclesale) - Retrieve a vehiclesale
* [listDmsVehiclesales](#listdmsvehiclesales) - List all vehiclesales
* [patchDmsVehiclesale](#patchdmsvehiclesale) - Update a vehiclesale
* [updateDmsVehiclesale](#updatedmsvehiclesale) - Update a vehiclesale

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

$response = $sdk->vehiclesale->createDmsVehiclesale(
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

$response = $sdk->vehiclesale->getDmsVehiclesale(
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

$response = $sdk->vehiclesale->listDmsVehiclesales(
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

$response = $sdk->vehiclesale->patchDmsVehiclesale(
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

$response = $sdk->vehiclesale->updateDmsVehiclesale(
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