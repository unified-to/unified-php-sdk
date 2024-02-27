# Invoice


### Available Operations

* [createAccountingInvoice](#createaccountinginvoice) - Create a invoice
* [getAccountingInvoice](#getaccountinginvoice) - Retrieve a invoice
* [listAccountingInvoices](#listaccountinginvoices) - List all invoices
* [patchAccountingInvoice](#patchaccountinginvoice) - Update a invoice
* [removeAccountingInvoice](#removeaccountinginvoice) - Remove a invoice
* [updateAccountingInvoice](#updateaccountinginvoice) - Update a invoice

## createAccountingInvoice

Create a invoice

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
        $request = new Operations\CreateAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 6736.06;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-27T09:14:42.959Z');
    $request->accountingInvoice->contactId = '<value>';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-05T18:32:52.109Z');
    $request->accountingInvoice->currency = 'Uzbekistan Sum';
    $request->accountingInvoice->discountAmount = 259.66;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-30T15:54:59.455Z');
    $request->accountingInvoice->id = '<id>';
    $request->accountingInvoice->invoiceNumber = '<value>';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = '<value>';
    $request->accountingInvoice->paidAmount = 7142.37;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-09-16T02:12:20.862Z');
    $request->accountingInvoice->raw = [
        'Central' => '<value>',
    ];
    $request->accountingInvoice->refundAmount = 1578.89;
    $request->accountingInvoice->refundReason = '<value>';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-27T04:22:20.182Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Authorized;
    $request->accountingInvoice->taxAmount = 6864;
    $request->accountingInvoice->totalAmount = 6873.46;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-19T22:49:02.835Z');
    $request->connectionId = '<value>';;

    $response = $sdk->invoice->createAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceRequest](../../Models/Operations/CreateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateAccountingInvoiceResponse](../../Models/Operations/CreateAccountingInvoiceResponse.md)**


## getAccountingInvoice

Retrieve a invoice

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
        $request = new Operations\GetAccountingInvoiceRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $response = $sdk->invoice->getAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                   | Type                                                                                                                        | Required                                                                                                                    | Description                                                                                                                 |
| --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                  | [\Unified\Unified_to\Models\Operations\GetAccountingInvoiceRequest](../../Models/Operations/GetAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                          | The request object to use for the request.                                                                                  |


### Response

**[?\Unified\Unified_to\Models\Operations\GetAccountingInvoiceResponse](../../Models/Operations/GetAccountingInvoiceResponse.md)**


## listAccountingInvoices

List all invoices

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
        $request = new Operations\ListAccountingInvoicesRequest();
    $request->connectionId = '<value>';
    $request->contactId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 6788.11;
    $request->offset = 5122.49;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-05-23T19:02:52.454Z');;

    $response = $sdk->invoice->listAccountingInvoices($request);

    if ($response->accountingInvoices !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\ListAccountingInvoicesRequest](../../Models/Operations/ListAccountingInvoicesRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\ListAccountingInvoicesResponse](../../Models/Operations/ListAccountingInvoicesResponse.md)**


## patchAccountingInvoice

Update a invoice

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
        $request = new Operations\PatchAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 7374.1;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-18T11:25:21.140Z');
    $request->accountingInvoice->contactId = '<value>';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-14T05:39:15.854Z');
    $request->accountingInvoice->currency = 'Gold';
    $request->accountingInvoice->discountAmount = 9127.96;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-07-05T05:55:55.560Z');
    $request->accountingInvoice->id = '<id>';
    $request->accountingInvoice->invoiceNumber = '<value>';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = '<value>';
    $request->accountingInvoice->paidAmount = 7810.81;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-03-02T21:47:54.080Z');
    $request->accountingInvoice->raw = [
        'Northwest' => '<value>',
    ];
    $request->accountingInvoice->refundAmount = 6443.77;
    $request->accountingInvoice->refundReason = '<value>';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-21T01:13:52.344Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Draft;
    $request->accountingInvoice->taxAmount = 1140.08;
    $request->accountingInvoice->totalAmount = 4543.48;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-02-02T12:10:13.037Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->invoice->patchAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                       | Type                                                                                                                            | Required                                                                                                                        | Description                                                                                                                     |
| ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                      | [\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceRequest](../../Models/Operations/PatchAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                              | The request object to use for the request.                                                                                      |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchAccountingInvoiceResponse](../../Models/Operations/PatchAccountingInvoiceResponse.md)**


## removeAccountingInvoice

Remove a invoice

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
        $request = new Operations\RemoveAccountingInvoiceRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->invoice->removeAccountingInvoice($request);

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
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceRequest](../../Models/Operations/RemoveAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveAccountingInvoiceResponse](../../Models/Operations/RemoveAccountingInvoiceResponse.md)**


## updateAccountingInvoice

Update a invoice

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
        $request = new Operations\UpdateAccountingInvoiceRequest();
    $request->accountingInvoice = new Shared\AccountingInvoice();
    $request->accountingInvoice->balanceAmount = 6974.28;
    $request->accountingInvoice->cancelledAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-06-03T06:46:26.704Z');
    $request->accountingInvoice->contactId = '<value>';
    $request->accountingInvoice->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-07-10T23:29:44.275Z');
    $request->accountingInvoice->currency = 'Forint';
    $request->accountingInvoice->discountAmount = 2579.09;
    $request->accountingInvoice->dueAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-12-25T16:24:30.030Z');
    $request->accountingInvoice->id = '<id>';
    $request->accountingInvoice->invoiceNumber = '<value>';
    $request->accountingInvoice->lineitems = [
        new Shared\AccountingLineitem(),
    ];
    $request->accountingInvoice->notes = '<value>';
    $request->accountingInvoice->paidAmount = 3682.14;
    $request->accountingInvoice->paidAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-09-27T09:53:44.172Z');
    $request->accountingInvoice->raw = [
        'intuitive' => '<value>',
    ];
    $request->accountingInvoice->refundAmount = 3314.72;
    $request->accountingInvoice->refundReason = '<value>';
    $request->accountingInvoice->refundedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-04-05T20:13:33.419Z');
    $request->accountingInvoice->status = Shared\AccountingInvoiceStatus::Authorized;
    $request->accountingInvoice->taxAmount = 3824.24;
    $request->accountingInvoice->totalAmount = 2939.97;
    $request->accountingInvoice->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-08-13T18:41:11.569Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $response = $sdk->invoice->updateAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                         | Type                                                                                                                              | Required                                                                                                                          | Description                                                                                                                       |
| --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- | --------------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                        | [\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceRequest](../../Models/Operations/UpdateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                                                | The request object to use for the request.                                                                                        |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateAccountingInvoiceResponse](../../Models/Operations/UpdateAccountingInvoiceResponse.md)**

