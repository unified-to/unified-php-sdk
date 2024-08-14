# Payment


### Available Operations

* [createPaymentLink](#createpaymentlink) - Create a link
* [createPaymentPayment](#createpaymentpayment) - Create a payment
* [getPaymentLink](#getpaymentlink) - Retrieve a link
* [getPaymentPayment](#getpaymentpayment) - Retrieve a payment
* [getPaymentPayout](#getpaymentpayout) - Retrieve a payout
* [getPaymentRefund](#getpaymentrefund) - Retrieve a refund
* [listPaymentLinks](#listpaymentlinks) - List all links
* [listPaymentPayments](#listpaymentpayments) - List all payments
* [listPaymentPayouts](#listpaymentpayouts) - List all payouts
* [listPaymentRefunds](#listpaymentrefunds) - List all refunds
* [patchPaymentLink](#patchpaymentlink) - Update a link
* [patchPaymentPayment](#patchpaymentpayment) - Update a payment
* [removePaymentLink](#removepaymentlink) - Remove a link
* [removePaymentPayment](#removepaymentpayment) - Remove a payment
* [updatePaymentLink](#updatepaymentlink) - Update a link
* [updatePaymentPayment](#updatepaymentpayment) - Update a payment

## createPaymentLink

Create a link

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreatePaymentLinkRequest(
        connectionId: '<value>',
        paymentLink: new Shared\PaymentLink(
            amount: 8711.36,
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2024-05-14T04:54:56.527Z'),
            currency: 'Aruban Guilder',
            id: '<id>',
            isActive: false,
            isChargeableNow: false,
            lineitems: [
                new Shared\PaymentLinkLineitem,
            ],
            paymentId: '<value>',
            raw: [
                'stump' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-07-14T18:03:00.242Z'),
            url: 'http://baggy-shark.biz',
        ),
    );
    $response = $sdk->payment->createPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\CreatePaymentLinkRequest](../../Models/Operations/CreatePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\CreatePaymentLinkResponse](../../Models/Operations/CreatePaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## createPaymentPayment

Create a payment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreatePaymentPaymentRequest(
        connectionId: '<value>',
        paymentPayment: new Shared\PaymentPayment(
            accountId: '<value>',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-10-29T07:18:50.554Z'),
            currency: 'Iceland Krona',
            id: '<id>',
            invoiceId: '<value>',
            notes: '<value>',
            paymentMethod: '<value>',
            raw: [
                'moderator' => '<value>',
            ],
            reference: '<value>',
            totalAmount: 8883.6,
            updatedAt: Utils\Utils::parseDateTime('2023-03-25T05:19:24.134Z'),
        ),
    );
    $response = $sdk->payment->createPaymentPayment($request);

    if ($response->paymentPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreatePaymentPaymentRequest](../../Models/Operations/CreatePaymentPaymentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?Operations\CreatePaymentPaymentResponse](../../Models/Operations/CreatePaymentPaymentResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getPaymentLink

Retrieve a link

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetPaymentLinkRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->payment->getPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                            | Type                                                                                 | Required                                                                             | Description                                                                          |
| ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------ |
| `$request`                                                                           | [Operations\GetPaymentLinkRequest](../../Models/Operations/GetPaymentLinkRequest.md) | :heavy_check_mark:                                                                   | The request object to use for the request.                                           |


### Response

**[?Operations\GetPaymentLinkResponse](../../Models/Operations/GetPaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getPaymentPayment

Retrieve a payment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetPaymentPaymentRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->payment->getPaymentPayment($request);

    if ($response->paymentPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetPaymentPaymentRequest](../../Models/Operations/GetPaymentPaymentRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\GetPaymentPaymentResponse](../../Models/Operations/GetPaymentPaymentResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getPaymentPayout

Retrieve a payout

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetPaymentPayoutRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->payment->getPaymentPayout($request);

    if ($response->paymentPayout !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetPaymentPayoutRequest](../../Models/Operations/GetPaymentPayoutRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\GetPaymentPayoutResponse](../../Models/Operations/GetPaymentPayoutResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getPaymentRefund

Retrieve a refund

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetPaymentRefundRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->payment->getPaymentRefund($request);

    if ($response->paymentRefund !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\GetPaymentRefundRequest](../../Models/Operations/GetPaymentRefundRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\GetPaymentRefundResponse](../../Models/Operations/GetPaymentRefundResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listPaymentLinks

List all links

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListPaymentLinksRequest(
        connectionId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 5840.47,
        offset: 2505.87,
        order: '<value>',
        paymentId: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-12-19T04:38:46.756Z'),
    );
    $response = $sdk->payment->listPaymentLinks($request);

    if ($response->paymentLinks !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\ListPaymentLinksRequest](../../Models/Operations/ListPaymentLinksRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\ListPaymentLinksResponse](../../Models/Operations/ListPaymentLinksResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listPaymentPayments

List all payments

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListPaymentPaymentsRequest(
        connectionId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        invoiceId: '<value>',
        limit: 2381.17,
        offset: 837.03,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-06-25T04:38:11.791Z'),
    );
    $response = $sdk->payment->listPaymentPayments($request);

    if ($response->paymentPayments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListPaymentPaymentsRequest](../../Models/Operations/ListPaymentPaymentsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\ListPaymentPaymentsResponse](../../Models/Operations/ListPaymentPaymentsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listPaymentPayouts

List all payouts

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListPaymentPayoutsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 5474.75,
        offset: 586.95,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2023-12-05T08:15:58.034Z'),
    );
    $response = $sdk->payment->listPaymentPayouts($request);

    if ($response->paymentPayouts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListPaymentPayoutsRequest](../../Models/Operations/ListPaymentPayoutsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\ListPaymentPayoutsResponse](../../Models/Operations/ListPaymentPayoutsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listPaymentRefunds

List all refunds

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListPaymentRefundsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 5820.28,
        offset: 6141.19,
        order: '<value>',
        paymentId: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-08-03T22:54:27.299Z'),
    );
    $response = $sdk->payment->listPaymentRefunds($request);

    if ($response->paymentRefunds !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\ListPaymentRefundsRequest](../../Models/Operations/ListPaymentRefundsRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |


### Response

**[?Operations\ListPaymentRefundsResponse](../../Models/Operations/ListPaymentRefundsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchPaymentLink

Update a link

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchPaymentLinkRequest(
        connectionId: '<value>',
        id: '<id>',
        paymentLink: new Shared\PaymentLink(
            amount: 2219.73,
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-05-20T18:32:48.667Z'),
            currency: 'UIC-Franc',
            id: '<id>',
            isActive: false,
            isChargeableNow: false,
            lineitems: [
                new Shared\PaymentLinkLineitem,
            ],
            paymentId: '<value>',
            raw: [
                'Tellurium' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2023-07-20T09:13:52.888Z'),
            url: 'http://accurate-costume.org',
        ),
    );
    $response = $sdk->payment->patchPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                | Type                                                                                     | Required                                                                                 | Description                                                                              |
| ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------- |
| `$request`                                                                               | [Operations\PatchPaymentLinkRequest](../../Models/Operations/PatchPaymentLinkRequest.md) | :heavy_check_mark:                                                                       | The request object to use for the request.                                               |


### Response

**[?Operations\PatchPaymentLinkResponse](../../Models/Operations/PatchPaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchPaymentPayment

Update a payment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchPaymentPaymentRequest(
        connectionId: '<value>',
        id: '<id>',
        paymentPayment: new Shared\PaymentPayment(
            accountId: '<value>',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-08-28T13:33:54.908Z'),
            currency: 'Cape Verde Escudo',
            id: '<id>',
            invoiceId: '<value>',
            notes: '<value>',
            paymentMethod: '<value>',
            raw: [
                'Dodge' => '<value>',
            ],
            reference: '<value>',
            totalAmount: 2981.35,
            updatedAt: Utils\Utils::parseDateTime('2023-09-06T16:43:18.631Z'),
        ),
    );
    $response = $sdk->payment->patchPaymentPayment($request);

    if ($response->paymentPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchPaymentPaymentRequest](../../Models/Operations/PatchPaymentPaymentRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |


### Response

**[?Operations\PatchPaymentPaymentResponse](../../Models/Operations/PatchPaymentPaymentResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removePaymentLink

Remove a link

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemovePaymentLinkRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->payment->removePaymentLink($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\RemovePaymentLinkRequest](../../Models/Operations/RemovePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\RemovePaymentLinkResponse](../../Models/Operations/RemovePaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removePaymentPayment

Remove a payment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemovePaymentPaymentRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->payment->removePaymentPayment($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemovePaymentPaymentRequest](../../Models/Operations/RemovePaymentPaymentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?Operations\RemovePaymentPaymentResponse](../../Models/Operations/RemovePaymentPaymentResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updatePaymentLink

Update a link

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdatePaymentLinkRequest(
        connectionId: '<value>',
        id: '<id>',
        paymentLink: new Shared\PaymentLink(
            amount: 6147.65,
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-05-02T07:49:35.280Z'),
            currency: 'Gibraltar Pound',
            id: '<id>',
            isActive: false,
            isChargeableNow: false,
            lineitems: [
                new Shared\PaymentLinkLineitem,
            ],
            paymentId: '<value>',
            raw: [
                'male' => '<value>',
            ],
            updatedAt: Utils\Utils::parseDateTime('2022-08-22T16:01:32.942Z'),
            url: 'https://complex-glove.com',
        ),
    );
    $response = $sdk->payment->updatePaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\UpdatePaymentLinkRequest](../../Models/Operations/UpdatePaymentLinkRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |


### Response

**[?Operations\UpdatePaymentLinkResponse](../../Models/Operations/UpdatePaymentLinkResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updatePaymentPayment

Update a payment

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdatePaymentPaymentRequest(
        connectionId: '<value>',
        id: '<id>',
        paymentPayment: new Shared\PaymentPayment(
            accountId: '<value>',
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-05-20T21:00:50.233Z'),
            currency: 'Namibia Dollar',
            id: '<id>',
            invoiceId: '<value>',
            notes: '<value>',
            paymentMethod: '<value>',
            raw: [
                'Wagon' => '<value>',
            ],
            reference: '<value>',
            totalAmount: 2793.98,
            updatedAt: Utils\Utils::parseDateTime('2024-12-23T01:02:53.585Z'),
        ),
    );
    $response = $sdk->payment->updatePaymentPayment($request);

    if ($response->paymentPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdatePaymentPaymentRequest](../../Models/Operations/UpdatePaymentPaymentRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?Operations\UpdatePaymentPaymentResponse](../../Models/Operations/UpdatePaymentPaymentResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
