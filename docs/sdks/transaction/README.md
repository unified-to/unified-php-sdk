# Transaction


### Available Operations

* [createAccountingTransaction](#createaccountingtransaction) - Create a transaction
* [getAccountingTransaction](#getaccountingtransaction) - Retrieve a transaction
* [listAccountingTransactions](#listaccountingtransactions) - List all transactions
* [patchAccountingTransaction](#patchaccountingtransaction) - Update a transaction
* [removeAccountingTransaction](#removeaccountingtransaction) - Remove a transaction
* [updateAccountingTransaction](#updateaccountingtransaction) - Update a transaction

## createAccountingTransaction

Create a transaction

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
        $request = new Operations\CreateAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->accountId = '<value>';
    $request->accountingTransaction->contactId = '<value>';
    $request->accountingTransaction->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-29T16:05:10.534Z');
    $request->accountingTransaction->currency = 'Nuevo Sol';
    $request->accountingTransaction->customerMessage = '<value>';
    $request->accountingTransaction->id = '<id>';
    $request->accountingTransaction->memo = '<value>';
    $request->accountingTransaction->paymentMethod = '<value>';
    $request->accountingTransaction->paymentTerms = '<value>';
    $request->accountingTransaction->raw = [
        'Direct' => '<value>',
    ];
    $request->accountingTransaction->reference = '<value>';
    $request->accountingTransaction->referenceObject = [
        'Metal' => '<value>',
    ];
    $request->accountingTransaction->splitAccountId = '<value>';
    $request->accountingTransaction->subTotalAmount = 8276.07;
    $request->accountingTransaction->taxAmount = 4121.55;
    $request->accountingTransaction->totalAmount = 9038.49;
    $request->accountingTransaction->type = '<value>';
    $request->accountingTransaction->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-04T14:31:36.184Z');
    $request->connectionId = '<value>';;

    $response = $sdk->transaction->createAccountingTransaction($request);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateAccountingTransactionRequest](../../Models/Operations/CreateAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingTransactionResponse](../../Models/Operations/CreateAccountingTransactionResponse.md)**


## getAccountingTransaction

Retrieve a transaction

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
        $request = new Operations\GetAccountingTransactionRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->transaction->getAccountingTransaction($request);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                           | Type                                                                                                                                | Required                                                                                                                            | Description                                                                                                                         |
| ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                          | [\Unified\Unified_to\Models\Operations\GetAccountingTransactionRequest](../../Models/Operations/GetAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                  | The request object to use for the request.                                                                                          |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingTransactionResponse](../../Models/Operations/GetAccountingTransactionResponse.md)**


## listAccountingTransactions

List all transactions

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
        $request = new Operations\ListAccountingTransactionsRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 7894.5;
    $request->offset = 4597.84;
    $request->query = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-02T12:20:43.572Z');;

    $response = $sdk->transaction->listAccountingTransactions($request);

    if ($response->accountingTransactions !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\ListAccountingTransactionsRequest](../../Models/Operations/ListAccountingTransactionsRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingTransactionsResponse](../../Models/Operations/ListAccountingTransactionsResponse.md)**


## patchAccountingTransaction

Update a transaction

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
        $request = new Operations\PatchAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->accountId = '<value>';
    $request->accountingTransaction->contactId = '<value>';
    $request->accountingTransaction->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-10T10:50:45.480Z');
    $request->accountingTransaction->currency = 'Tenge';
    $request->accountingTransaction->customerMessage = '<value>';
    $request->accountingTransaction->id = '<id>';
    $request->accountingTransaction->memo = '<value>';
    $request->accountingTransaction->paymentMethod = '<value>';
    $request->accountingTransaction->paymentTerms = '<value>';
    $request->accountingTransaction->raw = [
        'instead' => '<value>',
    ];
    $request->accountingTransaction->reference = '<value>';
    $request->accountingTransaction->referenceObject = [
        'Gambia' => '<value>',
    ];
    $request->accountingTransaction->splitAccountId = '<value>';
    $request->accountingTransaction->subTotalAmount = 259.82;
    $request->accountingTransaction->taxAmount = 8716.58;
    $request->accountingTransaction->totalAmount = 1651.43;
    $request->accountingTransaction->type = '<value>';
    $request->accountingTransaction->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-31T11:09:54.950Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->transaction->patchAccountingTransaction($request);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                               | Type                                                                                                                                    | Required                                                                                                                                | Description                                                                                                                             |
| --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchAccountingTransactionRequest](../../Models/Operations/PatchAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                      | The request object to use for the request.                                                                                              |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingTransactionResponse](../../Models/Operations/PatchAccountingTransactionResponse.md)**


## removeAccountingTransaction

Remove a transaction

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
        $request = new Operations\RemoveAccountingTransactionRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->transaction->removeAccountingTransaction($request);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveAccountingTransactionRequest](../../Models/Operations/RemoveAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingTransactionResponse](../../Models/Operations/RemoveAccountingTransactionResponse.md)**


## updateAccountingTransaction

Update a transaction

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
        $request = new Operations\UpdateAccountingTransactionRequest();
    $request->accountingTransaction = new Shared\AccountingTransaction();
    $request->accountingTransaction->accountId = '<value>';
    $request->accountingTransaction->contactId = '<value>';
    $request->accountingTransaction->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-14T05:18:27.688Z');
    $request->accountingTransaction->currency = 'Mexican Peso';
    $request->accountingTransaction->customerMessage = '<value>';
    $request->accountingTransaction->id = '<id>';
    $request->accountingTransaction->memo = '<value>';
    $request->accountingTransaction->paymentMethod = '<value>';
    $request->accountingTransaction->paymentTerms = '<value>';
    $request->accountingTransaction->raw = [
        'protest' => '<value>',
    ];
    $request->accountingTransaction->reference = '<value>';
    $request->accountingTransaction->referenceObject = [
        'Intelligent' => '<value>',
    ];
    $request->accountingTransaction->splitAccountId = '<value>';
    $request->accountingTransaction->subTotalAmount = 421.84;
    $request->accountingTransaction->taxAmount = 8603.41;
    $request->accountingTransaction->totalAmount = 7972.27;
    $request->accountingTransaction->type = '<value>';
    $request->accountingTransaction->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-19T21:37:54.606Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->transaction->updateAccountingTransaction($request);

    if ($response->accountingTransaction !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                                 | Type                                                                                                                                      | Required                                                                                                                                  | Description                                                                                                                               |
| ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateAccountingTransactionRequest](../../Models/Operations/UpdateAccountingTransactionRequest.md) | :heavy_check_mark:                                                                                                                        | The request object to use for the request.                                                                                                |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingTransactionResponse](../../Models/Operations/UpdateAccountingTransactionResponse.md)**

