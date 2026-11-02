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
                id: 'e3d84355-d152-4682-8d5b-67f4ab55a9a4',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: 'aaa0901d-0f86-4100-8bea-d32cef9fbf22',
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
        id: '60e8869e-6744-44ba-b3fc-b711a90eca17',
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
        updatedAt: Utils\Utils::parseDateTime('2026-05-03T22:36:53.396Z'),
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
                id: '9d5d40d5-f997-4a4e-b561-c02b14f6b23a',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: '3fd8a44a-e133-4bb2-a161-d2a341430339',
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
        id: '4ad27b8a-8d46-4b8f-b45f-cea859341afd',
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
        updatedAt: Utils\Utils::parseDateTime('2026-05-03T22:36:53.451Z'),
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
                id: '9d5d40d5-f997-4a4e-b561-c02b14f6b23a',
                mimeType: 'application/pdf',
                name: 'INV-77705.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://earnest-giggle.net',
                id: '3fd8a44a-e133-4bb2-a161-d2a341430339',
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
        id: '4ad27b8a-8d46-4b8f-b45f-cea859341afd',
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
        updatedAt: Utils\Utils::parseDateTime('2026-05-03T22:36:53.451Z'),
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