# Bill

## Overview

### Available Operations

* [createAccountingBill2](#createaccountingbill2) - Create a bill
* [getAccountingBill2](#getaccountingbill2) - Retrieve a bill
* [listAccountingBills2](#listaccountingbills2) - List all bills
* [patchAccountingBill2](#patchaccountingbill2) - Update a bill
* [removeAccountingBill2](#removeaccountingbill2) - Remove a bill
* [updateAccountingBill2](#updateaccountingbill2) - Update a bill

## createAccountingBill2

Create a bill

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingBill2" method="post" path="/accounting/{connection_id}/bill" -->
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

$request = new Operations\CreateAccountingBill2Request(
    accountingBill: new Shared\AccountingBill(),
    connectionId: '<id>',
);

$response = $sdk->bill->createAccountingBill2(
    request: $request
);

if ($response->accountingBill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAccountingBill2Request](../../Models/Operations/CreateAccountingBill2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAccountingBill2Response](../../Models/Operations/CreateAccountingBill2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingBill2

Retrieve a bill

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingBill2" method="get" path="/accounting/{connection_id}/bill/{id}" -->
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

$request = new Operations\GetAccountingBill2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bill->getAccountingBill2(
    request: $request
);

if ($response->accountingBill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAccountingBill2Request](../../Models/Operations/GetAccountingBill2Request.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAccountingBill2Response](../../Models/Operations/GetAccountingBill2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingBills2

List all bills

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingBills2" method="get" path="/accounting/{connection_id}/bill" -->
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

$request = new Operations\ListAccountingBills2Request(
    connectionId: '<id>',
);

$response = $sdk->bill->listAccountingBills2(
    request: $request
);

if ($response->accountingBills !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAccountingBills2Request](../../Models/Operations/ListAccountingBills2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAccountingBills2Response](../../Models/Operations/ListAccountingBills2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingBill2

Update a bill

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingBill2" method="patch" path="/accounting/{connection_id}/bill/{id}" -->
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

$request = new Operations\PatchAccountingBill2Request(
    accountingBill: new Shared\AccountingBill(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bill->patchAccountingBill2(
    request: $request
);

if ($response->accountingBill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAccountingBill2Request](../../Models/Operations/PatchAccountingBill2Request.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAccountingBill2Response](../../Models/Operations/PatchAccountingBill2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingBill2

Remove a bill

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingBill2" method="delete" path="/accounting/{connection_id}/bill/{id}" -->
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

$request = new Operations\RemoveAccountingBill2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bill->removeAccountingBill2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAccountingBill2Request](../../Models/Operations/RemoveAccountingBill2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAccountingBill2Response](../../Models/Operations/RemoveAccountingBill2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingBill2

Update a bill

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingBill2" method="put" path="/accounting/{connection_id}/bill/{id}" -->
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

$request = new Operations\UpdateAccountingBill2Request(
    accountingBill: new Shared\AccountingBill(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->bill->updateAccountingBill2(
    request: $request
);

if ($response->accountingBill !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAccountingBill2Request](../../Models/Operations/UpdateAccountingBill2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAccountingBill2Response](../../Models/Operations/UpdateAccountingBill2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |