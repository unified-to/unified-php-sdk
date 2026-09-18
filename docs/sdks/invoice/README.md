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
                id: '6166f06c-cb77-42dd-b349-592c6cdfad5d',
                mimeType: 'benevolentia',
                name: 'vespillo',
            ),
        ],
        balanceAmount: -1,
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        currency: 'RWF',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2022-11-27T21:25:37.363Z'),
        extendedNotes: [],
        id: '8ba2d961-496b-4dc9-bacb-595ccd9a3734',
        invoiceNumber: 'vinco',
        lineitems: [],
        metadata: [],
        notes: 'Auctus comburo clarus ubi.',
        paidAmount: 0,
        paidAt: Utils\Utils::parseDateTime('2022-11-25T15:00:28.871Z'),
        paymentCollectionMethod: Shared\AccountingInvoicePaymentCollectionMethod::SendInvoice,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2026-03-26T22:46:20.573Z'),
        reference: 'adinventitias',
        send: true,
        status: Shared\AccountingInvoiceStatus::Deleted,
        taxAmount: 0,
        term: Shared\AccountingInvoiceTerm::Net45,
        totalAmount: 0,
        type: Shared\AccountingInvoiceType::Creditmemo,
        updatedAt: Utils\Utils::parseDateTime('2023-02-06T06:48:43.166Z'),
        url: 'https://gifted-yarmulke.info/',
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
                id: 'c2fa60c7-8d72-4568-9854-fa432fadbf78',
                mimeType: 'benevolentia',
                name: 'vespillo',
            ),
        ],
        balanceAmount: -1,
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        currency: 'RWF',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2022-11-27T21:25:37.363Z'),
        extendedNotes: [],
        id: '6f607a62-e620-4f17-87c7-372e8a20cfc8',
        invoiceNumber: 'vinco',
        lineitems: [],
        metadata: [],
        notes: 'Auctus comburo clarus ubi.',
        paidAmount: 0,
        paidAt: Utils\Utils::parseDateTime('2022-11-25T15:00:28.871Z'),
        paymentCollectionMethod: Shared\AccountingInvoicePaymentCollectionMethod::SendInvoice,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2026-03-26T22:46:20.613Z'),
        reference: 'adinventitias',
        send: true,
        status: Shared\AccountingInvoiceStatus::Deleted,
        taxAmount: 0,
        term: Shared\AccountingInvoiceTerm::Net45,
        totalAmount: 0,
        type: Shared\AccountingInvoiceType::Creditmemo,
        updatedAt: Utils\Utils::parseDateTime('2023-02-06T06:48:43.169Z'),
        url: 'https://gifted-yarmulke.info/',
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
                id: 'c2fa60c7-8d72-4568-9854-fa432fadbf78',
                mimeType: 'benevolentia',
                name: 'vespillo',
            ),
        ],
        balanceAmount: -1,
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-11-07T14:17:29.587Z'),
        currency: 'RWF',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2022-11-27T21:25:37.363Z'),
        extendedNotes: [],
        id: '6f607a62-e620-4f17-87c7-372e8a20cfc8',
        invoiceNumber: 'vinco',
        lineitems: [],
        metadata: [],
        notes: 'Auctus comburo clarus ubi.',
        paidAmount: 0,
        paidAt: Utils\Utils::parseDateTime('2022-11-25T15:00:28.871Z'),
        paymentCollectionMethod: Shared\AccountingInvoicePaymentCollectionMethod::SendInvoice,
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2026-03-26T22:46:20.613Z'),
        reference: 'adinventitias',
        send: true,
        status: Shared\AccountingInvoiceStatus::Deleted,
        taxAmount: 0,
        term: Shared\AccountingInvoiceTerm::Net45,
        totalAmount: 0,
        type: Shared\AccountingInvoiceType::Creditmemo,
        updatedAt: Utils\Utils::parseDateTime('2023-02-06T06:48:43.169Z'),
        url: 'https://gifted-yarmulke.info/',
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