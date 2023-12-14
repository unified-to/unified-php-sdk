# Accounting


### Available Operations

* [createAccountingAccount](#createaccountingaccount) - Create an account
* [createAccountingCustomer](#createaccountingcustomer) - Create a customer
* [createAccountingInvoice](#createaccountinginvoice) - Create a invoice
* [createAccountingPayment](#createaccountingpayment) - Create a payment
* [createAccountingTransaction](#createaccountingtransaction) - Create a transaction
* [getAccountingAccount](#getaccountingaccount) - Retrieve an account
* [getAccountingCustomer](#getaccountingcustomer) - Retrieve a customer
* [getAccountingInvoice](#getaccountinginvoice) - Retrieve a invoice
* [getAccountingPayment](#getaccountingpayment) - Retrieve a payment
* [getAccountingTransaction](#getaccountingtransaction) - Retrieve a transaction
* [listAccountingAccounts](#listaccountingaccounts) - List all accounts
* [listAccountingCustomers](#listaccountingcustomers) - List all customers
* [listAccountingInvoices](#listaccountinginvoices) - List all invoices
* [listAccountingPayments](#listaccountingpayments) - List all payments
* [listAccountingTransactions](#listaccountingtransactions) - List all transactions
* [patchAccountingAccount](#patchaccountingaccount) - Update an account
* [patchAccountingCustomer](#patchaccountingcustomer) - Update a customer
* [patchAccountingInvoice](#patchaccountinginvoice) - Update a invoice
* [patchAccountingPayment](#patchaccountingpayment) - Update a payment
* [patchAccountingTransaction](#patchaccountingtransaction) - Update a transaction
* [removeAccountingAccount](#removeaccountingaccount) - Remove an account
* [removeAccountingCustomer](#removeaccountingcustomer) - Remove a customer
* [removeAccountingInvoice](#removeaccountinginvoice) - Remove a invoice
* [removeAccountingPayment](#removeaccountingpayment) - Remove a payment
* [removeAccountingTransaction](#removeaccountingtransaction) - Remove a transaction
* [updateAccountingAccount](#updateaccountingaccount) - Update an account
* [updateAccountingCustomer](#updateaccountingcustomer) - Update a customer
* [updateAccountingInvoice](#updateaccountinginvoice) - Update a invoice
* [updateAccountingPayment](#updateaccountingpayment) - Update a payment
* [updateAccountingTransaction](#updateaccountingtransaction) - Update a transaction

## createAccountingAccount

Create an account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAccountingAccountRequest();
    $request->accountingAccount = new Shared\AccountingAccount();
    $request->accountingAccount->balance = 6602.56;
    $request->accountingAccount->bankAccountNumber = 'string';
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-02T08:51:10.063Z');
    $request->accountingAccount->currency = 'Saint Helena Pound';
    $request->accountingAccount->customerDefinedCode = 'string';
    $request->accountingAccount->description = 'Cross-group zero defect task-force';
    $request->accountingAccount->id = '<ID>';
    $request->accountingAccount->name = 'string';
    $request->accountingAccount->raw = new Shared\PropertyAccountingAccountRaw();
    $request->accountingAccount->status = Shared\Status::Active;
    $request->accountingAccount->type = Shared\Type::Equity;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-09T10:11:13.258Z');
    $request->connectionId = 'string';;

    $response = $sdk->accounting->createAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingAccountRequest](../../Models/Operations/CreateAccountingAccountRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingAccountResponse](../../Models/Operations/CreateAccountingAccountResponse.md)**


## createAccountingCustomer

Create a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAccountingCustomerRequest();
    $request->accountingCustomer = new Shared\AccountingCustomer();
    $request->accountingCustomer->billingAddress = new Shared\PropertyAccountingCustomerBillingAddress();
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
        new Shared\AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new Shared\PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new Shared\PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Lake Freddy';
    $request->accountingCustomer->shippingAddress->country = 'Croatia';
    $request->accountingCustomer->shippingAddress->countryCode = 'SC';
    $request->accountingCustomer->shippingAddress->postalCode = '08305';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = Shared\TaxExemption::LocalGov;
    $request->accountingCustomer->taxNumber = 'string';
    $request->accountingCustomer->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-06T21:49:52.773Z');
    $request->connectionId = 'string';;

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingCustomerRequest](../../Models/Operations/CreateAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingCustomerResponse](../../Models/Operations/CreateAccountingCustomerResponse.md)**


## createAccountingInvoice

Create a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
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
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 7142.37;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-15T12:33:41.208Z');
    $request->accountingInvoice->raw = new Shared\PropertyAccountingInvoiceRaw();
    $request->accountingInvoice->refundAmount = 6572.32;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T06:26:36.842Z');
    $request->accountingInvoice->taxAmount = 1578.89;
    $request->accountingInvoice->totalAmount = 5503.49;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-02T06:50:07.075Z');
    $request->connectionId = 'string';;

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceRequest](../../Models/Operations/CreateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceResponse](../../Models/Operations/CreateAccountingInvoiceResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->connectionId = 'string';;

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingPaymentRequest](../../Models/Operations/CreateAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingPaymentResponse](../../Models/Operations/CreateAccountingPaymentResponse.md)**


## createAccountingTransaction

Create a transaction

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->accountId = 'string';
    $request->accountingTransaction->createdAt = 'string';
    $request->accountingTransaction->currency = 'Libyan Dinar';
    $request->accountingTransaction->description = 'Pre-emptive multimedia benchmark';
    $request->accountingTransaction->id = '<ID>';
    $request->accountingTransaction->lineItems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = new Shared\PropertyAccountingTransactionRaw();
    $request->accountingTransaction->reference = 'string';
    $request->accountingTransaction->taxAmount = 2477.45;
    $request->accountingTransaction->totalAmount = 7389.88;
    $request->accountingTransaction->type = Shared\AccountingTransactionType::Spend;
    $request->accountingTransaction->updatedAt = 'string';
    $request->connectionId = 'string';;

    $response = $sdk->accounting->createAccountingTransaction($request);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAccountingTransactionRequest](../../Models/Operations/CreateAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingTransactionResponse](../../Models/Operations/CreateAccountingTransactionResponse.md)**


## getAccountingAccount

Retrieve an account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountingAccountRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->accounting->getAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingAccountRequest](../../Models/Operations/GetAccountingAccountRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingAccountResponse](../../Models/Operations/GetAccountingAccountResponse.md)**


## getAccountingCustomer

Retrieve a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountingCustomerRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingCustomerRequest](../../Models/Operations/GetAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingCustomerResponse](../../Models/Operations/GetAccountingCustomerResponse.md)**


## getAccountingInvoice

Retrieve a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountingInvoiceRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingInvoiceRequest](../../Models/Operations/GetAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingInvoiceResponse](../../Models/Operations/GetAccountingInvoiceResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountingPaymentRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

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
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest](../../Models/Operations/GetAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingPaymentResponse](../../Models/Operations/GetAccountingPaymentResponse.md)**


## getAccountingTransaction

Retrieve a transaction

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountingTransactionRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->accounting->getAccountingTransaction($request);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAccountingTransactionRequest](../../Models/Operations/GetAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingTransactionResponse](../../Models/Operations/GetAccountingTransactionResponse.md)**


## listAccountingAccounts

List all accounts

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAccountingAccountsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 9476.86;
    $request->offset = 5444.77;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-20T03:09:57.234Z');;

    $response = $sdk->accounting->listAccountingAccounts($request);

    if ($response->accountingAccounts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingAccountsRequest](../../Models/Operations/ListAccountingAccountsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingAccountsResponse](../../Models/Operations/ListAccountingAccountsResponse.md)**


## listAccountingCustomers

List all customers

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAccountingCustomersRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 7844.09;
    $request->offset = 4439.53;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-08-23T13:14:33.970Z');;

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingCustomersRequest](../../Models/Operations/ListAccountingCustomersRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingCustomersResponse](../../Models/Operations/ListAccountingCustomersResponse.md)**


## listAccountingInvoices

List all invoices

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAccountingInvoicesRequest();
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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-23T15:55:15.727Z');;

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingInvoicesRequest](../../Models/Operations/ListAccountingInvoicesRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingInvoicesResponse](../../Models/Operations/ListAccountingInvoicesResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-25T01:03:12.222Z');;

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest](../../Models/Operations/ListAccountingPaymentsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingPaymentsResponse](../../Models/Operations/ListAccountingPaymentsResponse.md)**


## listAccountingTransactions

List all transactions

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAccountingTransactionsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 7894.5;
    $request->offset = 4597.84;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-02T12:59:27.985Z');;

    $response = $sdk->accounting->listAccountingTransactions($request);

    if ($response->accountingTransactions !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAccountingTransactionsRequest](../../Models/Operations/ListAccountingTransactionsRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingTransactionsResponse](../../Models/Operations/ListAccountingTransactionsResponse.md)**


## patchAccountingAccount

Update an account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAccountingAccountRequest();
    $request->accountingAccount = new Shared\AccountingAccount();
    $request->accountingAccount->balance = 1931.26;
    $request->accountingAccount->bankAccountNumber = 'string';
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-09T05:24:17.966Z');
    $request->accountingAccount->currency = 'Won';
    $request->accountingAccount->customerDefinedCode = 'string';
    $request->accountingAccount->description = 'Quality-focused multimedia implementation';
    $request->accountingAccount->id = '<ID>';
    $request->accountingAccount->name = 'string';
    $request->accountingAccount->raw = new Shared\PropertyAccountingAccountRaw();
    $request->accountingAccount->status = Shared\Status::Archived;
    $request->accountingAccount->type = Shared\Type::Revenue;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-10T11:14:55.383Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->patchAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingAccountRequest](../../Models/Operations/PatchAccountingAccountRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingAccountResponse](../../Models/Operations/PatchAccountingAccountResponse.md)**


## patchAccountingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAccountingCustomerRequest();
    $request->accountingCustomer = new Shared\AccountingCustomer();
    $request->accountingCustomer->billingAddress = new Shared\PropertyAccountingCustomerBillingAddress();
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
        new Shared\AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new Shared\PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new Shared\PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Imaniburgh';
    $request->accountingCustomer->shippingAddress->country = 'Barbados';
    $request->accountingCustomer->shippingAddress->countryCode = 'MH';
    $request->accountingCustomer->shippingAddress->postalCode = '39981-0354';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = Shared\TaxExemption::Foreign;
    $request->accountingCustomer->taxNumber = 'string';
    $request->accountingCustomer->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-14T15:57:30.865Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingCustomerRequest](../../Models/Operations/PatchAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingCustomerResponse](../../Models/Operations/PatchAccountingCustomerResponse.md)**


## patchAccountingInvoice

Update a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
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
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 7810.81;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-02T12:28:18.830Z');
    $request->accountingInvoice->raw = new Shared\PropertyAccountingInvoiceRaw();
    $request->accountingInvoice->refundAmount = 1152.38;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-23T04:43:31.245Z');
    $request->accountingInvoice->taxAmount = 6443.77;
    $request->accountingInvoice->totalAmount = 2117.25;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-11-28T14:04:43.902Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceRequest](../../Models/Operations/PatchAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceResponse](../../Models/Operations/PatchAccountingInvoiceResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->id = '<ID>';;

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
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingPaymentRequest](../../Models/Operations/PatchAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingPaymentResponse](../../Models/Operations/PatchAccountingPaymentResponse.md)**


## patchAccountingTransaction

Update a transaction

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->accountId = 'string';
    $request->accountingTransaction->createdAt = 'string';
    $request->accountingTransaction->currency = 'Kwacha';
    $request->accountingTransaction->description = 'Multi-channelled transitional function';
    $request->accountingTransaction->id = '<ID>';
    $request->accountingTransaction->lineItems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = new Shared\PropertyAccountingTransactionRaw();
    $request->accountingTransaction->reference = 'string';
    $request->accountingTransaction->taxAmount = 535.65;
    $request->accountingTransaction->totalAmount = 3153.09;
    $request->accountingTransaction->type = Shared\AccountingTransactionType::Receive;
    $request->accountingTransaction->updatedAt = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->patchAccountingTransaction($request);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAccountingTransactionRequest](../../Models/Operations/PatchAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingTransactionResponse](../../Models/Operations/PatchAccountingTransactionResponse.md)**


## removeAccountingAccount

Remove an account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAccountingAccountRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->removeAccountingAccount($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingAccountRequest](../../Models/Operations/RemoveAccountingAccountRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingAccountResponse](../../Models/Operations/RemoveAccountingAccountResponse.md)**


## removeAccountingCustomer

Remove a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAccountingCustomerRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingCustomerRequest](../../Models/Operations/RemoveAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingCustomerResponse](../../Models/Operations/RemoveAccountingCustomerResponse.md)**


## removeAccountingInvoice

Remove a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAccountingInvoiceRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceRequest](../../Models/Operations/RemoveAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceResponse](../../Models/Operations/RemoveAccountingInvoiceResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAccountingPaymentRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentRequest](../../Models/Operations/RemoveAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentResponse](../../Models/Operations/RemoveAccountingPaymentResponse.md)**


## removeAccountingTransaction

Remove a transaction

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAccountingTransactionRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->removeAccountingTransaction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAccountingTransactionRequest](../../Models/Operations/RemoveAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingTransactionResponse](../../Models/Operations/RemoveAccountingTransactionResponse.md)**


## updateAccountingAccount

Update an account

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAccountingAccountRequest();
    $request->accountingAccount = new Shared\AccountingAccount();
    $request->accountingAccount->balance = 5954.09;
    $request->accountingAccount->bankAccountNumber = 'string';
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-05-21T20:36:10.841Z');
    $request->accountingAccount->currency = 'Tanzanian Shilling';
    $request->accountingAccount->customerDefinedCode = 'string';
    $request->accountingAccount->description = 'Stand-alone grid-enabled model';
    $request->accountingAccount->id = '<ID>';
    $request->accountingAccount->name = 'string';
    $request->accountingAccount->raw = new Shared\PropertyAccountingAccountRaw();
    $request->accountingAccount->status = Shared\Status::Active;
    $request->accountingAccount->type = Shared\Type::Bank;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-04-02T17:59:24.345Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->updateAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingAccountRequest](../../Models/Operations/UpdateAccountingAccountRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingAccountResponse](../../Models/Operations/UpdateAccountingAccountResponse.md)**


## updateAccountingCustomer

Update a customer

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAccountingCustomerRequest();
    $request->accountingCustomer = new Shared\AccountingCustomer();
    $request->accountingCustomer->billingAddress = new Shared\PropertyAccountingCustomerBillingAddress();
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
        new Shared\AccountingEmail(),
    ];
    $request->accountingCustomer->id = '<ID>';
    $request->accountingCustomer->isActive = false;
    $request->accountingCustomer->name = 'string';
    $request->accountingCustomer->raw = new Shared\PropertyAccountingCustomerRaw();
    $request->accountingCustomer->shippingAddress = new Shared\PropertyAccountingCustomerShippingAddress();
    $request->accountingCustomer->shippingAddress->address1 = 'string';
    $request->accountingCustomer->shippingAddress->address2 = 'string';
    $request->accountingCustomer->shippingAddress->city = 'Langworthstead';
    $request->accountingCustomer->shippingAddress->country = 'Anguilla';
    $request->accountingCustomer->shippingAddress->countryCode = 'LU';
    $request->accountingCustomer->shippingAddress->postalCode = '12624-4150';
    $request->accountingCustomer->shippingAddress->region = 'string';
    $request->accountingCustomer->shippingAddress->regionCode = 'string';
    $request->accountingCustomer->taxExemption = Shared\TaxExemption::CharitableOrg;
    $request->accountingCustomer->taxNumber = 'string';
    $request->accountingCustomer->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingCustomer->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-26T10:11:07.824Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingCustomerRequest](../../Models/Operations/UpdateAccountingCustomerRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingCustomerResponse](../../Models/Operations/UpdateAccountingCustomerResponse.md)**


## updateAccountingInvoice

Update a invoice

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
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
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 3682.14;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-27T11:59:19.552Z');
    $request->accountingInvoice->raw = new Shared\PropertyAccountingInvoiceRaw();
    $request->accountingInvoice->refundAmount = 2842.49;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2021-06-05T12:20:35.409Z');
    $request->accountingInvoice->taxAmount = 3314.72;
    $request->accountingInvoice->totalAmount = 7535.06;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-25T22:43:40.071Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceRequest](../../Models/Operations/UpdateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceResponse](../../Models/Operations/UpdateAccountingInvoiceResponse.md)**


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
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

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
    $request->id = '<ID>';;

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentRequest](../../Models/Operations/UpdateAccountingPaymentRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentResponse](../../Models/Operations/UpdateAccountingPaymentResponse.md)**


## updateAccountingTransaction

Update a transaction

### Example Usage

```php
<?php

declare(strict_types=1);
require_once 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->accountId = 'string';
    $request->accountingTransaction->createdAt = 'string';
    $request->accountingTransaction->currency = 'Zloty';
    $request->accountingTransaction->description = 'Organic web-enabled orchestration';
    $request->accountingTransaction->id = '<ID>';
    $request->accountingTransaction->lineItems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = new Shared\PropertyAccountingTransactionRaw();
    $request->accountingTransaction->reference = 'string';
    $request->accountingTransaction->taxAmount = 2397.73;
    $request->accountingTransaction->totalAmount = 1897.48;
    $request->accountingTransaction->type = Shared\AccountingTransactionType::Receive;
    $request->accountingTransaction->updatedAt = 'string';
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->updateAccountingTransaction($request);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAccountingTransactionRequest](../../Models/Operations/UpdateAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingTransactionResponse](../../Models/Operations/UpdateAccountingTransactionResponse.md)**

