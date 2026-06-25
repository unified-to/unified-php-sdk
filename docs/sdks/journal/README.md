# Journal

## Overview

### Available Operations

* [createAccountingJournal2](#createaccountingjournal2) - Create a journal
* [getAccountingJournal2](#getaccountingjournal2) - Retrieve a journal
* [listAccountingJournals2](#listaccountingjournals2) - List all journals
* [patchAccountingJournal2](#patchaccountingjournal2) - Update a journal
* [removeAccountingJournal2](#removeaccountingjournal2) - Remove a journal
* [updateAccountingJournal2](#updateaccountingjournal2) - Update a journal

## createAccountingJournal2

Create a journal

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingJournal2" method="post" path="/accounting/{connection_id}/journal" -->
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

$request = new Operations\CreateAccountingJournal2Request(
    accountingJournal: new Shared\AccountingJournal(),
    connectionId: '<id>',
);

$response = $sdk->journal->createAccountingJournal2(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\CreateAccountingJournal2Request](../../Models/Operations/CreateAccountingJournal2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\CreateAccountingJournal2Response](../../Models/Operations/CreateAccountingJournal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingJournal2

Retrieve a journal

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingJournal2" method="get" path="/accounting/{connection_id}/journal/{id}" -->
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

$request = new Operations\GetAccountingJournal2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->journal->getAccountingJournal2(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\GetAccountingJournal2Request](../../Models/Operations/GetAccountingJournal2Request.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\GetAccountingJournal2Response](../../Models/Operations/GetAccountingJournal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingJournals2

List all journals

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingJournals2" method="get" path="/accounting/{connection_id}/journal" -->
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

$request = new Operations\ListAccountingJournals2Request(
    connectionId: '<id>',
);

$response = $sdk->journal->listAccountingJournals2(
    request: $request
);

if ($response->accountingJournals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\ListAccountingJournals2Request](../../Models/Operations/ListAccountingJournals2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\ListAccountingJournals2Response](../../Models/Operations/ListAccountingJournals2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingJournal2

Update a journal

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingJournal2" method="patch" path="/accounting/{connection_id}/journal/{id}" -->
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

$request = new Operations\PatchAccountingJournal2Request(
    accountingJournal: new Shared\AccountingJournal(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->journal->patchAccountingJournal2(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\PatchAccountingJournal2Request](../../Models/Operations/PatchAccountingJournal2Request.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\PatchAccountingJournal2Response](../../Models/Operations/PatchAccountingJournal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingJournal2

Remove a journal

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingJournal2" method="delete" path="/accounting/{connection_id}/journal/{id}" -->
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

$request = new Operations\RemoveAccountingJournal2Request(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->journal->removeAccountingJournal2(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\RemoveAccountingJournal2Request](../../Models/Operations/RemoveAccountingJournal2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\RemoveAccountingJournal2Response](../../Models/Operations/RemoveAccountingJournal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingJournal2

Update a journal

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingJournal2" method="put" path="/accounting/{connection_id}/journal/{id}" -->
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

$request = new Operations\UpdateAccountingJournal2Request(
    accountingJournal: new Shared\AccountingJournal(),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->journal->updateAccountingJournal2(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                | Type                                                                                                     | Required                                                                                                 | Description                                                                                              |
| -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                               | [Operations\UpdateAccountingJournal2Request](../../Models/Operations/UpdateAccountingJournal2Request.md) | :heavy_check_mark:                                                                                       | The request object to use for the request.                                                               |

### Response

**[?Operations\UpdateAccountingJournal2Response](../../Models/Operations/UpdateAccountingJournal2Response.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |