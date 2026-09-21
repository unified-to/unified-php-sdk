# Subscription

## Overview

### Available Operations

* [createPaymentSubscription](#createpaymentsubscription) - Create a subscription
* [getPaymentSubscription](#getpaymentsubscription) - Retrieve a subscription
* [listPaymentSubscriptions](#listpaymentsubscriptions) - List all subscriptions
* [patchPaymentSubscription](#patchpaymentsubscription) - Update a subscription
* [removePaymentSubscription](#removepaymentsubscription) - Remove a subscription
* [updatePaymentSubscription](#updatepaymentsubscription) - Update a subscription

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
        id: '5646479f-e014-4863-aac9-b2417de0de31',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Month,
        lineitems: [],
        startAt: Utils\Utils::parseDateTime('2023-05-29T06:04:51.030Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 75616,
        updatedAt: Utils\Utils::parseDateTime('2023-12-16T10:39:39.614Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->subscription->createPaymentSubscription(
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

$response = $sdk->subscription->getPaymentSubscription(
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

$response = $sdk->subscription->listPaymentSubscriptions(
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
        id: 'e5056088-527a-4374-b90f-a4778a2eb421',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Month,
        lineitems: [],
        startAt: Utils\Utils::parseDateTime('2023-05-29T06:04:51.030Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 75616,
        updatedAt: Utils\Utils::parseDateTime('2023-12-16T10:39:39.617Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->subscription->patchPaymentSubscription(
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

$response = $sdk->subscription->removePaymentSubscription(
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
        id: 'e5056088-527a-4374-b90f-a4778a2eb421',
        interval: 1,
        intervalUnit: Shared\IntervalUnit::Month,
        lineitems: [],
        startAt: Utils\Utils::parseDateTime('2023-05-29T06:04:51.030Z'),
        status: Shared\PaymentSubscriptionStatus::Active,
        totalAmount: 75616,
        updatedAt: Utils\Utils::parseDateTime('2023-12-16T10:39:39.617Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->subscription->updatePaymentSubscription(
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