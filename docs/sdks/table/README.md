# Table

## Overview

### Available Operations

* [createDatastoreTable](#createdatastoretable) - Create a table
* [getDatastoreTable](#getdatastoretable) - Retrieve a table
* [listDatastoreTables](#listdatastoretables) - List all tables
* [patchDatastoreTable](#patchdatastoretable) - Update a table
* [removeDatastoreTable](#removedatastoretable) - Remove a table
* [updateDatastoreTable](#updatedatastoretable) - Update a table

## createDatastoreTable

Create a table

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
                id: '86af5d8a-9bc3-4622-9043-06b22c492781',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: '66b24e18-9a99-486d-9fbd-274d31b73562',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: '922f5261-d74c-446a-9555-1717f5d48636',
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
                id: 'ac6d054e-98d1-4aa4-b4f2-bd7361e1da12',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: 'd501909a-8d99-4b02-b41d-10d18d3bbb77',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: '3336104a-126d-4ec6-be44-09a831682287',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: '3336104a-126d-4ec6-be44-09a831682287',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-12T18:56:36.017Z'),
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

## getDatastoreTable

Retrieve a table

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

## listDatastoreTables

List all tables

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

Update a table

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
                id: '40ef74d0-98f8-4c9f-abf3-0ada79ba5cf4',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: 'dd088321-9be6-407f-b487-f83b8e925429',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: 'da2104b5-dbbf-4b58-81a5-616a98bdc52a',
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
                id: '087ccdee-c730-49fd-ad11-413aee8a7f3a',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: '600da4d3-4370-460a-968f-a4e5989bd5d2',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: '7e391883-2378-4fd8-956a-7d3e521b47ad',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: '7e391883-2378-4fd8-956a-7d3e521b47ad',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-12T18:56:36.019Z'),
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

Remove a table

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

Update a table

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
                id: '40ef74d0-98f8-4c9f-abf3-0ada79ba5cf4',
                isIndexed: true,
                isUnique: true,
                name: 'Ferry LLC',
                originalType: 'conservo',
                scale: 64,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Nulla cattus aequus sumo neque alter cauda subseco.',
                id: 'dd088321-9be6-407f-b487-f83b8e925429',
                isNullable: true,
                isUnique: true,
                name: 'Hand - Nader',
                originalType: 'conservo',
                precision: 57,
                type: Shared\DatastoreFieldType::SingleSelect,
            ),
            new Shared\DatastoreField(
                description: 'Utilis callide adhuc verumtamen doloremque ceno sui sint.',
                id: 'da2104b5-dbbf-4b58-81a5-616a98bdc52a',
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
                id: '087ccdee-c730-49fd-ad11-413aee8a7f3a',
                name: 'Gislason, Gorczany and Hegmann',
                originalType: 'tego',
                precision: 94,
                scale: 24,
                type: Shared\DatastoreFieldType::Relation,
            ),
            new Shared\DatastoreField(
                description: 'Communis coma cura audio aduro acer canis expedita.',
                id: '600da4d3-4370-460a-968f-a4e5989bd5d2',
                isIndexed: true,
                isPrimaryKey: true,
                isRequired: true,
                name: 'Graham, Steuber and Kshlerin',
                originalType: 'defessus',
                scale: 68,
                type: Shared\DatastoreFieldType::Email,
            ),
        ],
        id: '7e391883-2378-4fd8-956a-7d3e521b47ad',
        metadata: [],
        name: 'Rogahn, Lowe and Heller',
        relationships: [
            new Shared\DatastoreRelationship(
                field: 'Macejkovic - Shields',
                name: 'Hyatt, Ryan and Nienow',
                tableId: '7e391883-2378-4fd8-956a-7d3e521b47ad',
                type: Shared\DatastoreRelationshipType::Many,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2022-08-12T18:56:36.019Z'),
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