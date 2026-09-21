# Record

## Overview

### Available Operations

* [createDatastoreRecord](#createdatastorerecord) - Create a record
* [getDatastoreRecord](#getdatastorerecord) - Retrieve a record
* [listDatastoreRecords](#listdatastorerecords) - List all records
* [patchDatastoreRecord](#patchdatastorerecord) - Update a record
* [removeDatastoreRecord](#removedatastorerecord) - Remove a record
* [updateDatastoreRecord](#updatedatastorerecord) - Update a record

## createDatastoreRecord

Create a record

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
        id: '0a58e294-dd3f-4f48-8cba-415f3bb2e8cf',
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-02-14T10:00:09.045Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->record->createDatastoreRecord(
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

## getDatastoreRecord

Retrieve a record

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

$response = $sdk->record->getDatastoreRecord(
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

## listDatastoreRecords

List all records

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

$response = $sdk->record->listDatastoreRecords(
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

## patchDatastoreRecord

Update a record

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
        id: '3eac727b-26ba-44e6-9f0c-6e4b03dd93eb',
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-02-14T10:00:09.052Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->record->patchDatastoreRecord(
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

## removeDatastoreRecord

Remove a record

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

$response = $sdk->record->removeDatastoreRecord(
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

## updateDatastoreRecord

Update a record

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
        id: '3eac727b-26ba-44e6-9f0c-6e4b03dd93eb',
        rowNumber: 33,
        updatedAt: Utils\Utils::parseDateTime('2025-02-14T10:00:09.052Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->record->updateDatastoreRecord(
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