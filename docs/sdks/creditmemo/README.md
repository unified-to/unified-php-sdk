# Creditmemo

## Overview

### Available Operations

* [createAccountingCreditmemo2](#createaccountingcreditmemo2) - Create a creditmemo
* [getAccountingCreditmemo2](#getaccountingcreditmemo2) - Retrieve a creditmemo
* [listAccountingCreditmemoes2](#listaccountingcreditmemoes2) - List all creditmemoes
* [patchAccountingCreditmemo2](#patchaccountingcreditmemo2) - Update a creditmemo
* [removeAccountingCreditmemo2](#removeaccountingcreditmemo2) - Remove a creditmemo
* [updateAccountingCreditmemo2](#updateaccountingcreditmemo2) - Update a creditmemo

## createAccountingCreditmemo2

Create a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingCreditmemo2" method="post" path="/accounting/{connection_id}/creditmemo" -->
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

$request = new Operations\CreateAccountingCreditmemo2Request(
    accountingCreditmemo: new Shared\AccountingCreditmemo(),
    connectionId: '<id>',
);

$response = $sdk->creditmemo->createAccountingCreditmemo2(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateAccountingCreditmemo2Request](../../Models/Operations/CreateAccountingCreditmemo2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateAccountingCreditmemo2Response](../../Models/Operations/CreateAccountingCreditmemo2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingCreditmemo2

Retrieve a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingCreditmemo2" method="get" path="/accounting/{connection_id}/creditmemo/{id}" -->
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

$request = new Operations\GetAccountingCreditmemo2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creditmemo->getAccountingCreditmemo2(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingCreditmemo2Request](../../Models/Operations/GetAccountingCreditmemo2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingCreditmemo2Response](../../Models/Operations/GetAccountingCreditmemo2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingCreditmemoes2

List all creditmemoes

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingCreditmemoes2" method="get" path="/accounting/{connection_id}/creditmemo" -->
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

$request = new Operations\ListAccountingCreditmemoes2Request(
    connectionId: '<id>',
);

$response = $sdk->creditmemo->listAccountingCreditmemoes2(
    request: $request
);

if ($response->accountingCreditmemoes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\ListAccountingCreditmemoes2Request](../../Models/Operations/ListAccountingCreditmemoes2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\ListAccountingCreditmemoes2Response](../../Models/Operations/ListAccountingCreditmemoes2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingCreditmemo2

Update a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingCreditmemo2" method="patch" path="/accounting/{connection_id}/creditmemo/{id}" -->
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

$request = new Operations\PatchAccountingCreditmemo2Request(
    accountingCreditmemo: new Shared\AccountingCreditmemo(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creditmemo->patchAccountingCreditmemo2(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchAccountingCreditmemo2Request](../../Models/Operations/PatchAccountingCreditmemo2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchAccountingCreditmemo2Response](../../Models/Operations/PatchAccountingCreditmemo2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingCreditmemo2

Remove a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingCreditmemo2" method="delete" path="/accounting/{connection_id}/creditmemo/{id}" -->
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

$request = new Operations\RemoveAccountingCreditmemo2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creditmemo->removeAccountingCreditmemo2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveAccountingCreditmemo2Request](../../Models/Operations/RemoveAccountingCreditmemo2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveAccountingCreditmemo2Response](../../Models/Operations/RemoveAccountingCreditmemo2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingCreditmemo2

Update a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingCreditmemo2" method="put" path="/accounting/{connection_id}/creditmemo/{id}" -->
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

$request = new Operations\UpdateAccountingCreditmemo2Request(
    accountingCreditmemo: new Shared\AccountingCreditmemo(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creditmemo->updateAccountingCreditmemo2(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateAccountingCreditmemo2Request](../../Models/Operations/UpdateAccountingCreditmemo2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateAccountingCreditmemo2Response](../../Models/Operations/UpdateAccountingCreditmemo2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |