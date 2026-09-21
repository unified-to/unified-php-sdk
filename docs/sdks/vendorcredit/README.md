# Vendorcredit

## Overview

### Available Operations

* [createAccountingVendorcredit](#createaccountingvendorcredit) - Create a vendorcredit
* [getAccountingVendorcredit](#getaccountingvendorcredit) - Retrieve a vendorcredit
* [listAccountingVendorcredits](#listaccountingvendorcredits) - List all vendorcredits
* [patchAccountingVendorcredit](#patchaccountingvendorcredit) - Update a vendorcredit
* [removeAccountingVendorcredit](#removeaccountingvendorcredit) - Remove a vendorcredit
* [updateAccountingVendorcredit](#updateaccountingvendorcredit) - Update a vendorcredit

## createAccountingVendorcredit

Create a vendorcredit

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingVendorcredit" method="post" path="/accounting/{connection_id}/vendorcredit" example="accounting_vendorcredit" -->
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

$request = new Operations\CreateAccountingVendorcreditRequest(
    accountingVendorcredit: new Shared\AccountingVendorcredit(
        applications: [],
        applyAmount: 1,
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        currency: 'KGS',
        dueAt: Utils\Utils::parseDateTime('2023-05-06T20:38:46.775Z'),
        id: 'a277fafd-6a45-453a-a250-b99677d7a27d',
        lineitems: [],
        metadata: [],
        notes: 'Conatus cruciamentum decor avaritia tantum.',
        postedAt: Utils\Utils::parseDateTime('2023-09-29T01:37:34.419Z'),
        status: Shared\AccountingVendorcreditStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-11-27T02:39:20.516Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->vendorcredit->createAccountingVendorcredit(
    request: $request
);

if ($response->accountingVendorcredit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\CreateAccountingVendorcreditRequest](../../Models/Operations/CreateAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\CreateAccountingVendorcreditResponse](../../Models/Operations/CreateAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingVendorcredit

Retrieve a vendorcredit

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingVendorcredit" method="get" path="/accounting/{connection_id}/vendorcredit/{id}" -->
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

$request = new Operations\GetAccountingVendorcreditRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->vendorcredit->getAccountingVendorcredit(
    request: $request
);

if ($response->accountingVendorcredit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\GetAccountingVendorcreditRequest](../../Models/Operations/GetAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\GetAccountingVendorcreditResponse](../../Models/Operations/GetAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingVendorcredits

List all vendorcredits

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingVendorcredits" method="get" path="/accounting/{connection_id}/vendorcredit" -->
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

$request = new Operations\ListAccountingVendorcreditsRequest(
    connectionId: '<id>',
);

$response = $sdk->vendorcredit->listAccountingVendorcredits(
    request: $request
);

if ($response->accountingVendorcredits !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingVendorcreditsRequest](../../Models/Operations/ListAccountingVendorcreditsRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingVendorcreditsResponse](../../Models/Operations/ListAccountingVendorcreditsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingVendorcredit

Update a vendorcredit

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingVendorcredit" method="patch" path="/accounting/{connection_id}/vendorcredit/{id}" example="accounting_vendorcredit" -->
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

$request = new Operations\PatchAccountingVendorcreditRequest(
    accountingVendorcredit: new Shared\AccountingVendorcredit(
        applications: [],
        applyAmount: 1,
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        currency: 'KGS',
        dueAt: Utils\Utils::parseDateTime('2023-05-06T20:38:46.775Z'),
        id: 'b6f8e422-65bf-48c8-ad52-a5537ca85940',
        lineitems: [],
        metadata: [],
        notes: 'Conatus cruciamentum decor avaritia tantum.',
        postedAt: Utils\Utils::parseDateTime('2023-09-29T01:37:34.425Z'),
        status: Shared\AccountingVendorcreditStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-11-27T02:39:20.523Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->vendorcredit->patchAccountingVendorcredit(
    request: $request
);

if ($response->accountingVendorcredit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\PatchAccountingVendorcreditRequest](../../Models/Operations/PatchAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\PatchAccountingVendorcreditResponse](../../Models/Operations/PatchAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingVendorcredit

Remove a vendorcredit

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingVendorcredit" method="delete" path="/accounting/{connection_id}/vendorcredit/{id}" -->
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

$request = new Operations\RemoveAccountingVendorcreditRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->vendorcredit->removeAccountingVendorcredit(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\RemoveAccountingVendorcreditRequest](../../Models/Operations/RemoveAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\RemoveAccountingVendorcreditResponse](../../Models/Operations/RemoveAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingVendorcredit

Update a vendorcredit

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingVendorcredit" method="put" path="/accounting/{connection_id}/vendorcredit/{id}" example="accounting_vendorcredit" -->
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

$request = new Operations\UpdateAccountingVendorcreditRequest(
    accountingVendorcredit: new Shared\AccountingVendorcredit(
        applications: [],
        applyAmount: 1,
        balanceAmount: 0,
        createdAt: Utils\Utils::parseDateTime('2023-04-15T21:14:08.197Z'),
        currency: 'KGS',
        dueAt: Utils\Utils::parseDateTime('2023-05-06T20:38:46.775Z'),
        id: 'b6f8e422-65bf-48c8-ad52-a5537ca85940',
        lineitems: [],
        metadata: [],
        notes: 'Conatus cruciamentum decor avaritia tantum.',
        postedAt: Utils\Utils::parseDateTime('2023-09-29T01:37:34.425Z'),
        status: Shared\AccountingVendorcreditStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-11-27T02:39:20.523Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->vendorcredit->updateAccountingVendorcredit(
    request: $request
);

if ($response->accountingVendorcredit !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\UpdateAccountingVendorcreditRequest](../../Models/Operations/UpdateAccountingVendorcreditRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\UpdateAccountingVendorcreditResponse](../../Models/Operations/UpdateAccountingVendorcreditResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |