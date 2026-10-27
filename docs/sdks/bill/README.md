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
                id: '676cd60c-62f1-4dbb-bfe1-ad9cb8259cc4',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: '9d898ab8-0b6e-4413-8945-ea209034f5c3',
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
        id: '2d5ac4b4-aec8-4d6d-b52b-8efab63bc90f',
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
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T21:47:36.204Z'),
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
                id: '12980a91-c495-4585-ba24-4d869c44df58',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: '1d3e9839-f0db-4fe0-a4b8-8a897fffbb84',
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
        id: 'a5635942-e77a-44a4-8a95-eda5dcef4471',
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
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T21:47:36.208Z'),
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
                id: '12980a91-c495-4585-ba24-4d869c44df58',
                mimeType: 'application/pdf',
                name: 'BILL-2466.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://grimy-characterization.net',
                id: '1d3e9839-f0db-4fe0-a4b8-8a897fffbb84',
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
        id: 'a5635942-e77a-44a4-8a95-eda5dcef4471',
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
        updatedAt: Utils\Utils::parseDateTime('2020-06-01T21:47:36.208Z'),
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