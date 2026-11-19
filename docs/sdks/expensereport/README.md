# Expensereport

## Overview

### Available Operations

* [createAccountingExpensereport](#createaccountingexpensereport) - Create an expensereport
* [getAccountingExpensereport](#getaccountingexpensereport) - Retrieve an expensereport
* [listAccountingExpensereports](#listaccountingexpensereports) - List all expensereports
* [patchAccountingExpensereport](#patchaccountingexpensereport) - Update an expensereport
* [removeAccountingExpensereport](#removeaccountingexpensereport) - Remove an expensereport
* [updateAccountingExpensereport](#updateaccountingexpensereport) - Update an expensereport

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
        approvedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.027Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: '2c81bfcf-a046-47c6-9c6f-eda8520767cd',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '3ac79bd7-5698-4352-8ca7-5d0947013f3f',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '74a6f104-eae3-4b70-88d9-7a667d269f31',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '4561798f-431e-4992-a00e-b406ecce8906',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '9f64ace7-6fdf-4329-9290-ae969f944aad',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.027Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.027Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->expensereport->createAccountingExpensereport(
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

$response = $sdk->expensereport->getAccountingExpensereport(
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

$response = $sdk->expensereport->listAccountingExpensereports(
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
        approvedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.031Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: 'b0ab59cd-aa52-44e3-aeee-0754865b495c',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '573a95e2-6be4-4a44-a5fb-d2f35ffca179',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'a04688d9-d6d5-4da9-851e-4ccfc12b1686',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'c14d3333-d127-4893-81d8-931649c6ced0',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '3c9e11c8-aae2-4d5c-924f-9b68c5f5bea6',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.031Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.031Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expensereport->patchAccountingExpensereport(
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

$response = $sdk->expensereport->removeAccountingExpensereport(
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
        approvedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.031Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: 'b0ab59cd-aa52-44e3-aeee-0754865b495c',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '573a95e2-6be4-4a44-a5fb-d2f35ffca179',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'a04688d9-d6d5-4da9-851e-4ccfc12b1686',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'c14d3333-d127-4893-81d8-931649c6ced0',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '3c9e11c8-aae2-4d5c-924f-9b68c5f5bea6',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.031Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-23T12:32:24.031Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expensereport->updateAccountingExpensereport(
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