# Query

## Overview

### Available Operations

* [createDatastoreQuery2](#createdatastorequery2) - Create a query

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

$response = $sdk->query->createDatastoreQuery2(
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