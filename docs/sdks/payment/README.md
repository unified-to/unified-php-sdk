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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreatePaymentLinkRequest();
    $request->paymentLink = new Shared\PaymentLink();
    $request->paymentLink->amount = 8711.36;
    $request->paymentLink->contactId = '<value>';
    $request->paymentLink->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-14T04:54:56.527Z');
    $request->paymentLink->currency = 'Aruban Guilder';
    $request->paymentLink->id = '<id>';
    $request->paymentLink->isActive = false;
    $request->paymentLink->lineitems = [
        new Shared\PaymentLinkLineitem(),
    ];
    $request->paymentLink->paymentId = '<value>';
    $request->paymentLink->raw = [
        'stump' => '<value>',
    ];
    $request->paymentLink->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-14T18:03:00.242Z');
    $request->paymentLink->url = 'http://baggy-shark.biz';
    $request->connectionId = '<value>';;

    $response = $sdk->payment->createPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\CreatePaymentLinkRequest](../../Models/Operations/CreatePaymentLinkRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\CreatePaymentLinkResponse](../../Models/Operations/CreatePaymentLinkResponse.md)**


## createPaymentPayment

Create a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreatePaymentPaymentRequest();
    $request->paymentPayment = new Shared\PaymentPayment();
    $request->paymentPayment->accountId = '<value>';
    $request->paymentPayment->contactId = '<value>';
    $request->paymentPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-29T07:18:50.554Z');
    $request->paymentPayment->currency = 'Iceland Krona';
    $request->paymentPayment->id = '<id>';
    $request->paymentPayment->invoiceId = '<value>';
    $request->paymentPayment->notes = '<value>';
    $request->paymentPayment->paymentMethod = '<value>';
    $request->paymentPayment->raw = [
        'moderator' => '<value>',
    ];
    $request->paymentPayment->reference = '<value>';
    $request->paymentPayment->totalAmount = 8883.6;
    $request->paymentPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-25T05:19:24.134Z');
    $request->connectionId = '<value>';;

    $response = $sdk->payment->createPaymentPayment($request);

    if ($response->paymentPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreatePaymentPaymentRequest](../../Models/Operations/CreatePaymentPaymentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreatePaymentPaymentResponse](../../Models/Operations/CreatePaymentPaymentResponse.md)**


## getPaymentLink

Retrieve a link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetPaymentLinkRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->payment->getPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                       | Type                                                                                                            | Required                                                                                                        | Description                                                                                                     |
| --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                      | [\Unified\Unified_to\Models\Operations\GetPaymentLinkRequest](../../Models/Operations/GetPaymentLinkRequest.md) | :heavy_check_mark:                                                                                              | The request object to use for the request.                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\GetPaymentLinkResponse](../../Models/Operations/GetPaymentLinkResponse.md)**


## getPaymentPayment

Retrieve a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetPaymentPaymentRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->payment->getPaymentPayment($request);

    if ($response->paymentPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetPaymentPaymentRequest](../../Models/Operations/GetPaymentPaymentRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetPaymentPaymentResponse](../../Models/Operations/GetPaymentPaymentResponse.md)**


## getPaymentPayout

Retrieve a payout

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetPaymentPayoutRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->payment->getPaymentPayout($request);

    if ($response->paymentPayout !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetPaymentPayoutRequest](../../Models/Operations/GetPaymentPayoutRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetPaymentPayoutResponse](../../Models/Operations/GetPaymentPayoutResponse.md)**


## getPaymentRefund

Retrieve a refund

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetPaymentRefundRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->payment->getPaymentRefund($request);

    if ($response->paymentRefund !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetPaymentRefundRequest](../../Models/Operations/GetPaymentRefundRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetPaymentRefundResponse](../../Models/Operations/GetPaymentRefundResponse.md)**


## listPaymentLinks

List all links

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListPaymentLinksRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5840.47;
    $request->offset = 2505.87;
    $request->paymentId = '<value>';
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-19T04:38:46.756Z');;

    $response = $sdk->payment->listPaymentLinks($request);

    if ($response->paymentLinks !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\ListPaymentLinksRequest](../../Models/Operations/ListPaymentLinksRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\ListPaymentLinksResponse](../../Models/Operations/ListPaymentLinksResponse.md)**


## listPaymentPayments

List all payments

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListPaymentPaymentsRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->invoiceId = '<value>';
    $request->limit = 2381.17;
    $request->offset = 837.03;
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-25T04:38:11.791Z');;

    $response = $sdk->payment->listPaymentPayments($request);

    if ($response->paymentPayments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListPaymentPaymentsRequest](../../Models/Operations/ListPaymentPaymentsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListPaymentPaymentsResponse](../../Models/Operations/ListPaymentPaymentsResponse.md)**


## listPaymentPayouts

List all payouts

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListPaymentPayoutsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5474.75;
    $request->offset = 586.95;
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-05T08:15:58.034Z');;

    $response = $sdk->payment->listPaymentPayouts($request);

    if ($response->paymentPayouts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListPaymentPayoutsRequest](../../Models/Operations/ListPaymentPayoutsRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListPaymentPayoutsResponse](../../Models/Operations/ListPaymentPayoutsResponse.md)**


## listPaymentRefunds

List all refunds

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListPaymentRefundsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5820.28;
    $request->offset = 6141.19;
    $request->paymentId = '<value>';
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-03T22:54:27.299Z');;

    $response = $sdk->payment->listPaymentRefunds($request);

    if ($response->paymentRefunds !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListPaymentRefundsRequest](../../Models/Operations/ListPaymentRefundsRequest.md) | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListPaymentRefundsResponse](../../Models/Operations/ListPaymentRefundsResponse.md)**


## patchPaymentLink

Update a link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchPaymentLinkRequest();
    $request->paymentLink = new Shared\PaymentLink();
    $request->paymentLink->amount = 2219.73;
    $request->paymentLink->contactId = '<value>';
    $request->paymentLink->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-20T18:32:48.667Z');
    $request->paymentLink->currency = 'UIC-Franc';
    $request->paymentLink->id = '<id>';
    $request->paymentLink->isActive = false;
    $request->paymentLink->lineitems = [
        new Shared\PaymentLinkLineitem(),
    ];
    $request->paymentLink->paymentId = '<value>';
    $request->paymentLink->raw = [
        'Tellurium' => '<value>',
    ];
    $request->paymentLink->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-20T09:13:52.888Z');
    $request->paymentLink->url = 'http://accurate-costume.org';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->payment->patchPaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\PatchPaymentLinkRequest](../../Models/Operations/PatchPaymentLinkRequest.md) | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchPaymentLinkResponse](../../Models/Operations/PatchPaymentLinkResponse.md)**


## patchPaymentPayment

Update a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchPaymentPaymentRequest();
    $request->paymentPayment = new Shared\PaymentPayment();
    $request->paymentPayment->accountId = '<value>';
    $request->paymentPayment->contactId = '<value>';
    $request->paymentPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-28T13:33:54.908Z');
    $request->paymentPayment->currency = 'Cape Verde Escudo';
    $request->paymentPayment->id = '<id>';
    $request->paymentPayment->invoiceId = '<value>';
    $request->paymentPayment->notes = '<value>';
    $request->paymentPayment->paymentMethod = '<value>';
    $request->paymentPayment->raw = [
        'Dodge' => '<value>',
    ];
    $request->paymentPayment->reference = '<value>';
    $request->paymentPayment->totalAmount = 2981.35;
    $request->paymentPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-06T16:43:18.631Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->payment->patchPaymentPayment($request);

    if ($response->paymentPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchPaymentPaymentRequest](../../Models/Operations/PatchPaymentPaymentRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchPaymentPaymentResponse](../../Models/Operations/PatchPaymentPaymentResponse.md)**


## removePaymentLink

Remove a link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemovePaymentLinkRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->payment->removePaymentLink($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\RemovePaymentLinkRequest](../../Models/Operations/RemovePaymentLinkRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\RemovePaymentLinkResponse](../../Models/Operations/RemovePaymentLinkResponse.md)**


## removePaymentPayment

Remove a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemovePaymentPaymentRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->payment->removePaymentPayment($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemovePaymentPaymentRequest](../../Models/Operations/RemovePaymentPaymentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemovePaymentPaymentResponse](../../Models/Operations/RemovePaymentPaymentResponse.md)**


## updatePaymentLink

Update a link

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdatePaymentLinkRequest();
    $request->paymentLink = new Shared\PaymentLink();
    $request->paymentLink->amount = 6147.65;
    $request->paymentLink->contactId = '<value>';
    $request->paymentLink->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-02T07:49:35.280Z');
    $request->paymentLink->currency = 'Gibraltar Pound';
    $request->paymentLink->id = '<id>';
    $request->paymentLink->isActive = false;
    $request->paymentLink->lineitems = [
        new Shared\PaymentLinkLineitem(),
    ];
    $request->paymentLink->paymentId = '<value>';
    $request->paymentLink->raw = [
        'male' => '<value>',
    ];
    $request->paymentLink->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-22T16:01:32.942Z');
    $request->paymentLink->url = 'https://complex-glove.com';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->payment->updatePaymentLink($request);

    if ($response->paymentLink !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\UpdatePaymentLinkRequest](../../Models/Operations/UpdatePaymentLinkRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdatePaymentLinkResponse](../../Models/Operations/UpdatePaymentLinkResponse.md)**


## updatePaymentPayment

Update a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdatePaymentPaymentRequest();
    $request->paymentPayment = new Shared\PaymentPayment();
    $request->paymentPayment->accountId = '<value>';
    $request->paymentPayment->contactId = '<value>';
    $request->paymentPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-20T21:00:50.233Z');
    $request->paymentPayment->currency = 'Namibia Dollar';
    $request->paymentPayment->id = '<id>';
    $request->paymentPayment->invoiceId = '<value>';
    $request->paymentPayment->notes = '<value>';
    $request->paymentPayment->paymentMethod = '<value>';
    $request->paymentPayment->raw = [
        'Wagon' => '<value>',
    ];
    $request->paymentPayment->reference = '<value>';
    $request->paymentPayment->totalAmount = 2793.98;
    $request->paymentPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-23T01:02:53.585Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->payment->updatePaymentPayment($request);

    if ($response->paymentPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdatePaymentPaymentRequest](../../Models/Operations/UpdatePaymentPaymentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdatePaymentPaymentResponse](../../Models/Operations/UpdatePaymentPaymentResponse.md)**

