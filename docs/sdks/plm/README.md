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
        id: 'd43226e1-0779-4804-8b8a-143b5e924b7b',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-17T11:15:58.317Z'),
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
        id: 'fa7a6955-6317-48a8-906c-43bb430275c4',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-16T15:49:23.863Z'),
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
        id: '9f80f10e-db0d-4285-b08b-88581630dbc5',
        lifecycleState: 'Under Review',
        masterIdentifier: 'c71c4c2f-90b1-4a1b-b1b0-30db027c9f89',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-08-28T10:42:16.717Z'),
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
        id: 'e4df6475-851a-4b46-9919-f0916de1f2fc',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: '8c6e9d69-929b-4c83-bc29-9899d6ace8ca',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-09T12:31:07.693Z'),
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
        id: 'e9f51f55-b796-4556-9e96-5ed385188e55',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-17T11:15:58.319Z'),
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
        id: '0e70db3a-0bc5-4283-97fc-44b3f720a71f',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-16T15:49:23.876Z'),
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
        id: 'bd51bb3c-6f62-45ce-84e7-ad869eb64dcc',
        lifecycleState: 'Under Review',
        masterIdentifier: 'ebb6b8d0-3df3-4126-9616-6eac5285fc99',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-08-28T10:42:16.733Z'),
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
        id: '0445a503-37f7-44ea-af36-1874f5b9bc62',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: '282cb75f-70b8-420d-933e-283033818839',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-09T12:31:07.697Z'),
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
        id: 'e9f51f55-b796-4556-9e96-5ed385188e55',
        quantity: 7,
        referenceDesignators: [],
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2023-04-17T11:15:58.319Z'),
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
        id: '0e70db3a-0bc5-4283-97fc-44b3f720a71f',
        metadata: [],
        name: 'Update goodwill',
        number: 'ECO-6591',
        priority: 'Medium',
        status: Shared\PlmChangeStatus::InReview,
        type: Shared\PlmChangeType::Order,
        updatedAt: Utils\Utils::parseDateTime('2026-09-16T15:49:23.876Z'),
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
        id: 'bd51bb3c-6f62-45ce-84e7-ad869eb64dcc',
        lifecycleState: 'Under Review',
        masterIdentifier: 'ebb6b8d0-3df3-4126-9616-6eac5285fc99',
        metadata: [],
        name: 'Procedure taxicab',
        number: 'DOC-086886',
        originalType: 'Procedure',
        revision: 'C',
        status: Shared\PlmDocumentStatus::InReview,
        type: Shared\PlmDocumentType::Procedure,
        updatedAt: Utils\Utils::parseDateTime('2026-08-28T10:42:16.733Z'),
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
        id: '0445a503-37f7-44ea-af36-1874f5b9bc62',
        isAssembly: false,
        lifecycleState: 'Design',
        masterIdentifier: '282cb75f-70b8-420d-933e-283033818839',
        metadata: [],
        name: 'grumpy PCB',
        number: 'PRT-009154',
        originalType: 'Software',
        revision: 'B',
        source: Shared\Source::Make,
        status: Shared\PlmPartStatus::InWork,
        type: Shared\PlmPartType::Software,
        unitOfMeasure: 'EA',
        updatedAt: Utils\Utils::parseDateTime('2021-04-09T12:31:07.697Z'),
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