# Transaction

## Overview

### Available Operations

* [createAccountingTransaction](#createaccountingtransaction) - Create a transaction
* [getAccountingTransaction](#getaccountingtransaction) - Retrieve a transaction
* [listAccountingTransactions](#listaccountingtransactions) - List all transactions
* [patchAccountingTransaction](#patchaccountingtransaction) - Update a transaction
* [removeAccountingTransaction](#removeaccountingtransaction) - Remove a transaction
* [updateAccountingTransaction](#updateaccountingtransaction) - Update a transaction

## createAccountingTransaction

Create a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingTransaction" method="post" path="/accounting/{connection_id}/transaction" example="accounting_transaction" -->
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

$request = new Operations\CreateAccountingTransactionRequest(
    accountingTransaction: new Shared\AccountingTransaction(
        createdAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        exchangeRate: 0.5674,
        id: '17615f5e-0ebb-445a-b676-67eeac8b692b',
        lineitems: [
            new Shared\AccountingTransactionLineItem(
                categoryIds: [],
                description: 'The Nikolas Table is the latest in a series of downright products from Beier and Sons',
                id: '211e7819-c286-480e-bcae-2c7237cdef02',
                name: 'Salad',
                objectType: 'delicate',
                totalAmount: 58531,
                unitAmount: 536,
                unitQuantity: 91,
            ),
        ],
        memo: 'withdrawal of USD 873.18 at Harber and Sons charged to account ending in 1804 using card ending in ****7022.',
        status: Shared\AccountingTransactionStatus::Void,
        taxAmount: 0,
        totalAmount: 94452,
        transactionAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-09-10T21:27:21.377Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->transaction->createAccountingTransaction(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateAccountingTransactionRequest](../../Models/Operations/CreateAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateAccountingTransactionResponse](../../Models/Operations/CreateAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingTransaction

Retrieve a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingTransaction" method="get" path="/accounting/{connection_id}/transaction/{id}" -->
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

$request = new Operations\GetAccountingTransactionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->transaction->getAccountingTransaction(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingTransactionRequest](../../Models/Operations/GetAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingTransactionResponse](../../Models/Operations/GetAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingTransactions

List all transactions

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingTransactions" method="get" path="/accounting/{connection_id}/transaction" -->
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

$request = new Operations\ListAccountingTransactionsRequest(
    connectionId: '<id>',
);

$response = $sdk->transaction->listAccountingTransactions(
    request: $request
);

if ($response->accountingTransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingTransactionsRequest](../../Models/Operations/ListAccountingTransactionsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingTransactionsResponse](../../Models/Operations/ListAccountingTransactionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingTransaction

Update a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingTransaction" method="patch" path="/accounting/{connection_id}/transaction/{id}" example="accounting_transaction" -->
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

$request = new Operations\PatchAccountingTransactionRequest(
    accountingTransaction: new Shared\AccountingTransaction(
        createdAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        exchangeRate: 0.5674,
        id: '81bf7ef2-8ff2-4ddc-b703-024288cc4b75',
        lineitems: [
            new Shared\AccountingTransactionLineItem(
                categoryIds: [],
                description: 'The Nikolas Table is the latest in a series of downright products from Beier and Sons',
                id: '5dceaa79-1e95-4cee-928e-c57d24727437',
                name: 'Salad',
                objectType: 'delicate',
                totalAmount: 58531,
                unitAmount: 536,
                unitQuantity: 91,
            ),
        ],
        memo: 'withdrawal of USD 873.18 at Harber and Sons charged to account ending in 1804 using card ending in ****7022.',
        status: Shared\AccountingTransactionStatus::Void,
        taxAmount: 0,
        totalAmount: 94452,
        transactionAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-09-10T21:27:21.384Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->transaction->patchAccountingTransaction(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchAccountingTransactionRequest](../../Models/Operations/PatchAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchAccountingTransactionResponse](../../Models/Operations/PatchAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingTransaction

Remove a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingTransaction" method="delete" path="/accounting/{connection_id}/transaction/{id}" -->
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

$request = new Operations\RemoveAccountingTransactionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->transaction->removeAccountingTransaction(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveAccountingTransactionRequest](../../Models/Operations/RemoveAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveAccountingTransactionResponse](../../Models/Operations/RemoveAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingTransaction

Update a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingTransaction" method="put" path="/accounting/{connection_id}/transaction/{id}" example="accounting_transaction" -->
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

$request = new Operations\UpdateAccountingTransactionRequest(
    accountingTransaction: new Shared\AccountingTransaction(
        createdAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        exchangeRate: 0.5674,
        id: '81bf7ef2-8ff2-4ddc-b703-024288cc4b75',
        lineitems: [
            new Shared\AccountingTransactionLineItem(
                categoryIds: [],
                description: 'The Nikolas Table is the latest in a series of downright products from Beier and Sons',
                id: '5dceaa79-1e95-4cee-928e-c57d24727437',
                name: 'Salad',
                objectType: 'delicate',
                totalAmount: 58531,
                unitAmount: 536,
                unitQuantity: 91,
            ),
        ],
        memo: 'withdrawal of USD 873.18 at Harber and Sons charged to account ending in 1804 using card ending in ****7022.',
        status: Shared\AccountingTransactionStatus::Void,
        taxAmount: 0,
        totalAmount: 94452,
        transactionAt: Utils\Utils::parseDateTime('2019-09-25T11:40:42.574Z'),
        updatedAt: Utils\Utils::parseDateTime('2021-09-10T21:27:21.384Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->transaction->updateAccountingTransaction(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateAccountingTransactionRequest](../../Models/Operations/UpdateAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateAccountingTransactionResponse](../../Models/Operations/UpdateAccountingTransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |