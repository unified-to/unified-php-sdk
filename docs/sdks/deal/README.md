# Deal

## Overview

### Available Operations

* [createCrmDeal](#createcrmdeal) - Create a deal
* [getCrmDeal](#getcrmdeal) - Retrieve a deal
* [listCrmDeals](#listcrmdeals) - List all deals
* [patchCrmDeal](#patchcrmdeal) - Update a deal
* [removeCrmDeal](#removecrmdeal) - Remove a deal
* [updateCrmDeal](#updatecrmdeal) - Update a deal

## createCrmDeal

Create a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="createCrmDeal" method="post" path="/crm/{connection_id}/deal" example="crm_deal" -->
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

$request = new Operations\CreateCrmDealRequest(
    crmDeal: new Shared\CrmDeal(
        amount: 98162,
        closedAt: Utils\Utils::parseDateTime('2024-03-08T23:25:43.305Z'),
        closingAt: Utils\Utils::parseDateTime('2025-08-26T23:07:45.498Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'IQD',
        description: 'Tabula cicuta sophismata comis tepidus sit cavus.',
        id: '087f3852-ba06-4ee2-8b34-611aeefc932d',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '5d73f47a-b78d-4b51-ab32-6db32befbeb2',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Frozen Silk Chicken',
        pipelines: [
            new Shared\CrmReference(
                id: 'cbfbe1ae-99a1-4bae-bf94-e91efc0334d3',
                name: 'trans',
            ),
        ],
        probability: 65,
        source: 'cubo',
        stages: [
            new Shared\CrmReference(
                id: 'c1444d5b-2858-4b82-b432-cd71986804b7',
                name: 'tubineus',
            ),
            new Shared\CrmReference(
                id: '0604dae8-f4e4-4c26-a823-83cfaa4ad339',
                name: 'adfectus',
            ),
        ],
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-09T04:37:53.253Z'),
        wonReason: 'Usque libero soleo.',
    ),
    connectionId: '<id>',
);

$response = $sdk->deal->createCrmDeal(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\CreateCrmDealRequest](../../Models/Operations/CreateCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\CreateCrmDealResponse](../../Models/Operations/CreateCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## getCrmDeal

Retrieve a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="getCrmDeal" method="get" path="/crm/{connection_id}/deal/{id}" -->
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

$request = new Operations\GetCrmDealRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deal->getCrmDeal(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                    | Type                                                                         | Required                                                                     | Description                                                                  |
| ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- | ---------------------------------------------------------------------------- |
| `$request`                                                                   | [Operations\GetCrmDealRequest](../../Models/Operations/GetCrmDealRequest.md) | :heavy_check_mark:                                                           | The request object to use for the request.                                   |

### Response

**[?Operations\GetCrmDealResponse](../../Models/Operations/GetCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## listCrmDeals

List all deals

### Example Usage

<!-- UsageSnippet language="php" operationID="listCrmDeals" method="get" path="/crm/{connection_id}/deal" -->
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

$request = new Operations\ListCrmDealsRequest(
    connectionId: '<id>',
);

$response = $sdk->deal->listCrmDeals(
    request: $request
);

if ($response->crmDeals !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\ListCrmDealsRequest](../../Models/Operations/ListCrmDealsRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\ListCrmDealsResponse](../../Models/Operations/ListCrmDealsResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## patchCrmDeal

Update a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="patchCrmDeal" method="patch" path="/crm/{connection_id}/deal/{id}" example="crm_deal" -->
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

$request = new Operations\PatchCrmDealRequest(
    crmDeal: new Shared\CrmDeal(
        amount: 98162,
        closedAt: Utils\Utils::parseDateTime('2024-03-08T23:25:43.308Z'),
        closingAt: Utils\Utils::parseDateTime('2025-08-26T23:07:45.507Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'IQD',
        description: 'Tabula cicuta sophismata comis tepidus sit cavus.',
        id: '43237f90-5952-4d78-b57a-72f6c08f5c1b',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '73f503db-b087-437a-993e-d8b47433634e',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Frozen Silk Chicken',
        pipelines: [
            new Shared\CrmReference(
                id: '19836d4d-94d7-4a9c-8501-55226beae27b',
                name: 'trans',
            ),
        ],
        probability: 65,
        source: 'cubo',
        stages: [
            new Shared\CrmReference(
                id: 'd8598369-76ed-4fc4-99bb-e540d68f4f4d',
                name: 'tubineus',
            ),
            new Shared\CrmReference(
                id: '8671df74-6e33-4d9f-a305-3794a8f857ff',
                name: 'adfectus',
            ),
        ],
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-09T04:37:53.258Z'),
        wonReason: 'Usque libero soleo.',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deal->patchCrmDeal(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                        | Type                                                                             | Required                                                                         | Description                                                                      |
| -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- | -------------------------------------------------------------------------------- |
| `$request`                                                                       | [Operations\PatchCrmDealRequest](../../Models/Operations/PatchCrmDealRequest.md) | :heavy_check_mark:                                                               | The request object to use for the request.                                       |

### Response

**[?Operations\PatchCrmDealResponse](../../Models/Operations/PatchCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## removeCrmDeal

Remove a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="removeCrmDeal" method="delete" path="/crm/{connection_id}/deal/{id}" -->
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

$request = new Operations\RemoveCrmDealRequest(
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deal->removeCrmDeal(
    request: $request
);

if ($response->statusCode === 200) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\RemoveCrmDealRequest](../../Models/Operations/RemoveCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\RemoveCrmDealResponse](../../Models/Operations/RemoveCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |

## updateCrmDeal

Update a deal

### Example Usage

<!-- UsageSnippet language="php" operationID="updateCrmDeal" method="put" path="/crm/{connection_id}/deal/{id}" example="crm_deal" -->
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

$request = new Operations\UpdateCrmDealRequest(
    crmDeal: new Shared\CrmDeal(
        amount: 98162,
        closedAt: Utils\Utils::parseDateTime('2024-03-08T23:25:43.308Z'),
        closingAt: Utils\Utils::parseDateTime('2025-08-26T23:07:45.507Z'),
        createdAt: Utils\Utils::parseDateTime('2023-07-04T12:48:48.470Z'),
        currency: 'IQD',
        description: 'Tabula cicuta sophismata comis tepidus sit cavus.',
        id: '43237f90-5952-4d78-b57a-72f6c08f5c1b',
        metadata: [
            new Shared\CrmMetadata(
                extraData: [
                    'display_name' => 'Custom Property',
                ],
                format: Shared\CrmMetadataFormat::Text,
                id: '73f503db-b087-437a-993e-d8b47433634e',
                namespace: 'custom',
                slug: 'custom_property',
                value: 'conatus',
            ),
        ],
        name: 'Frozen Silk Chicken',
        pipelines: [
            new Shared\CrmReference(
                id: '19836d4d-94d7-4a9c-8501-55226beae27b',
                name: 'trans',
            ),
        ],
        probability: 65,
        source: 'cubo',
        stages: [
            new Shared\CrmReference(
                id: 'd8598369-76ed-4fc4-99bb-e540d68f4f4d',
                name: 'tubineus',
            ),
            new Shared\CrmReference(
                id: '8671df74-6e33-4d9f-a305-3794a8f857ff',
                name: 'adfectus',
            ),
        ],
        tags: [
            'causa',
            'suus',
        ],
        updatedAt: Utils\Utils::parseDateTime('2024-10-09T04:37:53.258Z'),
        wonReason: 'Usque libero soleo.',
    ),
    connectionId: '<id>',
    id: '<id>',
);

$response = $sdk->deal->updateCrmDeal(
    request: $request
);

if ($response->crmDeal !== null) {
    // handle response
}
```

### Parameters

| Parameter                                                                          | Type                                                                               | Required                                                                           | Description                                                                        |
| ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- | ---------------------------------------------------------------------------------- |
| `$request`                                                                         | [Operations\UpdateCrmDealRequest](../../Models/Operations/UpdateCrmDealRequest.md) | :heavy_check_mark:                                                                 | The request object to use for the request.                                         |

### Response

**[?Operations\UpdateCrmDealResponse](../../Models/Operations/UpdateCrmDealResponse.md)**

### Errors

| Error Type          | Status Code         | Content Type        |
| ------------------- | ------------------- | ------------------- |
| Errors\SDKException | 4XX, 5XX            | \*/\*               |