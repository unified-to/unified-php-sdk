# Order

## Overview

### Available Operations

* [~~createAccountingOrder~~](#createaccountingorder) - Create an order :warning: **Deprecated**
* [createAssessmentOrder](#createassessmentorder) - Create an order
* [createPrintingOrder](#createprintingorder) - Create an order
* [~~getAccountingOrder~~](#getaccountingorder) - Retrieve an order :warning: **Deprecated**
* [getAssessmentOrder](#getassessmentorder) - Retrieve an order
* [getPrintingOrder](#getprintingorder) - Retrieve an order
* [~~listAccountingOrders~~](#listaccountingorders) - List all orders :warning: **Deprecated**
* [listPrintingOrders](#listprintingorders) - List all orders
* [~~patchAccountingOrder~~](#patchaccountingorder) - Update an order :warning: **Deprecated**
* [patchAssessmentOrder](#patchassessmentorder) - Update an order
* [patchPrintingOrder](#patchprintingorder) - Update an order
* [~~removeAccountingOrder~~](#removeaccountingorder) - Remove an order :warning: **Deprecated**
* [removePrintingOrder](#removeprintingorder) - Remove an order
* [~~updateAccountingOrder~~](#updateaccountingorder) - Update an order :warning: **Deprecated**
* [updateAssessmentOrder](#updateassessmentorder) - Update an order
* [updatePrintingOrder](#updateprintingorder) - Update an order

## ~~createAccountingOrder~~

Creates a AccountingOrder. Provide the unified AccountingOrder fields in the request body; they are mapped to the provider's API. Returns the created AccountingOrder.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingOrder" method="post" path="/accounting/{connection_id}/order" example="accounting_order" -->
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

$request = new Operations\CreateAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '125 Hayden Highway',
            city: 'Altoona',
            countryCode: 'US',
            postalCode: '94706-7691',
            region: 'Louisiana',
            regionCode: 'VT',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: '78f15937-e064-4b3e-a7e8-0b1eb55dd4aa',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '450 Garett Mall',
            city: 'New Kamronburgh',
            countryCode: 'US',
            postalCode: '76546',
            region: 'Oregon',
            regionCode: 'VA',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-16T03:14:05.854Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->order->createAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAccountingOrderRequest](../../Models/Operations/CreateAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAccountingOrderResponse](../../Models/Operations/CreateAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAssessmentOrder

Creates a AssessmentOrder. Provide the unified AssessmentOrder fields in the request body; they are mapped to the provider's API. Returns the created AssessmentOrder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAssessmentOrder" method="post" path="/assessment/{connection_id}/order" example="assessment_order" -->
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

$request = new Operations\CreateAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '1f3c47cf-040b-4aea-9204-1cba751bc185',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'jordan.braun@icloud.com',
        ],
        profileFirstName: 'Jordan',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Braun',
        profileName: 'Jordan Braun',
        profileResumeUrl: 'https://astonishing-bug.com/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '322.658.2806 x3159',
        ],
        reference: 'calcar',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://nervous-daughter.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://idolized-suv.info',
        updatedAt: Utils\Utils::parseDateTime('2023-02-04T23:14:47.362Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->order->createAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAssessmentOrderRequest](../../Models/Operations/CreateAssessmentOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAssessmentOrderResponse](../../Models/Operations/CreateAssessmentOrderResponse.md)**

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
        id: 'cbaef2af-0b66-490b-9793-2b946a4c0ba3',
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
        updatedAt: Utils\Utils::parseDateTime('2025-01-24T06:27:37.859Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->order->createPrintingOrder(
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

## ~~getAccountingOrder~~

Retrieves a single AccountingOrder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingOrder" method="get" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\GetAccountingOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->getAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAccountingOrderRequest](../../Models/Operations/GetAccountingOrderRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAccountingOrderResponse](../../Models/Operations/GetAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAssessmentOrder

Retrieves a single AssessmentOrder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAssessmentOrder" method="get" path="/assessment/{connection_id}/order/{id}" -->
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

$request = new Operations\GetAssessmentOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->getAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAssessmentOrderRequest](../../Models/Operations/GetAssessmentOrderRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAssessmentOrderResponse](../../Models/Operations/GetAssessmentOrderResponse.md)**

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

$response = $sdk->order->getPrintingOrder(
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

## ~~listAccountingOrders~~

Returns a list of AccountingOrders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingOrders" method="get" path="/accounting/{connection_id}/order" -->
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

$request = new Operations\ListAccountingOrdersRequest(
    connectionId: '<id>',
);

$response = $sdk->order->listAccountingOrders(
    request: $request
);

if ($response->accountingOrders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAccountingOrdersRequest](../../Models/Operations/ListAccountingOrdersRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAccountingOrdersResponse](../../Models/Operations/ListAccountingOrdersResponse.md)**

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

$response = $sdk->order->listPrintingOrders(
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

## ~~patchAccountingOrder~~

Updates the AccountingOrder identified by `id`. Provide the unified AccountingOrder fields to change in the request body.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingOrder" method="patch" path="/accounting/{connection_id}/order/{id}" example="accounting_order" -->
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

$request = new Operations\PatchAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '125 Hayden Highway',
            city: 'Altoona',
            countryCode: 'US',
            postalCode: '94706-7691',
            region: 'Louisiana',
            regionCode: 'VT',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: 'aa7c1347-0246-4ad8-be38-c30047f64ae6',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '450 Garett Mall',
            city: 'New Kamronburgh',
            countryCode: 'US',
            postalCode: '76546',
            region: 'Oregon',
            regionCode: 'VA',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-16T03:14:05.859Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->patchAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAccountingOrderRequest](../../Models/Operations/PatchAccountingOrderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAccountingOrderResponse](../../Models/Operations/PatchAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAssessmentOrder

Updates the AssessmentOrder identified by `id`. Provide the unified AssessmentOrder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAssessmentOrder" method="patch" path="/assessment/{connection_id}/order/{id}" example="assessment_order" -->
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

$request = new Operations\PatchAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '2ef6d43a-7429-47b8-8b58-7371763c1316',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'jordan.braun@icloud.com',
        ],
        profileFirstName: 'Jordan',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Braun',
        profileName: 'Jordan Braun',
        profileResumeUrl: 'https://astonishing-bug.com/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '322.658.2806 x3159',
        ],
        reference: 'calcar',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://nervous-daughter.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://idolized-suv.info',
        updatedAt: Utils\Utils::parseDateTime('2023-02-04T23:14:47.368Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->patchAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAssessmentOrderRequest](../../Models/Operations/PatchAssessmentOrderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAssessmentOrderResponse](../../Models/Operations/PatchAssessmentOrderResponse.md)**

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
        id: 'fd99ecf6-c514-49c2-a41c-48e7ab179810',
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
        updatedAt: Utils\Utils::parseDateTime('2025-01-24T06:27:37.870Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->patchPrintingOrder(
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

## ~~removeAccountingOrder~~

Deletes the AccountingOrder identified by `id`.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingOrder" method="delete" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\RemoveAccountingOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->removeAccountingOrder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAccountingOrderRequest](../../Models/Operations/RemoveAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAccountingOrderResponse](../../Models/Operations/RemoveAccountingOrderResponse.md)**

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

$response = $sdk->order->removePrintingOrder(
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

## ~~updateAccountingOrder~~

Updates the AccountingOrder identified by `id`. Provide the unified AccountingOrder fields to change in the request body.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingOrder" method="put" path="/accounting/{connection_id}/order/{id}" example="accounting_order" -->
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

$request = new Operations\UpdateAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '125 Hayden Highway',
            city: 'Altoona',
            countryCode: 'US',
            postalCode: '94706-7691',
            region: 'Louisiana',
            regionCode: 'VT',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: 'aa7c1347-0246-4ad8-be38-c30047f64ae6',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '450 Garett Mall',
            city: 'New Kamronburgh',
            countryCode: 'US',
            postalCode: '76546',
            region: 'Oregon',
            regionCode: 'VA',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-16T03:14:05.859Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->updateAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAccountingOrderRequest](../../Models/Operations/UpdateAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAccountingOrderResponse](../../Models/Operations/UpdateAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAssessmentOrder

Updates the AssessmentOrder identified by `id`. Provide the unified AssessmentOrder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAssessmentOrder" method="put" path="/assessment/{connection_id}/order/{id}" example="assessment_order" -->
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

$request = new Operations\UpdateAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '2ef6d43a-7429-47b8-8b58-7371763c1316',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'jordan.braun@icloud.com',
        ],
        profileFirstName: 'Jordan',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Braun',
        profileName: 'Jordan Braun',
        profileResumeUrl: 'https://astonishing-bug.com/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '322.658.2806 x3159',
        ],
        reference: 'calcar',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://nervous-daughter.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://idolized-suv.info',
        updatedAt: Utils\Utils::parseDateTime('2023-02-04T23:14:47.368Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->updateAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAssessmentOrderRequest](../../Models/Operations/UpdateAssessmentOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAssessmentOrderResponse](../../Models/Operations/UpdateAssessmentOrderResponse.md)**

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
        id: 'fd99ecf6-c514-49c2-a41c-48e7ab179810',
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
        updatedAt: Utils\Utils::parseDateTime('2025-01-24T06:27:37.870Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->updatePrintingOrder(
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