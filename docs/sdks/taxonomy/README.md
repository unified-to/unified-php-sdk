# Taxonomy

## Overview

### Available Operations

* [createHrisTaxonomy](#createhristaxonomy) - Create a taxonomy
* [getHrisTaxonomy](#gethristaxonomy) - Retrieve a taxonomy
* [listCrmTaxonomies](#listcrmtaxonomies) - List all taxonomies
* [listHrisTaxonomies](#listhristaxonomies) - List all taxonomies
* [patchHrisTaxonomy](#patchhristaxonomy) - Update a taxonomy
* [removeHrisTaxonomy](#removehristaxonomy) - Remove a taxonomy
* [updateHrisTaxonomy](#updatehristaxonomy) - Update a taxonomy

## createHrisTaxonomy

Creates a HrisTaxonomy. Provide the unified HrisTaxonomy fields in the request body; they are mapped to the provider's API. Returns the created HrisTaxonomy.

### Example Usage

<!-- UsageSnippet language="php" operationID="createHrisTaxonomy" method="post" path="/hris/{connection_id}/taxonomy" example="hris_taxonomy" -->
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

$request = new Operations\CreateHrisTaxonomyRequest(
    hrisTaxonomy: new Shared\HrisTaxonomy(
        alternativeNames: [
            'Supervisor',
            'Customer',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-06-23T02:10:00.789Z'),
        description: 'Ea commodo turbo.',
        domain: 'Music',
        id: 'e992d87a-b3d7-4b6b-8d97-f609ed7f5fc1',
        isActive: false,
        metadata: [],
        name: 'Chief Accountability Representative',
        subcategory: 'Granite',
        type: Shared\HrisTaxonomyType::Knowledge,
        updatedAt: Utils\Utils::parseDateTime('2023-06-06T06:35:26.125Z'),
        url: 'https://happy-go-lucky-devastation.com',
    ),
    connectionId: '<id>',
);

$response = $sdk->taxonomy->createHrisTaxonomy(
    request: $request
);

if ($response->hrisTaxonomy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateHrisTaxonomyRequest](../../Models/Operations/CreateHrisTaxonomyRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateHrisTaxonomyResponse](../../Models/Operations/CreateHrisTaxonomyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getHrisTaxonomy

Retrieves a single HrisTaxonomy by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTaxonomy" method="get" path="/hris/{connection_id}/taxonomy/{id}" -->
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

$request = new Operations\GetHrisTaxonomyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxonomy->getHrisTaxonomy(
    request: $request
);

if ($response->hrisTaxonomy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetHrisTaxonomyRequest](../../Models/Operations/GetHrisTaxonomyRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetHrisTaxonomyResponse](../../Models/Operations/GetHrisTaxonomyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmTaxonomies

Returns a list of CrmTaxonomies. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmTaxonomies" method="get" path="/crm/{connection_id}/taxonomy" -->
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

$request = new Operations\ListCrmTaxonomiesRequest(
    connectionId: '<id>',
);

$response = $sdk->taxonomy->listCrmTaxonomies(
    request: $request
);

if ($response->crmTaxonomies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCrmTaxonomiesRequest](../../Models/Operations/ListCrmTaxonomiesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCrmTaxonomiesResponse](../../Models/Operations/ListCrmTaxonomiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTaxonomies

Returns a list of HrisTaxonomies. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTaxonomies" method="get" path="/hris/{connection_id}/taxonomy" -->
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

$request = new Operations\ListHrisTaxonomiesRequest(
    connectionId: '<id>',
);

$response = $sdk->taxonomy->listHrisTaxonomies(
    request: $request
);

if ($response->hrisTaxonomies !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListHrisTaxonomiesRequest](../../Models/Operations/ListHrisTaxonomiesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListHrisTaxonomiesResponse](../../Models/Operations/ListHrisTaxonomiesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchHrisTaxonomy

Updates the HrisTaxonomy identified by `id`. Provide the unified HrisTaxonomy fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchHrisTaxonomy" method="patch" path="/hris/{connection_id}/taxonomy/{id}" example="hris_taxonomy" -->
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

$request = new Operations\PatchHrisTaxonomyRequest(
    hrisTaxonomy: new Shared\HrisTaxonomy(
        alternativeNames: [
            'Supervisor',
            'Customer',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-06-23T02:10:00.789Z'),
        description: 'Ea commodo turbo.',
        domain: 'Music',
        id: 'cdeb981f-d5ac-4eca-9a21-ae5b73420889',
        isActive: false,
        metadata: [],
        name: 'Chief Accountability Representative',
        subcategory: 'Granite',
        type: Shared\HrisTaxonomyType::Knowledge,
        updatedAt: Utils\Utils::parseDateTime('2023-06-06T06:35:26.130Z'),
        url: 'https://happy-go-lucky-devastation.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxonomy->patchHrisTaxonomy(
    request: $request
);

if ($response->hrisTaxonomy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchHrisTaxonomyRequest](../../Models/Operations/PatchHrisTaxonomyRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchHrisTaxonomyResponse](../../Models/Operations/PatchHrisTaxonomyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeHrisTaxonomy

Deletes the HrisTaxonomy identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeHrisTaxonomy" method="delete" path="/hris/{connection_id}/taxonomy/{id}" -->
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

$request = new Operations\RemoveHrisTaxonomyRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxonomy->removeHrisTaxonomy(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveHrisTaxonomyRequest](../../Models/Operations/RemoveHrisTaxonomyRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveHrisTaxonomyResponse](../../Models/Operations/RemoveHrisTaxonomyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateHrisTaxonomy

Updates the HrisTaxonomy identified by `id`. Provide the unified HrisTaxonomy fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateHrisTaxonomy" method="put" path="/hris/{connection_id}/taxonomy/{id}" example="hris_taxonomy" -->
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

$request = new Operations\UpdateHrisTaxonomyRequest(
    hrisTaxonomy: new Shared\HrisTaxonomy(
        alternativeNames: [
            'Supervisor',
            'Customer',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-06-23T02:10:00.789Z'),
        description: 'Ea commodo turbo.',
        domain: 'Music',
        id: 'cdeb981f-d5ac-4eca-9a21-ae5b73420889',
        isActive: false,
        metadata: [],
        name: 'Chief Accountability Representative',
        subcategory: 'Granite',
        type: Shared\HrisTaxonomyType::Knowledge,
        updatedAt: Utils\Utils::parseDateTime('2023-06-06T06:35:26.130Z'),
        url: 'https://happy-go-lucky-devastation.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxonomy->updateHrisTaxonomy(
    request: $request
);

if ($response->hrisTaxonomy !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateHrisTaxonomyRequest](../../Models/Operations/UpdateHrisTaxonomyRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateHrisTaxonomyResponse](../../Models/Operations/UpdateHrisTaxonomyResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |