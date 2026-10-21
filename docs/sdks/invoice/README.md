# Invoice

## Overview

### Available Operations

* [createAccountingInvoice](#createaccountinginvoice) - Create an invoice
* [getAccountingInvoice](#getaccountinginvoice) - Retrieve an invoice
* [listAccountingInvoices](#listaccountinginvoices) - List all invoices
* [patchAccountingInvoice](#patchaccountinginvoice) - Update an invoice
* [removeAccountingInvoice](#removeaccountinginvoice) - Remove an invoice
* [updateAccountingInvoice](#updateaccountinginvoice) - Update an invoice

## createAccountingInvoice

Create an invoice

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
                id: '8785a531-c170-4e0a-a23b-6026aeb2808f',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: '795784ec-1677-4171-87a9-191b7246647a',
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
        id: '96f21cc2-029b-451f-bf63-27b0da867a12',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-23T13:03:42.762Z'),
        url: 'https://gifted-yarmulke.info/invoices/INV-77705',
    ),
    connectionId: '<id>',
);

$response = $sdk->invoice->createAccountingInvoice(
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

## getAccountingInvoice

Retrieve an invoice

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

$response = $sdk->invoice->getAccountingInvoice(
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

## listAccountingInvoices

List all invoices

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

$response = $sdk->invoice->listAccountingInvoices(
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

## patchAccountingInvoice

Update an invoice

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
                id: '21a65956-7898-49fe-954e-657be9079de1',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: '0de07f5c-0422-4bf1-8312-b38a6e63a87d',
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
        id: '896edd87-b896-4ec1-9035-22e2a216a31b',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-23T13:03:42.816Z'),
        url: 'https://gifted-yarmulke.info/invoices/INV-77705',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->invoice->patchAccountingInvoice(
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

## removeAccountingInvoice

Remove an invoice

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

$response = $sdk->invoice->removeAccountingInvoice(
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

## updateAccountingInvoice

Update an invoice

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
                id: '21a65956-7898-49fe-954e-657be9079de1',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: '0de07f5c-0422-4bf1-8312-b38a6e63a87d',
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
        id: '896edd87-b896-4ec1-9035-22e2a216a31b',
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
        updatedAt: Utils\Utils::parseDateTime('2026-04-23T13:03:42.816Z'),
        url: 'https://gifted-yarmulke.info/invoices/INV-77705',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->invoice->updateAccountingInvoice(
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