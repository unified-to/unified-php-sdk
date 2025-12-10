# Timeoff

## Overview

### Available Operations

* [getHrisTimeoff](#gethristimeoff) - Retrieve a timeoff
* [listHrisTimeoffs](#listhristimeoffs) - List all timeoffs

## getHrisTimeoff

Retrieve a timeoff

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisTimeoff" method="get" path="/hris/{connection_id}/timeoff/{id}" -->
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

$request = new Operations\GetHrisTimeoffRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->timeoff->getHrisTimeoff(
    request: $request
);

if ($response->hrisTimeoff !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisTimeoffRequest](../../Models/Operations/GetHrisTimeoffRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisTimeoffResponse](../../Models/Operations/GetHrisTimeoffResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisTimeoffs

List all timeoffs

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisTimeoffs" method="get" path="/hris/{connection_id}/timeoff" -->
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

$request = new Operations\ListHrisTimeoffsRequest(
    connectionId: '<id>',
);

$response = $sdk->timeoff->listHrisTimeoffs(
    request: $request
);

if ($response->hrisTimeoffs !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisTimeoffsRequest](../../Models/Operations/ListHrisTimeoffsRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisTimeoffsResponse](../../Models/Operations/ListHrisTimeoffsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |