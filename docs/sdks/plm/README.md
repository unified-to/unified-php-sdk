# Plm

## Overview

### Available Operations

* [createPlmBomline](#createplmbomline) - Create a bomline
* [createPlmChange](#createplmchange) - Create a change
* [createPlmDocument](#createplmdocument) - Create a document
* [createPlmPart](#createplmpart) - Create a part
* [getPlmBomline](#getplmbomline) - Retrieve a bomline
* [getPlmCategory](#getplmcategory) - Retrieve a category
* [getPlmChange](#getplmchange) - Retrieve a change
* [getPlmDocument](#getplmdocument) - Retrieve a document
* [getPlmPart](#getplmpart) - Retrieve a part
* [listPlmBomlines](#listplmbomlines) - List all bomlines
* [listPlmCategories](#listplmcategories) - List all categories
* [listPlmChanges](#listplmchanges) - List all changes
* [listPlmDocuments](#listplmdocuments) - List all documents
* [listPlmParts](#listplmparts) - List all parts
* [patchPlmBomline](#patchplmbomline) - Update a bomline
* [patchPlmChange](#patchplmchange) - Update a change
* [patchPlmDocument](#patchplmdocument) - Update a document
* [patchPlmPart](#patchplmpart) - Update a part
* [removePlmBomline](#removeplmbomline) - Remove a bomline
* [updatePlmBomline](#updateplmbomline) - Update a bomline
* [updatePlmChange](#updateplmchange) - Update a change
* [updatePlmDocument](#updateplmdocument) - Update a document
* [updatePlmPart](#updateplmpart) - Update a part

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
        id: 'b74119c2-9688-4d85-ac3c-af1e24840dc7',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-19T23:28:55.520Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->plm->createPlmBomline(
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

## createPlmChange

Creates a PlmChange. Provide the unified PlmChange fields in the request body; they are mapped to the provider's API. Returns the created PlmChange.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPlmChange" method="post" path="/plm/{connection_id}/change" example="plm_change" -->
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

$request = new Operations\CreatePlmChangeRequest(
    plmChange: new Shared\PlmChange(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2021-08-02T05:58:32.287Z'),
        description: 'Vorago spiculum avaritia adipiscor callide.',
        id: '3ef0435b-70c1-435b-9049-acffae1c4e98',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-27T10:41:27.104Z'),
        url: 'https://warmhearted-fraudster.biz/',
    ),
    connectionId: '<id>',
);

$response = $sdk->plm->createPlmChange(
    request: $request
);

if ($response->plmChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\CreatePlmChangeRequest](../../Models/Operations/CreatePlmChangeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\CreatePlmChangeResponse](../../Models/Operations/CreatePlmChangeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPlmDocument

Creates a PlmDocument. Provide the unified PlmDocument fields in the request body; they are mapped to the provider's API. Returns the created PlmDocument.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPlmDocument" method="post" path="/plm/{connection_id}/document" example="plm_document" -->
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

$request = new Operations\CreatePlmDocumentRequest(
    plmDocument: new Shared\PlmDocument(
        createdAt: Utils\Utils::parseDateTime('2020-10-16T01:44:30.293Z'),
        fileIds: [],
        id: '1a35a329-1a2c-412f-9ec3-a9d0d701361d',
        lifecycleState: 'Under Review',
        masterIdentifier: '9fff29ee-dc3f-49b3-9acb-1c7bef36d4e9',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-09-08T04:07:23.212Z'),
        url: 'https://uncommon-guide.info/',
    ),
    connectionId: '<id>',
);

$response = $sdk->plm->createPlmDocument(
    request: $request
);

if ($response->plmDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreatePlmDocumentRequest](../../Models/Operations/CreatePlmDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreatePlmDocumentResponse](../../Models/Operations/CreatePlmDocumentResponse.md)**

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
        description: 'Pectus tero ulterius aestivus talis tero ullam cruciamentum.',
        documentIds: [],
        fileIds: [],
        id: '0d43f76c-4989-470c-b140-b7a12674f72a',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: '99657cfa-1887-467b-b914-238c1703a436',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-12T10:26:10.777Z'),
        url: 'https://inborn-independence.info',
    ),
    connectionId: '<id>',
);

$response = $sdk->plm->createPlmPart(
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

$response = $sdk->plm->getPlmBomline(
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

## getPlmCategory

Retrieves a single PlmCategory by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPlmCategory" method="get" path="/plm/{connection_id}/category/{id}" -->
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

$request = new Operations\GetPlmCategoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->getPlmCategory(
    request: $request
);

if ($response->plmCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetPlmCategoryRequest](../../Models/Operations/GetPlmCategoryRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetPlmCategoryResponse](../../Models/Operations/GetPlmCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPlmChange

Retrieves a single PlmChange by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPlmChange" method="get" path="/plm/{connection_id}/change/{id}" -->
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

$request = new Operations\GetPlmChangeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->getPlmChange(
    request: $request
);

if ($response->plmChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\GetPlmChangeRequest](../../Models/Operations/GetPlmChangeRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\GetPlmChangeResponse](../../Models/Operations/GetPlmChangeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPlmDocument

Retrieves a single PlmDocument by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPlmDocument" method="get" path="/plm/{connection_id}/document/{id}" -->
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

$request = new Operations\GetPlmDocumentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->getPlmDocument(
    request: $request
);

if ($response->plmDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetPlmDocumentRequest](../../Models/Operations/GetPlmDocumentRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetPlmDocumentResponse](../../Models/Operations/GetPlmDocumentResponse.md)**

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

$response = $sdk->plm->getPlmPart(
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

$response = $sdk->plm->listPlmBomlines(
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

## listPlmCategories

Returns a list of PlmCategories. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPlmCategories" method="get" path="/plm/{connection_id}/category" -->
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

$request = new Operations\ListPlmCategoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->plm->listPlmCategories(
    request: $request
);

if ($response->plmCategories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListPlmCategoriesRequest](../../Models/Operations/ListPlmCategoriesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListPlmCategoriesResponse](../../Models/Operations/ListPlmCategoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPlmChanges

Returns a list of PlmChanges. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPlmChanges" method="get" path="/plm/{connection_id}/change" -->
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

$request = new Operations\ListPlmChangesRequest(
    connectionId: '<id>',
);

$response = $sdk->plm->listPlmChanges(
    request: $request
);

if ($response->plmChanges !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\ListPlmChangesRequest](../../Models/Operations/ListPlmChangesRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\ListPlmChangesResponse](../../Models/Operations/ListPlmChangesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPlmDocuments

Returns a list of PlmDocuments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPlmDocuments" method="get" path="/plm/{connection_id}/document" -->
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

$request = new Operations\ListPlmDocumentsRequest(
    connectionId: '<id>',
);

$response = $sdk->plm->listPlmDocuments(
    request: $request
);

if ($response->plmDocuments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListPlmDocumentsRequest](../../Models/Operations/ListPlmDocumentsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListPlmDocumentsResponse](../../Models/Operations/ListPlmDocumentsResponse.md)**

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

$response = $sdk->plm->listPlmParts(
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
        id: 'e274e2d1-7bc1-40d4-bf3e-ec9cf5f95565',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-19T23:28:55.521Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->patchPlmBomline(
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

## patchPlmChange

Updates the PlmChange identified by `id`. Provide the unified PlmChange fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPlmChange" method="patch" path="/plm/{connection_id}/change/{id}" example="plm_change" -->
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

$request = new Operations\PatchPlmChangeRequest(
    plmChange: new Shared\PlmChange(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2021-08-02T05:58:32.287Z'),
        description: 'Vorago spiculum avaritia adipiscor callide.',
        id: '7090a0cd-50c4-409c-91b2-9c73997b2787',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-27T10:41:27.117Z'),
        url: 'https://warmhearted-fraudster.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->patchPlmChange(
    request: $request
);

if ($response->plmChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\PatchPlmChangeRequest](../../Models/Operations/PatchPlmChangeRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\PatchPlmChangeResponse](../../Models/Operations/PatchPlmChangeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPlmDocument

Updates the PlmDocument identified by `id`. Provide the unified PlmDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPlmDocument" method="patch" path="/plm/{connection_id}/document/{id}" example="plm_document" -->
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

$request = new Operations\PatchPlmDocumentRequest(
    plmDocument: new Shared\PlmDocument(
        createdAt: Utils\Utils::parseDateTime('2020-10-16T01:44:30.293Z'),
        fileIds: [],
        id: '3638d93c-9c47-4f39-813c-6b1cbea3f315',
        lifecycleState: 'Under Review',
        masterIdentifier: 'cd2a5ddd-2e99-443d-ad80-90abb43647c4',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-09-08T04:07:23.223Z'),
        url: 'https://uncommon-guide.info/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->patchPlmDocument(
    request: $request
);

if ($response->plmDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchPlmDocumentRequest](../../Models/Operations/PatchPlmDocumentRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchPlmDocumentResponse](../../Models/Operations/PatchPlmDocumentResponse.md)**

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
        id: 'b28be06a-27e0-4d95-879f-19d10b75b47f',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: '50a52a84-f998-491c-ad3b-865344ce4c7d',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-12T10:26:10.781Z'),
        url: 'https://inborn-independence.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->patchPlmPart(
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

$response = $sdk->plm->removePlmBomline(
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
        id: 'e274e2d1-7bc1-40d4-bf3e-ec9cf5f95565',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-19T23:28:55.521Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->updatePlmBomline(
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

## updatePlmChange

Updates the PlmChange identified by `id`. Provide the unified PlmChange fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePlmChange" method="put" path="/plm/{connection_id}/change/{id}" example="plm_change" -->
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

$request = new Operations\UpdatePlmChangeRequest(
    plmChange: new Shared\PlmChange(
        affectedItems: [],
        createdAt: Utils\Utils::parseDateTime('2021-08-02T05:58:32.287Z'),
        description: 'Vorago spiculum avaritia adipiscor callide.',
        id: '7090a0cd-50c4-409c-91b2-9c73997b2787',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-27T10:41:27.117Z'),
        url: 'https://warmhearted-fraudster.biz/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->updatePlmChange(
    request: $request
);

if ($response->plmChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\UpdatePlmChangeRequest](../../Models/Operations/UpdatePlmChangeRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\UpdatePlmChangeResponse](../../Models/Operations/UpdatePlmChangeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePlmDocument

Updates the PlmDocument identified by `id`. Provide the unified PlmDocument fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePlmDocument" method="put" path="/plm/{connection_id}/document/{id}" example="plm_document" -->
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

$request = new Operations\UpdatePlmDocumentRequest(
    plmDocument: new Shared\PlmDocument(
        createdAt: Utils\Utils::parseDateTime('2020-10-16T01:44:30.293Z'),
        fileIds: [],
        id: '3638d93c-9c47-4f39-813c-6b1cbea3f315',
        lifecycleState: 'Under Review',
        masterIdentifier: 'cd2a5ddd-2e99-443d-ad80-90abb43647c4',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-09-08T04:07:23.223Z'),
        url: 'https://uncommon-guide.info/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->updatePlmDocument(
    request: $request
);

if ($response->plmDocument !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdatePlmDocumentRequest](../../Models/Operations/UpdatePlmDocumentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdatePlmDocumentResponse](../../Models/Operations/UpdatePlmDocumentResponse.md)**

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
        id: 'b28be06a-27e0-4d95-879f-19d10b75b47f',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: '50a52a84-f998-491c-ad3b-865344ce4c7d',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-12T10:26:10.781Z'),
        url: 'https://inborn-independence.info',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->plm->updatePlmPart(
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