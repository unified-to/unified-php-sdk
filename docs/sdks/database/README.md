# Database

## Overview

### Available Operations

* [createDatastoreDatabase2](#createdatastoredatabase2) - Create a database
* [getDatastoreDatabase2](#getdatastoredatabase2) - Retrieve a database
* [listDatastoreDatabases2](#listdatastoredatabases2) - List all databases
* [patchDatastoreDatabase2](#patchdatastoredatabase2) - Update a database
* [removeDatastoreDatabase2](#removedatastoredatabase2) - Remove a database
* [updateDatastoreDatabase2](#updatedatastoredatabase2) - Update a database

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

$response = $sdk->database->createDatastoreDatabase2(
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

$response = $sdk->database->getDatastoreDatabase2(
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

$response = $sdk->database->listDatastoreDatabases2(
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

$response = $sdk->database->patchDatastoreDatabase2(
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

$response = $sdk->database->removeDatastoreDatabase2(
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

$response = $sdk->database->updateDatastoreDatabase2(
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