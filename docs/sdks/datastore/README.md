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
        description: 'Substantia tantillus coniuratio repellat coerceo amet vito vorago.',
        id: '0b783bf7-8612-4a2e-806b-44070149db8e',
        isActive: true,
        metadata: [],
        name: 'Rau - O\'Reilly',
        password: 'iYLhYwOHm0NLDvI',
        region: 'France',
        updatedAt: Utils\Utils::parseDateTime('2023-07-03T15:25:16.326Z'),
        webUrl: 'https://optimal-signature.name',
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
        id: '1bcdecb2-1ec5-40f5-bfa9-62719a5836f4',
        metadata: [],
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-03-08T05:07:59.594Z'),
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
        description: 'Quasi adhuc paulatim ducimus carpo vomito magni tantum tubineus corona.',
        fields: [
            new Shared\DatastoreField(
                description: 'Antea soluta itaque clamo despecto basium accendo.',
                id: 'bf21de6d-71f3-412e-b712-694085e487bf',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: '8d83846b-4bd0-4c88-b1c7-2f99166c4887',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: '61b51bd1-fb74-4946-b5c0-ce47b07e365e',
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
                id: '9cea086f-3d8e-4ec6-9f91-05f85421ec41',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: '886e0c67-a935-4b4f-a0fd-cfccbc69a0c5',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: 'f3399b63-363d-4160-b71b-f9c46d5e2c57',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: 'f3399b63-363d-4160-b71b-f9c46d5e2c57',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-13T02:32:51.434Z'),
        webUrl: 'https://nervous-deck.com',
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
        description: 'Substantia tantillus coniuratio repellat coerceo amet vito vorago.',
        id: '0c222cf1-cd2a-4c59-aa7d-27aab76705ed',
        isActive: true,
        metadata: [],
        name: 'Rau - O\'Reilly',
        password: 'iYLhYwOHm0NLDvI',
        region: 'France',
        updatedAt: Utils\Utils::parseDateTime('2023-07-03T15:25:16.337Z'),
        webUrl: 'https://optimal-signature.name',
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
        id: '503a6bcc-a005-47a7-bf7f-e982c3e545ba',
        metadata: [],
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-03-08T05:07:59.605Z'),
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
        description: 'Quasi adhuc paulatim ducimus carpo vomito magni tantum tubineus corona.',
        fields: [
            new Shared\DatastoreField(
                description: 'Antea soluta itaque clamo despecto basium accendo.',
                id: 'dbf206a7-44a1-440c-9ae1-aa4e68823222',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: 'd7fa9938-694a-4aec-aa9e-726556a00e2c',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: 'cfb6e29a-bcd4-4bb3-b8fc-ffd5ef148d71',
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
                id: 'fbdba1e9-d07c-4b4c-808c-e771b45d161d',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: '9f47ad9a-83c6-4c95-9921-cebc0ed15c6f',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: 'b3416a03-20de-46b9-adfb-64f16549302f',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: 'b3416a03-20de-46b9-adfb-64f16549302f',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-13T02:32:51.435Z'),
        webUrl: 'https://nervous-deck.com',
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
        description: 'Substantia tantillus coniuratio repellat coerceo amet vito vorago.',
        id: '0c222cf1-cd2a-4c59-aa7d-27aab76705ed',
        isActive: true,
        metadata: [],
        name: 'Rau - O\'Reilly',
        password: 'iYLhYwOHm0NLDvI',
        region: 'France',
        updatedAt: Utils\Utils::parseDateTime('2023-07-03T15:25:16.337Z'),
        webUrl: 'https://optimal-signature.name',
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
        id: '503a6bcc-a005-47a7-bf7f-e982c3e545ba',
        metadata: [],
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-03-08T05:07:59.605Z'),
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
        description: 'Quasi adhuc paulatim ducimus carpo vomito magni tantum tubineus corona.',
        fields: [
            new Shared\DatastoreField(
                description: 'Antea soluta itaque clamo despecto basium accendo.',
                id: 'dbf206a7-44a1-440c-9ae1-aa4e68823222',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: 'd7fa9938-694a-4aec-aa9e-726556a00e2c',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: 'cfb6e29a-bcd4-4bb3-b8fc-ffd5ef148d71',
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
                id: 'fbdba1e9-d07c-4b4c-808c-e771b45d161d',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: '9f47ad9a-83c6-4c95-9921-cebc0ed15c6f',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: 'b3416a03-20de-46b9-adfb-64f16549302f',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: 'b3416a03-20de-46b9-adfb-64f16549302f',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-13T02:32:51.435Z'),
        webUrl: 'https://nervous-deck.com',
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