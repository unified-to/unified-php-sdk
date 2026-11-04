# Part

## Overview

### Available Operations

* [createPlmPart](#createplmpart) - Create a part
* [getPlmPart](#getplmpart) - Retrieve a part
* [listPlmParts](#listplmparts) - List all parts
* [patchPlmPart](#patchplmpart) - Update a part
* [updatePlmPart](#updateplmpart) - Update a part

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
        description: 'Pectus tero ulterius aestivus talis tero ullam cruciamentum.',
        documentIds: [],
        fileIds: [],
        id: 'b232d5e7-e0eb-495f-abec-1aed7b05f187',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: 'b5938ba2-6e70-4d66-ac19-49cfbdd8b2b7',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-09T18:26:52.875Z'),
        url: 'https://inborn-independence.info',
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
        description: 'Pectus tero ulterius aestivus talis tero ullam cruciamentum.',
        documentIds: [],
        fileIds: [],
        id: '72f379c8-755d-454b-a583-4bf2dfcfd24b',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: 'feb8ca97-f374-4ae8-a67a-b88136ed2ec4',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-09T18:26:52.879Z'),
        url: 'https://inborn-independence.info',
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
        description: 'Pectus tero ulterius aestivus talis tero ullam cruciamentum.',
        documentIds: [],
        fileIds: [],
        id: '72f379c8-755d-454b-a583-4bf2dfcfd24b',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: 'feb8ca97-f374-4ae8-a67a-b88136ed2ec4',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-09T18:26:52.879Z'),
        url: 'https://inborn-independence.info',
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