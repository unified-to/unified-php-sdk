# Payment


### Available Operations

* [createAccountingPayment](#createaccountingpayment) - Create a payment
* [getAccountingPayment](#getaccountingpayment) - Retrieve a payment
* [listAccountingPayments](#listaccountingpayments) - List all payments
* [patchAccountingPayment](#patchaccountingpayment) - Update a payment
* [removeAccountingPayment](#removeaccountingpayment) - Remove a payment
* [updateAccountingPayment](#updateaccountingpayment) - Update a payment

## createAccountingPayment

Create a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\CreateAccountingPaymentRequest();
    $request->accountingPayment = new Shared\AccountingPayment();
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-27T20:38:27.181Z');
    $request->accountingPayment->currency = 'Lari';
    $request->accountingPayment->customerId = 'string';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceIds = [
        'string',
    ];
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = new Shared\PropertyAccountingPaymentRaw();
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 291.36;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-30T13:35:20.411Z');
    $request->connectionId = 'string';

    $response = $sdk->payment->createAccountingPayment($request);

    if ($response->accountingPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingPaymentRequest](../../Models/Operations/CreateAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingPaymentResponse](../../Models/Operations/CreateAccountingPaymentResponse.md)**


## getAccountingPayment

Retrieve a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\GetAccountingPaymentRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->payment->getAccountingPayment($request);

    if ($response->accountingPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest](../../Models/Operations/GetAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingPaymentResponse](../../Models/Operations/GetAccountingPaymentResponse.md)**


## listAccountingPayments

List all payments

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\ListAccountingPaymentsRequest();
    $request->connectionId = 'string';
    $request->customerId = 'string';
    $request->fields = [
        'string',
    ];
    $request->invoiceId = 'string';
    $request->limit = 487.78;
    $request->offset = 9308.83;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-25T01:03:12.222Z');

    $response = $sdk->payment->listAccountingPayments($request);

    if ($response->accountingPayments !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest](../../Models/Operations/ListAccountingPaymentsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingPaymentsResponse](../../Models/Operations/ListAccountingPaymentsResponse.md)**


## patchAccountingPayment

Update a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\PatchAccountingPaymentRequest();
    $request->accountingPayment = new Shared\AccountingPayment();
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-25T01:44:17.944Z');
    $request->accountingPayment->currency = 'Boliviano boliviano';
    $request->accountingPayment->customerId = 'string';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceIds = [
        'string',
    ];
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = new Shared\PropertyAccountingPaymentRaw();
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 8698.74;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-07T21:51:56.510Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->payment->patchAccountingPayment($request);

    if ($response->accountingPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingPaymentRequest](../../Models/Operations/PatchAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingPaymentResponse](../../Models/Operations/PatchAccountingPaymentResponse.md)**


## removeAccountingPayment

Remove a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\RemoveAccountingPaymentRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->payment->removeAccountingPayment($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentRequest](../../Models/Operations/RemoveAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentResponse](../../Models/Operations/RemoveAccountingPaymentResponse.md)**


## updateAccountingPayment

Update a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '';

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new Operations\UpdateAccountingPaymentRequest();
    $request->accountingPayment = new Shared\AccountingPayment();
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-04T17:25:22.482Z');
    $request->accountingPayment->currency = 'Sudanese Pound';
    $request->accountingPayment->customerId = 'string';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceIds = [
        'string',
    ];
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = new Shared\PropertyAccountingPaymentRaw();
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 1869.63;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-14T15:37:22.784Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->payment->updateAccountingPayment($request);

    if ($response->accountingPayment !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentRequest](../../Models/Operations/UpdateAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentResponse](../../Models/Operations/UpdateAccountingPaymentResponse.md)**

