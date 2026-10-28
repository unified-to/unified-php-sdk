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
                id: 'a42e200a-93e0-47b5-8c3b-3b5bc541b057',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: 'cc5ea957-04fe-4283-ae9e-910fd2599b9a',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: 'b95eaa12-dc7f-4101-bc94-c12cb93409bc',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '0628674c-ab29-4e64-ac2f-ff15c9174908',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '7b41a7ab-05f9-400e-9d79-caab81031855',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '20bd46d5-e4b0-45e1-a9be-0a3e3088a2ac',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'e5753155-a6f4-45f1-997c-834e566ad7e1',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '9f43e5af-c30d-4ba1-8657-61f32848ad07',
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
        updatedAt: Utils\Utils::parseDateTime('2020-09-02T13:15:44.883Z'),
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
        id: '386e8af4-54a0-4851-a574-642f4b3c7cc6',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-04-03T22:31:59.919Z'),
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
                id: 'd25fd680-c08f-426e-bd9d-6c932116f014',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: 'a8f3cba7-9179-4f60-9bfc-69e0f9cab027',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: '807f87da-a958-4225-a9b3-b8d633759e24',
        lineitems: [
            new Shared\AccountingLineitem(
                id: 'b6bfd200-7f54-403e-b5bf-c790a9e066be',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'f9df70f0-7b37-41dd-ad07-ff7a169d3363',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '1170d719-0b76-475b-8790-681cc1da7090',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'd94d3636-4311-4d38-ad40-f03582ec2b33',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '0c12fd19-6ceb-4d1f-b68e-f83c555f9cbd',
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
        updatedAt: Utils\Utils::parseDateTime('2020-09-02T13:15:44.885Z'),
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
        id: '4ddd92b4-b19a-4b13-903d-98a371796b7b',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-04-03T22:31:59.932Z'),
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
                id: 'd25fd680-c08f-426e-bd9d-6c932116f014',
                mimeType: 'application/pdf',
                name: 'receipt-9696.pdf',
            ),
            new Shared\AccountingAttachment(
                downloadUrl: 'https://appropriate-smog.biz/',
                id: 'a8f3cba7-9179-4f60-9bfc-69e0f9cab027',
                mimeType: 'application/pdf',
                name: 'receipt-9696-1.pdf',
            ),
        ],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-06-11T03:39:37.305Z'),
        currency: 'GBP',
        externalNumber: 'EXP-38303',
        id: '807f87da-a958-4225-a9b3-b8d633759e24',
        lineitems: [
            new Shared\AccountingLineitem(
                id: 'b6bfd200-7f54-403e-b5bf-c790a9e066be',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 364.74,
                unitAmount: 364.74,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'f9df70f0-7b37-41dd-ad07-ff7a169d3363',
                itemName: 'Client dinner',
                taxAmount: 0,
                totalAmount: 258.35,
                unitAmount: 258.35,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '1170d719-0b76-475b-8790-681cc1da7090',
                itemName: 'Conference ticket',
                notes: 'Casus umquam conicio cinis demitto sint.',
                taxAmount: 0,
                totalAmount: 28.14,
                unitAmount: 28.14,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'd94d3636-4311-4d38-ad40-f03582ec2b33',
                itemName: 'Hotel',
                taxAmount: 0,
                totalAmount: 157.04,
                unitAmount: 157.04,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '0c12fd19-6ceb-4d1f-b68e-f83c555f9cbd',
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
        updatedAt: Utils\Utils::parseDateTime('2020-09-02T13:15:44.885Z'),
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
        id: '4ddd92b4-b19a-4b13-903d-98a371796b7b',
        incurredAt: Utils\Utils::parseDateTime('2020-11-08T00:41:42.356Z'),
        isBilled: false,
        metadata: [],
        priceAmount: 100,
        quantity: 3,
        totalAmount: 300,
        type: Shared\LegalExpenseType::Other,
        updatedAt: Utils\Utils::parseDateTime('2024-04-03T22:31:59.932Z'),
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