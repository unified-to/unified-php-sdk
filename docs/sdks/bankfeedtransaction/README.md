# Bankfeedtransaction

## Overview

### Available Operations

* [createAccountingBankfeedtransaction](#createaccountingbankfeedtransaction) - Create a bankfeedtransaction
* [getAccountingBankfeedtransaction](#getaccountingbankfeedtransaction) - Retrieve a bankfeedtransaction
* [listAccountingBankfeedtransactions](#listaccountingbankfeedtransactions) - List all bankfeedtransactions
* [patchAccountingBankfeedtransaction](#patchaccountingbankfeedtransaction) - Update a bankfeedtransaction
* [removeAccountingBankfeedtransaction](#removeaccountingbankfeedtransaction) - Remove a bankfeedtransaction
* [updateAccountingBankfeedtransaction](#updateaccountingbankfeedtransaction) - Update a bankfeedtransaction

## createAccountingBankfeedtransaction

Creates a AccountingBankfeedtransaction. Provide the unified AccountingBankfeedtransaction fields in the request body; they are mapped to the provider's API. Returns the created AccountingBankfeedtransaction.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingBankfeedtransaction" method="post" path="/accounting/{connection_id}/bankfeedtransaction" example="accounting_bankfeedtransaction" -->
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

$request = new Operations\CreateAccountingBankfeedtransactionRequest(
    accountingBankfeedtransaction: new Shared\AccountingBankfeedtransaction(
        amount: 60889,
        bankCategory: 'Clothing',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-24T23:41:08.374Z'),
        currency: 'CAD',
        description: 'Payment of SRD 92.72 for withdrawal at Halvorson - Ziemann, processed with card ending ****3731 linked to account ***7781.',
        id: 'cf67ca3c-562f-4a89-bb44-49e6d77226b6',
        isPending: true,
        merchantName: 'Buckridge - Feest',
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-18T20:28:16.584Z'),
        reference: '79574105',
        transactionAt: Utils\Utils::parseDateTime('2022-07-30T19:10:27.934Z'),
        type: Shared\AccountingBankfeedtransactionType::Credit,
        updatedAt: Utils\Utils::parseDateTime('2022-05-25T07:01:20.936Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->bankfeedtransaction->createAccountingBankfeedtransaction(
    request: $request
);

if ($response->accountingBankfeedtransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [Operations\CreateAccountingBankfeedtransactionRequest](../../Models/Operations/CreateAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |

### Response

**[?Operations\CreateAccountingBankfeedtransactionResponse](../../Models/Operations/CreateAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingBankfeedtransaction

Retrieves a single AccountingBankfeedtransaction by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingBankfeedtransaction" method="get" path="/accounting/{connection_id}/bankfeedtransaction/{id}" -->
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

$request = new Operations\GetAccountingBankfeedtransactionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankfeedtransaction->getAccountingBankfeedtransaction(
    request: $request
);

if ($response->accountingBankfeedtransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                | Type                                                                                                                     | Required                                                                                                                 | Description                                                                                                              |
| ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                               | [Operations\GetAccountingBankfeedtransactionRequest](../../Models/Operations/GetAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                       | The request object to use for the request.                                                                               |

### Response

**[?Operations\GetAccountingBankfeedtransactionResponse](../../Models/Operations/GetAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingBankfeedtransactions

Returns a list of AccountingBankfeedtransactions. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingBankfeedtransactions" method="get" path="/accounting/{connection_id}/bankfeedtransaction" -->
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

$request = new Operations\ListAccountingBankfeedtransactionsRequest(
    connectionId: '<id>',
);

$response = $sdk->bankfeedtransaction->listAccountingBankfeedtransactions(
    request: $request
);

if ($response->accountingBankfeedtransactions !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\ListAccountingBankfeedtransactionsRequest](../../Models/Operations/ListAccountingBankfeedtransactionsRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\ListAccountingBankfeedtransactionsResponse](../../Models/Operations/ListAccountingBankfeedtransactionsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingBankfeedtransaction

Updates the AccountingBankfeedtransaction identified by `id`. Provide the unified AccountingBankfeedtransaction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingBankfeedtransaction" method="patch" path="/accounting/{connection_id}/bankfeedtransaction/{id}" example="accounting_bankfeedtransaction" -->
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

$request = new Operations\PatchAccountingBankfeedtransactionRequest(
    accountingBankfeedtransaction: new Shared\AccountingBankfeedtransaction(
        amount: 60889,
        bankCategory: 'Clothing',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-24T23:41:08.374Z'),
        currency: 'CAD',
        description: 'Payment of SRD 92.72 for withdrawal at Halvorson - Ziemann, processed with card ending ****3731 linked to account ***7781.',
        id: '02e3b10d-fb01-4dc8-b5e4-ffc9af8fce5d',
        isPending: true,
        merchantName: 'Buckridge - Feest',
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-18T20:28:16.598Z'),
        reference: '79574105',
        transactionAt: Utils\Utils::parseDateTime('2022-07-30T19:10:27.935Z'),
        type: Shared\AccountingBankfeedtransactionType::Credit,
        updatedAt: Utils\Utils::parseDateTime('2022-05-25T07:01:20.937Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankfeedtransaction->patchAccountingBankfeedtransaction(
    request: $request
);

if ($response->accountingBankfeedtransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                    | Type                                                                                                                         | Required                                                                                                                     | Description                                                                                                                  |
| ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                   | [Operations\PatchAccountingBankfeedtransactionRequest](../../Models/Operations/PatchAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                           | The request object to use for the request.                                                                                   |

### Response

**[?Operations\PatchAccountingBankfeedtransactionResponse](../../Models/Operations/PatchAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingBankfeedtransaction

Deletes the AccountingBankfeedtransaction identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingBankfeedtransaction" method="delete" path="/accounting/{connection_id}/bankfeedtransaction/{id}" -->
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

$request = new Operations\RemoveAccountingBankfeedtransactionRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankfeedtransaction->removeAccountingBankfeedtransaction(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [Operations\RemoveAccountingBankfeedtransactionRequest](../../Models/Operations/RemoveAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |

### Response

**[?Operations\RemoveAccountingBankfeedtransactionResponse](../../Models/Operations/RemoveAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingBankfeedtransaction

Updates the AccountingBankfeedtransaction identified by `id`. Provide the unified AccountingBankfeedtransaction fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingBankfeedtransaction" method="put" path="/accounting/{connection_id}/bankfeedtransaction/{id}" example="accounting_bankfeedtransaction" -->
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

$request = new Operations\UpdateAccountingBankfeedtransactionRequest(
    accountingBankfeedtransaction: new Shared\AccountingBankfeedtransaction(
        amount: 60889,
        bankCategory: 'Clothing',
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2022-03-24T23:41:08.374Z'),
        currency: 'CAD',
        description: 'Payment of SRD 92.72 for withdrawal at Halvorson - Ziemann, processed with card ending ****3731 linked to account ***7781.',
        id: '02e3b10d-fb01-4dc8-b5e4-ffc9af8fce5d',
        isPending: true,
        merchantName: 'Buckridge - Feest',
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-18T20:28:16.598Z'),
        reference: '79574105',
        transactionAt: Utils\Utils::parseDateTime('2022-07-30T19:10:27.935Z'),
        type: Shared\AccountingBankfeedtransactionType::Credit,
        updatedAt: Utils\Utils::parseDateTime('2022-05-25T07:01:20.937Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bankfeedtransaction->updateAccountingBankfeedtransaction(
    request: $request
);

if ($response->accountingBankfeedtransaction !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                                      | Type                                                                                                                           | Required                                                                                                                       | Description                                                                                                                    |
| ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                                     | [Operations\UpdateAccountingBankfeedtransactionRequest](../../Models/Operations/UpdateAccountingBankfeedtransactionRequest.md) | :heavy_check_mark:                                                                                                             | The request object to use for the request.                                                                                     |

### Response

**[?Operations\UpdateAccountingBankfeedtransactionResponse](../../Models/Operations/UpdateAccountingBankfeedtransactionResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |