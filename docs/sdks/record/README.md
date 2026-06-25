# Record

## Overview

### Available Operations

* [createDatastoreRecord2](#createdatastorerecord2) - Create a record
* [getDatastoreRecord2](#getdatastorerecord2) - Retrieve a record
* [listDatastoreRecords2](#listdatastorerecords2) - List all records
* [patchDatastoreRecord2](#patchdatastorerecord2) - Update a record
* [removeDatastoreRecord2](#removedatastorerecord2) - Remove a record
* [updateDatastoreRecord2](#updatedatastorerecord2) - Update a record

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

$response = $sdk->record->createDatastoreRecord2(
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

$response = $sdk->record->getDatastoreRecord2(
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

$response = $sdk->record->listDatastoreRecords2(
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

$response = $sdk->record->patchDatastoreRecord2(
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

$response = $sdk->record->removeDatastoreRecord2(
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

$response = $sdk->record->updateDatastoreRecord2(
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