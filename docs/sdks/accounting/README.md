# Accounting

## Overview

### Available Operations

* [createAccountingAccount](#createaccountingaccount) - Create an account
* [createAccountingBankfeedaccount](#createaccountingbankfeedaccount) - Create a bankfeedaccount
* [createAccountingBankfeedtransaction](#createaccountingbankfeedtransaction) - Create a bankfeedtransaction
* [createAccountingBill](#createaccountingbill) - Create a bill
* [createAccountingCategory](#createaccountingcategory) - Create a category
* [createAccountingContact](#createaccountingcontact) - Create a contact
* [createAccountingCreditmemo](#createaccountingcreditmemo) - Create a creditmemo
* [createAccountingExpense](#createaccountingexpense) - Create an expense
* [createAccountingExpensereport](#createaccountingexpensereport) - Create an expensereport
* [createAccountingInvoice](#createaccountinginvoice) - Create an invoice
* [createAccountingJournal](#createaccountingjournal) - Create a journal
* [~~createAccountingOrder~~](#createaccountingorder) - Create an order :warning: **Deprecated**
* [createAccountingPaymentterm](#createaccountingpaymentterm) - Create a paymentterm
* [createAccountingProject](#createaccountingproject) - Create a project
* [createAccountingPurchaseorder](#createaccountingpurchaseorder) - Create a purchaseorder
* [createAccountingQuote](#createaccountingquote) - Create a quote
* [createAccountingSalesorder](#createaccountingsalesorder) - Create a salesorder
* [createAccountingTaxrate](#createaccountingtaxrate) - Create a taxrate
* [createAccountingTransaction](#createaccountingtransaction) - Create a transaction
* [createAccountingVendorcredit](#createaccountingvendorcredit) - Create a vendorcredit
* [getAccountingAccount](#getaccountingaccount) - Retrieve an account
* [getAccountingAgedpayable](#getaccountingagedpayable) - Retrieve an agedpayable
* [getAccountingAgedreceivable](#getaccountingagedreceivable) - Retrieve an agedreceivable
* [getAccountingBalancesheet](#getaccountingbalancesheet) - Retrieve a balancesheet
* [getAccountingBankfeedaccount](#getaccountingbankfeedaccount) - Retrieve a bankfeedaccount
* [getAccountingBankfeedtransaction](#getaccountingbankfeedtransaction) - Retrieve a bankfeedtransaction
* [getAccountingBill](#getaccountingbill) - Retrieve a bill
* [getAccountingCashflow](#getaccountingcashflow) - Retrieve a cashflow
* [getAccountingCategory](#getaccountingcategory) - Retrieve a category
* [getAccountingContact](#getaccountingcontact) - Retrieve a contact
* [getAccountingCreditmemo](#getaccountingcreditmemo) - Retrieve a creditmemo
* [getAccountingExpense](#getaccountingexpense) - Retrieve an expense
* [getAccountingExpensereport](#getaccountingexpensereport) - Retrieve an expensereport
* [getAccountingInvoice](#getaccountinginvoice) - Retrieve an invoice
* [getAccountingJournal](#getaccountingjournal) - Retrieve a journal
* [~~getAccountingOrder~~](#getaccountingorder) - Retrieve an order :warning: **Deprecated**
* [getAccountingOrganization](#getaccountingorganization) - Retrieve an organization
* [getAccountingPaymentterm](#getaccountingpaymentterm) - Retrieve a paymentterm
* [getAccountingProfitloss](#getaccountingprofitloss) - Retrieve a profitloss
* [getAccountingProject](#getaccountingproject) - Retrieve a project
* [getAccountingPurchaseorder](#getaccountingpurchaseorder) - Retrieve a purchaseorder
* [getAccountingPurchasereceipt](#getaccountingpurchasereceipt) - Retrieve a purchasereceipt
* [getAccountingQuote](#getaccountingquote) - Retrieve a quote
* [getAccountingSalesorder](#getaccountingsalesorder) - Retrieve a salesorder
* [getAccountingSalesreceipt](#getaccountingsalesreceipt) - Retrieve a salesreceipt
* [getAccountingTaxrate](#getaccountingtaxrate) - Retrieve a taxrate
* [getAccountingTransaction](#getaccountingtransaction) - Retrieve a transaction
* [getAccountingTrialbalance](#getaccountingtrialbalance) - Retrieve a trialbalance
* [getAccountingVendorcredit](#getaccountingvendorcredit) - Retrieve a vendorcredit
* [listAccountingAccounts](#listaccountingaccounts) - List all accounts
* [listAccountingAgedpayables](#listaccountingagedpayables) - List all agedpayables
* [listAccountingAgedreceivables](#listaccountingagedreceivables) - List all agedreceivables
* [listAccountingBalancesheets](#listaccountingbalancesheets) - List all balancesheets
* [listAccountingBankfeedaccounts](#listaccountingbankfeedaccounts) - List all bankfeedaccounts
* [listAccountingBankfeedtransactions](#listaccountingbankfeedtransactions) - List all bankfeedtransactions
* [listAccountingBills](#listaccountingbills) - List all bills
* [listAccountingCashflows](#listaccountingcashflows) - List all cashflows
* [listAccountingCategories](#listaccountingcategories) - List all categories
* [listAccountingContacts](#listaccountingcontacts) - List all contacts
* [listAccountingCreditmemoes](#listaccountingcreditmemoes) - List all creditmemoes
* [listAccountingExpensereports](#listaccountingexpensereports) - List all expensereports
* [listAccountingExpenses](#listaccountingexpenses) - List all expenses
* [listAccountingInvoices](#listaccountinginvoices) - List all invoices
* [listAccountingJournals](#listaccountingjournals) - List all journals
* [~~listAccountingOrders~~](#listaccountingorders) - List all orders :warning: **Deprecated**
* [listAccountingOrganizations](#listaccountingorganizations) - List all organizations
* [listAccountingPaymentterms](#listaccountingpaymentterms) - List all paymentterms
* [listAccountingProfitlosses](#listaccountingprofitlosses) - List all profitlosses
* [listAccountingProjects](#listaccountingprojects) - List all projects
* [listAccountingPurchaseorders](#listaccountingpurchaseorders) - List all purchaseorders
* [listAccountingPurchasereceipts](#listaccountingpurchasereceipts) - List all purchasereceipts
* [listAccountingQuotes](#listaccountingquotes) - List all quotes
* [listAccountingSalesorders](#listaccountingsalesorders) - List all salesorders
* [listAccountingSalesreceipts](#listaccountingsalesreceipts) - List all salesreceipts
* [listAccountingTaxrates](#listaccountingtaxrates) - List all taxrates
* [listAccountingTransactions](#listaccountingtransactions) - List all transactions
* [listAccountingTrialbalances](#listaccountingtrialbalances) - List all trialbalances
* [listAccountingVendorcredits](#listaccountingvendorcredits) - List all vendorcredits
* [patchAccountingAccount](#patchaccountingaccount) - Update an account
* [patchAccountingBankfeedaccount](#patchaccountingbankfeedaccount) - Update a bankfeedaccount
* [patchAccountingBankfeedtransaction](#patchaccountingbankfeedtransaction) - Update a bankfeedtransaction
* [patchAccountingBill](#patchaccountingbill) - Update a bill
* [patchAccountingCategory](#patchaccountingcategory) - Update a category
* [patchAccountingContact](#patchaccountingcontact) - Update a contact
* [patchAccountingCreditmemo](#patchaccountingcreditmemo) - Update a creditmemo
* [patchAccountingExpense](#patchaccountingexpense) - Update an expense
* [patchAccountingExpensereport](#patchaccountingexpensereport) - Update an expensereport
* [patchAccountingInvoice](#patchaccountinginvoice) - Update an invoice
* [patchAccountingJournal](#patchaccountingjournal) - Update a journal
* [~~patchAccountingOrder~~](#patchaccountingorder) - Update an order :warning: **Deprecated**
* [patchAccountingPaymentterm](#patchaccountingpaymentterm) - Update a paymentterm
* [patchAccountingProject](#patchaccountingproject) - Update a project
* [patchAccountingPurchaseorder](#patchaccountingpurchaseorder) - Update a purchaseorder
* [patchAccountingQuote](#patchaccountingquote) - Update a quote
* [patchAccountingSalesorder](#patchaccountingsalesorder) - Update a salesorder
* [patchAccountingTaxrate](#patchaccountingtaxrate) - Update a taxrate
* [patchAccountingTransaction](#patchaccountingtransaction) - Update a transaction
* [patchAccountingVendorcredit](#patchaccountingvendorcredit) - Update a vendorcredit
* [removeAccountingAccount](#removeaccountingaccount) - Remove an account
* [removeAccountingBankfeedaccount](#removeaccountingbankfeedaccount) - Remove a bankfeedaccount
* [removeAccountingBankfeedtransaction](#removeaccountingbankfeedtransaction) - Remove a bankfeedtransaction
* [removeAccountingBill](#removeaccountingbill) - Remove a bill
* [removeAccountingCategory](#removeaccountingcategory) - Remove a category
* [removeAccountingContact](#removeaccountingcontact) - Remove a contact
* [removeAccountingCreditmemo](#removeaccountingcreditmemo) - Remove a creditmemo
* [removeAccountingExpense](#removeaccountingexpense) - Remove an expense
* [removeAccountingExpensereport](#removeaccountingexpensereport) - Remove an expensereport
* [removeAccountingInvoice](#removeaccountinginvoice) - Remove an invoice
* [removeAccountingJournal](#removeaccountingjournal) - Remove a journal
* [~~removeAccountingOrder~~](#removeaccountingorder) - Remove an order :warning: **Deprecated**
* [removeAccountingPaymentterm](#removeaccountingpaymentterm) - Remove a paymentterm
* [removeAccountingProject](#removeaccountingproject) - Remove a project
* [removeAccountingPurchaseorder](#removeaccountingpurchaseorder) - Remove a purchaseorder
* [removeAccountingQuote](#removeaccountingquote) - Remove a quote
* [removeAccountingSalesorder](#removeaccountingsalesorder) - Remove a salesorder
* [removeAccountingTaxrate](#removeaccountingtaxrate) - Remove a taxrate
* [removeAccountingTransaction](#removeaccountingtransaction) - Remove a transaction
* [removeAccountingVendorcredit](#removeaccountingvendorcredit) - Remove a vendorcredit
* [updateAccountingAccount](#updateaccountingaccount) - Update an account
* [updateAccountingBankfeedaccount](#updateaccountingbankfeedaccount) - Update a bankfeedaccount
* [updateAccountingBankfeedtransaction](#updateaccountingbankfeedtransaction) - Update a bankfeedtransaction
* [updateAccountingBill](#updateaccountingbill) - Update a bill
* [updateAccountingCategory](#updateaccountingcategory) - Update a category
* [updateAccountingContact](#updateaccountingcontact) - Update a contact
* [updateAccountingCreditmemo](#updateaccountingcreditmemo) - Update a creditmemo
* [updateAccountingExpense](#updateaccountingexpense) - Update an expense
* [updateAccountingExpensereport](#updateaccountingexpensereport) - Update an expensereport
* [updateAccountingInvoice](#updateaccountinginvoice) - Update an invoice
* [updateAccountingJournal](#updateaccountingjournal) - Update a journal
* [~~updateAccountingOrder~~](#updateaccountingorder) - Update an order :warning: **Deprecated**
* [updateAccountingPaymentterm](#updateaccountingpaymentterm) - Update a paymentterm
* [updateAccountingProject](#updateaccountingproject) - Update a project
* [updateAccountingPurchaseorder](#updateaccountingpurchaseorder) - Update a purchaseorder
* [updateAccountingQuote](#updateaccountingquote) - Update a quote
* [updateAccountingSalesorder](#updateaccountingsalesorder) - Update a salesorder
* [updateAccountingTaxrate](#updateaccountingtaxrate) - Update a taxrate
* [updateAccountingTransaction](#updateaccountingtransaction) - Update a transaction
* [updateAccountingVendorcredit](#updateaccountingvendorcredit) - Update a vendorcredit

## createAccountingAccount

Creates a AccountingAccount. Provide the unified AccountingAccount fields in the request body; they are mapped to the provider's API. Returns the created AccountingAccount.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingAccount" method="post" path="/accounting/{connection_id}/account" example="accounting_account" -->
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

$request = new Operations\CreateAccountingAccountRequest(
    accountingAccount: new Shared\AccountingAccount(
        balance: 12092,
        createdAt: Utils\Utils::parseDateTime('2022-07-03T17:57:07.391Z'),
        currency: 'CAD',
        customerDefinedCode: '6170',
        description: 'Voluptatibus valde spoliatio.',
        id: '3ffcbe35-acf7-449a-8164-542328efde20',
        isPayable: false,
        metadata: [],
        name: 'Auto Loan Account',
        status: Shared\Status::Archived,
        taxonomy: [
            new Shared\AccountingAccountTaxonomy(
                originalType: 'vilitas',
                type: Shared\AccountingAccountTaxonomyType::Subgroup,
                value: 'comedo',
            ),
        ],
        type: Shared\Type::AccountsReceivable,
        updatedAt: Utils\Utils::parseDateTime('2023-08-08T04:01:27.257Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingAccount(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingAccountRequest](../../Models/Operations/CreateAccountingAccountRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingAccountResponse](../../Models/Operations/CreateAccountingAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingBankfeedaccount

Creates a AccountingBankfeedaccount. Provide the unified AccountingBankfeedaccount fields in the request body; they are mapped to the provider's API. Returns the created AccountingBankfeedaccount.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingBankfeedaccount" method="post" path="/accounting/{connection_id}/bankfeedaccount" example="accounting_bankfeedaccount" -->
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

$request = new Operations\CreateAccountingBankfeedaccountRequest(
    accountingBankfeedaccount: new Shared\AccountingBankfeedaccount(
        accountNumber: '30369722',
        accountNumberLast4: '9722',
        accountType: Shared\AccountType::Loan,
        balance: 49437,
        bankName: 'Wells Fargo',
        createdAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        currency: 'AUD',
        feedStartAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        id: '9358c531-ed23-4ae4-a823-9329d879ecbc',
        metadata: [],
        name: 'Corwin, Donnelly and Connelly Checking',
        routingNumber: '694667752',
        status: Shared\AccountingBankfeedaccountStatus::Active,
        updatedAt: Utils\Utils::parseDateTime('2024-04-25T16:23:41.161Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingBankfeedaccount(
    request: $request
);

if ($response->accountingBankfeedaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\CreateAccountingBankfeedaccountRequest](../../Models/Operations/CreateAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\CreateAccountingBankfeedaccountResponse](../../Models/Operations/CreateAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingBankfeedtransaction

Creates a AccountingBankfeedtransaction. Provide the unified AccountingBankfeedtransaction fields in the request body; they are mapped to the provider's API. Returns the created AccountingBankfeedtransaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingBankfeedtransaction" method="post" path="/accounting/{connection_id}/bankfeedtransaction" example="accounting_bankfeedtransaction" -->
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

$request = new Operations\CreateAccountingBankfeedtransactionRequest(
    accountingBankfeedtransaction: new Shared\AccountingBankfeedtransaction(
        amount: 60889,
        bankCategory: 'Clothing',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-24T23:41:08.374Z'),
        currency: 'CAD',
        description: 'Payment of SRD 92.72 for withdrawal at Halvorson - Ziemann, processed with card ending ****3731 linked to account ***7781.',
        id: '53e8c19b-fbe3-422f-a4db-4d749fcff0ad',
        isPending: true,
        merchantName: 'Buckridge - Feest',
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-18T03:44:46.994Z'),
        reference: '79574105',
        transactionAt: Utils\Utils::parseDateTime('2022-07-30T17:16:02.252Z'),
        type: Shared\AccountingBankfeedtransactionType::Credit,
        updatedAt: Utils\Utils::parseDateTime('2022-05-25T06:06:27.776Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingBankfeedtransaction(
    request: $request
);

if ($response->accountingBankfeedtransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [Operations\CreateAccountingBankfeedtransactionRequest](../../Models/Operations/CreateAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |

### Response

**[?Operations\CreateAccountingBankfeedtransactionResponse](../../Models/Operations/CreateAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingBill

Creates a AccountingBill. Provide the unified AccountingBill fields in the request body; they are mapped to the provider's API. Returns the created AccountingBill.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingBill" method="post" path="/accounting/{connection_id}/bill" example="accounting_bill" -->
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

$request = new Operations\CreateAccountingBillRequest(
    accountingBill: new Shared\AccountingBill(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://puny-foodstuffs.name',
                id: '2c9e5635-2e1e-44cf-8748-a56c57efff86',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: '6aa11b18-085c-4e90-aae2-6cf15b2ba771',
                mimeType: 'application/pdf',
                name: 'BILL-2466-1.pdf',
            ),
        ],
        balanceAmount: 0,
        billNumber: 'BILL-2466',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2019-08-08T23:03:14.104Z'),
        currency: 'USD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2019-09-07T23:03:14.104Z'),
        extendedNotes: [],
        id: '48fdf52e-be7d-4420-9f2d-0ade6e962c6f',
        lineitems: [],
        metadata: [],
        notes: 'Admiratio deporto tutamen cilicium infit amissio ante demulceo.',
        paidAmount: 0,
        paidAt: Utils\Utils::parseDateTime('2019-08-15T17:24:28.313Z'),
        paymentCollectionMethod: Shared\PaymentCollectionMethod::ChargeAutomatically,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2019-08-08T23:03:14.104Z'),
        purchaseorderIds: [],
        send: true,
        status: Shared\AccountingBillStatus::PartiallyPaid,
        subTotalAmount: 0,
        taxAmount: 0,
        term: Shared\Term::Net90,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T19:01:19.704Z'),
        url: 'https://cluttered-importance.org/bills/BILL-2466',
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingBill(
    request: $request
);

if ($response->accountingBill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\CreateAccountingBillRequest](../../Models/Operations/CreateAccountingBillRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\CreateAccountingBillResponse](../../Models/Operations/CreateAccountingBillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingCategory

Creates a AccountingCategory. Provide the unified AccountingCategory fields in the request body; they are mapped to the provider's API. Returns the created AccountingCategory.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingCategory" method="post" path="/accounting/{connection_id}/category" example="accounting_category" -->
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

$request = new Operations\CreateAccountingCategoryRequest(
    accountingCategory: new Shared\AccountingCategory(
        createdAt: Utils\Utils::parseDateTime('2023-05-30T12:29:04.257Z'),
        description: 'Textus ab thymum labore basium.',
        id: '0f5a1708-3136-4a3e-b8ef-b7d9c6674761',
        isActive: false,
        metadata: [],
        name: 'Beauty',
        updatedAt: Utils\Utils::parseDateTime('2025-09-14T20:35:45.911Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingCategory(
    request: $request
);

if ($response->accountingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAccountingCategoryRequest](../../Models/Operations/CreateAccountingCategoryRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAccountingCategoryResponse](../../Models/Operations/CreateAccountingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingContact

Creates a AccountingContact. Provide the unified AccountingContact fields in the request body; they are mapped to the provider's API. Returns the created AccountingContact.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingContact" method="post" path="/accounting/{connection_id}/contact" example="accounting_contact" -->
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

$request = new Operations\CreateAccountingContactRequest(
    accountingContact: new Shared\AccountingContact(
        associatedContacts: [],
        balanceAmount: 55574,
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '4091 Tromp Coves',
            city: 'Lake Emmybury',
            countryCode: 'US',
            postalCode: '50764-5226',
            region: 'Washington',
            regionCode: 'CA',
        ),
        companyName: 'Kertzmann Group',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'AUD',
        emails: [
            new Shared\AccountingEmail(
                email: 'delores.reynolds@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Work,
            ),
            new Shared\AccountingEmail(
                email: 'accounts@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Other,
            ),
        ],
        firstName: 'Delores',
        id: '38b4cf75-deb3-4914-8285-26e3412e6bff',
        identification: '531850872',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        metadata: [],
        name: 'Kertzmann Group',
        notes: 'Et videlicet pauci.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: '96e69c46-e6ff-4690-9999-32f368ee47c9',
                name: 'Visa 7844',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://kertzmanngroup.com/billing',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '23129 Rebekah Mews',
            city: 'Mortimerhaven',
            countryCode: 'US',
            postalCode: '55878-6806',
            region: 'Florida',
            regionCode: 'OK',
        ),
        taxExemption: Shared\TaxExemption::Foreign,
        taxNumber: '867556410',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(432) 760-1716',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-22T02:51:59.352Z'),
        website: 'https://kertzmanngroup.com',
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingContact(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingContactRequest](../../Models/Operations/CreateAccountingContactRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingContactResponse](../../Models/Operations/CreateAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingCreditmemo

Creates a AccountingCreditmemo. Provide the unified AccountingCreditmemo fields in the request body; they are mapped to the provider's API. Returns the created AccountingCreditmemo.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingCreditmemo" method="post" path="/accounting/{connection_id}/creditmemo" example="accounting_creditmemo" -->
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

$request = new Operations\CreateAccountingCreditmemoRequest(
    accountingCreditmemo: new Shared\AccountingCreditmemo(
        applications: [],
        attachments: [],
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'CM-99537',
        currency: 'AUD',
        discountAmount: 0,
        id: '94f91e79-f094-4186-9dbd-5e9be17805a5',
        lineitems: [],
        metadata: [],
        notes: 'Hic vorax dedecor amo adfero torqueo quas victoria.',
        postedAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        send: true,
        status: Shared\AccountingCreditmemoStatus::Authorized,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2025-09-14T12:27:33.059Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingCreditmemo(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateAccountingCreditmemoRequest](../../Models/Operations/CreateAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateAccountingCreditmemoResponse](../../Models/Operations/CreateAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingExpense

Creates a AccountingExpense. Provide the unified AccountingExpense fields in the request body; they are mapped to the provider's API. Returns the created AccountingExpense.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingExpense" method="post" path="/accounting/{connection_id}/expense" example="accounting_expense" -->
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

$request = new Operations\CreateAccountingExpenseRequest(
    accountingExpense: new Shared\AccountingExpense(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://rubbery-couch.biz/',
                id: 'c9fbb745-50b6-4866-8777-b1917768071f',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: '0e33d7e9-f4a8-4520-86c5-0e905748f78f',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: '3a3d46f8-d35b-4725-9401-d441764d582d',
        lineitems: [
            new Shared\AccountingLineitem(
                id: 'c1047877-d83e-4f81-8b6a-874f6f912178',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'e9023d82-4fd8-4d01-8645-7c8d880aa3ba',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '32211745-bcdf-425d-b3cc-655841590a77',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'f9309418-91f9-4b63-9be0-f877ed24b725',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '23a5dae1-15bf-4352-b1b1-6970c4132015',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 164.02,
                unitAmount: 164.02,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'A payment of XPF 714.84 occurred at Bins, Barrows and Koch using a card ending in ****8422 for account ***4614.',
        paymentMethod: 'CASH',
        postedAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        status: Shared\AccountingExpenseStatus::Submitted,
        taxAmount: 0,
        totalAmount: 972.29,
        type: Shared\AccountingExpenseType::Company,
        updatedAt: Utils\Utils::parseDateTime('2020-09-02T11:33:34.675Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingExpense(
    request: $request
);

if ($response->accountingExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingExpenseRequest](../../Models/Operations/CreateAccountingExpenseRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingExpenseResponse](../../Models/Operations/CreateAccountingExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingExpensereport

Creates a AccountingExpensereport. Provide the unified AccountingExpensereport fields in the request body; they are mapped to the provider's API. Returns the created AccountingExpensereport.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingExpensereport" method="post" path="/accounting/{connection_id}/expensereport" example="accounting_expensereport" -->
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

$request = new Operations\CreateAccountingExpensereportRequest(
    accountingExpensereport: new Shared\AccountingExpensereport(
        approvedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.955Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: 'b0f62b8b-142f-4c35-ba14-931c7c58a635',
        lineitems: [
            new Shared\AccountingLineitem(
                id: 'a5790459-4e24-40e6-88ac-f58e658365a3',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'c2eb5ee3-9630-431c-87d0-a801bd570482',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'fdb73421-3e36-468c-a290-c57dddf05553',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '4d95632a-e247-4491-8fed-64e31643eb69',
                itemName: 'Flight',
                taxAmount: 0,
                totalAmount: 445.27,
                unitAmount: 445.27,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Lolita Kunde - October expenses',
        postedAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        reimbursedAmount: 908.46,
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.955Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.955Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingExpensereport(
    request: $request
);

if ($response->accountingExpensereport !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\CreateAccountingExpensereportRequest](../../Models/Operations/CreateAccountingExpensereportRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\CreateAccountingExpensereportResponse](../../Models/Operations/CreateAccountingExpensereportResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingInvoice

Creates a AccountingInvoice. Provide the unified AccountingInvoice fields in the request body; they are mapped to the provider's API. Returns the created AccountingInvoice.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingInvoice" method="post" path="/accounting/{connection_id}/invoice" example="accounting_invoice" -->
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

$request = new Operations\CreateAccountingInvoiceRequest(
    accountingInvoice: new Shared\AccountingInvoice(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://glossy-markup.net/',
                id: '8b85b1f6-2dde-4c6b-b577-111ddaa1ac1a',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: '7ea86daf-5fd0-47f9-9f68-17493dacf317',
                mimeType: 'application/pdf',
                name: 'INV-77705-1.pdf',
            ),
        ],
        balanceAmount: 0,
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        currency: 'GBP',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2022-12-07T14:17:29.587Z'),
        extendedNotes: [],
        id: '540fd573-cb31-4a8e-86c8-a9364fcc76a2',
        invoiceNumber: 'INV-77705',
        isInclusiveOfTax: false,
        lineitems: [],
        metadata: [],
        notes: 'Adinventitias sursum temptatio auctus comburo clarus ubi deprimo.',
        paymentCollectionMethod: Shared\AccountingInvoicePaymentCollectionMethod::ChargeAutomatically,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        reference: 'PO-2331',
        salesorderIds: [],
        send: true,
        status: Shared\AccountingInvoiceStatus::Overdue,
        subTotalAmount: 0,
        taxAmount: 0,
        term: Shared\AccountingInvoiceTerm::Net25,
        totalAmount: 0,
        type: Shared\AccountingInvoiceType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2026-04-27T21:30:15.853Z'),
        url: 'https://gifted-yarmulke.info/invoices/INV-77705',
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingInvoice(
    request: $request
);

if ($response->accountingInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingInvoiceRequest](../../Models/Operations/CreateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingInvoiceResponse](../../Models/Operations/CreateAccountingInvoiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingJournal

Creates a AccountingJournal. Provide the unified AccountingJournal fields in the request body; they are mapped to the provider's API. Returns the created AccountingJournal.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingJournal" method="post" path="/accounting/{connection_id}/journal" example="accounting_journal" -->
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

$request = new Operations\CreateAccountingJournalRequest(
    accountingJournal: new Shared\AccountingJournal(
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-02-20T15:14:55.881Z'),
        currency: 'CAD',
        description: 'Cilicium minima calco constans adipisci.',
        id: '240d4912-0bd8-4e26-b9b2-61a1545accc9',
        isInclusiveOfTax: true,
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2023-11-09T05:06:44.343Z'),
        reference: 'JE-78884',
        source: 'crustulum',
        status: Shared\AccountingJournalStatus::Void,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2022-01-12T05:33:24.033Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingJournal(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingJournalRequest](../../Models/Operations/CreateAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingJournalResponse](../../Models/Operations/CreateAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## ~~createAccountingOrder~~

Creates a AccountingOrder. Provide the unified AccountingOrder fields in the request body; they are mapped to the provider's API. Returns the created AccountingOrder.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingOrder" method="post" path="/accounting/{connection_id}/order" example="accounting_order" -->
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

$request = new Operations\CreateAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '7654 Treutel Square',
            city: 'Forrestport',
            countryCode: 'US',
            postalCode: '42190-3694',
            region: 'Maine',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: '4297d390-b956-4ce7-8640-b8ff81c26c90',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '4974 Beatty Corners',
            city: 'Alizeport',
            countryCode: 'US',
            postalCode: '56252',
            region: 'Alaska',
            regionCode: 'VT',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-09T07:54:16.869Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAccountingOrderRequest](../../Models/Operations/CreateAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAccountingOrderResponse](../../Models/Operations/CreateAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingPaymentterm

Creates a AccountingPaymentterm. Provide the unified AccountingPaymentterm fields in the request body; they are mapped to the provider's API. Returns the created AccountingPaymentterm.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingPaymentterm" method="post" path="/accounting/{connection_id}/paymentterm" example="accounting_paymentterm" -->
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

$request = new Operations\CreateAccountingPaymenttermRequest(
    accountingPaymentterm: new Shared\AccountingPaymentterm(
        category: Shared\Category::Standard,
        createdAt: Utils\Utils::parseDateTime('2021-08-22T22:42:42.265Z'),
        dayOfMonthDue: 4,
        description: 'Cogito pecco eos cultura.',
        discountDayOfMonth: 13,
        discountDays: 4,
        discountPercent: 5,
        dueDays: 57,
        dueNextMonthDays: 9,
        id: '6f2d0d36-5ece-4796-a1d7-7cd02e1e55ca',
        isActive: false,
        metadata: [],
        name: 'Net 30',
        type: Shared\AccountingPaymenttermType::Net15,
        updatedAt: Utils\Utils::parseDateTime('2026-01-12T16:29:51.980Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingPaymentterm(
    request: $request
);

if ($response->accountingPaymentterm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateAccountingPaymenttermRequest](../../Models/Operations/CreateAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateAccountingPaymenttermResponse](../../Models/Operations/CreateAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingProject

Creates a AccountingProject. Provide the unified AccountingProject fields in the request body; they are mapped to the provider's API. Returns the created AccountingProject.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingProject" method="post" path="/accounting/{connection_id}/project" -->
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

$request = new Operations\CreateAccountingProjectRequest(
    accountingProject: new Shared\AccountingProject(),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingProject(
    request: $request
);

if ($response->accountingProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingProjectRequest](../../Models/Operations/CreateAccountingProjectRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingProjectResponse](../../Models/Operations/CreateAccountingProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingPurchaseorder

Creates a AccountingPurchaseorder. Provide the unified AccountingPurchaseorder fields in the request body; they are mapped to the provider's API. Returns the created AccountingPurchaseorder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingPurchaseorder" method="post" path="/accounting/{connection_id}/purchaseorder" example="accounting_purchaseorder" -->
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

$request = new Operations\CreateAccountingPurchaseorderRequest(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(
        attachments: [],
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '72142 Willow Street',
            address2: 'Apt. 967',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'FL',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'EUR',
        id: 'f1edfc39-e5b6-46a3-a2b5-f933a81ce3ee',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '76494 Medhurst Club',
            city: 'Kshlerinfurt',
            countryCode: 'US',
            postalCode: '92116-5474',
            region: 'Oregon',
            regionCode: 'WY',
        ),
        status: Shared\AccountingPurchaseorderStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-08-11T19:30:36.716Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingPurchaseorder(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\CreateAccountingPurchaseorderRequest](../../Models/Operations/CreateAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\CreateAccountingPurchaseorderResponse](../../Models/Operations/CreateAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingQuote

Creates a AccountingQuote. Provide the unified AccountingQuote fields in the request body; they are mapped to the provider's API. Returns the created AccountingQuote.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingQuote" method="post" path="/accounting/{connection_id}/quote" -->
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

$request = new Operations\CreateAccountingQuoteRequest(
    accountingQuote: new Shared\AccountingQuote(),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingQuote(
    request: $request
);

if ($response->accountingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAccountingQuoteRequest](../../Models/Operations/CreateAccountingQuoteRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAccountingQuoteResponse](../../Models/Operations/CreateAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingSalesorder

Creates a AccountingSalesorder. Provide the unified AccountingSalesorder fields in the request body; they are mapped to the provider's API. Returns the created AccountingSalesorder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingSalesorder" method="post" path="/accounting/{connection_id}/salesorder" example="accounting_salesorder" -->
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

$request = new Operations\CreateAccountingSalesorderRequest(
    accountingSalesorder: new Shared\AccountingSalesorder(
        billingAddress: new Shared\PropertyAccountingSalesorderBillingAddress(
            address1: '26530 Stroman Rest',
            address2: 'Suite 801',
            city: 'Pocatello',
            countryCode: 'US',
            postalCode: '05015-8546',
            region: 'Louisiana',
            regionCode: 'MO',
        ),
        categoryIds: [],
        closedAt: Utils\Utils::parseDateTime('2023-03-26T18:37:42.137Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        currency: 'USD',
        discountAmount: 0,
        fees: [],
        fulfillmentType: Shared\FulfillmentType::Other,
        id: '6aff1cf6-95c4-4e2d-ad37-70f8cb837328',
        lineitems: [],
        metadata: [],
        orderNumber: '832663',
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        refundedAmount: 0,
        salesChannel: 'Wholesale',
        serviceChargeAmount: 0,
        shippingAddress: new Shared\PropertyAccountingSalesorderShippingAddress(
            address1: '69878 Bradley Mill',
            city: 'Port Matildestad',
            countryCode: 'US',
            postalCode: '07989-2148',
            region: 'Arkansas',
            regionCode: 'AK',
        ),
        status: Shared\AccountingSalesorderStatus::Paid,
        subtotalAmount: 0,
        taxAmount: 0,
        tipAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-03-26T18:37:42.137Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingSalesorder(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateAccountingSalesorderRequest](../../Models/Operations/CreateAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateAccountingSalesorderResponse](../../Models/Operations/CreateAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingTaxrate

Creates a AccountingTaxrate. Provide the unified AccountingTaxrate fields in the request body; they are mapped to the provider's API. Returns the created AccountingTaxrate.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingTaxrate" method="post" path="/accounting/{connection_id}/taxrate" example="accounting_taxrate" -->
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

$request = new Operations\CreateAccountingTaxrateRequest(
    accountingTaxrate: new Shared\AccountingTaxrate(
        components: [
            new Shared\AccountingTaxrateComponent(
                isCompound: false,
                name: 'Exempt',
                rate: 0,
            ),
        ],
        country: 'US',
        createdAt: Utils\Utils::parseDateTime('2020-01-04T10:37:56.894Z'),
        description: 'Exempt (0%)',
        effectiveRate: 0,
        id: '51e5f020-4f0d-4db7-bce4-06a839a2658b',
        isActive: false,
        isCompound: false,
        metadata: [],
        name: 'Exempt',
        rate: 0,
        region: 'KS',
        totalRate: 0,
        type: Shared\AccountingTaxrateType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2020-02-13T07:04:38.257Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingTaxrate(
    request: $request
);

if ($response->accountingTaxrate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingTaxrateRequest](../../Models/Operations/CreateAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingTaxrateResponse](../../Models/Operations/CreateAccountingTaxrateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingTransaction

Creates a AccountingTransaction. Provide the unified AccountingTransaction fields in the request body; they are mapped to the provider's API. Returns the created AccountingTransaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingTransaction" method="post" path="/accounting/{connection_id}/transaction" example="accounting_transaction" -->
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

$request = new Operations\CreateAccountingTransactionRequest(
    accountingTransaction: new Shared\AccountingTransaction(
        createdAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        id: '20b6396b-91af-4abf-be47-3e2319ddb187',
        lineitems: [
            new Shared\AccountingTransactionLineItem(
                categoryIds: [],
                description: 'The turquoise Hat combines Wallis and Futuna aesthetics with Potassium-based durability',
                id: '181868b2-0f77-4aa5-8f4c-3106865d52fe',
                name: 'Shirt',
                totalAmount: 10184,
                unitAmount: 536,
                unitQuantity: 19,
            ),
        ],
        memo: 'deposit of ISK 792.81 at Fritsch - Dooley charged to account ending in 7879 using card ending in ****3230.',
        status: Shared\AccountingTransactionStatus::Pending,
        taxAmount: 0,
        totalAmount: 10184,
        transactionAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        updatedAt: Utils\Utils::parseDateTime('2019-10-14T07:00:32.509Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingTransaction(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateAccountingTransactionRequest](../../Models/Operations/CreateAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateAccountingTransactionResponse](../../Models/Operations/CreateAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAccountingVendorcredit

Creates a AccountingVendorcredit. Provide the unified AccountingVendorcredit fields in the request body; they are mapped to the provider's API. Returns the created AccountingVendorcredit.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingVendorcredit" method="post" path="/accounting/{connection_id}/vendorcredit" example="accounting_vendorcredit" -->
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

$request = new Operations\CreateAccountingVendorcreditRequest(
    accountingVendorcredit: new Shared\AccountingVendorcredit(
        applications: [],
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        currency: 'USD',
        id: 'c2128a81-c858-4d8f-93c3-03f2c2864684',
        lineitems: [],
        metadata: [],
        notes: 'Volup conatus cruciamentum decor avaritia.',
        postedAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        status: Shared\AccountingVendorcreditStatus::Authorized,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-10-03T17:31:23.623Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->accounting->createAccountingVendorcredit(
    request: $request
);

if ($response->accountingVendorcredit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\CreateAccountingVendorcreditRequest](../../Models/Operations/CreateAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\CreateAccountingVendorcreditResponse](../../Models/Operations/CreateAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingAccount

Retrieves a single AccountingAccount by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingAccount" method="get" path="/accounting/{connection_id}/account/{id}" -->
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

$request = new Operations\GetAccountingAccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingAccount(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingAccountRequest](../../Models/Operations/GetAccountingAccountRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingAccountResponse](../../Models/Operations/GetAccountingAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingAgedpayable

Retrieves a single AccountingAgedpayable by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingAgedpayable" method="get" path="/accounting/{connection_id}/agedpayable/{id}" -->
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

$request = new Operations\GetAccountingAgedpayableRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingAgedpayable(
    request: $request
);

if ($response->accountingAgedpayable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingAgedpayableRequest](../../Models/Operations/GetAccountingAgedpayableRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingAgedpayableResponse](../../Models/Operations/GetAccountingAgedpayableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingAgedreceivable

Retrieves a single AccountingAgedreceivable by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingAgedreceivable" method="get" path="/accounting/{connection_id}/agedreceivable/{id}" -->
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

$request = new Operations\GetAccountingAgedreceivableRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingAgedreceivable(
    request: $request
);

if ($response->accountingAgedreceivable !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\GetAccountingAgedreceivableRequest](../../Models/Operations/GetAccountingAgedreceivableRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\GetAccountingAgedreceivableResponse](../../Models/Operations/GetAccountingAgedreceivableResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingBalancesheet

Retrieves a single AccountingBalancesheet by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingBalancesheet" method="get" path="/accounting/{connection_id}/balancesheet/{id}" -->
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

$request = new Operations\GetAccountingBalancesheetRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingBalancesheet(
    request: $request
);

if ($response->accountingBalancesheet !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingBalancesheetRequest](../../Models/Operations/GetAccountingBalancesheetRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingBalancesheetResponse](../../Models/Operations/GetAccountingBalancesheetResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingBankfeedaccount

Retrieves a single AccountingBankfeedaccount by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingBankfeedaccount" method="get" path="/accounting/{connection_id}/bankfeedaccount/{id}" -->
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

$request = new Operations\GetAccountingBankfeedaccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingBankfeedaccount(
    request: $request
);

if ($response->accountingBankfeedaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\GetAccountingBankfeedaccountRequest](../../Models/Operations/GetAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\GetAccountingBankfeedaccountResponse](../../Models/Operations/GetAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingBankfeedtransaction

Retrieves a single AccountingBankfeedtransaction by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingBankfeedtransaction" method="get" path="/accounting/{connection_id}/bankfeedtransaction/{id}" -->
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

$request = new Operations\GetAccountingBankfeedtransactionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingBankfeedtransaction(
    request: $request
);

if ($response->accountingBankfeedtransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\GetAccountingBankfeedtransactionRequest](../../Models/Operations/GetAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\GetAccountingBankfeedtransactionResponse](../../Models/Operations/GetAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingBill

Retrieves a single AccountingBill by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingBill" method="get" path="/accounting/{connection_id}/bill/{id}" -->
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

$request = new Operations\GetAccountingBillRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingBill(
    request: $request
);

if ($response->accountingBill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\GetAccountingBillRequest](../../Models/Operations/GetAccountingBillRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\GetAccountingBillResponse](../../Models/Operations/GetAccountingBillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingCashflow

Retrieves a single AccountingCashflow by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingCashflow" method="get" path="/accounting/{connection_id}/cashflow/{id}" -->
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

$request = new Operations\GetAccountingCashflowRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingCashflow(
    request: $request
);

if ($response->accountingCashflow !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingCashflowRequest](../../Models/Operations/GetAccountingCashflowRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingCashflowResponse](../../Models/Operations/GetAccountingCashflowResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingCategory

Retrieves a single AccountingCategory by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingCategory" method="get" path="/accounting/{connection_id}/category/{id}" -->
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

$request = new Operations\GetAccountingCategoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingCategory(
    request: $request
);

if ($response->accountingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingCategoryRequest](../../Models/Operations/GetAccountingCategoryRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingCategoryResponse](../../Models/Operations/GetAccountingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingContact

Retrieves a single AccountingContact by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingContact" method="get" path="/accounting/{connection_id}/contact/{id}" -->
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

$request = new Operations\GetAccountingContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingContact(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingContactRequest](../../Models/Operations/GetAccountingContactRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingContactResponse](../../Models/Operations/GetAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingCreditmemo

Retrieves a single AccountingCreditmemo by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingCreditmemo" method="get" path="/accounting/{connection_id}/creditmemo/{id}" -->
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

$request = new Operations\GetAccountingCreditmemoRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingCreditmemo(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetAccountingCreditmemoRequest](../../Models/Operations/GetAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetAccountingCreditmemoResponse](../../Models/Operations/GetAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingExpense

Retrieves a single AccountingExpense by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingExpense" method="get" path="/accounting/{connection_id}/expense/{id}" -->
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

$request = new Operations\GetAccountingExpenseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingExpense(
    request: $request
);

if ($response->accountingExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingExpenseRequest](../../Models/Operations/GetAccountingExpenseRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingExpenseResponse](../../Models/Operations/GetAccountingExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingExpensereport

Retrieves a single AccountingExpensereport by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingExpensereport" method="get" path="/accounting/{connection_id}/expensereport/{id}" -->
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

$request = new Operations\GetAccountingExpensereportRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingExpensereport(
    request: $request
);

if ($response->accountingExpensereport !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GetAccountingExpensereportRequest](../../Models/Operations/GetAccountingExpensereportRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\GetAccountingExpensereportResponse](../../Models/Operations/GetAccountingExpensereportResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingInvoice

Retrieves a single AccountingInvoice by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingInvoice" method="get" path="/accounting/{connection_id}/invoice/{id}" -->
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

$request = new Operations\GetAccountingInvoiceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingInvoice(
    request: $request
);

if ($response->accountingInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingInvoiceRequest](../../Models/Operations/GetAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingInvoiceResponse](../../Models/Operations/GetAccountingInvoiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingJournal

Retrieves a single AccountingJournal by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingJournal" method="get" path="/accounting/{connection_id}/journal/{id}" -->
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

$request = new Operations\GetAccountingJournalRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingJournal(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingJournalRequest](../../Models/Operations/GetAccountingJournalRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingJournalResponse](../../Models/Operations/GetAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## ~~getAccountingOrder~~

Retrieves a single AccountingOrder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingOrder" method="get" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\GetAccountingOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAccountingOrderRequest](../../Models/Operations/GetAccountingOrderRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAccountingOrderResponse](../../Models/Operations/GetAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingOrganization

Retrieves a single AccountingOrganization by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingOrganization" method="get" path="/accounting/{connection_id}/organization/{id}" -->
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

$request = new Operations\GetAccountingOrganizationRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingOrganization(
    request: $request
);

if ($response->accountingOrganization !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingOrganizationRequest](../../Models/Operations/GetAccountingOrganizationRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingOrganizationResponse](../../Models/Operations/GetAccountingOrganizationResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingPaymentterm

Retrieves a single AccountingPaymentterm by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingPaymentterm" method="get" path="/accounting/{connection_id}/paymentterm/{id}" -->
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

$request = new Operations\GetAccountingPaymenttermRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingPaymentterm(
    request: $request
);

if ($response->accountingPaymentterm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingPaymenttermRequest](../../Models/Operations/GetAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingPaymenttermResponse](../../Models/Operations/GetAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingProfitloss

Retrieves a single AccountingProfitloss by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingProfitloss" method="get" path="/accounting/{connection_id}/profitloss/{id}" -->
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

$request = new Operations\GetAccountingProfitlossRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingProfitloss(
    request: $request
);

if ($response->accountingProfitloss !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetAccountingProfitlossRequest](../../Models/Operations/GetAccountingProfitlossRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetAccountingProfitlossResponse](../../Models/Operations/GetAccountingProfitlossResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingProject

Retrieves a single AccountingProject by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingProject" method="get" path="/accounting/{connection_id}/project/{id}" -->
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

$request = new Operations\GetAccountingProjectRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingProject(
    request: $request
);

if ($response->accountingProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingProjectRequest](../../Models/Operations/GetAccountingProjectRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingProjectResponse](../../Models/Operations/GetAccountingProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingPurchaseorder

Retrieves a single AccountingPurchaseorder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingPurchaseorder" method="get" path="/accounting/{connection_id}/purchaseorder/{id}" -->
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

$request = new Operations\GetAccountingPurchaseorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingPurchaseorder(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GetAccountingPurchaseorderRequest](../../Models/Operations/GetAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\GetAccountingPurchaseorderResponse](../../Models/Operations/GetAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingPurchasereceipt

Retrieves a single AccountingPurchasereceipt by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingPurchasereceipt" method="get" path="/accounting/{connection_id}/purchasereceipt/{id}" -->
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

$request = new Operations\GetAccountingPurchasereceiptRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingPurchasereceipt(
    request: $request
);

if ($response->accountingPurchasereceipt !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\GetAccountingPurchasereceiptRequest](../../Models/Operations/GetAccountingPurchasereceiptRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\GetAccountingPurchasereceiptResponse](../../Models/Operations/GetAccountingPurchasereceiptResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingQuote

Retrieves a single AccountingQuote by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingQuote" method="get" path="/accounting/{connection_id}/quote/{id}" -->
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

$request = new Operations\GetAccountingQuoteRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingQuote(
    request: $request
);

if ($response->accountingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAccountingQuoteRequest](../../Models/Operations/GetAccountingQuoteRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAccountingQuoteResponse](../../Models/Operations/GetAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingSalesorder

Retrieves a single AccountingSalesorder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingSalesorder" method="get" path="/accounting/{connection_id}/salesorder/{id}" -->
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

$request = new Operations\GetAccountingSalesorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingSalesorder(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetAccountingSalesorderRequest](../../Models/Operations/GetAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetAccountingSalesorderResponse](../../Models/Operations/GetAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingSalesreceipt

Retrieves a single AccountingSalesreceipt by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingSalesreceipt" method="get" path="/accounting/{connection_id}/salesreceipt/{id}" -->
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

$request = new Operations\GetAccountingSalesreceiptRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingSalesreceipt(
    request: $request
);

if ($response->accountingSalesreceipt !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingSalesreceiptRequest](../../Models/Operations/GetAccountingSalesreceiptRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingSalesreceiptResponse](../../Models/Operations/GetAccountingSalesreceiptResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingTaxrate

Retrieves a single AccountingTaxrate by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingTaxrate" method="get" path="/accounting/{connection_id}/taxrate/{id}" -->
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

$request = new Operations\GetAccountingTaxrateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingTaxrate(
    request: $request
);

if ($response->accountingTaxrate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingTaxrateRequest](../../Models/Operations/GetAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingTaxrateResponse](../../Models/Operations/GetAccountingTaxrateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingTransaction

Retrieves a single AccountingTransaction by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingTransaction" method="get" path="/accounting/{connection_id}/transaction/{id}" -->
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

$request = new Operations\GetAccountingTransactionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingTransaction(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingTransactionRequest](../../Models/Operations/GetAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingTransactionResponse](../../Models/Operations/GetAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingTrialbalance

Retrieves a single AccountingTrialbalance by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingTrialbalance" method="get" path="/accounting/{connection_id}/trialbalance/{id}" -->
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

$request = new Operations\GetAccountingTrialbalanceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingTrialbalance(
    request: $request
);

if ($response->accountingTrialbalance !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingTrialbalanceRequest](../../Models/Operations/GetAccountingTrialbalanceRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingTrialbalanceResponse](../../Models/Operations/GetAccountingTrialbalanceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingVendorcredit

Retrieves a single AccountingVendorcredit by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingVendorcredit" method="get" path="/accounting/{connection_id}/vendorcredit/{id}" -->
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

$request = new Operations\GetAccountingVendorcreditRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->getAccountingVendorcredit(
    request: $request
);

if ($response->accountingVendorcredit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingVendorcreditRequest](../../Models/Operations/GetAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingVendorcreditResponse](../../Models/Operations/GetAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingAccounts

Returns a list of AccountingAccounts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingAccounts" method="get" path="/accounting/{connection_id}/account" -->
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

$request = new Operations\ListAccountingAccountsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingAccounts(
    request: $request
);

if ($response->accountingAccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingAccountsRequest](../../Models/Operations/ListAccountingAccountsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingAccountsResponse](../../Models/Operations/ListAccountingAccountsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingAgedpayables

Returns a list of AccountingAgedpayables. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingAgedpayables" method="get" path="/accounting/{connection_id}/agedpayable" -->
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

$request = new Operations\ListAccountingAgedpayablesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingAgedpayables(
    request: $request
);

if ($response->accountingAgedpayables !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingAgedpayablesRequest](../../Models/Operations/ListAccountingAgedpayablesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingAgedpayablesResponse](../../Models/Operations/ListAccountingAgedpayablesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingAgedreceivables

Returns a list of AccountingAgedreceivables. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingAgedreceivables" method="get" path="/accounting/{connection_id}/agedreceivable" -->
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

$request = new Operations\ListAccountingAgedreceivablesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingAgedreceivables(
    request: $request
);

if ($response->accountingAgedreceivables !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\ListAccountingAgedreceivablesRequest](../../Models/Operations/ListAccountingAgedreceivablesRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\ListAccountingAgedreceivablesResponse](../../Models/Operations/ListAccountingAgedreceivablesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingBalancesheets

Returns a list of AccountingBalancesheets. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingBalancesheets" method="get" path="/accounting/{connection_id}/balancesheet" -->
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

$request = new Operations\ListAccountingBalancesheetsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingBalancesheets(
    request: $request
);

if ($response->accountingBalancesheets !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingBalancesheetsRequest](../../Models/Operations/ListAccountingBalancesheetsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingBalancesheetsResponse](../../Models/Operations/ListAccountingBalancesheetsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingBankfeedaccounts

Returns a list of AccountingBankfeedaccounts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingBankfeedaccounts" method="get" path="/accounting/{connection_id}/bankfeedaccount" -->
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

$request = new Operations\ListAccountingBankfeedaccountsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingBankfeedaccounts(
    request: $request
);

if ($response->accountingBankfeedaccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\ListAccountingBankfeedaccountsRequest](../../Models/Operations/ListAccountingBankfeedaccountsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\ListAccountingBankfeedaccountsResponse](../../Models/Operations/ListAccountingBankfeedaccountsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingBankfeedtransactions

Returns a list of AccountingBankfeedtransactions. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingBankfeedtransactions" method="get" path="/accounting/{connection_id}/bankfeedtransaction" -->
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

$request = new Operations\ListAccountingBankfeedtransactionsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingBankfeedtransactions(
    request: $request
);

if ($response->accountingBankfeedtransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\ListAccountingBankfeedtransactionsRequest](../../Models/Operations/ListAccountingBankfeedtransactionsRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\ListAccountingBankfeedtransactionsResponse](../../Models/Operations/ListAccountingBankfeedtransactionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingBills

Returns a list of AccountingBills. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingBills" method="get" path="/accounting/{connection_id}/bill" -->
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

$request = new Operations\ListAccountingBillsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingBills(
    request: $request
);

if ($response->accountingBills !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\ListAccountingBillsRequest](../../Models/Operations/ListAccountingBillsRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\ListAccountingBillsResponse](../../Models/Operations/ListAccountingBillsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingCashflows

Returns a list of AccountingCashflows. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingCashflows" method="get" path="/accounting/{connection_id}/cashflow" -->
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

$request = new Operations\ListAccountingCashflowsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingCashflows(
    request: $request
);

if ($response->accountingCashflows !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAccountingCashflowsRequest](../../Models/Operations/ListAccountingCashflowsRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAccountingCashflowsResponse](../../Models/Operations/ListAccountingCashflowsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingCategories

Returns a list of AccountingCategories. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingCategories" method="get" path="/accounting/{connection_id}/category" -->
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

$request = new Operations\ListAccountingCategoriesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingCategories(
    request: $request
);

if ($response->accountingCategories !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\ListAccountingCategoriesRequest](../../Models/Operations/ListAccountingCategoriesRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\ListAccountingCategoriesResponse](../../Models/Operations/ListAccountingCategoriesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingContacts

Returns a list of AccountingContacts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingContacts" method="get" path="/accounting/{connection_id}/contact" -->
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

$request = new Operations\ListAccountingContactsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingContacts(
    request: $request
);

if ($response->accountingContacts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingContactsRequest](../../Models/Operations/ListAccountingContactsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingContactsResponse](../../Models/Operations/ListAccountingContactsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingCreditmemoes

Returns a list of AccountingCreditmemoes. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingCreditmemoes" method="get" path="/accounting/{connection_id}/creditmemo" -->
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

$request = new Operations\ListAccountingCreditmemoesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingCreditmemoes(
    request: $request
);

if ($response->accountingCreditmemoes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingCreditmemoesRequest](../../Models/Operations/ListAccountingCreditmemoesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingCreditmemoesResponse](../../Models/Operations/ListAccountingCreditmemoesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingExpensereports

Returns a list of AccountingExpensereports. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingExpensereports" method="get" path="/accounting/{connection_id}/expensereport" -->
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

$request = new Operations\ListAccountingExpensereportsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingExpensereports(
    request: $request
);

if ($response->accountingExpensereports !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\ListAccountingExpensereportsRequest](../../Models/Operations/ListAccountingExpensereportsRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\ListAccountingExpensereportsResponse](../../Models/Operations/ListAccountingExpensereportsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingExpenses

Returns a list of AccountingExpenses. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingExpenses" method="get" path="/accounting/{connection_id}/expense" -->
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

$request = new Operations\ListAccountingExpensesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingExpenses(
    request: $request
);

if ($response->accountingExpenses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingExpensesRequest](../../Models/Operations/ListAccountingExpensesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingExpensesResponse](../../Models/Operations/ListAccountingExpensesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingInvoices

Returns a list of AccountingInvoices. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingInvoices" method="get" path="/accounting/{connection_id}/invoice" -->
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

$request = new Operations\ListAccountingInvoicesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingInvoices(
    request: $request
);

if ($response->accountingInvoices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingInvoicesRequest](../../Models/Operations/ListAccountingInvoicesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingInvoicesResponse](../../Models/Operations/ListAccountingInvoicesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingJournals

Returns a list of AccountingJournals. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingJournals" method="get" path="/accounting/{connection_id}/journal" -->
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

$request = new Operations\ListAccountingJournalsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingJournals(
    request: $request
);

if ($response->accountingJournals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingJournalsRequest](../../Models/Operations/ListAccountingJournalsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingJournalsResponse](../../Models/Operations/ListAccountingJournalsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## ~~listAccountingOrders~~

Returns a list of AccountingOrders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingOrders" method="get" path="/accounting/{connection_id}/order" -->
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

$request = new Operations\ListAccountingOrdersRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingOrders(
    request: $request
);

if ($response->accountingOrders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAccountingOrdersRequest](../../Models/Operations/ListAccountingOrdersRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAccountingOrdersResponse](../../Models/Operations/ListAccountingOrdersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingOrganizations

Returns a list of AccountingOrganizations. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingOrganizations" method="get" path="/accounting/{connection_id}/organization" -->
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

$request = new Operations\ListAccountingOrganizationsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingOrganizations(
    request: $request
);

if ($response->accountingOrganizations !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingOrganizationsRequest](../../Models/Operations/ListAccountingOrganizationsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingOrganizationsResponse](../../Models/Operations/ListAccountingOrganizationsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingPaymentterms

Returns a list of AccountingPaymentterms. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingPaymentterms" method="get" path="/accounting/{connection_id}/paymentterm" -->
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

$request = new Operations\ListAccountingPaymenttermsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingPaymentterms(
    request: $request
);

if ($response->accountingPaymentterms !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingPaymenttermsRequest](../../Models/Operations/ListAccountingPaymenttermsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingPaymenttermsResponse](../../Models/Operations/ListAccountingPaymenttermsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingProfitlosses

Returns a list of AccountingProfitlosses. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingProfitlosses" method="get" path="/accounting/{connection_id}/profitloss" -->
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

$request = new Operations\ListAccountingProfitlossesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingProfitlosses(
    request: $request
);

if ($response->accountingProfitlosses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingProfitlossesRequest](../../Models/Operations/ListAccountingProfitlossesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingProfitlossesResponse](../../Models/Operations/ListAccountingProfitlossesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingProjects

Returns a list of AccountingProjects. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingProjects" method="get" path="/accounting/{connection_id}/project" -->
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

$request = new Operations\ListAccountingProjectsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingProjects(
    request: $request
);

if ($response->accountingProjects !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingProjectsRequest](../../Models/Operations/ListAccountingProjectsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingProjectsResponse](../../Models/Operations/ListAccountingProjectsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingPurchaseorders

Returns a list of AccountingPurchaseorders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingPurchaseorders" method="get" path="/accounting/{connection_id}/purchaseorder" -->
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

$request = new Operations\ListAccountingPurchaseordersRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingPurchaseorders(
    request: $request
);

if ($response->accountingPurchaseorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\ListAccountingPurchaseordersRequest](../../Models/Operations/ListAccountingPurchaseordersRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\ListAccountingPurchaseordersResponse](../../Models/Operations/ListAccountingPurchaseordersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingPurchasereceipts

Returns a list of AccountingPurchasereceipts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingPurchasereceipts" method="get" path="/accounting/{connection_id}/purchasereceipt" -->
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

$request = new Operations\ListAccountingPurchasereceiptsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingPurchasereceipts(
    request: $request
);

if ($response->accountingPurchasereceipts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\ListAccountingPurchasereceiptsRequest](../../Models/Operations/ListAccountingPurchasereceiptsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\ListAccountingPurchasereceiptsResponse](../../Models/Operations/ListAccountingPurchasereceiptsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingQuotes

Returns a list of AccountingQuotes. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingQuotes" method="get" path="/accounting/{connection_id}/quote" -->
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

$request = new Operations\ListAccountingQuotesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingQuotes(
    request: $request
);

if ($response->accountingQuotes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAccountingQuotesRequest](../../Models/Operations/ListAccountingQuotesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAccountingQuotesResponse](../../Models/Operations/ListAccountingQuotesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingSalesorders

Returns a list of AccountingSalesorders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingSalesorders" method="get" path="/accounting/{connection_id}/salesorder" -->
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

$request = new Operations\ListAccountingSalesordersRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingSalesorders(
    request: $request
);

if ($response->accountingSalesorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListAccountingSalesordersRequest](../../Models/Operations/ListAccountingSalesordersRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListAccountingSalesordersResponse](../../Models/Operations/ListAccountingSalesordersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingSalesreceipts

Returns a list of AccountingSalesreceipts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingSalesreceipts" method="get" path="/accounting/{connection_id}/salesreceipt" -->
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

$request = new Operations\ListAccountingSalesreceiptsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingSalesreceipts(
    request: $request
);

if ($response->accountingSalesreceipts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingSalesreceiptsRequest](../../Models/Operations/ListAccountingSalesreceiptsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingSalesreceiptsResponse](../../Models/Operations/ListAccountingSalesreceiptsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingTaxrates

Returns a list of AccountingTaxrates. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingTaxrates" method="get" path="/accounting/{connection_id}/taxrate" -->
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

$request = new Operations\ListAccountingTaxratesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingTaxrates(
    request: $request
);

if ($response->accountingTaxrates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingTaxratesRequest](../../Models/Operations/ListAccountingTaxratesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingTaxratesResponse](../../Models/Operations/ListAccountingTaxratesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingTransactions

Returns a list of AccountingTransactions. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingTransactions" method="get" path="/accounting/{connection_id}/transaction" -->
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

$request = new Operations\ListAccountingTransactionsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingTransactions(
    request: $request
);

if ($response->accountingTransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingTransactionsRequest](../../Models/Operations/ListAccountingTransactionsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingTransactionsResponse](../../Models/Operations/ListAccountingTransactionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingTrialbalances

Returns a list of AccountingTrialbalances. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingTrialbalances" method="get" path="/accounting/{connection_id}/trialbalance" -->
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

$request = new Operations\ListAccountingTrialbalancesRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingTrialbalances(
    request: $request
);

if ($response->accountingTrialbalances !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingTrialbalancesRequest](../../Models/Operations/ListAccountingTrialbalancesRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingTrialbalancesResponse](../../Models/Operations/ListAccountingTrialbalancesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingVendorcredits

Returns a list of AccountingVendorcredits. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingVendorcredits" method="get" path="/accounting/{connection_id}/vendorcredit" -->
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

$request = new Operations\ListAccountingVendorcreditsRequest(
    connectionId: '<id>',
);

$response = $sdk->accounting->listAccountingVendorcredits(
    request: $request
);

if ($response->accountingVendorcredits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingVendorcreditsRequest](../../Models/Operations/ListAccountingVendorcreditsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingVendorcreditsResponse](../../Models/Operations/ListAccountingVendorcreditsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingAccount

Updates the AccountingAccount identified by `id`. Provide the unified AccountingAccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingAccount" method="patch" path="/accounting/{connection_id}/account/{id}" example="accounting_account" -->
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

$request = new Operations\PatchAccountingAccountRequest(
    accountingAccount: new Shared\AccountingAccount(
        balance: 12092,
        createdAt: Utils\Utils::parseDateTime('2022-07-03T17:57:07.391Z'),
        currency: 'CAD',
        customerDefinedCode: '6170',
        description: 'Voluptatibus valde spoliatio.',
        id: 'd80945c5-4439-4ddb-b081-66ab572a2229',
        isPayable: false,
        metadata: [],
        name: 'Auto Loan Account',
        status: Shared\Status::Archived,
        taxonomy: [
            new Shared\AccountingAccountTaxonomy(
                originalType: 'vilitas',
                type: Shared\AccountingAccountTaxonomyType::Subgroup,
                value: 'comedo',
            ),
        ],
        type: Shared\Type::AccountsReceivable,
        updatedAt: Utils\Utils::parseDateTime('2023-08-08T04:01:27.262Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingAccount(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingAccountRequest](../../Models/Operations/PatchAccountingAccountRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingAccountResponse](../../Models/Operations/PatchAccountingAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingBankfeedaccount

Updates the AccountingBankfeedaccount identified by `id`. Provide the unified AccountingBankfeedaccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingBankfeedaccount" method="patch" path="/accounting/{connection_id}/bankfeedaccount/{id}" example="accounting_bankfeedaccount" -->
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

$request = new Operations\PatchAccountingBankfeedaccountRequest(
    accountingBankfeedaccount: new Shared\AccountingBankfeedaccount(
        accountNumber: '30369722',
        accountNumberLast4: '9722',
        accountType: Shared\AccountType::Loan,
        balance: 49437,
        bankName: 'Wells Fargo',
        createdAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        currency: 'AUD',
        feedStartAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        id: 'bc134a1f-97c2-40b3-bd6d-6f0659e62516',
        metadata: [],
        name: 'Corwin, Donnelly and Connelly Checking',
        routingNumber: '694667752',
        status: Shared\AccountingBankfeedaccountStatus::Active,
        updatedAt: Utils\Utils::parseDateTime('2024-04-25T16:23:41.167Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingBankfeedaccount(
    request: $request
);

if ($response->accountingBankfeedaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\PatchAccountingBankfeedaccountRequest](../../Models/Operations/PatchAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\PatchAccountingBankfeedaccountResponse](../../Models/Operations/PatchAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingBankfeedtransaction

Updates the AccountingBankfeedtransaction identified by `id`. Provide the unified AccountingBankfeedtransaction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingBankfeedtransaction" method="patch" path="/accounting/{connection_id}/bankfeedtransaction/{id}" example="accounting_bankfeedtransaction" -->
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

$request = new Operations\PatchAccountingBankfeedtransactionRequest(
    accountingBankfeedtransaction: new Shared\AccountingBankfeedtransaction(
        amount: 60889,
        bankCategory: 'Clothing',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-24T23:41:08.374Z'),
        currency: 'CAD',
        description: 'Payment of SRD 92.72 for withdrawal at Halvorson - Ziemann, processed with card ending ****3731 linked to account ***7781.',
        id: '3f88aa34-b40f-4e26-bd33-3a5b4f5025ba',
        isPending: true,
        merchantName: 'Buckridge - Feest',
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-18T03:44:47.009Z'),
        reference: '79574105',
        transactionAt: Utils\Utils::parseDateTime('2022-07-30T17:16:02.253Z'),
        type: Shared\AccountingBankfeedtransactionType::Credit,
        updatedAt: Utils\Utils::parseDateTime('2022-05-25T06:06:27.777Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingBankfeedtransaction(
    request: $request
);

if ($response->accountingBankfeedtransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\PatchAccountingBankfeedtransactionRequest](../../Models/Operations/PatchAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\PatchAccountingBankfeedtransactionResponse](../../Models/Operations/PatchAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingBill

Updates the AccountingBill identified by `id`. Provide the unified AccountingBill fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingBill" method="patch" path="/accounting/{connection_id}/bill/{id}" example="accounting_bill" -->
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

$request = new Operations\PatchAccountingBillRequest(
    accountingBill: new Shared\AccountingBill(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://puny-foodstuffs.name',
                id: 'fa660e7f-a831-4224-ab59-2513e0d350d7',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: 'a94a3491-d40d-4a28-a00c-2b9f05c93158',
                mimeType: 'application/pdf',
                name: 'BILL-2466-1.pdf',
            ),
        ],
        balanceAmount: 0,
        billNumber: 'BILL-2466',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2019-08-08T23:03:14.104Z'),
        currency: 'USD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2019-09-07T23:03:14.104Z'),
        extendedNotes: [],
        id: 'b3f562e3-44c9-4d3b-af6f-6c4fe8573738',
        lineitems: [],
        metadata: [],
        notes: 'Admiratio deporto tutamen cilicium infit amissio ante demulceo.',
        paidAmount: 0,
        paidAt: Utils\Utils::parseDateTime('2019-08-15T17:24:28.313Z'),
        paymentCollectionMethod: Shared\PaymentCollectionMethod::ChargeAutomatically,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2019-08-08T23:03:14.104Z'),
        purchaseorderIds: [],
        send: true,
        status: Shared\AccountingBillStatus::PartiallyPaid,
        subTotalAmount: 0,
        taxAmount: 0,
        term: Shared\Term::Net90,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T19:01:19.711Z'),
        url: 'https://cluttered-importance.org/bills/BILL-2466',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingBill(
    request: $request
);

if ($response->accountingBill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\PatchAccountingBillRequest](../../Models/Operations/PatchAccountingBillRequest.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\PatchAccountingBillResponse](../../Models/Operations/PatchAccountingBillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingCategory

Updates the AccountingCategory identified by `id`. Provide the unified AccountingCategory fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingCategory" method="patch" path="/accounting/{connection_id}/category/{id}" example="accounting_category" -->
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

$request = new Operations\PatchAccountingCategoryRequest(
    accountingCategory: new Shared\AccountingCategory(
        createdAt: Utils\Utils::parseDateTime('2023-05-30T12:29:04.257Z'),
        description: 'Textus ab thymum labore basium.',
        id: 'd0efa3ff-2054-476d-ae59-5a504bf57471',
        isActive: false,
        metadata: [],
        name: 'Beauty',
        updatedAt: Utils\Utils::parseDateTime('2025-09-14T20:35:45.923Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingCategory(
    request: $request
);

if ($response->accountingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAccountingCategoryRequest](../../Models/Operations/PatchAccountingCategoryRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAccountingCategoryResponse](../../Models/Operations/PatchAccountingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingContact

Updates the AccountingContact identified by `id`. Provide the unified AccountingContact fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingContact" method="patch" path="/accounting/{connection_id}/contact/{id}" example="accounting_contact" -->
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

$request = new Operations\PatchAccountingContactRequest(
    accountingContact: new Shared\AccountingContact(
        associatedContacts: [],
        balanceAmount: 55574,
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '4091 Tromp Coves',
            city: 'Lake Emmybury',
            countryCode: 'US',
            postalCode: '50764-5226',
            region: 'Washington',
            regionCode: 'CA',
        ),
        companyName: 'Kertzmann Group',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'AUD',
        emails: [
            new Shared\AccountingEmail(
                email: 'delores.reynolds@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Work,
            ),
            new Shared\AccountingEmail(
                email: 'accounts@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Other,
            ),
        ],
        firstName: 'Delores',
        id: 'c2f273a6-34d1-4cb6-87a1-8c9bebcc59dd',
        identification: '531850872',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        metadata: [],
        name: 'Kertzmann Group',
        notes: 'Et videlicet pauci.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: 'fe7947ed-2991-4bd5-bc9e-ca495254bba7',
                name: 'Visa 7844',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://kertzmanngroup.com/billing',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '23129 Rebekah Mews',
            city: 'Mortimerhaven',
            countryCode: 'US',
            postalCode: '55878-6806',
            region: 'Florida',
            regionCode: 'OK',
        ),
        taxExemption: Shared\TaxExemption::Foreign,
        taxNumber: '867556410',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(432) 760-1716',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-22T02:51:59.376Z'),
        website: 'https://kertzmanngroup.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingContact(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingContactRequest](../../Models/Operations/PatchAccountingContactRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingContactResponse](../../Models/Operations/PatchAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingCreditmemo

Updates the AccountingCreditmemo identified by `id`. Provide the unified AccountingCreditmemo fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingCreditmemo" method="patch" path="/accounting/{connection_id}/creditmemo/{id}" example="accounting_creditmemo" -->
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

$request = new Operations\PatchAccountingCreditmemoRequest(
    accountingCreditmemo: new Shared\AccountingCreditmemo(
        applications: [],
        attachments: [],
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'CM-99537',
        currency: 'AUD',
        discountAmount: 0,
        id: 'bb8f718f-f142-4c26-9580-1fe9d08ff030',
        lineitems: [],
        metadata: [],
        notes: 'Hic vorax dedecor amo adfero torqueo quas victoria.',
        postedAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        send: true,
        status: Shared\AccountingCreditmemoStatus::Authorized,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2025-09-14T12:27:33.090Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingCreditmemo(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchAccountingCreditmemoRequest](../../Models/Operations/PatchAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchAccountingCreditmemoResponse](../../Models/Operations/PatchAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingExpense

Updates the AccountingExpense identified by `id`. Provide the unified AccountingExpense fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingExpense" method="patch" path="/accounting/{connection_id}/expense/{id}" example="accounting_expense" -->
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

$request = new Operations\PatchAccountingExpenseRequest(
    accountingExpense: new Shared\AccountingExpense(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://rubbery-couch.biz/',
                id: '8107a448-08e6-433c-8e88-000e29ea1824',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: 'ca12a5c2-0efb-4d2c-a360-5c438488dbc2',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: '3bef6afc-e352-4126-b228-0d00e700705c',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '61dc00ba-2533-46b9-95a7-933a840f7ebc',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'e9af4d5d-6ca0-4a0a-bded-8778312a21a0',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '48103517-dc84-41c6-acc7-bc0d70e39556',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '4a91eaae-d342-48b3-86be-e5e78d94afcf',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'db64f207-850c-4e77-8050-65bc5e1ff356',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 164.02,
                unitAmount: 164.02,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'A payment of XPF 714.84 occurred at Bins, Barrows and Koch using a card ending in ****8422 for account ***4614.',
        paymentMethod: 'CASH',
        postedAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        status: Shared\AccountingExpenseStatus::Submitted,
        taxAmount: 0,
        totalAmount: 972.29,
        type: Shared\AccountingExpenseType::Company,
        updatedAt: Utils\Utils::parseDateTime('2020-09-02T11:33:34.677Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingExpense(
    request: $request
);

if ($response->accountingExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingExpenseRequest](../../Models/Operations/PatchAccountingExpenseRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingExpenseResponse](../../Models/Operations/PatchAccountingExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingExpensereport

Updates the AccountingExpensereport identified by `id`. Provide the unified AccountingExpensereport fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingExpensereport" method="patch" path="/accounting/{connection_id}/expensereport/{id}" example="accounting_expensereport" -->
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

$request = new Operations\PatchAccountingExpensereportRequest(
    accountingExpensereport: new Shared\AccountingExpensereport(
        approvedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.961Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: '0874437e-942e-4afd-8a1c-835003d5985a',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '9379cb78-37c1-4d6e-85b9-8cc762ba609c',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '00c812ef-d73c-4af4-aa51-80af28b9ea08',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '8e699f71-8d7b-43c2-9832-4f853d1b9ce9',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '82f567b9-1a3e-459a-bf21-f4c53a8dac13',
                itemName: 'Flight',
                taxAmount: 0,
                totalAmount: 445.27,
                unitAmount: 445.27,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Lolita Kunde - October expenses',
        postedAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        reimbursedAmount: 908.46,
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.961Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.961Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingExpensereport(
    request: $request
);

if ($response->accountingExpensereport !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\PatchAccountingExpensereportRequest](../../Models/Operations/PatchAccountingExpensereportRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\PatchAccountingExpensereportResponse](../../Models/Operations/PatchAccountingExpensereportResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingInvoice

Updates the AccountingInvoice identified by `id`. Provide the unified AccountingInvoice fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingInvoice" method="patch" path="/accounting/{connection_id}/invoice/{id}" example="accounting_invoice" -->
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

$request = new Operations\PatchAccountingInvoiceRequest(
    accountingInvoice: new Shared\AccountingInvoice(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://glossy-markup.net/',
                id: 'e297f2b5-f241-415d-aeb0-8afec99593d8',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: 'a947b253-9c82-4622-8620-cada1f41708b',
                mimeType: 'application/pdf',
                name: 'INV-77705-1.pdf',
            ),
        ],
        balanceAmount: 0,
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        currency: 'GBP',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2022-12-07T14:17:29.587Z'),
        extendedNotes: [],
        id: 'e6571321-ee0e-45d9-b009-3420502ca3cc',
        invoiceNumber: 'INV-77705',
        isInclusiveOfTax: false,
        lineitems: [],
        metadata: [],
        notes: 'Adinventitias sursum temptatio auctus comburo clarus ubi deprimo.',
        paymentCollectionMethod: Shared\AccountingInvoicePaymentCollectionMethod::ChargeAutomatically,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        reference: 'PO-2331',
        salesorderIds: [],
        send: true,
        status: Shared\AccountingInvoiceStatus::Overdue,
        subTotalAmount: 0,
        taxAmount: 0,
        term: Shared\AccountingInvoiceTerm::Net25,
        totalAmount: 0,
        type: Shared\AccountingInvoiceType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2026-04-27T21:30:15.909Z'),
        url: 'https://gifted-yarmulke.info/invoices/INV-77705',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingInvoice(
    request: $request
);

if ($response->accountingInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingInvoiceRequest](../../Models/Operations/PatchAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingInvoiceResponse](../../Models/Operations/PatchAccountingInvoiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingJournal

Updates the AccountingJournal identified by `id`. Provide the unified AccountingJournal fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingJournal" method="patch" path="/accounting/{connection_id}/journal/{id}" example="accounting_journal" -->
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

$request = new Operations\PatchAccountingJournalRequest(
    accountingJournal: new Shared\AccountingJournal(
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-02-20T15:14:55.881Z'),
        currency: 'CAD',
        description: 'Cilicium minima calco constans adipisci.',
        id: '7f58f538-3e0a-408e-b60e-b73021740e08',
        isInclusiveOfTax: true,
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2023-11-09T05:06:44.359Z'),
        reference: 'JE-78884',
        source: 'crustulum',
        status: Shared\AccountingJournalStatus::Void,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2022-01-12T05:33:24.041Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingJournal(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingJournalRequest](../../Models/Operations/PatchAccountingJournalRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingJournalResponse](../../Models/Operations/PatchAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## ~~patchAccountingOrder~~

Updates the AccountingOrder identified by `id`. Provide the unified AccountingOrder fields to change in the request body.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingOrder" method="patch" path="/accounting/{connection_id}/order/{id}" example="accounting_order" -->
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

$request = new Operations\PatchAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '7654 Treutel Square',
            city: 'Forrestport',
            countryCode: 'US',
            postalCode: '42190-3694',
            region: 'Maine',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: 'e3fc7728-e555-483a-8633-214edc8cac3e',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '4974 Beatty Corners',
            city: 'Alizeport',
            countryCode: 'US',
            postalCode: '56252',
            region: 'Alaska',
            regionCode: 'VT',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-09T07:54:16.879Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAccountingOrderRequest](../../Models/Operations/PatchAccountingOrderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAccountingOrderResponse](../../Models/Operations/PatchAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingPaymentterm

Updates the AccountingPaymentterm identified by `id`. Provide the unified AccountingPaymentterm fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingPaymentterm" method="patch" path="/accounting/{connection_id}/paymentterm/{id}" example="accounting_paymentterm" -->
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

$request = new Operations\PatchAccountingPaymenttermRequest(
    accountingPaymentterm: new Shared\AccountingPaymentterm(
        category: Shared\Category::Standard,
        createdAt: Utils\Utils::parseDateTime('2021-08-22T22:42:42.265Z'),
        dayOfMonthDue: 4,
        description: 'Cogito pecco eos cultura.',
        discountDayOfMonth: 13,
        discountDays: 4,
        discountPercent: 5,
        dueDays: 57,
        dueNextMonthDays: 9,
        id: 'fab1d3b7-31d4-4a99-9a2c-e7ae9ae8a077',
        isActive: false,
        metadata: [],
        name: 'Net 30',
        type: Shared\AccountingPaymenttermType::Net15,
        updatedAt: Utils\Utils::parseDateTime('2026-01-12T16:29:51.995Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingPaymentterm(
    request: $request
);

if ($response->accountingPaymentterm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchAccountingPaymenttermRequest](../../Models/Operations/PatchAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchAccountingPaymenttermResponse](../../Models/Operations/PatchAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingProject

Updates the AccountingProject identified by `id`. Provide the unified AccountingProject fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingProject" method="patch" path="/accounting/{connection_id}/project/{id}" -->
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

$request = new Operations\PatchAccountingProjectRequest(
    accountingProject: new Shared\AccountingProject(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingProject(
    request: $request
);

if ($response->accountingProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingProjectRequest](../../Models/Operations/PatchAccountingProjectRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingProjectResponse](../../Models/Operations/PatchAccountingProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingPurchaseorder

Updates the AccountingPurchaseorder identified by `id`. Provide the unified AccountingPurchaseorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingPurchaseorder" method="patch" path="/accounting/{connection_id}/purchaseorder/{id}" example="accounting_purchaseorder" -->
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

$request = new Operations\PatchAccountingPurchaseorderRequest(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(
        attachments: [],
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '72142 Willow Street',
            address2: 'Apt. 967',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'FL',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'EUR',
        id: '41960b90-1b9f-4208-8eda-a4dd204dbc9b',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '76494 Medhurst Club',
            city: 'Kshlerinfurt',
            countryCode: 'US',
            postalCode: '92116-5474',
            region: 'Oregon',
            regionCode: 'WY',
        ),
        status: Shared\AccountingPurchaseorderStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-08-11T19:30:36.721Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingPurchaseorder(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\PatchAccountingPurchaseorderRequest](../../Models/Operations/PatchAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\PatchAccountingPurchaseorderResponse](../../Models/Operations/PatchAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingQuote

Updates the AccountingQuote identified by `id`. Provide the unified AccountingQuote fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingQuote" method="patch" path="/accounting/{connection_id}/quote/{id}" -->
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

$request = new Operations\PatchAccountingQuoteRequest(
    accountingQuote: new Shared\AccountingQuote(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingQuote(
    request: $request
);

if ($response->accountingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAccountingQuoteRequest](../../Models/Operations/PatchAccountingQuoteRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAccountingQuoteResponse](../../Models/Operations/PatchAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingSalesorder

Updates the AccountingSalesorder identified by `id`. Provide the unified AccountingSalesorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingSalesorder" method="patch" path="/accounting/{connection_id}/salesorder/{id}" example="accounting_salesorder" -->
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

$request = new Operations\PatchAccountingSalesorderRequest(
    accountingSalesorder: new Shared\AccountingSalesorder(
        billingAddress: new Shared\PropertyAccountingSalesorderBillingAddress(
            address1: '26530 Stroman Rest',
            address2: 'Suite 801',
            city: 'Pocatello',
            countryCode: 'US',
            postalCode: '05015-8546',
            region: 'Louisiana',
            regionCode: 'MO',
        ),
        categoryIds: [],
        closedAt: Utils\Utils::parseDateTime('2023-03-26T18:37:42.154Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        currency: 'USD',
        discountAmount: 0,
        fees: [],
        fulfillmentType: Shared\FulfillmentType::Other,
        id: 'e6e12d7a-8f33-4039-826f-a45a5dc5c62b',
        lineitems: [],
        metadata: [],
        orderNumber: '832663',
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        refundedAmount: 0,
        salesChannel: 'Wholesale',
        serviceChargeAmount: 0,
        shippingAddress: new Shared\PropertyAccountingSalesorderShippingAddress(
            address1: '69878 Bradley Mill',
            city: 'Port Matildestad',
            countryCode: 'US',
            postalCode: '07989-2148',
            region: 'Arkansas',
            regionCode: 'AK',
        ),
        status: Shared\AccountingSalesorderStatus::Paid,
        subtotalAmount: 0,
        taxAmount: 0,
        tipAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-03-26T18:37:42.154Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingSalesorder(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchAccountingSalesorderRequest](../../Models/Operations/PatchAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchAccountingSalesorderResponse](../../Models/Operations/PatchAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingTaxrate

Updates the AccountingTaxrate identified by `id`. Provide the unified AccountingTaxrate fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingTaxrate" method="patch" path="/accounting/{connection_id}/taxrate/{id}" example="accounting_taxrate" -->
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

$request = new Operations\PatchAccountingTaxrateRequest(
    accountingTaxrate: new Shared\AccountingTaxrate(
        components: [
            new Shared\AccountingTaxrateComponent(
                isCompound: false,
                name: 'Exempt',
                rate: 0,
            ),
        ],
        country: 'US',
        createdAt: Utils\Utils::parseDateTime('2020-01-04T10:37:56.894Z'),
        description: 'Exempt (0%)',
        effectiveRate: 0,
        id: '86013efa-4a1d-4121-b1f6-4c65251ffde3',
        isActive: false,
        isCompound: false,
        metadata: [],
        name: 'Exempt',
        rate: 0,
        region: 'KS',
        totalRate: 0,
        type: Shared\AccountingTaxrateType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2020-02-13T07:04:38.257Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingTaxrate(
    request: $request
);

if ($response->accountingTaxrate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingTaxrateRequest](../../Models/Operations/PatchAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingTaxrateResponse](../../Models/Operations/PatchAccountingTaxrateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingTransaction

Updates the AccountingTransaction identified by `id`. Provide the unified AccountingTransaction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingTransaction" method="patch" path="/accounting/{connection_id}/transaction/{id}" example="accounting_transaction" -->
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

$request = new Operations\PatchAccountingTransactionRequest(
    accountingTransaction: new Shared\AccountingTransaction(
        createdAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        id: '1999e044-e297-4fcc-96c9-cddaff09e000',
        lineitems: [
            new Shared\AccountingTransactionLineItem(
                categoryIds: [],
                description: 'The turquoise Hat combines Wallis and Futuna aesthetics with Potassium-based durability',
                id: 'a2a7918c-8307-4300-a538-d18cc203f1c6',
                name: 'Shirt',
                totalAmount: 10184,
                unitAmount: 536,
                unitQuantity: 19,
            ),
        ],
        memo: 'deposit of ISK 792.81 at Fritsch - Dooley charged to account ending in 7879 using card ending in ****3230.',
        status: Shared\AccountingTransactionStatus::Pending,
        taxAmount: 0,
        totalAmount: 10184,
        transactionAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        updatedAt: Utils\Utils::parseDateTime('2019-10-14T07:00:32.509Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingTransaction(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchAccountingTransactionRequest](../../Models/Operations/PatchAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchAccountingTransactionResponse](../../Models/Operations/PatchAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingVendorcredit

Updates the AccountingVendorcredit identified by `id`. Provide the unified AccountingVendorcredit fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingVendorcredit" method="patch" path="/accounting/{connection_id}/vendorcredit/{id}" example="accounting_vendorcredit" -->
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

$request = new Operations\PatchAccountingVendorcreditRequest(
    accountingVendorcredit: new Shared\AccountingVendorcredit(
        applications: [],
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        currency: 'USD',
        id: '47653b26-120b-4d5b-a1e9-790de2666480',
        lineitems: [],
        metadata: [],
        notes: 'Volup conatus cruciamentum decor avaritia.',
        postedAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        status: Shared\AccountingVendorcreditStatus::Authorized,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-10-03T17:31:23.628Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->patchAccountingVendorcredit(
    request: $request
);

if ($response->accountingVendorcredit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\PatchAccountingVendorcreditRequest](../../Models/Operations/PatchAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\PatchAccountingVendorcreditResponse](../../Models/Operations/PatchAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingAccount

Deletes the AccountingAccount identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingAccount" method="delete" path="/accounting/{connection_id}/account/{id}" -->
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

$request = new Operations\RemoveAccountingAccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingAccount(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingAccountRequest](../../Models/Operations/RemoveAccountingAccountRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingAccountResponse](../../Models/Operations/RemoveAccountingAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingBankfeedaccount

Deletes the AccountingBankfeedaccount identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingBankfeedaccount" method="delete" path="/accounting/{connection_id}/bankfeedaccount/{id}" -->
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

$request = new Operations\RemoveAccountingBankfeedaccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingBankfeedaccount(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\RemoveAccountingBankfeedaccountRequest](../../Models/Operations/RemoveAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\RemoveAccountingBankfeedaccountResponse](../../Models/Operations/RemoveAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingBankfeedtransaction

Deletes the AccountingBankfeedtransaction identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingBankfeedtransaction" method="delete" path="/accounting/{connection_id}/bankfeedtransaction/{id}" -->
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

$request = new Operations\RemoveAccountingBankfeedtransactionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingBankfeedtransaction(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [Operations\RemoveAccountingBankfeedtransactionRequest](../../Models/Operations/RemoveAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |

### Response

**[?Operations\RemoveAccountingBankfeedtransactionResponse](../../Models/Operations/RemoveAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingBill

Deletes the AccountingBill identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingBill" method="delete" path="/accounting/{connection_id}/bill/{id}" -->
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

$request = new Operations\RemoveAccountingBillRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingBill(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\RemoveAccountingBillRequest](../../Models/Operations/RemoveAccountingBillRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\RemoveAccountingBillResponse](../../Models/Operations/RemoveAccountingBillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingCategory

Deletes the AccountingCategory identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingCategory" method="delete" path="/accounting/{connection_id}/category/{id}" -->
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

$request = new Operations\RemoveAccountingCategoryRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingCategory(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAccountingCategoryRequest](../../Models/Operations/RemoveAccountingCategoryRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAccountingCategoryResponse](../../Models/Operations/RemoveAccountingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingContact

Deletes the AccountingContact identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingContact" method="delete" path="/accounting/{connection_id}/contact/{id}" -->
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

$request = new Operations\RemoveAccountingContactRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingContact(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingContactRequest](../../Models/Operations/RemoveAccountingContactRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingContactResponse](../../Models/Operations/RemoveAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingCreditmemo

Deletes the AccountingCreditmemo identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingCreditmemo" method="delete" path="/accounting/{connection_id}/creditmemo/{id}" -->
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

$request = new Operations\RemoveAccountingCreditmemoRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingCreditmemo(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveAccountingCreditmemoRequest](../../Models/Operations/RemoveAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveAccountingCreditmemoResponse](../../Models/Operations/RemoveAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingExpense

Deletes the AccountingExpense identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingExpense" method="delete" path="/accounting/{connection_id}/expense/{id}" -->
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

$request = new Operations\RemoveAccountingExpenseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingExpense(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingExpenseRequest](../../Models/Operations/RemoveAccountingExpenseRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingExpenseResponse](../../Models/Operations/RemoveAccountingExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingExpensereport

Deletes the AccountingExpensereport identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingExpensereport" method="delete" path="/accounting/{connection_id}/expensereport/{id}" -->
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

$request = new Operations\RemoveAccountingExpensereportRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingExpensereport(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\RemoveAccountingExpensereportRequest](../../Models/Operations/RemoveAccountingExpensereportRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\RemoveAccountingExpensereportResponse](../../Models/Operations/RemoveAccountingExpensereportResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingInvoice

Deletes the AccountingInvoice identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingInvoice" method="delete" path="/accounting/{connection_id}/invoice/{id}" -->
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

$request = new Operations\RemoveAccountingInvoiceRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingInvoice(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingInvoiceRequest](../../Models/Operations/RemoveAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingInvoiceResponse](../../Models/Operations/RemoveAccountingInvoiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingJournal

Deletes the AccountingJournal identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingJournal" method="delete" path="/accounting/{connection_id}/journal/{id}" -->
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

$request = new Operations\RemoveAccountingJournalRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingJournal(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingJournalRequest](../../Models/Operations/RemoveAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingJournalResponse](../../Models/Operations/RemoveAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## ~~removeAccountingOrder~~

Deletes the AccountingOrder identified by `id`.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingOrder" method="delete" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\RemoveAccountingOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingOrder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAccountingOrderRequest](../../Models/Operations/RemoveAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAccountingOrderResponse](../../Models/Operations/RemoveAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingPaymentterm

Deletes the AccountingPaymentterm identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingPaymentterm" method="delete" path="/accounting/{connection_id}/paymentterm/{id}" -->
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

$request = new Operations\RemoveAccountingPaymenttermRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingPaymentterm(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveAccountingPaymenttermRequest](../../Models/Operations/RemoveAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveAccountingPaymenttermResponse](../../Models/Operations/RemoveAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingProject

Deletes the AccountingProject identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingProject" method="delete" path="/accounting/{connection_id}/project/{id}" -->
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

$request = new Operations\RemoveAccountingProjectRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingProject(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingProjectRequest](../../Models/Operations/RemoveAccountingProjectRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingProjectResponse](../../Models/Operations/RemoveAccountingProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingPurchaseorder

Deletes the AccountingPurchaseorder identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingPurchaseorder" method="delete" path="/accounting/{connection_id}/purchaseorder/{id}" -->
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

$request = new Operations\RemoveAccountingPurchaseorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingPurchaseorder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\RemoveAccountingPurchaseorderRequest](../../Models/Operations/RemoveAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\RemoveAccountingPurchaseorderResponse](../../Models/Operations/RemoveAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingQuote

Deletes the AccountingQuote identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingQuote" method="delete" path="/accounting/{connection_id}/quote/{id}" -->
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

$request = new Operations\RemoveAccountingQuoteRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingQuote(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAccountingQuoteRequest](../../Models/Operations/RemoveAccountingQuoteRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAccountingQuoteResponse](../../Models/Operations/RemoveAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingSalesorder

Deletes the AccountingSalesorder identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingSalesorder" method="delete" path="/accounting/{connection_id}/salesorder/{id}" -->
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

$request = new Operations\RemoveAccountingSalesorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingSalesorder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveAccountingSalesorderRequest](../../Models/Operations/RemoveAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveAccountingSalesorderResponse](../../Models/Operations/RemoveAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingTaxrate

Deletes the AccountingTaxrate identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingTaxrate" method="delete" path="/accounting/{connection_id}/taxrate/{id}" -->
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

$request = new Operations\RemoveAccountingTaxrateRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingTaxrate(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingTaxrateRequest](../../Models/Operations/RemoveAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingTaxrateResponse](../../Models/Operations/RemoveAccountingTaxrateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingTransaction

Deletes the AccountingTransaction identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingTransaction" method="delete" path="/accounting/{connection_id}/transaction/{id}" -->
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

$request = new Operations\RemoveAccountingTransactionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingTransaction(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveAccountingTransactionRequest](../../Models/Operations/RemoveAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveAccountingTransactionResponse](../../Models/Operations/RemoveAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingVendorcredit

Deletes the AccountingVendorcredit identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingVendorcredit" method="delete" path="/accounting/{connection_id}/vendorcredit/{id}" -->
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

$request = new Operations\RemoveAccountingVendorcreditRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->removeAccountingVendorcredit(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\RemoveAccountingVendorcreditRequest](../../Models/Operations/RemoveAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\RemoveAccountingVendorcreditResponse](../../Models/Operations/RemoveAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingAccount

Updates the AccountingAccount identified by `id`. Provide the unified AccountingAccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingAccount" method="put" path="/accounting/{connection_id}/account/{id}" example="accounting_account" -->
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

$request = new Operations\UpdateAccountingAccountRequest(
    accountingAccount: new Shared\AccountingAccount(
        balance: 12092,
        createdAt: Utils\Utils::parseDateTime('2022-07-03T17:57:07.391Z'),
        currency: 'CAD',
        customerDefinedCode: '6170',
        description: 'Voluptatibus valde spoliatio.',
        id: 'd80945c5-4439-4ddb-b081-66ab572a2229',
        isPayable: false,
        metadata: [],
        name: 'Auto Loan Account',
        status: Shared\Status::Archived,
        taxonomy: [
            new Shared\AccountingAccountTaxonomy(
                originalType: 'vilitas',
                type: Shared\AccountingAccountTaxonomyType::Subgroup,
                value: 'comedo',
            ),
        ],
        type: Shared\Type::AccountsReceivable,
        updatedAt: Utils\Utils::parseDateTime('2023-08-08T04:01:27.262Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingAccount(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingAccountRequest](../../Models/Operations/UpdateAccountingAccountRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingAccountResponse](../../Models/Operations/UpdateAccountingAccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingBankfeedaccount

Updates the AccountingBankfeedaccount identified by `id`. Provide the unified AccountingBankfeedaccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingBankfeedaccount" method="put" path="/accounting/{connection_id}/bankfeedaccount/{id}" example="accounting_bankfeedaccount" -->
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

$request = new Operations\UpdateAccountingBankfeedaccountRequest(
    accountingBankfeedaccount: new Shared\AccountingBankfeedaccount(
        accountNumber: '30369722',
        accountNumberLast4: '9722',
        accountType: Shared\AccountType::Loan,
        balance: 49437,
        bankName: 'Wells Fargo',
        createdAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        currency: 'AUD',
        feedStartAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        id: 'bc134a1f-97c2-40b3-bd6d-6f0659e62516',
        metadata: [],
        name: 'Corwin, Donnelly and Connelly Checking',
        routingNumber: '694667752',
        status: Shared\AccountingBankfeedaccountStatus::Active,
        updatedAt: Utils\Utils::parseDateTime('2024-04-25T16:23:41.167Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingBankfeedaccount(
    request: $request
);

if ($response->accountingBankfeedaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\UpdateAccountingBankfeedaccountRequest](../../Models/Operations/UpdateAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\UpdateAccountingBankfeedaccountResponse](../../Models/Operations/UpdateAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingBankfeedtransaction

Updates the AccountingBankfeedtransaction identified by `id`. Provide the unified AccountingBankfeedtransaction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingBankfeedtransaction" method="put" path="/accounting/{connection_id}/bankfeedtransaction/{id}" example="accounting_bankfeedtransaction" -->
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

$request = new Operations\UpdateAccountingBankfeedtransactionRequest(
    accountingBankfeedtransaction: new Shared\AccountingBankfeedtransaction(
        amount: 60889,
        bankCategory: 'Clothing',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-24T23:41:08.374Z'),
        currency: 'CAD',
        description: 'Payment of SRD 92.72 for withdrawal at Halvorson - Ziemann, processed with card ending ****3731 linked to account ***7781.',
        id: '3f88aa34-b40f-4e26-bd33-3a5b4f5025ba',
        isPending: true,
        merchantName: 'Buckridge - Feest',
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-18T03:44:47.009Z'),
        reference: '79574105',
        transactionAt: Utils\Utils::parseDateTime('2022-07-30T17:16:02.253Z'),
        type: Shared\AccountingBankfeedtransactionType::Credit,
        updatedAt: Utils\Utils::parseDateTime('2022-05-25T06:06:27.777Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingBankfeedtransaction(
    request: $request
);

if ($response->accountingBankfeedtransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [Operations\UpdateAccountingBankfeedtransactionRequest](../../Models/Operations/UpdateAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |

### Response

**[?Operations\UpdateAccountingBankfeedtransactionResponse](../../Models/Operations/UpdateAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingBill

Updates the AccountingBill identified by `id`. Provide the unified AccountingBill fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingBill" method="put" path="/accounting/{connection_id}/bill/{id}" example="accounting_bill" -->
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

$request = new Operations\UpdateAccountingBillRequest(
    accountingBill: new Shared\AccountingBill(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://puny-foodstuffs.name',
                id: 'fa660e7f-a831-4224-ab59-2513e0d350d7',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: 'a94a3491-d40d-4a28-a00c-2b9f05c93158',
                mimeType: 'application/pdf',
                name: 'BILL-2466-1.pdf',
            ),
        ],
        balanceAmount: 0,
        billNumber: 'BILL-2466',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2019-08-08T23:03:14.104Z'),
        currency: 'USD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2019-09-07T23:03:14.104Z'),
        extendedNotes: [],
        id: 'b3f562e3-44c9-4d3b-af6f-6c4fe8573738',
        lineitems: [],
        metadata: [],
        notes: 'Admiratio deporto tutamen cilicium infit amissio ante demulceo.',
        paidAmount: 0,
        paidAt: Utils\Utils::parseDateTime('2019-08-15T17:24:28.313Z'),
        paymentCollectionMethod: Shared\PaymentCollectionMethod::ChargeAutomatically,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2019-08-08T23:03:14.104Z'),
        purchaseorderIds: [],
        send: true,
        status: Shared\AccountingBillStatus::PartiallyPaid,
        subTotalAmount: 0,
        taxAmount: 0,
        term: Shared\Term::Net90,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T19:01:19.711Z'),
        url: 'https://cluttered-importance.org/bills/BILL-2466',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingBill(
    request: $request
);

if ($response->accountingBill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\UpdateAccountingBillRequest](../../Models/Operations/UpdateAccountingBillRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\UpdateAccountingBillResponse](../../Models/Operations/UpdateAccountingBillResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingCategory

Updates the AccountingCategory identified by `id`. Provide the unified AccountingCategory fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingCategory" method="put" path="/accounting/{connection_id}/category/{id}" example="accounting_category" -->
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

$request = new Operations\UpdateAccountingCategoryRequest(
    accountingCategory: new Shared\AccountingCategory(
        createdAt: Utils\Utils::parseDateTime('2023-05-30T12:29:04.257Z'),
        description: 'Textus ab thymum labore basium.',
        id: 'd0efa3ff-2054-476d-ae59-5a504bf57471',
        isActive: false,
        metadata: [],
        name: 'Beauty',
        updatedAt: Utils\Utils::parseDateTime('2025-09-14T20:35:45.923Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingCategory(
    request: $request
);

if ($response->accountingCategory !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAccountingCategoryRequest](../../Models/Operations/UpdateAccountingCategoryRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAccountingCategoryResponse](../../Models/Operations/UpdateAccountingCategoryResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingContact

Updates the AccountingContact identified by `id`. Provide the unified AccountingContact fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingContact" method="put" path="/accounting/{connection_id}/contact/{id}" example="accounting_contact" -->
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

$request = new Operations\UpdateAccountingContactRequest(
    accountingContact: new Shared\AccountingContact(
        associatedContacts: [],
        balanceAmount: 55574,
        billingAddress: new Shared\PropertyAccountingContactBillingAddress(
            address1: '4091 Tromp Coves',
            city: 'Lake Emmybury',
            countryCode: 'US',
            postalCode: '50764-5226',
            region: 'Washington',
            regionCode: 'CA',
        ),
        companyName: 'Kertzmann Group',
        createdAt: Utils\Utils::parseDateTime('2021-08-15T14:56:50.258Z'),
        currency: 'AUD',
        emails: [
            new Shared\AccountingEmail(
                email: 'delores.reynolds@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Work,
            ),
            new Shared\AccountingEmail(
                email: 'accounts@kertzmanngroup.com',
                type: Shared\AccountingEmailType::Other,
            ),
        ],
        firstName: 'Delores',
        id: 'c2f273a6-34d1-4cb6-87a1-8c9bebcc59dd',
        identification: '531850872',
        isActive: true,
        isCustomer: true,
        lastName: 'Reynolds',
        metadata: [],
        name: 'Kertzmann Group',
        notes: 'Et videlicet pauci.',
        paymentMethods: [
            new Shared\AccountingContactPaymentMethod(
                default: true,
                id: 'fe7947ed-2991-4bd5-bc9e-ca495254bba7',
                name: 'Visa 7844',
                type: Shared\AccountingContactPaymentMethodType::Card,
            ),
        ],
        portalUrl: 'https://kertzmanngroup.com/billing',
        shippingAddress: new Shared\PropertyAccountingContactShippingAddress(
            address1: '23129 Rebekah Mews',
            city: 'Mortimerhaven',
            countryCode: 'US',
            postalCode: '55878-6806',
            region: 'Florida',
            regionCode: 'OK',
        ),
        taxExemption: Shared\TaxExemption::Foreign,
        taxNumber: '867556410',
        telephones: [
            new Shared\AccountingTelephone(
                telephone: '(432) 760-1716',
                type: Shared\AccountingTelephoneType::Fax,
            ),
        ],
        updatedAt: Utils\Utils::parseDateTime('2023-12-22T02:51:59.376Z'),
        website: 'https://kertzmanngroup.com',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingContact(
    request: $request
);

if ($response->accountingContact !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingContactRequest](../../Models/Operations/UpdateAccountingContactRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingContactResponse](../../Models/Operations/UpdateAccountingContactResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingCreditmemo

Updates the AccountingCreditmemo identified by `id`. Provide the unified AccountingCreditmemo fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingCreditmemo" method="put" path="/accounting/{connection_id}/creditmemo/{id}" example="accounting_creditmemo" -->
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

$request = new Operations\UpdateAccountingCreditmemoRequest(
    accountingCreditmemo: new Shared\AccountingCreditmemo(
        applications: [],
        attachments: [],
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'CM-99537',
        currency: 'AUD',
        discountAmount: 0,
        id: 'bb8f718f-f142-4c26-9580-1fe9d08ff030',
        lineitems: [],
        metadata: [],
        notes: 'Hic vorax dedecor amo adfero torqueo quas victoria.',
        postedAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        send: true,
        status: Shared\AccountingCreditmemoStatus::Authorized,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2025-09-14T12:27:33.090Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingCreditmemo(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateAccountingCreditmemoRequest](../../Models/Operations/UpdateAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateAccountingCreditmemoResponse](../../Models/Operations/UpdateAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingExpense

Updates the AccountingExpense identified by `id`. Provide the unified AccountingExpense fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingExpense" method="put" path="/accounting/{connection_id}/expense/{id}" example="accounting_expense" -->
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

$request = new Operations\UpdateAccountingExpenseRequest(
    accountingExpense: new Shared\AccountingExpense(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://rubbery-couch.biz/',
                id: '8107a448-08e6-433c-8e88-000e29ea1824',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: 'ca12a5c2-0efb-4d2c-a360-5c438488dbc2',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: '3bef6afc-e352-4126-b228-0d00e700705c',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '61dc00ba-2533-46b9-95a7-933a840f7ebc',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'e9af4d5d-6ca0-4a0a-bded-8778312a21a0',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '48103517-dc84-41c6-acc7-bc0d70e39556',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '4a91eaae-d342-48b3-86be-e5e78d94afcf',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'db64f207-850c-4e77-8050-65bc5e1ff356',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 164.02,
                unitAmount: 164.02,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'A payment of XPF 714.84 occurred at Bins, Barrows and Koch using a card ending in ****8422 for account ***4614.',
        paymentMethod: 'CASH',
        postedAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        status: Shared\AccountingExpenseStatus::Submitted,
        taxAmount: 0,
        totalAmount: 972.29,
        type: Shared\AccountingExpenseType::Company,
        updatedAt: Utils\Utils::parseDateTime('2020-09-02T11:33:34.677Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingExpense(
    request: $request
);

if ($response->accountingExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingExpenseRequest](../../Models/Operations/UpdateAccountingExpenseRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingExpenseResponse](../../Models/Operations/UpdateAccountingExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingExpensereport

Updates the AccountingExpensereport identified by `id`. Provide the unified AccountingExpensereport fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingExpensereport" method="put" path="/accounting/{connection_id}/expensereport/{id}" example="accounting_expensereport" -->
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

$request = new Operations\UpdateAccountingExpensereportRequest(
    accountingExpensereport: new Shared\AccountingExpensereport(
        approvedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.961Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: '0874437e-942e-4afd-8a1c-835003d5985a',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '9379cb78-37c1-4d6e-85b9-8cc762ba609c',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '00c812ef-d73c-4af4-aa51-80af28b9ea08',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '8e699f71-8d7b-43c2-9832-4f853d1b9ce9',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '82f567b9-1a3e-459a-bf21-f4c53a8dac13',
                itemName: 'Flight',
                taxAmount: 0,
                totalAmount: 445.27,
                unitAmount: 445.27,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Lolita Kunde - October expenses',
        postedAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        reimbursedAmount: 908.46,
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.961Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-20T04:06:52.961Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingExpensereport(
    request: $request
);

if ($response->accountingExpensereport !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\UpdateAccountingExpensereportRequest](../../Models/Operations/UpdateAccountingExpensereportRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\UpdateAccountingExpensereportResponse](../../Models/Operations/UpdateAccountingExpensereportResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingInvoice

Updates the AccountingInvoice identified by `id`. Provide the unified AccountingInvoice fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingInvoice" method="put" path="/accounting/{connection_id}/invoice/{id}" example="accounting_invoice" -->
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

$request = new Operations\UpdateAccountingInvoiceRequest(
    accountingInvoice: new Shared\AccountingInvoice(
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://glossy-markup.net/',
                id: 'e297f2b5-f241-415d-aeb0-8afec99593d8',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: 'a947b253-9c82-4622-8620-cada1f41708b',
                mimeType: 'application/pdf',
                name: 'INV-77705-1.pdf',
            ),
        ],
        balanceAmount: 0,
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        currency: 'GBP',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2022-12-07T14:17:29.587Z'),
        extendedNotes: [],
        id: 'e6571321-ee0e-45d9-b009-3420502ca3cc',
        invoiceNumber: 'INV-77705',
        isInclusiveOfTax: false,
        lineitems: [],
        metadata: [],
        notes: 'Adinventitias sursum temptatio auctus comburo clarus ubi deprimo.',
        paymentCollectionMethod: Shared\AccountingInvoicePaymentCollectionMethod::ChargeAutomatically,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        reference: 'PO-2331',
        salesorderIds: [],
        send: true,
        status: Shared\AccountingInvoiceStatus::Overdue,
        subTotalAmount: 0,
        taxAmount: 0,
        term: Shared\AccountingInvoiceTerm::Net25,
        totalAmount: 0,
        type: Shared\AccountingInvoiceType::Invoice,
        updatedAt: Utils\Utils::parseDateTime('2026-04-27T21:30:15.909Z'),
        url: 'https://gifted-yarmulke.info/invoices/INV-77705',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingInvoice(
    request: $request
);

if ($response->accountingInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingInvoiceRequest](../../Models/Operations/UpdateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingInvoiceResponse](../../Models/Operations/UpdateAccountingInvoiceResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingJournal

Updates the AccountingJournal identified by `id`. Provide the unified AccountingJournal fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingJournal" method="put" path="/accounting/{connection_id}/journal/{id}" example="accounting_journal" -->
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

$request = new Operations\UpdateAccountingJournalRequest(
    accountingJournal: new Shared\AccountingJournal(
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-02-20T15:14:55.881Z'),
        currency: 'CAD',
        description: 'Cilicium minima calco constans adipisci.',
        id: '7f58f538-3e0a-408e-b60e-b73021740e08',
        isInclusiveOfTax: true,
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2023-11-09T05:06:44.359Z'),
        reference: 'JE-78884',
        source: 'crustulum',
        status: Shared\AccountingJournalStatus::Void,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2022-01-12T05:33:24.041Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingJournal(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingJournalRequest](../../Models/Operations/UpdateAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingJournalResponse](../../Models/Operations/UpdateAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## ~~updateAccountingOrder~~

Updates the AccountingOrder identified by `id`. Provide the unified AccountingOrder fields to change in the request body.

> :warning: **DEPRECATED**: This will be removed in a future release, please migrate away from it as soon as possible.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingOrder" method="put" path="/accounting/{connection_id}/order/{id}" example="accounting_order" -->
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

$request = new Operations\UpdateAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '7654 Treutel Square',
            city: 'Forrestport',
            countryCode: 'US',
            postalCode: '42190-3694',
            region: 'Maine',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: 'e3fc7728-e555-483a-8633-214edc8cac3e',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '4974 Beatty Corners',
            city: 'Alizeport',
            countryCode: 'US',
            postalCode: '56252',
            region: 'Alaska',
            regionCode: 'VT',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-09T07:54:16.879Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAccountingOrderRequest](../../Models/Operations/UpdateAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAccountingOrderResponse](../../Models/Operations/UpdateAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingPaymentterm

Updates the AccountingPaymentterm identified by `id`. Provide the unified AccountingPaymentterm fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingPaymentterm" method="put" path="/accounting/{connection_id}/paymentterm/{id}" example="accounting_paymentterm" -->
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

$request = new Operations\UpdateAccountingPaymenttermRequest(
    accountingPaymentterm: new Shared\AccountingPaymentterm(
        category: Shared\Category::Standard,
        createdAt: Utils\Utils::parseDateTime('2021-08-22T22:42:42.265Z'),
        dayOfMonthDue: 4,
        description: 'Cogito pecco eos cultura.',
        discountDayOfMonth: 13,
        discountDays: 4,
        discountPercent: 5,
        dueDays: 57,
        dueNextMonthDays: 9,
        id: 'fab1d3b7-31d4-4a99-9a2c-e7ae9ae8a077',
        isActive: false,
        metadata: [],
        name: 'Net 30',
        type: Shared\AccountingPaymenttermType::Net15,
        updatedAt: Utils\Utils::parseDateTime('2026-01-12T16:29:51.995Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingPaymentterm(
    request: $request
);

if ($response->accountingPaymentterm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateAccountingPaymenttermRequest](../../Models/Operations/UpdateAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateAccountingPaymenttermResponse](../../Models/Operations/UpdateAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingProject

Updates the AccountingProject identified by `id`. Provide the unified AccountingProject fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingProject" method="put" path="/accounting/{connection_id}/project/{id}" -->
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

$request = new Operations\UpdateAccountingProjectRequest(
    accountingProject: new Shared\AccountingProject(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingProject(
    request: $request
);

if ($response->accountingProject !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingProjectRequest](../../Models/Operations/UpdateAccountingProjectRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingProjectResponse](../../Models/Operations/UpdateAccountingProjectResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingPurchaseorder

Updates the AccountingPurchaseorder identified by `id`. Provide the unified AccountingPurchaseorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingPurchaseorder" method="put" path="/accounting/{connection_id}/purchaseorder/{id}" example="accounting_purchaseorder" -->
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

$request = new Operations\UpdateAccountingPurchaseorderRequest(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(
        attachments: [],
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '72142 Willow Street',
            address2: 'Apt. 967',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'FL',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'EUR',
        id: '41960b90-1b9f-4208-8eda-a4dd204dbc9b',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '76494 Medhurst Club',
            city: 'Kshlerinfurt',
            countryCode: 'US',
            postalCode: '92116-5474',
            region: 'Oregon',
            regionCode: 'WY',
        ),
        status: Shared\AccountingPurchaseorderStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-08-11T19:30:36.721Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingPurchaseorder(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\UpdateAccountingPurchaseorderRequest](../../Models/Operations/UpdateAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\UpdateAccountingPurchaseorderResponse](../../Models/Operations/UpdateAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingQuote

Updates the AccountingQuote identified by `id`. Provide the unified AccountingQuote fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingQuote" method="put" path="/accounting/{connection_id}/quote/{id}" -->
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

$request = new Operations\UpdateAccountingQuoteRequest(
    accountingQuote: new Shared\AccountingQuote(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingQuote(
    request: $request
);

if ($response->accountingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAccountingQuoteRequest](../../Models/Operations/UpdateAccountingQuoteRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAccountingQuoteResponse](../../Models/Operations/UpdateAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingSalesorder

Updates the AccountingSalesorder identified by `id`. Provide the unified AccountingSalesorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingSalesorder" method="put" path="/accounting/{connection_id}/salesorder/{id}" example="accounting_salesorder" -->
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

$request = new Operations\UpdateAccountingSalesorderRequest(
    accountingSalesorder: new Shared\AccountingSalesorder(
        billingAddress: new Shared\PropertyAccountingSalesorderBillingAddress(
            address1: '26530 Stroman Rest',
            address2: 'Suite 801',
            city: 'Pocatello',
            countryCode: 'US',
            postalCode: '05015-8546',
            region: 'Louisiana',
            regionCode: 'MO',
        ),
        categoryIds: [],
        closedAt: Utils\Utils::parseDateTime('2023-03-26T18:37:42.154Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        currency: 'USD',
        discountAmount: 0,
        fees: [],
        fulfillmentType: Shared\FulfillmentType::Other,
        id: 'e6e12d7a-8f33-4039-826f-a45a5dc5c62b',
        lineitems: [],
        metadata: [],
        orderNumber: '832663',
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        refundedAmount: 0,
        salesChannel: 'Wholesale',
        serviceChargeAmount: 0,
        shippingAddress: new Shared\PropertyAccountingSalesorderShippingAddress(
            address1: '69878 Bradley Mill',
            city: 'Port Matildestad',
            countryCode: 'US',
            postalCode: '07989-2148',
            region: 'Arkansas',
            regionCode: 'AK',
        ),
        status: Shared\AccountingSalesorderStatus::Paid,
        subtotalAmount: 0,
        taxAmount: 0,
        tipAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-03-26T18:37:42.154Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingSalesorder(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateAccountingSalesorderRequest](../../Models/Operations/UpdateAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateAccountingSalesorderResponse](../../Models/Operations/UpdateAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingTaxrate

Updates the AccountingTaxrate identified by `id`. Provide the unified AccountingTaxrate fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingTaxrate" method="put" path="/accounting/{connection_id}/taxrate/{id}" example="accounting_taxrate" -->
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

$request = new Operations\UpdateAccountingTaxrateRequest(
    accountingTaxrate: new Shared\AccountingTaxrate(
        components: [
            new Shared\AccountingTaxrateComponent(
                isCompound: false,
                name: 'Exempt',
                rate: 0,
            ),
        ],
        country: 'US',
        createdAt: Utils\Utils::parseDateTime('2020-01-04T10:37:56.894Z'),
        description: 'Exempt (0%)',
        effectiveRate: 0,
        id: '86013efa-4a1d-4121-b1f6-4c65251ffde3',
        isActive: false,
        isCompound: false,
        metadata: [],
        name: 'Exempt',
        rate: 0,
        region: 'KS',
        totalRate: 0,
        type: Shared\AccountingTaxrateType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2020-02-13T07:04:38.257Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingTaxrate(
    request: $request
);

if ($response->accountingTaxrate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingTaxrateRequest](../../Models/Operations/UpdateAccountingTaxrateRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingTaxrateResponse](../../Models/Operations/UpdateAccountingTaxrateResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingTransaction

Updates the AccountingTransaction identified by `id`. Provide the unified AccountingTransaction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingTransaction" method="put" path="/accounting/{connection_id}/transaction/{id}" example="accounting_transaction" -->
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

$request = new Operations\UpdateAccountingTransactionRequest(
    accountingTransaction: new Shared\AccountingTransaction(
        createdAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        id: '1999e044-e297-4fcc-96c9-cddaff09e000',
        lineitems: [
            new Shared\AccountingTransactionLineItem(
                categoryIds: [],
                description: 'The turquoise Hat combines Wallis and Futuna aesthetics with Potassium-based durability',
                id: 'a2a7918c-8307-4300-a538-d18cc203f1c6',
                name: 'Shirt',
                totalAmount: 10184,
                unitAmount: 536,
                unitQuantity: 19,
            ),
        ],
        memo: 'deposit of ISK 792.81 at Fritsch - Dooley charged to account ending in 7879 using card ending in ****3230.',
        status: Shared\AccountingTransactionStatus::Pending,
        taxAmount: 0,
        totalAmount: 10184,
        transactionAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        updatedAt: Utils\Utils::parseDateTime('2019-10-14T07:00:32.509Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingTransaction(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateAccountingTransactionRequest](../../Models/Operations/UpdateAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateAccountingTransactionResponse](../../Models/Operations/UpdateAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingVendorcredit

Updates the AccountingVendorcredit identified by `id`. Provide the unified AccountingVendorcredit fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingVendorcredit" method="put" path="/accounting/{connection_id}/vendorcredit/{id}" example="accounting_vendorcredit" -->
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

$request = new Operations\UpdateAccountingVendorcreditRequest(
    accountingVendorcredit: new Shared\AccountingVendorcredit(
        applications: [],
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        currency: 'USD',
        id: '47653b26-120b-4d5b-a1e9-790de2666480',
        lineitems: [],
        metadata: [],
        notes: 'Volup conatus cruciamentum decor avaritia.',
        postedAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        status: Shared\AccountingVendorcreditStatus::Authorized,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-10-03T17:31:23.628Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->accounting->updateAccountingVendorcredit(
    request: $request
);

if ($response->accountingVendorcredit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\UpdateAccountingVendorcreditRequest](../../Models/Operations/UpdateAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\UpdateAccountingVendorcreditResponse](../../Models/Operations/UpdateAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |