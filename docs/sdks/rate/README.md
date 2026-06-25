# Rate

## Overview

### Available Operations

* [createShippingRate2](#createshippingrate2) - Create a rate

## createShippingRate2

Create a rate

### Example Usage

<!-- UsageSnippet language="php" operationID="createShippingRate2" method="post" path="/shipping/{connection_id}/rate" -->
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

$request = new Operations\CreateShippingRate2Request(
    shippingRate: new Shared\ShippingRate(),
    connectionId: '<id>',
);

$response = $sdk->rate->createShippingRate2(
    request: $request
);

if ($response->shippingRate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreateShippingRate2Request](../../Models/Operations/CreateShippingRate2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreateShippingRate2Response](../../Models/Operations/CreateShippingRate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |