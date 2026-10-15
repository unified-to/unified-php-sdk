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
        id: 'e0d691c2-856f-4c94-a487-ac95d62e5d1a',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-13T19:08:59.051Z',
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
        id: '8ec10a66-a26a-45f9-937f-5037b4baa940',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: '474960bd-8bc1-4813-9f18-26d15c7107b7',
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
                id: 'd9c4d656-5e66-4244-b49e-2c1f389991ca',
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
                id: '89a2ab86-cc2a-499b-a33d-ee1bdccd17b3',
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
                id: '6adfe3c3-b169-495a-b1b8-97611e7f6aca',
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
                id: '0c0c4afe-ba4e-4707-8126-ea28069d2486',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-31T08:10:53.476Z'),
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
        id: '7e914137-b86b-46ce-9046-0d4925d25e9d',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-13T19:08:59.052Z',
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
        id: '8e547fdf-53e9-435f-bed8-4b51118b2e47',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: 'b5c978e9-ffc4-4580-adf0-4936f58205a7',
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
                id: '9e35ab34-85f8-492b-a0db-398acc4f0eae',
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
                id: '628ed03b-c6dc-4387-b3ad-acb2ef3c8e39',
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
                id: '6cd672f0-f57c-4484-b602-262d8edcbb8b',
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
                id: 'f18b7183-0876-4dae-add3-1a148a8d2886',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-31T08:10:53.489Z'),
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
        id: '7e914137-b86b-46ce-9046-0d4925d25e9d',
        isActive: true,
        name: 'Sopor sopor ancilla animus anser dignissimos vito confero utilis.',
        priceAmount: 44,
        priceCurrency: 'USD',
        updatedAt: '2024-03-13T19:08:59.052Z',
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
        id: '8e547fdf-53e9-435f-bed8-4b51118b2e47',
        isActive: true,
        isChargeableNow: false,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-08-21T00:45:53.202Z'),
                id: 'b5c978e9-ffc4-4580-adf0-4936f58205a7',
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
                id: '9e35ab34-85f8-492b-a0db-398acc4f0eae',
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
                id: '628ed03b-c6dc-4387-b3ad-acb2ef3c8e39',
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
                id: '6cd672f0-f57c-4484-b602-262d8edcbb8b',
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
                id: 'f18b7183-0876-4dae-add3-1a148a8d2886',
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
        updatedAt: Utils\Utils::parseDateTime('2025-12-31T08:10:53.489Z'),
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