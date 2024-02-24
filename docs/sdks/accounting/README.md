# Accounting


### Available Operations

* [createAccountingAccount](#createaccountingaccount) - Create an account
* [createAccountingContact](#createaccountingcontact) - Create a contact
* [createAccountingInvoice](#createaccountinginvoice) - Create a invoice
* [createAccountingPayment](#createaccountingpayment) - Create a payment
* [createAccountingTaxrate](#createaccountingtaxrate) - Create a taxrate
* [createAccountingTransaction](#createaccountingtransaction) - Create a transaction
* [getAccountingAccount](#getaccountingaccount) - Retrieve an account
* [getAccountingContact](#getaccountingcontact) - Retrieve a contact
* [getAccountingInvoice](#getaccountinginvoice) - Retrieve a invoice
* [getAccountingOrganization](#getaccountingorganization) - Retrieve an organization
* [getAccountingPayment](#getaccountingpayment) - Retrieve a payment
* [getAccountingPayout](#getaccountingpayout) - Retrieve a payout
* [getAccountingRefund](#getaccountingrefund) - Retrieve a refund
* [getAccountingTaxrate](#getaccountingtaxrate) - Retrieve a taxrate
* [getAccountingTransaction](#getaccountingtransaction) - Retrieve a transaction
* [listAccountingAccounts](#listaccountingaccounts) - List all accounts
* [listAccountingContacts](#listaccountingcontacts) - List all contacts
* [listAccountingInvoices](#listaccountinginvoices) - List all invoices
* [listAccountingOrganizations](#listaccountingorganizations) - List all organizations
* [listAccountingPayments](#listaccountingpayments) - List all payments
* [listAccountingPayouts](#listaccountingpayouts) - List all payouts
* [listAccountingRefunds](#listaccountingrefunds) - List all refunds
* [listAccountingTaxrates](#listaccountingtaxrates) - List all taxrates
* [listAccountingTransactions](#listaccountingtransactions) - List all transactions
* [patchAccountingAccount](#patchaccountingaccount) - Update an account
* [patchAccountingContact](#patchaccountingcontact) - Update a contact
* [patchAccountingInvoice](#patchaccountinginvoice) - Update a invoice
* [patchAccountingPayment](#patchaccountingpayment) - Update a payment
* [patchAccountingTaxrate](#patchaccountingtaxrate) - Update a taxrate
* [patchAccountingTransaction](#patchaccountingtransaction) - Update a transaction
* [removeAccountingAccount](#removeaccountingaccount) - Remove an account
* [removeAccountingContact](#removeaccountingcontact) - Remove a contact
* [removeAccountingInvoice](#removeaccountinginvoice) - Remove a invoice
* [removeAccountingPayment](#removeaccountingpayment) - Remove a payment
* [removeAccountingTaxrate](#removeaccountingtaxrate) - Remove a taxrate
* [removeAccountingTransaction](#removeaccountingtransaction) - Remove a transaction
* [updateAccountingAccount](#updateaccountingaccount) - Update an account
* [updateAccountingContact](#updateaccountingcontact) - Update a contact
* [updateAccountingInvoice](#updateaccountinginvoice) - Update a invoice
* [updateAccountingPayment](#updateaccountingpayment) - Update a payment
* [updateAccountingTaxrate](#updateaccountingtaxrate) - Update a taxrate
* [updateAccountingTransaction](#updateaccountingtransaction) - Update a transaction

## createAccountingAccount

Create an account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAccountingAccountRequest();
    $request->accountingAccount = new Shared\AccountingAccount();
    $request->accountingAccount->balance = 6602.56;
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-02T22:12:31.771Z');
    $request->accountingAccount->currency = 'Saint Helena Pound';
    $request->accountingAccount->customerDefinedCode = '<value>';
    $request->accountingAccount->description = 'Cross-group zero defect task-force';
    $request->accountingAccount->id = '<id>';
    $request->accountingAccount->isPayable = false;
    $request->accountingAccount->name = '<value>';
    $request->accountingAccount->raw = [
        'Ruble' => '<value>',
    ];
    $request->accountingAccount->status = Shared\Status::Active;
    $request->accountingAccount->type = Shared\Type::FixedAsset;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-01T23:54:12.882Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAccountingAccountSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->createAccountingAccount($request, $requestSecurity);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingAccountRequest](../../Models/Operations/CreateAccountingAccountRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingAccountSecurity](../../Models/Operations/CreateAccountingAccountSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingAccountResponse](../../Models/Operations/CreateAccountingAccountResponse.md)**


## createAccountingContact

Create a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAccountingContactRequest();
    $request->accountingContact = new Shared\AccountingContact();
    $request->accountingContact->billingAddress = new Shared\PropertyAccountingContactBillingAddress();
    $request->accountingContact->billingAddress->address1 = '<value>';
    $request->accountingContact->billingAddress->address2 = '<value>';
    $request->accountingContact->billingAddress->city = 'Lake Benny';
    $request->accountingContact->billingAddress->country = 'Azerbaijan';
    $request->accountingContact->billingAddress->countryCode = 'GT';
    $request->accountingContact->billingAddress->postalCode = '48359-3238';
    $request->accountingContact->billingAddress->region = '<value>';
    $request->accountingContact->billingAddress->regionCode = '<value>';
    $request->accountingContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-19T03:22:44.048Z');
    $request->accountingContact->currency = 'Peso Uruguayo';
    $request->accountingContact->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingContact->id = '<id>';
    $request->accountingContact->isActive = false;
    $request->accountingContact->isCustomer = false;
    $request->accountingContact->isSupplier = false;
    $request->accountingContact->name = '<value>';
    $request->accountingContact->raw = [
        'unfold' => '<value>',
    ];
    $request->accountingContact->shippingAddress = new Shared\PropertyAccountingContactShippingAddress();
    $request->accountingContact->shippingAddress->address1 = '<value>';
    $request->accountingContact->shippingAddress->address2 = '<value>';
    $request->accountingContact->shippingAddress->city = 'Port Wilberfield';
    $request->accountingContact->shippingAddress->country = 'Bouvet Island (Bouvetoya)';
    $request->accountingContact->shippingAddress->countryCode = 'AM';
    $request->accountingContact->shippingAddress->postalCode = '62093';
    $request->accountingContact->shippingAddress->region = '<value>';
    $request->accountingContact->shippingAddress->regionCode = '<value>';
    $request->accountingContact->taxExemption = Shared\TaxExemption::EducationalOrg;
    $request->accountingContact->taxNumber = '<value>';
    $request->accountingContact->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-29T11:32:51.059Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAccountingContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->createAccountingContact($request, $requestSecurity);

    if ($response->accountingContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingContactRequest](../../Models/Operations/CreateAccountingContactRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingContactSecurity](../../Models/Operations/CreateAccountingContactSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingContactResponse](../../Models/Operations/CreateAccountingContactResponse.md)**


## createAccountingInvoice

Create a invoice

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 6736.06;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-27T09:14:42.959Z');
    $request->accountingInvoice->contactId = '<value>';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-05T18:32:52.109Z');
    $request->accountingInvoice->currency = 'Uzbekistan Sum';
    $request->accountingInvoice->discountAmount = 259.66;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-30T15:54:59.455Z');
    $request->accountingInvoice->id = '<id>';
    $request->accountingInvoice->invoiceNumber = '<value>';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = '<value>';
    $request->accountingInvoice->paidAmount = 7142.37;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-16T02:12:20.862Z');
    $request->accountingInvoice->raw = [
        'Central' => '<value>',
    ];
    $request->accountingInvoice->refundAmount = 1578.89;
    $request->accountingInvoice->refundReason = '<value>';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-27T04:22:20.182Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Authorized;
    $request->accountingInvoice->taxAmount = 6864;
    $request->accountingInvoice->totalAmount = 6873.46;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-19T22:49:02.835Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAccountingInvoiceSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->createAccountingInvoice($request, $requestSecurity);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceRequest](../../Models/Operations/CreateAccountingInvoiceRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceSecurity](../../Models/Operations/CreateAccountingInvoiceSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceResponse](../../Models/Operations/CreateAccountingInvoiceResponse.md)**


## createAccountingPayment

Create a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAccountingPaymentRequest();
    $request->accountingPayment = new Shared\AccountingPayment();
    $request->accountingPayment->accountId = '<value>';
    $request->accountingPayment->contactId = '<value>';
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-28T13:13:46.548Z');
    $request->accountingPayment->currency = 'Lari';
    $request->accountingPayment->id = '<id>';
    $request->accountingPayment->invoiceId = '<value>';
    $request->accountingPayment->notes = '<value>';
    $request->accountingPayment->paymentMethod = '<value>';
    $request->accountingPayment->raw = [
        'Mount' => '<value>',
    ];
    $request->accountingPayment->reference = '<value>';
    $request->accountingPayment->totalAmount = 1821.1;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-22T09:20:36.660Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAccountingPaymentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->createAccountingPayment($request, $requestSecurity);

    if ($response->accountingPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingPaymentRequest](../../Models/Operations/CreateAccountingPaymentRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingPaymentSecurity](../../Models/Operations/CreateAccountingPaymentSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingPaymentResponse](../../Models/Operations/CreateAccountingPaymentResponse.md)**


## createAccountingTaxrate

Create a taxrate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-08T09:55:20.238Z');
    $request->accountingTaxrate->description = 'Enterprise-wide content-based productivity';
    $request->accountingTaxrate->id = '<id>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = '<value>';
    $request->accountingTaxrate->rate = 6789.7;
    $request->accountingTaxrate->raw = [
        'Human' => '<value>',
    ];
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-06T04:09:12.755Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAccountingTaxrateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->createAccountingTaxrate($request, $requestSecurity);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingTaxrateRequest](../../Models/Operations/CreateAccountingTaxrateRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateAccountingTaxrateSecurity](../../Models/Operations/CreateAccountingTaxrateSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingTaxrateResponse](../../Models/Operations/CreateAccountingTaxrateResponse.md)**


## createAccountingTransaction

Create a transaction

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->createdAt = '<value>';
    $request->accountingTransaction->currency = 'Libyan Dinar';
    $request->accountingTransaction->description = 'Pre-emptive multimedia benchmark';
    $request->accountingTransaction->id = '<id>';
    $request->accountingTransaction->lineitems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = [
        'Metal' => '<value>',
    ];
    $request->accountingTransaction->reference = '<value>';
    $request->accountingTransaction->taxAmount = 8276.07;
    $request->accountingTransaction->taxrateId = '<value>';
    $request->accountingTransaction->updatedAt = '<value>';
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateAccountingTransactionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->createAccountingTransaction($request, $requestSecurity);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateAccountingTransactionRequest](../../Models/Operations/CreateAccountingTransactionRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateAccountingTransactionSecurity](../../Models/Operations/CreateAccountingTransactionSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingTransactionResponse](../../Models/Operations/CreateAccountingTransactionResponse.md)**


## getAccountingAccount

Retrieve an account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingAccountRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingAccountSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingAccount($request, $requestSecurity);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingAccountRequest](../../Models/Operations/GetAccountingAccountRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingAccountSecurity](../../Models/Operations/GetAccountingAccountSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingAccountResponse](../../Models/Operations/GetAccountingAccountResponse.md)**


## getAccountingContact

Retrieve a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingContactRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingContact($request, $requestSecurity);

    if ($response->accountingContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingContactRequest](../../Models/Operations/GetAccountingContactRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingContactSecurity](../../Models/Operations/GetAccountingContactSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingContactResponse](../../Models/Operations/GetAccountingContactResponse.md)**


## getAccountingInvoice

Retrieve a invoice

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingInvoiceRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingInvoiceSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingInvoice($request, $requestSecurity);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingInvoiceRequest](../../Models/Operations/GetAccountingInvoiceRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingInvoiceSecurity](../../Models/Operations/GetAccountingInvoiceSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingInvoiceResponse](../../Models/Operations/GetAccountingInvoiceResponse.md)**


## getAccountingOrganization

Retrieve an organization

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingOrganizationRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingOrganizationSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingOrganization($request, $requestSecurity);

    if ($response->accountingOrganization !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetAccountingOrganizationRequest](../../Models/Operations/GetAccountingOrganizationRequest.md)   | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |
| `security`                                                                                                                              | [\Unified\Unified_to\Models\Operations\GetAccountingOrganizationSecurity](../../Models/Operations/GetAccountingOrganizationSecurity.md) | :heavy_check_mark:                                                                                                                      | The security requirements to use for the request.                                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingOrganizationResponse](../../Models/Operations/GetAccountingOrganizationResponse.md)**


## getAccountingPayment

Retrieve a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingPaymentRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingPaymentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingPayment($request, $requestSecurity);

    if ($response->accountingPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingPaymentRequest](../../Models/Operations/GetAccountingPaymentRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingPaymentSecurity](../../Models/Operations/GetAccountingPaymentSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingPaymentResponse](../../Models/Operations/GetAccountingPaymentResponse.md)**


## getAccountingPayout

Retrieve a payout

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingPayoutRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingPayoutSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingPayout($request, $requestSecurity);

    if ($response->accountingPayout !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingPayoutRequest](../../Models/Operations/GetAccountingPayoutRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingPayoutSecurity](../../Models/Operations/GetAccountingPayoutSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingPayoutResponse](../../Models/Operations/GetAccountingPayoutResponse.md)**


## getAccountingRefund

Retrieve a refund

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingRefundRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingRefundSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingRefund($request, $requestSecurity);

    if ($response->accountingRefund !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingRefundRequest](../../Models/Operations/GetAccountingRefundRequest.md)   | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |
| `security`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingRefundSecurity](../../Models/Operations/GetAccountingRefundSecurity.md) | :heavy_check_mark:                                                                                                          | The security requirements to use for the request.                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingRefundResponse](../../Models/Operations/GetAccountingRefundResponse.md)**


## getAccountingTaxrate

Retrieve a taxrate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingTaxrateRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingTaxrateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingTaxrate($request, $requestSecurity);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                     | Type                                                                                                                          | Required                                                                                                                      | Description                                                                                                                   |
| ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingTaxrateRequest](../../Models/Operations/GetAccountingTaxrateRequest.md)   | :heavy_check_mark:                                                                                                            | The request object to use for the request.                                                                                    |
| `security`                                                                                                                    | [\Unified\Unified_to\Models\Operations\GetAccountingTaxrateSecurity](../../Models/Operations/GetAccountingTaxrateSecurity.md) | :heavy_check_mark:                                                                                                            | The security requirements to use for the request.                                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingTaxrateResponse](../../Models/Operations/GetAccountingTaxrateResponse.md)**


## getAccountingTransaction

Retrieve a transaction

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetAccountingTransactionRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetAccountingTransactionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->getAccountingTransaction($request, $requestSecurity);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetAccountingTransactionRequest](../../Models/Operations/GetAccountingTransactionRequest.md)   | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |
| `security`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetAccountingTransactionSecurity](../../Models/Operations/GetAccountingTransactionSecurity.md) | :heavy_check_mark:                                                                                                                    | The security requirements to use for the request.                                                                                     |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingTransactionResponse](../../Models/Operations/GetAccountingTransactionResponse.md)**


## listAccountingAccounts

List all accounts

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingAccountsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 9476.86;
    $request->offset = 5444.77;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-19T21:33:28.191Z');;

    $requestSecurity = new Operations\ListAccountingAccountsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingAccounts($request, $requestSecurity);

    if ($response->accountingAccounts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingAccountsRequest](../../Models/Operations/ListAccountingAccountsRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingAccountsSecurity](../../Models/Operations/ListAccountingAccountsSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingAccountsResponse](../../Models/Operations/ListAccountingAccountsResponse.md)**


## listAccountingContacts

List all contacts

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingContactsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 4596.32;
    $request->offset = 8881.9;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->type = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-26T14:00:38.736Z');;

    $requestSecurity = new Operations\ListAccountingContactsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingContacts($request, $requestSecurity);

    if ($response->accountingContacts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingContactsRequest](../../Models/Operations/ListAccountingContactsRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingContactsSecurity](../../Models/Operations/ListAccountingContactsSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingContactsResponse](../../Models/Operations/ListAccountingContactsResponse.md)**


## listAccountingInvoices

List all invoices

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingInvoicesRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 6788.11;
    $request->offset = 5122.49;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-23T19:02:52.454Z');;

    $requestSecurity = new Operations\ListAccountingInvoicesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingInvoices($request, $requestSecurity);

    if ($response->accountingInvoices !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingInvoicesRequest](../../Models/Operations/ListAccountingInvoicesRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingInvoicesSecurity](../../Models/Operations/ListAccountingInvoicesSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingInvoicesResponse](../../Models/Operations/ListAccountingInvoicesResponse.md)**


## listAccountingOrganizations

List all organizations

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingOrganizationsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 4896.89;
    $request->offset = 9817.05;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-02T18:55:09.644Z');;

    $requestSecurity = new Operations\ListAccountingOrganizationsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingOrganizations($request, $requestSecurity);

    if ($response->accountingOrganizations !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListAccountingOrganizationsRequest](../../Models/Operations/ListAccountingOrganizationsRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\ListAccountingOrganizationsSecurity](../../Models/Operations/ListAccountingOrganizationsSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingOrganizationsResponse](../../Models/Operations/ListAccountingOrganizationsResponse.md)**


## listAccountingPayments

List all payments

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingPaymentsRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->invoiceId = '<value>';
    $request->limit = 487.78;
    $request->offset = 9308.83;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-25T18:15:35.411Z');;

    $requestSecurity = new Operations\ListAccountingPaymentsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingPayments($request, $requestSecurity);

    if ($response->accountingPayments !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingPaymentsRequest](../../Models/Operations/ListAccountingPaymentsRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingPaymentsSecurity](../../Models/Operations/ListAccountingPaymentsSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingPaymentsResponse](../../Models/Operations/ListAccountingPaymentsResponse.md)**


## listAccountingPayouts

List all payouts

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingPayoutsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 6876.93;
    $request->offset = 5.2;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-08T08:07:55.044Z');;

    $requestSecurity = new Operations\ListAccountingPayoutsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingPayouts($request, $requestSecurity);

    if ($response->accountingPayouts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingPayoutsRequest](../../Models/Operations/ListAccountingPayoutsRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingPayoutsSecurity](../../Models/Operations/ListAccountingPayoutsSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingPayoutsResponse](../../Models/Operations/ListAccountingPayoutsResponse.md)**


## listAccountingRefunds

List all refunds

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingRefundsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 8743.36;
    $request->offset = 6995.02;
    $request->order = '<value>';
    $request->paymentId = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-01T03:28:05.895Z');;

    $requestSecurity = new Operations\ListAccountingRefundsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingRefunds($request, $requestSecurity);

    if ($response->accountingRefunds !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingRefundsRequest](../../Models/Operations/ListAccountingRefundsRequest.md)   | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |
| `security`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingRefundsSecurity](../../Models/Operations/ListAccountingRefundsSecurity.md) | :heavy_check_mark:                                                                                                              | The security requirements to use for the request.                                                                               |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingRefundsResponse](../../Models/Operations/ListAccountingRefundsResponse.md)**


## listAccountingTaxrates

List all taxrates

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingTaxratesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 1599.19;
    $request->offset = 1097.48;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T14:31:13.247Z');;

    $requestSecurity = new Operations\ListAccountingTaxratesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingTaxrates($request, $requestSecurity);

    if ($response->accountingTaxrates !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingTaxratesRequest](../../Models/Operations/ListAccountingTaxratesRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\ListAccountingTaxratesSecurity](../../Models/Operations/ListAccountingTaxratesSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingTaxratesResponse](../../Models/Operations/ListAccountingTaxratesResponse.md)**


## listAccountingTransactions

List all transactions

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListAccountingTransactionsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 7894.5;
    $request->offset = 4597.84;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-02T12:20:43.572Z');;

    $requestSecurity = new Operations\ListAccountingTransactionsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->listAccountingTransactions($request, $requestSecurity);

    if ($response->accountingTransactions !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAccountingTransactionsRequest](../../Models/Operations/ListAccountingTransactionsRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAccountingTransactionsSecurity](../../Models/Operations/ListAccountingTransactionsSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingTransactionsResponse](../../Models/Operations/ListAccountingTransactionsResponse.md)**


## patchAccountingAccount

Update an account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAccountingAccountRequest();
    $request->accountingAccount = new Shared\AccountingAccount();
    $request->accountingAccount->balance = 1931.26;
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-09T13:35:06.969Z');
    $request->accountingAccount->currency = 'Won';
    $request->accountingAccount->customerDefinedCode = '<value>';
    $request->accountingAccount->description = 'Quality-focused multimedia implementation';
    $request->accountingAccount->id = '<id>';
    $request->accountingAccount->isPayable = false;
    $request->accountingAccount->name = '<value>';
    $request->accountingAccount->raw = [
        'male' => '<value>',
    ];
    $request->accountingAccount->status = Shared\Status::Archived;
    $request->accountingAccount->type = Shared\Type::Expense;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-01T20:09:00.405Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAccountingAccountSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->patchAccountingAccount($request, $requestSecurity);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingAccountRequest](../../Models/Operations/PatchAccountingAccountRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingAccountSecurity](../../Models/Operations/PatchAccountingAccountSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingAccountResponse](../../Models/Operations/PatchAccountingAccountResponse.md)**


## patchAccountingContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAccountingContactRequest();
    $request->accountingContact = new Shared\AccountingContact();
    $request->accountingContact->billingAddress = new Shared\PropertyAccountingContactBillingAddress();
    $request->accountingContact->billingAddress->address1 = '<value>';
    $request->accountingContact->billingAddress->address2 = '<value>';
    $request->accountingContact->billingAddress->city = 'Sylvestermouth';
    $request->accountingContact->billingAddress->country = 'Norfolk Island';
    $request->accountingContact->billingAddress->countryCode = 'BN';
    $request->accountingContact->billingAddress->postalCode = '34531-3519';
    $request->accountingContact->billingAddress->region = '<value>';
    $request->accountingContact->billingAddress->regionCode = '<value>';
    $request->accountingContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-14T18:48:39.369Z');
    $request->accountingContact->currency = 'Singapore Dollar';
    $request->accountingContact->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingContact->id = '<id>';
    $request->accountingContact->isActive = false;
    $request->accountingContact->isCustomer = false;
    $request->accountingContact->isSupplier = false;
    $request->accountingContact->name = '<value>';
    $request->accountingContact->raw = [
        'bypass' => '<value>',
    ];
    $request->accountingContact->shippingAddress = new Shared\PropertyAccountingContactShippingAddress();
    $request->accountingContact->shippingAddress->address1 = '<value>';
    $request->accountingContact->shippingAddress->address2 = '<value>';
    $request->accountingContact->shippingAddress->city = 'Koeppfield';
    $request->accountingContact->shippingAddress->country = 'Netherlands Antilles';
    $request->accountingContact->shippingAddress->countryCode = 'NE';
    $request->accountingContact->shippingAddress->postalCode = '36791';
    $request->accountingContact->shippingAddress->region = '<value>';
    $request->accountingContact->shippingAddress->regionCode = '<value>';
    $request->accountingContact->taxExemption = Shared\TaxExemption::TribalGov;
    $request->accountingContact->taxNumber = '<value>';
    $request->accountingContact->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-15T21:20:14.932Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAccountingContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->patchAccountingContact($request, $requestSecurity);

    if ($response->accountingContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingContactRequest](../../Models/Operations/PatchAccountingContactRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingContactSecurity](../../Models/Operations/PatchAccountingContactSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingContactResponse](../../Models/Operations/PatchAccountingContactResponse.md)**


## patchAccountingInvoice

Update a invoice

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 7374.1;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-18T11:25:21.140Z');
    $request->accountingInvoice->contactId = '<value>';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T05:39:15.854Z');
    $request->accountingInvoice->currency = 'Gold';
    $request->accountingInvoice->discountAmount = 9127.96;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-05T05:55:55.560Z');
    $request->accountingInvoice->id = '<id>';
    $request->accountingInvoice->invoiceNumber = '<value>';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = '<value>';
    $request->accountingInvoice->paidAmount = 7810.81;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-02T21:47:54.080Z');
    $request->accountingInvoice->raw = [
        'Northwest' => '<value>',
    ];
    $request->accountingInvoice->refundAmount = 6443.77;
    $request->accountingInvoice->refundReason = '<value>';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-21T01:13:52.344Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Draft;
    $request->accountingInvoice->taxAmount = 1140.08;
    $request->accountingInvoice->totalAmount = 4543.48;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-02T12:10:13.037Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAccountingInvoiceSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->patchAccountingInvoice($request, $requestSecurity);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceRequest](../../Models/Operations/PatchAccountingInvoiceRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceSecurity](../../Models/Operations/PatchAccountingInvoiceSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceResponse](../../Models/Operations/PatchAccountingInvoiceResponse.md)**


## patchAccountingPayment

Update a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAccountingPaymentRequest();
    $request->accountingPayment = new Shared\AccountingPayment();
    $request->accountingPayment->accountId = '<value>';
    $request->accountingPayment->contactId = '<value>';
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-25T02:56:43.385Z');
    $request->accountingPayment->currency = 'Boliviano boliviano';
    $request->accountingPayment->id = '<id>';
    $request->accountingPayment->invoiceId = '<value>';
    $request->accountingPayment->notes = '<value>';
    $request->accountingPayment->paymentMethod = '<value>';
    $request->accountingPayment->raw = [
        'periodic' => '<value>',
    ];
    $request->accountingPayment->reference = '<value>';
    $request->accountingPayment->totalAmount = 9979.6;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-15T02:06:02.492Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAccountingPaymentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->patchAccountingPayment($request, $requestSecurity);

    if ($response->accountingPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingPaymentRequest](../../Models/Operations/PatchAccountingPaymentRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingPaymentSecurity](../../Models/Operations/PatchAccountingPaymentSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingPaymentResponse](../../Models/Operations/PatchAccountingPaymentResponse.md)**


## patchAccountingTaxrate

Update a taxrate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-19T15:57:03.731Z');
    $request->accountingTaxrate->description = 'Quality-focused user-facing complexity';
    $request->accountingTaxrate->id = '<id>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = '<value>';
    $request->accountingTaxrate->rate = 220.78;
    $request->accountingTaxrate->raw = [
        'Facilitator' => '<value>',
    ];
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-17T14:16:26.961Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAccountingTaxrateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->patchAccountingTaxrate($request, $requestSecurity);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingTaxrateRequest](../../Models/Operations/PatchAccountingTaxrateRequest.md)   | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |
| `security`                                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchAccountingTaxrateSecurity](../../Models/Operations/PatchAccountingTaxrateSecurity.md) | :heavy_check_mark:                                                                                                                | The security requirements to use for the request.                                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingTaxrateResponse](../../Models/Operations/PatchAccountingTaxrateResponse.md)**


## patchAccountingTransaction

Update a transaction

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->createdAt = '<value>';
    $request->accountingTransaction->currency = 'Kwacha';
    $request->accountingTransaction->description = 'Multi-channelled transitional function';
    $request->accountingTransaction->id = '<id>';
    $request->accountingTransaction->lineitems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = [
        'Gambia' => '<value>',
    ];
    $request->accountingTransaction->reference = '<value>';
    $request->accountingTransaction->taxAmount = 259.82;
    $request->accountingTransaction->taxrateId = '<value>';
    $request->accountingTransaction->updatedAt = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchAccountingTransactionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->patchAccountingTransaction($request, $requestSecurity);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchAccountingTransactionRequest](../../Models/Operations/PatchAccountingTransactionRequest.md)   | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |
| `security`                                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchAccountingTransactionSecurity](../../Models/Operations/PatchAccountingTransactionSecurity.md) | :heavy_check_mark:                                                                                                                        | The security requirements to use for the request.                                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingTransactionResponse](../../Models/Operations/PatchAccountingTransactionResponse.md)**


## removeAccountingAccount

Remove an account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAccountingAccountRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAccountingAccountSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->removeAccountingAccount($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingAccountRequest](../../Models/Operations/RemoveAccountingAccountRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingAccountSecurity](../../Models/Operations/RemoveAccountingAccountSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingAccountResponse](../../Models/Operations/RemoveAccountingAccountResponse.md)**


## removeAccountingContact

Remove a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAccountingContactRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAccountingContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->removeAccountingContact($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingContactRequest](../../Models/Operations/RemoveAccountingContactRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingContactSecurity](../../Models/Operations/RemoveAccountingContactSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingContactResponse](../../Models/Operations/RemoveAccountingContactResponse.md)**


## removeAccountingInvoice

Remove a invoice

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAccountingInvoiceRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAccountingInvoiceSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->removeAccountingInvoice($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceRequest](../../Models/Operations/RemoveAccountingInvoiceRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceSecurity](../../Models/Operations/RemoveAccountingInvoiceSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceResponse](../../Models/Operations/RemoveAccountingInvoiceResponse.md)**


## removeAccountingPayment

Remove a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAccountingPaymentRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAccountingPaymentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->removeAccountingPayment($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentRequest](../../Models/Operations/RemoveAccountingPaymentRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentSecurity](../../Models/Operations/RemoveAccountingPaymentSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingPaymentResponse](../../Models/Operations/RemoveAccountingPaymentResponse.md)**


## removeAccountingTaxrate

Remove a taxrate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAccountingTaxrateRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAccountingTaxrateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->removeAccountingTaxrate($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateRequest](../../Models/Operations/RemoveAccountingTaxrateRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateSecurity](../../Models/Operations/RemoveAccountingTaxrateSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateResponse](../../Models/Operations/RemoveAccountingTaxrateResponse.md)**


## removeAccountingTransaction

Remove a transaction

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveAccountingTransactionRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveAccountingTransactionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->removeAccountingTransaction($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveAccountingTransactionRequest](../../Models/Operations/RemoveAccountingTransactionRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveAccountingTransactionSecurity](../../Models/Operations/RemoveAccountingTransactionSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingTransactionResponse](../../Models/Operations/RemoveAccountingTransactionResponse.md)**


## updateAccountingAccount

Update an account

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAccountingAccountRequest();
    $request->accountingAccount = new Shared\AccountingAccount();
    $request->accountingAccount->balance = 5954.09;
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-21T23:41:25.152Z');
    $request->accountingAccount->currency = 'Tanzanian Shilling';
    $request->accountingAccount->customerDefinedCode = '<value>';
    $request->accountingAccount->description = 'Stand-alone grid-enabled model';
    $request->accountingAccount->id = '<id>';
    $request->accountingAccount->isPayable = false;
    $request->accountingAccount->name = '<value>';
    $request->accountingAccount->raw = [
        'Costa' => '<value>',
    ];
    $request->accountingAccount->status = Shared\Status::Archived;
    $request->accountingAccount->type = Shared\Type::Liability;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-16T10:15:08.356Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAccountingAccountSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->updateAccountingAccount($request, $requestSecurity);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingAccountRequest](../../Models/Operations/UpdateAccountingAccountRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingAccountSecurity](../../Models/Operations/UpdateAccountingAccountSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingAccountResponse](../../Models/Operations/UpdateAccountingAccountResponse.md)**


## updateAccountingContact

Update a contact

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAccountingContactRequest();
    $request->accountingContact = new Shared\AccountingContact();
    $request->accountingContact->billingAddress = new Shared\PropertyAccountingContactBillingAddress();
    $request->accountingContact->billingAddress->address1 = '<value>';
    $request->accountingContact->billingAddress->address2 = '<value>';
    $request->accountingContact->billingAddress->city = 'Mayaguez';
    $request->accountingContact->billingAddress->country = 'Ghana';
    $request->accountingContact->billingAddress->countryCode = 'JE';
    $request->accountingContact->billingAddress->postalCode = '16521-4269';
    $request->accountingContact->billingAddress->region = '<value>';
    $request->accountingContact->billingAddress->regionCode = '<value>';
    $request->accountingContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-14T04:27:23.372Z');
    $request->accountingContact->currency = 'European Monetary Unit (E.M.U.-6)';
    $request->accountingContact->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingContact->id = '<id>';
    $request->accountingContact->isActive = false;
    $request->accountingContact->isCustomer = false;
    $request->accountingContact->isSupplier = false;
    $request->accountingContact->name = '<value>';
    $request->accountingContact->raw = [
        'salmon' => '<value>',
    ];
    $request->accountingContact->shippingAddress = new Shared\PropertyAccountingContactShippingAddress();
    $request->accountingContact->shippingAddress->address1 = '<value>';
    $request->accountingContact->shippingAddress->address2 = '<value>';
    $request->accountingContact->shippingAddress->city = 'Lelahport';
    $request->accountingContact->shippingAddress->country = 'Dominica';
    $request->accountingContact->shippingAddress->countryCode = 'SJ';
    $request->accountingContact->shippingAddress->postalCode = '63899';
    $request->accountingContact->shippingAddress->region = '<value>';
    $request->accountingContact->shippingAddress->regionCode = '<value>';
    $request->accountingContact->taxExemption = Shared\TaxExemption::FederalGov;
    $request->accountingContact->taxNumber = '<value>';
    $request->accountingContact->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-28T03:42:59.577Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAccountingContactSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->updateAccountingContact($request, $requestSecurity);

    if ($response->accountingContact !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingContactRequest](../../Models/Operations/UpdateAccountingContactRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingContactSecurity](../../Models/Operations/UpdateAccountingContactSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingContactResponse](../../Models/Operations/UpdateAccountingContactResponse.md)**


## updateAccountingInvoice

Update a invoice

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 6974.28;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-03T06:46:26.704Z');
    $request->accountingInvoice->contactId = '<value>';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T23:29:44.275Z');
    $request->accountingInvoice->currency = 'Forint';
    $request->accountingInvoice->discountAmount = 2579.09;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-25T16:24:30.030Z');
    $request->accountingInvoice->id = '<id>';
    $request->accountingInvoice->invoiceNumber = '<value>';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = '<value>';
    $request->accountingInvoice->paidAmount = 3682.14;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-27T09:53:44.172Z');
    $request->accountingInvoice->raw = [
        'intuitive' => '<value>',
    ];
    $request->accountingInvoice->refundAmount = 3314.72;
    $request->accountingInvoice->refundReason = '<value>';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-05T20:13:33.419Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Authorized;
    $request->accountingInvoice->taxAmount = 3824.24;
    $request->accountingInvoice->totalAmount = 2939.97;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-13T18:41:11.569Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAccountingInvoiceSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->updateAccountingInvoice($request, $requestSecurity);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceRequest](../../Models/Operations/UpdateAccountingInvoiceRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceSecurity](../../Models/Operations/UpdateAccountingInvoiceSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceResponse](../../Models/Operations/UpdateAccountingInvoiceResponse.md)**


## updateAccountingPayment

Update a payment

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAccountingPaymentRequest();
    $request->accountingPayment = new Shared\AccountingPayment();
    $request->accountingPayment->accountId = '<value>';
    $request->accountingPayment->contactId = '<value>';
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-04T17:30:16.475Z');
    $request->accountingPayment->currency = 'Sudanese Pound';
    $request->accountingPayment->id = '<id>';
    $request->accountingPayment->invoiceId = '<value>';
    $request->accountingPayment->notes = '<value>';
    $request->accountingPayment->paymentMethod = '<value>';
    $request->accountingPayment->raw = [
        'Music' => '<value>',
    ];
    $request->accountingPayment->reference = '<value>';
    $request->accountingPayment->totalAmount = 4734;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-26T21:11:42.893Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAccountingPaymentSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->updateAccountingPayment($request, $requestSecurity);

    if ($response->accountingPayment !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentRequest](../../Models/Operations/UpdateAccountingPaymentRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentSecurity](../../Models/Operations/UpdateAccountingPaymentSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingPaymentResponse](../../Models/Operations/UpdateAccountingPaymentResponse.md)**


## updateAccountingTaxrate

Update a taxrate

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-06T18:04:39.999Z');
    $request->accountingTaxrate->description = 'Switchable intangible initiative';
    $request->accountingTaxrate->id = '<id>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = '<value>';
    $request->accountingTaxrate->rate = 2580.61;
    $request->accountingTaxrate->raw = [
        'Buckinghamshire' => '<value>',
    ];
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-25T16:43:20.981Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAccountingTaxrateSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->updateAccountingTaxrate($request, $requestSecurity);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateRequest](../../Models/Operations/UpdateAccountingTaxrateRequest.md)   | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |
| `security`                                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateSecurity](../../Models/Operations/UpdateAccountingTaxrateSecurity.md) | :heavy_check_mark:                                                                                                                  | The security requirements to use for the request.                                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateResponse](../../Models/Operations/UpdateAccountingTaxrateResponse.md)**


## updateAccountingTransaction

Update a transaction

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->createdAt = '<value>';
    $request->accountingTransaction->currency = 'Zloty';
    $request->accountingTransaction->description = 'Organic web-enabled orchestration';
    $request->accountingTransaction->id = '<id>';
    $request->accountingTransaction->lineitems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = [
        'Intelligent' => '<value>',
    ];
    $request->accountingTransaction->reference = '<value>';
    $request->accountingTransaction->taxAmount = 421.84;
    $request->accountingTransaction->taxrateId = '<value>';
    $request->accountingTransaction->updatedAt = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateAccountingTransactionSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->accounting->updateAccountingTransaction($request, $requestSecurity);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                   | Type                                                                                                                                        | Required                                                                                                                                    | Description                                                                                                                                 |
| ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateAccountingTransactionRequest](../../Models/Operations/UpdateAccountingTransactionRequest.md)   | :heavy_check_mark:                                                                                                                          | The request object to use for the request.                                                                                                  |
| `security`                                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateAccountingTransactionSecurity](../../Models/Operations/UpdateAccountingTransactionSecurity.md) | :heavy_check_mark:                                                                                                                          | The security requirements to use for the request.                                                                                           |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingTransactionResponse](../../Models/Operations/UpdateAccountingTransactionResponse.md)**

