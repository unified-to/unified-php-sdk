# Taxonomy

## Overview

### Available Operations

* [createHrisTaxonomy](#createhristaxonomy) - Create a taxonomy
* [getHrisTaxonomy](#gethristaxonomy) - Retrieve a taxonomy
* [listCrmTaxonomies](#listcrmtaxonomies) - List all taxonomies
* [listHrisTaxonomies](#listhristaxonomies) - List all taxonomies

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
            'Facilitator',
            'National',
        ],
        createdAt: Utils\Utils::parseDateTime('2022-06-23T02:10:00.789Z'),
        description: 'Uterque vespillo adnuo ea commodo turbo suscipio condico.',
        domain: 'Health',
        id: 'e7741619-b16a-4478-9ba4-dfcab176394c',
        isActive: false,
        metadata: [],
        name: 'International Functionality Architect',
        subcategory: 'Marble',
        type: Shared\HrisTaxonomyType::Knowledge,
        updatedAt: Utils\Utils::parseDateTime('2023-05-30T04:15:45.239Z'),
        url: 'https://fixed-membership.biz/',
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