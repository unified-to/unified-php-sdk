# Call

## Overview

### Available Operations

* [getUcCall2](#getuccall2) - Retrieve a call
* [listUcCalls2](#listuccalls2) - List all calls

## getUcCall2

Retrieve a call

### Example Usage

<!-- UsageSnippet language="php" operationID="getUcCall2" method="get" path="/uc/{connection_id}/call/{id}" -->
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

$request = new Operations\GetUcCall2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->call->getUcCall2(
    request: $request
);

if ($response->ucCall !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetUcCall2Request](../../Models/Operations/GetUcCall2Request.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetUcCall2Response](../../Models/Operations/GetUcCall2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listUcCalls2

List all calls

### Example Usage

<!-- UsageSnippet language="php" operationID="listUcCalls2" method="get" path="/uc/{connection_id}/call" -->
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

$request = new Operations\ListUcCalls2Request(
    connectionId: '<id>',
);

$response = $sdk->call->listUcCalls2(
    request: $request
);

if ($response->ucCalls !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListUcCalls2Request](../../Models/Operations/ListUcCalls2Request.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListUcCalls2Response](../../Models/Operations/ListUcCalls2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |