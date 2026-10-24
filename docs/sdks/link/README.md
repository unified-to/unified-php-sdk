# Link

## Overview

### Available Operations

* [createCalendarLink](#createcalendarlink) - Create a link
* [createPaymentLink](#createpaymentlink) - Create a link
* [getCalendarLink](#getcalendarlink) - Retrieve a link
* [getPaymentLink](#getpaymentlink) - Retrieve a link
* [listCalendarLinks](#listcalendarlinks) - List all links
* [listPaymentLinks](#listpaymentlinks) - List all links
* [patchCalendarLink](#patchcalendarlink) - Update a link
* [patchPaymentLink](#patchpaymentlink) - Update a link
* [removeCalendarLink](#removecalendarlink) - Remove a link
* [removePaymentLink](#removepaymentlink) - Remove a link
* [updateCalendarLink](#updatecalendarlink) - Update a link
* [updatePaymentLink](#updatepaymentlink) - Update a link

## createCalendarLink

Creates a CalendarLink. Provide the unified CalendarLink fields in the request body; they are mapped to the provider's API. Returns the created CalendarLink.

### Example Usage

<!-- UsageSnippet language="php" operationID="createCalendarLink" method="post" path="/calendar/{connection_id}/link" example="calendar_link" -->
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

$request = new Operations\CreateCalendarLinkRequest(
    calendarLink: new Shared\CalendarLink(
        createdAt: '2023-03-07T13:34:11.959Z',
        description: 'Vitium clibanus laboriosam uxor denuncio.',
        duration: 74,
        id: 'c769b751-3eb0-45a4-a5e0-0fcd3a9760bb',
        isActive: true,
        metadata: [],
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-16T08:21:54.597Z',
        url: 'https://annual-apricot.info/',
    ),
    connectionId: '<id>',
);

$response = $sdk->link->createCalendarLink(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateCalendarLinkRequest](../../Models/Operations/CreateCalendarLinkRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateCalendarLinkResponse](../../Models/Operations/CreateCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPaymentLink

Creates a PaymentLink. Provide the unified PaymentLink fields in the request body; they are mapped to the provider's API. Returns the created PaymentLink.

### Example Usage

<!-- UsageSnippet language="php" operationID="createPaymentLink" method="post" path="/payment/{connection_id}/link" example="payment_link" -->
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

$request = new Operations\CreatePaymentLinkRequest(
    paymentLink: new Shared\PaymentLink(
        amount: 17001.68,
        createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
        currency: 'CAD',
        description: 'Savor the tender essence in our Ball, designed for dim culinary adventures',
        id: '68bf1837-ac37-4a1f-bb3a-91d63a851620',
        isActive: true,
        isChargeableNow: true,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: 'caa8c4e1-0ae3-4396-aad1-689c033cb1bf',
                itemDescription: 'Discover the worst new Computer with an exciting mix of Steel ingredients',
                itemName: 'Soft Marble Cheese',
                taxAmount: 0,
                totalAmount: 9342,
                unitAmount: 519,
                unitQuantity: 18,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                discountAmount: 424.32,
                id: 'a5ba7297-098c-40da-ba29-754ca946471d',
                itemDescription: 'Innovative Shoes featuring utilized technology and Cotton construction',
                itemName: 'Sleek Aluminum Shoes',
                notes: 'Cervus decretum viridis doloremque.',
                taxAmount: 0,
                totalAmount: 6647.68,
                unitAmount: 884,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: 'c676fbaf-ff3c-419a-a5a6-29d7490081b2',
                itemDescription: 'Featuring Osmium-enhanced technology, our Soap offers unparalleled major performance',
                itemName: 'Elegant Concrete Gloves',
                notes: 'Desipio usque vacuus currus cetera testimonium.',
                taxAmount: 0,
                totalAmount: 1012,
                unitAmount: 506,
                unitQuantity: 2,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
        ],
        metadata: [],
        successUrl: 'https://tinted-jet.info',
        updatedAt: Utils\Utils::parseDateTime('2024-04-14T02:54:45.114Z'),
        url: 'https://pay.example.com/68bf1837-ac37-4a1f-bb3a-91d63a851620',
    ),
    connectionId: '<id>',
);

$response = $sdk->link->createPaymentLink(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreatePaymentLinkRequest](../../Models/Operations/CreatePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\CreatePaymentLinkResponse](../../Models/Operations/CreatePaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCalendarLink

Retrieves a single CalendarLink by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getCalendarLink" method="get" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\GetCalendarLinkRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->getCalendarLink(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetCalendarLinkRequest](../../Models/Operations/GetCalendarLinkRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetCalendarLinkResponse](../../Models/Operations/GetCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentLink

Retrieves a single PaymentLink by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentLink" method="get" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\GetPaymentLinkRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->getPaymentLink(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetPaymentLinkRequest](../../Models/Operations/GetPaymentLinkRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |

### Response

**[?Operations\GetPaymentLinkResponse](../../Models/Operations/GetPaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCalendarLinks

Returns a list of CalendarLinks. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listCalendarLinks" method="get" path="/calendar/{connection_id}/link" -->
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

$request = new Operations\ListCalendarLinksRequest(
    connectionId: '<id>',
);

$response = $sdk->link->listCalendarLinks(
    request: $request
);

if ($response->calendarLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListCalendarLinksRequest](../../Models/Operations/ListCalendarLinksRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListCalendarLinksResponse](../../Models/Operations/ListCalendarLinksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentLinks

Returns a list of PaymentLinks. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentLinks" method="get" path="/payment/{connection_id}/link" -->
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

$request = new Operations\ListPaymentLinksRequest(
    connectionId: '<id>',
);

$response = $sdk->link->listPaymentLinks(
    request: $request
);

if ($response->paymentLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListPaymentLinksRequest](../../Models/Operations/ListPaymentLinksRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\ListPaymentLinksResponse](../../Models/Operations/ListPaymentLinksResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCalendarLink

Updates the CalendarLink identified by `id`. Provide the unified CalendarLink fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCalendarLink" method="patch" path="/calendar/{connection_id}/link/{id}" example="calendar_link" -->
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

$request = new Operations\PatchCalendarLinkRequest(
    calendarLink: new Shared\CalendarLink(
        createdAt: '2023-03-07T13:34:11.959Z',
        description: 'Vitium clibanus laboriosam uxor denuncio.',
        duration: 74,
        id: '3705df01-ddf3-4817-b71c-3b73bdaf3a92',
        isActive: true,
        metadata: [],
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-16T08:21:54.600Z',
        url: 'https://annual-apricot.info/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->patchCalendarLink(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchCalendarLinkRequest](../../Models/Operations/PatchCalendarLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchCalendarLinkResponse](../../Models/Operations/PatchCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPaymentLink

Updates the PaymentLink identified by `id`. Provide the unified PaymentLink fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPaymentLink" method="patch" path="/payment/{connection_id}/link/{id}" example="payment_link" -->
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

$request = new Operations\PatchPaymentLinkRequest(
    paymentLink: new Shared\PaymentLink(
        amount: 17001.68,
        createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
        currency: 'CAD',
        description: 'Savor the tender essence in our Ball, designed for dim culinary adventures',
        id: '07267f64-cfd6-48c1-a617-ab9faa06734c',
        isActive: true,
        isChargeableNow: true,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: '1f6d5e7a-9dc1-44ab-8d1b-67375d21846d',
                itemDescription: 'Discover the worst new Computer with an exciting mix of Steel ingredients',
                itemName: 'Soft Marble Cheese',
                taxAmount: 0,
                totalAmount: 9342,
                unitAmount: 519,
                unitQuantity: 18,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                discountAmount: 424.32,
                id: '5d2373e8-a713-43ee-ae4b-7dfe1491488e',
                itemDescription: 'Innovative Shoes featuring utilized technology and Cotton construction',
                itemName: 'Sleek Aluminum Shoes',
                notes: 'Cervus decretum viridis doloremque.',
                taxAmount: 0,
                totalAmount: 6647.68,
                unitAmount: 884,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: 'cdbe088a-1443-4167-950c-921b2ec6d1b3',
                itemDescription: 'Featuring Osmium-enhanced technology, our Soap offers unparalleled major performance',
                itemName: 'Elegant Concrete Gloves',
                notes: 'Desipio usque vacuus currus cetera testimonium.',
                taxAmount: 0,
                totalAmount: 1012,
                unitAmount: 506,
                unitQuantity: 2,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
        ],
        metadata: [],
        successUrl: 'https://tinted-jet.info',
        updatedAt: Utils\Utils::parseDateTime('2024-04-14T02:54:45.120Z'),
        url: 'https://pay.example.com/07267f64-cfd6-48c1-a617-ab9faa06734c',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->patchPaymentLink(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchPaymentLinkRequest](../../Models/Operations/PatchPaymentLinkRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\PatchPaymentLinkResponse](../../Models/Operations/PatchPaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCalendarLink

Deletes the CalendarLink identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCalendarLink" method="delete" path="/calendar/{connection_id}/link/{id}" -->
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

$request = new Operations\RemoveCalendarLinkRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->removeCalendarLink(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveCalendarLinkRequest](../../Models/Operations/RemoveCalendarLinkRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveCalendarLinkResponse](../../Models/Operations/RemoveCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePaymentLink

Deletes the PaymentLink identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removePaymentLink" method="delete" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\RemovePaymentLinkRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->removePaymentLink(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemovePaymentLinkRequest](../../Models/Operations/RemovePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\RemovePaymentLinkResponse](../../Models/Operations/RemovePaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCalendarLink

Updates the CalendarLink identified by `id`. Provide the unified CalendarLink fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCalendarLink" method="put" path="/calendar/{connection_id}/link/{id}" example="calendar_link" -->
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

$request = new Operations\UpdateCalendarLinkRequest(
    calendarLink: new Shared\CalendarLink(
        createdAt: '2023-03-07T13:34:11.959Z',
        description: 'Vitium clibanus laboriosam uxor denuncio.',
        duration: 74,
        id: '3705df01-ddf3-4817-b71c-3b73bdaf3a92',
        isActive: true,
        metadata: [],
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-16T08:21:54.600Z',
        url: 'https://annual-apricot.info/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->updateCalendarLink(
    request: $request
);

if ($response->calendarLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateCalendarLinkRequest](../../Models/Operations/UpdateCalendarLinkRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateCalendarLinkResponse](../../Models/Operations/UpdateCalendarLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePaymentLink

Updates the PaymentLink identified by `id`. Provide the unified PaymentLink fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePaymentLink" method="put" path="/payment/{connection_id}/link/{id}" example="payment_link" -->
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

$request = new Operations\UpdatePaymentLinkRequest(
    paymentLink: new Shared\PaymentLink(
        amount: 17001.68,
        createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
        currency: 'CAD',
        description: 'Savor the tender essence in our Ball, designed for dim culinary adventures',
        id: '07267f64-cfd6-48c1-a617-ab9faa06734c',
        isActive: true,
        isChargeableNow: true,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: '1f6d5e7a-9dc1-44ab-8d1b-67375d21846d',
                itemDescription: 'Discover the worst new Computer with an exciting mix of Steel ingredients',
                itemName: 'Soft Marble Cheese',
                taxAmount: 0,
                totalAmount: 9342,
                unitAmount: 519,
                unitQuantity: 18,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                discountAmount: 424.32,
                id: '5d2373e8-a713-43ee-ae4b-7dfe1491488e',
                itemDescription: 'Innovative Shoes featuring utilized technology and Cotton construction',
                itemName: 'Sleek Aluminum Shoes',
                notes: 'Cervus decretum viridis doloremque.',
                taxAmount: 0,
                totalAmount: 6647.68,
                unitAmount: 884,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: 'cdbe088a-1443-4167-950c-921b2ec6d1b3',
                itemDescription: 'Featuring Osmium-enhanced technology, our Soap offers unparalleled major performance',
                itemName: 'Elegant Concrete Gloves',
                notes: 'Desipio usque vacuus currus cetera testimonium.',
                taxAmount: 0,
                totalAmount: 1012,
                unitAmount: 506,
                unitQuantity: 2,
                updatedAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
            ),
        ],
        metadata: [],
        successUrl: 'https://tinted-jet.info',
        updatedAt: Utils\Utils::parseDateTime('2024-04-14T02:54:45.120Z'),
        url: 'https://pay.example.com/07267f64-cfd6-48c1-a617-ab9faa06734c',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->link->updatePaymentLink(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdatePaymentLinkRequest](../../Models/Operations/UpdatePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\UpdatePaymentLinkResponse](../../Models/Operations/UpdatePaymentLinkResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |