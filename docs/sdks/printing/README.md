# Printing

## Overview

### Available Operations

* [createPrintingFile](#createprintingfile) - Create a file
* [createPrintingOrder](#createprintingorder) - Create an order
* [createPrintingQuote](#createprintingquote) - Create a quote
* [getPrintingFile](#getprintingfile) - Retrieve a file
* [getPrintingOrder](#getprintingorder) - Retrieve an order
* [getPrintingProduct](#getprintingproduct) - Retrieve a product
* [getPrintingTemplate](#getprintingtemplate) - Retrieve a template
* [listPrintingFiles](#listprintingfiles) - List all files
* [listPrintingOrders](#listprintingorders) - List all orders
* [listPrintingProducts](#listprintingproducts) - List all products
* [listPrintingTemplates](#listprintingtemplates) - List all templates
* [patchPrintingOrder](#patchprintingorder) - Update an order
* [removePrintingOrder](#removeprintingorder) - Remove an order
* [updatePrintingOrder](#updateprintingorder) - Update an order

## createPrintingFile

Creates a PrintingFile. Provide the unified PrintingFile fields in the request body; they are mapped to the provider's API. Returns the created PrintingFile.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPrintingFile" method="post" path="/printing/{connection_id}/file" example="printing_file" -->
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

$request = new Operations\CreatePrintingFileRequest(
    printingFile: new Shared\PrintingFile(
        createdAt: Utils\Utils::parseDateTime('2020-10-22T04:25:39.825Z'),
        dpi: 300,
        height: 5400,
        id: '1cab15aa-26a4-475e-b184-fc2943d3916b',
        metadata: [],
        mimeType: 'image/jpeg',
        name: 'blond-ecliptic.jpg',
        previewUrl: 'https://picsum.photos/seed/aATvhmNA/400/400',
        size: 1956654,
        status: Shared\PrintingFileStatus::Ready,
        updatedAt: Utils\Utils::parseDateTime('2020-10-22T04:25:39.825Z'),
        url: 'https://picsum.photos/seed/XBj97B/2783/172',
        width: 4500,
    ),
    connectionId: '<id>',
);

$response = $sdk->printing->createPrintingFile(
    request: $request
);

if ($response->printingFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreatePrintingFileRequest](../../Models/Operations/CreatePrintingFileRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreatePrintingFileResponse](../../Models/Operations/CreatePrintingFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPrintingOrder

Creates a PrintingOrder. Provide the unified PrintingOrder fields in the request body; they are mapped to the provider's API. Returns the created PrintingOrder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPrintingOrder" method="post" path="/printing/{connection_id}/order" example="printing_order" -->
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

$request = new Operations\CreatePrintingOrderRequest(
    printingOrder: new Shared\PrintingOrder(
        createdAt: Utils\Utils::parseDateTime('2022-03-14T11:16:15.147Z'),
        currency: 'USD',
        discountAmount: 0,
        id: '5587f528-8341-4cc2-8f36-7c92c965da80',
        lineitems: [
            new Shared\PrintingLineitem(
                files: [
                    new Shared\PrintingLineitemFile(
                        placement: 'default',
                        url: 'https://picsum.photos/seed/y54e6o9hYi/191/3357',
                    ),
                ],
                id: '1',
                name: 'Bespoke Marble Chair',
                quantity: 2,
                retailPriceAmount: 54.89,
                sku: 'IBDIE3XR',
                unitPriceAmount: 26.37,
            ),
            new Shared\PrintingLineitem(
                files: [
                    new Shared\PrintingLineitemFile(
                        placement: 'default',
                        url: 'https://picsum.photos/seed/T7S5xf/3521/1221',
                    ),
                ],
                id: '2',
                name: 'Electronic Cotton Hat',
                quantity: 1,
                retailPriceAmount: 23.94,
                unitPriceAmount: 10.04,
            ),
        ],
        metadata: [],
        shipments: [],
        shippingAddress: new Shared\PropertyPrintingOrderShippingAddress(
            address1: '651 Main Street',
            city: 'Euclid',
            country: 'United States',
            countryCode: 'US',
            email: 'gary_leffler28@gmail.com',
            name: 'Angelita Denesik',
            postalCode: '80301',
            region: 'Colorado',
            regionCode: 'AR',
            telephone: '808-831-6489 x62979',
        ),
        shippingAmount: 4.69,
        shippingMethod: 'STANDARD',
        status: Shared\PrintingOrderStatus::Other,
        subtotalAmount: 62.78,
        taxAmount: 5.02,
        totalAmount: 72.49,
        updatedAt: Utils\Utils::parseDateTime('2025-01-23T00:26:35.696Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->printing->createPrintingOrder(
    request: $request
);

if ($response->printingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreatePrintingOrderRequest](../../Models/Operations/CreatePrintingOrderRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreatePrintingOrderResponse](../../Models/Operations/CreatePrintingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPrintingQuote

Creates a PrintingQuote. Provide the unified PrintingQuote fields in the request body; they are mapped to the provider's API. Returns the created PrintingQuote.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPrintingQuote" method="post" path="/printing/{connection_id}/quote" example="printing_quote" -->
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

$request = new Operations\CreatePrintingQuoteRequest(
    printingQuote: new Shared\PrintingQuote(
        createdAt: Utils\Utils::parseDateTime('2019-01-02T03:42:06.944Z'),
        currency: 'USD',
        discountAmount: 0,
        id: 'df356fdf-c68c-414b-a4ba-fdeb804f46a2',
        lineitems: [
            new Shared\PrintingLineitem(
                files: [
                    new Shared\PrintingLineitemFile(
                        placement: 'default',
                        url: 'https://picsum.photos/seed/0Y5Bjnoiwx/3057/3113',
                    ),
                ],
                id: '1',
                name: 'Practical Wooden Salad',
                quantity: 2,
                retailPriceAmount: 50.83,
                unitPriceAmount: 21.72,
            ),
            new Shared\PrintingLineitem(
                files: [
                    new Shared\PrintingLineitemFile(
                        placement: 'default',
                        url: 'https://picsum.photos/seed/rcPUF/2295/1801',
                    ),
                ],
                id: '2',
                name: 'Handmade Gold Car',
                quantity: 4,
                retailPriceAmount: 35.47,
                sku: 'I79GIBCK',
                unitPriceAmount: 17.64,
            ),
        ],
        metadata: [],
        shippingAddress: new Shared\PropertyPrintingQuoteShippingAddress(
            address1: '4290 Garden Street',
            address2: 'Suite 874',
            city: 'Cartwrightshire',
            companyName: 'Kris and Sons',
            country: 'United States',
            countryCode: 'US',
            email: 'jada73@hotmail.com',
            name: 'Heaven Crist',
            postalCode: '92871',
            region: 'North Carolina',
            regionCode: 'KY',
            telephone: '653.412.8900 x9387',
        ),
        shippingAmount: 4.69,
        shippingMethod: 'STANDARD',
        shippingOptions: [
            new Shared\PrintingShippingoption(
                amount: 4.69,
                code: 'STANDARD',
                currency: 'USD',
                maxDeliveryDays: 5,
                minDeliveryDays: 3,
                name: 'Flat Rate (3-5 business days after fulfillment)',
            ),
            new Shared\PrintingShippingoption(
                amount: 12.99,
                code: 'EXPRESS',
                currency: 'USD',
                maxDeliveryDays: 3,
                minDeliveryDays: 1,
                name: 'Express (1-3 business days after fulfillment)',
            ),
        ],
        subtotalAmount: 114,
        taxAmount: 9.12,
        totalAmount: 127.81,
        updatedAt: Utils\Utils::parseDateTime('2019-01-02T03:42:06.944Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->printing->createPrintingQuote(
    request: $request
);

if ($response->printingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\CreatePrintingQuoteRequest](../../Models/Operations/CreatePrintingQuoteRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\CreatePrintingQuoteResponse](../../Models/Operations/CreatePrintingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPrintingFile

Retrieves a single PrintingFile by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPrintingFile" method="get" path="/printing/{connection_id}/file/{id}" -->
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

$request = new Operations\GetPrintingFileRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->printing->getPrintingFile(
    request: $request
);

if ($response->printingFile !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetPrintingFileRequest](../../Models/Operations/GetPrintingFileRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetPrintingFileResponse](../../Models/Operations/GetPrintingFileResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPrintingOrder

Retrieves a single PrintingOrder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPrintingOrder" method="get" path="/printing/{connection_id}/order/{id}" -->
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

$request = new Operations\GetPrintingOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->printing->getPrintingOrder(
    request: $request
);

if ($response->printingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetPrintingOrderRequest](../../Models/Operations/GetPrintingOrderRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetPrintingOrderResponse](../../Models/Operations/GetPrintingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->printing->getPrintingProduct(
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

## getPrintingTemplate

Retrieves a single PrintingTemplate by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPrintingTemplate" method="get" path="/printing/{connection_id}/template/{id}" -->
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

$request = new Operations\GetPrintingTemplateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->printing->getPrintingTemplate(
    request: $request
);

if ($response->printingTemplate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetPrintingTemplateRequest](../../Models/Operations/GetPrintingTemplateRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetPrintingTemplateResponse](../../Models/Operations/GetPrintingTemplateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPrintingFiles

Returns a list of PrintingFiles. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPrintingFiles" method="get" path="/printing/{connection_id}/file" -->
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

$request = new Operations\ListPrintingFilesRequest(
    connectionId: '<id>',
);

$response = $sdk->printing->listPrintingFiles(
    request: $request
);

if ($response->printingFiles !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListPrintingFilesRequest](../../Models/Operations/ListPrintingFilesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListPrintingFilesResponse](../../Models/Operations/ListPrintingFilesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPrintingOrders

Returns a list of PrintingOrders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPrintingOrders" method="get" path="/printing/{connection_id}/order" -->
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

$request = new Operations\ListPrintingOrdersRequest(
    connectionId: '<id>',
);

$response = $sdk->printing->listPrintingOrders(
    request: $request
);

if ($response->printingOrders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListPrintingOrdersRequest](../../Models/Operations/ListPrintingOrdersRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListPrintingOrdersResponse](../../Models/Operations/ListPrintingOrdersResponse.md)**

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

$response = $sdk->printing->listPrintingProducts(
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

## listPrintingTemplates

Returns a list of PrintingTemplates. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPrintingTemplates" method="get" path="/printing/{connection_id}/template" -->
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

$request = new Operations\ListPrintingTemplatesRequest(
    connectionId: '<id>',
);

$response = $sdk->printing->listPrintingTemplates(
    request: $request
);

if ($response->printingTemplates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListPrintingTemplatesRequest](../../Models/Operations/ListPrintingTemplatesRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListPrintingTemplatesResponse](../../Models/Operations/ListPrintingTemplatesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPrintingOrder

Updates the PrintingOrder identified by `id`. Provide the unified PrintingOrder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPrintingOrder" method="patch" path="/printing/{connection_id}/order/{id}" example="printing_order" -->
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

$request = new Operations\PatchPrintingOrderRequest(
    printingOrder: new Shared\PrintingOrder(
        createdAt: Utils\Utils::parseDateTime('2022-03-14T11:16:15.147Z'),
        currency: 'USD',
        discountAmount: 0,
        id: '6bc75b89-da1d-46ba-9591-65699db98394',
        lineitems: [
            new Shared\PrintingLineitem(
                files: [
                    new Shared\PrintingLineitemFile(
                        placement: 'default',
                        url: 'https://picsum.photos/seed/y54e6o9hYi/191/3357',
                    ),
                ],
                id: '1',
                name: 'Bespoke Marble Chair',
                quantity: 2,
                retailPriceAmount: 54.89,
                sku: 'IBDIE3XR',
                unitPriceAmount: 26.37,
            ),
            new Shared\PrintingLineitem(
                files: [
                    new Shared\PrintingLineitemFile(
                        placement: 'default',
                        url: 'https://picsum.photos/seed/T7S5xf/3521/1221',
                    ),
                ],
                id: '2',
                name: 'Electronic Cotton Hat',
                quantity: 1,
                retailPriceAmount: 23.94,
                unitPriceAmount: 10.04,
            ),
        ],
        metadata: [],
        shipments: [],
        shippingAddress: new Shared\PropertyPrintingOrderShippingAddress(
            address1: '651 Main Street',
            city: 'Euclid',
            country: 'United States',
            countryCode: 'US',
            email: 'gary_leffler28@gmail.com',
            name: 'Angelita Denesik',
            postalCode: '80301',
            region: 'Colorado',
            regionCode: 'AR',
            telephone: '808-831-6489 x62979',
        ),
        shippingAmount: 4.69,
        shippingMethod: 'STANDARD',
        status: Shared\PrintingOrderStatus::Other,
        subtotalAmount: 62.78,
        taxAmount: 5.02,
        totalAmount: 72.49,
        updatedAt: Utils\Utils::parseDateTime('2025-01-23T00:26:35.718Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->printing->patchPrintingOrder(
    request: $request
);

if ($response->printingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\PatchPrintingOrderRequest](../../Models/Operations/PatchPrintingOrderRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\PatchPrintingOrderResponse](../../Models/Operations/PatchPrintingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePrintingOrder

Deletes the PrintingOrder identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removePrintingOrder" method="delete" path="/printing/{connection_id}/order/{id}" -->
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

$request = new Operations\RemovePrintingOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->printing->removePrintingOrder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\RemovePrintingOrderRequest](../../Models/Operations/RemovePrintingOrderRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\RemovePrintingOrderResponse](../../Models/Operations/RemovePrintingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePrintingOrder

Updates the PrintingOrder identified by `id`. Provide the unified PrintingOrder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePrintingOrder" method="put" path="/printing/{connection_id}/order/{id}" example="printing_order" -->
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

$request = new Operations\UpdatePrintingOrderRequest(
    printingOrder: new Shared\PrintingOrder(
        createdAt: Utils\Utils::parseDateTime('2022-03-14T11:16:15.147Z'),
        currency: 'USD',
        discountAmount: 0,
        id: '6bc75b89-da1d-46ba-9591-65699db98394',
        lineitems: [
            new Shared\PrintingLineitem(
                files: [
                    new Shared\PrintingLineitemFile(
                        placement: 'default',
                        url: 'https://picsum.photos/seed/y54e6o9hYi/191/3357',
                    ),
                ],
                id: '1',
                name: 'Bespoke Marble Chair',
                quantity: 2,
                retailPriceAmount: 54.89,
                sku: 'IBDIE3XR',
                unitPriceAmount: 26.37,
            ),
            new Shared\PrintingLineitem(
                files: [
                    new Shared\PrintingLineitemFile(
                        placement: 'default',
                        url: 'https://picsum.photos/seed/T7S5xf/3521/1221',
                    ),
                ],
                id: '2',
                name: 'Electronic Cotton Hat',
                quantity: 1,
                retailPriceAmount: 23.94,
                unitPriceAmount: 10.04,
            ),
        ],
        metadata: [],
        shipments: [],
        shippingAddress: new Shared\PropertyPrintingOrderShippingAddress(
            address1: '651 Main Street',
            city: 'Euclid',
            country: 'United States',
            countryCode: 'US',
            email: 'gary_leffler28@gmail.com',
            name: 'Angelita Denesik',
            postalCode: '80301',
            region: 'Colorado',
            regionCode: 'AR',
            telephone: '808-831-6489 x62979',
        ),
        shippingAmount: 4.69,
        shippingMethod: 'STANDARD',
        status: Shared\PrintingOrderStatus::Other,
        subtotalAmount: 62.78,
        taxAmount: 5.02,
        totalAmount: 72.49,
        updatedAt: Utils\Utils::parseDateTime('2025-01-23T00:26:35.718Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->printing->updatePrintingOrder(
    request: $request
);

if ($response->printingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\UpdatePrintingOrderRequest](../../Models/Operations/UpdatePrintingOrderRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\UpdatePrintingOrderResponse](../../Models/Operations/UpdatePrintingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |