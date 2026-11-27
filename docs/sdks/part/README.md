# Part

## Overview

### Available Operations

* [createDmsPart](#createdmspart) - Create a part
* [createPlmPart](#createplmpart) - Create a part
* [getDmsPart](#getdmspart) - Retrieve a part
* [getPlmPart](#getplmpart) - Retrieve a part
* [listDmsParts](#listdmsparts) - List all parts
* [listPlmParts](#listplmparts) - List all parts
* [patchDmsPart](#patchdmspart) - Update a part
* [patchPlmPart](#patchplmpart) - Update a part
* [removePlmPart](#removeplmpart) - Remove a part
* [updateDmsPart](#updatedmspart) - Update a part
* [updatePlmPart](#updateplmpart) - Update a part

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

$response = $sdk->part->createDmsPart(
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

## createPlmPart

Creates a PlmPart. Provide the unified PlmPart fields in the request body; they are mapped to the provider's API. Returns the created PlmPart.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPlmPart" method="post" path="/plm/{connection_id}/part" example="plm_part" -->
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

$request = new Operations\CreatePlmPartRequest(
    plmPart: new Shared\PlmPart(
        createdAt: Utils\Utils::parseDateTime('2019-04-13T06:25:34.770Z'),
        description: 'Aestivus talis tero ullam cruciamentum voluptatibus cumque degusto cui.',
        documentIds: [],
        fileIds: [],
        id: '96fb27da-f6d1-48c0-b9c1-624ebaee2409',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: 'f35cb0c8-5c71-4bbb-85b8-9cf659e47b50',
        metadata: [],
        name: 'speedy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-15T20:31:27.928Z'),
        url: 'https://digital-pop.com',
    ),
    connectionId: '<id>',
);

$response = $sdk->part->createPlmPart(
    request: $request
);

if ($response->plmPart !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreatePlmPartRequest](../../Models/Operations/CreatePlmPartRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreatePlmPartResponse](../../Models/Operations/CreatePlmPartResponse.md)**

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

$response = $sdk->part->getDmsPart(
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

## getPlmPart

Retrieves a single PlmPart by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPlmPart" method="get" path="/plm/{connection_id}/part/{id}" -->
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

$request = new Operations\GetPlmPartRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->part->getPlmPart(
    request: $request
);

if ($response->plmPart !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetPlmPartRequest](../../Models/Operations/GetPlmPartRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetPlmPartResponse](../../Models/Operations/GetPlmPartResponse.md)**

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

$response = $sdk->part->listDmsParts(
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

## listPlmParts

Returns a list of PlmParts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPlmParts" method="get" path="/plm/{connection_id}/part" -->
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

$request = new Operations\ListPlmPartsRequest(
    connectionId: '<id>',
);

$response = $sdk->part->listPlmParts(
    request: $request
);

if ($response->plmParts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListPlmPartsRequest](../../Models/Operations/ListPlmPartsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListPlmPartsResponse](../../Models/Operations/ListPlmPartsResponse.md)**

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

$response = $sdk->part->patchDmsPart(
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

## patchPlmPart

Updates the PlmPart identified by `id`. Provide the unified PlmPart fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPlmPart" method="patch" path="/plm/{connection_id}/part/{id}" example="plm_part" -->
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

$request = new Operations\PatchPlmPartRequest(
    plmPart: new Shared\PlmPart(
        createdAt: Utils\Utils::parseDateTime('2019-04-13T06:25:34.770Z'),
        description: 'Aestivus talis tero ullam cruciamentum voluptatibus cumque degusto cui.',
        documentIds: [],
        fileIds: [],
        id: 'c5c4d187-dba1-4eff-8840-3a8e2f173ec9',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: '8ca9e14c-55ff-46dc-a488-20ab256bf8d5',
        metadata: [],
        name: 'speedy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-15T20:31:27.932Z'),
        url: 'https://digital-pop.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->part->patchPlmPart(
    request: $request
);

if ($response->plmPart !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchPlmPartRequest](../../Models/Operations/PatchPlmPartRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchPlmPartResponse](../../Models/Operations/PatchPlmPartResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePlmPart

Deletes the PlmPart identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removePlmPart" method="delete" path="/plm/{connection_id}/part/{id}" -->
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

$request = new Operations\RemovePlmPartRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->part->removePlmPart(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemovePlmPartRequest](../../Models/Operations/RemovePlmPartRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemovePlmPartResponse](../../Models/Operations/RemovePlmPartResponse.md)**

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

$response = $sdk->part->updateDmsPart(
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

## updatePlmPart

Updates the PlmPart identified by `id`. Provide the unified PlmPart fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePlmPart" method="put" path="/plm/{connection_id}/part/{id}" example="plm_part" -->
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

$request = new Operations\UpdatePlmPartRequest(
    plmPart: new Shared\PlmPart(
        createdAt: Utils\Utils::parseDateTime('2019-04-13T06:25:34.770Z'),
        description: 'Aestivus talis tero ullam cruciamentum voluptatibus cumque degusto cui.',
        documentIds: [],
        fileIds: [],
        id: 'c5c4d187-dba1-4eff-8840-3a8e2f173ec9',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: '8ca9e14c-55ff-46dc-a488-20ab256bf8d5',
        metadata: [],
        name: 'speedy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-15T20:31:27.932Z'),
        url: 'https://digital-pop.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->part->updatePlmPart(
    request: $request
);

if ($response->plmPart !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdatePlmPartRequest](../../Models/Operations/UpdatePlmPartRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdatePlmPartResponse](../../Models/Operations/UpdatePlmPartResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |