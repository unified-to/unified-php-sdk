# Bankfeedaccount

## Overview

### Available Operations

* [createAccountingBankfeedaccount](#createaccountingbankfeedaccount) - Create a bankfeedaccount
* [getAccountingBankfeedaccount](#getaccountingbankfeedaccount) - Retrieve a bankfeedaccount
* [listAccountingBankfeedaccounts](#listaccountingbankfeedaccounts) - List all bankfeedaccounts
* [patchAccountingBankfeedaccount](#patchaccountingbankfeedaccount) - Update a bankfeedaccount
* [removeAccountingBankfeedaccount](#removeaccountingbankfeedaccount) - Remove a bankfeedaccount
* [updateAccountingBankfeedaccount](#updateaccountingbankfeedaccount) - Update a bankfeedaccount

## createAccountingBankfeedaccount

Creates a AccountingBankfeedaccount. Provide the unified AccountingBankfeedaccount fields in the request body; they are mapped to the provider's API. Returns the created AccountingBankfeedaccount.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingBankfeedaccount" method="post" path="/accounting/{connection_id}/bankfeedaccount" example="accounting_bankfeedaccount" -->
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

$request = new Operations\CreateAccountingBankfeedaccountRequest(
    accountingBankfeedaccount: new Shared\AccountingBankfeedaccount(
        accountNumber: '30369722',
        accountNumberLast4: '9722',
        accountType: Shared\AccountType::Loan,
        balance: 49437,
        bankName: 'Wells Fargo',
        createdAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        currency: 'AUD',
        feedStartAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        id: '25ac8c40-9bf4-4330-be11-a42962441182',
        metadata: [],
        name: 'Corwin, Donnelly and Connelly Checking',
        routingNumber: '694667752',
        status: Shared\AccountingBankfeedaccountStatus::Active,
        updatedAt: Utils\Utils::parseDateTime('2024-04-27T12:24:01.878Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->bankfeedaccount->createAccountingBankfeedaccount(
    request: $request
);

if ($response->accountingBankfeedaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\CreateAccountingBankfeedaccountRequest](../../Models/Operations/CreateAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\CreateAccountingBankfeedaccountResponse](../../Models/Operations/CreateAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingBankfeedaccount

Retrieves a single AccountingBankfeedaccount by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingBankfeedaccount" method="get" path="/accounting/{connection_id}/bankfeedaccount/{id}" -->
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

$request = new Operations\GetAccountingBankfeedaccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankfeedaccount->getAccountingBankfeedaccount(
    request: $request
);

if ($response->accountingBankfeedaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\GetAccountingBankfeedaccountRequest](../../Models/Operations/GetAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\GetAccountingBankfeedaccountResponse](../../Models/Operations/GetAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingBankfeedaccounts

Returns a list of AccountingBankfeedaccounts. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingBankfeedaccounts" method="get" path="/accounting/{connection_id}/bankfeedaccount" -->
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

$request = new Operations\ListAccountingBankfeedaccountsRequest(
    connectionId: '<id>',
);

$response = $sdk->bankfeedaccount->listAccountingBankfeedaccounts(
    request: $request
);

if ($response->accountingBankfeedaccounts !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\ListAccountingBankfeedaccountsRequest](../../Models/Operations/ListAccountingBankfeedaccountsRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\ListAccountingBankfeedaccountsResponse](../../Models/Operations/ListAccountingBankfeedaccountsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingBankfeedaccount

Updates the AccountingBankfeedaccount identified by `id`. Provide the unified AccountingBankfeedaccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingBankfeedaccount" method="patch" path="/accounting/{connection_id}/bankfeedaccount/{id}" example="accounting_bankfeedaccount" -->
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

$request = new Operations\PatchAccountingBankfeedaccountRequest(
    accountingBankfeedaccount: new Shared\AccountingBankfeedaccount(
        accountNumber: '30369722',
        accountNumberLast4: '9722',
        accountType: Shared\AccountType::Loan,
        balance: 49437,
        bankName: 'Wells Fargo',
        createdAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        currency: 'AUD',
        feedStartAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        id: '38033833-8601-4ce0-acaa-06a0af4ed8f2',
        metadata: [],
        name: 'Corwin, Donnelly and Connelly Checking',
        routingNumber: '694667752',
        status: Shared\AccountingBankfeedaccountStatus::Active,
        updatedAt: Utils\Utils::parseDateTime('2024-04-27T12:24:01.883Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankfeedaccount->patchAccountingBankfeedaccount(
    request: $request
);

if ($response->accountingBankfeedaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\PatchAccountingBankfeedaccountRequest](../../Models/Operations/PatchAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\PatchAccountingBankfeedaccountResponse](../../Models/Operations/PatchAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingBankfeedaccount

Deletes the AccountingBankfeedaccount identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingBankfeedaccount" method="delete" path="/accounting/{connection_id}/bankfeedaccount/{id}" -->
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

$request = new Operations\RemoveAccountingBankfeedaccountRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankfeedaccount->removeAccountingBankfeedaccount(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\RemoveAccountingBankfeedaccountRequest](../../Models/Operations/RemoveAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\RemoveAccountingBankfeedaccountResponse](../../Models/Operations/RemoveAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingBankfeedaccount

Updates the AccountingBankfeedaccount identified by `id`. Provide the unified AccountingBankfeedaccount fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingBankfeedaccount" method="put" path="/accounting/{connection_id}/bankfeedaccount/{id}" example="accounting_bankfeedaccount" -->
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

$request = new Operations\UpdateAccountingBankfeedaccountRequest(
    accountingBankfeedaccount: new Shared\AccountingBankfeedaccount(
        accountNumber: '30369722',
        accountNumberLast4: '9722',
        accountType: Shared\AccountType::Loan,
        balance: 49437,
        bankName: 'Wells Fargo',
        createdAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        currency: 'AUD',
        feedStartAt: Utils\Utils::parseDateTime('2022-10-31T16:42:19.277Z'),
        id: '38033833-8601-4ce0-acaa-06a0af4ed8f2',
        metadata: [],
        name: 'Corwin, Donnelly and Connelly Checking',
        routingNumber: '694667752',
        status: Shared\AccountingBankfeedaccountStatus::Active,
        updatedAt: Utils\Utils::parseDateTime('2024-04-27T12:24:01.883Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankfeedaccount->updateAccountingBankfeedaccount(
    request: $request
);

if ($response->accountingBankfeedaccount !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                              | Type                                                                                                                   | Required                                                                                                               | Description                                                                                                            |
| ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                             | [Operations\UpdateAccountingBankfeedaccountRequest](../../Models/Operations/UpdateAccountingBankfeedaccountRequest.md) | :heavy_check_mark:                                                                                                     | The request object to use for the request.                                                                             |

### Response

**[?Operations\UpdateAccountingBankfeedaccountResponse](../../Models/Operations/UpdateAccountingBankfeedaccountResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |