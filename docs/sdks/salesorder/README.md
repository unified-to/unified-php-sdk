# Salesorder

## Overview

### Available Operations

* [createAccountingSalesorder2](#createaccountingsalesorder2) - Create a salesorder
* [getAccountingSalesorder2](#getaccountingsalesorder2) - Retrieve a salesorder
* [listAccountingSalesorders2](#listaccountingsalesorders2) - List all salesorders
* [patchAccountingSalesorder2](#patchaccountingsalesorder2) - Update a salesorder
* [removeAccountingSalesorder2](#removeaccountingsalesorder2) - Remove a salesorder
* [updateAccountingSalesorder2](#updateaccountingsalesorder2) - Update a salesorder

## createAccountingSalesorder2

Create a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingSalesorder2" method="post" path="/accounting/{connection_id}/salesorder" -->
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

$request = new Operations\CreateAccountingSalesorder2Request(
    accountingSalesorder: new Shared\AccountingSalesorder(),
    connectionId: '<id>',
);

$response = $sdk->salesorder->createAccountingSalesorder2(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\CreateAccountingSalesorder2Request](../../Models/Operations/CreateAccountingSalesorder2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\CreateAccountingSalesorder2Response](../../Models/Operations/CreateAccountingSalesorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingSalesorder2

Retrieve a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingSalesorder2" method="get" path="/accounting/{connection_id}/salesorder/{id}" -->
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

$request = new Operations\GetAccountingSalesorder2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesorder->getAccountingSalesorder2(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\GetAccountingSalesorder2Request](../../Models/Operations/GetAccountingSalesorder2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\GetAccountingSalesorder2Response](../../Models/Operations/GetAccountingSalesorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingSalesorders2

List all salesorders

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingSalesorders2" method="get" path="/accounting/{connection_id}/salesorder" -->
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

$request = new Operations\ListAccountingSalesorders2Request(
    connectionId: '<id>',
);

$response = $sdk->salesorder->listAccountingSalesorders2(
    request: $request
);

if ($response->accountingSalesorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingSalesorders2Request](../../Models/Operations/ListAccountingSalesorders2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingSalesorders2Response](../../Models/Operations/ListAccountingSalesorders2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingSalesorder2

Update a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingSalesorder2" method="patch" path="/accounting/{connection_id}/salesorder/{id}" -->
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

$request = new Operations\PatchAccountingSalesorder2Request(
    accountingSalesorder: new Shared\AccountingSalesorder(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesorder->patchAccountingSalesorder2(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\PatchAccountingSalesorder2Request](../../Models/Operations/PatchAccountingSalesorder2Request.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\PatchAccountingSalesorder2Response](../../Models/Operations/PatchAccountingSalesorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingSalesorder2

Remove a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingSalesorder2" method="delete" path="/accounting/{connection_id}/salesorder/{id}" -->
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

$request = new Operations\RemoveAccountingSalesorder2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesorder->removeAccountingSalesorder2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\RemoveAccountingSalesorder2Request](../../Models/Operations/RemoveAccountingSalesorder2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\RemoveAccountingSalesorder2Response](../../Models/Operations/RemoveAccountingSalesorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingSalesorder2

Update a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingSalesorder2" method="put" path="/accounting/{connection_id}/salesorder/{id}" -->
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

$request = new Operations\UpdateAccountingSalesorder2Request(
    accountingSalesorder: new Shared\AccountingSalesorder(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesorder->updateAccountingSalesorder2(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                      | Type                                                                                                           | Required                                                                                                       | Description                                                                                                    |
| -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                     | [Operations\UpdateAccountingSalesorder2Request](../../Models/Operations/UpdateAccountingSalesorder2Request.md) | :heavy_check_mark:                                                                                             | The request object to use for the request.                                                                     |

### Response

**[?Operations\UpdateAccountingSalesorder2Response](../../Models/Operations/UpdateAccountingSalesorder2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |