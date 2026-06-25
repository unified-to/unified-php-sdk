# Change

## Overview

### Available Operations

* [getTaskChange2](#gettaskchange2) - Retrieve a change
* [listTaskChanges2](#listtaskchanges2) - List all changes

## getTaskChange2

Retrieve a change

### Example Usage

<!-- UsageSnippet language="php" operationID="getTaskChange2" method="get" path="/task/{connection_id}/change/{id}" -->
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

$request = new Operations\GetTaskChange2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->change->getTaskChange2(
    request: $request
);

if ($response->taskChange !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetTaskChange2Request](../../Models/Operations/GetTaskChange2Request.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetTaskChange2Response](../../Models/Operations/GetTaskChange2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listTaskChanges2

List all changes

### Example Usage

<!-- UsageSnippet language="php" operationID="listTaskChanges2" method="get" path="/task/{connection_id}/change" -->
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

$request = new Operations\ListTaskChanges2Request(
    connectionId: '<id>',
);

$response = $sdk->change->listTaskChanges2(
    request: $request
);

if ($response->taskChanges !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListTaskChanges2Request](../../Models/Operations/ListTaskChanges2Request.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListTaskChanges2Response](../../Models/Operations/ListTaskChanges2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |