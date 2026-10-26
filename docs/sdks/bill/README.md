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