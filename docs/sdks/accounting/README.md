# Accounting


### Available Operations

* [createAccountingAccount](#createaccountingaccount) - Create an account
* [createAccountingContact](#createaccountingcontact) - Create a contact
* [createAccountingInvoice](#createaccountinginvoice) - Create a invoice
* [createAccountingItem](#createaccountingitem) - Create an item
* [createAccountingPayment](#createaccountingpayment) - Create a payment
* [createAccountingTaxrate](#createaccountingtaxrate) - Create a taxrate
* [createAccountingTransaction](#createaccountingtransaction) - Create a transaction
* [getAccountingAccount](#getaccountingaccount) - Retrieve an account
* [getAccountingContact](#getaccountingcontact) - Retrieve a contact
* [getAccountingInvoice](#getaccountinginvoice) - Retrieve a invoice
* [getAccountingItem](#getaccountingitem) - Retrieve an item
* [getAccountingOrganization](#getaccountingorganization) - Retrieve an organization
* [getAccountingPayment](#getaccountingpayment) - Retrieve a payment
* [getAccountingTaxrate](#getaccountingtaxrate) - Retrieve a taxrate
* [getAccountingTransaction](#getaccountingtransaction) - Retrieve a transaction
* [listAccountingAccounts](#listaccountingaccounts) - List all accounts
* [listAccountingContacts](#listaccountingcontacts) - List all contacts
* [listAccountingInvoices](#listaccountinginvoices) - List all invoices
* [listAccountingItems](#listaccountingitems) - List all items
* [listAccountingOrganizations](#listaccountingorganizations) - List all organizations
* [listAccountingPayments](#listaccountingpayments) - List all payments
* [listAccountingTaxrates](#listaccountingtaxrates) - List all taxrates
* [listAccountingTransactions](#listaccountingtransactions) - List all transactions
* [patchAccountingAccount](#patchaccountingaccount) - Update an account
* [patchAccountingContact](#patchaccountingcontact) - Update a contact
* [patchAccountingInvoice](#patchaccountinginvoice) - Update a invoice
* [patchAccountingItem](#patchaccountingitem) - Update an item
* [patchAccountingPayment](#patchaccountingpayment) - Update a payment
* [patchAccountingTaxrate](#patchaccountingtaxrate) - Update a taxrate
* [patchAccountingTransaction](#patchaccountingtransaction) - Update a transaction
* [removeAccountingAccount](#removeaccountingaccount) - Remove an account
* [removeAccountingContact](#removeaccountingcontact) - Remove a contact
* [removeAccountingInvoice](#removeaccountinginvoice) - Remove a invoice
* [removeAccountingItem](#removeaccountingitem) - Remove an item
* [removeAccountingPayment](#removeaccountingpayment) - Remove a payment
* [removeAccountingTaxrate](#removeaccountingtaxrate) - Remove a taxrate
* [removeAccountingTransaction](#removeaccountingtransaction) - Remove a transaction
* [updateAccountingAccount](#updateaccountingaccount) - Update an account
* [updateAccountingContact](#updateaccountingcontact) - Update a contact
* [updateAccountingInvoice](#updateaccountinginvoice) - Update a invoice
* [updateAccountingItem](#updateaccountingitem) - Update an item
* [updateAccountingPayment](#updateaccountingpayment) - Update a payment
* [updateAccountingTaxrate](#updateaccountingtaxrate) - Update a taxrate
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
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-02T22:12:31.771Z');
    $request->accountingAccount->currency = 'Saint Helena Pound';
    $request->accountingAccount->customerDefinedCode = 'string';
    $request->accountingAccount->description = 'Cross-group zero defect task-force';
    $request->accountingAccount->id = '<ID>';
    $request->accountingAccount->isPayable = false;
    $request->accountingAccount->name = 'string';
    $request->accountingAccount->raw = [
        'Ruble' => 'string',
    ];
    $request->accountingAccount->status = Shared\Status::Active;
    $request->accountingAccount->type = Shared\Type::FixedAsset;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-01T23:54:12.882Z');
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


## createAccountingContact

Create a contact

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
        $request = new Operations\CreateAccountingContactRequest();
    $request->accountingContact = new Shared\AccountingContact();
    $request->accountingContact->billingAddress = new Shared\PropertyAccountingContactBillingAddress();
    $request->accountingContact->billingAddress->address1 = 'string';
    $request->accountingContact->billingAddress->address2 = 'string';
    $request->accountingContact->billingAddress->city = 'Lake Benny';
    $request->accountingContact->billingAddress->country = 'Azerbaijan';
    $request->accountingContact->billingAddress->countryCode = 'GT';
    $request->accountingContact->billingAddress->postalCode = '48359-3238';
    $request->accountingContact->billingAddress->region = 'string';
    $request->accountingContact->billingAddress->regionCode = 'string';
    $request->accountingContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-19T03:22:44.048Z');
    $request->accountingContact->currency = 'Peso Uruguayo';
    $request->accountingContact->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingContact->id = '<ID>';
    $request->accountingContact->isActive = false;
    $request->accountingContact->isCustomer = false;
    $request->accountingContact->isSupplier = false;
    $request->accountingContact->name = 'string';
    $request->accountingContact->raw = [
        'unfold' => 'string',
    ];
    $request->accountingContact->shippingAddress = new Shared\PropertyAccountingContactShippingAddress();
    $request->accountingContact->shippingAddress->address1 = 'string';
    $request->accountingContact->shippingAddress->address2 = 'string';
    $request->accountingContact->shippingAddress->city = 'Port Wilberfield';
    $request->accountingContact->shippingAddress->country = 'Bouvet Island (Bouvetoya)';
    $request->accountingContact->shippingAddress->countryCode = 'AM';
    $request->accountingContact->shippingAddress->postalCode = '62093';
    $request->accountingContact->shippingAddress->region = 'string';
    $request->accountingContact->shippingAddress->regionCode = 'string';
    $request->accountingContact->taxExemption = Shared\TaxExemption::EducationalOrg;
    $request->accountingContact->taxNumber = 'string';
    $request->accountingContact->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-29T11:32:51.059Z');
    $request->connectionId = 'string';;

    $response = $sdk->accounting->createAccountingContact($request);

    if ($response->accountingContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingContactRequest](../../Models/Operations/CreateAccountingContactRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingContactResponse](../../Models/Operations/CreateAccountingContactResponse.md)**


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
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-27T09:14:42.959Z');
    $request->accountingInvoice->contactId = 'string';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-05T18:32:52.109Z');
    $request->accountingInvoice->currency = 'Uzbekistan Sum';
    $request->accountingInvoice->discountAmount = 259.66;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-30T15:54:59.455Z');
    $request->accountingInvoice->id = '<ID>';
    $request->accountingInvoice->invoiceNumber = 'string';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 7142.37;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-16T02:12:20.862Z');
    $request->accountingInvoice->raw = [
        'Central' => 'string',
    ];
    $request->accountingInvoice->refundAmount = 1578.89;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-27T04:22:20.182Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Authorized;
    $request->accountingInvoice->taxAmount = 6864;
    $request->accountingInvoice->totalAmount = 6873.46;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-19T22:49:02.835Z');
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


## createAccountingItem

Create an item

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
        $request = new Operations\CreateAccountingItemRequest();
    $request->accountingItem = new Shared\AccountingItem();
    $request->accountingItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-04T21:45:18.227Z');
    $request->accountingItem->description = 'Team-oriented grid-enabled open system';
    $request->accountingItem->id = '<ID>';
    $request->accountingItem->isActive = false;
    $request->accountingItem->isTaxable = false;
    $request->accountingItem->name = 'string';
    $request->accountingItem->price = 8182.36;
    $request->accountingItem->publicDescription = 'string';
    $request->accountingItem->quantityOnHand = 9042.97;
    $request->accountingItem->raw = [
        'ampere' => 'string',
    ];
    $request->accountingItem->sku = 'string';
    $request->accountingItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-12T17:24:47.315Z');
    $request->connectionId = 'string';;

    $response = $sdk->accounting->createAccountingItem($request);

    if ($response->accountingItem !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\CreateAccountingItemRequest](../../Models/Operations/CreateAccountingItemRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingItemResponse](../../Models/Operations/CreateAccountingItemResponse.md)**


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
    $request->accountingPayment->accountId = 'string';
    $request->accountingPayment->contactId = 'string';
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-01-28T13:13:46.548Z');
    $request->accountingPayment->currency = 'Lari';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceId = 'string';
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = [
        'Mount' => 'string',
    ];
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 1821.1;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-22T09:20:36.660Z');
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


## createAccountingTaxrate

Create a taxrate

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
        $request = new Operations\CreateAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-08T09:55:20.238Z');
    $request->accountingTaxrate->description = 'Enterprise-wide content-based productivity';
    $request->accountingTaxrate->id = '<ID>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = 'string';
    $request->accountingTaxrate->rate = 6789.7;
    $request->accountingTaxrate->raw = [
        'Human' => 'string',
    ];
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-06T04:09:12.755Z');
    $request->connectionId = 'string';;

    $response = $sdk->accounting->createAccountingTaxrate($request);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingTaxrateRequest](../../Models/Operations/CreateAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingTaxrateResponse](../../Models/Operations/CreateAccountingTaxrateResponse.md)**


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
    $request->accountingTransaction->createdAt = 'string';
    $request->accountingTransaction->currency = 'Libyan Dinar';
    $request->accountingTransaction->description = 'Pre-emptive multimedia benchmark';
    $request->accountingTransaction->id = '<ID>';
    $request->accountingTransaction->lineItems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->lineitems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = [
        'Metal' => 'string',
    ];
    $request->accountingTransaction->reference = 'string';
    $request->accountingTransaction->taxAmount = 8276.07;
    $request->accountingTransaction->taxrateId = 'string';
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


## getAccountingContact

Retrieve a contact

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
        $request = new Operations\GetAccountingContactRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->accounting->getAccountingContact($request);

    if ($response->accountingContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingContactRequest](../../Models/Operations/GetAccountingContactRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingContactResponse](../../Models/Operations/GetAccountingContactResponse.md)**


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


## getAccountingItem

Retrieve an item

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
        $request = new Operations\GetAccountingItemRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->accounting->getAccountingItem($request);

    if ($response->accountingItem !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                             | Type                                                                                                                  | Required                                                                                                              | Description                                                                                                           |
| --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                            | [\Unified\Unified_to\Models\Operations\GetAccountingItemRequest](../../Models/Operations/GetAccountingItemRequest.md) | :heavy_check_mark:                                                                                                    | The request object to use for the request.                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingItemResponse](../../Models/Operations/GetAccountingItemResponse.md)**


## getAccountingOrganization

Retrieve an organization

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
        $request = new Operations\GetAccountingOrganizationRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->accounting->getAccountingOrganization($request);

    if ($response->accountingOrganization !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                             | Type                                                                                                                                  | Required                                                                                                                              | Description                                                                                                                           |
| ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                            | [\Unified\Unified_to\Models\Operations\GetAccountingOrganizationRequest](../../Models/Operations/GetAccountingOrganizationRequest.md) | :heavy_check_mark:                                                                                                                    | The request object to use for the request.                                                                                            |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingOrganizationResponse](../../Models/Operations/GetAccountingOrganizationResponse.md)**


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


## getAccountingTaxrate

Retrieve a taxrate

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
        $request = new Operations\GetAccountingTaxrateRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->id = '<ID>';;

    $response = $sdk->accounting->getAccountingTaxrate($request);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingTaxrateRequest](../../Models/Operations/GetAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingTaxrateResponse](../../Models/Operations/GetAccountingTaxrateResponse.md)**


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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-19T21:33:28.191Z');;

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


## listAccountingContacts

List all contacts

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
        $request = new Operations\ListAccountingContactsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 4596.32;
    $request->offset = 8881.9;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->type = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-26T14:00:38.736Z');;

    $response = $sdk->accounting->listAccountingContacts($request);

    if ($response->accountingContacts !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingContactsRequest](../../Models/Operations/ListAccountingContactsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingContactsResponse](../../Models/Operations/ListAccountingContactsResponse.md)**


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
    $request->contactId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 6788.11;
    $request->offset = 5122.49;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-23T19:02:52.454Z');;

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


## listAccountingItems

List all items

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
        $request = new Operations\ListAccountingItemsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 5739.49;
    $request->offset = 6744.69;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-10T17:07:55.262Z');;

    $response = $sdk->accounting->listAccountingItems($request);

    if ($response->accountingItems !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAccountingItemsRequest](../../Models/Operations/ListAccountingItemsRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingItemsResponse](../../Models/Operations/ListAccountingItemsResponse.md)**


## listAccountingOrganizations

List all organizations

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
        $request = new Operations\ListAccountingOrganizationsRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 4896.89;
    $request->offset = 9817.05;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-02T18:55:09.644Z');;

    $response = $sdk->accounting->listAccountingOrganizations($request);

    if ($response->accountingOrganizations !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\ListAccountingOrganizationsRequest](../../Models/Operations/ListAccountingOrganizationsRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingOrganizationsResponse](../../Models/Operations/ListAccountingOrganizationsResponse.md)**


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
    $request->contactId = 'string';
    $request->fields = [
        'string',
    ];
    $request->invoiceId = 'string';
    $request->limit = 487.78;
    $request->offset = 9308.83;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-25T18:15:35.411Z');;

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


## listAccountingTaxrates

List all taxrates

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
        $request = new Operations\ListAccountingTaxratesRequest();
    $request->connectionId = 'string';
    $request->fields = [
        'string',
    ];
    $request->limit = 1599.19;
    $request->offset = 1097.48;
    $request->order = 'string';
    $request->query = 'string';
    $request->sort = 'string';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T14:31:13.247Z');;

    $response = $sdk->accounting->listAccountingTaxrates($request);

    if ($response->accountingTaxrates !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingTaxratesRequest](../../Models/Operations/ListAccountingTaxratesRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingTaxratesResponse](../../Models/Operations/ListAccountingTaxratesResponse.md)**


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
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-02T12:20:43.572Z');;

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
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-09T13:35:06.969Z');
    $request->accountingAccount->currency = 'Won';
    $request->accountingAccount->customerDefinedCode = 'string';
    $request->accountingAccount->description = 'Quality-focused multimedia implementation';
    $request->accountingAccount->id = '<ID>';
    $request->accountingAccount->isPayable = false;
    $request->accountingAccount->name = 'string';
    $request->accountingAccount->raw = [
        'male' => 'string',
    ];
    $request->accountingAccount->status = Shared\Status::Archived;
    $request->accountingAccount->type = Shared\Type::Expense;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-01T20:09:00.405Z');
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


## patchAccountingContact

Update a contact

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
        $request = new Operations\PatchAccountingContactRequest();
    $request->accountingContact = new Shared\AccountingContact();
    $request->accountingContact->billingAddress = new Shared\PropertyAccountingContactBillingAddress();
    $request->accountingContact->billingAddress->address1 = 'string';
    $request->accountingContact->billingAddress->address2 = 'string';
    $request->accountingContact->billingAddress->city = 'Sylvestermouth';
    $request->accountingContact->billingAddress->country = 'Norfolk Island';
    $request->accountingContact->billingAddress->countryCode = 'BN';
    $request->accountingContact->billingAddress->postalCode = '34531-3519';
    $request->accountingContact->billingAddress->region = 'string';
    $request->accountingContact->billingAddress->regionCode = 'string';
    $request->accountingContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-14T18:48:39.369Z');
    $request->accountingContact->currency = 'Singapore Dollar';
    $request->accountingContact->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingContact->id = '<ID>';
    $request->accountingContact->isActive = false;
    $request->accountingContact->isCustomer = false;
    $request->accountingContact->isSupplier = false;
    $request->accountingContact->name = 'string';
    $request->accountingContact->raw = [
        'bypass' => 'string',
    ];
    $request->accountingContact->shippingAddress = new Shared\PropertyAccountingContactShippingAddress();
    $request->accountingContact->shippingAddress->address1 = 'string';
    $request->accountingContact->shippingAddress->address2 = 'string';
    $request->accountingContact->shippingAddress->city = 'Koeppfield';
    $request->accountingContact->shippingAddress->country = 'Netherlands Antilles';
    $request->accountingContact->shippingAddress->countryCode = 'NE';
    $request->accountingContact->shippingAddress->postalCode = '36791';
    $request->accountingContact->shippingAddress->region = 'string';
    $request->accountingContact->shippingAddress->regionCode = 'string';
    $request->accountingContact->taxExemption = Shared\TaxExemption::TribalGov;
    $request->accountingContact->taxNumber = 'string';
    $request->accountingContact->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-15T21:20:14.932Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->patchAccountingContact($request);

    if ($response->accountingContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingContactRequest](../../Models/Operations/PatchAccountingContactRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingContactResponse](../../Models/Operations/PatchAccountingContactResponse.md)**


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
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-18T11:25:21.140Z');
    $request->accountingInvoice->contactId = 'string';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T05:39:15.854Z');
    $request->accountingInvoice->currency = 'Gold';
    $request->accountingInvoice->discountAmount = 9127.96;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-05T05:55:55.560Z');
    $request->accountingInvoice->id = '<ID>';
    $request->accountingInvoice->invoiceNumber = 'string';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 7810.81;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-02T21:47:54.080Z');
    $request->accountingInvoice->raw = [
        'Northwest' => 'string',
    ];
    $request->accountingInvoice->refundAmount = 6443.77;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-21T01:13:52.344Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Draft;
    $request->accountingInvoice->taxAmount = 1140.08;
    $request->accountingInvoice->totalAmount = 4543.48;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-02T12:10:13.037Z');
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


## patchAccountingItem

Update an item

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
        $request = new Operations\PatchAccountingItemRequest();
    $request->accountingItem = new Shared\AccountingItem();
    $request->accountingItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-12T01:22:35.181Z');
    $request->accountingItem->description = 'Operative coherent forecast';
    $request->accountingItem->id = '<ID>';
    $request->accountingItem->isActive = false;
    $request->accountingItem->isTaxable = false;
    $request->accountingItem->name = 'string';
    $request->accountingItem->price = 1007.53;
    $request->accountingItem->publicDescription = 'string';
    $request->accountingItem->quantityOnHand = 3510.34;
    $request->accountingItem->raw = [
        'Quality' => 'string',
    ];
    $request->accountingItem->sku = 'string';
    $request->accountingItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-28T04:23:01.953Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->patchAccountingItem($request);

    if ($response->accountingItem !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\PatchAccountingItemRequest](../../Models/Operations/PatchAccountingItemRequest.md) | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingItemResponse](../../Models/Operations/PatchAccountingItemResponse.md)**


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
    $request->accountingPayment->accountId = 'string';
    $request->accountingPayment->contactId = 'string';
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-02-25T02:56:43.385Z');
    $request->accountingPayment->currency = 'Boliviano boliviano';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceId = 'string';
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = [
        'periodic' => 'string',
    ];
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 9979.6;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-15T02:06:02.492Z');
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


## patchAccountingTaxrate

Update a taxrate

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
        $request = new Operations\PatchAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-10-19T15:57:03.731Z');
    $request->accountingTaxrate->description = 'Quality-focused user-facing complexity';
    $request->accountingTaxrate->id = '<ID>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = 'string';
    $request->accountingTaxrate->rate = 220.78;
    $request->accountingTaxrate->raw = [
        'Facilitator' => 'string',
    ];
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-17T14:16:26.961Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->patchAccountingTaxrate($request);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingTaxrateRequest](../../Models/Operations/PatchAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingTaxrateResponse](../../Models/Operations/PatchAccountingTaxrateResponse.md)**


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
    $request->accountingTransaction->createdAt = 'string';
    $request->accountingTransaction->currency = 'Kwacha';
    $request->accountingTransaction->description = 'Multi-channelled transitional function';
    $request->accountingTransaction->id = '<ID>';
    $request->accountingTransaction->lineItems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->lineitems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = [
        'Gambia' => 'string',
    ];
    $request->accountingTransaction->reference = 'string';
    $request->accountingTransaction->taxAmount = 259.82;
    $request->accountingTransaction->taxrateId = 'string';
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


## removeAccountingContact

Remove a contact

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
        $request = new Operations\RemoveAccountingContactRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->removeAccountingContact($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingContactRequest](../../Models/Operations/RemoveAccountingContactRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingContactResponse](../../Models/Operations/RemoveAccountingContactResponse.md)**


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


## removeAccountingItem

Remove an item

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
        $request = new Operations\RemoveAccountingItemRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->removeAccountingItem($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\RemoveAccountingItemRequest](../../Models/Operations/RemoveAccountingItemRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingItemResponse](../../Models/Operations/RemoveAccountingItemResponse.md)**


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


## removeAccountingTaxrate

Remove a taxrate

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
        $request = new Operations\RemoveAccountingTaxrateRequest();
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->removeAccountingTaxrate($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateRequest](../../Models/Operations/RemoveAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingTaxrateResponse](../../Models/Operations/RemoveAccountingTaxrateResponse.md)**


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
    $request->accountingAccount->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-21T23:41:25.152Z');
    $request->accountingAccount->currency = 'Tanzanian Shilling';
    $request->accountingAccount->customerDefinedCode = 'string';
    $request->accountingAccount->description = 'Stand-alone grid-enabled model';
    $request->accountingAccount->id = '<ID>';
    $request->accountingAccount->isPayable = false;
    $request->accountingAccount->name = 'string';
    $request->accountingAccount->raw = [
        'Costa' => 'string',
    ];
    $request->accountingAccount->status = Shared\Status::Archived;
    $request->accountingAccount->type = Shared\Type::Liability;
    $request->accountingAccount->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-16T10:15:08.356Z');
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


## updateAccountingContact

Update a contact

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
        $request = new Operations\UpdateAccountingContactRequest();
    $request->accountingContact = new Shared\AccountingContact();
    $request->accountingContact->billingAddress = new Shared\PropertyAccountingContactBillingAddress();
    $request->accountingContact->billingAddress->address1 = 'string';
    $request->accountingContact->billingAddress->address2 = 'string';
    $request->accountingContact->billingAddress->city = 'Mayaguez';
    $request->accountingContact->billingAddress->country = 'Ghana';
    $request->accountingContact->billingAddress->countryCode = 'JE';
    $request->accountingContact->billingAddress->postalCode = '16521-4269';
    $request->accountingContact->billingAddress->region = 'string';
    $request->accountingContact->billingAddress->regionCode = 'string';
    $request->accountingContact->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-14T04:27:23.372Z');
    $request->accountingContact->currency = 'European Monetary Unit (E.M.U.-6)';
    $request->accountingContact->emails = [
        new Shared\AccountingEmail(),
    ];
    $request->accountingContact->id = '<ID>';
    $request->accountingContact->isActive = false;
    $request->accountingContact->isCustomer = false;
    $request->accountingContact->isSupplier = false;
    $request->accountingContact->name = 'string';
    $request->accountingContact->raw = [
        'salmon' => 'string',
    ];
    $request->accountingContact->shippingAddress = new Shared\PropertyAccountingContactShippingAddress();
    $request->accountingContact->shippingAddress->address1 = 'string';
    $request->accountingContact->shippingAddress->address2 = 'string';
    $request->accountingContact->shippingAddress->city = 'Lelahport';
    $request->accountingContact->shippingAddress->country = 'Dominica';
    $request->accountingContact->shippingAddress->countryCode = 'SJ';
    $request->accountingContact->shippingAddress->postalCode = '63899';
    $request->accountingContact->shippingAddress->region = 'string';
    $request->accountingContact->shippingAddress->regionCode = 'string';
    $request->accountingContact->taxExemption = Shared\TaxExemption::FederalGov;
    $request->accountingContact->taxNumber = 'string';
    $request->accountingContact->telephones = [
        new Shared\AccountingTelephone(),
    ];
    $request->accountingContact->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-28T03:42:59.577Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->updateAccountingContact($request);

    if ($response->accountingContact !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingContactRequest](../../Models/Operations/UpdateAccountingContactRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingContactResponse](../../Models/Operations/UpdateAccountingContactResponse.md)**


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
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-03T06:46:26.704Z');
    $request->accountingInvoice->contactId = 'string';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T23:29:44.275Z');
    $request->accountingInvoice->currency = 'Forint';
    $request->accountingInvoice->discountAmount = 2579.09;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-25T16:24:30.030Z');
    $request->accountingInvoice->id = '<ID>';
    $request->accountingInvoice->invoiceNumber = 'string';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = 'string';
    $request->accountingInvoice->paidAmount = 3682.14;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-27T09:53:44.172Z');
    $request->accountingInvoice->raw = [
        'intuitive' => 'string',
    ];
    $request->accountingInvoice->refundAmount = 3314.72;
    $request->accountingInvoice->refundReason = 'string';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-05T20:13:33.419Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Authorized;
    $request->accountingInvoice->taxAmount = 3824.24;
    $request->accountingInvoice->totalAmount = 2939.97;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-13T18:41:11.569Z');
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


## updateAccountingItem

Update an item

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
        $request = new Operations\UpdateAccountingItemRequest();
    $request->accountingItem = new Shared\AccountingItem();
    $request->accountingItem->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-31T23:31:53.009Z');
    $request->accountingItem->description = 'Programmable modular artificial intelligence';
    $request->accountingItem->id = '<ID>';
    $request->accountingItem->isActive = false;
    $request->accountingItem->isTaxable = false;
    $request->accountingItem->name = 'string';
    $request->accountingItem->price = 3314.34;
    $request->accountingItem->publicDescription = 'string';
    $request->accountingItem->quantityOnHand = 9226.47;
    $request->accountingItem->raw = [
        'revolutionize' => 'string',
    ];
    $request->accountingItem->sku = 'string';
    $request->accountingItem->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-25T00:46:46.096Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->updateAccountingItem($request);

    if ($response->accountingItem !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\UpdateAccountingItemRequest](../../Models/Operations/UpdateAccountingItemRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingItemResponse](../../Models/Operations/UpdateAccountingItemResponse.md)**


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
    $request->accountingPayment->accountId = 'string';
    $request->accountingPayment->contactId = 'string';
    $request->accountingPayment->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-04T17:30:16.475Z');
    $request->accountingPayment->currency = 'Sudanese Pound';
    $request->accountingPayment->id = '<ID>';
    $request->accountingPayment->invoiceId = 'string';
    $request->accountingPayment->notes = 'string';
    $request->accountingPayment->paymentMethod = 'string';
    $request->accountingPayment->raw = [
        'Music' => 'string',
    ];
    $request->accountingPayment->reference = 'string';
    $request->accountingPayment->totalAmount = 4734;
    $request->accountingPayment->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-26T21:11:42.893Z');
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


## updateAccountingTaxrate

Update a taxrate

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
        $request = new Operations\UpdateAccountingTaxrateRequest();
    $request->accountingTaxrate = new Shared\AccountingTaxrate();
    $request->accountingTaxrate->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-01-06T18:04:39.999Z');
    $request->accountingTaxrate->description = 'Switchable intangible initiative';
    $request->accountingTaxrate->id = '<ID>';
    $request->accountingTaxrate->isActive = false;
    $request->accountingTaxrate->name = 'string';
    $request->accountingTaxrate->rate = 2580.61;
    $request->accountingTaxrate->raw = [
        'Buckinghamshire' => 'string',
    ];
    $request->accountingTaxrate->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-25T16:43:20.981Z');
    $request->connectionId = 'string';
    $request->id = '<ID>';;

    $response = $sdk->accounting->updateAccountingTaxrate($request);

    if ($response->accountingTaxrate !== null) {
        // handle response
    }
} catch (Exception $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateRequest](../../Models/Operations/UpdateAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingTaxrateResponse](../../Models/Operations/UpdateAccountingTaxrateResponse.md)**


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
    $request->accountingTransaction->createdAt = 'string';
    $request->accountingTransaction->currency = 'Zloty';
    $request->accountingTransaction->description = 'Organic web-enabled orchestration';
    $request->accountingTransaction->id = '<ID>';
    $request->accountingTransaction->lineItems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->lineitems = [
        new Shared\AccountingTransactionLineitem(),
    ];
    $request->accountingTransaction->raw = [
        'Intelligent' => 'string',
    ];
    $request->accountingTransaction->reference = 'string';
    $request->accountingTransaction->taxAmount = 421.84;
    $request->accountingTransaction->taxrateId = 'string';
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

