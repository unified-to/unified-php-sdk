# Invoice

## Overview

### Available Operations

* [createAccountingInvoice2](#createaccountinginvoice2) - Create an invoice
* [getAccountingInvoice2](#getaccountinginvoice2) - Retrieve an invoice
* [listAccountingInvoices2](#listaccountinginvoices2) - List all invoices
* [patchAccountingInvoice2](#patchaccountinginvoice2) - Update an invoice
* [removeAccountingInvoice2](#removeaccountinginvoice2) - Remove an invoice
* [updateAccountingInvoice2](#updateaccountinginvoice2) - Update an invoice

## createAccountingInvoice2

Create an invoice

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingInvoice2" method="post" path="/accounting/{connection_id}/invoice" -->
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

$request = new Operations\CreateAccountingInvoice2Request(
    accountingInvoice: new Shared\AccountingInvoice(),
    connectionId: '<id>',
);

$response = $sdk->invoice->createAccountingInvoice2(
    request: $request
);

if ($response->accountingInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAccountingInvoice2Request](../../Models/Operations/CreateAccountingInvoice2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAccountingInvoice2Response](../../Models/Operations/CreateAccountingInvoice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingInvoice2

Retrieve an invoice

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingInvoice2" method="get" path="/accounting/{connection_id}/invoice/{id}" -->
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

$request = new Operations\GetAccountingInvoice2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->invoice->getAccountingInvoice2(
    request: $request
);

if ($response->accountingInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingInvoice2Request](../../Models/Operations/GetAccountingInvoice2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingInvoice2Response](../../Models/Operations/GetAccountingInvoice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingInvoices2

List all invoices

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingInvoices2" method="get" path="/accounting/{connection_id}/invoice" -->
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

$request = new Operations\ListAccountingInvoices2Request(
    connectionId: '<id>',
);

$response = $sdk->invoice->listAccountingInvoices2(
    request: $request
);

if ($response->accountingInvoices !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAccountingInvoices2Request](../../Models/Operations/ListAccountingInvoices2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAccountingInvoices2Response](../../Models/Operations/ListAccountingInvoices2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingInvoice2

Update an invoice

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingInvoice2" method="patch" path="/accounting/{connection_id}/invoice/{id}" -->
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

$request = new Operations\PatchAccountingInvoice2Request(
    accountingInvoice: new Shared\AccountingInvoice(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->invoice->patchAccountingInvoice2(
    request: $request
);

if ($response->accountingInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAccountingInvoice2Request](../../Models/Operations/PatchAccountingInvoice2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAccountingInvoice2Response](../../Models/Operations/PatchAccountingInvoice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingInvoice2

Remove an invoice

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingInvoice2" method="delete" path="/accounting/{connection_id}/invoice/{id}" -->
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

$request = new Operations\RemoveAccountingInvoice2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->invoice->removeAccountingInvoice2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAccountingInvoice2Request](../../Models/Operations/RemoveAccountingInvoice2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAccountingInvoice2Response](../../Models/Operations/RemoveAccountingInvoice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingInvoice2

Update an invoice

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingInvoice2" method="put" path="/accounting/{connection_id}/invoice/{id}" -->
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

$request = new Operations\UpdateAccountingInvoice2Request(
    accountingInvoice: new Shared\AccountingInvoice(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->invoice->updateAccountingInvoice2(
    request: $request
);

if ($response->accountingInvoice !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAccountingInvoice2Request](../../Models/Operations/UpdateAccountingInvoice2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAccountingInvoice2Response](../../Models/Operations/UpdateAccountingInvoice2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |