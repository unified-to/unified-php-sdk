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
        id: '749860da-cb33-49a0-9b78-0c2d6ca90365',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-12T17:14:19.401Z',
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
        id: 'e0b7e75f-f660-449e-b674-0ba4265859ed',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: 'f23acedb-7084-4f85-847d-9a78610abbf6',
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
                id: '5a133eea-9d38-45a1-bef3-64f2307fa19b',
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
                id: 'c8e816a4-2323-401d-b991-575263b73611',
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
                id: 'd66028de-ff77-4b36-8fb7-92671018e924',
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
                id: 'c56f5414-fd54-412f-ae4b-9d71612790e9',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-28T09:57:03.535Z'),
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
        id: '51b8c10a-9100-4660-9b92-21a3366464f8',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-12T17:14:19.403Z',
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
        id: 'df07a54b-9eaf-4d8b-88f6-59783732b9a8',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: 'bfc80eb6-8a83-4793-a18b-ea2da8eb087d',
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
                id: '750cfcca-bec5-433f-8a9a-ab7e1f60d2bb',
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
                id: '42cd37ed-a86c-43e0-b238-6b0b3a0002fe',
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
                id: '5110a4cc-8a05-4f4e-b15b-f539bb399d65',
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
                id: 'cb51ca4f-2bbb-498c-b54b-6e015c0774c5',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-28T09:57:03.545Z'),
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
        id: '51b8c10a-9100-4660-9b92-21a3366464f8',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-12T17:14:19.403Z',
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
        id: 'df07a54b-9eaf-4d8b-88f6-59783732b9a8',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: 'bfc80eb6-8a83-4793-a18b-ea2da8eb087d',
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
                id: '750cfcca-bec5-433f-8a9a-ab7e1f60d2bb',
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
                id: '42cd37ed-a86c-43e0-b238-6b0b3a0002fe',
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
                id: '5110a4cc-8a05-4f4e-b15b-f539bb399d65',
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
                id: 'cb51ca4f-2bbb-498c-b54b-6e015c0774c5',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-28T09:57:03.545Z'),
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