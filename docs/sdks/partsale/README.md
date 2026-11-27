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