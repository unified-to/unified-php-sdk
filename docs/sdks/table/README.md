# Table

## Overview

### Available Operations

* [createDatastoreTable](#createdatastoretable) - Create a table
* [getCommerceTable](#getcommercetable) - Retrieve a table
* [getDatastoreTable](#getdatastoretable) - Retrieve a table
* [listCommerceTables](#listcommercetables) - List all tables
* [listDatastoreTables](#listdatastoretables) - List all tables
* [patchDatastoreTable](#patchdatastoretable) - Update a table
* [removeDatastoreTable](#removedatastoretable) - Remove a table
* [updateDatastoreTable](#updatedatastoretable) - Update a table

## createDatastoreTable

Creates a DatastoreTable. Provide the unified DatastoreTable fields in the request body; they are mapped to the provider's API. Returns the created DatastoreTable.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDatastoreTable" method="post" path="/datastore/{connection_id}/table" example="datastore_table" -->
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

$request = new Operations\CreateDatastoreTableRequest(
    datastoreTable: new Shared\DatastoreTable(
        createdAt: Utils\Utils::parseDateTime('2022-05-22T04:49:00.762Z'),
        description: 'Quasi adhuc paulatim ducimus carpo vomito magni tantum tubineus corona.',
        fields: [
            new Shared\DatastoreField(
                description: 'Antea soluta itaque clamo despecto basium accendo.',
                id: '5342c4bf-fca2-493e-ab27-fd8420a06a44',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: '3c919113-639d-4c8b-8683-c1a23554797a',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: '3b42b9c4-2561-4eca-9e13-4d895753c4e0',
                isIndexed: true,
                isNullable: true,
                isUnique: true,
                maxLength: 62,
                name: 'Toy - Kiehn',
                originalType: 'sursum',
                precision: 47,
                type: Shared\DatastoreFieldType::Number,
            ),
            new Shared\DatastoreField(
                description: 'Audax articulus triumphus tametsi cura tenetur colligo arcesso bestia.',
                id: 'd358cc0d-0e1f-485a-9d8e-09e09056422b',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: 'd55ec89d-c6d5-4129-ad7f-d49b6e7fb9aa',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: 'e022ea90-f808-4bac-bd56-287578fbb896',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: 'e022ea90-f808-4bac-bd56-287578fbb896',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-14T08:08:06.701Z'),
        webUrl: 'https://nervous-deck.com',
    ),
    connectionId: '<id>',
);

$response = $sdk->table->createDatastoreTable(
    request: $request
);

if ($response->datastoreTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateDatastoreTableRequest](../../Models/Operations/CreateDatastoreTableRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateDatastoreTableResponse](../../Models/Operations/CreateDatastoreTableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCommerceTable

Retrieves a single CommerceTable by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCommerceTable" method="get" path="/commerce/{connection_id}/table/{id}" -->
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

$request = new Operations\GetCommerceTableRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->table->getCommerceTable(
    request: $request
);

if ($response->commerceTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetCommerceTableRequest](../../Models/Operations/GetCommerceTableRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetCommerceTableResponse](../../Models/Operations/GetCommerceTableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDatastoreTable

Retrieves a single DatastoreTable by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDatastoreTable" method="get" path="/datastore/{connection_id}/table/{id}" -->
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

$request = new Operations\GetDatastoreTableRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->table->getDatastoreTable(
    request: $request
);

if ($response->datastoreTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetDatastoreTableRequest](../../Models/Operations/GetDatastoreTableRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetDatastoreTableResponse](../../Models/Operations/GetDatastoreTableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCommerceTables

Returns a list of CommerceTables. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceTables" method="get" path="/commerce/{connection_id}/table" -->
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

$request = new Operations\ListCommerceTablesRequest(
    connectionId: '<id>',
);

$response = $sdk->table->listCommerceTables(
    request: $request
);

if ($response->commerceTables !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListCommerceTablesRequest](../../Models/Operations/ListCommerceTablesRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListCommerceTablesResponse](../../Models/Operations/ListCommerceTablesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDatastoreTables

Returns a list of DatastoreTables. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDatastoreTables" method="get" path="/datastore/{connection_id}/table" -->
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

$request = new Operations\ListDatastoreTablesRequest(
    connectionId: '<id>',
);

$response = $sdk->table->listDatastoreTables(
    request: $request
);

if ($response->datastoreTables !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListDatastoreTablesRequest](../../Models/Operations/ListDatastoreTablesRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListDatastoreTablesResponse](../../Models/Operations/ListDatastoreTablesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDatastoreTable

Updates the DatastoreTable identified by `id`. Provide the unified DatastoreTable fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDatastoreTable" method="patch" path="/datastore/{connection_id}/table/{id}" example="datastore_table" -->
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

$request = new Operations\PatchDatastoreTableRequest(
    datastoreTable: new Shared\DatastoreTable(
        createdAt: Utils\Utils::parseDateTime('2022-05-22T04:49:00.762Z'),
        description: 'Quasi adhuc paulatim ducimus carpo vomito magni tantum tubineus corona.',
        fields: [
            new Shared\DatastoreField(
                description: 'Antea soluta itaque clamo despecto basium accendo.',
                id: 'c58ff21c-a8bd-40c4-a33e-6018d8273546',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: '03318fbc-e100-4a8e-9010-6da6ee46c0c8',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: '0cc9ce07-d63d-450f-a96d-2a03bdd1c4fb',
                isIndexed: true,
                isNullable: true,
                isUnique: true,
                maxLength: 62,
                name: 'Toy - Kiehn',
                originalType: 'sursum',
                precision: 47,
                type: Shared\DatastoreFieldType::Number,
            ),
            new Shared\DatastoreField(
                description: 'Audax articulus triumphus tametsi cura tenetur colligo arcesso bestia.',
                id: 'd8ef157f-fb32-46c8-bd69-a08423229667',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: '1eb364b5-5010-488e-8fbc-7276ea2433aa',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: '2027dca8-ebfc-4425-aa8b-ca2cfe2a0ff2',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: '2027dca8-ebfc-4425-aa8b-ca2cfe2a0ff2',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-14T08:08:06.702Z'),
        webUrl: 'https://nervous-deck.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->table->patchDatastoreTable(
    request: $request
);

if ($response->datastoreTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchDatastoreTableRequest](../../Models/Operations/PatchDatastoreTableRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchDatastoreTableResponse](../../Models/Operations/PatchDatastoreTableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeDatastoreTable

Deletes the DatastoreTable identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeDatastoreTable" method="delete" path="/datastore/{connection_id}/table/{id}" -->
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

$request = new Operations\RemoveDatastoreTableRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->table->removeDatastoreTable(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveDatastoreTableRequest](../../Models/Operations/RemoveDatastoreTableRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveDatastoreTableResponse](../../Models/Operations/RemoveDatastoreTableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDatastoreTable

Updates the DatastoreTable identified by `id`. Provide the unified DatastoreTable fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDatastoreTable" method="put" path="/datastore/{connection_id}/table/{id}" example="datastore_table" -->
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

$request = new Operations\UpdateDatastoreTableRequest(
    datastoreTable: new Shared\DatastoreTable(
        createdAt: Utils\Utils::parseDateTime('2022-05-22T04:49:00.762Z'),
        description: 'Quasi adhuc paulatim ducimus carpo vomito magni tantum tubineus corona.',
        fields: [
            new Shared\DatastoreField(
                description: 'Antea soluta itaque clamo despecto basium accendo.',
                id: 'c58ff21c-a8bd-40c4-a33e-6018d8273546',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: '03318fbc-e100-4a8e-9010-6da6ee46c0c8',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: '0cc9ce07-d63d-450f-a96d-2a03bdd1c4fb',
                isIndexed: true,
                isNullable: true,
                isUnique: true,
                maxLength: 62,
                name: 'Toy - Kiehn',
                originalType: 'sursum',
                precision: 47,
                type: Shared\DatastoreFieldType::Number,
            ),
            new Shared\DatastoreField(
                description: 'Audax articulus triumphus tametsi cura tenetur colligo arcesso bestia.',
                id: 'd8ef157f-fb32-46c8-bd69-a08423229667',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: '1eb364b5-5010-488e-8fbc-7276ea2433aa',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: '2027dca8-ebfc-4425-aa8b-ca2cfe2a0ff2',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: '2027dca8-ebfc-4425-aa8b-ca2cfe2a0ff2',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-14T08:08:06.702Z'),
        webUrl: 'https://nervous-deck.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->table->updateDatastoreTable(
    request: $request
);

if ($response->datastoreTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateDatastoreTableRequest](../../Models/Operations/UpdateDatastoreTableRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateDatastoreTableResponse](../../Models/Operations/UpdateDatastoreTableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |