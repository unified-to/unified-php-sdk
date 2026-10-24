# Purchaseorder

## Overview

### Available Operations

* [createAccountingPurchaseorder](#createaccountingpurchaseorder) - Create a purchaseorder
* [getAccountingPurchaseorder](#getaccountingpurchaseorder) - Retrieve a purchaseorder
* [listAccountingPurchaseorders](#listaccountingpurchaseorders) - List all purchaseorders
* [patchAccountingPurchaseorder](#patchaccountingpurchaseorder) - Update a purchaseorder
* [removeAccountingPurchaseorder](#removeaccountingpurchaseorder) - Remove a purchaseorder
* [updateAccountingPurchaseorder](#updateaccountingpurchaseorder) - Update a purchaseorder

## createAccountingPurchaseorder

Creates a AccountingPurchaseorder. Provide the unified AccountingPurchaseorder fields in the request body; they are mapped to the provider's API. Returns the created AccountingPurchaseorder.

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingPurchaseorder" method="post" path="/accounting/{connection_id}/purchaseorder" example="accounting_purchaseorder" -->
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

$request = new Operations\CreateAccountingPurchaseorderRequest(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(
        attachments: [],
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '72142 Willow Street',
            address2: 'Apt. 967',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'FL',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'EUR',
        id: '051c2c70-89bc-4a01-ae4b-e6aeba93bef6',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '76494 Medhurst Club',
            city: 'Kshlerinfurt',
            countryCode: 'US',
            postalCode: '92116-5474',
            region: 'Oregon',
            regionCode: 'WY',
        ),
        status: Shared\AccountingPurchaseorderStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-08-11T13:44:46.045Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->purchaseorder->createAccountingPurchaseorder(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\CreateAccountingPurchaseorderRequest](../../Models/Operations/CreateAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\CreateAccountingPurchaseorderResponse](../../Models/Operations/CreateAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingPurchaseorder

Retrieves a single AccountingPurchaseorder by its `id`. Obtain `id` values from the corresponding list endpoint. Use `fields` to return only the fields you need.

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingPurchaseorder" method="get" path="/accounting/{connection_id}/purchaseorder/{id}" -->
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

$request = new Operations\GetAccountingPurchaseorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchaseorder->getAccountingPurchaseorder(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\GetAccountingPurchaseorderRequest](../../Models/Operations/GetAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\GetAccountingPurchaseorderResponse](../../Models/Operations/GetAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingPurchaseorders

Returns a list of AccountingPurchaseorders. Narrow the results with the query parameters before paging, then page through them with `limit` and `offset` (the default and maximum page size depend on the integration). Use `fields` to return only the fields you need and reduce the response size. When the integration supports a total count, it is returned in the `X-Total-Count` response header. Use each item's `id` to retrieve, update, or delete it where those operations are supported.

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingPurchaseorders" method="get" path="/accounting/{connection_id}/purchaseorder" -->
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

$request = new Operations\ListAccountingPurchaseordersRequest(
    connectionId: '<id>',
);

$response = $sdk->purchaseorder->listAccountingPurchaseorders(
    request: $request
);

if ($response->accountingPurchaseorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\ListAccountingPurchaseordersRequest](../../Models/Operations/ListAccountingPurchaseordersRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\ListAccountingPurchaseordersResponse](../../Models/Operations/ListAccountingPurchaseordersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingPurchaseorder

Updates the AccountingPurchaseorder identified by `id`. Provide the unified AccountingPurchaseorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingPurchaseorder" method="patch" path="/accounting/{connection_id}/purchaseorder/{id}" example="accounting_purchaseorder" -->
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

$request = new Operations\PatchAccountingPurchaseorderRequest(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(
        attachments: [],
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '72142 Willow Street',
            address2: 'Apt. 967',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'FL',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'EUR',
        id: '1313b6ae-915f-4e41-aa86-44dc8fe6be10',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '76494 Medhurst Club',
            city: 'Kshlerinfurt',
            countryCode: 'US',
            postalCode: '92116-5474',
            region: 'Oregon',
            regionCode: 'WY',
        ),
        status: Shared\AccountingPurchaseorderStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-08-11T13:44:46.051Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchaseorder->patchAccountingPurchaseorder(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                        | Type                                                                                                             | Required                                                                                                         | Description                                                                                                      |
| ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                       | [Operations\PatchAccountingPurchaseorderRequest](../../Models/Operations/PatchAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                               | The request object to use for the request.                                                                       |

### Response

**[?Operations\PatchAccountingPurchaseorderResponse](../../Models/Operations/PatchAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingPurchaseorder

Deletes the AccountingPurchaseorder identified by `id`.

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingPurchaseorder" method="delete" path="/accounting/{connection_id}/purchaseorder/{id}" -->
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

$request = new Operations\RemoveAccountingPurchaseorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchaseorder->removeAccountingPurchaseorder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\RemoveAccountingPurchaseorderRequest](../../Models/Operations/RemoveAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\RemoveAccountingPurchaseorderResponse](../../Models/Operations/RemoveAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingPurchaseorder

Updates the AccountingPurchaseorder identified by `id`. Provide the unified AccountingPurchaseorder fields to change in the request body.

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingPurchaseorder" method="put" path="/accounting/{connection_id}/purchaseorder/{id}" example="accounting_purchaseorder" -->
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

$request = new Operations\UpdateAccountingPurchaseorderRequest(
    accountingPurchaseorder: new Shared\AccountingPurchaseorder(
        attachments: [],
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '72142 Willow Street',
            address2: 'Apt. 967',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'FL',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'EUR',
        id: '1313b6ae-915f-4e41-aa86-44dc8fe6be10',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '76494 Medhurst Club',
            city: 'Kshlerinfurt',
            countryCode: 'US',
            postalCode: '92116-5474',
            region: 'Oregon',
            regionCode: 'WY',
        ),
        status: Shared\AccountingPurchaseorderStatus::Submitted,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-08-11T13:44:46.051Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->purchaseorder->updateAccountingPurchaseorder(
    request: $request
);

if ($response->accountingPurchaseorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                          | Type                                                                                                               | Required                                                                                                           | Description                                                                                                        |
| ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                         | [Operations\UpdateAccountingPurchaseorderRequest](../../Models/Operations/UpdateAccountingPurchaseorderRequest.md) | :heavy_check_mark:                                                                                                 | The request object to use for the request.                                                                         |

### Response

**[?Operations\UpdateAccountingPurchaseorderResponse](../../Models/Operations/UpdateAccountingPurchaseorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |