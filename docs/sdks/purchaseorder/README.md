# Purchaseorder

## Overview

### Available Operations

* [createAccountingPurchaseorder2](#createaccountingpurchaseorder2) - Create a purchaseorder
* [getAccountingPurchaseorder2](#getaccountingpurchaseorder2) - Retrieve a purchaseorder
* [listAccountingPurchaseorders2](#listaccountingpurchaseorders2) - List all purchaseorders
* [patchAccountingPurchaseorder2](#patchaccountingpurchaseorder2) - Update a purchaseorder
* [removeAccountingPurchaseorder2](#removeaccountingpurchaseorder2) - Remove a purchaseorder
* [updateAccountingPurchaseorder2](#updateaccountingpurchaseorder2) - Update a purchaseorder

## createAccountingPurchaseorder2

Create a purchaseorder

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingPurchaseorder2" method="post" path="/accounting/{connection_id}/purchaseorder" -->
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

$request = new Operations\CreateAccountingPurchaseorder2Request(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(),
    connectionId: '<id>',
);

$response = $sdk->purchaseorder->createAccountingPurchaseorder2(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\CreateAccountingPurchaseorder2Request](../../Models/Operations/CreateAccountingPurchaseorder2Request.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\CreateAccountingPurchaseorder2Response](../../Models/Operations/CreateAccountingPurchaseorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingPurchaseorder2

Retrieve a purchaseorder

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingPurchaseorder2" method="get" path="/accounting/{connection_id}/purchaseorder/{id}" -->
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

$request = new Operations\GetAccountingPurchaseorder2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchaseorder->getAccountingPurchaseorder2(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\GetAccountingPurchaseorder2Request](../../Models/Operations/GetAccountingPurchaseorder2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\GetAccountingPurchaseorder2Response](../../Models/Operations/GetAccountingPurchaseorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingPurchaseorders2

List all purchaseorders

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingPurchaseorders2" method="get" path="/accounting/{connection_id}/purchaseorder" -->
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

$request = new Operations\ListAccountingPurchaseorders2Request(
    connectionId: '<id>',
);

$response = $sdk->purchaseorder->listAccountingPurchaseorders2(
    request: $request
);

if ($response->accountingPurchaseorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\ListAccountingPurchaseorders2Request](../../Models/Operations/ListAccountingPurchaseorders2Request.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\ListAccountingPurchaseorders2Response](../../Models/Operations/ListAccountingPurchaseorders2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingPurchaseorder2

Update a purchaseorder

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingPurchaseorder2" method="patch" path="/accounting/{connection_id}/purchaseorder/{id}" -->
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

$request = new Operations\PatchAccountingPurchaseorder2Request(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchaseorder->patchAccountingPurchaseorder2(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\PatchAccountingPurchaseorder2Request](../../Models/Operations/PatchAccountingPurchaseorder2Request.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\PatchAccountingPurchaseorder2Response](../../Models/Operations/PatchAccountingPurchaseorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingPurchaseorder2

Remove a purchaseorder

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingPurchaseorder2" method="delete" path="/accounting/{connection_id}/purchaseorder/{id}" -->
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

$request = new Operations\RemoveAccountingPurchaseorder2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchaseorder->removeAccountingPurchaseorder2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\RemoveAccountingPurchaseorder2Request](../../Models/Operations/RemoveAccountingPurchaseorder2Request.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\RemoveAccountingPurchaseorder2Response](../../Models/Operations/RemoveAccountingPurchaseorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingPurchaseorder2

Update a purchaseorder

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingPurchaseorder2" method="put" path="/accounting/{connection_id}/purchaseorder/{id}" -->
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

$request = new Operations\UpdateAccountingPurchaseorder2Request(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchaseorder->updateAccountingPurchaseorder2(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                            | Type                                                                                                                 | Required                                                                                                             | Description                                                                                                          |
| -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                           | [Operations\UpdateAccountingPurchaseorder2Request](../../Models/Operations/UpdateAccountingPurchaseorder2Request.md) | :heavy_check_mark:                                                                                                   | The request object to use for the request.                                                                           |

### Response

**[?Operations\UpdateAccountingPurchaseorder2Response](../../Models/Operations/UpdateAccountingPurchaseorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |