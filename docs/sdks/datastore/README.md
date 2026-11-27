# Datastore

## Overview

### Available Operations

* [createDatastoreDatabase](#createdatastoredatabase) - Create a database
* [createDatastoreQuery](#createdatastorequery) - Create a query
* [createDatastoreRecord](#createdatastorerecord) - Create a record
* [createDatastoreTable](#createdatastoretable) - Create a table
* [getDatastoreDatabase](#getdatastoredatabase) - Retrieve a database
* [getDatastoreRecord](#getdatastorerecord) - Retrieve a record
* [getDatastoreTable](#getdatastoretable) - Retrieve a table
* [listDatastoreDatabases](#listdatastoredatabases) - List all databases
* [listDatastoreRecords](#listdatastorerecords) - List all records
* [listDatastoreTables](#listdatastoretables) - List all tables
* [patchDatastoreDatabase](#patchdatastoredatabase) - Update a database
* [patchDatastoreRecord](#patchdatastorerecord) - Update a record
* [patchDatastoreTable](#patchdatastoretable) - Update a table
* [removeDatastoreDatabase](#removedatastoredatabase) - Remove a database
* [removeDatastoreRecord](#removedatastorerecord) - Remove a record
* [removeDatastoreTable](#removedatastoretable) - Remove a table
* [updateDatastoreDatabase](#updatedatastoredatabase) - Update a database
* [updateDatastoreRecord](#updatedatastorerecord) - Update a record
* [updateDatastoreTable](#updatedatastoretable) - Update a table

## createDatastoreDatabase

Creates a DatastoreDatabase. Provide the unified DatastoreDatabase fields in the request body; they are mapped to the provider's API. Returns the created DatastoreDatabase.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDatastoreDatabase" method="post" path="/datastore/{connection_id}/database" example="datastore_database" -->
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

$request = new Operations\CreateDatastoreDatabaseRequest(
    datastoreDatabase: new Shared\DatastoreDatabase(
        createdAt: Utils\Utils::parseDateTime('2019-03-05T14:31:00.223Z'),
        description: 'Coerceo amet vito vorago subseco natus tonsor eius.',
        id: '0a549b6d-d06e-40f0-8da9-a0f964d20d47',
        isActive: true,
        metadata: [],
        name: 'Aufderhar - Wiza',
        password: 'hYwOHm0NLDvI_ch',
        region: 'Greece',
        updatedAt: Utils\Utils::parseDateTime('2023-07-21T18:57:49.335Z'),
        webUrl: 'https://dependable-government.org/',
    ),
    connectionId: '<id>',
);

$response = $sdk->datastore->createDatastoreDatabase(
    request: $request
);

if ($response->datastoreDatabase !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateDatastoreDatabaseRequest](../../Models/Operations/CreateDatastoreDatabaseRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateDatastoreDatabaseResponse](../../Models/Operations/CreateDatastoreDatabaseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDatastoreQuery

Creates a DatastoreQuery. Provide the unified DatastoreQuery fields in the request body; they are mapped to the provider's API. Returns the created DatastoreQuery.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDatastoreQuery" method="post" path="/datastore/{connection_id}/query" example="datastore_query" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateDatastoreQueryRequest(
    datastoreQuery: new Shared\DatastoreQuery(
        metadata: [],
        query: new Shared\PropertyDatastoreQueryQuery(
            filter: new Shared\PropertyDatastoreQueryQueryFilter(
                type: Shared\PropertyDatastoreQueryQueryFilterType::Or,
            ),
            select: [
                '*',
            ],
            sql: '',
        ),
    ),
    connectionId: '<id>',
);

$response = $sdk->datastore->createDatastoreQuery(
    request: $request
);

if ($response->datastoreQuery !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateDatastoreQueryRequest](../../Models/Operations/CreateDatastoreQueryRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateDatastoreQueryResponse](../../Models/Operations/CreateDatastoreQueryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDatastoreRecord

Creates a DatastoreRecord. Provide the unified DatastoreRecord fields in the request body; they are mapped to the provider's API. Returns the created DatastoreRecord.

### Example Usage

<!-- UsageSnippet language="php" operationID="createDatastoreRecord" method="post" path="/datastore/{connection_id}/record" example="datastore_record" -->
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

$request = new Operations\CreateDatastoreRecordRequest(
    datastoreRecord: new Shared\DatastoreRecord(
        createdAt: Utils\Utils::parseDateTime('2022-07-10T04:42:03.076Z'),
        fields: [

        ],
        id: '9bb12959-5266-4915-8f54-ae954bcaf279',
        metadata: [],
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-03-28T01:35:10.559Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->datastore->createDatastoreRecord(
    request: $request
);

if ($response->datastoreRecord !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateDatastoreRecordRequest](../../Models/Operations/CreateDatastoreRecordRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateDatastoreRecordResponse](../../Models/Operations/CreateDatastoreRecordResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->datastore->createDatastoreTable(
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

## getDatastoreDatabase

Retrieves a single DatastoreDatabase by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDatastoreDatabase" method="get" path="/datastore/{connection_id}/database/{id}" -->
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

$request = new Operations\GetDatastoreDatabaseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->getDatastoreDatabase(
    request: $request
);

if ($response->datastoreDatabase !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetDatastoreDatabaseRequest](../../Models/Operations/GetDatastoreDatabaseRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetDatastoreDatabaseResponse](../../Models/Operations/GetDatastoreDatabaseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDatastoreRecord

Retrieves a single DatastoreRecord by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getDatastoreRecord" method="get" path="/datastore/{connection_id}/record/{id}" -->
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

$request = new Operations\GetDatastoreRecordRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->getDatastoreRecord(
    request: $request
);

if ($response->datastoreRecord !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetDatastoreRecordRequest](../../Models/Operations/GetDatastoreRecordRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetDatastoreRecordResponse](../../Models/Operations/GetDatastoreRecordResponse.md)**

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

$response = $sdk->datastore->getDatastoreTable(
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

## listDatastoreDatabases

Returns a list of DatastoreDatabases. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDatastoreDatabases" method="get" path="/datastore/{connection_id}/database" -->
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

$request = new Operations\ListDatastoreDatabasesRequest(
    connectionId: '<id>',
);

$response = $sdk->datastore->listDatastoreDatabases(
    request: $request
);

if ($response->datastoreDatabases !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListDatastoreDatabasesRequest](../../Models/Operations/ListDatastoreDatabasesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListDatastoreDatabasesResponse](../../Models/Operations/ListDatastoreDatabasesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDatastoreRecords

Returns a list of DatastoreRecords. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listDatastoreRecords" method="get" path="/datastore/{connection_id}/record" -->
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

$request = new Operations\ListDatastoreRecordsRequest(
    connectionId: '<id>',
);

$response = $sdk->datastore->listDatastoreRecords(
    request: $request
);

if ($response->datastoreRecords !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListDatastoreRecordsRequest](../../Models/Operations/ListDatastoreRecordsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListDatastoreRecordsResponse](../../Models/Operations/ListDatastoreRecordsResponse.md)**

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

$response = $sdk->datastore->listDatastoreTables(
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

## patchDatastoreDatabase

Updates the DatastoreDatabase identified by `id`. Provide the unified DatastoreDatabase fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDatastoreDatabase" method="patch" path="/datastore/{connection_id}/database/{id}" example="datastore_database" -->
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

$request = new Operations\PatchDatastoreDatabaseRequest(
    datastoreDatabase: new Shared\DatastoreDatabase(
        createdAt: Utils\Utils::parseDateTime('2019-03-05T14:31:00.223Z'),
        description: 'Coerceo amet vito vorago subseco natus tonsor eius.',
        id: '76509e52-7b7f-464d-9365-180c060626ee',
        isActive: true,
        metadata: [],
        name: 'Aufderhar - Wiza',
        password: 'hYwOHm0NLDvI_ch',
        region: 'Greece',
        updatedAt: Utils\Utils::parseDateTime('2023-07-21T18:57:49.342Z'),
        webUrl: 'https://dependable-government.org/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->patchDatastoreDatabase(
    request: $request
);

if ($response->datastoreDatabase !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchDatastoreDatabaseRequest](../../Models/Operations/PatchDatastoreDatabaseRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchDatastoreDatabaseResponse](../../Models/Operations/PatchDatastoreDatabaseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDatastoreRecord

Updates the DatastoreRecord identified by `id`. Provide the unified DatastoreRecord fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDatastoreRecord" method="patch" path="/datastore/{connection_id}/record/{id}" example="datastore_record" -->
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

$request = new Operations\PatchDatastoreRecordRequest(
    datastoreRecord: new Shared\DatastoreRecord(
        createdAt: Utils\Utils::parseDateTime('2022-07-10T04:42:03.076Z'),
        fields: [

        ],
        id: 'b6eb9b1b-90a6-4216-b76b-afce9003b46a',
        metadata: [],
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-03-28T01:35:10.568Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->patchDatastoreRecord(
    request: $request
);

if ($response->datastoreRecord !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchDatastoreRecordRequest](../../Models/Operations/PatchDatastoreRecordRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchDatastoreRecordResponse](../../Models/Operations/PatchDatastoreRecordResponse.md)**

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

$response = $sdk->datastore->patchDatastoreTable(
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

## removeDatastoreDatabase

Deletes the DatastoreDatabase identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeDatastoreDatabase" method="delete" path="/datastore/{connection_id}/database/{id}" -->
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

$request = new Operations\RemoveDatastoreDatabaseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->removeDatastoreDatabase(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveDatastoreDatabaseRequest](../../Models/Operations/RemoveDatastoreDatabaseRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveDatastoreDatabaseResponse](../../Models/Operations/RemoveDatastoreDatabaseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeDatastoreRecord

Deletes the DatastoreRecord identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeDatastoreRecord" method="delete" path="/datastore/{connection_id}/record/{id}" -->
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

$request = new Operations\RemoveDatastoreRecordRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->removeDatastoreRecord(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveDatastoreRecordRequest](../../Models/Operations/RemoveDatastoreRecordRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveDatastoreRecordResponse](../../Models/Operations/RemoveDatastoreRecordResponse.md)**

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

$response = $sdk->datastore->removeDatastoreTable(
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

## updateDatastoreDatabase

Updates the DatastoreDatabase identified by `id`. Provide the unified DatastoreDatabase fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDatastoreDatabase" method="put" path="/datastore/{connection_id}/database/{id}" example="datastore_database" -->
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

$request = new Operations\UpdateDatastoreDatabaseRequest(
    datastoreDatabase: new Shared\DatastoreDatabase(
        createdAt: Utils\Utils::parseDateTime('2019-03-05T14:31:00.223Z'),
        description: 'Coerceo amet vito vorago subseco natus tonsor eius.',
        id: '76509e52-7b7f-464d-9365-180c060626ee',
        isActive: true,
        metadata: [],
        name: 'Aufderhar - Wiza',
        password: 'hYwOHm0NLDvI_ch',
        region: 'Greece',
        updatedAt: Utils\Utils::parseDateTime('2023-07-21T18:57:49.342Z'),
        webUrl: 'https://dependable-government.org/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->updateDatastoreDatabase(
    request: $request
);

if ($response->datastoreDatabase !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateDatastoreDatabaseRequest](../../Models/Operations/UpdateDatastoreDatabaseRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateDatastoreDatabaseResponse](../../Models/Operations/UpdateDatastoreDatabaseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDatastoreRecord

Updates the DatastoreRecord identified by `id`. Provide the unified DatastoreRecord fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDatastoreRecord" method="put" path="/datastore/{connection_id}/record/{id}" example="datastore_record" -->
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

$request = new Operations\UpdateDatastoreRecordRequest(
    datastoreRecord: new Shared\DatastoreRecord(
        createdAt: Utils\Utils::parseDateTime('2022-07-10T04:42:03.076Z'),
        fields: [

        ],
        id: 'b6eb9b1b-90a6-4216-b76b-afce9003b46a',
        metadata: [],
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-03-28T01:35:10.568Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->updateDatastoreRecord(
    request: $request
);

if ($response->datastoreRecord !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateDatastoreRecordRequest](../../Models/Operations/UpdateDatastoreRecordRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateDatastoreRecordResponse](../../Models/Operations/UpdateDatastoreRecordResponse.md)**

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

$response = $sdk->datastore->updateDatastoreTable(
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