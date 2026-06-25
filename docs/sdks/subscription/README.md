# Subscription

## Overview

### Available Operations

* [createPaymentSubscription2](#createpaymentsubscription2) - Create a subscription
* [getPaymentSubscription2](#getpaymentsubscription2) - Retrieve a subscription
* [listPaymentSubscriptions2](#listpaymentsubscriptions2) - List all subscriptions
* [patchPaymentSubscription2](#patchpaymentsubscription2) - Update a subscription
* [removePaymentSubscription2](#removepaymentsubscription2) - Remove a subscription
* [updatePaymentSubscription2](#updatepaymentsubscription2) - Update a subscription

## createPaymentSubscription2

Create a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="createPaymentSubscription2" method="post" path="/payment/{connection_id}/subscription" -->
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

$request = new Operations\CreatePaymentSubscription2Request(
    paymentSubscription: new Shared\PaymentSubscription(),
    connectionId: '<id>',
);

$response = $sdk->subscription->createPaymentSubscription2(
    request: $request
);

if ($response->paymentSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreatePaymentSubscription2Request](../../Models/Operations/CreatePaymentSubscription2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreatePaymentSubscription2Response](../../Models/Operations/CreatePaymentSubscription2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentSubscription2

Retrieve a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentSubscription2" method="get" path="/payment/{connection_id}/subscription/{id}" -->
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

$request = new Operations\GetPaymentSubscription2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->subscription->getPaymentSubscription2(
    request: $request
);

if ($response->paymentSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetPaymentSubscription2Request](../../Models/Operations/GetPaymentSubscription2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetPaymentSubscription2Response](../../Models/Operations/GetPaymentSubscription2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentSubscriptions2

List all subscriptions

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentSubscriptions2" method="get" path="/payment/{connection_id}/subscription" -->
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

$request = new Operations\ListPaymentSubscriptions2Request(
    connectionId: '<id>',
);

$response = $sdk->subscription->listPaymentSubscriptions2(
    request: $request
);

if ($response->paymentSubscriptions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListPaymentSubscriptions2Request](../../Models/Operations/ListPaymentSubscriptions2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListPaymentSubscriptions2Response](../../Models/Operations/ListPaymentSubscriptions2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPaymentSubscription2

Update a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPaymentSubscription2" method="patch" path="/payment/{connection_id}/subscription/{id}" -->
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

$request = new Operations\PatchPaymentSubscription2Request(
    paymentSubscription: new Shared\PaymentSubscription(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->subscription->patchPaymentSubscription2(
    request: $request
);

if ($response->paymentSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchPaymentSubscription2Request](../../Models/Operations/PatchPaymentSubscription2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchPaymentSubscription2Response](../../Models/Operations/PatchPaymentSubscription2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePaymentSubscription2

Remove a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="removePaymentSubscription2" method="delete" path="/payment/{connection_id}/subscription/{id}" -->
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

$request = new Operations\RemovePaymentSubscription2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->subscription->removePaymentSubscription2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemovePaymentSubscription2Request](../../Models/Operations/RemovePaymentSubscription2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemovePaymentSubscription2Response](../../Models/Operations/RemovePaymentSubscription2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePaymentSubscription2

Update a subscription

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePaymentSubscription2" method="put" path="/payment/{connection_id}/subscription/{id}" -->
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

$request = new Operations\UpdatePaymentSubscription2Request(
    paymentSubscription: new Shared\PaymentSubscription(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->subscription->updatePaymentSubscription2(
    request: $request
);

if ($response->paymentSubscription !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdatePaymentSubscription2Request](../../Models/Operations/UpdatePaymentSubscription2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdatePaymentSubscription2Response](../../Models/Operations/UpdatePaymentSubscription2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |