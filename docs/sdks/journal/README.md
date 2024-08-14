# Journal


### Available Operations

* [createAccountingJournal](#createaccountingjournal) - Create a journal
* [getAccountingJournal](#getaccountingjournal) - Retrieve a journal
* [listAccountingJournals](#listaccountingjournals) - List all journals
* [patchAccountingJournal](#patchaccountingjournal) - Update a journal
* [removeAccountingJournal](#removeaccountingjournal) - Remove a journal
* [updateAccountingJournal](#updateaccountingjournal) - Update a journal

## createAccountingJournal

Create a journal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\CreateAccountingJournalRequest(
        connectionId: '<value>',
        accountingJournal: new Shared\AccountingJournal(
            createdAt: '<value>',
            currency: 'North Korean Won',
            description: 'Polarised heuristic time-frame',
            id: '<id>',
            lineitems: [
                new Shared\AccountingJournalLineitem,
            ],
            raw: [
                'Profound' => '<value>',
            ],
            reference: '<value>',
            taxAmount: 2389.02,
            taxrateId: '<value>',
            updatedAt: '<value>',
        ),
    );
    $response = $sdk->journal->createAccountingJournal($request);

    if ($response->accountingJournal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingJournalRequest](../../Models/Operations/CreateAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\CreateAccountingJournalResponse](../../Models/Operations/CreateAccountingJournalResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getAccountingJournal

Retrieve a journal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\GetAccountingJournalRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->journal->getAccountingJournal($request);

    if ($response->accountingJournal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingJournalRequest](../../Models/Operations/GetAccountingJournalRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?Operations\GetAccountingJournalResponse](../../Models/Operations/GetAccountingJournalResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listAccountingJournals

List all journals

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;
use Unified\Unified_to\Utils;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\ListAccountingJournalsRequest(
        connectionId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 3732.99,
        offset: 235.51,
        order: '<value>',
        query: '<value>',
        sort: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-08-02T07:29:24.179Z'),
    );
    $response = $sdk->journal->listAccountingJournals($request);

    if ($response->accountingJournals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingJournalsRequest](../../Models/Operations/ListAccountingJournalsRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\ListAccountingJournalsResponse](../../Models/Operations/ListAccountingJournalsResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchAccountingJournal

Update a journal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\PatchAccountingJournalRequest(
        connectionId: '<value>',
        id: '<id>',
        accountingJournal: new Shared\AccountingJournal(
            createdAt: '<value>',
            currency: 'Malaysian Ringgit',
            description: 'Digitized directional function',
            id: '<id>',
            lineitems: [
                new Shared\AccountingJournalLineitem,
            ],
            raw: [
                'South' => '<value>',
            ],
            reference: '<value>',
            taxAmount: 3075.33,
            taxrateId: '<value>',
            updatedAt: '<value>',
        ),
    );
    $response = $sdk->journal->patchAccountingJournal($request);

    if ($response->accountingJournal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingJournalRequest](../../Models/Operations/PatchAccountingJournalRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\PatchAccountingJournalResponse](../../Models/Operations/PatchAccountingJournalResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeAccountingJournal

Remove a journal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\RemoveAccountingJournalRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->journal->removeAccountingJournal($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\RemoveAccountingJournalRequest](../../Models/Operations/RemoveAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\RemoveAccountingJournalResponse](../../Models/Operations/RemoveAccountingJournalResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateAccountingJournal

Update a journal

### Example Usage

```php
declare(strict_types=1);

require 'vendor/autoload.php';

use Unified\Unified_to;
use Unified\Unified_to\Models\Operations;
use Unified\Unified_to\Models\Shared;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
    $request = new Operations\UpdateAccountingJournalRequest(
        connectionId: '<value>',
        id: '<id>',
        accountingJournal: new Shared\AccountingJournal(
            createdAt: '<value>',
            currency: 'Riel',
            description: 'Fundamental contextually-based challenge',
            id: '<id>',
            lineitems: [
                new Shared\AccountingJournalLineitem,
            ],
            raw: [
                'Forward' => '<value>',
            ],
            reference: '<value>',
            taxAmount: 5223.16,
            taxrateId: '<value>',
            updatedAt: '<value>',
        ),
    );
    $response = $sdk->journal->updateAccountingJournal($request);

    if ($response->accountingJournal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```



### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingJournalRequest](../../Models/Operations/UpdateAccountingJournalRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\UpdateAccountingJournalResponse](../../Models/Operations/UpdateAccountingJournalResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
