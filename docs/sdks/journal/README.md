# Journal

## Overview

### Available Operations

* [createAccountingJournal](#createaccountingjournal) - Create a journal
* [getAccountingJournal](#getaccountingjournal) - Retrieve a journal
* [listAccountingJournals](#listaccountingjournals) - List all journals
* [patchAccountingJournal](#patchaccountingjournal) - Update a journal
* [removeAccountingJournal](#removeaccountingjournal) - Remove a journal
* [updateAccountingJournal](#updateaccountingjournal) - Update a journal

## createAccountingJournal

Creates a AccountingJournal. Provide the unified AccountingJournal fields in the request body; they are mapped to the provider's API. Returns the created AccountingJournal.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingJournal" method="post" path="/accounting/{connection_id}/journal" example="accounting_journal" -->
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

$request = new Operations\CreateAccountingJournalRequest(
    accountingJournal: new Shared\AccountingJournal(
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-02-20T15:14:55.881Z'),
        currency: 'CAD',
        description: 'Cilicium minima calco constans adipisci.',
        id: '9abd1632-a53f-4a7f-ae9d-cf19127cf0cb',
        isInclusiveOfTax: true,
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2023-11-07T13:12:51.054Z'),
        reference: 'JE-78884',
        source: 'crustulum',
        status: Shared\AccountingJournalStatus::Void,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2022-01-11T09:13:52.357Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->journal->createAccountingJournal(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingJournalRequest](../../Models/Operations/CreateAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\CreateAccountingJournalResponse](../../Models/Operations/CreateAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingJournal

Retrieves a single AccountingJournal by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingJournal" method="get" path="/accounting/{connection_id}/journal/{id}" -->
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

$request = new Operations\GetAccountingJournalRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->journal->getAccountingJournal(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingJournalRequest](../../Models/Operations/GetAccountingJournalRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\GetAccountingJournalResponse](../../Models/Operations/GetAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingJournals

Returns a list of AccountingJournals. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingJournals" method="get" path="/accounting/{connection_id}/journal" -->
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

$request = new Operations\ListAccountingJournalsRequest(
    connectionId: '<id>',
);

$response = $sdk->journal->listAccountingJournals(
    request: $request
);

if ($response->accountingJournals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingJournalsRequest](../../Models/Operations/ListAccountingJournalsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\ListAccountingJournalsResponse](../../Models/Operations/ListAccountingJournalsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingJournal

Updates the AccountingJournal identified by `id`. Provide the unified AccountingJournal fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingJournal" method="patch" path="/accounting/{connection_id}/journal/{id}" example="accounting_journal" -->
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

$request = new Operations\PatchAccountingJournalRequest(
    accountingJournal: new Shared\AccountingJournal(
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-02-20T15:14:55.881Z'),
        currency: 'CAD',
        description: 'Cilicium minima calco constans adipisci.',
        id: '3eaf5dbc-994d-405f-9fb5-dd25c1b1b0e1',
        isInclusiveOfTax: true,
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2023-11-07T13:12:51.071Z'),
        reference: 'JE-78884',
        source: 'crustulum',
        status: Shared\AccountingJournalStatus::Void,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2022-01-11T09:13:52.366Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->journal->patchAccountingJournal(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingJournalRequest](../../Models/Operations/PatchAccountingJournalRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |

### Response

**[?Operations\PatchAccountingJournalResponse](../../Models/Operations/PatchAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingJournal

Deletes the AccountingJournal identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingJournal" method="delete" path="/accounting/{connection_id}/journal/{id}" -->
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

$request = new Operations\RemoveAccountingJournalRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->journal->removeAccountingJournal(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingJournalRequest](../../Models/Operations/RemoveAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\RemoveAccountingJournalResponse](../../Models/Operations/RemoveAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingJournal

Updates the AccountingJournal identified by `id`. Provide the unified AccountingJournal fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingJournal" method="put" path="/accounting/{connection_id}/journal/{id}" example="accounting_journal" -->
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

$request = new Operations\UpdateAccountingJournalRequest(
    accountingJournal: new Shared\AccountingJournal(
        attachments: [],
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-02-20T15:14:55.881Z'),
        currency: 'CAD',
        description: 'Cilicium minima calco constans adipisci.',
        id: '3eaf5dbc-994d-405f-9fb5-dd25c1b1b0e1',
        isInclusiveOfTax: true,
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2023-11-07T13:12:51.071Z'),
        reference: 'JE-78884',
        source: 'crustulum',
        status: Shared\AccountingJournalStatus::Void,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2022-01-11T09:13:52.366Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->journal->updateAccountingJournal(
    request: $request
);

if ($response->accountingJournal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingJournalRequest](../../Models/Operations/UpdateAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\UpdateAccountingJournalResponse](../../Models/Operations/UpdateAccountingJournalResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |