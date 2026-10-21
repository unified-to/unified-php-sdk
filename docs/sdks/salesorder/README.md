# Salesorder

## Overview

### Available Operations

* [createAccountingSalesorder](#createaccountingsalesorder) - Create a salesorder
* [getAccountingSalesorder](#getaccountingsalesorder) - Retrieve a salesorder
* [listAccountingSalesorders](#listaccountingsalesorders) - List all salesorders
* [patchAccountingSalesorder](#patchaccountingsalesorder) - Update a salesorder
* [removeAccountingSalesorder](#removeaccountingsalesorder) - Remove a salesorder
* [updateAccountingSalesorder](#updateaccountingsalesorder) - Update a salesorder

## createAccountingSalesorder

Create a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingSalesorder" method="post" path="/accounting/{connection_id}/salesorder" example="accounting_salesorder" -->
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

$request = new Operations\CreateAccountingSalesorderRequest(
    accountingSalesorder: new Shared\AccountingSalesorder(
        billingAddress: new Shared\PropertyAccountingSalesorderBillingAddress(
            address1: '26530 Stroman Rest',
            address2: 'Suite 801',
            city: 'Pocatello',
            countryCode: 'US',
            postalCode: '05015-8546',
            region: 'Louisiana',
            regionCode: 'MO',
        ),
        categoryIds: [],
        closedAt: Utils\Utils::parseDateTime('2023-03-25T12:57:23.155Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        currency: 'USD',
        discountAmount: 0,
        fees: [],
        fulfillmentType: Shared\FulfillmentType::Other,
        id: '2ee1a550-d200-4b90-84de-64861a01cf0a',
        lineitems: [],
        metadata: [],
        orderNumber: '832663',
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        refundedAmount: 0,
        salesChannel: 'Wholesale',
        serviceChargeAmount: 0,
        shippingAddress: new Shared\PropertyAccountingSalesorderShippingAddress(
            address1: '69878 Bradley Mill',
            city: 'Port Matildestad',
            countryCode: 'US',
            postalCode: '07989-2148',
            region: 'Arkansas',
            regionCode: 'AK',
        ),
        status: Shared\AccountingSalesorderStatus::Paid,
        subtotalAmount: 0,
        taxAmount: 0,
        tipAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-03-25T12:57:23.155Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->salesorder->createAccountingSalesorder(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\CreateAccountingSalesorderRequest](../../Models/Operations/CreateAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\CreateAccountingSalesorderResponse](../../Models/Operations/CreateAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingSalesorder

Retrieve a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingSalesorder" method="get" path="/accounting/{connection_id}/salesorder/{id}" -->
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

$request = new Operations\GetAccountingSalesorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesorder->getAccountingSalesorder(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                              | Type                                                                                                   | Required                                                                                               | Description                                                                                            |
| ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                             | [Operations\GetAccountingSalesorderRequest](../../Models/Operations/GetAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                     | The request object to use for the request.                                                             |

### Response

**[?Operations\GetAccountingSalesorderResponse](../../Models/Operations/GetAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingSalesorders

List all salesorders

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingSalesorders" method="get" path="/accounting/{connection_id}/salesorder" -->
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

$request = new Operations\ListAccountingSalesordersRequest(
    connectionId: '<id>',
);

$response = $sdk->salesorder->listAccountingSalesorders(
    request: $request
);

if ($response->accountingSalesorders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\ListAccountingSalesordersRequest](../../Models/Operations/ListAccountingSalesordersRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\ListAccountingSalesordersResponse](../../Models/Operations/ListAccountingSalesordersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingSalesorder

Update a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingSalesorder" method="patch" path="/accounting/{connection_id}/salesorder/{id}" example="accounting_salesorder" -->
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

$request = new Operations\PatchAccountingSalesorderRequest(
    accountingSalesorder: new Shared\AccountingSalesorder(
        billingAddress: new Shared\PropertyAccountingSalesorderBillingAddress(
            address1: '26530 Stroman Rest',
            address2: 'Suite 801',
            city: 'Pocatello',
            countryCode: 'US',
            postalCode: '05015-8546',
            region: 'Louisiana',
            regionCode: 'MO',
        ),
        categoryIds: [],
        closedAt: Utils\Utils::parseDateTime('2023-03-25T12:57:23.174Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        currency: 'USD',
        discountAmount: 0,
        fees: [],
        fulfillmentType: Shared\FulfillmentType::Other,
        id: '81444e74-2438-4d48-a12a-446390d8c063',
        lineitems: [],
        metadata: [],
        orderNumber: '832663',
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        refundedAmount: 0,
        salesChannel: 'Wholesale',
        serviceChargeAmount: 0,
        shippingAddress: new Shared\PropertyAccountingSalesorderShippingAddress(
            address1: '69878 Bradley Mill',
            city: 'Port Matildestad',
            countryCode: 'US',
            postalCode: '07989-2148',
            region: 'Arkansas',
            regionCode: 'AK',
        ),
        status: Shared\AccountingSalesorderStatus::Paid,
        subtotalAmount: 0,
        taxAmount: 0,
        tipAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-03-25T12:57:23.174Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesorder->patchAccountingSalesorder(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                  | Type                                                                                                       | Required                                                                                                   | Description                                                                                                |
| ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                 | [Operations\PatchAccountingSalesorderRequest](../../Models/Operations/PatchAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                         | The request object to use for the request.                                                                 |

### Response

**[?Operations\PatchAccountingSalesorderResponse](../../Models/Operations/PatchAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingSalesorder

Remove a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingSalesorder" method="delete" path="/accounting/{connection_id}/salesorder/{id}" -->
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

$request = new Operations\RemoveAccountingSalesorderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesorder->removeAccountingSalesorder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\RemoveAccountingSalesorderRequest](../../Models/Operations/RemoveAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\RemoveAccountingSalesorderResponse](../../Models/Operations/RemoveAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingSalesorder

Update a salesorder

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingSalesorder" method="put" path="/accounting/{connection_id}/salesorder/{id}" example="accounting_salesorder" -->
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

$request = new Operations\UpdateAccountingSalesorderRequest(
    accountingSalesorder: new Shared\AccountingSalesorder(
        billingAddress: new Shared\PropertyAccountingSalesorderBillingAddress(
            address1: '26530 Stroman Rest',
            address2: 'Suite 801',
            city: 'Pocatello',
            countryCode: 'US',
            postalCode: '05015-8546',
            region: 'Louisiana',
            regionCode: 'MO',
        ),
        categoryIds: [],
        closedAt: Utils\Utils::parseDateTime('2023-03-25T12:57:23.174Z'),
        createdAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        currency: 'USD',
        discountAmount: 0,
        fees: [],
        fulfillmentType: Shared\FulfillmentType::Other,
        id: '81444e74-2438-4d48-a12a-446390d8c063',
        lineitems: [],
        metadata: [],
        orderNumber: '832663',
        payments: [],
        postedAt: Utils\Utils::parseDateTime('2022-01-17T16:11:50.310Z'),
        refundedAmount: 0,
        salesChannel: 'Wholesale',
        serviceChargeAmount: 0,
        shippingAddress: new Shared\PropertyAccountingSalesorderShippingAddress(
            address1: '69878 Bradley Mill',
            city: 'Port Matildestad',
            countryCode: 'US',
            postalCode: '07989-2148',
            region: 'Arkansas',
            regionCode: 'AK',
        ),
        status: Shared\AccountingSalesorderStatus::Paid,
        subtotalAmount: 0,
        taxAmount: 0,
        tipAmount: 0,
        totalAmount: 0,
        updatedAt: Utils\Utils::parseDateTime('2023-03-25T12:57:23.174Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->salesorder->updateAccountingSalesorder(
    request: $request
);

if ($response->accountingSalesorder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                                    | Type                                                                                                         | Required                                                                                                     | Description                                                                                                  |
| ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------------------ |
| `$request`                                                                                                   | [Operations\UpdateAccountingSalesorderRequest](../../Models/Operations/UpdateAccountingSalesorderRequest.md) | :heavy_check_mark:                                                                                           | The request object to use for the request.                                                                   |

### Response

**[?Operations\UpdateAccountingSalesorderResponse](../../Models/Operations/UpdateAccountingSalesorderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |