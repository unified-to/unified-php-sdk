# Account

## Overview

### Available Operations

* [createAccountingAccount](#createaccountingaccount) - Create an account
* [getAccountingAccount](#getaccountingaccount) - Retrieve an account
* [listAccountingAccounts](#listaccountingaccounts) - List all accounts
* [patchAccountingAccount](#patchaccountingaccount) - Update an account
* [removeAccountingAccount](#removeaccountingaccount) - Remove an account
* [updateAccountingAccount](#updateaccountingaccount) - Update an account

## createAccountingAccount

Create an account

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAccountingAccountRequest(
        connectionId: '<value>',
        accountingAccount: new Shared\AccountingAccount(
            balance: 6602.56,
            createdAt: Utils\Utils::parseDateTime('2023-09-02T22:12:31.771Z'),
            currency: 'Saint Helena Pound',
            customerDefinedCode: '<value>',
            description: 'Cross-group zero defect task-force',
            group: '<value>',
            id: '<id>',
            isPayable: false,
            name: '<value>',
            parentAccountId: '<value>',
            raw: [
                'Ruble' => '<value>',
            ],
            section: '<value>',
            status: Shared\Status::Active,
            subgroup: '<value>',
            subsection: '<value>',
            type: Shared\Type::FixedAsset,
            updatedAt: Utils\Utils::parseDateTime('2024-10-01T23:54:12.882Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->account->createAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingAccountRequest](../../Models/Operations/CreateAccountingAccountRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingAccountResponse](../../Models/Operations/CreateAccountingAccountResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## getAccountingAccount

Retrieve an account

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAccountingAccountRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->account->getAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingAccountRequest](../../Models/Operations/GetAccountingAccountRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingAccountResponse](../../Models/Operations/GetAccountingAccountResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## listAccountingAccounts

List all accounts

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAccountingAccountsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 9476.86,
        offset: 5444.77,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2024-04-19T21:33:28.191Z'),
    );
    $response = $sdk->account->listAccountingAccounts($request);

    if ($response->accountingAccounts !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingAccountsRequest](../../Models/Operations/ListAccountingAccountsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingAccountsResponse](../../Models/Operations/ListAccountingAccountsResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## patchAccountingAccount

Update an account

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAccountingAccountRequest(
        connectionId: '<value>',
        id: '<id>',
        accountingAccount: new Shared\AccountingAccount(
            balance: 1931.26,
            createdAt: Utils\Utils::parseDateTime('2023-01-09T13:35:06.969Z'),
            currency: 'Won',
            customerDefinedCode: '<value>',
            description: 'Quality-focused multimedia implementation',
            group: '<value>',
            id: '<id>',
            isPayable: false,
            name: '<value>',
            parentAccountId: '<value>',
            raw: [
                'male' => '<value>',
            ],
            section: '<value>',
            status: Shared\Status::Archived,
            subgroup: '<value>',
            subsection: '<value>',
            type: Shared\Type::Expense,
            updatedAt: Utils\Utils::parseDateTime('2024-04-01T20:09:00.405Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->account->patchAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingAccountRequest](../../Models/Operations/PatchAccountingAccountRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingAccountResponse](../../Models/Operations/PatchAccountingAccountResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## removeAccountingAccount

Remove an account

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAccountingAccountRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->account->removeAccountingAccount($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingAccountRequest](../../Models/Operations/RemoveAccountingAccountRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingAccountResponse](../../Models/Operations/RemoveAccountingAccountResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |


## updateAccountingAccount

Update an account

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAccountingAccountRequest(
        connectionId: '<value>',
        id: '<id>',
        accountingAccount: new Shared\AccountingAccount(
            balance: 5954.09,
            createdAt: Utils\Utils::parseDateTime('2022-05-21T23:41:25.152Z'),
            currency: 'Tanzanian Shilling',
            customerDefinedCode: '<value>',
            description: 'Stand-alone grid-enabled model',
            group: '<value>',
            id: '<id>',
            isPayable: false,
            name: '<value>',
            parentAccountId: '<value>',
            raw: [
                'Costa' => '<value>',
            ],
            section: '<value>',
            status: Shared\Status::Archived,
            subgroup: '<value>',
            subsection: '<value>',
            type: Shared\Type::Liability,
            updatedAt: Utils\Utils::parseDateTime('2022-05-16T10:15:08.356Z'),
        ),
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->account->updateAccountingAccount($request);

    if ($response->accountingAccount !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingAccountRequest](../../Models/Operations/UpdateAccountingAccountRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingAccountResponse](../../Models/Operations/UpdateAccountingAccountResponse.md)**

### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
