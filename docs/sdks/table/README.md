# Table

## Overview

### Available Operations

* [createDatastoreTable2](#createdatastoretable2) - Create a table
* [getDatastoreTable2](#getdatastoretable2) - Retrieve a table
* [listDatastoreTables2](#listdatastoretables2) - List all tables
* [patchDatastoreTable2](#patchdatastoretable2) - Update a table
* [removeDatastoreTable2](#removedatastoretable2) - Remove a table
* [updateDatastoreTable2](#updatedatastoretable2) - Update a table

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

$response = $sdk->table->createDatastoreTable2(
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

$response = $sdk->table->getDatastoreTable2(
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

$response = $sdk->table->listDatastoreTables2(
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

$response = $sdk->table->patchDatastoreTable2(
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

$response = $sdk->table->removeDatastoreTable2(
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

$response = $sdk->table->updateDatastoreTable2(
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