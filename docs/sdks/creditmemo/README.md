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
                id: 'eb7d45dd-de09-4b88-af0c-e8d84f099f0b',
                mimeType: 'complectus',
                name: 'thesis',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'ulterius',
        currency: 'MKD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2023-10-18T04:35:00.543Z'),
        id: '8a36aa30-1292-445e-b65c-996c3b7aeef4',
        lineitems: [],
        metadata: [],
        notes: 'Dedecor amo adfero torqueo quas.',
        paymentCollectionMethod: Shared\AccountingCreditmemoPaymentCollectionMethod::ChargeAutomatically,
        postedAt: Utils\Utils::parseDateTime('2025-12-02T00:29:13.787Z'),
        refundAmount: 0,
        refundReason: 'Virgo inflammatio quibusdam aestivus magnam.',
        refundedAt: Utils\Utils::parseDateTime('2023-10-23T00:35:36.814Z'),
        send: false,
        status: Shared\AccountingCreditmemoStatus::Paid,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2024-11-24T10:47:56.110Z'),
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
                id: '930c38a2-f505-493c-8c2d-f1d7f79a1458',
                mimeType: 'complectus',
                name: 'thesis',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'ulterius',
        currency: 'MKD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2023-10-18T04:35:00.543Z'),
        id: '9d37fdaf-d11d-4ed6-b6b4-bba2091b84fc',
        lineitems: [],
        metadata: [],
        notes: 'Dedecor amo adfero torqueo quas.',
        paymentCollectionMethod: Shared\AccountingCreditmemoPaymentCollectionMethod::ChargeAutomatically,
        postedAt: Utils\Utils::parseDateTime('2025-12-02T00:29:13.815Z'),
        refundAmount: 0,
        refundReason: 'Virgo inflammatio quibusdam aestivus magnam.',
        refundedAt: Utils\Utils::parseDateTime('2023-10-23T00:35:36.814Z'),
        send: false,
        status: Shared\AccountingCreditmemoStatus::Paid,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2024-11-24T10:47:56.125Z'),
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
                id: '930c38a2-f505-493c-8c2d-f1d7f79a1458',
                mimeType: 'complectus',
                name: 'thesis',
            ),
        ],
        createdAt: Utils\Utils::parseDateTime('2023-09-20T01:47:01.571Z'),
        creditmemoNumber: 'ulterius',
        currency: 'MKD',
        discountAmount: 0,
        dueAt: Utils\Utils::parseDateTime('2023-10-18T04:35:00.543Z'),
        id: '9d37fdaf-d11d-4ed6-b6b4-bba2091b84fc',
        lineitems: [],
        metadata: [],
        notes: 'Dedecor amo adfero torqueo quas.',
        paymentCollectionMethod: Shared\AccountingCreditmemoPaymentCollectionMethod::ChargeAutomatically,
        postedAt: Utils\Utils::parseDateTime('2025-12-02T00:29:13.815Z'),
        refundAmount: 0,
        refundReason: 'Virgo inflammatio quibusdam aestivus magnam.',
        refundedAt: Utils\Utils::parseDateTime('2023-10-23T00:35:36.814Z'),
        send: false,
        status: Shared\AccountingCreditmemoStatus::Paid,
        taxAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2024-11-24T10:47:56.125Z'),
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