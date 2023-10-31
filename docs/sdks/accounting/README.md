# Accounting
(*accounting*)

### Available Operations

* [createAccountingCustomer](#createaccountingcustomer) - Create a customer
* [createAccountingInvoice](#createaccountinginvoice) - Create a invoice
* [createAccountingPayment](#createaccountingpayment) - Create a payment
* [getAccountingCustomer](#getaccountingcustomer) - Retrieve a customer
* [getAccountingInvoice](#getaccountinginvoice) - Retrieve a invoice
* [getAccountingPayment](#getaccountingpayment) - Retrieve a payment
* [listAccountingCustomers](#listaccountingcustomers) - List all customers
* [listAccountingInvoices](#listaccountinginvoices) - List all invoices
* [listAccountingPayments](#listaccountingpayments) - List all payments
* [patchAccountingCustomer](#patchaccountingcustomer) - Update a customer
* [patchAccountingInvoice](#patchaccountinginvoice) - Update a invoice
* [patchAccountingPayment](#patchaccountingpayment) - Update a payment
* [removeAccountingCustomer](#removeaccountingcustomer) - Remove a customer
* [removeAccountingInvoice](#removeaccountinginvoice) - Remove a invoice
* [removeAccountingPayment](#removeaccountingpayment) - Remove a payment
* [updateAccountingCustomer](#updateaccountingcustomer) - Update a customer
* [updateAccountingInvoice](#updateaccountinginvoice) - Update a invoice
* [updateAccountingPayment](#updateaccountingpayment) - Update a payment

## createAccountingCustomer

Create a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAccountingCustomerRequest;
use \Unified\Unified_to\Models\Shared\AccountingCustomer;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerBillingAddress;
use \Unified\Unified_to\Models\Shared\AccountingEmail;
use \Unified\Unified_to\Models\Shared\AccountingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerRaw;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerShippingAddress;
use \Unified\Unified_to\Models\Shared\AccountingCustomerTaxExemption;
use \Unified\Unified_to\Models\Shared\AccountingTelephone;
use \Unified\Unified_to\Models\Shared\AccountingTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAccountingCustomerRequest();
    $request->accountingCustomer = new AccountingCustomer();
    $request->accountingCustomer->billingAddress = new PropertyAccountingCustomerBillingAddress();
    $request->accountingCustomer->billingAddress->address1 = 'string';
    $request->accountingCustomer->billingAddress->address2 = 'string';
    $request->accountingCustomer->billingAddress->city = 'New Raulfield';
    $request->accountingCustomer->billingAddress->country = 'Libyan Arab Jamahiriya';
    $request->accountingCustomer->billingAddress->countryCode = 'IN';
    $request->accountingCustomer->billingAddress->postalCode = '22232';
    $request->accountingCustomer->billingAddress->region = 'string';
    $request->accountingCustomer->billingAddress->regionCode = 'string';
    $request->accountingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-22T19:16:48.798Z');
    $request->accountingCustomer->currency = 'Dalasi';
    $request->accountingCustomer->emails = [
        new AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Lake Freddy';
    $request->accountingCustomer->shippingAddress->country = 'Croatia';
    $request->accountingCustomer->shippingAddress->countryCode = 'SC';
    $request->accountingCustomer->shippingAddress->postalCode = '08305';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = AccountingCustomerTaxExemption::LocalGov;
    $request->accountingCustomer->telephones = [
        new AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-06T21:49:52.773Z');
    $request->connectionId = 'string';

    $response = $sdk->accounting->createAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingCustomerRequest](../../models/operations/CreateAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingCustomerResponse](../../models/operations/CreateAccountingCustomerResponse.md)**


## createAccountingInvoice

Create a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAccountingInvoiceRequest;
use \Unified\Unified_to\Models\Shared\AccountingInvoice;
use \Unified\Unified_to\Models\Shared\AccountingLineitem;
use \Unified\Unified_to\Models\Shared\PropertyAccountingInvoiceRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAccountingInvoiceRequest();
    $request->accountingInvoice = new AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 6736.06;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-27T05:21:39.307Z');
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-05T14:28:47.244Z');
    $request->accountingInvoice->currency = 'Uzbekistan Sum';
    $request->accountingInvoice->customerId = 'string';
    $request->accountingInvoice->discountAmount = 259.66;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-30T05:18:12.430Z');
    $request->accountingInvoice->id = '<ID>';
    $request->accountingInvoice->invoiceNumber = 'string';
    $request->accountingInvoice->lineitems = [
        new AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 7142.37;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-15T12:33:41.208Z');
    $request->accountingInvoice->raw = new PropertyAccountingInvoiceRaw();
    $request->accountingInvoice->refundAmount = 6572.32;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T06:26:36.842Z');
    $request->accountingInvoice->taxAmount = 1578.89;
    $request->accountingInvoice->totalAmount = 5503.49;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-02T06:50:07.075Z');
    $request->connectionId = 'string';

    $response = $sdk->accounting->createAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceRequest](../../models/operations/CreateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceResponse](../../models/operations/CreateAccountingInvoiceResponse.md)**


## createAccountingPayment

Create a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\CreateAccountingPaymentRequest;
use \Unified\Unified_to\Models\Shared\AccountingPayment;
use \Unified\Unified_to\Models\Shared\PropertyAccountingPaymentRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new CreateAccountingPaymentRequest();
    $request->accountingPayment = new AccountingPayment();
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-27T20:38:27.181Z');
    $request->accountingPayment->currency = 'Lari';
    $request->accountingPayment->customerId = 'string';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceIds = [
        'string',
    ];
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = new PropertyAccountingPaymentRaw();
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 291.36;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-30T13:35:20.411Z');
    $request->connectionId = 'string';

    $response = $sdk->accounting->createAccountingPayment($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingPaymentRequest](../../models/operations/CreateAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingPaymentResponse](../../models/operations/CreateAccountingPaymentResponse.md)**


## getAccountingCustomer

Retrieve a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAccountingCustomerRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAccountingCustomerRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->accounting->getAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingCustomerRequest](../../models/operations/GetAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingCustomerResponse](../../models/operations/GetAccountingCustomerResponse.md)**


## getAccountingInvoice

Retrieve a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAccountingInvoiceRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAccountingInvoiceRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->accounting->getAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingInvoiceRequest](../../models/operations/GetAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingInvoiceResponse](../../models/operations/GetAccountingInvoiceResponse.md)**


## getAccountingPayment

Retrieve a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new GetAccountingPaymentRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';

    $response = $sdk->accounting->getAccountingPayment($request);

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest](../../models/operations/GetAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingPaymentResponse](../../models/operations/GetAccountingPaymentResponse.md)**


## listAccountingCustomers

List all customers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAccountingCustomersRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAccountingCustomersRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 7844.09;
    $request->offset = 4439.53;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-23T13:14:33.970Z');

    $response = $sdk->accounting->listAccountingCustomers($request);

    if ($response->accountingCustomers !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingCustomersRequest](../../models/operations/ListAccountingCustomersRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingCustomersResponse](../../models/operations/ListAccountingCustomersResponse.md)**


## listAccountingInvoices

List all invoices

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAccountingInvoicesRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAccountingInvoicesRequest();
    $request->connectionId = 'string';
    $request->customerId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 6788.11;
    $request->offset = 5122.49;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-23T15:55:15.727Z');

    $response = $sdk->accounting->listAccountingInvoices($request);

    if ($response->accountingInvoices !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingInvoicesRequest](../../models/operations/ListAccountingInvoicesRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingInvoicesResponse](../../models/operations/ListAccountingInvoicesResponse.md)**


## listAccountingPayments

List all payments

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new ListAccountingPaymentsRequest();
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

    $response = $sdk->accounting->listAccountingPayments($request);

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest](../../models/operations/ListAccountingPaymentsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingPaymentsResponse](../../models/operations/ListAccountingPaymentsResponse.md)**


## patchAccountingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAccountingCustomerRequest;
use \Unified\Unified_to\Models\Shared\AccountingCustomer;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerBillingAddress;
use \Unified\Unified_to\Models\Shared\AccountingEmail;
use \Unified\Unified_to\Models\Shared\AccountingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerRaw;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerShippingAddress;
use \Unified\Unified_to\Models\Shared\AccountingCustomerTaxExemption;
use \Unified\Unified_to\Models\Shared\AccountingTelephone;
use \Unified\Unified_to\Models\Shared\AccountingTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAccountingCustomerRequest();
    $request->accountingCustomer = new AccountingCustomer();
    $request->accountingCustomer->billingAddress = new PropertyAccountingCustomerBillingAddress();
    $request->accountingCustomer->billingAddress->address1 = 'string';
    $request->accountingCustomer->billingAddress->address2 = 'string';
    $request->accountingCustomer->billingAddress->city = 'Visalia';
    $request->accountingCustomer->billingAddress->country = 'Norway';
    $request->accountingCustomer->billingAddress->countryCode = 'LY';
    $request->accountingCustomer->billingAddress->postalCode = '50996-7347';
    $request->accountingCustomer->billingAddress->region = 'string';
    $request->accountingCustomer->billingAddress->regionCode = 'string';
    $request->accountingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-27T01:00:12.169Z');
    $request->accountingCustomer->currency = 'Kina';
    $request->accountingCustomer->emails = [
        new AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Imaniburgh';
    $request->accountingCustomer->shippingAddress->country = 'Barbados';
    $request->accountingCustomer->shippingAddress->countryCode = 'MH';
    $request->accountingCustomer->shippingAddress->postalCode = '39981-0354';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = AccountingCustomerTaxExemption::Foreign;
    $request->accountingCustomer->telephones = [
        new AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-14T15:57:30.865Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->patchAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingCustomerRequest](../../models/operations/PatchAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingCustomerResponse](../../models/operations/PatchAccountingCustomerResponse.md)**


## patchAccountingInvoice

Update a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAccountingInvoiceRequest;
use \Unified\Unified_to\Models\Shared\AccountingInvoice;
use \Unified\Unified_to\Models\Shared\AccountingLineitem;
use \Unified\Unified_to\Models\Shared\PropertyAccountingInvoiceRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAccountingInvoiceRequest();
    $request->accountingInvoice = new AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 7374.1;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-18T11:43:07.271Z');
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-13T18:03:55.091Z');
    $request->accountingInvoice->currency = 'Gold';
    $request->accountingInvoice->customerId = 'string';
    $request->accountingInvoice->discountAmount = 9127.96;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-05T09:52:05.856Z');
    $request->accountingInvoice->id = '<ID>';
    $request->accountingInvoice->invoiceNumber = 'string';
    $request->accountingInvoice->lineitems = [
        new AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 7810.81;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-02T12:28:18.830Z');
    $request->accountingInvoice->raw = new PropertyAccountingInvoiceRaw();
    $request->accountingInvoice->refundAmount = 1152.38;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-23T04:43:31.245Z');
    $request->accountingInvoice->taxAmount = 6443.77;
    $request->accountingInvoice->totalAmount = 2117.25;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-28T14:04:43.902Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->patchAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceRequest](../../models/operations/PatchAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceResponse](../../models/operations/PatchAccountingInvoiceResponse.md)**


## patchAccountingPayment

Update a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\PatchAccountingPaymentRequest;
use \Unified\Unified_to\Models\Shared\AccountingPayment;
use \Unified\Unified_to\Models\Shared\PropertyAccountingPaymentRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new PatchAccountingPaymentRequest();
    $request->accountingPayment = new AccountingPayment();
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-02-25T01:44:17.944Z');
    $request->accountingPayment->currency = 'Boliviano boliviano';
    $request->accountingPayment->customerId = 'string';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceIds = [
        'string',
    ];
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = new PropertyAccountingPaymentRaw();
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 8698.74;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-07T21:51:56.510Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->patchAccountingPayment($request);

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingPaymentRequest](../../models/operations/PatchAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingPaymentResponse](../../models/operations/PatchAccountingPaymentResponse.md)**


## removeAccountingCustomer

Remove a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAccountingCustomerRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAccountingCustomerRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->removeAccountingCustomer($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingCustomerRequest](../../models/operations/RemoveAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingCustomerResponse](../../models/operations/RemoveAccountingCustomerResponse.md)**


## removeAccountingInvoice

Remove a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAccountingInvoiceRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->removeAccountingInvoice($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceRequest](../../models/operations/RemoveAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceResponse](../../models/operations/RemoveAccountingInvoiceResponse.md)**


## removeAccountingPayment

Remove a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\RemoveAccountingPaymentRequest;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new RemoveAccountingPaymentRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->removeAccountingPayment($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentRequest](../../models/operations/RemoveAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentResponse](../../models/operations/RemoveAccountingPaymentResponse.md)**


## updateAccountingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAccountingCustomerRequest;
use \Unified\Unified_to\Models\Shared\AccountingCustomer;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerBillingAddress;
use \Unified\Unified_to\Models\Shared\AccountingEmail;
use \Unified\Unified_to\Models\Shared\AccountingEmailType;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerRaw;
use \Unified\Unified_to\Models\Shared\PropertyAccountingCustomerShippingAddress;
use \Unified\Unified_to\Models\Shared\AccountingCustomerTaxExemption;
use \Unified\Unified_to\Models\Shared\AccountingTelephone;
use \Unified\Unified_to\Models\Shared\AccountingTelephoneType;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAccountingCustomerRequest();
    $request->accountingCustomer = new AccountingCustomer();
    $request->accountingCustomer->billingAddress = new PropertyAccountingCustomerBillingAddress();
    $request->accountingCustomer->billingAddress->address1 = 'string';
    $request->accountingCustomer->billingAddress->address2 = 'string';
    $request->accountingCustomer->billingAddress->city = 'Renton';
    $request->accountingCustomer->billingAddress->country = 'Iceland';
    $request->accountingCustomer->billingAddress->countryCode = 'VN';
    $request->accountingCustomer->billingAddress->postalCode = '77223-4340';
    $request->accountingCustomer->billingAddress->region = 'string';
    $request->accountingCustomer->billingAddress->regionCode = 'string';
    $request->accountingCustomer->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-08T08:34:01.295Z');
    $request->accountingCustomer->currency = 'Guinea Franc';
    $request->accountingCustomer->emails = [
        new AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Langworthstead';
    $request->accountingCustomer->shippingAddress->country = 'Anguilla';
    $request->accountingCustomer->shippingAddress->countryCode = 'LU';
    $request->accountingCustomer->shippingAddress->postalCode = '12624-4150';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = AccountingCustomerTaxExemption::CharitableOrg;
    $request->accountingCustomer->telephones = [
        new AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-26T10:11:07.824Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->updateAccountingCustomer($request);

    if ($response->accountingCustomer !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingCustomerRequest](../../models/operations/UpdateAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingCustomerResponse](../../models/operations/UpdateAccountingCustomerResponse.md)**


## updateAccountingInvoice

Update a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceRequest;
use \Unified\Unified_to\Models\Shared\AccountingInvoice;
use \Unified\Unified_to\Models\Shared\AccountingLineitem;
use \Unified\Unified_to\Models\Shared\PropertyAccountingInvoiceRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAccountingInvoiceRequest();
    $request->accountingInvoice = new AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 6974.28;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-02T19:25:29.417Z');
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-07-10T19:18:48.997Z');
    $request->accountingInvoice->currency = 'Forint';
    $request->accountingInvoice->customerId = 'string';
    $request->accountingInvoice->discountAmount = 2579.09;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-25T00:33:40.514Z');
    $request->accountingInvoice->id = '<ID>';
    $request->accountingInvoice->invoiceNumber = 'string';
    $request->accountingInvoice->lineitems = [
        new AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 3682.14;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-27T11:59:19.552Z');
    $request->accountingInvoice->raw = new PropertyAccountingInvoiceRaw();
    $request->accountingInvoice->refundAmount = 2842.49;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-05T12:20:35.409Z');
    $request->accountingInvoice->taxAmount = 3314.72;
    $request->accountingInvoice->totalAmount = 7535.06;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-25T22:43:40.071Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->updateAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceRequest](../../models/operations/UpdateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceResponse](../../models/operations/UpdateAccountingInvoiceResponse.md)**


## updateAccountingPayment

Update a payment

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to\UnifiedTo;
use \Unified\Unified_to\Models\Shared\Security;
use \Unified\Unified_to\Models\Operations\UpdateAccountingPaymentRequest;
use \Unified\Unified_to\Models\Shared\AccountingPayment;
use \Unified\Unified_to\Models\Shared\PropertyAccountingPaymentRaw;

$security = new Security();
$security->jwt = '';

$sdk = UnifiedTo::builder()
    ->setSecurity($security)
    ->build();

try {
    $request = new UpdateAccountingPaymentRequest();
    $request->accountingPayment = new AccountingPayment();
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-01-04T17:25:22.482Z');
    $request->accountingPayment->currency = 'Sudanese Pound';
    $request->accountingPayment->customerId = 'string';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceIds = [
        'string',
    ];
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = new PropertyAccountingPaymentRaw();
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 1869.63;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-14T15:37:22.784Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';

    $response = $sdk->accounting->updateAccountingPayment($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentRequest](../../models/operations/UpdateAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentResponse](../../models/operations/UpdateAccountingPaymentResponse.md)**

