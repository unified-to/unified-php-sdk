# Invoice


### Available Operations

* [createAccountingInvoice](#createaccountinginvoice) - Create an invoice
* [getAccountingInvoice](#getaccountinginvoice) - Retrieve an invoice
* [listAccountingInvoices](#listaccountinginvoices) - List all invoices
* [patchAccountingInvoice](#patchaccountinginvoice) - Update an invoice
* [removeAccountingInvoice](#removeaccountinginvoice) - Remove an invoice
* [updateAccountingInvoice](#updateaccountinginvoice) - Update an invoice

## createAccountingInvoice

Create an invoice

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
    $request = new Operations\CreateAccountingInvoiceRequest(
        connectionId: '<value>',
        accountingInvoice: new Shared\AccountingInvoice(
            balanceAmount: 6736.06,
            cancelledAt: Utils\Utils::parseDateTime('2022-06-27T09:14:42.959Z'),
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-07-05T18:32:52.109Z'),
            currency: 'Uzbekistan Sum',
            discountAmount: 259.66,
            dueAt: Utils\Utils::parseDateTime('2023-04-30T15:54:59.455Z'),
            id: '<id>',
            invoiceNumber: '<value>',
            lineitems: [
                new Shared\AccountingLineitem,
            ],
            notes: '<value>',
            paidAmount: 7142.37,
            paidAt: Utils\Utils::parseDateTime('2023-09-16T02:12:20.862Z'),
            paymentCollectionMethod: Shared\PaymentCollectionMethod::ChargeAutomatically,
            raw: [
                'hacking' => '<value>',
            ],
            refundAmount: 5503.49,
            refundReason: '<value>',
            refundedAt: Utils\Utils::parseDateTime('2024-06-02T02:10:22.972Z'),
            status: Shared\AccountingInvoiceStatus::PartiallyPaid,
            taxAmount: 6873.46,
            totalAmount: 6276.92,
            updatedAt: Utils\Utils::parseDateTime('2023-05-31T14:28:49.824Z'),
            url: 'http://irresponsible-elite.biz',
        ),
    );
    $response = $sdk->invoice->createAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\CreateAccountingInvoiceRequest](../../Models/Operations/CreateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\CreateAccountingInvoiceResponse](../../Models/Operations/CreateAccountingInvoiceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## getAccountingInvoice

Retrieve an invoice

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
    $request = new Operations\GetAccountingInvoiceRequest(
        connectionId: '<value>',
        id: '<id>',
        fields: [
            '<value>',
        ],
    );
    $response = $sdk->invoice->getAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\GetAccountingInvoiceRequest](../../Models/Operations/GetAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |


### Response

**[?Operations\GetAccountingInvoiceResponse](../../Models/Operations/GetAccountingInvoiceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## listAccountingInvoices

List all invoices

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
    $request = new Operations\ListAccountingInvoicesRequest(
        connectionId: '<value>',
        contactId: '<value>',
        fields: [
            '<value>',
        ],
        limit: 6788.11,
        offset: 5122.49,
        query: '<value>',
        updatedGte: Utils\Utils::parseDateTime('2022-05-23T19:02:52.454Z'),
    );
    $response = $sdk->invoice->listAccountingInvoices($request);

    if ($response->accountingInvoices !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\ListAccountingInvoicesRequest](../../Models/Operations/ListAccountingInvoicesRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\ListAccountingInvoicesResponse](../../Models/Operations/ListAccountingInvoicesResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## patchAccountingInvoice

Update an invoice

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
    $request = new Operations\PatchAccountingInvoiceRequest(
        connectionId: '<value>',
        id: '<id>',
        accountingInvoice: new Shared\AccountingInvoice(
            balanceAmount: 7374.1,
            cancelledAt: Utils\Utils::parseDateTime('2024-12-18T11:25:21.140Z'),
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2023-06-14T05:39:15.854Z'),
            currency: 'Gold',
            discountAmount: 9127.96,
            dueAt: Utils\Utils::parseDateTime('2024-07-05T05:55:55.560Z'),
            id: '<id>',
            invoiceNumber: '<value>',
            lineitems: [
                new Shared\AccountingLineitem,
            ],
            notes: '<value>',
            paidAmount: 7810.81,
            paidAt: Utils\Utils::parseDateTime('2023-03-02T21:47:54.080Z'),
            paymentCollectionMethod: Shared\PaymentCollectionMethod::SendInvoice,
            raw: [
                'Credit' => '<value>',
            ],
            refundAmount: 3028.19,
            refundReason: '<value>',
            refundedAt: Utils\Utils::parseDateTime('2022-05-05T22:52:23.132Z'),
            status: Shared\AccountingInvoiceStatus::Paid,
            taxAmount: 6957.18,
            totalAmount: 2520.91,
            updatedAt: Utils\Utils::parseDateTime('2022-06-16T16:44:58.399Z'),
            url: 'http://tame-jellybeans.biz',
        ),
    );
    $response = $sdk->invoice->patchAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                            | Type                                                                                                 | Required                                                                                             | Description                                                                                          |
| ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------- |
| `$request`                                                                                           | [Operations\PatchAccountingInvoiceRequest](../../Models/Operations/PatchAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                   | The request object to use for the request.                                                           |


### Response

**[?Operations\PatchAccountingInvoiceResponse](../../Models/Operations/PatchAccountingInvoiceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## removeAccountingInvoice

Remove an invoice

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
    $request = new Operations\RemoveAccountingInvoiceRequest(
        connectionId: '<value>',
        id: '<id>',
    );
    $response = $sdk->invoice->removeAccountingInvoice($request);

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
| `$request`                                                                                             | [Operations\RemoveAccountingInvoiceRequest](../../Models/Operations/RemoveAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\RemoveAccountingInvoiceResponse](../../Models/Operations/RemoveAccountingInvoiceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |

## updateAccountingInvoice

Update an invoice

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
    $request = new Operations\UpdateAccountingInvoiceRequest(
        connectionId: '<value>',
        id: '<id>',
        accountingInvoice: new Shared\AccountingInvoice(
            balanceAmount: 6974.28,
            cancelledAt: Utils\Utils::parseDateTime('2023-06-03T06:46:26.704Z'),
            contactId: '<value>',
            createdAt: Utils\Utils::parseDateTime('2022-07-10T23:29:44.275Z'),
            currency: 'Forint',
            discountAmount: 2579.09,
            dueAt: Utils\Utils::parseDateTime('2023-12-25T16:24:30.030Z'),
            id: '<id>',
            invoiceNumber: '<value>',
            lineitems: [
                new Shared\AccountingLineitem,
            ],
            notes: '<value>',
            paidAmount: 3682.14,
            paidAt: Utils\Utils::parseDateTime('2024-09-27T09:53:44.172Z'),
            paymentCollectionMethod: Shared\PaymentCollectionMethod::SendInvoice,
            raw: [
                'Nick' => '<value>',
            ],
            refundAmount: 2939.97,
            refundReason: '<value>',
            refundedAt: Utils\Utils::parseDateTime('2022-08-13T18:41:11.569Z'),
            status: Shared\AccountingInvoiceStatus::Refunded,
            taxAmount: 126.09,
            totalAmount: 8760.89,
            updatedAt: Utils\Utils::parseDateTime('2024-08-21T11:15:42.077Z'),
            url: 'https://long-term-expedition.org',
        ),
    );
    $response = $sdk->invoice->updateAccountingInvoice($request);

    if ($response->accountingInvoice !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\UpdateAccountingInvoiceRequest](../../Models/Operations/UpdateAccountingInvoiceRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |


### Response

**[?Operations\UpdateAccountingInvoiceResponse](../../Models/Operations/UpdateAccountingInvoiceResponse.md)**
### Errors

| Error Object                                  | Status Code                                   | Content Type                                  |
| --------------------------------------------- | --------------------------------------------- | --------------------------------------------- |
| Unified\Unified_to\Models\Errors.SDKException | 4xx-5xx                                       | */*                                           |
