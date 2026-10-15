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

Create an expensereport

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
        approvedAt: Utils\Utils::parseDateTime('2025-04-09T07:40:37.698Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'BMD',
        externalNumber: 'asporto',
        id: 'dcfeb1c4-4600-4afb-bd5a-5c3cbbcb4656',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '09d19770-5e05-4d1a-a4c4-b0dd3446fb87',
                itemDescription: 'The Synchronised motivating software Car offers reliable performance and webbed design',
                itemName: 'Intelligent Gold Cheese',
                itemSku: '978-0-6550-0228-4',
                notes: 'Utrimque quas vesica spes.',
                taxAmount: 448,
                totalAmount: 10875,
                unitAmount: 4092,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: '017dad49-9cb7-4360-8a14-cfd9cfe7d4d9',
                itemDescription: 'Ergonomic Bike made with Marble for all-day coordinated support',
                itemName: 'Practical Steel Pizza',
                itemSku: '978-1-4129-9332-6',
                notes: 'Corrumpo.',
                taxAmount: 875,
                totalAmount: 12363,
                unitAmount: 6783,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Rustic Aluminum Car',
        postedAt: Utils\Utils::parseDateTime('2022-10-31T17:31:04.349Z'),
        reimbursedAmount: 6696,
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 983,
        totalAmount: 13931,
        updatedAt: Utils\Utils::parseDateTime('2025-04-09T07:40:37.698Z'),
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

Retrieve an expensereport

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

List all expensereports

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

Update an expensereport

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
        approvedAt: Utils\Utils::parseDateTime('2025-04-09T07:40:37.726Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'BMD',
        externalNumber: 'asporto',
        id: 'b3a5e05d-728d-4cf8-ae7c-acd705756760',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '52586008-7259-4aac-9ca5-5b1ccc809bcf',
                itemDescription: 'The Synchronised motivating software Car offers reliable performance and webbed design',
                itemName: 'Intelligent Gold Cheese',
                itemSku: '978-0-6550-0228-4',
                notes: 'Utrimque quas vesica spes.',
                taxAmount: 448,
                totalAmount: 10875,
                unitAmount: 4092,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'a8c3068d-6af2-4b38-9f56-89aea0828134',
                itemDescription: 'Ergonomic Bike made with Marble for all-day coordinated support',
                itemName: 'Practical Steel Pizza',
                itemSku: '978-1-4129-9332-6',
                notes: 'Corrumpo.',
                taxAmount: 875,
                totalAmount: 12363,
                unitAmount: 6783,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Rustic Aluminum Car',
        postedAt: Utils\Utils::parseDateTime('2022-10-31T17:31:04.363Z'),
        reimbursedAmount: 6696,
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 983,
        totalAmount: 13931,
        updatedAt: Utils\Utils::parseDateTime('2025-04-09T07:40:37.726Z'),
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

Remove an expensereport

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

Update an expensereport

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
        approvedAt: Utils\Utils::parseDateTime('2025-04-09T07:40:37.726Z'),
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-05-29T02:04:59.078Z'),
        currency: 'BMD',
        externalNumber: 'asporto',
        id: 'b3a5e05d-728d-4cf8-ae7c-acd705756760',
        lineitems: [
            new Shared\AccountingLineitem(
                id: '52586008-7259-4aac-9ca5-5b1ccc809bcf',
                itemDescription: 'The Synchronised motivating software Car offers reliable performance and webbed design',
                itemName: 'Intelligent Gold Cheese',
                itemSku: '978-0-6550-0228-4',
                notes: 'Utrimque quas vesica spes.',
                taxAmount: 448,
                totalAmount: 10875,
                unitAmount: 4092,
                unitQuantity: 1,
            ),
            new Shared\AccountingLineitem(
                id: 'a8c3068d-6af2-4b38-9f56-89aea0828134',
                itemDescription: 'Ergonomic Bike made with Marble for all-day coordinated support',
                itemName: 'Practical Steel Pizza',
                itemSku: '978-1-4129-9332-6',
                notes: 'Corrumpo.',
                taxAmount: 875,
                totalAmount: 12363,
                unitAmount: 6783,
                unitQuantity: 1,
            ),
        ],
        metadata: [],
        name: 'Rustic Aluminum Car',
        postedAt: Utils\Utils::parseDateTime('2022-10-31T17:31:04.363Z'),
        reimbursedAmount: 6696,
        status: Shared\AccountingExpensereportStatus::Paid,
        taxAmount: 983,
        totalAmount: 13931,
        updatedAt: Utils\Utils::parseDateTime('2025-04-09T07:40:37.726Z'),
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