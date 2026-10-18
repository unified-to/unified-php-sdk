# Payment

## Overview

### Available Operations

* [createPaymentLink](#createpaymentlink) - Create a link
* [createPaymentPayment](#createpaymentpayment) - Create a payment
* [createPaymentSubscription](#createpaymentsubscription) - Create a subscription
* [getPaymentLink](#getpaymentlink) - Retrieve a link
* [getPaymentPayment](#getpaymentpayment) - Retrieve a payment
* [getPaymentPayout](#getpaymentpayout) - Retrieve a payout
* [getPaymentRefund](#getpaymentrefund) - Retrieve a refund
* [getPaymentSubscription](#getpaymentsubscription) - Retrieve a subscription
* [listPaymentLinks](#listpaymentlinks) - List all links
* [listPaymentPayments](#listpaymentpayments) - List all payments
* [listPaymentPayouts](#listpaymentpayouts) - List all payouts
* [listPaymentRefunds](#listpaymentrefunds) - List all refunds
* [listPaymentSubscriptions](#listpaymentsubscriptions) - List all subscriptions
* [patchPaymentLink](#patchpaymentlink) - Update a link
* [patchPaymentPayment](#patchpaymentpayment) - Update a payment
* [patchPaymentSubscription](#patchpaymentsubscription) - Update a subscription
* [removePaymentLink](#removepaymentlink) - Remove a link
* [removePaymentPayment](#removepaymentpayment) - Remove a payment
* [removePaymentSubscription](#removepaymentsubscription) - Remove a subscription
* [updatePaymentLink](#updatepaymentlink) - Update a link
* [updatePaymentPayment](#updatepaymentpayment) - Update a payment
* [updatePaymentSubscription](#updatepaymentsubscription) - Update a subscription

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

$response = $sdk->payment->createPaymentLink(
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

## createPaymentPayment

Create a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="createPaymentPayment" method="post" path="/payment/{connection_id}/payment" example="payment_payment" -->
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

$request = new Operations\CreatePaymentPaymentRequest(
    paymentPayment: new Shared\PaymentPayment(
        allocations: [],
        cardBrand: 'AMEX',
        cardLast4: '0819',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        currency: 'BIF',
        exchangeRate: 1.203,
        feeAmount: 3,
        id: '685759d4-2744-413e-9b1f-59f44c130a81',
        locationId: '94f7c68e-07de-40d1-9d6f-a0896363913f',
        notes: 'Tactus vilicus.',
        paidAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        paymentMethod: 'BANK_TRANSFER',
        reference: 'auctus',
        status: Shared\PaymentPaymentStatus::Succeeded,
        tenderType: Shared\TenderType::Check,
        tipAmount: 2,
        totalAmount: 44219,
        type: Shared\PaymentPaymentType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2025-06-14T22:10:44.318Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->payment->createPaymentPayment(
    request: $request
);

if ($response->paymentPayment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreatePaymentPaymentRequest](../../Models/Operations/CreatePaymentPaymentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreatePaymentPaymentResponse](../../Models/Operations/CreatePaymentPaymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPaymentSubscription

Create a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="createPaymentSubscription" method="post" path="/payment/{connection_id}/subscription" example="payment_subscription" -->
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

$request = new Operations\CreatePaymentSubscriptionRequest(
    paymentSubscription: new Shared\PaymentSubscription(
        createdAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        currency: 'WST',
        currentPeriodEndAt: Utils\Utils::parseDateTime('2023-06-03T04:20:29.157Z'),
        currentPeriodStartAt: Utils\Utils::parseDateTime('2023-05-21T03:55:58.846Z'),
        dayOfMonth: 1,
        description: 'Innovative Mouse featuring important technology and Bamboo construction',
        endAt: Utils\Utils::parseDateTime('2023-05-21T12:36:09.234Z'),
        id: '781cb3ec-d102-44bd-bcb4-be78f2404f9a',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Month,
        lineitems: [],
        startAt: Utils\Utils::parseDateTime('2023-05-29T06:04:51.030Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 75616,
        updatedAt: Utils\Utils::parseDateTime('2023-12-21T08:32:43.671Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->payment->createPaymentSubscription(
    request: $request
);

if ($response->paymentSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\CreatePaymentSubscriptionRequest](../../Models/Operations/CreatePaymentSubscriptionRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\CreatePaymentSubscriptionResponse](../../Models/Operations/CreatePaymentSubscriptionResponse.md)**

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

$response = $sdk->payment->getPaymentLink(
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

## getPaymentPayment

Retrieve a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentPayment" method="get" path="/payment/{connection_id}/payment/{id}" -->
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

$request = new Operations\GetPaymentPaymentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->getPaymentPayment(
    request: $request
);

if ($response->paymentPayment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPaymentPaymentRequest](../../Models/Operations/GetPaymentPaymentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetPaymentPaymentResponse](../../Models/Operations/GetPaymentPaymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentPayout

Retrieve a payout

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentPayout" method="get" path="/payment/{connection_id}/payout/{id}" -->
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

$request = new Operations\GetPaymentPayoutRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->getPaymentPayout(
    request: $request
);

if ($response->paymentPayout !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetPaymentPayoutRequest](../../Models/Operations/GetPaymentPayoutRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetPaymentPayoutResponse](../../Models/Operations/GetPaymentPayoutResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentRefund

Retrieve a refund

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentRefund" method="get" path="/payment/{connection_id}/refund/{id}" -->
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

$request = new Operations\GetPaymentRefundRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->getPaymentRefund(
    request: $request
);

if ($response->paymentRefund !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetPaymentRefundRequest](../../Models/Operations/GetPaymentRefundRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |

### Response

**[?Operations\GetPaymentRefundResponse](../../Models/Operations/GetPaymentRefundResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentSubscription

Retrieve a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentSubscription" method="get" path="/payment/{connection_id}/subscription/{id}" -->
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

$request = new Operations\GetPaymentSubscriptionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->getPaymentSubscription(
    request: $request
);

if ($response->paymentSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\GetPaymentSubscriptionRequest](../../Models/Operations/GetPaymentSubscriptionRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\GetPaymentSubscriptionResponse](../../Models/Operations/GetPaymentSubscriptionResponse.md)**

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

$response = $sdk->payment->listPaymentLinks(
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

## listPaymentPayments

List all payments

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentPayments" method="get" path="/payment/{connection_id}/payment" -->
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

$request = new Operations\ListPaymentPaymentsRequest(
    connectionId: '<id>',
);

$response = $sdk->payment->listPaymentPayments(
    request: $request
);

if ($response->paymentPayments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListPaymentPaymentsRequest](../../Models/Operations/ListPaymentPaymentsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListPaymentPaymentsResponse](../../Models/Operations/ListPaymentPaymentsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentPayouts

List all payouts

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentPayouts" method="get" path="/payment/{connection_id}/payout" -->
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

$request = new Operations\ListPaymentPayoutsRequest(
    connectionId: '<id>',
);

$response = $sdk->payment->listPaymentPayouts(
    request: $request
);

if ($response->paymentPayouts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListPaymentPayoutsRequest](../../Models/Operations/ListPaymentPayoutsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListPaymentPayoutsResponse](../../Models/Operations/ListPaymentPayoutsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentRefunds

List all refunds

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentRefunds" method="get" path="/payment/{connection_id}/refund" -->
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

$request = new Operations\ListPaymentRefundsRequest(
    connectionId: '<id>',
);

$response = $sdk->payment->listPaymentRefunds(
    request: $request
);

if ($response->paymentRefunds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListPaymentRefundsRequest](../../Models/Operations/ListPaymentRefundsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\ListPaymentRefundsResponse](../../Models/Operations/ListPaymentRefundsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentSubscriptions

List all subscriptions

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentSubscriptions" method="get" path="/payment/{connection_id}/subscription" -->
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

$request = new Operations\ListPaymentSubscriptionsRequest(
    connectionId: '<id>',
);

$response = $sdk->payment->listPaymentSubscriptions(
    request: $request
);

if ($response->paymentSubscriptions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListPaymentSubscriptionsRequest](../../Models/Operations/ListPaymentSubscriptionsRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListPaymentSubscriptionsResponse](../../Models/Operations/ListPaymentSubscriptionsResponse.md)**

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

$response = $sdk->payment->patchPaymentLink(
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

## patchPaymentPayment

Update a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPaymentPayment" method="patch" path="/payment/{connection_id}/payment/{id}" example="payment_payment" -->
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

$request = new Operations\PatchPaymentPaymentRequest(
    paymentPayment: new Shared\PaymentPayment(
        allocations: [],
        cardBrand: 'AMEX',
        cardLast4: '0819',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        currency: 'BIF',
        exchangeRate: 1.203,
        feeAmount: 3,
        id: '130f12f5-c2e8-4de6-afe9-b29973008827',
        locationId: '94f7c68e-07de-40d1-9d6f-a0896363913f',
        notes: 'Tactus vilicus.',
        paidAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        paymentMethod: 'BANK_TRANSFER',
        reference: 'auctus',
        status: Shared\PaymentPaymentStatus::Succeeded,
        tenderType: Shared\TenderType::Check,
        tipAmount: 2,
        totalAmount: 44219,
        type: Shared\PaymentPaymentType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2025-06-14T22:10:44.330Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->patchPaymentPayment(
    request: $request
);

if ($response->paymentPayment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchPaymentPaymentRequest](../../Models/Operations/PatchPaymentPaymentRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchPaymentPaymentResponse](../../Models/Operations/PatchPaymentPaymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPaymentSubscription

Update a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPaymentSubscription" method="patch" path="/payment/{connection_id}/subscription/{id}" example="payment_subscription" -->
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

$request = new Operations\PatchPaymentSubscriptionRequest(
    paymentSubscription: new Shared\PaymentSubscription(
        createdAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        currency: 'WST',
        currentPeriodEndAt: Utils\Utils::parseDateTime('2023-06-03T04:20:29.157Z'),
        currentPeriodStartAt: Utils\Utils::parseDateTime('2023-05-21T03:55:58.846Z'),
        dayOfMonth: 1,
        description: 'Innovative Mouse featuring important technology and Bamboo construction',
        endAt: Utils\Utils::parseDateTime('2023-05-21T12:36:09.234Z'),
        id: 'd2ceecc5-1dfc-4a10-b5c6-6cb8ec93d9bf',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Month,
        lineitems: [],
        startAt: Utils\Utils::parseDateTime('2023-05-29T06:04:51.030Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 75616,
        updatedAt: Utils\Utils::parseDateTime('2023-12-21T08:32:43.673Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->patchPaymentSubscription(
    request: $request
);

if ($response->paymentSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\PatchPaymentSubscriptionRequest](../../Models/Operations/PatchPaymentSubscriptionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\PatchPaymentSubscriptionResponse](../../Models/Operations/PatchPaymentSubscriptionResponse.md)**

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

$response = $sdk->payment->removePaymentLink(
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

## removePaymentPayment

Remove a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="removePaymentPayment" method="delete" path="/payment/{connection_id}/payment/{id}" -->
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

$request = new Operations\RemovePaymentPaymentRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->removePaymentPayment(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemovePaymentPaymentRequest](../../Models/Operations/RemovePaymentPaymentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemovePaymentPaymentResponse](../../Models/Operations/RemovePaymentPaymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePaymentSubscription

Remove a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="removePaymentSubscription" method="delete" path="/payment/{connection_id}/subscription/{id}" -->
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

$request = new Operations\RemovePaymentSubscriptionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->removePaymentSubscription(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\RemovePaymentSubscriptionRequest](../../Models/Operations/RemovePaymentSubscriptionRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\RemovePaymentSubscriptionResponse](../../Models/Operations/RemovePaymentSubscriptionResponse.md)**

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

$response = $sdk->payment->updatePaymentLink(
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

## updatePaymentPayment

Update a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePaymentPayment" method="put" path="/payment/{connection_id}/payment/{id}" example="payment_payment" -->
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

$request = new Operations\UpdatePaymentPaymentRequest(
    paymentPayment: new Shared\PaymentPayment(
        allocations: [],
        cardBrand: 'AMEX',
        cardLast4: '0819',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        currency: 'BIF',
        exchangeRate: 1.203,
        feeAmount: 3,
        id: '130f12f5-c2e8-4de6-afe9-b29973008827',
        locationId: '94f7c68e-07de-40d1-9d6f-a0896363913f',
        notes: 'Tactus vilicus.',
        paidAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        paymentMethod: 'BANK_TRANSFER',
        reference: 'auctus',
        status: Shared\PaymentPaymentStatus::Succeeded,
        tenderType: Shared\TenderType::Check,
        tipAmount: 2,
        totalAmount: 44219,
        type: Shared\PaymentPaymentType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2025-06-14T22:10:44.330Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->updatePaymentPayment(
    request: $request
);

if ($response->paymentPayment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdatePaymentPaymentRequest](../../Models/Operations/UpdatePaymentPaymentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdatePaymentPaymentResponse](../../Models/Operations/UpdatePaymentPaymentResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePaymentSubscription

Update a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePaymentSubscription" method="put" path="/payment/{connection_id}/subscription/{id}" example="payment_subscription" -->
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

$request = new Operations\UpdatePaymentSubscriptionRequest(
    paymentSubscription: new Shared\PaymentSubscription(
        createdAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        currency: 'WST',
        currentPeriodEndAt: Utils\Utils::parseDateTime('2023-06-03T04:20:29.157Z'),
        currentPeriodStartAt: Utils\Utils::parseDateTime('2023-05-21T03:55:58.846Z'),
        dayOfMonth: 1,
        description: 'Innovative Mouse featuring important technology and Bamboo construction',
        endAt: Utils\Utils::parseDateTime('2023-05-21T12:36:09.234Z'),
        id: 'd2ceecc5-1dfc-4a10-b5c6-6cb8ec93d9bf',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Month,
        lineitems: [],
        startAt: Utils\Utils::parseDateTime('2023-05-29T06:04:51.030Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 75616,
        updatedAt: Utils\Utils::parseDateTime('2023-12-21T08:32:43.673Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->updatePaymentSubscription(
    request: $request
);

if ($response->paymentSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\UpdatePaymentSubscriptionRequest](../../Models/Operations/UpdatePaymentSubscriptionRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\UpdatePaymentSubscriptionResponse](../../Models/Operations/UpdatePaymentSubscriptionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |