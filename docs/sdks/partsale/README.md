# Partsale

## Overview

### Available Operations

* [createDmsPartsale](#createdmspartsale) - Create a partsale
* [getDmsPartsale](#getdmspartsale) - Retrieve a partsale
* [listDmsPartsales](#listdmspartsales) - List all partsales
* [patchDmsPartsale](#patchdmspartsale) - Update a partsale
* [updateDmsPartsale](#updatedmspartsale) - Update a partsale

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
        id: 'eb010012-1cc9-45e8-a95b-8c462753e544',
        lines: [
            new Shared\DmsPartline(
                id: '950015f1-0a34-4a2e-8ed1-f34e9bd0a4f7',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: '1968d3d2-74f2-410f-8b59-749ddcc0a7e4',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: 'a8cc91a7-9f8a-46e9-9ba9-3a29ccfdf837',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-19T08:57:12.743Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->partsale->createDmsPartsale(
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

$response = $sdk->partsale->getDmsPartsale(
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

$response = $sdk->partsale->listDmsPartsales(
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
        id: 'd40c20d8-7c5f-4539-9639-97368eed59b7',
        lines: [
            new Shared\DmsPartline(
                id: '4f2c410d-54ba-4ea0-8ad7-ece3adc68f9d',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: 'e59cf189-582a-4ff4-bde7-641f1f1a090d',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: '12b60689-1155-4ddb-810e-53e132f1b01b',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-19T08:57:12.759Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->partsale->patchDmsPartsale(
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
        id: 'd40c20d8-7c5f-4539-9639-97368eed59b7',
        lines: [
            new Shared\DmsPartline(
                id: '4f2c410d-54ba-4ea0-8ad7-ece3adc68f9d',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 5,
                quantityOrdered: 5,
                totalAmount: 491.45,
                unitPriceAmount: 98.29,
            ),
            new Shared\DmsPartline(
                id: 'e59cf189-582a-4ff4-bde7-641f1f1a090d',
                payType: Shared\DmsPartlinePayType::Customer,
                quantity: 2,
                quantityOrdered: 2,
                totalAmount: 240.9,
                unitPriceAmount: 120.45,
            ),
            new Shared\DmsPartline(
                id: '12b60689-1155-4ddb-810e-53e132f1b01b',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-19T08:57:12.759Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->partsale->updateDmsPartsale(
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