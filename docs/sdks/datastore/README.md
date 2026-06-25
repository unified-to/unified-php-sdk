# Datastore

## Overview

### Available Operations

* [createDatastoreDatabase2](#createdatastoredatabase2) - Create a database
* [createDatastoreQuery2](#createdatastorequery2) - Create a query
* [createDatastoreRecord2](#createdatastorerecord2) - Create a record
* [createDatastoreTable2](#createdatastoretable2) - Create a table
* [getDatastoreDatabase2](#getdatastoredatabase2) - Retrieve a database
* [getDatastoreRecord2](#getdatastorerecord2) - Retrieve a record
* [getDatastoreTable2](#getdatastoretable2) - Retrieve a table
* [listDatastoreDatabases2](#listdatastoredatabases2) - List all databases
* [listDatastoreRecords2](#listdatastorerecords2) - List all records
* [listDatastoreTables2](#listdatastoretables2) - List all tables
* [patchDatastoreDatabase2](#patchdatastoredatabase2) - Update a database
* [patchDatastoreRecord2](#patchdatastorerecord2) - Update a record
* [patchDatastoreTable2](#patchdatastoretable2) - Update a table
* [removeDatastoreDatabase2](#removedatastoredatabase2) - Remove a database
* [removeDatastoreRecord2](#removedatastorerecord2) - Remove a record
* [removeDatastoreTable2](#removedatastoretable2) - Remove a table
* [updateDatastoreDatabase2](#updatedatastoredatabase2) - Update a database
* [updateDatastoreRecord2](#updatedatastorerecord2) - Update a record
* [updateDatastoreTable2](#updatedatastoretable2) - Update a table

## createDatastoreDatabase2

Create a database

### Example Usage

<!-- UsageSnippet language="php" operationID="createDatastoreDatabase2" method="post" path="/datastore/{connection_id}/database" -->
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

$request = new Operations\CreateDatastoreDatabase2Request(
    datastoreDatabase: new Shared\DatastoreDatabase(),
    connectionId: '<id>',
);

$response = $sdk->datastore->createDatastoreDatabase2(
    request: $request
);

if ($response->datastoreDatabase !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateDatastoreDatabase2Request](../../Models/Operations/CreateDatastoreDatabase2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateDatastoreDatabase2Response](../../Models/Operations/CreateDatastoreDatabase2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDatastoreQuery2

Create a query

### Example Usage

<!-- UsageSnippet language="php" operationID="createDatastoreQuery2" method="post" path="/datastore/{connection_id}/query" -->
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

$request = new Operations\CreateDatastoreQuery2Request(
    datastoreQuery: new Shared\DatastoreQuery(),
    connectionId: '<id>',
);

$response = $sdk->datastore->createDatastoreQuery2(
    request: $request
);

if ($response->datastoreQuery !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateDatastoreQuery2Request](../../Models/Operations/CreateDatastoreQuery2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateDatastoreQuery2Response](../../Models/Operations/CreateDatastoreQuery2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDatastoreRecord2

Create a record

### Example Usage

<!-- UsageSnippet language="php" operationID="createDatastoreRecord2" method="post" path="/datastore/{connection_id}/record" -->
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

$request = new Operations\CreateDatastoreRecord2Request(
    datastoreRecord: new Shared\DatastoreRecord(
        fields: [
            'key' => new Shared\DatastoreFieldValue(),
        ],
    ),
    connectionId: '<id>',
);

$response = $sdk->datastore->createDatastoreRecord2(
    request: $request
);

if ($response->datastoreRecord !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateDatastoreRecord2Request](../../Models/Operations/CreateDatastoreRecord2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateDatastoreRecord2Response](../../Models/Operations/CreateDatastoreRecord2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createDatastoreTable2

Create a table

### Example Usage

<!-- UsageSnippet language="php" operationID="createDatastoreTable2" method="post" path="/datastore/{connection_id}/table" -->
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

$request = new Operations\CreateDatastoreTable2Request(
    datastoreTable: new Shared\DatastoreTable(),
    connectionId: '<id>',
);

$response = $sdk->datastore->createDatastoreTable2(
    request: $request
);

if ($response->datastoreTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateDatastoreTable2Request](../../Models/Operations/CreateDatastoreTable2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateDatastoreTable2Response](../../Models/Operations/CreateDatastoreTable2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDatastoreDatabase2

Retrieve a database

### Example Usage

<!-- UsageSnippet language="php" operationID="getDatastoreDatabase2" method="get" path="/datastore/{connection_id}/database/{id}" -->
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

$request = new Operations\GetDatastoreDatabase2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->getDatastoreDatabase2(
    request: $request
);

if ($response->datastoreDatabase !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetDatastoreDatabase2Request](../../Models/Operations/GetDatastoreDatabase2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetDatastoreDatabase2Response](../../Models/Operations/GetDatastoreDatabase2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDatastoreRecord2

Retrieve a record

### Example Usage

<!-- UsageSnippet language="php" operationID="getDatastoreRecord2" method="get" path="/datastore/{connection_id}/record/{id}" -->
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

$request = new Operations\GetDatastoreRecord2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->getDatastoreRecord2(
    request: $request
);

if ($response->datastoreRecord !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetDatastoreRecord2Request](../../Models/Operations/GetDatastoreRecord2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetDatastoreRecord2Response](../../Models/Operations/GetDatastoreRecord2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getDatastoreTable2

Retrieve a table

### Example Usage

<!-- UsageSnippet language="php" operationID="getDatastoreTable2" method="get" path="/datastore/{connection_id}/table/{id}" -->
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

$request = new Operations\GetDatastoreTable2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->getDatastoreTable2(
    request: $request
);

if ($response->datastoreTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetDatastoreTable2Request](../../Models/Operations/GetDatastoreTable2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetDatastoreTable2Response](../../Models/Operations/GetDatastoreTable2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDatastoreDatabases2

List all databases

### Example Usage

<!-- UsageSnippet language="php" operationID="listDatastoreDatabases2" method="get" path="/datastore/{connection_id}/database" -->
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

$request = new Operations\ListDatastoreDatabases2Request(
    connectionId: '<id>',
);

$response = $sdk->datastore->listDatastoreDatabases2(
    request: $request
);

if ($response->datastoreDatabases !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListDatastoreDatabases2Request](../../Models/Operations/ListDatastoreDatabases2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListDatastoreDatabases2Response](../../Models/Operations/ListDatastoreDatabases2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDatastoreRecords2

List all records

### Example Usage

<!-- UsageSnippet language="php" operationID="listDatastoreRecords2" method="get" path="/datastore/{connection_id}/record" -->
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

$request = new Operations\ListDatastoreRecords2Request(
    connectionId: '<id>',
);

$response = $sdk->datastore->listDatastoreRecords2(
    request: $request
);

if ($response->datastoreRecords !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListDatastoreRecords2Request](../../Models/Operations/ListDatastoreRecords2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListDatastoreRecords2Response](../../Models/Operations/ListDatastoreRecords2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listDatastoreTables2

List all tables

### Example Usage

<!-- UsageSnippet language="php" operationID="listDatastoreTables2" method="get" path="/datastore/{connection_id}/table" -->
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

$request = new Operations\ListDatastoreTables2Request(
    connectionId: '<id>',
);

$response = $sdk->datastore->listDatastoreTables2(
    request: $request
);

if ($response->datastoreTables !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListDatastoreTables2Request](../../Models/Operations/ListDatastoreTables2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListDatastoreTables2Response](../../Models/Operations/ListDatastoreTables2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDatastoreDatabase2

Update a database

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDatastoreDatabase2" method="patch" path="/datastore/{connection_id}/database/{id}" -->
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

$request = new Operations\PatchDatastoreDatabase2Request(
    datastoreDatabase: new Shared\DatastoreDatabase(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->patchDatastoreDatabase2(
    request: $request
);

if ($response->datastoreDatabase !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchDatastoreDatabase2Request](../../Models/Operations/PatchDatastoreDatabase2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchDatastoreDatabase2Response](../../Models/Operations/PatchDatastoreDatabase2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDatastoreRecord2

Update a record

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDatastoreRecord2" method="patch" path="/datastore/{connection_id}/record/{id}" -->
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

$request = new Operations\PatchDatastoreRecord2Request(
    datastoreRecord: new Shared\DatastoreRecord(
        fields: [
            'key' => new Shared\DatastoreFieldValue(),
        ],
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->patchDatastoreRecord2(
    request: $request
);

if ($response->datastoreRecord !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchDatastoreRecord2Request](../../Models/Operations/PatchDatastoreRecord2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchDatastoreRecord2Response](../../Models/Operations/PatchDatastoreRecord2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchDatastoreTable2

Update a table

### Example Usage

<!-- UsageSnippet language="php" operationID="patchDatastoreTable2" method="patch" path="/datastore/{connection_id}/table/{id}" -->
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

$request = new Operations\PatchDatastoreTable2Request(
    datastoreTable: new Shared\DatastoreTable(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->patchDatastoreTable2(
    request: $request
);

if ($response->datastoreTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchDatastoreTable2Request](../../Models/Operations/PatchDatastoreTable2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchDatastoreTable2Response](../../Models/Operations/PatchDatastoreTable2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeDatastoreDatabase2

Remove a database

### Example Usage

<!-- UsageSnippet language="php" operationID="removeDatastoreDatabase2" method="delete" path="/datastore/{connection_id}/database/{id}" -->
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

$request = new Operations\RemoveDatastoreDatabase2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->removeDatastoreDatabase2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveDatastoreDatabase2Request](../../Models/Operations/RemoveDatastoreDatabase2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveDatastoreDatabase2Response](../../Models/Operations/RemoveDatastoreDatabase2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeDatastoreRecord2

Remove a record

### Example Usage

<!-- UsageSnippet language="php" operationID="removeDatastoreRecord2" method="delete" path="/datastore/{connection_id}/record/{id}" -->
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

$request = new Operations\RemoveDatastoreRecord2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->removeDatastoreRecord2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveDatastoreRecord2Request](../../Models/Operations/RemoveDatastoreRecord2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveDatastoreRecord2Response](../../Models/Operations/RemoveDatastoreRecord2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeDatastoreTable2

Remove a table

### Example Usage

<!-- UsageSnippet language="php" operationID="removeDatastoreTable2" method="delete" path="/datastore/{connection_id}/table/{id}" -->
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

$request = new Operations\RemoveDatastoreTable2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->removeDatastoreTable2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveDatastoreTable2Request](../../Models/Operations/RemoveDatastoreTable2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveDatastoreTable2Response](../../Models/Operations/RemoveDatastoreTable2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDatastoreDatabase2

Update a database

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDatastoreDatabase2" method="put" path="/datastore/{connection_id}/database/{id}" -->
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

$request = new Operations\UpdateDatastoreDatabase2Request(
    datastoreDatabase: new Shared\DatastoreDatabase(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->updateDatastoreDatabase2(
    request: $request
);

if ($response->datastoreDatabase !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateDatastoreDatabase2Request](../../Models/Operations/UpdateDatastoreDatabase2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateDatastoreDatabase2Response](../../Models/Operations/UpdateDatastoreDatabase2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDatastoreRecord2

Update a record

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDatastoreRecord2" method="put" path="/datastore/{connection_id}/record/{id}" -->
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

$request = new Operations\UpdateDatastoreRecord2Request(
    datastoreRecord: new Shared\DatastoreRecord(
        fields: [

        ],
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->updateDatastoreRecord2(
    request: $request
);

if ($response->datastoreRecord !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateDatastoreRecord2Request](../../Models/Operations/UpdateDatastoreRecord2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateDatastoreRecord2Response](../../Models/Operations/UpdateDatastoreRecord2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateDatastoreTable2

Update a table

### Example Usage

<!-- UsageSnippet language="php" operationID="updateDatastoreTable2" method="put" path="/datastore/{connection_id}/table/{id}" -->
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

$request = new Operations\UpdateDatastoreTable2Request(
    datastoreTable: new Shared\DatastoreTable(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->datastore->updateDatastoreTable2(
    request: $request
);

if ($response->datastoreTable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateDatastoreTable2Request](../../Models/Operations/UpdateDatastoreTable2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateDatastoreTable2Response](../../Models/Operations/UpdateDatastoreTable2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |