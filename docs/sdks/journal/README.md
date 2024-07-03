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
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\CreateAccountingJournalRequest();
    $request->accountingJournal = new Shared\AccountingJournal();
    $request->accountingJournal->createdAt = '<value>';
    $request->accountingJournal->currency = 'North Korean Won';
    $request->accountingJournal->description = 'Polarised heuristic time-frame';
    $request->accountingJournal->id = '<id>';
    $request->accountingJournal->lineitems = [
        new Shared\AccountingJournalLineitem(),
    ];
    $request->accountingJournal->raw = [
        'Profound' => '<value>',
    ];
    $request->accountingJournal->reference = '<value>';
    $request->accountingJournal->taxAmount = 2389.02;
    $request->accountingJournal->taxrateId = '<value>';
    $request->accountingJournal->updatedAt = '<value>';
    $request->connectionId = '<value>';;

    $response = $sdk->journal->createAccountingJournal($request);

    if ($response->accountingJournal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingJournalRequest](../../Models/Operations/CreateAccountingJournalRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingJournalResponse](../../Models/Operations/CreateAccountingJournalResponse.md)**


## getAccountingJournal

Retrieve a journal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\GetAccountingJournalRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->journal->getAccountingJournal($request);

    if ($response->accountingJournal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingJournalRequest](../../Models/Operations/GetAccountingJournalRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingJournalResponse](../../Models/Operations/GetAccountingJournalResponse.md)**


## listAccountingJournals

List all journals

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\ListAccountingJournalsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 3732.99;
    $request->offset = 235.51;
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-02T07:29:24.179Z');;

    $response = $sdk->journal->listAccountingJournals($request);

    if ($response->accountingJournals !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingJournalsRequest](../../Models/Operations/ListAccountingJournalsRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingJournalsResponse](../../Models/Operations/ListAccountingJournalsResponse.md)**


## patchAccountingJournal

Update a journal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\PatchAccountingJournalRequest();
    $request->accountingJournal = new Shared\AccountingJournal();
    $request->accountingJournal->createdAt = '<value>';
    $request->accountingJournal->currency = 'Malaysian Ringgit';
    $request->accountingJournal->description = 'Digitized directional function';
    $request->accountingJournal->id = '<id>';
    $request->accountingJournal->lineitems = [
        new Shared\AccountingJournalLineitem(),
    ];
    $request->accountingJournal->raw = [
        'South' => '<value>',
    ];
    $request->accountingJournal->reference = '<value>';
    $request->accountingJournal->taxAmount = 3075.33;
    $request->accountingJournal->taxrateId = '<value>';
    $request->accountingJournal->updatedAt = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->journal->patchAccountingJournal($request);

    if ($response->accountingJournal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingJournalRequest](../../Models/Operations/PatchAccountingJournalRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingJournalResponse](../../Models/Operations/PatchAccountingJournalResponse.md)**


## removeAccountingJournal

Remove a journal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\RemoveAccountingJournalRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->journal->removeAccountingJournal($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingJournalRequest](../../Models/Operations/RemoveAccountingJournalRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingJournalResponse](../../Models/Operations/RemoveAccountingJournalResponse.md)**


## updateAccountingJournal

Update a journal

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Shared;
use \Unified\Unified_to\Models\Operations;

$security = new Shared\Security();
$security->jwt = '<YOUR_API_KEY_HERE>';

$sdk = Unified_to\UnifiedTo::builder()->setSecurity($security)->build();

try {
        $request = new Operations\UpdateAccountingJournalRequest();
    $request->accountingJournal = new Shared\AccountingJournal();
    $request->accountingJournal->createdAt = '<value>';
    $request->accountingJournal->currency = 'Riel';
    $request->accountingJournal->description = 'Fundamental contextually-based challenge';
    $request->accountingJournal->id = '<id>';
    $request->accountingJournal->lineitems = [
        new Shared\AccountingJournalLineitem(),
    ];
    $request->accountingJournal->raw = [
        'Forward' => '<value>',
    ];
    $request->accountingJournal->reference = '<value>';
    $request->accountingJournal->taxAmount = 5223.16;
    $request->accountingJournal->taxrateId = '<value>';
    $request->accountingJournal->updatedAt = '<value>';
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->journal->updateAccountingJournal($request);

    if ($response->accountingJournal !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingJournalRequest](../../Models/Operations/UpdateAccountingJournalRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingJournalResponse](../../Models/Operations/UpdateAccountingJournalResponse.md)**

