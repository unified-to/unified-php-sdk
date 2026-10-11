# Expense

## Overview

### Available Operations

* [createAccountingExpense](#createaccountingexpense) - Create an expense
* [getAccountingExpense](#getaccountingexpense) - Retrieve an expense
* [listAccountingExpenses](#listaccountingexpenses) - List all expenses
* [patchAccountingExpense](#patchaccountingexpense) - Update an expense
* [removeAccountingExpense](#removeaccountingexpense) - Remove an expense
* [updateAccountingExpense](#updateaccountingexpense) - Update an expense

## createAccountingExpense

Create an expense

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
        approvedAt: Utils\Utils::parseDateTime('2026-05-31T10:54:34.814Z'),
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://ripe-napkin.biz/',
                id: 'a31f87a7-4eb4-4302-b833-915ecb235046',
                mimeType: 'annus',
                name: 'cohibeo',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'SSP',
        externalNumber: 'necessitatibus',
        id: '9984dbbc-0b26-48c0-8a8e-1e73ac0f709e',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '6f21535d-972a-4fdc-926e-2321c794ccd9',
                itemDescription: 'Innovative Table featuring left technology and Rubber construction',
                itemName: 'Luxurious Cotton Pizza',
                itemSku: '978-0-8324-6620-5',
                notes: 'Degusto conventus defendo valetudo.',
                taxAmount: 2501,
                totalAmount: 168,
                unitAmount: 3059,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Refined Steel Shoes',
        paymentMethod: 'CASH',
        postedAt: Utils\Utils::parseDateTime('2021-06-07T19:24:22.969Z'),
        reimbursedAmount: 1833,
        status: Shared\AccountingExpenseStatus::Submitted,
        taxAmount: 2602,
        totalAmount: 3580,
        type: Shared\AccountingExpenseType::User,
        updatedAt: Utils\Utils::parseDateTime('2026-05-31T10:54:34.814Z'),
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

## getAccountingExpense

Retrieve an expense

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

## listAccountingExpenses

List all expenses

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

## patchAccountingExpense

Update an expense

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
        approvedAt: Utils\Utils::parseDateTime('2026-05-31T10:54:34.862Z'),
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://ripe-napkin.biz/',
                id: '5476b7b2-d37e-4977-957f-aa4d8ec5c5a1',
                mimeType: 'annus',
                name: 'cohibeo',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'SSP',
        externalNumber: 'necessitatibus',
        id: '7a5365f5-1bd4-4cac-8131-6bd2366ba182',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '4e568a1a-bcad-4e8a-b51d-faaafbd22415',
                itemDescription: 'Innovative Table featuring left technology and Rubber construction',
                itemName: 'Luxurious Cotton Pizza',
                itemSku: '978-0-8324-6620-5',
                notes: 'Degusto conventus defendo valetudo.',
                taxAmount: 2501,
                totalAmount: 168,
                unitAmount: 3059,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Refined Steel Shoes',
        paymentMethod: 'CASH',
        postedAt: Utils\Utils::parseDateTime('2021-06-07T19:24:22.977Z'),
        reimbursedAmount: 1833,
        status: Shared\AccountingExpenseStatus::Submitted,
        taxAmount: 2602,
        totalAmount: 3580,
        type: Shared\AccountingExpenseType::User,
        updatedAt: Utils\Utils::parseDateTime('2026-05-31T10:54:34.862Z'),
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

## removeAccountingExpense

Remove an expense

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

## updateAccountingExpense

Update an expense

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
        approvedAt: Utils\Utils::parseDateTime('2026-05-31T10:54:34.862Z'),
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://ripe-napkin.biz/',
                id: '5476b7b2-d37e-4977-957f-aa4d8ec5c5a1',
                mimeType: 'annus',
                name: 'cohibeo',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'SSP',
        externalNumber: 'necessitatibus',
        id: '7a5365f5-1bd4-4cac-8131-6bd2366ba182',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '4e568a1a-bcad-4e8a-b51d-faaafbd22415',
                itemDescription: 'Innovative Table featuring left technology and Rubber construction',
                itemName: 'Luxurious Cotton Pizza',
                itemSku: '978-0-8324-6620-5',
                notes: 'Degusto conventus defendo valetudo.',
                taxAmount: 2501,
                totalAmount: 168,
                unitAmount: 3059,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Refined Steel Shoes',
        paymentMethod: 'CASH',
        postedAt: Utils\Utils::parseDateTime('2021-06-07T19:24:22.977Z'),
        reimbursedAmount: 1833,
        status: Shared\AccountingExpenseStatus::Submitted,
        taxAmount: 2602,
        totalAmount: 3580,
        type: Shared\AccountingExpenseType::User,
        updatedAt: Utils\Utils::parseDateTime('2026-05-31T10:54:34.862Z'),
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