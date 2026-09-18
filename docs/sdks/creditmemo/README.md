# Creditmemo

## Overview

### Available Operations

* [createAccountingCreditmemo](#createaccountingcreditmemo) - Create a creditmemo
* [getAccountingCreditmemo](#getaccountingcreditmemo) - Retrieve a creditmemo
* [listAccountingCreditmemoes](#listaccountingcreditmemoes) - List all creditmemoes
* [patchAccountingCreditmemo](#patchaccountingcreditmemo) - Update a creditmemo
* [removeAccountingCreditmemo](#removeaccountingcreditmemo) - Remove a creditmemo
* [updateAccountingCreditmemo](#updateaccountingcreditmemo) - Update a creditmemo

## createAccountingCreditmemo

Create a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingCreditmemo" method="post" path="/accounting/{connection_id}/creditmemo" example="accounting_creditmemo" -->
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

$request = new Operations\CreateAccountingCreditmemoRequest(
    accountingCreditmemo: new Shared\AccountingCreditmemo(
        applications: [],
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://enlightened-chairperson.com/',
                id: 'a2e78277-a327-461a-bdfc-588c1e4cc0ce',
                mimeType: 'complectus',
                name: 'thesis',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'ulterius',
        currency: 'MKD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2023-10-18T04:35:00.543Z'),
        id: 'd9d43cc4-e6f7-4ef3-8000-d90df9f449e5',
        lineitems: [],
        metadata: [],
        notes: 'Dedecor amo adfero torqueo quas.',
        paymentCollectionMethod: Shared\AccountingCreditmemoPaymentCollectionMethod::ChargeAutomatically,
        postedAt: Utils\Utils::parseDateTime('2025-11-15T11:02:17.288Z'),
        refundAmount: 0,
        refundReason: 'Virgo inflammatio quibusdam aestivus magnam.',
        refundedAt: Utils\Utils::parseDateTime('2023-10-23T00:35:36.814Z'),
        send: false,
        status: Shared\AccountingCreditmemoStatus::Paid,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2024-11-15T13:32:18.737Z'),
        url: 'https://lighthearted-bandwidth.net/',
    ),
    connectionId: '<id>',
);

$response = $sdk->creditmemo->createAccountingCreditmemo(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateAccountingCreditmemoRequest](../../Models/Operations/CreateAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateAccountingCreditmemoResponse](../../Models/Operations/CreateAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingCreditmemo

Retrieve a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingCreditmemo" method="get" path="/accounting/{connection_id}/creditmemo/{id}" -->
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

$request = new Operations\GetAccountingCreditmemoRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creditmemo->getAccountingCreditmemo(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetAccountingCreditmemoRequest](../../Models/Operations/GetAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetAccountingCreditmemoResponse](../../Models/Operations/GetAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingCreditmemoes

List all creditmemoes

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingCreditmemoes" method="get" path="/accounting/{connection_id}/creditmemo" -->
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

$request = new Operations\ListAccountingCreditmemoesRequest(
    connectionId: '<id>',
);

$response = $sdk->creditmemo->listAccountingCreditmemoes(
    request: $request
);

if ($response->accountingCreditmemoes !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\ListAccountingCreditmemoesRequest](../../Models/Operations/ListAccountingCreditmemoesRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\ListAccountingCreditmemoesResponse](../../Models/Operations/ListAccountingCreditmemoesResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingCreditmemo

Update a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingCreditmemo" method="patch" path="/accounting/{connection_id}/creditmemo/{id}" example="accounting_creditmemo" -->
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

$request = new Operations\PatchAccountingCreditmemoRequest(
    accountingCreditmemo: new Shared\AccountingCreditmemo(
        applications: [],
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://enlightened-chairperson.com/',
                id: '59c8a1c4-da42-4783-a812-64dcb296cd11',
                mimeType: 'complectus',
                name: 'thesis',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'ulterius',
        currency: 'MKD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2023-10-18T04:35:00.543Z'),
        id: '9d39b333-dc7c-4257-9d31-6224e3cf763f',
        lineitems: [],
        metadata: [],
        notes: 'Dedecor amo adfero torqueo quas.',
        paymentCollectionMethod: Shared\AccountingCreditmemoPaymentCollectionMethod::ChargeAutomatically,
        postedAt: Utils\Utils::parseDateTime('2025-11-15T11:02:17.323Z'),
        refundAmount: 0,
        refundReason: 'Virgo inflammatio quibusdam aestivus magnam.',
        refundedAt: Utils\Utils::parseDateTime('2023-10-23T00:35:36.814Z'),
        send: false,
        status: Shared\AccountingCreditmemoStatus::Paid,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2024-11-15T13:32:18.756Z'),
        url: 'https://lighthearted-bandwidth.net/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creditmemo->patchAccountingCreditmemo(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchAccountingCreditmemoRequest](../../Models/Operations/PatchAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchAccountingCreditmemoResponse](../../Models/Operations/PatchAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingCreditmemo

Remove a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingCreditmemo" method="delete" path="/accounting/{connection_id}/creditmemo/{id}" -->
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

$request = new Operations\RemoveAccountingCreditmemoRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creditmemo->removeAccountingCreditmemo(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveAccountingCreditmemoRequest](../../Models/Operations/RemoveAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveAccountingCreditmemoResponse](../../Models/Operations/RemoveAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingCreditmemo

Update a creditmemo

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingCreditmemo" method="put" path="/accounting/{connection_id}/creditmemo/{id}" example="accounting_creditmemo" -->
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

$request = new Operations\UpdateAccountingCreditmemoRequest(
    accountingCreditmemo: new Shared\AccountingCreditmemo(
        applications: [],
        attachments: [
            new Shared\AccountingAttachment(
                downloadUrl: 'https://enlightened-chairperson.com/',
                id: '59c8a1c4-da42-4783-a812-64dcb296cd11',
                mimeType: 'complectus',
                name: 'thesis',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'ulterius',
        currency: 'MKD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2023-10-18T04:35:00.543Z'),
        id: '9d39b333-dc7c-4257-9d31-6224e3cf763f',
        lineitems: [],
        metadata: [],
        notes: 'Dedecor amo adfero torqueo quas.',
        paymentCollectionMethod: Shared\AccountingCreditmemoPaymentCollectionMethod::ChargeAutomatically,
        postedAt: Utils\Utils::parseDateTime('2025-11-15T11:02:17.323Z'),
        refundAmount: 0,
        refundReason: 'Virgo inflammatio quibusdam aestivus magnam.',
        refundedAt: Utils\Utils::parseDateTime('2023-10-23T00:35:36.814Z'),
        send: false,
        status: Shared\AccountingCreditmemoStatus::Paid,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2024-11-15T13:32:18.756Z'),
        url: 'https://lighthearted-bandwidth.net/',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->creditmemo->updateAccountingCreditmemo(
    request: $request
);

if ($response->accountingCreditmemo !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateAccountingCreditmemoRequest](../../Models/Operations/UpdateAccountingCreditmemoRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateAccountingCreditmemoResponse](../../Models/Operations/UpdateAccountingCreditmemoResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |