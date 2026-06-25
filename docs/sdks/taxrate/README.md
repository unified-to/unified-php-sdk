# Taxrate

## Overview

### Available Operations

* [createAccountingTaxrate2](#createaccountingtaxrate2) - Create a taxrate
* [getAccountingTaxrate2](#getaccountingtaxrate2) - Retrieve a taxrate
* [listAccountingTaxrates2](#listaccountingtaxrates2) - List all taxrates
* [patchAccountingTaxrate2](#patchaccountingtaxrate2) - Update a taxrate
* [removeAccountingTaxrate2](#removeaccountingtaxrate2) - Remove a taxrate
* [updateAccountingTaxrate2](#updateaccountingtaxrate2) - Update a taxrate

## createAccountingTaxrate2

Create a taxrate

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingTaxrate2" method="post" path="/accounting/{connection_id}/taxrate" -->
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

$request = new Operations\CreateAccountingTaxrate2Request(
    accountingTaxrate: new Shared\AccountingTaxrate(),
    connectionId: '<id>',
);

$response = $sdk->taxrate->createAccountingTaxrate2(
    request: $request
);

if ($response->accountingTaxrate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAccountingTaxrate2Request](../../Models/Operations/CreateAccountingTaxrate2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAccountingTaxrate2Response](../../Models/Operations/CreateAccountingTaxrate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingTaxrate2

Retrieve a taxrate

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingTaxrate2" method="get" path="/accounting/{connection_id}/taxrate/{id}" -->
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

$request = new Operations\GetAccountingTaxrate2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxrate->getAccountingTaxrate2(
    request: $request
);

if ($response->accountingTaxrate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingTaxrate2Request](../../Models/Operations/GetAccountingTaxrate2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingTaxrate2Response](../../Models/Operations/GetAccountingTaxrate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingTaxrates2

List all taxrates

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingTaxrates2" method="get" path="/accounting/{connection_id}/taxrate" -->
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

$request = new Operations\ListAccountingTaxrates2Request(
    connectionId: '<id>',
);

$response = $sdk->taxrate->listAccountingTaxrates2(
    request: $request
);

if ($response->accountingTaxrates !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAccountingTaxrates2Request](../../Models/Operations/ListAccountingTaxrates2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAccountingTaxrates2Response](../../Models/Operations/ListAccountingTaxrates2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingTaxrate2

Update a taxrate

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingTaxrate2" method="patch" path="/accounting/{connection_id}/taxrate/{id}" -->
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

$request = new Operations\PatchAccountingTaxrate2Request(
    accountingTaxrate: new Shared\AccountingTaxrate(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxrate->patchAccountingTaxrate2(
    request: $request
);

if ($response->accountingTaxrate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAccountingTaxrate2Request](../../Models/Operations/PatchAccountingTaxrate2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAccountingTaxrate2Response](../../Models/Operations/PatchAccountingTaxrate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingTaxrate2

Remove a taxrate

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingTaxrate2" method="delete" path="/accounting/{connection_id}/taxrate/{id}" -->
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

$request = new Operations\RemoveAccountingTaxrate2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxrate->removeAccountingTaxrate2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAccountingTaxrate2Request](../../Models/Operations/RemoveAccountingTaxrate2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAccountingTaxrate2Response](../../Models/Operations/RemoveAccountingTaxrate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingTaxrate2

Update a taxrate

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingTaxrate2" method="put" path="/accounting/{connection_id}/taxrate/{id}" -->
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

$request = new Operations\UpdateAccountingTaxrate2Request(
    accountingTaxrate: new Shared\AccountingTaxrate(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->taxrate->updateAccountingTaxrate2(
    request: $request
);

if ($response->accountingTaxrate !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAccountingTaxrate2Request](../../Models/Operations/UpdateAccountingTaxrate2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAccountingTaxrate2Response](../../Models/Operations/UpdateAccountingTaxrate2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |