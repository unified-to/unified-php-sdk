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

Create a link

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
        id: '3e761572-2a81-4ac9-9b80-a26d4707b723',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-14T16:56:03.443Z',
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

Create a link

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
        amount: 81211,
        createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
        currency: 'GYD',
        description: 'Adfero ipsa terreo benevolentia utrum.',
        id: 'ae943b1e-5167-4484-9f38-427153314b05',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: 'ce7dd057-e2a2-4c47-97a0-565245131bd4',
                itemDescription: 'Experience the white brilliance of our Hat, perfect for aggravating environments',
                itemName: 'Licensed Marble Mouse',
                itemSku: 'TAD4EYLVRI',
                notes: 'Charisma theca video verus conduco attollo cervus decretum viridis.',
                taxAmount: 221,
                totalAmount: 1841,
                unitAmount: 270,
                unitQuantity: 6,
                updatedAt: Utils\Utils::parseDateTime('2023-02-12T17:31:25.507Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-09-30T05:29:29.258Z'),
                discountAmount: 15,
                id: '64a4b0b0-e9d7-4eac-a280-ad78153fbf05',
                itemDescription: 'New Chicken model with 79 GB RAM, 846 GB storage, and lovely features',
                itemName: 'Intelligent Steel Table',
                itemSku: 'V8HQCDQYUZ',
                taxAmount: 150,
                totalAmount: 2037,
                unitAmount: 317,
                unitQuantity: 6,
                updatedAt: Utils\Utils::parseDateTime('2023-05-31T11:10:09.190Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-12-16T13:52:52.341Z'),
                id: '6b399d2e-791f-467b-87ad-af5bc61b4572',
                itemDescription: 'Dach - Wolff\'s most advanced Car technology increases dense capabilities',
                itemName: 'Modern Gold Soap',
                itemSku: 'DYGKCTCLDJ',
                taxAmount: 41,
                totalAmount: 281,
                unitAmount: 30,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-05-22T16:35:07.583Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-12T19:45:39.705Z'),
                id: 'a32a7d65-49fd-4161-9946-b487e0add2f8',
                itemDescription: 'The sleek and unimportant Salad comes with salmon LED lighting for smart functionality',
                itemName: 'Generic Aluminum Ball',
                itemSku: 'BSBAXWAAFF',
                notes: 'Cubo adversus victus subito asperiores vereor cibo tabgo.',
                taxAmount: 6,
                totalAmount: 78,
                unitAmount: 24,
                unitQuantity: 3,
                updatedAt: Utils\Utils::parseDateTime('2023-11-13T12:39:15.951Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-02-14T06:21:13.641Z'),
                discountAmount: 171,
                id: 'db2bdfc1-73de-472c-bd73-3454f35367c3',
                itemDescription: 'New Bike model with 29 GB RAM, 271 GB storage, and minty features',
                itemName: 'Incredible Aluminum Chicken',
                itemSku: '6ERMJK20HE',
                taxAmount: 263,
                totalAmount: 3708,
                unitAmount: 452,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-01-31T21:39:30.894Z'),
            ),
        ],
        successUrl: 'https://parched-kettledrum.com/',
        updatedAt: Utils\Utils::parseDateTime('2026-01-02T19:13:38.912Z'),
        url: 'https://forceful-laughter.biz/',
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

Retrieve a link

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

Retrieve a link

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

List all links

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

List all links

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

Update a link

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
        id: '6a6af899-fa25-43a9-a958-f161f3bb3a5f',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-14T16:56:03.445Z',
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

Update a link

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
        amount: 81211,
        createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
        currency: 'GYD',
        description: 'Adfero ipsa terreo benevolentia utrum.',
        id: '72100fb9-40bc-4671-8070-00daca72c379',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: '4911163c-0e37-425e-8697-cc917ae87913',
                itemDescription: 'Experience the white brilliance of our Hat, perfect for aggravating environments',
                itemName: 'Licensed Marble Mouse',
                itemSku: 'TAD4EYLVRI',
                notes: 'Charisma theca video verus conduco attollo cervus decretum viridis.',
                taxAmount: 221,
                totalAmount: 1841,
                unitAmount: 270,
                unitQuantity: 6,
                updatedAt: Utils\Utils::parseDateTime('2023-02-12T17:31:25.507Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-09-30T05:29:29.258Z'),
                discountAmount: 15,
                id: '3fe97d50-d3f8-4f99-bace-d5cf2a6d8084',
                itemDescription: 'New Chicken model with 79 GB RAM, 846 GB storage, and lovely features',
                itemName: 'Intelligent Steel Table',
                itemSku: 'V8HQCDQYUZ',
                taxAmount: 150,
                totalAmount: 2037,
                unitAmount: 317,
                unitQuantity: 6,
                updatedAt: Utils\Utils::parseDateTime('2023-05-31T11:10:09.190Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-12-16T13:52:52.341Z'),
                id: '458a8653-c2a7-44d0-aa63-a9a644c7c4e4',
                itemDescription: 'Dach - Wolff\'s most advanced Car technology increases dense capabilities',
                itemName: 'Modern Gold Soap',
                itemSku: 'DYGKCTCLDJ',
                taxAmount: 41,
                totalAmount: 281,
                unitAmount: 30,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-05-22T16:35:07.583Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-12T19:45:39.705Z'),
                id: 'a6bdf36d-8dc2-4bef-a78d-df13e9689ef1',
                itemDescription: 'The sleek and unimportant Salad comes with salmon LED lighting for smart functionality',
                itemName: 'Generic Aluminum Ball',
                itemSku: 'BSBAXWAAFF',
                notes: 'Cubo adversus victus subito asperiores vereor cibo tabgo.',
                taxAmount: 6,
                totalAmount: 78,
                unitAmount: 24,
                unitQuantity: 3,
                updatedAt: Utils\Utils::parseDateTime('2023-11-13T12:39:15.951Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-02-14T06:21:13.641Z'),
                discountAmount: 171,
                id: 'e0be8474-8827-4d13-bfa6-b1fe87965e93',
                itemDescription: 'New Bike model with 29 GB RAM, 271 GB storage, and minty features',
                itemName: 'Incredible Aluminum Chicken',
                itemSku: '6ERMJK20HE',
                taxAmount: 263,
                totalAmount: 3708,
                unitAmount: 452,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-01-31T21:39:30.894Z'),
            ),
        ],
        successUrl: 'https://parched-kettledrum.com/',
        updatedAt: Utils\Utils::parseDateTime('2026-01-02T19:13:38.924Z'),
        url: 'https://forceful-laughter.biz/',
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

Remove a link

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

Remove a link

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

Update a link

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
        id: '6a6af899-fa25-43a9-a958-f161f3bb3a5f',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-14T16:56:03.445Z',
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

Update a link

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
        amount: 81211,
        createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
        currency: 'GYD',
        description: 'Adfero ipsa terreo benevolentia utrum.',
        id: '72100fb9-40bc-4671-8070-00daca72c379',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: '4911163c-0e37-425e-8697-cc917ae87913',
                itemDescription: 'Experience the white brilliance of our Hat, perfect for aggravating environments',
                itemName: 'Licensed Marble Mouse',
                itemSku: 'TAD4EYLVRI',
                notes: 'Charisma theca video verus conduco attollo cervus decretum viridis.',
                taxAmount: 221,
                totalAmount: 1841,
                unitAmount: 270,
                unitQuantity: 6,
                updatedAt: Utils\Utils::parseDateTime('2023-02-12T17:31:25.507Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-09-30T05:29:29.258Z'),
                discountAmount: 15,
                id: '3fe97d50-d3f8-4f99-bace-d5cf2a6d8084',
                itemDescription: 'New Chicken model with 79 GB RAM, 846 GB storage, and lovely features',
                itemName: 'Intelligent Steel Table',
                itemSku: 'V8HQCDQYUZ',
                taxAmount: 150,
                totalAmount: 2037,
                unitAmount: 317,
                unitQuantity: 6,
                updatedAt: Utils\Utils::parseDateTime('2023-05-31T11:10:09.190Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-12-16T13:52:52.341Z'),
                id: '458a8653-c2a7-44d0-aa63-a9a644c7c4e4',
                itemDescription: 'Dach - Wolff\'s most advanced Car technology increases dense capabilities',
                itemName: 'Modern Gold Soap',
                itemSku: 'DYGKCTCLDJ',
                taxAmount: 41,
                totalAmount: 281,
                unitAmount: 30,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-05-22T16:35:07.583Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-12T19:45:39.705Z'),
                id: 'a6bdf36d-8dc2-4bef-a78d-df13e9689ef1',
                itemDescription: 'The sleek and unimportant Salad comes with salmon LED lighting for smart functionality',
                itemName: 'Generic Aluminum Ball',
                itemSku: 'BSBAXWAAFF',
                notes: 'Cubo adversus victus subito asperiores vereor cibo tabgo.',
                taxAmount: 6,
                totalAmount: 78,
                unitAmount: 24,
                unitQuantity: 3,
                updatedAt: Utils\Utils::parseDateTime('2023-11-13T12:39:15.951Z'),
            ),
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-02-14T06:21:13.641Z'),
                discountAmount: 171,
                id: 'e0be8474-8827-4d13-bfa6-b1fe87965e93',
                itemDescription: 'New Bike model with 29 GB RAM, 271 GB storage, and minty features',
                itemName: 'Incredible Aluminum Chicken',
                itemSku: '6ERMJK20HE',
                taxAmount: 263,
                totalAmount: 3708,
                unitAmount: 452,
                unitQuantity: 8,
                updatedAt: Utils\Utils::parseDateTime('2023-01-31T21:39:30.894Z'),
            ),
        ],
        successUrl: 'https://parched-kettledrum.com/',
        updatedAt: Utils\Utils::parseDateTime('2026-01-02T19:13:38.924Z'),
        url: 'https://forceful-laughter.biz/',
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