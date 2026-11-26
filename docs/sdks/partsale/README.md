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