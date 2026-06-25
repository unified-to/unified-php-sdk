# Account

## Overview

### Available Operations

* [createAccountingAccount2](#createaccountingaccount2) - Create an account
* [getAccountingAccount2](#getaccountingaccount2) - Retrieve an account
* [listAccountingAccounts2](#listaccountingaccounts2) - List all accounts
* [patchAccountingAccount2](#patchaccountingaccount2) - Update an account
* [removeAccountingAccount2](#removeaccountingaccount2) - Remove an account
* [updateAccountingAccount2](#updateaccountingaccount2) - Update an account

## createAccountingAccount2

Create an account

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingAccount2" method="post" path="/accounting/{connection_id}/account" -->
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

$request = new Operations\CreateAccountingAccount2Request(
    accountingAccount: new Shared\AccountingAccount(),
    connectionId: '<id>',
);

$response = $sdk->account->createAccountingAccount2(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAccountingAccount2Request](../../Models/Operations/CreateAccountingAccount2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAccountingAccount2Response](../../Models/Operations/CreateAccountingAccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingAccount2

Retrieve an account

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingAccount2" method="get" path="/accounting/{connection_id}/account/{id}" -->
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

$request = new Operations\GetAccountingAccount2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->account->getAccountingAccount2(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingAccount2Request](../../Models/Operations/GetAccountingAccount2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingAccount2Response](../../Models/Operations/GetAccountingAccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingAccounts2

List all accounts

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingAccounts2" method="get" path="/accounting/{connection_id}/account" -->
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

$request = new Operations\ListAccountingAccounts2Request(
    connectionId: '<id>',
);

$response = $sdk->account->listAccountingAccounts2(
    request: $request
);

if ($response->accountingAccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAccountingAccounts2Request](../../Models/Operations/ListAccountingAccounts2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAccountingAccounts2Response](../../Models/Operations/ListAccountingAccounts2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingAccount2

Update an account

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingAccount2" method="patch" path="/accounting/{connection_id}/account/{id}" -->
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

$request = new Operations\PatchAccountingAccount2Request(
    accountingAccount: new Shared\AccountingAccount(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->account->patchAccountingAccount2(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAccountingAccount2Request](../../Models/Operations/PatchAccountingAccount2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAccountingAccount2Response](../../Models/Operations/PatchAccountingAccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingAccount2

Remove an account

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingAccount2" method="delete" path="/accounting/{connection_id}/account/{id}" -->
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

$request = new Operations\RemoveAccountingAccount2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->account->removeAccountingAccount2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAccountingAccount2Request](../../Models/Operations/RemoveAccountingAccount2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAccountingAccount2Response](../../Models/Operations/RemoveAccountingAccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingAccount2

Update an account

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingAccount2" method="put" path="/accounting/{connection_id}/account/{id}" -->
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

$request = new Operations\UpdateAccountingAccount2Request(
    accountingAccount: new Shared\AccountingAccount(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->account->updateAccountingAccount2(
    request: $request
);

if ($response->accountingAccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAccountingAccount2Request](../../Models/Operations/UpdateAccountingAccount2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAccountingAccount2Response](../../Models/Operations/UpdateAccountingAccount2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |