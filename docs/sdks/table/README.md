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
        description: 'Carpo vomito magni tantum tubineus corona deputo.',
        fields: [
            new Shared\DatastoreField(
                description: 'Basium accendo conservo curto thesis amet supellex.',
                id: '9b5d24fe-12de-4ab9-a2a7-3796eb69f057',
                isIndexed: true,
                isUnique: true,
                name: 'Cassin - Greenfelder',
                originalType: 'tenus',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Alo admiratio vallum decet tamquam utilis callide adhuc verumtamen.',
                id: '5af21e95-6d30-4d97-8e69-d8afb6605ab9',
                isNullable: true,
                isUnique: true,
                name: 'Gerhold, Hermiston and Schmidt',
                originalType: 'doloremque',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Celer charisma coniuratio usus audax articulus triumphus tametsi cura.',
                id: '5119ecfd-b574-4ba0-82a4-287a5edfb9bf',
                isIndexed: true,
                isNullable: true,
                isUnique: true,
                maxLength: 62,
                name: 'McDermott LLC',
                originalType: 'tenetur',
                precision: 47,
                type: Shared\DatastoreFieldType::Number,
            ),
            new Shared\DatastoreField(
                description: 'Adficio voluptatibus ciminatio.',
                id: '29e22740-f21c-4a8c-b11b-31dedbc05bef',
                name: 'Koch - Krajcik',
                originalType: 'umbra',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Demitto ullam solium bellicus urbs concedo.',
                id: 'ac748cb4-ec33-41c8-ae46-02e7104e8a5d',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Kling - Bosco',
                originalType: 'venustas',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: '4c4010b7-347d-4a09-9d8d-d1e785a7a135',
        metadata: [],
        name: 'Bauch LLC',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Nikolaus - Kub',
                name: 'Brakus and Sons',
                tableId: '4c4010b7-347d-4a09-9d8d-d1e785a7a135',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-14T17:57:16.383Z'),
        webUrl: 'https://torn-bench.biz/',
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
        description: 'Carpo vomito magni tantum tubineus corona deputo.',
        fields: [
            new Shared\DatastoreField(
                description: 'Basium accendo conservo curto thesis amet supellex.',
                id: 'b557833f-3c8d-4e73-a32a-8c39492f4013',
                isIndexed: true,
                isUnique: true,
                name: 'Cassin - Greenfelder',
                originalType: 'tenus',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Alo admiratio vallum decet tamquam utilis callide adhuc verumtamen.',
                id: 'ab5d88d9-b3e0-4511-8e97-dd32c8857286',
                isNullable: true,
                isUnique: true,
                name: 'Gerhold, Hermiston and Schmidt',
                originalType: 'doloremque',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Celer charisma coniuratio usus audax articulus triumphus tametsi cura.',
                id: '42eba19d-e51e-42d9-92ae-9095f2ba101a',
                isIndexed: true,
                isNullable: true,
                isUnique: true,
                maxLength: 62,
                name: 'McDermott LLC',
                originalType: 'tenetur',
                precision: 47,
                type: Shared\DatastoreFieldType::Number,
            ),
            new Shared\DatastoreField(
                description: 'Adficio voluptatibus ciminatio.',
                id: 'd088d255-c4a3-43cd-8571-dc1f38248cc3',
                name: 'Koch - Krajcik',
                originalType: 'umbra',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Demitto ullam solium bellicus urbs concedo.',
                id: '6f03943a-a8aa-4d45-970e-706e2d2e3814',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Kling - Bosco',
                originalType: 'venustas',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: '9d9d8935-6e3d-41d5-b71b-7040df39619e',
        metadata: [],
        name: 'Bauch LLC',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Nikolaus - Kub',
                name: 'Brakus and Sons',
                tableId: '9d9d8935-6e3d-41d5-b71b-7040df39619e',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-14T17:57:16.385Z'),
        webUrl: 'https://torn-bench.biz/',
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
        description: 'Carpo vomito magni tantum tubineus corona deputo.',
        fields: [
            new Shared\DatastoreField(
                description: 'Basium accendo conservo curto thesis amet supellex.',
                id: 'b557833f-3c8d-4e73-a32a-8c39492f4013',
                isIndexed: true,
                isUnique: true,
                name: 'Cassin - Greenfelder',
                originalType: 'tenus',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Alo admiratio vallum decet tamquam utilis callide adhuc verumtamen.',
                id: 'ab5d88d9-b3e0-4511-8e97-dd32c8857286',
                isNullable: true,
                isUnique: true,
                name: 'Gerhold, Hermiston and Schmidt',
                originalType: 'doloremque',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Celer charisma coniuratio usus audax articulus triumphus tametsi cura.',
                id: '42eba19d-e51e-42d9-92ae-9095f2ba101a',
                isIndexed: true,
                isNullable: true,
                isUnique: true,
                maxLength: 62,
                name: 'McDermott LLC',
                originalType: 'tenetur',
                precision: 47,
                type: Shared\DatastoreFieldType::Number,
            ),
            new Shared\DatastoreField(
                description: 'Adficio voluptatibus ciminatio.',
                id: 'd088d255-c4a3-43cd-8571-dc1f38248cc3',
                name: 'Koch - Krajcik',
                originalType: 'umbra',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Demitto ullam solium bellicus urbs concedo.',
                id: '6f03943a-a8aa-4d45-970e-706e2d2e3814',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Kling - Bosco',
                originalType: 'venustas',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: '9d9d8935-6e3d-41d5-b71b-7040df39619e',
        metadata: [],
        name: 'Bauch LLC',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Nikolaus - Kub',
                name: 'Brakus and Sons',
                tableId: '9d9d8935-6e3d-41d5-b71b-7040df39619e',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-14T17:57:16.385Z'),
        webUrl: 'https://torn-bench.biz/',
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