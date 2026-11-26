# Product

## Overview

### Available Operations

* [getPrintingProduct](#getprintingproduct) - Retrieve a product
* [listPrintingProducts](#listprintingproducts) - List all products

## getPrintingProduct

Retrieves a single PrintingProduct by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPrintingProduct" method="get" path="/printing/{connection_id}/product/{id}" -->
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

$request = new Operations\GetPrintingProductRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->product->getPrintingProduct(
    request: $request
);

if ($response->printingProduct !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetPrintingProductRequest](../../Models/Operations/GetPrintingProductRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetPrintingProductResponse](../../Models/Operations/GetPrintingProductResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPrintingProducts

Returns a list of PrintingProducts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPrintingProducts" method="get" path="/printing/{connection_id}/product" -->
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

$request = new Operations\ListPrintingProductsRequest(
    connectionId: '<id>',
);

$response = $sdk->product->listPrintingProducts(
    request: $request
);

if ($response->printingProducts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListPrintingProductsRequest](../../Models/Operations/ListPrintingProductsRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListPrintingProductsResponse](../../Models/Operations/ListPrintingProductsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |