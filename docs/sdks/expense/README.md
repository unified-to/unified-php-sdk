# Expense

## Overview

### Available Operations

* [createAccountingExpense2](#createaccountingexpense2) - Create an expense
* [getAccountingExpense2](#getaccountingexpense2) - Retrieve an expense
* [listAccountingExpenses2](#listaccountingexpenses2) - List all expenses
* [patchAccountingExpense2](#patchaccountingexpense2) - Update an expense
* [removeAccountingExpense2](#removeaccountingexpense2) - Remove an expense
* [updateAccountingExpense2](#updateaccountingexpense2) - Update an expense

## createAccountingExpense2

Create an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingExpense2" method="post" path="/accounting/{connection_id}/expense" -->
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

$request = new Operations\CreateAccountingExpense2Request(
    accountingExpense: new Shared\AccountingExpense(),
    connectionId: '<id>',
);

$response = $sdk->expense->createAccountingExpense2(
    request: $request
);

if ($response->accountingExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAccountingExpense2Request](../../Models/Operations/CreateAccountingExpense2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAccountingExpense2Response](../../Models/Operations/CreateAccountingExpense2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingExpense2

Retrieve an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingExpense2" method="get" path="/accounting/{connection_id}/expense/{id}" -->
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

$request = new Operations\GetAccountingExpense2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->getAccountingExpense2(
    request: $request
);

if ($response->accountingExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingExpense2Request](../../Models/Operations/GetAccountingExpense2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingExpense2Response](../../Models/Operations/GetAccountingExpense2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingExpenses2

List all expenses

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingExpenses2" method="get" path="/accounting/{connection_id}/expense" -->
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

$request = new Operations\ListAccountingExpenses2Request(
    connectionId: '<id>',
);

$response = $sdk->expense->listAccountingExpenses2(
    request: $request
);

if ($response->accountingExpenses !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAccountingExpenses2Request](../../Models/Operations/ListAccountingExpenses2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAccountingExpenses2Response](../../Models/Operations/ListAccountingExpenses2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingExpense2

Update an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingExpense2" method="patch" path="/accounting/{connection_id}/expense/{id}" -->
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

$request = new Operations\PatchAccountingExpense2Request(
    accountingExpense: new Shared\AccountingExpense(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->patchAccountingExpense2(
    request: $request
);

if ($response->accountingExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAccountingExpense2Request](../../Models/Operations/PatchAccountingExpense2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAccountingExpense2Response](../../Models/Operations/PatchAccountingExpense2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingExpense2

Remove an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingExpense2" method="delete" path="/accounting/{connection_id}/expense/{id}" -->
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

$request = new Operations\RemoveAccountingExpense2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->removeAccountingExpense2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAccountingExpense2Request](../../Models/Operations/RemoveAccountingExpense2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAccountingExpense2Response](../../Models/Operations/RemoveAccountingExpense2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingExpense2

Update an expense

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingExpense2" method="put" path="/accounting/{connection_id}/expense/{id}" -->
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

$request = new Operations\UpdateAccountingExpense2Request(
    accountingExpense: new Shared\AccountingExpense(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->expense->updateAccountingExpense2(
    request: $request
);

if ($response->accountingExpense !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAccountingExpense2Request](../../Models/Operations/UpdateAccountingExpense2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAccountingExpense2Response](../../Models/Operations/UpdateAccountingExpense2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |