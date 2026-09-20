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
        id: '9c25c3f0-dc17-4f27-b9c8-17761fb93b62',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-06T18:41:05.445Z',
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
        id: '5d9c0cba-f508-4520-b2ba-468e2e37d418',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: '4313ab37-386b-49bd-82a0-a44e63a23c6b',
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
                id: 'c0fbb58e-1a5f-40b2-9837-37e42043646e',
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
                id: '766b4c40-fe4c-4ef4-940c-bc2aa789444c',
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
                id: 'f4b725d8-150d-436a-9f66-3a394b8968b2',
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
                id: 'cc6d3fcf-ea7a-49c2-81aa-cfe3b8be10d7',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-12T07:33:56.869Z'),
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
        id: '5e216c43-8c58-43fb-9824-8ca34d792486',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-06T18:41:05.448Z',
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
        id: '73f9cc40-f838-4c33-9792-7e5f5a18ef10',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: '34fe1109-4c1e-4fc9-a24d-daef3ccb89d2',
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
                id: 'ce892f1c-94e0-46da-9653-ca6d7c3af5f4',
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
                id: '8b1bbfbe-2974-4703-9f7f-794a1acd5056',
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
                id: 'eeea2ccc-1968-4667-9ee0-c3af105ab721',
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
                id: '9b7dec50-a806-43f7-8543-f0f6b2a9d2ee',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-12T07:33:56.888Z'),
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
        id: '5e216c43-8c58-43fb-9824-8ca34d792486',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-06T18:41:05.448Z',
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
        id: '73f9cc40-f838-4c33-9792-7e5f5a18ef10',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: '34fe1109-4c1e-4fc9-a24d-daef3ccb89d2',
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
                id: 'ce892f1c-94e0-46da-9653-ca6d7c3af5f4',
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
                id: '8b1bbfbe-2974-4703-9f7f-794a1acd5056',
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
                id: 'eeea2ccc-1968-4667-9ee0-c3af105ab721',
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
                id: '9b7dec50-a806-43f7-8543-f0f6b2a9d2ee',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-12T07:33:56.888Z'),
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