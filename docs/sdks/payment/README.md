# Payment

## Overview

### Available Operations

* [createPaymentLink2](#createpaymentlink2) - Create a link
* [createPaymentPayment2](#createpaymentpayment2) - Create a payment
* [createPaymentSubscription2](#createpaymentsubscription2) - Create a subscription
* [getPaymentLink2](#getpaymentlink2) - Retrieve a link
* [getPaymentPayment2](#getpaymentpayment2) - Retrieve a payment
* [getPaymentPayout2](#getpaymentpayout2) - Retrieve a payout
* [getPaymentRefund2](#getpaymentrefund2) - Retrieve a refund
* [getPaymentSubscription2](#getpaymentsubscription2) - Retrieve a subscription
* [listPaymentLinks2](#listpaymentlinks2) - List all links
* [listPaymentPayments2](#listpaymentpayments2) - List all payments
* [listPaymentPayouts2](#listpaymentpayouts2) - List all payouts
* [listPaymentRefunds2](#listpaymentrefunds2) - List all refunds
* [listPaymentSubscriptions2](#listpaymentsubscriptions2) - List all subscriptions
* [patchPaymentLink2](#patchpaymentlink2) - Update a link
* [patchPaymentPayment2](#patchpaymentpayment2) - Update a payment
* [patchPaymentSubscription2](#patchpaymentsubscription2) - Update a subscription
* [removePaymentLink2](#removepaymentlink2) - Remove a link
* [removePaymentPayment2](#removepaymentpayment2) - Remove a payment
* [removePaymentSubscription2](#removepaymentsubscription2) - Remove a subscription
* [updatePaymentLink2](#updatepaymentlink2) - Update a link
* [updatePaymentPayment2](#updatepaymentpayment2) - Update a payment
* [updatePaymentSubscription2](#updatepaymentsubscription2) - Update a subscription

## createPaymentLink2

Create a link

### Example Usage

<!-- UsageSnippet language="php" operationID="createPaymentLink2" method="post" path="/payment/{connection_id}/link" -->
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

$request = new Operations\CreatePaymentLink2Request(
    paymentLink: new Shared\PaymentLink(),
    connectionId: '<id>',
);

$response = $sdk->payment->createPaymentLink2(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreatePaymentLink2Request](../../Models/Operations/CreatePaymentLink2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreatePaymentLink2Response](../../Models/Operations/CreatePaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createPaymentPayment2

Create a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="createPaymentPayment2" method="post" path="/payment/{connection_id}/payment" -->
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

$request = new Operations\CreatePaymentPayment2Request(
    paymentPayment: new Shared\PaymentPayment(),
    connectionId: '<id>',
);

$response = $sdk->payment->createPaymentPayment2(
    request: $request
);

if ($response->paymentPayment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreatePaymentPayment2Request](../../Models/Operations/CreatePaymentPayment2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreatePaymentPayment2Response](../../Models/Operations/CreatePaymentPayment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

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

$response = $sdk->payment->createPaymentSubscription2(
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

## getPaymentLink2

Retrieve a link

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentLink2" method="get" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\GetPaymentLink2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->getPaymentLink2(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetPaymentLink2Request](../../Models/Operations/GetPaymentLink2Request.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetPaymentLink2Response](../../Models/Operations/GetPaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentPayment2

Retrieve a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentPayment2" method="get" path="/payment/{connection_id}/payment/{id}" -->
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

$request = new Operations\GetPaymentPayment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->getPaymentPayment2(
    request: $request
);

if ($response->paymentPayment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetPaymentPayment2Request](../../Models/Operations/GetPaymentPayment2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetPaymentPayment2Response](../../Models/Operations/GetPaymentPayment2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentPayout2

Retrieve a payout

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentPayout2" method="get" path="/payment/{connection_id}/payout/{id}" -->
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

$request = new Operations\GetPaymentPayout2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->getPaymentPayout2(
    request: $request
);

if ($response->paymentPayout !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPaymentPayout2Request](../../Models/Operations/GetPaymentPayout2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetPaymentPayout2Response](../../Models/Operations/GetPaymentPayout2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getPaymentRefund2

Retrieve a refund

### Example Usage

<!-- UsageSnippet language="php" operationID="getPaymentRefund2" method="get" path="/payment/{connection_id}/refund/{id}" -->
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

$request = new Operations\GetPaymentRefund2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->getPaymentRefund2(
    request: $request
);

if ($response->paymentRefund !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPaymentRefund2Request](../../Models/Operations/GetPaymentRefund2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetPaymentRefund2Response](../../Models/Operations/GetPaymentRefund2Response.md)**

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

$response = $sdk->payment->getPaymentSubscription2(
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

## listPaymentLinks2

List all links

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentLinks2" method="get" path="/payment/{connection_id}/link" -->
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

$request = new Operations\ListPaymentLinks2Request(
    connectionId: '<id>',
);

$response = $sdk->payment->listPaymentLinks2(
    request: $request
);

if ($response->paymentLinks !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListPaymentLinks2Request](../../Models/Operations/ListPaymentLinks2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListPaymentLinks2Response](../../Models/Operations/ListPaymentLinks2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentPayments2

List all payments

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentPayments2" method="get" path="/payment/{connection_id}/payment" -->
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

$request = new Operations\ListPaymentPayments2Request(
    connectionId: '<id>',
);

$response = $sdk->payment->listPaymentPayments2(
    request: $request
);

if ($response->paymentPayments !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListPaymentPayments2Request](../../Models/Operations/ListPaymentPayments2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListPaymentPayments2Response](../../Models/Operations/ListPaymentPayments2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentPayouts2

List all payouts

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentPayouts2" method="get" path="/payment/{connection_id}/payout" -->
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

$request = new Operations\ListPaymentPayouts2Request(
    connectionId: '<id>',
);

$response = $sdk->payment->listPaymentPayouts2(
    request: $request
);

if ($response->paymentPayouts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListPaymentPayouts2Request](../../Models/Operations/ListPaymentPayouts2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListPaymentPayouts2Response](../../Models/Operations/ListPaymentPayouts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listPaymentRefunds2

List all refunds

### Example Usage

<!-- UsageSnippet language="php" operationID="listPaymentRefunds2" method="get" path="/payment/{connection_id}/refund" -->
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

$request = new Operations\ListPaymentRefunds2Request(
    connectionId: '<id>',
);

$response = $sdk->payment->listPaymentRefunds2(
    request: $request
);

if ($response->paymentRefunds !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListPaymentRefunds2Request](../../Models/Operations/ListPaymentRefunds2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListPaymentRefunds2Response](../../Models/Operations/ListPaymentRefunds2Response.md)**

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

$response = $sdk->payment->listPaymentSubscriptions2(
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

## patchPaymentLink2

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPaymentLink2" method="patch" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\PatchPaymentLink2Request(
    paymentLink: new Shared\PaymentLink(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->patchPaymentLink2(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchPaymentLink2Request](../../Models/Operations/PatchPaymentLink2Request.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchPaymentLink2Response](../../Models/Operations/PatchPaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchPaymentPayment2

Update a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="patchPaymentPayment2" method="patch" path="/payment/{connection_id}/payment/{id}" -->
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

$request = new Operations\PatchPaymentPayment2Request(
    paymentPayment: new Shared\PaymentPayment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->patchPaymentPayment2(
    request: $request
);

if ($response->paymentPayment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchPaymentPayment2Request](../../Models/Operations/PatchPaymentPayment2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchPaymentPayment2Response](../../Models/Operations/PatchPaymentPayment2Response.md)**

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

$response = $sdk->payment->patchPaymentSubscription2(
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

## removePaymentLink2

Remove a link

### Example Usage

<!-- UsageSnippet language="php" operationID="removePaymentLink2" method="delete" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\RemovePaymentLink2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->removePaymentLink2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemovePaymentLink2Request](../../Models/Operations/RemovePaymentLink2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemovePaymentLink2Response](../../Models/Operations/RemovePaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removePaymentPayment2

Remove a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="removePaymentPayment2" method="delete" path="/payment/{connection_id}/payment/{id}" -->
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

$request = new Operations\RemovePaymentPayment2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->removePaymentPayment2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemovePaymentPayment2Request](../../Models/Operations/RemovePaymentPayment2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemovePaymentPayment2Response](../../Models/Operations/RemovePaymentPayment2Response.md)**

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

$response = $sdk->payment->removePaymentSubscription2(
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

## updatePaymentLink2

Update a link

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePaymentLink2" method="put" path="/payment/{connection_id}/link/{id}" -->
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

$request = new Operations\UpdatePaymentLink2Request(
    paymentLink: new Shared\PaymentLink(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->updatePaymentLink2(
    request: $request
);

if ($response->paymentLink !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdatePaymentLink2Request](../../Models/Operations/UpdatePaymentLink2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdatePaymentLink2Response](../../Models/Operations/UpdatePaymentLink2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updatePaymentPayment2

Update a payment

### Example Usage

<!-- UsageSnippet language="php" operationID="updatePaymentPayment2" method="put" path="/payment/{connection_id}/payment/{id}" -->
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

$request = new Operations\UpdatePaymentPayment2Request(
    paymentPayment: new Shared\PaymentPayment(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->payment->updatePaymentPayment2(
    request: $request
);

if ($response->paymentPayment !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdatePaymentPayment2Request](../../Models/Operations/UpdatePaymentPayment2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdatePaymentPayment2Response](../../Models/Operations/UpdatePaymentPayment2Response.md)**

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

$response = $sdk->payment->updatePaymentSubscription2(
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