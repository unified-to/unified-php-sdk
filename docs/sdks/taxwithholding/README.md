# Taxwithholding

## Overview

### Available Operations

* [createHrisTaxwithholding](#createhristaxwithholding) - Create a taxwithholding
* [getHrisTaxwithholding](#gethristaxwithholding) - Retrieve a taxwithholding
* [listHrisTaxwithholdings](#listhristaxwithholdings) - List all taxwithholdings
* [patchHrisTaxwithholding](#patchhristaxwithholding) - Update a taxwithholding
* [removeHrisTaxwithholding](#removehristaxwithholding) - Remove a taxwithholding
* [updateHrisTaxwithholding](#updatehristaxwithholding) - Update a taxwithholding

## createHrisTaxwithholding

Creates a HrisTaxwithholding. Provide the unified HrisTaxwithholding fields in the request body; they are mapped to the provider's API. Returns the created HrisTaxwithholding.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTaxwithholding" method="post" path="/hris/{connection_id}/taxwithholding" example="hris_taxwithholding" -->
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

$request = new Operations\CreateHrisTaxwithholdingRequest(
    hrisTaxwithholding: new Shared\HrisTaxwithholding(
        allowances: 1,
        country: 'US',
        createdAt: Utils\Utils::parseDateTime('2022-08-14T05:49:35.141Z'),
        effectiveAt: Utils\Utils::parseDateTime('2022-08-14T05:49:35.141Z'),
        extraWithholdingAmount: 10,
        filingStatus: Shared\FilingStatus::QualifyingSurvivor,
        form: Shared\Form::StateForm,
        id: 'e662e54a-99a8-4a50-8c8d-f5b72fb3d30a',
        isExempt: false,
        isResident: true,
        jurisdiction: 'MI',
        jurisdictionType: Shared\JurisdictionType::State,
        metadata: [],
        overrideAmount: 19,
        overrideType: Shared\OverrideType::FixedAmount,
        updatedAt: Utils\Utils::parseDateTime('2026-10-09T00:26:24.515Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->taxwithholding->createHrisTaxwithholding(
    request: $request
);

if ($response->hrisTaxwithholding !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateHrisTaxwithholdingRequest](../../Models/Operations/CreateHrisTaxwithholdingRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateHrisTaxwithholdingResponse](../../Models/Operations/CreateHrisTaxwithholdingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTaxwithholding

Retrieves a single HrisTaxwithholding by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTaxwithholding" method="get" path="/hris/{connection_id}/taxwithholding/{id}" -->
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

$request = new Operations\GetHrisTaxwithholdingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxwithholding->getHrisTaxwithholding(
    request: $request
);

if ($response->hrisTaxwithholding !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetHrisTaxwithholdingRequest](../../Models/Operations/GetHrisTaxwithholdingRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetHrisTaxwithholdingResponse](../../Models/Operations/GetHrisTaxwithholdingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTaxwithholdings

Returns a list of HrisTaxwithholdings. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTaxwithholdings" method="get" path="/hris/{connection_id}/taxwithholding" -->
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

$request = new Operations\ListHrisTaxwithholdingsRequest(
    connectionId: '<id>',
);

$response = $sdk->taxwithholding->listHrisTaxwithholdings(
    request: $request
);

if ($response->hrisTaxwithholdings !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListHrisTaxwithholdingsRequest](../../Models/Operations/ListHrisTaxwithholdingsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListHrisTaxwithholdingsResponse](../../Models/Operations/ListHrisTaxwithholdingsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTaxwithholding

Updates the HrisTaxwithholding identified by `id`. Provide the unified HrisTaxwithholding fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTaxwithholding" method="patch" path="/hris/{connection_id}/taxwithholding/{id}" example="hris_taxwithholding" -->
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

$request = new Operations\PatchHrisTaxwithholdingRequest(
    hrisTaxwithholding: new Shared\HrisTaxwithholding(
        allowances: 1,
        country: 'US',
        createdAt: Utils\Utils::parseDateTime('2022-08-14T05:49:35.141Z'),
        effectiveAt: Utils\Utils::parseDateTime('2022-08-14T05:49:35.141Z'),
        extraWithholdingAmount: 10,
        filingStatus: Shared\FilingStatus::QualifyingSurvivor,
        form: Shared\Form::StateForm,
        id: '281f870c-2096-4385-8883-5eb465e92086',
        isExempt: false,
        isResident: true,
        jurisdiction: 'MI',
        jurisdictionType: Shared\JurisdictionType::State,
        metadata: [],
        overrideAmount: 19,
        overrideType: Shared\OverrideType::FixedAmount,
        updatedAt: Utils\Utils::parseDateTime('2026-10-09T00:26:24.527Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxwithholding->patchHrisTaxwithholding(
    request: $request
);

if ($response->hrisTaxwithholding !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchHrisTaxwithholdingRequest](../../Models/Operations/PatchHrisTaxwithholdingRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchHrisTaxwithholdingResponse](../../Models/Operations/PatchHrisTaxwithholdingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTaxwithholding

Deletes the HrisTaxwithholding identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTaxwithholding" method="delete" path="/hris/{connection_id}/taxwithholding/{id}" -->
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

$request = new Operations\RemoveHrisTaxwithholdingRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxwithholding->removeHrisTaxwithholding(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveHrisTaxwithholdingRequest](../../Models/Operations/RemoveHrisTaxwithholdingRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveHrisTaxwithholdingResponse](../../Models/Operations/RemoveHrisTaxwithholdingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTaxwithholding

Updates the HrisTaxwithholding identified by `id`. Provide the unified HrisTaxwithholding fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTaxwithholding" method="put" path="/hris/{connection_id}/taxwithholding/{id}" example="hris_taxwithholding" -->
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

$request = new Operations\UpdateHrisTaxwithholdingRequest(
    hrisTaxwithholding: new Shared\HrisTaxwithholding(
        allowances: 1,
        country: 'US',
        createdAt: Utils\Utils::parseDateTime('2022-08-14T05:49:35.141Z'),
        effectiveAt: Utils\Utils::parseDateTime('2022-08-14T05:49:35.141Z'),
        extraWithholdingAmount: 10,
        filingStatus: Shared\FilingStatus::QualifyingSurvivor,
        form: Shared\Form::StateForm,
        id: '281f870c-2096-4385-8883-5eb465e92086',
        isExempt: false,
        isResident: true,
        jurisdiction: 'MI',
        jurisdictionType: Shared\JurisdictionType::State,
        metadata: [],
        overrideAmount: 19,
        overrideType: Shared\OverrideType::FixedAmount,
        updatedAt: Utils\Utils::parseDateTime('2026-10-09T00:26:24.527Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxwithholding->updateHrisTaxwithholding(
    request: $request
);

if ($response->hrisTaxwithholding !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateHrisTaxwithholdingRequest](../../Models/Operations/UpdateHrisTaxwithholdingRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateHrisTaxwithholdingResponse](../../Models/Operations/UpdateHrisTaxwithholdingResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |