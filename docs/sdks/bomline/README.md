# Bomline

## Overview

### Available Operations

* [createPlmBomline](#createplmbomline) - Create a bomline
* [getPlmBomline](#getplmbomline) - Retrieve a bomline
* [listPlmBomlines](#listplmbomlines) - List all bomlines
* [patchPlmBomline](#patchplmbomline) - Update a bomline
* [removePlmBomline](#removeplmbomline) - Remove a bomline
* [updatePlmBomline](#updateplmbomline) - Update a bomline

## createPlmBomline

Creates a PlmBomline. Provide the unified PlmBomline fields in the request body; they are mapped to the provider's API. Returns the created PlmBomline.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPlmBomline" method="post" path="/plm/{connection_id}/bomline" example="plm_bomline" -->
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

$request = new Operations\CreatePlmBomlineRequest(
    plmBomline: new Shared\PlmBomline(
        createdAt: Utils\Utils::parseDateTime('2022-04-02T07:09:29.598Z'),
        effectiveAt: Utils\Utils::parseDateTime('2022-04-02T07:09:29.598Z'),
        id: 'fc55c954-aef6-4696-a0c0-47f6516c3a59',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-17T22:25:53.265Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->bomline->createPlmBomline(
    request: $request
);

if ($response->plmBomline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\CreatePlmBomlineRequest](../../Models/Operations/CreatePlmBomlineRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\CreatePlmBomlineResponse](../../Models/Operations/CreatePlmBomlineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPlmBomline

Retrieves a single PlmBomline by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPlmBomline" method="get" path="/plm/{connection_id}/bomline/{id}" -->
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

$request = new Operations\GetPlmBomlineRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bomline->getPlmBomline(
    request: $request
);

if ($response->plmBomline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\GetPlmBomlineRequest](../../Models/Operations/GetPlmBomlineRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\GetPlmBomlineResponse](../../Models/Operations/GetPlmBomlineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPlmBomlines

Returns a list of PlmBomlines. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPlmBomlines" method="get" path="/plm/{connection_id}/bomline" -->
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

$request = new Operations\ListPlmBomlinesRequest(
    connectionId: '<id>',
);

$response = $sdk->bomline->listPlmBomlines(
    request: $request
);

if ($response->plmBomlines !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\ListPlmBomlinesRequest](../../Models/Operations/ListPlmBomlinesRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\ListPlmBomlinesResponse](../../Models/Operations/ListPlmBomlinesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPlmBomline

Updates the PlmBomline identified by `id`. Provide the unified PlmBomline fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPlmBomline" method="patch" path="/plm/{connection_id}/bomline/{id}" example="plm_bomline" -->
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

$request = new Operations\PatchPlmBomlineRequest(
    plmBomline: new Shared\PlmBomline(
        createdAt: Utils\Utils::parseDateTime('2022-04-02T07:09:29.598Z'),
        effectiveAt: Utils\Utils::parseDateTime('2022-04-02T07:09:29.598Z'),
        id: 'b8e89622-0dae-40bf-a43a-34d3643fe224',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-17T22:25:53.268Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bomline->patchPlmBomline(
    request: $request
);

if ($response->plmBomline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\PatchPlmBomlineRequest](../../Models/Operations/PatchPlmBomlineRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\PatchPlmBomlineResponse](../../Models/Operations/PatchPlmBomlineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePlmBomline

Deletes the PlmBomline identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removePlmBomline" method="delete" path="/plm/{connection_id}/bomline/{id}" -->
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

$request = new Operations\RemovePlmBomlineRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bomline->removePlmBomline(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\RemovePlmBomlineRequest](../../Models/Operations/RemovePlmBomlineRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\RemovePlmBomlineResponse](../../Models/Operations/RemovePlmBomlineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePlmBomline

Updates the PlmBomline identified by `id`. Provide the unified PlmBomline fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePlmBomline" method="put" path="/plm/{connection_id}/bomline/{id}" example="plm_bomline" -->
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

$request = new Operations\UpdatePlmBomlineRequest(
    plmBomline: new Shared\PlmBomline(
        createdAt: Utils\Utils::parseDateTime('2022-04-02T07:09:29.598Z'),
        effectiveAt: Utils\Utils::parseDateTime('2022-04-02T07:09:29.598Z'),
        id: 'b8e89622-0dae-40bf-a43a-34d3643fe224',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-17T22:25:53.268Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bomline->updatePlmBomline(
    request: $request
);

if ($response->plmBomline !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\UpdatePlmBomlineRequest](../../Models/Operations/UpdatePlmBomlineRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\UpdatePlmBomlineResponse](../../Models/Operations/UpdatePlmBomlineResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |