# Bill

## Overview

### Available Operations

* [createAccountingBill](#createaccountingbill) - Create a bill
* [getAccountingBill](#getaccountingbill) - Retrieve a bill
* [listAccountingBills](#listaccountingbills) - List all bills
* [patchAccountingBill](#patchaccountingbill) - Update a bill
* [removeAccountingBill](#removeaccountingbill) - Remove a bill
* [updateAccountingBill](#updateaccountingbill) - Update a bill

## createAccountingBill

Create a bill

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
                id: 'd7e1068c-1b65-4add-8df9-2f78d0cc2e55',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: 'cb1bdc9a-044c-4be5-833d-b93a62ba5662',
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
        id: 'deddf785-d1be-4354-8c04-154743bef997',
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
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T02:35:20.701Z'),
        url: 'https://cluttered-importance.org/bills/BILL-2466',
    ),
    connectionId: '<id>',
);

$response = $sdk->bill->createAccountingBill(
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

## getAccountingBill

Retrieve a bill

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

$response = $sdk->bill->getAccountingBill(
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

## listAccountingBills

List all bills

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

$response = $sdk->bill->listAccountingBills(
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

## patchAccountingBill

Update a bill

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
                id: '613d3994-b376-4513-ac0b-839b32ffbb10',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: '0050ba5e-56db-487a-bf42-d1490fcb8d73',
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
        id: '47ddd40b-9f25-4e4a-881a-e2ac38c3167c',
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
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T02:35:20.708Z'),
        url: 'https://cluttered-importance.org/bills/BILL-2466',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bill->patchAccountingBill(
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

## removeAccountingBill

Remove a bill

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

$response = $sdk->bill->removeAccountingBill(
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

## updateAccountingBill

Update a bill

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
                id: '613d3994-b376-4513-ac0b-839b32ffbb10',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: '0050ba5e-56db-487a-bf42-d1490fcb8d73',
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
        id: '47ddd40b-9f25-4e4a-881a-e2ac38c3167c',
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
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T02:35:20.708Z'),
        url: 'https://cluttered-importance.org/bills/BILL-2466',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bill->updateAccountingBill(
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