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
        approvedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.719Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: '4550cfd2-de38-477f-a9be-680f81d61cc0',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '03b186c2-7a1e-4357-94c2-a9865ea52dd7',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'da1e6b80-1276-40c6-be09-513201d93afc',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'adc7ba31-10be-4198-af8c-7d441324feb1',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '964bdef7-6241-412c-8e3c-26d2eb43eae8',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.719Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.719Z'),
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
        approvedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.726Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: '6d4fc21b-1ba3-4c32-a55b-409395de120a',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '21a4a98b-d1cd-4aa6-8b50-512044cf0f56',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'b0c93148-4923-415f-8b51-7c82a068e3c3',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'fe8ba833-d164-447f-b0fd-a6046efae234',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '8d8c3cc2-2e2a-4898-a79f-b8d9ae560045',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.726Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.726Z'),
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
        approvedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.726Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'GBP',
        externalNumber: 'ER-31240',
        id: '6d4fc21b-1ba3-4c32-a55b-409395de120a',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '21a4a98b-d1cd-4aa6-8b50-512044cf0f56',
                itemName: 'Conference ticket',
                taxAmount: 0,
                totalAmount: 39.9,
                unitAmount: 39.9,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'b0c93148-4923-415f-8b51-7c82a068e3c3',
                itemName: 'Flight',
                notes: 'Soluta omnis dolor.',
                taxAmount: 0,
                totalAmount: 193.17,
                unitAmount: 193.17,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'fe8ba833-d164-447f-b0fd-a6046efae234',
                itemName: 'Client dinner',
                notes: 'Altus caveo capio.',
                taxAmount: 0,
                totalAmount: 230.12,
                unitAmount: 230.12,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '8d8c3cc2-2e2a-4898-a79f-b8d9ae560045',
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
        reimbursedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.726Z'),
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 0,
        totalAmount: 908.46,
        updatedAt: Utils\Utils::parseDateTime('2021-04-21T06:51:06.726Z'),
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