# Expense

## Overview

### Available Operations

* [createAccountingExpense](#createaccountingexpense) - Create an expense
* [createLegalExpense](#createlegalexpense) - Create an expense
* [getAccountingExpense](#getaccountingexpense) - Retrieve an expense
* [getLegalExpense](#getlegalexpense) - Retrieve an expense
* [listAccountingExpenses](#listaccountingexpenses) - List all expenses
* [listLegalExpenses](#listlegalexpenses) - List all expenses
* [patchAccountingExpense](#patchaccountingexpense) - Update an expense
* [patchLegalExpense](#patchlegalexpense) - Update an expense
* [removeAccountingExpense](#removeaccountingexpense) - Remove an expense
* [removeLegalExpense](#removelegalexpense) - Remove an expense
* [updateAccountingExpense](#updateaccountingexpense) - Update an expense
* [updateLegalExpense](#updatelegalexpense) - Update an expense

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
                id: '32ca7ae8-575d-4585-b199-40804c08df27',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: 'ed4b108d-df31-4e63-b584-c7053416a45c',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: '51286a81-dbcf-4145-bcfd-c5c356e8be77',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '8c3de4d3-67fe-4a2d-8a85-a1c6a5ebc423',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '1dd07d29-4dd8-40b4-950b-fd3e3963e687',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '0a3337a7-2574-4e3b-9baf-6ea8eb223342',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'b1178422-09f4-4612-a655-cf8e7d4cf438',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '502782c5-6c92-403b-a084-44bda7c244fe',
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
        updatedAt: Utils\Utils::parseDateTime('2020-09-03T02:02:25.944Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->expense->createAccountingExpense(
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

## createLegalExpense

Creates a LegalExpense. Provide the unified LegalExpense fields in the request body; they are mapped to the provider's API. Returns the created LegalExpense.

### Example Usage

<!-- UsageSnippet language="php" operationID="createLegalExpense" method="post" path="/legal/{connection_id}/expense" example="legal_expense" -->
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

$request = new Operations\CreateLegalExpenseRequest(
    legalExpense: new Shared\LegalExpense(
        category: 'Kids',
        createdAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        currency: 'MVR',
        description: 'Temporibus agnitio sui.',
        id: '0ae2990a-b3ab-400f-9efc-768c474e105a',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-04-12T10:03:26.983Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->expense->createLegalExpense(
    request: $request
);

if ($response->legalExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\CreateLegalExpenseRequest](../../Models/Operations/CreateLegalExpenseRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\CreateLegalExpenseResponse](../../Models/Operations/CreateLegalExpenseResponse.md)**

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

$response = $sdk->expense->getAccountingExpense(
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

## getLegalExpense

Retrieves a single LegalExpense by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getLegalExpense" method="get" path="/legal/{connection_id}/expense/{id}" -->
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

$request = new Operations\GetLegalExpenseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->getLegalExpense(
    request: $request
);

if ($response->legalExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                              | Type                                                                                   | Required                                                                               | Description                                                                            |
| -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------- |
| `$request`                                                                             | [Operations\GetLegalExpenseRequest](../../Models/Operations/GetLegalExpenseRequest.md) | :heavy_check_mark:                                                                     | The request object to use for the request.                                             |

### Response

**[?Operations\GetLegalExpenseResponse](../../Models/Operations/GetLegalExpenseResponse.md)**

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

$response = $sdk->expense->listAccountingExpenses(
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

## listLegalExpenses

Returns a list of LegalExpenses. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listLegalExpenses" method="get" path="/legal/{connection_id}/expense" -->
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

$request = new Operations\ListLegalExpensesRequest(
    connectionId: '<id>',
);

$response = $sdk->expense->listLegalExpenses(
    request: $request
);

if ($response->legalExpenses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\ListLegalExpensesRequest](../../Models/Operations/ListLegalExpensesRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\ListLegalExpensesResponse](../../Models/Operations/ListLegalExpensesResponse.md)**

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
                id: 'c2b5c9df-22b6-4fdf-99ab-2c4a40b4592e',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: '6778d092-8841-4fad-966f-3d7207caed84',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: 'c8c1f444-1900-413c-9316-707c50448d46',
        lineitems: [
            new Shared\AccountingLineitem(
                id: 'b15733fe-a7ad-43bc-9ef5-7ade8d967b31',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'e13e42f7-bfc4-4647-a5d8-e4498418bf4e',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '106d66c1-da48-4ff9-9029-9508d79d2437',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '1d0778f6-d75e-4732-bf37-f8048c2626b1',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'd464eea0-69aa-4c37-8e12-3af1d58716d2',
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
        updatedAt: Utils\Utils::parseDateTime('2020-09-03T02:02:25.945Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->patchAccountingExpense(
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

## patchLegalExpense

Updates the LegalExpense identified by `id`. Provide the unified LegalExpense fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchLegalExpense" method="patch" path="/legal/{connection_id}/expense/{id}" example="legal_expense" -->
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

$request = new Operations\PatchLegalExpenseRequest(
    legalExpense: new Shared\LegalExpense(
        category: 'Kids',
        createdAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        currency: 'MVR',
        description: 'Temporibus agnitio sui.',
        id: '139f39d1-a302-4208-a81e-f7057665f204',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-04-12T10:03:26.995Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->patchLegalExpense(
    request: $request
);

if ($response->legalExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                  | Type                                                                                       | Required                                                                                   | Description                                                                                |
| ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------ |
| `$request`                                                                                 | [Operations\PatchLegalExpenseRequest](../../Models/Operations/PatchLegalExpenseRequest.md) | :heavy_check_mark:                                                                         | The request object to use for the request.                                                 |

### Response

**[?Operations\PatchLegalExpenseResponse](../../Models/Operations/PatchLegalExpenseResponse.md)**

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

$response = $sdk->expense->removeAccountingExpense(
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

## removeLegalExpense

Deletes the LegalExpense identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeLegalExpense" method="delete" path="/legal/{connection_id}/expense/{id}" -->
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

$request = new Operations\RemoveLegalExpenseRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->removeLegalExpense(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\RemoveLegalExpenseRequest](../../Models/Operations/RemoveLegalExpenseRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\RemoveLegalExpenseResponse](../../Models/Operations/RemoveLegalExpenseResponse.md)**

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
                id: 'c2b5c9df-22b6-4fdf-99ab-2c4a40b4592e',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: '6778d092-8841-4fad-966f-3d7207caed84',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: 'c8c1f444-1900-413c-9316-707c50448d46',
        lineitems: [
            new Shared\AccountingLineitem(
                id: 'b15733fe-a7ad-43bc-9ef5-7ade8d967b31',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'e13e42f7-bfc4-4647-a5d8-e4498418bf4e',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '106d66c1-da48-4ff9-9029-9508d79d2437',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '1d0778f6-d75e-4732-bf37-f8048c2626b1',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'd464eea0-69aa-4c37-8e12-3af1d58716d2',
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
        updatedAt: Utils\Utils::parseDateTime('2020-09-03T02:02:25.945Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->updateAccountingExpense(
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

## updateLegalExpense

Updates the LegalExpense identified by `id`. Provide the unified LegalExpense fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateLegalExpense" method="put" path="/legal/{connection_id}/expense/{id}" example="legal_expense" -->
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

$request = new Operations\UpdateLegalExpenseRequest(
    legalExpense: new Shared\LegalExpense(
        category: 'Kids',
        createdAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        currency: 'MVR',
        description: 'Temporibus agnitio sui.',
        id: '139f39d1-a302-4208-a81e-f7057665f204',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-04-12T10:03:26.995Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->updateLegalExpense(
    request: $request
);

if ($response->legalExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\UpdateLegalExpenseRequest](../../Models/Operations/UpdateLegalExpenseRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\UpdateLegalExpenseResponse](../../Models/Operations/UpdateLegalExpenseResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |