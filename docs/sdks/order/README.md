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
            address1: '802 Bechtelar Park',
            address2: 'Apt. 436',
            city: 'Daniellaville',
            countryCode: 'US',
            postalCode: '36947',
            region: 'Wisconsin',
            regionCode: 'NY',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'USD',
        id: '445e9028-1570-4f8f-9d13-775af36237a6',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2022-04-05T16:02:41.218Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '9745 Betty Shore',
            city: 'South Alainaland',
            countryCode: 'US',
            postalCode: '25274-7654',
            region: 'New Hampshire',
            regionCode: 'LA',
        ),
        status: Shared\AccountingOrderStatus::Submitted,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Purchase,
        updatedAt: Utils\Utils::parseDateTime('2021-06-18T05:17:48.570Z'),
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
        id: '1499537e-e281-4923-954e-5811125006ae',
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'Cleta.Daugherty@gmail.com',
        ],
        profileFirstName: 'Amy',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Kris-Windler',
        profileName: 'Amy Kris-Windler',
        profileResumeUrl: 'https://enchanted-cycle.biz/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '(828) 263-1594 x5248',
        ],
        reference: 'ab',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 82,
        responseScore: 92,
        responseStatus: Shared\ResponseStatus::Failed,
        responseUrl: 'https://irresponsible-trench.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://cautious-turret.info',
        updatedAt: Utils\Utils::parseDateTime('2023-01-17T19:43:52.338Z'),
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
            address1: '802 Bechtelar Park',
            address2: 'Apt. 436',
            city: 'Daniellaville',
            countryCode: 'US',
            postalCode: '36947',
            region: 'Wisconsin',
            regionCode: 'NY',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'USD',
        id: 'bdf36a05-6b7f-4eef-9179-63e8d329f593',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2022-04-05T16:02:41.231Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '9745 Betty Shore',
            city: 'South Alainaland',
            countryCode: 'US',
            postalCode: '25274-7654',
            region: 'New Hampshire',
            regionCode: 'LA',
        ),
        status: Shared\AccountingOrderStatus::Submitted,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Purchase,
        updatedAt: Utils\Utils::parseDateTime('2021-06-18T05:17:48.576Z'),
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
        id: 'b8f60359-7023-4173-8480-808975596d56',
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'Cleta.Daugherty@gmail.com',
        ],
        profileFirstName: 'Amy',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Kris-Windler',
        profileName: 'Amy Kris-Windler',
        profileResumeUrl: 'https://enchanted-cycle.biz/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '(828) 263-1594 x5248',
        ],
        reference: 'ab',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 82,
        responseScore: 92,
        responseStatus: Shared\ResponseStatus::Failed,
        responseUrl: 'https://irresponsible-trench.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://cautious-turret.info',
        updatedAt: Utils\Utils::parseDateTime('2023-01-17T19:43:52.350Z'),
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
            address1: '802 Bechtelar Park',
            address2: 'Apt. 436',
            city: 'Daniellaville',
            countryCode: 'US',
            postalCode: '36947',
            region: 'Wisconsin',
            regionCode: 'NY',
        ),
        createdAt: Utils\Utils::parseDateTime('2020-11-20T03:46:49.837Z'),
        currency: 'USD',
        id: 'bdf36a05-6b7f-4eef-9179-63e8d329f593',
        lineitems: [],
        metadata: [],
        postedAt: Utils\Utils::parseDateTime('2022-04-05T16:02:41.231Z'),
        shippingAddress: new Shared\PropertyAccountingOrderShippingAddress(
            address1: '9745 Betty Shore',
            city: 'South Alainaland',
            countryCode: 'US',
            postalCode: '25274-7654',
            region: 'New Hampshire',
            regionCode: 'LA',
        ),
        status: Shared\AccountingOrderStatus::Submitted,
        totalAmount: 0,
        type: Shared\AccountingOrderType::Purchase,
        updatedAt: Utils\Utils::parseDateTime('2021-06-18T05:17:48.576Z'),
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
        id: 'b8f60359-7023-4173-8480-808975596d56',
        parameters: [],
        profileAddresses: [],
        profileDateOfBirth: '1989-07-22T16:18:37.650Z',
        profileEmails: [
            'Cleta.Daugherty@gmail.com',
        ],
        profileFirstName: 'Amy',
        profileGender: Shared\ProfileGender::NonBinary,
        profileLastName: 'Kris-Windler',
        profileName: 'Amy Kris-Windler',
        profileResumeUrl: 'https://enchanted-cycle.biz/',
        profileSocialMediaUrls: [],
        profileTelephones: [
            '(828) 263-1594 x5248',
        ],
        reference: 'ab',
        responseAttributes: [],
        responseDetails: [],
        responseDownloadUrls: [],
        responseMaxScore: 82,
        responseScore: 92,
        responseStatus: Shared\ResponseStatus::Failed,
        responseUrl: 'https://irresponsible-trench.info/',
        status: Shared\AssessmentOrderStatus::Rejected,
        targetUrl: 'https://cautious-turret.info',
        updatedAt: Utils\Utils::parseDateTime('2023-01-17T19:43:52.350Z'),
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