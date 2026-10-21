# Order

## Overview

### Available Operations

* [createAccountingOrder](#createaccountingorder) - Create an order
* [createAssessmentOrder](#createassessmentorder) - Create an order
* [getAccountingOrder](#getaccountingorder) - Retrieve an order
* [getAssessmentOrder](#getassessmentorder) - Retrieve an order
* [listAccountingOrders](#listaccountingorders) - List all orders
* [patchAccountingOrder](#patchaccountingorder) - Update an order
* [patchAssessmentOrder](#patchassessmentorder) - Update an order
* [removeAccountingOrder](#removeaccountingorder) - Remove an order
* [updateAccountingOrder](#updateaccountingorder) - Update an order
* [updateAssessmentOrder](#updateassessmentorder) - Update an order

## createAccountingOrder

Create an order

### Example Usage

<!-- UsageSnippet language="php" operationID="createAccountingOrder" method="post" path="/accounting/{connection_id}/order" example="accounting_order" -->
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

$request = new Operations\CreateAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '7654 Treutel Square',
            city: 'Forrestport',
            countryCode: 'US',
            postalCode: '42190-3694',
            region: 'Maine',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: 'f86dd8f6-a014-47f6-9134-f31f328acb2f',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '4974 Beatty Corners',
            city: 'Alizeport',
            countryCode: 'US',
            postalCode: '56252',
            region: 'Alaska',
            regionCode: 'VT',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-08T07:18:52.782Z'),
    ),
    connectionId: '<id>',
);

$response = $sdk->order->createAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAccountingOrderRequest](../../Models/Operations/CreateAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAccountingOrderResponse](../../Models/Operations/CreateAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## createAssessmentOrder

Create an order

### Example Usage

<!-- UsageSnippet language="php" operationID="createAssessmentOrder" method="post" path="/assessment/{connection_id}/order" example="assessment_order" -->
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

$request = new Operations\CreateAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '<id>',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '46cb793e-1410-48a9-86d0-1a4baf1eeaa6',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'amy.kris.windler@icloud.com',
        ],
        profileFirstName: 'Amy',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Kris-Windler',
        profileName: 'Amy Kris-Windler',
        profileResumeUrl: 'https://enchanted-cycle.biz/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '(341) 425-5828',
        ],
        reference: 'ab',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://rowdy-fisherman.biz/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://cautious-turret.info',
        updatedAt: Utils\Utils::parseDateTime('2023-01-25T20:34:45.957Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
);

$response = $sdk->order->createAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\CreateAssessmentOrderRequest](../../Models/Operations/CreateAssessmentOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\CreateAssessmentOrderResponse](../../Models/Operations/CreateAssessmentOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAccountingOrder

Retrieve an order

### Example Usage

<!-- UsageSnippet language="php" operationID="getAccountingOrder" method="get" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\GetAccountingOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->getAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAccountingOrderRequest](../../Models/Operations/GetAccountingOrderRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAccountingOrderResponse](../../Models/Operations/GetAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getAssessmentOrder

Retrieve an order

### Example Usage

<!-- UsageSnippet language="php" operationID="getAssessmentOrder" method="get" path="/assessment/{connection_id}/order/{id}" -->
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

$request = new Operations\GetAssessmentOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->getAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                    | Type                                                                                         | Required                                                                                     | Description                                                                                  |
| -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------- |
| `$request`                                                                                   | [Operations\GetAssessmentOrderRequest](../../Models/Operations/GetAssessmentOrderRequest.md) | :heavy_check_mark:                                                                           | The request object to use for the request.                                                   |

### Response

**[?Operations\GetAssessmentOrderResponse](../../Models/Operations/GetAssessmentOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listAccountingOrders

List all orders

### Example Usage

<!-- UsageSnippet language="php" operationID="listAccountingOrders" method="get" path="/accounting/{connection_id}/order" -->
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

$request = new Operations\ListAccountingOrdersRequest(
    connectionId: '<id>',
);

$response = $sdk->order->listAccountingOrders(
    request: $request
);

if ($response->accountingOrders !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\ListAccountingOrdersRequest](../../Models/Operations/ListAccountingOrdersRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\ListAccountingOrdersResponse](../../Models/Operations/ListAccountingOrdersResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAccountingOrder

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAccountingOrder" method="patch" path="/accounting/{connection_id}/order/{id}" example="accounting_order" -->
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

$request = new Operations\PatchAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '7654 Treutel Square',
            city: 'Forrestport',
            countryCode: 'US',
            postalCode: '42190-3694',
            region: 'Maine',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: '4c2c437b-fa37-41d5-a10b-c8e726820b58',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '4974 Beatty Corners',
            city: 'Alizeport',
            countryCode: 'US',
            postalCode: '56252',
            region: 'Alaska',
            regionCode: 'VT',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-08T07:18:52.791Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->patchAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAccountingOrderRequest](../../Models/Operations/PatchAccountingOrderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAccountingOrderResponse](../../Models/Operations/PatchAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchAssessmentOrder

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="patchAssessmentOrder" method="patch" path="/assessment/{connection_id}/order/{id}" example="assessment_order" -->
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

$request = new Operations\PatchAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '<id>',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '5bfd87cf-d33d-4ceb-a9fc-922f4bbd52ec',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'amy.kris.windler@icloud.com',
        ],
        profileFirstName: 'Amy',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Kris-Windler',
        profileName: 'Amy Kris-Windler',
        profileResumeUrl: 'https://enchanted-cycle.biz/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '(341) 425-5828',
        ],
        reference: 'ab',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://rowdy-fisherman.biz/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://cautious-turret.info',
        updatedAt: Utils\Utils::parseDateTime('2023-01-25T20:34:45.967Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->patchAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                        | Type                                                                                             | Required                                                                                         | Description                                                                                      |
| ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ | ------------------------------------------------------------------------------------------------ |
| `$request`                                                                                       | [Operations\PatchAssessmentOrderRequest](../../Models/Operations/PatchAssessmentOrderRequest.md) | :heavy_check_mark:                                                                               | The request object to use for the request.                                                       |

### Response

**[?Operations\PatchAssessmentOrderResponse](../../Models/Operations/PatchAssessmentOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeAccountingOrder

Remove an order

### Example Usage

<!-- UsageSnippet language="php" operationID="removeAccountingOrder" method="delete" path="/accounting/{connection_id}/order/{id}" -->
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

$request = new Operations\RemoveAccountingOrderRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->removeAccountingOrder(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\RemoveAccountingOrderRequest](../../Models/Operations/RemoveAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\RemoveAccountingOrderResponse](../../Models/Operations/RemoveAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAccountingOrder

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAccountingOrder" method="put" path="/accounting/{connection_id}/order/{id}" example="accounting_order" -->
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

$request = new Operations\UpdateAccountingOrderRequest(
    accountingOrder: new Shared\AccountingOrder(
        billingAddress: new Shared\PropertyAccountingOrderBillingAddress(
            address1: '7654 Treutel Square',
            city: 'Forrestport',
            countryCode: 'US',
            postalCode: '42190-3694',
            region: 'Maine',
            regionCode: 'OR',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'GBP',
        id: '4c2c437b-fa37-41d5-a10b-c8e726820b58',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '4974 Beatty Corners',
            city: 'Alizeport',
            countryCode: 'US',
            postalCode: '56252',
            region: 'Alaska',
            regionCode: 'VT',
        ),
        status: Shared\AccountingOrderStatus::Authorized,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Sales,
        updatedAt: Utils\Utils::parseDateTime('2022-02-08T07:18:52.791Z'),
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->updateAccountingOrder(
    request: $request
);

if ($response->accountingOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAccountingOrderRequest](../../Models/Operations/UpdateAccountingOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAccountingOrderResponse](../../Models/Operations/UpdateAccountingOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateAssessmentOrder

Update an order

### Example Usage

<!-- UsageSnippet language="php" operationID="updateAssessmentOrder" method="put" path="/assessment/{connection_id}/order/{id}" example="assessment_order" -->
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

$request = new Operations\UpdateAssessmentOrderRequest(
    assessmentOrder: new Shared\AssessmentOrder(
        connectionId: '<id>',
        createdAt: Utils\Utils::parseDateTime('2021-09-18T10:33:57.803Z'),
        id: '5bfd87cf-d33d-4ceb-a9fc-922f4bbd52ec',
        metadata: [],
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'amy.kris.windler@icloud.com',
        ],
        profileFirstName: 'Amy',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Kris-Windler',
        profileName: 'Amy Kris-Windler',
        profileResumeUrl: 'https://enchanted-cycle.biz/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '(341) 425-5828',
        ],
        reference: 'ab',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 84,
        responseScore: 82,
        responseStatus: Shared\ResponseStatus::Rejected,
        responseUrl: 'https://rowdy-fisherman.biz/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://cautious-turret.info',
        updatedAt: Utils\Utils::parseDateTime('2023-01-25T20:34:45.967Z'),
        workspaceId: '<id>',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->order->updateAssessmentOrder(
    request: $request
);

if ($response->assessmentOrder !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                                          | Type                                                                                               | Required                                                                                           | Description                                                                                        |
| -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------- |
| `$request`                                                                                         | [Operations\UpdateAssessmentOrderRequest](../../Models/Operations/UpdateAssessmentOrderRequest.md) | :heavy_check_mark:                                                                                 | The request object to use for the request.                                                         |

### Response

**[?Operations\UpdateAssessmentOrderResponse](../../Models/Operations/UpdateAssessmentOrderResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |