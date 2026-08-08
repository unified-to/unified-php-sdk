# Quote

## Overview

### Available Operations

* [createAccountingQuote](#createaccountingquote) - Create a quote
* [getAccountingQuote](#getaccountingquote) - Retrieve a quote
* [listAccountingQuotes](#listaccountingquotes) - List all quotes
* [patchAccountingQuote](#patchaccountingquote) - Update a quote
* [removeAccountingQuote](#removeaccountingquote) - Remove a quote
* [updateAccountingQuote](#updateaccountingquote) - Update a quote

## createAccountingQuote

Create a quote

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingQuote" method="post" path="/accounting/{connection_id}/quote" -->
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

$request = new Operations\CreateAccountingQuoteRequest(
    accountingQuote: new Shared\AccountingQuote(),
    connectionId: '<id>',
);

$response = $sdk->quote->createAccountingQuote(
    request: $request
);

if ($response->accountingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAccountingQuoteRequest](../../Models/Operations/CreateAccountingQuoteRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAccountingQuoteResponse](../../Models/Operations/CreateAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingQuote

Retrieve a quote

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingQuote" method="get" path="/accounting/{connection_id}/quote/{id}" -->
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

$request = new Operations\GetAccountingQuoteRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->quote->getAccountingQuote(
    request: $request
);

if ($response->accountingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAccountingQuoteRequest](../../Models/Operations/GetAccountingQuoteRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAccountingQuoteResponse](../../Models/Operations/GetAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingQuotes

List all quotes

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingQuotes" method="get" path="/accounting/{connection_id}/quote" -->
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

$request = new Operations\ListAccountingQuotesRequest(
    connectionId: '<id>',
);

$response = $sdk->quote->listAccountingQuotes(
    request: $request
);

if ($response->accountingQuotes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAccountingQuotesRequest](../../Models/Operations/ListAccountingQuotesRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAccountingQuotesResponse](../../Models/Operations/ListAccountingQuotesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingQuote

Update a quote

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingQuote" method="patch" path="/accounting/{connection_id}/quote/{id}" -->
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

$request = new Operations\PatchAccountingQuoteRequest(
    accountingQuote: new Shared\AccountingQuote(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->quote->patchAccountingQuote(
    request: $request
);

if ($response->accountingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAccountingQuoteRequest](../../Models/Operations/PatchAccountingQuoteRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAccountingQuoteResponse](../../Models/Operations/PatchAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingQuote

Remove a quote

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingQuote" method="delete" path="/accounting/{connection_id}/quote/{id}" -->
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

$request = new Operations\RemoveAccountingQuoteRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->quote->removeAccountingQuote(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAccountingQuoteRequest](../../Models/Operations/RemoveAccountingQuoteRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAccountingQuoteResponse](../../Models/Operations/RemoveAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingQuote

Update a quote

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingQuote" method="put" path="/accounting/{connection_id}/quote/{id}" -->
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

$request = new Operations\UpdateAccountingQuoteRequest(
    accountingQuote: new Shared\AccountingQuote(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->quote->updateAccountingQuote(
    request: $request
);

if ($response->accountingQuote !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAccountingQuoteRequest](../../Models/Operations/UpdateAccountingQuoteRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAccountingQuoteResponse](../../Models/Operations/UpdateAccountingQuoteResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |