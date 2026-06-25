# Order

## Overview

### Available Operations

* [createAccountingOrder2](#createaccountingorder2) - Create an order
* [getAccountingOrder2](#getaccountingorder2) - Retrieve an order
* [listAccountingOrders2](#listaccountingorders2) - List all orders
* [patchAccountingOrder2](#patchaccountingorder2) - Update an order
* [patchAssessmentOrder2](#patchassessmentorder2) - Update an order
* [removeAccountingOrder2](#removeaccountingorder2) - Remove an order
* [updateAccountingOrder2](#updateaccountingorder2) - Update an order
* [updateAssessmentOrder2](#updateassessmentorder2) - Update an order

## createAccountingOrder2

Create an order

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingOrder2" method="post" path="/accounting/{connection_id}/order" -->
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

$request = new Operations\CreateAccountingOrder2Request(
    accountingOrder: new Shared\AccountingOrder(),
    connectionId: '<id>',
);

$response = $sdk->order->createAccountingOrder2(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\CreateAccountingOrder2Request](../../Models/Operations/CreateAccountingOrder2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\CreateAccountingOrder2Response](../../Models/Operations/CreateAccountingOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingOrder2

Retrieve an order

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingOrder2" method="get" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\GetAccountingOrder2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->getAccountingOrder2(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                      | Type                                                                                           | Required                                                                                       | Description                                                                                    |
| ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------- |
| `$request`                                                                                     | [Operations\GetAccountingOrder2Request](../../Models/Operations/GetAccountingOrder2Request.md) | :heavy_check_mark:                                                                             | The request object to use for the request.                                                     |

### Response

**[?Operations\GetAccountingOrder2Response](../../Models/Operations/GetAccountingOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingOrders2

List all orders

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingOrders2" method="get" path="/accounting/{connection_id}/order" -->
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

$request = new Operations\ListAccountingOrders2Request(
    connectionId: '<id>',
);

$response = $sdk->order->listAccountingOrders2(
    request: $request
);

if ($response->accountingOrders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\ListAccountingOrders2Request](../../Models/Operations/ListAccountingOrders2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\ListAccountingOrders2Response](../../Models/Operations/ListAccountingOrders2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingOrder2

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingOrder2" method="patch" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\PatchAccountingOrder2Request(
    accountingOrder: new Shared\AccountingOrder(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->patchAccountingOrder2(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchAccountingOrder2Request](../../Models/Operations/PatchAccountingOrder2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchAccountingOrder2Response](../../Models/Operations/PatchAccountingOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAssessmentOrder2

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAssessmentOrder2" method="patch" path="/assessment/{connection_id}/order/{id}" -->
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

$request = new Operations\PatchAssessmentOrder2Request(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '<id>',
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->patchAssessmentOrder2(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\PatchAssessmentOrder2Request](../../Models/Operations/PatchAssessmentOrder2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\PatchAssessmentOrder2Response](../../Models/Operations/PatchAssessmentOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingOrder2

Remove an order

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingOrder2" method="delete" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\RemoveAccountingOrder2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->removeAccountingOrder2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\RemoveAccountingOrder2Request](../../Models/Operations/RemoveAccountingOrder2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\RemoveAccountingOrder2Response](../../Models/Operations/RemoveAccountingOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingOrder2

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingOrder2" method="put" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\UpdateAccountingOrder2Request(
    accountingOrder: new Shared\AccountingOrder(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->updateAccountingOrder2(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateAccountingOrder2Request](../../Models/Operations/UpdateAccountingOrder2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateAccountingOrder2Response](../../Models/Operations/UpdateAccountingOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAssessmentOrder2

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAssessmentOrder2" method="put" path="/assessment/{connection_id}/order/{id}" -->
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

$request = new Operations\UpdateAssessmentOrder2Request(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '<id>',
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->updateAssessmentOrder2(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\UpdateAssessmentOrder2Request](../../Models/Operations/UpdateAssessmentOrder2Request.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\UpdateAssessmentOrder2Response](../../Models/Operations/UpdateAssessmentOrder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |