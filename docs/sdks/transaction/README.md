# Transaction

## Overview

### Available Operations

* [createAccountingTransaction2](#createaccountingtransaction2) - Create a transaction
* [getAccountingTransaction2](#getaccountingtransaction2) - Retrieve a transaction
* [listAccountingTransactions2](#listaccountingtransactions2) - List all transactions
* [patchAccountingTransaction2](#patchaccountingtransaction2) - Update a transaction
* [removeAccountingTransaction2](#removeaccountingtransaction2) - Remove a transaction
* [updateAccountingTransaction2](#updateaccountingtransaction2) - Update a transaction

## createAccountingTransaction2

Create a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingTransaction2" method="post" path="/accounting/{connection_id}/transaction" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\CreateAccountingTransaction2Request(
    accountingTransaction: new Shared\AccountingTransaction(),
    connectionId: '<id>',
);

$response = $sdk->transaction->createAccountingTransaction2(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\CreateAccountingTransaction2Request](../../Models/Operations/CreateAccountingTransaction2Request.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\CreateAccountingTransaction2Response](../../Models/Operations/CreateAccountingTransaction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingTransaction2

Retrieve a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingTransaction2" method="get" path="/accounting/{connection_id}/transaction/{id}" -->
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

$request = new Operations\GetAccountingTransaction2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->transaction->getAccountingTransaction2(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingTransaction2Request](../../Models/Operations/GetAccountingTransaction2Request.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingTransaction2Response](../../Models/Operations/GetAccountingTransaction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingTransactions2

List all transactions

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingTransactions2" method="get" path="/accounting/{connection_id}/transaction" -->
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

$request = new Operations\ListAccountingTransactions2Request(
    connectionId: '<id>',
);

$response = $sdk->transaction->listAccountingTransactions2(
    request: $request
);

if ($response->accountingTransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingTransactions2Request](../../Models/Operations/ListAccountingTransactions2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingTransactions2Response](../../Models/Operations/ListAccountingTransactions2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingTransaction2

Update a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingTransaction2" method="patch" path="/accounting/{connection_id}/transaction/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\PatchAccountingTransaction2Request(
    accountingTransaction: new Shared\AccountingTransaction(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->transaction->patchAccountingTransaction2(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\PatchAccountingTransaction2Request](../../Models/Operations/PatchAccountingTransaction2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\PatchAccountingTransaction2Response](../../Models/Operations/PatchAccountingTransaction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingTransaction2

Remove a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingTransaction2" method="delete" path="/accounting/{connection_id}/transaction/{id}" -->
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

$request = new Operations\RemoveAccountingTransaction2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->transaction->removeAccountingTransaction2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\RemoveAccountingTransaction2Request](../../Models/Operations/RemoveAccountingTransaction2Request.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\RemoveAccountingTransaction2Response](../../Models/Operations/RemoveAccountingTransaction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingTransaction2

Update a transaction

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingTransaction2" method="put" path="/accounting/{connection_id}/transaction/{id}" -->
```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()
    ->setSecurity(
        '<YOUR_API_KEY_HERE>'
    )
    ->build();

$request = new Operations\UpdateAccountingTransaction2Request(
    accountingTransaction: new Shared\AccountingTransaction(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->transaction->updateAccountingTransaction2(
    request: $request
);

if ($response->accountingTransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\UpdateAccountingTransaction2Request](../../Models/Operations/UpdateAccountingTransaction2Request.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\UpdateAccountingTransaction2Response](../../Models/Operations/UpdateAccountingTransaction2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |