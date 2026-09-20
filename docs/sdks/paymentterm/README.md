# Paymentterm

## Overview

### Available Operations

* [createAccountingPaymentterm](#createaccountingpaymentterm) - Create a paymentterm
* [getAccountingPaymentterm](#getaccountingpaymentterm) - Retrieve a paymentterm
* [listAccountingPaymentterms](#listaccountingpaymentterms) - List all paymentterms
* [patchAccountingPaymentterm](#patchaccountingpaymentterm) - Update a paymentterm
* [removeAccountingPaymentterm](#removeaccountingpaymentterm) - Remove a paymentterm
* [updateAccountingPaymentterm](#updateaccountingpaymentterm) - Update a paymentterm

## createAccountingPaymentterm

Create a paymentterm

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingPaymentterm" method="post" path="/accounting/{connection_id}/paymentterm" example="accounting_paymentterm" -->
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

$request = new Operations\CreateAccountingPaymenttermRequest(
    accountingPaymentterm: new Shared\AccountingPaymentterm(
        category: Shared\Category::Standard,
        createdAt: Utils\Utils::parseDateTime('2021-08-22T22:42:42.265Z'),
        dayOfMonthDue: 4,
        description: 'Cogito pecco eos cultura.',
        discountDayOfMonth: 13,
        discountDays: 4,
        discountPercent: 5,
        dueDays: 57,
        dueNextMonthDays: 9,
        id: '580489ec-1318-4cb9-bc84-77f988e5b6c8',
        isActive: false,
        metadata: [],
        name: 'Net 30',
        type: Shared\AccountingPaymenttermType::Net15,
        updatedAt: Utils\Utils::parseDateTime('2025-12-13T03:35:13.826Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->paymentterm->createAccountingPaymentterm(
    request: $request
);

if ($response->accountingPaymentterm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateAccountingPaymenttermRequest](../../Models/Operations/CreateAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateAccountingPaymenttermResponse](../../Models/Operations/CreateAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingPaymentterm

Retrieve a paymentterm

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingPaymentterm" method="get" path="/accounting/{connection_id}/paymentterm/{id}" -->
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

$request = new Operations\GetAccountingPaymenttermRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->paymentterm->getAccountingPaymentterm(
    request: $request
);

if ($response->accountingPaymentterm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingPaymenttermRequest](../../Models/Operations/GetAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingPaymenttermResponse](../../Models/Operations/GetAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingPaymentterms

List all paymentterms

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingPaymentterms" method="get" path="/accounting/{connection_id}/paymentterm" -->
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

$request = new Operations\ListAccountingPaymenttermsRequest(
    connectionId: '<id>',
);

$response = $sdk->paymentterm->listAccountingPaymentterms(
    request: $request
);

if ($response->accountingPaymentterms !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingPaymenttermsRequest](../../Models/Operations/ListAccountingPaymenttermsRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingPaymenttermsResponse](../../Models/Operations/ListAccountingPaymenttermsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingPaymentterm

Update a paymentterm

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingPaymentterm" method="patch" path="/accounting/{connection_id}/paymentterm/{id}" example="accounting_paymentterm" -->
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

$request = new Operations\PatchAccountingPaymenttermRequest(
    accountingPaymentterm: new Shared\AccountingPaymentterm(
        category: Shared\Category::Standard,
        createdAt: Utils\Utils::parseDateTime('2021-08-22T22:42:42.265Z'),
        dayOfMonthDue: 4,
        description: 'Cogito pecco eos cultura.',
        discountDayOfMonth: 13,
        discountDays: 4,
        discountPercent: 5,
        dueDays: 57,
        dueNextMonthDays: 9,
        id: '021925b5-ac37-4ddf-840e-8b840397a457',
        isActive: false,
        metadata: [],
        name: 'Net 30',
        type: Shared\AccountingPaymenttermType::Net15,
        updatedAt: Utils\Utils::parseDateTime('2025-12-13T03:35:13.841Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->paymentterm->patchAccountingPaymentterm(
    request: $request
);

if ($response->accountingPaymentterm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchAccountingPaymenttermRequest](../../Models/Operations/PatchAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchAccountingPaymenttermResponse](../../Models/Operations/PatchAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingPaymentterm

Remove a paymentterm

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingPaymentterm" method="delete" path="/accounting/{connection_id}/paymentterm/{id}" -->
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

$request = new Operations\RemoveAccountingPaymenttermRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->paymentterm->removeAccountingPaymentterm(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveAccountingPaymenttermRequest](../../Models/Operations/RemoveAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveAccountingPaymenttermResponse](../../Models/Operations/RemoveAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingPaymentterm

Update a paymentterm

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingPaymentterm" method="put" path="/accounting/{connection_id}/paymentterm/{id}" example="accounting_paymentterm" -->
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

$request = new Operations\UpdateAccountingPaymenttermRequest(
    accountingPaymentterm: new Shared\AccountingPaymentterm(
        category: Shared\Category::Standard,
        createdAt: Utils\Utils::parseDateTime('2021-08-22T22:42:42.265Z'),
        dayOfMonthDue: 4,
        description: 'Cogito pecco eos cultura.',
        discountDayOfMonth: 13,
        discountDays: 4,
        discountPercent: 5,
        dueDays: 57,
        dueNextMonthDays: 9,
        id: '021925b5-ac37-4ddf-840e-8b840397a457',
        isActive: false,
        metadata: [],
        name: 'Net 30',
        type: Shared\AccountingPaymenttermType::Net15,
        updatedAt: Utils\Utils::parseDateTime('2025-12-13T03:35:13.841Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->paymentterm->updateAccountingPaymentterm(
    request: $request
);

if ($response->accountingPaymentterm !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateAccountingPaymenttermRequest](../../Models/Operations/UpdateAccountingPaymenttermRequest.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateAccountingPaymenttermResponse](../../Models/Operations/UpdateAccountingPaymenttermResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |