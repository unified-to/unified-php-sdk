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

Create a purchaseorder

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
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '37214 Tanya Walks',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'MA',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'ZMW',
        id: '262fcad1-323e-4be7-b741-847bd393e233',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-25T22:18:46.045Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '649 Maggio Overpass',
            city: 'Lake Jaylan',
            countryCode: 'US',
            postalCode: '99211-6547',
            region: 'North Carolina',
            regionCode: 'ID',
        ),
        status: Shared\AccountingPurchaseorderStatus::PartiallyRefunded,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-02-26T04:12:23.276Z'),
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

Retrieve a purchaseorder

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

List all purchaseorders

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

Update a purchaseorder

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
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '37214 Tanya Walks',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'MA',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'ZMW',
        id: '4d7017ab-2f09-44b9-b5ee-627e84101b1c',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-25T22:18:46.084Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '649 Maggio Overpass',
            city: 'Lake Jaylan',
            countryCode: 'US',
            postalCode: '99211-6547',
            region: 'North Carolina',
            regionCode: 'ID',
        ),
        status: Shared\AccountingPurchaseorderStatus::PartiallyRefunded,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-02-26T04:12:23.278Z'),
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

Remove a purchaseorder

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

Update a purchaseorder

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
        billingAddress: new Shared\PropertyAccountingPurchaseorderBillingAddress(
            address1: '37214 Tanya Walks',
            city: 'South Annabelleton',
            countryCode: 'US',
            postalCode: '30337',
            region: 'Nevada',
            regionCode: 'MA',
        ),
        categoryIds: [],
        createdAt: Utils\Utils::parseDateTime('2020-12-12T07:17:47.021Z'),
        currency: 'ZMW',
        id: '4d7017ab-2f09-44b9-b5ee-627e84101b1c',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2025-04-25T22:18:46.084Z'),
        shippingAddress: new Shared\PropertyAccountingPurchaseorderShippingAddress(
            address1: '649 Maggio Overpass',
            city: 'Lake Jaylan',
            countryCode: 'US',
            postalCode: '99211-6547',
            region: 'North Carolina',
            regionCode: 'ID',
        ),
        status: Shared\AccountingPurchaseorderStatus::PartiallyRefunded,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2021-02-26T04:12:23.278Z'),
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