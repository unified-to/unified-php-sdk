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
        id: 'da28e39a-73ea-448a-a736-3d580364ee2a',
        isActive: true,
        isChargeableNow: true,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: '1c54b322-2231-47ca-a82e-ec6fcc8bde23',
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
                id: '33a713c5-6fa4-42fa-9275-e3e2d535538d',
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
                id: 'd98460ff-53e5-42c3-b1eb-2b39292778cc',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-18T11:25:24.568Z'),
        url: 'https://pay.example.com/da28e39a-73ea-448a-a736-3d580364ee2a',
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

Creates a PaymentPayment. Provide the unified PaymentPayment fields in the request body; they are mapped to the provider's API. Returns the created PaymentPayment.

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
        cardBrand: 'MASTERCARD',
        cardLast4: '1529',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        currency: 'EUR',
        feeAmount: 2055.82,
        id: '1c71e341-814b-468f-9f6a-4b27eb454f5b',
        metadata: [],
        netAmount: 68824.18,
        notes: 'Bibo tactus vilicus.',
        paidAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        paymentMethod: 'CASH',
        reference: 'PMT-119080',
        status: Shared\PaymentPaymentStatus::Succeeded,
        tenderType: Shared\TenderType::Cash,
        tipAmount: 0,
        totalAmount: 70880,
        type: Shared\PaymentPaymentType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2025-10-23T12:40:50.709Z'),
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

Creates a PaymentSubscription. Provide the unified PaymentSubscription fields in the request body; they are mapped to the provider's API. Returns the created PaymentSubscription.

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
        currency: 'USD',
        currentPeriodEndAt: Utils\Utils::parseDateTime('2024-02-08T10:05:22.912Z'),
        currentPeriodStartAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        dayOfMonth: 8,
        description: 'Innovative Mouse featuring important technology and Bamboo construction',
        id: '81a04e3d-be2f-44ce-9aed-ba137b19212c',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Year,
        lineitems: [],
        metadata: [],
        month: 5,
        startAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-10-06T21:34:07.959Z'),
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

Retrieves a single PaymentPayment by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single PaymentPayout by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single PaymentRefund by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Retrieves a single PaymentSubscription by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

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

Returns a list of PaymentPayments. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of PaymentPayouts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of PaymentRefunds. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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

Returns a list of PaymentSubscriptions. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

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
        id: 'e8c29f11-f165-48fe-b59c-9a3c6c79d5fa',
        isActive: true,
        isChargeableNow: true,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: 'a7d62189-0269-4a86-99d6-17876c33c02c',
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
                id: 'd58028d6-878e-42eb-8260-773b350023bb',
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
                id: 'dc799329-2a09-4318-9a91-fd567df65cde',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-18T11:25:24.574Z'),
        url: 'https://pay.example.com/e8c29f11-f165-48fe-b59c-9a3c6c79d5fa',
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

Updates the PaymentPayment identified by `id`. Provide the unified PaymentPayment fields to change in the request body.

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
        cardBrand: 'MASTERCARD',
        cardLast4: '1529',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        currency: 'EUR',
        feeAmount: 2055.82,
        id: 'a0f5ef03-9184-4d85-b91c-90425ebd36c6',
        metadata: [],
        netAmount: 68824.18,
        notes: 'Bibo tactus vilicus.',
        paidAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        paymentMethod: 'CASH',
        reference: 'PMT-119080',
        status: Shared\PaymentPaymentStatus::Succeeded,
        tenderType: Shared\TenderType::Cash,
        tipAmount: 0,
        totalAmount: 70880,
        type: Shared\PaymentPaymentType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2025-10-23T12:40:50.730Z'),
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

Updates the PaymentSubscription identified by `id`. Provide the unified PaymentSubscription fields to change in the request body.

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
        currency: 'USD',
        currentPeriodEndAt: Utils\Utils::parseDateTime('2024-02-08T10:05:22.912Z'),
        currentPeriodStartAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        dayOfMonth: 8,
        description: 'Innovative Mouse featuring important technology and Bamboo construction',
        id: '1dffca7b-aa5a-4061-b66e-767a29cc0772',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Year,
        lineitems: [],
        metadata: [],
        month: 5,
        startAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-10-06T21:34:07.962Z'),
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

Deletes the PaymentPayment identified by `id`.

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

Deletes the PaymentSubscription identified by `id`.

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
        id: 'e8c29f11-f165-48fe-b59c-9a3c6c79d5fa',
        isActive: true,
        isChargeableNow: true,
        lineitems: [
            new Shared\PaymentLineitem(
                createdAt: Utils\Utils::parseDateTime('2023-06-04T16:11:45.685Z'),
                id: 'a7d62189-0269-4a86-99d6-17876c33c02c',
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
                id: 'd58028d6-878e-42eb-8260-773b350023bb',
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
                id: 'dc799329-2a09-4318-9a91-fd567df65cde',
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
        updatedAt: Utils\Utils::parseDateTime('2024-04-18T11:25:24.574Z'),
        url: 'https://pay.example.com/e8c29f11-f165-48fe-b59c-9a3c6c79d5fa',
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

Updates the PaymentPayment identified by `id`. Provide the unified PaymentPayment fields to change in the request body.

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
        cardBrand: 'MASTERCARD',
        cardLast4: '1529',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        currency: 'EUR',
        feeAmount: 2055.82,
        id: 'a0f5ef03-9184-4d85-b91c-90425ebd36c6',
        metadata: [],
        netAmount: 68824.18,
        notes: 'Bibo tactus vilicus.',
        paidAt: Utils\Utils::parseDateTime('2022-03-10T00:19:42.086Z'),
        paymentMethod: 'CASH',
        reference: 'PMT-119080',
        status: Shared\PaymentPaymentStatus::Succeeded,
        tenderType: Shared\TenderType::Cash,
        tipAmount: 0,
        totalAmount: 70880,
        type: Shared\PaymentPaymentType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2025-10-23T12:40:50.730Z'),
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

Updates the PaymentSubscription identified by `id`. Provide the unified PaymentSubscription fields to change in the request body.

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
        currency: 'USD',
        currentPeriodEndAt: Utils\Utils::parseDateTime('2024-02-08T10:05:22.912Z'),
        currentPeriodStartAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        dayOfMonth: 8,
        description: 'Innovative Mouse featuring important technology and Bamboo construction',
        id: '1dffca7b-aa5a-4061-b66e-767a29cc0772',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Year,
        lineitems: [],
        metadata: [],
        month: 5,
        startAt: Utils\Utils::parseDateTime('2023-05-08T10:11:03.414Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-10-06T21:34:07.962Z'),
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