# Paycode

## Overview

### Available Operations

* [getHrisPaycode](#gethrispaycode) - Retrieve a paycode
* [listHrisPaycodes](#listhrispaycodes) - List all paycodes

## getHrisPaycode

Retrieve a paycode

### Example Usage

<!-- UsageSnippet language="php" operationID="getHrisPaycode" method="get" path="/hris/{connection_id}/paycode/{id}" -->
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

$request = new Operations\GetHrisPaycodeRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->paycode->getHrisPaycode(
    request: $request
);

if ($response->hrisPaycode !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetHrisPaycodeRequest](../../Models/Operations/GetHrisPaycodeRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetHrisPaycodeResponse](../../Models/Operations/GetHrisPaycodeResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listHrisPaycodes

List all paycodes

### Example Usage

<!-- UsageSnippet language="php" operationID="listHrisPaycodes" method="get" path="/hris/{connection_id}/paycode" -->
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

$request = new Operations\ListHrisPaycodesRequest(
    connectionId: '<id>',
);

$response = $sdk->paycode->listHrisPaycodes(
    request: $request
);

if ($response->hrisPaycodes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListHrisPaycodesRequest](../../Models/Operations/ListHrisPaycodesRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListHrisPaycodesResponse](../../Models/Operations/ListHrisPaycodesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |