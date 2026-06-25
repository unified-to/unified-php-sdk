# Availability

## Overview

### Available Operations

* [listCommerceAvailabilities2](#listcommerceavailabilities2) - List all availabilities

## listCommerceAvailabilities2

List all availabilities

### Example Usage

<!-- UsageSnippet language="php" operationID="listCommerceAvailabilities2" method="get" path="/commerce/{connection_id}/availability" -->
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

$request = new Operations\ListCommerceAvailabilities2Request(
    connectionId: '<id>',
);

$response = $sdk->availability->listCommerceAvailabilities2(
    request: $request
);

if ($response->commerceAvailabilities !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListCommerceAvailabilities2Request](../../Models/Operations/ListCommerceAvailabilities2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListCommerceAvailabilities2Response](../../Models/Operations/ListCommerceAvailabilities2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |