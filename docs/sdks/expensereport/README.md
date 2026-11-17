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
        approvedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.195Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: 'c480bcfa-8e5c-4e37-bb49-66e192610787',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '29d6cb33-9d29-4ac9-a3c9-5ed75b9ec39a',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '7a3bc5d0-4ba9-4d4f-8edd-894bbe7026cb',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '15eb2039-0fc1-4b58-9adb-3a4777d4adde',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'c8c14264-d35d-4282-b536-af37a1c0fdac',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.195Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.195Z'),
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
        approvedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.199Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: 'c97df600-2754-4b4a-910c-de6af43d65b2',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '1578f740-6e81-4679-b12f-ee1243b82dea',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '4733c71c-f229-4869-b93d-474ced0ae12f',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '407ebbdb-6919-48b0-9838-8b10226ac71c',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '93677c8f-3c55-4c03-9e55-3b952afc5b12',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.199Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.199Z'),
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
        approvedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.199Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: 'c97df600-2754-4b4a-910c-de6af43d65b2',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '1578f740-6e81-4679-b12f-ee1243b82dea',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '4733c71c-f229-4869-b93d-474ced0ae12f',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '407ebbdb-6919-48b0-9838-8b10226ac71c',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '93677c8f-3c55-4c03-9e55-3b952afc5b12',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.199Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-23T05:50:23.199Z'),
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